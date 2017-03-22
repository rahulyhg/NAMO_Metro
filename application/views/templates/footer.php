<!-- footer -->
	<div class="footer">
		<div class="container">
			<h2>Sign up for our newsletter</h2>
			<p class="para"> Subcribe your email id with sai prasad vivah to get the latest news and much more.</p>
			<div class="footer-contact">
				<form action="<?php echo base_url() ?>common/newsletter_email" method="post">
					<input type="text" name="mailid" placeholder="Enter your email to update" required>
					<input type="submit" value="Subscribe">
				</form>
			</div>
			<div class="footer-grids">
				<div class="col-md-4 footer-grid">
					<p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> B.A.Sonawane, 98/3446, <br><span aria-hidden="true"></span>
                     &nbsp;&nbsp;&nbsp;&nbsp;  Nehru Nagar, Kurla (E)
                     <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Mumbai - 400 024.</p>
					<p><a href="mailto:saiprasadvivah@gmail.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>saiprasadvivah@gmail.com</a></p>
					<p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>9702970803</p>
					<p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>9833096623</p>
				</div>
				<div class="col-md-2 footer-grid">
					<ul>
						<li><a href="<?php echo base_url('common/about_us');?>">About Us</a></li>
						<li><a href="<?php echo base_url('common/show_success_stories');?>">Success Stories</a></li>
						<li><a href="<?php echo base_url('common/melawa_page/3');?>">Melawa</a></li>
						<li><a href="<?php echo base_url('common/membership');?>">Membership</a></li>
					</ul>
				</div>
				<div class="col-md-2 footer-grid">
					<ul>
						<!-- <li><a href="melawa.html">FAQ's</a></li> -->
						<li><a href="<?php echo base_url('common/show_pages/contact_us/3');?>">Contact Us</a></li>
						<li><a href="<?php echo base_url('common/classifieds');?>">Classifieds</a></li>
						
						<li><a href="<?php echo base_url('common/show_privacy_you');?>">Privacy & You</a></li>
					</ul> 
				</div>
				<div class="col-md-3 footer-grid">
				<ul>
						<li><a href="<?php echo base_url('common/privacy_policy');?>">Privacy Policy</a></li>
						<li><a href="#">Terms Of Use</a></li>
						<li><a href="<?php echo base_url('common/security_tips');?>">Security Tips</a></li>
					
					</ul>
					<!-- <div class="footer-grid1">
						<div class="footer-grid1-left">
							<a href="melawa.html"><img src="<?php echo base_url();?>public/images/7.jpg" alt=" " class="img-responsive"></a>
						</div>
						<div class="footer-grid1-right">
							<a href="melawa.html">eveniet ut molesti</a>
							<div class="m1">
								<a href="melawa.html"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div> -->
					<!-- <div class="footer-grid1">
						<div class="footer-grid1-left">
							<a href="melawa.html"><img src="<?php echo base_url();?>public/images/6.jpg" alt=" " class="img-responsive"></a>
						</div>
						<div class="footer-grid1-right">
							<a href="melawa.html">earum rerum tenet</a>
							<div class="m1">
								<a href="melawa.html"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="footer-grid1">
						<div class="footer-grid1-left">
							<a href="single.html"><img src="<?php echo base_url();?>public/images/8.jpg" alt=" " class="img-responsive"></a>
						</div>
						<div class="footer-grid1-right">
							<a href="melawa.html">maiores alias cons</a>
							<div class="m1">
								<a href="melawa.html"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div> -->
				</div>
				<!-- <div class="col-md-3 footer-grid">
					<div class="footer-grid-instagram">
						<a href="success-stories.html"><img src="<?php echo base_url();?>public/images/3.png" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-instagram">
						<a href="success-stories.html"><img src="<?php echo base_url();?>public/images/1.png" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-instagram">
						<a href="success-stories.html"><img src="<?php echo base_url();?>public/images/2.png" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-instagram">
						<a href="success-stories.html"><img src="<?php echo base_url();?>public/images/5.png" alt=" " class="img-responsive" /></a>
					</div>
					<div class="clearfix"> </div>
				</div> -->
				<div class="clearfix"> </div>
			</div>
			<div class="footer-copy">
				<p>© 2016 Saiprasad Vivah. All rights reserved | Powered by <a href="https://www.proxanttech.com/">Proxanttech</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="<?php echo base_url();?>public/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
 			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<script src="public/js/jquery-1.10.1.min.js"></script>
    <script src="public/js/plugins.js"></script>
     <script type="text/javascript">
            
			jQuery(function ($) {

                $.supersized({

                    // Functionality
                    slide_interval: 3000, // Length between transitions
                    transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed: 700, // Speed of transition

                    // Components                           
                    slide_links: 'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                    slides: [ // Slideshow Images
                        {
                            image: 'public/images/templatemo-slide-1.jpg'
                        }, {
                            image: 'public/images/templatemo-slide-4.jpg'
                        }, {
                            image: 'public/images/templatemo-slide-2.jpg'
                        }, {
                            image: 'public/images/templatemo-slide-3.jpg'
                        }
                    ]

                });
            });
            
    </script>
    <script src="<?php echo base_url();?>public/register/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>public/register/assets/js/bootstrap.min.js" type="text/javascript"></script> 

