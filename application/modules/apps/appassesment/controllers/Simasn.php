<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Simasn extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->auth->restrict();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_simasn');
	}
	
///// SIMASN
	
	function index(){
		$this->load->view('simasn/v_simasn');
	}
	
	function data_simasn(){
		$data = $this->M_simasn->data_simasn();
		echo json_encode($data);
	}	
	
///// END OF SIMASN

				
}
?>