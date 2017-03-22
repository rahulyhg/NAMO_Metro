<? session_start();
include("includes/global.inc.php");
include("fckeditor.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");

if($_POST)
{
	if($_FILES['image_upload_above']['name'] == "")
		{
			$selectData = "select * from expertise where sub_id ='".$_REQUEST['did']."'";
			$fireData = mysql_query($selectData) or die(mysql_error());
			$rowData = mysql_fetch_array($fireData);
			$file_name11 = $rowData['sub_image_above'];
		}
	else
		{
			$temp_name1=$_FILES['image_upload_above'][tmp_name];
			$file_name11=$_FILES['image_upload_above'][name];
			
			$file_path1="../successstories/".$file_name11;
			move_uploaded_file($temp_name1,$file_path1);	
		}
		
			$insert1 = "update expertise set
								sub_name		=	'".$_REQUEST['TxtGrName']."',
								sub_name2		=	'".$_REQUEST['TxtBrName']."',
                                                                short_desc      =   '".$_REQUEST['txtshortdesc']."',
								sub_Mdate		=	'".$_REQUEST['TxtMarriageFixed']."',
								sub_image_above	=	'".$file_name11."',								
								sub_desc1		=	'".addslashes($_REQUEST['editor1'])."' 
								where sub_id = '".$_REQUEST['did']."'";
			$set = mysql_query($insert1);					

			redirect("view-expertise.php?msg=edit");
}

$selectData = "select * from expertise where sub_id ='".$_REQUEST['did']."'";
$fireData = mysql_query($selectData) or die(mysql_error());
$rowData = mysql_fetch_array($fireData);

$sBasePath = $_SERVER['PHP_SELF'] ;
$sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;

$oFCKeditor = new FCKeditor('content') ;
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Value		= stripslashes($rowData['sub_desc1']) ;


    include("html/admin/header.html");
	include("html/admin/edit-expertise.html");
	include("html/admin/footer.html");
?>
