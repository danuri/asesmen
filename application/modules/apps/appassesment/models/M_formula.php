<?php
class M_formula extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
/*========================================================*/	

	function get_potensi(){
		$hasil	=	$this->db->query(" SELECT a.* FROM reff_kompetensi AS a WHERE a.kd_level = '01.01' ORDER BY a.id_reff_kompetensi ASC ");
		return $hasil->result();
	}
	
//================================== level 4

	function get_level4(){
		$hasil	=	$this->db->query(" SELECT a.* FROM reff_kompetensi AS a WHERE a.kd_level = '02.04' ORDER BY a.id_reff_kompetensi ASC ");
		return $hasil->result();
	}
		
//================================== level 3

	function get_level3(){
		$hasil	=	$this->db->query(" SELECT a.* FROM reff_kompetensi AS a WHERE a.kd_level = '02.03' ORDER BY a.id_reff_kompetensi ASC ");
		return $hasil->result();
	}
	
//================================== level 2

	function get_level2(){
		$hasil	=	$this->db->query(" SELECT a.* FROM reff_kompetensi AS a WHERE a.kd_level = '02.02' ORDER BY a.id_reff_kompetensi ASC ");
		return $hasil->result();
	}
//================================== level 1
	
	function get_level1(){
		$hasil	=	$this->db->query(" SELECT a.* FROM reff_kompetensi AS a WHERE a.kd_level = '02.01' ORDER BY a.id_reff_kompetensi ASC ");
		return $hasil->result();
	}
	
//================================== fungsi bersama
	function simpan_reff_kompetensi($data,$table){
		$this->db->insert($table,$data);
	} 
	
	function get_level_by_id($id_reff_kompetensi){
		$hsl=$this->db->query("SELECT a.* FROM reff_kompetensi AS a WHERE a.id_reff_kompetensi ='$id_reff_kompetensi'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
							'id_reff_kompetensi' 	=> $data->id_reff_kompetensi, 
							'kd_level' 				=> $data->kd_level, 
							'nama_level'			=> $data->nama_level, 
							'kompetensi'			=> $data->kompetensi, 
							'bobot_lgd' 			=> $data->bobot_lgd, 
							'bobot_ankas' 			=> $data->bobot_ankas, 
							'bobot_pw' 				=> $data->bobot_pw, 
							'bobot_bei' 			=> $data->bobot_bei, 
					);
			}
		}
		return $hasil;
	}
		
	function update_level($id_reff_kompetensi,$kd_level,$nama_level,$kompetensi,$bobot_lgd,$bobot_ankas,$bobot_pw,$bobot_bei){
		$hasil=$this->db->query("UPDATE reff_kompetensi SET kd_level = '$kd_level', nama_level = '$nama_level', kompetensi = '$kompetensi', bobot_lgd = '$bobot_lgd', bobot_ankas = '$bobot_ankas', bobot_pw = '$bobot_pw', bobot_bei = '$bobot_bei' WHERE id_reff_kompetensi ='$id_reff_kompetensi'");
		return $hasil;
	}

	function hapus_level($id_reff_kompetensi){
		$hasil	=$this->db->query("DELETE FROM reff_kompetensi WHERE id_reff_kompetensi ='$id_reff_kompetensi'");
		return $hasil;
	}
		

	
}