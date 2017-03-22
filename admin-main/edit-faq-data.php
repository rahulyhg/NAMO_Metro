<? session_start();
include("includes/global.inc.php");
include("fckeditor.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");

if($_POST)
{
	if($_FILES['image_upload_above']['name'] == "")
		{
			$selectData = "select * from subfaq where sub_id ='".$_REQUEST['did']."'";
			$fireData = mysql_query($selectData) or die(mysql_error());
			$rowData = mysql_fetch_array($fireData);
			$file_name11 = $rowData['sub_image_above'];
		}
	else
		{
			$temp_name1=$_FILES['image_upload_above'][tmp_name];
			$file_name11=$_FILES['image_upload_above'][name];			
			
			$file_path1="../faq/sub/".$file_name11;
			move_uploaded_file($temp_name1,$file_path1);	
		}
		
	if($_FILES['image_upload_below']['name'] == "")
		{
			$selectData = "select * from subfaq where sub_id ='".$_REQUEST['did']."'";
			$fireData = mysql_query($selectData) or die(mysql_error());
			$rowData = mysql_fetch_array($fireData);
			$file_name111 = $rowData['sub_image_below'];
		}
	else
		{
			$temp_name11=$_FILES['image_upload_below'][tmp_name];
			$file_name111=$_FILES['image_upload_below'][name];			
			
			$file_path11="../faq/sub/".$file_name111;
			move_uploaded_file($temp_name11,$file_path11);	
		}

			$insert1 = "update subfaq set
								sub_name		=	'".$_REQUEST['TxtName']."',
								sub_image_above	=	'".$file_name11."',
								sub_cap_above	=	'".$_REQUEST['TxtCapAbove']."',
								sub_desc1		=	'".addslashes($_REQUEST['content'])."',		
								sub_image_below	=	'".$file_name111."',
								sub_cap_below	=	'".$_REQUEST['TxtCapBelow']."'
								where sub_id = '".$_REQUEST['did']."'";
								
			$set = mysql_query($insert1);					

			redirect("view-faq-data.php?sid=".$rowData['sub_sid']."");
}

$selectData = "select * from subfaq where sub_id ='".$_REQUEST['did']."'";
$fireData = mysql_query($selectData) or die(mysql_error());
$rowData = mysql_fetch_array($fireData);

$sBasePath = $_SERVER['PHP_SELF'] ;
$sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;

$oFCKeditor = new FCKeditor('content') ;
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Value		= stripslashes($rowData['sub_desc1']) ;


    include("html/admin/header.html");
	include("html/admin/edit-faq-data.html");
	include("html/admin/footer.html");
?>
