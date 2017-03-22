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

<script>
   var base_url = "<?php echo base_url();?>";
</script>
 <script src="<?php echo base_url();?>public/js/master.js"></script>
</head>

<body>
<div class="image-container set-full-height"> 
  <!--modal-pop-up--> 
  <!-- Trigger/Open The Modal --> 
  
  <!-- The Modal -->

  <div id="myModal" class="modal"> 
    
    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header"> <span class="close" data-dismiss="modal">&times</span>
        <h5>Insert OTP</h5>
      </div>
      <div class="modal-body">
        <div class="form-group">
        	 <br/>
          
        </div>
      </div>
      <div class="modal-footer">
       <!-- <p class="pull-right btn btn-verify"><a  type="submit">Verify</a></p>   button gives error-->
        <p class="pull-left"><a onclick="genarate_otp();" style="cursor: pointer;">Resend OTP ??</a></p>
      </div>
    </div>
  </div>
  <!--/modal-pop-up--> 
  <!--   Big container   -->
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2"> 
        
        <!--      Wizard container        -->
        <div class="wizard-container">
          <div class="card wizard-card ct-wizard-orange" id="wizardProfile">
          
            <form action="" method="">
              <div class="wizard-header">
                <h3> <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>public/images/logo-(1).png" class="img-responsive"></a></h3>
                <h3> <b>BUILD</b> YOUR PROFILE <br>
                  <small>This information will let us know more about you.</small> </h3>
              </div>
              <ul>
                <li><a href="#register" data-toggle="tab">New Registration</a></li>
                <li><a href="#account" data-toggle="tab">Basic Details</a></li>
                <li><a href="#contact" data-toggle="tab">Contact Details</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane" id="register">
                  <div class="row">
                    <h4 class="info-text"> Let's put login information</h4>
                    <div class="col-sm-8 col-sm-offset-2 alert_msg"></div>
                    <div class="col-sm-8 col-sm-offset-2">
                      <div class="form-group">
                        <label>Username <small>(required)</small></label>
                        <input name="registration_email" id="registration_email" type="text" class="form-control" placeholder="Enter Email id e.g. 'amit190@gmail.com'" onchange="isEmail()" required>
                      </div>
                    </div>
                    <div class="col-sm-8 col-sm-offset-2">
                      <div class="form-group">
                        <label>Password <small>(required)</small></label>
                        <input name="registration_password" id="registration_password" type="Password" class="form-control" placeholder="Password" required>
                      </div>
                      <!-- <div class="form-group">
                          <button name="submit" class="btn btn-danger">Verify Mobile No.</button>
                      </div>--> 
                    </div>
                    <div class="col-sm-8 col-sm-offset-2">
                      <div class="form-group">
                        <label>Mobile No. <small>(required)</small></label>
                        <input name="registration_mobile1" id="registration_mobile1" onkeyup="validate_mobile();" type="text" class="form-control" placeholder="Mobile No." maxlength="10" required>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="wizard-footer">
                <div class="pull-right">
                  <input  class='btn btn-fill btn-warning btn-wd btn-sm' id="" onclick="genarate_otp();" value='Verify Mobile No.' style="cursor: pointer;" readonly />
                </div>
                <div class="pull-left">
                  <a href="<?php echo base_url();?>"><input type="button" class="btn-fill btn-warning btn-wd btn-sm" value="Back">
                 </a>
                 </div>
                  <!-- <input  id="myBtn" type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' onclick="genarate_otp();" value='Verify Mobile No.' /> -->
                  
                  <!-- <a href="payment.html">
                  <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' />
                  </a> </div>--> 
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

<!--   plugins 	 -->
<script src="<?php echo base_url();?>public/register/assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="<?php echo base_url();?>public/register/assets/js/jquery.validate.min.js"></script>

<!--  methods for manipulating the wizard and the validation -->
<script src="<?php echo base_url();?>public/register/assets/js/wizard.js"></script>


<!--modal-pop-up-script-->
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</html>