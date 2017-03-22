<?php

error_reporting(0);
define("DATABASE","bhoomi");
define("DATABASEUSERNAME","root");
define("DATABASEHOSTNAME","localhost");
define("DATABASEPASSWORD","console");
//define("SITEURL","/opt/lampp/htdocs/julie_photogallery");
 
//define("ROOTDIR",'/hadleighhomes');

 
if(!isset($CONNECT))
					 $connect=mysql_connect(DATABASEHOSTNAME,DATABASEUSERNAME,DATABASEPASSWORD) or die(mysql_error());
if(!isset($db))
					 $db=mysql_select_db(DATABASE,$connect)or die(mysql_error());


define("ADMINTABLE","admin_master");

include("functions.inc.php");
//$pos=strpos($_SERVER['SCRIPT_FILENAME'],"/admin/");
//if($pos==false)
include("booking.php");
?>