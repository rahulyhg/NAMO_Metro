<?php session_start();
include("../includes/global.inc.php");
chkAdminSession(2);
include("fckeditor.php");
  
$strsql="select * from  pages  where pages_id = ".$_REQUEST['page_id'];
 $strcommand=mysql_query($strsql);
 $strrow=mysql_fetch_array($strcommand);
 if($_POST)
 {
 
	 $insert="update  pages set pages_name = '".$_REQUEST['txtFirstname']."',
	   pages_desc  = '".$_REQUEST['FCKeditor1']."' 
									   where pages_id =".$_REQUEST['page_id'];
	 
	 mysql_query($insert);
	 redirect("manage_pages.php?acting=edit");
 }
 
 
 
$sBasePath = $_SERVER['PHP_SELF'] ;
$sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;

$oFCKeditor = new FCKeditor('FCKeditor1') ;
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Value		= addslashes($strrow['pages_desc']) ;

   
  	
  include("../html/admin/header.html");
  include("../html/admin/editpages.html");
 include("../html/admin/footer.html");
?>