<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends MX_Controller {
	
	function __construct(){
			parent::__construct();
			$this->auth->restrict();
			date_default_timezone_set('Asia/Jakarta');			
			$this->load->model('M_laporan');
			$this->load->helper(array('form', 'url', 'html'));
	}
	
	function index(){
		$this->load->view('laporan/wawancara');
	}
	
	function get_wawancara(){
		$data = $this->M_laporan->tampil_data_wwcr();
		echo json_encode($data);
	}	
  
	function tambah_aksi(){
		
		$nama 		= $this->input->post('nama');
		$no_peserta = $this->input->post('no_peserta');
		$jenkel 	= $this->input->post('jenkel');
		$jabatan 	= $this->input->post('jabatan');
		$unker	 	= $this->input->post('unker');
		$jen_sma	= $this->input->post('jen_sma');
		$nm_sma 	= $this->input->post('nm_sma');
		$jur_sma 	= $this->input->post('jur_sma');
		$th_sma 	= $this->input->post('th_sma');
		$jen_d3		= $this->input->post('jen_d3');
		$nm_d3 		= $this->input->post('nm_d3');
		$jur_d3 	= $this->input->post('jur_d3');
		$th_d3 		= $this->input->post('th_d3');
		$jen_s1		= $this->input->post('jen_s1');
		$nm_s1 		= $this->input->post('nm_s1');
		$jur_s1 	= $this->input->post('jur_s1');
		$th_s1 		= $this->input->post('th_s1');
		$jen_s2		= $this->input->post('jen_s2');
		$nm_s2 		= $this->input->post('nm_s2');
		$jur_s2 	= $this->input->post('jur_s2');
		$th_s2 		= $this->input->post('th_s2');
		$jen_s3		= $this->input->post('jen_s3');
		$nm_s3 		= $this->input->post('nm_s3');
		$jur_s3 	= $this->input->post('jur_s3');
		$th_s3 		= $this->input->post('th_s3');
		$jab_1 		= $this->input->post('jab_1');
		$unker_1 	= $this->input->post('unker_1');
		$thnunker_1 = $this->input->post('thnunker_1');
		$jab_2 		= $this->input->post('jab_2');
		$unker_2 	= $this->input->post('unker_2');
		$thnunker_2 = $this->input->post('thnunker_2');
		$jab_3 		= $this->input->post('jab_3');
		$unker_3 	= $this->input->post('unker_3');
		$thnunker_3 = $this->input->post('thnunker_3');
		$jab_4 		= $this->input->post('jab_4');
		$unker_4 	= $this->input->post('unker_4');
		$thnunker_4 = $this->input->post('thnunker_4');
		$jab_5 		= $this->input->post('jab_5');
		$unker_5 	= $this->input->post('unker_5');
		$thnunker_5 = $this->input->post('thnunker_5');
		$unker_puas				= $this->input->post('unker_puas');
		$unker_puas_alasan 		= $this->input->post('unker_nopuas_alasan');
		$unker_nopuas			= $this->input->post('unker_puas');
		$unker_nopuas_alasan 	= $this->input->post('unker_nopuas_alasan');
		$kebijakan 				= $this->input->post('kebijakan');
		$kekuatan_1 			= $this->input->post('kekuatan_1');
		$mengapa_kekuatan_1 	= $this->input->post('mengapa_kekuatan_1');
		$kekuatan_2 			= $this->input->post('kekuatan_2');
		$mengapa_kekuatan_2 	= $this->input->post('mengapa_kekuatan_2');
		$s1_topik 	= $this->input->post('s1_topik');
		$s1_tmt 	= $this->input->post('s1_tmt');
		$s1_tst 	= $this->input->post('s1_tst');
		$s1_3 		= $this->input->post('s1_3');
		$s1_4 		= $this->input->post('s1_4');
		$s1_5		= $this->input->post('s1_5');
		$s1_6 		= $this->input->post('s1_6');
		$s1_7 		= $this->input->post('s1_7');
		$s1_8 		= $this->input->post('s1_8');
		$s2_topik 	= $this->input->post('s2_topik');
		$s2_tmt 	= $this->input->post('s2_tmt');
		$s2_tst 	= $this->input->post('s2_tst');
		$s2_3 		= $this->input->post('s2_3');
		$s2_4 		= $this->input->post('s2_4');
		$s2_5		= $this->input->post('s2_5');
		$s2_6 		= $this->input->post('s2_6');
		$s2_7 		= $this->input->post('s2_7');
		$s2_8 		= $this->input->post('s2_8');
		$jwb1 		= $this->input->post('jwb1');
		$jwb2 		= $this->input->post('jwb2');
		$jwb3 		= $this->input->post('jwb3');
		$jwb4		= $this->input->post('jwb4');
		$jwb5 		= $this->input->post('jwb5');
		$jwb6 		= $this->input->post('jwb6');
		$jwb7 		= $this->input->post('jwb7');
		$jwb8 		= $this->input->post('jwb8');
		$jwb9 		= $this->input->post('jwb9');
		$jwb10 		= $this->input->post('jwb10');
		$jwb11 		= $this->input->post('jwb11');
		$jwb12 		= $this->input->post('jwb12');
		$jwb13 		= $this->input->post('jwb13');
		$jwb14 		= $this->input->post('jwb14');
		$jwb15 		= $this->input->post('jwb15');
		$jwb16 		= $this->input->post('jwb16');
		$jwb17 		= $this->input->post('jwb17');
		$image 		= $this->input->post('image');
		
		$data = array(
					'nama'			=>	$nama,
					'no_peserta'	=>	$no_peserta,
					'jenkel'		=>	$jenkel,
					'jabatan'		=>	$jabatan,
					'unker'			=>	$unker,
					'jen_sma'		=>	$jen_sma,
					'nm_sma'		=>	$nm_sma,
					'jur_sma'		=>	$jur_sma,
					'th_sma'		=>	$th_sma,
					'jen_d3'		=>	$jen_d3,
					'nm_d3'			=>	$nm_d3,
					'jur_d3'		=>	$jur_d3,
					'th_d3'			=>	$th_d3,
					'jen_s1'		=>	$jen_s1,
					'nm_s1'			=>	$nm_s1,
					'jur_s1'		=>	$jur_s1,
					'th_s1'			=>	$th_s1,
					'jen_s2'		=>	$jen_s2,
					'nm_s2'			=>	$nm_s2,
					'jur_s2'		=>	$jur_s2,
					'th_s2'			=>	$th_s2,
					'jen_s3'		=>	$jen_s3,
					'nm_s3'			=>	$nm_s3,
					'jur_s3'		=>	$jur_s3,
					'th_s3'			=>	$th_s3,
					'jab_1'			=>	$jab_1,
					'unker_1'		=>	$unker_1,
					'thnunker_1'	=>	$thnunker_1,
					'jab_2'			=>	$jab_2,
					'unker_2'		=>	$unker_2,
					'thnunker_2'	=>	$thnunker_2,
					'jab_3'			=>	$jab_3,
					'unker_3'		=>	$unker_3,
					'thnunker_3'	=>	$thnunker_3,
					'jab_4'			=>	$jab_4,
					'unker_4'		=>	$unker_4,
					'thnunker_4'	=>	$thnunker_4,
					'jab_5'			=>	$jab_5,
					'unker_5'		=>	$unker_5,
					'thnunker_5'	=>	$thnunker_5,
					'unker_puas'	=>	$unker_puas,
					'unker_puas_alasan'		=>	$unker_puas_alasan,
					'unker_nopuas'			=>	$unker_nopuas,
					'unker_nopuas_alasan'	=>	$unker_nopuas_alasan,
					'kebijakan'				=>	$kebijakan,
					'kekuatan_1'			=>	$kekuatan_1,
					'mengapa_kekuatan_1'	=>	$mengapa_kekuatan_1,
					'kekuatan_2'			=>	$kekuatan_2,
					'mengapa_kekuatan_2'	=>	$mengapa_kekuatan_2,
					's1_topik'		=>	$s1_topik,
					's1_tmt'		=>	$s1_tmt,
					's1_tst'		=>	$s1_tst,
					's1_3'			=>	$s1_3,
					's1_4'			=>	$s1_4,
					's1_5'			=>	$s1_5,
					's1_6'			=>	$s1_6,
					's1_7'			=>	$s1_7,
					's1_8'			=>	$s1_8,
					's2_topik'		=>	$s2_topik,
					's2_tmt'		=>	$s2_tmt,
					's2_tst'		=>	$s2_tst,
					's2_3'			=>	$s2_3,
					's2_4'			=>	$s2_4,
					's2_5'			=>	$s2_5,
					's2_6'			=>	$s2_6,
					's2_7'			=>	$s2_7,
					's2_8'			=>	$s2_8,
					'jwb1'			=>	$jwb1,
					'jwb2'			=>	$jwb2,
					'jwb3'			=>	$jwb3,
					'jwb4'			=>	$jwb4,
					'jwb5'			=>	$jwb5,
					'jwb6'			=>	$jwb6,
					'jwb7'			=>	$jwb7,
					'jwb8'			=>	$jwb8,
					'jwb9'			=>	$jwb9,
					'jwb10'			=>	$jwb10,
					'jwb11'			=>	$jwb11,
					'jwb12'			=>	$jwb12,
					'jwb13'			=>	$jwb13,
					'jwb14'			=>	$jwb14,
					'jwb15'			=>	$jwb15,
					'jwb16'			=>	$jwb16,
					'jwb17'			=>	$jwb17,
					'image'			=>	$image
			);
			
		$this->m_data->input_data($data,'reff_data');
		redirect('drh/sukses_page');
	}	
	
	function sukses_page(){
		$data['pageTitle'] = "sPion | Registrasi Penilaian Kompetensi ";
		$this->load->view("signup/notif_sukses", $data);
	}
	
	function lihat_drh($id){
    $data['drh'] = $this->m_data->cetak_drh_row($id);
    $this->load->view('view_drh', $data);
    }	
	
	function lihat_wawancara($id){
    $data['wwcr'] = $this->m_data->wwcr_row($id);
    $this->load->view('laporan/v_wawancara',$data);
    }	
	
	
	function import_data_aksi(){
		$data = $this->m_data->import_data();
		echo json_encode($data);
		redirect('adm/m_siswa');
		
	}
	
	function import_ci_aksi(){
		$data = $this->m_data->import_ci();
		echo json_encode($data);
		redirect('adm/h_ujian_qkom');
		
	}
	
	function import_qkom_aksi(){
		$data = $this->m_data->import_qkom();
		echo json_encode($data);
		redirect('adm/h_ujian_qkom');
		
	}
	
	function truncate_ankas_aksi(){
		$data = $this->m_data->truncate_ankas();
		echo json_encode($data);
		redirect('adm/h_ujian_qkom');
		
	}
	
	function truncate_ci_aksi(){
		$data = $this->m_data->truncate_ci();
		echo json_encode($data);
		redirect('adm/h_ujian_qkom');
		
	}
	
	function truncate_qkom_aksi(){
		$data = $this->m_data->truncate_qkom();
		echo json_encode($data);
		redirect('adm/h_ujian_qkom');
		
	}
	
	function truncate_tr_ikut_ujian_aksi(){
		$data = $this->m_data->truncate_tr_ikut_ujian();
		echo json_encode($data);
		redirect('adm/h_ujian_qkom');
		
	}
	
	function truncate_m_siswa_aksi(){
		$data = $this->m_data->truncate_m_siswa();
		echo json_encode($data);
		redirect('adm/m_siswa');
		
	}
	
	function truncate_drh_aksi(){
		$data = $this->m_data->truncate_drh();
		echo json_encode($data);
		redirect('adm/h_ujian_qkom');
		
	}
	
	function wwcr_aksi() 
	{   
		$nama		= $this->input->post('nama');
		$nip		= $this->input->post('nip');
		$jabatan	= $this->input->post('jabatan');
		$assessor	= $this->input->post('assessor');
		$int		= $this->input->post('int');
		$int_nilai	= $this->input->post('int_nilai');
		$ks			= $this->input->post('ks');
		$ks_nilai	= $this->input->post('ks_nilai');
		$kom		= $this->input->post('kom');
		$kom_nilai	= $this->input->post('kom_nilai');
		$oph		= $this->input->post('oph');
		$oph_nilai	= $this->input->post('oph_nilai');
		$pp			= $this->input->post('pp');
		$pp_nilai	= $this->input->post('pp_nilai');
		$pdo		= $this->input->post('pdo');
		$pdo_nilai	= $this->input->post('pdo_nilai');
		$mp			= $this->input->post('mp');
		$mp_nilai	= $this->input->post('mp_nilai');
		$pk			= $this->input->post('pk');
		$pk_nilai	= $this->input->post('pk_nilai');
		$pb			= $this->input->post('pb');
		$pb_nilai	= $this->input->post('pb_nilai');

		$data = array(
					'nama'		=>	$nama,
					'nip'		=>	$nip,
					'jabatan'	=>	$jabatan,
					'assessor'	=>	$assessor,
					'int'		=>	$int,
					'int_nilai'	=>	$int_nilai,
					'ks'		=>	$ks,
					'ks_nilai'	=>	$ks_nilai,
					'kom'		=>	$kom,
					'kom_nilai'	=>	$kom_nilai,
					'oph'		=>	$oph,
					'oph_nilai'	=>	$oph_nilai,
					'pp'		=>	$pp,
					'pp_nilai'	=>	$pp_nilai,
					'pdo'		=>	$pdo,
					'pdo_nilai'	=>	$pdo_nilai,
					'mp'		=>	$mp,
					'mp_nilai'	=>	$mp_nilai,
					'pk'		=>	$pk,
					'pk_nilai'	=>	$pk_nilai,
					'pb'		=>	$pb,
					'pb_nilai'	=>	$pb_nilai
			);
		$this->m_data->input_wwcr($data,'t_wawancara');
		redirect('adm/h_ujian_qkom');		
	}

}

