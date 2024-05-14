<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Dashboard extends MX_Controller {

  function __construct(){
	    parent::__construct();
		$this->auth->restrict();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_dashboard');
  }

	function index()  {
		$x 							= $this->M_dashboard->get_chart()->result();
		$data['chart'] 				= json_encode($x);
		$data['peserta'] 			= $this->M_dashboard->hitung_peserta();
		$data['penyelenggaraan'] 	= $this->M_dashboard->hitung_kegiatan();
		$data['tahun'] 				= $this->M_dashboard->get_tahun();
		$data['kegiatan'] 			= $this->M_dashboard->get_kegiatan();
		$data['rekap_jenjang'] 		= $this->M_dashboard->get_jenjang();
		$data['hitung_peserta']		= $this->M_dashboard->hitung_peserta_perkegiatan();
		$this->load->view('dashboard/dashboard_penyelenggaraan',$data);
  }
  
	function hasil_internal()  {
		$x 								= $this->M_dashboard->hitung_rekom_internal()->result();
		$data['chart_pemetaan']			= json_encode($x);
		$data['hitung_rekom']			= $this->M_dashboard->hitung_rekom_internal();
		$data['detail_rekom'] 	    	= $this->M_dashboard->detail_rekom_internal();
		$data['hitung_int'] 			= $this->M_dashboard->hitung_komp_int();
		$data['hitung_komp_jptp']		= $this->M_dashboard->hitung_komp_jptp();
		$data['hitung_komp_adm']		= $this->M_dashboard->hitung_komp_adm();
		$data['hitung_komp_pengawas']	= $this->M_dashboard->hitung_komp_pengawas();
		$data['hitung_komp_pelaksana']	= $this->M_dashboard->hitung_komp_pelaksana();
		/*
		$y 							= $this->M_dashboard->hitung_rekom()->result();
		$data['chart_seleksi']		= json_encode($y);
		*/

		$this->load->view('dashboard/dashboard_penilaian',$data);
  }
  
  
	function hitung_kegiatan(){
		$data ['penyelenggaraan'] = $this->M_dashboard->hitung_kegiatan();
		$this->load->view('dashboard/dashboard_penyelenggaraan',$data);
	}	
	
	function data_kegiatan(){
		$data = $this->M_dashboard->data_kegiatan();
		echo json_encode($data);
	}

	
}
?>