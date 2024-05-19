<?php
/**
 * Use this file for creating redirects
 * @author Sumedh Thakar, Laurent (dl)
 */

/**
 * Add new redirects at the top
 * since most redirects are time sensitive for marketing
 * older redirects should get less traffic
 * 
 * Add redirects with more conditional logic near the end
 * @author Keith Shaw
 */

/**
 * A report on the use of these URLs would be nice.
 * @author Keith Shaw
 */

/**
 * These should be moved to the web server
 * @author Keith Shaw
 */


/**
 * Validate URL
 * Send a 400 Bad Request response for malformed URLs
 * @author Keith Shaw
 */
$components = @parse_url($_SERVER['REQUEST_URI']);
if ($components === FALSE) {
	header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request');
	header('Content-Length: 0');
	exit;
}


/**
 * Validate Referrer URL
 * Send a 400 Bad Request response for invalid Referrer URLs
 * @author Keith Shaw
 */
if (isset($_SERVER['HTTP_REFERER'])) {
	if (! empty($_SERVER['HTTP_REFERER'])) {
		if (@parse_url($_SERVER['HTTP_REFERER']) === FALSE) {
			header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request');
			header('Content-Length: 0');
			exit;
		}
	}
}


/**
 * handle one special case very quickly
 * since this old URL contained an open relay it is a popular target for bots
 * responding with a 4xx code causes these to fill up Google Crawl Errors, so
 * just redirect all of them to our resources page with a long cache time
 */
if (isset($components['path']) && $components['path'] === '/elqNow/elqRedir.htm') {
	header($_SERVER['SERVER_PROTOCOL'] . ' 200 OK');
	header("Cache-Control: max-age=1009822464");
	header("Expires: Mon, 31 May 2049 00:00:00 GMT");
	header('X-Robots-Tag: noindex');
	header('Content-Length: 0');
	exit;
}


/**
 * helper to extract variables from the query string
 * keys and values are return as an associative array
 * @author Keith Shaw
 */
function extract_query_variables($query_string) {
	$query_array = array();
	if ($query_string !== null && strlen($query_string) > 0) {
		if ($query_string[0] === '?') {
			$query_string = substr($query_string, 1);
		}
		$parameters = preg_split('/(&|;)/', $query_string);
		foreach ($parameters as $parameter) {
			$equal_sign_position = strpos($parameter, '=');
			if ($equal_sign_position !== FALSE) {
				$key_raw = substr($parameter, 0, $equal_sign_position);
				if ($key_raw !== FALSE && $key_raw !== '') {
					$key = urldecode($key_raw);
					$value = $value_raw = '';
					if (strlen($parameter) > $equal_sign_position+1) {
						$value_raw = substr($parameter, ($equal_sign_position+1));
						if ($value_raw !== FALSE) {
							$value = urldecode($value_raw);
						}
					}
					$query_array[$key] = $value;
				}
			}
		}
	}
	return $query_array;
}


/**
 * helper to build URL from array of components
 * this is the complement to parse_url
 * @author Keith Shaw
 */
function http_build_url($components = array()) {
	$url = '';
	if (isset($components['scheme'])) {
		$url .= $components['scheme'] . '://';
	}
	if (isset($components['host'])) {
		if (isset($components['user'])) {
			$url .= $components['user'];
			if (isset($components['pass'])) {
				$url .= ':' . $components['pass'];
			}
			$url .= '@';
		}
		$url .= $components['host'];
		if (isset($components['port'])) {
			$url .= ':' . $components['port'];
		}
	}
	if (isset($components['path'])) {
		$url .= $components['path'];
	}
	if (isset($components['query'])) {
		$query = extract_query_variables($components['query']);
		foreach ($query as $key => $q) {
			unset($query[$key]);
			$key = rawurlencode(rawurldecode($key));
			$query[$key] = rawurlencode(rawurldecode($q));
		}
		$components['query'] = http_build_query($query);
		if (!empty($components['query'])) {
			$url .= '?' . $components['query'];
		}
	}
	if (isset($components['fragment'])) {
		$url .= '#' . $components['fragment'];
	}
	return $url;
}


/**
 * redirects that uses headers (if possible) + meta http + javascript:
 * should be the most compatible/fail safe possible
 * updated to preserve the query parameters from a 404
 * @author Keith Shaw
 */
