<?php 
	$data12['link']="index";
	// print_r($data);exit;
	$this->load->view('templates/header',$data12);
	$registration_id = $this->session->userdata('registration_id');
	$registration_gender = $this->session->userdata('registration_gender');
	// print_r($registration_gender);exit;
 ?>
<!-- banner -->
	<div class=""><!--class="banner"-->
		<div class="container-fluid">
        	<div class="col-md-12">
            	<p> <marquee direction="left"><?php echo (empty($news)?"":$news[0]['content']) ?></marquee></p>
            </div>
            
 				<div class="col-md-2">
                <div class="banner-left-left">
                	<img src="<?php echo base_url();?>public/images/Untitled-3.png" class="img-responsive">
                    <!--<img src="<?php echo base_url();?>public/images/google.png" class="img-responsive">-->
                </div>
                
 			</div>
			
				<div class="col-md-6">
         <div class="banner-left">
                <h3>the easiest way to find your dream Partner</h3>
                <p>Launching Soon Mobile App </p>
				<img src="<?php echo base_url();?>public/images/google.png" class="img-responsive"> 
</div>
 			</div>
            
            <div class="col-md-4">
			<div class="banner-right">
				<h3><span>Looking For</span></h3>
				<div class="reservation">
				<form action="<?php echo base_url('common/profile_search');?>" method="GET">
					<div class="section_room">
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
						<select id="registration_gender" name="registration_gender" class="frm-field required">
							<!-- <option value="null">Gender</option> -->
						<?php if(!empty($registration_id)): ?>
							<?php if($registration_gender == 'female'): ?>
								<option value="male">Male</option>
							<?php else: ?>
								<option value="female">Female</option>
							<?php endif; ?>
						<?php else: ?>
							<option value="female">Female</option>
							<option value="male">Male</option>
						<?php endif; ?>
							
						</select>
					</div>	
					
                    <div class="section_room">
						 <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
						<select id="registration_religion" name="registration_religion" onchange="" class="frm-field required">
							<!--<option value="null">Type of property</option>-->
							<!-- <option value="null">Religion</option>          -->
							<option value="Hindu">Hindu</option>
						</select> 
					</div>
					<div class="reservation-grids">
						<div class="reservation-grid-left">
							<div class="section_room">
								<span class="glyphicon glyphicon-ok"> </span>
								<select id="registration_age_from" name="registration_age_from" class="frm-field required">
									<!-- <option value="null">Age From</option> -->
									<option value="18" >18</option>
	                                <option value="19" >19</option>
	                                <option value="20" >20</option>
	                                <option value="21" >21</option>
	                                <option value="22" >22</option>
	                                <option value="23" >23</option>
	                                <option value="24" >24</option>
	                                <option value="25" >25</option>
	                                <option value="26" >26</option>
	                                <option value="27" >27</option>
	                                <option value="28" >28</option>
	                                <option value="29" >29</option>
	                                <option value="30" >30</option>
	                                <option value="31" >31</option>
	                                <option value="32" >32</option>
	                                <option value="33" >33</option>
	                                <option value="34" >34</option>
	                                <option value="35" >35</option>
	                                <option value="36" >36</option>
	                                <option value="37" >37</option>
	                                <option value="38" >38</option>
	                                <option value="39" >39</option>
	                                <option value="40" >40</option>
		                            <option value="41" >41</option>
		                            <option value="42" >42</option>
		                            <option value="43" >43</option>
		                            <option value="44" >44</option>
		                            <option value="45" >45</option>
								</select>
							</div>
						</div>
						<div class="reservation-grid-right">
							<div class="section_room">
								<span class="glyphicon glyphicon-ok"></span>
								<select id="registration_age_to" name="registration_age_to" class="frm-field required">
									<!-- <option value="null">Age To</option> -->
									<option value="18" >18</option>
	                                <option value="19" >19</option>
	                                <option value="20" >20</option>
	                                <option value="21" >21</option>
	                                <option value="22" >22</option>
	                                <option value="23" >23</option>
	                                <option value="24" >24</option>
	                                <option value="25" >25</option>
	                                <option value="26" >26</option>
	                                <option value="27" >27</option>
	                                <option value="28" >28</option>
	                                <option value="29" >29</option>
	                                <option value="30" >30</option>
	                                <option value="31" >31</option>
	                                <option value="32" >32</option>
	                                <option value="33" >33</option>
	                                <option value="34" >34</option>
	                                <option value="35" >35</option>
	                                <option value="36" >36</option>
	                                <option value="37" >37</option>
	                                <option value="38" >38</option>
	                                <option value="39" >39</option>
	                                <option value="40" >40</option>
		                            <option value="41" >41</option>
		                            <option value="42" >42</option>
		                            <option value="43" >43</option>
		                            <option value="44" >44</option>
		                            <option value="45" >45</option>
								</select>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
                    <div class="section_room">
						<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
						<select id="registration_mother_tongue" name="registration_mother_tongue" class="frm-field required">
							<!--<option value="null">Type of property</option>-->
							<!-- <option value="null">Mother Tounge</option>        -->  
							<option value="Marathi" >Marathi</option>
			                <option value="Arunachali" >Arunachali</option>
			                <option value="Assamese" >Assamese</option>
			                <option value="Awadhi" >Awadhi</option>
			                <option value="Bengali" >Bengali</option>
			                <option value="Bhojpuri" >Bhojpuri</option>
			                <option value="Brij" >Brij</option>
			                <option value="Bihari" >Bihari</option>
			                <option value="Chatisgarhi" >Chatisgarhi</option>
			                <option value="Dogri" >Dogri</option>
			                <option value="English" >English</option>
			                <option value="French" >French</option>
			                <option value="Garhwali" >Garhwali</option>
			                <option value="Garo" >Garo</option>
			                <option value="Gujarati" >Gujarati</option>
			                <option value="Haryanvi" >Haryanvi</option>
			                <option value="Himachali/Pahari" >Himachali/Pahari</option>
			                <option value="Hindi"  >Hindi</option>
			                <option value="Kanauji"  >Kanauji</option>
			                <option value="Kannada" >Kannada</option>
			                <option value="Kashmiri" >Kashmiri</option>
			                <option value="Khandesi" >Khandesi</option>
			                <option value="Khasi" >Khasi</option>
			                <option value="Konkani" >Konkani</option>
			                <option value="Koshali" >Koshali</option>
			                <option value="Kumoani" >Kumoani</option>
			                <option value="Kutchi"  >Kutchi</option>  
						</select> 
					</div>
                    <div class="section_room">
						 <span class="glyphicon glyphicon-flag" aria-hidden="true"></span>
						<select id="registration_country" name="registration_country" class="frm-field required">
							<!--<option value="null">Type of property</option>-->
							<!-- <option value="null">Country</option> -->
							<option value="India" >India</option>
                            <option value="United States of America" >United States of America</option>
                            <option value="United Arab Emirates" >United Arab Emirates</option>
                            <option value="Malaysia" >Malaysia</option>
                            <option value="United Kingdom" >United Kingdom</option>
                            <option value="Australia" >Australia</option>
                            <option value="Saudi Arabia" >Saudi Arabia</option>
                            <option value="Canada" >Canada</option>
                            <option value="Singapore" >Singapore</option>
                            <option value="Kuwait" >Kuwait</option>
                            <option value="Afghanistan" >Afghanistan</option>
                            <option value="Albania" >Albania</option>
                            <option value="Algeria" >Algeria</option>
                            <option value="American Samoa" >American Samoa</option>
                            <option value="Andorra" >Andorra</option>
                            <option value="Angola" >Angola</option>
                            <option value="Anguilla" >Anguilla</option>
                            <option value="Antarctica" >Antarctica</option>
                            <option value="Antigua and Barbuda" >Antigua and Barbuda</option>
                            <option value="Argentina" >Argentina</option>
                            <option value="Armenia" >Armenia</option>
                            <option value="Aruba" >Aruba</option>
                            <option value="Australia" >Australia</option>
                            <option value="Austria" >Austria</option>
                            <option value="Azerbaijan" >Azerbaijan</option>
                            <option value="Bahamas" >Bahamas</option>
                            <option value="Bahrain" >Bahrain</option>
                            <option value="Bangladesh" >Bangladesh</option>
                            <option value="Barbados" >Barbados</option>
                            <option value="Belarus" >Belarus</option>
                            <option value="Belgium" >Belgium</option>
                            <option value="Belize" >Belize</option>
                            <option value="Benin" >Benin</option>
                            <option value="Bermuda" >Bermuda</option>
                            <option value="Bhutan" >Bhutan</option>
                            <option value="Brazil" >Brazil</option>
                            <option value="Svalbard and Jan Mayen Islands" >Svalbard and Jan Mayen Islands</option>
                            <option value="Swaziland" >Swaziland</option>
                            <option value="Sweden" >Sweden</option>
                            <option value="Switzerland" >Switzerland</option>
                            <option value="Uganda" >Uganda</option>
                            <option value="Ukraine" >Ukraine</option>
                            <option value="United Arab Emirates" >United Arab Emirates</option>
                            <option value="United Kingdom" >United Kingdom</option>
                            <option value="United States of America" >United States of America</option>
                            <option value="Uruguay" >Uruguay</option>
                            <option value="Uzbekistan" >Uzbekistan</option>
                            <option value="Vanuatu" >Vanuatu</option>
                            <option value="Vatican City" >Vatican City</option>
                            <option value="Venezuela" >Venezuela</option>
                            <option value="Vietnam" >Vietnam</option>
                            <option value="Virgin Islands" >Virgin Islands</option>
                            <option value="Wallis and Futuna Islands" >Wallis and Futuna Islands</option>
                            <option value="Western Sahara" >Western Sahara</option>
                            <option value="Yemen" >Yemen</option>
                            <option value="Yugoslavia (Former)" >Yugoslavia (Former)</option>
                            <option value="Zaire" >Zaire</option>
                            <option value="Zambia" >Zambia</option>
                            <option value="Zimbabwe" >Zimbabwe</option>
                            <option value="Ashmore and Cartier Islands" >Ashmore and Cartier Islands</option>
                            <option value="Solomon Islands" >Solomon Islands</option>
                            <option value="Bassas da India" >Bassas da India</option>
                            <option value="Congo (Brazzaville)" >Congo (Brazzaville)</option>
                            <option value="Coral Sea Islands" >Coral Sea Islands</option>
                            <option value="Europa Island" >Europa Island</option>
                            <option value="Guernsey" >Guernsey</option>
                            <option value="Glorioso Islands" >Glorioso Islands</option>
                            <option value="Gaza Strip" >Gaza Strip</option>
                            <option value="Isle of Man" >Isle of Man</option>
                            <option value="Clipperton Island" >Clipperton Island</option>
                            <option value="Cote DIvoire" >Cote DIvoire</option>
                            <option value="Jersey" >Jersey</option>
                            <option value="Jan Mayen" >Jan Mayen</option>
                            <option value="Juan de Nova Island" >Juan de Nova Island</option>
                            <option value="Macedonia" >Macedonia</option>
                            <option value="Bodies of water" >Bodies of water</option>
                            <option value="Paracel Islands" >Paracel Islands</option>
                            <option value="Spratly Islands" >Spratly Islands</option>
                            <option value="Saint Pierre and Miquelon" >Saint Pierre and Miquelon</option>
                            <option value="Saint Helena" >Saint Helena</option>
                            <option value="Svalbard" >Svalbard</option>
                            <option value="Tromelin Island" >Tromelin Island</option>
                            <option value="Undersea features" >Undersea features</option>
                            <option value="Saint Vincent &amp; the Grenadines">Saint Vincent &amp; the Grenadines</option>
                            <option value="West Bank" >West Bank</option>
                            <option value="Wallis and Futuna" >Wallis and Futuna</option>
                            <option value="Serbia and Montenegro" >Serbia and Montenegro</option>
						</select> 
					</div>
                    <div class="section_room">
				
						<div class="clearfix"> </div>
					</div> 
					<div class="keywords">
						
							<!--<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
							<input type="text" name="Key Words" placeholder="Key Words" required>-->
							<input type="submit" value="Search">
						
					</div>
					</form>
				</div>
			</div>
            </div>
            
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //banner -->
<!-- about -->
	<div class="about">
		<div class="container">
			<h3><span>New Members</span></h3>
			<!--<p class="autem">Who we are</p>-->
			<div class="about-grids">
				<p class="delectus">Let's find out your perfect match and speak your heart out , search thousand of profiles which is 100 % mobile verified.
					</p>
                    <?php if(!empty($registration_id)): ?>
                    <?php 	
                    	$cnt=1;				
						foreach($img as $value):
						  
					  		if($value['registration_photo']!="defaultUser.gif"  && $registration_gender!=$value['registration_gender'] && $cnt<7):
							
					?><a href="<?php echo base_url().'common/profile_single/'.$value['registration_id']?>">
						<div class="col-md-2 about-grid">
							<figure>
								<img src="<?php echo base_url().'register/'.$value['registration_photo']?>" alt=" " class="img-responsive" />
								<figcaption>
									<h4><?php echo $value['registration_highest_qualification']?></h4>
									<p>Age   :<?php echo $value['registration_age'] ?></p>
									<p>Place : <?php echo $value['registration_city'] ?></p>
									<!--<ul class="social-icons">
										<li><a href="#" class="icon icon-border facebook"></a></li>
										<li><a href="#" class="icon icon-border twitter"></a></li>
										<li><a href="#" class="icon icon-border instagram"></a></li>
									</ul>-->
								</figcaption>
							</figure>
                            
						</div></a>
                        <?php 
                        $cnt++;
                        endif;
						endforeach;
						else:
							?>
						<?php 	
                    	$cnt=1;				
						foreach($img as $value):
						  
					  		if($value['registration_photo']!="defaultUser.gif"  && $cnt<7):
							
					?><a href="<?php echo base_url().'common/profile_single/'.$value['registration_id']?>">
						<div class="col-md-2 about-grid">
							<figure>
								<img src="<?php echo base_url().'register/'.$value['registration_photo']?>" alt=" " class="img-responsive" />
								<figcaption>
									<h4><?php echo $value['registration_highest_qualification']?></h4>
									<p>Age   :<?php echo $value['registration_age'] ?></p>
									<p>Place : <?php echo $value['registration_city'] ?></p>
									<!--<ul class="social-icons">
										<li><a href="#" class="icon icon-border facebook"></a></li>
										<li><a href="#" class="icon icon-border twitter"></a></li>
										<li><a href="#" class="icon icon-border instagram"></a></li>
									</ul>-->
								</figcaption>
							</figure>
                            
						</div></a>
                        <?php 
                        $cnt++;
                        endif;
						endforeach;endif;
							?>
				<div class="clearfix"> </div>
			</div>
			<center>
				<div class="row" style="margin-top:2%;">
				        <div class="col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">
							<a href="<?php echo base_url('common/new_member');?>"><button class="btn btn-danger" style="width: 100%; border-radius:0px;">View More</button></a>
							</div>
				</div>
			</center>
			<!--<div class="about-grids-bottom">
				<div class="col-md-4 about-grids-bottom-grid">
					<h4>About Us</h4>
					<p>SHREE SAI PRASAD VIVAH is working since 1993.we started manually from our home (Kurla).
					(ONLY FOR HINDU-CHAMBHAR)
					Internet Facility:
					We will publish your information along with photographs on this website.
					</p>
				</div>
				<div class="col-md-4 about-grids-bottom-grid">
					<h4>Who We Are</h4>
					<p>SAI PRASAD VIVAH SANSTHA is working since 1993. We started manually from our home (Kurla). Founder President Mr.Baburao Sonawane, Matrimonial Trusted by Millions of Hindu-Chambhar Cross the World, Most visited Matrimonial Site</p>
				</div>
				<div class="col-md-4 about-grids-bottom-grid">
					<h4>Why We Do This</h4>
					<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
						voluptatibus maiores alias consequatur aut perferendis doloribus asperiores 
						repellat.</p>
				</div>
				<div class="clearfix"> </div>
			</div>-->
            	<div class="about-grids-bottom">
				<div class="col-md-12 about-grids-bottom-grid">
						<h3><span>About Us</span></h3>
					<p class="delectus">Sai Prasad Vivah is Most Trusted & Successful Matrimony Portal in Hindu-Chambhar Community,SPV started working manually in 1993 from home and pioneered online in 2010.The service was found with simeple objective to help people find happiness.
					</p>
				</div>
			<!--	<div class="col-md-4 about-grids-bottom-grid">
					<h4>Who We Are</h4>
					<p>SAI PRASAD VIVAH SANSTHA is working since 1993. We started manually from our home (Kurla). Founder President Mr.Baburao Sonawane, Matrimonial Trusted by Millions of Hindu-Chambhar Cross the World, Most visited Matrimonial Site</p>
				</div>
				<div class="col-md-4 about-grids-bottom-grid">
					<h4>Why We Do This</h4>
					<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
						voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
						repellat.</p>
				</div>-->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->
