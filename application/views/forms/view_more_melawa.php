<?php 
  $data['link']="index";
  $this->load->view('templates/header',$data);
  $registration_id = $this->session->userdata('registration_id');
 ?>
 <script type="text/javascript" src="<?php echo base_url()?>public/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>public/js/jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <style>
        
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>

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
        <h3  style="color:#fc9b4b;"><?php echo ((empty($registration_id)?"Melawa Details":"SPV".$registration_id))?></h3>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
<!-- //breadcrumbs -->

<!-- special-services -->
  <div class="special-services">
    <div class="container">
      <h3><span><?php echo $melawa_details[0]['sub_name'];?></span></h3>
      
            <div class="row">
            
              <div class="col-sm-10 col-sm-offset-1">
              <div class="col-sm-12 special-services-grids" > 
                <div class="special-services-grid">
                  <div class="col-sm-12 " >
  <div class="col-sm-9 col-sm-offset-1"><p class=""><?php echo $melawa_details[0]['sub_desc1'];?></p></div>                  

    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
        
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
        <?php foreach ($melawa_img as $key => $value):?>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="<?php echo base_url().'melawa/'.$value['melawa_img_src']?>" />
                
            </div>
          <?php endforeach; ?>
            <!-- <div data-p="225.00" style="display: none;">
                <img data-u="image" src="<?php echo base_url()?>melawa/purple.jpg" />
            </div>
            <div data-p="225.00" data-po="80% 55%" style="display: none;">
                <img data-u="image" src="<?php echo base_url()?>melawa/blue.jpg" />
            </div> -->
        
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
                  </div>
                </div>
                
                <div class="clearfix"> </div>
              </div>

              </div> 
              
            </div>
            <div class="row" style="padding-top: 2%">
              <div class="col-sm-2 col-sm-offset-5 col-xs-2 col-xs-offset-5 m2">
                    <a href="<?php echo base_url().'common/melawa_page/12'?>" class="more-sub hvr-bounce-to-bottom hvr-bounce-to-bottom1">Back</a>
                  </div>
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