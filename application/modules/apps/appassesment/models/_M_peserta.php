<?php
class M_peserta extends CI_Model{
	function __construct(){
		parent::__construct();
		
	}

	function data_kota(){
		$hasil	=	$this->db->query("
										SELECT a.nip, b.nama, b.gol, b.jabatan, b.unker, a.jenjang, a.tahun, c.nama_kegiatan, c.jenis_kegiatan, c.instansi, c.tgl_keg, c.ket
										FROM data_peserta AS a INNER JOIN registrasi AS b ON a.nip = b.nip INNER JOIN kegiatan AS c ON a.id_kegiatan = c.id_kegiatan
										WHERE c.jenis_kegiatan LIKE 'Internal' ORDER BY a.id_peserta DESC
									");
		return $hasil->result();	
	}
	
	function data_tahun($tahun){
		$tahun = $this->input->GET('tahun', TRUE);
		$data = $this->db->query("SELECT id_kegiatan, kd_kegiatan, nama_kegiatan, jenis_kegiatan, ket_kegiatan, tgl_keg, tahun FROM kegiatan WHERE tahun = '$tahun' ");
		return $data->result();
	}
	
	public function get_cari(){
		$cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query(" SELECT a.id_kegiatan, a.kd_kegiatan, a.nama_kegiatan, a.jenis_kegiatan, a.ket_kegiatan, a.tgl_keg, a.tahun FROM
								  kegiatan AS a WHERE a.kd_kegiatan LIKE '02.%' AND a.ket_kegiatan LIKE '%$cari%' ");
		return $data->result();
	}

	
	function get_profile($nip){
		$hasil	=	$this->db->query("
										SELECT a.nip, b.nama, b.gol, b.jabatan, b.unker, a.jenjang, a.tahun, c.nama_kegiatan, c.jenis_kegiatan, c.instansi, c.tgl_keg, c.ket
										FROM data_peserta AS a INNER JOIN registrasi AS b ON a.nip = b.nip INNER JOIN kegiatan AS c ON a.id_kegiatan = c.id_kegiatan
										WHERE c.jenis_kegiatan LIKE 'Internal' and a.nip = '$nip' ORDER BY a.id_peserta DESC
									");
		return $hasil;	
	}
	
	function get_assessment($nip){
		$hasil	=	$this->db->query("
									SELECT b.id_peserta, a.nip, b.nama, b.gol, b.jabatan, b.unker, a.jenjang, a.tahun, c.nama_kegiatan, c.jenis_kegiatan, c.instansi, c.tgl_keg, c.ket,
									IF(a.ket LIKE 'Y', 'TIDAK BERLAKU', 'BERLAKU') AS status_ass FROM data_peserta AS a INNER JOIN registrasi AS b ON a.nip = b.nip INNER JOIN kegiatan AS c ON a.id_kegiatan = c.id_kegiatan
									WHERE c.jenis_kegiatan LIKE 'Internal' and a.nip = '$nip' ORDER BY a.id_peserta DESC
									");
		return $hasil;	
	}
	
	function get_pic($nip){
		$hasil	=	$this->db->query("
									SELECT a.nama, a.nip,b.kd_personil, b.nama_personil FROM jadwal_peserta AS a INNER JOIN lembaga AS b ON b.kd_personil = a.kd_personil_wwcr WHERE a.nip = $nip
									");
		return $hasil;	
	}
	
/* WITH WWCR AND LGD	
	function get_assessment($nip){
		$hasil	=	$this->db->query("
										SELECT a.id_peserta, a.nip, a.ket, b.kd_kegiatan, b.jenis_kegiatan, b.tahun, d.nama_personil as wwcr,
										e.nama_personil as lgd FROM data_peserta AS a INNER JOIN kegiatan AS b ON a.id_kegiatan = b.id_kegiatan
										INNER JOIN wwcr AS c ON b.id_kegiatan = c.id_kegiatan INNER JOIN lembaga AS d ON c.kd_personil_wwcr = d.kd_personil
										INNER JOIN lembaga AS e ON c.kd_personil_lgd = e.kd_personil WHERE b.jenis_kegiatan = 'internal' AND a.nip = '$nip'
									");
		return $hasil;	
	}
*/	
	
	function get_kegiatan($nip){
		$hasil	=	$this->db->query("
										SELECT a.id_peserta, a.nip, b.tahun FROM data_peserta AS a INNER JOIN kegiatan AS b ON a.id_kegiatan = b.id_kegiatan
										WHERE b.jenis_kegiatan LIKE 'internal' AND a.nip = '$nip'
									");
		return $hasil;	
	}
			
//// END PESERTA KOTA TANGERANG ////	

	function data_kerjasama(){
		$hasil	=	$this->db->query("
										SELECT a.nip, b.nama, b.gol, b.jabatan, b.unker, a.jenjang, a.tahun, c.nama_kegiatan, c.jenis_kegiatan, c.instansi, c.tgl_keg, c.ket
										FROM data_peserta AS a INNER JOIN registrasi AS b ON a.nip = b.nip INNER JOIN kegiatan AS c ON a.id_kegiatan = c.id_kegiatan
										WHERE c.jenis_kegiatan LIKE 'Kerjasama' ORDER BY a.id_peserta DESC
		
									");
		return $hasil->result();	
	}
	
	function get_profile_kerjasama($nip){
		$hasil	=	$this->db->query("
										SELECT a.nip, b.nama, b.gol, b.jabatan, b.unker, a.jenjang, a.tahun, c.nama_kegiatan, c.jenis_kegiatan, c.instansi, c.tgl_keg, c.ket
										FROM data_peserta AS a INNER JOIN registrasi AS b ON a.nip = b.nip INNER JOIN kegiatan AS c ON a.id_kegiatan = c.id_kegiatan
										WHERE c.jenis_kegiatan LIKE 'Kerjasama' and a.nip = '$nip' ORDER BY a.id_peserta DESC
									");
		return $hasil;	
	}
	
	function get_assessment_kerjasama($nip){
		$hasil	=	$this->db->query("
									SELECT a.id_peserta, a.nip, b.nama, b.gol, b.jabatan, b.unker, a.jenjang, a.tahun, c.nama_kegiatan, c.jenis_kegiatan, c.instansi, c.tgl_keg, c.ket,
									IF(a.ket LIKE 'Y', 'BERLAKU', 'TIDAK BERLAKU') AS status_ass FROM data_peserta AS a INNER JOIN registrasi AS b ON a.nip = b.nip INNER JOIN kegiatan AS c ON a.id_kegiatan = c.id_kegiatan
									WHERE c.jenis_kegiatan LIKE 'Kerjasama' and a.nip = '$nip' ORDER BY a.id_peserta DESC
									");
		return $hasil;	
	}
	
	function get_pic_kerjasama($nip){
		$hasil	=	$this->db->query("
									SELECT a.nama, a.nip,b.kd_personil, b.nama_personil FROM jadwal_peserta AS a INNER JOIN lembaga AS b ON b.kd_personil = a.kd_personil_wwcr WHERE a.nip = $nip
									");
		return $hasil;	
	}
	
	
	function get_kegiatan_kerjasama($nip){
		$hasil	=	$this->db->query("
										SELECT a.id_peserta, a.nip, b.tahun FROM data_peserta AS a INNER JOIN kegiatan AS b ON a.id_kegiatan = b.id_kegiatan
										WHERE b.jenis_kegiatan LIKE 'kerjasama' AND a.nip = '$nip'
									");
		return $hasil;	
	}
	
	function get_detail_hasil($nip){
		$hasil	=	$this->db->query("
										SELECT a.id_peserta, c.id_reg, a.nip, a.nama, a.tahun, b.rekom, b.gp_1, b.gp_2, b.gp_3, b.gp_4, b.gp_5, b.gp_6, b.gp_7, b.gp_8, b.kek_1, b.kek_2, b.kek_3, b.kek_4, b.kek_5, b.kek_6, b.kek_7, b.ap_1, b.ap_2, b.ap_3, b.ap_4, b.ap_5, b.ap_6, b.ap_7, b.speng_1, b.speng_2, b.speng_3, b.speng_4, b.speng_5, b.speng_6, b.speng_7, b.speng_8, b.speng_9, b.speng_10, b.sp_1, b.sp_2, b.sp_3 
										FROM data_peserta AS a INNER JOIN registrasi AS c ON a.nip = c.nip INNER JOIN hasil_assessment AS b ON c.nip = b.nip WHERE b.nip = '$nip'
									");
		return $hasil;	
	}
		
		
	function get_kompetensi_kerjasama($nip){
		$hasil	=	$this->db->query("
										SELECT a.id_peserta, a.id_kegiatan, a.kd_kegiatan, a.nip, a.nama, a.tahun, b.id_kom_lgd, b.kd_personil_wwcr, b.nilai_lgd_kjs, b.bobot_lgd_kjs, b.ev_lgd_kjs, b.nilai_lgd_kom, b.bobot_lgd_kom, b.ev_lgd_kom, b.nilai_lgd_oph,
										b.bobot_lgd_oph, b.ev_lgd_oph, b.nilai_lgd_mp, b.bobot_lgd_mp, b.ev_lgd_mp, b.nilai_lgd_pk, b.bobot_lgd_pk, b.ev_lgd_pk, c.id_kom_bei, c.nilai_bei_int, c.bobot_bei_int, c.ev_bei_int,
										c.nilai_bei_kjs, c.bobot_bei_kjs, c.ev_bei_kjs, c.nilai_bei_kom, c.bobot_bei_kom, c.ev_bei_kom, c.nilai_bei_oph, c.bobot_bei_oph, c.ev_bei_oph, c.nilai_bei_pp, c.bobot_bei_pp, c.ev_bei_pp,
										c.nilai_bei_pdol, c.bobot_bei_pdol, c.ev_bei_pdol, c.nilai_bei_mp, c.bobot_bei_mp, c.ev_bei_mp, c.nilai_bei_pk, c.bobot_bei_pk, c.ev_bei_pk, c.nilai_bei_pb, c.bobot_bei_pb, c.ev_bei_pb,
										d.id_kom_ankas, d.nilai_ankas_kom, d.bobot_ankas_kom, d.ev_ankas_kom, d.nilai_ankas_oph, d.bobot_ankas_oph, d.ev_ankas_oph, d.nilai_ankas_pp, d.bobot_ankas_pp, d.ev_ankas_pp,
										d.nilai_ankas_mp, d.bobot_ankas_mp, d.ev_ankas_mp, d.nilai_ankas_pk, d.bobot_ankas_pk, d.ev_ankas_pk, e.id_kom_pw,
										e.nilai_pw_int, e.bobot_pw_int, e.ev_pw_int, e.nilai_pw_pdol, e.bobot_pw_pdol, e.ev_pw_pdol, e.nilai_pw_pb, e.bobot_pw_pb,
										e.ev_pw_pb, f.id_kom_bei_sekda, f.nilai_bei_sekda_int, f.bobot_bei_sekda_int, f.ev_bei_sekda_int, f.nilai_bei_sekda_kjs,
										f.bobot_bei_sekda_kjs, f.ev_bei_sekda_kjs, f.nilai_bei_sekda_kom, f.bobot_bei_sekda_kom, f.ev_bei_sekda_kom, f.nilai_bei_sekda_oph,
										f.bobot_bei_sekda_oph, f.ev_bei_sekda_oph, f.nilai_bei_sekda_pp, f.bobot_bei_sekda_pp, f.ev_bei_sekda_pp, f.nilai_bei_sekda_pdol, f.bobot_bei_sekda_pdol, f.ev_bei_sekda_pdol, f.nilai_bei_sekda_mp,
										f.bobot_bei_sekda_mp, f.ev_bei_sekda_mp, f.nilai_bei_sekda_pk, f.bobot_bei_sekda_pk, f.ev_bei_sekda_pk, f.nilai_bei_sekda_pb, f.bobot_bei_sekda_pb, f.ev_bei_sekda_pb
										FROM data_peserta AS a INNER JOIN komp_lgd AS b ON a.id_peserta = b.id_peserta INNER JOIN komp_bei AS c ON b.nip = c.nip INNER JOIN komp_ankas AS d ON c.nip = d.nip
										INNER JOIN komp_pw AS e ON d.nip = e.nip INNER JOIN komp_bei_sekda AS f ON e.nip = f.nip WHERE a.nip = '$nip'																	
									");
		return $hasil;	
	}
		
	function get_potensi_kerjasama($nip){
		$hasil	=	$this->db->query("
										SELECT a.id_peserta, d.nip, d.nama, b.tahun, c.id_potensi, c.kd_personil_wwcr, c.nilai_da_pot, c.nilai_lb_pot, c.nilai_sk_pot, c.nilai_ini_pot, c.nilai_dtk_pot, c.nilai_kep_pot, c.nilai_db_pot, c.nilai_tj_pot, c.nilai_ki_pot, c.nilai_kd_pot, c.nilai_se_pot, c.nilai_pot, c.percent_pot FROM data_peserta AS a 
										INNER JOIN kegiatan AS b ON a.id_kegiatan = b.id_kegiatan INNER JOIN poten_nilai AS c ON a.nip = c.nip INNER JOIN registrasi AS d ON d.nip = a.nip WHERE c.nip = '$nip'
									");
		return $hasil;	
	}
		

	
//// END PESERTA KERJASAMA ////		



//// FUNGSI BERSAMA CETAK ////		

	function input_potensi($data,$table){
		$this->db->insert($table,$data);
	} 


	function input_kompetensi($data,$table){
		$this->db->insert($table,$data);
	} 

	function cetak_drh_row($nip){
		$hasil	=	$this->db->query("
										SELECT a.id_peserta, b.kd_kegiatan, c.id_reg, c.nama, c.nip, c.gol, c.jabatan, c.unker, c.jenped_awal, c.jur_awal, c.univ_awal, c.thn_awal, c.jenpend_akhir,
										c.jur_akhir, c.univ_akhir, c.thn_akhir, c.jab_1, c.unker_1, c.thn_unker_1, c.jab_2, c.unker_2, c.thn_unker_2, c.unker_puas, c.alasan_puas, c.unker_no_puas,
										c.alasan_no_puas, c.kebijakan, c.kekuatan_1, c.mengapa_kekuatan_1, c.kekuatan_2, c.mengapa_kekuatan_2,
										c.ket, c.last_update FROM data_peserta AS a INNER JOIN kegiatan AS b ON a.id_kegiatan = b.id_kegiatan INNER JOIN registrasi AS c ON a.nip = c.nip
										WHERE a.nip = '$nip'
									");
		return $hasil->result();	
	}
		
	function cetak_ci_row($nip){
		$hasil	=	$this->db->query("
										SELECT a.id_reg, d.id_peserta, a.nama, a.nip, a.gol, a.jabatan, a.unker, b.id_materi_ci1, b.s1_topik, b.s1_tmt, b.s1_tst, b.s1_3, b.s1_4, b.s1_5, b.s1_6, b.s1_7, b.s1_8,
										c.id_materi_ci2, c.s2_topik, c.s2_tmt, c.s2_tst, c.s2_3, c.s2_4, c.s2_5, c.s2_6, c.s2_7, c.s2_8 
										FROM registrasi AS a INNER JOIN hasil_ci_satu AS b ON a.nip = b.nip INNER JOIN hasil_ci_dua AS c ON b.nip = c.nip INNER JOIN data_peserta AS d ON a.nip = d.nip
										INNER JOIN kegiatan AS e ON d.id_kegiatan = e.id_kegiatan WHERE d.nip = '$nip'			
									");
		return $hasil->result();	
	}
	
	function cetak_qkom_row($nip){
		$hasil	=	$this->db->query("
										SELECT b.id_reg, b.nama, e.nama_kegiatan, e.tgl_keg, b.nip, b.gol, b.jabatan, b.unker, a.jenjang, a.tahun, c.id_qkom_satu, c.jwb1a_a, c.jwb1a_b, c.jwb1a_c, c.jwb1a_d,
										c.jwb1b_a, c.jwb1b_b, c.jwb1b_c, c.jwb1b_d, c.jwb2_a, c.jwb2_b, c.jwb2_c, c.jwb2_d, c.jwb3_a, c.jwb3_b, c.jwb3_c, c.jwb3_d, c.jwb4_a, c.jwb4_b, c.jwb4_c, c.jwb4_d,
										c.jwb5_a, c.jwb5_b, c.jwb5_c, c.jwb5_d, c.jwb6_a, c.jwb6_b, c.jwb6_c, c.jwb6_d, c.jwb7_a, c.jwb7_b, c.jwb7_c, c.jwb7_d, c.jwb8_a, c.jwb8_b, c.jwb8_c, c.jwb8_d,
										c.ket, d.id_qkom_dua, d.jwb9_a, d.jwb9_b, d.jwb9_c, d.jwb9_d, d.jwb10_a, d.jwb10_b, d.jwb10_c, d.jwb10_d, d.jwb11_a, d.jwb11_b, d.jwb11_c, d.jwb11_d, d.jwb12_a,
										d.jwb12_b, d.jwb12_c, d.jwb12_d, d.jwb13_a, d.jwb13_b, d.jwb13_c, d.jwb13_d, d.jwb14_a, d.jwb14_b, d.jwb14_c, d.jwb14_d, d.jwb15, d.jwb16, d.jwb17,
										d.ket FROM data_peserta AS a INNER JOIN registrasi AS b ON a.nip = b.nip INNER JOIN hasil_qkom_satu AS c ON b.nip = c.nip
										INNER JOIN hasil_qkom_dua AS d ON c.nip = d.nip INNER JOIN kegiatan AS e ON a.id_kegiatan = e.id_kegiatan WHERE b.nip = '$nip'
									");
		return $hasil->result();	
	}
		
	function cetak_ankas_row($nip){
		$hasil	=	$this->db->query("
										SELECT a.id_peserta, b.kd_kegiatan, c.id_reg, a.nama, a.pangkat, a.jabatan, a.unker, d.id_peserta_ankas,
										d.id_materi_ankas, d.nip, d.jwb_ankas1, d.jwb_ankas2, d.jwb_ankas3, d.jwb_ankas4, d.ket,
										e.id_ankas, e.id_materi, e.wacana, e.tanya_ankas1, e.tanya_ankas2, e.tanya_ankas3, e.tanya_ankas4, e.last_update
										FROM data_peserta AS a INNER JOIN kegiatan AS b ON a.id_kegiatan = b.id_kegiatan INNER JOIN registrasi AS c ON a.nip = c.nip
										INNER JOIN hasil_ankas AS d ON c.nip = d.nip INNER JOIN soal_ankas AS e ON d.id_materi_ankas = e.id_materi
										WHERE a.nip = '$nip'
									");
		return $hasil->result();	
	}
	
	function lihat_apm_dua_row($nip){
		$hasil	=	$this->db->query("
									SELECT b.nama, a.nip, a. nilai, IF(a.nilai=0,'0',IF(a.nilai=1,'1-3',IF(a.nilai=2,'1-3',IF(a.nilai=3,'1-3',IF(a.nilai=4,'4-5',IF(a.nilai=5,'4-5',IF(a.nilai=6,'6-7',IF(a.nilai=7,'6-7',IF(a.nilai=8,'8-9',IF(a.nilai=9,'8-9',IF(a.nilai=10,'10-12',IF(a.nilai=11,'10-12',IF(a.nilai=12,'10-12',IF(a.nilai=13,'13-14',IF(a.nilai=14,'13-14',IF(a.nilai=15,'15-16',IF(a.nilai=16,'15-16',IF(a.nilai=17,'17-18',IF(a.nilai=18,'17-18',IF(a.nilai=19,'19-21',IF(a.nilai=20,'19-21',IF(a.nilai=21,'19-21',IF(a.nilai=22,'22-23',IF(a.nilai=23,'22-23',IF(a.nilai=24,'24-25',IF(a.nilai=25,'24-25',IF(a.nilai=26,'26-27',IF(a.nilai=27,'26-27',IF(a.nilai=28,'28-30',IF(a.nilai=29,'28-30',IF(a.nilai=30,'28-30',IF(a.nilai=31,'31-32',IF(a.nilai=32,'31-32',IF(a.nilai=33,'33-34',IF(a.nilai=34,'33-34',IF(a.nilai=35,'35-36',IF(a.nilai=36,'35-36','0'))))))))))))))))))))))))))))))))))))) AS rs,(SELECT IF(rs='0','3',IF(rs='1-3','4',IF(rs='4-5','5',IF(rs='6-7','6',IF(rs='8-9','7',IF(rs='10-12','8',IF(rs='13-14','9',IF(rs='15-16','10',IF(rs='17-18','11',IF(rs='19-21','12',IF(rs='22-23','13',IF(rs='24-25','14',IF(rs='26-27','15',IF(rs='28-30','16',IF(rs='31-32','17',IF(rs='33-34','18',IF(rs='35-36','19','0')))))))))))))))))) AS ss,(SELECT IF(ss='3','SK',IF(ss='4','SK',IF(ss='5','K',IF(ss='6','K',IF(ss='7','K',IF(ss='8','R',IF(ss='9','R',IF(ss='10','R',IF(ss='11','R',IF(ss='12','R',IF(ss='12','R',IF(ss='13','T',IF(ss='14','T',IF(ss='15','T',IF(ss='16','T','ST')))))))))))))))) AS ket
									FROM hasil_apm_dua as a INNER JOIN registrasi as b on a.nip = b.nip WHERE a.nip = '$nip'
									");
		return $hasil;	
	}

	
	function export_papi($nip){
		$hasil	=	$this->db->query("
									SELECT c.nama, d.tgl_keg, a.nip, b.id_peserta_papi,
									b.jwb_papi1, b.jwb_papi2, b.jwb_papi3, b.jwb_papi4, b.jwb_papi5, b.jwb_papi6, b.jwb_papi7, b.jwb_papi8, b.jwb_papi9, b.jwb_papi10, 
									b.jwb_papi11, b.jwb_papi12, b.jwb_papi13, b.jwb_papi14, b.jwb_papi15, b.jwb_papi16, b.jwb_papi17, b.jwb_papi18, b.jwb_papi19, b.jwb_papi20,
									b.jwb_papi21, b.jwb_papi22, b.jwb_papi23, b.jwb_papi24, b.jwb_papi25, b.jwb_papi26, b.jwb_papi27, b.jwb_papi28, b.jwb_papi29, b.jwb_papi30,
									b.jwb_papi31, b.jwb_papi32, b.jwb_papi33, b.jwb_papi34, b.jwb_papi35, b.jwb_papi36, b.jwb_papi37, b.jwb_papi38, b.jwb_papi39, b.jwb_papi40,
									b.jwb_papi41, b.jwb_papi42, b.jwb_papi43, b.jwb_papi44, b.jwb_papi45, b.jwb_papi46, b.jwb_papi47, b.jwb_papi48, b.jwb_papi49, b.jwb_papi50,
									b.jwb_papi51, b.jwb_papi52, b.jwb_papi53, b.jwb_papi54, b.jwb_papi55, b.jwb_papi56, b.jwb_papi57, b.jwb_papi58, b.jwb_papi59, b.jwb_papi60,
									b.jwb_papi61, b.jwb_papi62, b.jwb_papi63, b.jwb_papi64, b.jwb_papi65, b.jwb_papi66, b.jwb_papi67, b.jwb_papi68, b.jwb_papi69, b.jwb_papi70,
									b.jwb_papi71, b.jwb_papi72, b.jwb_papi73, b.jwb_papi74, b.jwb_papi75, b.jwb_papi76, b.jwb_papi77, b.jwb_papi78, b.jwb_papi79, b.jwb_papi80,
									b.jwb_papi81, b.jwb_papi82, b.jwb_papi83, b.jwb_papi84, b.jwb_papi85, b.jwb_papi86, b.jwb_papi87, b.jwb_papi88, b.jwb_papi89, b.jwb_papi90,
									b.ket FROM registrasi AS a INNER JOIN data_peserta AS c ON c.nip = a.nip INNER JOIN kegiatan AS d ON c.id_kegiatan = d.id_kegiatan
									INNER JOIN hasil_papi AS b ON a.nip = b.nip WHERE b.nip = '$nip'
									");
		return $hasil->result();	
	}
	

	function export_sjt(){
		$this->db->select('*');
		$this->db->from('hasil_sjt');
		$this->db->join('data_peserta', 'data_peserta.nip = hasil_sjt.nip', 'inner');
		$query = $this->db->get();
	  return $query->result();
	}

	function export_apm2(){
		$this->db->select('*');
		$this->db->from('hasil_apm_dua');
		$this->db->join('data_peserta', 'data_peserta.nip = hasil_apm_dua.nip', 'inner');
		$query = $this->db->get();
	  return $query->result();
	}
  


	
}