<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Sjt extends MX_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_sjt');
	}
	
///// SJT


	public function index(){
	  $data['pegawai'] = $this->M_sjt->data(); //menampilkan seluruh data pegawai
	  $this->load->view('sjt/sjt',$data);
	}

	public function cari(){
	  $keyword = $this->input->get('cari', TRUE); //mengambil nilai dari form input cari
	  $data['pegawai'] = $this->M_sjt->cari($keyword); //mencari data pegawai berdasarkan inputan
	  $this->load->view('sjt/sjt', $data); //menampilkan data yang sudah dicari
	}	
	
	
///// END OF SJT

				
}
?>