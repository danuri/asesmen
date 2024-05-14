<?php
class M_dashboard extends CI_Model{
	function __construct(){
		parent::__construct();
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

	
	
	
}