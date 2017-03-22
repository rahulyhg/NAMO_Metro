<!DOCTYPE html>
<html>
<head>
<title>Saiprasad Vivah | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" " />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>public/login/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<!--<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>--><!--web font-->
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main"> 
		<h1><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>public/images/logo-(1).png"></a></h1>
		<div class="login-form"> 
			<h2>Forgot Password</h2> 
			
			<!-- <form action="<?php echo base_url('common/login_action')?>" method="post"> -->
			
			<form id="forgot_pass_form">
			<div class="agileits-top">
					
						<div class="col-sm-7 col-sm-offset-3 alert_msg1" style="color:white;"></div>
					
					<div class="styled-input">
						<input type="text" name="registration_email" id="registration_email" onchange="isEmail()" required/>
						<label>Email Id</label>
						<span></span>
					</div>
			</div>
			<div class="agileits-bottom">
					<input type="button" onclick="forgot_pass();" value="Submit">
			</div>
			</form>
            <div class="signup txt-center"> 
						 <p>Don't have account yet?<a href="<?php echo base_url('common/register');?>"> Sign Up </a> </p>
						<div class="clear"> </div>
			</div> 
           
           	
		</div>	
	</div>	

<script src="<?php echo base_url();?>public/register/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>public/register/assets/js/jquery.validate.min.js"></script>
	<!-- //copyright -->
<script>
   var base_url = "<?php echo base_url();?>";
</script>
<script src="<?php echo base_url();?>public/js/master.js"></script>
</body>
</html>