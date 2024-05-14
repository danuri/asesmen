<?php
class M_dashboard extends CI_Model{
	function __construct(){
		parent::__construct();
		
		$this->db2 = $this->load->database('db_sjt', TRUE);
		$this->db3 = $this->load->database('db_simsdm', TRUE);
	}
//////////////////////////////////////////////////////////////////////////////////
	function hitung_kegiatan(){
		$hasil	=	$this->db->query("
										SELECT a.tahun, COUNT(IF(a.jenis_kegiatan LIKE 'Internal', 1, NULL)) as internal,
										COUNT(IF(a.jenis_kegiatan LIKE 'Kerjasama', 1, NULL)) as kerjasama,
										(SELECT sum(COUNT(IF(a.jenis_kegiatan LIKE 'Internal', 1, NULL))+COUNT(IF(a.jenis_kegiatan LIKE 'Kerjasama', 1, NULL)))) as jml_keg
										FROM kegiatan AS a GROUP BY a.tahun
									");
		return $hasil;							
	}
	
	function data_kegiatan(){
		$hasil	=	$this->db->query("
										SELECT b.*, a.*, COUNT(a.id_peserta) as jml FROM data_peserta AS a INNER JOIN kegiatan AS b ON a.kd_kegiatan = b.kd_kegiatan GROUP BY b.id_kegiatan ORDER BY a.id_kegiatan DESC" 
									);
		return $hasil->result();	
	}
	
	function data_kuisioner(){
		$hasil	=	$this->db->query("
										SELECT * FROM hasil_kuisi ORDER BY id_kuisi DESC " 
									);
		return $hasil->result();	
	}
	
	
	
	function hitung_peserta_perkegiatan(){
		$hasil	=	$this->db->query("
										SELECT a.tahun, count(if(a.kd_kegiatan like '01.%',1,null)) as psrt_ktng, count(if(a.kd_kegiatan like '02.%',1,null)) as psrt_ext,
										(SELECT sum(count(if(a.kd_kegiatan like '01.%',1,null))+count(if(a.kd_kegiatan like '02.%',1,null)))) as jml_psrt
										FROM data_peserta AS a GROUP BY a.tahun
									");
		return $hasil;							
	}
	
	function hitung_peserta(){
		$peserta	=	$this->db->query("
										select (select count(kd_kegiatan) from data_peserta where kd_kegiatan like '01.%') as jml_kotang,(select count(kd_kegiatan) from data_peserta where kd_kegiatan like '02.%') as jml_luar, (select count(kd_kegiatan) from data_peserta where kd_kegiatan like '03.%') as jml_masuk, (select count(id_personil) from lembaga) as jml_personil;
										");
		return $peserta;	
	}

	function hitung_rekom_internal(){
		$rekom	=	$this->db->query("
										select 
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Optimal' AND c.kd_kegiatan LIKE '01.%') as optimal,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Cukup Optimal' AND c.kd_kegiatan LIKE '01.%') as cukup,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Kurang Optimal' AND c.kd_kegiatan LIKE '01.%') as kurang;
										");
		return $rekom;	
	}
	
	function detail_rekom_internal(){
		$detail_rekom	=	$this->db->query("
										select
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Optimal' AND  b.jenjang like 'JPT Pertama' AND c.kd_kegiatan LIKE '01.%') as op_jptp,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Optimal' AND  b.jenjang like 'Administrator' AND c.kd_kegiatan LIKE '01.%') as op_tiga,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Optimal' AND  b.jenjang like 'Pengawas' AND c.kd_kegiatan LIKE '01.%') as op_dua,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Optimal' AND  b.jenjang like 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as op_madya,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Optimal' AND  b.jenjang like 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as op_muda,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Optimal' AND  b.jenjang like 'JF Pertama' AND c.kd_kegiatan LIKE '01.%') as op_pertama,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Optimal' AND  b.jenjang like 'JF Terampil' AND c.kd_kegiatan LIKE '01.%') as op_terampil,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Optimal' AND  b.jenjang like 'Pelaksana' AND c.kd_kegiatan LIKE '01.%') as op_satu,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Cukup Optimal' AND  b.jenjang like 'JPT Pertama' AND c.kd_kegiatan LIKE '01.%') as ckp_jptp,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Cukup Optimal' AND  b.jenjang like 'Administrator' AND c.kd_kegiatan LIKE '01.%') as ckp_tiga,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Cukup Optimal' AND  b.jenjang like 'Pengawas' AND c.kd_kegiatan LIKE '01.%') as ckp_dua,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Cukup Optimal' AND  b.jenjang like 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as ckp_madya,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Cukup Optimal' AND  b.jenjang like 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as ckp_muda,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Cukup Optimal' AND  b.jenjang like 'JF Pertama' AND c.kd_kegiatan LIKE '01.%') as ckp_pertama,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Cukup Optimal' AND  b.jenjang like 'JF Terampil' AND c.kd_kegiatan LIKE '01.%') as ckp_terampil,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Cukup Optimal' AND  b.jenjang like 'Pelaksana' AND c.kd_kegiatan LIKE '01.%') as ckp_satu,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Kurang Optimal' AND  b.jenjang like 'JPT Pertama' AND c.kd_kegiatan LIKE '01.%') as krg_jptp,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Kurang Optimal' AND  b.jenjang like 'Administrator' AND c.kd_kegiatan LIKE '01.%') as krg_tiga,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Kurang Optimal' AND  b.jenjang like 'Pengawas' AND c.kd_kegiatan LIKE '01.%') as krg_dua,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Kurang Optimal' AND  b.jenjang like 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as krg_madya,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Kurang Optimal' AND  b.jenjang like 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as krg_muda,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Kurang Optimal' AND  b.jenjang like 'JF Pertama' AND c.kd_kegiatan LIKE '01.%') as krg_pertama,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Kurang Optimal' AND  b.jenjang like 'JF Terampil' AND c.kd_kegiatan LIKE '01.%') as krg_terampil,
                                        (select count(rekom) from hasil_assessment As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where rekom like 'Kurang Optimal' AND  b.jenjang like 'Pelaksana' AND c.kd_kegiatan LIKE '01.%') as krg_satu;
										");
		return $detail_rekom;	
	}

	function hitung_komp_int(){
		$kompetensi	=	$this->db->query("
										select
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 0 AND b.jenjang like 'JPT Madya' AND c.kd_kegiatan LIKE '01.%') as jptmad_lev_1234,
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 1 AND b.jenjang like 'JPT Madya' AND c.kd_kegiatan LIKE '01.%') as jptmad_lev_234,
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 2 AND b.jenjang like 'JPT Madya' AND c.kd_kegiatan LIKE '01.%') as jptmad_lev_34,
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 3 AND b.jenjang like 'JPT Madya' AND c.kd_kegiatan LIKE '01.%') as jptmad_lev_4,
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 0 AND b.jenjang like 'JPT Pratama' AND c.kd_kegiatan LIKE '01.%') as jptp_lev_1234,
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 1 AND b.jenjang like 'JPT Pratama' AND c.kd_kegiatan LIKE '01.%') as jptp_lev_234,
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 2 AND b.jenjang like 'JPT Pratama' AND c.kd_kegiatan LIKE '01.%') as jptp_lev_34,
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 3 AND b.jenjang like 'JPT Pratama' AND c.kd_kegiatan LIKE '01.%') as jptp_lev_4,
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 0 AND b.jenjang like 'Administrator' AND c.kd_kegiatan LIKE '01.%') as tiga_lev_123,
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 1 AND b.jenjang like 'Administrator' AND c.kd_kegiatan LIKE '01.%') as tiga_lev_23,
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 2 AND b.jenjang like 'Administrator' AND c.kd_kegiatan LIKE '01.%') as tiga_lev_3,
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 0 AND b.jenjang like 'Pengawas' AND c.kd_kegiatan LIKE '01.%') as dua_lev_12,
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 1 AND b.jenjang like 'Pengawas' AND c.kd_kegiatan LIKE '01.%') as dua_lev_2,
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 0 AND b.jenjang like 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as madya_lev_1234,
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 1 AND b.jenjang like 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as madya_lev_234,
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 2 AND b.jenjang like 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as madya_lev_34,
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 3 AND b.jenjang like 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as madya_lev_4,
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 0 AND b.jenjang like 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as muda_lev_123,
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 1 AND b.jenjang like 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as muda_lev_23,
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 2 AND b.jenjang like 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as muda_lev_3,
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 0 AND b.jenjang like 'JF Pertama' AND c.kd_kegiatan LIKE '01.%') as pertama_lev_12,
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 1 AND b.jenjang like 'JF Pertama' AND c.kd_kegiatan LIKE '01.%') as pertama_lev_2,
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp >= 2 AND b.jenjang like 'JF Pertama' AND c.kd_kegiatan LIKE '01.%') as pertama_lev_ok,
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 0 AND b.jenjang like 'JF Terampil' AND c.kd_kegiatan LIKE '01.%') as terampil_lev_1,
										(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 0 AND b.jenjang like 'Pelaksana' AND c.kd_kegiatan LIKE '01.%') as satu_lev_1;
										");
		return $kompetensi;	
	}

	function hitung_komp_jptp(){
		$kompetensi	=	$this->db->query("
									select
									(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 0 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as int_1_2_3_4,
									(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 1 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as int_2_3_4,
									(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 2 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as int_3_4,
									(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 3 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as int_4,
									(select count(nilai_ks_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_ks_komp = 0 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as ks_1_2_3_4,
									(select count(nilai_ks_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_ks_komp = 1 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as ks_2_3_4,
									(select count(nilai_ks_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_ks_komp = 2 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as ks_3_4,
									(select count(nilai_ks_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_ks_komp = 3 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as ks_4,
									(select count(nilai_kom_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_kom_komp = 0 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as kom_1_2_3_4,
									(select count(nilai_kom_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_kom_komp = 1 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as kom_2_3_4,
									(select count(nilai_kom_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_kom_komp = 2 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as kom_3_4,
									(select count(nilai_kom_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_kom_komp = 3 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as kom_4,
									(select count(nilai_oph_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_oph_komp = 0 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as oph_1_2_3_4,
									(select count(nilai_oph_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_oph_komp = 1 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as oph_2_3_4,
									(select count(nilai_oph_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_oph_komp = 2 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as oph_3_4,
									(select count(nilai_oph_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_oph_komp = 3 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as oph_4,
									(select count(nilai_pp_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pp_komp = 0 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as pp_1_2_3_4,
									(select count(nilai_pp_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pp_komp = 1 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as pp_2_3_4,
									(select count(nilai_pp_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pp_komp = 2 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as pp_3_4,
									(select count(nilai_pp_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pp_komp = 3 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as pp_4,
									(select count(nilai_pdo_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pdo_komp = 0 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as pdo_1_2_3_4,
									(select count(nilai_pdo_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pdo_komp = 1 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as pdo_2_3_4,
									(select count(nilai_pdo_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pdo_komp = 2 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as pdo_3_4,
									(select count(nilai_pdo_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pdo_komp = 3 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as pdo_4,
									(select count(nilai_mp_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_mp_komp = 0 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as mp_1_2_3_4,
									(select count(nilai_mp_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_mp_komp = 1 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as mp_2_3_4,
									(select count(nilai_mp_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_mp_komp = 2 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as mp_3_4,
									(select count(nilai_mp_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_mp_komp = 3 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as mp_4,
									(select count(nilai_pk_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pk_komp = 0 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as pk_1_2_3_4,
									(select count(nilai_pk_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pk_komp = 1 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as pk_2_3_4,
									(select count(nilai_pk_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pk_komp = 2 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as pk_3_4,
									(select count(nilai_pk_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pk_komp = 3 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as pk_4,
									(select count(nilai_pb_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pb_komp = 0 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as pb_1_2_3_4,
									(select count(nilai_pb_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pb_komp = 1 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as pb_2_3_4,
									(select count(nilai_pb_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pb_komp = 2 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as pb_3_4,
									(select count(nilai_pb_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pb_komp = 3 AND b.jenjang like 'JPT Pratama' OR 'JF Madya' AND c.kd_kegiatan LIKE '01.%') as pb_4;
										");
		return $kompetensi;	
	}

	function hitung_komp_adm(){
		$kompetensi	=	$this->db->query("
									select
									(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 0 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as int_1_2_3,
									(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 1 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as int_2_3,
									(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 2 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as int_3,
									(select count(nilai_ks_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_ks_komp = 0 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as ks_1_2_3,
									(select count(nilai_ks_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_ks_komp = 1 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as ks_2_3,
									(select count(nilai_ks_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_ks_komp = 2 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as ks_3,
									(select count(nilai_kom_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_kom_komp = 0 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as kom_1_2_3,
									(select count(nilai_kom_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_kom_komp = 1 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as kom_2_3,
									(select count(nilai_kom_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_kom_komp = 2 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as kom_3,
									(select count(nilai_oph_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_oph_komp = 0 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as oph_1_2_3,
									(select count(nilai_oph_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_oph_komp = 1 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as oph_2_3,
									(select count(nilai_oph_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_oph_komp = 2 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as oph_3,
									(select count(nilai_pp_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pp_komp = 0 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as pp_1_2_3,
									(select count(nilai_pp_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pp_komp = 1 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as pp_2_3,
									(select count(nilai_pp_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pp_komp = 2 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as pp_3,
									(select count(nilai_pdo_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pdo_komp = 0 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as pdo_1_2_3,
									(select count(nilai_pdo_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pdo_komp = 1 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as pdo_2_3,
									(select count(nilai_pdo_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pdo_komp = 2 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as pdo_3,
									(select count(nilai_mp_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_mp_komp = 0 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as mp_1_2_3,
									(select count(nilai_mp_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_mp_komp = 1 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as mp_2_3,
									(select count(nilai_mp_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_mp_komp = 2 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as mp_3,
									(select count(nilai_pk_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pk_komp = 0 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as pk_1_2_3,
									(select count(nilai_pk_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pk_komp = 1 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as pk_2_3,
									(select count(nilai_pk_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pk_komp = 2 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as pk_3,
									(select count(nilai_pb_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pb_komp = 0 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as pb_1_2_3,
									(select count(nilai_pb_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pb_komp = 1 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as pb_2_3,
									(select count(nilai_pb_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pb_komp = 2 AND b.jenjang like 'Administrator' OR 'JF Muda' AND c.kd_kegiatan LIKE '01.%') as pb_3;
										");
		return $kompetensi;	
	}

	function hitung_komp_pengawas(){
		$kompetensi	=	$this->db->query("
									select
									(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 0 AND b.jenjang like 'Pengawas' OR 'JF Pertama' AND c.kd_kegiatan LIKE '01.%') as int_1_2,
									(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 1 AND b.jenjang like 'Pengawas' OR 'JF Pertama' AND c.kd_kegiatan LIKE '01.%') as int_2,
									(select count(nilai_ks_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_ks_komp = 0 AND b.jenjang like 'Pengawas' OR 'JF Pertama' AND c.kd_kegiatan LIKE '01.%') as ks_1_2,
									(select count(nilai_ks_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_ks_komp = 1 AND b.jenjang like 'Pengawas' OR 'JF Pertama' AND c.kd_kegiatan LIKE '01.%') as ks_2,
									(select count(nilai_kom_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_kom_komp = 0 AND b.jenjang like 'Pengawas' OR 'JF Pertama' AND c.kd_kegiatan LIKE '01.%') as kom_1_2,
									(select count(nilai_kom_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_kom_komp = 1 AND b.jenjang like 'Pengawas' OR 'JF Pertama' AND c.kd_kegiatan LIKE '01.%') as kom_2,
									(select count(nilai_oph_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_oph_komp = 0 AND b.jenjang like 'Pengawas' OR 'JF Pertama' AND c.kd_kegiatan LIKE '01.%') as oph_1_2,
									(select count(nilai_oph_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_oph_komp = 1 AND b.jenjang like 'Pengawas' OR 'JF Pertama' AND c.kd_kegiatan LIKE '01.%') as oph_2,
									(select count(nilai_pp_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pp_komp = 0 AND b.jenjang like 'Pengawas' OR 'JF Pertama' AND c.kd_kegiatan LIKE '01.%') as pp_1_2,
									(select count(nilai_pp_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pp_komp = 1 AND b.jenjang like 'Pengawas' OR 'JF Pertama' AND c.kd_kegiatan LIKE '01.%') as pp_2,
									(select count(nilai_pdo_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pdo_komp = 0 AND b.jenjang like 'Pengawas' OR 'JF Pertama' AND c.kd_kegiatan LIKE '01.%') as pdo_1_2,
									(select count(nilai_pdo_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pdo_komp = 1 AND b.jenjang like 'Pengawas' OR 'JF Pertama' AND c.kd_kegiatan LIKE '01.%') as pdo_2,
									(select count(nilai_mp_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_mp_komp = 0 AND b.jenjang like 'Pengawas' OR 'JF Pertama' AND c.kd_kegiatan LIKE '01.%') as mp_1_2,
									(select count(nilai_mp_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_mp_komp = 1 AND b.jenjang like 'Pengawas' OR 'JF Pertama' AND c.kd_kegiatan LIKE '01.%') as mp_2,
									(select count(nilai_pk_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pk_komp = 0 AND b.jenjang like 'Pengawas' OR 'JF Pertama' AND c.kd_kegiatan LIKE '01.%') as pk_1_2,
									(select count(nilai_pk_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pk_komp = 1 AND b.jenjang like 'Pengawas' OR 'JF Pertama' AND c.kd_kegiatan LIKE '01.%') as pk_2,
									(select count(nilai_pb_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pb_komp = 0 AND b.jenjang like 'Pengawas' OR 'JF Pertama' AND c.kd_kegiatan LIKE '01.%') as pb_1_2,
									(select count(nilai_pb_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pb_komp = 1 AND b.jenjang like 'Pengawas' OR 'JF Pertama' AND c.kd_kegiatan LIKE '01.%') as pb_2;
										");
		return $kompetensi;	
	}

	function hitung_komp_pelaksana(){
		$kompetensi	=	$this->db->query("
									select
									(select count(nilai_int_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_int_komp = 0 AND b.jenjang like 'Pelaksana' OR 'JF Terampil' AND c.kd_kegiatan LIKE '01.%') as int_1,
									(select count(nilai_ks_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_ks_komp = 0 AND b.jenjang like 'Pelaksana' OR 'JF Terampil' AND c.kd_kegiatan LIKE '01.%') as ks_1,
									(select count(nilai_kom_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_kom_komp = 0 AND b.jenjang like 'Pelaksana' OR 'JF Terampil' AND c.kd_kegiatan LIKE '01.%') as kom_1,
									(select count(nilai_oph_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_oph_komp = 0 AND b.jenjang like 'Pelaksana' OR 'JF Terampil' AND c.kd_kegiatan LIKE '01.%') as oph_1,
									(select count(nilai_pp_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pp_komp = 0 AND b.jenjang like 'Pelaksana' OR 'JF Terampil' AND c.kd_kegiatan LIKE '01.%') as pp_1,
									(select count(nilai_pdo_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pdo_komp = 0 AND b.jenjang like 'Pelaksana' OR 'JF Terampil' AND c.kd_kegiatan LIKE '01.%') as pdo_1,
									(select count(nilai_mp_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_mp_komp = 0 AND b.jenjang like 'Pelaksana' OR 'JF Terampil' AND c.kd_kegiatan LIKE '01.%') as mp_1,
									(select count(nilai_pk_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pk_komp = 0 AND b.jenjang like 'Pelaksana' OR 'JF Terampil' AND c.kd_kegiatan LIKE '01.%') as pk_1,
									(select count(nilai_pb_komp) from komp_nilai As a INNER JOIN data_peserta AS b ON b.nip = a.nip INNER JOIN kegiatan AS c ON b.kd_kegiatan = c.kd_kegiatan where nilai_pb_komp = 0 AND b.jenjang like 'Pelaksana' OR 'JF Terampil' AND c.kd_kegiatan LIKE '01.%') as pb_1
										");
		return $kompetensi;	
	}

	function get_chart(){
      $this->db->select('tahun,psrt_ktng ,psrt_ext');
      $result = $this->db->get('chart');
      return $result;
	}

	function get_chart_pemetaan(){
      $hasil = $this->db->select('tahun,psrt_ktng ,psrt_ext');
      //$result = $this->db->get('chart');
      return $hasil;
	}
	
	function get_chart_seleksi(){
      $this->db->select('tahun,psrt_ktng ,psrt_ext');
      $result = $this->db->get('chart');
      return $result;
	}
	
	function get_tahun(){
		$hasil = $this->db->query(" SELECT tahun FROM kegiatan GROUP BY tahun ORDER BY tahun DESC ");
		return $hasil;
	}

	function get_kegiatan(){
		$hasil = $this->db->query(" SELECT instansi FROM kegiatan WHERE kegiatan.kd_kegiatan LIKE '02.%%' GROUP BY instansi ORDER BY instansi DESC ");
		return $hasil;
	}

	function get_jenjang(){
		$hasil = $this->db->query(" 
									SELECT a.tahun, COUNT(IF(a.jenjang like 'JPT Madya', 1, NULL)) 'madya', COUNT(IF(a.jenjang like 'JPT Pratama', 1, NULL)) 'pratama', COUNT(IF(a.jenjang like 'Administrator', 1, NULL)) 'administrator',
									COUNT(IF(a.jenjang like 'Pengawas', 1, NULL)) 'pengawas', COUNT(IF(a.jenjang like 'JF Madya', 1, NULL)) 'jf_Madya', COUNT(IF(a.jenjang like 'JF Muda', 1, NULL)) 'jf_Muda',
									COUNT(IF(a.jenjang like 'JF Pertama', 1, NULL)) 'jf_Pertama', COUNT(IF(a.jenjang like 'JF Terampil', 1, NULL)) 'jf_Terampil', COUNT(IF(a.jenjang like 'Pelaksana', 1, NULL)) 'pelaksana',
									(SELECT sum(COUNT(IF(a.jenjang like 'JPT Madya', 1, NULL))+COUNT(IF(a.jenjang like 'JPT Pratama', 1, NULL))+COUNT(IF(a.jenjang like 'Administrator', 1, NULL))+
									COUNT(IF(a.jenjang like 'Pengawas', 1, NULL))+COUNT(IF(a.jenjang like 'JF Madya', 1, NULL))+COUNT(IF(a.jenjang like 'JF Muda', 1, NULL))+COUNT(IF(a.jenjang like 'JF Pertama', 1, NULL))+COUNT(IF(a.jenjang like 'JF Terampil', 1, NULL))+
									COUNT(IF(a.jenjang like 'Pelaksana', 1, NULL))) ) as jml FROM data_peserta AS a GROUP BY a.tahun								
								");
		return $hasil;
	}

	function kuisi_satu_lima(){
		$hasil	=	$this->db->query("
									SELECT 
									distinct(substr(a.tgl_assessment,1,4)) as tgl, 
									COUNT(IF(a.kuisi_1 LIKE 'Tidak Jelas', 1, NULL)) as tj_1,
									COUNT(IF(a.kuisi_1 LIKE 'Kurang Jelas', 1, NULL)) as kj_1,
									COUNT(IF(a.kuisi_1 LIKE 'Jelas', 1, NULL)) as j_1,
									COUNT(IF(a.kuisi_1 LIKE 'Sangat Jelas', 1, NULL)) as sj_1,
									(SELECT sum(COUNT(IF(a.kuisi_1 LIKE 'Tidak Jelas', 1, NULL))+COUNT(IF(a.kuisi_1 LIKE 'Kurang Jelas', 1, NULL))+COUNT(IF(a.kuisi_1 LIKE 'Jelas', 1, NULL))+COUNT(IF(a.kuisi_1 LIKE 'Sangat Jelas', 1, NULL)))) as jml_kuisi_1,
									COUNT(IF(a.kuisi_2 LIKE 'Sangat Sulit', 1, NULL)) as ss_1,
									COUNT(IF(a.kuisi_2 LIKE 'Sulit', 1, NULL)) as s_1,
									COUNT(IF(a.kuisi_2 LIKE 'Mudah', 1, NULL)) as m_1,
									COUNT(IF(a.kuisi_2 LIKE 'Sangat Mudah', 1, NULL)) as sm_1,
									(SELECT sum(COUNT(IF(a.kuisi_2 LIKE 'Sangat Sulit', 1, NULL))+COUNT(IF(a.kuisi_2 LIKE 'Sulit', 1, NULL))+COUNT(IF(a.kuisi_2 LIKE 'Mudah', 1, NULL))+COUNT(IF(a.kuisi_2 LIKE 'Sangat Mudah', 1, NULL)))) as jml_kuisi_2,
									COUNT(IF(a.kuisi_3 LIKE 'Sangat Sulit', 1, NULL)) as ss_2,
									COUNT(IF(a.kuisi_3 LIKE 'Sulit', 1, NULL)) as s_2,
									COUNT(IF(a.kuisi_3 LIKE 'Mudah', 1, NULL)) as m_2,
									COUNT(IF(a.kuisi_3 LIKE 'Sangat Mudah', 1, NULL)) as sm_2,
									(SELECT sum(COUNT(IF(a.kuisi_3 LIKE 'Sangat Sulit', 1, NULL))+COUNT(IF(a.kuisi_3 LIKE 'Sulit', 1, NULL))+COUNT(IF(a.kuisi_3 LIKE 'Mudah', 1, NULL))+COUNT(IF(a.kuisi_3 LIKE 'Sangat Mudah', 1, NULL)))) as jml_kuisi_3,
									COUNT(IF(a.kuisi_4 LIKE 'Tidak Efektif', 1, NULL)) as te_1,
									COUNT(IF(a.kuisi_4 LIKE 'Kurang Efektif', 1, NULL)) as ke_1,
									COUNT(IF(a.kuisi_4 LIKE 'Efektif', 1, NULL)) as e_1,
									COUNT(IF(a.kuisi_4 LIKE 'Sangat Efektif', 1, NULL)) as se_1,
									(SELECT sum(COUNT(IF(a.kuisi_4 LIKE 'Tidak Efektif', 1, NULL))+COUNT(IF(a.kuisi_4 LIKE 'Kurang Efektif', 1, NULL))+COUNT(IF(a.kuisi_4 LIKE 'Efektif', 1, NULL))+COUNT(IF(a.kuisi_4 LIKE 'Sangat Efektif', 1, NULL)))) as jml_kuisi_4,
									COUNT(IF(a.kuisi_5 LIKE 'Tidak Cukup', 1, NULL)) as tc_1,
									COUNT(IF(a.kuisi_5 LIKE 'Kurang Cukup', 1, NULL)) as kc_1,
									COUNT(IF(a.kuisi_5 LIKE 'Cukup', 1, NULL)) as c_1,
									COUNT(IF(a.kuisi_5 LIKE 'Sangat Cukup', 1, NULL)) as sc_1,
									(SELECT sum(COUNT(IF(a.kuisi_5 LIKE 'Tidak Cukup', 1, NULL))+COUNT(IF(a.kuisi_5 LIKE 'Kurang Cukup', 1, NULL))+COUNT(IF(a.kuisi_5 LIKE 'Cukup', 1, NULL))+COUNT(IF(a.kuisi_5 LIKE 'Sangat Cukup', 1, NULL)))) as jml_kuisi_5
									FROM hasil_kuisi AS a GROUP BY tgl		
									");
		return $hasil;							
	}
	
	function chart_responden(){
		$responden	=	$this->db->query("
										select
										(select count(jabatan) from hasil_kuisi As a WHERE jabatan LIKE 'Jabatan Pimpinan Tinggi Pratama') as jptp,
										(select count(jabatan) from hasil_kuisi As a WHERE jabatan LIKE 'Administrator') as administrator,
										(select count(jabatan) from hasil_kuisi As a WHERE jabatan LIKE 'Pengawas') as pengawas,
										(select count(jabatan) from hasil_kuisi As a WHERE jabatan LIKE 'Fungsional') as fungsional,
										(select count(jabatan) from hasil_kuisi As a WHERE jabatan LIKE 'Pelaksana') as pelaksana
									");
		return $responden;	
	}
	
	function chart_satu(){
		$rekom	=	$this->db->query("
										select
										distinct(substr(tgl_assessment,1,4)) as tgl,
										(select count(kuisi_1) FROM hasil_kuisi WHERE kuisi_1 LIKE 'Tidak Jelas') as tj_1,
										(select count(kuisi_1) FROM hasil_kuisi WHERE kuisi_1 LIKE 'Kurang Jelas') as kj_1,
										(select count(kuisi_1) FROM hasil_kuisi WHERE kuisi_1 LIKE 'Jelas') as j_1,
										(select count(kuisi_1) FROM hasil_kuisi WHERE kuisi_1 LIKE 'Sangat Jelas') as sj_1
										FROM hasil_kuisi GROUP BY tgl
										");
		return $rekom;	
	}
	
	function chart_dua(){
		$rekom	=	$this->db->query("
										select
										distinct(substr(tgl_assessment,1,4)) as tgl,
										(select count(kuisi_2) FROM hasil_kuisi WHERE kuisi_2 LIKE 'Sangat Sulit') as ss_1,
										(select count(kuisi_2) FROM hasil_kuisi WHERE kuisi_2 LIKE 'Sulit') as s_1,
										(select count(kuisi_2) FROM hasil_kuisi WHERE kuisi_2 LIKE 'Mudah') as m_1,
										(select count(kuisi_2) FROM hasil_kuisi WHERE kuisi_2 LIKE 'Sangat Mudah') as sm_1
										FROM hasil_kuisi GROUP BY tgl
										");
		return $rekom;	
	}
	
	function chart_tiga(){
		$rekom	=	$this->db->query("
										select
										distinct(substr(tgl_assessment,1,4)) as tgl,
										(select count(kuisi_3) FROM hasil_kuisi WHERE kuisi_3 LIKE 'Sangat Sulit') as ss_2,
										(select count(kuisi_3) FROM hasil_kuisi WHERE kuisi_3 LIKE 'Sulit') as s_2,
										(select count(kuisi_3) FROM hasil_kuisi WHERE kuisi_3 LIKE 'Mudah') as m_2,
										(select count(kuisi_3) FROM hasil_kuisi WHERE kuisi_3 LIKE 'Sangat Mudah') as sm_2
										FROM hasil_kuisi GROUP BY tgl
										");
		return $rekom;	
	}
	
	
	
/*==========================================================
SJT
==========================================================*/	
	
    function total_hari_ini(){
		$hari_ini	=	$this->db2->query("SELECT COUNT(ID) AS total_hari_ini FROM respondent WHERE created_at >= (NOW() - INTERVAL 1 DAY)");
		return $hari_ini;			
    }

    function total_minggu_ini(){
		$minggu_ini	=	$this->db2->query("SELECT COUNT(ID) AS total_minggu_ini FROM respondent WHERE created_at >= (NOW() - INTERVAL 7 DAY)");
		return $minggu_ini;			
    }

    function total_bulan_ini(){
		$bulan_ini	=	$this->db2->query("SELECT COUNT(ID) AS total_bulan_ini FROM respondent WHERE created_at >= (NOW() - INTERVAL 1 MONTH)");
		return $bulan_ini;			
    }

    function total_semua(){
		$bulan_ini	=	$this->db2->query("SELECT COUNT(ID) AS total_semua FROM respondent");
		return $bulan_ini;			
    }

    function jabatan(){
        return $this->db2->query("SELECT
            ( SELECT COUNT( id ) FROM respondent WHERE jenjang_jabatan = 'Pelaksana' ) AS total_pelaksana,
            ( SELECT COUNT( id ) FROM respondent WHERE jenjang_jabatan = 'Pengawas' ) AS total_pengawas,
            ( SELECT COUNT( id ) FROM respondent WHERE jenjang_jabatan = 'Administrator' ) AS total_administrator,
            ( SELECT COUNT( id ) FROM respondent WHERE jenjang_jabatan = 'Terampil' ) AS total_terampil,
            ( SELECT COUNT( id ) FROM respondent WHERE jenjang_jabatan = 'Ahli Pertama' ) AS total_ahli_pertama,
            ( SELECT COUNT( id ) FROM respondent WHERE jenjang_jabatan = 'Mahir' ) AS total_mahir,
            ( SELECT COUNT( id ) FROM respondent WHERE jenjang_jabatan = 'Ahli Muda' ) AS total_ahli_muda,
            ( SELECT COUNT( id ) FROM respondent WHERE jenjang_jabatan = 'Penyelia' ) AS total_penyelia 
        FROM
        DUAL")->row_array();
    }

    function kompetensi(){
        return $this->db2->query("SELECT
            ( SELECT COUNT( id ) FROM sjt_result WHERE integritas_info = 'Area Pengembangan' ) AS total_integritas,
            ( SELECT COUNT( id ) FROM sjt_result WHERE kerjasama_info = 'Area Pengembangan' ) AS total_kerjasama,
            ( SELECT COUNT( id ) FROM sjt_result WHERE komunikasi_info = 'Area Pengembangan' ) AS total_komunikasi,
            ( SELECT COUNT( id ) FROM sjt_result WHERE orientasi_info = 'Area Pengembangan' ) AS total_orientasi,
            ( SELECT COUNT( id ) FROM sjt_result WHERE pelayanan_info = 'Area Pengembangan' ) AS total_pelayanan,
            ( SELECT COUNT( id ) FROM sjt_result WHERE pengembangan_info = 'Area Pengembangan' ) AS total_pengembangan,
            ( SELECT COUNT( id ) FROM sjt_result WHERE mengelola_info = 'Area Pengembangan' ) AS total_mengelola,
            ( SELECT COUNT( id ) FROM sjt_result WHERE keputusan_info = 'Area Pengembangan' ) AS total_keputusan,
            ( SELECT COUNT( id ) FROM sjt_result WHERE perekat_info = 'Area Pengembangan' ) AS total_perekat
        FROM
        DUAL")->row_array();
    }

    
    function jml_pusat(){
		$pusat	=	$this->db2->query("
										SELECT a.id, a.unit_kerja_pusat, COUNT(b.id) as jml FROM tb_unit_kerja_pusat AS a
										LEFT JOIN respondent AS b ON a.unit_kerja_pusat = b.unit_kerja GROUP BY a.id, a.unit_kerja_pusat
										");
		return $pusat;			
    }

    function jml_perwakilan(){
		$perwakilan	=	$this->db2->query("
										SELECT a.id, a.unit_kerja_perwakilan, COUNT(b.id) as jml FROM tb_unit_kerja_perwakilan AS a
										LEFT JOIN respondent AS b  ON a.unit_kerja_perwakilan = b.unit_kerja GROUP BY a.id, a.unit_kerja_perwakilan
										");
		return $perwakilan;			
    }
	
	function get_peta(){
		$hasil	=	$this->db2->query("
										SELECT a.id, a.unit_kerja_perwakilan, COUNT(b.id) AS jml, c.propinsi, c.js_code
										FROM tb_unit_kerja_perwakilan AS a LEFT JOIN respondent AS b ON a.unit_kerja_perwakilan = b.unit_kerja
										LEFT JOIN reff_prop AS c ON c.id_perwakilan = a.id GROUP BY a.id, a.unit_kerja_perwakilan		
									");
		$result = $hasil->result_array();							
		return $result;
	}
	
	function cetak_lap_hasil($id_kegiatan){
		$hasil	=	$this->db->query("
									SELECT DISTINCT
									a.*, b.*, c.*, d.*, e.*, f.*,
									(IF(d.aspek_pot1 <=1, 'X', '')) as1pot_ks,
									(IF(d.aspek_pot1 >1 AND d.aspek_pot1 <=2, 'X', '')) AS as1pot_k,
									(IF(d.aspek_pot1 >2 AND d.aspek_pot1 <=3, 'X', '')) AS as1pot_c,
									(IF(d.aspek_pot1 >3 AND d.aspek_pot1 <=4, 'X', '')) AS as1pot_b,
									(IF(d.aspek_pot1 >=5, 'X', '')) AS as1pot_bs,

									(IF(d.aspek_pot2 <=1, 'X', '')) as2pot_ks,
									(IF(d.aspek_pot2 >1 AND d.aspek_pot2 <=2, 'X', '')) AS as2pot_k,
									(IF(d.aspek_pot2 >2 AND d.aspek_pot2 <=3, 'X', '')) AS as2pot_c,
									(IF(d.aspek_pot2 >3 AND d.aspek_pot2 <=4, 'X', '')) AS as2pot_b,
									(IF(d.aspek_pot2 >=5, 'X', '')) AS as2pot_bs,

									(IF(d.aspek_pot3 <=1, 'X', '')) as3pot_ks,
									(IF(d.aspek_pot3 >1 AND d.aspek_pot3 <=2, 'X', '')) AS as3pot_k,
									(IF(d.aspek_pot3 >2 AND d.aspek_pot3 <=3, 'X', '')) AS as3pot_c,
									(IF(d.aspek_pot3 >3 AND d.aspek_pot3 <=4, 'X', '')) AS as3pot_b,
									(IF(d.aspek_pot3 >=5, 'X', '')) AS as3pot_bs,

									(IF(d.aspek_pot4 <=1, 'X', '')) as4pot_ks,
									(IF(d.aspek_pot4 >1 AND d.aspek_pot4 <=2, 'X', '')) AS as4pot_k,
									(IF(d.aspek_pot4 >2 AND d.aspek_pot4 <=3, 'X', '')) AS as4pot_c,
									(IF(d.aspek_pot4 >3 AND d.aspek_pot4 <=4, 'X', '')) AS as4pot_b,
									(IF(d.aspek_pot4 >=5, 'X', '')) AS as4pot_bs,

									(IF(d.aspek_pot5 <=1, 'X', '')) as5pot_ks,
									(IF(d.aspek_pot5 >1 AND d.aspek_pot5 <=2, 'X', '')) AS as5pot_k,
									(IF(d.aspek_pot5 >2 AND d.aspek_pot5 <=3, 'X', '')) AS as5pot_c,
									(IF(d.aspek_pot5 >3 AND d.aspek_pot5 <=4, 'X', '')) AS as5pot_b,
									(IF(d.aspek_pot5 >=5, 'X', '')) AS as5pot_bs,

									(IF(d.aspek_pot6 <=1, 'X', '')) as6pot_ks,
									(IF(d.aspek_pot6 >1 AND d.aspek_pot6 <=2, 'X', '')) AS as6pot_k,
									(IF(d.aspek_pot6 >2 AND d.aspek_pot6 <=3, 'X', '')) AS as6pot_c,
									(IF(d.aspek_pot6 >3 AND d.aspek_pot6 <=4, 'X', '')) AS as6pot_b,
									(IF(d.aspek_pot6 >=5, 'X', '')) AS as6pot_bs,

									(IF(d.aspek_pot7 <=1, 'X', '')) as7pot_ks,
									(IF(d.aspek_pot7 >1 AND d.aspek_pot7 <=2, 'X', '')) AS as7pot_k,
									(IF(d.aspek_pot7 >2 AND d.aspek_pot7 <=3, 'X', '')) AS as7pot_c,
									(IF(d.aspek_pot7 >3 AND d.aspek_pot7 <=4, 'X', '')) AS as7pot_b,
									(IF(d.aspek_pot7 >=5, 'X', '')) AS as7pot_bs,

									(IF(d.aspek_pot8 <=1, 'X', '')) as8pot_ks,
									(IF(d.aspek_pot8 >1 AND d.aspek_pot8 <=2, 'X', '')) AS as8pot_k,
									(IF(d.aspek_pot8 >2 AND d.aspek_pot8 <=3, 'X', '')) AS as8pot_c,
									(IF(d.aspek_pot8 >3 AND d.aspek_pot8 <=4, 'X', '')) AS as8pot_b,
									(IF(d.aspek_pot8 >=5, 'X', '')) AS as8pot_bs,

									(IF(e.aspek_komp1 <=1, 'X', '')) AS as1kom1_x,
									(IF(e.aspek_komp1 >1 AND e.aspek_komp1 <=2, 'X', '')) AS as1kom2_x,
									(IF(e.aspek_komp1 >2 AND e.aspek_komp1 <=3, 'X', '')) AS as1kom3_x,
									(IF(e.aspek_komp1 >3 AND e.aspek_komp1 <=4, 'X', '')) AS as1kom4_x,
									(IF(e.aspek_komp1 >=5, 'X', '')) AS as1kom5_x,

									(IF(e.aspek_komp2 <=1, 'X', '')) AS as2kom1_x,
									(IF(e.aspek_komp2 >1 AND e.aspek_komp2 <=2, 'X', '')) AS as2kom2_x,
									(IF(e.aspek_komp2 >2 AND e.aspek_komp2 <=3, 'X', '')) AS as2kom3_x,
									(IF(e.aspek_komp2 >3 AND e.aspek_komp2 <=4, 'X', '')) AS as2kom4_x,
									(IF(e.aspek_komp2 >=5, 'X', '')) AS as2kom5_x,

									(IF(e.aspek_komp3 <=1, 'X', '')) AS as3kom1_x,
									(IF(e.aspek_komp3 >1 AND e.aspek_komp3 <=2, 'X', '')) AS as3kom2_x,
									(IF(e.aspek_komp3 >2 AND e.aspek_komp3 <=3, 'X', '')) AS as3kom3_x,
									(IF(e.aspek_komp3 >3 AND e.aspek_komp3 <=4, 'X', '')) AS as3kom4_x,
									(IF(e.aspek_komp3 >=5, 'X', '')) AS as3kom5_x,

									(IF(e.aspek_komp4 <=1, 'X', '')) AS as4kom1_x,
									(IF(e.aspek_komp4 >1 AND e.aspek_komp4 <=2, 'X', '')) AS as4kom2_x,
									(IF(e.aspek_komp4 >2 AND e.aspek_komp4 <=3, 'X', '')) AS as4kom3_x,
									(IF(e.aspek_komp4 >3 AND e.aspek_komp4 <=4, 'X', '')) AS as4kom4_x,
									(IF(e.aspek_komp4 >=5, 'X', '')) AS as4kom5_x,

									(IF(e.aspek_komp5 <=1, 'X', '')) AS as5kom1_x,
									(IF(e.aspek_komp5 >1 AND e.aspek_komp5 <=2, 'X', '')) AS as5kom2_x,
									(IF(e.aspek_komp5 >2 AND e.aspek_komp5 <=3, 'X', '')) AS as5kom3_x,
									(IF(e.aspek_komp5 >3 AND e.aspek_komp5 <=4, 'X', '')) AS as5kom4_x,
									(IF(e.aspek_komp5 >=5, 'X', '')) AS as5kom5_x,

									(IF(e.aspek_komp6 <=1, 'X', '')) AS as6kom1_x,
									(IF(e.aspek_komp6 >1 AND e.aspek_komp6 <=2, 'X', '')) AS as6kom2_x,
									(IF(e.aspek_komp6 >2 AND e.aspek_komp6 <=3, 'X', '')) AS as6kom3_x,
									(IF(e.aspek_komp6 >3 AND e.aspek_komp6 <=4, 'X', '')) AS as6kom4_x,
									(IF(e.aspek_komp6 >=5, 'X', '')) AS as6kom5_x,

									(IF(e.aspek_komp7 <=1, 'X', '')) AS as7kom1_x,
									(IF(e.aspek_komp7 >1 AND e.aspek_komp7 <=2, 'X', '')) AS as7kom2_x,
									(IF(e.aspek_komp7 >2 AND e.aspek_komp7 <=3, 'X', '')) AS as7kom3_x,
									(IF(e.aspek_komp7 >3 AND e.aspek_komp7 <=4, 'X', '')) AS as7kom4_x,
									(IF(e.aspek_komp7 >=5, 'X', '')) AS as7kom5_x,

									(IF(e.aspek_komp8 <=1, 'X', '')) AS as8kom1_x,
									(IF(e.aspek_komp8 >1 AND e.aspek_komp8 <=2, 'X', '')) AS as8kom2_x,
									(IF(e.aspek_komp8 >2 AND e.aspek_komp8 <=3, 'X', '')) AS as8kom3_x,
									(IF(e.aspek_komp8 >3 AND e.aspek_komp8 <=4, 'X', '')) AS as8kom4_x,
									(IF(e.aspek_komp8 >=5, 'X', '')) AS as8kom5_x,

									(IF(e.aspek_komp9 <=1, 'X', '')) AS as9kom1_x,
									(IF(e.aspek_komp9 >1 AND e.aspek_komp9 <=2, 'X', '')) AS as9kom2_x,
									(IF(e.aspek_komp9 >2 AND e.aspek_komp9 <=3, 'X', '')) AS as9kom3_x,
									(IF(e.aspek_komp9 >3 AND e.aspek_komp9 <=4, 'X', '')) AS as9kom4_x,
									(IF(e.aspek_komp9 >=5, 'X', '')) AS as9kom5_x,
									
									h.nama_personil,
									h.nip_personil

									FROM
									data_peserta a
									INNER JOIN registrasi b ON a.id_peserta = b.id_peserta
									INNER JOIN kegiatan c ON a.id_kegiatan = c.id_kegiatan
									INNER JOIN hasil_potensi d ON b.id_reg = d.id_reg
									INNER JOIN hasil_kompetensi e ON b.id_reg = e.id_reg
									INNER JOIN hasil_uraian f ON b.id_reg = f.id_reg
									LEFT JOIN jadwal_peserta g ON b.id_reg = g.id_reg
									LEFT JOIN lembaga h ON g.kd_personil_wwcr = h.kd_personil
									WHERE
									c.id_kegiatan = '$id_kegiatan';
									");
		return $hasil->result();	
	}

	
}