<!-- about-bottom -->
	<div class="about-bottom">
		<div class="container">
			<div class="about-bottom-grid">
				<span> </span>
			</div>
			<h3>Let's come and find the one you want to spend the rest of your life with.</h3>
			<p><i>Saiprasad Vivah</i></p>
		</div>
	</div>
<!-- //about-bottom -->
<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h3><span>Matched By Saiprasad Vivah</span></h3>
			<p class="autem">Sai Prasad Vivah Has Created A Community-Renowned Service That Has Touched Over Thousand Of People</p>
			<div class="testimonials-grids">
				<div class="col-md-6 testimonials-grid-left">
					<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="wmuSliderWrapper">
						<?php 
								$display_cnt = 1;
								$count = count($success_stories);
								error_reporting(E_ALL);
								for($i=0;$i<$count;$i+=2) { 
									if($display_cnt<4):

						?>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="testimonials-grid-left-grid">
										<div class="testimonials-grid-left1">
											<img src="<?php echo base_url().'successstories/'.$success_stories[$i]['sub_image_above'];?>"  alt=" " class=""  />
										</div>
										<div class="testimonials-grid-left2">
											<h5><?php echo $success_stories[$i]['short_desc']; ?></h5>
											<p><?php echo $success_stories[$i]['sub_name']; ?> weds <?php echo $success_stories[$i]['sub_name2']; ?></p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="testimonials-grid-left-grid">
										<div class="testimonials-grid-left1">
											<img src="<?php echo base_url().'successstories/'.$success_stories[$i+1]['sub_image_above'];?>" alt=" "  />
										</div>
										<div class="testimonials-grid-left2">
											
											<h5><?php echo $success_stories[$i+1]['short_desc']; ?></h5>
											<p><?php echo $success_stories[$i+1]['sub_name']; ?> weds <?php echo $success_stories[$i+1]['sub_name2']; ?></p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</article>
							<?php $display_cnt++; endif; } ?>
						</div>
					</div>
						<script src="public/js/jquery.wmuSlider.js"></script> 
						<script>
							$('.example1').wmuSlider();         
						</script> 
				</div>
				<div class="col-md-6 testimonials-grid-right">
					<h4>Upcoming Events</h4>
                      <div class="events-grid2">
                    	<!-- <div class="events-grid2-left">
                        	<span>10</span><br> October &nbsp;2016
                        </div> -->
                        <div class="events-grid2-right">
                        	<!--<p class="heading"><a href="#">oribus asperiores</a></p>-->
                        	<p><a href="#">"Dear All members we would like to inform you that we are celebrating silver jubilee year in 2017 on successful completion of 25 years!".</a></p>
                        </div>
                    </div>
                    
                    <!--<div class="events-grid2">
                    	<div class="events-grid2-left">
                        	<span>02</span><br> November &nbsp;2016
                        </div>
                        <div class="events-grid2-right">
                        	<p class="heading"><a href="#">oribus asperiores</a></p>
                        	<p><a href="#">At vero eos et accusamus et iusto odio dignissimos ducimus qui 
							blanditiis praesentium voluptatum deleniti atque.</a></p>
                        </div>
                    </div>-->
                    <!--<div class="events-grid2">
                    	<div class="events-grid2-left">
                        	<span>30</span><br> December &nbsp;2016
                        </div>
                        <div class="events-grid2-right">
                        	<p class="heading"><a href="#">oribus asperiores</a></p>
                        	<p><a href="#">At vero eos et accusamus et iusto odio dignissimos ducimus qui 
							blanditiis praesentium voluptatum deleniti atque.</a></p>
                        </div>
                    </div>-->
                  
					<!--<h5>Selling</h5>
					<div class="progress-bar1 blue stripes"> <span style="width: 100%"></span> </div>
					<h5>Buying</h5>
					<div class="progress-bar1 orange shine"> <span style="width: 100%"></span> </div>
					<h5>Dealers</h5>
					<div class="progress-bar1 green glow" id="soundlevel"> <span style="width: 100%"></span> </div>
					  
					<script>	$(document).ready(function(){ 
							$('.quarter').click(function(){
								$(this).parent().prev().children('span').css('width','50%');
								});
							$('.half').click(function(){
								$(this).parent().prev().children('span').css('width','55%');
								});
							$('.three-quarters').click(function(){
								$(this).parent().prev().children('span').css('width','75%');
								});
							$('.full').click(function(){
								$(this).parent().prev().children('span').css('width','100%');
								});			
						});
							var intervalID = setInterval(function(){getData();}, 100);
							var volumeLevel = 40;
							function getData(){
							  if (volumeLevel==40)
								{
								  volumeLevel=60
								}else if (volumeLevel==60)
								{
								  volumeLevel=40
								}
								$("#soundlevel").children('span').css('width', Math.floor(Math.random() * 100)+'%');
							}
							//@ sourceURL=pen.js
					</script>-->
				</div>
                
                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 testimonials-grid-right">
                        <h4 class="text-center download-top-heading">Launching Soon Mobile App</h4>
                          <form action="" method="post">
					<input type="text" class="download-app"   name="mailid" placeholder="Enter your Mobile No." style="cursor:not-allowed;" readonly required>
					<input type="submit" class="download-app-btn" value="Send App Link" style="cursor:not-allowed;">
				</form>
                <img src="<?php echo base_url();?>public/images/google.png" alt="" class="download-left" />    
                    </div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //testimonials -->
