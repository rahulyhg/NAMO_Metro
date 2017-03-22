<?php 
  $data['link']="index";
  $this->load->view('templates/header',$data);
  $registration_id = $this->session->userdata('registration_id');
 ?>
  <!-- breadcrumbs -->
  <div class="services-top-breadcrumbs">
    <div class="container">
      <div class="services-top-breadcrumbs-right">
        <ul>
          <li><a href="<?php echo base_url();?>">Home</a> <i>/</i></li>
          <li>Melawa</li>
        </ul>
      </div>
      <div class="services-top-breadcrumbs-left">
        <h3  style="color:#fc9b4b;"><?php echo ((empty($registration_id)?"Melawa Details":"SPV".$registration_id))?></h3>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
<!-- //breadcrumbs -->

<!-- special-services -->
  <div class="special-services">
    <div class="container">
      <h3><span>Melawa</span></h3>
      <p class="autem">Work Towards Giving A Simple And Secure Matchmaking Experience For You And Your Family.</p>
            <div class="row">
            
              <div class="col-sm-10 col-sm-offset-1">
              <div class="col-sm-12 special-services-grids" > 
                <div class="special-services-grid">
                  <div class="col-sm-4 special-services-grid1" style="padding-top: 4%">
                    <img src="<?php echo base_url().'melawa/'.$melawa_details[0]['sub_image_above']?>" alt=" " class="img-responsive" width="300" height="600"/>
                  </div>
                  <div class="col-sm-8">
                  <div class="col-sm-12">
                  <h4 ><a href="#"><?php echo $melawa_details[0]['sub_name'];?></a></h4>
                  
                  <p><?php echo $melawa_details[0]['sub_desc1'];?></p>
                  </div>
                  <div class="m2 pull-right">
                    <a href="<?php echo base_url().'common/melawa_page/12'?>" class="more-sub hvr-bounce-to-bottom hvr-bounce-to-bottom1">Back</a>
                  </div>
                  </div>
                </div>
                
                <div class="clearfix"> </div>
              </div>
              </div> 
              
            </div>
    </div>
  </div>
<!-- //special-services -->
<!-- services-bottom -->
  <div class="services-bottom">
    <div class="container">
      <div class="services-bottom-left">
        <h3>Wel illum qui dolorem eum fugiat quo voluptas nulla</h3>
        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit 
          quo minus id quod maxime placeat facere possimus.</p>
      </div>
      <div class="services-bottom-right">
        <div class="m2">
          <a href="<?php echo base_url('common/show_pages/contact_us/3') ?>" class="hvr-bounce-to-bottom hvr-bounce-to-bottom1">Contact Us</a>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
<!-- //services-bottom -->
 <?php 
  $this->load->view('templates/footer');
 ?>