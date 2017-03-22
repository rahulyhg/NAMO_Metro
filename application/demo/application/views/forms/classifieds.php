<?php 
  $data1['link']="index";
  $this->load->view('templates/header',$data1);
  $email = $this->session->userdata('registration_email');
  $registration_id = $this->session->userdata('registration_id');
 // print_r($album);exit;
 ?>
 <style type="text/css">
   
   #msg_hover:hover {
    background-color: lightblue;
}
</style>
     
<!-- breadcrumbs -->
<div class="services-top-breadcrumbs">
  <div class="container">
    <div class="services-top-breadcrumbs-right">
      <ul>
        <li><a href="index.html">Home</a> <i>/</i></li>
        <li>Classifieds</li>
      </ul>
    </div>
    <div class="services-top-breadcrumbs-left">
      <h3>Classifieds</h3>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<!-- //breadcrumbs -->
<div class="single">
  <div class="container">
    <div class="col-md-12 single-left">
       <div class="accordion">
            <dl>
              <dt>
                <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordionTitleActive accordionTitle js-accordionTrigger active">Classifieds </a> 
                
              </dt>
              <dd class="accordion-content is-expanded accordionItem " id="accordion1" aria-hidden="true">
                  <p><strong><h5>Special Note for Members Benefit</h5></strong></p> 
                  <ul style="list-style:url(<?php echo base_url().'/public/images/check.png'?>); font-size:15px;">
                  <li>Please Check your profile is completed or not.</li>
<li> Please add your 2 or 3 new photos in My Album.</li>
<li> Please Note upload photo 600 x 700 Size or Less than 1.00 MB.</li>
<li> Search a Male or Female only by Advance Search.</li>
<li> Please Check your profile daily on our Website & take a facility of Send Messages.</li>
<li> After Log in when you looking Received Messages We request to all Members Please Reply the <a href="#">Messages</a>  in answer Yes or No Because Candidates waiting for your valuable Reply.  </li>  
<li> If your ENGAGEMENT OR MARRIAGE is fixed, for delete or Remove your profile from our Web Site. Only Telephonic communication will not be treated as an official Massage. Only Official E-Mail is Compulsory </li>

                  </ul>
                  <p>Any Query about Website/Internet Facility please contact<br> E-mail: saiprasadvivah@gmail.com  <br> Tel: 022-65653536, 9833096623</p>
              </dd>
               
               
              
            </dl>
            
          </div>
    </div>
     <div class="clearfix"> </div>
  </div>
</div>
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