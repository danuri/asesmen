<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_importhasil extends CI_Model {
	function __construct(){
		parent::__construct();
	}
//////////////////////////////////////////////////////////////////////////////////

	function data_hasil(){
		$hasil	=	$this->db->query("SELECT * FROM hasil_lap");
		return $hasil->result();	
	}


	function insert($data){
		$insert = $this->db->insert_batch('hasil_lap', $data);
		if($insert){
			return true;
		}
	}
	function getData(){
		$this->db->select('*');
		return $this->db->get('hasil_lap')->result_array();
	}

}