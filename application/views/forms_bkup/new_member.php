
<?php 
	$data1['link']="index";
	$this->load->view('templates/header',$data1);
	$data = $this->session->userdata();
	// print_r($data);
	// echo base_url();
	$registration_id = $this->session->userdata('registration_id');
  $registration_gender = $this->session->userdata('registration_gender');
 ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/common.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/style3.css" />
 		<script type="text/javascript" src="<?php echo base_url();?>public/js/modernizr.custom.79639.js"></script>
<!-- breadcrumbs -->
	<div class="services-top-breadcrumbs">
		<div class="container">
			<div class="services-top-breadcrumbs-right">
				<ul>
					<li><a href="<?php echo base_url();?>">Home</a> <i>/</i></li>
					<li>New Members</li>
				</ul>
			</div>
			<div class="services-top-breadcrumbs-left">
				<h3 style="color:#fc9b4b;"><?php echo ((empty($registration_id)?"New Members":"SPV".$registration_id))?></h3>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<h3><span>New Members</span></h3>
			<p class="autem">Let's find out your perfect match and speak your heart out. search thousand of profiles which is 100 % mobile verified.</p>
			<section class="main">
				<ul class="ch-grid">
			<?php if(!empty($registration_id)): ?>
			<?php 	
            	$cnt=1;				
				foreach($new_member as $value)
				{
			  		if($value['registration_photo']!="defaultUser.gif"  && $registration_gender!=$value['registration_gender'] && $cnt<21):
			?>
			
					<li>
						<div class="ch-item">	
							<div class="ch-info">
								<h3>Age : <?php echo $value['registration_age'];?></br>
                                <?php echo $value['registration_highest_qualification'];?>
                                </h3>
								<p><?php echo $value['registration_city'];?><a href="<?php echo base_url().'common/profile_single/'.$value['registration_id']?>">View More</a></p>
							</div>
							<div class="ch-thumb" style="z-index: 12;"><img src="<?php echo base_url().'register/'.$value['registration_photo']?>" width="300px" height="380px" class="img-responsive"></div>
						</div>
					</li>					
				
			  <?php 
                $cnt++;
                endif ;
                
				}
				else:
				?>
				<!--**************************************-->
				<?php 	
            	$cnt=1;				
				foreach($new_member as $value)
				{
			  		if($value['registration_photo']!="defaultUser.gif"  && $cnt<21):
			?>
			
					<li>
						<div class="ch-item">	
							<div class="ch-info">
								<h3>Age : <?php echo $value['registration_age'];?></br>
                                <?php echo $value['registration_highest_qualification'];?>
                                </h3>
								<p><?php echo $value['registration_city'];?><a href="<?php echo base_url().'common/profile_single/'.$value['registration_id']?>">View More</a></p>
							</div>
							<div class="ch-thumb" style="z-index: 12;"><img src="<?php echo base_url().'register/'.$value['registration_photo']?>" class="img-responsive" width="300px" height="380px"></div>
						</div>
					</li>					
				
			  <?php 
                $cnt++;
                endif ;
				}
                endif;
                ?>
				</ul>
				
			</section>
		</div>
	</div>
<!-- //gallery -->
<!-- footer -->
<?php 
	$this->load->view('templates/footer');
?>