<?php
require 'environment.php';

global $config;
global $db;

define('BASE', 'http://127.0.0.1/cms/');
$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://127.0.0.1/cms/");
	$config['dbname'] = 'bd_cms';
	$config['host'] = '127.0.0.1';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "http://127.0.0.1/cms/");
	$config['dbname'] = 'bd_cms';
	$config['host'] = '127.0.0..1';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);