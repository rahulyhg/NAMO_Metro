<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
<?php
session_start();
include("includes/global.inc.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");
	
$selectRegister = "select * from  registration where registration_id = '".$_REQUEST['rid']."'";
$fireRegister = mysql_query($selectRegister) or die(mysql_error());
$rowRegisterData = mysql_fetch_array($fireRegister);		
	
	
$selectPartner = "select * from partner_preference where partner_register_id = '".$_REQUEST['rid']."'";
$firePartner = mysql_query($selectPartner) or die(mysql_error());
$rowPartnerData = mysql_fetch_array($firePartner);	
	
include("html/admin/header.html");
include("html/admin/full-profile.html");
include("html/admin/footer.html");	

?>