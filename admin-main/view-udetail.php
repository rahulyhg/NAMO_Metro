<? session_start();
include("includes/global.inc.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");

if($_REQUEST['status'] == 1)
	{
		$query="update usertosurvey set status = 0  where id =".$_REQUEST['lid']; 
		mysql_query($query);
	}
else
	{
		$query="update usertosurvey set status = 1  where id =".$_REQUEST['lid'];
		mysql_query($query);	
	}
	
if($_REQUEST['act'] == "del")
	{
	
		$query="delete from usertosurvey where id =".$_REQUEST['lid'];
		$row = mysql_query($query) or die(mysql_error());
			?>
			<script language="javascript" type="text/javascript">
			document.location.href="show-user-present.php?msg=delete";
			</script>
			<?
	}

		
$sql = "select * from user where  company = '".$_REQUEST['cmpn']."'";
$result = mysql_query($sql) or die(mysql_error());

$noLogo = 0;
while($rowLogo = mysql_fetch_array($result))
	{
//////////////////////FIND USER NAME//////////////////////////////
$selectUser = "select * from usertosurvey where userid = '".$rowLogo['user_id']."'";
$queryUser = mysql_query($selectUser) or die(mysql_error());
		while($rowCompanyName = mysql_fetch_array($queryUser))
			{
//////////////////////FIND USER NAME//////////////////////////////
$selectPresentation = "select * from manage_video where videoId = '".$rowCompanyName['surveyid']."'";
$queryPresentation = mysql_query($selectPresentation) or die(mysql_error());
$rowPresentation = mysql_fetch_array($queryPresentation);
//////////////////////////////////////////////////////////////////	
		$dateANDtime = date('F j, Y', $rowLogo['date']);
		$noLogo++;
		$dataLogo .= '
				<tr>
					<td align="center">'.$noLogo.'</td>
					<td>'.ucfirst($rowLogo['company']).'</td>
					<td>'.ucfirst($rowLogo['refname']).'</td>
					<td>'.$rowPresentation['video_name'].'</td>					
					<td>'.$dateANDtime.'</td>
				</tr>';
			}
	}
	

	
   include("html/admin/header.html");
	include("html/admin/view-udetail.html");
	include("html/admin/footer.html");
?>
