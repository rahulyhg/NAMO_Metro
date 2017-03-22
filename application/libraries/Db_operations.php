<?php
	class Db_operations{

		public $CI="";
		public function __construct(){

			$this->CI =& get_instance();
		}

		function data_insert($table='',$arr=''){

			$this->CI->db->insert($table,$arr);
			return $this->CI->db->insert_id();
		}

		function get_recordlist($table='',$field='',$orderby=''){

			if(!empty($orderby)){

				$this->CI->db->order_by($field,$orderby);
			}

			$tdata = $this->CI->db->get($table);
			return $tdata->result_array();
		}

		function get_record($table='', $condition, $field='', $orderby=''){

			if(!empty($orderby)){

				$this->CI->db->order_by($field,$orderby);
			}
			return $this->CI->db->get_where($table,$condition)->result_array();
		}

		function data_update($table='',$arr='',$field='',$value=''){

			$this->CI->db->where($field,$value);
			return $this->CI->db->update($table,$arr);
		}


		function delete_record($table='',$arr=''){

			$this->CI->db->delete($table,$arr);
		}
	}
?>