function redirect($destination_url, $status_code=301, $include_query=true) {
	global $request_query;
	
	// parse and re-generate destination url to sanitize input and protect against XSS
	$components = @parse_url($destination_url);
	if ($components === FALSE) {
		if (PROD_MODE) {
			header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request');
			header('Content-Length: 0');
			exit;
		} else {
			header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request');
			echo json_encode(array(
				'ERROR' => 'Failed to parse destination URL.',
				'DESTINATION_URL' => $destination_url
			));
			exit;
		}
	}
	if (isset($request_query) && !empty($request_query) && $include_query) {
		if (isset($components['query'])) {
			$components['query'] = http_build_query(array_merge($request_query, extract_query_variables($components['query'])));
		} else {
			$components['query'] = http_build_query($request_query);
		}
	}
	$destination_url = http_build_url($components);
	$status_code_title = '300 Multiple Choices';
	$status_code_description = 'The requested resource corresponds to any one of a set of representations, each with its own specific location, and agent- driven negotiation information (section 12) is being provided so that the user (or user agent) can select a preferred representation and redirect its request to that location.';
	switch ($status_code) {
		case 302:
		$status_code_header = '302 Found';
		$status_code_description = 'The requested resource resides temporarily under a different URI.';
		$max_age = 3600;
		$experation_date = date("r", time() + $max_age);
		break;
		case 301:
		default:
		$status_code_header = '301 Moved Permanently';
		$status_code_description = 'The requested resource has been assigned a new permanent URI and any future references to this resource SHOULD use one of the returned URIs.';
		$max_age = 86400;
		$experation_date = date("r", time() + $max_age);
		break;
	}
	if (!headers_sent()) {
		header($_SERVER['SERVER_PROTOCOL'] . ' ' . $status_code_header);
		header("Location: $destination_url", true, $status_code);
		header("Cache-Control: max-age=$max_age");
		header("Expires: $experation_date"); // Wed, 22 Mar 2017 01:09:40 GMT
	}
	// properly encode input to protect against XSS
	$status_code_header_html = htmlentities($status_code_header, (ENT_COMPAT | ENT_HTML401), 'UTF-8', true);
	$status_code_description_html = htmlentities($status_code_description, (ENT_COMPAT | ENT_HTML401), 'UTF-8', true);
	$destination_url_html = htmlentities($destination_url, (ENT_COMPAT | ENT_HTML401), 'UTF-8', true);
	$destination_url_js = json_encode($destination_url);
	// It does not hurt to put both, on the contrary
	echo <<< HTML
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="0; url=$destination_url_html" />
	<script> document.location = $destination_url_js; </script>
	<title>$status_code_header_html</title>
</head>
<body>
<noscript>
	<h1>
		$status_code_header_html
	</h1>
	<p>
		$status_code_description_html
	</p>
	<p>
		If you are not automatically redirected, please click the link below.
	</p>
	<p>
		<a href="$destination_url_html">$destination_url_html</a>
	</p>
</noscript>
</body>
</html>

HTML;
	exit;
}


/**
 * helper function for temporary redirects
 */
function found($destination_url, $include_query=true) {
	redirect($destination_url, 302, $include_query);
}


/**
 * helper function for permanent redirects
 */
function moved_permanently($destination_url, $include_query=true) {
	redirect($destination_url, 301, $include_query);
}


/**
 * The redirect function has been modified to check for the global
 * $request_query variable. Here, I setup the $request_query variable to
 * whatever comes in on the REQUEST_URI variable. The primary purpose of this
 * modification is to preserve the query parameters used for lead gen.
 *
 * @author Keith Shaw
 */
$request_query = array();
if (isset($components['query'])) {
	$request_query = extract_query_variables($components['query']);
}

