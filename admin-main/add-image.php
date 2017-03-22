<? session_start();
include("includes/global.inc.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");
if($_POST)
	{
		$temp_name1 = $_FILES['products_thumb_image'][tmp_name];
		$file_name11 = $_FILES['products_thumb_image'][name];		
		$file_path1 = "../melawa/images/".$file_name11;
		move_uploaded_file($temp_name1,$file_path1);
		
	
		
		$insertStory = "insert into product_photo set
												photo_product_id	=	'".$_REQUEST['pid']."',
												photo_small			=	'".$file_name11."',
												photo_status		=	0,
												photo_date			=	'".time()."'";
		mysql_query($insertStory) or die(mysql_error());
		redirect("view-photo.php?pid=".$_REQUEST['pid']."");
	}
    include("html/admin/header.html");
	include("html/admin/add-image.html");
	include("html/admin/footer.html");
?>
