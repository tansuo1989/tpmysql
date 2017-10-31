<?php 

// include("./Think.php");
define("MURL",dirname(__FILE__));

include(MURL."/Db.php");
include(MURL."/Driver.php");
include(MURL."/Mysql.php");
include(MURL."/Model.php");
include(MURL."/functions.php");


define("APP_DEBUG",true);
define('MEMORY_LIMIT_ON',function_exists('memory_get_usage'));






