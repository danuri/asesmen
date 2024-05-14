<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_simsdm extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('excel','session'));
		$this->load->library('pdf');
		$this->load->library('excel');
		$this->load->model('M_insert_simsdm');
		$this->load->model('M_kegiatan');
		$this->load->model('M_importpeserta');
		
	}

	function index(){
		$data = array(
						'list_data'		=> $this->M_importpeserta->getData(),
						'kegiatan' 		=> $this->M_kegiatan->aktif_kegiatan(),
						'simsdm' 		=> $this->M_insert_simsdm->data_simsdm(),
						//'hasil_insert' 	=> $this->M_insert_simsdm->hasil_insert()
					);
		$data['hasil_insert'] 		= $this->M_insert_simsdm->hasil_insert();
		$this->load->view('import/insert_simsdm',$data); //external/v_external.php import_excel.php
			
	}

	
	function simpan_insert_simsdm(){
		$id_kegiatan	=$this->input->post('id_kegiatan');
		$kd_kegiatan	=$this->input->post('kd_kegiatan');
		$nip			=$this->input->post('nip');
		$nama			=$this->input->post('nama');
		$pangkat		=$this->input->post('pangkat');
		$jabatan		=$this->input->post('jabatan');
		$unker			=$this->input->post('unker');
		$jenjang		=$this->input->post('jenjang');
		$tahun			=$this->input->post('tahun');
		$ket			=$this->input->post('ket');
		$data			=$this->M_insert_simsdm->simpan_insert_simsdm($id_kegiatan,$kd_kegiatan,$nip,$nama,$pangkat,$jabatan,$unker,$jenjang,$tahun,$ket);
		echo json_encode($data);
		redirect('Insert_simsdm');

	}
	
	function insert_peserta_simsdm($idd){
		$data 	= $this->M_insert_simsdm->insert_peserta_simsdm($idd);
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Insert');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Insert');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}	
	
	function cetak_hasil_insert(){
    $data['cetak_insert'] = $this->M_insert_simsdm->cetak_insert();
    $this->load->view('cetak/cetak_insert', $data);
	}	


}