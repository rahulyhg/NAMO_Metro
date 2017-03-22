<?php

	class Mlogin extends CI_model{

		// public function get_br_cnt($table, $arr){

		// 	$this->db->where($arr);
		// 	return $this->db->count_all_results($table);
		// }
		
		// public function get_cnt($table, $arr){

		// 	$this->db->where($arr);
		// 	return $this->db->count_all_results($table);
		// }
		///////////////
		///////////
		public function get_max_reg_id()
		{
			//$max_id = $this->db->query("SELECT MAX(im_id) max_id FROM inward_master")->result_array();

			$this->db->select_max('login_reg_no');
			$max_id = $this->db->get('login_master')->result_array();

			if(empty($max_id)){
				$max_id = 1;
			}
			else
			{
				$max_id = $max_id[0]['login_reg_no']+1;
			}
			return $max_id;

		}
		/////////////
		function data_insert($table='',$arr='')
		{
			//print_r($arr);exit;
			$this->db->insert($table,$arr);
			return $this->db->insert_id();
		}

		//////////////
		public function get_cnt($table, $arr){
			$this->db->SELECT ('user_name');
			$this->db->where($arr);
			return $this->db->get($table)->result_array();
		}
		public function get_user($email){

			$this->db->where(array('user_name' => $email));
			return $this->db->get('user_master')->result_array();
		}
		
		
		public function data_update($data,$user_id)
		{
			
			
			$this->db->where('user_id',$user_id);
			 $ans = $this->db->update('user_master', $data); 

			 // print_r($ans);
			 // exit;
			 return $ans;
		}
		//////////////////////
		public function get_mobile_cnt($login_mobile)
		{
			return $this->db->query("SELECT * FROM login_master WHERE login_mobile = '$login_mobile'")->num_rows();
			//return 0;
		}
		public function get_record_login($login_mobile)
		{
			return $this->db->query("SELECT * FROM login_master WHERE login_mobile = '$login_mobile'")->result_array();
		}
		public function login_data_update($data,$login_id)
		{
			 //print_r($data); exit;
			$this->db->where('login_id',$login_id);
			$ans = $this->db->update('login_master', $data);
			return $ans;
		}
		public function get_token_cnt($login_token,$login_mobile)
		{
			//print_r("SELECT * FROM login_master WHERE login_mobile = $login_mobile AND login_token = $login_token");exit;
			return $this->db->query("SELECT * FROM login_master WHERE login_mobile = $login_mobile AND login_token = $login_token")->num_rows();
			//return 0;
		}
		public function update_password($data,$log_mobile)
		{
			 //print_r($data); exit;
			$this->db->where('login_mobile',$log_mobile);
			$ans = $this->db->update('login_master',$data);
			return $ans;
		}
		public function get_users_details($login_id)
		{
			$this->db->where(array('login_id' => $login_id));
			return $this->db->get("login_master")->result_array();
		}
		public function get_booked_service($cm_id)
		{
			$this->db->where(array('cst_cm_id' => $cm_id));
			return $this->db->get("call_service_transaction")->result_array();
			//print_r("SELECT cst.*, s.* FROM call_service_transaction cst INNER JOIN service_master s ON(cst.cst_service_id = s.sm_id) WHERE cst_cm_id = $cm_id");exit;
			//return $this->db->query("SELECT cst.*, s.* FROM call_service_transaction cst INNER JOIN service_master s ON(cst.cst_service_id = s.sm_id) WHERE cst_cm_id = $cm_id")->result_array();
		}
		public function get_booked_service_details($cm_id)
		{
			//print_r("SELECT c.*, cat.* FROM call_service_transaction c LEFT JOIN cat_master cat ON(c.cst_cm_catid = cat.cat_id) WHERE c.cst_cm_id = $cm_id");exit;
			 return $this->db->query("SELECT c.*, cat.*,subcat.*, service.*, a.* FROM call_service_transaction c LEFT JOIN cat_master cat ON(c.cst_cm_catid = cat.cat_id) LEFT JOIN subcat_master subcat ON(c.cst_cm_subcatid = subcat.subcat_id) LEFT JOIN service_master service ON(c.cst_service_id = service.sm_id) LEFT JOIN area_master a ON(c.cst_cm_areaid = a.area_id) WHERE c.cst_cm_id = $cm_id")->result_array();
			//print_r($cm_id);exit;
			// $this->db->where(array('cst_cm_id' => $cm_id));
			// return $this->db->get("call_service_transaction")->result_array();
			// print_r("SELECT c.*, cat.*, subcat.* FROM call_service_transaction c LEFT JOIN cat_master cat ON(c.cst_cm_catid = cat.cat_id) LEFT JOIN subcat_master sub ON(c.cst_cm_subcatid=sub.subcat_id) WHERE c.cst_cm_id = $cm_id");exit;
			// return $this->db->query("SELECT call.*, cat.*, subcat.* FROM call_service_transaction call LEFT JOIN cat_master cat ON(call.cst_cm_catid = cat.cat_id) LEFT JOIN subcat_master sub ON(call.cst_cm_subcatid=sub.subcat_id) WHERE call.cst_cm_id = $cm_id")->result_array();
		}
		public function get_subcategory($cat_id)
		{
			return $this->db->query("SELECT * FROM subcat_master WHERE subcat_cat_id = $cat_id  ORDER BY subcat_name ASC")->result_array();
		}
		public function get_service_for_category($subcat_id)
		{
			//print_r($subcat_id);exit;
			return $this->db->query("SELECT * FROM service_master WHERE sm_subcat_id = $subcat_id ORDER BY sm_service_name ASC")->result_array();
		}
		public function get_service_rate($service_id)
		{
			//print_r($service_id);exit;
			return $this->db->query("SELECT sm_rate FROM service_master WHERE sm_id = $service_id")->result_array();
		}
		//////////
		public function details_of_service($service_id)
		{
			//print_r("SELECT s.*, cat.*, subcat.* FROM service_master s LEFT JOIN cat_master cat ON(s.sm_catid = cat.cat_id) LEFT JOIN subcat_master subcat ON(s.sm_subcat_id = subcat.subcat_id) WHERE s.sm_id = $service_id");exit;
			return $this->db->query("SELECT s.*, cat.*, subcat.* FROM service_master s LEFT JOIN cat_master cat ON(s.sm_catid = cat.cat_id) LEFT JOIN subcat_master subcat ON(s.sm_subcat_id = subcat.subcat_id) WHERE s.sm_id = $service_id")->result_array();
		}
		///////////
		public function get_user_name($user_mob)
		{
			return $this->db->query("SELECT login_cpname FROM login_master WHERE login_mobile = $user_mob")->result_array();
		}


	}
?>