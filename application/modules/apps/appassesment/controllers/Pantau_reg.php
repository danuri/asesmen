<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Pantau_reg extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->auth->restrict();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('appujian/M_pantau_ujian');
		$this->load->library('pdf');
		$this->load->library('excel');
	}
	
///// PANTAU UJIAN
	
	function index(){
		$this->load->view('v_pantau_reg');
	}
	
	function daftar_hadir(){			
		$data = $this->M_pantau_ujian->data_absen();
		echo json_encode($data);
		
	}
	
	function regist(){			
		$data = $this->M_pantau_ujian->data_regist();
		echo json_encode($data);
		
	}	
	
	function regist_nonasn(){			
		$data = $this->M_pantau_ujian->data_regist_nonasn();
		echo json_encode($data);
		
	}	
	
	function apm_1(){			
		$data = $this->M_pantau_ujian->data_apm_1();
		echo json_encode($data);
		
	}	
	function apm_2(){			
		$data = $this->M_pantau_ujian->data_apm_2();
		echo json_encode($data);
		
	}	
	function papi(){			
		$data = $this->M_pantau_ujian->data_papi();
		echo json_encode($data);
		
	}	
	function ankas(){			
		$data = $this->M_pantau_ujian->data_ankas();
		echo json_encode($data);
		
	}	
	function sjt(){			
		$data = $this->M_pantau_ujian->data_sjt();
		echo json_encode($data);
		
	}	
	function ci(){			
		$data = $this->M_pantau_ujian->data_ci();
		echo json_encode($data);
		
	}	
	function qkom(){			
		$data = $this->M_pantau_ujian->data_qkom();
		echo json_encode($data);
					
	}

///// WAWANCARA & LGD
	
	function wwcr_nuns(){			
		$data = $this->M_pantau_ujian->data_wwcr_nuns();
		echo json_encode($data);
		
	}	
	
	function lgd_nuns(){			
		$data = $this->M_pantau_ujian->data_lgd_nuns();
		echo json_encode($data);
		
	}	
	
	function wwcr_soft(){			
		$data = $this->M_pantau_ujian->data_wwcr_soft();
		echo json_encode($data);
		
	}	
	
	function lgd_soft(){			
		$data = $this->M_pantau_ujian->data_lgd_soft();
		echo json_encode($data);
		
	}	
	
	function wwcr_nans(){			
		$data = $this->M_pantau_ujian->data_wwcr_nans();
		echo json_encode($data);
		
	}	
	
	function lgd_nans(){			
		$data = $this->M_pantau_ujian->data_lgd_nans();
		echo json_encode($data);
		
	}	
	
	function wwcr_lans(){			
		$data = $this->M_pantau_ujian->data_wwcr_lans();
		echo json_encode($data);
		
	}	
	
	function lgd_lans(){			
		$data = $this->M_pantau_ujian->data_lgd_lans();
		echo json_encode($data);
		
	}	
	
	function wwcr_sofiati(){			
		$data = $this->M_pantau_ujian->data_wwcr_sofiati();
		echo json_encode($data);
		
	}	
	
	function lgd_sofiati(){			
		$data = $this->M_pantau_ujian->data_lgd_sofiati();
		echo json_encode($data);
		
	}	
	
	function cetak_jadwal(){
		$data['wwcr_lgd'] = $this->M_pantau_ujian->cetak_wwcr_lgd();
		$this->load->view('cetak/wwcr_lgd', $data);
    }	
	
///// END OF WAWANCARA & LGD	

///// END OF PANTAU UJIAN	
	
		
	function lihat_qkom($id){
    $data['qkom'] = $this->M_pantau_ujian->cetak_qkom_row($id);
    $this->load->view('cetak/lap_qkom', $data);
	}	

	function lihat_qkom2($nip){
    $data['qkom'] = $this->M_pantau_ujian->cetak_qkom_row2($nip);
    $this->load->view('cetak/lap_qkom2', $data);
	}	

	function lihat_ankas($id_peserta_ankas){
    $data['ankas'] = $this->M_pantau_ujian->cetak_ankas_row($id_peserta_ankas);
    $this->load->view('cetak/lap_ankas', $data);
	}	

	function lihat_ci($id_ci){
    $data['ci'] = $this->M_pantau_ujian->cetak_ci_row($id_ci);
    $this->load->view('cetak/lap_ci', $data);
	}	

	function lihat_ci2($nip){
    $data['ci'] = $this->M_pantau_ujian->cetak_ci_row2($nip);
    $this->load->view('cetak/lap_ci2', $data);
	}	

	function lihat_drh($id){
    $data['drh'] = $this->M_pantau_ujian->cetak_drh_row($id);
    $this->load->view('cetak/lap_drh', $data);
    }	
	
	function lihat_drh2($nip){
    $data['drh'] = $this->M_pantau_ujian->cetak_drh_row2($nip);
    $this->load->view('cetak/lap_drh', $data);
    }	
	
				
}
?>