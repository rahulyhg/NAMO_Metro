<? session_start();
include("includes/global.inc.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");

$selectUser = "select * from user where user_id ='".$_REQUEST['uid']."'";
$queryUser = mysql_query($selectUser) or die(mysql_error());
$rowUser = mysql_fetch_array($queryUser);
    include("html/admin/header.html");
	include("html/admin/view-userdetail.html");
	include("html/admin/footer.html");
?>