<!-- events -->
	 <div class="events">
		<div class="container">
			<h3><span>Events</span></h3>
			<p class="autem">Saiprasad Vivah Held Community Melawa Every Year And Help Peoples To Find Thier Best Macthes.</p>
			<div class="events-grids">
				<div class="col-md-4 events-grid">
					<div class="events-grid1 hvr-sweep-to-top">
						<a href="<?php echo base_url('common/melawa_page/3');?>"><img src="<?php echo base_url();?>public/images/91.jpg" alt=" " class="img-responsive" /></a>
						<h4><a href="<?php echo base_url('common/melawa_page/3');?>">11th Melawa</a></h4>
						<ul>
							<!-- <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Admin</a></li> -->
							<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>  2015</li>
						</ul>
						<p>The objective of this melawa is to facilitate a quicker process of finding a perfect match of a partner. </p>
					</div>
				</div>
				<div class="col-md-4 events-grid">
					<div class="events-grid1 hvr-sweep-to-top">
						<a href="<?php echo base_url('common/melawa_page/3');?>"><img src="<?php echo base_url();?>public/images/81.jpg" alt=" " class="img-responsive" /></a>
						<h4><a href="<?php echo base_url('common/melawa_page/3');?>">10th Melawa</a></h4>
						<ul>
							<!-- <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Admin</a></li> -->
							<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 2014</li>
						</ul>
						<p>Melawa creates an opportunity to interact with the suitable Vadhu-var Melawa participants and their parents.</p>
					</div>
				</div>
				<div class="col-md-4 events-grid">
					<div class="events-grid1 hvr-sweep-to-top">
						<a href="<?php echo base_url('common/melawa_page/3');?>"><img src="<?php echo base_url();?>public/images/7.jpg" alt=" " class="img-responsive" /></a>
						<h4><a href="<?php echo base_url('common/melawa_page/3');?>">9th Melawa</a></h4>
						<ul>
							<!-- <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Admin</a></li> -->
							<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 2013</li>
						</ul>
						<p>Melawa Helps you to find the perfect match on easy and fast way where vadhi-Var can interact with each other.</p>
					</div>
				</div>
                
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> 
<!-- //events -->


