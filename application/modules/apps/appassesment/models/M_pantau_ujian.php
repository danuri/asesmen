<?php
class M_pantau_ujian extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->db2 = $this->load->database('db_dua',TRUE);
	}
	
///// PANTAU UJIAN

	function data_absen(){
		$hasil	=	$this->db2->query("SELECT
										c.id,
										c.nama,
										c.jabatan,
										c.no_peserta,
										m_admin_log.last_login
										FROM
										m_admin AS b
										INNER JOIN m_siswa AS c ON c.id = b.kon_id
										INNER JOIN m_admin_log ON c.no_peserta = m_admin_log.username
										GROUP BY
										m_admin_log.username");
		return $hasil->result();	
   
   }
	function data_regist(){
		$hasil	=	$this->db->query("SELECT * FROM registrasi WHERE ket LIKE 'Y' ORDER BY id_reg DESC");
		return $hasil->result();	
   
   }
   
	function data_regist_nonasn(){
		$hasil	=	$this->db->query("SELECT * FROM registrasi_non_asn WHERE ket LIKE 'Y' ORDER BY id_reg_non_asn DESC");
		return $hasil->result();	
   
   }
   
	function data_apm_2(){
		$hasil	=	$this->db->query("
		
SELECT
	(SELECT id_peserta_apm_satu FROM hasil_apm_satu WHERE id_peserta_apm_satu = 2 )as id_peserta_apm_satu,
	(SELECT nip FROM hasil_apm_satu WHERE id_peserta_apm_satu = 2) as nip,
	(SELECT nama FROM hasil_apm_satu WHERE id_peserta_apm_satu = 2) as nama,
	(SELECT IF(jwb_apm_satu_1 = 'H',1,0) FROM hasil_apm_satu WHERE id_peserta_apm_satu = 2) as jwb1,
	(SELECT IF(jwb_apm_satu_2 = 'D',1,0) FROM hasil_apm_satu WHERE id_peserta_apm_satu = 2) as jwb2,
	(SELECT IF(jwb_apm_satu_3 = 'E',1,0) FROM hasil_apm_satu WHERE id_peserta_apm_satu = 2) as jwb3,
	(SELECT IF(jwb_apm_satu_4 = 'A',1,0) FROM hasil_apm_satu WHERE id_peserta_apm_satu = 2) as jwb4,
	(SELECT IF(jwb_apm_satu_5 = 'B',1,0) FROM hasil_apm_satu WHERE id_peserta_apm_satu = 2) as jwb5,
	(SELECT IF(jwb_apm_satu_6 = 'F',1,0) FROM hasil_apm_satu WHERE id_peserta_apm_satu = 2) as jwb6,
	(SELECT IF(jwb_apm_satu_7 = 'C',1,0) FROM hasil_apm_satu WHERE id_peserta_apm_satu = 2) as jwb7,
	(SELECT IF(jwb_apm_satu_8 = 'G',1,0) FROM hasil_apm_satu WHERE id_peserta_apm_satu = 2) as jwb8,
	(SELECT IF(jwb_apm_satu_9 = 'F',1,0) FROM hasil_apm_satu WHERE id_peserta_apm_satu = 2) as jwb9,
	(SELECT IF(jwb_apm_satu_10 = 'E',1,0) FROM hasil_apm_satu WHERE id_peserta_apm_satu = 2) as jwb10,
	(SELECT IF(jwb_apm_satu_11 = 'G',1,0) FROM hasil_apm_satu WHERE id_peserta_apm_satu = 2) as jwb11,
	(SELECT IF(jwb_apm_satu_12 = 'H',1,0) FROM hasil_apm_satu WHERE id_peserta_apm_satu = 2) as jwb12,
	(SELECT SUM(jwb1+jwb2+jwb3+jwb4+jwb5+jwb6+jwb7+jwb8+jwb9+jwb10+jwb11+jwb12)) AS jml_benar,
	(SELECT jml_benar) as nilai,
	(SELECT IF(nilai=0,'0',IF(nilai=1,'1-3',IF(nilai=2,'1-3',IF(nilai=3,'1-3',IF(nilai=4,'4-5',IF(nilai=5,'4-5',IF(nilai=6,'6-7',IF(nilai=7,'6-7',IF(nilai=8,'8-9',IF(nilai=9,'8-9',IF(nilai=10,'10-12',IF(nilai=11,'10-12',IF(nilai=12,'10-12',IF(nilai=13,'13-14',IF(nilai=14,'13-14',IF(nilai=15,'15-16',IF(nilai=16,'15-16',IF(nilai=17,'17-18',IF(nilai=18,'17-18',IF(nilai=19,'19-21',IF(nilai=20,'19-21',IF(nilai=21,'19-21',IF(nilai=22,'22-23',IF(nilai=23,'22-23',IF(nilai=24,'24-25',IF(nilai=25,'24-25',IF(nilai=26,'26-27',IF(nilai=27,'26-27',IF(nilai=28,'28-30',IF(nilai=29,'28-30',IF(nilai=30,'28-30',IF(nilai=31,'31-32',IF(nilai=32,'31-32',IF(nilai=33,'33-34',IF(nilai=34,'33-34',IF(nilai=35,'35-36',IF(nilai=36,'35-36','0')))))))))))))))))))))))))))))))))))))) AS rs,
	(SELECT IF(rs='0','3',IF(rs='1-3','4',IF(rs='4-5','5',IF(rs='6-7','6',IF(rs='8-9','7',IF(rs='10-12','8',IF(rs='13-14','9',IF(rs='15-16','10',IF(rs='17-18','11',IF(rs='19-21','12',IF(rs='22-23','13',IF(rs='24-25','14',IF(rs='26-27','15',IF(rs='28-30','16',IF(rs='31-32','17',IF(rs='33-34','18',IF(rs='35-36','19','0')))))))))))))))))) AS ss,
	(SELECT IF(ss='3','SK',IF(ss='4','SK',IF(ss='5','K',IF(ss='6','K',IF(ss='7','K',IF(ss='8','R',IF(ss='9','R',IF(ss='10','R',IF(ss='11','R',IF(ss='12','R',IF(ss='12','R',IF(ss='13','T',IF(ss='14','T',IF(ss='15','T',IF(ss='16','T','ST')))))))))))))))) AS ket
			
	
		");
		return $hasil->result();	
   
   }
	function data_papi(){
		$hasil	=	$this->db2->query("SELECT a.id,b.nama,b.no_peserta,a.tgl_selesai FROM tr_ikut_ujian AS a INNER JOIN m_siswa AS b ON a.id_user = b.id WHERE a.id_tes = 3 ");
		return $hasil->result();	
   
   }
	function data_ankas(){
		$hasil	=	$this->db2->query("SELECT * FROM tr_ikut_ujian_ankas ORDER BY id_ankas DESC");
		return $hasil->result();	
   
   }
	function data_ci(){
		$hasil	=	$this->db->query("									
		                            SELECT a.id_reg, a.nama, a.nip, a.gol, a.jabatan, a.unker, b.jenjang, c.nama_kegiatan, d.id_ci
									FROM registrasi AS a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.id_kegiatan = c.id_kegiatan
									INNER JOIN hasil_ci_satu AS e ON a.nip = e.nip INNER JOIN hasil_ci_dua AS d ON e.nip = d.nip
									WHERE c.ket LIKE 'Y' AND d.ket LIKE 'Y' ORDER BY d.id_ci DESC
                                    ");
		return $hasil->result();	
   
   }
	function data_qkom(){
		$hasil	=	$this->db->query("
                                    SELECT a.id_reg, b.nama, b.nip, a.gol, b.jabatan, b.unker, b.jenjang, c.nama_kegiatan, e.id_qkom_dua FROM registrasi AS a INNER JOIN data_peserta AS b ON b.nip = a.nip
                                    INNER JOIN kegiatan AS c ON b.id_kegiatan = c.id_kegiatan INNER JOIN hasil_qkom_satu AS d ON a.nip = d.nip INNER JOIN hasil_qkom_dua AS e ON d.nip = e.nip
                                    WHERE d.ket LIKE 'Y' AND e.ket LIKE 'Y' ORDER BY e.id_qkom_dua DESC
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
	
	function cetak_qkom_row($id_qkom){
	$hasil	=	$this->db->query("SELECT b.*, a.last_update FROM registrasi AS a INNER JOIN hasil_qkom AS b ON a.nip = b.nip WHERE id_qkom = '$id_qkom' ");
	return $hasil->result();	
  
	}
		
	function cetak_ankas_row($id_ankas){
	$hasil	=	$this->db2->query("SELECT * FROM tr_ikut_ujian_ankas WHERE id_ankas = '$id_ankas' ");
	return $hasil->result();	
  
	}
		
	function cetak_ci_row($id_ci){
	$hasil	=	$this->db->query("SELECT b.*, a.last_update FROM registrasi AS a INNER JOIN hasil_ci AS b ON a.nip = b.nip WHERE id_ci = '$id_ci' ");
	return $hasil->result();	
  
	}
		
	function cetak_drh_row($id_reg){
	$hasil	=	$this->db->query("SELECT * FROM registrasi WHERE id_reg = '$id_reg' ");
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
		
		
		


	
}