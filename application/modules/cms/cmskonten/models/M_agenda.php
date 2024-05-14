<?php
class M_agenda extends CI_Model{
	function __construct(){
		parent::__construct();
		$sess = $this->session->userdata('logged_in');
		$this->id_user = $sess['id_user'];
	}
//////////////////////////////////////////////////////////////////////////////////
    function tambah_aksi($isi){
		$this->db->select_max('urutan','count_nik');
		$this->db->where('id_kategori',$isi['id_kategori']);
		$row = $this->db->get('konten')->row();
		$max = $row->count_nik+1;

		$ini="{\"tgl_mulai\":\"".$isi['tgl_mulai']."\",\"tgl_selesai\":\"".$isi['tgl_selesai']."\",\"isi\":\"".$isi['isi_agenda']."\"}";
		$this->db->set('judul',$isi['judul']);
		$this->db->set('komponen','agenda');
		$this->db->set('id_kategori',$isi['id_kategori']);
		$this->db->set('isi_konten',$ini);
		$this->db->set('sub_judul',$isi['sub_judul']);
		$this->db->set('id_penulis',$isi['id_penulis']);
		$this->db->set('urutan',$max);
		$this->db->set('baca',0);
		$this->db->set('last_updated',"NOW()",false);
		$this->db->set('user_id',$this->id_user);
		$this->db->insert('konten');
	}
    function edit_aksi($isi){
		$ini="{\"tgl_mulai\":\"".$isi['tgl_mulai']."\",\"tgl_selesai\":\"".$isi['tgl_selesai']."\",\"isi\":\"".$isi['isi_agenda']."\"}";

		$this->db->set('judul',$isi['judul']);
		$this->db->set('id_kategori',$isi['id_kategori']);
		$this->db->set('isi_konten',$ini);
		$this->db->set('sub_judul',$isi['sub_judul']);
		$this->db->set('id_penulis',$isi['id_penulis']);
		$this->db->set('last_updated',"NOW()",false);
		$this->db->set('user_id',$this->id_user);
		$this->db->where('id_konten',$isi['idd']);
		$this->db->update('konten');
	}
    function hapus_aksi($isi){
		$this->db->where('id_konten',$isi);
		$this->db->delete('konten');
	}
}
