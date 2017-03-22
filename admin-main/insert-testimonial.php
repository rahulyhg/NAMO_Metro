<? session_start();
include("includes/global.inc.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");
if($_POST)
{
		$insert1 = "insert into testimonial set
											name = '".$_REQUEST['TxtName']."',
											content = '".$_REQUEST['TxtDescrption']."',
											status = 0,
											date = '".time()."'";
				$set = mysql_query($insert1);									
				redirect("view-testimonial.php?msg=add");

}
    include("html/admin/header.html");
	include("html/admin/insert-testimonial.html");
	include("html/admin/footer.html");
?>
