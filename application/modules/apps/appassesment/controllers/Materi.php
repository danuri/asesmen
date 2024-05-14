<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Materi extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->auth->restrict();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_materi');
	}
	
///// MATERI
	
	function index(){
		$this->load->view('materi/v_materi');
	}
	
	function data_materi(){
		$data = $this->M_materi->data_materi();
		echo json_encode($data);
	}	
	
	function get_materi(){
		$id_materi =$this->input->get('id_materi');
		$data	 	=$this->M_materi->get_materi_by_id($id_materi);
		echo json_encode($data);
	}

	function simpan_materi(){
		$id_materi			=$this->input->post('id_materi');
		$nama_materi		=$this->input->post('nama_materi');
		$jml_soal			=$this->input->post('jml_soal');
		$status_materi		=$this->input->post('status_materi');
		$data=$this->M_materi->simpan_materi($id_materi,$nama_materi,$jml_soal,$status_materi);
		echo json_encode($data);
	}

	function update_materi(){
		$id_materi			=$this->input->post('id_materi');
		$nama_materi		=$this->input->post('nama_materi');
		$jml_soal			=$this->input->post('jml_soal');
		$status_materi		=$this->input->post('status_materi');
		$data=$this->M_materi->update_materi($id_materi,$nama_materi,$jml_soal,$status_materi);
		echo json_encode($data);
	}
		
	function hapus_materi(){
		$id_materi	=$this->input->post('id_materi');
		$data		=$this->M_materi->hapus_materi($id_materi);
		echo json_encode($data);
	}
				
///// END OF MATERI

				
}
?>