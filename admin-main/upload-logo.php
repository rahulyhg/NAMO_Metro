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
			
				$file_path="../logo/".$file_name1;
				$big_image = getUniqFileName($_FILES['image_upload']['name'],"../logo/");
				$file_path="../logo/".$big_image;
				copy($temp_name,$file_path);

		
////////////////////////////////////////////////////////////////////////////////////////////////////////////////

				$insert1 = "insert into manage_photo set
											path = '".$big_image."',
											name = '".$_REQUEST['TxtName']."',
											status = 0,
											date = '".time()."'";
				$set = mysql_query($insert1);									
				redirect("view-logo.php?msg=add");

}
    include("html/admin/header.html");
	include("html/admin/upload-logo.html");
	include("html/admin/footer.html");
?>
