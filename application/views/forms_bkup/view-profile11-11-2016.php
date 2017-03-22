<?php 
  $data11['link']="index";
  $this->load->view('templates/header',$data11);
  $id = $this->session->userdata('registration_id');

  $registration_id = $this->session->userdata('registration_id');
  $fname = $this->session->userdata('registration_fname');
  $lname = $this->session->userdata('registration_lname');
  $login_email = $this->session->userdata('registration_email');
  //print_r($login_email);exit;
  $registration_gender = $this->session->userdata('registration_gender');
 ?>
 <style>
 td, th {
    padding: 10px;
    border: 1px solid rgba(238,237,238,0.28);
    text-align: left;
    color: #666;
    font-size: 12px;
}
 </style>
<!-- breadcrumbs -->
<div class="services-top-breadcrumbs">
  <div class="container">
    <div class="services-top-breadcrumbs-right">
      <ul>
        <li><a href="<?php echo base_url()?>">Home</a> <i>/</i></li>
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
    
  </div>
  <div class="container" style="margin-top:1%;">

    <div class="col-md-9 single-left">
      <div class="col-md-7">
       <div class="comments">
       <div class="alert_msg1"></div>
        <div class="comments-grid">
          <div class="comments-grid-left"> 
    <?php if($data[0]['registration_photo_visibility'] == 0): ?>

          <img src="<?php echo base_url().'register/'.$data[0]['registration_photo']?>" alt="" 
          class="img-responsive thumbnail zoom" style="width:100%; height:125px;" />

    <?php elseif ($data[0]['registration_photo_visibility'] == 1 && $data[0]['registration_gender'] == 'male'): ?>

      <img src="<?php echo base_url().'register/male.png'?>" alt="" 
          class="img-responsive thumbnail zoom"style="width:100%; height:125px;" />

    <?php elseif ($data[0]['registration_photo_visibility'] == 1 && $data[0]['registration_gender'] == 'female'): ?>

    <img src="<?php echo base_url().'register/female.jpg'?>" alt="" 
          class="img-responsive thumbnail zoom" style="width:100%; height:125px;"/>
    <?php endif; ?>

          </div>
          <div class="comments-grid-right" >
            <h3><a href="#"><?php echo $data[0]['registration_fname']?>&nbsp;<?php echo $data[0]['registration_lname']?></a></h3>
            <h5 class="top"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> <?php echo date('d-m-Y',strtotime($data[0]['registration_birth_date']))?></h5>
            <h5> Caste : <?php echo $data[0]['registration_caste'] ?>  </h5>
             <h5> Education : <?php echo $data[0]['registration_highest_qualification']?> </h5>
             <h5> Profile Id : SPV<?php echo $data[0]['registration_id']?> </h5>
          <!-- <div class="reply"> <a href="edit-profile.html"><i class="glyphicon glyphicon-envelope"></i>&nbsp;Send Message...</a>
             </div> -->
             <a style="margin-top:5%;" onclick="send_sms(<?php echo $data[0]['registration_id']?>,'<?php echo $data[0]['registration_email']?>','<?php echo $login_email?>','<?php echo $fname?>','<?php echo $lname?>')" class="btn  btn-sm btn-default">
             <i class="glyphicon glyphicon-heart" ></i>&nbsp;&nbsp;Send Message</a>
             <!-- <button  id="myBtn"  type="button" name="sendmessage" class="btn  btn-sm btn-default">
             <i class="glyphicon glyphicon-heart"></i>&nbsp;&nbsp;Send Message</button> -->
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
    </div>
    <div class="col-md-5" style="border-left:1px solid #ccc; margin-top:2em;">
      <h4 style="color:#999;"><i class="glyphicon glyphicon-map-marker"></i>&nbsp;&nbsp;Contact Details</h4>
        <table style="width:100%;">
                    <tbody>
                    <col style="width:40%;" />
                    <col style="width:60%;" />
                      <tr>
                        <td style="color:#666; font-size:13px;">Contact Address</strong></td>
                        <td style="color:#666; font-size:13px;"><?php echo $data[0]['registration_contact_address']?></td>
                      </tr>
                      
                       <tr>
                         <td style="color:#666; font-size:13px;">Mobile No.</strong></td>
                        <td colspan="1" style="color:#999;"><?php echo $data[0]['registration_mobile1']?></td>
                      </tr>
                       <tr>
                        <td style="color:#666; font-size:13px;">Alternate Mobile No.</strong></td>
                        <td colspan="1" style="color:#999;"><?php echo $data[0]['registration_mobile2']?></td>
                      </tr>
                      <tr>
                         <td style="color:#666; font-size:13px;">Telephone No.</strong></td>
                        <td colspan="1" style="color:#999;"><?php echo $data[0]['registration_telephone']?></td>
                      </tr>
                     <!-- <p>Contact Address &nbsp; &nbsp;: &nbsp; &nbsp;<?php echo $data[0]['registration_contact_address']?></p>
                      <p>Mobile No. &nbsp; &nbsp;: &nbsp; &nbsp;<?php echo $data[0]['registration_mobile1']?></p>
                      <p>Alternate Mobile No &nbsp; &nbsp;: &nbsp; &nbsp;<?php echo $data[0]['registration_mobile2']?></p>
                      <p>Telephone No. &nbsp; &nbsp;: &nbsp; &nbsp;<?php echo $data[0]['registration_telephone']?></p>-->
                    </tbody>
                  </table>
    </div>
          
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
                        <td colspan="2"> <?php echo $data[0]['registration_gender']?></td>
                        <td><strong>Religion</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_religion']?></td>
                      </tr>
                      <tr>
                        <td><strong>Mothertounge</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_mother_tongue']?></td>
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
                        <td colspan="3"> <?php echo $data[0]['registration_about_myself']?></td>
                        
                      </tr>
                    </tbody>
                  </table>
                </dd>
                
                
                <dt> <a href="#accordion2" aria-expanded="false" aria-controls="accordion2" class="accordion-title accordionTitle js-accordionTrigger">My Album</a> </dt>
                <dd class="accordion-content is-collapsed accordionItem" id="accordion2" aria-hidden="true">
         <div class="demo-gallery">
            <ul id="lightgallery" class="list-unstyled row">
              <?php 
                  if(!empty($album) && $album[0]['album_photo_visibility'] == 1) :
                  foreach ($album as $key => $value) :
              ?>
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="<?php echo base_url().'register/album/'.$value['album_user_id'].'/'.$value['album_photo']?>" data-sub-html=" " data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                    <a href="">
                      <img class="img-responsive" src="<?php echo base_url().'register/album/'.$value['album_user_id'].'/'.$value['album_photo']?>" alt="Thumb-1" style="height:150px;width:150px;">
                    </a>
                </li>
              <?php 
                  endforeach;
                  else:
              ?>
                <li class="col-xs-6 col-sm-4 col-sm-offset-4 col-md-3" >
                    
                      <span style="padding: 10%;">No image to Show</span>
                   
                </li>
              <?php
                  endif;
              ?>
                
            </ul>
        </div>
        
                </dd>
             
                
                
                <dt> <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger"> Physical Status & Lifestyle</a> </dt>
                <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
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
                     <!-- <tr>
                        <td></td>
                        <td colspan="3"> </td>
                       
                      </tr>-->
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
                <dt> <a href="#accordion4" aria-expanded="false" aria-controls="accordion4" class="accordion-title accordionTitle js-accordionTrigger"> Astro Details </a> </dt>
                <dd class="accordion-content accordionItem is-collapsed" id="accordion4" aria-hidden="true">
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
                        <td colspan="2"><?php echo $data[0]['registration_horoscope']?></td>
                                       
                      </tr>
                    </tbody>
                  </table>
                </dd>
                <dt> <a href="#accordion5" aria-expanded="false" aria-controls="accordion5" class="accordion-title accordionTitle js-accordionTrigger"> Contact Details </a> </dt>
                <dd class="accordion-content accordionItem is-collapsed" id="accordion5" aria-hidden="true">
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
                        <td><strong>Telephone No.</strong></td>
                        <td colspan="2"> <?php echo $data[0]['registration_telephone']?></td>
                      </tr>
                      <tr>
                        <td><strong>Alternate Mobile No.</strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_mobile2']?></td>
                                           
                      </tr>
                    </tbody>
                  </table>
                </dd>
                <dt> <a href="#accordion6" aria-expanded="false" aria-controls="accordion6" class="accordion-title accordionTitle js-accordionTrigger"> Career Details </a> </dt>
                <dd class="accordion-content accordionItem is-collapsed" id="accordion6" aria-hidden="true">
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
                                          
                      </tr>
                    </tbody>
                  </table>
                </dd>
                <dt> <a href="#accordion7" aria-expanded="false" aria-controls="accordion7" class="accordion-title accordionTitle js-accordionTrigger"> Family Details </a> </dt>
                <dd class="accordion-content accordionItem is-collapsed" id="accordion7" aria-hidden="true">
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
                        <td><strong>Brother's Unarried </strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_brotherunmarried']?></td>
                      </tr>
                      <tr>
                        <td><strong>Sister's Married </strong></td>
                        <td colspan="2"><?php echo $data[0]['registration_sistermarried']?></td>
                        <td><strong>Sister's Unarried </strong></td>
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
                        <td colspan="4"><?php echo $data[0]['registration_myfamily']?></td>
                                          
                      </tr>
                    </tbody>
                  </table>
                </dd>
                <dt> <a href="#accordion8" aria-expanded="false" aria-controls="accordion8" class="accordion-title accordionTitle js-accordionTrigger"> Partner Preference </a> </dt>
                <dd class="accordion-content accordionItem is-collapsed" id="accordion8" aria-hidden="true">
                  <table>
                    <tbody>
                      <tr>
                      <!-- <?php echo (empty($login_data)?"":$login_data[0]['login_id'])?> -->
                        <td><strong>Age : Between</strong></td>
                        <td colspan="1"><?php echo (empty($partner_data)?"Not Specified":$partner_data[0]['partner_agefrom'])?></td>
                        <td colspan="1"><?php echo  (empty($partner_data)?"Not Specified":$partner_data[0]['partner_ageto'])?></td>
                        <td><strong>Height : Between </strong></td>
                        <td colspan="1"><?php echo  (empty($partner_data)?"Not Specified":$partner_data[0]['partner_heightfrom'])?></td>
                        <td colspan=><?php echo  (empty($partner_data)?"Not Specified":$partner_data[0]['partner_heightto'])?></td>
                      </tr>
                      <tr>
                        <td><strong>Marital Status </strong></td>
                        <td colspan="2"><?php echo  (empty($partner_data)?"":$partner_data[0]['partner_maritalstatus'])?></td>
                        <td><strong>Religion</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"": $partner_data[0]['partner_religion'])?></td>
                      </tr>
                      <tr>
                        <td><strong>Caste</strong></td>
                        <td colspan="2"><?php  echo  (empty($partner_data)?"":$partner_data[0]['partner_caste'])?></td>
                        <td><strong>Are you ready for intercaste marriage?</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"Not Specified": $partner_data[0]['partner_intercaste'])?></td>
                      </tr>
                      <tr>
                        <td><strong>Manglik Required ? </strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"Not Specified":$partner_data[0]['partner_manglik'])?></td>
                        <td><strong>Diet</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"Not Specified":$partner_data[0]['partner_diet'])?></td>
                      </tr>
                      <tr>
                        <td><strong>Smoke</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"Not Specified":$partner_data[0]['partner_smoke'])?></td>
                        <td><strong>Drink</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"Not Specified": $partner_data[0]['partner_drink'])?></td>
                      </tr>
                      <tr>
                        <td><strong>Complexion</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"Not Specified": $partner_data[0]['partner_complexion'])?></td>
                        <td><strong>Body Type </strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"Not Specified": $partner_data[0]['partner_bodytype'])?></td>
                      </tr>
                      <tr>
                        <td><strong>Education Level</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"Not Specified":$partner_data[0]['partner_educationlevel'])?></td>
                        <td><strong>Employed In</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"Not Specified":$partner_data[0]['partner_employedlevel'])?></td>
                      </tr>
                      <tr>
                        <td><strong>Occupation</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"Not Specified":$partner_data[0]['partner_occupation'])?></td>
                        <td><strong>Monthly Income</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"Not Specified":$partner_data[0]['partner_monthlyincome'])?></td>
                      </tr>
                      <tr>
                        <td><strong>Sub Group</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"Not Specified":$partner_data[0]['partner_subgroup'])?></td>
                        <td><strong>City </strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"Not Specified":$partner_data[0]['partner_city'])?></td>
                      </tr>
                      <tr>
                        <td><strong>State</strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"Not Specified":$partner_data[0]['partner_state'])?></td>
                        <td><strong>Country </strong></td>
                        <td colspan="2"><?php echo (empty($partner_data)?"Not Specified":$partner_data[0]['partner_country'])?></td>
                      </tr>
                      <tr>
                        <td><strong>About My Partner </strong></td>
                        <td colspan="4"><?php echo (empty($partner_data)?"Not Specified":$partner_data[0]['partner_aboutpartner'])?></td>
                        <td colspan="3">                          </td>                      
                      </tr>
                    </tbody>
                  </table>
                </dd>
              </dl>
            </div>
          </div>
          
           
           
           
        </div>
    
    </div>
    <div class="col-md-3 single-right">
      <div class="categories">
       <!-- <h4> <i class="glyphicon glyphicon-heart"></i>&nbsp;&nbsp;Branding</h4> <br>-->
           <a href="http://www.sanjiproduction.com" target="_blank"> <img src="<?php echo base_url();?>public/images/branding-.png" class="img-responsive"></a> 
       </div>
       <hr>
      <div class="categories categories-mid">
        <div class="related-posts">
        <h4><i class="glyphicon glyphicon-heart"></i>&nbsp;&nbsp;New Members</h4>
        
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
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<?php 
  $this->load->view('templates/footer');
