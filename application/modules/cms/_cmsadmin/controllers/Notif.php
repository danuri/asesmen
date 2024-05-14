<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Notif extends MX_Controller {

	function __construct(){
		$this->auth->restrict();
		parent::__construct();
	}

	function webadmin(){
		$this->load->view('notif/webadmin');
	}


}
?>