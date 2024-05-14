<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Export_sjt extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->auth->restrict();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_pantau_ujian');
		$this->load->library('pdf');
		$this->load->library('excel');
	}
	
	
	function get_hasil_sjt(){
	$employee_data = $this->M_pantau_ujian->export_sjt();
	$objPHPExcel = PHPExcel_IOFactory::load("./assets/excel_template/sjt_template.xlsx");
	$fileName 	 = 'apm2_';

	$objPHPExcel->setActiveSheetIndex(0);
		
		$rowCount = 5;
        foreach ($employee_data as $list) {
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->id_peserta_sjt);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->nama);
            $objPHPExcel->getActiveSheet()->setCellValueExplicit('D' . $rowCount, $list->nip, PHPExcel_Cell_DataType::TYPE_STRING);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $list->jwb_sjt1);
            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, $list->jwb_sjt2);
            $objPHPExcel->getActiveSheet()->SetCellValue('G' . $rowCount, $list->jwb_sjt3);
 			$objPHPExcel->getActiveSheet()->setCellValue('H' . $rowCount, $list->jwb_sjt4);
            $objPHPExcel->getActiveSheet()->setCellValue('I' . $rowCount, $list->jwb_sjt5);
            $objPHPExcel->getActiveSheet()->setCellValue('J' . $rowCount, $list->jwb_sjt6);
            $objPHPExcel->getActiveSheet()->setCellValue('K' . $rowCount, $list->jwb_sjt7);
            $objPHPExcel->getActiveSheet()->setCellValue('L' . $rowCount, $list->jwb_sjt8);
            $objPHPExcel->getActiveSheet()->setCellValue('M' . $rowCount, $list->jwb_sjt9);
            $objPHPExcel->getActiveSheet()->setCellValue('N' . $rowCount, $list->jwb_sjt10);
            $objPHPExcel->getActiveSheet()->setCellValue('O' . $rowCount, $list->jwb_sjt11);
            $objPHPExcel->getActiveSheet()->setCellValue('P' . $rowCount, $list->jwb_sjt12);
            $objPHPExcel->getActiveSheet()->setCellValue('Q' . $rowCount, $list->jwb_sjt13);
            $objPHPExcel->getActiveSheet()->setCellValue('R' . $rowCount, $list->jwb_sjt14);
            $objPHPExcel->getActiveSheet()->setCellValue('S' . $rowCount, $list->jwb_sjt15);
            $objPHPExcel->getActiveSheet()->setCellValue('T' . $rowCount, $list->jwb_sjt16);
            $objPHPExcel->getActiveSheet()->setCellValue('U' . $rowCount, $list->jwb_sjt17);
            $objPHPExcel->getActiveSheet()->setCellValue('V' . $rowCount, $list->jwb_sjt18);
            $objPHPExcel->getActiveSheet()->setCellValue('W' . $rowCount, $list->jwb_sjt19);
            $objPHPExcel->getActiveSheet()->setCellValue('X' . $rowCount, $list->jwb_sjt20);
            $objPHPExcel->getActiveSheet()->setCellValue('Y' . $rowCount, $list->jwb_sjt21);
            $objPHPExcel->getActiveSheet()->setCellValue('Z' . $rowCount, $list->jwb_sjt22);
            $objPHPExcel->getActiveSheet()->setCellValue('AA' . $rowCount, $list->jwb_sjt23);
            $objPHPExcel->getActiveSheet()->setCellValue('AB' . $rowCount, $list->jwb_sjt24);
            $objPHPExcel->getActiveSheet()->setCellValue('AC' . $rowCount, $list->jwb_sjt25);
            $objPHPExcel->getActiveSheet()->setCellValue('AD' . $rowCount, $list->jwb_sjt26);
            $objPHPExcel->getActiveSheet()->setCellValue('AE' . $rowCount, $list->jwb_sjt27);
            $objPHPExcel->getActiveSheet()->setCellValue('AF' . $rowCount, $list->jwb_sjt28);
            $objPHPExcel->getActiveSheet()->setCellValue('AG' . $rowCount, $list->jwb_sjt29);
            $objPHPExcel->getActiveSheet()->setCellValue('AH' . $rowCount, $list->jwb_sjt30);
            $objPHPExcel->getActiveSheet()->setCellValue('AI' . $rowCount, $list->jwb_sjt31);
            $objPHPExcel->getActiveSheet()->setCellValue('AJ' . $rowCount, $list->jwb_sjt32);
            $objPHPExcel->getActiveSheet()->setCellValue('AK' . $rowCount, $list->jwb_sjt33);
            $objPHPExcel->getActiveSheet()->setCellValue('AL' . $rowCount, $list->jwb_sjt34);
            $objPHPExcel->getActiveSheet()->setCellValue('AM' . $rowCount, $list->jwb_sjt35);
            $objPHPExcel->getActiveSheet()->setCellValue('AN' . $rowCount, $list->jwb_sjt36);
            $objPHPExcel->getActiveSheet()->setCellValue('AO' . $rowCount, $list->paket);
            $rowCount++;
        }
	  $filename = "sjt_paketA_".date("d-m-y").".xlsx";
      $objPHPExcel = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
      header('Content-Type: application/vnd.ms-excel');
	  header('Content-Disposition: attachment;filename="'.$filename.'"');
      //header('Content-Disposition: attachment;filename="'.$fileName.''.$row->nama.'.xlsx"');
      $objPHPExcel->save('php://output'); //$templateFile
		
	}
			
}
?>