?>
<script type="text/javascript">

var id = "<?php echo $this->session->userdata('registration_id'); ?>";

function send_sms(p_id,email_id,login_email,fname,lname)
{
    var data = "";
    data += '<form id="opt_form" >'
    data += '<input name="message_from" type="hidden" class="form-control" id="message_from" value="'+id+'"/>';
    data += '<input name="message_to" type="hidden" class="form-control signup_input" id="message_to" value="'+p_id+'"/>';
    data += '<input name="email_id" type="hidden" class="form-control signup_input" id="email_id" value="'+email_id+'"/>';
    data += '<input name="fname" type="hidden" class="form-control signup_input" id="fname" value="'+fname+'"/>';
    data += '<input name="lname" type="hidden" class="form-control signup_input" id="lname" value="'+lname+'"/>';
    data += '<input name="login_email" type="hidden" class="form-control signup_input" id="login_email" value="'+login_email+'"/>';
    data += '<br/>';
    data += '<textarea name="message_subject" class="form-control" id="message_subject"/></textarea>';
    data += '<br/>';
    data += '<div class="col-sm-3 col-sm-offset-3"><button type="button" class="btn btn-primary" style="width:100%;" onclick="send_message_to_partner()">Send</button></div>';

    data += '<div class="col-sm-3"><button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:red;color:white; width:100%;" >Close</button></div>';

    data += '</form>'

    //$(".modal-footer").html(sbt_btn);
    //data += '</form>';
     header = '<h5><i class="glyphicon glyphicon-heart"></i>&nbsp;&nbsp;Send Message</h5>';
    $(".modal-header").html(header);


    $(".modal-body").html(data);
    $("#myModal").modal('show');
}

</script>