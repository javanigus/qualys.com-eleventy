<?php


// catch PHP errors before Yii runs
// like if a maximum has been exceeded
$error = error_get_last();
if ($error !== NULL) {
	$errstr = $error['message'];
	$errno = $error['type'];
	$errfile = $error['file'];
	$errline = $error['line'];
	throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
}

// add composer auto loader
require dirname(__FILE__).'/../../quazam/protected/vendor/autoload.php';


// change the following paths if necessary
// When the PHP APC extension is enabled, we can replace yii.php with a
// different Yii bootstrap file named yiilite.php to further boost the
// performance of a Yii-powered application.
$yii=dirname(__FILE__).'/../../yii/framework/yiilite.php';
$config=dirname(__FILE__).'/../../quazam/protected/config/main.php';

// if index_local.php exists, include it
if (file_exists('index_local.php'))
{
	include('index_local.php');
}

require_once($yii);
Yii::createWebApplication($config)->run();
