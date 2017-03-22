$(document).ready(function() {
     // alert(222);
    $("#registration_birth_date").datepicker({
        format: 'dd-mm-yyyy'
    });
     $(".master_table").dataTable();

});

function display_alert(type,message)
{
    var alert_msg = '';
    if(type == 'err')
    {
        alert_msg += '<div class="alert alert-danger" role="alert">';
        alert_msg += '<span style="text-align:center"><strong>'+message+'</strong></span></div>';
    }
    else if(type == 'warn')
    {
        alert_msg += '<div class="alert alert-warning" role="alert">';
        alert_msg += '<span style="text-align:center"><strong>'+message+'</strong></span></div>';
    }
    else if(type == 'succ')
    {
        alert_msg += '<div class="alert alert-success" role="alert">';
        alert_msg += '<span style="text-align:center"><strong>'+message+'</strong></span></div>';
    }

    $(".alert_msg").html(alert_msg);

    setTimeout(function(){
        $(".alert_msg").html("");       
    },10000);
}
function display_alert1(type,message)
    {
        var alert_msg = '';

        if(type == 'err')
        {
            alert_msg += '<div class="alert alert-danger" role="alert" style = "background-color:#ff6666;padding:15px;">';
            alert_msg += '<span style="text-align:center;padding:20px;" ><strong>'+message+'</strong></span></div>';
        }
        else if(type == 'warn')
        {
            alert_msg += '<div class="alert alert-warning" role="alert" style = "background-color:#ff6666;padding:15px;">';
            alert_msg += '<span style="text-align:center;"><strong>'+message+'</strong></span></div>';
        }
        else if(type == 'succ')
        {
            alert_msg += '<div class="alert alert-success" role="alert" style="background-color:#ffa366;padding:15px;">';
            alert_msg += '<span style="text-align:center;"><strong>'+message+'</strong></span></div>';
        }

        $(".alert_msg1").html(alert_msg);

        setTimeout(function(){
            $(".alert_msg1").html("");       
        },9000);
}

function display_alert3(type,message)
{
    var alert_msg = '';

    if(type == 'err')
    {
        alert_msg += '<div class="alert alert-danger" style="background-color:red;" role="alert">';
        alert_msg += '<span style="text-align:center;color:white;"><strong>'+message+'</strong></span></div>';
    }
    else if(type == 'warn')
    {
        alert_msg += '<div class="alert alert-warning" style="background-color:orange;" role="alert">';
        alert_msg += '<span style="text-align:center;color:white;"><strong>'+message+'</strong></span></div>';
    }
    else if(type == 'succ')
    {
        alert_msg += '<div class="alert alert-success" style="background-color:green;" role="alert">';
        alert_msg += '<span style="text-align:center;color:white;"><strong>'+message+'</strong></span></div>';
    }

    $(".alert_msg3").html(alert_msg);

    setTimeout(function(){
        $(".alert_msg3").html("");       
    },3000);
}
///////////////////////////////////
function isEmail() {
    var email = $("#registration_email").val();
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var ans = regex.test(email);
      if(ans == false)
      {
         $("#registration_email").css({'border-color':'red'});
         $("#registration_email").val("");

          var msg = 'Please Enter Valid Email id.';
          display_alert('err',msg);

      }
}
/////////////////////
function validate_mobile()
{
    $("#registration_mobile1").val($("#registration_mobile1").val().replace(/[^\d]/ig, ''));
    $("#registration_mobile2").val($("#registration_mobile2").val().replace(/[^\d]/ig, ''));
    $("#registration_monthly_income").val($("#registration_monthly_income").val().replace(/[^\d]/ig, ''));    
    
}

