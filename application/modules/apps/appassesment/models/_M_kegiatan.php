<?php
class M_kegiatan extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
//=======================================================================================================================
	function data_kegiatan(){
		$hasil	=	$this->db->query("SELECT * FROM kegiatan ORDER BY id_kegiatan DESC");
		return $hasil->result();	
	}
	
	function simpan_kegiatan($kd_kegiatan,$nama_kegiatan,$jenis_kegiatan,$instansi,$tgl_keg,$ket,$tahun,$link_doc){
		$hasil=$this->db->query("INSERT INTO kegiatan (kd_kegiatan, nama_kegiatan, jenis_kegiatan, instansi, tgl_keg, ket, tahun, link_doc)VALUES('$kd_kegiatan', '$nama_kegiatan', '$jenis_kegiatan', '$instansi', '$tgl_keg', '$ket', '$tahun', '$link_doc')");
		return $hasil;
	}
	
	function get_kegiatan_by_id($id_kegiatan){
		$hsl=$this->db->query("SELECT * FROM kegiatan WHERE id_kegiatan ='$id_kegiatan'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
							'id_kegiatan' 	=> $data->id_kegiatan, 
							'kd_kegiatan' 	=> $data->kd_kegiatan, 
							'nama_kegiatan' => $data->nama_kegiatan, 
							'jenis_kegiatan'=> $data->jenis_kegiatan, 
							'instansi' 	=> $data->instansi, 
							'tgl_keg' 	=> $data->tgl_keg,
							'ket' 		=> $data->ket,
							'tahun' 	=> $data->tahun,
							'link_doc' 	=> $data->link_doc, 
					);
			}
		}
		return $hasil;
	}
	

	function update_kegiatan($id_kegiatan,$kd_kegiatan,$nama_kegiatan,$jenis_kegiatan,$instansi,$tgl_keg,$ket,$tahun,$link_doc){
		$hasil=$this->db->query("UPDATE kegiatan SET kd_kegiatan = '$kd_kegiatan', nama_kegiatan = '$nama_kegiatan', jenis_kegiatan = '$jenis_kegiatan', instansi = '$instansi', tgl_keg = '$tgl_keg', ket = '$ket', tahun = '$tahun', link_doc = '$link_doc' WHERE id_kegiatan ='$id_kegiatan'");
		return $hasil;
	}



/*
	function update_kegiatan($id_kegiatan,$kd_kegiatan,$nama_kegiatan,$jenis_kegiatan,$instansi,$tgl_keg,$ket,$tahun,$link_doc){
		$hasil=$this->db->query("UPDATE kegiatan SET kd_kegiatan = '$kd_kegiatan', nama_kegiatan = '$nama_kegiatan', jenis_kegiatan = '$jenis_kegiatan', instansi = '$instansi', tgl_keg = '$tgl_keg', ket = '$ket', tahun = '$tahun', link_doc = '$link_doc' WHERE id_kegiatan ='$id_kegiatan'");
		return $hasil;
	}
*/

	function hapus_kegiatan($id_kegiatan){
		$hasil	=$this->db->query("DELETE FROM kegiatan WHERE id_kegiatan ='$id_kegiatan'");
		return $hasil;
	}
	
	function aktif_kegiatan(){
		$hasil	=$this->db->query("
									SELECT a.id_kegiatan, a.kd_kegiatan, a.nama_kegiatan, a.jenis_kegiatan,
									a.instansi, a.tgl_keg, a.ket, a.tahun FROM kegiatan AS a WHERE a.ket LIKE 'Y'
								");
		return $hasil;
	}
	
	
		
		
}