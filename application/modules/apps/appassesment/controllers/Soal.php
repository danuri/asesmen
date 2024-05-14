<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Soal extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->auth->restrict();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_soal');
		$this->load->model('M_materi');
	}
		
///// PAPI KOSTICK
	
	function papi(){
		$this->load->view('materi/v_soal_papi');
	}
	
	function soal_papi(){
		$data = $this->M_soal->soal_papi();
		echo json_encode($data);
	}	
	
	function get_soal_papi(){
		$id_papi	=$this->input->get('id_papi');
		$data	 	=$this->M_soal->get_papi_by_id($id_papi);
		echo json_encode($data);
	}

	function simpan_papi(){
		$id_papi			=$this->input->post('id_papi');
		$soal_papi_a		=$this->input->post('soal_papi_a');
		$soal_papi_b		=$this->input->post('soal_papi_b');
		$data=$this->M_soal->simpan_papi($id_papi,$soal_papi_a,$soal_papi_b);
		echo json_encode($data);
	}

	function update_papi(){
		$id_papi			=$this->input->post('id_papi');
		$soal_papi_a		=$this->input->post('soal_papi_a');
		$soal_papi_b		=$this->input->post('soal_papi_b');
		$data=$this->M_soal->update_papi($id_papi,$soal_papi_a,$soal_papi_b);
		echo json_encode($data);
	}
		
	function hapus_papi(){
		$id_papi	=$this->input->post('id_papi');
		$data		=$this->M_soal->hapus_papi($id_papi);
		echo json_encode($data);
	}
				
///// END OF MATERI

///// SJT
	
	function sjt(){
		$this->load->view('materi/v_soal_sjt');
	}
	
	function soal_sjt(){
		$data = $this->M_soal->soal_sjt();
		echo json_encode($data);
	}	
	
	function get_soal_sjt(){
		$id_sjt		=$this->input->get('id_sjt');
		$data	 	=$this->M_soal->get_sjt_by_id($id_sjt);
		echo json_encode($data);
	}

	function simpan_sjt(){
		$id_sjt		=$this->input->post('id_sjt');
		$id_materi	=$this->input->post('id_materi');
		$soal_sjt	=$this->input->post('soal_sjt');
		$opsi_a		=$this->input->post('opsi_a');
		$opsi_b		=$this->input->post('opsi_b');
		$opsi_c		=$this->input->post('opsi_c');
		$opsi_d		=$this->input->post('opsi_d');
		$opsi_e		=$this->input->post('opsi_e');
		$nilai_a	=$this->input->post('nilai_a');
		$nilai_b	=$this->input->post('nilai_b');
		$nilai_c	=$this->input->post('nilai_c');
		$nilai_d	=$this->input->post('nilai_d');
		$nilai_e	=$this->input->post('nilai_e');
		$data=$this->M_soal->simpan_sjt($id_sjt,$id_materi,$soal_sjt,$opsi_a,$opsi_b,$opsi_c,$opsi_d,$opsi_e,$nilai_a,$nilai_b,$nilai_c,$nilai_d,$nilai_e);
		echo json_encode($data);
	}

	function update_sjt(){
		$id_sjt				=$this->input->post('id_sjt');
		$id_materi	=$this->input->post('id_materi');
		$soal_sjt	=$this->input->post('soal_sjt');
		$opsi_a		=$this->input->post('opsi_a');
		$opsi_b		=$this->input->post('opsi_b');
		$opsi_c		=$this->input->post('opsi_c');
		$opsi_d		=$this->input->post('opsi_d');
		$opsi_e		=$this->input->post('opsi_e');
		$nilai_a	=$this->input->post('nilai_a');
		$nilai_b	=$this->input->post('nilai_b');
		$nilai_c	=$this->input->post('nilai_c');
		$nilai_d	=$this->input->post('nilai_d');
		$nilai_e	=$this->input->post('nilai_e');
		$data=$this->M_soal->update_sjt($id_sjt,$id_materi,$soal_sjt,$opsi_a,$opsi_b,$opsi_c,$opsi_d,$opsi_e,$nilai_a,$nilai_b,$nilai_c,$nilai_d,$nilai_e);
		echo json_encode($data);
	}
		
	function hapus_sjt(){
		$id_sjt		=$this->input->post('id_sjt');
		$data		=$this->M_soal->hapus_sjt($id_sjt);
		echo json_encode($data);
	}
				
///// END OF SJT

///// ANALISA KASUS
	
	function ankas(){
		$this->load->view('materi/v_soal_ankas');
	}
	
	function soal_ankas(){
		$data = $this->M_soal->soal_ankas();
		echo json_encode($data);
	}	
	
	function detail_soal_ankas($idd){
		$data['detail_soal']	=$this->M_soal->detail_soal_ankas($idd);
		$this->load->view('materi/v_soal_ankas_detail',$data);
	}
	
	function get_soal_ankas(){
		$id_ankas	=$this->input->get('id_ankas');
		$data	 	=$this->M_soal->get_ankas_by_id($id_ankas);
		echo json_encode($data);
	}

	function simpan_ankas(){
		$id_materi		=$this->input->post('id_materi');
		$wacana			=$this->input->post('wacana');
		$tanya_ankas1	=$this->input->post('tanya_ankas1');
		$tanya_ankas2	=$this->input->post('tanya_ankas2');
		$tanya_ankas3	=$this->input->post('tanya_ankas3');
		$tanya_ankas4	=$this->input->post('tanya_ankas4');
		$digunakan		=$this->input->post('digunakan');
		$ket			=$this->input->post('ket');
		$data=$this->M_soal->simpan_ankas($id_materi,$wacana,$tanya_ankas1,$tanya_ankas2,$tanya_ankas3,$tanya_ankas4,$digunakan,$ket);
		echo json_encode($data);
	}

	function update_ankas(){
		$id_ankas		=$this->input->post('id_ankas');
		$id_materi		=$this->input->post('id_materi');
		$wacana			=$this->input->post('wacana');
		$tanya_ankas1	=$this->input->post('tanya_ankas1');
		$tanya_ankas2	=$this->input->post('tanya_ankas2');
		$tanya_ankas3	=$this->input->post('tanya_ankas3');
		$tanya_ankas4	=$this->input->post('tanya_ankas4');
		$digunakan		=$this->input->post('digunakan');
		$ket			=$this->input->post('ket');
		$data=$this->M_soal->update_ankas($id_ankas,$id_materi,$wacana,$tanya_ankas1,$tanya_ankas2,$tanya_ankas3,$tanya_ankas4,$digunakan,$ket);
		echo json_encode($data);
	}
		
	function hapus_ankas(){
		$id_ankas	=$this->input->post('id_ankas');
		$data		=$this->M_soal->hapus_ankas($id_ankas);
		echo json_encode($data);
	}
				
///// END OF ANALISA KASUS


				
}
?>