function genarate_otp()
{
    var mob = $("#registration_mobile1").val();
    var email = $("#registration_email").val();
    var pass = $("#registration_password").val();
    // alert(123);
    var check = 1;

    if($("#registration_email").val() == "")
    {
        $("#registration_email").css({'border-color':'red'});
        check = 0;
    }
    else
    {
        $("#registration_email").css({'border-color':'#CCC'});
    }

    if($("#registration_password").val() == "")
    {
        $("#registration_password").css({'border-color':'red'});
        check = 0;
    }
    else
    {
        $("#registration_password").css({'border-color':'#CCC'});
    }

    if($("#registration_mobile1").val() == "")
    {
        $("#registration_mobile1").css({'border-color':'red'});
        check = 0;
    }
    else
    {
        $("#registration_mobile1").css({'border-color':'#CCC'});
    }

    if(check == 0)
    {
        var msg = 'All fields are compulsary';
        display_alert('err',msg);
    }
    else
    {
            var path = base_url+"common/genarate_otp/"+mob;
            $.ajax({
                type:'POST',
                url:path,
                data:"email="+email+"&pass="+pass,
                //dataType:'json',
                success:function(resp)
                {
                    //alert(resp);
                    if(resp != 1 && resp != 0)
                    {
                        var data = "";
                        data += '<form id="opt_form" action="'+base_url+'common/verify_otp" method="POST">';
                        // data += '<input name="resp" type="text" class="form-control signup_input" id="resp" value="'+resp+'"/>';
                        data += '<br/>';
                        data += '<input name="registration_email" type="hidden" class="form-control signup_input" id="registration_email" value="'+email+'"/>';
                        data += '<input name="registration_password" type="hidden" class="form-control signup_input" id="registration_password" value="'+pass+'"/>';
                        data += '<input name="registration_mobile1" type="hidden" class="form-control signup_input" id="registration_mobile1" value="'+mob+'"/>';
                        data += '<input name="user_otp" type="text" class="form-control signup_input" id="user_otp" value=""/>';
                        data += '<button type="submit" class="pull-right btn btn-verify" style="background-color:red; color:white; margin-top:1%;">Verify</button>';
                        data += '</form>'
                        
                        $(".modal-body").html(data);
                        $("#myModal").modal('show');
                    }
                    else if(resp == 0)
                    {
                         var msg = 'Email Id already exist! Please try again.';
                         display_alert('err',msg);  
                    }
                }   
            });
    }
}
function verify_otp()
{
    // alert(999999);
    var user_otp = $("#user_otp").val();
    var sys_otp = $("#sys_otp").val();
    // alert(otp);
    var check = 1;
    if($("#user_otp").val() == "")
    {
        $("#user_otp").css({'border-color':'red'});
        check = 0;
    }
    else
    {
        $("#user_otp").css({'border-color':'#CCC'});
    }
    if(check == 0)
    {
        var msg = 'OTP fields are compulsary';
        display_alert('err',msg);
    }
    else
    {
        //alert(444);
        if(user_otp == sys_otp)
        {
            $("#myModal").modal('hide');
            var path = base_url+"common/registration_step2";
            $.ajax({
                type:'POST',
                url:path,
                //dataType:'json',
                success:function(resp)
                { 
                    // alert(resp)
                }   
            });
        }
        else
        {
            alert("Invalid OTP..Please Enter Valid OTP")
        }
    }
}

/////////////////////
function register_user()
{
    var form_obj = document.getElementById("registration_form2");
    var form_data_obj = new FormData(form_obj);
    var form_data = $("#registration_form2").serialize();
    // alert(base_url);
    var path = base_url+"common/register_user";
    // alert(path);
    $.ajax({
        type:'POST',
        url:path,
        data:form_data_obj,
        contentType:false,
        processData:false,
        success:function(resp)
        {
            //alert(resp);
            if(resp != 0)
            {
                var redirect_path = base_url+"common/payment/"+resp;
                window.location.href = redirect_path;
                //var msg = 'Registration Successfull...!';
                //display_alert('succ',msg);

                setInterval(function(){
                    // var redirect_path = base_url+"common/payment/"+resp;
                    // window.location.href = redirect_path;
                }, 1000);
            }
            else if(resp == 0)
            {
                var msg = 'Database error! Please try again later.';
                display_alert('err',msg);   
            }
            else
            {
                var msg = 'Database error! Please try again later.';
                display_alert('warn',msg);  
            }
           
        }   
    });
       
}
///////////////////
function update_payment_status()
{
    var form_data = $("#payment_form").serialize();
    var path = base_url+"common/payment_update";
    // alert(registration_password);
    $.ajax({
        type:'POST',
        url:path,
        data:form_data,
        success:function(resp)
        {
            //alert(resp);
            if(resp == 1)
            {
                window.location.href = base_url;
                // var msg = 'Dear Candidate, Thanks for registering with Shree Sai Prasad Vivah, We have mailed important information, your registration is under screening and for more information click on about us for internet facility Thank You!!';
                // display_alert1('succ',msg);
                // setInterval(function(){
                    
                //     window.location.href = base_url;
                // }, 2000);
            }
            else if(resp == 2)
            {
                var msg = 'Please Select Payment Mode.';
                display_alert1('err',msg);   
            }
            else if(resp == 0)
            {
                var msg = 'Registration Successfully Completed. But Mail Sending Fail.!!';
                display_alert1('err',msg);   
            }
           
        }   
    });
}
/////////////

