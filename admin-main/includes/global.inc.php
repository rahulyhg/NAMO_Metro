<?php
error_reporting(1);
define("DATABASE","saiprasad_db1");
define("DATABASEUSERNAME","root");
define("DATABASEHOSTNAME","localhost");
define("DATABASEPASSWORD","");
 
if(!isset($CONNECT))
					 $connect=mysql_connect(DATABASEHOSTNAME,DATABASEUSERNAME,DATABASEPASSWORD) or die(mysql_error());
if(!isset($db))
					 $db=mysql_select_db(DATABASE,$connect)or die(mysql_error());

include("functions.inc.php");
include("../pagination.php");


?>