<?php
class M_sync extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->db2 = $this->load->database('db_sjt', TRUE);
		$this->db3 = $this->load->database('db_simsdm', TRUE);
	}

	
/*========================================================*/	
	
	function update_passwd(){
		$hasil	=	$this->db->query(" UPDATE users SET passwd = sha1(username) WHERE passwd IS NULL ");
		return $hasil;	
	}
	
	function belum_reg(){
		$hasil	=	$this->db->query(" 
										SELECT a.nip, a.nama, a.jabatan, a.unker FROM data_peserta as a WHERE NOT EXISTS (SELECT * FROM registrasi as b WHERE a.id_peserta = b.id_peserta) AND a.kd_kegiatan LIKE '02.007' 
									");
		return $hasil->result();	
	}
		
	function update_apm1(){
		$hasil	=	$this->db->query("
									UPDATE hasil_apm_satu
									SET
									jwb_apm_satu_1 = 'H', jwb_apm_satu_2 = 'D', jwb_apm_satu_3 = 'E', jwb_apm_satu_4 = 'E', 
									jwb_apm_satu_5 = 'B', jwb_apm_satu_6 = 'F', jwb_apm_satu_7 = 'C', jwb_apm_satu_8 = 'G',
									jwb_apm_satu_9 = 'F', jwb_apm_satu_10 = 'E', jwb_apm_satu_11 = 'G', jwb_apm_satu_12 = 'H'
									WHERE 
									jwb_apm_satu_1 = jwb_apm_satu_2 = jwb_apm_satu_3 = jwb_apm_satu_4 = jwb_apm_satu_5 = jwb_apm_satu_6 = 
									jwb_apm_satu_7 = jwb_apm_satu_8 = jwb_apm_satu_9 = jwb_apm_satu_10 = jwb_apm_satu_11 = jwb_apm_satu_12 IS NULL
									");
		return $hasil;	
	}
	
	function hitung_apm1(){
		$hasil	=	$this->db->query("
										UPDATE hasil_apm_satu as a SET a.nilai = (SELECT SUM( 
										IF(a.jwb_apm_satu_1 = 'H',1,0)+IF(a.jwb_apm_satu_2 = 'D',1,0)+IF(a.jwb_apm_satu_3 = 'E',1,0)+
										IF(a.jwb_apm_satu_4 = 'B',1,0)+IF(a.jwb_apm_satu_5 = 'B',1,0)+IF(a.jwb_apm_satu_6 = 'F',1,0)+
										IF(a.jwb_apm_satu_7 = 'D',1,0)+IF(a.jwb_apm_satu_8 = 'G',1,0)+IF(a.jwb_apm_satu_9 = 'F',1,0)+
										IF(a.jwb_apm_satu_10 = 'C',1,0)+IF(a.jwb_apm_satu_11 = 'G',1,0)+IF(a.jwb_apm_satu_12 = 'H',1,0)
										)) WHERE a.nilai IS NULL									
									");
		return $hasil;	
	}
	
	function update_apm2(){
		$hasil	=	$this->db->query("
									UPDATE hasil_apm_dua
									SET
									jwb_apm_dua_1 = 'A', jwb_apm_dua_2 = 'H', jwb_apm_dua_3 = 'G', jwb_apm_dua_4 = 'A', 
									jwb_apm_dua_5 = 'D', jwb_apm_dua_6 = 'A', jwb_apm_dua_7 = 'F', jwb_apm_dua_8 = 'G',
									jwb_apm_dua_9 = 'H', jwb_apm_dua_10 = 'D', jwb_apm_dua_11 = 'C', jwb_apm_dua_12 = 'B',
									jwb_apm_dua_13 = 'H', jwb_apm_dua_14 = 'H', jwb_apm_dua_15 = 'C', jwb_apm_dua_16 = 'A',
									jwb_apm_dua_17 = 'G', jwb_apm_dua_18 = 'G', jwb_apm_dua_19 = 'C', jwb_apm_dua_20 = 'D',
									jwb_apm_dua_21 = 'F', jwb_apm_dua_22 = 'F', jwb_apm_dua_23 = 'C', jwb_apm_dua_24 = 'A',
									jwb_apm_dua_25 = 'E', jwb_apm_dua_26 = 'F', jwb_apm_dua_27 = 'A', jwb_apm_dua_28 = 'E',
									jwb_apm_dua_29 = 'A', jwb_apm_dua_30 = 'E', jwb_apm_dua_31 = 'E', jwb_apm_dua_32 = 'A',
									jwb_apm_dua_33 = 'E', jwb_apm_dua_34 = 'G', jwb_apm_dua_35 = 'A', jwb_apm_dua_36 = 'G'
									WHERE 
									jwb_apm_dua_1 = jwb_apm_dua_2 = jwb_apm_dua_3 = jwb_apm_dua_4 = jwb_apm_dua_5 = jwb_apm_dua_6 = jwb_apm_dua_7 = 
									jwb_apm_dua_8 = jwb_apm_dua_9 = jwb_apm_dua_10 = jwb_apm_dua_11 = jwb_apm_dua_12 =
									jwb_apm_dua_13 = jwb_apm_dua_14 = jwb_apm_dua_15 = jwb_apm_dua_16 = jwb_apm_dua_17 = jwb_apm_dua_18 = 
									jwb_apm_dua_19 = jwb_apm_dua_20 = jwb_apm_dua_21 = jwb_apm_dua_22 = jwb_apm_dua_23 = jwb_apm_dua_24 =
									jwb_apm_dua_25 = jwb_apm_dua_26 = jwb_apm_dua_27 = jwb_apm_dua_28 = jwb_apm_dua_29 = jwb_apm_dua_30 = 
									jwb_apm_dua_31 = jwb_apm_dua_32 = jwb_apm_dua_33 = jwb_apm_dua_34 = jwb_apm_dua_35 = jwb_apm_dua_36 IS NULL
									");
		return $hasil;	
	}
	
	function hitung_apm2(){
		$hasil	=	$this->db->query("
										UPDATE hasil_apm_dua as a SET a.nilai = (SELECT SUM( 
										IF(a.jwb_apm_dua_1 = 'E',1,0)+IF(a.jwb_apm_dua_2 = 'A',1,0)+IF(a.jwb_apm_dua_3 = 'G',1,0)+
										IF(a.jwb_apm_dua_4 = 'D',1,0)+IF(a.jwb_apm_dua_5 = 'C',1,0)+IF(a.jwb_apm_dua_6 = 'A',1,0)+
										IF(a.jwb_apm_dua_7 = 'F',1,0)+IF(a.jwb_apm_dua_8 = 'A',1,0)+IF(a.jwb_apm_dua_9 = 'H',1,0)+
										IF(a.jwb_apm_dua_10 = 'D',1,0)+IF(a.jwb_apm_dua_11 = 'E',1,0)+IF(a.jwb_apm_dua_12 = 'F',1,0)+
										IF(a.jwb_apm_dua_13 = 'B',1,0)+IF(a.jwb_apm_dua_14 = 'A',1,0)+IF(a.jwb_apm_dua_15 = 'B',1,0)+
										IF(a.jwb_apm_dua_16 = 'D',1,0)+IF(a.jwb_apm_dua_17 = 'F',1,0)+IF(a.jwb_apm_dua_18 = 'G',1,0)+
										IF(a.jwb_apm_dua_19 = 'C',1,0)+IF(a.jwb_apm_dua_20 = 'H',1,0)+IF(a.jwb_apm_dua_21 = 'H',1,0)+
										IF(a.jwb_apm_dua_22 = 'G',1,0)+IF(a.jwb_apm_dua_23 = 'F',1,0)+IF(a.jwb_apm_dua_24 = 'C',1,0)+
										IF(a.jwb_apm_dua_25 = 'G',1,0)+IF(a.jwb_apm_dua_26 = 'B',1,0)+IF(a.jwb_apm_dua_27 = 'G',1,0)+
										IF(a.jwb_apm_dua_28 = 'E',1,0)+IF(a.jwb_apm_dua_29 = 'F',1,0)+IF(a.jwb_apm_dua_30 = 'E',1,0)+
										IF(a.jwb_apm_dua_31 = 'D',1,0)+IF(a.jwb_apm_dua_32 = 'H',1,0)+IF(a.jwb_apm_dua_33 = 'E',1,0)+
										IF(a.jwb_apm_dua_34 = 'A',1,0)+IF(a.jwb_apm_dua_35 = 'C',1,0)+IF(a.jwb_apm_dua_36 = 'B',1,0)
										)) WHERE a.nilai IS NULL									
									");
		return $hasil;	
	}
		
	function update_papi(){
		$hasil	=	$this->db->query("
									UPDATE hasil_papi
									SET
									jwb_papi1 = '1:a', jwb_papi2 = '2:b', jwb_papi3 = '3:b', jwb_papi4 = '4:a',
									jwb_papi5 = '5:b', jwb_papi6 = '6:a', jwb_papi7 = '7:b', jwb_papi8 = '8:a',
									jwb_papi9 = '9:a', jwb_papi10 = '10:a', jwb_papi11 = '11:a', jwb_papi12 = '12:a',
									jwb_papi13 = '13:b', jwb_papi14 = '14:a', jwb_papi15 = '15:a', jwb_papi16 = '16:a',
									jwb_papi17 = '17:a', jwb_papi18 = '18:a', jwb_papi19 = '19:a', jwb_papi20 = '20:a',
									jwb_papi21 = '21:b', jwb_papi22 = '22:b', jwb_papi23 = '23:b', jwb_papi24 = '24:b',
									jwb_papi25 = '25:a', jwb_papi26 = '26:a', jwb_papi27 = '27:a', jwb_papi28 = '28:a',
									jwb_papi29 = '29:b', jwb_papi30 = '30:b', jwb_papi31 = '31:b', jwb_papi32 = '32:b',
									jwb_papi33 = '33:a', jwb_papi34 = '34:a', jwb_papi35 = '35:a', jwb_papi36 = '36:a',
									jwb_papi37 = '37:b', jwb_papi38 = '38:b', jwb_papi39 = '39:b', jwb_papi40 = '40:b',
									jwb_papi41 = '41:a', jwb_papi42 = '42:a', jwb_papi43 = '43:a', jwb_papi44 = '44:a',
									jwb_papi45 = '45:b', jwb_papi46 = '46:b', jwb_papi47 = '47:b', jwb_papi48 = '48:b',
									jwb_papi49 = '49:a', jwb_papi50 = '50:a', jwb_papi51 = '51:a', jwb_papi52 = '52:a',
									jwb_papi53 = '53:b', jwb_papi54 = '54:b', jwb_papi55 = '55:b', jwb_papi56 = '56:b',
									jwb_papi57 = '57:a', jwb_papi58 = '58:a', jwb_papi59 = '59:a', jwb_papi60 = '60:a',
									jwb_papi61 = '61:b', jwb_papi62 = '62:b', jwb_papi63 = '63:b', jwb_papi64 = '64:b',
									jwb_papi65 = '65:a', jwb_papi66 = '66:a', jwb_papi67 = '67:b', jwb_papi68 = '68:b',
									jwb_papi69 = '69:a', jwb_papi70 = '70:a', jwb_papi71 = '71:b', jwb_papi72 = '72:b',
									jwb_papi73 = '73:a', jwb_papi74 = '74:a', jwb_papi75 = '75:b', jwb_papi76 = '76:b',
									jwb_papi77 = '77:a', jwb_papi78 = '78:a', jwb_papi79 = '79:b', jwb_papi80 = '80:b',
									jwb_papi81 = '81:a', jwb_papi82 = '82:b', jwb_papi83 = '83:a', jwb_papi84 = '84:b',
									jwb_papi85 = '85:a', jwb_papi86 = '86:b', jwb_papi87 = '87:a', jwb_papi88 = '88:b',
									jwb_papi89 = '89:a', jwb_papi90 = '90:b'
									WHERE 
									jwb_papi1 = jwb_papi2 = jwb_papi3 = jwb_papi4 =
									jwb_papi5 =  jwb_papi6 = jwb_papi7 = jwb_papi8 =
									jwb_papi9 =  jwb_papi10 = jwb_papi11 = jwb_papi12 =
									jwb_papi13 = jwb_papi14 = jwb_papi15 = jwb_papi16 =
									jwb_papi17 = jwb_papi18 = jwb_papi19 = jwb_papi20 =
									jwb_papi21 = jwb_papi22 = jwb_papi23 = jwb_papi24 =
									jwb_papi25 = jwb_papi26 = jwb_papi27 = jwb_papi28 =
									jwb_papi29 = jwb_papi30 = jwb_papi31 = jwb_papi32 =
									jwb_papi33 = jwb_papi34 = jwb_papi35 = jwb_papi36 =
									jwb_papi41 = jwb_papi42 = jwb_papi43 = jwb_papi44 =
									jwb_papi37 = jwb_papi38 = jwb_papi39 = jwb_papi40 =
									jwb_papi45 = jwb_papi46 = jwb_papi47 = jwb_papi48 =
									jwb_papi49 = jwb_papi50 = jwb_papi51 = jwb_papi52 =
									jwb_papi53 = jwb_papi54 = jwb_papi55 = jwb_papi56 =
									jwb_papi57 = jwb_papi58 = jwb_papi59 = jwb_papi60 =
									jwb_papi61 = jwb_papi62 = jwb_papi63 = jwb_papi64 =
									jwb_papi65 = jwb_papi66 = jwb_papi67 = jwb_papi68 =
									jwb_papi69 = jwb_papi70 = jwb_papi71 = jwb_papi72 =
									jwb_papi73 = jwb_papi74 = jwb_papi75 = jwb_papi76 =
									jwb_papi77 = jwb_papi78 = jwb_papi79 = jwb_papi80 =
									jwb_papi81 = jwb_papi82 = jwb_papi83 = jwb_papi84 =
									jwb_papi85 = jwb_papi86 = jwb_papi87 = jwb_papi88 =
									jwb_papi89 = jwb_papi90 IS NULL
									");
		return $hasil;	
	}
	
	function update_sjt(){
		$hasil	=	$this->db->query("
									UPDATE hasil_sjt
									SET
									jwb_sjt1 = 'A', jwb_sjt2 = 'B', jwb_sjt3 = 'C', jwb_sjt4 = 'D',
									jwb_sjt5 = 'E', jwb_sjt6 = 'A', jwb_sjt7 = 'B', jwb_sjt8 = 'C',
									jwb_sjt9 = 'D', jwb_sjt10 = 'E', jwb_sjt11 = 'A', jwb_sjt12 = 'B',
									jwb_sjt13 = 'C', jwb_sjt14 = 'D', jwb_sjt15 = 'E', jwb_sjt16 = 'A',
									jwb_sjt17 = 'B', jwb_sjt18 = 'C', jwb_sjt19 = 'D', jwb_sjt20 = 'E',
									jwb_sjt21 = 'A', jwb_sjt22 = 'B', jwb_sjt23 = 'C', jwb_sjt24 = 'D',
									jwb_sjt25 = 'E', jwb_sjt26 = 'A', jwb_sjt27 = 'B', jwb_sjt28 = 'C',
									jwb_sjt29 = 'D', jwb_sjt30 = 'E', jwb_sjt31 = 'A', jwb_sjt32 = 'B',
									jwb_sjt33 = 'C', jwb_sjt34 = 'D', jwb_sjt35 = 'E', jwb_sjt36 = 'A'
									WHERE 
									jwb_sjt1 = jwb_sjt2 = jwb_sjt3 = jwb_sjt4 =
									jwb_sjt5 = jwb_sjt6 = jwb_sjt7 = jwb_sjt8 =
									jwb_sjt9 = jwb_sjt10 = jwb_sjt11 = jwb_sjt12 =
									jwb_sjt13 = jwb_sjt14 = jwb_sjt15 = jwb_sjt16 =
									jwb_sjt17 = jwb_sjt18 = jwb_sjt19 = jwb_sjt20 =
									jwb_sjt21 = jwb_sjt22 = jwb_sjt23 = jwb_sjt24 =
									jwb_sjt25 = jwb_sjt26 = jwb_sjt27 = jwb_sjt28 =
									jwb_sjt29 = jwb_sjt30 = jwb_sjt31 = jwb_sjt32 =
									jwb_sjt33 = jwb_sjt34 = jwb_sjt35 = jwb_sjt36 IS NULL
									");
		return $hasil;	
	}
	
	function update_reg_y(){
		$hasil	=	$this->db->query(" UPDATE registrasi SET ket = 'N' WHERE ket LIKE 'Y' ");
		return $hasil;	
	}
	
	function update_cisatu_y(){
		$hasil	=	$this->db->query(" UPDATE hasil_ci_satu SET ket = 'N' WHERE ket LIKE 'Y' ");
		return $hasil;	
	}
	
	function update_cidua_y(){
		$hasil	=	$this->db->query(" UPDATE hasil_ci_dua SET ket = 'N' WHERE ket LIKE 'Y' ");
		return $hasil;	
	}
	
	function update_qkomsatu_y(){
		$hasil	=	$this->db->query(" UPDATE hasil_qkom_satu SET ket = 'N' WHERE ket LIKE 'Y' ");
		return $hasil;	
	}
	
	function update_qkomdua_y(){
		$hasil	=	$this->db->query(" UPDATE hasil_qkom_dua SET ket = 'N' WHERE ket LIKE 'Y' ");
		return $hasil;	
	}
	
	
	function update_apmsatu_y(){
		$hasil	=	$this->db->query(" UPDATE hasil_apm_satu SET ket = 'N' WHERE ket LIKE 'Y' ");
		return $hasil;	
	}
	
	function update_apmdua_y(){
		$hasil	=	$this->db->query(" UPDATE hasil_apm_dua SET ket = 'N' WHERE ket LIKE 'Y' ");
		return $hasil;	
	}
	
	function update_papi_y(){
		$hasil	=	$this->db->query(" UPDATE hasil_papi SET ket = 'N' WHERE ket LIKE 'Y' ");
		return $hasil;	
	}
	
	function update_ankas_y(){
		$hasil	=	$this->db->query(" UPDATE hasil_ankas SET ket = 'N' WHERE ket LIKE 'Y' ");
		return $hasil;	
	}
	
	function update_datapeserta_y(){
		$hasil	=	$this->db->query(" UPDATE data_peserta SET ket = 'N' WHERE ket LIKE 'Y' ");
		return $hasil;	
	}
	
	function update_chart(){
	    $this->db->truncate('chart');
		$hasil	=	$this->db->query("
                                    INSERT INTO chart (psrt_ktng, psrt_ext, tahun, jml_psrt) 
									SELECT a.tahun, count(if(a.kd_kegiatan like '01.%',1,null)) as psrt_ktng, count(if(a.kd_kegiatan like '02.%',1,null)) as psrt_ext,
									(SELECT sum(count(if(a.kd_kegiatan like '01.%',1,null))+count(if(a.kd_kegiatan like '02.%',1,null)))) as jml_psrt
									FROM data_peserta AS a GROUP BY a.tahun
									");
		return $hasil;	
	}

	function insert_hadir(){
	    $this->db->truncate('daftar_hadir');
		$hasil	=	$this->db->query("
									INSERT INTO daftar_hadir (username, nama_user, ip_address, last_activity)
                                    SELECT a.username, a.nama_user, b.ip_address, b.last_activity FROM users as a INNER JOIN user_online as b ON a.user_id = b.user_id WHERE status like 'on'
									");
		return $hasil;	
	}
	
	function duplicate_registrasi(){
		$hasil	=	$this->db->query(" SELECT id_peserta, id_reg , nip, nama, COUNT(*) duplikat FROM registrasi GROUP BY nip HAVING duplikat > 1 ");
		return $hasil->result();	
	}
	
	function duplicate_qkom_satu(){
		$hasil	=	$this->db->query(" SELECT id_qkom_satu, nip, COUNT(*) duplikat FROM hasil_qkom_satu GROUP BY nip HAVING duplikat > 1 ");
		return $hasil->result();	
	}
	
	function duplicate_qkom_dua(){
		$hasil	=	$this->db->query(" SELECT id_qkom_dua, nip, COUNT(*) duplikat FROM hasil_qkom_dua GROUP BY nip HAVING duplikat > 1 ");
		return $hasil->result();	
	}
	
	
	function duplicate_ci1(){
		$hasil	=	$this->db->query(" SELECT id_ci, nip, COUNT(*) duplikat FROM hasil_ci_satu GROUP BY nip HAVING duplikat > 1 ");
		return $hasil->result();	
	}
	
	function duplicate_ci2(){
		$hasil	=	$this->db->query(" SELECT id_ci, nip, COUNT(*) duplikat FROM hasil_ci_dua GROUP BY nip HAVING duplikat > 1 ");
		return $hasil->result();	
	}
	
	function duplicate_jadwal(){
		$hasil	=	$this->db->query(" SELECT id_jadwal, nip, COUNT(*) duplikat FROM jadwal_peserta GROUP BY nip HAVING duplikat > 1 ");
		return $hasil->result();	
	}
	
	function duplicate_user(){
		$hasil	=	$this->db->query(" SELECT user_id, username, COUNT(*) duplikat FROM users GROUP BY username HAVING duplikat > 1 ");
		return $hasil->result();	
	}
	
	function duplicate_ankas(){
		$hasil	=	$this->db->query(" SELECT id_peserta_ankas, nip, COUNT(*) duplikat FROM hasil_ankas GROUP BY nip HAVING duplikat > 1 ");
		return $hasil->result();	
	}
	
	function duplicate_papi(){
		$hasil	=	$this->db->query(" SELECT id_peserta_papi, nip, COUNT(*) duplikat FROM hasil_papi GROUP BY nip HAVING duplikat > 1 ");
		return $hasil->result();	
	}
	
	function duplicate_apm1(){
		$hasil	=	$this->db->query(" SELECT id_peserta_apm_satu, nip, COUNT(*) duplikat FROM hasil_apm_dua GROUP BY nip HAVING duplikat > 1 ");
		return $hasil->result();	
	}
	
	function duplicate_apm2(){
		$hasil	=	$this->db->query(" SELECT id_peserta_apm_dua, nip, COUNT(*) duplikat FROM hasil_apm_satu GROUP BY nip HAVING duplikat > 1 ");
		return $hasil->result();	
	}
	
	function hapus_duplicate_reg(){
		$hasil	=$this->db->query(" 
									DELETE FROM registrasi WHERE id_reg NOT IN ( SELECT * FROM ( SELECT MAX(id_reg) FROM registrasi 
									GROUP BY nip ) AS duplikat_registrasi );							
								");
		return $hasil;
	}
		
	function hapus_duplicate_qkom_satu(){
		$hasil	=$this->db->query(" 
									DELETE FROM hasil_qkom_satu WHERE id_qkom_satu NOT IN ( SELECT * FROM ( SELECT MAX(id_qkom_satu) FROM hasil_qkom_satu 
									GROUP BY nip ) AS duplikat_qkom );							
								");
		return $hasil;
	}
	
	function hapus_duplicate_qkom_dua(){
		$hasil	=$this->db->query(" 
									DELETE FROM hasil_qkom_dua WHERE id_qkom_dua NOT IN ( SELECT * FROM ( SELECT MAX(id_qkom_dua) FROM hasil_qkom _dua
									GROUP BY nip ) AS duplikat_qkom );							
								");
		return $hasil;
	}
		
		
	function hapus_duplicate_ci1(){
		$hasil	=$this->db->query(" 
									DELETE FROM hasil_ci_satu WHERE id_ci NOT IN ( SELECT * FROM ( SELECT MAX(id_ci) FROM hasil_ci_satu 
									GROUP BY nip ) AS duplikat_ci1 );							
								");
		return $hasil;
	}
		
	function hapus_duplicate_ci2(){
		$hasil	=$this->db->query(" 
									DELETE FROM hasil_ci_dua WHERE id_ci NOT IN ( SELECT * FROM ( SELECT MAX(id_ci) FROM hasil_ci_dua 
									GROUP BY nip ) AS duplikat_ci2 );							
								");
		return $hasil;
	}
		
	function hapus_duplicate_jadwal(){
		$hasil	=$this->db->query(" 
									DELETE FROM jadwal_peserta WHERE id_jadwal NOT IN ( SELECT * FROM ( SELECT MAX(id_jadwal) FROM jadwal_peserta 
									GROUP BY nip ) AS duplikat_jadwal );							
								");
		return $hasil;
	}
		
	function hapus_duplicate_user(){
		$hasil	=$this->db->query(" 
									DELETE FROM users WHERE user_id NOT IN ( SELECT * FROM ( SELECT MAX(user_id) FROM users 
									GROUP BY username ) AS duplikat_user );							
								");
		return $hasil;
	}
		
	function hapus_duplicate_ankas(){
		$hasil	=$this->db->query(" 
									DELETE FROM hasil_ankas WHERE id_peserta_ankas NOT IN ( SELECT * FROM ( SELECT MAX(id_peserta_ankas) FROM hasil_ankas 
									GROUP BY nip ) AS duplikat_ankas );							
								");
		return $hasil;
	}
		
	function hapus_duplicate_papi(){
		$hasil	=$this->db->query(" 
									DELETE FROM hasil_papi WHERE id_peserta_papi NOT IN ( SELECT * FROM ( SELECT MAX(id_peserta_papi) FROM hasil_papi 
									GROUP BY nip ) AS duplikat_papi );							
								");
		return $hasil;
	}
		
	function hapus_duplicate_apm1(){
		$hasil	=$this->db->query(" 
									DELETE FROM hasil_apm_satu WHERE id_peserta_apm_satu NOT IN ( SELECT * FROM ( SELECT MAX(id_peserta_apm_satu) FROM hasil_apm_satu 
									GROUP BY nip ) AS duplikat_apm1 );							
								");
		return $hasil;
	}
		
	function hapus_duplicate_apm2(){
		$hasil	=$this->db->query(" 
									DELETE FROM hasil_apm_dua WHERE id_peserta_apm_dua NOT IN ( SELECT * FROM ( SELECT MAX(id_peserta_apm_dua) FROM hasil_apm_dua 
									GROUP BY nip ) AS duplikat_apm2 );							
								");
		return $hasil;
	}
		
	function update_nilai_cfit(){
		$hasil	=	$this->db->query("
									UPDATE 
									hasil_cfit_satu  AS a,
									hasil_cfit_dua AS b,
									hasil_cfit_tiga AS c,
									hasil_cfit_empat AS d
									SET 
									a.nilai_cfit_1 = (SELECT SUM((IF(a.jwb_cfit_satu_1 = 'B', 1,0))+(IF(a.jwb_cfit_satu_2 = 'C', 1,0))+(IF(a.jwb_cfit_satu_3 = 'B', 1,0))+(IF(a.jwb_cfit_satu_4 = 'D', 1,0))+(IF(a.jwb_cfit_satu_5 = 'E', 1,0))+(IF(a.jwb_cfit_satu_6 = 'B', 1,0))+(IF(a.jwb_cfit_satu_7 = 'D', 1,0))+(IF(a.jwb_cfit_satu_8 = 'B', 1,0))+(IF(a.jwb_cfit_satu_9 = 'F', 1,0))+(IF(a.jwb_cfit_satu_10 = 'C', 1,0))+(IF(a.jwb_cfit_satu_11 = 'B', 1,0))+(IF(a.jwb_cfit_satu_12 = 'B', 1,0))+(IF(a.jwb_cfit_satu_13 = 'E', 1,0)))),
									b.nilai_cfit_2 = (SELECT SUM((IF(b.jwb_cfit_dua_1 = 'B - E', 1,0))+(IF(b.jwb_cfit_dua_2 = 'A - E', 1,0))+(IF(b.jwb_cfit_dua_3 = 'A - D', 1,0))+(IF(b.jwb_cfit_dua_4 = 'C - E', 1,0))+(IF(b.jwb_cfit_dua_5 = 'B - E', 1,0))+(IF(b.jwb_cfit_dua_6 = 'A - D', 1,0))+(IF(b.jwb_cfit_dua_7 = 'B - E', 1,0))+(IF(b.jwb_cfit_dua_8 = 'B - E', 1,0))+(IF(b.jwb_cfit_dua_9 = 'A - D', 1,0))+(IF(b.jwb_cfit_dua_10 = 'B - D', 1,0))+(IF(b.jwb_cfit_dua_11 = 'A - E', 1,0))+(IF(b.jwb_cfit_dua_12 = 'D - E', 1,0))+(IF(b.jwb_cfit_dua_13 = 'B - C', 1,0))+(IF(b.jwb_cfit_dua_14 = 'A - B', 1,0)))),
									c.nilai_cfit_3 = (SELECT SUM((IF(c.jwb_cfit_tiga_1 = 'E', 1,0))+(IF(c.jwb_cfit_tiga_2 = 'E', 1,0))+(IF(c.jwb_cfit_tiga_3 = 'E', 1,0))+(IF(c.jwb_cfit_tiga_4 = 'B', 1,0))+(IF(c.jwb_cfit_tiga_5 = 'C', 1,0))+(IF(c.jwb_cfit_tiga_6 = 'D', 1,0))+(IF(c.jwb_cfit_tiga_7 = 'E', 1,0))+(IF(c.jwb_cfit_tiga_8 = 'E', 1,0))+(IF(c.jwb_cfit_tiga_9 = 'A', 1,0))+(IF(c.jwb_cfit_tiga_10 = 'A', 1,0))+(IF(c.jwb_cfit_tiga_11 = 'F', 1,0))+(IF(c.jwb_cfit_tiga_12 = 'C', 1,0))+(IF(c.jwb_cfit_tiga_13 = 'C', 1,0)))),
									d.nilai_cfit_4 = (SELECT SUM((IF(d.jwb_cfit_empat_1 = 'B', 1,0))+(IF(d.jwb_cfit_empat_2 = 'A', 1,0))+(IF(d.jwb_cfit_empat_3 = 'D', 1,0))+(IF(d.jwb_cfit_empat_4 = 'D', 1,0))+(IF(d.jwb_cfit_empat_5 = 'A', 1,0))+(IF(d.jwb_cfit_empat_6 = 'B', 1,0))+(IF(d.jwb_cfit_empat_7 = 'C', 1,0))+(IF(d.jwb_cfit_empat_8 = 'D', 1,0))+(IF(d.jwb_cfit_empat_9 = 'A', 1,0))+(IF(d.jwb_cfit_empat_10 = 'D', 1,0))))
									WHERE a.nilai_cfit_1 = b.nilai_cfit_2 = c.nilai_cfit_3 = d.nilai_cfit_4 IS NULL
									");
		return $hasil;	
	}
	
	function insert_nilai_cfit(){
		$hasil	=	$this->db->query("
									INSERT INTO hasil_cfit(nip, nilai_cfit_1, nilai_cfit_2, nilai_cfit_3, nilai_cfit_4, total_nilai_cfit, norma_iq)
									SELECT
									b.nip,
									c.nilai_cfit_1,
									d.nilai_cfit_2,
									e.nilai_cfit_3,
									f.nilai_cfit_4,
									SUM(c.nilai_cfit_1 + d.nilai_cfit_2 + e.nilai_cfit_3 + f.nilai_cfit_4) AS total,
									(SELECT 
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 0,38,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 1,40,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 2,43,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 3,45,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 4,47,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 5,48,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 6,52,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 7,55,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 8,57,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 9,60,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 10,63,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 11,67,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 12,70,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 13,72,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 14,75,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 15,78,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 16,81,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 17,85,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 18,88,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 19,91,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 20,94,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 21,96,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 22,100,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 23,103,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 24,106,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 25,109,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 26,113,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 27,116,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 28,119,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 29,121,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 30,124,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 31,128,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 32,131,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 33,134,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 34,137,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 35,140,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 36,144,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 37,147,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 38,150,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 39,153,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 40,156,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 41,160,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 42,163,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 43,166,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 44,169,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 45,172,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 46,176,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 47,179,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 48,182,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 49,185,
									IF((SUM(c.nilai_cfit_1)+(d.nilai_cfit_2)+(e.nilai_cfit_3)+(f.nilai_cfit_4))= 50,188,200)))))))))))))))))))))))))))))))))))))))))))))) )))))
										) AS iq
									FROM
									data_peserta AS a
									INNER JOIN registrasi AS b ON a.nip = b.nip
									INNER JOIN hasil_cfit_satu AS c ON b.nip = c.nip
									INNER JOIN hasil_cfit_dua AS d ON c.nip = d.nip
									INNER JOIN hasil_cfit_tiga AS e ON d.nip = e.nip
									INNER JOIN hasil_cfit_empat AS f ON e.nip = f.nip
									WHERE b.nip NOT IN (SELECT nip FROM hasil_cfit)
									GROUP BY b.nip
									");
		return $hasil;	
	}
	
	function kategori_cfit(){
		$hasil	=$this->db->query(" 
								UPDATE hasil_cfit AS a
								SET a.kategori = (SELECT IF(a.norma_iq >= 130,'Sangat Superior',IF(a.norma_iq >= 120 AND a.norma_iq <= 129, 'Superior',IF(a.norma_iq >= 110 AND a.norma_iq <= 119, 'Diatas rata-rata',IF(a.norma_iq >= 90 AND a.norma_iq <= 109, 'Rata-rata',IF(a.norma_iq >= 80 AND a.norma_iq <= 89, 'Dibawah Rata-rata',IF(a.norma_iq >= 70 AND a.norma_iq <= 79, 'Borderline', 'Intellectual Deficient')))))))
								WHERE a.kategori IS NULL
								");
		return $hasil;
	}
		
	function data_cfit(){
		$hasil	=$this->db->query(" 
								SELECT a.nip, a.nama, b.gol, a.jenjang, b.jabatan, b.unker, c.nilai_cfit_1, c.nilai_cfit_2, c.nilai_cfit_3, c.nilai_cfit_4, c.total_nilai_cfit, c.norma_iq, c.kategori FROM data_peserta AS a INNER JOIN registrasi AS b ON a.nip = b.nip INNER JOIN hasil_cfit AS c ON b.nip = c.nip								
								");
		return $hasil;
	}
		
	function update_jadwal(){
		$hasil	=	$this->db->query("
										UPDATE 
                                        jadwal_peserta as a 
                                        INNER JOIN jdwl_tampung as b ON (a.nip = b.nip)
                                        SET 
                                        a.tgl_psikometri = b.tgl_psikometri,
                                        a.sesi = b.sesi,
                                        a.tgl_lgd = b.tgl_lgd,
                                        a.kd_personil_lgd = b.kd_personil_lgd,
                                        a.batch = b.batch,
                                        a.kelompok = b.kelompok,
                                        a.tgl_wwcr = b.tgl_wwcr,  
                                        a.kd_personil_wwcr = b.kd_personil_wwcr,
                                        a.ket = b.ket									
									");
		return $hasil;	
	}
	
	function update_data_simsdm(){
	    $this->db->truncate('data_simsdm');
		$hasil	=	$this->db3->query("
									INSERT INTO assessment_bkkbn.data_simsdm (nip, nama, nama_jabatan,	jenis_jabatan,	tmt_jabatan,	pangkat,	tmt_pangkat,	biro, status_pegawai)
									SELECT DISTINCT
									a.NIP,
									TRIM(REPLACE(CONCAT(a.gelardepan, ' ', a.nama, ' ', a.gelarbelakang), '-', '')) AS nama,
									b.nama_jabatan,
									b.jabatan,
									b.tmt AS tmt_jabatan,
									CONCAT(d.pangkat,', ', d.golongan) AS pangkat,
									d.tmt AS tmt_pangkat,
									c.Biro,
									a.statuspegawai
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
		return $hasil;	
	}

	function update_data_sjt(){
	    $this->db->truncate('data_hasil_sjt');
		$hasil = $this->db2->select("
									INSERT INTO assessment_bkkbn.dbo.data_hasil_sjt(id_responden,	nip,	nama,	jabatan,	jenjang,	unit_kerja,	integritas_hp,	kerjasama_hp,	komunikasi_hp,	orientasi_hp,	pelayanan_hp,	pengembangan_hp,	mengelola_hp,	keputusan_hp,	perekat_hp,	memenuhi,	jpm,	kesimpulan,	deskripsi_integritas,	deskripsi_kerjasama,	deskripsi_komunikasi,	deskripsi_orientasi,	deskripsi_pelayanan,	deskripsi_pengembangan,	deskripsi_mengelola,	deskripsi_keputusan,	deskripsi_perekat)
									SELECT
									a.id, a.nip, a.nama, a.jabatan, a.pangkat, a.golongan as jenjang_jabatan, a.unit_kerja,
									b.integritas_hp, b.kerjasama_hp, b.komunikasi_hp, b.orientasi_hp,
									b.pelayanan_hp, b.pengembangan_hp, b.mengelola_hp, b.keputusan_hp,
									b.perekat_hp, b.standar_nilai, b.memenuhi, b.jpm, b.kesimpulan,
									b.deskripsi_integritas, b.deskripsi_kerjasama, b.deskripsi_komunikasi, b.deskripsi_orientasi,
									b.deskripsi_pelayanan, b.deskripsi_pengembangan,
									b.deskripsi_mengelola, b.deskripsi_keputusan, b.deskripsi_perekat
									FROM
									respondent AS a
									INNER JOIN sjt_result AS b ON a.id = b.respondent_id
									");   

		return $hasil;	
	}

	

	
}