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
    <div class="col-md-9 profile">
      <div class="comments">
        <div class="comments-grid">
        <div class="col-md-2">
          <div class="profile-image"> 
          	<img src="<?php echo base_url().'register/'.$data[0]['registration_photo']?>" alt=" "/> 
          </div>
          </div>
          <div class="col-sm-10">
        	  <div class="profile-data">
            <h3><a href="#"><?php echo $data[0]['registration_fname']?>&nbsp;<?php echo $data[0]['registration_lname']?></a></h3>
            <h5 style="margin: 1em 0 0em;"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> <?php echo (($data[0]['registration_birth_date'] == '0000-00-00')?"Birth Date Not Specified": date("d-m-Y",strtotime($data[0]['registration_birth_date'])))?></h5>
            <h5> Caste : <?php echo $data[0]['registration_caste']?> </h5>
             <h5> Education : <?php echo $data[0]['registration_education_level']?> </h5>
            <div class="reply" style="margin-top:2em;"> <a href="<?php echo base_url('common/edit_profile');?>"><i class="glyphicon glyphicon-edit"></i>
            &nbsp;Edit Details</a> </div>
          </div>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 text-center circle-padding">
      <div class="c100 p<?php echo $profile_per;?>"> <span><?php echo $profile_per;?>%</span>
        <div class="slice">
          <div class="bar"></div>
          <div class="fill"></div>
        </div>
      </div>
      <div class="clearfix"> </div>
      <div class="reply"> <a href="<?php echo base_url('common/edit_profile')?>"><i class="glyphicon glyphicon-edit"></i>&nbsp;Complete Your Profile</a> </div>
    </div>
  </div >
  <div class="container" style="margin-top:1%;">
    <div class="col-md-9 single-left">
      <div id="parentVerticalTab">
        <ul class="resp-tabs-list hor_1">
          <li>Basic Details</li>
          <li>My Album</li>
          <li>Change My Password</li>
          <li>Sent Messages</li>
          <li>Receive Messages <?php if(!empty($msg_cnt)):?>
          <div style="border:1px solid red;background-color:red;width:25px;border-radius:25px;text-align: center;color:#fff;display: inline;">
		  <?php echo (empty($msg_cnt)?"":$msg_cnt);?></div><?php endif;?></li>
        </ul>
        <div class="resp-tabs-container hor_1">
          <div>
            <div class="accordion">
              <dl>
                <dt> <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordionTitleActive accordionTitle js-accordionTrigger active">Basic Detail </a> </dt>
                <dd class="accordion-content is-expanded accordionItem " id="accordion1" aria-hidden="true">
                  <table>
                    <tbody>
                      <tr>
                        <td><strong>Gender</strong></td>
                        <td colspan="2"><?php echo (empty($data)?"":$data[0]['registration_gender'])?></td>
                        <td><strong>Religion</strong></td>
                        <td colspan="2"><?php echo (empty($data)?"":$data[0]['registration_religion'])?>
                      </tr>
                      <tr>
                        <td><strong>Mothertounge</strong></td>
                        <td colspan="2"><?php echo (empty($data)?"":$data[0]['registration_mother_tongue'])?></td>
                        <td><strong>Spoken Language</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_spoken_language']?></td>
                      </tr>
                      <tr>
                        <td><strong>Cast</strong></td>
                        <td colspan="2"><?php echo $data[0]["registration_caste"];?></td>
                        <td><strong>Subcast</strong></td>
                        <td colspan="2"> <?php echo $data[0]["registration_sub_caste"];?></td>
                      </tr>
                      <tr>
                        <td><strong>Profile Created By</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_profile_createdby']?></td>
                        <td><strong>Marital Status</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_maritial_status']?></td>
                      </tr>
                      <!--<tr>
                      <td><strong>Children</strong></td>
                      <td colspan="2"><select id="TxtChildren" name="TxtChildren" class="form-control">
                          <option value="Not Specified">- Select -</option>
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                        </select></td>
                      <td><strong>Children Living Status </strong></td>
                      <td colspan="2"><select id="TxtChildLivstatus" name="TxtChildLivstatus" class="form-control" >
                          <option value="Not Specified" selected="selected"> Select </option>
                          <option value="Living with me">Living with me</option>
                          <option value="Not Living with me">Not Living with me</option>
                          <option value="Never Live with me">Never Live with me</option>
                        </select></td>
                    </tr>-->
                      <tr>
                        <td><strong>Subgroup</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_subgroup']?></td>
                        <td><strong>Age </strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_age']?></td>
                      </tr>
                      <tr>
                        <td><strong>About Myself</strong></td>
                        <td colspan="2"> <?php echo $data[0]['registration_about_myself']?></td>
                        <td><strong>PAN/ADHAR</strong></td>
                        <td colspan="2"> <?php echo $data[0]['registration_pan_adhar']?></td>
                      </tr>
                      <tr>
                        
                        <td colspan="5">
                          <a href="<?php echo base_url('common/edit_profile/101');?>"><button class="btn btn-danger pull-right" type="submit">Edit</button></a>
                          </td>
                      </tr>
                    </tbody>
                  </table>
                </dd>
                <dt> <a href="#accordion2" aria-expanded="false" aria-controls="accordion2" class="accordion-title accordionTitle js-accordionTrigger">
                 Physical Status & Lifestyle</a> </dt>
                <dd class="accordion-content accordionItem is-collapsed" id="accordion2" aria-hidden="true">
                  <table>
                    <tbody>
                      <tr>
                        <td><strong>Height</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_height']?></td>
                        <td><strong>Weight</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_weight']?></td>
                      </tr>
                      <tr>
                        <td><strong>Blood Group</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_blood_group']?></td>
                        <td><strong>Complexion</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_complexion']?></td>
                      </tr>
                      <tr>
                        <td><strong>Body Type</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_body_type']?></td>
                        <td><strong>Spectacles</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_spectacles']?></td>
                      </tr>
                      <tr>
                        <td><strong>Physical Status</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_physicalstatus']?></td>
                        <td><strong>Diet</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_diet']?></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td colspan="3"> </td>
                        <td colspan="3">
                         <a href="<?php echo base_url('common/edit_profile/102');?>"><button class="btn btn-danger pull-right" type="submit">Edit</button></a>                          </td>
                      </tr>
                      <!-- <tr>
                      <td><strong>Children</strong></td>
                      <td colspan="2"><select id="TxtChildren" name="TxtChildren" class="form-control">
                          <option value="Not Specified"> Select </option>
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                        </select></td>
                      <td colspan="3"><button class="btn btn-danger pull-right" type="submit">Edit</button></td>
                    </tr>-->
                    </tbody>
                  </table>
                </dd>
                <dt> <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger"> Astro Details </a> </dt>
                <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                  <table>
                    <tbody>
                      <tr>
                        <td><strong>Birth Time</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_birth_time']?></td>
                        <td><strong>Birthdate</strong></td>
                        <td colspan="2"><?php echo date("d-m-Y",strtotime($data[0]['registration_birth_date']))?></td>
                      </tr>
                      <tr>
                        <td><strong>Birthplace</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_birth_place']?></td>
                        <td><strong>Country Of Birth</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_country_birth']?></td>
                      </tr>
                      <tr>
                        <td><strong>Rashi</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_rashi']?></td>
                        <td><strong>Nakshatra</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_nakshatra']?></td>
                      </tr>
                      <tr>
                        <td><strong>Charan</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_charan']?></td>
                        <td><strong>Gana</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_gana']?></td>
                      </tr>
                      <tr>
                        <td><strong>Nadi</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_nadi']?></td>
                        <td><strong>Are You Mangalik?</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_manglik']?></td>
                      </tr>
                      <tr>
                        <td><strong>Horoscope match required?</strong></td>
                        <td colspan="3"><?php echo $data[0]['registration_horoscope']?></td>
                        <td colspan="3">
                         <a href="<?php echo base_url('common/edit_profile/103');?>"><button class="btn btn-danger pull-right" type="submit">Edit</button></a>                          </td>                    
                      </tr>
                    </tbody>
                  </table>
                </dd>
                <dt> <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger"> Contact Details </a> </dt>
                <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                  <table>
                    <tbody>
                      <tr>
                        <td><strong>Contact Address</strong></td>
                        <td colspan="4"><?php echo $data[0]['registration_contact_address']?></td>
                      </tr>
                      <tr>
                        <td><strong>City</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_city']?></td>
                        <td><strong>State</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_state']?></td>
                      </tr>
                      <tr>
                        <td><strong>Country</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_country']?></td>
                        <td><strong>Citizenship</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_citizenship']?></td>
                      </tr>
                      <tr>
                        <td><strong>STD</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_std']?></td>
                        <td><strong>Mobile No.</strong></td>
                        <td colspan="2"> <?php echo $data[0]['registration_mobile1']?></td>
                      </tr>
                      <tr>
                        <td><strong>Alternate Mobile No.</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_mobile2']?></td>
                        <td><strong>Telephone No.</strong></td>
                        <td colspan="2"> <?php echo $data[0]['registration_telephone']?></td>
                                    
                      </tr>
                       <tr>
                        <td colspan="5">
                         <a href="<?php echo base_url('common/edit_profile/104');?>"><button class="btn btn-danger pull-right" type="submit">Edit</button></a>                          </td>           
                      </tr>
                    </tbody>
                  </table>
                </dd>
                <dt> <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger"> Career Details </a> </dt>
                <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                  <table>
                    <tbody>
                      <tr>
                        <td><strong>Highest Qualification</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_highest_qualification']?></td>
                        <td><strong>Education Level</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_education_level']?></td>
                      </tr>
                      <tr>
                        <td><strong>Education Field</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_education_field']?></td>
                        <td><strong>Education in Detail </strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_education_detail']?></td>
                      </tr>
                      <tr>
                        <td><strong>Occupation</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_occupation']?></td>
                        <td><strong>Employed In</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_employedin']?></td>
                      </tr>
                      <tr>
                        <td><strong>Occupation in Detail </strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_occupation_detail']?></td>
                        <td><strong>Mothnly Income</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_monthly_income']?></td>
                      </tr>
                      <tr>
                        <td><strong>Prefer working after marriage ?</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_working_marriage']?></td>
                        <td colspan="3">
                         <a href="<?php echo base_url('common/edit_profile/105');?>"><button class="btn btn-danger pull-right" type="submit">Edit</button></a>                          </td>                      
                      </tr>
                    </tbody>
                  </table>
                </dd>
                <dt> <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger"> Family Details </a> </dt>
                <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                  <table>
                    <tbody>
                      <tr>
                        <td><strong>Fathers Name</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_fathername']?></td>
                        <td><strong>Fathers Status</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_fatherstatus']?></td>
                      </tr>
                      <tr>
                        <td><strong>Mothers Name </strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_mothername']?></td>
                        <td><strong>Mothers Status</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_motherstatus']?></td>
                      </tr>
                      <tr>
                        <td><strong>Brother's Married </strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_brothermarried']?></td>
                        <td><strong>Brother's Unmarried </strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_brotherunmarried']?></td>
                      </tr>
                      <tr>
                        <td><strong>Sister's Married </strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_sistermarried']?></td>
                        <td><strong>Sister's Unmarried </strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_sisterunmarried']?></td>
                      </tr>
                      <tr>
                        <td><strong>Living Status</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_livingstatus']?></td>
                        <td><strong>Family Type</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_familytype']?></td>
                      </tr>
                      <tr>
                        <td><strong>Family Status</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_familystatus']?></td>
                        <td><strong>(Village)</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_nativevillage']?></td>
                      </tr>
                      <tr>
                        <td><strong>(Taluka) </strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_nativetaluka']?></td>
                        <td><strong>(District)</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_nativedistrict']?></td>
                      </tr>
                      <tr>
                        <td><strong>(State) </strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_nativestate']?></td>
                        <td><strong></strong></td>
                        <td colspan="2"></td>
                      </tr>
                      <tr>
                        <td><strong>About My Family</strong></td>
                        <td colspan="3"><?php echo $data[0]['registration_myfamily']?></td>
                        <td colspan="3">
                         <a href="<?php echo base_url('common/edit_profile/106');?>"><button class="btn btn-danger pull-right" type="submit">Edit</button></a>                          </td>                      
                      </tr>
                    </tbody>
                  </table>
                </dd>
                <dt> <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger"> Partner Preference </a> </dt>
                <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                  <table>
                    <tbody>
                      <tr>
                        <td><strong>Age : Between</strong></td>
                        <td colspan="1"><?php echo (empty($partner_data)?"" : $partner_data[0]['partner_agefrom'])?></td>
                        <td colspan="1"><?php echo (empty($partner_data)?"" : $partner_data[0]['partner_ageto'])?></td>
                        <td><strong>Height : Between </strong></td>
                        <td colspan="1"><?php echo (empty($partner_data)?"" : $partner_data[0]['partner_heightfrom'])?></td>
                        <td colspan="1"><?php echo (empty($partner_data)?"" : $partner_data[0]['partner_heightto'])?></td>
                      </tr>
                      <tr>
                        <td><strong>Marital Status </strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"" :$partner_data[0]['partner_maritalstatus'])?></td>
                        <td><strong>Religion</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"" :$partner_data[0]['partner_religion'])?></td>
                      </tr>
                      <tr>
                        <td><strong>Caste</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"" :$partner_data[0]['partner_caste'])?></td>
                        <td><strong>Are you ready for intercaste marriage?</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"" :$partner_data[0]['partner_intercaste'])?></td>
                      </tr>
                      <tr>
                        <td><strong>Manglik Required ? </strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"" :$partner_data[0]['partner_manglik'])?></td>
                        <td><strong>Diet</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"" :$partner_data[0]['partner_diet'])?></td>
                      </tr>
                      <tr>
                        <td><strong>Smoke</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"" :$partner_data[0]['partner_smoke'])?></td>
                        <td><strong>Drink</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"" :$partner_data[0]['partner_drink'])?></td>
                      </tr>
                      <tr>
                        <td><strong>Complexion</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"" :$partner_data[0]['partner_complexion'])?></td>
                        <td><strong>Body Type </strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"" :$partner_data[0]['partner_bodytype'])?></td>
                      </tr>
                      <tr>
                        <td><strong>Education Level</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"" :$partner_data[0]['partner_educationlevel'])?></td>
                        <td><strong>Employed In</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"" :$partner_data[0]['partner_employedlevel'])?></td>
                      </tr>
                      <tr>
                        <td><strong>Occupation</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"" :$partner_data[0]['partner_occupation'])?></td>
                        <td><strong>Monthly Income</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"" :$partner_data[0]['partner_monthlyincome'])?></td>
                      </tr>
                      <tr>
                        <td><strong>Sub Group</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"" :$partner_data[0]['partner_subgroup'])?></td>
                        <td><strong>City </strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"" :$partner_data[0]['partner_city'])?></td>
                      </tr>
                      <tr>
                        <td><strong>State</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"" :$partner_data[0]['partner_state'])?></td>
                        <td><strong>Country </strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"" :$partner_data[0]['partner_country'])?></td>
                      </tr>
                      <tr>
                        <td><strong>About My Partner </strong></td>
                        <td colspan="4"><?php echo (empty($partner_data)?"" :$partner_data[0]['partner_aboutpartner'])?></td>
                        <td colspan="3">
                         <a href="<?php echo base_url('common/edit_profile/107');?>"><button class="btn btn-danger pull-right" type="submit">Edit</button></a>                      </td>                      
                      </tr>
                    </tbody>
                  </table>
                </dd>
              </dl>
            </div>
          </div>
          <div>
            <div class="accordion">
              <dl>
                <dt> <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordionTitleActive accordionTitle js-accordionTrigger active">My Album</a> </dt>
                <dd class="accordion-content is-expanded accordionItem " id="accordion1" aria-hidden="true">
                      <div class="row">
                      <?php if(!empty($album)): ?>
                      <?php foreach ($album as $key => $value): 
                        $id = $value['album_user_id'];
                      ?>
                        <div class="col-sm-3 col-xs-6" style="padding: 10px;"><img src="<?php echo base_url().'register/album/'.$id.'/'.$value['album_photo']?>" class="img-responsive" style="height:150px;width:150px;"> 
                          <input type="hidden" id="album_id" value="<?php echo $value['album_id'];?>">
                          <!-- <select name="album_photo_visibility" id="album_photo_visibility" class="form-control" style="margin-top: 10px;" onchange="update_album_pic_status();">
                              <option value="">Show Image</option>
                              <option value="Yes">Yes</option>
                              <option value="No">No</option>
                          </select> -->
                          <a> <input type="button" name="delete" value="X" class="btn btn-danger pull-right" onclick="remove_pic_from_album(<?php echo $value['album_id'];?>)"></a>
                         </div>
                      <?php endforeach; endif;?>
                      </div>

                </dd>
              </dl>
              <form id="upload_photo">
                      <input type="file" name="userfile" id="uploadImage">
                      <br/>
                       <input type="button" name="upload" value="Upload Photo" class="btn btn-danger" id="upload_album" onclick="upload_album_photo();" style="margin-top:4px;">
                      <br/>
              </form>
              <div style="padding: 1%;">
                      <label>Do You Want To Show Your Album Photo?</label>
                     <label>Yes</label> 
                    
                     <input type="radio" name="yes" value="0"  id="album_photo_visibility"onclick="update_album_pic_status(<?php echo (empty($album)?"" :$album[0]['album_user_id'])?>,0);" style="height: 20px;width: 20px; padding" <?php echo (empty($album)?"" :$album[0]['album_photo_visibility']==0) ?  "checked" : "" ;?>/>
                      <label>No</label> <input type="radio" name="yes" value="1"  id="album_photo_visibility" onclick="update_album_pic_status(<?php echo (empty($album)?"" :$album[0]['album_user_id'])?>,1);" style="height: 20px; width: 20px;" <?php echo (empty($album)?"" :$album[0]['album_photo_visibility']==1) ?  "checked" : "" ;?>>
                </div>
                <div style="padding: 1%;">
                      <label>Do You Want To Show Your Profile Photo?</label>
                     <label>Yes</label> <input type="radio" name="no" value="0"  id="album_photo_visibility1" 
                     style="height: 20px;width: 20px;" onclick="update_rgister_profile_pic_status(<?php echo 
                     $registration_id;?>,0);" <?php echo ($data[0]['registration_photo_visibility']==0) ?  "checked" : "" ;?>>
                      <label>No</label> <input type="radio" name="no" value="1"  id="album_photo_visibility1"  
                      style="height: 20px; width: 20px;"onclick="update_rgister_profile_pic_status(<?php echo 
                     $registration_id;?>,1);" <?php echo ($data[0]['registration_photo_visibility']==1) ?  "checked" : "" ;?>>
                </div>    
            </div>
          </div>
          <div>
            <div class="accordion">
              <dl>
                <dt> <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordionTitleActive accordionTitle js-accordionTrigger active">Change My Password</a> </dt>
                <dd class="accordion-content is-expanded accordionItem " id="accordion1" aria-hidden="true">
                  <p>Enter your UserName, current password, and new password (twice for verification) then click on Change Password. Passwords must be at least 6 characters and can be mixed case.</p>
                  <table>
                    <tbody>
                     <div class="alert_msg3"></div>
                    <form id="change_pass">
                      <tr>
                        <td>Username</td>
                      </tr>
                      <tr>
                        <td>
                            <input type="text" name="registration_email" placeholder="Username" class="form-control" id="reg_email" value="<?php echo $email; ?>" readonly="readonly" required>
                            <input type="hidden" name="registration_id" class="form-control" id="reg_id" value="<?php echo $registration_id; ?>">

                        </td>
                      </tr>
                      <tr>
                        <td>Old Password</td>
                      </tr>
                      <tr>
                        <td>
                            <input type="password" name="old_password" placeholder="Old Password" class="form-control" id="old_pass" required>
                        </td>
                      </tr>
                      <tr>
                        <td>New Password</td>
                      </tr>
                      <tr>
                        <td>
                            <input type="password" name="new_password" placeholder="New Password" class="form-control" id="new_pass" required>
                        </td>
                      </tr>
                      <tr>
                        <td>Re-Enter New Password</td>
                      </tr>
                      <tr>
                        <td>
                            <input type="password" name="re_new_password" placeholder="New Password" class="form-control" id="re_pass" required>
                        </td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-danger pull-right" type="button" onclick="change_password()">Save</button></td>
                      </tr>
                    </form>
                    </tbody>
                  </table>
                </dd>
              </dl>
            </div>
          </div>
          <div>
            <div class="accordion">
              <dl>
                <dt> <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordionTitleActive accordionTitle js-accordionTrigger active">Sent Messages</a> </dt>
                <dd class="accordion-content is-expanded accordionItem " id="accordion1" aria-hidden="true">
                  <table>
                    <thead style="background:#F1F1F2;">
                      <tr>
                        <td><strong>Prf. ID</strong></td>
                        <td><strong>Fullname</strong></td>
                        <td><strong>Message</strong></td>
                        <td><strong>Date</strong></td>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($msg_by as $key => $value): 
                      $date = date('j F, Y', $value['message_date']);
                    ?>
                      <tr>
                        <td><a href="<?php echo base_url().'common/view_profile/'.$value['message_to']?>" style="color:#666;" id="msg_hover"><?php echo "SPV";?><?php echo $value['message_to']?></a></td>
                        <td><?php echo $value['registration_fname']?> <?php echo $value['registration_lname']?></td>
                        <td><?php echo $value['message_subject']?></td>
                        <td><?php echo $date?></td>
                      </tr>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
                </dd>
              </dl>
            </div>
          </div>
          <div>
            <div class="accordion">
              <dl>
                <dt> <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordionTitleActive accordionTitle js-accordionTrigger active">Recieve Messages </a> </dt>
                <dd class="accordion-content is-expanded accordionItem " id="accordion1" aria-hidden="true">
                  <table>
                    <thead style="background:#F1F1F2;">
                      <tr>
                        <td><strong>Prf. ID</strong></td>
                        <td><strong>Fullname</strong></td>
                        <td><strong>Message</strong></td>
                        <td><strong>Date</strong></td>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($msg_to as $key => $value): 
                      $date = date('j F, Y', $value['message_date']);
                    ?>
                      <tr>
                        <td><a href="<?php echo base_url().'common/view_profile/'.$value['message_from']?>" style="color:#666;" id="msg_hover"><?php echo "SPV";?>&nbsp;<?php echo $value['message_from']?></a></td>
                        <td><?php echo $value['registration_fname']?> <?php echo $value['registration_lname']?></td>
                        <td><?php echo $value['message_subject']?></td>
                        <td><?php echo $date?></td>
                      </tr>
                    <?php endforeach; ?>                      
                    </tbody>
                  </table>
                </dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--<div class="col-md-3 single-right" style="background:#f1f1f2; border:1px solid #ccc; padding:1.6%; margin-top:2.2px;">
      <div class="categories">
        <h5>Categories</h5>
        <ul>
          <li><a href="#">My Account</a></li>
          <li><a href="#">Releated Matches</a></li>
           
        </ul>
      </div>
      <div class="categories categories-mid">
        <h5>Archives</h5>
        <ul>
          <li><a href="#">May 20,2009</a></li>
          <li><a href="#">July 31,2010</a></li>
          <li><a href="#">January 20,2012</a></li>
          <li><a href="#">November 2,2014</a></li>
          <li><a href="#">December 25,2015</a></li>
          <li><a href="#">May 28,2016</a></li>
        </ul>
      </div>
    </div>-->
    
    <div class="col-md-3 single-right" style="border:1px solid #ccc; padding:4%; text-align:center; margin-top:2px;">
    	<a href="http://www.sanjiproduction.com" target="_blank"><p> <img src="<?php echo base_url().'public/images/branding-.png'?>" alt=" " class="img-responsive"/></p></a>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<?php 
  $this->load->view('templates/footer');
?>