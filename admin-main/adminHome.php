<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"
<?php
session_start();
 include("includes/global.inc.php");
if(!isset($_SESSION['BHOOMI']['ADMIN']))
	{
		redirect("index.php");
	}


 include("html/admin/header.html");
 include("html/admin/adminhome.html");
 include("html/admin/footer.html");
?>