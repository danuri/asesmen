<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Master_data extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->auth->restrict();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_master_data');
		$this->load->library('pdf');
	}
	
//==============================================================================================================================
	
	function index(){
		$this->load->view('master/master_peserta');
	}
	
	function data_master_peserta(){
		$data = $this->M_master_data->data_master_peserta();
		echo json_encode($data);
	}	
	
	function get_peserta(){
		$nip	 =$this->input->get('nip');
		$data	 =$this->M_master_data->get_peserta_by_id($nip);
		echo json_encode($data);
	}

/* DATA PESERTA
	function update_peserta(){
		$id_peserta		=$this->input->post('id_peserta');
		$id_kegiatan	=$this->input->post('id_kegiatan');
		$kd_kegiatan	=$this->input->post('kd_kegiatan');
		$nip			=$this->input->post('nip');
		$nama			=$this->input->post('nama');
		$pangkat		=$this->input->post('pangkat');
		$jabatan		=$this->input->post('jabatan');
		$unker			=$this->input->post('unker');
		$jenjang		=$this->input->post('jenjang');
		$ket			=$this->input->post('ket');
		$tahun			=$this->input->post('tahun');
		$data			=$this->M_master_data->update_peserta($id_peserta, $id_kegiatan, $kd_kegiatan, $nip,$nama, $pangkat, $jabatan, $unker, $jenjang, $ket, $tahun);
		echo json_encode($data);
	}
*/

// REGISTRASI
	function update_peserta(){
		$nip    		=$this->input->post('nip');
		$ket			=$this->input->post('ket');
		$data			=$this->M_master_data->update_peserta($nip,$ket);
		echo json_encode($data);
	}
	
//==============================================================================================================================
				
}
?>