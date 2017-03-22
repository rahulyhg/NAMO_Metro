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
				<h3><?php echo ((empty($registration_id)?"Melawa":"SPV".$registration_id))?></h3>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- special-services -->
	<div class="special-services">
		<div class="container">
		<div style="padding:10%">
			<h3><span>Thank You</span></h3>
			<p class="autem">Your Payment has been done Successfully. Your transaction id is: <?php echo $trans_id; ?></p>
			      <div class="row">	</div>
		</div>
			      
		</div>
	</div>
 <?php 
	$this->load->view('templates/footer');
 ?>