<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<?php session_start();
include("includes/global.inc.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");

 
if($_REQUEST['status'] == 1)
	{
		 //print_r(123);exit;
		$query="update registration set registration_status = 0  where registration_id =".$_REQUEST['lid'];
		mysql_query($query);

	}
else
	{
		//print_r(222);exit();
		$query="update registration set registration_status = 1,  registration_startdate = ".time()."  where registration_id =".$_REQUEST['lid'];
		$ans = mysql_query($query);
		 //print_r(mysql_query($query));exit;
		 if(!empty($ans))
		 {
		 	$this.send_reg_confirmation_mail($_REQUEST['lid']);	
		 }
		 else
		 {
		 	
		 }
		
	}

if($_REQUEST['act'] == "del")
	{
	
		$query="delete from registration where registration_id =".$_REQUEST['lid'];
		$row = mysql_query($query) or die(mysql_error());
			?>
			<script language="javascript" type="text/javascript">
			document.location.href="member-approval-request.php?msg=delete";
			</script>
			<?php
	}


	

$targetpage = "member-approval-request.php";	

$limit = 10;

$query = "SELECT COUNT(*) as num from registration registration_status = 0";
$total_pages = mysql_fetch_array(mysql_query($query));
$total_pages = $total_pages[num];

$stages = 3;
$page = mysql_escape_string($_GET['page']);
if($page){
$start = ($page - 1) * $limit;
}else{
$start = 0;
}

// Get page data
$sql = "select * from registration where registration_status = 0 order by registration_date DESC LIMIT $start, $limit";
$result = mysql_query($sql);





if ($page == 0){$page = 1;}
$prev = $page - 1;
$next = $page + 1;
$lastpage = ceil($total_pages/$limit);
$LastPagem1 = $lastpage - 1;

$paginate = '';
if($lastpage > 1)
{

$paginate .= "<div class='paginate'>";
// Previous
if ($page > 1){
$paginate.= "<a href='$targetpage?page=$prev'>previous</a>";
}else{
$paginate.= "<span class='disabled'>previous</span>"; }

// Pages
if ($lastpage < 7 + ($stages * 2)) // Not enough pages to breaking it up
{
for ($counter = 1; $counter <= $lastpage; $counter++)
{
if ($counter == $page){
$paginate.= "<span class='current'>$counter</span>";
}else{
$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}
}
}
elseif($lastpage > 5 + ($stages * 2)) // Enough pages to hide a few?
{
// Beginning only hide later pages
if($page < 1 + ($stages * 2))
{
for ($counter = 1; $counter < 4 + ($stages * 2); $counter++)
{
if ($counter == $page){
$paginate.= "<span class='current'>$counter</span>";
}else{
$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}
}
$paginate.= "...";
$paginate.= "<a href='$targetpage?page=$LastPagem1'>$LastPagem1</a>";
$paginate.= "<a href='$targetpage?page=$lastpage'>$lastpage</a>";
}
// Middle hide some front and some back
elseif($lastpage - ($stages * 2) > $page && $page > ($stages * 2))
{
$paginate.= "<a href='$targetpage?page=1'>1</a>";
$paginate.= "<a href='$targetpage?page=2'>2</a>";
$paginate.= "...";
for ($counter = $page - $stages; $counter <= $page + $stages; $counter++)
{
if ($counter == $page){
$paginate.= "<span class='current'>$counter</span>";
}else{
$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}
}
$paginate.= "...";
$paginate.= "<a href='$targetpage?page=$LastPagem1'>$LastPagem1</a>";
$paginate.= "<a href='$targetpage?page=$lastpage'>$lastpage</a>";
}
// End only hide early pages
else
{
$paginate.= "<a href='$targetpage?page=1'>1</a>";
$paginate.= "<a href='$targetpage?page=2'>2</a>";
$paginate.= "...";
for ($counter = $lastpage - (2 + ($stages * 2)); $counter <= $lastpage; $counter++)
{
if ($counter == $page){
$paginate.= "<span class='current'>$counter</span>";
}else{
$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}
}
}
}

// Next
if ($page < $counter - 1){
$paginate.= "<a href='$targetpage?page=$next'>next</a>";
}else{
$paginate.= "<span class='disabled'>next</span>";
}

$paginate.= "</div>";

}
// echo $total_pages.' Results';


