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
<?php echo $classifieds[0]['pages_desc']; ?>
<!-- //services-bottom -->
<?php 
  $this->load->view('templates/footer');
 ?>