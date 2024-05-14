	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class External extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->auth->restrict();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_external');
		$this->load->library('pdf');
	}
	
	function index(){
		$this->load->view('external/v_external');
	}
		
	function data_external(){
		$data = $this->M_external->data_external();
		echo json_encode($data);
	}	
				
	function get_detail(){
		$id_hasil 	=$this->input->get('id_hasil');
		$data	 	=$this->M_external->get_detail_by_id($id_hasil);
		echo json_encode($data);
	}
	
	function cetak_rekap(){       
		$this->load->view('print/rekap_hasil_ex');
	}
	
	function cetak_individu(){       
		$this->load->view('print/individu_ex');
	}
	
	function lampiran(){       
		$this->load->view('print/lampiran');
	}
	function tnd_terima(){       
		$this->load->view('print/tanda_terima');
	}
	
	
}
?>