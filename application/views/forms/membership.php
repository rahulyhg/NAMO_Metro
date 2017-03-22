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
<?php echo $membership[0]['pages_desc']; ?>
<!-- //services-bottom -->
 <?php 
  $this->load->view('templates/footer');
?>