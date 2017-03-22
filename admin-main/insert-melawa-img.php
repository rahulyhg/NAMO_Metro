<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
<?php session_start();
include("includes/global.inc.php");
include("fckeditor.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");

if($_POST)
{
	foreach ($_FILES as $key => $value) {
			
	 // print_r($value[name]);
		$temp_name1=$value[tmp_name];
		$file_name11=$value[name];			
		// print_r($file_name11);exit;
		$file_path1="../melawa/".$file_name11;
		move_uploaded_file($temp_name1,$file_path1);
		
		if($_REQUEST['melawa_sub_id'] != 0 && $file_name11 != "")
		{
		$insert1 = "insert into melawa_images set
									melawa_sub_id		=	'".$_REQUEST['melawa_sub_id']."',
									melawa_img_src		=	'".$file_name11."'";
		$set = mysql_query($insert1);	
		}				
		
	}
	redirect("insert-melawa-img.php?msg=add");
	// exit;
	
}


$sql = "select * from projects order by sub_date ASC";
$result = mysql_query($sql) or die(mysql_error());
while($rowLogo = mysql_fetch_array($result))
	{
		$melawaList .= '
				<option value="'.$rowLogo['sub_id'].'">'.$rowLogo['melawa_date'].'</option>
		';
	}
	

include("html/admin/header.html");
include("html/admin/insert-melawa-img.html");
include("html/admin/footer.html");
?>
