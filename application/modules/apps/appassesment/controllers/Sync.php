<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Sync extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->auth->restrict();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_sync');
	}
	
///// SYNC
	
	function index(){
	    $data['hasil_cfit'] = $this->M_sync->data_cfit();
		$this->load->view('v_sync',$data);
	}

	function update_passwd(){
		$data = $this->M_sync->update_passwd();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Password SHA1 Berhasil di Update');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Update');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}	
	
	function update_apm1(){
		$data = $this->M_sync->update_apm1();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data APM Set 1 Berhasil di Update');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Update');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}	
	
	function hitung_apm1(){
		$data = $this->M_sync->hitung_apm1();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data APM Set 1 Berhasil di Hitung');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Penghitungan');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Hitung &ensp; ";
		}
		echo json_encode($data);
	}	
	
	
	function update_apm2(){
		$data = $this->M_sync->update_apm2();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data APM Set 2 Berhasil di Update');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Update');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}
	
	function hitung_apm2(){
		$data = $this->M_sync->hitung_apm2();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data APM Set 2 Berhasil di Hitung');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Penghitungan');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Hitung &ensp; ";
		}
		echo json_encode($data);
	}		
	
	function update_papi(){
		$data = $this->M_sync->update_papi();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data PAPI Berhasil di Update');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Update');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}	
	
	function update_sjt(){
		$data = $this->M_sync->update_sjt();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data SJT Berhasil di Update');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Update');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}	
	
	function reg_y(){
		$data = $this->M_sync->update_reg_y();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Status Berhasil di Update');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Update');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}
	
	function ci_satu_y(){
		$data = $this->M_sync->update_cisatu_y();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Status Berhasil di Update');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Update');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}	
	
	function ci_dua_y(){
		$data = $this->M_sync->update_cidua_y();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Status Berhasil di Update');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Update');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}	
	
	function qkom_satu_y(){
		$data = $this->M_sync->update_qkomsatu_y();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Status Berhasil di Update');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Update');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}	
	
	function qkom_dua_y(){
		$data = $this->M_sync->update_qkomdua_y();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Status Berhasil di Update');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Update');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}	
	
	function apm_satu_y(){
		$data = $this->M_sync->update_apmsatu_y();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Status Berhasil di Update');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Update');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}	
	
	function apm_dua_y(){
		$data = $this->M_sync->update_apmdua_y();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Status Berhasil di Update');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Update');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}	
	
	function papi_y(){
		$data = $this->M_sync->update_papi_y();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Status Berhasil di Update');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Update');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}	
	
	function ankas_y(){
		$data = $this->M_sync->update_ankas_y();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Status Berhasil di Update');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Update');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}	
	
	function data_peserta_y(){
		$data = $this->M_sync->update_datapeserta_y();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Status Berhasil di Update');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Update');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}	
	
	function update_chart(){
		$data = $this->M_sync->update_chart();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Chart Berhasil di Update');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Update');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}	
	
	function kehadiran(){
		$data = $this->M_sync->insert_hadir();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Daftar Kehadiran Berhasil di Insert');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Insert');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Insert &ensp; ";
		}
		echo json_encode($data);
	}	

	function duplicate_registrasi(){
		$data = $this->M_sync->duplicate_registrasi();
		echo json_encode($data);
	}	
	
	function duplicate_ci1(){
		$data = $this->M_sync->duplicate_ci1();
		echo json_encode($data);
	}	
	
	function duplicate_ci2(){
		$data = $this->M_sync->duplicate_ci2();
		echo json_encode($data);
	}	
	
	function duplicate_jadwal(){
		$data = $this->M_sync->duplicate_jadwal();
		echo json_encode($data);
	}	
	
	function duplicate_user(){
		$data = $this->M_sync->duplicate_user();
		echo json_encode($data);
	}	
	
	function duplicate_ankas(){
		$data = $this->M_sync->duplicate_ankas();
		echo json_encode($data);
	}	
	
	function duplicate_papi(){
		$data = $this->M_sync->duplicate_papi();
		echo json_encode($data);
	}	
	
	function duplicate_apm1(){
		$data = $this->M_sync->duplicate_apm1();
		echo json_encode($data);
	}	
	
	function duplicate_apm2(){
		$data = $this->M_sync->duplicate_apm2();
		echo json_encode($data);
	}	
	
	function delete_duplicate_reg(){
		$data		=$this->M_sync->hapus_duplicate_reg();
		
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Hapus');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Hapus data');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Hapus &ensp; ";
		}
		echo json_encode($data);
		
	}
				
	function delete_duplicate_qkom_satu(){
		$data		=$this->M_sync->hapus_duplicate_qkom_satu();
		
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Hapus');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Hapus data');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Hapus &ensp; ";
		}
		echo json_encode($data);
		
	}
		
	function delete_duplicate_qkom_dua(){
		$data		=$this->M_sync->hapus_duplicate_qkom_dua();
		
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Hapus');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Hapus data');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Hapus &ensp; ";
		}
		echo json_encode($data);
		
	}
				
		
				
	function delete_duplicate_ci1(){
		$data		=$this->M_sync->hapus_duplicate_ci1();
		
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Hapus');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Hapus data');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Hapus &ensp; ";
		}
		echo json_encode($data);
		
	}
				
	function delete_duplicate_ci2(){
		$data		=$this->M_sync->hapus_duplicate_ci2();
		
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Hapus');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Hapus data');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Hapus &ensp; ";
		}
		echo json_encode($data);
		
	}
				
	function delete_duplicate_jadwal(){
		$data		=$this->M_sync->hapus_duplicate_jadwal();
		
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Hapus');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Hapus data');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Hapus &ensp; ";
		}
		echo json_encode($data);
		
	}
				
	function delete_duplicate_user(){
		$data		=$this->M_sync->hapus_duplicate_user();
		
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Hapus');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Hapus data');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Hapus &ensp; ";
		}
		echo json_encode($data);
		
	}
				
	function delete_duplicate_ankas(){
		$data		=$this->M_sync->hapus_duplicate_ankas();
		
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Hapus');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Hapus data');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Hapus &ensp; ";
		}
		echo json_encode($data);
		
	}
				
	function delete_duplicate_papi(){
		$data		=$this->M_sync->hapus_duplicate_papi();
		
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Hapus');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Hapus data');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Hapus &ensp; ";
		}
		echo json_encode($data);
		
	}
				
	function delete_duplicate_apm1(){
		$data		=$this->M_sync->hapus_duplicate_apm1();
		
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Hapus');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Hapus data');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Hapus &ensp; ";
		}
		echo json_encode($data);
		
	}
				
	function delete_duplicate_apm2(){
		$data		=$this->M_sync->hapus_duplicate_apm2();
		
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Hapus');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Hapus data');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Hapus &ensp; ";
		}
		echo json_encode($data);
		
	}
				
	function update_nilai_cfit(){
		$data = $this->M_sync->update_nilai_cfit();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Nilai CFIT Berhasil di Update');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Update');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}
	
	function insert_nilai_cfit(){
		$data = $this->M_sync->insert_nilai_cfit();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Nilai CFIT Berhasil di Insert');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Insert');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}
	
	function update_kategori_cfit(){
		$data = $this->M_sync->kategori_cfit();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Kategori CFIT Berhasil di Insert');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Insert');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}
	
	function update_jadwal(){
		$data = $this->M_sync->update_jadwal();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Jadwal Berhasil di Update');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Update');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}	
	
	function update_data_hasil_sjt(){
		$data = $this->M_sync->update_data_hasil_sjt();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Hasil SJT Berhasil di Insert');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Insert');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}	
	
	function update_data_simsdm(){
		$data = $this->M_sync->update_data_simsdm();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span>Berhasil di Update');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Update');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}	
	
	function update_data_sjt(){
		$data = $this->M_sync->update_data_sjt();
		if (isset($data)) {
			if($data){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span>Berhasil di Update');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Gagal Melakukan Update');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada data yang di Update &ensp; ";
		}
		echo json_encode($data);
	}	
	
				
				
				
				
				
				
///// END OF SYNC


				
}
?>