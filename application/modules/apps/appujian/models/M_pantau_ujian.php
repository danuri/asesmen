<?php
class M_pantau_ujian extends CI_Model{
	function __construct(){
		parent::__construct();
		//$this->db2 = $this->load->database('db_dua',TRUE);
	}
	
///// PANTAU UJIAN

	function data_absen(){
		$hasil	=	$this->db->query(" 
									SELECT a.username, a.nama_user, b.last_activity, b.ip_address FROM users as a 
									INNER JOIN user_online as b ON a.user_id = b.user_id WHERE status like 'on' 
									");
		return $hasil->result();	
   
   }
	function data_regist(){
		$hasil	=	$this->db->query("SELECT * FROM registrasi WHERE ket LIKE 'Y' ORDER BY id_reg DESC");
		return $hasil->result();	
   }
   
	function data_belum_regist(){
		$hasil	=	$this->db->query("
										SELECT a.nip, a.nama, a.jabatan, a.unker, c.instansi FROM data_peserta as a INNER JOIN kegiatan as c ON a.kd_kegiatan = c.kd_kegiatan WHERE a.nip NOT IN (SELECT b.nip FROM registrasi as b WHERE b.ket like 'Y') AND a.ket like 'Y';
									");
		return $hasil->result();	
   
   }

	function data_regist_nonasn(){
		$hasil	=	$this->db->query("SELECT * FROM registrasi_non_asn WHERE ket LIKE 'Y' ORDER BY id_reg_non_asn DESC");
		return $hasil->result();	
   }
   
	function data_belum_regist_nonasn(){
		$hasil	=	$this->db->query("SELECT nip, nama, jabatan, unker FROM data_peserta WHERE nip NOT IN (SELECT nip FROM registrasi_non_asn) AND ket like 'Y' ");
		return $hasil->result();	
   
   }
      
      
	function data_apm_1(){
		$hasil	=	$this->db->query("
									SELECT a.*, b.*, c.*, d.*
									FROM data_peserta AS a 
									INNER JOIN registrasi AS b ON a.id_peserta = b.id_peserta 
									INNER JOIN kegiatan AS c ON a.id_kegiatan = c.id_kegiatan
									INNER JOIN hasil_apm_satu AS d ON b.id_reg = d.id_reg 
									WHERE b.ket LIKE 'Y' AND d.ket LIKE 'Y' 
									GROUP BY b.id_reg
									ORDER BY b.id_reg DESC;
									");
		return $hasil->result();	
   }
   
	function data_apm_2(){
		$hasil	=	$this->db->query("
									SELECT a.*, b.*, c.*, d.*
									FROM data_peserta AS a 
									INNER JOIN registrasi AS b ON a.id_peserta = b.id_peserta 
									INNER JOIN kegiatan AS c ON a.id_kegiatan = c.id_kegiatan
									INNER JOIN hasil_apm_dua AS d ON b.id_reg = d.id_reg 
									WHERE b.ket LIKE 'Y' AND d.ket LIKE 'Y' 
									GROUP BY b.id_reg
									ORDER BY b.id_reg DESC;
						            ");
		return $hasil->result();	
   }
   
	function data_papi(){
		$hasil	=	$this->db->query("
									SELECT a.*, b.*, c.*, d.*
									FROM data_peserta AS a 
									INNER JOIN registrasi AS b ON a.id_peserta = b.id_peserta 
									INNER JOIN kegiatan AS c ON a.id_kegiatan = c.id_kegiatan
									INNER JOIN hasil_papi AS d ON b.id_reg = d.id_reg 
									WHERE b.ket LIKE 'Y' AND d.ket LIKE 'Y' 
									GROUP BY b.id_reg
									ORDER BY b.id_reg DESC;
									");
		return $hasil->result();	
   }
   
	function data_ankas(){
		$hasil	=	$this->db->query("
									SELECT a.*, b.*, c.*, d.*
									FROM data_peserta AS a 
									INNER JOIN registrasi AS b ON a.id_peserta = b.id_peserta 
									INNER JOIN kegiatan AS c ON a.id_kegiatan = c.id_kegiatan
									INNER JOIN hasil_ankas AS d ON b.id_reg = d.id_reg 
									WHERE b.ket LIKE 'Y' AND d.ket LIKE 'Y' 
									GROUP BY b.id_reg
									ORDER BY b.id_reg DESC;
									 ");
		return $hasil->result();	
   }

   function data_sjt(){
		$hasil	=	$this->db->query("
									SELECT c.id_peserta_sjt, a.nama, c.nip, a.pangkat, a.jabatan, a.unker, b.nama_kegiatan, b.tgl_keg,
									c.ket FROM data_peserta AS a INNER JOIN kegiatan AS b ON a.id_kegiatan = b.id_kegiatan INNER JOIN hasil_sjt AS c ON a.nip = c.nip
									WHERE c.ket LIKE 'Y' ORDER BY c.id_peserta_sjt DESC ");
		return $hasil->result();	
   }
   
	function data_cfit(){
		$hasil	=	$this->db->query("
									SELECT b.id_reg, b.nama, b.nip, c.nilai_cfit_1, c.nilai_cfit_2, c.nilai_cfit_3, c.nilai_cfit_4, c.total_nilai_cfit, c.norma_iq, c.kategori, c.ket
									FROM registrasi b INNER JOIN hasil_cfit c ON b.nip = c.nip 
									WHERE  c.ket LIKE 'Y'  GROUP BY c.id_hasil_cfit
									");
		return $hasil->result();	
   }

 
	function lihat_ujian_cfit(){
		$hasil	=	$this->db->query("
									SELECT b.id_reg, a.nama, a.nip, a.pangkat, a.jenjang, a.jabatan, b.unker, 
									c.*, c.ket AS ket_cfit_satu, d.*, d.ket AS ket_cfit_dua , e.*, e.ket AS ket_cfit_tiga, f.*, f.ket AS ket_cfit_empat
									FROM data_peserta AS a 
									INNER JOIN registrasi AS b ON a.nip = b.nip 
									LEFT JOIN hasil_cfit_satu AS c ON b.nip = c.nip
									LEFT JOIN hasil_cfit_dua AS d ON b.nip = d.nip 
									LEFT JOIN hasil_cfit_tiga AS e ON b.nip = e.nip 
									LEFT JOIN hasil_cfit_empat AS f ON b.nip = f.nip 
									WHERE 
									f.ket LIKE 'Y' 
									GROUP BY a.nip
									");
		return $hasil->result();	
   }
  
	function data_ci(){
		$hasil	=	$this->db->query("
									SELECT a.*, b.*, e.*, d.*
									FROM data_peserta AS a 
									INNER JOIN registrasi AS b ON a.id_peserta = b.id_peserta 
									INNER JOIN kegiatan AS c ON a.id_kegiatan = c.id_kegiatan
									INNER JOIN hasil_ci_satu AS e ON b.id_reg = e.id_reg 
									INNER JOIN hasil_ci_dua AS d ON b.id_reg = d.id_reg
									WHERE b.ket LIKE 'Y' AND e.ket LIKE 'Y' AND d.ket LIKE 'Y' 
									GROUP BY b.id_reg
									ORDER BY b.id_reg DESC;
									");
		return $hasil->result();	
   }
   
	function data_qkom(){
		$hasil	=	$this->db->query("
									SELECT a.*, b.*, e.*, d.*
									FROM data_peserta AS a 
									INNER JOIN registrasi AS b ON a.id_peserta = b.id_peserta 
									INNER JOIN kegiatan AS c ON a.id_kegiatan = c.id_kegiatan
									INNER JOIN hasil_qkom_satu AS e ON b.id_reg = e.id_reg 
									INNER JOIN hasil_qkom_dua AS d ON b.id_reg = d.id_reg
									WHERE b.ket LIKE 'Y' AND e.ket LIKE 'Y' AND d.ket LIKE 'Y' 
									GROUP BY b.id_reg
									ORDER BY b.id_reg DESC;
									");
		return $hasil->result();	
   }
   
	function data_qkomNon(){
		$hasil	=	$this->db->query("
									SELECT a.id_reg_non_asn, b.nama, b.nip, a.gol, b.jabatan, b.unker, c.nama_kegiatan, d.id_qkom_nonasn, d.ket 
									FROM registrasi_non_asn AS a 
									INNER JOIN data_peserta AS b ON b.nip = a.nip
									INNER JOIN kegiatan AS c ON b.id_kegiatan = c.id_kegiatan 
									INNER JOIN hasil_qkom_nonasn AS d ON a.nip = d.nip
									WHERE d.ket LIKE 'Y' AND d.ket LIKE 'Y' ORDER BY d.id_qkom_nonasn DESC
                                    ");
		return $hasil->result();	
   }
   
	function data_wwcr_nuns(){
		$hasil	=	$this->db->query("SELECT a.nama, a.nip, c.kd_ass_wwcr, c.jabatan_target, c.tgl_wwcr, c.tgl_lgd FROM data_peserta AS a INNER JOIN kegiatan AS b ON b.id_kegiatan = a.id_kegiatan INNER JOIN wwcr_lgd AS c ON a.id_peserta = c.id_peserta INNER JOIN lembaga ON c.kd_ass_wwcr = lembaga.kd_personil WHERE c.kd_ass_wwcr = 02.01");
		return $hasil->result();	
   
   }
   
	function data_lgd_nuns(){
		$hasil	=	$this->db->query("SELECT a.nama, a.nip, d.kd_personil, c.jabatan_target, c.tgl_wwcr, c.tgl_lgd FROM data_peserta AS a INNER JOIN kegiatan AS b ON b.id_kegiatan = a.id_kegiatan INNER JOIN wwcr_lgd AS c ON a.id_peserta = c.id_peserta INNER JOIN lembaga AS d ON c.kd_ass_lgd = d.kd_personil WHERE c.kd_ass_lgd = 02.01 ORDER BY c.tgl_lgd DESC");
		return $hasil->result();	
   
   }
   
	function data_wwcr_soft(){
		$hasil	=	$this->db->query("SELECT a.nama, a.nip, c.kd_ass_wwcr, c.jabatan_target, c.tgl_wwcr, c.tgl_lgd FROM data_peserta AS a INNER JOIN kegiatan AS b ON b.id_kegiatan = a.id_kegiatan INNER JOIN wwcr_lgd AS c ON a.id_peserta = c.id_peserta INNER JOIN lembaga ON c.kd_ass_wwcr = lembaga.kd_personil WHERE c.kd_ass_wwcr = 02.02");
		return $hasil->result();	
   
   }
   
	function data_lgd_soft(){
		$hasil	=	$this->db->query("SELECT a.nama, a.nip, d.kd_personil, c.jabatan_target, c.tgl_wwcr, c.tgl_lgd FROM data_peserta AS a INNER JOIN kegiatan AS b ON b.id_kegiatan = a.id_kegiatan INNER JOIN wwcr_lgd AS c ON a.id_peserta = c.id_peserta INNER JOIN lembaga AS d ON c.kd_ass_lgd = d.kd_personil WHERE c.kd_ass_lgd = 02.02 ORDER BY c.tgl_lgd DESC");
		return $hasil->result();	
   
   }
   
	function data_wwcr_nans(){
		$hasil	=	$this->db->query("SELECT a.nama, a.nip, c.kd_ass_wwcr, c.jabatan_target, c.tgl_wwcr, c.tgl_lgd FROM data_peserta AS a INNER JOIN kegiatan AS b ON b.id_kegiatan = a.id_kegiatan INNER JOIN wwcr_lgd AS c ON a.id_peserta = c.id_peserta INNER JOIN lembaga ON c.kd_ass_wwcr = lembaga.kd_personil WHERE c.kd_ass_wwcr = 02.03");
		return $hasil->result();	
   
   }
   
	function data_lgd_nans(){
		$hasil	=	$this->db->query("SELECT a.nama, a.nip, d.kd_personil, c.jabatan_target, c.tgl_wwcr, c.tgl_lgd FROM data_peserta AS a INNER JOIN kegiatan AS b ON b.id_kegiatan = a.id_kegiatan INNER JOIN wwcr_lgd AS c ON a.id_peserta = c.id_peserta INNER JOIN lembaga AS d ON c.kd_ass_lgd = d.kd_personil WHERE c.kd_ass_lgd = 02.03 ORDER BY c.tgl_lgd DESC");
		return $hasil->result();	
   
   }
   
	function data_wwcr_lans(){
		$hasil	=	$this->db->query("SELECT a.nama, a.nip, c.kd_ass_wwcr, c.jabatan_target, c.tgl_wwcr, c.tgl_lgd FROM data_peserta AS a INNER JOIN kegiatan AS b ON b.id_kegiatan = a.id_kegiatan INNER JOIN wwcr_lgd AS c ON a.id_peserta = c.id_peserta INNER JOIN lembaga ON c.kd_ass_wwcr = lembaga.kd_personil WHERE c.kd_ass_wwcr = 02.04");
		return $hasil->result();	
   
   }
   
	function data_lgd_lans(){
		$hasil	=	$this->db->query("SELECT a.nama, a.nip, d.kd_personil, c.jabatan_target, c.tgl_wwcr, c.tgl_lgd FROM data_peserta AS a INNER JOIN kegiatan AS b ON b.id_kegiatan = a.id_kegiatan INNER JOIN wwcr_lgd AS c ON a.id_peserta = c.id_peserta INNER JOIN lembaga AS d ON c.kd_ass_lgd = d.kd_personil WHERE c.kd_ass_lgd = 02.04 ORDER BY c.tgl_lgd DESC");
		return $hasil->result();	
   
   }
   
	function data_wwcr_sofiati(){
	$hasil	=	$this->db->query("SELECT a.nama, a.nip, c.kd_ass_wwcr, c.jabatan_target, c.tgl_wwcr, c.tgl_lgd FROM data_peserta AS a INNER JOIN kegiatan AS b ON b.id_kegiatan = a.id_kegiatan INNER JOIN wwcr_lgd AS c ON a.id_peserta = c.id_peserta INNER JOIN lembaga ON c.kd_ass_wwcr = lembaga.kd_personil WHERE c.kd_ass_wwcr = 03.01");
	return $hasil->result();	
  
	}
	
	function data_lgd_sofiati(){
		$hasil	=	$this->db->query("SELECT a.nama, a.nip, d.kd_personil, c.jabatan_target, c.tgl_wwcr, c.tgl_lgd FROM data_peserta AS a INNER JOIN kegiatan AS b ON b.id_kegiatan = a.id_kegiatan INNER JOIN wwcr_lgd AS c ON a.id_peserta = c.id_peserta INNER JOIN lembaga AS d ON c.kd_ass_lgd = d.kd_personil WHERE c.kd_ass_lgd = 03.01 ORDER BY c.tgl_lgd DESC");
		return $hasil->result();	
   
   }
   
	function cetak_wwcr_lgd(){
	$hasil	=	$this->db->query("SELECT a.nip, a.nama, c.kd_ass_wwcr, c.jabatan_target, d.nama_personil, c.tgl_wwcr, c.tgl_lgd FROM data_peserta AS a INNER JOIN kegiatan AS b ON b.id_kegiatan = a.id_kegiatan INNER JOIN wwcr_lgd AS c ON a.id_peserta = c.id_peserta INNER JOIN lembaga AS d ON c.kd_ass_wwcr = d.kd_personil ORDER BY c.kd_ass_wwcr ASC");
	return $hasil->result();	
  
	}
		
		
   
///// END OF PANTAU UJIAN
	
	function cetak_qkom_row($id_reg){
	$hasil	=	$this->db->query("
									SELECT a.*, b.*, c.*
									FROM registrasi AS a
									INNER JOIN hasil_qkom_satu AS b ON a.id_reg = b.id_reg
									INNER JOIN hasil_qkom_dua AS c ON a.id_reg = c.id_reg 
									WHERE
									a.id_reg = '$id_reg';
	                            ");
	return $hasil->result();	
  
	}
	
	function cetak_qkomNon_row($id_reg_non_asn){
	$hasil	=	$this->db->query("
								SELECT a.nama, a.nip, a.jabatan, a.unker, a.pendidikan, a.jurusan, a.univ, a.thn_lulus, a.kebijakan, a.kekuatan_1, a.mengapa_kekuatan_1, a.kekuatan_2, a.mengapa_kekuatan_2,
								b.jwb1_a, b.jwb1_b, b.jwb1_c, b.jwb2_a, b.jwb2_b, b.jwb2_c,
								b.jwb3_a, b.jwb3_b, b.jwb3_c, b.jwb4_a, b.jwb4_b, b.jwb4_c, b.jwb5_a, b.jwb5_b, b.jwb5_c, b.jwb6_a, b.jwb6_b, b.jwb6_c,
								b.jwb7_a, b.jwb7_b, b.jwb7_c,b.jwb8_a, b.jwb8_b, b.jwb8_c, b.jwb9_a, b.jwb9_b, b.jwb9_c FROM registrasi_non_asn AS a 
								INNER JOIN hasil_qkom_nonasn AS b ON a.nip = b.nip
								WHERE a.id_reg_non_asn = '$id_reg_non_asn'
	                            ");
	return $hasil->result();	
  
	}

	function cetak_ankas_row($id_reg){
		$hasil	=	$this->db->query("
									SELECT a.*, b.*, c.*
									FROM registrasi AS a
									INNER JOIN hasil_ankas AS b ON a.id_reg = b.id_reg
									INNER JOIN soal_ankas AS c ON b.id_materi_ankas = c.id_materi
									WHERE
									a.id_reg = '$id_reg';
									");
		return $hasil->result();	
	}
		

	function cetak_ci_row($id_reg){
	$hasil	=	$this->db->query("
									SELECT a.*, b.*, c.*
									FROM registrasi AS a
									INNER JOIN hasil_ci_satu AS b ON a.id_reg = b.id_reg
									INNER JOIN hasil_ci_dua AS c ON a.id_reg = c.id_reg 
									WHERE
									a.id_reg = '$id_reg';
							");
	return $hasil->result();	
	}
		
	function cetak_drh_row($id_reg){
	$hasil	=	$this->db->query("SELECT * FROM registrasi WHERE id_reg = '$id_reg' ");
	return $hasil->result();	
	}
		
	function cetak_drhNonASN_row($id_reg_non_asn){
	$hasil	=	$this->db->query("SELECT * FROM registrasi_non_asn WHERE id_reg_non_asn = '$id_reg_non_asn' ");
	return $hasil->result();	
	}
		
	function cetak_drh_row2($nip){
	$hasil	=	$this->db->query("SELECT a.* FROM registrasi AS a INNER JOIN wwcr_lgd AS b ON a.nip = b.nip WHERE a.nip = '$nip' ");
	return $hasil->result();	
	}
	
	function cetak_ci_row2($nip){
	$hasil	=	$this->db->query("SELECT a.* FROM hasil_ci AS a INNER JOIN wwcr_lgd AS b ON a.nip = b.nip WHERE a.nip = '$nip' ");
	return $hasil->result();	
  
	}
	
	function cetak_qkom_row2($nip){
	$hasil	=	$this->db->query("SELECT a.* FROM hasil_qkom AS a INNER JOIN wwcr_lgd AS b ON a.nip = b.nip WHERE a.nip = '$nip' ");
	return $hasil->result();	
  
	}

	function export_papi($id_reg){
		$this->db->select('a.*, b.*');
		$this->db->from('registrasi a');
		$this->db->join('hasil_papi b', 'a.id_reg = b.id_reg', 'inner');
		$this->db->where('a.id_reg', $id_reg);
		$query = $this->db->get();
	  return $query->result();
	}


/*	
	function export_papi($id_peserta_papi){
		$this->db->select('*');
		$this->db->from('hasil_papi');
		$this->db->join('data_peserta', 'data_peserta.nip = hasil_papi.nip', 'inner');
		$this->db->where('id_peserta_papi', $id_peserta_papi);
		$query = $this->db->get();
	  return $query->result();
	}
*/
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

	function export_kuisi(){
		$hasil	=	$this->db->query("SELECT * FROM hasil_kuisi ORDER BY tgl_assessment DESC");
		return $hasil->result();	
	}

	
}