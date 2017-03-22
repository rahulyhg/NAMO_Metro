<?php
error_reporting(1);
define("DATABASE","redpluss_slim");
define("DATABASEUSERNAME","redpluss_slim");
define("DATABASEHOSTNAME","localhost");
define("DATABASEPASSWORD","x7cry8ha");
 
if(!isset($CONNECT))
					 $connect=mysql_connect(DATABASEHOSTNAME,DATABASEUSERNAME,DATABASEPASSWORD) or die(mysql_error());
if(!isset($db))
					 $db=mysql_select_db(DATABASE,$connect)or die(mysql_error());

include("functions.inc.php");
include("../pagination.php");


?>