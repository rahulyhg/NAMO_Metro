<?php 
session_start();
include("includes/global.inc.php");
include("fckeditor.php");
ini_set("memory_limit","320000000000000000000000000000000000000");

if($_POST)
{
//print'$date2';
	$selectData = "select * from  news where id  ='".$_REQUEST['lid']."'";
	$fireData = mysql_query($selectData) or die(mysql_error());
	$rowData = mysql_fetch_array($fireData);
	
	$date2 = strtotime($_REQUEST['date1']);
	if($_REQUEST['date1']==0)
	{ 
		$date2 = $rowData['date'];
	 }
	else
	{ 
		$date2 = strtotime($_REQUEST['date1']);
	}
	
	 $insert1 = "update  news set
			
								
								date 	= 	'".$date2."',
								content = '".addslashes($_REQUEST['content'])."'
							     where  id  = '".$_REQUEST['lid']."'";
								
			 $set = mysql_query($insert1) or die(mysql_error());					

			redirect("view-news.php?msg=edit");

}
 
 
 
$selectData = "select * from  news where id  ='".$_REQUEST['lid']."'";
$fireData = mysql_query($selectData) or die(mysql_error());
$rowData = mysql_fetch_array($fireData);

$dateANDtime = date('F j, Y', $rowData['date']);


$sBasePath = $_SERVER['PHP_SELF'] ;
$sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;

$oFCKeditor = new FCKeditor('content') ;
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Value		= stripslashes($rowData['content']) ;


    include("html/admin/header.html");
	include("html/admin/edit-news.html");
	include("html/admin/footer.html");
?>
