<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
<?php session_start();
include("includes/global.inc.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");
if($_POST)
{
		$insert1 = "insert into news set
											content = '".addslashes($_REQUEST['editor1'])."' ,
											status = 0,
											date = '".time()."'";
				$set = mysql_query($insert1);									
				redirect("view-news.php?msg=add");

}
    include("html/admin/header.html");
	include("html/admin/insert-news.html");
	include("html/admin/footer.html");
?>