if (isset($components['path'])) {
	$path = trim(strtolower($components['path']), '/');

	// remove whitespace left-to-right mark from some URLs
	$path = str_replace('%e2%80%8e', '', $path);

	// include file with switch cases for 302 found redirects
	require('404_notfound_case_302_found.php');

	// include file with switch cases for 301 moved permanently redirects
	require('404_notfound_case_301_moved_permanently.php');

	/**
	 * Check if the path starts with a keyword
	 */
	if (strpos($path, 'customers/casestud') === 0) {
		found('/customers/#success-stories');
	}
	if (strpos($path, 'customers/testimonials') === 0) {
		found('/customers/#testimonials');
	}
	if (strpos($path, 'videos/testimonials') === 0) {
		found('/customers/#testimonials');
	}
	if (strpos($path, 'xml') === 0) {
		found('/customers/');
	}
	if (strpos($path, 'alert') === 0) {
		found('/research/security-alerts/');
	}
	if (strpos($path, 'events') === 0) {
		found('/company/events/');
	}
	if (strpos($path, 'compref') === 0) {
		found('https://lps.qualys.com/subscription-preference.html');
	}
	if (strpos($path, 'dummies') === 0) {
		found('/forms/ebook/vulnerability-management-for-dummies/');
	}
	if (strpos($path, 'gosecure') === 0) {
		found('/forms/trials/secure-seal/');
	}
	if (strpos($path, 'pci') === 0) {
		found('/suite/pci-compliance/');
	}
	if (strpos($path, 'partners') === 0) {
		found('/partners/');
	}
	if (strpos($path, 'support') === 0) {
		found('/support/');
	}
	if (strpos($path, 'support/apphelp/qualys_secure') === 0) {
		moved_permanently('/suite/secure-seal/');
	}
	if (strpos($path, 'support/apphelp/malware') === 0) {
		moved_permanently('/suite/malware-detection/');
	}

	// redirect old articles on vuln.com to our current top 10 vulns
	if (strpos($path, 'research/top10/article.pl') === 0) {
		moved_permanently('/research/top10/');
	}

	if (strpos($path, 'documentation/api') === 0) {
		moved_permanently('https://community.qualys.com/community/developer');
	}

	// redirect all old case studies with id parameters in the query
	// note, redirect without query parameters
	if ($path === 'customers/casestudies/view') {
		if (isset($request_query['id'])) {
			$customer_id = $request_query['id'];
			// prevent customer id from showing up on the redirected URL
			unset($request_query['id']);
			switch ($customer_id) {
				case 'americanstate':
				moved_permanently('/customers/success-stories/american-state-bank-relies-on-qualysguard/');
				break;
				case 'bankofthewest':
				moved_permanently('/customers/success-stories/bank-of-the-west-major-financial-institution-protects-information/');
				break;
				case 'ebay':
				moved_permanently('/customers/success-stories/ebay-securing-worlds-online-marketplace-qualysguard/');
				break;
				case 'floridadoh':
				moved_permanently('/customers/success-stories/florida-department-of-health/');
				break;
				case 'scbank':
				moved_permanently('/customers/success-stories/standard-chartered-bank-underpinning-risk-driven-strategy/');
				break;
				case 'firstbank':
				moved_permanently('/customers/success-stories/first-bank-and-trust/');
				break;
				case 'rightnow':
				moved_permanently('/customers/success-stories/risk-reduction-rightnow-technologies-finds-better-way/');
				break;
				case 'nybot':
				moved_permanently('/customers/success-stories/nybot-maintaining-business-continuity/');
				break;
				case 'globix':
				case 'rrdonnelley':
				default:
				moved_permanently('/customers/');
				break;
			}
		}
	}

	// some pages we want to return a 410 Gone response
	switch ($path) {
		case 'forms/trials/iframe':
		case 'forms/trials/iframe/confirm':
		case 'forms/trials/pci-compliance-iframe':
		case 'forms/trials/pci-compliance-iframe/confirm':
			header($_SERVER['SERVER_PROTOCOL'] . ' 410 Gone');
			header('Content-Length: 0');
			exit;
		break;
	}

}


/**
 * Old way of redirecting, these should be migrated as time permits
 */

$requested_raw = trim($_SERVER['REQUEST_URI'], '/');
$requested = strtolower($requested_raw);

if ((strlen($requested) > 23) && (strpos($requested, 'customers/presentations') === 0)) {
	moved_permanently('/customers/presentations/');
}
if ((strlen($requested) > 16) && (strpos($requested, 'company/contacts') === 0)) {
	moved_permanently('/company/contacts/');
}

// the following condition MUST come before the one after it in order to work
if (preg_match('/^forms\/trials\/qualysguard_free_scan[^\?]*(\?.*)?/', $requested, $matches)) {
	if (isset($matches[1])) {
		moved_permanently('/forms/freescan/'.$matches[1]);
	} else {
		moved_permanently('/forms/freescan/');
	}
}
if ((strpos($requested, 'products') === 0) || (strpos($requested, 'webservices') === 0) || (strpos($requested, 'services') === 0) || (strpos($requested, 'demo') === 0) || (strpos($requested, '@customer') === 0) || (strpos($requested, 'checkmark') === 0)) {
	moved_permanently('/subscriptions/enterprise/');
}
if (preg_match('/^research\/rnd\/(.*)/', $requested, $matches)) {
	moved_permanently('/research/'.$matches[1]);
}

/* rewrite news release URLs from benelux to netherlands */
if (preg_match('/^company\/newsroom\/news-releases\/benelux\/(.*)?/', $requested, $matches)) {
	if (empty($matches[1])) {
		moved_permanently("/company/newsroom/news-releases/netherlands/");
	} else {
		moved_permanently("/company/newsroom/news-releases/netherlands/$matches[1]");
	}
}
if (strpos($requested, '/company/newsroom/news-releases/benelux') === 0) {
	moved_permanently("/company/newsroom/news-releases/netherlands/");
}