function login_action(reg_id,search_gender)
{
    //alert(reg_id,search_gender);
    if(reg_id)
    {
        var redirect_path = base_url+"common/view_profile/"+reg_id;
    }
    else
    {
        var redirect_path = base_url+"common/my_account";
    }
     var email = $("#registration_email").val();
     var check = 1;

    if($("#registration_email").val() == "")
    {
        $("#registration_email").css({'border-color':'red'});
        check = 0;
    }
    else
    {
        $("#registration_email").css({'border-color':'#CCC'});
    }

    if($("#registration_password").val() == "")
    {
        $("#registration_password").css({'border-color':'red'});
        check = 0;
    }
    else
    {
        $("#registration_password").css({'border-color':'#CCC'});
    }

    if($("#registration_mobile1").val() == "")
    {
        $("#registration_mobile1").css({'border-color':'red'});
        check = 0;
    }
    else
    {
        $("#registration_mobile1").css({'border-color':'#CCC'});
    }

    if(check == 0)
    {
        var msg = 'All fields are compulsary';
        display_alert('err',msg);
    }
    else
    {
    var form_data = $("#login_form").serialize();
    var path = base_url+"common/login_action/"+search_gender;
    // alert(registration_password);
    $.ajax({
        type:'POST',
        url:path,
        data:form_data,
        dataType:'json',
        success:function(resp)
        {
            //alert(resp);
            if(resp['status'] == 5)
            {
                var msg = 'Login Successfull...!';
                display_alert('succ',msg);
                setInterval(function(){
                    window.location.href = redirect_path;
                }, 1000);
            }
            else if(resp['status'] == 55)
            {
                var msg = 'Login Successfull...!';
                //display_alert('succ',msg);
                var data = "";
                data += '<form id="opt_form">';
                data += '<div class="col-sm-12 col-sm-offset-0 alert_msg1" style="color:white;"></div>';
                data += '<p> Dear ,</p>';
                data += '<br/>';
                data += '<p>Same gender Search Not Allowed,</p>';
                
                data += '<a href="'+base_url+'" class="pull-right btn btn-verify" style="background-color:red; color:white; margin-top:9%;">Close</a>';
                data += '</form>';
                $(".modal-title").html('Login Successfull...!');
                $(".modal-body").html(data);
                $("#myModal").modal('show');

                setInterval(function(){
                    window.location.href = base_url+'common/my_account';
                }, 10000);
            }
            else if(resp['status'] == 1)
            {
                //alert(123);
                 var msg = 'Login Successfull...!';
                display_alert('succ',msg);
                setInterval(function(){
                    window.location.href = redirect_path;
                }, 1000);
                var login_type = 1;
                //genarate_otp_for_login(resp['id'],redirect_path,login_type);
            }
            else if(resp['status'] == 11)
            {
                 var login_type = 11;
                
                var data = "";
                data += '<form id="opt_form">';
                data += '<div class="col-sm-12 col-sm-offset-0 alert_msg1" style="color:white;"></div>';
                data += '<p> Dear ,</p>';
                data += '<br/>';
                data += '<p>Same gender Search Not Allowed,</p>';
                
                data += '<a href="'+base_url+'" class="pull-right btn btn-verify" style="background-color:red; color:white; margin-top:9%;">Close</a>';
                data += '</form>';
                $(".modal-title").html('Login Successfull...!');
                $(".modal-body").html(data);
                $("#myModal").modal('show');

                setInterval(function(){
                    window.location.href = base_url+'common/my_account';
                }, 10000);
                // var path = base_url+'common/my_account';
                //genarate_otp_for_login(resp['id'],path,login_type);
            }
            else if(resp['status'] == 2)
            {
                var msg = 'Invalid User Name.';
                display_alert('err',msg);   
            }
            else if(resp['status'] == 3)
            {
                var msg = 'Wrong Password';
                display_alert('err',msg);   
            }
            else if(resp['status'] == 4)
            {
                var msg = 'Please Wait For Admin Approval';
                display_alert('err',msg);   
            }
            else if(resp['status'] == 6)
            {
                // var msg = 'Please Wait For Admin Approval';
                // display_alert('err',msg);   
                deactivation_reason(email);
            }

            else
            {
                var msg = 'Database error! Please try again later.';
                display_alert('warn',msg);  
            }
        }   
    });
}
       
}
////////
function deactivation_reason(email)
{
    // alert(email);
   var path=base_url+"common/get_user_by_email";
   $.ajax({
    type:'POST',
    url:path,
    data:"email="+email,
    dataType:'json',
    success:function(resp)
    {
        //alert(resp);
        var data = "";
        data += '<form id="opt_form" >';
        data += '<div class="col-sm-12 col-sm-offset-0 alert_msg1" style="color:white;"></div>';

        data += '<p> Dear '+resp[0]['registration_fname']+',</p>';
        data += '<br/>';
        data += '<p>Your Account is deactivated due to Following reason,</p>';
        data += '<p>'+resp[0]['registration_deactivation_msg']+'</p>';
       
        data += '<a href="'+base_url+'" class="pull-right btn btn-verify" style="background-color:red; color:white; margin-top:9%;">Close</a>';
        data += '</form>';
        $(".modal-title").html('Your Account is deactivated');
        $(".modal-body").html(data);
        $("#myModal").modal('show');
    }   
    });
}
function change_password()
{


    var check = 1;

            if($("#old_pass").val() == "")
            {
                $("#old_pass").css({'border-color':'red'});
                check = 0;
            }
            else
            {
                $("#old_pass").css({'border-color':'#CCC'});
            }

            if($("#new_pass").val() == "")
            {
                $("#new_pass").css({'border-color':'red'});
                check = 0;
            }
            else
            {
                $("#new_pass").css({'border-color':'#CCC'});
            }

            if($("#re_pass").val() == "")
            {
                $("#re_pass").css({'border-color':'red'});
                check = 0;
            }
            else
            {
                $("#re_pass").css({'border-color':'#CCC'});
            }

            if(check == 0)
            {
                var msg = 'All fields are compulsary';
                display_alert3('err',msg);
            }
            else
            {
               var data1=$("#change_pass").serialize();
               var registraion_email=$("#reg_email").val();
               var old_password = $("#old_pass").val();
               var new_pass=$("#new_pass").val();
               var re_pass=$("#re_pass").val();
               var path=base_url+"common/change_password";
               if(new_pass==re_pass)
               {
                   //alert("success");  
                   $.ajax({
                    type:'POST',
                    url:path,
                    data:data1,
                    success:function(resp)
                    {
                        //alert(resp);
                        if(resp == 1)
                            {
                                var msg = 'Update Successfull...!';
                                display_alert3('succ',msg);
                                window.location.reload();

                            }
                            else
                            {
                                var msg = 'Update Failed.';
                                display_alert3('err',msg);   
                            }
                    }   
                });
                    
                }                
                else
                 {
                    // alert("New Password Does Not Match With Rentered Pass");
                    var msg = 'New Password Does Not Match With Rentered Password.';
                                display_alert3('err',msg);  
                    }
    }
}
///////////////
function reset_password()
{
   // alert(123);
   
   var data1=$("#change_pass").serialize();
   //alert(data);
   var registraion_email=$("#reg_email").val();
   var old_password = $("#old_pass").val();
   var new_pass=$("#new_pass").val();
   var re_pass=$("#re_pass").val();
   var path=base_url+"common/change_password";
   if(new_pass==re_pass)
   {
       //alert("success");  
       $.ajax({
        type:'POST',
        url:path,
        data:data1,
        success:function(resp)
        {
             //alert(resp);
            if(resp == 1)
                {
                    var msg = 'Update Successfull...!';
                    display_alert3('succ',msg);
                    window.location.reload();

                }
                else(resp == 2)
                {
                    var msg = 'Update Failed.';
                    display_alert3('err',msg);   
                }
               
        }   
    });
        
    }                
    else
    {
        alert("failled");
    }
}

