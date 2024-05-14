<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Registrasi extends MX_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_registrasi');
	}
	
///// REGISTRASI

	public function index(){
		$this->load->view('registrasi/registrasi_cari');
	}
	
	public function search(){
      $data['caridata']=$this->M_registrasi->get_cari();
      $this->load->view('registrasi/registrasi',$data);
    }	
	
	public function search_failed(){
      $this->load->view('registrasi/registrasi_hasil');
    }	
		
	public function data_reg(){
		$data = $this->M_registrasi->data_reg();
		echo json_encode($data);
	}	
	
	public function get_reg(){
		$id_reg =$this->input->get('id_reg');
		$data	 	 =$this->M_registrasi->get_reg_by_id($id_reg);
		echo json_encode($data);
	}

	public function simpan_reg(){
		$id_reg				=$this->input->post('id_reg');
		$id_peserta		    =$this->input->post('id_peserta');
		$id_materi_ci1		=$this->input->post('id_materi_ci1');
		$id_materi_ci2		=$this->input->post('id_materi_ci2');
		$id_materi_qkom		=$this->input->post('id_materi_qkom');
		$nama				=$this->input->post('nama');
		$nip				=$this->input->post('nip');
		$gol				=$this->input->post('gol');
		//$jenjang			=$this->input->post('jenjang');
		$jabatan			=$this->input->post('jabatan');
		$unker				=$this->input->post('unker');
		$jenped_awal		=$this->input->post('jenped_awal');
		$jur_awal			=$this->input->post('jur_awal');
		$univ_awal			=$this->input->post('univ_awal');
		$thn_awal			=$this->input->post('thn_awal');
		$jenpend_akhir		=$this->input->post('jenpend_akhir');
		$jur_akhir			=$this->input->post('jur_akhir');
		$univ_akhir			=$this->input->post('univ_akhir');
		$thn_akhir			=$this->input->post('thn_akhir');
		$jab_1				=$this->input->post('jab_1');
		$unker_1			=$this->input->post('unker_1');
		$thn_unker_1		=$this->input->post('thn_unker_1');
		$jab_2				=$this->input->post('jab_2');
		$unker_2			=$this->input->post('unker_2');
		$thn_unker_2		=$this->input->post('thn_unker_2');
		$unker_puas			=$this->input->post('unker_puas');
		$alasan_puas		=$this->input->post('alasan_puas');
		$unker_no_puas		=$this->input->post('unker_no_puas');
		$alasan_no_puas		=$this->input->post('alasan_no_puas');
		$kebijakan			=$this->input->post('kebijakan');
		$kekuatan_1			=$this->input->post('kekuatan_1');
		$mengapa_kekuatan_1	=$this->input->post('mengapa_kekuatan_1');
		$kekuatan_2			=$this->input->post('kekuatan_2');
		$mengapa_kekuatan_2	=$this->input->post('mengapa_kekuatan_2');
		$s1_topik			=$this->input->post('s1_topik');
		$s1_tmt				=$this->input->post('s1_tmt');
		$s1_tst				=$this->input->post('s1_tst');
		$s1_3				=$this->input->post('s1_3');
		$s1_4				=$this->input->post('s1_4');
		$s1_5				=$this->input->post('s1_5');
		$s1_6				=$this->input->post('s1_6');
		$s1_7				=$this->input->post('s1_7');
		$s1_8				=$this->input->post('s1_8');
		$s2_topik			=$this->input->post('s2_topik');
		$s2_tmt				=$this->input->post('s2_tmt');
		$s2_tst				=$this->input->post('s2_tst');
		$s2_3				=$this->input->post('s2_3');
		$s2_4				=$this->input->post('s2_4');
		$s2_5				=$this->input->post('s2_5');
		$s2_6				=$this->input->post('s2_6');
		$s2_7				=$this->input->post('s2_7');
		$s2_8				=$this->input->post('s2_8');
		$jwb1a_a			=$this->input->post('jwb1a_a');
		$jwb1a_b			=$this->input->post('jwb1a_b');
		$jwb1a_c			=$this->input->post('jwb1a_c');
		$jwb1a_d			=$this->input->post('jwb1a_d');
		$jwb1b_a			=$this->input->post('jwb1b_a');
		$jwb1b_b			=$this->input->post('jwb1b_b');
		$jwb1b_c			=$this->input->post('jwb1b_c');
		$jwb1b_d			=$this->input->post('jwb1b_d');
		$jwb2_a				=$this->input->post('jwb2_a');
		$jwb2_b				=$this->input->post('jwb2_b');
		$jwb2_c				=$this->input->post('jwb2_c');
		$jwb2_d				=$this->input->post('jwb2_d');
		$jwb3_a				=$this->input->post('jwb3_a');
		$jwb3_b				=$this->input->post('jwb3_b');
		$jwb3_c				=$this->input->post('jwb3_c');
		$jwb3_d				=$this->input->post('jwb3_d');
		$jwb4_a				=$this->input->post('jwb4_a');
		$jwb4_b				=$this->input->post('jwb4_b');
		$jwb4_c				=$this->input->post('jwb4_c');
		$jwb4_d				=$this->input->post('jwb4_d');
		$jwb5_a				=$this->input->post('jwb5_a');
		$jwb5_b				=$this->input->post('jwb5_b');
		$jwb5_c				=$this->input->post('jwb5_c');
		$jwb5_d				=$this->input->post('jwb5_d');
		$jwb6_a				=$this->input->post('jwb6_a');
		$jwb6_b				=$this->input->post('jwb6_b');
		$jwb6_c				=$this->input->post('jwb6_c');
		$jwb6_d				=$this->input->post('jwb6_d');
		$jwb7_a				=$this->input->post('jwb7_a');
		$jwb7_b				=$this->input->post('jwb7_b');
		$jwb7_c				=$this->input->post('jwb7_c');
		$jwb7_d				=$this->input->post('jwb7_d');
		$jwb8_a				=$this->input->post('jwb8_a');
		$jwb8_b				=$this->input->post('jwb8_b');
		$jwb8_c				=$this->input->post('jwb8_c');
		$jwb8_d				=$this->input->post('jwb8_d');
		$jwb9_a				=$this->input->post('jwb9_a');
		$jwb9_b				=$this->input->post('jwb9_b');
		$jwb9_c				=$this->input->post('jwb9_c');
		$jwb9_d				=$this->input->post('jwb9_d');
		$jwb10_a			=$this->input->post('jwb10_a');
		$jwb10_b			=$this->input->post('jwb10_b');
		$jwb10_c			=$this->input->post('jwb10_c');
		$jwb10_d			=$this->input->post('jwb10_d');
		$jwb11_a			=$this->input->post('jwb11_a');
		$jwb11_b			=$this->input->post('jwb11_b');
		$jwb11_c			=$this->input->post('jwb11_c');
		$jwb11_d			=$this->input->post('jwb11_d');
		$jwb12_a			=$this->input->post('jwb12_a');
		$jwb12_b			=$this->input->post('jwb12_b');
		$jwb12_c			=$this->input->post('jwb12_c');
		$jwb12_d			=$this->input->post('jwb12_d');
		$jwb13_a			=$this->input->post('jwb13_a');
		$jwb13_b			=$this->input->post('jwb13_b');
		$jwb13_c			=$this->input->post('jwb13_c');
		$jwb13_d			=$this->input->post('jwb13_d');
		$jwb14_a			=$this->input->post('jwb14_a');
		$jwb14_b			=$this->input->post('jwb14_b');
		$jwb14_c			=$this->input->post('jwb14_c');
		$jwb14_d			=$this->input->post('jwb14_d');
		$jwb15				=$this->input->post('jwb15');
		$jwb16				=$this->input->post('jwb16');
		$jwb17				=$this->input->post('jwb17');
		$group_id			=$this->input->post('group_id');
		$username			=$this->input->post('username');
		$nama_user			=$this->input->post('nama_user');
		$status				=$this->input->post('status');
		$ket				=$this->input->post('ket');
		
		$data1 = array(
						'id_reg'			=> $id_reg,
						'id_peserta'		=> $id_peserta,
						'nama'				=> $nama,
						'nip'				=> $nip,
						'gol'				=> $gol,
						//'jenjang'			=> $jenjang,
						'jabatan'			=> $jabatan,
						'unker'				=> $unker,
						'jenped_awal'		=> $jenped_awal,
						'jur_awal'			=> $jur_awal,
						'univ_awal'			=> $univ_awal,
						'thn_awal'			=> $thn_awal,
						'jenpend_akhir'		=> $jenpend_akhir,
						'jur_akhir'			=> $jur_akhir,
						'univ_akhir'		=> $univ_akhir,
						'thn_akhir'			=> $thn_akhir,
						'jab_1'				=> $jab_1,
						'unker_1'			=> $unker_1,
						'thn_unker_1'		=> $thn_unker_1,
						'jab_2'				=> $jab_2,
						'unker_2'			=> $unker_2,
						'thn_unker_2'		=> $thn_unker_2,
						'unker_puas'		=> $unker_puas,
						'alasan_puas'		=> $alasan_puas,
						'unker_no_puas'		=> $unker_no_puas,
						'alasan_no_puas'	=> $alasan_no_puas,
						'kebijakan'			=> $kebijakan,
						'kekuatan_1'		=> $kekuatan_1,
						'mengapa_kekuatan_1'=> $mengapa_kekuatan_1,
						'kekuatan_2'		=> $kekuatan_2,
						'mengapa_kekuatan_2'=> $mengapa_kekuatan_2,
						'ket'               => $ket );
		$this->M_registrasi->input_reg($data1,'registrasi');				
		
		$regID = $this->db->insert_id();				
		$data2 = array(
						'id_reg'			=> $regID,
						'id_materi_ci1'		=> $id_materi_ci1,
						'nip'				=> $nip,
						's1_topik'			=> $s1_topik,
						's1_tmt'			=> $s1_tmt,
						's1_tst'			=> $s1_tst,
						's1_3'				=> $s1_3,
						's1_4'				=> $s1_4,
						's1_5'				=> $s1_5,
						's1_6'				=> $s1_6,
						's1_7'				=> $s1_7,
						's1_8'				=> $s1_8,
						'ket'				=> $ket );
		$this->M_registrasi->input_reg($data2,'hasil_ci_satu');				
		
		$data3 = array(
						'id_reg'			=> $regID,
						'id_materi_ci2'		=> $id_materi_ci2,
						'nip'				=> $nip,
						's2_topik'			=> $s2_topik,
						's2_tmt'			=> $s2_tmt,
						's2_tst'			=> $s2_tst,
						's2_3'				=> $s2_3,
						's2_4'				=> $s2_4,
						's2_5'				=> $s2_5,
						's2_6'				=> $s2_6,
						's2_7'				=> $s2_7,
						's2_8'				=> $s2_8,
						'ket'				=> $ket );
		$this->M_registrasi->input_reg($data3,'hasil_ci_dua');				
		
		$data4 = array(
						'id_reg'			=> $regID,
						'id_materi_qkom'	=> $id_materi_qkom,
						'nip'				=> $nip,
						'jwb1a_a'			=> $jwb1a_a,
						'jwb1a_b'			=> $jwb1a_b,
						'jwb1a_c'			=> $jwb1a_c,
						'jwb1a_d'			=> $jwb1a_d,
						'jwb1b_a'			=> $jwb1b_a,
						'jwb1b_b'			=> $jwb1b_b,
						'jwb1b_c'			=> $jwb1b_c,
						'jwb1b_d'			=> $jwb1b_d,
						'jwb2_a'			=> $jwb2_a,
						'jwb2_b'			=> $jwb2_b,
						'jwb2_c'			=> $jwb2_c,
						'jwb2_d'			=> $jwb2_d,
						'jwb3_a'			=> $jwb3_a,
						'jwb3_b'			=> $jwb3_b,
						'jwb3_c'			=> $jwb3_c,
						'jwb3_d'			=> $jwb3_d,
						'jwb4_a'			=> $jwb4_a,
						'jwb4_b'			=> $jwb4_b,
						'jwb4_c'			=> $jwb4_c,
						'jwb4_d'			=> $jwb4_d,
						'jwb5_a'			=> $jwb5_a,
						'jwb5_b'			=> $jwb5_b,
						'jwb5_c'			=> $jwb5_c,
						'jwb5_d'			=> $jwb5_d,
						'jwb6_a'			=> $jwb6_a,
						'jwb6_b'			=> $jwb6_b,
						'jwb6_c'			=> $jwb6_c,
						'jwb6_d'			=> $jwb6_d,
						'jwb7_a'			=> $jwb7_a,
						'jwb7_b'			=> $jwb7_b,
						'jwb7_c'			=> $jwb7_c,
						'jwb7_d'			=> $jwb7_d,
						'jwb8_a'			=> $jwb8_a,
						'jwb8_b'			=> $jwb8_b,
						'jwb8_c'			=> $jwb8_c,
						'jwb8_d'			=> $jwb8_d,
						'ket'				=> $ket );
		$this->M_registrasi->input_reg($data4,'hasil_qkom_satu');				
			
		$data5 = array(
						'id_reg'			=> $regID,
						'id_materi_qkom'	=> $id_materi_qkom,
						'nip'				=> $nip,
						'jwb9_a'			=> $jwb9_a,
						'jwb9_b'			=> $jwb9_b,
						'jwb9_c'			=> $jwb9_c,
						'jwb9_d'			=> $jwb9_d,
						'jwb10_a'			=> $jwb10_a,
						'jwb10_b'			=> $jwb10_b,
						'jwb10_c'			=> $jwb10_c,
						'jwb10_d'			=> $jwb10_d,
						'jwb11_a'			=> $jwb11_a,
						'jwb11_b'			=> $jwb11_b,
						'jwb11_c'			=> $jwb11_c,
						'jwb11_d'			=> $jwb11_d,
						'jwb12_a'			=> $jwb12_a,
						'jwb12_b'			=> $jwb12_b,
						'jwb12_c'			=> $jwb12_c,
						'jwb12_d'			=> $jwb12_d,
						'jwb13_a'			=> $jwb13_a,
						'jwb13_b'			=> $jwb13_b,
						'jwb13_c'			=> $jwb13_c,
						'jwb13_d'			=> $jwb13_d,
						'jwb14_a'			=> $jwb14_a,
						'jwb14_b'			=> $jwb14_b,
						'jwb14_c'			=> $jwb14_c,
						'jwb14_d'			=> $jwb14_d,
						'jwb15'				=> $jwb15,
						'jwb16'				=> $jwb16,
						'jwb17'				=> $jwb17,
						'ket'				=> $ket );
		$this->M_registrasi->input_reg($data5,'hasil_qkom_dua');				
				
		$data6 = array(
						'group_id'			=> $group_id,
						'username'			=> $username,
						'nama_user'			=> $nama_user,
						'status'			=> $status );
		$this->M_registrasi->input_reg($data6,'users');
		
		$data7 = array(
						'id_reg'		=> $regID,
						'id_peserta'	=> $id_peserta,
						'nip'			=> $nip,
						'nama'			=> $nama );
				
		$this->M_registrasi->input_reg($data7,'jadwal_peserta');
		
		$data8 = array(
						'id_reg'		=> $regID,
						'nip'			=> $nip );
				
		$this->M_registrasi->input_reg($data8,'hasil_potensi');
		
		$data9 = array(
						'id_reg'		=> $regID,
						'nip'			=> $nip );
				
		$this->M_registrasi->input_reg($data9,'hasil_kompetensi');
		
		$data10 = array(
						'id_reg'		=> $regID,
						'nip'			=> $nip );
				
		$this->M_registrasi->input_reg($data10,'hasil_uraian');
		
		redirect('registrasi/registrasi_sukses');
	}

	public function registrasi_sukses(){
		$data['pageTitle'] = "SAPA-AC | Registrasi Penilaian Kompetensi ";
		$this->load->view("registrasi/registrasi_sukses", $data);
	}
	
	
	
	public function hapus_reg(){
		$id_reg		 =$this->input->post('id_reg');
		$data		 =$this->M_registrasi->hapus_reg($id_reg);
		echo json_encode($data);
	}
				
				
				
				
///// END OF REGISTRASI

				
}
?>