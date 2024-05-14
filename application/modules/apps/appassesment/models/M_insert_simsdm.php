<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_insert_simsdm extends CI_Model {
	function __construct(){
		parent::__construct();
	}
//////////////////////////////////////////////////////////////////////////////////
	function aktivasi($data){
		$aktivasi = $this->db->insert_batch('users', $data);
		if($aktivasi){
			return true;
		}
	}

    function data_simsdm(){
		$hasil	=	$this->db->query("SELECT DISTINCT
									a.id_peg_simsdm AS id_peg_simsdm,a.nip AS nip,a.nama AS nama,a.nama_jabatan AS nama_jabatan,
									a.jenis_jabatan AS jenis_jabatan,a.tmt_jabatan AS tmt_jabatan,a.pangkat AS pangkat,a.tmt_pangkat AS tmt_pangkat,
									a.biro AS biro,a.status_pegawai AS status_pegawai,
									(select IF((a.nama_jabatan like '%Ahli Madya%'),'JF Madya',IF((a.nama_jabatan like '%Ahli Muda%'),'JF Muda',
									IF((a.nama_jabatan like '%Ahli Pertama%'),'JF Pertama',IF((a.nama_jabatan like '%Penyelia%'),'JF Terampil',
									IF((a.nama_jabatan like '%Mahir%'),'JF Terampil',IF(((a.nama_jabatan like '%Kepala Subbagian %') OR (a.nama_jabatan like '%Kepala Sub Bagian%')),'Pengawas',
									IF((a.nama_jabatan like '%Kepala Subbagian %'),'Pengawas',IF((a.nama_jabatan like '%Terampil%'),'JF Terampil',
									IF(((a.nama_jabatan like '%Direktur %') OR (a.nama_jabatan like '%Sekretaris Utama%')),'JPT Madya',
									IF(((a.nama_jabatan like '%Kepala Biro%') OR (a.nama_jabatan like '%Sekretaris%') OR (a.nama_jabatan like '%Kepala Perwakilan%')),'JPT Pratama',
									IF(((a.nama_jabatan like '%Kepala Bagian%') OR (a.nama_jabatan like '%Kepala UPT%') OR (a.nama_jabatan like '%Sekretaris Badan%')),'Administratror','Pelaksana')))))))))))) AS jenjang,
									(SELECT IF( a.nip IN (b.nip) ,'sudah',IF(a.nip IN (c.nip),'sudah','belum'))) AS ukom 
									FROM 
									data_simsdm a 
									LEFT JOIN registrasi b on a.nip = b.nip
									LEFT JOIN data_hasil_sjt c on a.nip = c.nip
									ORDER BY (SELECT ukom) desc
									");
		$result = $hasil->result_array();							
		return $result;	
    }
	
    function hasil_insert(){
		$hasil	=	$this->db->query("
									SELECT 
									a.*
									FROM data_peserta a
									WHERE a.ket LIKE 'Y'
									ORDER BY a.id_peserta DESC
									");
		return $hasil;	
    }
	
	function simpan_insert_simsdm($id_kegiatan,$kd_kegiatan,$nip,$nama,$pangkat,$jabatan,$unker,$jenjang,$tahun,$ket){
		$hasil=$this->db->query("INSERT INTO data_peserta (id_peserta, id_kegiatan, kd_kegiatan, nip, nama, pangkat, jabatan, unker, jenjang, tahun, ket)VALUES('$id_peserta','$id_kegiatan','$kd_kegiatan','$nip','$nama','$pangkat','$jabatan','$unker','$jenjang','$tahun','$ket')");
		return $hasil;
	}
	
    function insert_peserta_simsdm($nip){
		$hasil	=	$this->db->query("
									INSERT INTO data_peserta (id_kegiatan, kd_kegiatan, nip, nama, pangkat, jabatan, unker, jenjang, tahun, ket)
									SELECT 
									b.id_kegiatan, b.kd_kegiatan, a.nip, a.nama, a.pangkat, a.nama_jabatan, a.biro, a.jenjang, b.tahun, b.ket
									FROM
									v_simsdm a,
									kegiatan b
									WHERE a.nip = '$nip' AND b.ket LIKE 'Y'
									");
		return $hasil;	
    }
	
	function cetak_insert(){
	$hasil	=	$this->db->query(" SELECT a.*, b.*
									FROM data_peserta a
									INNER JOIN kegiatan b ON a.id_kegiatan = b.id_kegiatan
									WHERE
									b.ket LIKE 'Y'
									ORDER BY id_peserta DESC
								");
	return $hasil->result();	
  
	}
		
	
	
}