<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Export_kuisi extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->auth->restrict();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_pantau_ujian');
		$this->load->library('pdf');
		$this->load->library('excel');
	}
	
	
	function index(){
		$kuisi 			= $this->M_pantau_ujian->view();
		$data['kuisi'] 	= $this->M_pantau_ujian->export_kuisi();
		$this->load->view('cetak/data_kuisi',$data);
	}
	
	function hasil_kuisi(){
		$data['kuisi'] = $this->M_pantau_ujian->export_kuisi();
		$this->load->view('cetak/data_kuisi',$data);
	}
	
	function get_hasil_kuisi(){
	
	$objPHPExcel = PHPExcel_IOFactory::load("./assets/excel_template/kuisi_template.xlsx");
	
	$objPHPExcel->setActiveSheetIndex(0);
	$table_columns = array("id_kuisi",	"tahun",	"bulan",	"tgl_assessment",	"jabatan",	"kuisi_1",	"kuisi_1_a",	"kuisi_1_lain",	"kuisi_2",	"kuisi_2_a",	"kuisi_2_lain",	"kuisi_3",	"kuisi_3_a",	"kuisi_3_lain",	"kuisi_4",	"kuisi_4_a",	"kuisi_4_lain",	"kuisi_5",	"kuisi_6",	"kuisi_6_a",	"kuisi_6_lain",	"kuisi_7",	"kuisi_7_a",	"kuisi_7_lain",	"kuisi_8",	"kuisi_8_a",	"kuisi_8_lain",	"kuisi_9",	"kuisi_9_a",	"kuisi_9_lain",	"kuisi_10",	"kuisi_10_a",	"kuisi_10_lain",	"kuisi_11",	"kuisi_11_a",	"kuisi_11_lain",	"kuisi_12",	"kuisi_12_a",	"kuisi_12_lain",	"kuisi_13",	"kuisi_13_a",	"kuisi_13_lain",	"kuisi_14",	"kuisi_14_a",	"kuisi_14_lain",	"kuisi_15",	"kuisi_15_a",	"kuisi_15_lain",	"kuisi_16",	"kuisi_16_a",	"kuisi_16_lain",	"kuisi_17",	"kuisi_17_lain",	"kuisi_18",	"kuisi_18_lain",	"kuisi_19",	"kuisi_19_lain",	"kuisi_20",	"kuisi_21",	"ket",	"last_update"
);
	 $column = 0;
	$fileName 	 = 'kuisioner_';
	
	
	foreach($table_columns as $field){
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
        $column++;
      }
	  
	 $employee_data = $this->M_pantau_ujian->export_kuisi();

      $excel_row = 2;

      foreach($employee_data as $row){
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->id_kuisi);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->tgl_assessment);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->jabatan);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->kuisi_1);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->kuisi_1_a);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->kuisi_1_lain);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->kuisi_2);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->kuisi_2_a);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->kuisi_2_lain);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->kuisi_3);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->kuisi_3_a);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->kuisi_3_lain);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->kuisi_4);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->kuisi_4_a);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->kuisi_4_lain);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->kuisi_5);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row->kuisi_6);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $row->kuisi_6_a);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(20, $excel_row, $row->kuisi_6_lain);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(21, $excel_row, $row->kuisi_7);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(22, $excel_row, $row->kuisi_7_a);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(23, $excel_row, $row->kuisi_7_lain);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(24, $excel_row, $row->kuisi_8);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(25, $excel_row, $row->kuisi_8_a);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(26, $excel_row, $row->kuisi_8_lain);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(27, $excel_row, $row->kuisi_9);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(28, $excel_row, $row->kuisi_9_a);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(29, $excel_row, $row->kuisi_9_lain);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(30, $excel_row, $row->kuisi_10);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(31, $excel_row, $row->kuisi_10_a);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(32, $excel_row, $row->kuisi_10_lain);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(33, $excel_row, $row->kuisi_11);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(34, $excel_row, $row->kuisi_11_a);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(35, $excel_row, $row->kuisi_11_lain);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(36, $excel_row, $row->kuisi_12);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(37, $excel_row, $row->kuisi_12_a);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(38, $excel_row, $row->kuisi_12_lain);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(39, $excel_row, $row->kuisi_13);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(40, $excel_row, $row->kuisi_13_a);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(41, $excel_row, $row->kuisi_13_lain);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(42, $excel_row, $row->kuisi_14);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(43, $excel_row, $row->kuisi_14_a);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(44, $excel_row, $row->kuisi_14_lain);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(45, $excel_row, $row->kuisi_15);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(46, $excel_row, $row->kuisi_15_a);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(47, $excel_row, $row->kuisi_15_lain);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(48, $excel_row, $row->kuisi_16);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(49, $excel_row, $row->kuisi_16_a);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(50, $excel_row, $row->kuisi_16_lain);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(51, $excel_row, $row->kuisi_17);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(52, $excel_row, $row->kuisi_17_lain);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(53, $excel_row, $row->kuisi_18);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(54, $excel_row, $row->kuisi_18_lain);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(55, $excel_row, $row->kuisi_19);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(56, $excel_row, $row->kuisi_19_lain);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(57, $excel_row, $row->kuisi_20);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(58, $excel_row, $row->kuisi_21);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(59, $excel_row, $row->ket);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(60, $excel_row, $row->last_update);

        $excel_row++;

      }	

      $objPHPExcel = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
      header('Content-Type: application/vnd.ms-excel');
      //header('Content-Disposition: attachment;filename="'.$fileName.''.$row->nama.'.xlsx"');
      $objPHPExcel->save('php://output'); //$templateFile
	
	}	
		 
}
?>