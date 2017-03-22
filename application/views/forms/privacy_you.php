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
        <li>Privacy & You</li>
      </ul>
    </div>
    <div class="services-top-breadcrumbs-left">
      <h3  style="color:#fc9b4b;"><?php echo ((empty($registration_id)?"Privacy & You":"SPV".$registration_id))?></h3>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<!-- //breadcrumbs -->
<?php echo $privacy_you[0]['pages_desc']; ?>
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


 
 
