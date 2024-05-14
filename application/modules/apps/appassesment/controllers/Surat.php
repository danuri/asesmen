<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Surat extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->auth->restrict();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_surat');
		$this->load->library('pdf');
	}
	
///// SURAT KELUAR
	
	function index(){
		$this->load->view('surat/v_surat_keluar');
	}
	
	function data_surat_keluar(){
		$data = $this->M_surat->data_surat_keluar();
		echo json_encode($data);
	}
	
	function get_surat_keluar(){
		$id_surat_keluar =$this->input->get('id_surat_keluar');
		$data	 	 	 =$this->M_surat->get_surat_keluar_by_id($id_surat_keluar);
		echo json_encode($data);
	}

	function simpan_surat_keluar(){
		$id_surat_keluar	=$this->input->post('id_surat_keluar');
		$id_kegiatan		=$this->input->post('id_kegiatan');
		$kd_kegiatan		=$this->input->post('kd_kegiatan');
		$nmr_srt_keluar		=$this->input->post('nmr_srt_keluar');
		$tgl_srt_keluar		=$this->input->post('tgl_srt_keluar');
		$tujuan_srt_keluar	=$this->input->post('tujuan_srt_keluar');
		$redaksi_srt_keluar	=$this->input->post('redaksi_srt_keluar');
		$data=$this->M_surat->simpan_surat_keluar($id_surat_keluar,$id_kegiatan,$kd_kegiatan,$nmr_srt_keluar,$tgl_srt_keluar,$tujuan_srt_keluar,$redaksi_srt_keluar);
		echo json_encode($data);
	}

	function update_surat_keluar(){
		$id_surat_keluar	=$this->input->post('id_surat_keluar');
		$id_kegiatan		=$this->input->post('id_kegiatan');
		$kd_kegiatan		=$this->input->post('kd_kegiatan');
		$nmr_srt_keluar		=$this->input->post('nmr_srt_keluar');
		$tgl_srt_keluar		=$this->input->post('tgl_srt_keluar');
		$tujuan_srt_keluar	=$this->input->post('tujuan_srt_keluar');
		$redaksi_srt_keluar	=$this->input->post('redaksi_srt_keluar');
		$data=$this->M_surat->update_surat_keluar($id_surat_keluar,$id_kegiatan,$kd_kegiatan,$nmr_srt_keluar,$tgl_srt_keluar,$tujuan_srt_keluar,$redaksi_srt_keluar);
		echo json_encode($data);
	}
		
	function hapus_surat_keluar(){
		$id_surat_keluar =$this->input->post('id_surat_keluar');
		$data		 	 =$this->M_surat->hapus_surat_keluar($id_surat_keluar);
		echo json_encode($data);
	}
				
///// END OF SURAT KELUAR

				
}
?>