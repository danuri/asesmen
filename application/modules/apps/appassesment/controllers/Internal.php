<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Internal extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->auth->restrict();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_peserta_internal');

	}
	function ukom2021(){
		$this->load->view('peserta_internal/ukom2021');
	}
	
	function ukom2022(){
		$this->load->view('peserta_internal/ukom2022');
	}
	
	function pantau2022(){
		$this->load->view('peserta_internal/pantau2022');
	}
	
	function pic2021(){
		$this->load->view('peserta_internal/hasil_lap_2021');
	}
		
	function get_pic2021(){
		$data = $this->M_peserta_internal->data_pic2021();
		echo json_encode($data);
	}	
	
}
?>