////////////////////////////

function update_basic_info()
{
    //var form_data=$("#basic_detail").serialize();
    var form_data = new FormData($("#basic_detail")[0]);
    var path=base_url+"common/update_basic_info";
       //alert("success");  
       $.ajax({
        type:'POST',
        cache: false,
        contentType: false,
        processData: false,
        url:path,
        data:form_data,
        success:function(resp)
        {
             //alert(resp);
            if(resp == 1)
                {
                    // alert(111);
                    var msg = 'Update Successfull...!';
                    display_alert3('succ',msg);
                    $("body, html").animate({
                'scrollTop':0
            },1000);
                    setInterval(function(){
                       window.location.reload();
                    }, 3000);
                }
                else if(resp == 2)
                {
                    // alert(222);
                    var msg = 'Update Failed.';
                    display_alert3('err',msg);   
                }
               
        }   
    });
        
   
}


$("document").ready(function(){

    $(".profile_image_upload").change(function() {
        //alert('changed!');
       update_basic_info();
        //$('form#basic_detail').submit();
    });
});



function physical_status()
{
    var form_data=$("#Physical_lifestyle").serialize();
    var path=base_url+"common/physical_status";
  
   
       //alert("success");  
       $.ajax({
        type:'POST',
        url:path,
        data:form_data,
        success:function(resp)
        {
            //alert(resp);
            if(resp == 1)
                {
                    // alert(111);
                    var msg = 'Update Successfull...!';
                    display_alert3('succ',msg);
                    $("body, html").animate({
                'scrollTop':0
            },1000);
                    setInterval(function(){
                       window.location.reload();
                    }, 3000);
                }
                else if(resp == 2)
                {
                    // alert(222);
                    var msg = 'Update Failed.';
                    display_alert3('err',msg);   
                }
               
        }   
    });
   }
        
   function astro_details1() 
   {
     //alert(123);  
       var form_data=$("#astro_details").serialize();
       var path=base_url+"common/astro_details";
  
   
       //alert("success");  
       $.ajax({
        type:'POST',
        url:path,
        data:form_data,
        success:function(resp)
        {
            //alert(resp);
            if(resp == 1)
                {
                    // alert(111);
                    var msg = 'Update Successfull...!';
                    display_alert3('succ',msg);
                    $("body, html").animate({
                'scrollTop':0
            },1000);
                    setInterval(function(){
                       window.location.reload();
                    }, 3000);
                }
                else if(resp == 2)
                {
                    // alert(222);
                    var msg = 'Update Failed.';
                    display_alert3('err',msg);   
                }
   }
});

}




