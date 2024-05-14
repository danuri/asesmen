<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Kegiatan extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->auth->restrict();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_kegiatan');
		$this->load->library('pdf');
	}
	
	function index(){
		$this->load->view('v_kegiatan');
	}
	
	function data_kegiatan(){
		$data = $this->M_kegiatan->data_kegiatan();
		echo json_encode($data);
	}	
	
	function get_kegiatan(){
		$id_kegiatan =$this->input->get('id_kegiatan');
		$data	 	 =$this->M_kegiatan->get_kegiatan_by_id($id_kegiatan);
		echo json_encode($data);
	}

	function simpan_kegiatan(){
		
		$kd_kegiatan		=$this->input->post('kd_kegiatan');
		$nama_kegiatan		=$this->input->post('nama_kegiatan');
		$jenis_kegiatan		=$this->input->post('jenis_kegiatan');
		$instansi		=$this->input->post('instansi');
		$tgl_keg		=$this->input->post('tgl_keg');
		$ket			=$this->input->post('ket');
		$tahun			=$this->input->post('tahun');
		$link_doc		=$this->input->post('link_doc');
		$data			=$this->M_kegiatan->simpan_kegiatan($kd_kegiatan,$nama_kegiatan,$jenis_kegiatan,$instansi,$tgl_keg,$ket,$tahun,$link_doc);
		echo json_encode($data);
	}


	function update_kegiatan(){
		$id_kegiatan		=$this->input->post('id_personil');
		$kd_kegiatan		=$this->input->post('kd_kegiatan');
		$nama_kegiatan		=$this->input->post('nama_kegiatan');
		$jenis_kegiatan		=$this->input->post('jenis_kegiatan');
		$instansi		=$this->input->post('instansi');
		$tgl_keg		=$this->input->post('tgl_keg');
		$ket			=$this->input->post('ket');
		$tahun			=$this->input->post('tahun');
		$link_doc		=$this->input->post('link_doc');

		$data=$this->M_lembaga->update_kegiatan($id_kegiatan,$kd_kegiatan,$nama_kegiatan,$jenis_kegiatan,$instansi,$tgl_keg,$ket,$tahun,$link_doc);
		echo json_encode($data);
	}


/*
	function update_kegiatan(){
		$id_kegiatan		=$this->input->post('id_kegiatan');
		$kd_kegiatan		=$this->input->post('kd_kegiatan');
		$nama_kegiatan		=$this->input->post('nama_kegiatan');
		$jenis_kegiatan		=$this->input->post('jenis_kegiatan');
		$instansi		=$this->input->post('instansi');
		$tgl_keg		=$this->input->post('tgl_keg');
		$ket			=$this->input->post('ket');
		$tahun			=$this->input->post('tahun');
		$link_doc		=$this->input->post('link_doc');
		$data=$this->M_kegiatan->update_kegiatan($id_kegiatan,$kd_kegiatan,$nama_kegiatan,$jenis_kegiatan,$instansi,$tgl_keg,$ket,$tahun,$link_doc);
		echo json_encode($data);
	}

*/
		
	function hapus_kegiatan(){
		$id_kegiatan	=$this->input->post('id_kegiatan');
		$data			=$this->M_kegiatan->hapus_kegiatan($id_kegiatan);
		echo json_encode($data);
	}
				

				
}
?>