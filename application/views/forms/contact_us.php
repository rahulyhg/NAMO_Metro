<?php 
	$data['link']="contact_us";
	$this->load->view('templates/header',$data);
	$registration_id = $this->session->userdata('registration_id');
 ?>
<!-- breadcrumbs -->
	<div class="services-top-breadcrumbs">
		<div class="container">
			<div class="services-top-breadcrumbs-right">
				<ul>
					<li><a href="<?php echo base_url();?>">Home</a> <i>/</i></li>
					<li>Get In Touch With Us</li>
				</ul>
			</div>
			<div class="services-top-breadcrumbs-left">
				<h3 style="color:#fc9b4b;"><?php echo ((empty($registration_id)?"Get In Touch With Us":"SPV".$registration_id))?></h3>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- mail -->
	<div class="contact">
		<div class="container">
    <h3><span>Get In Touch With Us</span></h3>
			<p class="autem">For further enquiries and suggestions; please feel free to contact us.Registration only At Kurla Office</p>
         <div class="contact-grids">    
	<div class="map col-md-5">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.994262226574!2d72.88037401434822!3d19.06398988709481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c89640000003%3A0x36878a0b178d1380!2sSaiPrasad+Vivah!5e0!3m2!1sen!2sin!4v1474531099903" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
 
<div class="col-md-7">
			
			
				<div class="contact-grid">
				<div class="col-sm-10 col-sm-offset-1 alert_msg"></div>
					<div class="col-md-6 contact-grid-left">

						<form id="contact_us" method="POST" action="<?php echo base_url();?>common/send_contact_us_email" onsubmit="return contact_us_form()">

							<input type="text" name="name" id="contact_name" placeholder="Enter Your Name " onkeyup="validate_contact_us_name()">
							<input type="text" name="phone" id="contact_phone" placeholder="Enter Your Phone No" onkeyup="validate_contact_us_mobile()" maxlength="10">
						
					</div>
					<div class="col-md-6 contact-grid-left">
							<input name="registration_email" id="registration_email" type="text" class="form-control" placeholder="Enter Your Email" onchange="isEmail()">
							<!-- <input type="email" name="email" id="contact_email" placeholder="Enter Your Email"> -->
							<input type="text"  name="subject" id="contact_subject" placeholder="Enter Subject">
					
					</div>
					<div class="clearfix"> </div>
					<div class="col-md-12">
						<textarea name="message"  id="contact_message" placeholder="Enter Message"></textarea>
					</div>
					<div class="col-md-6 contact-grid-left">
						<center><input type="submit" value="Submit Now" class="btn btn-danger"></center>
					</div>
				</div>
				</form>
			</div>
            </div>
 </div>
	</div>           
            
      <div class="contact">
		<div class="container">
			<div class="contact-grid1">
				<div class="col-md-4 contact-grid1-left">
					<div class="contact-grid1-left1">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						<h4>Contact</h4>
						<p>For further enquiries and suggestions; please feel free to contact us.   </p>
						<ul>
							<li>Mail: <a href="mailto:info@example.com">saiprasadvivah@gmail.com </a></li>
                            <li>  Mobile Number: 9702970803, Mobile Number: 9833096623. </li>
 						</ul>
					</div>
				</div>
				<div class="col-md-4 contact-grid1-left">
					<div class="contact-grid1-left1">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
						<h4>Office Timing</h4>
 						<ul>
							<li>Every Saturday: 04.00 PM TO 08.00 PM </li>
							<li>Every Sunday: 9.00 AM TO 01.00 PM</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 contact-grid1-left">
					<div class="contact-grid1-left1">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
						<h4>Office Address</h4>
 						<ul>
							<li>B.A.Sonawane, 98/3446, Nehru Nagar, Kurla (E) </li>
							<li>Mumbai - 400 024.</li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- <?php echo $contact_us["pages_desc"];?> -->
		</div>
	</div>
<!-- //mail -->
	
<?php 
	$this->load->view('templates/footer');
?>