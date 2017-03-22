<?php 
  $registration_id = $this->session->userdata('registration_id');
  $name = $this->session->userdata('registration_fname');
  // print_r($registration_id);exit;
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Saiprasad Vivah | Success Stories</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Plottage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url();?>public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>public/css/main.css" rel="stylesheet"/>
<!-- js -->
<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!--<link href='//fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>-->
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
<!-- start-smoth-scrolling -->

</head>
	
<body>
<!-- header -->
	<div class="header">	
		<div class="header-top">
			<div class="container"> 
				<div class="header-top-left">
					<ul>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>9702970803</li>
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
								<li class="hvr-bounce-to-bottom"><a href="<?php echo base_url();?>">Home</a></li>
								<li><a href="<?php echo base_url('common/melawa_page/3');?>" class="hvr-bounce-to-bottom">Melawa</a></li>
								<li><a href="<?php echo base_url('common/membership');?>" class="hvr-bounce-to-bottom">Membership</a></li>
								<li class="active"><a href="<?php echo base_url('common/show_success_stories');?>" class="hvr-bounce-to-bottom">Success Stories</a></li>
							<?php if(!empty($registration_id)): ?>
								<li><a href="<?php echo base_url();?>common/advance_search" class="hvr-bounce-to-bottom">Advance Search</a></li>
							<?php endif; ?>
                                <li><a href="<?php echo base_url('common/show_pages/contact_us/3');?>" class="hvr-bounce-to-bottom">Contact Us</a></li>
							</ul>
						</nav>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //header -->
<!-- breadcrumbs -->
	<div class="services-top-breadcrumbs">
		<div class="container">
			<div class="services-top-breadcrumbs-right">
				<ul>
					<li><a href="<?php echo base_url();?>">Home</a> <i>/</i></li>
					<li>Success Stories</li>
				</ul>
			</div>
			<div class="services-top-breadcrumbs-left">
				<h3  style="color:#fc9b4b;"><?php echo ((empty($registration_id)?"Success Stories":"SPV".$registration_id))?></h3>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<h3><span>Success Stories</span></h3>
			<p class="autem">Sai Prasad Vivah Is One Of The Most Finest And Sucessful Matrimony Portal In Hindu-Chambhar Community.</p>
			<div class="gallery-grids carouselGallery-grid hidden-xs">
			  <?php 
			      foreach($success_stories as $value)
							{
								// print_r( $value['sub_desc1']);
								// echo "<hr>";
								
						?>
				<div class="col-md-3 gallery-grid">
					<div class="carouselGallery-col-1 carouselGallery-carousel" data-likes="<?php echo $value["sub_Mdate"];?>" data-index="0" data-username=" " data-imagetext='<?php echo $value["sub_desc1"];?>'
						data-location="<?php echo $value['sub_name'];?>  Weds <?php echo $value['sub_name2'];?>" data-imagepath="<?php echo base_url().'successstories/'.$value['sub_image_above']?>" data-posturl="#" 
						style="background-image:url(<?php echo base_url().'successstories/'.$value['sub_image_above']?>);">
						<div class="carouselGallery-item">
							<div class="carouselGallery-item-meta">
								<span class="carouselGallery-item-meta-user">
									<?php echo $value['sub_name'];?>
								</span>
								<!-- <span class="carouselGallery-item-meta-likes">
								
									<span class="glyphicon glyphicon-heart heart" aria-hidden="true"></span>
								</span> -->
							</div>
						</div>
					</div>
				</div>
				<?php 
				 }
				?>
				<div class="clearfix"> </div>
				<script src="<?php echo base_url();?>public/js/main.js"></script>
			</div>
		</div>
	</div>
<!-- //gallery -->
 
<!-- footer -->
<div class="footer">
  <div class="container">
    <h2>Sign up for our newsletter</h2>
    <p class="para">Subcribe your eamil id with sai prasad vivah to get the latest news and much more.</p>
    <div class="footer-contact">
      <form action="#" method="post">
        <input type="text" name="Email" placeholder="Enter your email to update" required>
        <input type="submit" value="Subscribe">
      </form>
    </div>
  <div class="footer-grids">
        <div class="col-md-4 footer-grid">
					<p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> B.A.Sonawane, 98/3446, <br><span aria-hidden="true"></span>
                     &nbsp;&nbsp;&nbsp;&nbsp;  Nehru Nagar, Kurla (E)
                     <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Mumbai - 400 024.</p>
					<p><a href="mailto:contact@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>saiprasadvivah@gmail.com</a></p>
					<p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>9702970803</p>
					<p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>9833096623</p>
				</div>
        <div class="col-md-2 footer-grid">
          <ul>
            <li><a href="<?php echo base_url('common/about_us');?>">About Us</a></li>
            <li><a href="<?php echo base_url('common/show_success_stories');?>">Success Stories</a></li>
            <li><a href="<?php echo base_url('common/melawa_page/3');?>">Melawa</a></li>
            
          
          </ul>
        </div>
        <div class="col-md-2 footer-grid">
          <ul>
            <!-- <li><a href="melawa.html">FAQ's</a></li> -->
            <li><a href="<?php echo base_url('common/membership');?>">Membership</a></li>
            <li><a href="<?php echo base_url('common/show_pages/contact_us/3');?>">Contact Us</a></li>
            <li><a href="<?php echo base_url('common/classifieds');?>">Classifieds</a></li>
            <!-- <li><a href="<?php echo base_url('common/new_member');?>">New Member</a></li> -->
          </ul> 
        </div>
        <div class="col-md-3 footer-grid">
        <ul>
            <li><a href="<?php echo base_url('common/show_privacy_you');?>">Privacy & You</a></li>
            <!-- <li><a href="<?php echo base_url('common/privacy_policy');?>">Privacy Policy</a></li> -->
            <li><a href="melawa.html">Terms Of Use</a></li>
            <li><a href="<?php echo base_url('common/security_tips');?>">Security Tips</a></li>
          
          </ul>
          
        </div>
        
        <div class="clearfix"> </div>
      </div>
    
      <div class="clearfix"> </div>
    </div>
    <div class="footer-copy">
      <p>© 2016 Saiprasad Vivah. All rights reserved | Powered by <a href="https://www.proxanttech.com/">Proxanttech</a></p>
    </div>
  </div>
</div>
<!-- for bootstrap working -->
	<script src="<?php echo base_url();?>public/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<!--*******to disable right click*******-->
<script language="javascript">
document.onmousedown=disableclick;
status="Function Disabled";
function disableclick(event)
{
  if(event.button==2)
   {
     alert(status);
     return false;    
   }
}
</script>

<!--***********************************-->
</body>
</html>