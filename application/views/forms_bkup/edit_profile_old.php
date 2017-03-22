<?php

  $data1['link']="index";
  $this->load->view('templates/header',$data1);
?>
<!-- breadcrumbs -->
<div class="services-top-breadcrumbs">
  <div class="container">
    <div class="services-top-breadcrumbs-right">
      <ul>
        <li><a href="<?php echo base_url();?>">Home</a> <i>/</i></li>
        <li>Edit Profile</li>
      </ul>
    </div>
    <div class="services-top-breadcrumbs-left">
      <h3>Edit Profile</h3>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<!-- //breadcrumbs -->
<div class="single">
  <div class="container">
    <div class="col-md-9 single-left">
     <div class="alert_msg3"></div>
       <div class="accordion">
            <dl>
              <dt>
                <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordionTitleActive accordionTitle js-accordionTrigger active">Basic Detail </a> 
                
              </dt>
              <dd class="accordion-content is-expanded accordionItem " id="accordion1" aria-hidden="true">
                 <form id="basic_detail">
                 <table>
                  <tbody>
                    <tr>
                      <td rowspan="3">
                          <div class="picture-container">
                            <div class="picture"> <img src="<?php echo base_url().'register/'.$data[0]['registration_photo']?>" class="picture-src" id="wizardPicturePreview" title=""/>
                              <input type="file" name="user_profile" id="wizard-picture" class="profile_image_upload">
                            </div>
                            <h6 >Choose Picture</h6>
                            
                          </div>
                          <!-- <div class="picture-container" style="padding-top: 10px;">
                            <a onclick="delete_profile_pic(<?php echo $data[0]['registration_id'];?>)" style="color:inherit;"><h6>Remove Picture</h6></a>
                          </div> -->
                        </td>
                    </tr>
                    <tr>
                      <td><strong>First Name</strong></td>
                      <td colspan="3">
                          <input type="text" name="registration_fname" id="registration_fname"placeholder="First Name" class="form-control" value="<?php echo $data[0]['registration_fname']?>" readonly>
                       </td>
                    </tr>
                    <tr>
                      <td><strong>Last Name</strong></td>
                      <td colspan="3">
                          <input type="text" name="registration_lname" placeholder="Last Name" class="form-control" value="<?php echo $data[0]['registration_lname']?>" readonly>
                        </td>
                    </tr>
                    <tr>
                      <td><strong>Gender</strong></td>
                      <td colspan="2">
                      <input type="text" name="registration_gender" placeholder="Last Name" class="form-control" value="<?php echo $data[0]['registration_gender']?>" readonly>
                        </select></td>
                      <td><strong>Religion</strong></td>
                      <td colspan="2"><select name="registration_religion" id="religion" class="form-control">
                          <option value="<?php echo $data[0]['registration_religion']?>"<?php echo ($data[0]['registration_religion']=="Hindu") ?  "selected" : "" ;?>><?php echo $data[0]['registration_religion']?></option>
