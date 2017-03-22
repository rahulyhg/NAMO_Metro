<? session_start();
include("includes/global.inc.php");
include("fckeditor.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");

if($_POST)
{
						$temp_name1=$_FILES['image_upload_above'][tmp_name];
						$file_name11=$_FILES['image_upload_above'][name];			
					
						$file_path1="../faq/sub/".$file_name11;
						move_uploaded_file($temp_name1,$file_path1);
						
						$temp_name_below=$_FILES['image_upload_below'][tmp_name];
						$file_name_below=$_FILES['image_upload_below'][name];			
					
						$file_path_below="../faq/sub/".$file_name_below;
						move_uploaded_file($temp_name_below,$file_path_below);
						
						$insert1 = "insert into subfaq set
															sub_sid			=	'".$_REQUEST['sid']."',
															sub_name		=	'".$_REQUEST['TxtName']."',
															sub_image_above	=	'".$file_name11."',
															sub_cap_above	=	'".$_REQUEST['TxtCapAbove']."',
															sub_desc1		=	'".addslashes($_REQUEST['content'])."',		
															sub_image_below	=	'".$file_name_below."',
															sub_cap_below	=	'".$_REQUEST['TxtCapBelow']."',
															sub_date		=	'".time()."'";
						$set = mysql_query($insert1);					
		redirect("view-faq-data.php?sid=".$_REQUEST['sid']."");
}
	
$sBasePath = $_SERVER['PHP_SELF'] ;
$sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;

$oFCKeditor = new FCKeditor('content') ;
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Value		=''  ;



    include("html/admin/header.html");
	include("html/admin/insert-faqdata.html");
	include("html/admin/footer.html");
?>
