<?php
  $mobile = $this->session->userdata('mobile');
  $email = $this->session->userdata('email');
  $pass = $this->session->userdata('pass');
  // print_r($data);exit;
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>Saiprasad Vivah | Register</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />
<link rel="icon" type="image/png" href="assets/img/favicon.ico">
<link href="<?php echo base_url();?>public/register/assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url();?>public/register/assets/css/gsdk-base.css" rel="stylesheet" />
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

<link href="<?php echo base_url();?>public/plugins/datepicker/datepicker.css?>" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="image-container set-full-height"> 
  
  <!--   Big container   -->
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2"> 
        
        <!--      Wizard container        -->
        <div class="wizard-container">
          <div class="card wizard-card ct-wizard-orange" id="wizardProfile">
          <div class="col-sm-12 col-sm-offset-0 alert_msg"></div>
            <form id="registration_form2">
              <div class="wizard-header">
                <h3> <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>public/images/logo-(1).png" class="img-responsive"></a></h3>
                <h3> <b>BUILD</b> YOUR PROFILE <br>
                  <small>This information will let us know more about you.</small> </h3>
              </div>
              <ul>
                <li><a href="#register" data-toggle="tab">New Registration</a></li>
                <li><a href="#account" data-toggle="tab">Basic Detail</a></li>
                <li><a href="#contact" data-toggle="tab">Contact Detail</a></li>
                <!-- <li><a href="#payment" data-toggle="tab">Payment Detail</a></li> -->
              </ul>
              <div class="tab-content">
                <div class="tab-pane" id="register">
                  <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                      <h4 class="info-text text-center"> Verified Successfully !!</h4>
                      <p class="text-center"><img src="<?php echo base_url();?>public/images/i-do.jpg" class="img-responsive"></p>
                     </div>
                   </div>
                </div>
                <div class="tab-pane" id="account">
                  <div class="row">
                    <h4 class="info-text"> Let's start with the basic information</h4>
                    <div class="col-sm-4 col-sm-offset-1">
                      <div class="picture-container">
                        <div class="picture"> <img src="<?php echo base_url();?>public/register/assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                          <input type="file" name="userfile"  id="wizard-picture">
                        </div>
                        <h6>Choose Picture</h6>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>First Name <small>(required)</small></label>
                        <input name="registration_fname" id="registration_fname"  type="text" class="form-control" placeholder="Andrew..." onkeyup="validate_fname()" required>
                      </div>
                      <div class="form-group">
                        <label>Last Name <small>(required)</small></label>
                        <input name="registration_lname" id="registration_lname" type="text" class="form-control" placeholder="Smith..." onkeyup="validate_lname()" required>
                        <input name="registration_email" type="hidden" class="form-control" placeholder="Smith..." value="<?php echo $email;?>">
                        <input name="registration_password"  type="hidden" class="form-control" placeholder="Andrew..." value="<?php echo $pass;?>">
                        <input name="registration_mobile1"  type="hidden" class="form-control" placeholder="Andrew..." value="<?php echo $mobile;?>">
                      </div>
                    </div>
                    <!-- <hr>-->
                    <div class="col-sm-5 col-sm-offset-1">
                      <div class="form-group">
                        <select name="registration_gender" class="form-control" required>
                          <option value="">Gender <small><span style="color:red !important;">(required)</span></small></option>
                          <option value="male" > Male </option>
                          <option value="female"> Female </option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <select name="registration_mother_tongue" id="registration_mother_tongue" class="form-control">
                          <option value="Not Specified">Mother Tounge</option>
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
                        </select>
                      </div>
                    </div>
                    <!-- <hr>-->
                    <div class="col-sm-5 col-sm-offset-1">
                      <div class="form-group">
                        <select name="registration_spoken_language" id="registration_spoken_language" class="form-control">
                          <option value="Not Specified">Spoken Languages</option>
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
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <select name="registration_religion" id="registration_religion" class="form-control">
                          <option value="Not Specified">Religion</option>
                          <option value="Hindu" selected="selected">Hindu</option>
                        </select>
                      </div>
                    </div>
                    <!-- <hr>-->
                    <div class="col-sm-5 col-sm-offset-1">
                      <div class="form-group">
                        <select id="registration_caste" name="registration_caste" class="form-control">
                          <!-- <option value="Not Specified">Cast</option> -->
                          <option value="Chambhar" selected>Chambhar</option>
                         <!--  <option value="Brahmin" >Brahmin</option>
                          <option value="Maratha" >Maratha</option>
                          <option value="Sonar" >Sonar</option>
                          <option value="Lohar" >Lohar</option>
                          <option value="Kumbhar" >Kumbhar</option>
                          <option value="Shimpi" >Shimpi</option>
                          <option value="Vanjari" >Vanjari</option> -->
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <input name="registration_sub_caste" type="text" class="form-control" placeholder="Subcast">
                      </div>
                    </div>
                    <!-- <hr>--> 
                          
                    <!-- <hr>-->
                    <div class="col-sm-5 col-sm-offset-1">
                      <div class="form-group">
                        <select id="registration_profile_createdby" name="registration_profile_createdby" class="form-control">
                          <option value="Not Specified">Profile For</option>
                          <option value="Self">Self</option>
                          <option value="Parents">Parents</option>
                          <option value="Sibling">Sibling</option>
                          <option value="Relative">Relative</option>
                          <option value="Friend">Friend</option>
                          <option value="Son">Son</option>
                          <option value="Brother">Brother</option>
                          <option value="Sister">Sister</option>
                          <option value="Daughter">Daughter</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <select id="registration_maritial_status" name="registration_maritial_status" class="form-control validate[required]" onchange="hide_children_status()">
                          <option value="Not Specified">Marital Status</option>
                          <option value="Unmarried">Unmarried</option>
                          <option value="Divorced">Divorced</option>
                          <option value="Widowed">Widowed</option>
                          <option value="Seperated">Seperated</option>
                        </select>
                      </div>
                    </div>
                    <!-- <hr>--> 
                    
                    <!-- <hr>-->
                    <div class="col-sm-5 col-sm-offset-1">
                      <div class="form-group">
                        <select id="registration_children" name="registration_children" class="form-control">
                          <option value="Not Specified">Children</option>
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <select id="registration_childrenstatus" name="registration_childrenstatus" class="form-control" >
                          <option value="Not Specified">Children Living Status </option>
                          <option value="Living with me">Living with me</option>
                          <option value="Not Living with me">Not Living with me</option>
                          <option value="Never Live with me">Never Live with me</option>
                        </select>
                      </div>
                    </div>
                    <!-- <hr>--> 
                    
                    <!-- <hr>-->
                    <div class="col-sm-5 col-sm-offset-1">
                      <div class="form-group">
                        <select id="registration_age" name="registration_age" class="form-control">
                          <option value="Not Specified">Age</option>
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
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <select id="registration_subgroup" name="registration_subgroup" class="form-control">
                          <option value="Not Specified">Sub Group</option>
                          <option value="deshastha">Deshastha</option>
                          <option value="kokanastha">Kokanastha</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-5 col-sm-offset-1">
                      <div class="form-group">
                        <label>PAN/Adhar No. <small>(required)</small></label>
                        <input name="registration_pan_adhar" type="text" class="form-control" placeholder="PAN NO. or ADHAR CARD" required>
                      </div>
                    </div>
                     <div class="col-sm-5">
                      <div class="form-group">
                        <label>Birth Date<small>(required)</small></label>
                        <input name="registration_birth_date" id="registration_birth_date" type="text" class="form-control" required>
                      </div>
                    </div>
                    <!-- <hr>--> 
                    
                    <!-- <hr>-->
                    <div class="col-sm-10 col-sm-offset-1">
                      <div class="form-group">
                       <label>About Yourself</label>
                        <textarea class="form-control" name="registration_about_myself" placeholder="About Yourself" rows="4"></textarea>
                      </div>
                    </div>
                    <!-- <hr>--> 
                    
                  </div>
                </div>
                <div class="tab-pane" id="contact">
                  <div class="row">
                    <div class="col-sm-12">
                      <h4 class="info-text"> Where You Are Living? </h4>
                    </div>
                    
                    <!-- <hr>-->
                    <div class="col-sm-5 col-sm-offset-1">
                      <div class="form-group">
                        <input name="registration_contact_address" type="registration_contact_address" class="form-control" placeholder="Contact Address">
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <select id="registration_city" name="registration_city" class="form-control validate[required]">
                          <option value="Not Specified">Select City</option>
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
                        </select>
                      </div>
                    </div>
                    <!-- <hr>-->
                    
                    <div class="col-sm-5 col-sm-offset-1">
                      <div class="form-group">
                        <select id="registration_state" name="registration_state" class="form-control">
                          <option value="Not Specified"> Select State</option>
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
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <select id="registration_country" name="registration_country" class="form-control">
                          <option value="Not Specified">Select Country</option>
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
                        </select>
                      </div>
                    </div>
                    <!-- <hr>-->
                    
                    <div class="col-sm-5 col-sm-offset-1">
                      <div class="form-group">
                        <select id="registration_citizenship" name="registration_citizenship" class="form-control">
                          <option value="Not Specified">Select Citizenship</option>
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
                        </select>
                      </div>
                    </div>
                     <div class="col-sm-5">
                      <div class="form-group">
                        <input name="registration_mobile2" type="registration_mobile2" class="form-control" placeholder="Alternate Mobile No.">
                      </div>
                    </div>
                    <!-- <hr>--> 
                    <!-- <hr>-->
                     <div class="col-sm-3 col-sm-offset-1">
                      <div class="form-group">
                        <input name="registration_std" type="registration_std" class="form-control" placeholder="STD Code">
                      </div>
                   
                    </div>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <input name="registration_telephone" type="text" class="form-control" placeholder="Telephone No.">
                      </div>
                    </div>
                   
                    <!-- <hr>--> 
                  </div>
                </div>
              <div class="wizard-footer">
                <div class="pull-right">
                  <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                  
                  <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Finish' onclick="register_user();" />
                  </a> </div>
                <div class="pull-left">
                  <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                </div>
                <div class="clearfix"></div>
              </div>
            </form>
          </div>
        </div>
        <!-- wizard container --> 
      </div>
    </div>
    <!-- end row --> 
  </div>
  <!--  big container --> 
  
</div>
</body>
<script src="<?php echo base_url();?>public/register/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>public/register/assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--   plugins   -->
<script src="<?php echo base_url();?>public/register/assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
<script src="<?php echo base_url();?>public/register/assets/js/jquery.validate.min.js"></script>

<!--  methods for manipulating the wizard and the validation -->
<script src="<?php echo base_url();?>public/register/assets/js/wizard.js"></script>
<script>
   var base_url = "<?php echo base_url();?>";
</script>
<script src="<?php echo base_url();?>public/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>public/js/master.js"></script>

</html>