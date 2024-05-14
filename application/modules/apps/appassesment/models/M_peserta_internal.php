<?php
class M_peserta_internal extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function data_pic2021(){
		$hasil	=	$this->db->query("SELECT a.kd_pic, a.pic, b.no_peserta, b.nama, b.jabatan, b.pelaksanaan, b.tgl_ujian FROM hasil_lap AS a INNER JOIN reff_peserta AS b ON a.id_peserta = b.id_peserta");
		return $hasil->result();	
	}
	
	
}