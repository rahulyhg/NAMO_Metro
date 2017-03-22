<? session_start();
include("includes/global.inc.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");
if($_POST)
{
		$insert1 = "update faq_que set
											que_name	 = 	'".$_REQUEST['TxtDescrption']."',
											que_order	 = 	'".$_REQUEST['TxtOrder']."'
											where que_id = '".$_REQUEST['lid']."'";
				$set = mysql_query($insert1);									
				redirect("view-faq.php?msg=edit");

}
$selectFaq = "select * from faq_que where que_id = '".$_REQUEST['lid']."'";
$fireFaq = mysql_query($selectFaq) or die(mysql_error());
$rowFaq = mysql_fetch_array($fireFaq);

include("html/admin/header.html");
include("html/admin/edit-faq.html");
include("html/admin/footer.html");
?>
