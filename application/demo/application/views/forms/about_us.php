<?php 
  $data['link']="index";
	$this->load->view('templates/header',$data);
	//$data = $this->session->userdata();
	 //print_r($data);
	// echo base_url();
  $registration_id = $this->session->userdata('registration_id');
 ?>
<!-- //header --> 
<!-- breadcrumbs -->
<div class="services-top-breadcrumbs">
    <div class="container">
      <div class="services-top-breadcrumbs-right">
        <ul>
          <li><a href="index.html">Home</a> <i>/</i></li>
          <li>About Us</li>
        </ul>
      </div>
      <div class="services-top-breadcrumbs-left">
        <h3>About Us</h3>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
<!-- //breadcrumbs -->

<!-- special-services -->
  <div class="special-services">
    <div class="container">
      <h3><span>About Us</span></h3>
      <p class="autem">maiores alias consequatur aut perferendis doloribus asperiores repellat</p>
      <div class="special-services-grids">  
        <div class="col-md-12 special-services-grid">
          <p>We believe choosing a life partner is a big and important decision, and hence work towards giving a simple and secure matchmaking experience for you and your family. Each profile registered with us goes through a manual screening process before going live on site. we provide superior privacy controls and also verify contact information of members.

You can register withn three simple steps and search according to your specific criteria on age, height, location and much more- on your computer, tablet or mobile. Regular custom mails and notifications make the process easier and take you closer to your perfect match!</p>
        </div>
           
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
<!-- //special-services -->

<!-- special-services -->
  <div class="why-choose-us">
    <div class="container">
      <h3><span>Why Choose Us</span></h3>
      <div class="special-services-grids">  
        <div class="col-md-3 special-services-grid-why">
           <img src="<?php echo base_url().'public/images/privacy.png'?>"> 
                     <h4>Private, Secure and Confidential</h4>
        </div>
                <div class="col-md-3 special-services-grid-why">
           <img src="<?php echo base_url().'public/images/document.png'?>"> 
                     <h4>Advanced Verification</h4>
        </div>
                <div class="col-md-3 special-services-grid-why">
           <img src="<?php echo base_url().'public/images/technology.png'?>">
                     <h4>Most Intuitive Technology</h4> 
        </div>
                <div class="col-md-3 special-services-grid-why">
           <img src="<?php echo base_url().'public/images/match.png'?>"> 
                     <h4>Intelligent Matchmaking</h4>
        </div>
           
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
<!-- //special-services -->

 
<!-- services-bottom -->
  <div class="services-bottom">
    <div class="container">
      <div class="services-bottom-left">
        <h3>What Are You Waiting For Get Register Today. Or Call Us - 9702970803</h3>
        <p>"we assist you to meet with potential life partners With ample database of thousands of prospective brides and grooms and build lifetime relationships."</p>
      </div>
      <div class="services-bottom-right">
        <div class="m2">
          <a href="<?php echo base_url('common/show_pages/contact_us/3');?>" class="hvr-bounce-to-bottom" class="hvr-bounce-to-bottom hvr-bounce-to-bottom1">Contact Us</a>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
<!-- //services-bottom -->
<!-- footer -->
<?php 
	$this->load->view('templates/footer');
?>


 
 
