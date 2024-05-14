<?php
class M_wawancara extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
///// 

	function data_wawancara(){
		$hasil	=	$this->db->query("
										SELECT a.id_peserta, a.id_kegiatan, a.nip, a.nama, c.id_personil, c.kd_personil, c.nama_personil, b.kd_personil_lgd, b.kelompok_lgd,
										b.tgl_lgd, b.jam_lgd, b.kd_personil_wwcr, b.tgl_wwcr, b.jam_wwcr, b.ket FROM data_peserta AS a INNER JOIN wwcr AS b ON a.id_peserta = b.id_peserta 
										INNER JOIN lembaga AS c ON b.kd_personil_wwcr = c.kd_personil WHERE b.ket LIKE 'Y' ORDER BY c.kd_personil ASC
										
									");
		return $hasil->result();	
	}
	
		
}