<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_importpeserta extends CI_Model {
	function __construct(){
		parent::__construct();
	}
//////////////////////////////////////////////////////////////////////////////////
	function insert($data){
		$insert = $this->db->insert_batch('data_peserta', $data);
		if($insert){
			return true;
		}
	}
	function aktivasi($data){
		$aktivasi = $this->db->insert_batch('users', $data);
		if($aktivasi){
			return true;
		}
	}
	function getData(){
		$this->db->select('*');
		return $this->db->get('data_peserta')->result_array();
	}

	function data_hasil(){
		$hasil	=	$this->db->query("SELECT * FROM data_peserta ORDER BY id_peserta DESC");
		return $hasil->result();	
	}
/*	
	function simpan_peserta($id_kegiatan,$kd_kegiatan,$nip,$nama,$pangkat,$jabatan,$unker,$jenjang,$tahun,$ket){
		$hasil=$this->db->query("INSERT INTO data_peserta (id_kegiatan,kd_kegiatan,nip,nama,pangkat,jabatan,unker,jenjang,tahun,ket)VALUES('$id_kegiatan', '$kd_kegiatan', '$nip', '$nama', '$pangkat', '$jabatan', '$unker', '$jenjang', '$tahun', '$ket')");
		return $hasil;
	}
*/	
	function get_peserta_by_id($id_peserta){
		$hsl=$this->db->query("SELECT * FROM data_peserta WHERE id_peserta = $id_peserta");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
							'id_peserta' 	=> $data->id_peserta, 
							'id_kegiatan' 	=> $data->nip, 
							'kd_kegiatan' 	=> $data->nip, 
							'nip' 			=> $data->nip, 
							'nama' 			=> $data->nama, 
							'pangkat' 		=> $data->pangkat, 
							'jabatan' 		=> $data->jabatan, 
							'unker' 		=> $data->unker, 
							'jenjang' 		=> $data->jenjang, 
							'ket' 			=> $data->ket, 
							'tahun' 		=> $data->tahun, 
					);
			}
		}
		return $hasil;
	}
	
	function update_peserta($id_peserta,$id_kegiatan,$kd_kegiatan,$nip,$nama,$pangkat,$jabatan,$unker,$jenjang,$ket,$tahun){
		$hasil=$this->db->query("UPDATE data_peserta SET nip = '$nip', id_kegiatan = '$id_kegiatan', kd_kegiatan = '$kd_kegiatan', nip = '$nip', nama = '$nama', pangkat = '$pangkat', jabatan = '$jabatan', unker = '$unker', jenjang = '$jenjang' WHERE id_peserta ='$id_peserta'");
		return $hasil;
	}

	
	function hapus_peserta($id_peserta){
		$hasil	=$this->db->query("DELETE FROM data_peserta WHERE id_peserta ='$id_peserta'");
		return $hasil;
	}
	
	function simpan_peserta($data,$table){
		$this->db->insert($table,$data);
	} 

	function simpan_apm2($data,$table){
		$this->db->insert($table,$data);
	} 

	function simpan_papi($data,$table){
		$this->db->insert($table,$data);
	} 

	function input_user($data,$table){
		$this->db->insert($table,$data);
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
		$result = $hasil->result_array();							
		return $result;	
    }
	
	
	
	
}