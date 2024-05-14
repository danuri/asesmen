<?php
class M_ujian extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	

	
	function get_id_reg($username){
		$hasil	=	$this->db->query("
										SELECT a.id_reg, b.username FROM registrasi a
										INNER JOIN users b ON a.nip = b.username
										WHERE a.ket LIKE 'Y' AND b.status LIKE 'on' AND
										b.username = '$username';
		
										");
		return $hasil;	
	}
	
	
	
///// UJIAN APM
	function data_apm_satu(){
		$apm_satu	=	$this->db->query("SELECT b.id_apm_satu, b.id_appe, b.nilai, a.judul_appe FROM konten_appe AS a INNER JOIN soal_apm_satu AS b ON b.id_appe = a.id_appe ");
		return $apm_satu;	
	}
	
	function simpan_apm_satu($data,$table){
		$this->db->insert($table,$data);
	} 
	
	function data_apm_dua(){
		$papi	=	$this->db->query("SELECT b.id_apm_dua, b.id_appe, a.judul_appe FROM konten_appe AS a INNER JOIN soal_apm_dua AS b ON b.id_appe = a.id_appe ");
		return $papi;	
	}
	
	function simpan_apm_dua($data,$table){
		$this->db->insert($table,$data);
	} 
///// END OF APM

///// UJIAN PAPI

	function data_papi(){
		$papi	=	$this->db->query("SELECT * FROM soal_papi ORDER BY RAND()");
		return $papi;	
	}
	
	function simpan_papi($data,$table){
		$this->db->insert($table,$data);
	} 
	
///// END OF PAPI

///// UJIAN SJT

	function data_sjt(){
		$sjt	=	$this->db->query("SELECT * FROM soal_sjt WHERE soal_sjt.ket LIKE 'paket B'");
		return $sjt;	
	}
	
	function simpan_sjt($data,$table){
		$this->db->insert($table,$data);
		
	}
///// END OF SJT

///// UJIAN ANKAS

	function data_ankas(){
		$ankas	=	$this->db->query(" SELECT * FROM soal_ankas WHERE soal_ankas.id_materi = 2 AND soal_ankas.ket = 'Y' ");
		return $ankas;	
	}
	
	function data_ankas_jptp(){
		$ankas	=	$this->db->query(" SELECT * FROM soal_ankas WHERE soal_ankas.id_materi = 17 AND soal_ankas.ket = 'Y' ");
		return $ankas;	
	}
		
	function data_ankas_pelaksana(){
		$ankas	=	$this->db->query(" SELECT * FROM soal_ankas WHERE soal_ankas.id_materi = 21 AND soal_ankas.ket = 'Y' ");
		return $ankas;	
	}
		
		
	function simpan_ankas($data,$table){
		$this->db->insert($table,$data);
	} 
///// END OF ANKAS

///// UJIAN CFIT
	function contoh_cfit_satu(){
		$contoh_cfit_satu	=	$this->db->query("
											SELECT b.id_soal_cfit_satu, b.id_materi, b.id_appe, b.penjelasan, b.nilai, a.judul_appe FROM konten_appe AS a INNER JOIN soal_cfit_satu AS b ON b.id_appe = a.id_appe WHERE b.ket LIKE 'N'
										");
		return $contoh_cfit_satu;	
	}

	function simpan_contoh_cfit_satu($data,$table){
		$this->db->insert($table,$data);
	} 
		
	function hasil_contoh_cfit_satu($nip){
		$hasil_contoh_cfit_satu	=	$this->db->query("
					SELECT a.id_contoh_cfit, a.id_sub_materi, a.nip, a.jwb_contoh_cfit_1, a.jwb_contoh_cfit_2, a.jwb_contoh_cfit_3, IF(a.jwb_contoh_cfit_1 = 'C','Benar','Salah') AS jwb_1, IF(a.jwb_contoh_cfit_2 = 'E','Benar','Salah') AS jwb_2, 
					IF(a.jwb_contoh_cfit_3 = 'E','Benar','Salah') AS jwb_3 FROM  contoh_cfit as a WHERE a.id_materi = 10 AND a.nip = '$nip'
													");
		return $hasil_contoh_cfit_satu;	
	}
	
	function cfit_satu(){
		$cfit_satu	=	$this->db->query("
											SELECT b.id_soal_cfit_satu - 3 as soal_cfit_satu, b.id_materi, b.id_appe,a.judul_appe FROM konten_appe AS a INNER JOIN soal_cfit_satu AS b ON b.id_appe = a.id_appe WHERE b.ket LIKE 'Y'
										");
		return $cfit_satu;	
	}

	function simpan_cfit_satu($data,$table){
		$this->db->insert($table,$data);
	} 
	

//=====================================================================================================================================	
	
	function contoh_cfit_dua(){
		$contoh_cfit_dua	=	$this->db->query("
											SELECT b.id_soal_cfit_dua, b.id_materi, b.id_appe, b.penjelasan, b.nilai, a.judul_appe FROM konten_appe AS a INNER JOIN soal_cfit_dua AS b ON b.id_appe = a.id_appe WHERE b.ket LIKE 'N'
										");
		return $contoh_cfit_dua;	
	}

	function cfit_dua(){
		$cfit_dua	=	$this->db->query("
											SELECT b.id_soal_cfit_dua - 2 as soal_cfit_dua, b.id_materi, b.id_appe, b.penjelasan, b.nilai, a.judul_appe FROM konten_appe AS a INNER JOIN soal_cfit_dua AS b ON b.id_appe = a.id_appe WHERE b.ket LIKE 'Y'
										");
		return $cfit_dua;	
	}

	function simpan_cfit_dua($data,$table){
		$this->db->insert($table,$data);
	} 
	
//=====================================================================================================================================	
	
	function contoh_cfit_tiga(){
		$contoh_cfit_tiga	=	$this->db->query("
											SELECT b.id_soal_cfit_tiga, b.id_materi, b.id_appe, b.penjelasan, b.nilai, a.judul_appe FROM konten_appe AS a INNER JOIN soal_cfit_tiga AS b ON b.id_appe = a.id_appe WHERE b.ket LIKE 'N'
										");
		return $contoh_cfit_tiga;	
	}
	
	function simpan_contoh_cfit_tiga($data,$table){
		$this->db->insert($table,$data);
	} 
	
	function hasil_contoh_cfit_tiga($nip){
		$hasil_contoh_cfit_tiga	=	$this->db->query("
					SELECT a.id_contoh_cfit, a.id_sub_materi, a.nip, a.jwb_contoh_cfit_1, a.jwb_contoh_cfit_2, a.jwb_contoh_cfit_3, IF(a.jwb_contoh_cfit_1 = 'B','Benar','Salah') AS jwb_1, IF(a.jwb_contoh_cfit_2 = 'C','Benar','Salah') AS jwb_2, 
					IF(a.jwb_contoh_cfit_3 = 'F','Benar','Salah') AS jwb_3 FROM  contoh_cfit as a WHERE a.id_sub_materi = 03 AND a.nip = '$nip'
													");
		return $hasil_contoh_cfit_tiga;	
	}
	
	function cfit_tiga(){
		$cfit_tiga	=	$this->db->query("
											SELECT b.id_soal_cfit_tiga - 3 as soal_cfit_tiga, b.id_materi, b.id_appe, b.penjelasan, b.nilai, a.judul_appe FROM konten_appe AS a INNER JOIN soal_cfit_tiga AS b ON b.id_appe = a.id_appe WHERE b.ket LIKE 'Y'
										");
		return $cfit_tiga;	
	}

	function simpan_cfit_tiga($data,$table){
		$this->db->insert($table,$data);
	} 

//=====================================================================================================================================	

	function contoh_cfit_empat(){
		$contoh_cfit_empat	=	$this->db->query("
											SELECT b.id_soal_cfit_empat, b.id_materi, b.id_appe, b.penjelasan, b.nilai, a.judul_appe FROM konten_appe AS a INNER JOIN soal_cfit_empat AS b ON b.id_appe = a.id_appe WHERE b.ket LIKE 'N'
										");
		return $contoh_cfit_empat;	
	}
	
	function cfit_empat(){
		$cfit_empat	=	$this->db->query("
											SELECT b.id_soal_cfit_empat - 3 as soal_cfit_empat, b.id_materi, b.id_appe, b.penjelasan, b.nilai, a.judul_appe FROM konten_appe AS a INNER JOIN soal_cfit_empat AS b ON b.id_appe = a.id_appe WHERE b.ket LIKE 'Y'
										");
		return $cfit_empat;	
	}

	function simpan_cfit_empat($data,$table){
		$this->db->insert($table,$data);
	} 
	


	
	

		
}