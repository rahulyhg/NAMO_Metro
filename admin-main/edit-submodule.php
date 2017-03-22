<? session_start();
include("includes/global.inc.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");
if($_POST)
{
	if($_FILES['image_upload_big']['name'] == "")
		{
			$sql1 = "select * from submodule where submod_id = '".$_REQUEST['lid']."'";
			$result1 = mysql_query($sql1) or die(mysql_error());
			$rowData = mysql_fetch_array($result1);
			$file_name11 = $rowData['submod_image'];
		}
	else
		{
			$temp_name1=$_FILES['image_upload_big'][tmp_name];
			$file_name11=$_FILES['image_upload_big'][name];
			
			$file_path1="../subcategory/".$file_name11;
			move_uploaded_file($temp_name1,$file_path1);	
		}
		
		
		$insert1 = "update submodule set
											submod_name		 = '".$_REQUEST['TxtName']."',
											submod_image	=	'".$file_name11."'
											where submod_id = '".$_REQUEST['lid']."'";
		$set = mysql_query($insert1);									
		redirect("view-submodule.php?msg=edit&cid=".$_REQUEST['cid']."");
}

$sql1 = "select * from submodule where submod_id = '".$_REQUEST['lid']."'";
$result1 = mysql_query($sql1) or die(mysql_error());
$rowData = mysql_fetch_array($result1);


    include("html/admin/header.html");
	include("html/admin/edit-submodule.html");
	include("html/admin/footer.html");
?>
