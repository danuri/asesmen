<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Kuisioner extends MX_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_kuisioner');
	}
	
///// KUISIONER

	Public function index(){
		$this->load->view('kuisioner/v_kuisioner');
	}

	public function simpan_kuisi(){
		$id_kuisi		=$this->input->post('id_kuisi');
		$jabatan		=$this->input->post('jabatan');
		$tgl_assessment	=$this->input->post('tgl_assessment');
		$kuisi_1		=$this->input->post('kuisi_1');
		$kuisi_1_a		=$this->input->post('kuisi_1_a');
		$kuisi_1_lain	=$this->input->post('kuisi_1_lain');
		$kuisi_2		=$this->input->post('kuisi_2');
		$kuisi_2_a		=$this->input->post('kuisi_2_a');
		$kuisi_2_lain	=$this->input->post('kuisi_2_lain');
		$kuisi_3		=$this->input->post('kuisi_3');
		$kuisi_3_a		=$this->input->post('kuisi_3_a');
		$kuisi_3_lain	=$this->input->post('kuisi_3_lain');
		$kuisi_4		=$this->input->post('kuisi_4');
		$kuisi_4_a		=$this->input->post('kuisi_4_a');
		$kuisi_4_lain	=$this->input->post('kuisi_4_lain');
		$kuisi_5		=$this->input->post('kuisi_5');
		$kuisi_6		=$this->input->post('kuisi_6');
		$kuisi_6_a		=$this->input->post('kuisi_6_a');
		$kuisi_6_lain	=$this->input->post('kuisi_6_lain');
		$kuisi_7		=$this->input->post('kuisi_7');
		$kuisi_7_a		=$this->input->post('kuisi_7_a');
		$kuisi_7_lain	=$this->input->post('kuisi_7_lain');
		$kuisi_8		=$this->input->post('kuisi_8');
		$kuisi_8_a		=$this->input->post('kuisi_8_a');
		$kuisi_8_lain	=$this->input->post('kuisi_8_lain');
		$kuisi_9		=$this->input->post('kuisi_9');
		$kuisi_9_a		=$this->input->post('kuisi_9_a');
		$kuisi_9_lain	=$this->input->post('kuisi_9_lain');
		$kuisi_10		=$this->input->post('kuisi_10');
		$kuisi_10_a		=$this->input->post('kuisi_10_a');
		$kuisi_10_lain	=$this->input->post('kuisi_10_lain');
		$kuisi_11		=$this->input->post('kuisi_11');
		$kuisi_11_a		=$this->input->post('kuisi_11_a');
		$kuisi_11_lain	=$this->input->post('kuisi_11_lain');
		$kuisi_12		=$this->input->post('kuisi_12');
		$kuisi_12_a		=$this->input->post('kuisi_12_a');
		$kuisi_12_lain	=$this->input->post('kuisi_12_lain');
		$kuisi_13		=$this->input->post('kuisi_13');
		$kuisi_13_a		=$this->input->post('kuisi_13_a');
		$kuisi_13_lain	=$this->input->post('kuisi_13_lain');
		$kuisi_14		=$this->input->post('kuisi_14');
		$kuisi_14_a		=$this->input->post('kuisi_14_a');
		$kuisi_14_lain	=$this->input->post('kuisi_14_lain');
		$kuisi_15		=$this->input->post('kuisi_15');
		$kuisi_15_a		=$this->input->post('kuisi_15_a');
		$kuisi_15_lain	=$this->input->post('kuisi_15_lain');
		$kuisi_16		=$this->input->post('kuisi_16');
		$kuisi_16_a		=$this->input->post('kuisi_16_a');
		$kuisi_16_lain	=$this->input->post('kuisi_16_lain');
		$kuisi_17		=$this->input->post('kuisi_17');
		$kuisi_17_lain	=$this->input->post('kuisi_17_lain');
		$kuisi_18		=$this->input->post('kuisi_18');
		$kuisi_18_lain	=$this->input->post('kuisi_18_lain');
		$kuisi_19		=$this->input->post('kuisi_19');
		$kuisi_19_lain	=$this->input->post('kuisi_19_lain');
		$kuisi_20		=$this->input->post('kuisi_20');
		$kuisi_21		=$this->input->post('kuisi_21');
		$ket			=$this->input->post('ket');
	
		$data = array(
						'id_kuisi'			=>$id_kuisi,
						'jabatan'			=>$jabatan,
						'tgl_assessment'	=>$tgl_assessment,
						'kuisi_1'			=>$kuisi_1,
						'kuisi_1_a'			=>$kuisi_1_a,
						'kuisi_1_lain'		=>$kuisi_1_lain,
						'kuisi_2'			=>$kuisi_2,
						'kuisi_2_a'			=>$kuisi_2_a,
						'kuisi_2_lain'		=>$kuisi_2_lain,
						'kuisi_3'			=>$kuisi_3,
						'kuisi_3_a'			=>$kuisi_3_a,
						'kuisi_3_lain'		=>$kuisi_3_lain,
						'kuisi_4'			=>$kuisi_4,
						'kuisi_4_a'			=>$kuisi_4_a,
						'kuisi_4_lain'		=>$kuisi_4_lain,
						'kuisi_5'			=>$kuisi_5,
						'kuisi_6'			=>$kuisi_6,
						'kuisi_6_a'			=>$kuisi_6_a,
						'kuisi_6_lain'		=>$kuisi_6_lain,
						'kuisi_7'			=>$kuisi_7,
						'kuisi_7_a'			=>$kuisi_7_a,
						'kuisi_7_lain'		=>$kuisi_7_lain,
						'kuisi_8'			=>$kuisi_8,
						'kuisi_8_a'			=>$kuisi_8_a,
						'kuisi_8_lain'		=>$kuisi_8_lain,
						'kuisi_9'			=>$kuisi_9,
						'kuisi_9_a'			=>$kuisi_9_a,
						'kuisi_9_lain'		=>$kuisi_9_lain,
						'kuisi_10'			=>$kuisi_10,
						'kuisi_10_a'		=>$kuisi_10_a,
						'kuisi_10_lain'		=>$kuisi_10_lain,
						'kuisi_11'			=>$kuisi_11,
						'kuisi_11_a'		=>$kuisi_11_a,
						'kuisi_11_lain'		=>$kuisi_11_lain,
						'kuisi_12'			=>$kuisi_12,
						'kuisi_12_a'		=>$kuisi_12_a,
						'kuisi_12_lain'		=>$kuisi_12_lain,
						'kuisi_13'			=>$kuisi_13,
						'kuisi_13_a'		=>$kuisi_13_a,
						'kuisi_13_lain'		=>$kuisi_13_lain,
						'kuisi_14'			=>$kuisi_14,
						'kuisi_14_a'		=>$kuisi_14_a,
						'kuisi_14_lain'		=>$kuisi_14_lain,
						'kuisi_15'			=>$kuisi_15,
						'kuisi_15_a'		=>$kuisi_15_a,
						'kuisi_15_lain'		=>$kuisi_15_lain,
						'kuisi_16'			=>$kuisi_16,
						'kuisi_16_a'		=>$kuisi_16_a,
						'kuisi_16_lain'		=>$kuisi_16_lain,
						'kuisi_17'			=>$kuisi_17,
						'kuisi_17_lain'		=>$kuisi_17_lain,
						'kuisi_18'			=>$kuisi_18,
						'kuisi_18_lain'		=>$kuisi_18_lain,
						'kuisi_19'			=>$kuisi_19,
						'kuisi_19_lain'		=>$kuisi_19_lain,
						'kuisi_20'			=>$kuisi_20,
						'kuisi_21'			=>$kuisi_21,		
						'ket'				=>$ket
						);
						
		
		$this->M_kuisioner->input_kuisi($data,'hasil_kuisi');
		redirect('kuisioner/kuisioner_sukses');
	}

	public function kuisioner_sukses(){
		$data['pageTitle'] = "sPion | Kuisioner Penilaian Kompetensi ";
		$this->load->view("kuisioner/kuisioner_sukses", $data);
	}
	
				
}
?>