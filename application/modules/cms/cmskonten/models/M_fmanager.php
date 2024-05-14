<?php
class M_fmanager extends CI_Model{
	function __construct(){
		parent::__construct();
		$sess = $this->session->userdata('logged_in');
		$this->id_user = $sess['id_user'];
	}
//////////////////////////////////////////////////////////////////////////////////
	function getitem($idp){
		$this->db->from('konten_appe');
		$this->db->where('tipe','fm');
		$this->db->where('id_konten',$idp);
		$this->db->order_by('id_appe');
		$hslquery = $this->db->get()->result();
		return $hslquery;
	}
	function cek_folder($idp,$pth){
		$this->db->from('konten_appe');
		$this->db->where('tipe','fm');
		$this->db->where('id_konten',$idp);
		$this->db->where('link',$pth);
		$hslquery = $this->db->get()->result();
		return $hslquery;
	}
	function ini_folder($idd){
		$this->db->from('konten_appe');
		$this->db->where('id_appe',$idd);
		$hslquery = $this->db->get()->row();
		return $hslquery;
	}
	function tambah_folder_aksi($idp,$ipp,$pth,$usr){
		$this->db->set('tipe','fm');
		$this->db->set('id_konten',$idp);
		$this->db->set('judul_appe',$ipp['folder']);
		$this->db->set('keterangan_appe',$ipp['keterangan']);
		$this->db->set('link',$pth);
		$this->db->set('fotografer',$usr);
		$this->db->set('last_updated',"NOW()",false);
		$this->db->set('user_id',$this->id_user);
		$this->db->insert('konten_appe');
	}
	function edit_folder_aksi($idd,$ipp,$pth,$usr){
		$this->db->where('id_appe',$idd);
		$this->db->set('judul_appe',$ipp['folder']);
		$this->db->set('keterangan_appe',$ipp['keterangan']);
		$this->db->set('link',$pth);
		$this->db->set('fotografer',$usr);
		$this->db->set('last_updated',"NOW()",false);
		$this->db->set('user_id',$this->id_user);
		$this->db->update('konten_appe');
	}
	function hapus_folder_aksi($idd){
		$this->db->where('id_appe',$idd);
		$this->db->delete('konten_appe');
	}
	function hitungfile($idd){
		$this->db->select('id_appe');
		$this->db->where('tipe','fml');
		$this->db->where('id_konten',$idd);
		$this->db->from('konten_appe');
		$hslquery = $this->db->get()->num_rows();
		return $hslquery;
	}
	function getfile($idd){
		$this->db->from('konten_appe');
		$this->db->where('tipe','fml');
		$this->db->where('id_konten',$idd);
		$hslquery = $this->db->get()->result();
		return $hslquery;
	}
	function simpan_file($idp,$ipp,$ket,$usr){
		$this->db->set('tipe','fml');
		$this->db->set('id_konten',$idp);
		$this->db->set('judul_appe',$ipp);
		$this->db->set('keterangan_appe',$ket);
		$this->db->set('fotografer',$usr);
		$this->db->set('last_updated',"NOW()",false);
		$this->db->set('user_id',$this->id_user);
		$this->db->insert('konten_appe');
	}
	function rename_fl($idd,$pth,$usr){
		$this->db->where('id_appe',$idd);
		$this->db->set('judul_appe',$pth);
		$this->db->set('fotografer',$usr);
		$this->db->set('last_updated',"NOW()",false);
		$this->db->set('user_id',$this->id_user);
		$this->db->update('konten_appe');
	}
}
