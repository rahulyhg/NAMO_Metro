<? session_start();
include("includes/global.inc.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");
if($_POST)
{



if($_FILES['image_upload_big']['name'] == "")
		{
			$sql1 = "select * from module where module_id = '".$_REQUEST['lid']."'";
			$result1 = mysql_query($sql1) or die(mysql_error());
			$rowData = mysql_fetch_array($result1);
			$file_name11 = $rowData['module_image'];
		}
	else
		{
			$temp_name1=$_FILES['image_upload_big'][tmp_name];
			$file_name11=$_FILES['image_upload_big'][name];
			
			$file_path1="../category/".$file_name11;
			move_uploaded_file($temp_name1,$file_path1);	
		}

if($_FILES['image_upload_banner']['name'] == "")
		{
			$sql1 = "select * from module where module_id = '".$_REQUEST['lid']."'";
			$result1 = mysql_query($sql1) or die(mysql_error());
			$rowData = mysql_fetch_array($result1);
			$file_name111 = $rowData['module_banner'];
		}
	else
		{
			$temp_name11=$_FILES['image_upload_banner'][tmp_name];
			$file_name111=$_FILES['image_upload_banner'][name];						
			$file_path11="../category/banner/".$file_name111;
			move_uploaded_file($temp_name11,$file_path11);		
		}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		$insert1 = "update module set
											module_name		 = '".$_REQUEST['TxtName']."',
											module_image	= '".$file_name11."',
											module_banner	= '".$file_name111."'
											where module_id = '".$_REQUEST['lid']."'";
		$set = mysql_query($insert1);									
		redirect("view-module.php?msg=edit");

}

$sql1 = "select * from module where module_id = '".$_REQUEST['lid']."'";
$result1 = mysql_query($sql1) or die(mysql_error());
$rowData = mysql_fetch_array($result1);


    include("html/admin/header.html");
	include("html/admin/edit-module.html");
	include("html/admin/footer.html");
?>
