<? session_start();
include("includes/global.inc.php");
include("fckeditor.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");

if($_POST)
{
	if($_FILES['image_upload_above']['name'] == "")
		{
			$selectData = "select * from news where id ='".$_REQUEST['did']."'";
			$fireData = mysql_query($selectData) or die(mysql_error());
			$rowData = mysql_fetch_array($fireData);
			$file_name11 = $rowData['sub_image_above'];
		}
	else
			
			$insert1 = "update news set
								
								date		=	'".$_REQUEST['TxtDate']."',
								content		=	'".addslashes($_REQUEST['editor1'])."' 
								where id = '".$_REQUEST['did']."'";
			$set = mysql_query($insert1);					

			redirect("view-news.php?msg=edit");
}

$selectData = "select * from news where id ='".$_REQUEST['did']."'";
$fireData = mysql_query($selectData) or die(mysql_error());
$rowData = mysql_fetch_array($fireData);

$sBasePath = $_SERVER['PHP_SELF'] ;
$sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;

$oFCKeditor = new FCKeditor('content') ;
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Value		= stripslashes($rowData['content']) ;


    include("html/admin/header.html");
	include("html/admin/edit-news.html");
	include("html/admin/footer.html");
?>
