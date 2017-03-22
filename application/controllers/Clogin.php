<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Clogin extends CI_Controller {

		public function __construct(){

			parent::__construct();

			$this->load->model('mlogin');
			$this->load->library('session');
			$this->load->library('form_validation');
		}
		public function index(){

			
			$this->load->view('pages/login');
		}
		
		// public function login_action(){
		// 	//echo 111;
		// 	//exit;
		// 	 $form_data = $this->input->post();
		// 	  //echo "<pre>";print_r($form_data);exit;
		// 	//$this->form_validation->set_rules('user_branchid', 'Branch', 'required');
		// 	//echo "<pre>";print_r($cnt1);exit;
		// 	//$this->form_validation->set_rules('log_email', 'Email', 'required');
		// 	//$this->form_validation->set_rules('log_password', 'Password', 'required');
		// 	$this->form_validation->set_rules('user_name', 'Username', 'required');
		// 	$this->form_validation->set_rules('user_password', 'Password', 'required');

		// 	if ($this->form_validation->run() == FALSE){

		// 		//echo validation_errors();
		// 		//$data['branch_data'] = $this->get_branch();
		// 	//echo "<pre>";print_r($result);exit;
		// 	$this->load->view('pages/login');
  //           }
  //           else{
  //               $cnt = $this->mlogin->get_cnt('user_master', array('user_name' => $form_data['user_name']));
  //               //echo "<pre>";print_r($cnt);exit;
  //               if(!empty($cnt)){

  //               	$record = $this->mlogin->get_user($form_data['user_name']);

  //               	//echo "<pre>";print_r($record);exit;
                	

  //               		if($record[0]['user_name'] == $cnt[0]['user_name']){
  //               		//echo "<pre>";print_r(111);exit;
  //               			if($record[0]['user_password'] == md5($form_data['user_password'])){
  //               			//echo "<pre>";print_r(111);exit;
  //           				$session_data = array(

          
		// 					'user_id' => $record[0]['user_id'],
		// 					'user_role_id' => $record[0]['user_role_id'],
		// 					'user_name' => $record[0]['user_name'],
		// 					'user_full_name' => $record[0]['user_full_name']
		// 					);

		// 					$this->session->set_userdata($session_data);

		// 				$arr = array(
		// 						'user_log_status' => 1,
		// 						'user_ip' => $_SERVER["REMOTE_ADDR"]
		// 					);

		// 				$user_id= $record[0]['user_id'];

		// 				$this->mlogin->data_update($arr,$user_id);
		// 				//echo 122221;exit;
		// 				redirect(base_url('dashboard'));
  //               		}
  //               		else{

		// 					$data['error'] = "Wrong Password";
		// 					$this->load->view('pages/login',$data);
                		
  //               		}
  //               	}
  //               	else{
		// 					$data['error'] = "Wrong user name";
									
		// 					$this->load->view('pages/login',$data);
  //               		}
  //               }
  //           	else{

  //           		$data['error'] = "Invalid User";
		// 			$this->load->view('pages/login',$data);
  //           	}
            
            
  //           }
		}
		public function logout(){

		    $this->session->sess_destroy();
			//print_r(base_url('admin'));exit();
			redirect(base_url('admin'));
		}
	}
?>