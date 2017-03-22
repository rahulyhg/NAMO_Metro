<?php
include("includes/global.inc.php");

if($_REQUEST['statusm'] == 0)
	{
		$query="update user set statusmail = 1  where user_id =".$_REQUEST['uid']; 
		mysql_query($query);
	}
else
	{
		$query="update user set statusmail = 0  where user_id =".$_REQUEST['uid'];
		mysql_query($query);	
	}


$country = "select * from user where user_id = '".$_REQUEST['uid']."'";
$countryFire = mysql_query($country) or die(mysql_error());
$rowCountry = mysql_fetch_array($countryFire);
		
	$from 	= "sumit.saxena@pipaldesign.com";
	$to = $rowCountry['email'];
	$sub = "UserName And Password From Buildart ";
	$msg  .= "";
	$msg_re ="";	
	$msg .='
	<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>UserName/Password</title>
    <style type="text/css">    
    body {
    margin-left: 0px;
    margin-top: 50px;
    margin-right: 0px;
    margin-bottom: 0px;
    }
    .TextCss {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    color:#333333 ;
    padding:45px;
    
    }    
    </style></head>

<body>
              <table width="" height="" border="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="border:2px solid #CCC">
              <tr>
                <td><img src="http://www.buildart.in/images/logo-mf.jpg" width="600" height="79" border="0"></td>
                  </tr>
                  <tr>
                    <td colspan="2" class="TextCss"><p>Dear Client</p>
                      <p>You have been successfully registed to our system, now you are free to have <br>
                        <a href="http://www.buildart.i/client-login.php">Please click here to login</a></p>
                    <p>The Username and Password to view your presentation is as follows:</p>
                    <p><strong>Username</strong>: '.$rowCountry['username'].'<br>
                      <strong>Password</strong>: '.$rowCountry['password'].'</p>
<p>Thanks &amp; Regards,<br>
  Buildart</p></td>
                  </tr>
</table>
</body>
</html>';			
	$mailheaders  = "MIME-Version: 1.0\n";
	$mailheaders .= "Content-type: text/html; charset=iso-8859-1\nContent-Disposition: inline;\n";
	$mailheaders .= "From: Slimkm \n";
	//echo $msg; exit;
	mail($to,$sub,$msg,$mailheaders) or die("Sorry Mail Sending Fail :");

?>
<script language="javascript" type="text/javascript">
	document.location.href="view-user.php?msg=mail";
</script>
			