function contact_details1() 
   {
     //alert(123);  
       var form_data=$("#contact_details").serialize();
       var path=base_url+"common/contact_details";
  
   
       //alert("success");  
       $.ajax({
        type:'POST',
        url:path,
        data:form_data,
        success:function(resp)
        {
            //alert(resp);
            if(resp == 1)
                {
                    // alert(111);
                    var msg = 'Update Successfull...!';
                    display_alert3('succ',msg);
                    $("body, html").animate({
                'scrollTop':0
            },1000);
                    setInterval(function(){
                       window.location.reload();
                    }, 3000);
                }
                else if(resp == 2)
                {
                    // alert(222);
                    var msg = 'Update Failed.';
                    display_alert3('err',msg);   
                }
   }
});

}




function career_details() 
   {
        //alert(123);
        var check = 1;
        var occupation = $("#registration_occupation").val();
        var occupation_detail = $("#registration_occupation_detail").val();
        if(occupation != "Not Specified")
        {
            if(occupation_detail=="")
            {
                check = 0;
                $("#registration_occupation_detail").css({'border-color':'red'});
            }
            else{
                check = 1;
            }
        }
        else
        {
            check  = 1;
        }
        if(check == 0)
        {
            var msg = 'Occuoation in Details is compulsary';
            display_alert('err',msg);
        }
        else
        {
            //alert(111);
            var form_data=$("#career_details").serialize();
            var path=base_url+"common/career_details";
      
           //alert("success");  
           $.ajax({
            type:'POST',
            url:path,
            data:form_data,
            success:function(resp)
            {
                //alert(resp);
                if(resp == 1)
                    {
                        var msg = 'Update Successfull...!';
                        display_alert3('succ',msg);
                        $("body, html").animate({
                    'scrollTop':0
                },1000);
                        setInterval(function(){
                           window.location.reload();
                        }, 3000);
                    }
                    else if(resp == 2)
                    {
                        // alert(222);
                        var msg = 'Update Failed.';
                        display_alert3('err',msg);   
                    }
            }
            });
        }

}
function family_details1() 
   {
      
       var form_data=$("#family_details").serialize();
       var path=base_url+"common/family_details";
       $.ajax({
        type:'POST',
        url:path,
        data:form_data,
        success:function(resp)
        {
            //alert(resp);
            if(resp == 1)
                {
                    // alert(111);
                    var msg = 'Update Successfull...!';
                    display_alert3('succ',msg);
                    $("body, html").animate({
                'scrollTop':0
            },1000);
                    setInterval(function(){
                       window.location.reload();
                    }, 3000);
                }
                else if(resp == 2)
                {
                    // alert(222);
                    var msg = 'Update Failed.';
                    display_alert3('err',msg);   
                }
   }
});

}

function partner_data() 
   {
      
       var form_data=$("#partner_preference").serialize();
       var path=base_url+"common/partner_preference";
       $.ajax({
        type:'POST',
        url:path,
        data:form_data,
        success:function(resp)
        {
            //alert(resp);
            if(resp == 1)
                {
                    // alert(111);
                    var msg = 'Update Successfull...!';
                    display_alert3('succ',msg);
                    $("body, html").animate({
                'scrollTop':0
            },1000);
                    setInterval(function(){
                       window.location.reload();
                    }, 3000);
                }
                else if(resp == 2)
                {
                    // alert(222);
                    var msg = 'Update Failed.';
                    display_alert3('err',msg);   
                }
   }
});
}
/////////


function contact_us_mail() 
   {
      
       var form_data=$("#contact_us").serialize();
       var path=base_url+"common/send_contact_us_email";
       $.ajax({
        type:'POST',
        url:path,
        data:form_data,
        success:function(resp)
        {
            // alert(resp);
            window.location.href = base_url;
            
        }
});

}


