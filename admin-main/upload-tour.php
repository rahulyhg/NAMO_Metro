<? session_start();
include("includes/global.inc.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");
if($_POST)
{
///////////////////// Image Upload /////////////////////////////////////////
	
				// Where the file is going to be placed
				$temp_name=$HTTP_POST_FILES['image_upload'][tmp_name];
				$file_name1=$HTTP_POST_FILES['image_upload'][name];			
			
				$file_path="../tour/".$file_name1;
				$big_image = getUniqFileName($_FILES['image_upload']['name'],"../tour/");
				$file_path="../tour/".$big_image;
				copy($temp_name,$file_path);

		
////////////////////////////////////////////////////////////////////////////////////////////////////////////////

				$insert1 = "insert into manage_tour set
											video_url = '".$big_image."',
											video_name = '".$_REQUEST['TxtName']."',
											video_status = 0,
											video_date = '".time()."'";
											
				$set = mysql_query($insert1) or die(mysql_error());									

				redirect("view-tour.php?msg=add");

}
    include("html/admin/header.html");
	include("html/admin/upload-tour.html");
	include("html/admin/footer.html");
?>
