<?php
include("includes/global.inc.php");
$email=$_GET['email'];


$sel="select * from registration where registration_email = '".$_GET['email']."'";
$chk=mysql_query($sel) or die(mysql_error());
$count = mysql_affected_rows();

if ($count != 0)
	{
		echo "You are already registered with us";
	}
	else
	{
		echo "Username Available";
	} 
?>