<!--                           <option value="Hindu" selected="selected">Hindu</option>
 -->                        </select></td>
                    </tr>
                    <tr>
                      <td><strong>Mothertounge</strong></td>
                      <td colspan="2"><select name="registration_mother_tongue" id="mothertongue" class="form-control">
                          <option value="<?php echo $data[0]['registration_mother_tongue']?>"><?php echo $data[0]['registration_mother_tongue']?></option>
                          <option value="Marathi">Marathi</option>
                          <option value="Arunachali">Arunachali</option>
                          <option value="Assamese">Assamese</option>
                          <option value="Awadhi">Awadhi</option>
                          <option value="Bengali">Bengali</option>
                          <option value="Bhojpuri">Bhojpuri</option>
                          <option value="Brij">Brij</option>
                          <option value="Bihari">Bihari</option>
                          <option value="Chatisgarhi">Chatisgarhi</option>
                          <option value="Dogri">Dogri</option>
                          <option value="English">English</option>
                          <option value="French">French</option>
                          <option value="Garhwali">Garhwali</option>
                          <option value="Garo">Garo</option>
                          <option value="Gujarati">Gujarati</option>
                          <option value="Haryanvi">Haryanvi</option>
                          <option value="Himachali/Pahari">Himachali/Pahari</option>
                          <option value="Hindi">Hindi</option>
                          <option value="Kanauji">Kanauji</option>
                          <option value="Kannada">Kannada</option>
                          <option value="Kashmiri">Kashmiri</option>
                          <option value="Khandesi">Khandesi</option>
                          <option value="Khasi">Khasi</option>
                          <option value="Konkani">Konkani</option>
                          <option value="Koshali">Koshali</option>
                          <option value="Kumoani">Kumoani</option>
                          <option value="Kutchi">Kutchi</option>
                        </select></td>
                      <td><strong>Spoken Language</strong></td>
                      <td colspan="2"><select name="registration_spoken_language" id="spokenlanguages[]" class="form-control">
                          <option value="<?php echo $data[0]['registration_spoken_language']?>"><?php echo $data[0]['registration_spoken_language']?></option>
                          <option value="Marathi">Marathi</option>
                          <option value="Arunachali">Arunachali</option>
                          <option value="Assamese">Assamese</option>
                          <option value="Awadhi">Awadhi</option>
                          <option value="Bengali">Bengali</option>
                          <option value="Bhojpuri">Bhojpuri</option>
                          <option value="Brij">Brij</option>
                          <option value="Bihari">Bihari</option>
                          <option value="Chatisgarhi">Chatisgarhi</option>
                          <option value="Dogri">Dogri</option>
                          <option value="English">English</option>
                          <option value="French">French</option>
                          <option value="Garhwali">Garhwali</option>
                          <option value="Garo">Garo</option>
                          <option value="Gujarati">Gujarati</option>
                          <option value="Haryanvi">Haryanvi</option>
                          <option value="Himachali/Pahari">Himachali/Pahari</option>
                          <option value="Hindi">Hindi</option>
                          <option value="Kanauji">Kanauji</option>
                          <option value="Kannada">Kannada</option>
                          <option value="Kashmiri">Kashmiri</option>
                          <option value="Khandesi">Khandesi</option>
                          <option value="Khasi">Khasi</option>
                          <option value="Konkani">Konkani</option>
                          <option value="Koshali">Koshali</option>
                          <option value="Kumoani">Kumoani</option>
                          <option value="Kutchi">Kutchi</option>
                        </select></td>
                    </tr>
                    <tr>
                      <td><strong>Cast</strong></td>
                      <td colspan="2"><select id="TxtCaste" name="registration_caste" class="form-control">
                          <option value="<?php echo $data[0]['registration_caste']?>"> <?php echo $data[0]['registration_caste']?> </option>
                          <option value="Chambhar" >Chambhar</option>
                        </select></td>
                      <td><strong>Subcast</strong></td>
                      <td colspan="2">
                          <input type="text" name="registration_sub_caste" placeholder="Subcast" class="form-control" value="<?php echo $data[0]['registration_sub_caste']?>">
                        </td>
                    </tr>
                    <tr>
                      <td><strong>Profile Created By</strong></td>
                      <td colspan="2"><select id="profilecreatedby" name="registration_profile_createdby" class="form-control">
                       <?php
                         if((empty($data)?"":$data[0]['registration_profile_createdby']) == (empty($data)?"":$data[0]['registration_profile_createdby'])):
                        ?>
                    	
                        <option value="Self" <?php echo ((empty($data)?"":$data[0]['registration_profile_createdby']) == 'Self')?'selected':''?>>Self</option>
                          <option value="Parents" <?php echo ((empty($data)?"":$data[0]['registration_profile_createdby']) == 'Parents')?'selected':''?>>Parents</option>
                          <option value="Siblings" <?php echo ((empty($data)?"":$data[0]['registration_profile_createdby']) == 'Siblings')?'selected':''?>>Siblings</option>
                        <option value="Relative"<?php echo ((empty($data)?"":$data[0]['registration_profile_createdby']) == 'Relative')?'selected':''?>>Relative</option>
                        <option value="Friend" <?php echo ((empty($data)?"":$data[0]['registration_profile_createdby']) == 'Friend')?'selected':''?>>Friend</option>
                        <option value="Son" <?php echo ((empty($data)?"":$data[0]['registration_profile_createdby']) == 'Son')?'selected':''?>>Son</option>
                        <option value="Daughter" <?php echo ((empty($data)?"":$data[0]['registration_profile_createdby']) == 'Daughter')?'selected':''?>>Daughter</option>
                         <option value="Sister" <?php echo ((empty($data)?"":$data[0]['registration_profile_createdby']) == 'Sister')?'selected':''?>>Sister</option>
                          <option value="Brother" <?php echo ((empty($data)?"":$data[0]['registration_profile_createdby']) == 'Brother')?'selected':''?>>Brother</option>
                           <?php
                                endif;
                            ?> 
                        </select>
                        </td>

                      <td><strong>Marital Status</strong></td>
                      <td colspan="2"><select id="maritalstatus" name="registration_maritial_status" class="form-control" onchange="hide_children_select();">

                        <?php
                         if((empty($data)?"":$data[0]['registration_maritial_status']) == (empty($data)?"":$data[0]['registration_maritial_status'])):
                        ?>
                      <option value="Not Specified"<?php echo ((empty($data)?"":$data[0]['registration_maritial_status']) == 'Not Specified')?'selected':''?>>Not Specified</option>
                    	<option value="Unmarried" <?php echo ((empty($data)?"":$data[0]['registration_maritial_status']) == 'Unmarried')?'selected':''?>>Unmarried</option>
                     	<option value="Divorced" <?php echo ((empty($data)?"":$data[0]['registration_maritial_status']) == 'Divorced')?'selected':''?>>Divorced</option>
                        <option value="Widowed" <?php echo ((empty($data)?"":$data[0]['registration_profile_createdby']) == 'Widowed')?'selected':''?>>Widowed</option>
                        <option value="Seperated"<?php echo ((empty($data)?"":$data[0]['registration_profile_createdby']) == 'Seperated')?'selected':''?>>Seperated</option>
                           <?php
                                endif;
                      ?>
                        </select></td>
                    </tr>
                    <tr>
                      <td><strong>Children</strong></td>
                      <td colspan="2"><select id="registration_children" name="registration_children" class="form-control">
                       <?php
                         if((empty($data)?"":$data[0]['registration_children']) == (empty($data)?"":$data[0]['registration_children'])):
                        ?>
                      <option value="Not Specified">Not Specified</option>
                       <option value="0" <?php echo ((empty($data)?"":$data[0]['registration_children']) == '0')?'selected':''?>><?php echo $data[0]['registration_children']; ?></option>
                       <option value="1" <?php echo ((empty($data)?"":$data[0]['registration_children']) == '1')?'selected':''?>>1</option>
                       <option value="2" <?php echo ((empty($data)?"":$data[0]['registration_children']) == '2')?'selected':''?>>2</option>
                       <option value="3" <?php echo ((empty($data)?"":$data[0]['registration_children']) == '3')?'selected':''?>>3</option>
                       <option value="4" <?php echo ((empty($data)?"":$data[0]['registration_children']) == '4')?'selected':''?>>4</option>
                       <option value="5" <?php echo ((empty($data)?"":$data[0]['registration_children']) == '5')?'selected':''?>>5</option>
                       <option value="6" <?php echo ((empty($data)?"":$data[0]['registration_children']) =='6')?'selected':''?>>6</option>
                       <?php
                                endif;
                      ?>
                        </select></td>
                      <td><strong>Children Living Status </strong></td>
                      <td colspan="2"><select id="registration_childrenstatus" name="registration_childrenstatus" class="form-control" >

                      <?php
                         if((empty($data)?"":$data[0]['registration_childrenstatus']) == (empty($data)?"":$data[0]['registration_childrenstatus'])):
                        ?>
                        <option value="Not Specified">Not Specified</option>
                         <option value="Living with me" <?php echo ((empty($data)?"":$data[0]['registration_childrenstatus']) == 'Living with me')?'selected':''?>><?php echo $data[0]['registration_childrenstatus']; ?></option>
                            <option value="Not Living with me" <?php echo ((empty($data)?"":$data[0]['registration_childrenstatus']) == 'Not Living with me')?'selected':''?>>Not Living with me</option>
                            <option value="Never Live with me" <?php echo ((empty($data)?"":$data[0]['registration_childrenstatus']) == 'Never Live with me')?'selected':''?>>Never Live with me</option>
                          
                            <?php
                                endif;
                      ?>
                        </select></td>
                    </tr>
                    <tr>
                      <td><strong>Subgroup</strong></td>
                      <td colspan="2"><select id="registration_subgroup" name="registration_subgroup" class="form-control">
                       <?php
                         if((empty($data)?"":$data[0]['registration_subgroup']) == (empty($data)?"":$data[0]['registration_subgroup'])):
                        ?>
                       <option value="Deshastha" <?php echo ((empty($data)?"":$data[0]['registration_subgroup']) == 'Deshastha')?'selected':''?>>Deshastha</option>
                       <option value="Kokanastha" <?php echo ((empty($data)?"":$data[0]['registration_subgroup']) == 'Kokanastha')?'selected':''?>>Kokanastha
                       </option>
                         
                      <?php endif; ?>
                        </select></td>
                      <td><strong>Age </strong></td>
                      <td colspan="2"><select id="TxtAge" name="registration_age" class="form-control">
                          <option value="<?php echo $data[0]['registration_age']?>"><?php echo $data[0]['registration_age']?></option>
                          <option value="Not Specified">select</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>
                          <option value="31">31</option>
                          <option value="32">32</option>
                          <option value="33">33</option>
                          <option value="34">34</option>
                          <option value="35">35</option>
                          <option value="36">36</option>
                          <option value="37">37</option>
                          <option value="38">38</option>
                          <option value="39">39</option>
                          <option value="40">40</option>
                          <option value="41">41</option>
                          <option value="42">42</option>
                          <option value="43">43</option>
                          <option value="44">44</option>
                          <option value="45">45</option>
                        </select></td>
                    </tr>
                    <tr>
                      <td><strong>About Myself</strong></td>
                      <td colspan="3">
                          <textarea placeholder="About Myself" class="form-control" rows="2" name="registration_about_myself"><?php echo $data[0]['registration_about_myself']?></textarea>
                       </td>
                      <td colspan="3"><button class="btn btn-danger pull-right" type="button" onclick="update_basic_info()">Save</button></td>
                    </tr>
                  </tbody>
                </table> 
               </form>
              </dd>
              <dt>
                <a href="#accordion2" aria-expanded="false" aria-controls="accordion2" class="accordion-title accordionTitle js-accordionTrigger">
                  Physical Status & Lifestyle</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion2" aria-hidden="true">
                 <form id="Physical_lifestyle"> 
                 <table>
                  <tbody>
                    <tr>
                      <td><strong>Height</strong></td>
                      <td colspan="2"><select id="height" name="registration_height" class="form-control">
                      <?php if(!empty($data[0]['registration_height'])): ?>
                          <option value="<?php echo $data[0]['registration_height']?>"><?php echo $data[0]['registration_height']?></option>
                      <?php endif; ?>
                          <option value="Select">Select</option>
                          <option value="4.0">4ft </option>
                          <option value="4.1">4ft 1in </option>
                          <option value="4.2">4ft 2in </option>
                          <option value="4.3">4ft 3in </option>
                          <option value="4.4">4ft 4in </option>
                          <option value="4.5">4ft 5in </option>
                          <option value="4.6">4ft 6in </option>
                          <option value="4.7">4ft 7in </option>
                          <option value="4.8">4ft 8in </option>
                          <option value="4.9">4ft 9in </option>
                          <option value="4.10">4ft 10in </option>
                          <option value="4.11">4ft 11in </option>
                          <option value="5.0">5ft </option>
                          <option value="5.1">5ft 1in </option>
                          <option value="5.2">5ft 2in </option>
                          <option value="5.3">5ft 3in </option>
                          <option value="5.4">5ft 4in </option>
                          <option value="5.5">5ft 5in </option>
                          <option value="5.6">5ft 6in </option>
                          <option value="5.7">5ft 7in </option>
                          <option value="5.8">5ft 8in </option>
                          <option value="5.9">5ft 9in </option>
                          <option value="5.10">5ft 10in </option>
                          <option value="5.11">5ft 11in </option>
                          <option value="6.0">6ft </option>
                          <option value="6.1">6ft 1in </option>
                          <option value="6.2">6ft 2in </option>
                          <option value="6.3">6ft 3in </option>
                          <option value="6.4">6ft 4in </option>
                          <option value="6.5">6ft 5in </option>
                          <option value="6.6">6ft 6in </option>
                          <option value="6.7">6ft 7in </option>
                          <option value="6.8">6ft 8in </option>
                          <option value="6.9">6ft 9in </option>
                          <option value="6.10">6ft 10in </option>
                          <option value="6.11">6ft 11in </option>
                          <option value="7.1">7ft 1in </option>
                          <option value="7.2">7ft 2in </option>
                          <option value="7.3">7ft 3in </option>
                          <option value="7.4">7ft 4in </option>
                          <option value="7.5">7ft 5in </option>
                          <option value="7.6">7ft 6in </option>
                          <option value="7.7">7ft 7in </option>
                          <option value="7.8">7ft 8in </option>
                          <option value="7.9">7ft 9in </option>
                          <option value="7.10">7ft 10in </option>
                          <option value="7.11">7ft 11in </option>
                        </select></td>
                      <td><strong>Weight</strong></td>
                      <td colspan="2">
                          <input type="text" name="registration_weight" placeholder="Weight" class="form-control" value="<?php echo $data[0]['registration_weight']?>">
                       </td>
                    </tr>
                    <tr>
                      <td><strong>Blood Group</strong></td>
                      <td colspan="2"><select id="TxtBloodGroup" name="registration_blood_group" class="form-control">
                     <?php
                         if((empty($data)?"":$data[0]['registration_blood_group']) == (empty($data)?"":$data[0]['registration_blood_group'])):
                        ?>
                          <option value="A+" <?php echo ((empty($data)?"":$data[0]['registration_blood_group']) == 'A+')?'selected':''?>>A+
                       </option>
                         
                          <option value="A+" <?php echo ((empty($data)?"":$data[0]['registration_blood_group']) == 'A+')?'selected':''?>>A-
                       </option>
                         <option value="B+" <?php echo ((empty($data)?"":$data[0]['registration_blood_group']) == 'B+')?'selected':''?>>B+
                       </option>
                         <option value="B-" <?php echo ((empty($data)?"":$data[0]['registration_blood_group']) == 'B-')?'selected':''?>>B-
                       </option>
                         <option value="AB+" <?php echo ((empty($data)?"":$data[0]['registration_blood_group']) == 'AB+')?'selected':''?>>AB+
                       </option>
                          <option value="AB-" <?php echo ((empty($data)?"":$data[0]['registration_blood_group']) == 'AB-')?'selected':''?>>AB-
                       </option>
                           <option value="O+" <?php echo ((empty($data)?"":$data[0]['registration_blood_group']) == 'O+')?'selected':''?>>O+
                       </option>
                           <option value="O-" <?php echo ((empty($data)?"":$data[0]['registration_blood_group']) == 'O-')?'selected':''?>>O-
                       </option>
                   <?php endif; ?>
                        </select></td>
                      <td><strong>Complexion</strong></td>
                      <td colspan="2"><select id="TxtComplexion" name="registration_complexion" class="form-control">
                     <?php
                         if((empty($data)?"":$data[0]['registration_complexion']) == (empty($data)?"":$data[0]['registration_complexion'])):
                        ?>
                         <option value="Fair" <?php echo ((empty($data)?"":$data[0]['registration_complexion']) == 'Fair')?'selected':''?>>Fair</option>
                         <option value="Very Fair" <?php echo ((empty($data)?"":$data[0]['registration_complexion']) == 'Very Fair')?'selected':''?>>Very Fair  </option>
                           <option value="Wheatish" <?php echo ((empty($data)?"":$data[0]['registration_complexion']) == 'Wheatish')?'selected':''?>>Wheatish
                       </option>
                          <option value="Dark" <?php echo ((empty($data)?"":$data[0]['registration_complexion']) == 'Dark')?'selected':''?>>Dark</option>
                   <?php endif; ?>
                        </select></td>
                    </tr>
                    <tr>
                      <td><strong>Body Type</strong></td>
                      <td colspan="2"><select id="TxtBodyType" name="registration_body_type" class="form-control">
                            <?php
                         if((empty($data)?"":$data[0]['registration_body_type']) == (empty($data)?"":$data[0]['registration_body_type'])):
                        ?>
						 <option value="Slim" <?php echo ((empty($data)?"":$data[0]['registration_body_type']) == 'Slim')?'selected':''?>>Slim</option>
						 <option value="Athletic" <?php echo ((empty($data)?"":$data[0]['registration_body_type']) == 'Athletic')?'selected':''?>>Athletic</option>
                           <option value="Average" <?php echo ((empty($data)?"":$data[0]['registration_body_type']) == 'Average')?'selected':''?>>Average</option>
                          <option value="Heavy" <?php echo ((empty($data)?"":$data[0]['registration_body_type']) == 'Heavy')?'selected':''?>>Heavy</option>
                      <?php endif; ?>
                        </select></td>
                      <td><strong>Spectacles</strong></td>
                      <td colspan="2"><select id="TxtSpectacles" name="registration_spectacles" class="form-control">
                      <?php
                         if((empty($data)?"":$data[0]['registration_spectacles']) == (empty($data)?"":$data[0]['registration_spectacles'])):
                        ?>
                           <option value="No" <?php echo ((empty($data)?"":$data[0]['registration_spectacles']) == 'No')?'selected':''?>>No</option>
                          <option value="Yes" <?php echo ((empty($data)?"":$data[0]['registration_spectacles']) == 'Yes')?'selected':''?>>Yes</option>
                           <option value="Contact Lenses" <?php echo ((empty($data)?"":$data[0]['registration_spectacles']) == 'Contact Lenses')?'selected':''?>>Contact Lenses</option>
                       <?php endif; ?>
                        </select></td>
                    </tr>
                    <tr>
                      <td><strong>Physical Status</strong></td>
                      <td colspan="2"><select id="physicalstatus" name="registration_physicalstatus" class="form-control">
                     <?php
                         if((empty($data)?"":$data[0]['registration_physicalstatus']) == (empty($data)?"":$data[0]['registration_physicalstatus'])):
                        ?>
                          <option value="Normal" <?php echo ((empty($data)?"":$data[0]['registration_physicalstatus']) == 'Normal')?'selected':''?>>Normal</option>
                           <option value="Disabled" <?php echo ((empty($data)?"":$data[0]['registration_physicalstatus']) == 'Disabled')?'selected':''?>>Disabled</option>
                       <?php endif; ?>
                        </select></td>
                      <td><strong>Diet</strong></td>
                      <td colspan="2"><select id="ppdiet" name="registration_diet" class="form-control">
                      <?php
                         if((empty($data)?"":$data[0]['registration_diet']) == (empty($data)?"":$data[0]['registration_diet'])):
                        ?>
                         <option value="Vegetarian" <?php echo ((empty($data)?"":$data[0]['registration_physicalstatus']) == 'Vegetarian')?'selected':''?>>Vegetarian</option>
                          <option value="Non-Vegetarian" <?php echo ((empty($data)?"":$data[0]['registration_physicalstatus']) == 'Non-Vegetarian')?'selected':''?>>Non-Vegetarian</option>
                            <option value="Eggetarian" <?php echo ((empty($data)?"":$data[0]['registration_physicalstatus']) == 'Eggetarian')?'selected':''?>>Eggetarian
                            </option>
                      <?php endif; ?>
                        </select></td>
                    </tr>
                    <tr>
                      <td></td> 
                      <td colspan="5"><button class="btn btn-danger pull-right" type="button" onclick="physical_status()">Save</button></td>
                    </tr>
                  </tbody>

                </table>
                </form>
              </dd>
              <dt>
                <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                  Astro Details
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                <form id="astro_details">
                   <table>
                  <tbody>
                    <tr>
                      <td><strong>Birth Time</strong></td>
                      <td colspan="2">
                          <input type="text" name="registration_birth_time" placeholder="Birth Time" class="form-control" value="<?php echo $data[0]['registration_birth_time']?>">
                       </td>
                      <td><strong>Birthdate</strong></td>
                      <td colspan="2">
                          <input type="date" name="registration_birth_date"  id="registration_birth_date" placeholder="Birthdate" class="form-control" value="<?php echo date("d-m-Y",strtotime($data[0]['registration_birth_date']))?>">
                       </td>
                    </tr>
                    <tr>
                      <td><strong>Birthplace</strong></td>
                      <td colspan="2">
                          <input type="text" name="registration_birth_place" placeholder="Birth Place" class="form-control" value="<?php echo $data[0]['registration_birth_place']?>">
                       </td>
                      <td><strong>Country Of Birth</strong></td>
                      <td colspan="2"><select id="countryofbirth" name="registration_country_birth" class="form-control">
                        <?php
                         if((empty($data)?"":$data[0]['registration_country_birth']) == (empty($data)?"":$data[0]['registration_country_birth'])):
                        ?>
                          <option value="India" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'India')?'selected':''?>>India</option>
                           <option value="United States of America" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'United States of America')?'selected':''?>>United States of America</option>
                          <option value="United Arab Emirates" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'United Arab Emirates')?'selected':''?>>United Arab Emirates</option>                         
						<option value="Malaysia" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Malaysia')?'selected':''?>>Malaysia
						</option>                            
						<option value="United Kingdom" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'United Kingdom')?'selected':''?>>United Kingdom
						</option>       
						<option value="Australia" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Australia')?'selected':''?>>Australia
						</option>  
                          <option value="Saudi Arabia" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Saudi Arabia')?'selected':''?>>Saudi Arabia
						</option> 
                        <option value="Canada" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Canada')?'selected':''?>>Canada
						</option> 
                         <option value="Singapore" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Singapore')?'selected':''?>>Singapore
						</option> 
                        <option value="Kuwait" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Kuwait')?'selected':''?>>Kuwait
						</option>
                          <option value="Afghanistan" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Afghanistan')?'selected':''?>>Afghanistan</option>
                          <option value="Albania" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Albania')?'selected':''?>>Albania</option>
                          <option value="Algeria" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Algeria')?'selected':''?>>Algeria</option>
                         <option value="American Samoa" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'American Samoa')?'selected':''?>>American Samoa</option>
                          <option value="Andorra" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Andorra')?'selected':''?>>Andorra</option>
                          <option value="Angola" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Angola')?'selected':''?>>Angola</option>
                        <option value="Anguilla" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Anguilla')?'selected':''?>>Anguilla</option>
                           <option value="Antarctica" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Antarctica')?'selected':''?>>Antarctica</option>
                          <option value="Antigua and Barbuda" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Antigua and Barbuda')?'selected':''?>>Antigua and Barbuda</option>
                         <option value="Argentina" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Argentina')?'selected':''?>>Argentina</option>
                          <option value="Armenia" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Armenia')?'selected':''?>>Armenia</option>
                           <option value="Aruba" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Aruba')?'selected':''?>>Aruba</option>
                          <option value="Australia" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Australia')?'selected':''?>>Australia</option>
                          <option value="Austria" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Austria')?'selected':''?>>Austria</option>
                           <option value="Azerbaijan" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Azerbaijan')?'selected':''?>>Azerbaijan</option>
                        <option value="Bahamas" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Bahamas')?'selected':''?>>Bahamas</option>
                           <option value="Bahrain" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Bahrain')?'selected':''?>>Bahrain</option>
                          <option value="Bangladesh" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Bangladesh')?'selected':''?>>Bangladesh</option>
                          <option value="Barbados" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Barbados')?'selected':''?>>Barbados</option>
                         <option value="Belarus" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Belarus')?'selected':''?>>Belarus</option>
                          <option value="Belgium" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Belgium')?'selected':''?>>Belgium</option>
                          <option value="Belize" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Belize')?'selected':''?>>Belize</option>
                           <option value="Benin" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Benin')?'selected':''?>>Benin</option>
                           <option value="Bermuda" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Bermuda')?'selected':''?>>Bermuda</option>
                           <option value="Bhutan" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Bhutan')?'selected':''?>>Bhutan</option>
                          <option value="Brazil" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Brazil')?'selected':''?>>Brazil</option>
                          <option value="Svalbard and Jan Mayen Islands" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Svalbard and Jan Mayen Islands')?'selected':''?>>Svalbard and Jan Mayen Islands</option>
                         <option value="Swaziland" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Swaziland')?'selected':''?>>Swaziland</option>
                          <option value="Sweden" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Sweden')?'selected':''?>>Sweden</option>
                            <option value="Uganda" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Uganda')?'selected':''?>>Uganda</option>
                             <option value="Switzerland" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Switzerland')?'selected':''?>>Switzerland</option>
                          <option value="Ukraine" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Ukraine')?'selected':''?>>Ukraine</option>
                            <option value="Uruguay" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Uruguay')?'selected':''?>>Uruguay</option>
                          
                         <option value="Uzbekistan" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Uzbekistan')?'selected':''?>>Uzbekistan</option>
                          <option value="Vanuatu" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Vanuatu')?'selected':''?>>Vanuatu</option>
                          <option value="Vatican City" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Vatican City')?'selected':''?>>Vatican City</option>
                          <option value="Venezuela" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Venezuela')?'selected':''?>>Venezuela</option>
                        <option value="Vietnam" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Vietnam')?'selected':''?>>Vietnam</option>
                          <option value="Virgin Islands" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Virgin Islands')?'selected':''?>>Virgin Islands</option>
                           <option value="Wallis and Futuna Islands" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Wallis and Futuna Islands')?'selected':''?>>Wallis and Futuna Islands</option>
                           <option value="Western Sahara" <?php echo ((empty($data)?"":$data[0]['registration_country_birth']) == 'Western Sahara')?'selected':''?>>Western Sahara</option>
                          <option value="Western Sahara">Western Sahara</option>
                          <option value="Yemen">Yemen</option>
                          <option value="Yugoslavia (Former)">Yugoslavia (Former)</option>
                          <option value="Zaire">Zaire</option>
                          <option value="Zambia">Zambia</option>
                          <option value="Zimbabwe">Zimbabwe</option>
                          <option value="Ashmore and Cartier Islands">Ashmore and Cartier Islands</option>
                          <option value="Solomon Islands">Solomon Islands</option>
                          <option value="Bassas da India">Bassas da India</option>
                          <option value="Congo (Brazzaville)">Congo (Brazzaville)</option>
                          <option value="Coral Sea Islands">Coral Sea Islands</option>
                          <option value="Europa Island">Europa Island</option>
                          <option value="Guernsey">Guernsey</option>
                          <option value="Glorioso Islands">Glorioso Islands</option>
                          <option value="Gaza Strip">Gaza Strip</option>
                          <option value="Isle of Man">Isle of Man</option>
                          <option value="Clipperton Island">Clipperton Island</option>
                          <option value="Cote DIvoire">Cote DIvoire</option>
                          <option value="Jersey">Jersey</option>
                          <option value="Jan Mayen">Jan Mayen</option>
                          <option value="Juan de Nova Island">Juan de Nova Island</option>
                          <option value="Macedonia">Macedonia</option>
                          <option value="Bodies of water">Bodies of water</option>
                          <option value="Paracel Islands">Paracel Islands</option>
                          <option value="Spratly Islands">Spratly Islands</option>
                          <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                          <option value="Saint Helena">Saint Helena</option>
                          <option value="Svalbard">Svalbard</option>
                          <option value="Tromelin Island">Tromelin Island</option>
                          <option value="Undersea features">Undersea features</option>
                          <option value="Saint Vincent &amp; the Grenadines">Saint Vincent &amp; the Grenadines</option>
                          <option value="West Bank">West Bank</option>
                          <option value="Wallis and Futuna">Wallis and Futuna</option>
                          <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                      <?php endif; ?>
                        </select></td>
                    </tr>
                    <tr>
                      <td><strong>Rashi</strong></td>
                      <td colspan="2"><select name="registration_rashi" id="rashi" class="form-control"3>
                          <?php
                         if((empty($data)?"":$data[0]['registration_rashi']) == (empty($data)?"":$data[0]['registration_rashi'])):
                        ?>
                     <option value="Dhanu" <?php echo ((empty($data)?"":$data[0]['registration_rashi']) == 'Dhanu')?'selected':''?>>Dhanu (Sagittarius)</option>
                           <option value="Kanya" <?php echo ((empty($data)?"":$data[0]['registration_rashi']) == 'Kanya')?'selected':''?>>Kanya (Virgo)</option>
                         <option value="Kark" <?php echo ((empty($data)?"":$data[0]['registration_rashi']) == 'Kark')?'selected':''?>>Kark (Cancer)
                         </option>
                            <option value="Kumbh" <?php echo ((empty($data)?"":$data[0]['registration_rashi']) == 'Kumbh')?'selected':''?>>Kumbh (Aquarius)</option>
                           <option value="Makar" <?php echo ((empty($data)?"":$data[0]['registration_rashi']) == 'Makar')?'selected':''?>>Makar (Capricorn)</option>
                           <option value="Meen" <?php echo ((empty($data)?"":$data[0]['registration_rashi']) == 'Meen')?'selected':''?>>Meen (Pisces)</option>
                           <option value="Mesh" <?php echo ((empty($data)?"":$data[0]['registration_rashi']) == 'Mesh')?'selected':''?>>Mesh (Aries)</option>
                         <option value="Mithun" <?php echo ((empty($data)?"":$data[0]['registration_rashi']) == 'Mithun')?'selected':''?>>Mithun (Gemini)</option>
                          <option value="Simha" <?php echo ((empty($data)?"":$data[0]['registration_rashi']) == 'Simha')?'selected':''?>>Simha(Leo)</option>
                         <option value="Tula" <?php echo ((empty($data)?"":$data[0]['registration_rashi']) == 'Tula')?'selected':''?>>Tula (Libra)</option>
                          <option value="Vrishabh" <?php echo ((empty($data)?"":$data[0]['registration_rashi']) == 'Vrishabh')?'selected':''?>>Vrishabh (Taurus)
                          </option>
                         <option value="Vrishchik" <?php echo ((empty($data)?"":$data[0]['registration_rashi']) == 'Vrishchik')?'selected':''?>>Vrishchik (Scorpio)
                         </option>
                         
                      <?php endif; ?>
                        </select></td>
                      <td><strong>Nakshatra</strong></td>
                      <td colspan="2"><select name="registration_nakshatra" id="nakshatra" class="form-control">
                         <?php
                         if((empty($data)?"":$data[0]['registration_nakshatra']) == (empty($data)?"":$data[0]['registration_nakshatra'])):
                        ?>
                    <option value="Anuradha" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Anuradha')?'selected':''?>>Anuradha</option>
                          <option value="Ardra" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Ardra')?'selected':''?>>Ardra</option>
                      <option value="Ashlesha" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Ashlesha')?'selected':''?>>Ashlesha</option>
                        <option value="Ashwini" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Ashwini')?'selected':''?>>Ashwini</option>
                          <option value="Bharani" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Bharani')?'selected':''?>>Bharani</option>
                        <option value="Chitra" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Chitra')?'selected':''?>>Chitra</option>
                           <option value="Dhanista" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Dhanista')?'selected':''?>>Dhanista</option>
                          <option value="Hastha" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Hastha')?'selected':''?>>Hastha</option>
                        <option value="Jyesta" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Jyesta')?'selected':''?>>Jyesta</option>
                      <option value="Krithika" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Krithika')?'selected':''?>>Krithika</option>
                            <option value="Makha" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Makha')?'selected':''?>>Makha</option>
                          <option value="Moolam" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Moolam')?'selected':''?>>Moolam</option>
                         <option value="Mrigasira" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Mrigasira')?'selected':''?>>Mrigasira</option>
                         <option value="Poorvabadrapada" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Poorvabadrapada')?'selected':''?>>Poorvabadrapada</option>
                         <option value="Poorvapalguni" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Poorvapalguni')?'selected':''?>>Poorvapalguni</option>
                         <option value="Poorvashada" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Poorvashada')?'selected':''?>>Poorvashada</option>
                          <option value="Punarvasu" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Punarvasu')?'selected':''?>>Punarvasu</option>
                         <option value="Pushya" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Pushya')?'selected':''?>>Pushya</option>
                         <option value="Revathi" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Revathi')?'selected':''?>>Revathi</option>
                            <option value="Rohini" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Rohini')?'selected':''?>>Rohini</option>
                         <option value="Shatataraka" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Shatataraka')?'selected':''?>>Shatataraka</option>
                          <option value="Shravan" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Shravan')?'selected':''?>>Shravan</option>
                         <option value="Swati" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Swati')?'selected':''?>>Swati</option>
                          <option value="Uttarabadrapada" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Uttarabadrapada')?'selected':''?>>Uttarabadrapada</option>
                         <option value="Uttarapalguni" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Uttarapalguni')?'selected':''?>>Uttarapalguni</option>
                         <option value="Uttarashada" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Uttarashada')?'selected':''?>>Uttarashada</option>
                           <option value="Vishaka" <?php echo ((empty($data)?"":$data[0]['registration_nakshatra']) == 'Vishaka')?'selected':''?>>Vishaka</option>
                          
                      <?php endif; ?>
                        </select></td>
                    </tr>
                    <tr>
                      <td><strong>Charan</strong></td>
                      <td colspan="2">
                          <input type="text" name="registration_charan" placeholder="Charan" class="form-control" value="<?php echo $data[0]["registration_charan"]; ?>">
                       </td>
                      <td><strong>Gana</strong></td>
                      <td colspan="2"><select id="gana" name="registration_gana" class="form-control">
                           <?php
                         if((empty($data)?"":$data[0]['registration_gana']) == (empty($data)?"":$data[0]['registration_gana'])):
                        ?>
                    <option value="Deva" <?php echo ((empty($data)?"":$data[0]['registration_gana']) =='Deva')?'selected':''?>>Deva</option>
                          <option value="Manushya" <?php echo ((empty($data)?"":$data[0]['registration_gana']) =='Manushya')?'selected':''?>>Manushya</option>
                          <option value="Rakshyasa" <?php echo ((empty($data)?"":$data[0]['registration_gana']) =='Rakshyasa')?'selected':''?>>Rakshyasa</option>
                         
                      <?php endif; ?>
                        </select></td>
                    </tr>
                    <tr>
                      <td><strong>Nadi</strong></td>
                      <td colspan="2"><select id="nadi" name="registration_nadi" class="form-control">
                           <?php
                         if((empty($data)?"":$data[0]['registration_nadi']) == (empty($data)?"":$data[0]['registration_nadi'])):
                        ?>
                    <option value="Adya" <?php echo ((empty($data)?"":$data[0]['registration_nadi']) =='Adya')?'selected':''?>>Adya</option>
                          <option value="Madhya" <?php echo ((empty($data)?"":$data[0]['registration_nadi']) =='Madhya')?'selected':''?>>Madhya</option>
                           <option value="Antya" <?php echo ((empty($data)?"":$data[0]['registration_nadi']) =='Antya')?'selected':''?>>Antya</option>
                          <?php endif; ?>
                        </select></td>
                      <td><strong>Are You Mangalik?</strong></td>
                      <td colspan="2"><select id="manglik" name="registration_manglik" class="form-control">
                           <?php
                         if((empty($data)?"":$data[0]['registration_manglik']) == (empty($data)?"":$data[0]['registration_manglik'])):
                        ?>
                          <option value="Yes" <?php echo ((empty($data)?"":$data[0]['registration_manglik']) =='Yes')?'selected':''?>>Yes</option>
                           <option value="No" <?php echo ((empty($data)?"":$data[0]['registration_manglik']) =='No')?'selected':''?>>No</option>
                       <?php endif; ?>
                        </select></td>
                    </tr>
                    <tr>
                      <td><strong>Horoscope match required?</strong></td>
                      <td colspan="2"><select id="nadi" name="registration_horoscope" class="form-control">
                           <?php
                         if((empty($data)?"":$data[0]['registration_horoscope']) == (empty($data)?"":$data[0]['registration_horoscope'])):
                        ?>
                          <option value="Yes" <?php echo ((empty($data)?"":$data[0]['registration_horoscope']) =='Yes')?'selected':''?>>Yes</option>
                           <option value="No" <?php echo ((empty($data)?"":$data[0]['registration_horoscope']) =='No')?'selected':''?>>No</option>
                       <?php endif; ?>
                        </select></td>
                      <td colspan="3"><button class="btn btn-danger pull-right" type="button" onclick="astro_details1();">Save</button></td>
                    </tr>
                  </tbody>
                </table>
                </form>
              </dd>
              
              <dt>
                <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                  Contact Details
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
              <form id="contact_details">
               <table>
                  <tbody>
                    <tr>
                      <td><strong>Contact Address</strong></td>
                      <td colspan="4">
                          <textarea type="text" name="registration_contact_address" placeholder="Contact Address" class="form-control" rows="2" ><?php echo $data[0]["registration_contact_address"]; ?></textarea>
                       </td>
                    </tr>
                    <tr>
                      <td><strong>City</strong></td>
                      <td colspan="2"><select id="city" name="registration_city" class="form-control">
                          <?php
                         if((empty($data)?"":$data[0]['registration_city']) == (empty($data)?"":$data[0]['registration_city'])):
                        ?>
                    <option value="Mumbai" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Mumbai')?'selected':''?>>Mumbai</option>
                         <option value="Pune" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Pune')?'selected':''?>>Pune</option>
                         <option value="Thane" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Thane')?'selected':''?>>Thane</option>
                         <option value="Navi Mumbai" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Navi Mumbai')?'selected':''?>>Navi Mumbai</option>
                          <option value="Kolhapur" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Kolhapur')?'selected':''?>>Kolhapur</option>
                          <option value="Satara" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Satara')?'selected':''?>>Satara</option>
                           <option value="Nashik" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Nashik')?'selected':''?>>Nashik</option>
                             <option value="Aurangabad" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Aurangabad')?'selected':''?>>Aurangabad</option>
                         <option value="Bangalore" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Bangalore')?'selected':''?>>Bangalore</option>
                           <option value="Hyderabad" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Hyderabad')?'selected':''?>>Hyderabad</option>
                          <option value="Delhi" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Delhi')?'selected':''?>>Delhi</option>
                          <option value="Chennai" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Chennai')?'selected':''?>>Chennai</option>
                          <option value="Sindhudurg" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Sindhudurg')?'selected':''?>>Sindhudurg</option>
                          <option value="Ahmednagar" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Ahmednagar')?'selected':''?>>Ahmednagar</option>
                         <option value="Baramati" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Baramati')?'selected':''?>>Baramati</option>
                        <option value="Buldhana" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Buldhana')?'selected':''?>>Buldhana</option>
                          <option value="Bhusawal" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Bhusawal')?'selected':''?>>Bhusawal</option>
                         <option value="Latur" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Latur')?'selected':''?>>Latur</option>
                          <option value="Usmanabad" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Usmanabad')?'selected':''?>>Usmanabad</option>
                         <option value="Dahanu" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Dahanu')?'selected':''?>>Dahanu</option>
                          <option value="Ratnagiri" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Ratnagiri')?'selected':''?>>Ratnagiri</option>
                           <option value="Solapur" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Solapur')?'selected':''?>>Solapur</option>
                           <option value="Nagpur" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Nagpur')?'selected':''?>>Nagpur</option>
                           <option value="Jalgaon" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Jalgaon')?'selected':''?>>Jalgaon</option>
                           <option value="Panvel" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Panvel')?'selected':''?>>Panvel</option>
                          <option value="Goa" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Goa')?'selected':''?>>Goa</option>
                         <option value="Alibaugh" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Alibaugh')?'selected':''?>>Alibaugh</option>
                       <option value="Dhule" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Dhule')?'selected':''?>>Dhule</option>
                          <option value="Nandurbar" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Nandurbar')?'selected':''?>>Nandurbar</option>
                         <option value="Satana" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Satana')?'selected':''?>>Satana</option>
                          <option value="Shirpur" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Shirpur')?'selected':''?>>Shirpur</option>
                       <option value="Pachora" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Pachora')?'selected':''?>>Pachora</option>
                           <option value="Jalna" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Jalna')?'selected':''?>>Jalna</option>
                          <option value="Akola" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Akola')?'selected':''?>>Akola</option>
                        <option value="Vadodara" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Vadodara')?'selected':''?>>Vadodara</option>
                          <option value="Bangalore" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Bangalore')?'selected':''?>>Bangalore</option>
                           <option value="Surat" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Surat')?'selected':''?>>Surat</option>
                        <option value="Kanpur" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Kanpur')?'selected':''?>>Kanpur</option>
                         <option value="Jaipur" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Jaipur')?'selected':''?>>Jaipur</option>
                           <option value="Lucknow" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Lucknow')?'selected':''?>>Lucknow</option>
                          <option value="Patna" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Patna')?'selected':''?>>Patna</option>
                        <option value="Indore" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Indore')?'selected':''?>>Indore</option>
                         <option value="Bhopal" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Bhopal')?'selected':''?>>Bhopal</option>
                         <option value="Ludhiana" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Ludhiana')?'selected':''?>>Ludhiana</option>
                          <option value="Agra" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Agra')?'selected':''?>>Agra</option>
                        <option value="Sangali" <?php echo ((empty($data)?"":$data[0]['registration_city']) =='Sangali')?'selected':''?>>Sangali</option>
                         
                      <?php endif; ?>
                        </select></td>
                      <td><strong>State</strong></td>
                      <td colspan="2"><select id="state" name="registration_state" class="form-control">
                           <?php
                         if((empty($data)?"":$data[0]['registration_state']) == (empty($data)?"":$data[0]['registration_state'])):
                        ?>
                          <option value="Andaman &amp; Nicobar">Andaman &amp; Nicobar</option>
                          <option value="Andhra Pradesh">Andhra Pradesh</option>
                          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                          <option value="Assam">Assam</option>
                          <option value="Bihar">Bihar</option>
                          <option value="Chandigarh">Chandigarh</option>
                          <option value="Chhattisgarh">Chhattisgarh</option>
                          <option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
                          <option value="Daman &amp; Diu">Daman &amp; Diu</option>
                          <option value="Delhi">Delhi</option>
                          <option value="Goa">Goa</option>
                          <option value="Gujarat">Gujarat</option>
                          <option value="Haryana">Haryana</option>
                          <option value="Himachal Pradesh">Himachal Pradesh</option>
                          <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
                          <option value="Jharkand">Jharkand</option>
                          <option value="Karnataka">Karnataka</option>
                          <option value="Kerala">Kerala</option>
                          <option value="Lakshadeep">Lakshadeep</option>
                          <option value="Madhya Pradesh">Madhya Pradesh</option>
                         <option value="Maharashtra" <?php echo ((empty($data)?"":$data[0]['registration_state']) =='Maharashtra')?'selected':''?>>Maharashtra</option>
                          <option value="Manipur">Manipur</option>
                          <option value="Meghalaya">Meghalaya</option>
                          <option value="Mizoram">Mizoram</option>
                          <option value="Nagaland">Nagaland</option>
                          <option value="Orissa">Orissa</option>
                          <option value="Pondicherry">Pondicherry</option>
                          <option value="Punjab">Punjab</option>
                          <option value="Rajasthan">Rajasthan</option>
                          <option value="Sikkim">Sikkim</option>
                          <option value="Tamil Nadu">Tamil Nadu</option>
                          <option value="Tripura">Tripura</option>
                          <option value="Uttar Pradesh">Uttar Pradesh</option>
                          <option value="Uttaranchal">Uttaranchal</option>
                          <option value="West Bengal">West Bengal</option>
                      <?php endif; ?>
                        </select></td>
                    </tr>
                    <tr>
                      <td><strong>Country</strong></td>
                      <td colspan="2"><select id="TxtCountry" name="registration_country" class="form-control">
                          <?php if(!empty($data[0]['registration_country'])): ?>
                          <option value="<?php echo $data[0]['registration_country']?>"><?php echo $data[0]['registration_country']?></option>
                      <?php endif; ?>
                          <option value="India">India</option>
                          <option value="United States of America">United States of America</option>
                          <option value="United Arab Emirates">United Arab Emirates</option>
                          <option value="Malaysia">Malaysia</option>
                          <option value="United Kingdom">United Kingdom</option>
                          <option value="Australia">Australia</option>
                          <option value="Saudi Arabia">Saudi Arabia</option>
                          <option value="Canada">Canada</option>
                          <option value="Singapore">Singapore</option>
                          <option value="Kuwait">Kuwait</option>
                          <option value="Afghanistan">Afghanistan</option>
                          <option value="Albania">Albania</option>
                          <option value="Algeria">Algeria</option>
                          <option value="American Samoa">American Samoa</option>
                          <option value="Andorra">Andorra</option>
                          <option value="Angola">Angola</option>
                          <option value="Anguilla">Anguilla</option>
                          <option value="Antarctica">Antarctica</option>
                          <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                          <option value="Argentina">Argentina</option>
                          <option value="Armenia">Armenia</option>
                          <option value="Aruba">Aruba</option>
                          <option value="Australia">Australia</option>
                          <option value="Austria">Austria</option>
                          <option value="Azerbaijan">Azerbaijan</option>
                          <option value="Bahamas">Bahamas</option>
                          <option value="Bahrain">Bahrain</option>
                          <option value="Bangladesh">Bangladesh</option>
                          <option value="Barbados">Barbados</option>
                          <option value="Belarus">Belarus</option>
                          <option value="Belgium">Belgium</option>
                          <option value="Belize">Belize</option>
                          <option value="Benin">Benin</option>
                          <option value="Bermuda">Bermuda</option>
                          <option value="Bhutan">Bhutan</option>
                          <option value="Brazil">Brazil</option>
                          <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                          <option value="Swaziland">Swaziland</option>
                          <option value="Sweden">Sweden</option>
                          <option value="Switzerland">Switzerland</option>
                          <option value="Uganda">Uganda</option>
                          <option value="Ukraine">Ukraine</option>
                          <option value="United Arab Emirates">United Arab Emirates</option>
                          <option value="United Kingdom">United Kingdom</option>
                          <option value="United States of America">United States of America</option>
                          <option value="Uruguay">Uruguay</option>
                          <option value="Uzbekistan">Uzbekistan</option>
                          <option value="Vanuatu">Vanuatu</option>
                          <option value="Vatican City">Vatican City</option>
                          <option value="Venezuela">Venezuela</option>
                          <option value="Vietnam">Vietnam</option>
                          <option value="Virgin Islands">Virgin Islands</option>
                          <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                          <option value="Western Sahara">Western Sahara</option>
                          <option value="Yemen">Yemen</option>
                          <option value="Yugoslavia (Former)">Yugoslavia (Former)</option>
                          <option value="Zaire">Zaire</option>
                          <option value="Zambia">Zambia</option>
                          <option value="Zimbabwe">Zimbabwe</option>
                          <option value="Ashmore and Cartier Islands">Ashmore and Cartier Islands</option>
                          <option value="Solomon Islands">Solomon Islands</option>
                          <option value="Bassas da India">Bassas da India</option>
                          <option value="Congo (Brazzaville)">Congo (Brazzaville)</option>
                          <option value="Coral Sea Islands">Coral Sea Islands</option>
                          <option value="Europa Island">Europa Island</option>
                          <option value="Guernsey">Guernsey</option>
                          <option value="Glorioso Islands">Glorioso Islands</option>
                          <option value="Gaza Strip">Gaza Strip</option>
                          <option value="Isle of Man">Isle of Man</option>
                          <option value="Clipperton Island">Clipperton Island</option>
                          <option value="Cote DIvoire">Cote DIvoire</option>
                          <option value="Jersey">Jersey</option>
                          <option value="Jan Mayen">Jan Mayen</option>
                          <option value="Juan de Nova Island">Juan de Nova Island</option>
                          <option value="Macedonia">Macedonia</option>
                          <option value="Bodies of water">Bodies of water</option>
                          <option value="Paracel Islands">Paracel Islands</option>
                          <option value="Spratly Islands">Spratly Islands</option>
                          <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                          <option value="Saint Helena">Saint Helena</option>
                          <option value="Svalbard">Svalbard</option>
                          <option value="Tromelin Island">Tromelin Island</option>
                          <option value="Undersea features">Undersea features</option>
                          <option value="Saint Vincent &amp; the Grenadines">Saint Vincent &amp; the Grenadines</option>
                          <option value="West Bank">West Bank</option>
                          <option value="Wallis and Futuna">Wallis and Futuna</option>
                          <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                        </select></td>
                      <td><strong>Citizenship</strong></td>
                      <td colspan="2"><select id="TxtCitizenship" name="registration_citizenship" class="form-control">
                          <?php if(!empty($data[0]['registration_citizenship'])): ?>
                          <option value="<?php echo $data[0]['registration_citizenship']?>"><?php echo $data[0]['registration_citizenship']?></option>
                      <?php endif; ?>
                          <option value="India">India</option>
                          <option value="United States of America">United States of America</option>
                          <option value="United Arab Emirates">United Arab Emirates</option>
                          <option value="Malaysia">Malaysia</option>
                          <option value="United Kingdom">United Kingdom</option>
                          <option value="Australia">Australia</option>
                          <option value="Saudi Arabia">Saudi Arabia</option>
                          <option value="Canada">Canada</option>
                          <option value="Singapore">Singapore</option>
                          <option value="Kuwait">Kuwait</option>
                          <option value="Afghanistan">Afghanistan</option>
                          <option value="Albania">Albania</option>
                          <option value="Algeria">Algeria</option>
                          <option value="American Samoa">American Samoa</option>
                          <option value="Andorra">Andorra</option>
                          <option value="Angola">Angola</option>
                          <option value="Anguilla">Anguilla</option>
                          <option value="Antarctica">Antarctica</option>
                          <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                          <option value="Argentina">Argentina</option>
                          <option value="Armenia">Armenia</option>
                          <option value="Aruba">Aruba</option>
                          <option value="Australia">Australia</option>
                          <option value="Austria">Austria</option>
                          <option value="Azerbaijan">Azerbaijan</option>
                          <option value="Bahamas">Bahamas</option>
                          <option value="Bahrain">Bahrain</option>
                          <option value="Bangladesh">Bangladesh</option>
                          <option value="Barbados">Barbados</option>
                          <option value="Belarus">Belarus</option>
                          <option value="Belgium">Belgium</option>
                          <option value="Belize">Belize</option>
                          <option value="Benin">Benin</option>

                          <option value="Bermuda">Bermuda</option>
                          <option value="Bhutan">Bhutan</option>
                          <option value="Brazil">Brazil</option>
                          <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                          <option value="Swaziland">Swaziland</option>
                          <option value="Sweden">Sweden</option>
                          <option value="Switzerland">Switzerland</option>
                          <option value="Uganda">Uganda</option>
                          <option value="Ukraine">Ukraine</option>
                          <option value="United Arab Emirates">United Arab Emirates</option>
                          <option value="United Kingdom">United Kingdom</option>
                          <option value="United States of America">United States of America</option>
                          <option value="Uruguay">Uruguay</option>
                          <option value="Uzbekistan">Uzbekistan</option>
                          <option value="Vanuatu">Vanuatu</option>
                          <option value="Vatican City">Vatican City</option>
                          <option value="Venezuela">Venezuela</option>
                          <option value="Vietnam">Vietnam</option>
                          <option value="Virgin Islands">Virgin Islands</option>
                          <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                          <option value="Western Sahara">Western Sahara</option>
                          <option value="Yemen">Yemen</option>
                          <option value="Yugoslavia (Former)">Yugoslavia (Former)</option>
                          <option value="Zaire">Zaire</option>
                          <option value="Zambia">Zambia</option>
                          <option value="Zimbabwe">Zimbabwe</option>
                          <option value="Ashmore and Cartier Islands">Ashmore and Cartier Islands</option>
                          <option value="Solomon Islands">Solomon Islands</option>
                          <option value="Bassas da India">Bassas da India</option>
                          <option value="Congo (Brazzaville)">Congo (Brazzaville)</option>
                          <option value="Coral Sea Islands">Coral Sea Islands</option>
                          <option value="Europa Island">Europa Island</option>
                          <option value="Guernsey">Guernsey</option>
                          <option value="Glorioso Islands">Glorioso Islands</option>
                          <option value="Gaza Strip">Gaza Strip</option>
                          <option value="Isle of Man">Isle of Man</option>
                          <option value="Clipperton Island">Clipperton Island</option>
                          <option value="Cote DIvoire">Cote DIvoire</option>
                          <option value="Jersey">Jersey</option>
                          <option value="Jan Mayen">Jan Mayen</option>
                          <option value="Juan de Nova Island">Juan de Nova Island</option>
                          <option value="Macedonia">Macedonia</option>
                          <option value="Bodies of water">Bodies of water</option>
                          <option value="Paracel Islands">Paracel Islands</option>
                          <option value="Spratly Islands">Spratly Islands</option>
                          <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                          <option value="Saint Helena">Saint Helena</option>
                          <option value="Svalbard">Svalbard</option>
                          <option value="Tromelin Island">Tromelin Island</option>
                          <option value="Undersea features">Undersea features</option>
                          <option value="Saint Vincent &amp; the Grenadines">Saint Vincent &amp; the Grenadines</option>
                          <option value="West Bank">West Bank</option>
                          <option value="Wallis and Futuna">Wallis and Futuna</option>
                          <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                        </select></td>
                    </tr>
                    <tr>
                      <td><strong>STD</strong></td>
                      <td colspan="2">
                          <input type="text" name="registration_std" placeholder="STD" class="form-control" value="<?php echo $data[0]["registration_std"];?>">
                        </td>
                      <td><strong>Telephone No.</strong></td>
                      <td colspan="2">
                          <input type="text" name="registration_telephone" placeholder="Telephone No." class="form-control" value="<?php  echo $data[0]["registration_telephone"];?>">
                      </td>
                    </tr>
                    <tr>
                      <td><strong>Mobile No.</strong></td>
                      <td colspan="2">
                          <input type="text" name="registration_mobile1" placeholder="Alternate Mobile No." class="form-control" value="<?php echo $data[0]["registration_mobile1"]; ?>">
                       </td>
                       <td><strong>Alternate Mobile No.</strong></td>
                      <td colspan="2">
                          <input type="text" name="registration_mobile2" placeholder="Alternate Mobile No." class="form-control" value="<?php echo $data[0]["registration_mobile2"]; ?>">
                       </td>
                    </tr>
                    <tr>
                      <td><strong></strong></td>
                      <td></td>
                      <td colspan="3"><button class="btn btn-danger pull-right" type="button" onclick="contact_details1();">Save</button></td>
                    </tr>
                  </tbody>
                </table>
                </form>
              </dd>
              <dt>
                <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                  Career Details
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
              <form id="career_details">
               <table>
                  <tbody>
                    <tr>
                      <td><strong>Highest Qualification</strong></td>
                      <td colspan="2"><select name="registration_highest_qualification" id="TxtHighestQualification" class="form-control">
                           <?php if(!empty($data[0]['registration_highest_qualification'])): ?>
                          <option value="<?php echo $data[0]['registration_highest_qualification']?>"><?php echo $data[0]['registration_highest_qualification']?></option>
                      <?php endif; ?>
                          <optgroup label="    -- Bachelors - Engineering / Computers --">
                          <option value="BE">BE</option>
                          <option value="B Tech">B Tech</option>
                          <option value="BCA">BCA</option>
                          <option value="Aeronautical Engineering">Aeronautical Engineering</option>
                          <option value="B Arch">B Arch</option>
                          <option value="B Plan">B Plan</option>
                          </optgroup>
                          <optgroup class="a" label="    -- Masters - Engineering / Computers --">
                          <option value="MCA">MCA</option>
                          <option value="PGDCA">PGDCA</option>
                          <option value="ME">ME</option>
                          <option value="M Tech">M Tech</option>
                          <option value="MS(Engg.)">MS(Engg.)</option>
                          <option value="M Arch">M Arch</option>
                          <option value="M.C.M">M.C.M</option>
                          </optgroup>
                          <optgroup class="a" label="    -- Bachelors - Arts / Science / Commerce / B Phil /... --">
                          <option value="B Phil">B Phil</option>
                          <option value="BCom">BCom</option>
                          <option value="BMS">BMS</option>
                          <option value="BSc">BSc</option>
                          <option value="BA">BA</option>
                          <option value="BHM">BHM</option>
                          <option value="B Ed">B Ed</option>
                          <option value="Aviation Degree">Aviation Degree</option>
                          <option value="BFA">BFA</option>
                          <option value="BMM">BMM</option>
                          </optgroup>
                          <optgroup class="a" label="    -- Masters - Arts / Science / Commerce / M Phil /... --">
                          <option value="M Phil">M Phil</option>
                          <option value="M Com">M Com</option>
                          <option value="M Sc">M Sc</option>
                          <option value="MA">MA</option>
                          <option value="MHM">MHM</option>
                          <option value="M Ed">M Ed</option>
                          </optgroup>
                          <optgroup class="a" label="    -- Management - BBA / MBA /... --">
                          <option value="MMS">MMS</option>
                          <option value="MBA">MBA</option>
                          <option value="PGDM">PGDM</option>
                          <option value="BBA">BBA</option>
                          </optgroup>
                          <optgroup class="a" label="    -- Medicine - General / Dental / Surgeon /... --">
                          <option value="MD">MD</option>
                          <option value="MS(Medical)">MS(Medical)</option>
                          <option value="MBBS">MBBS</option>
                          <option value="MDS">MDS</option>
                          <option value="MVSc">MVSc </option>
                          <option value="MPT">MPT</option>
                          <option value="BDS">BDS</option>
                          <option value="BVSc">BVSc</option>
                          <option value="BPT">BPT</option>
                          <option value="BHMS">BHMS</option>
                          <option value="BAMS">BAMS</option>
                          <option value="M Pharm">M Pharm</option>
                          <option value="B Pharm">B Pharm</option>
                          </optgroup>
                          <optgroup class="a" label="    -- Legal - BL / ML / LLB / LLM /... --">
                          <option value="ML">ML</option>
                          <option value="LLM">LLM</option>
                          <option value="BGL">BGL</option>
                          <option value="BL">BL</option>
                          <option value="LLB">LLB</option>
                          </optgroup>
                          <optgroup class="a" label="    -- Finance - ICWAI / CA / CS /... --">
                          <option value="BBI">BBI</option>
                          <option value="CA">CA</option>
                          <option value="ICWA">ICWA</option>
                          <option value="CS">CS</option>
                          </optgroup>
                          <optgroup class="a" label="    -- Service - IAS / IPS / IRS / IES / IFS /... --">
                          <option value="IAS/IPS/IRS/IES/IFS">IAS/IPS/IRS/IES/IFS</option>
                          </optgroup>
                          <optgroup class="a" label="    -- PhD --">
                          <option value="Ph D">Ph D</option>
                          </optgroup>
                          <optgroup class="a" label="    -- Diploma --">
                          <option value="Trade School">Trade School</option>
                          <option value="Diploma">Diploma</option>
                          <option value="D Ed">D Ed</option>
                          </optgroup>
                          <optgroup class="a" label="    -- Higher Secondary / Secondary --">
                          <option value="Higher Secondary School/High School">Higher Secondary School/High School</option>
                          <option value="Less than 10">Less than 10</option>
                          <option value="Less than 12">Less than 12</option>
                          </optgroup>
                          <optgroup class="a" label="    -- Higher Qualification  --">
                          <option value="Undergraduation">Undergraduation</option>
                          <option value="MLT">MLT</option>
                          </optgroup>
                        </select></td>
                      <td><strong>Education Level</strong></td>
                      <td colspan="2"><select name="registration_education_level" id="TxtEducationLevel" class="form-control">
                          <?php if(!empty($data[0]['registration_education_level'])): ?>
                          <option value="<?php echo $data[0]['registration_education_level']?>"><?php echo $data[0]['registration_education_level']?></option>
                      <?php endif; ?>
                          <option value="Bachelors">Bachelors</option>
                          <option value="Masters">Masters</option>
                          <option value="Doctorate">Doctorate</option>
                          <option value="Diploma">Diploma</option>
                          <option value="Undergraduate">Undergraduate</option>
                          <option value="Associate Degree">Associate Degree</option>
                          <option value="Hounors Degree">Hounors Degree</option>
                          <option value="Trade School">Trade School</option>
                          <option value="High School">High School</option>
                          <option value="Less than 10">Less than 10</option>
                          <option value="Less than 12">Less than 12</option>
                        </select></td>
                    </tr>
                    <tr>
                      <td><strong>Education Field</strong></td>
                      <td colspan="2"><select name="registration_education_field" id="TxtEducationField" class="form-control">
                         <?php if(!empty($data[0]['registration_education_field'])): ?>
                          <option value="<?php echo $data[0]['registration_education_field']?>"><?php echo $data[0]['registration_education_field']?></option>
                      <?php endif; ?>
                          <option value="Advertising">Advertising</option>
                          <option value="Marketing">Marketing</option>
                          <option value="Administrative services">Administrative services</option>
                          <option value="Architecture">Architecture</option>
                          <option value="Armed Forces">Armed Forces</option>
                          <option value="Arts">Arts</option>
                          <option value="Banking &amp; Insurance">Banking &amp; Insurance</option>
                          <option value="Commerce">Commerce</option>
                          <option value="Computers/IT">Computers/ IT</option>
                          <option value="Education">Education</option>
                          <option value="Engineering/Technology">Engineering / Technology</option>
                          <option value="Fashion">Fashion</option>
                          <option value="Finance">Finance</option>
                          <option value="Fine Arts">Fine Arts</option>
                          <option value="Home Science">Home Science</option>
                          <option value="Journalism/Media">Journalism/Media</option>
                          <option value="Law">Law</option>
                          <option value="Management">Management</option>
                          <option value="Medicine">Medicine</option>
                          <option value="Nursing/Health Sciences">Nursing/ Health Sciences</option>
                          <option value="Pharmacy">Pharmacy</option>
                          <option value="Office administration">Office administration</option>
                          <option value="Science">Science</option>
                          <option value="Shipping">Shipping</option>
                          <option value="Travel and Tourism">Travel and Tourism</option>
                        </select></td>
                      <td><strong>University/Instituted</strong></td>
                      <td colspan="2">
                         <input type="text" name="registration_education_detail" placeholder="Education in Detail" class="form-control" value="<?php  echo $data[0]["registration_education_detail"];?>">
                       </td>
                    </tr>
                    <tr>
                      <td><strong>Occupation</strong></td>
                      <td colspan="2"><select  name="registration_occupation" id="registration_occupation" class="form-control">
                         <?php if(!empty($data[0]['registration_occupation'])): ?>
                          <option value="<?php echo $data[0]['registration_occupation']?>"><?php echo $data[0]['registration_occupation']?></option>
                      <?php endif; ?>
                          <optgroup label="     -- ADMIN --" class="a">
                          <option value="Manager">&nbsp; Manager</option>
                          <option value="Supervisor">&nbsp; Supervisor</option>
                          <option value="Officer">&nbsp; Officer</option>
                          <option value="Administrative Professional">&nbsp; Administrative Professional</option>
                          <option value="Executive">&nbsp; Executive</option>
                          <option value="Clerk">&nbsp; Clerk</option>
                          </optgroup>
                          <optgroup label="     -- AGRICULTURE --" class="a">
                          <option value="Agriculture &amp; Farming Professional">&nbsp; Agriculture &amp; Farming Professional</option>
                          </optgroup>
                          <optgroup label="     -- AIRLINE --" class="a">
                          <option value="Pilot">&nbsp; Pilot</option>
                          <option value="Air Hostess">&nbsp; Air Hostess</option>
                          <option value="Airline Professional">&nbsp; Airline Professional</option>
                          </optgroup>
                          <optgroup label="     -- ARCHITECT &amp; DESIGN --" class="a">
                          <option value="Architect">&nbsp; Architect</option>
                          <option value="Interior Designer">&nbsp; Interior Designer</option>
                          </optgroup>
                          <optgroup label="     -- BANKING &amp; FINANCE --" class="a">
                          <option value="Chartered Accountant">&nbsp; Chartered Accountant</option>
                          <option value="Company Secretary">&nbsp; Company Secretary</option>
                          <option value="Accounts/Finance Professional">&nbsp; Accounts/Finance Professional</option>
                          <option value="Banking Service Professional">&nbsp; Banking Service Professional</option>
                          <option value="Auditor">&nbsp; Auditor</option>
                          </optgroup>
                          <optgroup label="     -- BEAUTY &amp; FASHION --" class="a">
                          <option value="Fashion Designer">&nbsp; Fashion Designer</option>
                          <option value="Beautician">&nbsp; Beautician</option>
                          </optgroup>
                          <optgroup label="     -- CIVIL SERVICES --" class="a">
                          <option value="Civil Services">&nbsp; Civil Services (IAS/IPS/IRS/IES/IFS)</option>
                          </optgroup>
                          <optgroup label="     -- DEFENCE --" class="a">
                          <option value="Army">&nbsp; Army</option>
                          <option value="Navy">&nbsp; Navy</option>
                          <option value="Airforce">&nbsp; Airforce</option>
                          </optgroup>
                          <optgroup label="     -- EDUCATION --" class="a">
                          <option value="Professor / Lecturer">&nbsp; Professor / Lecturer</option>
                          <option value="Teaching / Academician">&nbsp; Teaching / Academician</option>
                          <option value="Education Professional">&nbsp; Education Professional</option>
                          </optgroup>
                          <optgroup label="     -- HOSPITALITY --" class="a">
                          <option value="Hotel / Hospitality Professional">&nbsp; Hotel / Hospitality Professional</option>
                          </optgroup>
                          <optgroup label="     -- IT &amp; ENGINEERING --" class="a">
                          <option value="Software Professional">&nbsp; Software Professional</option>
                          <option value="Hardware Professional">&nbsp; Hardware Professional</option>
                          <option value="Database Professional">&nbsp; Database Professional</option>
                          <option value="Engineer - Non IT">&nbsp; Engineer - Non IT</option>
                          </optgroup>
                          <optgroup label="     -- LEGAL --" class="a">
                          <option value="Lawyer &amp; Legal Professional">&nbsp; Lawyer &amp; Legal Professional</option>
                          </optgroup>
                          <optgroup label="     -- LAW ENFORCEMENT --" class="a">
                          <option value="Law Enforcement Officer">&nbsp; Law Enforcement Officer</option>
                          </optgroup>
                          <optgroup label="     -- MEDICAL --" class="a">
                          <option value="Doctor">&nbsp; Doctor</option>
                          <option value="Health Care Professional">&nbsp; Health Care Professional</option>
                          <option value="Paramedical Professional">&nbsp; Paramedical Professional</option>
                          <option value="Nurse">&nbsp; Nurse</option>
                          </optgroup>
                          <optgroup label="     -- MARKETING &amp; SALES --" class="a">
                          <option value="Marketing Professional">&nbsp; Marketing Professional</option>
                          <option value="Sales Professional">&nbsp; Sales Professional</option>
                          </optgroup>
                          <optgroup label="     -- MEDIA &amp; ENTERTAINMENT --" class="a">
                          <option value="Journalist">&nbsp; Journalist</option>
                          <option value="Media Professional">&nbsp; Media Professional</option>
                          <option value="Entertainment Professional">&nbsp; Entertainment Professional</option>
                          <option value="Event Management Professional">&nbsp; Event Management Professional</option>
                          <option value="Advertising / PR Professional">&nbsp; Advertising / PR Professional</option>
                          </optgroup>
                          <optgroup label="     -- MERCHANT NAVY --" class="a">
                          <option value="Mariner / Merchant Navy">&nbsp; Mariner / Merchant Navy</option>
                          </optgroup>
                          <optgroup label="     -- SCIENTIST --" class="a">
                          <option value="Scientist / Researcher">&nbsp; Scientist / Researcher</option>
                          </optgroup>
                          <optgroup label="     -- TOP MANAGEMENT --" class="a">
                          <option value="CXO / President, Director, Chairman">&nbsp; CXO / President, Director, Chairman</option>
                          </optgroup>
                          <optgroup label="     -- OTHERS --" class="a">
                          <option value="Consultant">&nbsp; Consultant</option>
                          <option value="Customer Care Professional">&nbsp; Customer Care Professional</option>
                          <option value="Social Worker">&nbsp; Social Worker</option>
                          <option value="Sportsman">&nbsp; Sportsman</option>
                          <option value="Technician">&nbsp; Technician</option>
                          <option value="Arts &amp; Craftsman">&nbsp; Arts &amp; Craftsman</option>
                          <option value="Not Working">&nbsp; Not Working</option>
                          <option value="Business">&nbsp; Business</option>
                          </optgroup>
                        </select></td>
                      <td><strong>Employed In</strong></td>
                      <td colspan="2"><select id="employedin" name="registration_employedin" class="form-control">
                         <?php if(!empty($data[0]['registration_employedin'])): ?>
                          <option value="<?php echo $data[0]['registration_employedin']?>"><?php echo $data[0]['registration_employedin']?></option>
                      <?php endif; ?>
                          <option value="Government">Government Service</option>
                          <option value="Private">Private Service</option>
                          <option value="Defence">Defence</option>
                          <option value="Self Employed">Self Employed</option>
                          <option value="Not Required ">Not Required </option>
                        </select></td>
                    </tr>
                    <tr>
                      <td><strong>Occupation in Detail </strong></td>
                      <td colspan="2">
                          <input type="text" name="registration_occupation_detail" id="registration_occupation_detail" placeholder="Occupation in Detail" class="form-control" value="<?php echo (empty($data[0]['registration_occupation_detail']))? "" : $data[0]['registration_occupation_detail']?>">
                       </td>
                      <td><strong>Mothnly Income</strong></td>
                      <td colspan="2">
                          <input type="text" name="registration_monthly_income" placeholder="Mothnly Income" class="form-control" value="<?php echo $data[0]["registration_monthly_income"]?>">
                       </td>
                    </tr>
                    <tr>
                      <td><strong>Prefer working after marriage ?</strong></td>
                      <td colspan="2"><select id="employedin" name="registration_working_marriage" class="form-control">
                          <?php if(!empty($data[0]['registration_working_marriage'])): ?>
                          <option value="<?php echo $data[0]['registration_working_marriage']?>"><?php echo $data[0]['registration_working_marriage']?></option>
                      <?php endif; ?>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                          <option value="Donotknow">Do Not Know</option>
                        </select></td>
                      <td colspan="3"><button class="btn btn-danger pull-right" type="button" onclick="career_details();">Save</button></td>
                    </tr>
                  </tbody>
                </table>
                </form>
              </dd>
              <dt>
                <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                 Family Details
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
              <form id="family_details">
               <table>
                  <tbody>
                    <tr>
                      <td><strong>Fathers Name</strong></td>
                      <td colspan="2">
                          <input type="text" name="registration_fathername" placeholder="Fathers Name" class="form-control" value="<?php echo $data[0]["registration_fathername"];?>">
                       </td>
                      <td><strong>Fathers Status</strong></td>
                      <td colspan="2"><select id="fatherstatus" name="registration_fatherstatus" class="form-control">                          
           				<?php
                         if((empty($data)?"":$data[0]['registration_fatherstatus']) == (empty($data)?"":$data[0]['registration_fatherstatus'])):
			                        ?>
			                    <option value="Retired" <?php echo ((empty($data)?"":$data[0]['registration_fatherstatus']) == 'Retired')?'selected':''?>>Retired</option>
			          <option value="Service" <?php echo ((empty($data)?"":$data[0]['registration_fatherstatus']) == 'Service')?'selected':''?>>Service</option>
			          <option value="Government" <?php echo ((empty($data)?"":$data[0]['registration_fatherstatus']) == 'Government')?'selected':''?>>Government</option>
			         <option value="Defence" <?php echo ((empty($data)?"":$data[0]['registration_fatherstatus']) == 'Defence')?'selected':''?>>Defence</option>
			         <option value="Private" <?php echo ((empty($data)?"":$data[0]['registration_fatherstatus']) == 'Private')?'selected':''?>>Private</option>
			         <option value="Business" <?php echo ((empty($data)?"":$data[0]['registration_fatherstatus']) == 'Business')?'selected':''?>>Business</option>
			          <option value="Self Employed" <?php echo ((empty($data)?"":$data[0]['registration_fatherstatus']) == 'Self Employed')?'selected':''?>>Self Employed</option>
			        <option value="Not Working" <?php echo ((empty($data)?"":$data[0]['registration_fatherstatus']) == 'Not Working')?'selected':''?>>Not Working</option>
			          <option value="Expired" <?php echo ((empty($data)?"":$data[0]['registration_fatherstatus']) == 'Expired')?'selected':''?>>Expired</option>
			       <?php endif; ?>
                      </select></td>
                    </tr>
                    <tr>
                    	  <td><strong>Mothers Name </strong></td>
                      <td colspan="2">
                          <input type="text" name="registration_mothername" placeholder="Mothers Name" class="form-control" value="<?php echo $data[0]["registration_mothername"]; ?>" >
                      </td>
                      <td><strong>Mothers Status</strong></td>
                      <td colspan="2"><select id="motherstatus" name="registration_motherstatus" class="form-control">                         
				      <?php
                         if((empty($data)?"":$data[0]['registration_motherstatus']) == (empty($data)?"":$data[0]['registration_motherstatus'])):
                        ?>
                      <option value="Retired" <?php echo ((empty($data)?"":$data[0]['registration_motherstatus']) == 'Retired')?'selected':''?>>Retired</option>
				     <option value="Government" <?php echo ((empty($data)?"":$data[0]['registration_motherstatus']) == 'Government')?'selected':''?>>Government</option>
				       <option value="Service" <?php echo ((empty($data)?"":$data[0]['registration_motherstatus']) == 'Service')?'selected':''?>>Service</option>
				        <option value="Defence" <?php echo ((empty($data)?"":$data[0]['registration_motherstatus']) == 'Defence')?'selected':''?>>Defence</option>
				     <option value="Private" <?php echo ((empty($data)?"":$data[0]['registration_motherstatus']) == 'Private')?'selected':''?>>Private</option>
				      <option value="Business" <?php echo ((empty($data)?"":$data[0]['registration_motherstatus']) == 'Business')?'selected':''?>>Business</option>
				      <option value="Self Employed" <?php echo ((empty($data)?"":$data[0]['registration_motherstatus']) == 'Self Employed')?'selected':''?>>Self Employed</option>
				       <option value="Not Working" <?php echo ((empty($data)?"":$data[0]['registration_motherstatus']) == 'Not Working')?'selected':''?>>Not Working</option>
				      <option value="Home Maker" <?php echo ((empty($data)?"":$data[0]['registration_motherstatus']) == 'Home Maker')?'selected':''?>>Home Maker</option>
				      <option value="Expired" <?php echo ((empty($data)?"":$data[0]['registration_motherstatus']) == 'Expired')?'selected':''?>>Expired</option>				      
				  <?php endif; ?>
				  </select></td>
                    
                    </tr>
                    <tr>
                      <td><strong>Brother's Married </strong></td>
                      <td colspan="2">
                          <input type="text" name="registration_brothermarried" placeholder="Brother's Married" class="form-control" value="<?php echo $data[0]["registration_brothermarried"]; ?>">
                       </td>
                       <td><strong>Brother's Unmarried </strong></td>
                      <td colspan="2">
                          <input type="text" name="registration_brotherunmarried" placeholder="Brother's Unarried" class="form-control" value="<?php  echo $data[0]["registration_brotherunmarried"];?>">
                      </td>
                    </tr>
                     <tr>
                      <td><strong>Sister's Married </strong></td>
                      <td colspan="2">
                          <input type="text" name="registration_sistermarried" placeholder="Sister's Married" class="form-control" value="<?php  echo $data[0]["registration_sistermarried"];?>">
                        </td>
                       <td><strong>Sister's Unmarried </strong></td>
                      <td colspan="2">
                          <input type="text" name="registration_sisterunmarried" placeholder="Sister's Unarried" class="form-control" value="<?php echo $data[0]["registration_sisterunmarried"];?>">
                        </td>
                    </tr>
                    <tr>
                      <td><strong>Living Status</strong></td>
                      <td colspan="2"><select id="TxtLivingStatus" name="registration_livingstatus" class="form-control">                         
                       <?php
                         if((empty($data)?"":$data[0]['registration_livingstatus']) == (empty($data)?"":$data[0]['registration_livingstatus'])):
                        ?>
                      <option value="Living Alone" <?php echo ((empty($data)?"":$data[0]['registration_livingstatus']) == 'Living Alone')?'selected':''?>>Living Alone</option>
					  <option value="Living with Friends" <?php echo ((empty($data)?"":$data[0]['registration_livingstatus']) == 'Living with Friends')?'selected':''?>>Living with Friends</option>
					  <option value="Living with Parents" <?php echo ((empty($data)?"":$data[0]['registration_livingstatus']) == 'Living with Parents')?'selected':''?>>Living with Parents</option>
					  <option value="Living with Relatives" <?php echo ((empty($data)?"":$data[0]['registration_livingstatus']) == 'Living with Relatives')?'selected':''?>>Living with Relatives</option>
					  <?php endif; ?>
                        </select></td>
                      <td><strong>Family Type</strong></td>
                      <td colspan="2"><select id="Txtfamilytype" name="registration_familytype" class="form-control">                         
             			<?php
                         if((empty($data)?"":$data[0]['registration_familytype']) == (empty($data)?"":$data[0]['registration_familytype'])):
                        ?>
                     <option value="Joint Family" <?php echo ((empty($data)?"":$data[0]['registration_familytype']) == 'Joint Family')?'selected':''?>>Joint Family</option>
					        <option value="Nuclear Family" <?php echo ((empty($data)?"":$data[0]['registration_familytype']) == 'Nuclear Family')?'selected':''?>>Nuclear Family</option>
					    <?php endif; ?>
                          </select></td>
                    </tr>
                    <tr>
                      <td><strong>Family Status</strong></td>
                      <td colspan="2"><select id="TxtFamilyStatus" name="registration_familystatus" class="form-control">                         
       					<?php
                         if((empty($data)?"":$data[0]['registration_familystatus']) == (empty($data)?"":$data[0]['registration_familystatus'])):
                        ?>
                      <option value="Lower Middle Class" <?php echo ((empty($data)?"":$data[0]['registration_familystatus']) == 'Lower Middle Class')?'selected':''?>>Lower Middle Class</option>
					      <option value="Middle Class" <?php echo ((empty($data)?"":$data[0]['registration_familystatus']) == 'Middle Class')?'selected':''?>>Middle Class</option>
					       <option value="Upper Middle Class" <?php echo ((empty($data)?"":$data[0]['registration_familystatus']) == 'Upper Middle Class')?'selected':''?>>Upper Middle Class</option>
					          <option value="Rich" <?php echo ((empty($data)?"":$data[0]['registration_familystatus']) == 'Rich')?'selected':''?>>Rich</option>
					       <option value="Affluent" <?php echo ((empty($data)?"":$data[0]['registration_familystatus']) == 'Affluent')?'selected':''?>>Affluent</option>
					      <?php endif; ?>
                        </select></td>
                        <td><strong>(village) </strong></td>
                      <td colspan="2">
                          <input type="text" name="registration_nativevillage" placeholder="village" class="form-control" value="<?php echo $data[0]["registration_nativevillage"]; ?>">
                       </td>
                    </tr>
                    <tr>
                      <td><strong>(district) </strong></td>
                      <td colspan="2">
                          <input type="text" name="registration_nativedistrict" placeholder="district" class="form-control" value="<?php  echo $data[0]["registration_nativedistrict"];?>">
                       </td>
                         <td><strong>(taluka)</strong></td>
                      <td colspan="2">
                          <input type="text" name="registration_nativetaluka" placeholder="state" class="form-control" value="<?php  echo $data[0]["registration_nativetaluka"];?>">
                       </td>
                    </tr>
                     <tr>
                      <td><strong>(state)</strong></td>
                      <td colspan="2">
                          <input type="text" name="registration_nativestate" placeholder="state" class="form-control" value="<?php echo $data[0]["registration_nativestate"]?>">
                      </td>
                      <td><strong>About My Family</strong></td>
                      <td colspan="4"><input type="text"placeholder="About My Family" name="registration_myfamily" rows="2" class="form-control" value="<?php echo $data[0]["registration_myfamily"]?>"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td colspan="2">
                      </td>
                      <td></td>
                      <td colspan="4"></td>
                      <td><button class="btn btn-danger pull-right" type="button" onclick="family_details1();">Save
                      </button></td>
                    </tr>
                  </tbody>
                </table>
              </form>
              </dd>
              <dt>
                <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                  Partner Preference
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                 <form id="partner_preference">
                 <table>
                  <tbody>
                    <tr>
                      <td><strong>Age : Between</strong></td>
                      <td colspan="1"><select id="Partnerppage_from" name="partner_agefrom" class="form-control">
                            <?php if(!empty($partner_data[0]['partner_agefrom'])): ?>
                          <option value="<?php echo $partner_data[0]['partner_agefrom'];?>"><?php echo $partner_data[0]['partner_agefrom'];?></option>

                      <?php endif; ?>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                          </select></td>
                      <td colspan="1"><select id="Partnerppage_from" name="partner_ageto" class="form-control">
                           <?php if(!empty($partner_data[0]['partner_ageto'])): ?>
                          <option value="<?php echo $partner_data[0]['partner_ageto'];?>"><?php echo $partner_data[0]['partner_ageto'];?></option>
                      <?php endif; ?>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                          </select></td>
                          
                          
                           <td><strong>Height : Between </strong></td>
                      <td colspan="1"><select id="PartnerFromheight" name="partner_heightfrom" class="form-control">
                <?php if(!empty($partner_data[0]['partner_heightfrom'])): ?>
                          <option value="<?php echo $partner_data[0]['partner_heightfrom'];?>"><?php echo $partner_data[0]['partner_heightfrom'];?></option>
                      <?php endif; ?>
                <option value="4.0">4ft </option>
                <option value="4.1">4ft 1in </option>
                <option value="4.2">4ft 2in </option>
                <option value="4.3">4ft 3in </option>
                <option value="4.4">4ft 4in </option>
                <option value="4.5">4ft 5in </option>
                <option value="4.6">4ft 6in </option>
                <option value="4.7">4ft 7in </option>
                <option value="4.8">4ft 8in </option>
                <option value="4.9">4ft 9in </option>
                <option value="4.10">4ft 10in </option>
                <option value="4.11">4ft 11in </option>
                <option value="5.0">5ft </option>
                <option value="5.1">5ft 1in </option>
                <option value="5.2">5ft 2in </option>
                <option value="5.0">5ft 3in </option>
                <option value="5.4">5ft 4in </option>
                <option value="5.5">5ft 5in </option>
                <option value="5.6">5ft 6in </option>
                <option value="5.7">5ft 7in </option>
                <option value="5.8">5ft 8in </option>
                <option value="5.9">5ft 9in </option>
                <option value="5.10">5ft 10in </option>
                <option value="5.11">5ft 11in </option>
                 <option value="6.0">6ft </option>
                <option value="6.1">6ft 1in </option>
                <option value="6.2">6ft 2in </option>
                <option value="6.3">6ft 3in </option>
                <option value="6.4">6ft 4in </option>
                <option value="6.5">6ft 5in </option>
                <option value="6.6">6ft 6in </option>
                <option value="6.7">6ft 7in </option>
                <option value="6.8">6ft 8in </option>
                <option value="6.9">6ft 9in </option>
                <option value="6.10">6ft 10in </option>
                <option value="6.11">6ft 11in </option>
                <option value="7.1">7ft 1in </option>
                <option value="7.2">7ft 2in </option>
                <option value="7.3">7ft 3in </option>
                <option value="7.4">7ft 4in </option>
                <option value="7.5">7ft 5in </option>
                <option value="7.6">7ft 6in </option>
                <option value="7.7">7ft 7in </option>
                <option value="7.8">7ft 8in </option>
                <option value="7.9">7ft 9in </option>
                <option value="7.10">7ft 10in </option>
                <option value="7.11">7ft 11in </option>
              </select></td>
                      <td colspan="1"><select id="PartnerToheight" name="partner_heightto" class="form-control">
               <?php if(!empty($partner_data[0]['partner_heightto'])): ?>
                          <option value="<?php echo $partner_data[0]['partner_heightto'];?>"><?php echo $partner_data[0]['partner_heightto'];?></option>
                      <?php endif; ?>
                <option value="4.0">4ft </option>
                <option value="4.1">4ft 1in </option>
                <option value="4.2">4ft 2in </option>
                <option value="4.3">4ft 3in </option>
                <option value="4.4">4ft 4in </option>
                <option value="4.5">4ft 5in </option>
                <option value="4.6">4ft 6in </option>
                <option value="4.7">4ft 7in </option>
                <option value="4.8">4ft 8in </option>
                <option value="4.9">4ft 9in </option>
                <option value="4.10">4ft 10in </option>
                <option value="4.11">4ft 11in </option>
                <option value="5.0">5ft </option>
                <option value="5.1">5ft 1in </option>
                <option value="5.2">5ft 2in </option>
                <option value="5.0">5ft 3in </option>
                <option value="5.4">5ft 4in </option>
                <option value="5.5">5ft 5in </option>
                <option value="5.6">5ft 6in </option>
                <option value="5.7">5ft 7in </option>
                <option value="5.8">5ft 8in </option>
                <option value="5.9">5ft 9in </option>
                <option value="5.10">5ft 10in </option>
                <option value="5.11">5ft 11in </option>
                 <option value="6.0">6ft </option>
                <option value="6.1">6ft 1in </option>
                <option value="6.2">6ft 2in </option>
                <option value="6.3">6ft 3in </option>
                <option value="6.4">6ft 4in </option>
                <option value="6.5">6ft 5in </option>
                <option value="6.6">6ft 6in </option>
                <option value="6.7">6ft 7in </option>
                <option value="6.8">6ft 8in </option>
                <option value="6.9">6ft 9in </option>
                <option value="6.10">6ft 10in </option>
                <option value="6.11">6ft 11in </option>
                <option value="7.1">7ft 1in </option>
                <option value="7.2">7ft 2in </option>
                <option value="7.3">7ft 3in </option>
                <option value="7.4">7ft 4in </option>
                <option value="7.5">7ft 5in </option>
                <option value="7.6">7ft 6in </option>
                <option value="7.7">7ft 7in </option>
                <option value="7.8">7ft 8in </option>
                <option value="7.9">7ft 9in </option>
                <option value="7.10">7ft 10in </option>
                <option value="7.11">7ft 11in </option>
              </select></td>
                    </tr>
                    <tr>
                    	  <td><strong>Marital Status </strong></td>
                      <td colspan="2"><select id="partner_maritalstatus" name="partner_maritalstatus" class="form-control">
                 <?php
                         if((empty($partner_data)?"":$partner_data[0]['Partnermaritalstatus']) == (empty($partner_data)?"":$partner_data[0]['Partnermaritalstatus'])):
                        ?>
		               <option value="Unmarried" <?php echo ((empty($partner_data)?"":$partner_data[0]['partner_maritalstatus']) == 'Unmarried')?'selected':''?>>Unmarried</option>
                     	<option value="Divorced" <?php echo ((empty($partner_data)?"":$partner_data[0]['partner_maritalstatus']) == 'Divorced')?'selected':''?>>Divorced</option>
                        <option value="Widowed" <?php echo ((empty($partner_data)?"":$partner_data[0]['partner_maritalstatus']) == 'Widowed')?'selected':''?>>Widowed</option>
                        <option value="Seperated"<?php echo ((empty($partner_data)?"":$partner_data[0]['partner_maritalstatus']) == 'Seperated')?'selected':''?>>Seperated</option>
                           <?php
                                endif;
                      ?>
            </select></td>
            <td><strong>Religion</strong></td>
                      <td colspan="2"><select name="partner_religion" id="Partnerreligion" class="form-control">
        <option value="Hindu" selected="selected">Hindu</option>
        </select></td>
                    
                    </tr>
                    <tr>
                      <td><strong>Caste</strong></td>
                      <td colspan="2"><select id="PartnerTxtCaste" name="partner_caste" class="form-control">
                <option value="Chambhar" selected="selected">Chambhar</option>
              </select></td>
                       <td><strong>Are you ready for intercaste marriage?</strong></td>
                      <td colspan="2"><select id="intercast" name="partner_intercaste" class="form-control">
                          <?php
                         if((empty($partner_data)?"":$partner_data[0]['partner_intercaste']) == (empty($partner_data)?"":$partner_data[0]['partner_intercaste'])):
                        ?>
                      <option value="Yes"<?php echo ((empty($partner_data)?"":$partner_data[0]['partner_intercaste']) == 'Yes')?'selected':''?>>Yes</option>
                     <option value="No"<?php echo ((empty($partner_data)?"":$partner_data[0]['partner_intercaste']) == 'No')?'selected':''?>>No</option>
                 <?php endif; ?>
              </select></td>
                    </tr>
                     <tr>
                      <td><strong>Manglik Required ?  </strong></td>
                      <td colspan="2"><select id="mangalik" name="partner_manglik" class="form-control">
                      <?php
                         if((empty($partner_data)?"":$partner_data[0]['partner_manglik']) == (empty($partner_data)?"":$partner_data[0]['partner_manglik'])):
                        ?>
		              <option value="Yes"<?php echo ((empty($partner_data)?"":$partner_data[0]['partner_manglik']) == 'Yes')?'selected':''?>>Yes</option>
		                 <option value="No"<?php echo ((empty($partner_data)?"":$partner_data[0]['partner_manglik']) == 'No')?'selected':''?>>No</option>
		             <?php endif; ?>
                     </select></td>
                       <td><strong>Diet</strong></td>
                      <td colspan="2"><select id="PartnerDiet" name="partner_diet" class="form-control">
                    <?php
                         if((empty($partner_data)?"":$partner_data[0]['partner_diet']) == (empty($partner_data)?"":$partner_data[0]['partner_diet'])):
                        ?>
                  <option value="Vegetarian" <?php echo ((empty($partner_data)?"":$partner_data[0]['partner_diet']) == 'Vegetarian')?'selected':''?>>Vegetarian</option>
                          <option value="Non-Vegetarian" <?php echo ((empty($partner_data)?"":$partner_data[0]['partner_diet']) == 'Non-Vegetarian')?'selected':''?>>Non-Vegetarian</option>
                            <option value="Eggetarian" <?php echo ((empty($partner_data)?"":$partner_data[0]['partner_diet']) == 'Eggetarian')?'selected':''?>>Eggetarian
                            </option>
                      <?php endif; ?>
              </select></td>
                    </tr>
                    
                    <tr>
                      <td><strong>Smoke</strong></td>
                      <td colspan="2"><select id="PartnerSmoke" name="partner_smoke" class="form-control">
                        <?php
                         if((empty($partner_data)?"":$partner_data[0]['partner_smoke']) == (empty($partner_data)?"":$partner_data[0]['partner_smoke'])):
                        ?>
                <option value="Yes"<?php echo ((empty($partner_data)?"":$partner_data[0]['partner_smoke']) == 'Yes')?'selected':''?>>Yes</option>
		                 <option value="No"<?php echo ((empty($partner_data)?"":$partner_data[0]['partner_smoke']) == 'No')?'selected':''?>>No</option>
		                  <option value="Non-Vegetarian"<?php echo ((empty($partner_data)?"":$partner_data[0]['partner_smoke']) == 'Non-Vegetarian')?'selected':''?>>Non-Vegetarian</option>
		             <?php endif; ?>
              </select></td>
                        
                      <td><strong>Drink</strong></td>
                      <td colspan="2"><select id="PartnerDrink" name="partner_drink" class="form-control">
                        <?php
                         if((empty($partner_data)?"":$partner_data[0]['partner_drink']) == (empty($partner_data)?"":$partner_data[0]['partner_drink'])):
                        ?>
                <option value="Yes"<?php echo ((empty($partner_data)?"":$partner_data[0]['partner_drink']) == 'Yes')?'selected':''?>>Yes</option>
		                 <option value="No"<?php echo ((empty($partner_data)?"":$partner_data[0]['partner_drink']) == 'No')?'selected':''?>>No</option>
		                  
		             <?php endif; ?>
              </select></td>
                    </tr>
                    <tr>
                      <td><strong>Complexion</strong></td>
                      <td colspan="2"><select id="TxtPartnerComplexion" name="partner_complexion" class="form-control">
            <?php
                         if((empty($partner_data)?"":$partner_data[0]['partner_complexion']) == (empty($partner_data)?"":$partner_data[0]['partner_complexion'])):
                        ?>
               <option value="Fair" <?php echo ((empty($partner_data)?"":$partner_data[0]['partner_complexion']) == 'Fair')?'selected':''?>>Fair</option>
                         <option value="Very Fair" <?php echo ((empty($partner_data)?"":$partner_data[0]['partner_complexion']) == 'Very Fair')?'selected':''?>>Very Fair  </option>
                           <option value="Wheatish" <?php echo ((empty($partner_data)?"":$partner_data[0]['partner_complexion']) == 'Wheatish')?'selected':''?>>Wheatish
                       </option>
                          <option value="Dark" <?php echo ((empty($partner_data)?"":$partner_data[0]['partner_complexion']) == 'Dark')?'selected':''?>>Dark</option>
                   <?php endif; ?>
              </select></td>
                        <td><strong>Body Type </strong></td>
                      <td colspan="2"><select id="TxtPartnerBodyType" name="partner_bodytype" class="form-control">
                    <?php
                         if((empty($partner_data)?"":$partner_data[0]['partner_bodytype']) == (empty($partner_data)?"":$partner_data[0]['partner_bodytype'])):
                        ?>
              <option value="Slim" <?php echo ((empty($partner_data)?"":$partner_data[0]['partner_bodytype']) == 'Slim')?'selected':''?>>Slim</option>
             <option value="Athletic" <?php echo ((empty($partner_data)?"":$partner_data[0]['partner_bodytype']) == 'Athletic')?'selected':''?>>Athletic</option>
                           <option value="Average" <?php echo ((empty($partner_data)?"":$partner_data[0]['partner_bodytype']) == 'Average')?'selected':''?>>Average</option>
                          <option value="Heavy" <?php echo ((empty($partner_data)?"":$partner_data[0]['partner_bodytype']) == 'Heavy')?'selected':''?>>Heavy</option>
                      <?php endif; ?>
              </select></td>
                    </tr>
                    <tr>
                      <td><strong>Education Level</strong></td>
                      <td colspan="2"><select name="partner_educationlevel" id="TxtPartnerEducationLevel" class="form-control">
                   <?php if(!empty($partner_data[0]['partner_educationlevel'])): ?>
                          <option value="<?php echo $partner_data[0]['partner_educationlevel'];?>"><?php echo $partner_data[0]['partner_educationlevel'];?></option>
                      <?php endif; ?>
                  <option value="Any">Any</option>
                  <option value="Bachelors">Bachelors</option>
                  <option value="Masters">Masters</option>
                  <option value="Doctorate">Doctorate</option>
                  <option value="Diploma">Diploma</option>
                  <option value="Undergraduate">Undergraduate</option>
                  <option value="Associate Degree">Associate Degree</option>
                  <option value="Hounors Degree">Hounors Degree</option>
                  <option value="Trade School">Trade School</option>
                  <option value="High School">High School</option>
                 <option value="Less than 10">Less than 10</option>
                  <option value="Less than 12">Less than 12</option>
                </select></td>
                         <td><strong>Employed Level</strong></td>
                      <td colspan="2"><select id="Partneremployedin" name="partner_employedlevel" class="form-control">
                 <?php if(!empty($partner_data[0]['partner_employedlevel'])): ?>
                          <option value="<?php echo $partner_data[0]['partner_employedlevel'];?>"><?php echo $partner_data[0]['partner_employedlevel'];?></option>
                      <?php endif; ?>
                <option value="Any">Any</option>
                <option value="Service">Service</option>
                <option value="Government">Government</option>
                <option value="Private">Private</option>
                <option value="Business">Business</option>
                <option value="Defence">Defence</option>
                <option value="Self Employed">Self Employed</option>
                <option value="Not Required ">Not Required </option>
                </select></td>
                    </tr>
                    <tr>
                      <td><strong>Occupation</strong></td>
                      <td colspan="2">
                          <input type="text" name="partner_occupation" placeholder="Occupation" class="form-control" value="<?php echo ((empty($partner_data)?"":$partner_data[0]["partner_occupation"] ))?>">
                       </td>
                         <td><strong>Monthly Income </strong></td>
                      <td colspan="2">
                          <input type="text" name="partner_monthlyincome" placeholder="Monthly Income" class="form-control" value="<?php echo (empty($partner_data)?"": $partner_data[0]["partner_monthlyincome"])?>">
                        </td>
                    </tr>
                    <tr>
                      <td><strong>Sub Group</strong></td>
                      <td colspan="2"><select id="subgroup" name="partner_subgroup" class="form-control">
                <?php if(!empty($partner_data[0]['partner_subgroup'])): ?>
                          <option value="<?php echo $partner_data[0]['partner_subgroup'];?>"><?php echo $partner_data[0]['partner_subgroup'];?></option>
                      <?php endif; ?>
                <option value="Any">Any</option>
                <option value="Deshastha">Deshastha</option>
                <option value="Kokanastha">Kokanastha </option>
                  </select></td>
                         <td><strong>City </strong></td>
                      <td colspan="2"><select id="PartnerCity" name="partner_city" class="form-control">
   <?php if(!empty($partner_data[0]['partner_city'])): ?>
                          <option value="<?php echo $partner_data[0]['partner_city'];?>">
                          <?php echo $partner_data[0]['partner_city'];?></option>
                      <?php endif; ?>
    
                <option value="Mumbai">Mumbai</option>
                <option value="Pune">Pune</option>
                <option value="Thane">Thane</option>
                <option value="Navi Mumbai">Navi Mumbai</option>
                <option value="Kolhapur">Kolhapur</option>
                <option value="Satara">Satara</option>
                <option value="Nashik">Nashik</option>
                <option value="Aurangabad">Aurangabad</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Delhi">Delhi</option>
                <option value="Chennai">Chennai</option>
                <option value="Sindhudurg">Sindhudurg</option>
                <option value="Ahmednagar">Ahmednagar</option>
                <option value="Baramati">Baramati</option>
                <option value="Buldhana">Buldhana</option>
                <option value="Bhusawal">Bhusawal</option>
                <option value="Latur">Latur</option>
                <option value="Usmanabad">Usmanabad</option>
                <option value="Dahanu">Dahanu</option>
                <option value="Ratnagiri">Ratnagiri</option>
                <option value="Solapur">Solapur</option>
                <option value="Nagpur">Nagpur</option>
                <option value="Jalgaon">Jalgaon</option>
                <option value="Panvel">Panvel</option>
                <option value="Goa">Goa</option>
                <option value="Alibaugh">Alibaugh</option>
                <option value="Dhule">Dhule</option>
                <option value="Nandurbar">Nandurbar</option>
                <option value="Satana">Satana</option>
                <option value="Shirpur">Shirpur</option>
                <option value="Pachora">Pachora</option>
                <option value="Jalna">Jalna</option>
                <option value="Akola">Akola</option>
                 <option value="Vadodara">Vadodara</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Surat">Surat</option>
                <option value="Kanpur">Kanpur</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Lucknow">Lucknow</option>
                <option value="Patna">Patna</option>
                <option value="Indore">Indore</option>
                <option value="Bhopal">Bhopal</option>
                <option value="Ludhiana">Ludhiana</option>
                <option value="Agra">Agra</option>
