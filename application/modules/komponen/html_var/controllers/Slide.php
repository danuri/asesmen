<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slide extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_web_var');
	}

	function index(){
			$data['tahun'] = "2014 mamak";

			$sess = $this->session->userdata('visit');
			$path='assets/themes/'.$sess['theme'].'/komponen/html_var/slide.php';
			if(file_exists($path)){	
				$this->viewPath = '../../assets/themes/'.$sess['theme'].'/komponen/html_var/';
				$this->load->view($this->viewPath.'slide',$data);
			} else {
				$this->load->view("slide");
			}
	}

//////////////////////////////////////////////////////////////////////////////////////////
}	
?>