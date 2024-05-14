<?php
class M_peserta extends CI_Model{
	function __construct(){
		parent::__construct();
		
		$this->db2 = $this->load->database('db_sjt', TRUE);
		$this->db3 = $this->load->database('db_simsdm', TRUE);
	}


/*	
	function data_peserta(){
		$hasil	=	$this->db->query("
									SELECT b.id_reg, a.id_peserta, a.nip, a.nama, b.gol, a.jabatan, a.unker, a.jenjang, a.tahun, c.nama_kegiatan, c.kd_kegiatan, c.jenis_kegiatan, c.instansi, c.tgl_keg, c.ket
									FROM data_peserta AS a 
									INNER JOIN registrasi AS b ON a.nip = b.nip 
									INNER JOIN kegiatan AS c ON a.id_kegiatan = c.id_kegiatan
									WHERE 
									a.id_peserta IN(SELECT MAX(id_peserta) FROM data_peserta GROUP BY nip)
									GROUP BY a.nip
									ORDER BY a.id_peserta DESC;									
									");
		$result = $hasil->result_array();							
		return $result;	
	}
*/	
	
	
	function data_peserta(){
		$hasil	=	$this->db->query("
									SELECT b.id_reg, a.id_peserta, a.nip, a.nama, b.gol, a.jabatan, a.unker, a.jenjang, a.tahun, c.nama_kegiatan, c.kd_kegiatan, c.jenis_kegiatan, c.instansi, c.tgl_keg, c.ket,
									d.capaian_pot, d.rekom_pot,
									IF(d.rekom_pot = 'Tinggi',3,IF(d.rekom_pot = 'Menengah',2,IF(d.rekom_pot = 'rendah',1,0))) as star_pot,
									(SELECT IF(YEAR(NOW())- c.tahun = 3, 'Tidak Berlaku', 'Berlaku')) as expired,
									DATE_ADD(c.tgl_keg,INTERVAL 1095 DAY) as nextukom
									FROM data_peserta AS a 
									INNER JOIN registrasi AS b ON a.nip = b.nip 
									INNER JOIN kegiatan AS c ON a.id_kegiatan = c.id_kegiatan
									INNER JOIN hasil_potensi AS d ON b.id_reg = d.id_reg
									INNER JOIN hasil_kompetensi AS e ON b.id_reg = e.id_reg
									INNER JOIN hasil_uraian AS f ON b.id_reg = f.id_reg
									WHERE 
									a.id_peserta IN(SELECT MAX(id_peserta) FROM data_peserta GROUP BY nip) AND
									c.jenis_kegiatan LIKE 'Internal'
									GROUP BY b.id_reg
									ORDER BY b.id_reg DESC	
									");
		$result = $hasil->result_array();							
		return $result;	
	}
	
	
/*=========================*/	
/*SJT*/
/*=========================*/	
	
	function data_peserta_sjt(){
		$hasil	=	$this->db2->query("
										SELECT a.nama, a.nip, a.jabatan, a.unit_kerja, a.jenjang_jabatan, b.integritas_hp,
										b.kerjasama_hp, b.komunikasi_hp, b.orientasi_hp, b.pelayanan_hp, b.pengembangan_hp, b.mengelola_hp,
										b.keputusan_hp, b.perekat_hp, b.memenuhi, b.jpm, b.deskripsi_integritas, b.kesimpulan 
										FROM respondent AS a INNER JOIN sjt_result AS b ON a.id = b.respondent_id
									");
		return $hasil->result();	
	}
	
/*=========================*/	
/*SIMSDM*/
/*=========================*/	
	
/*	
    function data_simsdm(){
		$simsdm	=	$this->db3->query("
										SELECT DISTINCT
										TRIM(REPLACE(CONCAT(a.gelardepan, ' ', a.nama, ' ', a.gelarbelakang), '-', '')) AS nama,
										a.NIP,
										a.statuspegawai,
										b.nama_jabatan,
										b.jabatan,
										b.tmt AS tmt_jabatan,
										CONCAT(d.pangkat,', ', d.golongan) AS pangkat,
										d.tmt AS tmt_pangkat,
										c.Biro
										FROM
										pegawai AS a INNER JOIN
										(SELECT  b.Nip,
															MAX(b.tmt) MaxDate
													FROM    riwayat_jabatan AS b
													GROUP BY b.Nip
										)
										MaxDates ON a.NIP = MaxDates.Nip INNER JOIN
												riwayat_jabatan AS b ON   MaxDates.NIP = b.Nip
															AND MaxDates.MaxDate = b.tmt

										INNER JOIN table_biro AS c ON a.biro = c.Id_Biro

										INNER JOIN
										(SELECT  d.nip,
											MAX(d.tmt) MaxDate
											FROM riwayat_golongan_pangkat AS d
											GROUP BY d.nip
										 )
										MaxDatez ON a.NIP = MaxDatez.nip INNER JOIN
										riwayat_golongan_pangkat AS d ON  MaxDatez.NIP = d.nip
										AND MaxDatez.MaxDate = d.tmt

										WHERE a.statuspegawai LIKE '%Aktif%' OR a.statuspegawai LIKE '%PKB%' OR a.statuspegawai LIKE '%Menunggu SK Pensiun%'
										GROUP BY a.NIP
										ORDER BY a.statuspegawai ASC										
									");
		return $simsdm;			
    }
*/	
	
	
	function get_identitas($nip){
		$hasil	=	$this->db->query("
										SELECT a.nip, a.nama
										FROM data_peserta AS a
										WHERE
										a.id_peserta IN(SELECT MAX(x.id_peserta) FROM data_peserta AS x GROUP BY x.nip) AND
										a.nip = '$nip'
										GROUP BY a.nip;
									");
		return $hasil;	
	}
	
	function get_r_jab($nip){
		$hasil	=	$this->db->query("
									SELECT a.nip, a.nama, a.jenjang,
									b.id_reg, b.id_peserta,	b.nama,	b.nip, b.gol, b.jabatan, b.unker, b.jenped_awal, b.jur_awal, b.univ_awal, b.thn_awal, b.jenpend_akhir, b.jur_akhir,	b.univ_akhir, b.thn_akhir, b.jab_1,	b.unker_1, b.thn_unker_1, b.jab_2, b.unker_2, b.thn_unker_2, b.unker_puas, b.alasan_puas, b.unker_no_puas,	b.alasan_no_puas, b.kebijakan, b.kekuatan_1, b.mengapa_kekuatan_1, b.kekuatan_2, b.mengapa_kekuatan_2, b.ket, b.last_update
									FROM data_peserta AS a
									INNER JOIN registrasi AS b ON a.id_peserta = b.id_peserta
									WHERE
									a.nip = '$nip'
									ORDER BY a.id_peserta DESC;
									");
		return $hasil;	
	}
	
    function data_simsdm(){
		$hasil	=	$this->db->query("
									SELECT 
									a.*,
									c.jenjang,
									case when a.nip IN (b.nip) then 'sudah' else 'belum' end AS ukom
									FROM data_simsdm a
									LEFT JOIN registrasi b ON a.nip = b.nip
									LEFT JOIN data_peserta c ON b.id_peserta = c.id_peserta
									ORDER BY ukom DESC
									");
		return $hasil;			
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
	
	function get_profile_sjt($nip){
		$hasil	=	$this->db2->query("
										SELECT a.nama, a.nip FROM respondent AS a INNER JOIN sjt_result AS b ON a.id = b.respondent_id
										WHERE a.nip = '$nip' GROUP BY a.nip 
									");
		return $hasil;	
	}
	
	function get_jabatan_sjt($nip){
		$hasil	=	$this->db2->query("
										SELECT a.nama, a.nip, a.jabatan, a.unit_kerja, a.jenjang_jabatan, b.integritas_hp,
										b.kerjasama_hp, b.komunikasi_hp, b.orientasi_hp, b.pelayanan_hp, b.pengembangan_hp, b.mengelola_hp,
										b.keputusan_hp, b.perekat_hp, b.memenuhi, b.jpm, b.deskripsi_integritas, b.kesimpulan
										FROM respondent AS a INNER JOIN sjt_result AS b ON a.id = b.respondent_id
										WHERE a.nip = '$nip'
									");
		return $hasil;	
	}
	
	function get_assessment_sjt($nip){
		$hasil	=	$this->db2->query("
										SELECT b.id, a.nama, a.nip, a.jabatan,
										b.integritas_hp, b.kerjasama_hp, b.komunikasi_hp, b.orientasi_hp,
										b.pelayanan_hp, b.pengembangan_hp, b.mengelola_hp, b.keputusan_hp, b.perekat_hp, 
										b.deskripsi_integritas, b.deskripsi_kerjasama, b.deskripsi_komunikasi, b.deskripsi_orientasi,
										b.deskripsi_pelayanan, b.deskripsi_pengembangan, b.deskripsi_mengelola,
										b.deskripsi_keputusan, b.deskripsi_perekat, 
										b.memenuhi, b.jpm, b.kesimpulan,
										LEFT(b.created_at,4) AS thn
										FROM respondent AS a INNER JOIN sjt_result AS b ON a.id = b.respondent_id
										WHERE a.nip = '$nip'
									");
		return $hasil;	
	}
	
	function get_assessment($nip){
		$hasil	=	$this->db->query("
									SELECT DISTINCT
									b.id_reg, b.nip, a.id_peserta, c.id_kegiatan, d.id_jadwal, a.tahun, c.nama_kegiatan, c.jenis_kegiatan, c.kd_kegiatan, c.instansi, c.tgl_keg, d.tgl_psikometri, d.tgl_wwcr, e.nama_personil, c.ket,
									(SELECT IF(YEAR(NOW())- a.tahun = 3, 'TIDAK BERLAKU', 'BERLAKU')) as expired,
									IF(f.id_reg IS NOT NULL, 'ada', 'Tidak ada') AS ci_satu,
									IF(g.id_reg IS NOT NULL, 'ada', 'Tidak ada') AS ci_dua,
									IF(h.id_reg IS NOT NULL, 'ada', 'Tidak ada') AS qkom_satu,
									IF(i.id_reg IS NOT NULL, 'ada', 'Tidak ada') AS qkom_dua,
									IF(j.id_reg IS NOT NULL, 'ada', 'Tidak ada') AS ankas,
									IF(k.id_reg IS NOT NULL, 'ada', 'Tidak ada') AS papi,
									IF(l.id_reg IS NOT NULL, 'ada', 'Tidak ada') AS cfit,
									IF(m.id_reg IS NOT NULL, 'ada', 'Tidak ada') AS apm
									FROM data_peserta a 
									INNER JOIN registrasi b ON a.id_peserta = b.id_peserta 
									INNER JOIN kegiatan c ON a.id_kegiatan = c.id_kegiatan
									LEFT JOIN jadwal_peserta d ON b.id_reg = d.id_reg
									LEFT JOIN lembaga e ON d.kd_personil_wwcr = e.kd_personil
									LEFT JOIN hasil_ci_satu f ON b.id_reg = f.id_reg
									LEFT JOIN hasil_ci_dua g ON b.id_reg = g.id_reg
									LEFT JOIN hasil_qkom_satu h ON b.id_reg = h.id_reg
									LEFT JOIN hasil_qkom_dua i ON b.id_reg = i.id_reg
									LEFT JOIN hasil_ankas j ON b.id_reg = j.id_reg
									LEFT JOIN hasil_papi k ON b.id_reg = k.id_reg
									LEFT JOIN hasil_cfit l ON b.id_reg = l.id_reg
									LEFT JOIN hasil_apm_dua m ON b.id_reg = m.id_reg
									WHERE 
									c.jenis_kegiatan LIKE 'Internal' AND
									b.nip = '$nip'
									GROUP BY c.kd_kegiatan
									ORDER BY b.id_reg DESC;
									");
		$result = $hasil->result_array();							
		return $result;
	}

	
	function get_ci($id_reg){
		$hasil	=	$this->db->query("
									SELECT DISTINCT a.nama, b.nip, c.*, d.*
									FROM 
									data_peserta a
									INNER JOIN registrasi b ON a.id_peserta = b.id_peserta
									INNER JOIN hasil_ci_satu c ON b.id_reg = c.id_reg
									INNER JOIN hasil_ci_dua d ON b.id_reg = d.id_reg
									WHERE 
									b.id_reg = 'id_reg'
									ORDER BY b.id_reg DESC;
									");
		return $hasil;	
	}
	
	function get_penilaian($nip){
		$hasil	=	$this->db->query("
									SELECT DISTINCT
									a.nip, a.nama, a.nama_jabatan, a.biro, a.jenjang, g.nama_kegiatan, g.tgl_keg, g.tahun, d.*,
									e.*, f.*, IF(d.rekom_pot = 'Tinggi',3,IF(d.rekom_pot = 'Menengah',2,IF(d.rekom_pot = 'rendah',1,0))) as star_pot, (SELECT IF(YEAR(NOW())- g.tahun = 3, 'Tidak Berlaku', 'Berlaku')) as expired,
									DATE_ADD(g.tgl_keg,INTERVAL 1095 DAY) as nextukom
									FROM
									v_simsdm AS a
									INNER JOIN data_peserta AS b ON a.nip = b.nip
									INNER JOIN registrasi AS c ON b.id_peserta = c.id_peserta
									INNER JOIN hasil_potensi AS d ON c.id_reg = d.id_reg
									INNER JOIN hasil_kompetensi AS e ON c.id_reg = e.id_reg
									INNER JOIN hasil_uraian AS f ON c.id_reg = f.id_reg
									INNER JOIN kegiatan AS g ON b.id_kegiatan = g.id_kegiatan
									WHERE c.nip = '$nip'
									GROUP BY c.id_reg
									ORDER BY c.id_reg DESC
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
									IF(a.ket LIKE 'N', 'BERLAKU', 'TIDAK BERLAKU') AS status_ass FROM data_peserta AS a INNER JOIN registrasi AS b ON a.nip = b.nip INNER JOIN kegiatan AS c ON a.id_kegiatan = c.id_kegiatan
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
	
	function update_kom_lgd_kerjasama($nip,$nilai_lgd_kjs,$bobot_lgd_kjs,$ev_lgd_kjs,$nilai_lgd_kom,$bobot_lgd_kom,$ev_lgd_kom,$nilai_lgd_oph,$bobot_lgd_oph,$ev_lgd_oph,$nilai_lgd_mp,$bobot_lgd_mp,$ev_lgd_mp,$nilai_lgd_pk,$bobot_lgd_pk,$ev_lgd_pk){
		$hasil=$this->db->query("UPDATE komp_lgd SET nilai_lgd_kjs = '$nilai_lgd_kjs', bobot_lgd_kjs = '$bobot_lgd_kjs', ev_lgd_kjs = '$ev_lgd_kjs', nilai_lgd_kom = '$nilai_lgd_kom', bobot_lgd_kom = '$bobot_lgd_kom', ev_lgd_kom = '$ev_lgd_kom', nilai_lgd_oph = '$nilai_lgd_oph', bobot_lgd_oph = '$bobot_lgd_oph', ev_lgd_oph = '$ev_lgd_oph', nilai_lgd_mp = '$nilai_lgd_mp', bobot_lgd_mp = '$bobot_lgd_mp', ev_lgd_mp = '$ev_lgd_mp', nilai_lgd_pk = '$nilai_lgd_pk', bobot_lgd_pk = '$bobot_lgd_pk', ev_lgd_pk = '$ev_lgd_pk' WHERE nip ='$nip'");
		return $hasil;
	}

	function update_kom_ankas_kerjasama($nip,$nilai_ankas_kom,$bobot_ankas_kom,$ev_ankas_kom,$nilai_ankas_oph,$bobot_ankas_oph,$ev_ankas_oph,$nilai_ankas_pp,$bobot_ankas_pp,$ev_ankas_pp,$nilai_ankas_mp,$bobot_ankas_mp,$ev_ankas_mp,$nilai_ankas_pk,$bobot_ankas_pk,$ev_ankas_pk){
		$hasil=$this->db->query("UPDATE komp_ankas SET nilai_ankas_kom = '$nilai_ankas_kom', bobot_ankas_kom = '$bobot_ankas_kom', ev_ankas_kom = '$ev_ankas_kom', nilai_ankas_oph = '$nilai_ankas_oph', bobot_ankas_oph = '$bobot_ankas_oph', ev_ankas_oph = '$ev_ankas_oph', nilai_ankas_pp = '$nilai_ankas_pp', bobot_ankas_pp = '$bobot_ankas_pp', ev_ankas_pp = '$ev_ankas_pp', nilai_ankas_mp = '$nilai_ankas_mp', bobot_ankas_mp = '$bobot_ankas_mp', ev_ankas_mp = '$ev_ankas_mp', nilai_ankas_pk = '$nilai_ankas_pk', bobot_ankas_pk = '$bobot_ankas_pk', ev_ankas_pk = '$ev_ankas_pk' WHERE nip ='$nip'");
		return $hasil;
	}

	function update_kom_pw_kerjasama($nip,$nilai_pw_int,$bobot_pw_int,$ev_pw_int,$nilai_pw_pdol,$bobot_pw_pdol,$ev_pw_pdol,$nilai_pw_pb,$bobot_pw_pb,$ev_pw_pb){
		$hasil=$this->db->query("UPDATE komp_pw SET nilai_pw_int = '$nilai_pw_int', bobot_pw_int = '$bobot_pw_int', ev_pw_int = '$ev_pw_int', nilai_pw_pdol = '$nilai_pw_pdol', bobot_pw_pdol = '$bobot_pw_pdol', ev_pw_pdol = '$ev_pw_pdol', nilai_pw_pb = '$nilai_pw_pb', bobot_pw_pb = '$bobot_pw_pb', ev_pw_pb = '$ev_pw_pb' WHERE nip ='$nip'");
		return $hasil;
	}

	function update_kom_bei_kerjasama($nip,$nilai_bei_int,$bobot_bei_int,$ev_bei_int,$nilai_bei_kjs,$bobot_bei_kjs,$ev_bei_kjs,$nilai_bei_kom,$bobot_bei_kom,$ev_bei_kom,$nilai_bei_oph,$bobot_bei_oph,$ev_bei_oph,$nilai_bei_pp,$bobot_bei_pp,$ev_bei_pp,$nilai_bei_pdol,$bobot_bei_pdol,$ev_bei_pdol,$nilai_bei_mp,$bobot_bei_mp,$ev_bei_mp,$nilai_bei_pk,$bobot_bei_pk,$ev_bei_pk,$nilai_bei_pb,$bobot_bei_pb,$ev_bei_pb){
		$hasil=$this->db->query("UPDATE komp_bei SET nilai_bei_int = '$nilai_bei_int',bobot_bei_int = '$bobot_bei_int',ev_bei_int = '$ev_bei_int',nilai_bei_kjs = '$nilai_bei_kjs',bobot_bei_kjs = '$bobot_bei_kjs',ev_bei_kjs = '$ev_bei_kjs',nilai_bei_kom = '$nilai_bei_kom',bobot_bei_kom = '$bobot_bei_kom',ev_bei_kom = '$ev_bei_kom',nilai_bei_oph = '$nilai_bei_oph',bobot_bei_oph = '$bobot_bei_oph',ev_bei_oph = '$ev_bei_oph',nilai_bei_pp = '$nilai_bei_pp',bobot_bei_pp = '$bobot_bei_pp',ev_bei_pp = '$ev_bei_pp',nilai_bei_pdol = '$nilai_bei_pdol',bobot_bei_pdol = '$bobot_bei_pdol',ev_bei_pdol = '$ev_bei_pdol',nilai_bei_mp = '$nilai_bei_mp',bobot_bei_mp = '$bobot_bei_mp',ev_bei_mp = '$ev_bei_mp',nilai_bei_pk = '$nilai_bei_pk',bobot_bei_pk = '$bobot_bei_pk',ev_bei_pk = '$ev_bei_pk',nilai_bei_pb = '$nilai_bei_pb',bobot_bei_pb = '$bobot_bei_pb',ev_bei_pb = '$ev_bei_pb' WHERE nip ='$nip'");
		return $hasil;
	}

	function update_kom_bei_setda_kerjasama($nip,$nilai_bei_sekda_int,$bobot_bei_sekda_int,$ev_bei_sekda_int,$nilai_bei_sekda_kjs,$bobot_bei_sekda_kjs,$ev_bei_sekda_kjs,$nilai_bei_sekda_kom,$bobot_bei_sekda_kom,$ev_bei_sekda_kom,$nilai_bei_sekda_oph,$bobot_bei_sekda_oph,$ev_bei_sekda_oph,$nilai_bei_sekda_pp,$bobot_bei_sekda_pp,$ev_bei_sekda_pp,$nilai_bei_sekda_pdol,$bobot_bei_sekda_pdol,$ev_bei_sekda_pdol,$nilai_bei_sekda_mp,$bobot_bei_sekda_mp,$ev_bei_sekda_mp,$nilai_bei_sekda_pk,$bobot_bei_sekda_pk,$ev_bei_sekda_pk,$nilai_bei_sekda_pb,$bobot_bei_sekda_pb,$ev_bei_sekda_pb){
		$hasil=$this->db->query("UPDATE komp_bei_sekda SET nilai_bei_sekda_int = '$nilai_bei_sekda_int',bobot_bei_sekda_int = '$bobot_bei_sekda_int',ev_bei_sekda_int = '$ev_bei_sekda_int',nilai_bei_sekda_kjs = '$nilai_bei_sekda_kjs',bobot_bei_sekda_kjs = '$bobot_bei_sekda_kjs',ev_bei_sekda_kjs = '$ev_bei_sekda_kjs',nilai_bei_sekda_kom = '$nilai_bei_sekda_kom',bobot_bei_sekda_kom = '$bobot_bei_sekda_kom',ev_bei_sekda_kom = '$ev_bei_sekda_kom',nilai_bei_sekda_oph = '$nilai_bei_sekda_oph',bobot_bei_sekda_oph = '$bobot_bei_sekda_oph',ev_bei_sekda_oph = '$ev_bei_sekda_oph',nilai_bei_sekda_pp = '$nilai_bei_sekda_pp',bobot_bei_sekda_pp = '$bobot_bei_sekda_pp',ev_bei_sekda_pp = '$ev_bei_sekda_pp',nilai_bei_sekda_pdol = '$nilai_bei_sekda_pdol',bobot_bei_sekda_pdol = '$bobot_bei_sekda_pdol',ev_bei_sekda_pdol = '$ev_bei_sekda_pdol',nilai_bei_sekda_mp = '$nilai_bei_sekda_mp',bobot_bei_sekda_mp = '$bobot_bei_sekda_mp',ev_bei_sekda_mp = '$ev_bei_sekda_mp',nilai_bei_sekda_pk = '$nilai_bei_sekda_pk',bobot_bei_sekda_pk = '$bobot_bei_sekda_pk',ev_bei_sekda_pk = '$ev_bei_sekda_pk',nilai_bei_sekda_pb = '$nilai_bei_sekda_pb',bobot_bei_sekda_pb = '$bobot_bei_sekda_pb',ev_bei_sekda_pb = '$ev_bei_sekda_pb' WHERE nip ='$nip'");
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

	function cetak_drh_row($id_peserta){
		$hasil	=	$this->db->query("
										SELECT a.*
										FROM registrasi AS a 
										WHERE a.id_peserta = '$id_peserta'
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
	
	
	function lihat_apm_dua_row($nip){
		$hasil	=	$this->db->query("
									SELECT b.nama, a.nip, a. nilai, IF(a.nilai=0,'0',IF(a.nilai=1,'1-3',IF(a.nilai=2,'1-3',IF(a.nilai=3,'1-3',IF(a.nilai=4,'4-5',IF(a.nilai=5,'4-5',IF(a.nilai=6,'6-7',IF(a.nilai=7,'6-7',IF(a.nilai=8,'8-9',IF(a.nilai=9,'8-9',IF(a.nilai=10,'10-12',IF(a.nilai=11,'10-12',IF(a.nilai=12,'10-12',IF(a.nilai=13,'13-14',IF(a.nilai=14,'13-14',IF(a.nilai=15,'15-16',IF(a.nilai=16,'15-16',IF(a.nilai=17,'17-18',IF(a.nilai=18,'17-18',IF(a.nilai=19,'19-21',IF(a.nilai=20,'19-21',IF(a.nilai=21,'19-21',IF(a.nilai=22,'22-23',IF(a.nilai=23,'22-23',IF(a.nilai=24,'24-25',IF(a.nilai=25,'24-25',IF(a.nilai=26,'26-27',IF(a.nilai=27,'26-27',IF(a.nilai=28,'28-30',IF(a.nilai=29,'28-30',IF(a.nilai=30,'28-30',IF(a.nilai=31,'31-32',IF(a.nilai=32,'31-32',IF(a.nilai=33,'33-34',IF(a.nilai=34,'33-34',IF(a.nilai=35,'35-36',IF(a.nilai=36,'35-36','0'))))))))))))))))))))))))))))))))))))) AS rs,(SELECT IF(rs='0','3',IF(rs='1-3','4',IF(rs='4-5','5',IF(rs='6-7','6',IF(rs='8-9','7',IF(rs='10-12','8',IF(rs='13-14','9',IF(rs='15-16','10',IF(rs='17-18','11',IF(rs='19-21','12',IF(rs='22-23','13',IF(rs='24-25','14',IF(rs='26-27','15',IF(rs='28-30','16',IF(rs='31-32','17',IF(rs='33-34','18',IF(rs='35-36','19','0')))))))))))))))))) AS ss,(SELECT IF(ss='3','SK',IF(ss='4','SK',IF(ss='5','K',IF(ss='6','K',IF(ss='7','K',IF(ss='8','R',IF(ss='9','R',IF(ss='10','R',IF(ss='11','R',IF(ss='12','R',IF(ss='12','R',IF(ss='13','T',IF(ss='14','T',IF(ss='15','T',IF(ss='16','T','ST')))))))))))))))) AS ket
									FROM hasil_apm_dua as a INNER JOIN registrasi as b on a.nip = b.nip WHERE a.nip = '$nip'
									");
		return $hasil;	
	}

	function lihat_cfit($nip){
		$hasil	=	$this->db->query("
								SELECT a.nip, a.nama, b.gol, a.jenjang, b.jabatan, b.unker, c.nilai_cfit_1, c.nilai_cfit_2, c.nilai_cfit_3, c.nilai_cfit_4, c.total_nilai_cfit, c.norma_iq, c.kategori FROM data_peserta AS a INNER JOIN registrasi AS b ON a.nip = b.nip INNER JOIN hasil_cfit AS c ON b.nip = c.nip WHERE a.nip = '$nip'
									");
		return $hasil;	
	}

	
	function export_papi($id_reg){
		$hasil	=	$this->db->query("
									SELECT a.nip, a.nama, a.pangkat, a.jabatan,
									a.unker, a.jenjang, b.id_reg, c.kd_kegiatan, d.*
									FROM
									data_peserta AS a
									INNER JOIN registrasi AS b ON a.id_peserta = b.id_peserta
									INNER JOIN kegiatan AS c ON a.id_kegiatan = c.id_kegiatan
									INNER JOIN hasil_papi AS d ON b.id_reg = d.id_reg
									WHERE d.id_reg = '$id_reg'
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
  
	function cetak_hasil($nip){
		$hasil	=	$this->db->query("
										SELECT
										a.id_peserta, a.nip, b.nama, b.gol, a.jenjang, b.jabatan, b.unker, c.nama_kegiatan, c.jenis_kegiatan,
										c.instansi, c.tgl_keg, c.tahun, b.jenped_awal, b.jur_awal, b.univ_awal, b.thn_awal, b.jenpend_akhir,
										b.jur_akhir, b.univ_akhir, b.thn_akhir, b.jab_1, b.unker_1, b.thn_unker_1, b.jab_2, b.unker_2,
										b.thn_unker_2, b.unker_puas, b.alasan_puas, b.unker_no_puas, b.alasan_no_puas, b.kebijakan, b.kekuatan_1, b.mengapa_kekuatan_1,
										b.kekuatan_2, b.mengapa_kekuatan_2, d.s1_topik, d.s1_tmt, d.s1_tst, d.s1_3, d.s1_4, d.s1_5,
										d.s1_6, d.s1_7, d.s1_8, e.s2_topik, e.s2_tmt, e.s2_tst, e.s2_3, e.s2_4,
										e.s2_5, e.s2_6, e.s2_7, e.s2_8, f.jwb1a_a, f.jwb1a_b, f.jwb1a_c, f.jwb1a_d,
										f.jwb1b_a, f.jwb1b_b, f.jwb1b_c, f.jwb1b_d, f.jwb2_a, f.jwb2_b, f.jwb2_c, f.jwb2_d,
										f.jwb3_a, f.jwb3_b, f.jwb3_c, f.jwb3_d, f.jwb4_a, f.jwb4_b, f.jwb4_c, f.jwb4_d,
										f.jwb5_a, f.jwb5_b, f.jwb5_c, f.jwb5_d, f.jwb6_a, f.jwb6_b, f.jwb6_c, f.jwb6_d,
										f.jwb7_a, f.jwb7_b, f.jwb7_c, f.jwb7_d, f.jwb8_a, f.jwb8_b, f.jwb8_c, f.jwb8_d,
										g.jwb9_a, g.jwb9_b, g.jwb9_c, g.jwb9_d, g.jwb10_a, g.jwb10_b, g.jwb10_c, g.jwb10_d,
										g.jwb11_a, g.jwb11_b, g.jwb11_c, g.jwb11_d, g.jwb12_a, g.jwb12_b, g.jwb12_c, g.jwb12_d,
										g.jwb13_a, g.jwb13_b, g.jwb13_c, g.jwb13_d, g.jwb14_a, g.jwb14_b, g.jwb14_c, g.jwb14_d,
										g.jwb15, g.jwb16, g.jwb17, h.tgl_psikometri, h.tgl_lgd, h.tgl_wwcr
										FROM
										data_peserta AS a
										INNER JOIN registrasi AS b ON a.nip = b.nip
										INNER JOIN kegiatan AS c ON a.id_kegiatan = c.id_kegiatan
										INNER JOIN hasil_ci_satu AS d ON b.nip = d.nip
										INNER JOIN hasil_ci_dua AS e ON d.nip = e.nip
										INNER JOIN hasil_qkom_satu AS f ON e.nip = f.nip
										INNER JOIN hasil_qkom_dua AS g ON f.nip = g.nip
										INNER JOIN jadwal_peserta AS h ON g.nip = h.nip	
										WHERE b.nip = '$nip' ORDER BY a.id_peserta DESC
									");
		return $hasil;	
	}

    function kompetensi_sjt($nip){
        return $this->db2->query("SELECT DISTINCT b.id, a.nama, a.nip,
								b.integritas_hp, b.kerjasama_hp, b.komunikasi_hp, b.orientasi_hp,
								b.pelayanan_hp, b.pengembangan_hp, b.mengelola_hp, b.keputusan_hp, b.perekat_hp, 
								b.memenuhi, b.jpm, b.kesimpulan,
								LEFT(b.created_at,4) AS thn
								FROM respondent AS a INNER JOIN sjt_result AS b ON a.id = b.respondent_id
								WHERE a.nip = '$nip' ")->row_array();
    }
  
	function detail_lap($nip){
		$hasil	=	$this->db->query("
									SELECT DISTINCT
									a.nip, a.nama, a.nama_jabatan, a.biro, a.jenjang, g.nama_kegiatan, g.tgl_keg, g.tahun, d.*,
									e.*, f.*, IF(d.rekom_pot = 'Tinggi',3,IF(d.rekom_pot = 'Menengah',2,IF(d.rekom_pot = 'rendah',1,0))) as star_pot, (SELECT IF(YEAR(NOW())- g.tahun = 3, 'Tidak Berlaku', 'Berlaku')) as expired,
									DATE_ADD(g.tgl_keg,INTERVAL 1095 DAY) as nextukom
									FROM
									v_simsdm AS a
									INNER JOIN data_peserta AS b ON a.nip = b.nip
									INNER JOIN registrasi AS c ON b.id_peserta = c.id_peserta
									INNER JOIN hasil_potensi AS d ON c.id_reg = d.id_reg
									INNER JOIN hasil_kompetensi AS e ON c.id_reg = e.id_reg
									INNER JOIN hasil_uraian AS f ON c.id_reg = f.id_reg
									INNER JOIN kegiatan AS g ON b.id_kegiatan = g.id_kegiatan
									WHERE c.nip = '$nip'
									GROUP BY c.id_reg
									ORDER BY c.id_reg DESC
									");
		return $hasil;	
	}
	
	function cetak_papi_row($id_reg){
		$query    = $this->db->query("CALL hitung_hasil_papi('$id_reg')");
		$res      = $query->result();

		//add this two line 
		$query->next_result(); 
		$query->free_result(); 
		//end of new code

		return $res;
   }
	
	
}