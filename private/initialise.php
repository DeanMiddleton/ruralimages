<?php
ob_start(); // output buffering is turned on
@session_start(); // Open session to open order array


define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("SHARED_PATH", PRIVATE_PATH . '/shared');

require_once 'functions.php';
require_once 'global.php';
require_once 'database.php';
require_once 'validation_functions.php';
require_once 'db_query_functions.php';
require_once 'order-process.php';


$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root);



$db = db_connect();