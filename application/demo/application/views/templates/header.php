<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$registration_id = $this->session->userdata('registration_id');
$name = $this->session->userdata('registration_fname');
//print_r(base_url());exit;
?>
<!DOCTYPE html>
<html>
<head>
<title>Saiprasad Vivah | Home </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" " />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url();?>public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link href="<?php echo base_url();?>public/css/main.css" rel="stylesheet"/>
<link href="<?php echo base_url();?>public/css/table-style.css" rel="stylesheet"/>
<link href="<?php echo base_url();?>public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--view profile album-->
<!-- js -->
<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery-2.1.4.min.js"></script>

<!-- //js -->
<!--<link href='//fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>-->
<!--<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>-->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url();?>public/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

 <link rel="stylesheet" href="<?php echo base_url();?>public/css/templatemo_misc.css">
<link href="<?php echo base_url();?>public/register/assets/css/gsdk-base1.css" rel="stylesheet" />
<!--vertical-tab-->
<link href="<?php echo base_url();?>public/css/easy-responsive-tabs.css" rel="stylesheet" />
<!--accordian-->

<link rel="stylesheet" href="<?php echo base_url();?>public/css/accordian.css">
<!--circle-->
<link rel="stylesheet" href="<?php echo base_url();?>public/css/circle.css">
<!--*************datepicker ******************-->

<!--**********-->
<!-- dataTables -->
<link href="<?php echo base_url();?>public/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>public/plugins/datepicker/datepicker.css?>" rel="stylesheet" type="text/css" />
<style>

.comments-grid-left {
    float: left;
    width: 25%;
}
.comments-grid-right {
    float: right;
    width: 70%;
}

</style>

 <link href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css" rel="stylesheet">
 
</head>
	
<body>
<!-- header -->
	<div class="header">	
		<div class="header-top">
			<div class="container"> 
				<div class="header-top-left">
					<ul>
						<li><a><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>9702970803<a></li>
						<li><a><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>saiprasadvivah@gmail.com</a></li>
 					</ul>
				</div>
				<div class="header-top-right">
					<ul>
						<?php if(!empty($registration_id)): ?>
	                    	<li class="dropdown"> 
			            		<a data-toggle="dropdown" class="dropdown-toggle" href="<?php echo base_url('common/my_account');?>"><i class="glyphicon glyphicon-user"></i>&nbsp;Hi,&nbsp;<?php echo $name ?></a>
			              		<ul class="dropdown-menu">
			                		<li><a href="<?php echo base_url('common/my_account');?>">My Account</a></li>
			                  		<li class="divider"></li>
			                		<li><a href="<?php echo base_url('common/logout');?>">Logout</a></li>
			              		</ul>
			         		</li>
		         		<?php else: ?>
            				<!-- <li style="padding-left:7px;"><a href="login.html"><i class="glyphicon glyphicon-log-in"></i>&nbsp; Login</a></li> -->
            				<li><a href="<?php echo base_url('common/register');?>"><i class="glyphicon glyphicon-user"></i>&nbsp; Register</a>&nbsp;|
                     &nbsp;<a href="<?php echo base_url('common/login');?>"><i class="glyphicon glyphicon-log-in"></i>&nbsp; Login</a></li>
            			<?php endif; ?> 
          			</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
							<h1><a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>public/images/logo-(1).png"></a></h1>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav> 
							<ul class="nav navbar-nav">
								<li class="<?php echo ($link=='index')?"active":"hvr-bounce-to-bottom";?>"><a href="<?php echo base_url();?>">Home</a></li>
								<li class="<?php echo ($link=='melawa')?"active":"";?>"><a href="<?php echo base_url('common/melawa_page/3');?>" class="hvr-bounce-to-bottom">Melawa</a></li>
								<li class="<?php echo ($link=='membership')?"active":"";?>"><a href="<?php echo base_url('common/membership');?>" class="hvr-bounce-to-bottom">Membership</a></li>
								<li ><a href="<?php echo base_url('common/show_success_stories');?>" class="hvr-bounce-to-bottom">Success Stories</a></li>
							<?php if(!empty($registration_id)): ?>
								<li class="<?php echo ($link=='advance_search')?"active":"";?>"><a href="<?php echo base_url();?>common/advance_search" class="hvr-bounce-to-bottom">Advance Search</a></li>
							<?php endif; ?>
                                <li class="<?php echo ($link=='contact_us')?"active":"";?>"><a href="<?php echo base_url('common/show_pages/contact_us/3');?>" class="hvr-bounce-to-bottom">Contact Us</a></li>
							</ul>
						</nav>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //header -->

<!-- The Modal -->
  <div id="myModal" class="modal"> 
    
    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header"> <span class="close">&times</span>
        
      </div>
      <div class="modal-body">
        <div class="form-group">
        	 <br/>
         <textarea placeholder="Write Your Text" rows="4" class="form-control"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <!-- <button class="pull-right btn btn-send"><a href="#">Send</a></button> -->
       </div>
    </div>
  </div>
  <!--/modal-pop-up--> 