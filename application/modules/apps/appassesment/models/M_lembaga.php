<?php
class M_lembaga extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
///// LEMBAGA

	function data_lembaga(){
		$hasil	=	$this->db->query("SELECT * FROM lembaga ORDER BY id_personil DESC");
		return $hasil->result();	
	}
	
	function simpan_lembaga($kd_personil,$nama_personil,$nip_personil,$pangkat,$jabatan){
		//$hasil=$this->db->query("INSERT INTO lembaga (id_personil, kd_personil, nama_personil, nip_personil, pangkat, jabatan)VALUES('$id_personil', '$kd_personil', '$nama_personil', '$nip_personil', '$pangkat', '$jabatan')");
		$hasil=$this->db->query("INSERT INTO lembaga (kd_personil, nama_personil, nip_personil, pangkat, jabatan)VALUES('$kd_personil', '$nama_personil', '$nip_personil', '$pangkat', '$jabatan')");
		return $hasil;
	}
	
	function get_lembaga_by_id($id_personil){
		$hsl=$this->db->query("SELECT * FROM lembaga WHERE id_personil ='$id_personil'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
							'id_personil' 	=> $data->id_personil, 
							'kd_personil' 	=> $data->kd_personil, 
							'nama_personil' => $data->nama_personil, 
							'nip_personil' 	=> $data->nip_personil, 
							'pangkat' 	=> $data->pangkat, 
							'jabatan' 	=> $data->jabatan,
					);
			}
		}
		return $hasil;
	}
	
	function update_lembaga($id_personil,$kd_personil,$nama_personil,$nip_personil,$pangkat,$jabatan){
		$hasil=$this->db->query("UPDATE lembaga SET kd_personil = '$kd_personil', nama_personil = '$nama_personil', nip_personil = '$nip_personil', pangkat = '$pangkat', jabatan = '$jabatan' WHERE id_personil ='$id_personil'");
		return $hasil;
	}

	function hapus_lembaga($id_personil){
		$hasil	=$this->db->query("DELETE FROM lembaga WHERE id_personil ='$id_personil'");
		return $hasil;
	}
		
///// END OF LEMBAGA
		
}