<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Export_apm2 extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->auth->restrict();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_peserta');
		$this->load->library('pdf');
		$this->load->library('excel');
	}
	
	
	function get_hasil_apm2(){
	$employee_data = $this->M_peserta->export_apm2();
	$objPHPExcel = PHPExcel_IOFactory::load("./assets/excel_template/apm2_template.xlsx");
	$fileName 	 = 'apm2_';

	$objPHPExcel->setActiveSheetIndex(0);
		
		$rowCount = 5;
        foreach ($employee_data as $list) {
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->id_peserta_apm_dua);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->nama);
            $objPHPExcel->getActiveSheet()->setCellValueExplicit('D' . $rowCount, $list->nip, PHPExcel_Cell_DataType::TYPE_STRING);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $list->jwb_apm_dua_1);
            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, $list->jwb_apm_dua_2);
            $objPHPExcel->getActiveSheet()->SetCellValue('G' . $rowCount, $list->jwb_apm_dua_3);
 			$objPHPExcel->getActiveSheet()->setCellValue('H' . $rowCount, $list->jwb_apm_dua_4);
            $objPHPExcel->getActiveSheet()->setCellValue('I' . $rowCount, $list->jwb_apm_dua_5);
            $objPHPExcel->getActiveSheet()->setCellValue('J' . $rowCount, $list->jwb_apm_dua_6);
            $objPHPExcel->getActiveSheet()->setCellValue('K' . $rowCount, $list->jwb_apm_dua_7);
            $objPHPExcel->getActiveSheet()->setCellValue('L' . $rowCount, $list->jwb_apm_dua_8);
            $objPHPExcel->getActiveSheet()->setCellValue('M' . $rowCount, $list->jwb_apm_dua_9);
            $objPHPExcel->getActiveSheet()->setCellValue('N' . $rowCount, $list->jwb_apm_dua_10);
            $objPHPExcel->getActiveSheet()->setCellValue('O' . $rowCount, $list->jwb_apm_dua_11);
            $objPHPExcel->getActiveSheet()->setCellValue('P' . $rowCount, $list->jwb_apm_dua_12);
            $objPHPExcel->getActiveSheet()->setCellValue('Q' . $rowCount, $list->jwb_apm_dua_13);
            $objPHPExcel->getActiveSheet()->setCellValue('R' . $rowCount, $list->jwb_apm_dua_14);
            $objPHPExcel->getActiveSheet()->setCellValue('S' . $rowCount, $list->jwb_apm_dua_15);
            $objPHPExcel->getActiveSheet()->setCellValue('T' . $rowCount, $list->jwb_apm_dua_16);
            $objPHPExcel->getActiveSheet()->setCellValue('U' . $rowCount, $list->jwb_apm_dua_17);
            $objPHPExcel->getActiveSheet()->setCellValue('V' . $rowCount, $list->jwb_apm_dua_18);
            $objPHPExcel->getActiveSheet()->setCellValue('W' . $rowCount, $list->jwb_apm_dua_19);
            $objPHPExcel->getActiveSheet()->setCellValue('X' . $rowCount, $list->jwb_apm_dua_20);
            $objPHPExcel->getActiveSheet()->setCellValue('Y' . $rowCount, $list->jwb_apm_dua_21);
            $objPHPExcel->getActiveSheet()->setCellValue('Z' . $rowCount, $list->jwb_apm_dua_22);
            $objPHPExcel->getActiveSheet()->setCellValue('AA' . $rowCount, $list->jwb_apm_dua_23);
            $objPHPExcel->getActiveSheet()->setCellValue('AB' . $rowCount, $list->jwb_apm_dua_24);
            $objPHPExcel->getActiveSheet()->setCellValue('AC' . $rowCount, $list->jwb_apm_dua_25);
            $objPHPExcel->getActiveSheet()->setCellValue('AD' . $rowCount, $list->jwb_apm_dua_26);
            $objPHPExcel->getActiveSheet()->setCellValue('AE' . $rowCount, $list->jwb_apm_dua_27);
            $objPHPExcel->getActiveSheet()->setCellValue('AF' . $rowCount, $list->jwb_apm_dua_28);
            $objPHPExcel->getActiveSheet()->setCellValue('AG' . $rowCount, $list->jwb_apm_dua_29);
            $objPHPExcel->getActiveSheet()->setCellValue('AH' . $rowCount, $list->jwb_apm_dua_30);
            $objPHPExcel->getActiveSheet()->setCellValue('AI' . $rowCount, $list->jwb_apm_dua_31);
            $objPHPExcel->getActiveSheet()->setCellValue('AJ' . $rowCount, $list->jwb_apm_dua_32);
            $objPHPExcel->getActiveSheet()->setCellValue('AK' . $rowCount, $list->jwb_apm_dua_33);
            $objPHPExcel->getActiveSheet()->setCellValue('AL' . $rowCount, $list->jwb_apm_dua_34);
            $objPHPExcel->getActiveSheet()->setCellValue('AM' . $rowCount, $list->jwb_apm_dua_35);
            $objPHPExcel->getActiveSheet()->setCellValue('AN' . $rowCount, $list->jwb_apm_dua_36);
            $rowCount++;
        }
	  $filename = "apm_set_2_".date("d-m-y").".xlsx";
      $objPHPExcel = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
      header('Content-Type: application/vnd.ms-excel');
	  header('Content-Disposition: attachment;filename="'.$filename.'"');
      //header('Content-Disposition: attachment;filename="'.$fileName.''.$row->nama.'.xlsx"');
      $objPHPExcel->save('php://output'); //$templateFile
		
	}
		
		
}
?>