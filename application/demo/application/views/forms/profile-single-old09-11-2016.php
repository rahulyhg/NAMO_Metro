<?php 
	$data12['link']="index";
  $this->load->view('templates/header',$data12);
	$data = $this->session->userdata();

  $registration_id = $this->session->userdata('registration_id');
  $registration_gender = $this->session->userdata('registration_gender');
 ?>
<!-- //header --> 
<!-- breadcrumbs -->
<div class="services-top-breadcrumbs">
  <div class="container">
    <div class="services-top-breadcrumbs-right">
      <ul>
        <li><a href="<?php echo base_url();?>">Home</a> <i>/</i></li>
        <li>Profile</li>
      </ul>
    </div>
    <div class="services-top-breadcrumbs-left">
      <h3  style="color:#fc9b4b;"><?php echo ((empty($registration_id)?"Profile":"SPV".$registration_id))?></h3>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<!-- //breadcrumbs -->
<div class="single">
  <div class="container">
    <div class="col-md-9 single-left">
      <table>
		<thead>
		<tr>
			<th colspan="4" style="color:#fff;">Basic Details</th>
  		</tr>
		</thead>
		<tbody>
		<tr>
			<td rowspan="5">
           <div class="picture-container">
                        <div class="picture"> 
                        <img src="<?php echo base_url().'register/'.$profile_data[0]['registration_photo']?>" class="picture-src" id="wizardPicturePreview" title=""/>
                         </div>
                       </div>
            </td>
         
 		</tr>
		<!-- <tr>
		  <td><strong>Profile Id</strong></td>
		  <td colspan="2">SPV<?php echo $profile_data[0]['registration_id']?></td>
		  
 		</tr> -->
		<tr>
		  <td><strong>Last Name</strong></td>
		 <td colspan="2"><?php echo $profile_data[0]['registration_lname']?></td>
		 
 		</tr>
		<tr>
		  <td><strong>DOB</strong></td>
		  <td colspan="2"><?php echo date("d-m-Y",strtotime($profile_data[0]['registration_birth_date']))?></td>
		  
 		</tr>
		<tr>
		  <td><strong>Complexion</strong></td>
		  <td colspan="2"><?php echo $profile_data[0]['registration_complexion']?></td>
		  
 		</tr>
        <tr>
		  <td><strong>Age</strong></td>
		  <td><?php echo $profile_data[0]['registration_age']?></td>
		  
 		</tr>
        
    <tr>
		  <td><strong>Subgroup</strong></td>
		  <td><?php echo $profile_data[0]['registration_subgroup']?></td>
      <td><strong>Height</strong></td>
      <td><?php echo $profile_data[0]['registration_height']?></td>
		  <!-- <td><strong>Location</strong></td>
		  <td><?php echo $profile_data[0]['registration_city']?></td> -->
 		</tr>
         <tr>
		  <td><strong>Mother Tounge</strong></td>
		  <td><?php echo $profile_data[0]['registration_mother_tongue']?></td>
		  <td><strong>Occupation</strong></td>
		  <td><?php echo $profile_data[0]['registration_occupation']?></td>
 		</tr>
         <tr>
		  <td><strong>Qualification</strong></td>
		  <td colspan="3"><?php echo $profile_data[0]['registration_highest_qualification']?></td>
		  
 		</tr>
        <tr>
		  <td colspan="2"><a href="<?php echo base_url();?>common/profile_advance_search"><button name="search" class="btn btn-danger pull-left" >Back</button></a></td>
          <td colspan="2"><a href="<?php echo base_url().'common/view_profile/'.$profile_data[0]['registration_id']?>""><button name="search" class="btn btn-danger pull-right" >View Full Profile</button></a></td>
  		</tr> 
		</tbody>
	</table>  
       
       
    </div>
    <div class="col-md-3 single-right">
      <div class="related-posts">
        <h4>New Members</h4>

        
         <?php if(!empty($registration_id)): ?>
        <?php   
            $cnt=1;       
            foreach($img as $value):
              if($value['registration_photo']!="defaultUser.gif"  && $registration_gender!=$value['registration_gender'] && $cnt<4):
        ?>
            <div class="related-post">
              <div class="related-post-left"> <a href="<?php echo base_url().'common/profile_single/'.$value['registration_id']?>"><img src="<?php echo base_url().'register/'.$value['registration_photo']?>" alt=" " class="img-responsive" /></a> </div>
              <div class="related-post-right">
                <h4><a href="<?php echo base_url().'common/profile_single/'.$value['registration_id']?>"><?php echo $value['registration_lname']?></a></h4>
                <p>Age: <?php echo $value['registration_age'] ?> Years<br> <span>Place : <?php echo $value['registration_city'] ?></span> </p>
                <p><a href="<?php echo base_url().'common/profile_single/'.$value['registration_id']?>">Read More &nbsp;<i class="glyphicon glyphicon-play-circle"></i></a></p>
              </div>
              <div class="clearfix"> </div>
            </div>
        <?php 
            $cnt++;
            endif ;
            endforeach; 
        ?>
        <?php else: ?>
              <?php   
                  $cnt=1;       
                  foreach($img as $value):
                    if($value['registration_photo']!="defaultUser.gif"  && $cnt<4):
              ?>
                  <div class="related-post">
                    <div class="related-post-left"> <a href="<?php echo base_url().'common/profile_single/'.$value['registration_id']?>"><img src="<?php echo base_url().'register/'.$value['registration_photo']?>" alt=" " class="img-responsive" /></a> </div>
                    <div class="related-post-right">
                      <h4><a href="<?php echo base_url().'common/profile_single/'.$value['registration_id']?>"><?php echo $value['registration_lname']?></a></h4>
                      <p>Age: <?php echo $value['registration_age'] ?> Years<br> <span>Place : <?php echo $value['registration_city'] ?></span> </p>
                      <p><a href="<?php echo base_url().'common/profile_single/'.$value['registration_id']?>">Read More &nbsp;<i class="glyphicon glyphicon-play-circle"></i></a></p>
                    </div>
                    <div class="clearfix"> </div>
                  </div>
              <?php 
                  $cnt++;
                  endif ;
                  endforeach; 
              ?>
        <?php endif; ?>


      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>

<!-- footer -->
<?php 
	$this->load->view('templates/footer');
?>


 
 