/* rewrite news release urls generated by bricolage
 * to news release urls generated by quazam */
if (preg_match('/^company\/newsroom\/newsreleases\/(\w{2,7})\/print\/(\d{4}-\d{2}-\d{2}[a-z]?)/', $requested, $matches)) {
	moved_permanently('/company/newsroom/news-releases/'.$matches[1].'/'.$matches[2].'/');
}
if (preg_match('/^company\/newsroom\/newsreleases\/(\w{2,7})\/view\/(\d{4}-\d{2}-\d{2}[a-z]?)/', $requested, $matches)) {
	moved_permanently('/company/newsroom/news-releases/'.$matches[1].'/'.$matches[2].'/');
}
if (preg_match('/^company\/newsroom\/newsreleases\/(\w{2,7})\/(\d{4})/', $requested, $matches)) {
	moved_permanently('/company/newsroom/news-releases/'.$matches[1].'/'.$matches[2].'/');
}
if (preg_match('/^company\/newsroom\/newsreleases\/(\w{2,7})\/\?view=(\d{4})(\d{2})(\d{2}[a-z]?)/', $requested, $matches)) {
	moved_permanently('/company/newsroom/news-releases/'.$matches[1].'/'.$matches[2].'-'.$matches[3].'-'.$matches[4].'/');
}
if (preg_match('/^company\/newsroom\/newsreleases\/(\w{2,7})/', $requested, $matches)) {
	moved_permanently('/company/newsroom/news-releases/'.$matches[1].'/');
}

/* rewrite security alert URLs in the details folder */
if (preg_match('/^research\/security-alerts\/details\/(\d{4}-\d{2}-\d{2})\/(\w+)/', $requested, $matches)) {
	moved_permanently("/research/security-alerts/$matches[1]/$matches[2]/");
}

/* rewrite old security alerts URLs to new URL format */
if (preg_match('/^research\/alerts\/view.php\/(\d{4}-\d{2}-\d{2})-?([1-3]?)/', $requested, $matches)) {
	$vendor = "";
	switch ($matches[2]) {
		case '1':
		case '':
			$vendor = "microsoft/";
			break;
		case '2':
			$vendor = "adobe/";
			break;
		case '3':
			$vendor = "#bulletins-oracle";
			break;
	}
	if ($matches[1] == "2012-06-12" && $matches[2] == "1") {
		$vendor = "#bulletins-microsoft";
	}
	if ($matches[1] == "2012-06-12" && $matches[2] == "2") {
		$vendor = "#bulletins-apple";
	}
	if ($matches[1] == "2013-02-12" && $matches[2] == "2") {
		$vendor = "#bulletins-adobe";
	}
	if ($matches[1] == "2012-07-10") {
		$vendor = "";
	}
	moved_permanently('/research/security-alerts/'.$matches[1].'/'.$vendor);
}

if (preg_match('/^research\/alerts\/view.php\/?/', $requested)) {
	moved_permanently('/research/security-alerts/');
}
/* rewrite media coverage urls generated by bricolage
 * to media coverage urls generated by quazam */
if (preg_match('/^company\/newsroom\/mediacoverage\/(\w{2,7})\/\?year=(\d{4})/', $requested, $matches)) {
	moved_permanently('/company/newsroom/media-coverage/'.$matches[1].'/'.$matches[2].'/');
}
if (preg_match('/^company\/newsroom\/mediacoverage\/(\w{2,7})/', $requested, $matches)) {
	moved_permanently('/company/newsroom/media-coverage/'.$matches[1].'/');
}

/* rewrite old tradeshow urls to new, shorter url */
if (preg_match('/^company\/events\/tradeshows\/(2016|2017)\/(.*)?/', $requested, $matches)) {
	found("/" . $matches[1] . "/" .  $matches[2]);
}

/* rewrite old trade show urls to latest show url */
if (preg_match('/^company\/events\/tradeshows\/qsc(\d{2})?\/?/', $requested, $matches) || preg_match('/^company\/events\/tradeshows\/emea-qsc.*/', $requested, $matches) || preg_match('/^company\/events\/qualys-secure.*/', $requested, $matches) || preg_match('/^company\/events\/tradeshows\/\d{4}\/qsc.*/', $requested, $matches) || preg_match('/^\d{4}\/qsc/', $requested, $matches)) {
	found('/qsc');
}
if (preg_match('/^company\/events\/tradeshows\/rsa\d{2}\/?/', $requested, $matches) || preg_match('/^\d{4}\/rsac/', $requested, $matches)) {
	found('/rsac');
}
if (preg_match('/^company\/events\/tradeshows\/blackhat\d{2}\/?/', $requested, $matches) || preg_match('/^\d{4}\/blackhat/', $requested, $matches)) {
	found('/blackhat');
}
if (preg_match('/^company\/events\/tradeshows\/infosec\d{2}\/?/', $requested, $matches) || preg_match('/^\d{4}\/infosec/', $requested, $matches)) {
	found('/infosec');
}

