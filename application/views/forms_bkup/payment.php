<?php 
// print_r($msg);exit;
// if(isset($msg))
// {
//     print_r($msg);exit;
// }
// else
// {
//     //echo 111;exit;
// }

 ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Saiprasad Vivah | Payment Status</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <link href="<?php echo base_url();?>public/register/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>public/register/assets/css/gsdk-base.css" rel="stylesheet" />
    
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
</head>

<body>
<div class="image-container set-full-height" style="background-image: url(public/register/assets/img/wizard-black.jpg); background-position:top;  background-size:cover;">
    
     <!--   Big container   -->
    <div class="container">
        <div class="row">
        
        <div class="col-sm-8 col-sm-offset-2">
           
            <!--      Wizard container        -->   
            <div class="wizard-container"> 
                
                <div class="card wizard-card ct-wizard-orange" id="wizardProfile">
                    
                <!--        You can switch "ct-wizard-orange"  with one of the next bright colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"             -->
                
                        <div class="wizard-header">
                       <h3> <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>public/images/logo-(1).png" class="img-responsive"></a></h3>
                            <h3>
                               <b>PAYMENT</b> STATUS <br>
                            </h3>
                        </div>

                        <ul>
                             <li><a href="#payment" data-toggle="tab">Payment Status</a></li>
                         </ul>
                         <style type="text/css">
                              input[type=radio]
                                         {
                                              width   : 28px;
                                              margin  : 0;
                                              padding : 0;
                                              opacity : 0;
                                         }
                                h6{
                                    text-align: center;
                                }
                         </style>
                        
                        <div class="tab-content">
                             <div class="col-sm-8 col-sm-offset-2 alert_msg"></div>
                            <div class="tab-pane" id="payment">
                            <?php if(!empty($msg)): ?>
                                <h4 class="info-text">Sorry Your Registration is Done But Transaction is Failed. Please try again or Contact us.!</h4>
                            <?php else: ?>
                                <h4 class="info-text">Congradulations !!  You Have Done Initial Stage Successfully !</h4>
                            <?php endif; ?>
                                <div class="col-sm-12 col-sm-offset-0 alert_msg1"></div>
                                <div class="row">
                                   <input type="hidden" name="registration_id" class="form-control pay_mode" value="<?php echo $data[0]['registration_id'];?>"/>

                                    <div class="col-sm-10 col-sm-offset-1">
                                    <form id="payment_form">
                                        <div class="col-sm-4">
                                            <div class="" rel="tooltip" title="Pay Online">
                                               <a onclick="payu();"> <p tabindex="0" class="circle-credit"></p> 
                                            <input type="hidden" id="registration_id" name="registration_id" value="<?php echo $data[0]['registration_id'];?>" />
                                                <h6>Pay Online</h6></a>
                                                <!-- <h6><input onclick="payu();" type= "button" value="PayOnline"></h6> -->
                                            </div>
                                        </div>
                                        </form>
                                        <form id="pay_offline">
                                        <div class="col-sm-4">
                                            <div class="" rel="tooltip" title="Pay Offline">
                                            <input type="hidden" name="registration_id" class="form-control pay_mode" value="<?php echo $data[0]['registration_id'];?>"/>
                                            <a onclick="pay_offline();">
                                                <p tabindex="0" class="circle-off"><input type="radio" name="registration_pay_mode" class="form-control pay_mode" value="1" style="width: 10em; height: 10em;"/></p>
                                                <h6>Pay Offline</h6></a>
                                            </div>
                                        </div>
                                        </form>
                                        <form id="already_paid">
                                        <div class="col-sm-4">
                                            <div class="" rel="tooltip" title="Already Paid">
                                            <input type="hidden" name="registration_id" class="form-control pay_mode" value="<?php echo $data[0]['registration_id'];?>"/>
                                            <a onclick="already_paid();">
                                                <p tabindex="0" class="circle-check"><input type="radio" name="registration_pay_mode" class="form-control pay_mode" value="2" style="width: 10em; height: 10em;"/></p>
                                                <h6>Already Paid</h6></a>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="wizard-footer">
                            <div class="pull-right">
                               <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='submit' onclick="update_payment_status()" />
                            </div>
                            
                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                            </div>
                            <div class="clearfix"></div>
                        </div> -->
                </div>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    </div> <!--  big container -->
 
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
<script src="<?php echo base_url();?>public/js/master.js"></script>
</html>