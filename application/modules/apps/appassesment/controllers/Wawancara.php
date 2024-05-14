<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Wawancara extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->auth->restrict();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_wawancara');
		$this->load->library('pdf');
		$this->load->library('excel');

	}
	
///// 
	
	function index(){
		$this->load->view('wawancara/index.php');
	}
	
	function data_wawancara(){
		$data = $this->M_wawancara->data_wawancara();
		echo json_encode($data);
	}	
	
///// END OF 

				
}
?>