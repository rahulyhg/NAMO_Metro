<?php 
$comma = ",";
 if(!isset($reg_id))
 {
 	$reg_id = '';
 }
 if(!isset($search_user_gender))
 {
 	$comma = "";
 	$search_user_gender = '';
 }
?>
<!doctype html>
<html>
<head>
<title>Saiprasad Vivah | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" " />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="<?php echo base_url();?>public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
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
			<h2>Login To Your Profile</h2> 
			
			<!-- <form action="<?php echo base_url('common/login_action')?>" method="post"> -->
			
			<form id="login_form">
			<div class="col-sm-10 col-sm-offset-1 alert_msg" style="color:white;padding: 10px;"></div>
			<br/>
			<div class="agileits-top">
					
						
					
					<div class="styled-input">
						<input type="text" name="registration_email" id="registration_email" required/>
						<label>User Name</label>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="password" name="registration_password" id="registration_password" required> 
						<label>Password</label>
						<span></span>
					</div> 
					<div class="wthree-text"> 
						<ul>
							<li>
								<input type="checkbox" id="brand" value="">
								<label for="brand"><span></span> Remember me ?</label>  
							</li>
							<li> <a href="<?php echo base_url()?>common/forgot_password_view">Forgot password?</a> </li>
						</ul>
						<div class="clear"> </div>
					</div>
			</div>
			<div class="agileits-bottom">
					<input type="button" onclick="login_action(<?php echo $reg_id;?><?php echo $comma;?>'<?php echo $search_user_gender;?>');" value="Sign In">
			</div>
			</form>
            <div class="signup txt-center"> 
						 <p>Don't have account yet?<a href="<?php echo base_url('common/register');?>"> Sign Up </a> </p>
						<div class="clear"> </div>
			</div> 
           
           	
		</div>	
	</div>



<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="padding-top:13%;">
    <div class="col-sm-4 col-sm-offset-4">
      <div class="modal-content">
        <div class="modal-header" style="background-color: red; color:white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <p></p>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
          <!-- <p class="pull-left"><a onclick="genarate_otp();" style="cursor: pointer;">Resend OTP ??</a></p> -->
        </div>
      </div>
    </div>
  </div>





<script src="<?php echo base_url();?>public/register/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>public/register/assets/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>public/register/assets/js/bootstrap.min.js" type="text/javascript"></script>
	<!-- //copyright -->
<script>
   var base_url = "<?php echo base_url();?>";
</script>
<script src="<?php echo base_url();?>public/js/master.js"></script>
</body>
</html>