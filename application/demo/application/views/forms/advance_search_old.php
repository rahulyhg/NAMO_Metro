<?php 
  $this->load->view('templates/header');
  $data = $this->session->userdata();
 ?><!-- breadcrumbs -->
<div class="services-top-breadcrumbs">
  <div class="container">
    <div class="services-top-breadcrumbs-right">
      <ul>
        <li><a href="index.html">Home</a> <i>/</i></li>
        <li>Advance Search</li>
      </ul>
    </div>
    <div class="services-top-breadcrumbs-left">
      <h3 style="color:#fc9b4b;">Advance Search</h3>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<!-- //breadcrumbs -->
<div class="single">
  <div class="container">
    <div class="col-md-8 single-left">
      <div id="parentHorizontalTab">
        <ul class="resp-tabs-list hor_1">
          <li>Advance Search</li>
          <li>Search By Name</li>
          <li>Search By Profile ID</li>
        </ul>
        <div class="resp-tabs-container hor_1">
          <div>
            <form action="<?php echo base_url('common/profile_advance_search');?>" method="GET">
              <div class="form-group col-md-6">
                <select class="form-control" name="TxtGender" id="TxtGender">
                  <option value="null">Looking For</option>
                  <option value="female">Female</option>
                  <option value="male">Male</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <select id="maritalstatus" name="maritalstatus" class="form-control">
                  <option value="null">Marital Status</option>
                  <option value="Unmarried">Unmarried</option>
                  <option value="Divorced">Divorced</option>
                  <option value="Widowed">Widowed</option>
                  <option value="Seperated">Seperated</option>
                </select>
              </div>
              
              <div class="form-group col-md-6">
                <select name="AgeFrom" id="AgeFrom" class="form-control">
                        <option value="null">Age From</option>
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
              <div class="form-group col-md-6">
                <select name="Ageto" id="Ageto" class="form-control">
                        <option value="null">Age To</option>
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
          
              <div class="form-group col-md-6">
                <select id="PartnerFromheight" name="PartnerFromheight" class="form-control">
                <option value="null">Partner From Height</option>
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
              </select>
              </div>
              <div class="form-group col-md-6">
                 <select id="PartnerToheight" name="PartnerToheight" class="form-control">
                 <option value="null">Partner To Height</option>
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
              </select>
              </div>
              
              
              
              
               <div class="form-group col-md-6">
                <select name="TxtEducationLevel" id="TxtEducationLevel" class="form-control">
                  <option value="null">Education</option>
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
                </select>
              </div>
              <div class="form-group col-md-6">
                 <select class="form-control" name="TxtMotherTongue" id="TxtMotherTongue">
                           <option value="null">Mother Tongue</option>
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
              <div class="form-group col-md-12">
                 <select id="city" name="city" class="form-control">
                 
            <option value="null">City</option>
                 <option value="Any">Any</option>
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
            </select>
              </div>
                <div class="form-group col-md-2">
                   <button name="search" value="Search" title="Search" class="btn btn-danger">Search</button>
              </div>
               <div class="form-group col-md-2">
                  <a href="<?php echo base_url();?>common/advance_search" class="btn btn-primary" style="color:white">Reset</a>
                </div>
            </form>
           
          </div> 
          <div>  
          <form action="<?php echo base_url('common/profile_advance_search');?>" method="GET">
              <div class="form-group col-md-12">
                <label>First Name</label>
                  <input type="text" name="fname" placeholder="First Name" class="form-control">
              </div>
              <div class="form-group col-md-12">
              <label>Last Name</label>
                  <input type="text" name="lname" placeholder="Last Name" class="form-control">
              </div>
               <div class="form-group col-md-2">
                   <button name="search" value="Search" title="Search" class="btn btn-danger">Search</button>
              </div>
               <div class="form-group col-md-2">
                   <a href="<?php echo base_url();?>common/advance_search" class="btn btn-primary" style="color:white">Reset</a>
              </div>
          </form>
          </div>
          <div>  
            <form action="<?php echo base_url('common/profile_advance_search');?>" method="GET">
              <div class="form-group col-md-8">
                  <input type="text" name="pid" placeholder="Profile Id" class="form-control">
              </div>
             
                <div class="form-group col-md-2">
                  <a href="advance-search-listing.html"> <button name="search" type="submit" value="Search" title="Search" class="btn btn-danger">Search</button></a>
              </div>
               <div class="form-group col-md-2">
                   <a href="<?php echo base_url();?>common/advance_search" class="btn btn-primary" style="color:white">Reset</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 single-right">
      <div class="related-posts">
        <h4>Related Matches</h4>
        <div class="related-post">
          <div class="related-post-left"> <a href="profile-single.html"><img src="<?php echo base_url();?>public/images/1.jpg" alt=" " class="img-responsive" /></a> </div>
          <div class="related-post-right">
            <h4><a href="profile-single.html">Titiksha Rajput</a></h4>
            <p>Age: 23 Years<br> <span>Place : Thane</span> </p>
            <p><a href="profile-single.html">Read More &nbsp;<i class="glyphicon glyphicon-play-circle"></i></a></p>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="related-post">
          <div class="related-post-left"> <a href="profile-single.html"><img src="<?php echo base_url();?>public/images/2.jpg" alt=" " class="img-responsive" /></a> </div>
          <div class="related-post-right">
            <h4><a href="profile-single.html">Swaragini Kale</a></h4>
            <p>Age: 23 Years<br> <span>Place : Thane</span> </p>
            <p><a href="profile-single.html">Read More &nbsp;<i class="glyphicon glyphicon-play-circle"></i></a></p>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="related-post">
          <div class="related-post-left"> <a href="profile-single.html"><img src="<?php echo base_url();?>public/images/6.jpg" alt=" " class="img-responsive" /></a> </div>
          <div class="related-post-right">
            <h4><a href="profile-single.html">Disha Paithane</a></h4>
            <p>Age: 23 Years<br> <span>Place : Thane</span> </p>
            <p><a href="profile-single.html">Read More &nbsp;<i class="glyphicon glyphicon-play-circle"></i></a></p>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>

