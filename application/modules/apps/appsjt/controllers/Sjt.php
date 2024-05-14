<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Sjt extends MX_Controller {

  function __construct(){
	    parent::__construct();
		$this->auth->restrict();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_sjt');
  }


	function index()  {
		$this->load->view('instruksi_sjt');
  }
 
	function sjt_satu()  {
		$this->load->view('sjt_paket1');
  }
  
	function sjt_dua()  {
		$this->load->view('sjt_paket2');
  }
  
	function sjt_tiga()  {
		$this->load->view('sjt_paket3');
  }
  
	function sjt_empat()  {
		$this->load->view('sjt_paket4');
  }
  

	
}
?>