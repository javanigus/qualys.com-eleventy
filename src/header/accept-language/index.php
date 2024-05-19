<?php

/**
 * return the value of the accept language header in JSON or JSONP
 */

$data = '';

if (isset($_SERVER) && isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
	$data = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
}

/**
 * provide JSON or JSONP results with safety
 * http://www.geekality.net/2010/06/27/php-how-to-easily-provide-json-and-jsonp/
 */

$json = json_encode($data);

# JSON if no callback
if ( ! isset($_GET['callback'])) {
	header('x-robots-tag: noindex, nofollow');
	header('content-type: application/json');
	exit($json);
}

function is_valid_callback($subject)
{
	$identifier_syntax = '/^[$_\p{L}][$_\p{L}\p{Mn}\p{Mc}\p{Nd}\p{Pc}\x{200C}\x{200D}]*+$/u';

	$reserved_words = array( 'break', 'case', 'catch', 'class', 'const', 'continue', 'debugger', 'default', 'delete', 'do', 'else', 'enum', 'export', 'extends', 'false', 'finally', 'for', 'function', 'if', 'implements', 'import', 'in', 'instanceof', 'interface', 'let', 'new', 'null', 'package', 'private', 'protected', 'public', 'return', 'static', 'super', 'switch', 'this', 'throw', 'true', 'try', 'typeof', 'var', 'void', 'while', 'with', 'yield' );

	return preg_match($identifier_syntax, $subject) && ! in_array(mb_strtolower($subject, 'UTF-8'), $reserved_words);
}

# JSONP if valid callback
if (is_valid_callback($_GET['callback'])) {
	header('x-robots-tag: noindex, nofollow');
	header('content-type: application/javascript; charset=utf-8');
	exit("{$_GET['callback']}($json)");
}

# Otherwise, bad request
header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request');
header('x-robots-tag: noindex, nofollow');
