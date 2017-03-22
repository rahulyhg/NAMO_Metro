<? session_start();
include("includes/global.inc.php");
include("fckeditor.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");

if($_POST)
{
						$temp_name1=$_FILES['image_upload_above'][tmp_name];
						$file_name11=$_FILES['image_upload_above'][name];			
					
						$file_path1="../investor/".$file_name11;
						move_uploaded_file($temp_name1,$file_path1);
						
						$insert1 = "insert into investor set
													sub_name		=	'".$_REQUEST['TxtName']."',
													sub_image_above	=	'".$file_name11."',
													sub_desc1		=	'".addslashes($_REQUEST['content'])."',	
													sub_date		=	'".time()."'";
						$set = mysql_query($insert1);					
						redirect("view-investor.php?msg=add");
}
	
$sBasePath = $_SERVER['PHP_SELF'] ;
$sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;

$oFCKeditor = new FCKeditor('content') ;
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Value		=''  ;

include("html/admin/header.html");
include("html/admin/insert-investor.html");
include("html/admin/footer.html");
?>
