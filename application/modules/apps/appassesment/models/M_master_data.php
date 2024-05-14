<?php
class M_master_data extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
//==============================================================================================================================
	function data_master_peserta(){
		$hasil	=	$this->db->query("
										SELECT b.id_peserta, a.id_kegiatan, a.kd_kegiatan,b.nip, b.nama, b.gol,  a.jenjang, a.jabatan, a.unker,
                                        a.jenjang, b.ket, a.tahun, a.last_update FROM data_peserta AS a INNER JOIN registrasi AS b on a.id_peserta = b.id_peserta ORDER BY a.id_peserta DESC
									");
		return $hasil->result();	
	}
	
	function get_peserta_by_id($nip){
		$hsl=$this->db->query("SELECT b.id_peserta, a.id_kegiatan, a.kd_kegiatan, b.nama, b.nip, b.gol, a.jenjang, a.jabatan, a.unker, b.ket, a.tahun FROM data_peserta AS a INNER JOIN registrasi AS b ON b.id_peserta = a.id_peserta WHERE b.nip ='$nip'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
							'id_peserta' 	=> $data->id_peserta, 
							'id_kegiatan' 	=> $data->id_kegiatan, 
							'kd_kegiatan' 	=> $data->kd_kegiatan, 
							'nama' 			=> $data->nama, 
							'nip'			=> $data->nip, 
							'gol' 		    => $data->gol,
							'jenjang' 		=> $data->jenjang,
							'jabatan' 		=> $data->jabatan,
							'unker' 		=> $data->unker,
							'ket' 			=> $data->ket, 
							'tahun' 		=> $data->tahun, 
					);
			}
		}
		return $hasil;
	}

/*	DATA PESERTA
	function update_peserta($id_peserta, $id_kegiatan, $kd_kegiatan, $nip,$nama, $pangkat, $jabatan, $unker, $jenjang, $ket, $tahun){
		$hasil=$this->db->query("UPDATE data_peserta SET jenjang = '$jenjang', ket = '$ket' WHERE id_peserta ='$id_peserta'");
		return $hasil;
	}
*/

/*  REGISTRASI  */
	function update_peserta($nip,$ket){
		$hasil=$this->db->query("UPDATE registrasi SET ket = '$ket' WHERE nip ='$nip'");
		return $hasil;
	}

	

//==============================================================================================================================
	
}