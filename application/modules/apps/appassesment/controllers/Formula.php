<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Formula extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->auth->restrict();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_formula');
		$this->load->library('pdf');
	}
	
//================================== potensi

	function data_potensi(){
		$data = $this->M_formula->get_potensi();
		echo json_encode($data);
	}	
	
//================================== level 4
	
	function index(){
		$this->load->view('v_formula');
	}
	
	function data_level4(){
		$data = $this->M_formula->get_level4();
		echo json_encode($data);
	}	
	
//================================== level 3
	
	function data_level3(){
		$data = $this->M_formula->get_level3();
		echo json_encode($data);
	}	
	
//================================== level 2
	
	function data_level2(){
		$data = $this->M_formula->get_level2();
		echo json_encode($data);
	}	
	
//================================== level 1	
	function data_level1(){
		$data = $this->M_formula->get_level1();
		echo json_encode($data);
	}	
	
//================================== Fungsi bersama	

	function get_level(){
		$id_reff_kompetensi =$this->input->get('id_reff_kompetensi');
		$data	 	 		=$this->M_formula->get_level_by_id($id_reff_kompetensi);
		echo json_encode($data);
	}

	
	function simpan_reff_kompetensi(){
		$id_reff_kompetensi	=$this->input->post('id_reff_kompetensi');
		$kd_level			=$this->input->post('kd_level');
		$nama_level			=$this->input->post('nama_level');
		$kompetensi			=$this->input->post('kompetensi');
		$bobot_lgd			=$this->input->post('bobot_lgd');
		$bobot_ankas		=$this->input->post('bobot_ankas');
		$bobot_pw			=$this->input->post('bobot_pw');
		$bobot_bei			=$this->input->post('bobot_bei');
		
		$data = array(
						'id_reff_kompetensi'	=>$id_reff_kompetensi,
						'kd_level'				=>$kd_level,
						'nama_level'			=>$nama_level,
						'kompetensi'			=>$kompetensi,
						'bobot_lgd'				=>$bobot_lgd,
						'bobot_ankas'			=>$bobot_ankas,
						'bobot_pw'				=>$bobot_pw,
						'bobot_bei'				=>$bobot_bei
					);
		
		$this->M_formula->simpan_reff_kompetensi($data,'reff_kompetensi');
		redirect($_SERVER['HTTP_REFERER']);
		
	}
	
	function update_level(){
		$id_reff_kompetensi	=$this->input->post('id_reff_kompetensi');
		$kd_level			=$this->input->post('kd_level');
		$nama_level			=$this->input->post('nama_level');
		$kompetensi			=$this->input->post('kompetensi');
		$bobot_lgd			=$this->input->post('bobot_lgd');
		$bobot_ankas		=$this->input->post('bobot_ankas');
		$bobot_pw			=$this->input->post('bobot_pw');
		$bobot_bei			=$this->input->post('bobot_bei');
		$data				=$this->M_formula->update_level($id_reff_kompetensi,$kd_level,$nama_level,$kompetensi,$bobot_lgd,$bobot_ankas,$bobot_pw,$bobot_bei);
		echo json_encode($data);
	}
	
	function hapus_level(){
		$id_reff_kompetensi	=$this->input->post('id_reff_kompetensi');
		$data				=$this->M_formula->hapus_level($id_reff_kompetensi);
		echo json_encode($data);
	}
		
		
				
///// END OF FORMULA

				
}
?>