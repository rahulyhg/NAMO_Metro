<?php

	class Mmaster extends CI_model{

		public function get_cnt($table,$arr){
			// print_r(1111);exit;
			$this->db->where($arr);
			return $this->db->count_all_results($table);
		}
		public function get_user($email){

			$this->db->where(array('registration_email' => $email));
			return $this->db->get('registration')->result_array();
		}
		/////////////////
		function data_insert_into_table($table='',$arr='')
		{
			$this->db->insert($table,$arr);
			return $this->db->insert_id();
		}
		//////////
		public function get_single_data($table,$id)
		{

			$this->db->where($id);
			$result = $this->db->get($table)->result_array();
			return $result;
		}
		//////////////
		public function get_recordlist()
		{
			return $this->db->query("SELECT * FROM user_master")->result_array();
		}

		public function data_insert($form_data)
		{
			//print_r($form_data);exit;
			return $output=$this->db->insert("user_master",$form_data);
		}
		////////
		public function update_table($id,$update_date,$table)
		{
			//print_r($id);exit;
			$this->db->where($id);
			$ans = $this->db->update($table, $update_date); 
			return $ans;
		}
		////////////////
		public function update_payment($data)
		{
			// print_r($data);exit;
			$id = array('registration_id' => $data['registration_id']);

			$form_data = array('registration_pay_mode' => $data['registration_pay_mode']);

			$this->db->where($id);
			$ans = $this->db->update('registration', $form_data); 
			return $ans;
		}
		////////////////
		public function get_latest_news()
		{
			$this->db->where(array('status' => 1));
			$result = $this->db->get("news")->result_array();
			return $result;
		}
		////////////////
		public function get_single_reg_data($id)
		{
			$this->db->where(array('registration_id' => $id));
			$result = $this->db->get("registration")->result_array();
			return $result;
		}
		/////////////////
		public function get_single_partner_data($id)
		{
			$this->db->where(array('partner_register_id' => $id));
			$result = $this->db->get("partner_preference")->result_array();
			return $result;
		}
		///////////////////////
		
		public function get_all_msg_by_user($id)
		{
			// $id = 130;
			// print_r($id);exit;
			$result = $this->db->query("SELECT msg.*,reg.registration_fname, reg.registration_lname FROM message msg LEFT JOIN registration reg ON(msg.message_to = reg.registration_id) WHERE msg.message_from = $id order by message_date DESC")->result_array();
			return $result;
		}
		public function get_all_msg_to_user($id)
		{
			// $id = 130;
			$result = $this->db->query("SELECT msg.*,reg.registration_fname, reg.registration_lname FROM message msg LEFT JOIN registration reg ON(msg.message_from = reg.registration_id) WHERE msg.message_to = $id order by message_date DESC")->result_array();
			return $result;
		}
		// public function user_data_update($form_data,$u_id)
		// {
		// 	//print_r($form_data);exit;
		// 	$this->db->where('user_id',$u_id);
		// 	 $ans = $this->db->update('user_master', $form_data); 

		// 	 // print_r($ans);
		// 	 // exit;
		// 	 return $ans;
		// }
		// public function delete_user($u_id)
		// {
		// 	//print_r($data);exit;
		// 	return $this->db->query("DELETE FROM registration WHERE user_id = $u_id");
		// }
		///////////////////
		public function update_password($formdata)
		{    
			 $id=$formdata["registration_id"];
			 $new_pass=$formdata["new_password"];
			 $pass=$formdata["old_password"];
			 $old_pass=$this->db->query("select registration_password from registration where registration_id='$id'")->result_array();
			 $old_password=$old_pass[0]['registration_password'];
			//print_r($pass);print_r($old_password);exit;
			 if("$pass"=="$old_password")
			 {
				$data = array('registration_id' => $id);
				$form_data = array('registration_password' => $new_pass);
				$this->db->where($data);
				$ans = $this->db->update('registration', $form_data); 
				//print_r($ans);exit;
				return $ans;
		      }
			  else
			  {
			  		return 2;
				}
	    }
		public function show_image()
		{
		   $show_iamge=$this->db->query("SELECT registration_id, registration_lname, registration_highest_qualification,registration_age,registration_city,registration_photo,registration_gender,registration_photo_visibility FROM registration WHERE registration_status = 1 ORDER BY registration_id DESC limit 40")->result_array();
		   return $show_iamge;
		}
		//////////////////
		public function search_all_matches()
		{
			$from = "18";
			$to = "45";

				if(isset($_GET['registration_age_from']) && $_GET['registration_age_from'] != "null"){

					$from = $_GET['registration_age_from'];

				}

				if(isset($_GET['registration_age_to']) && $_GET['registration_age_to'] != "null"){

					$to =  $_GET['registration_age_to'];
					
				}

			$extra = "";

			if(isset($_GET['registration_gender']) && $_GET['registration_gender'] != "" && $_GET['registration_gender'] != "null"){

				$registration_gender = $_GET['registration_gender'];

				$extra .= " AND registration_gender = '$registration_gender' ";

				if(isset($_GET['registration_religion']) && $_GET['registration_religion'] != "" && $_GET['registration_religion'] != "null"){

				$registration_religion = $_GET['registration_religion'];
				$extra .= " AND registration_religion = '$registration_religion'";
				}
				if(isset($_GET['registration_age_from']) && $_GET['registration_age_from'] != "" && $_GET['registration_age_from'] != "null")
				{

				$extra .= " AND registration_age BETWEEN $from AND $to";
				}
				if(isset($_GET['registration_mother_tongue']) && $_GET['registration_mother_tongue'] != "" && $_GET['registration_mother_tongue'] != "null")
				{

				$registration_mother_tongue = $_GET['registration_mother_tongue'];
				$extra .= " AND registration_mother_tongue = '$registration_mother_tongue'";
				}
				if(isset($_GET['registration_country']) && $_GET['registration_country'] != "" && $_GET['registration_country'] != "null")
				{

				$registration_country = $_GET['registration_country'];
				$extra .= "AND registration_country = '$registration_country'";
				}
			}
			
			 else if(isset($_GET['registration_religion']) && $_GET['registration_religion'] != "" && $_GET['registration_religion'] != "null"){

				$registration_religion = $_GET['registration_religion'];
				$extra .= " AND registration_religion = '$registration_religion'";

				if(isset($_GET['registration_age_from']) && $_GET['registration_age_from'] != "" && $_GET['registration_age_from'] != "null")
				{

				$extra .= " AND registration_age BETWEEN $from AND $to";
				}
				if(isset($_GET['registration_mother_tongue']) && $_GET['registration_mother_tongue'] != "" && $_GET['registration_mother_tongue'] != "null")
				{

				$registration_mother_tongue = $_GET['registration_mother_tongue'];
				$extra .= " AND registration_mother_tongue = '$registration_mother_tongue'";
				}
				if(isset($_GET['registration_country']) && $_GET['registration_country'] != "" && $_GET['registration_country'] != "null")
				{

				$registration_country = $_GET['registration_country'];
				$extra .= "AND registration_country = '$registration_country'";
				}
			}
			else if(isset($_GET['registration_age_from']) && $_GET['registration_age_from'] != "" && $_GET['registration_age_from'] != "null")
				{

				$extra .= " AND registration_age BETWEEN $from AND $to";

				if(isset($_GET['registration_mother_tongue']) && $_GET['registration_mother_tongue'] != "" && $_GET['registration_mother_tongue'] != "null")
				{

				$registration_mother_tongue = $_GET['registration_mother_tongue'];
				$extra .= " AND registration_mother_tongue = '$registration_mother_tongue'";
				}
				if(isset($_GET['registration_country']) && $_GET['registration_country'] != "" && $_GET['registration_country'] != "null")
				{

				$registration_country = $_GET['registration_country'];
				$extra .= "AND registration_country = '$registration_country'";
				}
			}
			else if(isset($_GET['registration_mother_tongue']) && $_GET['registration_mother_tongue'] != "" && $_GET['registration_mother_tongue'] != "null")
				{

				$registration_mother_tongue = $_GET['registration_mother_tongue'];
				$extra .= " AND registration_mother_tongue = '$registration_mother_tongue'";
				
				if(isset($_GET['registration_country']) && $_GET['registration_country'] != "" && $_GET['registration_country'] != "null")
				{

				$registration_country = $_GET['registration_country'];
				$extra .= "AND registration_country = '$registration_country'";
				}
			}
			else if(isset($_GET['registration_country']) && $_GET['registration_country'] != "" && $_GET['registration_country'] != "null")
				{

				$registration_country = $_GET['registration_country'];
				$extra .= "AND registration_country = '$registration_country'";
				}
			
			//print_r("SELECT * from registration $extra");exit();
			 //print_r($extra);exit;
			$record = $this->db->query("SELECT * from registration WHERE registration_status = 1 $extra")->result_array();
			return $record;
			
		}
		//////////////////
		public function advance_search_matches()
		{
			$from = "18";
			$to = "45";

			$height_from ="4"; 
			$height_to = "8";

				if(isset($_GET['AgeFrom']) && $_GET['AgeFrom'] != "null"){

					$from = $_GET['AgeFrom'];

				}

				if(isset($_GET['Ageto']) && $_GET['Ageto'] != "null"){

					$to =  $_GET['Ageto'];
					
				}

				if(isset($_GET['PartnerFromheight']) && $_GET['PartnerFromheight'] != "null"){

					$height_from = $_GET['PartnerFromheight'];

				}

				if(isset($_GET['PartnerToheight']) && $_GET['PartnerToheight'] != "null"){

					$height_to =  $_GET['PartnerToheight'];
					
				}

			$extra = "";

			if(isset($_GET['TxtGender']) && $_GET['TxtGender'] != "" && $_GET['TxtGender'] != "null"){

				$TxtGender = $_GET['TxtGender'];

				$extra .= " AND registration_gender = '$TxtGender' ";

				if(isset($_GET['maritalstatus']) && $_GET['maritalstatus'] != "" && $_GET['maritalstatus'] != "null"){

				$maritalstatus = $_GET['maritalstatus'];
				$extra .= " AND registration_maritial_status = '$maritalstatus'";
				}
				if(isset($_GET['AgeFrom']) && $_GET['AgeFrom'] != "" && $_GET['AgeFrom'] != "null")
				{
				$extra .= " AND registration_age BETWEEN $from AND $to";
				}
				if(isset($_GET['PartnerFromheight']) && $_GET['PartnerFromheight'] != "" && $_GET['PartnerFromheight'] != "null")
				{
				$extra .= " AND registration_height BETWEEN $height_from AND $height_to";
				}
				if(isset($_GET['TxtEducationLevel']) && $_GET['TxtEducationLevel'] != "Any" && $_GET['TxtEducationLevel'] != "null")
				{
				$TxtEducationLevel = $_GET['TxtEducationLevel'];
				$extra .= " AND registration_education_level = '$TxtEducationLevel'";
				}
				if(isset($_GET['TxtMotherTongue']) && $_GET['TxtMotherTongue'] != "" && $_GET['TxtMotherTongue'] != "null")
				{
				$TxtMotherTongue = $_GET['TxtMotherTongue'];
				$extra .= " AND registration_mother_tongue = '$TxtMotherTongue'";
				}
				if(isset($_GET['city']) && $_GET['city'] != "Any" && $_GET['city'] != "null")
				{
				$city = $_GET['city'];
				$extra .= " AND registration_city = '$city'";
				}
			}
			
			 else if(isset($_GET['AgeFrom']) && $_GET['AgeFrom'] != "" && $_GET['AgeFrom'] != "null")
				{
				$extra .= "AND registration_age BETWEEN $from AND $to";
				
				if(isset($_GET['PartnerFromheight']) && $_GET['PartnerFromheight'] != "" && $_GET['PartnerFromheight'] != "null")
				{
				$extra .= " AND registration_height BETWEEN $height_from AND $height_to";
				}
				if(isset($_GET['TxtEducationLevel']) && $_GET['TxtEducationLevel'] != "Any" && $_GET['TxtEducationLevel'] != "null")
				{
				$TxtEducationLevel = $_GET['TxtEducationLevel'];
				$extra .= " AND registration_education_level = '$TxtEducationLevel'";
				}
				if(isset($_GET['TxtMotherTongue']) && $_GET['TxtMotherTongue'] != "" && $_GET['TxtMotherTongue'] != "null")
				{
				$TxtMotherTongue = $_GET['TxtMotherTongue'];
				$extra .= " AND registration_mother_tongue = '$TxtMotherTongue'";
				}
				if(isset($_GET['city']) && $_GET['city'] != "Any" && $_GET['city'] != "null")
				{
				$city = $_GET['city'];
				$extra .= " AND registration_city = '$city'";
				}
			}
			else if(isset($_GET['PartnerFromheight']) && $_GET['PartnerFromheight'] != "" && $_GET['PartnerFromheight'] != "null")
				{
				$extra .= "AND registration_height BETWEEN $height_from AND $height_to";
				
				if(isset($_GET['TxtEducationLevel']) && $_GET['TxtEducationLevel'] != "Any" && $_GET['TxtEducationLevel'] != "null")
				{
				$TxtEducationLevel = $_GET['TxtEducationLevel'];
				$extra .= " AND registration_education_level = '$TxtEducationLevel'";
				}
				if(isset($_GET['TxtMotherTongue']) && $_GET['TxtMotherTongue'] != "" && $_GET['TxtMotherTongue'] != "null")
				{
				$TxtMotherTongue = $_GET['TxtMotherTongue'];
				$extra .= " AND registration_mother_tongue = '$TxtMotherTongue'";
				}
				if(isset($_GET['city']) && $_GET['city'] != "Any" && $_GET['city'] != "null")
				{
				$city = $_GET['city'];
				$extra .= " AND registration_city = '$city'";
				}
			}
			else if(isset($_GET['TxtEducationLevel']) && $_GET['TxtEducationLevel'] != "Any" && $_GET['TxtEducationLevel'] != "null")
				{
				$TxtEducationLevel = $_GET['TxtEducationLevel'];
				$extra .= "AND registration_education_level = '$TxtEducationLevel'";
				
				if(isset($_GET['TxtMotherTongue']) && $_GET['TxtMotherTongue'] != "" && $_GET['TxtMotherTongue'] != "null")
				{
				$TxtMotherTongue = $_GET['TxtMotherTongue'];
				$extra .= " AND registration_mother_tongue = '$TxtMotherTongue'";
				}
				if(isset($_GET['city']) && $_GET['city'] != "Any" && $_GET['city'] != "null")
				{
				$city = $_GET['city'];
				$extra .= " AND registration_city = '$city'";
				}
			}

			else if(isset($_GET['TxtMotherTongue']) && $_GET['TxtMotherTongue'] != "" && $_GET['TxtMotherTongue'] != "null")
				{
				$TxtMotherTongue = $_GET['TxtMotherTongue'];
				$extra .= "AND registration_mother_tongue = '$TxtMotherTongue'";
				
				if(isset($_GET['city']) && $_GET['city'] != "Any" && $_GET['city'] != "null")
				{
				$city = $_GET['city'];
				$extra .= " AND registration_city = '$city'";
				}
			}

			else if(isset($_GET['city']) && $_GET['city'] != "Any" && $_GET['city'] != "null")
				{
				$city = $_GET['city'];
				$extra .= "AND registration_city = '$city'";
				
			}

			else if(isset($_GET['fname']) && $_GET['fname'] != "null")
				{
				$fname = $_GET['fname'];
				$extra .= "AND registration_fname = '$fname'";
				
				if(isset($_GET['lname']) && $_GET['lname'] != "" && $_GET['lname'] != "null")
				{
				$lname = $_GET['lname'];
				$extra .= " AND registration_lname = '$lname'";
				}
			}
			else if(isset($_GET['lname']) && $_GET['lname'] != "null")
				{
				$lname = $_GET['lname'];
				$extra .= "AND registration_lname = '$lname'";
				
			}

			else if(isset($_GET['pid']) && $_GET['pid'] != "" && $_GET['pid'] != "null")
				{
				$pid = $_GET['pid'];
				$pid = substr($pid,3);
				$extra .= "AND registration_id = '$pid'";
				
			}
			//print_r("SELECT * from registration WHERE registration_status = 1 $extra");exit();
			//print_r($extra);exit;
			$record = $this->db->query("SELECT * from registration WHERE registration_status = 1 $extra")->result_array();
			return $record;
		}
		////////////////////
		public function update_basic_info($form_data,$id)
		{
			// print_r($form_data);exit;
			$this->db->where('registration_id',$id);
			 $ans = $this->db->update('registration', $form_data);
			 return $ans;
		}
		///////////////////
		public function update_partner_data($form_data,$id)
		{
			// print_r($form_data);exit;
			$this->db->where('partner_register_id',$id);
			$res = $this->db->get('partner_preference')->result_array();
			// print_r($res);exit;
			if(empty($res))
			{
				 // print_r($form_data);exit;
				$form_data['partner_register_id'] = $id;
				// print_r($form_data);exit;
				$this->db->insert('partner_preference',$form_data);
				return 1;
			}
			else{
				// print_r(111);exit;
				$this->db->where('partner_register_id',$id);
			$ans = $this->db->update('partner_preference', $form_data);
			return $ans;
			}

			
		}
		////////////
		public function get_page_data($id)
        { 
            //print_r($page_name1);exit;
            $this->db->where('pages_id',$id);
			$ans = $this->db->get('pages')->result_array();
			return $ans;
        }
      

        public function melawa_data($id)
        {
			$ans = $this->db->get('projects')->result_array();
			return $ans;
        }
       

        public function success_stories()
        {
        	$this->db->order_by("sub_id","desc");
			$ans = $this->db->get('expertise')->result_array();
			return $ans;
        }
         public function show_privacy_you($id)
        {
            $this->db->where('pages_id',$id);
			$ans = $this->db->get('pages')->result_array();
			return $ans;
        }

        public function show_privacy_policy($id)
        {
            $this->db->where('pages_id',$id);
			$ans = $this->db->get('pages')->result_array();
			return $ans;
        }
        public function show_security_tips($id)
        {
            $this->db->where('pages_id',$id);
			$ans = $this->db->get('pages')->result_array();
			return $ans;
        }
        public function show_classifieds($id)
        {
             $this->db->where('pages_id',$id);
			 $ans = $this->db->get('pages')->result_array();
			 return $ans;
        }

        public function show_about_us($id)
        {
             $this->db->where('pages_id',$id);
			 $ans = $this->db->get('pages')->result_array();
			 return $ans;

        }
        public function show_view_more_melawa($id)
		{
			$this->db->where('sub_id',$id);
			$result = $this->db->get('projects')->result_array();
			return $result;
		}
		public function show_melawa_img($id)
		{
			$this->db->where('melawa_sub_id',$id);
			$result = $this->db->get('melawa_images')->result_array();
			return $result;
		}
		public function update_otp($otp,$email)
		{
			// print_r($pass);exit;
			$data = array('registration_pass_otp' => $otp
				);
			$this->db->where('registration_email',$email);
			$ans = $this->db->update('registration', $data);
			return $ans;
		}
		public function check_otp($id)
		{
			$this->db->where('registration_id',$id);
			$ans = $this->db->get('registration')->result_array();
			return $ans;
		}
		public function update_new_pass_form($form_data)
		{
			//print_r($form_data);exit;
			$data = array('registration_password' => $form_data['registration_pass']
				);
			$this->db->where('registration_id',$form_data['registration_id']);
			$ans = $this->db->update('registration', $data);
			return $ans;
		}
		//////////
		public function remove_pic_from_album($id)
         {
         	$data = array('album_id' =>$id
				);
              $this->db->where($data);
              $this->db->delete('register_album');
         }
         //////////
		public function get_cnt_of_msg($id,$last_login){
			
			// print_r("SELECT count(*) as cnt FROM message WHERE message_to = $id AND message_date1 > '$last_login'");exit;
			return $this->db->query("SELECT count(*) as cnt FROM message WHERE message_to = $id AND message_date1 > '$last_login'")->result_array();

		}


	
		////////////////
	}
?>