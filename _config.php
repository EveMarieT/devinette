<?php
/*** Configuration ****/
ini_set('display_errors', 'on');
error_reporting(E_ALL);

$root = $_SERVER['DOCUMENT_ROOT'];
$host = $_SERVER['HTTP_HOST'];

define('HOST', 'http://'.$host.'/test/');
define('ROOT', $root.'/test/');

define('MODEL', ROOT.'model/');
define('VIEW', ROOT.'view/');
define('CONTROLLER', ROOT.'controller/');
define('CLASSES', ROOT.'classes/');

define('ASSETS', HOST.'assets/');

