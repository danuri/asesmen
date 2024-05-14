<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Widget_agenda extends MX_Controller {

	function __construct()	{
		parent::__construct();
		$this->load->model('m_widget_agenda');
	}

	public function index($id_widget,$id_wrapper,$opsi)	{
		$data['daftar'] = $this->m_widget_agenda->getwidget($id_widget,$id_wrapper,$opsi[2]->nilai);
		$data['nama_wrapper'] = $id_widget;
	    $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+',' ');
		$hh = array(); $hh['Sunday']="Minggu"; $hh['Monday']="Senin"; $hh['Tuesday']="Selasa"; $hh['Wednesday']="Rabu"; $hh['Thursday']="Kamis"; $hh['Friday']="Jum'at"; $hh['Saturday']="Sabtu";
		$def = Modules::run("web_artikel/web_artikel/nilaiApp","no_images_default");
		foreach ($data['daftar'] as $key=>$val) {
			$jj = json_decode($val->isi_konten);
			@$data['daftar'][$key]->seo = str_replace($d, '-', $val->judul);
			@$data['daftar'][$key]->kat_seo = str_replace($d, '-', $val->nama_kategori);

			@$data['daftar'][$key]->tanggal_mulai = $jj->tgl_mulai;
			@$data['daftar'][$key]->tanggal_selesai = $jj->tgl_selesai;
			$tgl_mulai = Modules::run("web_agenda/web_agenda/c_nama_hari",$jj->tgl_mulai);
			$tgl_selesai = Modules::run("web_agenda/web_agenda/c_nama_hari",$jj->tgl_selesai);
			@$data['daftar'][$key]->hari_mulai = $hh[$tgl_mulai];
			@$data['daftar'][$key]->hari_selesai = $hh[$tgl_selesai];

			$gambar=$this->m_widget_agenda->gambar_artikel($val->id_konten);
			@$data['daftar'][$key]->thumb = (!empty($gambar))?$gambar[0]->foto:$def;
		}
		$data['margin_top']=$opsi[0]->nilai;
		$data['margin_bottom']=$opsi[1]->nilai;
		$data['banyaknya'] = $opsi[2]->nilai;
		$this->load->view('index',$data);
	}
}