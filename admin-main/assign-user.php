<?php session_start();
include("includes/global.inc.php");
chkAdminSession(2);

if($_POST)
	{
		$insert1 = "insert into usertosurvey set
									userid 	=	'".$_REQUEST['user-id']."',
									surveyid 	=	'".$_REQUEST['user_type']."',
									status		=	0,
									date	=	'".time()."'";
		$set = mysql_query($insert1) or die(mysql_error());									
		redirect("view-user.php?msg=padd");	
	}


$sql = "select * from user where user_id = '".$_REQUEST['lid']."'";
$result = mysql_query($sql) or die(mysql_error());
$rowUser = mysql_fetch_array($result);

$sql1 = "select * from manage_video where video_status = 1";
$result1 = mysql_query($sql1) or die(mysql_error());
while($rowPresentation = mysql_fetch_array($result1)) 
	{
		$dataPresentation .= '<option value="'.$rowPresentation['videoId'].'">'.$rowPresentation['video_name'].'</option>';
	}

include("html/admin/header.html");
include("html/admin/assign-user.html");
include("html/admin/footer.html");
?>