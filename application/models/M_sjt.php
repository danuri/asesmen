<?php
class M_sjt extends CI_Model{
	
	//private $user_table = 'registrasi';
	
	function __construct(){
		parent::__construct();
		$this->db	= $this->load->database('default',TRUE);
		$this->db3 	= $this->load->database('db_tiga',TRUE);
	}
	
///// SJT

	public function data(){
	/*	
		$hasil	=	$this->db3->query("SELECT
										CONCAT(a.gelar_nonakademis,' ',a.gelar_depan,' ',a.nama_pegawai,', ',a.gelar_belakang) as nama,
										(SELECT REPLACE(nama, '-','')) AS nama_asn,
										(SELECT TRIM(BOTH ' ' FROM nama_asn)) as nama_pegawai,
										a.nip_baru,
										CONCAT(a.nama_pangkat,', ',a.nama_golongan) as pangkat,
										a.nomenklatur_jabatan,
										a.nomenklatur_pada,
										a.nama_ese,
										a.kode_unor
										FROM
										r_pegawai_aktual AS a
										WHERE
										a.jab_type NOT LIKE '%jft-guru%'
										ORDER BY a.kode_golongan desc 
									");
		return $hasil->result();	
	*/	
		
	  return $this->db->get('r_pegawai_default')->result();
	}

	public function cari($keyword){
	  $this->db3->like('nama_pegawai', $keyword)->or_like('nip_baru', $keyword); //mencari data yang serupa dengan keyword
	  return $this->db3->get('r_pegawai_aktual')->result();
	}
	
	function data_sjt(){
		$sjt	=	$this->db->query("SELECT * FROM soal_sjt LIMIT 3" );
		return $sjt;	
	}
			
///// END OF SJT

		
}