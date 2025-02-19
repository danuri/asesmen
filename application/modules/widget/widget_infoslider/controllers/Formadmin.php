<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Formadmin extends MX_Controller {

	function __construct()	{
		parent::__construct();
		$this->load->model('m_infoslider');
		$this->auth->restrict();
	}

	public function tambah()	{
			$tpl_1= Modules::run("cmshome/margin_options","10px");
			$data['margin_atas']="<select id='nilai[0]' name='nilai[0]'  class='form-control'>".$tpl_1."</select>";
			$tpl_2= Modules::run("cmshome/margin_options","10px");
			$data['margin_bawah']="<select id='nilai[1]' name='nilai[1]'  class='form-control'>".$tpl_2."</select>";
			$tpl_3= Modules::run("cmshome/banyak_post_options",5);
			$data['banyak_post']="<select id='nilai[2]' name='nilai[2]'  class='form-control'>".$tpl_3."</select>";
			$tpl_4= Modules::run("cmshome/durasi_options","1000");
			$data['durasi']="<select id='nilai[3]' name='nilai[3]'  class='form-control'>".$tpl_4."</select>";

			$rbk = $this->m_infoslider->getkategori_by_komponen("sekilasinfo");
			$data['pilisi']="";
			foreach($rbk as $key=>$val){
				$data['pilisi'].="<tr>";
				$data['pilisi'].="<td>".($key+1)."</td><td>";
				$data['pilisi'].="<input type=checkbox name=widget_isi[] id=widget_isi value='".$val->id_appe."'>";
				$data['pilisi'].="</td><td>".$val->judul_appe."</td><td>".$val->keterangan_appe."</td></tr>";
			}

		$this->load->view('formadmin',$data);
	}
	public function edit()	{
			$id_kategori = ($_POST['id_kategori']=="{}")?array():explode(",",$_POST['id_kategori']);
			$data['nilai'] = explode(",",$_POST['opsi']);

			$tpl_1= Modules::run("cmshome/margin_options",$data['nilai'][0]);
			$data['margin_atas']="<select id='nilai[0]' name='nilai[0]'  class='form-control'>".$tpl_1."</select>";
			$tpl_2= Modules::run("cmshome/margin_options",$data['nilai'][1]);
			$data['margin_bawah']="<select id='nilai[1]' name='nilai[1]'  class='form-control'>".$tpl_2."</select>";
			$tpl_3= Modules::run("cmshome/banyak_post_options",$data['nilai'][2]);
			$data['banyak_post']="<select id='nilai[2]' name='nilai[2]'  class='form-control'>".$tpl_3."</select>";
			$tpl_4= Modules::run("cmshome/durasi_options",@$data['nilai'][3]);
			$data['durasi']="<select id='nilai[3]' name='nilai[3]'  class='form-control'>".$tpl_4."</select>";

			$rbk = $this->m_infoslider->getkategori_by_komponen("sekilasinfo");
			$data['pilisi']="";
			foreach($rbk as $key=>$val){
				$chk = (in_array($val->id_appe,$id_kategori))?"checked":"";
				$data['pilisi'].="<tr>";
				$data['pilisi'].="<td>".($key+1)."</td><td>";
				$data['pilisi'].="<input type=checkbox name=widget_isi[] id=widget_isi value='".$val->id_appe."' $chk>";
				$data['pilisi'].="</td><td>".$val->judul_appe."</td><td>".$val->keterangan_appe."</td></tr>";
			}

		$this->load->view('formadmin',$data);
	}

}