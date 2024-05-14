<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Export_papi extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->auth->restrict();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_peserta');
		$this->load->library('pdf');
		$this->load->library('excel');
	}
	
	
	function index(){
		$papi = $this->M_peserta->view();
		$data['papi'] = $this->M_pantau_ujian->export_papi();
		$this->load->view('cetak/data_papi',$data);
	}
	
	function hasil_papi($id){
		$data['papi'] = $this->M_peserta->export_papi($id);
		$this->load->view('cetak/data_papi',$data);
	}
	
	function get_hasil_papi($id){
	
	$objPHPExcel = PHPExcel_IOFactory::load("./assets/excel_template/kostick_template.xlsx");
	$fileName 	 = 'kostick_';

      $employee_data = $this->M_peserta->export_papi($id);
      foreach($employee_data as $row)
      {
		$objPHPExcel->setActiveSheetIndex(0)
                            ->setCellValue('B4', $row->nama)
                            ->setCellValueExplicit('B5', $row->nip, PHPExcel_Cell_DataType::TYPE_STRING)
							->setCellValue('G4', $row->jwb_papi1)
                            ->setCellValue('G5', $row->jwb_papi2)
                            ->setCellValue('G6', $row->jwb_papi3)
                            ->setCellValue('G7', $row->jwb_papi4)
                            ->setCellValue('G8', $row->jwb_papi5)
                            ->setCellValue('G9', $row->jwb_papi6)
                            ->setCellValue('G10', $row->jwb_papi7)
                            ->setCellValue('G11', $row->jwb_papi8)
                            ->setCellValue('G12', $row->jwb_papi9)
                            ->setCellValue('G13', $row->jwb_papi10)
                            ->setCellValue('G14', $row->jwb_papi11)
                            ->setCellValue('G15', $row->jwb_papi12)
                            ->setCellValue('G16', $row->jwb_papi13)
                            ->setCellValue('G17', $row->jwb_papi14)
                            ->setCellValue('G18', $row->jwb_papi15)
                            ->setCellValue('G19', $row->jwb_papi16)
                            ->setCellValue('G20', $row->jwb_papi17)
                            ->setCellValue('G21', $row->jwb_papi18)
                            ->setCellValue('G22', $row->jwb_papi19)
                            ->setCellValue('G23', $row->jwb_papi20)
                            ->setCellValue('G24', $row->jwb_papi21)
                            ->setCellValue('G25', $row->jwb_papi22)
                            ->setCellValue('G26', $row->jwb_papi23)
                            ->setCellValue('G27', $row->jwb_papi24)
                            ->setCellValue('G28', $row->jwb_papi25)
                            ->setCellValue('G29', $row->jwb_papi26)
                            ->setCellValue('G30', $row->jwb_papi27)
                            ->setCellValue('G31', $row->jwb_papi28)
                            ->setCellValue('G32', $row->jwb_papi29)
                            ->setCellValue('G33', $row->jwb_papi30)
                            ->setCellValue('G34', $row->jwb_papi31)
                            ->setCellValue('G35', $row->jwb_papi32)
                            ->setCellValue('G36', $row->jwb_papi33)
                            ->setCellValue('G37', $row->jwb_papi34)
                            ->setCellValue('G38', $row->jwb_papi35)
                            ->setCellValue('G39', $row->jwb_papi36)
                            ->setCellValue('G40', $row->jwb_papi37)
                            ->setCellValue('G41', $row->jwb_papi38)
                            ->setCellValue('G42', $row->jwb_papi39)
                            ->setCellValue('G43', $row->jwb_papi40)
                            ->setCellValue('G44', $row->jwb_papi41)
                            ->setCellValue('G45', $row->jwb_papi42)
                            ->setCellValue('G46', $row->jwb_papi43)
                            ->setCellValue('G47', $row->jwb_papi44)
                            ->setCellValue('G48', $row->jwb_papi45)
                            ->setCellValue('G49', $row->jwb_papi46)
                            ->setCellValue('G50', $row->jwb_papi47)
                            ->setCellValue('G51', $row->jwb_papi48)
                            ->setCellValue('G52', $row->jwb_papi49)
                            ->setCellValue('G53', $row->jwb_papi50)
                            ->setCellValue('G54', $row->jwb_papi51)
                            ->setCellValue('G55', $row->jwb_papi52)
                            ->setCellValue('G56', $row->jwb_papi53)
                            ->setCellValue('G57', $row->jwb_papi54)
                            ->setCellValue('G58', $row->jwb_papi55)
                            ->setCellValue('G59', $row->jwb_papi56)
                            ->setCellValue('G60', $row->jwb_papi57)
                            ->setCellValue('G61', $row->jwb_papi58)
                            ->setCellValue('G62', $row->jwb_papi59)
                            ->setCellValue('G63', $row->jwb_papi60)
                            ->setCellValue('G64', $row->jwb_papi61)
                            ->setCellValue('G65', $row->jwb_papi62)
                            ->setCellValue('G66', $row->jwb_papi63)
                            ->setCellValue('G67', $row->jwb_papi64)
                            ->setCellValue('G68', $row->jwb_papi65)
                            ->setCellValue('G69', $row->jwb_papi66)
                            ->setCellValue('G70', $row->jwb_papi67)
                            ->setCellValue('G71', $row->jwb_papi68)
                            ->setCellValue('G72', $row->jwb_papi69)
                            ->setCellValue('G73', $row->jwb_papi70)
                            ->setCellValue('G74', $row->jwb_papi71)
                            ->setCellValue('G75', $row->jwb_papi72)
                            ->setCellValue('G76', $row->jwb_papi73)
                            ->setCellValue('G77', $row->jwb_papi74)
                            ->setCellValue('G78', $row->jwb_papi75)
                            ->setCellValue('G79', $row->jwb_papi76)
                            ->setCellValue('G80', $row->jwb_papi77)
                            ->setCellValue('G81', $row->jwb_papi78)
                            ->setCellValue('G82', $row->jwb_papi79)
                            ->setCellValue('G83', $row->jwb_papi80)
                            ->setCellValue('G84', $row->jwb_papi81)
                            ->setCellValue('G85', $row->jwb_papi82)
                            ->setCellValue('G86', $row->jwb_papi83)
                            ->setCellValue('G87', $row->jwb_papi84)
                            ->setCellValue('G88', $row->jwb_papi85)
                            ->setCellValue('G89', $row->jwb_papi86)
                            ->setCellValue('G90', $row->jwb_papi87)
                            ->setCellValue('G91', $row->jwb_papi88)
                            ->setCellValue('G92', $row->jwb_papi89)
                            ->setCellValue('G93', $row->jwb_papi90);
		
		}
      $objPHPExcel = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      header('Content-Disposition: attachment;filename="'.$fileName.''.$row->nama.'.xlsx"');
	  ob_end_clean();
      $objPHPExcel->save('php://output'); //$templateFile


	}	
		 
}
?>