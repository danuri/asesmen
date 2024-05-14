<?php
class M_simasn extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->db3 = $this->load->database('db_tiga',TRUE);
	}
	
///// SIMASN

	function data_simasn(){
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
	}
			
///// END OF SIMASN
		
}