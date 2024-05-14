<?php
class M_materi extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
///// MATERI

	function data_materi(){
		$hasil	=	$this->db->query("SELECT * FROM materi");
		return $hasil->result();	
	}
	
	function simpan_materi($id_materi,$nama_materi,$jml_soal,$status_materi){
		$hasil=$this->db->query("INSERT INTO materi (id_materi, nama_materi, jml_soal, status_materi)VALUES('$id_materi', '$nama_materi', '$jml_soal', '$status_materi')");
		return $hasil;
	}
	
	function get_materi_by_id($id_materi){
		$hsl=$this->db->query("SELECT * FROM materi WHERE id_materi ='$id_materi'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
							'id_materi' 		=> $data->id_materi, 
							'nama_materi' 		=> $data->nama_materi, 
							'jml_soal' 			=> $data->jml_soal, 
							'status_materi' 	=> $data->status_materi, 
					);
			}
		}
		return $hasil;
	}
	
	function update_materi($id_materi,$nama_materi,$jml_soal,$status_materi){
		$hasil=$this->db->query("UPDATE materi SET nama_materi = '$nama_materi', jml_soal = '$jml_soal', status_materi = '$status_materi' WHERE id_materi ='$id_materi'");
		return $hasil;
	}

	function hapus_materi($id_materi){
		$hasil	=$this->db->query("DELETE FROM materi WHERE id_materi ='$id_materi'");
		return $hasil;
	}
		
///// END OF MATERI
		
}