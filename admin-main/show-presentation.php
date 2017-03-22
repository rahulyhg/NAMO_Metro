<? session_start();
include("includes/global.inc.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");
		
$sql = "select * from manage_upload where videoId = '".$_REQUEST['pid']."'";
$result = mysql_query($sql) or die(mysql_error());
$rowPresentation = mysql_fetch_array($result); 


	

	
	include("html/admin/header.html");
	include("html/admin/show-presentation.html");
	include("html/admin/footer.html");
?>
