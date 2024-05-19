<?php
/*
 * Marketo REST API Client for PHP
 *
 * TODO Note: should have shared cache between web app servers
 * http://developers.marketo.com/documentation/rest/
 */

namespace Marketo\REST\API;

require_once ('phpfastcache/src/phpFastCache/phpFastCache.php');
use phpFastCache\CacheManager;

require_once __DIR__ . '/trigger_error_plus.php';

class Client {
	private $client_id;
	private $client_secret;
	private $munchkin_id;
	private $proxy;

	protected $cache;

	function __construct($args) {

		// check for required parameters
		if (!isset($args['client_id'])) {
			throw new \Exception('Missing required argument: client_id');
		}

		if (!isset($args['client_secret'])) {
			throw new \Exception('Missing required argument: client_secret');
		}

		if (!isset($args['munchkin_id'])) {
			throw new \Exception('Missing required argument: munchkin_id');
		}

		$this->client_id = $args['client_id'];
		$this->client_secret = $args['client_secret'];
		$this->munchkin_id = $args['munchkin_id'];

		// optional parameters
		if (isset($args['proxy'])) {
			$this->proxy = $args['proxy'];
		}

		// setup cache
		CacheManager::setup(array(
			'storage' => 'files',
			'path' => sys_get_temp_dir(),
			'securityKey' => hash(
				'md5',
				$this->client_id . $this->client_secret . $this->munchkin_id
			),
			'htaccess' => false
		));

		$this->cache = CacheManager::getInstance();
	}


	/*
	 * Get Lead by tracking cookie
	 *
	 * method that returns getLeadByFilterType with the 'cookie' filter and
	 * the cookie value from this request
	 *
	 * @params $parameters
	 *
	 * @return a lead matching the specified filter
	 */
	public function getLeadByCookie($parameters=array()) {

		if (!isset($_COOKIE['_mkto_trk'])) {
			throw new \Exception('Cookie is not set: _mkto_trk');
		}

		// keep track of total time to get lead
		$start = microtime(true);

		$parameters['filterType'] = 'cookie';
		$parameters['filterValues'] = $_COOKIE['_mkto_trk'];

		$response = $this->getLeadByFilterType($parameters);

		// fake curl_info array so we can re-use the same log function
		$curl_info = array(
			'total_time' => microtime(true) - $start
		);
		$this->logCurlInfo($curl_info, 'getLeadByCookie');

		return $response;
	}


	/*
	 * Get Lead by Filter Type
	 *
	 * method that returns only one result form getMultipleLeadsByFilterType
	 *
	 * @params $parameters
	 *
	 * @return a lead matching the specified filter
	 */
	public function getLeadByFilterType($parameters=array()) {

		$parameters['batchSize'] = 1;

		$response = $this->getMultipleLeadsByFilterType($parameters);

		return $response;
	}


