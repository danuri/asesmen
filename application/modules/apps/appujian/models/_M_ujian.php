<?php
class M_ujian extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	

///// UJIAN APM
	function data_apm_satu(){
		$apm_satu	=	$this->db->query("SELECT b.id_apm_satu, b.id_appe, b.nilai, a.judul_appe FROM konten_appe AS a INNER JOIN soal_apm_satu AS b ON b.id_appe = a.id_appe");
		return $apm_satu;	
	}
	
	function simpan_apm_satu($data,$table){
		$this->db->insert($table,$data);
	} 
	
	function data_apm_dua(){
		$papi	=	$this->db->query("SELECT b.id_apm_dua, b.id_appe, a.judul_appe FROM konten_appe AS a INNER JOIN soal_apm_dua AS b ON b.id_appe = a.id_appe");
		return $papi;	
	}
	
	function simpan_apm_dua($data,$table){
		$this->db->insert($table,$data);
	} 
///// END OF APM

///// UJIAN PAPI

	function data_papi(){
		$papi	=	$this->db->query("SELECT * FROM soal_papi");
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
		$ankas	=	$this->db->query(" SELECT * FROM soal_ankas WHERE soal_ankas.ket = 'Y' ");
		return $ankas;	
	}
		
	function simpan_ankas($data,$table){
		$this->db->insert($table,$data);
	} 
///// END OF ANKAS

///// UJIAN CFIT
	function contoh_cfit_satu(){
		$cfit_satu	=	$this->db->query("
											SELECT b.id_cfit_satu, b.id_materi, b.id_appe, b.penjelasan, b.nilai, a.judul_appe FROM konten_appe AS a INNER JOIN soal_cfit_satu AS b ON b.id_appe = a.id_appe
											limit 3
										");
		return $cfit_satu;	
	}

	function hasil_contoh_cfit_satu(){
		$hasil_contoh_cfit_satu	=	$this->db->query("
					SELECT a.id_contoh_cfit, a.id_materi, a.nip, a.jwb_contoh_cfit_1, a.jwb_contoh_cfit_2, a.jwb_contoh_cfit_3, IF(a.jwb_contoh_cfit_1 = 'C','Benar','Salah') AS jwb_1, IF(a.jwb_contoh_cfit_2 = 'E','Benar','Salah') AS jwb_2, 
					IF(a.jwb_contoh_cfit_3 = 'E','Benar','Salah') AS jwb_3 FROM  hasil_contoh_cfit as a WHERE a.id_materi = 10
													");
		return $hasil_contoh_cfit_satu;	
	}
	
	function simpan_contoh_cfit_satu($data,$table){
		$this->db->insert($table,$data);
	} 
	


		
}