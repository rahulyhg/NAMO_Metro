<?php

include("includes/global.inc.php");

// $file = 'sheet';
// $csv_output = array();
$today = date("Y-m-d");
$today = explode("-",$today);
// print_r($today[1]);exit;
$sql = "SELECT registration_email,registration_birth_date,registration_fname FROM registration";
		$result = mysql_query( $sql);

		// $row = mysql_fetch_assoc($result);
		// print_r($row);

$i = 0;
			if (mysql_num_rows($result) > 0)
			{
				  $tmp = array();
					while ($row = mysql_fetch_assoc($result))
					{
						$birth_date = explode("-",$row['registration_birth_date']);
						if($today[1] == $birth_date[1] && $today[2] == $birth_date[2])
						{
							// echo "<pre>";print_r($row);
							$this.send_birthday_mail($row);

						}
						
						$i++;
					}
			}
			else{

			}


			function send_birthday_mail($data)
			{
				 // echo "<pre>";print_r($data['registration_fname']);exit;

				$from 	= $_REQUEST['saiprasadvivah3@gmail.com'];

				$to = $data['registration_email'];

				$subject="HAPPY BIRTHDAY";


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
    	height:500px;
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
	<div><img src="../images/logo.jpg"/></div>
	<div id="main-div" style="text-align:center;">

		<p style="font-family:Actonia PERSONAL USE, Helvetica, sans-serif; color:#cc0000; text-align:center; padding-top:20%;opacity: 1.0;font-size: 23px;"> 

		<strong>Dear '.ucfirst($data['registration_fname']).' <br/> We at Saiprasadvivah want to wish you a Happy Birthday!<br/> We are grateful for customers like you and we hope you have a wonderful day.<br/> Your birthday is the most special day in your life, so enjoy it to the fullest!
Happy Birthday!</strong></p>

	</div>
	
	<div style="back-color:#cccccc;color:black; padding-top:2%;">
		<b>Office Address:</b>

	    B.A.SONAWANE, 98/3446, NEHRU NAGAR, KURLA (E),

	    Mumbai - 400 024.<br/>

	    <b>Phone Number</b>: 022-65653536, <br/><b>Mobile Number</b>: 9833096623.<br/>

	    <b>Email</b>: saiprasadvivah@gmail.com    <br/> 
	</div>

	</div>


	</body>

	</html>';	
	print_r($msg);exit;
	$mailheaders  = 'MIME-Version: 1.0' . "\r\n";

	$mailheaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	$mailheaders .= 'From: Saiprasad Vivah <noreply@saiprasadvivah.net>' . "\r\n";

	mail($to,$subject,$msg,$mailheaders);

  
// print_r($msg);exit;

			}
// 


?>