///////////
function forgot_pass()
{
     var check = 1;

    if($("#registration_email").val() == "")
    {
        $("#registration_email").css({'border-color':'red'});
        check = 0;
    }
    else
    {
        $("#registration_email").css({'border-color':'#CCC'});
    }
    if(check == 0)
    {
        var msg = 'All fields are compulsary';
        display_alert('err',msg);
    }
    else
    {
    var form_data = $("#forgot_pass_form").serialize();
    // alert(registration_email);
    var path = base_url+"common/forgot_pass_action";
    $.ajax({
        type:'POST',
        url:path,
        data:form_data,
        success:function(resp)
        {
            //alert(resp);
            if(resp != 0 && resp != 2)
                {
                    var msg = 'You will receive New password on your email, Please login and Reset your password...!';
                    display_alert('succ',msg);

                    setInterval(function(){
                        var path = base_url+"common/forgot_password_otp/"+resp;
                        window.location.href = path;
                    }, 1000);
                }
                else if(resp == 2)
                {
                    var msg = 'Invalid User Name.';
                    display_alert1('err',msg);   
                }
                else if(resp == 0)
                {
                    var msg = 'Mail Sending Fail.';
                    display_alert1('err',msg);   
                }
            }   
        });
    }
}
///////////////
//////////////
function forgot_pass_otp_confirm()
{
    var form_data = $("#forgot_pass_otp_form").serialize();
     //alert(form_data);
    var path = base_url+"common/forgot_pass_otp_confirm";

  $.ajax({
        type:'POST',
        url:path,
        data:form_data,
        success:function(resp)
        {
             //alert(resp);
             if(resp != 0)
             {
                setInterval(function(){
                        var path = base_url+"common/reset_password/"+resp;
                        window.location.href = path;
                    }, 1000);
             }
             else if(resp == 0)
            {
                var msg = 'Invalid OTP.';
                display_alert1('err',msg);   
            }
             //window.location.reload();
            
        }
    });
}
///////////////
function update_new_pass()
{
     var check = 1;
     var pass = $("#registration_pass").val();
     var repass = $("#registration_repass").val();

    if($("#registration_pass").val() == "")
    {
        $("#registration_pass").css({'border-color':'red'});
        check = 0;
    }
    else
    {
        $("#registration_pass").css({'border-color':'#CCC'});
    }
    if($("#registration_repass").val() == "")
    {
        $("#registration_repass").css({'border-color':'red'});
        check = 0;
    }
    else
    {
        $("#registration_repass").css({'border-color':'#CCC'});
    }
    if(check == 0)
    {
        var msg = 'All fields are compulsary';
        display_alert('err',msg);
    }
    else
    {
        if(pass == repass)
        {
            //alert(123);
        var form_data = $("#update_new_pass_form").serialize();
        // alert(registration_email);
        var path = base_url+"common/update_new_pass_form";
        $.ajax({
            type:'POST',
            url:path,
            data:form_data,
            success:function(resp)
            {
                //alert(resp);
                if(resp==1)
                    {
                        var msg = 'Password Updated...Please Login With New Password!';
                        display_alert1('succ',msg);

                        setInterval(function(){
                            var path = base_url;
                            window.location.href = path;
                        }, 1000);
                    }
                    else
                    {
                        var msg = 'Somthing goes Wrong.';
                        display_alert1('err',msg);   
                    }
                }   
            });
        }
        else
        {
            var msg = 'Password And Confirm Password Does Not match.';
            display_alert1('err',msg);   
        }
    }
}
///////////////////////////
function upload_album_photo()
{
    var imgVal = $('#uploadImage').val(); 
    if(imgVal=='') 
    { 
        alert("Please Select Photo"); 
        return false; 

    } 
    else
    {
        var form_obj = document.getElementById("upload_photo");
        var form_data_obj = new FormData(form_obj);

        var path=base_url+"common/upload_photo_album";

          $.ajax({
                type:'POST',
                url:path,
                 data:form_data_obj,
                contentType:false,
                processData:false,
                success:function(resp)
                {
                     //alert(123); 
                     window.location.reload();
                    
                }
            });
    }
}

function send_message_to_partner()
{
    var id = $("#message_to").val();
     var check = 1;

    if($("#message_subject").val() == "")
    {
        $("#message_subject").css({'border-color':'red'});
        check = 0;
    }
    else
    {
        $("#message_subject").css({'border-color':'#CCC'});
    }
    if(check == 0)
    {
        var msg = 'Please Enter Message.';
        display_alert('err',msg);
    }
    else
    {
    var form_data = $("#opt_form").serialize();
     //alert(form_data);
    var path = base_url+"common/send_message_to_partner";
    $.ajax({
        type:'POST',
        url:path,
        data:form_data,
        success:function(resp)
        {
            //alert(resp);
            if(resp == 1)
                {
                    var msg = 'Message Send Successfully...!';
                    display_alert1('succ',msg);

                   // setInterval(function(){
                        var path = base_url+"common/view_profile/"+id;
                        window.location.href = path;
                    //}, 1000);
                }
                else
                {
                    var msg = 'Database error! Please try again later.';
                    display_alert1('warn',msg);  
                }
            }   
        });
    }
}
///////////////////
    function delete_profile_pic(id)
    {
        // alert(id);
        var ans = confirm("Are you sure? You want to delete Profile Picture.");

        if(ans == true)
        {
            var update_path = base_url+"common/delete_profile_pic/"+id;
            $.ajax({
                type:'POST',
                url:update_path,
                success:function(resp)
                {
                    //alert(resp);

                        window.location.reload();
                },
                error:function(resp)
                {
                    console.log(resp);
                }
            });
        }
    }
    ///////////////
     function remove_pic_from_album(id)
    {
        //alert(id);
        var ans = confirm("Are you sure? You want to delete Profile Picture.");
        if(ans == true)
        {
            var update_path = base_url+"common/remove_pic_from_album/"+id;
            $.ajax({
                type:'POST',
                url:update_path,
                success:function(resp)
                {
                       //alert(resp);
                        window.location.reload();
                },
                error:function(resp)
                {
                    console.log(resp);
                }
            });
        }
    }

