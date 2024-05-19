<?php
/*
 * return the field values from the lead corresponding to the tracking cookie
 */

require_once __DIR__ . '/trigger_error_plus.php';

// request MUST include the Marketo cookie
if (!isset($_COOKIE['_mkto_trk'])) {
	header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request');
	// many bots will trigger this, so use a low log level so it doesn't fill up the production logs
	trigger_error_plus('Cannot get lead without Marketo tracking cookie', E_USER_DEPRECATED);
	exit;
}

// request MUST come from a domain name owned by Qualys
if (!isset($_SERVER['HTTP_REFERER'])) {
	header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request');
	trigger_error_plus('Cannot get lead without referer', E_USER_NOTICE);
	exit;
} else {
	$host = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);

	if ($host === false || $host === null || empty($host)) {
		header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request');
		trigger_error_plus('Cannot get lead without valid referer', E_USER_NOTICE);
		exit;
	} else {

		if (preg_match('/\.qualys\.(com|jp)$/', $host) === 0) {
			header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request');
			trigger_error_plus('Cannot get lead without valid referer from qualys', E_USER_NOTICE);
			exit;
		}
	}
}

// request MUST come from an XML HTTP Request (a.k.a AJAX)
if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || ($_SERVER['HTTP_X_REQUESTED_WITH'] !== 'XMLHttpRequest')) {
	header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request');
	trigger_error_plus('Cannot get lead without the correct X-Requested-With header', E_USER_NOTICE);
	exit;
}

// autoload dependancies from Composer
require __DIR__ . '/MarketoRESTAPI.php';

use Marketo\REST\API\Client as Client;

// private settings for Qualys' Marketo account
$settings = array(
	'client_id' => '37036a79-4c43-40aa-9f56-64ce570f2a6c',
	'client_secret' => 'v0wLhUPTAxl5pt1XnQyggP1RpKCwusrZ',
	'munchkin_id' => '797-eni-742'
);

// pull in proxy setting from env, if any
$proxy = getenv('CGI_HTTP_PROXY');
if ($proxy) {
	$settings['proxy'] = $proxy;
}

$client = new Client($settings);

// Marketo fields to be returned with the lead
$fields = array(
	'firstName', 'lastName', 'email', 'company', 'title', 'jobFunctionId',
	'phone', 'country', 'state',
	'Company_Size_Range__c_account',
	'purchaseTimeframe', 'budget', 'communicationConsent',
	'communicationConsentDateTime'
);

// get a lead from the Marketo tracking cookie
$response = $client->getLeadByCookie(array('fields' => $fields));

header('Content-Type: application/json');
header('Cache-Control: private, max-age=0, no-cache');
header('Pragma: no-cache');
$date = new DateTime(null, new DateTimeZone('GMT'));
header('Expires: ' . $date->format('D, j M Y H:i:s T'));
echo "$response\n";

?>