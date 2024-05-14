<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Peserta extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->auth->restrict();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_peserta');
		$this->load->model('M_kegiatan');
		$this->load->library('pdf');
		$this->load->library('excel');
	
	}	

//==============================================================================================================================	
	function peserta_kota(){
		$this->load->view('peserta/peserta_kotang');
	}
	
	function data_tahun() {
		$data['tahun'] = $this->M_peserta->data_tahun();
		$this->load->view('peserta/peserta_tahun', $data);
	}
	
	function search(){
      $data['caridata']=$this->M_registrasi->get_cari();
      $this->load->view('peserta/peserta_external',$data);
    }	
	
	function data_kota(){
		$data = $this->M_peserta->data_kota();
		echo json_encode($data);
	}	
	
	function get_internal($idd){
		$data['profile'] 	= $this->M_peserta->get_profile($idd);
		$data['assessment'] = $this->M_peserta->get_assessment($idd);
		$data['pic']	    = $this->M_peserta->get_pic($idd);
		$data['kegiatan']	= $this->M_peserta->get_kegiatan($idd);
		$data['hasil'] 		= $this->M_peserta->get_detail_hasil($idd);
		$data['apm']		= $this->M_peserta->lihat_apm_dua_row($idd);
		$data['kompetensi']	= $this->M_peserta->get_kompetensi_kerjasama($idd);
		$data['potensi']	= $this->M_peserta->get_potensi_kerjasama($idd);
		$this->load->view('peserta/detail_peserta_kotang', $data);
    }	
	
	function lihat_drh($idd){
		$data['drh'] = $this->M_peserta->cetak_drh_row($idd);
		$this->load->view('cetak/lap_drh', $data);
    }	
	
	function lihat_ci($idd){
		$data['ci'] = $this->M_peserta->cetak_ci_row($idd);
		$this->load->view('cetak/lap_ci', $data);
	}	

	function lihat_qkom($idd){
		$data['qkom'] = $this->M_peserta->cetak_qkom_row($idd);
		$this->load->view('cetak/lap_qkom', $data);
	}	

	function lihat_ankas($idd){
		$data['ankas'] = $this->M_peserta->cetak_ankas_row($idd);
		$this->load->view('cetak/lap_ankas', $data);
	}	

	function lihat_apm_dua($idd){
		$data['apm'] = $this->M_peserta->lihat_apm_dua_row($idd);
		$this->load->view('jadwal/index',$data);
	}	

//// END PESERTA KOTA TANGERANG ////		

		
	function peserta_pegmasuk(){
		$this->load->view('peserta/peserta_pegmasuk');
	}
	
	function get_peserta_pegmasuk(){
		$data = $this->m_peserta->peserta_pegmasuk();
		echo json_encode($data);
	}	
	
	function peserta_lainnya(){
		$this->load->view('peserta/peserta_lainnya');
	}
	
	function get_peserta_lainnya(){
		$data = $this->m_peserta->peserta_lainnya();
		echo json_encode($data);
	}

//// END PEGAWAI MASUK ////		
				
	function peserta_kerjasama(){
		$this->load->view('peserta/peserta_kerjasama');
	}
	
	function data_peserta_kerjasama(){
		$data = $this->M_peserta->data_kerjasama();
		echo json_encode($data);
	}	
	
	function get_kerjasama($idd){
		$data['profile'] 	= $this->M_peserta->get_profile_kerjasama($idd);
		$data['assessment'] = $this->M_peserta->get_assessment_kerjasama($idd);
		$data['pic']	    = $this->M_peserta->get_pic_kerjasama($idd);
		$data['kegiatan']	= $this->M_peserta->get_kegiatan_kerjasama($idd);
		$data['hasil'] 		= $this->M_peserta->get_detail_hasil($idd);
		$data['apm']		 = $this->M_peserta->lihat_apm_dua_row($idd);
		$data['kompetensi']	= $this->M_peserta->get_kompetensi_kerjasama($idd);
		$data['potensi']	= $this->M_peserta->get_potensi_kerjasama($idd);
		$this->load->view('peserta/detail_peserta_kerjasama', $data);
    }	
	
		

