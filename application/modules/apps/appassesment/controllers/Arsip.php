<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Arsip extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->auth->restrict();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_arsip');
	}
	
	function index(){
		$data['arsip'] 		= $this->M_arsip->data_arsip();
		$this->load->view('arsip/v_arsip',$data);
	}
	
	function get_arsip($idd){
		$data['dokumen'] 	= $this->M_arsip->dokumen_arsip($idd);
		$this->load->view('arsip/v_dokumen', $data);
    }	

	function simpan_arsip(){
		$id_link_arsip		=$this->input->post('id_link_arsip');
		$id_konten			=$this->input->post('id_konten');
		$judul_arsip		=$this->input->post('judul_arsip');
		$path_folder		=$this->input->post('path_folder');
		$tahun				=$this->input->post('tahun');
		$data				=$this->M_arsip->simpan_arsip($id_link_arsip,$id_konten,$judul_arsip,$path_folder,$tahun);
		echo json_encode($data);
	}

	function hapus_arsip($idd){
		$data		 =$this->M_arsip->hapus_arsip($idd);
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Link Berhasil Dihapus');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Menghapus Link');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}

				
}
?>