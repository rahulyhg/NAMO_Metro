<? session_start();
include("includes/global.inc.php");
chkAdminSession(2);
include("fckeditor.php");
 
 if($_POST)
	 {
	 	
			if($_FILES['image_upload'][name] == "")
				{
					$sql1 = "select * from pagesp where pages_id = '".$_REQUEST['pid']."'";
					$result1 = mysql_query($sql1) or die(mysql_error());
					$rowData = mysql_fetch_array($result1);
					$file_name1 = $rowData['pages_photo'];		
				}
			else
				{
						// Where the file is going to be placed
						$temp_name=$_FILES['image_upload'][tmp_name];
						$file_name1=$_FILES['image_upload'][name];			
					
						$file_path="../photo/".$file_name1;
						move_uploaded_file($temp_name,$file_path);
				}		
		
	 
		 $insert="update  pagesp set
									pages_name	 = '".$_REQUEST['txtFirstname']."',
									pages_photo	 = '".$file_name1."',
									pages_desc	 = '".$_REQUEST['FCKeditor1']."' 
										   where pages_id =".$_REQUEST['pid'];
		 
		 mysql_query($insert);
		 redirect("manage_pages_photo.php?pid=".$_REQUEST['pid']);
	 }


$strsql="select * from  pagesp  where pages_id = ".$_REQUEST['pid'];
$strcommand=mysql_query($strsql);
$strrow=mysql_fetch_array($strcommand);

$sBasePath = $_SERVER['PHP_SELF'] ;
$sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;

$oFCKeditor = new FCKeditor('FCKeditor1');
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Value		= addslashes($strrow['pages_desc']) ;
 	  
    include("html/admin/header.html");
	include("html/admin/manage_pages_photo.html");
	include("html/admin/footer.html");
?>
