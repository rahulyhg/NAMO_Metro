<? session_start();
include("includes/global.inc.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");
if($_POST)
{
		$insert1 = "insert into clients set
											client_name		 = '".$_REQUEST['TxtName']."',
											client_city		 = '".$_REQUEST['TxtCity']."',
											client_type		 = '".$_REQUEST['TxtType']."',		
											client_status	 = 0,
											client_date		 = '".time()."'";
		$set = mysql_query($insert1);									
		redirect("view-clients.php?msg=add");

}
    include("html/admin/header.html");
	include("html/admin/insert-clients.html");
	include("html/admin/footer.html");
?>
