<?php
class M_kuisioner extends CI_Model{
	
	
	function __construct(){
		parent::__construct();
	}
	
///// KUISIONER

	function input_kuisi($data,$table){
		$this->db->insert($table,$data);
	} 
	
	function simpan_kuisi($id_kuisi_satu, $jabatan, $tgl_assessment, $kuisi_1, $kuisi_1_a, $kuisi_1_lain, $kuisi_2, $kuisi_2_a, $kuisi_2_lain, $kuisi_3, $kuisi_3_a, $kuisi_3_lain, $kuisi_4, $kuisi_4_a, $kuisi_4_lain, $kuisi_5, $kuisi_6, $kuisi_6_a, $kuisi_6_lain, $kuisi_7, $kuisi_7_a, $kuisi_7_lain, $kuisi_8, $kuisi_8_a, $kuisi_8_lain, $kuisi_9, $kuisi_9_a, $kuisi_9_lain, $kuisi_10, $kuisi_10_a, $kuisi_10_lain, $id_kuisi_dua, $kuisi_11, $kuisi_11_a, $kuisi_11_lain, $kuisi_12, $kuisi_12_a, $kuisi_12_lain, $kuisi_13, $kuisi_13_a, $kuisi_13_lain, $kuisi_14, $kuisi_14_a, $kuisi_14_lain, $kuisi_15, $kuisi_15_a, $kuisi_15_lain, $kuisi_16, $kuisi_16_a, $kuisi_16_lain, $kuisi_17, $kuisi_17_lain, $kuisi_18, $kuisi_18_lain, $kuisi_19, $kuisi_19_lain, $kuisi_20, $kuisi_21, $ket){
		$hasil=$this->db->query("INSERT INTO hasil_kuisi_satu (id_kuisi_satu, jabatan, tgl_assessment, kuisi_1, kuisi_1_a, kuisi_1_lain, kuisi_2, kuisi_2_a, kuisi_2_lain, kuisi_3, kuisi_3_a, kuisi_3_lain, kuisi_4, kuisi_4_a, kuisi_4_lain, kuisi_5, kuisi_6, kuisi_6_a, kuisi_6_lain, kuisi_7, kuisi_7_a, kuisi_7_lain, kuisi_8, kuisi_8_a, kuisi_8_lain, kuisi_9, kuisi_9_a, kuisi_9_lain, kuisi_10, kuisi_10_a, kuisi_10_lain, id_kuisi_dua, kuisi_11, kuisi_11_a, kuisi_11_lain, kuisi_12, kuisi_12_a, kuisi_12_lain, kuisi_13, kuisi_13_a, kuisi_13_lain, kuisi_14, kuisi_14_a, kuisi_14_lain, kuisi_15, kuisi_15_a, kuisi_15_lain, kuisi_16, kuisi_16_a, kuisi_16_lain, kuisi_17, kuisi_17_lain, kuisi_18, kuisi_18_lain, kuisi_19, kuisi_19_lain, kuisi_20, kuisi_21, ket)VALUES('$id_kuisi_satu', '$jabatan', '$tgl_assessment', '$kuisi_1', '$kuisi_1_a', '$kuisi_1_lain', '$kuisi_2', '$kuisi_2_a', '$kuisi_2_lain', '$kuisi_3', '$kuisi_3_a', '$kuisi_3_lain', '$kuisi_4', '$kuisi_4_a', '$kuisi_4_lain', '$kuisi_5', '$kuisi_6', '$kuisi_6_a', '$kuisi_6_lain', '$kuisi_7', '$kuisi_7_a', '$kuisi_7_lain', '$kuisi_8', '$kuisi_8_a', '$kuisi_8_lain', '$kuisi_9', '$kuisi_9_a', '$kuisi_9_lain', '$kuisi_10', '$kuisi_10_a', '$kuisi_10_lain', '$id_kuisi_dua', '$kuisi_11', '$kuisi_11_a', '$kuisi_11_lain', '$kuisi_12', '$kuisi_12_a', '$kuisi_12_lain', '$kuisi_13', '$kuisi_13_a', '$kuisi_13_lain', '$kuisi_14', '$kuisi_14_a', '$kuisi_14_lain', '$kuisi_15', '$kuisi_15_a', '$kuisi_15_lain', '$kuisi_16', '$kuisi_16_a', '$kuisi_16_lain', '$kuisi_17', '$kuisi_17_lain', '$kuisi_18', '$kuisi_18_lain', '$kuisi_19', '$kuisi_19_lain', '$kuisi_20', '$kuisi_21', '$ket')");
		return $hasil;
	}
	

		
}