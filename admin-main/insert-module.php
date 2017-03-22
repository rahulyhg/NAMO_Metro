<? session_start();
include("includes/global.inc.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");
if($_POST)
	{
	
		$temp_name1=$_FILES['image_upload_big'][tmp_name];
		$file_name11=$_FILES['image_upload_big'][name];						
		$file_path1="../category/".$file_name11;
		move_uploaded_file($temp_name1,$file_path1);
		
		
		$temp_name11=$_FILES['image_upload_banner'][tmp_name];
		$file_name111=$_FILES['image_upload_banner'][name];						
		$file_path11="../category/banner/".$file_name111;
		move_uploaded_file($temp_name11,$file_path11);	
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			$insert1 = "insert into module set
												module_name		 = '".$_REQUEST['TxtName']."',
												module_image	= '".$file_name11."',
												module_banner	= '".$file_name111."',
												module_status	 = 0,
												module_date		 = '".time()."'";
			$set = mysql_query($insert1);									
			redirect("view-module.php?msg=add");
	
	}
    include("html/admin/header.html");
	include("html/admin/insert-module.html");
	include("html/admin/footer.html");
?>
