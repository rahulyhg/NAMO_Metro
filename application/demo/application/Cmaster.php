<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Cmaster extends CI_Controller {

		public function __construct(){

			parent::__construct();

			$this->load->model('mmaster');
			$this->load->model('mlogin');
			$this->load->library('session');
			$this->load->library('upload');
			$this->load->library('db_operations');
			$this->load->library('mypdf_class');
			$this->load->library('cart');
        	$this->load->library('email');
		}




		/////////////////////
	}
?>