<? session_start();
include("includes/global.inc.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");
if($_POST)
{
	redirect("insert-subdata.php?mid=".$_REQUEST['mid']."&sid=".$_REQUEST['sid']."&image=".$_REQUEST['TxtName']."");
}
    include("html/admin/header.html");
	include("html/admin/insert-data.html");
	include("html/admin/footer.html");
?>
