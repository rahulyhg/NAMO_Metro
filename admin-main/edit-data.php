<? session_start();
include("includes/global.inc.php");
include("fckeditor.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");

if($_POST)
{

$selectDataw = "select * from subdata where prod_id ='".$_REQUEST['did']."'";
$fireDataw = mysql_query($selectDataw) or die(mysql_error());
$rowDataw = mysql_fetch_array($fireDataw);


	if($_FILES['image_upload_big']['name'] == "")
		{
			$selectData = "select * from subdata where prod_id ='".$_REQUEST['did']."'";
			$fireData = mysql_query($selectData) or die(mysql_error());
			$rowData = mysql_fetch_array($fireData);
			$file_name11 = $rowData['prod_image_big'];
		}
	else
		{
			$temp_name1=$_FILES['image_upload_big'][tmp_name];
			$file_name11=$_FILES['image_upload_big'][name];
			
			$file_path1="../product/".$file_name11;
			move_uploaded_file($temp_name1,$file_path1);	
		}
		
	if($_FILES['image_upload_small']['name'] == "")
		{
			$selectData1 = "select * from subdata where prod_id ='".$_REQUEST['did']."'";
			$fireData1 = mysql_query($selectData1) or die(mysql_error());
			$rowData1 = mysql_fetch_array($fireData1);
			$file_name111 = $rowData1['prod_image_small'];
		}
	else
		{
			$temp_name11=$_FILES['image_upload_small'][tmp_name];
			echo $file_name111=$_FILES['image_upload_small'][name];
			
			$file_path11="../product/thumb/".$file_name111;
			move_uploaded_file($temp_name11,$file_path11);	
		}
		
			$insert1 = "update subdata set
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
										prod_image_small	=	'".$file_name111."'
								where prod_id = '".$_REQUEST['did']."'";
			//exit;
			$set = mysql_query($insert1);					

			redirect("view-data.php?msg=edit&cid=".$rowDataw['prod_cid']."");
}

$selectData = "select * from subdata where prod_id ='".$_REQUEST['did']."'";
$fireData = mysql_query($selectData) or die(mysql_error());
$rowData = mysql_fetch_array($fireData);

$sBasePath = $_SERVER['PHP_SELF'] ;
$sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;

$oFCKeditor = new FCKeditor('content') ;
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Value		= stripslashes($rowData['prod_desc1']) ;


    include("html/admin/header.html");
	include("html/admin/edit-data.html");
	include("html/admin/footer.html");
?>
