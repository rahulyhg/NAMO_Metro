<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<?php session_start();
include("includes/global.inc.php");
chkAdminSession(2);
include("fckeditor.php");


$strsql="select * from  pages  where pages_id = ".$_REQUEST['pid'];
$strcommand=mysql_query($strsql);
$strrow=mysql_fetch_array($strcommand);
// print_r($strrow);exit;
	 if($_POST)
		 {
		 
			 $insert="update  pages set
			 	pages_name = '".$_REQUEST['txtFirstname']."',
			   pages_desc  = '".addslashes($_REQUEST['editor1'])."' 
			 where pages_id =".$_REQUEST['pid'];
			 
			 mysql_query($insert);
			 redirect("adminHome.php");
		 }




$sBasePath = $_SERVER['PHP_SELF'] ;
$sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;

$oFCKeditor = new FCKeditor('FCKeditor1');
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Value		= addslashes($strrow['pages_desc']) ;
 	  
    include("html/admin/header.html");
	include("html/admin/manage_pages.html");
	include("html/admin/footer.html");
?>
