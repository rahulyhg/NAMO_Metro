<? session_start();
include("includes/global.inc.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");
if($_POST)
{
		$insert1 = "insert into faq_que set
											que_name	 = 	'".$_REQUEST['TxtDescrption']."',
											que_order	 = 	'".$_REQUEST['TxtOrder']."',
											que_status	 = 	0,
											que_date	 = 	'".time()."'";
				$set = mysql_query($insert1);									
				redirect("view-faq.php?msg=add");

}

include("html/admin/header.html");
include("html/admin/insert-faq.html");
include("html/admin/footer.html");
?>