//// END PESERTA KERJASAMA ////		


//// KOMPETENSI ////	

	function simpan_potensi(){
		$id_potensi			=$this->input->post('id_potensi');
		$id_peserta		    =$this->input->post('id_peserta');
		$kd_personil_wwcr	=$this->input->post('kd_personil_wwcr');
		$nip				=$this->input->post('nip');
		$nilai_da_pot		=$this->input->post('nilai_da_pot');
		$nilai_lb_pot		=$this->input->post('nilai_lb_pot');
		$nilai_sk_pot		=$this->input->post('nilai_sk_pot');
		$nilai_ini_pot		=$this->input->post('nilai_ini_pot');
		$nilai_dtk_pot		=$this->input->post('nilai_dtk_pot');
		$nilai_kep_pot		=$this->input->post('nilai_kep_pot');
		$nilai_db_pot		=$this->input->post('nilai_db_pot');
		$nilai_tj_pot		=$this->input->post('nilai_tj_pot');
		$nilai_ki_pot		=$this->input->post('nilai_ki_pot');
		$nilai_kd_pot		=$this->input->post('nilai_kd_pot');
		$nilai_se_pot		=$this->input->post('nilai_se_pot');
		$nilai_pot			=$this->input->post('nilai_pot');
		$percent_pot		=$this->input->post('percent_pot');
	
		$data= array(
						'id_potensi'		=> $id_potensi,
						'id_peserta'		=> $id_peserta,
						'kd_personil_wwcr'	=> $kd_personil_wwcr,
						'nip'				=> $nip,
						'nilai_da_pot'		=> $nilai_da_pot,
						'nilai_lb_pot'		=> $nilai_lb_pot,
						'nilai_sk_pot'		=> $nilai_sk_pot,
						'nilai_ini_pot'		=> $nilai_ini_pot,
						'nilai_dtk_pot'		=> $nilai_dtk_pot,
						'nilai_kep_pot'		=> $nilai_kep_pot,
						'nilai_db_pot'		=> $nilai_db_pot,
						'nilai_tj_pot'		=> $nilai_tj_pot,
						'nilai_ki_pot'		=> $nilai_ki_pot,
						'nilai_kd_pot'		=> $nilai_kd_pot,
						'nilai_se_pot'		=> $nilai_se_pot,
						'nilai_pot'			=> $nilai_pot,
						'percent_pot'		=> $percent_pot );

						
		$this->M_peserta->input_potensi($data,'poten_nilai');
		redirect($_SERVER['HTTP_REFERER']);
	}

	function simpan_kompetensi(){
		$id_kom_lgd				=$this->input->post('id_kom_lgd');
		$id_kom_ankas			=$this->input->post('id_kom_ankas');
		$id_kom_bei				=$this->input->post('id_kom_bei');
		$id_kom_bei_sekda		=$this->input->post('id_kom_bei_sekda');
		$id_kom_pw				=$this->input->post('id_kom_pw');
		$id_peserta		    	=$this->input->post('id_peserta');
		$kd_personil_wwcr		=$this->input->post('kd_personil_wwcr');
		$nip					=$this->input->post('nip');
		$nilai_lgd_kjs			=$this->input->post('nilai_lgd_kjs');
		$bobot_lgd_kjs			=$this->input->post('bobot_lgd_kjs');
		$ev_lgd_kjs				=$this->input->post('ev_lgd_kjs');
		$nilai_lgd_kom			=$this->input->post('nilai_lgd_kom');
		$bobot_lgd_kom			=$this->input->post('bobot_lgd_kom');
		$ev_lgd_kom				=$this->input->post('ev_lgd_kom');
		$nilai_lgd_oph			=$this->input->post('nilai_lgd_oph');
		$bobot_lgd_oph			=$this->input->post('bobot_lgd_oph');
		$ev_lgd_oph				=$this->input->post('ev_lgd_oph');
		$nilai_lgd_mp			=$this->input->post('nilai_lgd_mp');
		$bobot_lgd_mp			=$this->input->post('bobot_lgd_mp');
		$ev_lgd_mp				=$this->input->post('ev_lgd_mp');
		$nilai_lgd_pk			=$this->input->post('nilai_lgd_pk');
		$bobot_lgd_pk			=$this->input->post('bobot_lgd_pk');
		$ev_lgd_pk				=$this->input->post('ev_lgd_pk');
		// bei
		$nilai_bei_int			=$this->input->post('nilai_bei_int');
		$bobot_bei_int			=$this->input->post('bobot_bei_int');
		$ev_bei_int				=$this->input->post('ev_bei_int');
		$nilai_bei_kjs			=$this->input->post('nilai_bei_kjs');
		$bobot_bei_kjs			=$this->input->post('bobot_bei_kjs');
		$ev_bei_kjs				=$this->input->post('ev_bei_kjs');
		$nilai_bei_kom			=$this->input->post('nilai_bei_kom');
		$bobot_bei_kom			=$this->input->post('bobot_bei_kom');
		$ev_bei_kom				=$this->input->post('ev_bei_kom');
		$nilai_bei_oph			=$this->input->post('nilai_bei_oph');
		$bobot_bei_oph			=$this->input->post('bobot_bei_oph');
		$ev_bei_oph				=$this->input->post('ev_bei_oph');
		$nilai_bei_pp			=$this->input->post('nilai_bei_pp');
		$bobot_bei_pp			=$this->input->post('bobot_bei_pp');
		$ev_bei_pp				=$this->input->post('ev_bei_pp');
		$nilai_bei_pdol			=$this->input->post('nilai_bei_pdol');
		$bobot_bei_pdol			=$this->input->post('bobot_bei_pdol');
		$ev_bei_pdol			=$this->input->post('ev_bei_pdol');
		$nilai_bei_mp			=$this->input->post('nilai_bei_mp');
		$bobot_bei_mp			=$this->input->post('bobot_bei_mp');
		$ev_bei_mp				=$this->input->post('ev_bei_mp');
		$nilai_bei_pk			=$this->input->post('nilai_bei_pk');
		$bobot_bei_pk			=$this->input->post('bobot_bei_pk');
		$ev_bei_pk				=$this->input->post('ev_bei_pk');
		$nilai_bei_pb			=$this->input->post('nilai_bei_pb');
		$bobot_bei_pb			=$this->input->post('bobot_bei_pb');
		$ev_bei_pb				=$this->input->post('ev_bei_pb');
		// ankas
		$nilai_ankas_kom		=$this->input->post('nilai_ankas_kom');
		$bobot_ankas_kom		=$this->input->post('bobot_ankas_kom');
		$ev_ankas_kom			=$this->input->post('ev_ankas_kom');
		$nilai_ankas_oph		=$this->input->post('nilai_ankas_oph');
		$bobot_ankas_oph		=$this->input->post('bobot_ankas_oph');
		$ev_ankas_oph			=$this->input->post('ev_ankas_oph');
		$nilai_ankas_pp			=$this->input->post('nilai_ankas_pp');
		$bobot_ankas_pp			=$this->input->post('bobot_ankas_pp');
		$ev_ankas_pp			=$this->input->post('ev_ankas_pp');
		$nilai_ankas_mp			=$this->input->post('nilai_ankas_mp');
		$bobot_ankas_mp			=$this->input->post('bobot_ankas_mp');
		$ev_ankas_mp			=$this->input->post('ev_ankas_mp');
		$nilai_ankas_pk			=$this->input->post('nilai_ankas_pk');
		$bobot_ankas_pk			=$this->input->post('bobot_ankas_pk');
		$ev_ankas_pk			=$this->input->post('ev_ankas_pk');
		// bei sekda
		$nilai_bei_sekda_int	=$this->input->post('nilai_bei_sekda_int');
		$bobot_bei_sekda_int	=$this->input->post('bobot_bei_sekda_int');
		$ev_bei_sekda_int		=$this->input->post('ev_bei_sekda_int');
		$nilai_bei_sekda_kjs	=$this->input->post('nilai_bei_sekda_kjs');
		$bobot_bei_sekda_kjs	=$this->input->post('bobot_bei_sekda_kjs');
		$ev_bei_sekda_kjs		=$this->input->post('ev_bei_sekda_kjs');
		$nilai_bei_sekda_kom	=$this->input->post('nilai_bei_sekda_kom');
		$bobot_bei_sekda_kom	=$this->input->post('bobot_bei_sekda_kom');
		$ev_bei_sekda_kom		=$this->input->post('ev_bei_sekda_kom');
		$nilai_bei_sekda_oph	=$this->input->post('nilai_bei_sekda_oph');
		$bobot_bei_sekda_oph	=$this->input->post('bobot_bei_sekda_oph');
		$ev_bei_sekda_oph		=$this->input->post('ev_bei_sekda_oph');
		$nilai_bei_sekda_pp		=$this->input->post('nilai_bei_sekda_pp');
		$bobot_bei_sekda_pp		=$this->input->post('bobot_bei_sekda_pp');
		$ev_bei_sekda_pp		=$this->input->post('ev_bei_sekda_pp');
		$nilai_bei_sekda_pdol	=$this->input->post('nilai_bei_sekda_pdol');
		$bobot_bei_sekda_pdol	=$this->input->post('bobot_bei_sekda_pdol');
		$ev_bei_sekda_pdol		=$this->input->post('ev_bei_sekda_pdol');
		$nilai_bei_sekda_mp		=$this->input->post('nilai_bei_sekda_mp');
		$bobot_bei_sekda_mp		=$this->input->post('bobot_bei_sekda_mp');
		$ev_bei_sekda_mp		=$this->input->post('ev_bei_sekda_mp');
		$nilai_bei_sekda_pk		=$this->input->post('nilai_bei_sekda_pk');
		$bobot_bei_sekda_pk		=$this->input->post('bobot_bei_sekda_pk');
		$ev_bei_sekda_pk		=$this->input->post('ev_bei_sekda_pk');
		$nilai_bei_sekda_pb		=$this->input->post('nilai_bei_sekda_pb');
		$bobot_bei_sekda_pb		=$this->input->post('bobot_bei_sekda_pb');
		$ev_bei_sekda_pb		=$this->input->post('ev_bei_sekda_pb');
		// pw
		$nilai_pw_int			=$this->input->post('nilai_pw_int');
		$bobot_pw_int			=$this->input->post('bobot_pw_int');
		$ev_pw_int				=$this->input->post('ev_pw_int');
		$nilai_pw_pdol			=$this->input->post('nilai_pw_pdol');
		$bobot_pw_pdol			=$this->input->post('bobot_pw_pdol');
		$ev_pw_pdol				=$this->input->post('ev_pw_pdol');
		$nilai_pw_pb			=$this->input->post('nilai_pw_pb');
		$bobot_pw_pb			=$this->input->post('bobot_pw_pb');
		$ev_pw_pb				=$this->input->post('ev_pw_pb');
		
		
		
		$data1 = array(
						'id_kom_lgd'			=> $id_kom_lgd,
						'id_peserta'			=> $id_peserta,
						'kd_personil_wwcr'		=> $kd_personil_wwcr,
						'nip'					=> $nip,
						'nilai_lgd_kjs'			=> $nilai_lgd_kjs,
						'bobot_lgd_kjs'			=> $bobot_lgd_kjs,
						'ev_lgd_kjs'			=> $ev_lgd_kjs,
						'nilai_lgd_kom'			=> $nilai_lgd_kom,
						'bobot_lgd_kom'			=> $bobot_lgd_kom,
						'ev_lgd_kom'			=> $ev_lgd_kom,
						'nilai_lgd_oph'			=> $nilai_lgd_oph,
						'bobot_lgd_oph'			=> $bobot_lgd_oph,
						'ev_lgd_oph'			=> $ev_lgd_oph,
						'nilai_lgd_mp'			=> $nilai_lgd_mp,
						'bobot_lgd_mp'			=> $bobot_lgd_mp,
						'ev_lgd_mp'				=> $ev_lgd_mp,
						'nilai_lgd_pk'			=> $nilai_lgd_pk,
						'bobot_lgd_pk'			=> $bobot_lgd_pk,
						'ev_lgd_pk'             => $ev_lgd_pk );
						
		$data2 = array(
						'id_kom_bei'		=> $id_kom_bei,
						'id_peserta'		=> $id_peserta,
						'kd_personil_wwcr'	=> $kd_personil_wwcr,
						'nip'				=> $nip,
						'nilai_bei_int'		=> $nilai_bei_int,
						'bobot_bei_int'		=> $bobot_bei_int,
						'ev_bei_int'		=> $ev_bei_int,
						'nilai_bei_kjs'		=> $nilai_bei_kjs,
						'bobot_bei_kjs'		=> $bobot_bei_kjs,
						'ev_bei_kjs'		=> $ev_bei_kjs,
						'nilai_bei_kom'		=> $nilai_bei_kom,
						'bobot_bei_kom'		=> $bobot_bei_kom,
						'ev_bei_kom'		=> $ev_bei_kom,
						'nilai_bei_oph'		=> $nilai_bei_oph,
						'bobot_bei_oph'		=> $bobot_bei_oph,
						'ev_bei_oph'		=> $ev_bei_oph,
						'nilai_bei_pp'		=> $nilai_bei_pp,
						'bobot_bei_pp'		=> $bobot_bei_pp,
						'ev_bei_pp'			=> $ev_bei_pp,
						'nilai_bei_pdol'	=> $nilai_bei_pdol,
						'bobot_bei_pdol'	=> $bobot_bei_pdol,
						'ev_bei_pdol'		=> $ev_bei_pdol,
						'nilai_bei_mp'		=> $nilai_bei_mp,
						'bobot_bei_mp'		=> $bobot_bei_mp,
						'ev_bei_mp'			=> $ev_bei_mp,
						'nilai_bei_pk'		=> $nilai_bei_pk,
						'bobot_bei_pk'		=> $bobot_bei_pk,
						'ev_bei_pk'			=> $ev_bei_pk,
						'nilai_bei_pb'		=> $nilai_bei_pb,
						'bobot_bei_pb'		=> $bobot_bei_pb,
						'ev_bei_pb'			=> $ev_bei_pb );
						
		$data3 = array(
						'id_kom_ankas'			=> $id_kom_ankas,
						'id_peserta'			=> $id_peserta,
						'kd_personil_wwcr'		=> $kd_personil_wwcr,
						'nip'					=> $nip,
						'nilai_ankas_kom'		=> $nilai_ankas_kom,
						'bobot_ankas_kom'		=> $bobot_ankas_kom,
						'ev_ankas_kom'			=> $ev_ankas_kom,
						'nilai_ankas_oph'		=> $nilai_ankas_oph,
						'bobot_ankas_oph'		=> $bobot_ankas_oph,
						'ev_ankas_oph'			=> $ev_ankas_oph,
						'nilai_ankas_pp'		=> $nilai_ankas_pp,
						'bobot_ankas_pp'		=> $bobot_ankas_pp,
						'ev_ankas_pp'			=> $ev_ankas_pp,
						'nilai_ankas_mp'		=> $nilai_ankas_mp,
						'bobot_ankas_mp'		=> $bobot_ankas_mp,
						'ev_ankas_mp'			=> $ev_ankas_mp,
						'nilai_ankas_pk'		=> $nilai_ankas_pk,
						'bobot_ankas_pk'		=> $bobot_ankas_pk,
						'ev_ankas_pk'			=> $ev_ankas_pk );
						
						
		$data4 = array(
						'id_kom_bei_sekda'		=> $id_kom_bei_sekda,
						'id_peserta'			=> $id_peserta,
						'kd_personil_wwcr'		=> $kd_personil_wwcr,
						'nip'					=> $nip,
						'nilai_bei_sekda_int'	=> $nilai_bei_sekda_int,
						'bobot_bei_sekda_int'	=> $bobot_bei_sekda_int,
						'ev_bei_sekda_int'		=> $ev_bei_sekda_int,
						'nilai_bei_sekda_kjs'	=> $nilai_bei_sekda_kjs,
						'bobot_bei_sekda_kjs'	=> $bobot_bei_sekda_kjs,
						'ev_bei_sekda_kjs'		=> $ev_bei_sekda_kjs,
						'nilai_bei_sekda_kom'	=> $nilai_bei_sekda_kom,
						'bobot_bei_sekda_kom'	=> $bobot_bei_sekda_kom,
						'ev_bei_sekda_kom'		=> $ev_bei_sekda_kom,
						'nilai_bei_sekda_oph'	=> $nilai_bei_sekda_oph,
						'bobot_bei_sekda_oph'	=> $bobot_bei_sekda_oph,
						'ev_bei_sekda_oph'		=> $ev_bei_sekda_oph,
						'nilai_bei_sekda_pp'	=> $nilai_bei_sekda_pp,
						'bobot_bei_sekda_pp'	=> $bobot_bei_sekda_pp,
						'ev_bei_sekda_pp'		=> $ev_bei_sekda_pp,
						'nilai_bei_sekda_pdol'	=> $nilai_bei_sekda_pdol,
						'bobot_bei_sekda_pdol'	=> $bobot_bei_sekda_pdol,
						'ev_bei_sekda_pdol'		=> $ev_bei_sekda_pdol,
						'nilai_bei_sekda_mp'	=> $nilai_bei_sekda_mp,
						'bobot_bei_sekda_mp'	=> $bobot_bei_sekda_mp,
						'ev_bei_sekda_mp'		=> $ev_bei_sekda_mp,
						'nilai_bei_sekda_pk'	=> $nilai_bei_sekda_pk,
						'bobot_bei_sekda_pk'	=> $bobot_bei_sekda_pk,
						'ev_bei_sekda_pk'		=> $ev_bei_sekda_pk,
						'nilai_bei_sekda_pb'	=> $nilai_bei_sekda_pb,
						'bobot_bei_sekda_pb'	=> $bobot_bei_sekda_pb,
						'ev_bei_sekda_pb'		=> $ev_bei_sekda_pb );
						
		$data5 = array(
						'id_kom_pw'			=> $id_kom_pw,
						'id_peserta'		=> $id_peserta,
						'kd_personil_wwcr'	=> $kd_personil_wwcr,
						'nip'				=> $nip,
						'nilai_pw_int'		=> $nilai_pw_int,
						'bobot_pw_int'		=> $bobot_pw_int,
						'ev_pw_int'			=> $ev_pw_int,
						'nilai_pw_pdol'		=> $nilai_pw_pdol,
						'bobot_pw_pdol'		=> $bobot_pw_pdol,
						'ev_pw_pdol'		=> $ev_pw_pdol,
						'nilai_pw_pb'		=> $nilai_pw_pb,
						'bobot_pw_pb'		=> $bobot_pw_pb,
						'ev_pw_pb'			=> $ev_pw_pb );
						
		
		$this->M_peserta->input_kompetensi($data1,'komp_lgd');
		$this->M_peserta->input_kompetensi($data2,'komp_bei');
		$this->M_peserta->input_kompetensi($data3,'komp_ankas');
		$this->M_peserta->input_kompetensi($data4,'komp_bei_sekda');
		$this->M_peserta->input_kompetensi($data5,'komp_pw');
		redirect($_SERVER['HTTP_REFERER']);
	}




















	
//// END KOMPETENSI ////		
	
	
	
	
	
}
?>