	/*
	 * Get Multiple Leads by Filter Type
	 *
	 * http://developers.marketo.com/documentation/rest/get-multiple-leads-by-filter-type/
	 *
	 * @params $parameters
	 *
	 * @return array of leads matching the specified filter
	 */
	public function getMultipleLeadsByFilterType($parameters=array(), $okayToTryAgain=true) {

		// check for required parameters
		if (!isset($parameters['filterType'])) {
			throw new \Exception('Missing required parameter: filterType');
		}

		if (!isset($parameters['filterValues'])) {
			throw new \Exception('Missing required parameter: filterValues');
		}

		$query = $this->getQueryStringFromParameters($parameters);

		$url = $this->getEndpointUrl() . "/v1/leads.json?$query";

		// limit how many leads are cached
		$stats = $this->cache->stats();
		$count = count($stats['data']);

		// clear the cache once we reach a specific number of entries
		// avg. pageviews/day for all forms is ~4000 according to GA March 2016
		if ($count > 4000) {

			// keep track of total time to clean the cache
			$start = microtime(true);
			$this->cache->clean();
			$totalTime = round((microtime(true) - $start) * 1000);

			// add a prefix to help id these messages in the log
			$message = "PHP Notice: Marketo API: cleanCache: total_time=$totalTime";

			// log message as a notice
			error_log($message, 0);

		}

		// check cache by url
		$response = $this->cache->get($url);

		if (is_null($response)) {

			// TODO make this apply to all API requests
			// respect API rate limit, no more than 100 requests in 20 seconds
			// since we have 4 servers, we need to limit each server to 25 requests in 20 seconds
			// a shared cache would be helpful for this
			$key = 'GetMultipleLeadsByFilterTypeCount';
			$apiHits = $this->cache->get($key);

			if (is_null($apiHits)) {

				$this->cache->set($key, 1, 20);

			} else {

				if ($apiHits >= (100 / 4)) {

					$keyInfo = $this->cache->getInfo($key);
					if ($keyInfo['expired_in'] > 20) {

						// the key expires in more than 20 seconds, therefore
						// the cache is corrupt and must be flushed
						// keep track of total time to clean the cache
						$start = microtime(true);
						$this->cache->clean();
						$totalTime = round((microtime(true) - $start) * 1000);

						// add a prefix to help id these messages in the log
						$message = "PHP Notice: Marketo API: cleanCache: total_time=$totalTime";

						// log message as a notice
						error_log($message, 0);

					} else {

						header($_SERVER['SERVER_PROTOCOL'] . ' 503 Service Unavailable');
						header('Retry-After: ' . $keyInfo['expired_in']);
						trigger_error_plus("Marketo REST API Rate Limit Exceded: $apiHits", E_USER_ERROR);

					}

				}

				$this->cache->increment($key, 1);
			}

			$ch = curl_init($url);
			curl_setopt_array($ch, array(
				CURLOPT_HTTPHEADER => array(
					'Accept: application/json',
					$this->getAuthorizationHeader(),
				),
				CURLOPT_RETURNTRANSFER => true,
			));

			if (isset($this->proxy) && !empty($this->proxy)) {
				curl_setopt($ch, CURLOPT_PROXY, $this->proxy);
			}

			$response = curl_exec($ch);
			$error = curl_error($ch);

			// log connection attempts and duration
			$this->logCurlInfo(curl_getinfo($ch), 'getMultipleLeadsByFilterType');
			curl_close($ch);

			if ($response === false) {

				if (empty($error)) {
					$error = 'cURL request failed but error message is empty';
				}
				throw new \Exception($error);
			}

			// check for errors from Marketo API and log them
			$res = json_decode($response);

			if ($res === NULL) {
				throw new \Exception('The JSON response cannot be decoded or the encoded data is deeper than the recursion limit.');
			}

			if (!isset($res->success)) {

				throw new \Exception("Invalid response. response=\"$response\"");

			} else {

				if ($res->success === false) {

					if (isset($res->errors)) {

						$template = 'Marketo API Error error_code={code} error_message="{message}" _mkto_trk="{_mkto_trk}"';

						foreach ($res->errors as $error) {

							trigger_error_plus(strtr($template, array(
								'{code}' => $error->code,
								'{message}' => $error->message,
								'{_mkto_trk}' => addslashes($_COOKIE['_mkto_trk'])
							)), E_USER_NOTICE);

						}

						foreach ($res->errors as $error) {

							// if error message is Access token invalid
							if ($error->code == 601) {

								// get a new access token and try again
								$this->deleteCachedAccessToken();

								if ($okayToTryAgain) {
									return $this->getMultipleLeadsByFilterType($parameters, false);
								}

							}

						}

					} else {

						throw new \Exception("Invalid response. response=\"$response\"");

					}

				} else {

					// put the response in the cache by url
					// even a very short cache time, like 20 seconds, will greatly help minimize the impact from a DDoS attack
					// avg. time on page is 106 seconds from GA March 2016
					$this->cache->set($url, $response, 20);

				}

			}

		}

		return $response;
	}


	private function getQueryStringFromParameters($parameters) {

		// convert arrays to list of comma separated values
		foreach ($parameters as $key => $value) {
			if (getType($value) === 'array') {

				// fputcsv() only writes to files, so
				// write to temp, rewind, and read it back out
				$handle = fopen('php://temp', 'w');
				fputcsv($handle, $value);
				rewind($handle);
				$parameters[$key] = fgets($handle);
				fclose($handle);
			}
		}

		return http_build_query($parameters, '', '&', PHP_QUERY_RFC3986);
	}


