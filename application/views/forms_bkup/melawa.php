<?php 
	$data['link']="melawa";
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
				<h3 style="color:#fc9b4b;"><?php echo ((empty($registration_id)?"Melawa":"SPV".$registration_id))?></h3>
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
			      <?php 
			      foreach($melawa as $value):
								//print_r($value["sub_desc1"]);exit;
								$string = $value['sub_desc1'];
								$str = substr($string,0,200);
								//$des=substr($string,50);
								//print_r($str);exit;
						?>
						 	<div class="col-sm-4">
							<div class="col-sm-11 special-services-grids" >	
								<div class="special-services-grid">
									<div class="col-sm-12 special-services-grid1">
										<img src="<?php echo base_url().'/melawa/'.$value['sub_image_above']?>" alt="Melawa Image" class="img-responsive" />
									</div>
									<div class="col-sm-12">
									<h4><a href="#"><?php echo $value['sub_name'];?></a></h4>
									</div>
									<div class="col-sm-12">
									<p> <i class="glyphicon glyphicon-calendar"></i>&nbsp;<?php echo  $value['melawa_date']; ?></p>
									</div>
									<div class="m2 col-sm-12">
										<a href="<?php echo base_url().'common/melawa_view_more/'.$value['sub_id']?>" class="more-sub hvr-bounce-to-bottom hvr-bounce-to-bottom1">Read More...</a>
									</div>
								</div>
								
								<div class="clearfix"> </div>
							</div>
							</div> 
							<?php endforeach;?>
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
 <?php 
	$this->load->view('templates/footer');
 ?>