$noLogo = $start;

while($rowLogo = mysql_fetch_array($result))
	{
	
		if($rowLogo['registration_status'] == 1)
			{
				$statusLogo = '<a href="member-approval-request.php?lid='.$rowLogo['registration_id'].'&status=1"><img src="images/icon-active.jpg" alt="Deactive" width="20" height="20" /> </a>';
			}
		else
			{
				$statusLogo = '<a href="member-approval-request.php?lid='.$rowLogo['registration_id'].'&status=0"><img src="images/icon-deactive.jpg" alt="Deactive" width="20" height="20" /> </a>';
			}

		if($rowLogo['registration_pay_mode'] == 1)
		{
			$mode = "Offline Paid";
		}
		else if($rowLogo['registration_pay_mode'] == 2)
		{
			$mode = "Already Paid";
		}
		else if($rowLogo['registration_pay_mode'] == 0)
		{
			$mode = "Not Selected";
		}
		else if($rowLogo['registration_pay_mode'] == 3)
		{
			$mode = "Online Paid";
		}
		else if($rowLogo['registration_pay_mode'] == 4)
		{
			$mode = "Online Paid";
		}

		$status = $rowLogo['registration_payment_status'];
		$dateANDtime = date('F j, Y', $rowLogo['registration_date']);
		$noLogo++;
		$qunew = str_replace(" ", "_", $rowLogo['registration_highest_qualification']);  
		$dataLogo .= '
				<tr class="allqual '.$qunew.'">
					<td align="center">'.$noLogo.'</td>
					<td><a href="full-profile.php?rid='.$rowLogo['registration_id'].'" target="_blank">'.ucfirst($rowLogo['registration_fname']).'</a></td>
					<td>'.ucfirst($rowLogo['registration_lname']).'</td>
					<td>SPV'.$rowLogo['registration_id'].'</td>
					
					<td>'.$rowLogo['registration_email'].'</td>
					
					<td><img src="../register/'.$rowLogo['registration_photo'].'" width="50" height="50" alt="photo" /></td>
					<td>'.$dateANDtime.'</td>
					<td>'.$mode.'</td>
					<td>'.$status.'</td>
					<td align="center">
						'.$statusLogo.' 
						<a href="edit-profile.php?lid='.$rowLogo['registration_id'].'" target="_blank" class="headerLink"><img src="images/icon-edit.jpg" alt="Edit" width="20" height="20" /></a>
						<a href="member-approval-request.php?act=del&lid='.$rowLogo['registration_id'].'" class="headerLink" onclick="return ask_ques();"><img src="images/icon-delete.jpg" alt="Delete" width="20" height="20" /></a>
					</td>
				</tr>
		';
	}
	
$selectQualification = "select registration_highest_qualification from registration group by registration_highest_qualification";
$result_quali = mysql_query($selectQualification) or die(mysql_error());
				$qualifdata =  array();
				while($quali = mysql_fetch_assoc($result_quali))
                {
					$qualifdata[] = $quali['registration_highest_qualification'];
                } 
				/*print '<pre>';
				print_r($qualifdata);*/


