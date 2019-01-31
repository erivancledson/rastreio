<?php
require 'environment.php';
//constante
define("BASE", "http://localhost/rastreio/");

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'rastreio';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = 'rastreio';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'rastreio';
	$config['dbpass'] = '';
}

?>