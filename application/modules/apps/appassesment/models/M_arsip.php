<?php
class M_arsip extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
//=======================================================================================================================
	function data_arsip(){
		$hasil	=	$this->db->query("SELECT * FROM link_arsip ORDER BY id_link_arsip DESC");
		return $hasil;	
	}
	
	function dokumen_arsip($id_link_arsip){
		$hasil	=	$this->db->query("SELECT a.id_konten, a.link as folder, a.judul_appe, b.judul_arsip, b.path_folder FROM konten_appe as a LEFT JOIN link_arsip AS b on a.id_konten = b. id_konten WHERE b.id_link_arsip = '$id_link_arsip'");
		return $hasil;	
	}
	
	function simpan_arsip($id_link_arsip,$id_konten,$judul_arsip,$path_folder,$tahun){
		$hasil=$this->db->query("INSERT INTO link_arsip (id_link_arsip, id_konten, judul_arsip, path_folder, tahun)VALUES('$id_link_arsip', '$id_konten', '$judul_arsip', '$path_folder', '$tahun')");
		return $hasil;
	}
	
	function hapus_arsip($id_link_arsip){
		$hasil	=$this->db->query("DELETE FROM link_arsip WHERE id_link_arsip ='$id_link_arsip'");
		return $hasil;
	}
	
	
		
}