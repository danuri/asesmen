<?php
class M_external extends CI_Model{
	function __construct(){
		parent::__construct();
	}
//////////////////////////////////////////////////////////////////////////////////

	function data_external(){
		$hasil	=	$this->db->query("SELECT a.nama_kegiatan, a.ket_kegiatan, a.tgl_keg, b.* FROM kegiatan AS a INNER JOIN hasil_lap AS b ON a.kd_kegiatan = b.kd_kegiatan WHERE a.kd_kegiatan LIKE '02.%' ORDER BY a.kd_kegiatan DESC");
		return $hasil->result();	
	}
	
	function get_detail_by_id($id_hasil){
		$hsl=$this->db->query("SELECT a.*, b.* FROM kegiatan AS a INNER JOIN hasil_lap AS b ON a.kd_kegiatan = b.kd_kegiatan WHERE id_hasil ='$id_hasil'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
							'id_hasil' 		=> $data->id_hasil, 
							'kd_kegiatan' 	=> $data->kd_kegiatan, 
							'nama_kegiatan' => $data->nama_kegiatan, 
							'jenis_kegiatan'=> $data->jenis_kegiatan, 
							'ket_kegiatan' 	=> $data->ket_kegiatan, 
							'tgl_keg' 		=> $data->tgl_keg, 
							'kd_pic' 		=> $data->kd_pic,
							'pic' 			=> $data->pic,
							'nama' 			=> $data->nama,
							'nip' 			=> $data->nip,
							'jabatan' 		=> $data->jabatan,
							'kd_kategori' 	=> $data->kd_kategori,
							'da' 			=> $data->da,
							'lb' 			=> $data->lb,
							'sk' 			=> $data->sk,
							'ini' 			=> $data->ini,
							'dtk' 			=> $data->dtk,
							'kep' 			=> $data->kep,
							'db' 			=> $data->db,
							'tj' 			=> $data->tj,
							'ki' 			=> $data->ki,
							'kd' 			=> $data->kd,
							'se' 			=> $data->se,
							'nilai_pot' 	=> $data->nilai_pot,
							'percent_pot' 	=> $data->percent_pot,
							'int' 			=> $data->int,
							'ks' 			=> $data->ks,
							'kom' 			=> $data->kom,
							'oph' 			=> $data->oph,
							'pp' 			=> $data->pp,
							'pdo' 			=> $data->pdo,
							'mp' 			=> $data->mp,
							'pk' 			=> $data->pk,
							'pb' 			=> $data->pb,
							'nilai_kom' 	=> $data->nilai_kom,
							'percent_kom' 	=> $data->percent_kom,
							'total_percent' => $data->total_percent,
							'rekom' 		=> $data->rekom,
							'gp_1' 			=> $data->gp_1,
							'gp_2' 			=> $data->gp_2,
							'gp_3' 			=> $data->gp_3,
							'gp_4' 			=> $data->gp_4,
							'gp_5' 			=> $data->gp_5,
							'gp_6' 			=> $data->gp_6,
							'gp_7' 			=> $data->gp_7,
							'gp_8' 			=> $data->gp_8,
							'kek_1' 		=> $data->kek_1,
							'kek_2' 		=> $data->kek_2,
							'kek_3' 		=> $data->kek_3,
							'kek_4' 		=> $data->kek_4,
							'kek_5' 		=> $data->kek_5,
							'kek_6' 		=> $data->kek_6,
							'kek_7' 		=> $data->kek_7,
							'ap_1' 			=> $data->ap_1,
							'ap_2' 			=> $data->ap_2,
							'ap_3' 			=> $data->ap_3,
							'ap_4' 			=> $data->ap_4,
							'ap_5' 			=> $data->ap_5,
							'ap_6' 			=> $data->ap_6,
							'ap_7' 			=> $data->ap_7,
							'speng_1' 		=> $data->speng_1,
							'speng_2' 		=> $data->speng_2,
							'speng_3' 		=> $data->speng_3,
							'speng_4' 		=> $data->speng_4,
							'speng_5' 		=> $data->speng_5,
							'speng_6' 		=> $data->speng_6,
							'speng_7' 		=> $data->speng_7,
							'speng_8' 		=> $data->speng_8,
							'speng_9' 		=> $data->speng_9,
							'speng_10' 		=> $data->speng_10,
							'sp_1' 			=> $data->sp_1,
							'sp_2' 			=> $data->sp_2,
							'sp_3' 			=> $data->sp_3,
							'kd_kegiatan' 	=> $data->kd_kegiatan
							
							
							
							
					);
			}
		}
		return $hasil;
	}
	
}