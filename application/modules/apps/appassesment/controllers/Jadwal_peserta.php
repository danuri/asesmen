<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Jadwal_peserta extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->auth->restrict();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_jadwal_peserta');
		$this->load->library('pdf');
		$this->load->library('excel');
	}
	
///// 
	
	function index(){
		$data ['pic'] 		= $this->M_jadwal_peserta->get_pic();
		$data ['peserta'] 	= $this->M_jadwal_peserta->get_peserta();
		$data ['pic_lgd'] 	= $this->M_jadwal_peserta->get_pic_lgd();
		$data ['pic_wwcr'] 	= $this->M_jadwal_peserta->get_pic_wwcr();
		$data ['apm_dua'] 	= $this->M_jadwal_peserta->lihat_apm_dua_row();
		$data ['cfit'] 	    = $this->M_jadwal_peserta->lihat_cfit_row();
		$this->load->view('jadwal/index',$data);
	}

	function create_jadwal(){
		$data ['pic'] 		= $this->M_jadwal_peserta->get_pic();
		$data ['peserta'] 	= $this->M_jadwal_peserta->get_peserta();
		$data ['pic_lgd'] 	= $this->M_jadwal_peserta->get_pic_lgd();
		$data ['pic_wwcr'] 	= $this->M_jadwal_peserta->get_pic_wwcr();
		$data ['apm_dua'] 	= $this->M_jadwal_peserta->lihat_apm_dua_row();
		$this->load->view('jadwal/buat_jadwal',$data);
	}

	function data_peserta(){
		$data = $this->M_jadwal_peserta->data_peserta();
		echo json_encode($data);
	}	
	
	function get_peserta(){
		$id_peserta =$this->input->get('id_peserta');
		$data	 	=$this->M_jadwal_peserta->get_peserta_by_id($id_peserta);
		echo json_encode($data);
	}

	
	function simpan_jadwal(){
		$id_jadwal			=$this->input->post('id_jadwal');
		$id_peserta			=$this->input->post('id_peserta');
		$nip				=$this->input->post('nip');
		$nama				=$this->input->post('nama');
		$tgl_psikometri		=$this->input->post('tgl_psikometri');
		$sesi			    =$this->input->post('sesi');
		$tgl_lgd			=$this->input->post('tgl_lgd');
		$kd_personil_lgd	=$this->input->post('kd_personil_lgd');
		$batch	            =$this->input->post('batch');
		$kelompok			=$this->input->post('kelompok');
		$tgl_wwcr			=$this->input->post('tgl_wwcr');
		$kd_personil_wwcr	=$this->input->post('kd_personil_wwcr');
		$ket				=$this->input->post('ket');
		$data				=$this->M_jadwal_peserta->update_jadwal($id_jadwal,$id_peserta,$nip,$nama,$tgl_psikometri,$sesi,$tgl_lgd,$kd_personil_lgd,$batch,$kelompok,$tgl_wwcr,$kd_personil_wwcr,$ket);
		echo json_encode($data);
		redirect($_SERVER['HTTP_REFERER']);
	}
		
	function lihat_apm_dua($idd){
		$data ['apm_dua'] = $this->M_jadwal_peserta->lihat_apm_dua_row($idd);
		$this->load->view('jadwal/index',$data);
	}	
	
	function lihat_cfit($idd){
		$data ['cfit'] = $this->M_jadwal_peserta->lihat_cfit_row($idd);
		$this->load->view('jadwal/index',$data);
	}	
	
	
	function cetak_jadwal_peserta(){
		$data['jadwal_peserta'] = $this->M_jadwal_peserta->cetak_jadwal_peserta();
		$this->load->view('jadwal/jadwal_peserta', $data);
	}	

	function cetak_jadwal_assessor(){
		$data['jadwal_assessor'] = $this->M_jadwal_peserta->cetak_jadwal_assessor();
		$this->load->view('jadwal/jadwal_assessor', $data);
	}	

	

		
///// END OF 

				
}
?>