<!--   plugins 	 --> 
<script src="<?php echo base_url();?>public/register/assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script> 

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 --> 
<script src="<?php echo base_url();?>public/register/assets/js/jquery.validate.min.js"></script> 

<!--  methods for manipulating the wizard and the validation --> 
<script src="<?php echo base_url();?>public/register/assets/js/wizard.js"></script> 
<!--vertical-tab--> 
<script src="<?php echo base_url();?>public/js/easyResponsiveTabs.js"></script> 
<!--datatable-->
<script src="<?php echo base_url();?>public/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>public/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>

<!--Plug-in Initialisation--> 
<script type="text/javascript">
    $(document).ready(function() {
		 
         //Vertical Tab
        $('#parentVerticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script> 
   <script>
   var base_url = "<?php echo base_url();?>";
</script>
<script src="<?php echo base_url();?>public/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url();?>public/js/master.js"></script>
     <script src="<?php echo base_url();?>public/js/index.js"></script>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



<script src="<?php echo base_url();?>public/js/image-viewer/picturefill.min.js"></script>
<script src="<?php echo base_url();?>public/js/image-viewer/lightgallery.js"></script>
<script src="<?php echo base_url();?>public/js/image-viewer/lg-pager.js"></script>
<script src="<?php echo base_url();?>public/js/image-viewer/lg-autoplay.js"></script>
<script src="<?php echo base_url();?>public/js/image-viewer/lg-fullscreen.js"></script>
<script src="<?php echo base_url();?>public/js/image-viewer/lg-zoom.js"></script>
<script src="<?php echo base_url();?>public/js/image-viewer/lg-hash.js"></script>

<!-- <script src="<?php echo base_url();?>public/js/image-viewer/lg-share.js"></script>-->
<script>
    lightGallery(document.getElementById('lightgallery'));
</script>
<script>
    $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
    
</script>

<!--*******to disable right click*******-->
 

<!--***********************************-->

     

<!----slider--->
<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery.bpopup.min.js"></script>

<style>
/*#popup, .bMulti {
    background-color: #FFF;
    border-radius: 10px 10px 10px 10px;
    box-shadow: 0 0 0px 0px #999;
    color: #111;
    display: none;
    padding: 0px;
}*/

#popup .logo {
    color: #2B91AF;
    font: bold 325% 'Petrona',sans;
}

.button.b-close, .button.bClose {
    border-radius: 7px 7px 7px 7px;
    box-shadow: none;
    font: bold 131% sans-serif;
    padding: 0 6px 2px;
    position: absolute;
    right: 1px;
    top: 1px;
}

.button {
    border-radius: 10px;
    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.3);
    color: #FFF;
    cursor: pointer;
    display: inline-block;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
}
</style>
<div id="popup" style="display: none;">
    <span class="button b-close"><span style="color: black;">X</span></span>
    <img src="<?php echo base_url();?>public/images/SP_Banner.png" class="img-responsive">
</div>



</body>
</html>
