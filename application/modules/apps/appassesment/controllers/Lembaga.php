<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Lembaga extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->auth->restrict();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_lembaga');
	}
	
///// LEMBAGA
	
	function index(){
		$this->load->view('lembaga/v_lembaga');
	}
	
	function data_lembaga(){
		$data = $this->M_lembaga->data_lembaga();
		echo json_encode($data);
	}	
	
	function get_lembaga(){
		$id_personil =$this->input->get('id_personil');
		$data	 	 =$this->M_lembaga->get_lembaga_by_id($id_personil);
		echo json_encode($data);
	}

	function simpan_lembaga(){
		$id_personil	=$this->input->post('id_personil');
		$kd_personil	=$this->input->post('kd_personil');
		$nama_personil	=$this->input->post('nama_personil');
		$nip_personil	=$this->input->post('nip_personil');
		$pangkat		=$this->input->post('pangkat');
		$jabatan		=$this->input->post('jabatan');
		//$data=$this->M_lembaga->simpan_lembaga($id_personil,$kd_personil,$nama_personil,$nip_personil,$pangkat,$jabatan);
		$data=$this->M_lembaga->simpan_lembaga($kd_personil,$nama_personil,$nip_personil,$pangkat,$jabatan);
		echo json_encode($data);
	}

	function update_lembaga(){
		$id_personil	=$this->input->post('id_personil');
		$kd_personil	=$this->input->post('kd_personil');
		$nama_personil	=$this->input->post('nama_personil');
		$nip_personil	=$this->input->post('nip_personil');
		$pangkat		=$this->input->post('pangkat');
		$jabatan		=$this->input->post('jabatan');
		$data=$this->M_lembaga->update_lembaga($id_personil,$kd_personil,$nama_personil,$nip_personil,$pangkat,$jabatan);
		echo json_encode($data);
	}
		
	function hapus_lembaga(){
		$id_personil =$this->input->post('id_personil');
		$data		 =$this->M_lembaga->hapus_lembaga($id_personil);
		echo json_encode($data);
	}
				
///// END OF LEMBAGA

				
}
?>