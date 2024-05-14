<?php
class M_jadwal_peserta extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
///// 

	function get_pic(){
		$hasil	=	$this->db->query("
										SELECT a.id_personil, a.kd_personil, b.username, a.nama_personil FROM lembaga AS a INNER JOIN users AS b ON a.nip_personil = b.username	
										WHERE b.group_id IN (11000002, 11000006) AND b.`status` LIKE 'on'										
									");
		return $hasil;							
	}
	
	function get_pic_lgd(){
		$hasil	=	$this->db->query("
                                        SELECT a.id_personil, a.kd_personil, b.username, a.nama_personil, c.id_peserta, c.nip, c.nama, c.tgl_lgd, c.batch, c.id_reg, c.kelompok
                                        FROM lembaga AS a INNER JOIN users AS b ON a.nip_personil = b.username INNER JOIN jadwal_peserta AS c ON a.kd_personil = c.kd_personil_lgd
                                        WHERE b.group_id IN (11000002, 11000006) AND b.`status` LIKE 'on' AND c.ket LIKE 'Y'
									");
		return $hasil;							
	}
	
	function get_pic_wwcr(){
		$hasil	=	$this->db->query("
										SELECT a.id_personil, a.kd_personil, b.username, a.nama_personil, c.kd_personil_wwcr, c.id_peserta, c.nip, c.nama, c.tgl_psikometri, c.sesi, c.tgl_wwcr, c.id_reg
                                        FROM lembaga AS a INNER JOIN users AS b ON a.nip_personil = b.username INNER JOIN jadwal_peserta AS c ON a.kd_personil = c.kd_personil_wwcr
                                        WHERE b.group_id IN (11000002, 11000006) AND b.`status` LIKE 'on' AND c.ket LIKE 'Y' ORDER BY c.tgl_wwcr ASC
									");
		return $hasil;							
	}
	

	function get_peserta(){
		$hasil	=	$this->db->query(" 
                                        SELECT a.id_peserta, a.nama, a.nip, a.kd_personil_lgd, a.kd_personil_wwcr, a.ket FROM jadwal_peserta AS a WHERE a.ket LIKE 'Y'										
									");
		return $hasil;							
	}

	function data_peserta(){
		$hasil	=	$this->db->query(" 
									    SELECT a. id_peserta, b. nama, b. nip, b.gol, a.jenjang, b.jabatan, b. unker FROM data_peserta as a LEFT JOIN registrasi b on a.id_peserta = b.id_peserta WHERE b.ket LIKE 'Y'
									");
		return $hasil->result();	
	}
	
	function get_peserta_by_id($id_peserta){
		$hsl=$this->db->query("SELECT a.id_peserta, a.nama, a.nip, a.ket FROM registrasi AS a WHERE a.id_peserta ='$id_peserta'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
							'id_peserta' 	=> $data->id_peserta, 
							'nama' 			=> $data->nama, 
							'nip' 			=> $data->nip, 
							'ket'			=> $data->ket, 
					);
			}
		}
		return $hasil;
	}
	
	function update_jadwal($id_jadwal,$id_peserta,$nip,$nama,$tgl_psikometri,$sesi,$tgl_lgd,$kd_personil_lgd,$batch,$kelompok,$tgl_wwcr,$kd_personil_wwcr,$ket){
		$hasil=$this->db->query("UPDATE jadwal_peserta SET tgl_psikometri = '$tgl_psikometri', sesi = '$sesi', tgl_lgd = '$tgl_lgd', kd_personil_lgd = '$kd_personil_lgd', batch = '$batch', kelompok = '$kelompok', tgl_wwcr = '$tgl_wwcr', kd_personil_wwcr = '$kd_personil_wwcr', ket = '$ket' WHERE id_peserta ='$id_peserta'");
		return $hasil;
	}

	function lihat_apm_dua_row(){
		$hasil	=	$this->db->query("
										SELECT b.id_peserta, b.nama, a.nip, a. nilai, IF(a.nilai=0,'0',IF(a.nilai=1,'1-3',IF(a.nilai=2,'1-3',IF(a.nilai=3,'1-3',IF(a.nilai=4,'4-5',IF(a.nilai=5,'4-5',IF(a.nilai=6,'6-7',IF(a.nilai=7,'6-7',IF(a.nilai=8,'8-9',IF(a.nilai=9,'8-9',IF(a.nilai=10,'10-12',IF(a.nilai=11,'10-12',IF(a.nilai=12,'10-12',IF(a.nilai=13,'13-14',IF(a.nilai=14,'13-14',IF(a.nilai=15,'15-16',IF(a.nilai=16,'15-16',IF(a.nilai=17,'17-18',IF(a.nilai=18,'17-18',IF(a.nilai=19,'19-21',IF(a.nilai=20,'19-21',IF(a.nilai=21,'19-21',IF(a.nilai=22,'22-23',IF(a.nilai=23,'22-23',IF(a.nilai=24,'24-25',IF(a.nilai=25,'24-25',IF(a.nilai=26,'26-27',IF(a.nilai=27,'26-27',IF(a.nilai=28,'28-30',IF(a.nilai=29,'28-30',IF(a.nilai=30,'28-30',IF(a.nilai=31,'31-32',IF(a.nilai=32,'31-32',IF(a.nilai=33,'33-34',IF(a.nilai=34,'33-34',IF(a.nilai=35,'35-36',IF(a.nilai=36,'35-36','0'))))))))))))))))))))))))))))))))))))) AS rs,(SELECT IF(rs='0','3',IF(rs='1-3','4',IF(rs='4-5','5',IF(rs='6-7','6',IF(rs='8-9','7',IF(rs='10-12','8',IF(rs='13-14','9',IF(rs='15-16','10',IF(rs='17-18','11',IF(rs='19-21','12',IF(rs='22-23','13',IF(rs='24-25','14',IF(rs='26-27','15',IF(rs='28-30','16',IF(rs='31-32','17',IF(rs='33-34','18',IF(rs='35-36','19','0')))))))))))))))))) AS ss,(SELECT IF(ss='3','SK',IF(ss='4','SK',IF(ss='5','K',IF(ss='6','K',IF(ss='7','K',IF(ss='8','R',IF(ss='9','R',IF(ss='10','R',IF(ss='11','R',IF(ss='12','R',IF(ss='12','R',IF(ss='13','T',IF(ss='14','T',IF(ss='15','T',IF(ss='16','T','ST')))))))))))))))) AS ket
										FROM hasil_apm_dua as a INNER JOIN data_peserta as b on a.nip = b.nip WHERE a.ket = 'Y'
									");
		return $hasil;	
	}
	
	function lihat_cfit_row(){
		$hasil	=	$this->db->query("
										SELECT a.nip, a.nama, b.gol, a.jenjang, b.jabatan, b.unker, c.nilai_cfit_1, c.nilai_cfit_2, c.nilai_cfit_3, c.nilai_cfit_4, c.total_nilai_cfit, c.norma_iq, c.kategori FROM data_peserta AS a INNER JOIN registrasi AS b ON a.nip = b.nip INNER JOIN hasil_cfit AS c ON b.nip = c.nip WHERE c.ket LIKE 'Y'
									");
		return $hasil;	
	}
	
	
	
	function cetak_jadwal_peserta(){
		$hasil	=	$this->db->query("
										SELECT b.nip, b.nama, a.pangkat, a.jabatan, a.unker, b.tgl_psikometri, b.sesi, b.tgl_lgd, b.batch, b.kelompok, b.tgl_wwcr, b.ket 
										FROM data_peserta AS a INNER JOIN jadwal_peserta AS b ON a.id_peserta = b.id_peserta WHERE b.ket LIKE 'Y'
									");
		return $hasil->result();	
	}
	
	function cetak_jadwal_assessor(){
		$hasil	=	$this->db->query("
										SELECT a.nama, b.tgl_lgd, b.batch, b.kelompok, b.tgl_wwcr, d.nama_personil AS wwcr FROM data_peserta AS a
										INNER JOIN jadwal_peserta AS b ON a.id_peserta = b.id_peserta INNER JOIN lembaga AS d ON b.kd_personil_wwcr = d.kd_personil WHERE b.ket LIKE 'Y'									
									");
		return $hasil->result();	
	}
	
		

	
}