function update_album_pic_status(id,value)
    {
       
       // var status= $("#album_photo_visibility").val();
       
       // var id= $("#album_user_id").val();
         // alert(value);
         // alert(id);
       
            var update_path = base_url+"common/update_album_pic_status/"+value+"/"+id;
            $.ajax({
                type:'POST',
                url:update_path,
                success:function(resp)
                {
                    alert(resp);

                        window.location.reload();
                },
                error:function(resp)
                {
                    console.log(resp);
                }
            });
        
    }
function update_rgister_profile_pic_status(id,value)
    {
    var status= $("#register_photo_visibility1").val();
    var update_path = base_url+"common/update_rgister_profile_pic_status/"+value+"/"+id;
    $.ajax({
        type:'POST',
        url:update_path,
        success:function(resp)
        {
            //alert(resp);
            window.location.reload();
        },
        error:function(resp)
        {
            console.log(resp);
        }
    });
        
    }
    ///////////////////
function verify_otp_for_login(redirect_path,login_type)
{
    // alert(redirect_path);
    //alert(id);
    var user_otp = $("#user_otp").val();
    var id = $("#registration_id").val();
    // alert(user_otp);
    var check = 1;
    if($("#user_otp").val() == "")
    {
        $("#user_otp").css({'border-color':'red'});
        check = 0;
    }
    else
    {
        $("#user_otp").css({'border-color':'#CCC'});
    }
    if(check == 0)
    {
        var msg = 'OTP fields are compulsary';
        display_alert('err',msg);
    }
    else
    {

            var path = base_url+"common/verify_otp_for_login/"+id+"/"+user_otp;
            $.ajax({
                type:'POST',
                url:path,
                //dataType:'json',
                success:function(resp)
                { 
                    //alert(resp);
                    if(resp == 1)
                    {
                        if(login_type == 11)
                        {
                            var msg = 'Login Successfull...!';
                            //display_alert('succ',msg);

                            var data = "";
                            data += '<form id="opt_form" >';
                            data += '<div class="col-sm-12 col-sm-offset-0 alert_msg1" style="color:white;"></div>';
                            data += '<p> Dear ,</p>';
                            data += '<p>Same gender Search Not Allowed.!!</p>';
                            
                            data += '<a href="'+base_url+'" class="pull-right btn btn-verify" style="background-color:red; color:white; margin-top:9%;">Close</a>';
                            data += '</form>';
                            $(".modal-title").html('Login Successfull...!');
                            $(".modal-body").html(data);
                            $("#myModal").modal('show');

                            setInterval(function(){
                                window.location.href = base_url+'common/my_account';
                            }, 10000);
                        }
                        else{
                            var msg = 'Login Successfully...!';
                            display_alert1('succ',msg);

                            setInterval(function(){
                                window.location.href = redirect_path;
                            }, 1000);
                        }
                    }
                    else
                    {
                        var msg = 'Wrong OTP.. Please try again.!!';
                        display_alert1('err',msg);  
                    }
                }   
            });
    }
}
/////////////////////
 function  hide_children_select()
   {    
      var marital_status=$("#maritalstatus").val();
      if (marital_status=="Unmarried")
       {
         document.getElementById("registration_children").disabled = true;
         document.getElementById("registration_childrenstatus").disabled = true;
       }
       else
       {
         document.getElementById("registration_children").disabled = false;
         document.getElementById("registration_childrenstatus").disabled = false;
       }
   }
/////////////////
function hide_children_status()
{
    var marital_status=$("#registration_maritial_status").val();
      if (marital_status=="Unmarried")
       {
         document.getElementById("registration_children").disabled = true;
         document.getElementById("registration_childrenstatus").disabled = true;
       }
       else
       {
         document.getElementById("registration_children").disabled = false;
         document.getElementById("registration_childrenstatus").disabled = false;
       }
}
function validate_weight()
{
    $("#registration_weight").val($("#registration_weight").val().replace(/[^\d.]/ig, ''));
}
function validate_fname() {
    var fname = $("#registration_fname").val();
    var regex =/^[a-zA-Z]+$/;
    var ans = regex.test(fname);
      if(ans == false)
      {
         $("#registration_fname").css({'border-color':'red'});
         $("#registration_fname").val("");
      }
}
function validate_lname() {
    var fname = $("#registration_lname").val();
    var regex =/^[a-zA-Z]+$/;
    var ans = regex.test(fname);
      if(ans == false)
      {
         $("#registration_lname").css({'border-color':'red'});
         $("#registration_lname").val("");
      }
}
function validate_contact_us_name() 
{
    var fname = $("#contact_name").val();
    var regex =/^[a-zA-Z]+$/;
    var ans = regex.test(fname);
      if(ans == false)
      {
         $("#contact_name").css({'border-color':'red'});
         $("#contact_name").val("");

          var msg = 'Please Enter Only Characters.';
          display_alert('err',msg);

      }
}
function validate_contact_us_mobile()
{
   
     var contact_name = $("#contact_phone").val();
    var regex =/^[0-9]+$/;
    var ans = regex.test(contact_name);
      if(ans == false)
      {
         $("#contact_phone").css({'border-color':'red'});
         $("#contact_phone").val("");

          var msg = 'Please Enter Only Numbers.';
          display_alert('err',msg);

      }
}
function contact_us_form()
    {
    var a=document.forms["contact_us"]["name"].value;
    var b=document.forms["contact_us"]["phone"].value;
    var c=document.forms["contact_us"]["registration_email"].value;
    var d=document.forms["contact_us"]["subject"].value;
    if (a==null || a=="",b==null || b=="",c==null || c=="",d==null || d=="")
      {
        $("#registration_email").css({'border-color':'red'});
        $("#contact_message").css({'border-color':'red'});

          var msg = 'Please Fill All Required Field.';
          display_alert('err',msg);
      // alert("Please Fill All Required Field");
       return false;
      }
    }
