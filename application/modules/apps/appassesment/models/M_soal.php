<?php
class M_soal extends CI_Model{
	function __construct(){
		parent::__construct();
	}
		
///// SOAL PAPI

	function soal_papi(){
		$hasil	=	$this->db->query("SELECT * FROM soal_papi");
		return $hasil->result();	
	}
	
	function simpan_papi($id_papi,$soal_papi_a,$soal_papi_b){
		$hasil=$this->db->query("INSERT INTO soal_papi (id_papi, soal_papi_a, soal_papi_b)VALUES('$id_papi', '$soal_papi_a', '$soal_papi_b')");
		return $hasil;
	}
	
	function get_papi_by_id($id_papi){
		$hsl=$this->db->query("SELECT * FROM soal_papi WHERE id_papi ='$id_papi'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
							'id_papi' 		=> $data->id_papi, 
							'soal_papi_a' 	=> $data->soal_papi_a, 
							'soal_papi_b' 	=> $data->soal_papi_b, 
					);
			}
		}
		return $hasil;
	}
	
	function update_papi($id_papi,$soal_papi_a,$soal_papi_b){
		$hasil=$this->db->query("UPDATE soal_papi SET soal_papi_a = '$soal_papi_a', soal_papi_b = '$soal_papi_b' WHERE id_papi ='$id_papi'");
		return $hasil;
	}

	function hapus_papi($id_papi){
		$hasil	=$this->db->query("DELETE FROM soal_papi WHERE id_papi ='$id_papi'");
		return $hasil;
	}
		
///// END OF SOAL PAPI

///// SJT

	function soal_sjt(){
		$hasil	=	$this->db->query("SELECT * FROM soal_sjt");
		return $hasil->result();	
	}
	
	function simpan_sjt($id_sjt,$id_materi,$soal_sjt,$opsi_a,$opsi_b,$opsi_c,$opsi_d,$opsi_e,$nilai_a,$nilai_b,$nilai_c,$nilai_d,$nilai_e){
		$hasil=$this->db->query("INSERT INTO soal_sjt (id_sjt, id_materi, soal_sjt, opsi_a, opsi_b, opsi_c, opsi_d, opsi_e, nilai_a, nilai_b, nilai_c, nilai_d, nilai_e)VALUES('$id_sjt', '$id_materi', '$soal_sjt', '$opsi_a', '$opsi_b', '$opsi_c', '$opsi_d', '$opsi_e', '$nilai_a', '$nilai_b', '$nilai_c', '$nilai_d', '$nilai_e')");
		return $hasil;
	}
	
	function get_sjt_by_id($id_sjt){
		$hsl=$this->db->query("SELECT * FROM soal_sjt WHERE id_sjt ='$id_sjt'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
							'id_sjt' 	=> $data->id_sjt, 
							'id_materi' => $data->id_materi, 
							'soal_sjt' 	=> $data->soal_sjt, 
							'opsi_a' 	=> $data->opsi_a, 
							'opsi_b' 	=> $data->opsi_b, 
							'opsi_c' 	=> $data->opsi_c, 
							'opsi_d' 	=> $data->opsi_d, 
							'opsi_e' 	=> $data->opsi_e, 
							'nilai_a' 	=> $data->nilai_a, 
							'nilai_b' 	=> $data->nilai_b, 
							'nilai_c' 	=> $data->nilai_c, 
							'nilai_d' 	=> $data->nilai_d, 
							'nilai_e' 	=> $data->nilai_e, 
					);
			}
		}
		return $hasil;
	}
	
	function update_sjt($id_sjt,$id_materi,$soal_sjt,$opsi_a,$opsi_b,$opsi_c,$opsi_d,$opsi_e,$nilai_a,$nilai_b,$nilai_c,$nilai_d,$nilai_e){
		$hasil=$this->db->query("UPDATE soal_papi SET id_materi = '$id_materi', soal_sjt = '$soal_sjt', opsi_a = '$opsi_a', opsi_b = '$opsi_b', opsi_c = '$opsi_c', opsi_d = '$opsi_d', opsi_e = '$opsi_e', nilai_a = '$nilai_a', nilai_b = '$nilai_b', nilai_c = '$nilai_c', nilai_d = '$nilai_d', nilai_e = '$nilai_e' WHERE id_sjt ='$id_sjt'");
		return $hasil;
	}

	function hapus_sjt($id_sjt){
		$hasil	=$this->db->query("DELETE FROM soal_sjt WHERE id_sjt ='$id_sjt'");
		return $hasil;
	}
		
///// END OF SJT

///// SOAL ANKAS

	function soal_ankas(){
		$hasil	=	$this->db->query("SELECT a.id_ankas,a.id_materi, SUBSTRING(a.wacana ,1,400) as wacana, a.tanya_ankas1, a.tanya_ankas2, a.tanya_ankas3, a.tanya_ankas4, a.digunakan, a.ket, a.last_update from soal_ankas as a ORDER BY a.id_ankas DESC");
		return $hasil->result();	
	}
	
	function detail_soal_ankas($id_ankas){
		$hasil	=	$this->db->query("SELECT * FROM soal_ankas where id_ankas = '$id_ankas'");
		return $hasil;	
	}
	
	function simpan_ankas($id_materi,$wacana,$tanya_ankas1,$tanya_ankas2,$tanya_ankas3,$tanya_ankas4,$digunakan,$ket){
		$hasil=$this->db->query("INSERT INTO soal_ankas (id_materi, wacana, tanya_ankas1, tanya_ankas2, tanya_ankas3, tanya_ankas4, digunakan, ket)VALUES('$id_materi', '$wacana', '$tanya_ankas1', '$tanya_ankas2', '$tanya_ankas3', '$tanya_ankas4', '$digunakan', '$ket')");
		return $hasil;
	}
	
	function get_ankas_by_id($id_ankas){
		$hsl=$this->db->query("SELECT * FROM soal_ankas WHERE id_ankas ='$id_ankas'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
							'id_ankas' 		=> $data->id_ankas, 
							'id_materi' 	=> $data->id_materi, 
							'wacana' 		=> $data->wacana, 
							'tanya_ankas1' 	=> $data->tanya_ankas1, 
							'tanya_ankas2' 	=> $data->tanya_ankas2, 
							'tanya_ankas3' 	=> $data->tanya_ankas3,
							'tanya_ankas4' 	=> $data->tanya_ankas4,
							'digunakan' 	=> $data->digunakan,
							'ket' 	        => $data->ket,
					);
			}
		}
		return $hasil;
	}
	
	function update_ankas($id_ankas,$id_materi,$wacana,$tanya_ankas1,$tanya_ankas2,$tanya_ankas3,$tanya_ankas4,$digunakan,$ket){
		$hasil=$this->db->query("UPDATE soal_ankas SET id_materi = '$id_materi', wacana = '$wacana', tanya_ankas1 = '$tanya_ankas1', tanya_ankas2 = '$tanya_ankas2', tanya_ankas3 = '$tanya_ankas3', tanya_ankas4 = '$tanya_ankas4', digunakan = '$digunakan', ket = '$ket'  WHERE id_ankas ='$id_ankas'");
		return $hasil;
	}

	function hapus_ankas($id_ankas){
		$hasil	=$this->db->query("DELETE FROM soal_ankas WHERE id_ankas ='$id_ankas'");
		return $hasil;
	}
		
///// END OF SOAL ANKAS

		
}