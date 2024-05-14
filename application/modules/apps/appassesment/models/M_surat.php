<?php
class M_surat extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
///// SURAT KELUAR

	function data_surat_keluar(){
		$hasil	=	$this->db->query("SELECT a.nama_kegiatan, a.tgl_keg, b.id_kegiatan, b.kd_kegiatan, b.nmr_srt_keluar, b.tgl_srt_keluar, b.tujuan_srt_keluar, b.redaksi_srt_keluar FROM kegiatan AS a INNER JOIN data_surat_keluar AS b ON a.id_kegiatan = b.id_kegiatan");
		return $hasil->result();	
	}
	
	function simpan_surat_keluar($id_surat_keluar,$id_kegiatan,$kd_kegiatan,$nmr_srt_keluar,$tgl_srt_keluar,$tujuan_srt_keluar,$redaksi_srt_keluar){
		$hasil=$this->db->query("INSERT INTO data_surat_keluar (id_surat_keluar, id_kegiatan, kd_kegiatan, nmr_srt_keluar, tgl_srt_keluar, tujuan_srt_keluar, redaksi_srt_keluar)VALUES('$id_surat_keluar', '$id_kegiatan', '$kd_kegiatan', '$nmr_srt_keluar', '$tgl_srt_keluar', '$tujuan_srt_keluar', '$redaksi_srt_keluar')");
		return $hasil;
	}
	
	function get_surat_keluar_by_id($id_surat_keluar){
		$hsl=$this->db->query("SELECT a.nama_kegiatan, a.tgl_keg, b.kd_kegiatan, b.nmr_srt_keluar, b.tgl_srt_keluar, b.tujuan_srt_keluar, b.redaksi_srt_keluar FROM kegiatan AS a INNER JOIN data_surat_keluar AS b ON a.id_kegiatan = b.id_kegiatan WHERE id_surat_keluar ='$id_surat_keluar'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
							'id_surat_keluar' 	=> $data->id_surat_keluar, 
							'nama_kegiatan' 	=> $data->nama_kegiatan, 
							'kd_kegiatan' 		=> $data->kd_kegiatan, 
							'tgl_keg' 			=> $data->tgl_keg, 
							'tgl_srt_keluar' 	=> $data->tgl_srt_keluar, 
							'tujuan_srt_keluar'	=> $data->tujuan_srt_keluar, 
							'redaksi_srt_keluar'=> $data->redaksi_srt_keluar,
					);
			}
		}
		return $hasil;
	}
	
	function update_surat_keluar($id_surat_keluar,$id_kegiatan,$kd_kegiatan,$nmr_srt_keluar,$tgl_srt_keluar,$tujuan_srt_keluar,$redaksi_srt_keluar){
		$hasil=$this->db->query("UPDATE data_surat_keluar SET nmr_srt_keluar = '$nmr_srt_keluar', tgl_srt_keluar = '$tgl_srt_keluar', tujuan_srt_keluar = '$tujuan_srt_keluar', redaksi_srt_keluar = '$redaksi_srt_keluar' WHERE id_surat_keluar ='$id_surat_keluar'");
		return $hasil;
	}

	function hapus_surat_keluar($id_surat_keluar){
		$hasil	=$this->db->query("DELETE FROM data_surat_keluar WHERE id_surat_keluar ='$id_surat_keluar'");
		return $hasil;
	}
		
///// END OF SURAT KELUAR
		
}