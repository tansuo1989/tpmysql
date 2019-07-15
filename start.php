<?php 
ini_set('session.auto_start', 0);
session_start();

define("MURL",dirname(__FILE__));

include(MURL."/Db.php");
include(MURL."/Driver.php");
include(MURL."/Mysql.php");
include(MURL."/Model.php");
include(MURL."/functions.php");


define("APP_DEBUG",true);
define('MEMORY_LIMIT_ON',function_exists('memory_get_usage'));






