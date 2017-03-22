<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
<?php session_start();
include("includes/global.inc.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");
if($_POST)
{
			$temp_name=$_FILES['image_upload'][tmp_name];
			$file_name1=$_FILES['image_upload'][name];			
		
			$file_path="../banner/".$file_name1;
			move_uploaded_file($temp_name,$file_path);
			
			$insert1 = "insert into manage_video set
											video_url = '".$file_name1."',
											video_status = 0,
											video_date = '".time()."'";
												
			$set = mysql_query($insert1) or die(mysql_error());	
			redirect("view-presentation.php?msg=add");
}


include("html/admin/header.html");
include("html/admin/upload-presentation.html");
include("html/admin/footer.html");
?>
