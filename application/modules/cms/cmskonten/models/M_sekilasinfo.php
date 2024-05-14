<?php
class M_sekilasinfo extends CI_Model{
	function __construct(){
		parent::__construct();
		$sess = $this->session->userdata('logged_in');
		$this->id_user = $sess['id_user'];
	}
//////////////////////////////////////////////////////////////////////////////////
    function tambah_aksi($isi){
		$this->db->set('judul_appe',$isi['judul']);
		$this->db->set('tipe','sekilasinfo');
		$this->db->set('keterangan_appe',$isi['isi']);
		$this->db->set('link',$isi['link']);
		$this->db->set('last_updated',"NOW()",false);
		$this->db->set('user_id',$this->id_user);
		$this->db->insert('konten_appe');
	}
    function edit_aksi($isi){
		$this->db->set('judul_appe',$isi['judul']);
		$this->db->set('keterangan_appe',$isi['isi']);
		$this->db->set('link',$isi['link']);
		$this->db->set('last_updated',"NOW()",false);
		$this->db->set('user_id',$this->id_user);
		$this->db->where('id_appe',$isi['idd']);
		$this->db->update('konten_appe');
	}
    function hapus_aksi($isi){
		$this->db->where('id_appe',$isi['idd']);
		$this->db->delete('konten_appe');
	}
	function detailkonten($path){
		$sqlstr="SELECT * FROM konten_appe  WHERE id_appe='$path'";
		$hslquery=$this->db->query($sqlstr)->result();
		return $hslquery;
	}
	function hitung_konten($path,$komp){
		if($path=="xx"){$and1=" WHERE tipe='$komp'";}else{$and1=" WHERE tipe='$komp' AND id_konten='$path'";}
		$query=$this->db->query("SELECT count(id_appe) as count_nik FROM konten_appe $and1"); 
		$row = $query->row_array();
		$hslrow['count'] = $row['count_nik'];
		return $hslrow;
	}
	function get_konten($mulai,$batas,$path,$komp){
		if($path=="xx"){$and1=" WHERE tipe='$komp'";}else{$and1=" WHERE tipe='$komp' AND id_konten='$path'";}
		$sqlstr="SELECT * FROM konten_appe  $and1 ORDER BY urutan_appe DESC  LIMIT $mulai,$batas";
		$hslquery=$this->db->query($sqlstr);

		return $hslquery;
	}
/////////////////////////////////////////////////////////
    function tambah_kategori_aksi($isi){
			$ini="{\"komponen\":\"sekilasinfo\",\"keterangan\":\"".$isi['keterangan']."\",\"status\":\"publish\"}";
			$sqlstr="INSERT INTO cmf_setting (id_setting,nama_item,meta_value) VALUES ('6','".$isi['nama_kategori']."','$ini')";		
			$this->db->query($sqlstr);
	}
    function edit_kategori_aksi($isi){
			$ini="{\"komponen\":\"sekilasinfo\",\"keterangan\":\"".$isi['keterangan']."\",\"status\":\"publish\"}";
			$sqlstr="UPDATE cmf_setting SET nama_item='".$isi['nama_kategori']."',meta_value='$ini' WHERE id_item='".$isi['idd']."'";		
			$this->db->query($sqlstr);
	}
    function hapus_kategori_aksi($isi){
			$sqlstr="DELETE FROM cmf_setting WHERE id_item='".$isi['idd']."'";		
			$this->db->query($sqlstr);
	}

	function cek_wrapper($id_kategori){
		$sqlstr="SELECT * FROM cmf_setting WHERE id_setting='9' AND (meta_value LIKE '%\"id_kategori\":\"$id_kategori\"%' OR meta_value LIKE '%\"id_kategori\":\"$id_kategori,%' OR meta_value LIKE '%,$id_kategori\"%' OR meta_value LIKE '%,$id_kategori,%' )";
		$hslquery=$this->db->query($sqlstr)->result();
		return $hslquery;
	}


}