	private function getEndpointUrl() {
		return 'https://' . $this->munchkin_id . '.mktorest.com/rest';
	}


	private function getAuthorizationHeader() {
		$template = "Authorization: {tokenType} {accessToken}";
		$accessToken = $this->generateAccessToken();

		return strtr($template, array(
			'{tokenType}' => ucfirst($accessToken->token_type),
			'{accessToken}' => $accessToken->access_token,
		));
	}


	private function generateAccessToken() {

		// fetch new token
		$query = http_build_query(array(
			'client_id' => $this->client_id,
			'client_secret' => $this->client_secret,
			'grant_type' => 'client_credentials',
		));

		$url = $this->getIdentityUrl() . "/oauth/token?$query";

		// check cache by url
		$response = $this->cache->get($url);

		if (is_null($response)) {

			$ch = curl_init($url);
			curl_setopt_array($ch, array(
				CURLOPT_HTTPHEADER => array('Accept: application/json'),
				CURLOPT_RETURNTRANSFER => true,
			));

			if (isset($this->proxy) && !empty($this->proxy)) {
				curl_setopt($ch, CURLOPT_PROXY, $this->proxy);
			}

			$response = curl_exec($ch);
			$error = curl_error($ch);

			// log connection attempts and duration
			$this->logCurlInfo(curl_getinfo($ch), 'generateAccessToken');
			curl_close($ch);

			if ($response === false) {

				if (empty($error)) {
					$error = 'cURL request failed but error message is empty';
				}
				throw new \Exception($error);
			}

			$response = json_decode($response);

			if ($response === NULL) {
				throw new \Exception('The JSON response cannot be decoded or the encoded data is deeper than the recursion limit.');
			}

			// validate response before caching it
			if (!isset($response->expires_in)) {
				throw new \Exception('Missing expires_in in response.');
			}

			if (!isset($response->token_type)) {
				throw new \Exception('Missing token_type in response.');
			}

			if (!isset($response->access_token)) {
				throw new \Exception('Missing access_token in response.');
			}

			// put the response in the cache by url
			$this->cache->set($url, $response, $response->expires_in);

		}

		return $response;
	}


	private function deleteCachedAccessToken() {

		// generate cache key (url) to access token
		$query = http_build_query(array(
			'client_id' => $this->client_id,
			'client_secret' => $this->client_secret,
			'grant_type' => 'client_credentials',
		));

		$url = $this->getIdentityUrl() . "/oauth/token?$query";

		// delete cached token
		$response = $this->cache->delete($url);

	}


	private function getIdentityUrl() {
		return "https://$this->munchkin_id.mktorest.com/identity";
	}


	/*
	 * log curl info
	 * this is a useful way to track the performance of API calls
	 * since all logs are currently stored in Splunk
	 */
	private function logCurlInfo($curl_info, $prefix) {

		if (empty($curl_info)) {
			throw new \Exception('Missing first parameter');
		}

		if (empty($prefix)) {
			throw new \Exception('Missing second parameter');
		}

		// add a prefix to help id these messages in the log
		$message = "PHP Notice: cURL Info: Marketo API: $prefix: ";

		// loop over all keys in the curl info object
		foreach($curl_info as $key => $value) {
			switch ($key) {
				case 'url':
				case 'redirect_url':
					// shorten to just domain name
					if (! empty($value)) {
						$value = parse_url($value, PHP_URL_HOST);
					}
					break;
				case 'connect_time':
				case 'filetime':
				case 'namelookup_time':
				case 'pretransfer_time':
				case 'redirect_time':
				case 'starttransfer_time':
				case 'total_time':
					// convert to milliseconds and round
					if (is_numeric($value) && ($value > 0)) {
						$value = round($value * 1000);
					}
					break;
				case 'certinfo':
					// ignore
					$value = null;
					break;
				default:
					// do nothing
			}

			// only add non-null values
			if ($value !== null) {
				// log key value pairs in format for Splunk to read
				$message .= " $key=\"$value\"";
			}
		}

		// log message as a notice
		error_log($message, 0);
	}
}
