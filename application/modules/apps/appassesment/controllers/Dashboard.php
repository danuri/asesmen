<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MX_Controller {

  function __construct(){
	    parent::__construct();
		$this->auth->restrict();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_dashboard');
		$this->load->library('pdf');
		$this->load->library('excel');
  }


	function index()  {
		/*
		$x 							= $this->M_dashboard->kompetensi()->result();
		$data['chart_kompetensi'] 	= json_encode($x);

		$y 							= $this->M_dashboard->jabatan();
		$data['chart_jabatan'] 		= json_encode($y);
		*/

		// $data['chart_peta']			= $this->M_dashboard->get_peta();

		$data['peserta'] 			= $this->M_dashboard->hitung_peserta();
		$data['penyelenggaraan'] 	= $this->M_dashboard->hitung_kegiatan();
		$data['tahun'] 				= $this->M_dashboard->get_tahun();
		$data['kegiatan'] 			= $this->M_dashboard->get_kegiatan();
		$data['rekap_jenjang'] 		= $this->M_dashboard->get_jenjang();
		$data['hitung_peserta']		= $this->M_dashboard->hitung_peserta_perkegiatan();

		// $data['total_hari_ini'] 	= $this->M_dashboard->total_hari_ini();
        // $data['total_minggu_ini'] 	= $this->M_dashboard->total_minggu_ini();
        // $data['total_bulan_ini'] 	= $this->M_dashboard->total_bulan_ini();
        // $data['total_semua'] 		= $this->M_dashboard->total_semua();
        // $data['jml_pusat'] 			= $this->M_dashboard->jml_pusat();
        // $data['jml_perwakilan']		= $this->M_dashboard->jml_perwakilan();
        // $data['jabatan'] 			= $this->M_dashboard->jabatan();
        // $data['kompetensi'] 		= $this->M_dashboard->kompetensi();

		$this->load->view('dashboard/dashboard_penyelenggaraan',$data);
  }

	function hasil_internal()  {
		$x 								= $this->M_dashboard->hitung_rekom_internal()->result();
		$data['chart_pemetaan']			= json_encode($x);
		$data['hitung_rekom']			= $this->M_dashboard->hitung_rekom_internal();
		$data['detail_rekom'] 	    	= $this->M_dashboard->detail_rekom_internal();
		$data['hitung_int'] 			= $this->M_dashboard->hitung_komp_int();
		$data['hitung_komp_jptp']		= $this->M_dashboard->hitung_komp_jptp();
		$data['hitung_komp_adm']		= $this->M_dashboard->hitung_komp_adm();
		$data['hitung_komp_pengawas']	= $this->M_dashboard->hitung_komp_pengawas();
		$data['hitung_komp_pelaksana']	= $this->M_dashboard->hitung_komp_pelaksana();
		/*
		$y 							= $this->M_dashboard->hitung_rekom()->result();
		$data['chart_seleksi']		= json_encode($y);
		*/

		$this->load->view('dashboard/dashboard_penilaian',$data);
  }


	function hitung_kegiatan(){
		$data ['penyelenggaraan'] = $this->M_dashboard->hitung_kegiatan();
		$this->load->view('dashboard/dashboard_penyelenggaraan',$data);
	}

	function data_kegiatan(){
		$data = $this->M_dashboard->data_kegiatan();
		echo json_encode($data);
	}

	function kuisi()  {
		$data['kuisi_satu_lima'] 	= $this->M_dashboard->kuisi_satu_lima();

		$responden 					= $this->M_dashboard->chart_responden()->result();
		$data['chart_responden']	= json_encode($responden);
		$grfk1 						= $this->M_dashboard->chart_satu()->result();
		$data['chart_satu'] 		= json_encode($grfk1);
		$grfk2 						= $this->M_dashboard->chart_dua()->result();
		$data['chart_dua'] 			= json_encode($grfk2);
		$grfk3 						= $this->M_dashboard->chart_tiga()->result();
		$data['chart_tiga'] 		= json_encode($grfk3);

		/*
		$data['penyelenggaraan'] 	= $this->M_dashboard->hitung_kegiatan();
		$data['tahun'] 				= $this->M_dashboard->get_tahun();
		$data['kegiatan'] 			= $this->M_dashboard->get_kegiatan();
		$data['rekap_jenjang'] 		= $this->M_dashboard->get_jenjang();
		$data['hitung_peserta']		= $this->M_dashboard->hitung_peserta_perkegiatan();
		*/
		$this->load->view('dashboard/dashboard_kuisioner',$data);
  }

	function data_kuisioner(){
		$data = $this->M_dashboard->data_kuisioner();
		echo json_encode($data);
	}

	function cetak_detail_kuisi(){
		$this->load->view('print/detail_kuisi');
	}

/*==========================================================
SJT
==========================================================*/

	function res_sjt()  {

		$data['total_hari_ini'] 	= $this->M_dashboard->total_hari_ini();
        $data['total_minggu_ini'] 	= $this->M_dashboard->total_minggu_ini();
        $data['total_bulan_ini'] 	= $this->M_dashboard->total_bulan_ini();
        $data['total_semua'] 		= $this->M_dashboard->total_semua();
        $data['jabatan'] 			= $this->M_dashboard->jabatan();
        $data['kompetensi'] 		= $this->M_dashboard->kompetensi();

		$this->load->view('dashboard/dashboard_sjt',$data);
  }

	function get_cetak_lap_hasil($id_kegiatan){
		$data['cetak_indi']= $this->M_dashboard->cetak_lap_hasil($id_kegiatan);
		$this->load->view('cetak/lap_hasil_indi', $data);
    }

	function get_hasil_export($id){
	$objPHPExcel = PHPExcel_IOFactory::load("./assets/excel_template/template_export_hasil_bkkbn.xlsx");
	$fileName 	 = 'LAP_';
      $employee_data = $this->M_dashboard->cetak_lap_hasil($id);
	  $rowCounter = 3;

      foreach($employee_data as $row)
      {
		$objPHPExcel->setActiveSheetIndex(0);
		$objPHPExcel->getActiveSheet()->setCellValueExplicit('B'.$rowCounter, $row->nip, PHPExcel_Cell_DataType::TYPE_STRING);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$rowCounter, $row->nama);
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$rowCounter, $row->pangkat);
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$rowCounter, $row->jenjang);
		$objPHPExcel->getActiveSheet()->setCellValue('F'.$rowCounter, $row->jabatan);
		$objPHPExcel->getActiveSheet()->setCellValue('G'.$rowCounter, $row->unker);

		$objPHPExcel->getActiveSheet()->setCellValue('H'.$rowCounter, $row->aspek_pot1);
		$objPHPExcel->getActiveSheet()->setCellValue('I'.$rowCounter, $row->aspek_pot2);
		$objPHPExcel->getActiveSheet()->setCellValue('J'.$rowCounter, $row->aspek_pot3);
		$objPHPExcel->getActiveSheet()->setCellValue('K'.$rowCounter, $row->aspek_pot4);
		$objPHPExcel->getActiveSheet()->setCellValue('L'.$rowCounter, $row->aspek_pot5);
		$objPHPExcel->getActiveSheet()->setCellValue('M'.$rowCounter, $row->aspek_pot6);
		$objPHPExcel->getActiveSheet()->setCellValue('N'.$rowCounter, $row->aspek_pot7);
		$objPHPExcel->getActiveSheet()->setCellValue('O'.$rowCounter, $row->aspek_pot8);
		$objPHPExcel->getActiveSheet()->setCellValue('P'.$rowCounter, $row->capaian_pot);
		$objPHPExcel->getActiveSheet()->setCellValue('Q'.$rowCounter, $row->rekom_pot);

		$objPHPExcel->getActiveSheet()->setCellValue('R'.$rowCounter, $row->aspek_komp1);
		$objPHPExcel->getActiveSheet()->setCellValue('S'.$rowCounter, $row->aspek_komp2);
		$objPHPExcel->getActiveSheet()->setCellValue('T'.$rowCounter, $row->aspek_komp3);
		$objPHPExcel->getActiveSheet()->setCellValue('U'.$rowCounter, $row->aspek_komp4);
		$objPHPExcel->getActiveSheet()->setCellValue('V'.$rowCounter, $row->aspek_komp5);
		$objPHPExcel->getActiveSheet()->setCellValue('W'.$rowCounter, $row->aspek_komp6);
		$objPHPExcel->getActiveSheet()->setCellValue('X'.$rowCounter, $row->aspek_komp7);
		$objPHPExcel->getActiveSheet()->setCellValue('Y'.$rowCounter, $row->aspek_komp8);
		$objPHPExcel->getActiveSheet()->setCellValue('Z'.$rowCounter, $row->aspek_komp9);
		$objPHPExcel->getActiveSheet()->setCellValue('AA'.$rowCounter, $row->capaian_komp);
		$objPHPExcel->getActiveSheet()->setCellValue('AB'.$rowCounter, $row->rekom_komp);

		$objPHPExcel->getActiveSheet()->setCellValue('AC'.$rowCounter, $row->uraian_potensi);

		$objPHPExcel->getActiveSheet()->setCellValue('AD'.$rowCounter, $row->kek_1);
		$objPHPExcel->getActiveSheet()->setCellValue('AE'.$rowCounter, $row->kek_2);
		$objPHPExcel->getActiveSheet()->setCellValue('AF'.$rowCounter, $row->kek_3);
		$objPHPExcel->getActiveSheet()->setCellValue('AG'.$rowCounter, $row->kek_4);
		$objPHPExcel->getActiveSheet()->setCellValue('AH'.$rowCounter, $row->kek_5);
		$objPHPExcel->getActiveSheet()->setCellValue('AI'.$rowCounter, $row->kek_6);

		$objPHPExcel->getActiveSheet()->setCellValue('AJ'.$rowCounter, $row->ap_1);
		$objPHPExcel->getActiveSheet()->setCellValue('AK'.$rowCounter, $row->ap_2);
		$objPHPExcel->getActiveSheet()->setCellValue('AL'.$rowCounter, $row->ap_3);
		$objPHPExcel->getActiveSheet()->setCellValue('AM'.$rowCounter, $row->ap_4);
		$objPHPExcel->getActiveSheet()->setCellValue('AN'.$rowCounter, $row->ap_5);
		$objPHPExcel->getActiveSheet()->setCellValue('AO'.$rowCounter, $row->ap_6);

		$objPHPExcel->getActiveSheet()->setCellValue('AP'.$rowCounter, $row->speng_1);
		$objPHPExcel->getActiveSheet()->setCellValue('AQ'.$rowCounter, $row->speng_2);
		$objPHPExcel->getActiveSheet()->setCellValue('AR'.$rowCounter, $row->speng_3);
		$objPHPExcel->getActiveSheet()->setCellValue('AS'.$rowCounter, $row->speng_4);
		$objPHPExcel->getActiveSheet()->setCellValue('AT'.$rowCounter, $row->speng_5);
		$objPHPExcel->getActiveSheet()->setCellValue('AU'.$rowCounter, $row->speng_6);
		$objPHPExcel->getActiveSheet()->setCellValue('AV'.$rowCounter, $row->speng_7);
		$objPHPExcel->getActiveSheet()->setCellValue('AW'.$rowCounter, $row->speng_8);
		$objPHPExcel->getActiveSheet()->setCellValue('AX'.$rowCounter, $row->speng_9);
		$objPHPExcel->getActiveSheet()->setCellValue('AY'.$rowCounter, $row->speng_10);

		$objPHPExcel->getActiveSheet()->setCellValue('AZ'.$rowCounter, $row->sp_1);
		$objPHPExcel->getActiveSheet()->setCellValue('BA'.$rowCounter, $row->sp_2);
		$objPHPExcel->getActiveSheet()->setCellValue('BB'.$rowCounter, $row->sp_3);

		$objPHPExcel->getActiveSheet()->setCellValue('BC'.$rowCounter, $row->nama_kegiatan);
		$objPHPExcel->getActiveSheet()->setCellValue('BD'.$rowCounter, $row->tgl_keg);
		$objPHPExcel->getActiveSheet()->setCellValue('BE'.$rowCounter, $row->nama_personil);

		$rowCounter++;
		}




      $objPHPExcel = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
      header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="'.$fileName.''.$row->nama_kegiatan.'.xlsx"');

	  ob_clean();
      $objPHPExcel->save('php://output'); //$templateFile
	}


}
?>
