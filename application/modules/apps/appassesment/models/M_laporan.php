<?php
class M_laporan extends CI_Model{
	function __construct(){
		parent::__construct();
	}
//////////////////////////////////////////////////////////////////////////////////
	function tampil_data_wwcr(){
		$hasil	=	$this->db->query("SELECT * FROM t_wawancara");
		return $hasil->result();	
	}	
	function input_ankas($data,$table){
		$this->db->insert($table,$data);
	}
	function input_qkom($data,$table){
		$this->db->insert($table,$data);
	}
	function input_ci($data,$table){
		$this->db->insert($table,$data);
	}
	  
	public function cetak_ankas_row($id){
	$this->db->select('*');
    $this->db->from('tr_ikut_ujian_ankas');
    $this->db->where('tr_ikut_ujian_ankas.id_ankas', $id); 
	return $this->db->get()->result();
  
  }
  
	public function cetak_ci_row($id){
	$this->db->select('*');
    $this->db->from('tr_ikut_ujian_ci');
    $this->db->where('tr_ikut_ujian_ci.id', $id); 
	return $this->db->get()->result();
  
  }
  
	public function cetak_qkom_row($id){
	$this->db->select('*');
    $this->db->from('tr_ikut_ujian_qkom');
    $this->db->where('tr_ikut_ujian_qkom.id', $id); 
	return $this->db->get()->result();
  
  }
  
  ///////////////////////////// daftar riwayat hidup ///////////////////////////////////////////
  
	function tampil_data2(){
		return $this->db->get('reff_data');
	}
	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	} 
	
	public function cetak_drh_row($id){
	$this->db->select('*');
    $this->db->from('reff_data');
    $this->db->where('reff_data.id', $id); 
	return $this->db->get()->result();
  
   }
   
	public function wwcr_row($id){
	$this->db->select('*');
    $this->db->from('reff_wawancara');
    $this->db->where('reff_wawancara.id_peserta', $id); 
	return $this->db->get()->result();
  
   }
	
	public function import_data(){
		$hasil = $this->db->query("INSERT INTO m_siswa (nama, no_peserta, jabatan) SELECT nama, no_peserta, jabatan FROM reff_data");
	}
	
	public function import_ci(){
		$hasil = $this->db->query("INSERT INTO tr_ikut_ujian_ci (nama_peserta, no_peserta, s1_topik, s1_tmt, s1_tst, s1_3, s1_4, s1_5, s1_6, s1_7, s1_8, s2_topik, s2_tmt, s2_tst, s2_3, s2_4, s2_5, s2_6, s2_7, s2_8, tgl_tes) SELECT nama, no_peserta, s1_topik, s1_tmt, s1_tst, s1_3, s1_4, s1_5, s1_6, s1_7, s1_8, s2_topik, s2_tmt, s2_tst, s2_3, s2_4, s2_5, s2_6, s2_7, s2_8, tanggal FROM reff_data");
	}
	
	public function import_qkom(){
		$hasil = $this->db->query("INSERT INTO tr_ikut_ujian_qkom (nama_peserta, no_peserta, jwb1, jwb2, jwb3, jwb4, jwb5, jwb6, jwb7, jwb8, jwb9, jwb10, jwb11, jwb12, jwb13, jwb14, jwb15, jwb16, jwb17, tgl_tes) SELECT nama, no_peserta, jwb1, jwb2, jwb3, jwb4, jwb5, jwb6, jwb7, jwb8, jwb9, jwb10, jwb11, jwb12, jwb13, jwb14, jwb15, jwb16, jwb17, tanggal FROM reff_data");
	}
	
	public function truncate_ankas(){
		$hasil = $this->db->query("TRUNCATE TABLE tr_ikut_ujian_ankas");
	}
	
	public function truncate_ci(){
		$hasil = $this->db->query("TRUNCATE TABLE tr_ikut_ujian_ci");
	}
	
	public function truncate_qkom(){
		$hasil = $this->db->query("TRUNCATE TABLE tr_ikut_ujian_qkom");
	}
	
	public function truncate_tr_ikut_ujian(){
		$hasil = $this->db->query("TRUNCATE TABLE tr_ikut_ujian");
	}
	
	public function truncate_m_siswa(){
		$hasil = $this->db->query("TRUNCATE TABLE m_siswa");
	}
	
	public function truncate_drh(){
		$hasil = $this->db->query("TRUNCATE TABLE reff_data");
	}
	
	function input_wwcr($data,$table){
		$this->db->insert($table,$data);
	}

}