/* redirect any missing trade show URL to the events calendar */
/* MUST be after redirects for each tradeshow */
if (strpos($requested, 'company/events/tradeshows') === 0) {
	found('/company/events/');
}

/* redirect requests for fonts to CloudFront */
if (preg_match('/^asset\/fonts\/(.*)/', $requested, $matches)) {
	moved_permanently('https://d1dejaj6dcqv24.cloudfront.net/fonts/' . $matches[1]);
}

/* redirect requests for /docs/qualysguard-XXXX to /docs/qualys-XXXX */
if (preg_match('/^docs\/qualysguard([a-z0-9-\.]*)/', $requested, $matches)) {
	moved_permanently('/docs/qualys' . $matches[1]);
}

/* redirect requests for /docs/version/X/Y to /docs/Y */
if (preg_match('/^docs\/version\/[0-9\.]*\/([a-z0-9-\.]*)/', $requested, $matches)) {
	moved_permanently('/docs/' . $matches[1]);
}

/* redirect requests for /try/* to /forms/* */
if (preg_match('/^try\/([a-z0-9-\.\/]*)/', $requested, $matches)) {
	moved_permanently('/forms/' . $matches[1]);
}

/* redirect benelux media coverage to netherlands */
if (preg_match('/^company\/newsroom\/media-coverage\/benelux\/(\d{4})?/', $requested, $matches)) {
	if (empty($matches[1])) {
		moved_permanently("/company/newsroom/media-coverage/netherlands/");
	} else {
		moved_permanently("/company/newsroom/media-coverage/netherlands/$matches[1]");
	}
}
if (strpos($requested, '/company/newsroom/media-coverage/benelux') === 0) {
	moved_permanently("/company/newsroom/media-coverage/netherlands/");
}

/* redirect requests for /docs/* to https://cdn2.qualys.com/docs/ */
if (preg_match('/docs\/(.*)/', $requested_raw, $matches)) {
	$fh = fopen('asset/data/moved_docs.txt','r');
	if ($fh) {
		while (($line = fgets($fh)) !== false) {
			// Remove newline characters from the line
			$line = trim($line);
			
			// Check if the filename matches or is a part of the requested value
			if ($matches[1] == $line) {
				moved_permanently("https://cdn2.qualys.com/docs/mktg/".$line);
				// Stop iterating if match is found
				break;
			}
		}
		fclose($fh);

	} else {
		echo("Error opening the file");
	}
	moved_permanently('https://cdn2.qualys.com/' . $matches[0]);
}

/* only log 404 not found errors with referrers
 * and where the request URI does not start with '//' */
if (isset($_SERVER['HTTP_REFERER'])) {
	$referer = $_SERVER['HTTP_REFERER'];
}
if (isset($_SERVER['REQUEST_URI'])) {
	$uri = $_SERVER['REQUEST_URI'];
}
if (isset($referer) && (!empty($referer)) && isset($uri) && (!(strpos($uri, '//')===0))) {
	if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		/* set remote address to the standard X-Forwarded-For header if provided by load balancer */
		/* the general format of the field is: X-Forwarded-For: client1, proxy1, proxy2 */
		$clientip = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
	} else if (isset($_SERVER['HTTP_QMIP'])) {
		/* set remote address to custom qmip header if provided by load balancer */
		$clientip = $_SERVER['HTTP_QMIP'];
	} else if (isset($_SERVER['REMOTE_ADDR'])) {
		/* look for the remote client ip adress in the standard header */
		$clientip = $_SERVER['REMOTE_ADDR'];
	} else {
		/* otherwise return a single dash to match up with Apache HTTP access logs */
		$clientip = '-';
	}
	if (isset($_SERVER['HTTP_USER_AGENT'])) {
		$useragent = $_SERVER['HTTP_USER_AGENT'];
	} else {
		$useragent = '';
	}
	error_log("404_NOT_FOUND from status=404 clientip=$clientip uri=$uri referer=\"$referer\" useragent=\"$useragent\"");
}

header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
echo file_get_contents('./404/index.html');
