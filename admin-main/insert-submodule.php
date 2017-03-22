<? session_start();
include("includes/global.inc.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");
if($_POST)
{
		$temp_name1=$_FILES['image_upload_big'][tmp_name];
		$file_name11=$_FILES['image_upload_big'][name];						
		$file_path1="../subcategory/".$file_name11;
		move_uploaded_file($temp_name1,$file_path1);	
		
		$insert1 = "insert into submodule set
											submod_name		 = '".$_REQUEST['TxtName']."',
											submod_modid	 = '".$_REQUEST['mid']."',
											submod_image	=	'".$file_name11."',		
											submod_status	 = 0,
											submod_date		 = '".time()."'";
		$set = mysql_query($insert1);									
		redirect("view-submodule.php?msg=add&cid=".$_REQUEST['mid']."");

}
    include("html/admin/header.html");
	include("html/admin/insert-submodule.html");
	include("html/admin/footer.html");
?>
