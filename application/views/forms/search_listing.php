<?php 
  $data1['link']="advance_search";
  $this->load->view('templates/header',$data1);

  $registration_id = $this->session->userdata('registration_id');
  $registration_gender = $this->session->userdata('registration_gender');

  // print_r($data);exit;
 ?>
 <style>
th {
    background: #eaeaeb;
    color: #666;
    font-weight: bold;
    border: 1px solid #F1F1F2;
    padding: 10px;
  font-size:12px;
}
td img
{
  border-radius:50%;
  width:70px;
  height:70px;
  padding:3px;
  border:2px solid #fff;
  box-shadow:0px 2px 2px 2px #ccc;
}
</style>
<!-- breadcrumbs -->
<div class="services-top-breadcrumbs">
  <div class="container">
    <div class="services-top-breadcrumbs-right">
      <ul>
        <li><a href="<?php echo base_url();?>">Home</a> <i>/</i></li>
        <li>Search Result</li>
      </ul>
    </div>
    <div class="services-top-breadcrumbs-left">
      <h3 style="color:#fc9b4b;"><?php echo ((empty($registration_id)?"Search Result":"SPV".$registration_id))?></h3>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<!-- //breadcrumbs -->
<div class="single">
  <div class="container">
    <div class="col-md-9 col-sm-12 col-xs-12 single-left">
       <table class="table table-striped master_table" style="text-align: center;">
       <thead>
        <th> Photo</th>
        <th> Last Name</th>
        <th> Marrital Status</th>
        <th> Age</th>
        <th> Height</th>
        <th> Education</th>
        <th> Mothertounge</th>
        <th> City</th>
        <th> View Profile</th>
        </thead>
        <tbody>
          <?php
          if(!empty($registration_id)):
              if(!empty($data)):
              foreach ($data as $key => $value):
                if($registration_gender!=$value['registration_gender']):
          ?>
             <tr>
                <!--For reg photo visibility-->
                <td> 
                  <?php if($value['registration_photo_visibility'] == 0): ?>
                        <img src="<?php echo base_url().'register/'.$value['registration_photo']?>" alt="" 
                         />
                  <?php elseif ($value['registration_photo_visibility'] == 1 && $value['registration_gender'] == 'male'): ?>
                    <img src="<?php echo base_url().'register/male.png'?>" alt="" 
                       />
                  <?php elseif ($value['registration_photo_visibility'] == 1 && $value['registration_gender'] == 'female'): ?>
                  <img src="<?php echo base_url().'register/female.jpg'?>" alt="" 
                        />
                <?php endif; ?>
              </td>
              <!--********************-->
                <td><?php echo $value['registration_lname']?></td>
                <td><?php echo $value['registration_maritial_status']?></td>
                <td><?php echo $value['registration_age']?></td>
                <td><?php echo $value['registration_height']?></td>
                <td><?php echo $value['registration_highest_qualification']?></td>
                <td><?php echo $value['registration_mother_tongue']?></td>
                <td><?php echo $value['registration_city']?></td>
                <td><a href="<?php echo base_url('common/view_profile/'.$value['registration_id']);?>" target="_blank"><button type="submit"  class="btn btn-danger btn-sm">View Profile</button></a></td>
            </tr> 
          <?php
                endif;
              endforeach;
              endif;
          else:
          ?>
         <?php
         $cnt = 1;
              if(!empty($data)):
              foreach ($data as $key => $value):
                if($cnt <16):
          ?>
             <tr>
                <td><img src="<?php echo base_url().'register/'.$value['registration_photo']?>" /></td>
                <td><?php echo $value['registration_lname']?></td>
                <td><?php echo $value['registration_maritial_status']?></td>
                <td><?php echo $value['registration_age']?></td>
                <td><?php echo $value['registration_height']?></td>
                <td><?php echo $value['registration_highest_qualification']?></td>
                <td><?php echo $value['registration_mother_tongue']?></td>
                <td><?php echo $value['registration_city']?></td>
                <td><a href="<?php echo base_url('common/view_profile/'.$value['registration_id']);?>" target="_blank"><button type="submit" class="btn btn-danger btn-sm"  >View Profile</button></a></td>
            </tr> 
          <?php
              $cnt++;
              endif;
              endforeach;
              endif;
              endif;
          ?>
                    </tbody>
                </table>
              <div style="text-align: center; padding-top: 4%;"><a href="<?php echo base_url('common/advance_search/');?>"><button type="submit" class="btn btn-danger btn-sm">Back to Advance Search</button></a></div>
    </div>

    <div class="col-md-3 col-sm-9 col-xs-12 single-right">
      <div class="related-posts">
        <h4>New Members</h4>

        <?php if(!empty($registration_id)): ?>
        <?php   
            $cnt=1;       
            foreach($img as $value):
              if($value['registration_photo']!="defaultUser.gif"  && $registration_gender!=$value['registration_gender'] && $cnt<4):
        ?>
            <div class="related-post">
              <div class="related-post-left"> <a href="p<?php echo base_url().'common/profile_single/'.$value['registration_id']?>"><img src="<?php echo base_url().'register/'.$value['registration_photo']?>" alt=" " class="img-responsive" /></a> </div>
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
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<?php 
  $this->load->view('templates/footer')
 ?>