<!-- footer -->
<div class="footer">
  <div class="container">
    <h2>Sign up for our newsletter</h2>
    <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros eget tellus 
      tristique bibendum. Donec rutrum sed sem quis venenatis.</p>
    <div class="footer-contact">
      <form action="#" method="post">
        <input type="text" name="Email" placeholder="Enter your email to update" required>
        <input type="submit" value="Subscribe">
      </form>
    </div>
    <div class="footer-grids">
            <div class="col-md-4 footer-grid">
          <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> GB.A.SONAWANE, 98/3446, </br><span  aria-hidden="true"></span> NEHRU NAGAR, KURLA (E)
                     </br>Mumbai - 400 024.</p>
          <p><a href="mailto:contact@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>saiprasadvivah@gmail.com</a></p>
          <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>022-65653536</p>
          <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>9833096623</p>
        </div>
      <div class="col-md-2 footer-grid">
          <ul>
            <li><a href="<?php echo base_url('common/about_us');?>">About Us</a></li>
            <li><a href="<?php echo base_url('common/show_success_stories');?>">Success Stories</a></li>
            <li><a href="<?php echo base_url('common/melawa_page/3');?>">Melawa</a></li>
            <li><a href="gallery.html">Membership</a></li>
            <li><a href="melawa.html">FAQ's</a></li>
            <li><a href="<?php echo base_url('common/show_pages/contact_us/3');?>">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-md-2 footer-grid">
          <ul>
            <li><a href="<?php echo base_url('common/show_privacy_you');?>">Privacy & You</a></li>
            <li><a href="<?php echo base_url('common/privacy_policy');?>">Privacy Policy</a></li>
            <li><a href="melawa.html">Terms Of Use</a></li>
            <li><a href="<?php echo base_url('common/security_tips');?>">Security Tips</a></li>
            <li><a href="<?php echo base_url('common/classifieds');?>">Classifieds</a></li>
                        
            <li><a href="<?php echo base_url('common/new_member');?>">New Member</a></li>
          </ul>
        </div>
      <div class="col-md-3 footer-grid">
        <div class="footer-grid1">
          <div class="footer-grid1-left"> <a href="melawa.html"><img src="<?php echo base_url();?>public/images/7.jpg" alt=" " class="img-responsive"></a> </div>
          <div class="footer-grid1-right"> <a href="melawa.html">eveniet ut molesti</a>
            <div class="m1"> <a href="melawa.html"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a> </div>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="footer-grid1">
          <div class="footer-grid1-left"> <a href="melawa.html"><img src="<?php echo base_url();?>public/images/6.jpg" alt=" " class="img-responsive"></a> </div>
          <div class="footer-grid1-right"> <a href="melawa.html">earum rerum tenet</a>
            <div class="m1"> <a href="melawa.html"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a> </div>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="footer-grid1">
          <div class="footer-grid1-left"> <a href="single.html"><img src="<?php echo base_url();?>public/images/8.jpg" alt=" " class="img-responsive"></a> </div>
          <div class="footer-grid1-right"> <a href="melawa.html">maiores alias cons</a>
            <div class="m1"> <a href="melawa.html"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a> </div>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
     <!--  <div class="col-md-3 footer-grid">
        <div class="footer-grid-instagram"> <a href="success-stories.html"><img src="<?php echo base_url();?>public/images/3.png" alt=" " class="img-responsive" /></a> </div>
        <div class="footer-grid-instagram"> <a href="success-stories.html"><img src="<?php echo base_url();?>public/images/1.png" alt=" " class="img-responsive" /></a> </div>
        <div class="footer-grid-instagram"> <a href="success-stories.html"><img src="<?php echo base_url();?>public/images/2.png" alt=" " class="img-responsive" /></a> </div>
        <div class="footer-grid-instagram"> <a href="success-stories.html"><img src="<?php echo base_url();?>public/images/5.png" alt=" " class="img-responsive" /></a> </div>
        <div class="clearfix"> </div>
      </div> -->
      <div class="clearfix"> </div>
    </div>
    <div class="footer-copy">
      <p>© 2016 Saiprasad Vivah. All rights reserved | Powered by <a href="#">Proxanttech</a></p>
    </div>
  </div>
</div>
<!-- //footer --> 
<!-- for bootstrap working --> 
<script src="<?php echo base_url();?>public/js/bootstrap.js"></script> 
<!-- //for bootstrap working --> 
<!-- here stars scrolling icon --> 
<script type="text/javascript">
    $(document).ready(function() {
      /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
        };
      */
                
      $().UItoTop({ easingType: 'easeOutQuart' });
                
      });
  </script> 
<!-- //here ends scrolling icon --> 
<!--tab-slider--> 
<script src="<?php echo base_url();?>public/js/easyResponsiveTabs.js"></script> 
<!--Plug-in Initialisation--> 
<script type="text/javascript">
    $(document).ready(function() {
        //Horizontal Tab
        $('#parentHorizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
 
    });
</script>
</body>
</html>