<? session_start();
include("includes/global.inc.php");
include("fckeditor.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");

if($_POST)
{
						$temp_name1=$_FILES['image_upload_big'][tmp_name];
						$file_name11=$_FILES['image_upload_big'][name];	
										
						$file_path1="../product/".$file_name11;
						move_uploaded_file($temp_name1,$file_path1);
						
						
						
						$insert1 = "insert into subdata set
															prod_cid			=	'".$_REQUEST['cid']."',
															prod_sid			=	'".$_REQUEST['sid']."',
															prod_name			=	'".$_REQUEST['TxtName']."',
															prod_code			=	'".$_REQUEST['TxtCode']."',
															prod_act_price		=	'".$_REQUEST['TxtActPrice']."',
															prod_sal_price		=	'".$_REQUEST['TxtSalPrice']."',
															prod_qty			=	'".$_REQUEST['TxtQty']."',
															prod_fabric			=	'".$_REQUEST['TxtFabric']."',
															prod_color			=	'".$_REQUEST['TxtColor']."',
															prod_occasion		=	'".$_REQUEST['TxtOccasion']."',
															prod_style			=	'".$_REQUEST['TxtStyle']."',
															prod_weight			=	'".$_REQUEST['TxtWeight']."',
															prod_image_big		=	'".$file_name11."',
															prod_desc1			=	'".addslashes($_REQUEST['content'])."',		
															prod_status			=	0,
															prod_date			=	'".time()."'";
																			
						$set = mysql_query($insert1);					
		redirect("view-data.php?sid=".$_REQUEST['sid']."&cid=".$_REQUEST['cid']."");
}
	
$sBasePath = $_SERVER['PHP_SELF'] ;
$sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;

$oFCKeditor = new FCKeditor('content') ;
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Value		=''  ;



    include("html/admin/header.html");
	include("html/admin/insert-subdata.html");
	include("html/admin/footer.html");
?>