<!--************ bPOPUP******************-->
<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery.bpopup.min.js"></script>
<style>
#popup, .bMulti {
    background-color: #FFF;
    border-radius: 10px 10px 10px 10px;
    box-shadow: 0 0 0px 0px #999;
    color: #111;
    display: none;
    padding: 0px;
}

#popup .logo {
    color: #2B91AF;
    font: bold 325% 'Petrona',sans;
}

.button.b-close, .button.bClose {
    border-radius: 7px 7px 7px 7px;
    box-shadow: none;
    font: bold 131% sans-serif;
    padding: 0 6px 2px;
    position: absolute;
    right: 1px;
    top: 1px;
}

.button {
    border-radius: 10px;
    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.3);
    color: #FFF;
    cursor: pointer;
    display: inline-block;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
}
</style>
<div id="popup" style="display: none;">
    <span class="button b-close"><span style="color: black;">X</span></span>
    <img src="<?php echo base_url();?>public/images/SP_Banner.png" class="img-responsive">
</div>


<script type="text/javascript">
setTimeout(function(){ $('#popup').bPopup(); }, 2000);
	$(document).ready(function() {
		//$('#popup').bPopup();
		
		$('.b-close').click(function(){
			// $('#popup').hide();
		})
	});
</script>


<!--************End bPOPUP*********************-->

<?php 
	$this->load->view('templates/footer');
?>