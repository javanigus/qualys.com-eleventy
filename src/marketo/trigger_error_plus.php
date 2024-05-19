<?php
/*
 * helper function to log additional details when an error is triggered
 */
function trigger_error_plus($error_msg, $error_type = E_USER_NOTICE) {

	if (isset($_SERVER['REMOTE_ADDR'])) {
		$remoteAddr = $_SERVER['REMOTE_ADDR'];
	} else {
		$remoteAddr = '';
	}

	if (isset($_SERVER['HTTP_REFERER'])) {
		$httpReferer = $_SERVER['HTTP_REFERER'];
	} else {
		$httpReferer = '';
	}

	if (isset($_SERVER['HTTP_USER_AGENT'])) {
		$httpUserAgent = $_SERVER['HTTP_USER_AGENT'];
	} else {
		$httpUserAgent = '';
	}

	if (isset($_SERVER['SERVER_NAME'])) {
		$serverName = $_SERVER['SERVER_NAME'];
	} else {
		$serverName = '';
	}

	if (isset($_SERVER['SERVER_PORT'])) {
		$serverPort = $_SERVER['SERVER_PORT'];
	} else {
		$serverPort = '';
	}

	$error_msg_tmplt = '{error_msg} clientip="{clientip}" referer="{referer}" useragent="{useragent}" other="{other}"';
	$error_msg = strtr($error_msg_tmplt, array(
		'{error_msg}' => $error_msg,
		'{clientip}' => addslashes($remoteAddr),
		'{referer}' => addslashes($httpReferer),
		'{useragent}' => addslashes($httpUserAgent),
		'{other}' => addslashes("$serverName:$serverPort"),
	));

	return trigger_error($error_msg, $error_type);

}
