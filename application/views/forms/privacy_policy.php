<?php 
  $data['link']="index";
  $this->load->view('templates/header',$data);
  $registration_id = $this->session->userdata('registration_id');
 ?>
<!-- //header --> 
<!-- breadcrumbs -->
<div class="services-top-breadcrumbs">
  <div class="container">
    <div class="services-top-breadcrumbs-right">
      <ul>
        <li><a href="<?php echo base_url();?>">Home</a> <i>/</i></li>
        <li>Privacy & Policy</li>
      </ul>
    </div>
    <div class="services-top-breadcrumbs-left">
      <h3  style="color:#fc9b4b;"><?php echo ((empty($registration_id)?"Privacy & You":"SPV".$registration_id))?></h3>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<!-- //breadcrumbs -->
<?php echo $privacy_policy[0]['pages_desc']; ?>

<!-- //services-bottom -->
<!-- footer -->
<?php 
  $this->load->view('templates/footer');
?>


 
 
