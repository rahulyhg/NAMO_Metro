<?php
include("includes/global.inc.php");
session_start();
if(isset($_SESSION['BHOOMI']['ADMIN']))
	{
		redirect("adminHome.php");
	}
if($_POST)
	{
		 $selectLogin="select * from admin where username ='".$_REQUEST['userName']."' and password  = '".$_REQUEST['Password']."'";
		 $seleQuery=mysql_query($selectLogin);
		 if(mysql_affected_rows()==0)
			 {
				?>
					<script type="text/javascript" language="javascript">
						window.location="index.php?act=fail";
					</script>	
				<?php
			 }
		 else
			 {
				 $selCommand=mysql_fetch_array($seleQuery);
				 $_SESSION['BHOOMI']['ADMIN']=$selCommand;
				 redirect("adminHome.php");
			 }
	
	}
if($_REQUEST['act']=="fail")
	{
		$errormsg = "Username OR Password is wrong";
	} 
include("html/admin/index.html");

?>