////////
function std_telephone()
{
   
    var std_code = $("#std_code").val();
    var telephone_no=$("#telephone_no").val();
    var alternate_no=$("#alternate_no").val();
    var regex =/^[0-9]+$/;
    var ans = regex.test(std_code);
    var ans1=regex.test(telephone_no);
    var ans2=regex.test(alternate_no);
      if(ans == false || ans1==false || ans2==false)
      {
         $("#std_code").css({'border-color':'red'});
         $("#std_code").val("");
         $("#telephone_no").css({'border-color':'red'});
         $("#telephone_no").val("");
         $("#alternate_no").css({'border-color':'red'});
         $("#alternate_no").val("");


          var msg = 'Please Enter Only Numbers.';
          display_alert('err',msg);

      }
}
//////////////////////////
function pay_offline()
{
    if ($('#termsCondition').is(":checked"))
    {
    var ans = confirm("Are you sure? You want to pay offline.");

    if(ans == true)
    {
    var form_data = $("#pay_offline").serialize();
    var path = base_url+"common/payment_update";
    // alert(registration_password);
    $.ajax({
        type:'POST',
        url:path,
        data:form_data,
        success:function(resp)
        {
            //alert(resp);
            if(resp == 1)
            {
                window.location.href = base_url+"common/payment_success";
                // var msg = 'Dear Candidate, Thanks for registering with Shree Sai Prasad Vivah, We have mailed important information, your registration is under screening and for more information click on about us for internet facility Thank You!!';
                // display_alert1('succ',msg);
                // setInterval(function(){
                    
                //     window.location.href = base_url;
                // }, 2000);
            }
            else if(resp == 2)
            {
                var msg = 'Please Select Payment Mode.';
                display_alert1('err',msg);   
            }
            else if(resp == 0)
            {
                var msg = 'Registration Successfully Completed. But Mail Sending Fail.!!';
                display_alert1('err',msg);   
            }
           
        }   
    });
}
}else
    {
        alert("Please Accept Term & termsCondition");
        $("#terms").css({'textDecorationColor':'red'});
    }
}


function already_paid()
{
    if ($('#termsCondition').is(":checked"))
    {
    var ans = confirm("Are you sure? You already paid Registration amount.");

    if(ans == true)
    {
    var form_data = $("#already_paid").serialize();
    var path = base_url+"common/payment_update";
    // alert(registration_password);
    $.ajax({
        type:'POST',
        url:path,
        data:form_data,
        success:function(resp)
        {
            //alert(resp);
            if(resp == 1)
            {
                window.location.href = base_url+"common/payment_success";
                // var msg = 'Dear Candidate, Thanks for registering with Shree Sai Prasad Vivah, We have mailed important information, your registration is under screening and for more information click on about us for internet facility Thank You!!';
                // display_alert1('succ',msg);
                // setInterval(function(){
                    
                //     window.location.href = base_url;
                // }, 2000);
            }
            else if(resp == 2)
            {
                var msg = 'Please Select Payment Mode.';
                display_alert1('err',msg);   
            }
            else if(resp == 0)
            {
                var msg = 'Registration Successfully Completed. But Mail Sending Fail.!!';
                display_alert1('err',msg);   
            }
           
        }   
    });

    }
}else
    {
        alert("Please Accept Term & termsCondition");
        $("#terms").css({'textDecorationColor':'red'});
    }
}


function payu()
{
    if ($('#termsCondition').is(":checked"))
    {
    //alert(111);
    var ans = confirm("Are you sure? You want to pay Online.");

    if(ans == true)
    {

        var form_data = $("#registration_id").val();
        var path = base_url+"common/payment_pyu";
         // alert(form_data);
        console.log("inside function");
        console.log(form_data);
            var url = path;
        var form = $('<form action="' + url + '" method="post">' +
          '<input type="text" name="reg_id" value="' + form_data + '" />' +
          '</form>');
        $('body').append(form);
        form.submit();
    }

}else
    {
        alert("Please Accept Term & termsCondition");
        $("#terms").css({'textDecorationColor':'red'});
    }
}
