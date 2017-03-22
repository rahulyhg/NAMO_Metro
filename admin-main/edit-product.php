<? session_start();
include("includes/global.inc.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");

$selectUser = "select * from customer where cust_id = '".$_REQUEST['uid']."'";
$fireUser = mysql_query($selectUser) or die(mysql_error());
$rowUser = mysql_fetch_array($fireUser);

$selectData = "select * from subdata where prod_id ='".$_REQUEST['did']."'";
$fireData = mysql_query($selectData) or die(mysql_error());
$rowData = mysql_fetch_array($fireData);


    include("html/admin/header.html");
	include("html/admin/edit-product.html");
	include("html/admin/footer.html");
?>
