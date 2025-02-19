<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Artikel extends MX_Controller {
	function __construct(){
		parent::__construct();
		$this->auth->restrict();
		$this->load->model('m_konten');
		$this->load->model('m_banner');
		$sess = $this->session->userdata('logged_in');
		$this->id_user = $sess['id_user'];
	}
///////////////////////////////////////////////////////////////////////////////////////
	function foto_formappe(){
		$data['id_konten'] = $_POST['id_konten'];
		$data['ini'] = Modules::run("cmshome/detailkonten",$data['id_konten']);
		$data['isi'] = Modules::run("cmskonten/artikel/foto_row",$data['id_konten']);
        $this->load->view("artikel/foto_formappe",$data);
	}
	function foto_insert(){
		$sql = "SELECT * FROM konten_appe WHERE id_appe='".$_POST['idd']."'";
		$qry = $this->db->query($sql)->row();
		if($qry->keterangan_appe=="jpg" || $qry->keterangan_appe=="gif" || $qry->keterangan_appe=="png" || $qry->keterangan_appe=="JPG" || $qry->keterangan_appe=="GIF" || $qry->keterangan_appe=="PNG"){
			$sq = "SELECT COUNT(id_appe) AS jml FROM konten_appe WHERE id_konten='".$_POST['id_konten']."' AND tipe='foto'";
			$qr = $this->db->query($sq)->row();
			$urutan = ($qr->jml+1);

			$this->db->set('id_konten',$_POST['id_konten']);
			$this->db->set('tipe','foto');
			$this->db->set('foto',$_POST['path']);
			$this->db->set('urutan_appe',$urutan);
			$this->db->set('foto_from',$_POST['idd']);
			$this->db->set('last_updated',"NOW()",false);
			$this->db->set('user_id',$this->id_user);
			$this->db->insert('konten_appe');

			$sqlstr="UPDATE konten_appe SET nilai='".($qry->nilai+1)."' WHERE id_appe='".$_POST['idd']."'";//// Untuk mencatat jumlah pemakaian file ini
			$this->db->query($sqlstr);
		}
		$isi = Modules::run("cmskonten/artikel/foto_row",$_POST['id_konten']);
		echo $isi;
	}
	function foto_hapus(){
		$sq = "SELECT * FROM konten_appe WHERE id_appe='".$_POST['idd']."'";
		$qr = $this->db->query($sq)->row();
		$sqA = "DELETE FROM konten_appe WHERE id_appe='".$_POST['idd']."'";
		$qrA = $this->db->query($sqA);
		$sqB = "UPDATE konten_appe SET nilai=(nilai-1) WHERE id_appe='".$qr->foto_from."'";
		$qrB = $this->db->query($sqB);
		$row = Modules::run("cmshome/fotokonten",$_POST['id_konten']);
		foreach($row AS $key=>$val){
			$sqA = "UPDATE konten_appe SET urutan_appe='".($key+1)."' WHERE id_appe='".$val->id_appe."'";
			$qrA = $this->db->query($sqA);
		}

		$isi = Modules::run("cmskonten/artikel/foto_row",$_POST['id_konten']);
		echo $isi;
	}
    function foto_urutan(){
		$this->m_konten->reurut_atribut_aksi($_POST);
		$isi = Modules::run("cmskonten/artikel/foto_row",$_POST['id_konten']);
		echo $isi;
	}
	function foto_row($id_konten){
		$data['row'] = Modules::run("cmshome/fotokonten",$id_konten);
        $this->load->view("artikel/foto_row",$data);
	}
	function foto_judul_aksi(){
		$this->m_konten->ket_foto($_POST);
	}
///////////////////////////////////////////////////////////////////////////////////////
	function lampiran_formappe(){
		$data['id_konten'] = $_POST['id_konten'];
		$data['ini'] = Modules::run("cmshome/detailkonten",$data['id_konten']);
		$data['isi'] = Modules::run("cmskonten/artikel/lampiran_row",$data['id_konten']);
        $this->load->view("artikel/lampiran_formappe",$data);
	}
	function lampiran_insert(){
		$sql = "SELECT * FROM konten_appe WHERE id_appe='".$_POST['idd']."'";
		$qry = $this->db->query($sql)->row();
			$sq = "SELECT COUNT(id_appe) AS jml FROM konten_appe WHERE id_konten='".$_POST['id_konten']."' AND tipe='lampiran'";
			$qr = $this->db->query($sq)->row();
			$urutan = ($qr->jml+1);

			$this->db->set('id_konten',$_POST['id_konten']);
			$this->db->set('tipe','lampiran');
			$this->db->set('foto',$_POST['path']);
			$this->db->set('urutan_appe',$urutan);
			$this->db->set('foto_from',$_POST['idd']);
			$this->db->set('last_updated',"NOW()",false);
			$this->db->set('user_id',$this->id_user);
			$this->db->insert('konten_appe');

			$sqlstr="UPDATE konten_appe SET nilai='".($qry->nilai+1)."' WHERE id_appe='".$_POST['idd']."'";//// Untuk mencatat jumlah pemakaian file ini
			$this->db->query($sqlstr);
		$isi = Modules::run("cmskonten/artikel/lampiran_row",$_POST['id_konten']);
		echo $isi;
	}
	function lampiran_hapus(){
		$sq = "SELECT * FROM konten_appe WHERE id_appe='".$_POST['idd']."'";
		$qr = $this->db->query($sq)->row();
		$sqA = "DELETE FROM konten_appe WHERE id_appe='".$_POST['idd']."'";
		$qrA = $this->db->query($sqA);
		$sqB = "UPDATE konten_appe SET nilai=(nilai-1) WHERE id_appe='".$qr->foto_from."'";
		$qrB = $this->db->query($sqB);
		$row = Modules::run("cmshome/lampirankonten",$_POST['id_konten']);
		foreach($row AS $key=>$val){
			$sqA = "UPDATE konten_appe SET urutan_appe='".($key+1)."' WHERE id_appe='".$val->id_appe."'";
			$qrA = $this->db->query($sqA);
		}
		$isi = Modules::run("cmskonten/artikel/lampiran_row",$_POST['id_konten']);
		echo $isi;
	}
	function lampiran_row($id_konten){
		$data['row'] = Modules::run("cmshome/lampirankonten",$id_konten);
        $this->load->view("artikel/lampiran_row",$data);
	}
    function lampiran_urutan(){
		$this->m_konten->reurut_atribut_aksi($_POST);
		$isi = Modules::run("cmskonten/artikel/lampiran_row",$_POST['id_konten']);
		echo $isi;
	}
///////////////////////////////////////////////////////////////////////////////////////
	function banner_formappe(){
		$data['id_konten'] = $_POST['id_kategori'];
		$data['ini'] = $this->m_banner->inialbum($data['id_konten']);
		$data['isi'] = Modules::run("cmskonten/artikel/banner_row",$data['id_konten']);
        $this->load->view("artikel/banner_formappe",$data);
	}
	function banner_insert(){
		$sql = "SELECT * FROM konten_appe WHERE id_appe='".$_POST['idd']."'";
		$qry = $this->db->query($sql)->row();
		if($qry->keterangan_appe=="jpg" || $qry->keterangan_appe=="gif" || $qry->keterangan_appe=="png" || $qry->keterangan_appe=="JPG" || $qry->keterangan_appe=="GIF" || $qry->keterangan_appe=="PNG"){
			$sq = "SELECT COUNT(id_appe) AS jml FROM konten_appe WHERE id_konten='".$_POST['id_konten']."' AND tipe='banner'";
			$qr = $this->db->query($sq)->row();
			$urutan = ($qr->jml+1);

			$this->db->set('id_konten',$_POST['id_konten']);
			$this->db->set('tipe','banner');
			$this->db->set('foto',$_POST['path']);
			$this->db->set('urutan_appe',$urutan);
			$this->db->set('foto_from',$_POST['idd']);
			$this->db->set('last_updated',"NOW()",false);
			$this->db->set('user_id',$this->id_user);
			$this->db->insert('konten_appe');

			$sqlstr="UPDATE konten_appe SET nilai='".($qry->nilai+1)."' WHERE id_appe='".$_POST['idd']."'";//// Untuk mencatat jumlah pemakaian file ini
			$this->db->query($sqlstr);
		}
		$isi = Modules::run("cmskonten/artikel/banner_row",$_POST['id_konten']);
		echo $isi;
	}
	function banner_hapus(){
		$sq = "SELECT * FROM konten_appe WHERE id_appe='".$_POST['idd']."'";
		$qr = $this->db->query($sq)->row();
		$sqA = "DELETE FROM konten_appe WHERE id_appe='".$_POST['idd']."'";
		$qrA = $this->db->query($sqA);
		$sqB = "UPDATE konten_appe SET nilai=(nilai-1) WHERE id_appe='".$qr->foto_from."'";
		$qrB = $this->db->query($sqB);
		$row =  $this->m_banner->isi_album($_POST['id_konten']);
		foreach($row AS $key=>$val){
			$sqA = "UPDATE konten_appe SET urutan_appe='".($key+1)."' WHERE id_appe='".$val->id_appe."'";
			$qrA = $this->db->query($sqA);
		}

		$isi = Modules::run("cmskonten/artikel/banner_row",$_POST['id_konten']);
		echo $isi;
	}
	function banner_row($id_konten){
		$data['row'] = $this->m_banner->isi_album($id_konten);
        $this->load->view("artikel/banner_row",$data);
	}
    function banner_urutan(){
		$this->m_konten->reurut_atribut_aksi($_POST);
		$isi = Modules::run("cmskonten/artikel/banner_row",$_POST['id_konten']);
		echo $isi;
	}
	function banner_link_aksi(){
		$sqlstr="UPDATE konten_appe SET link='".$_POST['isian']."' WHERE id_appe='".$_POST['idd']."'";
		$this->db->query($sqlstr);
	}
///////////////////////////////////////////////////////////////////////////////////////
	function index(){
        $data["hal"] = (isset($_POST["hal"]))?$_POST["hal"]:"1";
        $data["batas"] = (isset($_POST["batas"]))?$_POST["batas"]:10;
        $data["cari"] = (isset($_POST["cari"]))?$_POST["cari"]:"";
        $data["id_kat"] = (isset($_POST["id_kat"]))?$_POST["id_kat"]:"";
        $data["kategori"]=$this->m_konten->get_kategori("artikel");
        $this->load->view("artikel/index",$data);
	}
	function getdata(){
		$data['count'] = $this->m_konten->hitung_konten($_POST['cari'],$_POST['komponen'],$_POST['id_kat']);
		if($data['count']==0){
			$data['hslquery']="";
			$data['pager'] = "<input type=hidden id='inputpaging' value='1'>";
		} else {
			$batas=$_POST['batas'];
			$hal = ($_POST['hal']=="end")?ceil($data['count']/$batas):$_POST['hal'];
			$mulai=($hal-1)*$batas;
			$data['mulai']=$mulai+1;
			$hh = array(); $hh['Sunday']="Minggu"; $hh['Monday']="Senin"; $hh['Tuesday']="Selasa"; $hh['Wednesday']="Rabu"; $hh['Thursday']="Kamis"; $hh['Friday']="Jum'at"; $hh['Saturday']="Sabtu";
			$data['hslquery'] = $this->m_konten->get_konten($_POST['cari'],$mulai,$batas,$_POST['komponen'],$_POST['id_kat']);
			$defNoImage = Modules::run("web_artikel/web_artikel/nilaiApp","no_images_default");
			$defNoAttach = Modules::run("web_artikel/web_artikel/nilaiApp","no_attachment_default");
			$defAnyAttach = Modules::run("web_artikel/web_artikel/nilaiApp","any_attachment_default");
			foreach($data['hslquery'] as $it=>$val){
					@$data['hslquery'][$it]->hari = $hh[$val->hari];
					$cek = Modules::run("cmshome/fotokonten",$val->id_konten);
					if(!empty($cek)){
						$data['hslquery'][$it]->cek="ada";
						$data['hslquery'][$it]->thumb="<img src='".base_url().@$cek[0]->foto."' height=40 border=0>";
					}	else	{
						
						$data['hslquery'][$it]->cek="kosong";
						$data['hslquery'][$it]->thumb="<img src='".base_url().$defNoImage."' height=40 border=0>";
					}
					$cek3 = Modules::run("cmshome/lampirankonten",$val->id_konten);
					if(!empty($cek3)){
						$data['hslquery'][$it]->cek3="ada";
						$data['hslquery'][$it]->lampiran="<img src='".base_url().$defAnyAttach."' height=40 border=0>";
					} else {
						$data['hslquery'][$it]->cek3="kosong";
						$data['hslquery'][$it]->lampiran="<img src='".base_url().$defNoAttach."' height=40 border=0>";
					}
					if(empty($cek) && empty($cek3))	{$data['hslquery'][$it]->hapus="ya";	}
			}
			$data['pager'] = Modules::run("crest/pager/pagerC",$data['count'],$batas,$hal);
		}
		echo json_encode($data);
	}


	function formedit(){
		$data['label_aksi'] = ($_POST['id_konten']==0)?"Tambah":"Edit";
		$data['id_konten'] = $_POST['id_konten'];

		if($_POST['id_konten']==0){
			@$data['isi']->judul = "";
			@$data['isi']->sub_judul = "";
			@$data['isi']->id_kategori = "";
			@$data['isi']->komponen = "artikel";
			@$data['isi']->id_penulis = "";
			@$data['isi']->tanggal = date('d-m-Y');
			@$data['isi']->isi_konten = "";
		} else {
			@$data['isi'] = Modules::run("cmshome/detailkonten",$_POST['id_konten']);
		}

		$data['kategori_options'] =  Modules::run("cmshome/kategori_options",@$data['isi']->id_kategori,@$data['isi']->komponen);
		$data['penulis_options'] =  Modules::run("cmshome/penulis_options",@$data['isi']->id_penulis);

		$this->load->view('artikel/formedit',$data);
	}

	function edit_aksi(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("judul","Judul","required");
        $this->form_validation->set_rules("tanggal","Tanggal","required");
        $this->form_validation->set_rules("id_kategori","Kategori","required");
 		$this->form_validation->set_rules("id_penulis","Penulis","required");
		if($this->form_validation->run()) {
						if($this->input->post('id_konten') == 0):
							$this->m_konten->tambah_aksi($_POST);
						else:	
							$this->m_konten->edit_aksi($_POST);
						endif;
			$data['hasil'] = "sukses";
		 }else{
			$data['hasil'] = validation_errors();	
		 }
		echo json_encode($data);
	}

	function formhapus(){
		$data['id_konten'] = $_POST['id_konten'];

		@$data['isi'] = Modules::run("cmshome/detailkonten",$_POST['id_konten']);
		$data['kategori_options'] =  Modules::run("cmshome/kategori_options",@$data['isi']->id_kategori,@$data['isi']->komponen);
		$data['penulis_options'] =  Modules::run("cmshome/penulis_options",@$data['isi']->id_penulis);

		$this->load->view('artikel/formhapus',$data);
	}
	function hapus_aksi(){
		$this->m_konten->hapus_aksi($_POST);
		$data['hasil'] = "sukses";
		echo json_encode($data);
	}
////////////////////////////////////////////////////////////////////
	function custom_kategori(){
		echo "";
	}
	function formkategori(){
		$data['label_aksi'] = ($_POST['id_konten']==0)?"Tambah":"Edit";
		$data['komponen'] = $_POST['komponen'];
		$data['id_konten'] = $_POST['id_konten'];

		$tpl_1= Modules::run("cmshome/paging_kategori_options",5);
		$data['pg_index']="<select id='paging_index' name='paging_index'  class='form-control' style='width:400px;'>".$tpl_1."</select>";
		$tpl_2= Modules::run("cmshome/paging_kategori_options",5);
		$data['pg_arsip']="<select id='paging_arsip' name='paging_arsip'  class='form-control' style='width:400px;'>".$tpl_2."</select>";

		if($_POST['id_konten']==0){
			@$data['isi']->judul = "";
			@$data['isi']->sub_judul = "";
			@$data['isi']->id_kategori = "";
			@$data['isi']->komponen = "artikel";
			@$data['isi']->id_penulis = "";
			@$data['isi']->tanggal = date('d-m-Y');
			@$data['isi']->isi_konten = "";
		} else {
			@$data['isi'] = Modules::run("cmshome/detailkonten",$_POST['id_konten']);
		}

		$data['default_kanal'] =  Modules::run("cmshome/default_kanal");
		$data['kanal_options'] =  Modules::run("cmshome/kanal_options",0);
		$data['penulis_options'] =  Modules::run("cmshome/penulis_options",@$data['isi']->id_penulis);

		$this->load->view('artikel/formkategori',$data);
	}
////////////////////////////////////////////////////////////////////
}
?>