<option value="Sangali">Sangali</option>
                
            </select></td>
                    </tr>
                    <tr>
                      <td><strong>State</strong></td>
                      <td colspan="2"><select id="PartnerState" name="partner_state" class="form-control">
       <?php if(!empty($partner_data[0]['partner_state'])): ?>
                          <option value="<?php echo $partner_data[0]['partner_state'];?>"><?php echo $partner_data[0]['partner_state'];?></option>
                      <?php endif; ?>
                <option value="Andaman &amp; Nicobar">Andaman &amp; Nicobar</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
                <option value="Daman &amp; Diu">Daman &amp; Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
                <option value="Jharkand">Jharkand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Lakshadeep">Lakshadeep</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Orissa">Orissa</option>
                <option value="Pondicherry">Pondicherry</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttaranchal">Uttaranchal</option>
                <option value="West Bengal">West Bengal</option>
                
            </select></td>
                         <td><strong>Country </strong></td>
                      <td colspan="2"><select id="PartnerCountry" name="partner_country" class="form-control">
   <?php if(!empty($partner_data[0]['partner_country'])): ?>
                          <option value="<?php echo $partner_data[0]['partner_country'];?>"><?php echo $partner_data[0]['partner_country'];?></option>
                      <?php endif; ?>
                <option value="India">India</option>
                <option value="United States of America">United States of America</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="Malaysia">Malaysia</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="Australia">Australia</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Canada">Canada</option>
                <option value="Singapore">Singapore</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Brazil">Brazil</option>
                <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States of America">United States of America</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Vatican City">Vatican City</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Virgin Islands">Virgin Islands</option>
                <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Yugoslavia (Former)">Yugoslavia (Former)</option>
                <option value="Zaire">Zaire</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
                <option value="Ashmore and Cartier Islands">Ashmore and Cartier Islands</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Bassas da India">Bassas da India</option>
                <option value="Congo (Brazzaville)">Congo (Brazzaville)</option>
                <option value="Coral Sea Islands">Coral Sea Islands</option>
                <option value="Europa Island">Europa Island</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Glorioso Islands">Glorioso Islands</option>
                <option value="Gaza Strip">Gaza Strip</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Clipperton Island">Clipperton Island</option>
                <option value="Cote DIvoire">Cote DIvoire</option>
                <option value="Jersey">Jersey</option>
                <option value="Jan Mayen">Jan Mayen</option>
                <option value="Juan de Nova Island">Juan de Nova Island</option>
                <option value="Macedonia">Macedonia</option>
                <option value="Bodies of water">Bodies of water</option>
                <option value="Paracel Islands">Paracel Islands</option>
                <option value="Spratly Islands">Spratly Islands</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Svalbard">Svalbard</option>
                <option value="Tromelin Island">Tromelin Island</option>
                <option value="Undersea features">Undersea features</option>
                <option value="Saint Vincent &amp; the Grenadines">Saint Vincent &amp; the Grenadines</option>
                <option value="West Bank">West Bank</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Serbia and Montenegro">Serbia and Montenegro</option>
            </select></td>
                    </tr>
                    
                    
                     <tr>
                      <td><strong>About My Partner </strong></td>
                      <td colspan="4"><textarea placeholder="About My Family" name="partner_aboutpartner" rows="2" class="form-control"><?php echo (empty($partner_data)?"":$partner_data[0]["partner_aboutpartner"])?></textarea></td>
                      <td><button class="btn btn-danger pull-right" type="button" onclick="partner_data();">Save</button></td>
                    </tr>
                  </tbody>
                </table>
                </form>
              </dd>
              
              
            </dl>
          </div>
    </div>
    <div class="col-md-3 single-right">
      <div class="categories">
        <h5>Categories</h5>
        <ul>
          <li><a href="#">Aliquam dapibus tincidunt</a></li>
          <li><a href="#">Donec sollicitudin molestie</a></li>
          <li><a href="#">Fusce feugiat malesuada odio</a></li>
          <li><a href="#">Cum sociis natoque penatibus</a></li>
          <li><a href="#">Magnis dis parturient montes</a></li>
          <li><a href="#">Donec sollicitudin molestie</a></li>
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
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<?php 
  $this->load->view('templates/footer');
?>