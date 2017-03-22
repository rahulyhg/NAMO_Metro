<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('mlogin');
        $this->load->model('mmaster');
        $this->load->library('session');
		$this->load->library('cart');
        $this->load->library('email');
		$this->load->library('upload');
        //$this->load->helper('url');
        $this->load->helper('form');
    } 	
	public function index()
	{
		$result['success_stories']=$this->mmaster->success_stories();
		//print_r($result['success_stories']);exit;
		$result['news']= $this->mmaster->get_latest_news();
		$result['img']= $this->mmaster->show_image();
		//print_r($result['news']);exit;
		$this->load->view('forms/index',$result);
	}
	public function send_sms($mob,$msg)
    {
    	//print_r($msg);exit;
    	$url = "http://bulkpush.mytoday.com/BulkSms/SingleMsgApi?";
	    $post_string = "feedid=361581&username=9833262277&password=gmjwp&To=$mob&Text=$msg";
	    //print_r($url);print_r($post_string);exit;
	    $curl_connection = curl_init($url);
	    curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string); 
	    $result = curl_exec($curl_connection); //run the whole process and return the response
	    // $ans = simplexml_load_file($result);
		// print_r($ans);exit;
	    curl_close($curl_connection);  //close the curl handle 
        //return 1;
        /*********************************/
       
    }
	public function login()
	{
		$this->load->view('forms/login');
	}
	public function register()
	{
		$this->load->view('forms/registration');
	}
	public function genarate_otp($mob)
	{
		// print_r($mob);exit;
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		$data = array('registration_email' => $email);
		$result = $this->mmaster->get_cnt("registration",$data);
		if($result == 0)
		{
			$otp = rand(1000,9999);
			//print_r($otp);
			$msg = "Dear%20Member,%20Your%20OTP%20is%20$otp.%20Please%20enter%20your%20OTP%20to%20verify%20your%20mobile%20no.";

			$ans = $this->send_sms($mob,$msg);

			// print_r($ans);exit;

			$session_data = array(
								'email' => $email,
								'pass' => $pass,
								'mobile' => $mob,
								'otp' => $otp
								);
			$this->session->set_userdata($session_data);
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
	/////////////
	public function verify_otp()
	{
		$user_mob = $this->input->post('registration_mobile1');
		$user_otp = $this->input->post('user_otp');
		$mobile = $this->session->userdata('mobile');
		$otp = $this->session->userdata('otp');
		if($user_mob == $mobile && $user_otp == $otp)
		{
			$this->load->view('forms/registration-step2');
		}
		else
		{
			redirect(base_url('common/register'));
		}
	}
	///////////////
	public function register_user()
	{
		// print_r(1122);exit;
		$form_data = $this->input->post();

		$registration_birth_date=$form_data['registration_birth_date'];
        $dob=explode("-",$registration_birth_date); 
        $curMonth = date("m");
        $curDay = date("j");
        $curYear = date("Y");
        $age = $curYear - $dob[2]; 
        //print_r($age);exit;
        if($curMonth<$dob[1] || ($curMonth==$dob[1] && $curDay<$dob[2])) 
                $age--; 
            // print_r($age);exit;
         $form_data['registration_age']=$age;
         
		// print_r($form_data);exit;
		$img_data = $_FILES;
		// print_r($img_data);exit;
		$config['upload_path'] = 'register/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png|svg';
		// $config['max_size']	= '2048';
		// $config['max_width']  = '2000';
		// $config['max_height']  = '2000';

		$this->upload->initialize($config);

		if($img_data['userfile']['error'] == 0){

				$filename = time().'_'.$img_data['userfile']['name'];
				$filename = str_replace(" ","_",$filename);
				$filename = str_replace("-","_",$filename);
				
				$config['file_name'] = $filename;
				$this->upload->initialize($config);

				if (!$this->upload->do_upload()){
					if($form_data['registration_gender'] == 'male')
					{
						$filename = "male.png";
					}
					else if($form_data['registration_gender'] == 'female')
					{
						$filename = "female.jpg";
					}
					else
					{
						$filename = "defaultUser.gif";
					}
					
				}
			}
			else{

				if($form_data['registration_gender'] == 'male')
					{
						$filename = "male.png";
					}
					else if($form_data['registration_gender'] == 'female')
					{
						$filename = "female.jpg";
					}
					else
					{
						$filename = "defaultUser.gif";
					}
			}
 		$form_data['registration_photo'] = $filename;
		$form_data['registration_date'] = time();
		$form_data['registration_birth_date'] = date("Y-m-d",strtotime($form_data['registration_birth_date']));
		//print_r($form_data);exit;
		$result = $this->mmaster->data_insert_into_table("registration",$form_data);
		if(!empty($result))
		{
			echo $result;
		}
		else
		{
			echo 0;
		}
	}
	////////////////////////
	public function payment($registration_id, $msg="")
	{
		$record['data'] = $this->mmaster->get_single_reg_data($registration_id);
		$record['msg'] = $msg;
		// print_r($record['msg']); exit;
		$this->load->view('forms/payment',$record);
	}
	////////////////////////////////
	public function payment_pyu()
	{
		error_reporting(E_ALL);
		$registration_id = $_POST['reg_id'];

        $record['data'] = $this->mmaster->get_single_reg_data($registration_id);
        //echo  $record['data'][0]['registration_fname'];
        //    echo "<pre>";
        //print_r($record['data']); exit;
		// Merchant key here as provided by Payu
		// $MERCHANT_KEY = "gtKFFx";
		$MERCHANT_KEY = "GUlTCr";
                if(!isset($record['data']) || empty($record['data'])) {
                       echo "No data available contact admin";
                }
                
                 $txn_id = uniqid($registration_id, true);
				 $record['posted']['key'] = $MERCHANT_KEY;
				 $record['posted']['txnid'] = $txn_id;
				 $record['posted']['amount'] = 3000.00;
				 $record['posted']['firstname'] = $record['data'][0]['registration_fname'];
				 $record['posted']['email'] = $record['data'][0]['registration_email'];
				 $record['posted']['phone'] = $record['data'][0]['registration_mobile1'];
				 $record['posted']['productinfo'] = "registration fees";
				 $record['posted']['surl'] = base_url()."common/success";
				 $record['posted']['furl'] = base_url()."common/fail";
                //print_r($record['posted']);
		$this->load->view('forms/payment_payu',$record);
	}
	///////////////////
	public function success()
	{
		//print_r($_POST);exit;
		if(isset($_POST["status"]) && $_POST["status"] =="success") 
		{
			  // echo"<pre>";print_r($_POST);exit;
			$email = $_POST["email"];
			$payu_id = $_POST["mihpayid"];
			$status = $_POST["status"];
			$datetime = $_POST["addedon"];
			$reg_email = array('registration_email' => $email);
			$update_data = array('registration_payment_status'=>$status,
								'registration_payuid' => $payu_id,
								'registration_payment_date' => $datetime
				);
         	$ans = $this->mmaster->update_table($reg_email,$update_data,'registration');
         	if(!empty($ans))
         	{
         		$data = array();
         		$reg_id = $this->mmaster->get_user($email);
         		// print_r($reg_id[0]['registration_id']);exit;
         		$data['pay_reg_id'] = $reg_id[0]['registration_id'];
         		$data['pay_payu_id'] = $payu_id;
         		$data['pay_status'] = $status;
         		$data['pay_email'] = $email;
         		$data['pay_fname'] = $_POST["firstname"];
         		$data['pay_name_on_card'] = $_POST["name_on_card"];
         		$data['pay_net_amount_debit'] = $_POST["net_amount_debit"];
         		$data['pay_bank_ref_num'] = $_POST["bank_ref_num"];
         		$data['pay_date_time'] = $datetime;
         		//print_r($data);exit;
         		$res = $this->mmaster->data_insert_into_table('payment_log',$data);
         		if(!empty($res))
         		{
         			$this->send_registrion_mail($reg_id[0]['registration_id']);
         			header('Location: http://localhost/sai/common/payment_success/'.$payu_id);

         		}

         	}
		}
		else
		{
			//print_r($_POST);exit;
		}
	}
	///////////////////
	public function payment_success($trans_id)
	{
		//print_r($trans_id);exit;
		$result['trans_id'] = $trans_id;
        $this->load->view('forms/payment_success',$result);
		//$this->index();
	}

	///////////////////
	public function fail()
	{
		//print_r($_POST);exit;
		if(isset($_POST["status"]) && $_POST["status"] =="failure" && $_POST["status"] =="pending") 
		{
			  // echo"<pre>";print_r($_POST);exit;
			$email = $_POST["email"];
			$payu_id = $_POST["mihpayid"];
			$status = $_POST["status"];
			$datetime = $_POST["addedon"];
			$reg_email = array('registration_email' => $email);
			$update_data = array('registration_payment_status'=>$status,
								'registration_payuid' => $payu_id,
								'registration_payment_date' => $datetime
				);
         	$ans = $this->mmaster->update_table($reg_email,$update_data,'registration');
         	if(!empty($ans))
         	{
         		$data = array();
         		$reg_id = $this->mmaster->get_user($email);
         		// print_r($reg_id[0]['registration_id']);exit;
         		$data['pay_reg_id'] = $reg_id[0]['registration_id'];
         		$data['pay_payu_id'] = $payu_id;
         		$data['pay_status'] = $status;
         		$data['pay_email'] = $email;
         		$data['pay_fname'] = $_POST["firstname"];
         		$data['pay_name_on_card'] = $_POST["name_on_card"];
         		$data['pay_net_amount_debit'] = $_POST["net_amount_debit"];
         		$data['pay_bank_ref_num'] = $_POST["bank_ref_num"];
         		$data['pay_date_time'] = $datetime;
         		//print_r($data);exit;
         		$res = $this->mmaster->data_insert_into_table('payment_log',$data);
         		if(!empty($res))
         		{
         			$id = $reg_id[0]['registration_id'];
         			$msg = "Error";
         			$this->send_registrion_mail($id);
         			header('Location: http://localhost/sai/common/payment/'.$id.'/'.$msg);
         		}
         	}
		}
		else
		{
			//print_r($_POST);exit;
		}
		//$this->load->view('forms/payu_fail');
	}
	///////////////////
	public function payment_update()
	{
		$form_data = $this->input->post();
		if(!isset($form_data['registration_pay_mode']))
		{
			echo 2;  //payment mode not selected;
		}
		else
		{
			// print_r($form_data);exit;
			$ans = $this->mmaster->update_payment($form_data);
			//echo $ans;
			$reply = $this->send_registrion_mail($form_data['registration_id']);
			echo $reply;
		}
	}
	
	//////////////////
	public function send_registrion_mail($registration_id)
	{
		// print_r($registration_id);exit;
		$record= $this->mmaster->get_single_reg_data($registration_id);
		//print_r($record);exit;
		$email = $record[0]['registration_email'];
		$password = $record[0]['registration_password'];
			//$form_data = $this->input->post();
	        // $from = $form_data['registration_email'];
	        // $name = $form_data['name'];
	        // $mobile = $form_data['phone'];
	        // $subject = $form_data['subject'];
	        // $message = $form_data['message'];
	          // print_r($form_data);exit;
	        $config['mailtype'] = 'html';
	    	$this->email->initialize($config);

			$email_body ='<div style="background:#fff; border: 1px solid #b3b3b3; height:auto; width:650;">';
			$email_body .='<div style="margin-left:10px; margin-top: 10px; margin-bottom: 0px;">';
			$email_body .='<img src="'.base_url().'public/images/logo-(1).png" style="align:center; height:150px width: 200px;" />';
			$email_body .='</div>';
			$email_body .='<br/>';		
			$email_body .='<div>';
			$email_body .='<div style="background:#d9d9d9; padding:30px">';
			$email_body .= "<b>Hello Sir/Madam,</b>";
			$email_body .='<br/>';
			$email_body .='Following are the your Login details for Sai Prasad Vivah Sanstha';
			$email_body .='<br/>';
	        $email_body .='<br/>';
	        $email_body .= "<span><b>Login Details:</b></span>";
	        $email_body .='<br/>';
	        $email_body .= "<span><b>Login :</b></span>".$email;
	        $email_body .='<br/>';
	        $email_body .= "<span><b>Password :</b></span>".$password;
	        $email_body .='<br/>';
	        $email_body .='<br/>';
	        $email_body .= "<span><b style='font-size:20px'>Email :  saiprasadvivah@gmail.com</b></span>";
	        $email_body .='<br/>';
	        $email_body .='<br/>';
	        $email_body .='<ul>';
            $email_body .='<li><b style="color:red;">Internet Facility:</b><br/>We will publish your information along with photographs on this website.Registration only At Kurla Office as Following Office Time: Sat 4:00pm to 8:00pm & Sun 9:00am to 12:00pm. Pay Rs.3000/- Till Marriage Fixed (One time only)</li>';

            $email_body .='<li>';
            $email_body .='<b style="color:red;">';
            $email_body .=' Document required:</b>';
            $email_body .='<br/>';
          	$email_body .='1 copies of the Biodata(copy should be signed personally)<br/>1 colored photographs(post-card size only)<br/>Any one copy of photo ID proof like Pan Card,Election Card,Passport etc(Scan copy should be send by email to saiprasadvivah@gmail.com)</li>';
            $email_body .='<li>
                               <b style="color:red;">Terms & Conditions:</b><br/>
								Fees are not refundable.
								Marriage bureau is not responsible for the given information by the candidates/their parents/Relatives. You are requested to verify the authenticity of the candidates.
								Registration happens at our kurla offices only.
								All rights reserved.
								Any Query about Website/Internet Facility please contact
								E-mail: saiprasadvivah@gmail.com OR Tel: 9702970803, 9833096623
                              </li>';
            $email_body.='</ul>';
            $email_body.='<p>
                           <b style="color:red;">If you are already paid RS.3000/- then please ignored this message.</b>
                           </p>';
            $email_body.='<footer>';
            $email_body.='<b>Thanks & Regards,</b>';
            $email_body.='<br/>';
			$email_body.='SAI PRASAD VIVAH.NET<br/>';
			$email_body.='Mr. BABURAO A SONAWANE<br/>';
			$email_body.='Conact no.: 9702970803<br/>';
			$email_body.='ADD- 98/3446, Nehru Nagar,Kurla<br/>';
			$email_body.='Mumbai 400024.';
            $email_body.='</footer>';          
	        $email_body .='</div>';
	        $email_body .='</div>';
	        $email_body .='</div>';
	      
	        //print_r($email_body);exit();
			$this->load->library('email');
			$this->email->from("saiprasadvivah@noreply.net");
			//print_r($email_body);exit();
			$this->email->to($email);
			
			$this->email->subject("Registration From Saiprasadvivah");
			$this->email->message($email_body);
			if(!$this->email->send())
			{
				echo 0;
			}
			else
			{
			echo 1;
			}
	}

	//////////////////
	public function login_action($search_gender=""){
			 $form_data = $this->input->post();
			$this->form_validation->set_rules('registration_email', 'Username', 'required');
			$this->form_validation->set_rules('registration_password', 'Password', 'required');
 
			if ($this->form_validation->run() == FALSE){

					$this->load->view('forms/login');
            }
            else{
                $cnt = $this->mmaster->get_cnt('registration', array('registration_email' => strtolower($form_data['registration_email'])));
                if(!empty($cnt)){

                	$record = $this->mmaster->get_user(strtolower($form_data['registration_email']));
                		if($record[0]['registration_email'] == strtolower($form_data['registration_email'])){
                			if($record[0]['registration_password'] == $form_data['registration_password']){
                					if($record[0]['registration_status'] != 2){
		                				if($record[0]['registration_status'] == 1){
					            				$session_data = array(
												'registration_id' => $record[0]['registration_id'],
												'registration_fname' => $record[0]['registration_fname'],
												'registration_fname' => $record[0]['registration_lname'],
												'registration_email' => $record[0]['registration_email'],
												'registration_mobile1' => $record[0]['registration_mobile1'],
												'registration_gender' => $record[0]['registration_gender']
												);

											$this->session->set_userdata($session_data);//comment this session part at time of login OTP form
											// $time = timestamp();
											$last_login = $record[0]['registration_timestamp'];    
											$date = new DateTime($last_login);
											$now = new DateTime();

											$days =  $date->diff($now)->format("%d");
											$hour =  $date->diff($now)->format("%h");

											if($days < 1 && $hour < 24)
											{
												$reg_id = $record[0]['registration_id'];
												$msg = $this->mmaster->get_cnt_of_msg($reg_id,$last_login);
												$cnt = $msg[0]['cnt'];
												//print_r($cnt);exit;

												/************creation of session**************/	
												$session_data = array(
												'registration_id' => $record[0]['registration_id'],
												'registration_fname' => $record[0]['registration_fname'],
												'registration_email' => $record[0]['registration_email'],
												'registration_mobile1' => $record[0]['registration_mobile1'],
												'registration_gender' => $record[0]['registration_gender'],
												'msg_cnt' => $cnt
												);
												$this->session->set_userdata($session_data);
												/*******update timestamp******/
												$now = date("Y-m-d h:i:sa");
												$reg_id = array('registration_id' => $reg_id);
												$update_data = array('registration_timestamp'=>$now);
									         	$this->mmaster->update_table($reg_id,$update_data,'registration');
												/**************************/
												if($search_gender == $record[0]['registration_gender'])
												{
													$result['status'] = 55;  //same gender search true but after 24hr
													$result['id'] = $record[0]['registration_id'];
													//print_r($ans);exit;
													echo json_encode($result);
													//echo 55;
												}
												else
												{
													$result['status'] = 5;  //same gender search false but login b4 24 hr
													$result['id'] = $record[0]['registration_id'];
													echo json_encode($result);
													//echo 5;
												}
											}
											else
											{
												if($search_gender == $record[0]['registration_gender'])
												{
													$result['status'] = 11;  //same gender search true and login after 24 hr
													$result['id'] = $record[0]['registration_id'];
													//print_r($ans);exit;
													echo json_encode($result);
													//echo 11;
												}
												else
												{
													$result['status'] = 1;  //same gender search false and login within 24 hr
													$result['id'] = $record[0]['registration_id'];
													//print_r($ans);exit;
													echo json_encode($result);
													//echo 1;
												}
											}
										/*********************************************/
										
								}
		                		else{
		                				$result['status'] = 4;  //will show login status i.e.waiting;
										//$result['id'] = $record[0]['registration_id'];
										echo json_encode($result);
		                				//echo 4; //will show login status;
		                		}
	                		}
	                		else{
	                				$result['status'] = 6;  //will show reason of deactivation;
									//$result['id'] = $record[0]['registration_id'];
									echo json_encode($result);
	                				//echo 6; //will show reason of deactivation;
	                		}
                		}
                		else{
                				$result['status'] = 3;  //will show rerror msg;
								//$result['id'] = $record[0]['registration_id'];
								echo json_encode($result);
                				//echo 3;
                		}
                	}
                	else{
                			$result['status'] = 2;  //will show error msg;
							//$result['id'] = $record[0]['registration_id'];
							echo json_encode($result);
							//echo 2;
                		}
                }
            	else{
						$result['status'] = 2;  //will show error msg;
						//$result['id'] = $record[0]['registration_id'];
						echo json_encode($result);
						//echo 2;
            	}
            }
		}
		public function logout(){

		    $this->session->sess_destroy();
			redirect(base_url());
		}
		///////////////
		public function get_user_by_email()
		{
			
			$email = $this->input->post('email');
			// print_r($email);exit;
			$data = array('registration_email' => $email);
			$record = $this->mmaster->get_single_data("registration",$data);

			echo json_encode($record);

			// print_r($record);
			// print_r($record[0]['registration_deactivation_msg']);exit;
		}
		////////////////
		public function my_account(){

			$registration_id = $this->session->userdata('registration_id');
			$msg_cnt = $this->session->userdata('msg_cnt');
			//print_r($msg_cnt);exit;

			if(!empty($registration_id)){

				$record['data'] = $this->mmaster->get_single_reg_data($registration_id);
				//echo "<pre>";print_r($record['data']);exit();
				$record['partner_data'] = $this->mmaster->get_single_partner_data($registration_id);
				$album = array('album_user_id' => $registration_id);
				$record['album'] = $this->mmaster->get_single_data("register_album",$album);
				$record['msg_by'] = $this->mmaster->get_all_msg_by_user($registration_id);
				$record['msg_to'] = $this->mmaster->get_all_msg_to_user($registration_id);
				//echo "<pre>";print_r($record['data'][0]['registration_timestamp']);exit();
				//$last_login_date = $record['data'][0]['registration_timestamp'];
				/*****************************/
				$cnt = 0;
		        foreach ($record['data'][0] as $key => $value) {
		          	if(!empty($value))
			        {
			            $cnt++;
			        }
			    }
			    $part_cnt = 0;
			    if(!empty($record['partner_data']))
			    {
			    	foreach ($record['partner_data'][0] as $key => $value) {
			          	if(!empty($value))
				        {
				            $part_cnt++;
				        }
			    	}
			    }
			    $record_cnt = $cnt + $part_cnt;
			    $profile_per = (($record_cnt/104)*100);
			    $record['profile_per'] = round($profile_per);
			    $record['msg_cnt'] = $msg_cnt;
			    // echo "<pre>";print_r(round($profile_per));exit();
			    /******************************/

			    
				$this->load->view('forms/profile',$record);
			 }
			else
				$this->load->view('forms/login');	
		}
		public function edit_profile()
		{
			$registration_id = $this->session->userdata('registration_id');

			if(!empty($registration_id)){

				$record['data'] = $this->mmaster->get_single_reg_data($registration_id);
				$record['partner_data'] = $this->mmaster->get_single_partner_data($registration_id);
				$album = array('album_user_id' => $registration_id);
				$record['album'] = $this->mmaster->get_single_data("register_album",$album);
				$record['msg_by'] = $this->mmaster->get_all_msg_by_user($registration_id);
				$record['msg_to'] = $this->mmaster->get_all_msg_to_user($registration_id);
				 // echo "<pre>";print_r($record['data']);exit();
				$this->load->view('forms/edit_profile',$record);
			}
			else
				$this->load->view('forms/login');
		}

		public function change_password()
		{
		    $form_data = $this->input->post();
			$result = $this->mmaster->update_password($form_data);
			if($result == 1)
			{
				echo 1;
			}
			else
			{
				echo 2;
			}
		}
		public function profile_single($reg_id)
		{
			$registration_id = $this->session->userdata('registration_id');
				$result['img']= $this->mmaster->show_image();
				$result['profile_data']=$this->mmaster->get_single_reg_data($reg_id);
		  		$this->load->view('forms/profile-single',$result);

		}
		public function profile_search()
		{
			$result['data'] = $this->mmaster->search_all_matches();
			$result['img']= $this->mmaster->show_image();
			$this->load->view('forms/search_listing',$result);
		}
		public function profile_advance_search()
		{
			$result['img']= $this->mmaster->show_image();
			$result['data'] = $this->mmaster->advance_search_matches();
			// echo '<pre>';print_r($result);exit;
			$this->load->view('forms/search_listing',$result);
		}
		///////////////////////////////////
		public function update_basic_info()
		{
		$form_data = $this->input->post();
		if(!isset($form_data["registration_children"]))
		{
			$form_data["registration_children"]=0;
		}
		if(!isset($form_data["registration_childrenstatus"]))
		{
			$form_data["registration_childrenstatus"]="";
		}
		$registration_id = $this->session->userdata('registration_id');
		 
		$img_data = $_FILES;
		if($img_data['user_profile']['error'] == 0)
		{
			$config['upload_path'] = 'register/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png|svg';
			// $config['max_size']	= '2048';
			// $config['max_width']  = '2000';
			// $config['max_height']  = '2000';

			$this->upload->initialize($config);

				$uploaddir = 'register/';
			    $uploadfile = $uploaddir . basename($_FILES['user_profile']['name']);

			    //echo "<p>";

			    if (move_uploaded_file($_FILES['user_profile']['tmp_name'], $uploadfile)) {
			      //echo "File is valid, and was successfully uploaded.\n";
			      $filename = $_FILES['user_profile']['name'];
			    } else {
			       echo "Upload failed";
			    }
			}
			if(!empty($registration_id)){
				
				// print_r($form_data);exit;
				$data = array(
					'registration_fname' => $form_data["registration_fname"],
					'registration_lname' => $form_data["registration_lname"],
					'registration_gender' => $form_data["registration_gender"],
					'registration_religion' => $form_data["registration_religion"],
					'registration_mother_tongue' => $form_data["registration_mother_tongue"],
					'registration_spoken_language' => $form_data["registration_spoken_language"],
					'registration_caste' => $form_data["registration_caste"],
					'registration_sub_caste' => $form_data["registration_sub_caste"],
					'registration_profile_createdby' => $form_data["registration_profile_createdby"],
					'registration_maritial_status' => $form_data["registration_maritial_status"],
					'registration_children' => $form_data["registration_children"],
					'registration_childrenstatus' => $form_data["registration_childrenstatus"],
					'registration_age' => $form_data["registration_age"],
					'registration_about_myself' => $form_data["registration_about_myself"],
					'registration_subgroup' => $form_data["registration_subgroup"]
				 );
				if($img_data['user_profile']['error'] == 0)
				{
					$data  = array('registration_photo' => $filename);
				}
				//print_r($data);exit;
				$result=$this->mmaster->update_basic_info($data,$registration_id);

				if($result==1)
				{
					echo 1;
				}
			}
			else
			$this->load->view('forms/login');
		}
		/////////////////////////////
		public function physical_status()
		{
			$registration_id = $this->session->userdata('registration_id');
			if(!empty($registration_id)){

				$form_data = $this->input->post();
				 //print_r($form_data);exit;
				$data = array(
					'registration_height' => $form_data["registration_height"],
					'registration_weight' => $form_data["registration_weight"],
					'registration_blood_group' => $form_data["registration_blood_group"],
					'registration_complexion' => $form_data["registration_complexion"],
					'registration_body_type' => $form_data["registration_body_type"],
					'registration_spectacles' => $form_data["registration_spectacles"],
					'registration_physicalstatus' => $form_data["registration_physicalstatus"],
					'registration_diet' => $form_data["registration_diet"]
					
				 );
				$result=$this->mmaster->update_basic_info($data,$registration_id);
				if($result==1)
				{
					echo 1;
				}
			}
			else
			$this->load->view('forms/login');
		}
		public function astro_details()
		{
			$registration_id = $this->session->userdata('registration_id');
			if(!empty($registration_id)){

				$form_data = $this->input->post();
				 //print_r($form_data);exit;
				$data = array(
					'registration_birth_time' => $form_data["registration_birth_time"],
					'registration_birth_date' => $form_data["registration_birth_date"],
					'registration_birth_place' => $form_data["registration_birth_place"],
					'registration_country_birth' => $form_data["registration_country_birth"],
					'registration_rashi' => $form_data["registration_rashi"],
					'registration_nakshatra' => $form_data["registration_nakshatra"],
					'registration_charan' => $form_data["registration_charan"],
					'registration_gana' => $form_data["registration_gana"],
					'registration_nadi' => $form_data["registration_nadi"],
					'registration_manglik' => $form_data["registration_manglik"],
					'registration_horoscope' => $form_data["registration_horoscope"]
					
				 );
				$result=$this->mmaster->update_basic_info($data,$registration_id);
				if($result==1)
				{
					echo 1;
				}
			}
			else
			$this->load->view('forms/login');
		}
		public function career_details()
		{	
			$registration_id = $this->session->userdata('registration_id');
			if(!empty($registration_id)){

				$form_data = $this->input->post();
				 //print_r($form_data);exit;
				$data = array(
					'registration_highest_qualification' => $form_data["registration_highest_qualification"],
					'registration_education_level' => $form_data["registration_education_level"],
					'registration_education_field' => $form_data["registration_education_field"],
					'registration_education_detail' => $form_data["registration_education_detail"],
					'registration_occupation' => $form_data["registration_occupation"],
					'registration_employedin' => $form_data["registration_employedin"],
					'registration_occupation_detail' => $form_data["registration_occupation_detail"],
					'registration_monthly_income' => $form_data["registration_monthly_income"],
					'registration_working_marriage' => $form_data["registration_working_marriage"]
					
				 );
				$result=$this->mmaster->update_basic_info($data,$registration_id);
				if($result==1)
				{
					echo 1;
				}
			}
			else
			$this->load->view('forms/login');
		}
		public function contact_details()
		{
			$registration_id = $this->session->userdata('registration_id');
			if(!empty($registration_id)){

				$form_data = $this->input->post();
				 //print_r($form_data);exit;
				$data = array(
					'registration_contact_address' => $form_data["registration_contact_address"],
					'registration_city' => $form_data["registration_city"],
					'registration_state' => $form_data["registration_state"],
					'registration_country' => $form_data["registration_country"],
					'registration_citizenship' => $form_data["registration_citizenship"],
					'registration_std' => $form_data["registration_std"],
					'registration_telephone' => $form_data["registration_telephone"],
					'registration_mobile1' => $form_data["registration_mobile1"],
					'registration_mobile2' => $form_data["registration_mobile2"]
					
				 );
				$result=$this->mmaster->update_basic_info($data,$registration_id);
				if($result==1)
				{
					echo 1;
				}
			}
			else
			$this->load->view('forms/login');
		}
		public function family_details()
		{
			$registration_id = $this->session->userdata('registration_id');
			if(!empty($registration_id)){
				$form_data = $this->input->post();
				  // print_r($form_data);exit;
				$data = array(
					'registration_fathername' => $form_data["registration_fathername"],
					'registration_fatherstatus' => $form_data["registration_fatherstatus"],
					'registration_mothername' => $form_data["registration_mothername"],
					'registration_motherstatus' => $form_data["registration_motherstatus"],
					'registration_brothermarried' => $form_data["registration_brothermarried"],
					'registration_brotherunmarried' => $form_data["registration_brotherunmarried"],
					'registration_sistermarried' => $form_data["registration_sistermarried"],
					'registration_sisterunmarried' => $form_data["registration_sisterunmarried"],
					'registration_livingstatus' => $form_data["registration_livingstatus"],
					'registration_familytype' => $form_data["registration_familytype"],
					'registration_familystatus' => $form_data["registration_familystatus"],
					'registration_nativevillage' => $form_data["registration_nativevillage"],
					'registration_nativedistrict' => $form_data["registration_nativedistrict"],
					'registration_nativetaluka' => $form_data["registration_nativetaluka"],
					'registration_nativestate' => $form_data["registration_nativestate"],
					'registration_myfamily' => $form_data["registration_myfamily"]
				 );
				$result=$this->mmaster->update_basic_info($data,$registration_id);
				//print_r($result);exit;
				if($result==1)
				{
					echo 1;
				}
			}
			else
			$this->load->view('forms/login');
		}
		public function partner_preference()
		{
			$registration_id = $this->session->userdata('registration_id');
			if(!empty($registration_id)){
				$form_data = $this->input->post();
				 // print_r($form_data);exit;
				$data = array(
					 'partner_agefrom' => $form_data["partner_agefrom"],
					'partner_ageto' => $form_data["partner_ageto"],
					  'partner_heightfrom' => $form_data["partner_heightfrom"],
					  'partner_heightto' => $form_data["partner_heightto"],
					  'partner_maritalstatus' => $form_data["partner_maritalstatus"],
					 'partner_religion' => $form_data["partner_religion"],
					 'partner_caste' => $form_data["partner_caste"],
					 'partner_intercaste' => $form_data["partner_intercaste"],
					 'partner_manglik' => $form_data["partner_manglik"],
					 'partner_diet' => $form_data["partner_diet"],
					 'partner_smoke' => $form_data["partner_smoke"],
					 'partner_drink' => $form_data["partner_drink"],
					 'partner_complexion' => $form_data["partner_complexion"],
				     'partner_bodytype' => $form_data["partner_bodytype"],
					  'partner_educationlevel' => $form_data["partner_educationlevel"],
					'partner_employedlevel' => $form_data["partner_employedlevel"],
					'partner_occupation' => $form_data["partner_occupation"],
					'partner_monthlyincome' => $form_data["partner_monthlyincome"],
					'partner_subgroup' => $form_data["partner_subgroup"],
					 'partner_city' => $form_data["partner_city"],
					 'partner_state' => $form_data["partner_state"],
					 'partner_country' => $form_data["partner_country"],
					'partner_aboutpartner' => $form_data["partner_aboutpartner"]

				 );
				$result=$this->mmaster->update_partner_data($data,$registration_id);
				//print_r($result);exit;
				if($result==1)
				{
					echo 1;
				}
			}
			else
			$this->load->view('forms/login');
		}
		public function view_profile($reg_id)
		{
			$registration_id = $this->session->userdata('registration_id');
			if(!empty($registration_id)){
				$result['img']= $this->mmaster->show_image();
				$result['data']=$this->mmaster->get_single_reg_data($reg_id);
				$result['partner_data'] = $this->mmaster->get_single_partner_data($reg_id);
				$album = array('album_user_id' => $reg_id,
							   'album_photo_visibility' => 0
						);
				$result['album'] = $this->mmaster->get_single_data("register_album",$album);
				//echo "<pre>";print_r($result['album']);exit;
		  		$this->load->view('forms/view-profile',$result);
			}
			else
			{
				$result['reg_id'] = $reg_id;
				$data = $this->mmaster->get_single_reg_data($reg_id);
				$result['search_user_gender'] = $data[0]['registration_gender'];
				//echo "<pre>";print_r($result);exit;
				$this->load->view('forms/login',$result);
			}
		}
		public function	advance_search()
		{
			$result['img']= $this->mmaster->show_image();
			// echo "<pre>";print_r($result);exit;
			$this->load->view('forms/advance_search',$result);
		}
        public function show_pages($page_name,$id)
        {
            $data['contact_us']=$this->mmaster->get_page_data($id);
        	$this->load->view('forms/'.$page_name);
        }
        public function melawa_page($id)
      	{ 
         	$data['melawa']=$this->mmaster->melawa_data($id);
    		$this->load->view('forms/melawa',$data);
      	} 
      	public function show_success_stories()
      	{
         	$data['success_stories']=$this->mmaster->success_stories();
    		$this->load->view('forms/success_stories',$data);
      	}
 		public function show_privacy_you()           
 		{
        	$id=7;//for privacy page
             $data['privacy_you']=$this->mmaster->show_privacy_you($id);
             // print_r($data);exit;
        	$this->load->view('forms/privacy_you',$data);
        }
        public function privacy_policy()           
 		{
        	$id=5;//for privacy page
             $data['privacy_policy']=$this->mmaster->show_privacy_you($id);
             // print_r($data);exit;
        	$this->load->view('forms/privacy_policy',$data);
        }
        public function security_tips()            
        {
        	$id=13;//for security tips page
            $data['security_tips']=$this->mmaster->show_security_tips($id);
        	$this->load->view('forms/security_tips',$data);
        }
        public function classifieds()            
        {
        	$id=15;//for classifieds page
            $data['classifieds']=$this->mmaster->show_classifieds($id);
        	$this->load->view('forms/classifieds',$data);
        }
        public function about_us()            
        {
        	$id=16;//for about_us page
            $data['about_us']=$this->mmaster->show_about_us($id);
        	$this->load->view('forms/about_us',$data);
        }
         public function melawa_view_more($id)            
        {
            $data['melawa_details']=$this->mmaster->show_view_more_melawa($id);
            //print_r($data);exit;
        	$this->load->view('forms/view_more_melawa',$data);
        }
        public function send_contact_us_email()
        {
	        $form_data = $this->input->post();
	        $from = $form_data['registration_email'];
	        $name = $form_data['name'];
	        $mobile = $form_data['phone'];
	        $subject = $form_data['subject'];
	        $message = $form_data['message'];
	          // print_r($form_data);exit;
	        $config['mailtype'] = 'html';
	    	$this->email->initialize($config);

			$email_body ='<div style="background:#fff; border: 1px solid #b3b3b3; height:auto; width:650;">';
			$email_body .='<div style="margin-left:10px; margin-top: 10px; margin-bottom: 0px;">';
			$email_body .='<img src="'.base_url().'public/images/logo-(1).png" style="align:center; height:150px width: 200px;" />';
			$email_body .='</div>';
			$email_body .='<br/>';		
			$email_body .='<div>';
			$email_body .='<div style="background:#d9d9d9; padding:30px">';
			$email_body .= "<b>Dear Sir/Madam,</b>";
			$email_body .='<br/>';
			$email_body .='<br/>';
	        $email_body .= "<span><b>Following Contacts have been captured from website.</b></span>";
	        $email_body .='<br/>';
	        $email_body .= "<span><b>Name :</b></span>".$name;
	        $email_body .='<br/>';
	        $email_body .= "<span><b>Contact No :</b></span>".$mobile;
	        $email_body .='<br/>';
	        $email_body .= "<span><b>Message :</b></span>".$message;
	        $email_body .='<br/>';
	        $email_body .='<br/>';
	        
	        $email_body .='</div>';
	        $email_body .='</div>';
	        $email_body .='</div>';

			$this->load->library('email');
			$this->email->from($from);
			//print_r($email_body);exit();
			$this->email->to("saiprasadvivah@gmail.com");
			
			$this->email->subject($subject);
			$this->email->message($email_body);
			if(!$this->email->send())
			{
				echo "MEssage sending fail Please try again..";
				redirect(base_url('common/show_pages/contact_us/3'));
			}
			else
			{
			// echo 1;
				redirect(base_url('common/show_pages/contact_us/3'));
			}
        }
        ///////////////////////
        public function new_member()            
        {            	
          $result['new_member']= $this->mmaster->show_image();
			$this->load->view('forms/new_member',$result);
        }
        //////////////
        public function reset_advancesearch()
        {
        	redirect(base_url());
        }
        public function membership()
        {
        	$this->load->view('forms/membership');
        }
        public function send_message_to_partner()
        {
        	$data = $this->input->post();

        	$data['message_date'] = time();
        	$data['message_date1'] = date("Y-m-d h:i:sa");
        	$email_to = $data['email_id'];
        	$login_email = $data['login_email'];
        	$message = $data['message_subject'];
        	$sender_fname = $data['fname'];
        	$sender_lname = $data['lname'];
        	unset($data['email_id']);
        	unset($data['login_email']);
        	unset($data['fname']);
        	unset($data['lname']);
        	//print_r($data);exit;
        	$ans = $this->mmaster->data_insert_into_table("message",$data);
        	 // print_r($ans);exit;
        	if(!empty($ans))
        	{
							
		        $config['mailtype'] = 'html';
		    	$this->email->initialize($config);

				$email_body ='<div style="background:#fff; border: 1px solid #b3b3b3; height:auto; width:650;">';
				$email_body .='<div style="margin-left:10px; margin-top: 10px; margin-bottom: 0px;">';
				$email_body .='<img src="'.base_url().'public/images/logo-(1).png" style="align:center; height:150px width: 200px;" />';
				$email_body .='</div>';
				$email_body .='<br/>';
				$email_body .='<div>';
				$email_body .='<div style="background:#d9d9d9; padding:30px">';
				$email_body .= "<b>".$message."</b>";
				$email_body .='<br/>';
		        // $email_body .= "<span><b>Your OTP is </b></span>".$otp;
		        $email_body .='<br/>';
		        $email_body .='</div>';
		        $email_body .='</div>';
		        $email_body .='</div>';

				$this->load->library('email');

				$this->email->from('noreply@saiprasadvivah.net');
				//print_r($email_body);exit();
				$this->email->to($email_to);
				$this->email->cc('saiprasadvivah2@gmail.com'); 
				$sub = $this->email->subject('Saiprasadvivah:Message From '.$sender_fname.'&nbsp;'.$sender_lname.'Profile Id SPV'.$data['message_from']);
				$this->email->message($email_body);
				//print_r($sub);exit();
				if(!$this->email->send())
				{
					echo 0;
				}
				else
				{
					echo 1;
				}
        		//
        	}
        	else
        	{
        		echo 0;
        	}
        }
        public function forgot_password_view()
        {
        	$this->load->view('forms/forgot_password');
        }
        public function forgot_password_otp($id)
        {
        	$result['reg_id'] = $id;
        	print_r($result);exit;
        	$this->load->view('forms/forgot_pass_otp',$result);
        }
        public function forgot_pass_action()
        {
        	$form_data = $this->input->post();
        	// print_r($email);exit;
        	
                $cnt = $this->mmaster->get_cnt('registration', array('registration_email' => $form_data['registration_email']));
                if(!empty($cnt)){

                	$record = $this->mmaster->get_user($form_data['registration_email']);
                	  //print_r($record);exit;
                		if($record[0]['registration_email'] == $form_data['registration_email']){
                			// print_r(1234);exit;
					        $to = $record[0]['registration_email'];

							 $otp = rand(1000,9999);

					        $name = $record[0]['registration_fname'];

					        $config['mailtype'] = 'html';
					    	$this->email->initialize($config);

							$email_body ='<div style="background:#fff; border: 1px solid #b3b3b3; height:auto; width:650;">';
							$email_body .='<div style="margin-left:10px; margin-top: 10px; margin-bottom: 0px;">';
							$email_body .='<img src="'.base_url().'public/images/logo-(1).png" style="align:center; height:150px width: 200px;" />';
							$email_body .='</div>';
							$email_body .='<br/>';
							$email_body .='<div>';
							$email_body .='<div style="background:#d9d9d9; padding:30px">';
							$email_body .= "<b>Dear ".$name."</b>";
							$email_body .='<br/>';
							$email_body .='<br/>';
					        $email_body .= "<span><b>Your OTP is </b></span>".$otp;
					        $email_body .='<br/>';
					        $email_body .= "<span><b>Please enter your OTP and reset Your password </b></span>";
					        $email_body .='<br/>';
					        
					        $email_body .='</div>';
					        $email_body .='</div>';
					        $email_body .='</div>';

							//$this->load->library('email');

							$this->email->from('saiprasadvivah@gmail.com');
							//print_r($email_body);exit();
							$this->email->to($to);
							$this->email->subject("OTP For Change Password");
							$this->email->message($email_body);
							if(!$this->email->send())
							{
								echo 0;
							}
							else
							{
								$ans = $this->mmaster->update_otp($otp,$to);

								echo $record[0]['registration_id'];
							}
                	}
                	else{
							echo 2;
                		}
                }
            	else{

            		echo 2;
            	}
        }
        //////////////////
        public function forgot_pass_otp_confirm()
        {
        	$otp = $this->input->post('registration_pass_otp');
        	$registration_id = $this->input->post('registration_id');
        	$ans = $this->mmaster->check_otp($registration_id);
        	// print_r($ans[0]['registration_pass_otp']);exit();
        	if($ans[0]['registration_pass_otp'] == $otp)
        	{
        		echo $ans[0]['registration_id'];
        	}
        	else
        	{
        		echo 0;
        	}
        }
        ////////////
        public function reset_password($id)
        {
        	$result['reg_id'] = $id;
        	$this->load->view('forms/reset_password',$result);
        }
        //////////
        public function update_new_pass_form()
        {
        	$form_data = $this->input->post();
        	// print_r($form_data);exit();
        	$ans = $this->mmaster->update_new_pass_form($form_data);
        	// print_r($ans);exit;
        	echo $ans;
        }
        ////////////
      public function upload_photo_album()
      {
        $img_data = $_FILES;
        $registration_id = $this->session->userdata('registration_id');
        $config['upload_path'] = 'register/album/'.$registration_id.'/';
       

		$config['allowed_types'] = 'gif|jpg|jpeg|png|svg';
        
        if(!file_exists($config['upload_path'])) 
        {
                   mkdir( $config['upload_path'], 0777, true);
        }

         
		$this->upload->initialize($config);

		if($img_data['userfile']['error'] == 0){

				$filename = time().'_'.$img_data['userfile']['name'];
				$filename = str_replace(" ","_",$filename);
				$filename = str_replace("-","_",$filename);
				
				$config['file_name'] = $filename;
				$this->upload->initialize($config);

				if (!$this->upload->do_upload()){

					$filename = "defaultUser.gif";
				}
			}
			else{

				$filename = "defaultUser.gif";
			}
 	
 	     $form_data=array();
 		$form_data['album_photo'] = $filename;
		$form_data['album_date'] = date("Y-m-d");
		$form_data['album_user_id']=$registration_id;
		// print_r($form_data);exit;
		$result = $this->mmaster->data_insert_into_table("register_album",$form_data);
		if(!empty($result))
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
      }
      /////////
      public function newsletter_email()
        {
     
          $data=$this->input->post();
          //print_r($data);exit;
          $data['ndate'] = date("Y-m-d");
          $result=$this->mmaster->data_insert_into_table("newsletter",$data);  
          //print_r($result);  
          redirect(base_url()); 

        }
        /////////////
        public function delete_profile_pic($id)
        {
        	// print_r($id);
        	$id = array('registration_id' => $id);

			$update_data = array('registration_photo' => 'defaultUser.gif');
        	$result=$this->mmaster->update_table($id,$update_data,'registration');
        	// print_r($ans);
        	echo $result;
        }
        ///////////////
         public function remove_pic_from_album($id)
        {
        	
        	$result=$this->mmaster->remove_pic_from_album($id);
        	// print_r($result);
        	echo $result;
        }

        public function update_album_pic_status($status,$id)
	      {
	         $id = array('album_user_id' => $id);
			 $update_data = array('album_photo_visibility'=>$status);
	         $result=$this->mmaster->update_table($id,$update_data,'register_album');
	         return $result;
	      }

		public function update_rgister_profile_pic_status($status,$id)
	      {
	      	//print_r($id);exit;
            $id = array('registration_id' => $id);
			$update_data = array('registration_photo_visibility'=>$status);
         	$result=$this->mmaster->update_table($id,$update_data,'registration');
         	return $result;
	      }
	     ///////////////////
	    public function genarate_otp_for_login($reg_id)
		{
			$record = $this->mmaster->get_single_reg_data($reg_id);
			$mobile = $record[0]['registration_mobile1'];

			if(!empty($mobile)){
				$otp = rand(1000,9999);
				$msg = "Dear%20Member,%20Your%20OTP%20is%20$otp.%20Please%20enter%20your%20OTP%20to%20verify%20your%20mobile%20no.";
				$sms_reply = $this->send_sms($mobile,$msg);
				//print_r($otp);
				$id = array('registration_id' => $reg_id);
				$update_data = array('registration_login_otp'=>$otp);
	         	$result=$this->mmaster->update_table($id,$update_data,'registration');
				//print_r($result);exit;
				if(!empty($result) && !empty($sms_reply))
				{
					echo 1;
				}
				else
				{
					echo 0;
				}
			}
			else
			{
				echo 0;
			}
		}
		/////////////
		public function verify_otp_for_login($id,$user_otp)
		{
			 //print_r($id);exit;
			$record = $this->mmaster->get_single_reg_data($id);
			//print_r($record);exit;
			$db_otp = $record[0]['registration_login_otp'];
			$last_login = $record[0]['registration_timestamp'];

			if($user_otp == $db_otp)
			{
				$msg = $this->mmaster->get_cnt_of_msg($id,$last_login);
				$cnt = $msg[0]['cnt'];
				//print_r($cnt);exit;

				/************creation of session**************/	
					$session_data = array(
					'registration_id' => $record[0]['registration_id'],
					'registration_fname' => $record[0]['registration_fname'],
					'registration_email' => $record[0]['registration_email'],
					'registration_mobile1' => $record[0]['registration_mobile1'],
					'registration_gender' => $record[0]['registration_gender'],
					'registration_gender' => $record[0]['registration_gender'],
					'msg_cnt' => $cnt
					);
					$this->session->set_userdata($session_data);

				/********************************************/
				
				$now = date("Y-m-d h:i:sa");
				$id = array('registration_id' => $id);
				$update_data = array('registration_timestamp'=>$now);
	         	$result=$this->mmaster->update_table($id,$update_data,'registration');
	         	//print_r($result);exit;

				echo 1;
			}
			else
			{
				echo 2;
			}
		}
		///////////////
		public function destroy_msg_count(){
			//print_r(111);
		    //$this->session->sess_destroy('msg_cnt');
			//redirect(base_url());
		}


        



//////////////////////////////////////////////////////////////////////////////////////////////////////
}
?>