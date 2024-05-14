<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftar_kategori extends MX_Controller {

	function __construct()	{
		parent::__construct();
		$this->load->library("session");
		$this->load->model('m_element');
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function index($id_kanal,$komponen="xxx",$ikat=1000)	{
	    $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+',' ');
		$daf_kategori=$this->m_element->cari_rubrik_kanal($id_kanal);
		foreach($daf_kategori as $key=>$val){
			@$daf_kategori[$key]->status=($daf_kategori[$key]->id_kategori==$ikat)?"active":"";		
			$daf_kategori[$key]->seo=str_replace($d, '-', $val->nama_kategori);
		}
		return $daf_kategori;
	}

	public function daftar_kategori()	{
		$sess = $this->session->userdata('visit');
	    $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+',' ');
		$data['kategori'] = $this->m_element->cari_rubrik_kanal($sess['id_kanal']);
		foreach($data['kategori'] as $key=>$val){
			@$data['kategori'][$key]->status=($data['kategori'][$key]->id_kategori==$sess['id_kategori'])?"active":"";		
			$data['kategori'][$key]->seo=str_replace($d, '-', $val->nama_kategori);
		}

			$path='assets/themes/'.$sess['theme'].'/komponen/element/daftar_kategori.php';
			if(file_exists($path)){	
				$this->viewPath = '../../assets/themes/'.$sess['theme'].'/komponen/element/';
				$this->load->view($this->viewPath.'daftar_kategori',$data);
			} else {
				$this->load->view('daftar_kategori',$data);
			}
	}

}