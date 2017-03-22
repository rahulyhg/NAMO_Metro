<?php 
  $data['link']="membership";
  $this->load->view('templates/header',$data);
  $data = $this->session->userdata();
  $registration_id = $this->session->userdata('registration_id');
 ?>
<!-- breadcrumbs -->
<div class="services-top-breadcrumbs">
  <div class="container">
    <div class="services-top-breadcrumbs-right">
      <ul>
        <li><a href="<?php echo base_url();?>">Home</a> <i>/</i></li>
        <li>Membership</li>
      </ul>
    </div>
    <div class="services-top-breadcrumbs-left">
      <h3  style="color:#fc9b4b;"><?php echo ((empty($registration_id)?"Membership":"SPV".$registration_id))?></h3>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<!-- //breadcrumbs --> 
<!-- services -->
<div class="services">
  <div class="container">
    <h3><span>Membership</span></h3>
    <p class="autem">maiores alias consequatur aut perferendis doloribus asperiores repellat</p>
    <div class="services-grids">
      <div class="col-md-5 services-grid">
    
         <div class="col-xs-10 services-grid-right">
            <img src="<?php echo base_url();?>public/images/internet-facility.png" class="img-responsive">
         </div>
        <div class="clearfix"> </div>
      </div>
      <div class="col-md-7 services-grid">
        <div class="col-xs-1 services-grid-left"> <span><img src="<?php echo base_url();?>public/images/icon.png"></span> </div>
         <div class="col-xs-10 services-grid-right">
          <h4><a href="#">Internet Facility</a></h4>
          <ul>
            <li>We will publish your information along with photographs on this website  &nbsp;Plus</i> facility of Send Messages.</li>
           
            <li>Pay Rs.3000/- Till marriage Fixed.<br/>
              (One Time Only)
            </li>
             <li>Registration only At Kurla Office as Following Office Time:<br>
              Saturday : 4.00 pm to 8.00 pm <br>
              Sunday : 9.00 am to 1.00 pm.</li>
          </ul>
         </div>
        <div class="clearfix"> </div>
      </div>
      
        </div>
       <div class="divider"></div>
       <div class="services-grids">
       
       
      <div class="col-md-7 services-grid" style="margin-top:3%; ">
         <div class="col-xs-1 services-grid-left" style="padding-top:5%;"> <span><img src="<?php echo base_url();?>public/images/icon.png"></span> </div>
        <div class="col-xs-10 services-grid-right" style="padding-top:5%;">
          <h4><a href="#">How To pay</a></h4>
          <ul>
          	<li>Pay oline using your Debit Card, Credit Card or Net Banking.Conveneience fee will be charge extra 0.75% to 2.95%.</li>
            <li>Pay by cash (at home office as per given time)</li>
            <li>Pay by a DD in favour of SHREE SAI PRASAD VIVAH payable at Mumbai.</li>
            <li>Shree Sai Prasad Vivah, ICICI Bank, Branch Name: Kurla Nehru Nagar, IFS Code: ICIC0001226,C.A A/c No.122605500059 (by NEFT/RTGS) <br/>
              (NOTE: If Depositing by cash from out of Mumbai, Deposit Rs.3000+250 =3250/-for Transaction Charges). </li>
            
          </ul>
<!--          <div class="more"> <a href="single.html"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a> </div>
-->        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="col-md-5 services-grid" style="margin-top:3%;">
    
         <div class="col-xs-10 services-grid-right">
            <img src="<?php echo base_url();?>public/images/mobile-payments.jpg" class="img-responsive">
         </div>
        <div class="clearfix"> </div>
      </div>
      
      </div>
      
      
    <div class="divider"></div>
       <div class="services-grids">
       
       <div class="col-md-5 services-grid" style="margin-top:3%;">
    
         <div class="col-xs-10 services-grid-right">
            <img src="<?php echo base_url();?>public/images/document.jpg" class="img-responsive">
         </div>
        <div class="clearfix"> </div>
      </div>
      <div class="col-md-7 services-grid" style="margin-top:3%;">
             <div class="col-xs-1 services-grid-left" style="padding-top:5%;"> <span><img src="<?php echo base_url();?>public/images/icon.png"></span> </div>
        <div class="col-xs-10 services-grid-right" style="padding-top:5%;">
          <h4><a href="#">Document required</a></h4>
          <ul>
            <li>1 copies of the Bio Data (copy should be signed personally)</li>
            <li>1 colored photographs (post-card size only)</li>
            <li>Any one copy of photo ID proof like Pan Card, Election Card, Passport etc.. </li>
            <li>Scan copy should be send by mail saiprasadvivah@gmail.com</li>
          </ul>
<!--          <div class="more"> <a href="single.html"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a> </div>
-->        </div>
        <div class="clearfix"> </div>
      </div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
<!-- //services -->
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
 <?php 
  $this->load->view('templates/footer');
?>