// print_r($result);exit;
	/*****************************/
	function send_reg_confirmation_mail($id)
			{
				 //print_r($id);exit;
				$sql = "select * from registration where registration_id = ".$id;

				$result = mysql_query($sql) or die(mysql_error());
				$user_data = mysql_fetch_assoc($result);
				// echo "<pre>";print_r($user_data['registration_email']);exit;

				$from = 'noreply@saiprasadvivah.net';

				$to = $user_data["registration_email"];

				$subject="Registration Conformation";


	$msg  .= "";

	$msg .='

	<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Saiprasad</title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<style type="text/css">    

	body {
		margin-left:100px;
		margin-right:100px;
	}

	#main-div{
		background-size: 100%;
		background-image: url("../images/473025691.jpg");
		background-repeat: no-repeat;
    	background-position: center center;
    	background-attachment: fixed;
    	opacity: 0.5;
    	filter: alpha(opacity=90);

	}
	
	.TextCss {

	font-family: Arial, Helvetica, sans-serif;

	font-size: 12px;

	color:#333333 ;

	padding:45px;

	}    

	</style>

	</head>

	<body>
	<div class="container" style="width:700px;">
	<div style="background:#fff; border: 1px solid #b3b3b3; width:650;">
		<div style="margin-left:10px; margin-top: 10px; margin-bottom: 0px;">
			<img src="http://'.$_SERVER['SERVER_NAME'].'/public/images/logo-(1).png"  style="align:center; height:150px width: 200px;" />
		</div>
		<br/>
		<div style="background:#d9d9d9; padding:30px;height:auto; text-align:justify;" >
			<b>Dear '.$user_data["registration_fname"].',</b>
			<br/>
			<p>Welcome to SHREE SAI PRASAD VIVAH <b>Founder / President : Mr. Baburao Sonawane,</b></p>
			
			<p>Sai Prasad Vivah is Most Trusted & Successful Matrimony Portal in Hindu-Chambhar Community, Sai Prasad Vivah started working manually in 1993 from home and pioneered online in 2004.The service was found with simple objective to help people find happiness. Sai Prasad Vivah has created a community-renowned service that has touched over thousands of people.</p>
			<br/>
			<b><p style="color:#000;font-size:18px;">Login Details:</p>
			<p>Email ID: '.$user_data["registration_email"].'</p>	       
			<p>Password: '.$user_data["registration_password"].'</p>
	       <p>Your Profile id is: SPV'.$user_data["registration_id"].'</p>
	       <br/>
			<p style="color:#ff8533;font-size:18px;">Special Note for Members Benefit:</p></b>
			<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<li>Please Check your profile is completed or not.</li>
				<li>Please complete ABOUT MYSELF & ABOUT MY PARTNER.</li>
				<li>Please add your 2 or 3 new photos in MY ALBUM</li>
				<li>Please Note upload photo 600 x 700 Size or Less than 1.00 MB.</li>
				<li>Please Check your profile daily on our Website & take a facility of Send Messages.</li>
				<li>After Log in when you looking Received Messages We request to all MEMBERS Please REPLY the Messages  in answer YES or NO Because Candidates waiting for your valuable Reply.</li>
				<li>If your ENGAGEMENT OR MARRIAGE is fixed, for delete or Remove your profile from our Web Site. Only Telephonic communication will not be treated as an official Massage. Only Official E-Mail is Compulsory. </li>
			</div>
			</div>
			<br/>
	       <br/>
			<div class="row">
				<div style="text-align:center;font-size:17px;">
				Please contact us for Support
				</div>

				<div style="text-align:center;font-size:17px;">
				<b>E-mail:</b> saiprasadvivah@gmail.com  OR Tel: 9702970803, 9833096623
				</div>

				<div style="text-align:center;font-size:17px;">
				<b>Visit on</b><a href="http://saiprasadvivah.net"> www.saiprasadvivah.net</a> 
				</div><br/>

				<div style="text-align:center;color:#ff8533;">**************************************************************</div>

            	<div style="text-align:center;color:#ff8533;">We value your time and support!!</div>

            	<div style="text-align:center;color:#ff8533;">**************************************************************</div>
            
			</div>
			<br/>
	       <br/>
			<footer>
	            <b>Thanks & Regards,</b>
	            <br/>
				SAI PRASAD VIVAH.NET<br/>
				<b>Mr. BABURAO A SONAWANE</b><br/>
				Conact no.: 9702970803<br/>
				ADD- 98/3446, Nehru Nagar,Kurla<br/>
				Mumbai 400024.
            </footer> 

			</div>
	       
	 </div>
	</div>
	</div>
	</body>

	</html>';	
	//print_r($msg);exit;
	$mailheaders  = 'MIME-Version: 1.0' . "\r\n";

	$mailheaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	$mailheaders .= 'From: Saiprasad Vivah <noreply@saiprasadvivah.net>' . "\r\n";

	mail($to,$subject,$msg,$mailheaders);

  
// print_r($msg);exit;

			}
// 
	/*****************************/


    include("html/admin/header.html");
	include("html/admin/member-approval.html");
	include("html/admin/footer.html");
?>