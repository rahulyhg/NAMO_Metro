<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
<?php session_start();
include("includes/global.inc.php");
include("fckeditor.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");

if($_POST)
{
						$temp_name1=$_FILES['image_upload_above'][tmp_name];
						$file_name11=$_FILES['image_upload_above'][name];			
					
						$file_path1="../melawa/upcoming/".$file_name11;
						move_uploaded_file($temp_name1,$file_path1);
						
						$insert1 = "insert into projects_up set
													sub_name		=	'".$_REQUEST['TxtName']."',
													melawa_date		=	'".$_REQUEST['TxtDate']."',
													sub_image_above	=	'".$file_name11."',
													sub_date		=	'".time()."'";
						$set = mysql_query($insert1);					
						redirect("view-up-melawa.php?msg=add");
}
	
$sBasePath = $_SERVER['PHP_SELF'] ;
$sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;

$oFCKeditor = new FCKeditor('content') ;
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Value		=''  ;

include("html/admin/header.html");
include("html/admin/insert-up-projects.html");
include("html/admin/footer.html");
?>
