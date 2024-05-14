<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportHasil extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('excel','session'));
		$this->load->model('M_importhasil');
	}

	function index()
	{
		$data = array(
			'list_data'	=> $this->M_importhasil->getData()
		);
		$this->load->view('import/import_hasil',$data); //external/v_external.php import_excel.php
	}

	function import_hasil(){
		if (isset($_FILES["fileExcel"]["name"])) {
			$path = $_FILES["fileExcel"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();	
				for($row=2; $row<=$highestRow; $row++)
				{
					$id_hasil 		= $worksheet->getCellByColumnAndRow(0, $row)->getValue();
					$id_peserta 	= $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$kd_kegiatan 	= $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$nip 			= $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$kd_kategori 	= $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$da 			= $worksheet->getCellByColumnAndRow(5, $row)->getValue();
					$lb 			= $worksheet->getCellByColumnAndRow(6, $row)->getValue();
					$sk 			= $worksheet->getCellByColumnAndRow(7, $row)->getValue();
					$ini 			= $worksheet->getCellByColumnAndRow(8, $row)->getValue();
					$dtk 			= $worksheet->getCellByColumnAndRow(9, $row)->getValue();
					$kep 			= $worksheet->getCellByColumnAndRow(10, $row)->getValue();
					$db 			= $worksheet->getCellByColumnAndRow(11, $row)->getValue();
					$tj 			= $worksheet->getCellByColumnAndRow(12, $row)->getValue();
					$ki 			= $worksheet->getCellByColumnAndRow(13, $row)->getValue();
					$kd 			= $worksheet->getCellByColumnAndRow(14, $row)->getValue();
					$se 			= $worksheet->getCellByColumnAndRow(15, $row)->getValue();
					$nilai_pot 		= $worksheet->getCellByColumnAndRow(16, $row)->getValue();
					$percent_pot	= $worksheet->getCellByColumnAndRow(17, $row)->getValue();
					$int 			= $worksheet->getCellByColumnAndRow(18, $row)->getValue();
					$ks 			= $worksheet->getCellByColumnAndRow(19, $row)->getValue();
					$kom 			= $worksheet->getCellByColumnAndRow(20, $row)->getValue();
					$oph 			= $worksheet->getCellByColumnAndRow(21, $row)->getValue();
					$pp 			= $worksheet->getCellByColumnAndRow(22, $row)->getValue();
					$pdo 			= $worksheet->getCellByColumnAndRow(23, $row)->getValue();
					$mp 			= $worksheet->getCellByColumnAndRow(24, $row)->getValue();
					$pk 			= $worksheet->getCellByColumnAndRow(25, $row)->getValue();
					$pb	 			= $worksheet->getCellByColumnAndRow(26, $row)->getValue();
					$nilai_kom 		= $worksheet->getCellByColumnAndRow(27, $row)->getValue();
					$percent_kom 	= $worksheet->getCellByColumnAndRow(28, $row)->getValue();
					$total_percent 	= $worksheet->getCellByColumnAndRow(29, $row)->getValue();
					$rekom 			= $worksheet->getCellByColumnAndRow(30, $row)->getValue();
					$gp_1 			= $worksheet->getCellByColumnAndRow(31, $row)->getValue();
					$gp_2 			= $worksheet->getCellByColumnAndRow(32, $row)->getValue();
					$gp_3 			= $worksheet->getCellByColumnAndRow(33, $row)->getValue();
					$gp_4 			= $worksheet->getCellByColumnAndRow(34, $row)->getValue();
					$gp_5 			= $worksheet->getCellByColumnAndRow(35, $row)->getValue();
					$gp_6 			= $worksheet->getCellByColumnAndRow(36, $row)->getValue();
					$gp_7 			= $worksheet->getCellByColumnAndRow(37, $row)->getValue();
					$gp_8 			= $worksheet->getCellByColumnAndRow(38, $row)->getValue();
					$kek_1 			= $worksheet->getCellByColumnAndRow(39, $row)->getValue();
					$kek_2 			= $worksheet->getCellByColumnAndRow(40, $row)->getValue();
					$kek_3 			= $worksheet->getCellByColumnAndRow(41, $row)->getValue();
					$kek_4 			= $worksheet->getCellByColumnAndRow(42, $row)->getValue();
					$kek_5 			= $worksheet->getCellByColumnAndRow(43, $row)->getValue();
					$kek_6 			= $worksheet->getCellByColumnAndRow(44, $row)->getValue();
					$kek_7 			= $worksheet->getCellByColumnAndRow(45, $row)->getValue();
					$ap_1 			= $worksheet->getCellByColumnAndRow(46, $row)->getValue();
					$ap_2 			= $worksheet->getCellByColumnAndRow(47, $row)->getValue();
					$ap_3 			= $worksheet->getCellByColumnAndRow(48, $row)->getValue();
					$ap_4 			= $worksheet->getCellByColumnAndRow(49, $row)->getValue();
					$ap_5 			= $worksheet->getCellByColumnAndRow(50, $row)->getValue();
					$ap_6 			= $worksheet->getCellByColumnAndRow(51, $row)->getValue();
					$ap_7 			= $worksheet->getCellByColumnAndRow(52, $row)->getValue();
					$speng_1 		= $worksheet->getCellByColumnAndRow(53, $row)->getValue();
					$speng_2 		= $worksheet->getCellByColumnAndRow(54, $row)->getValue();
					$speng_3 		= $worksheet->getCellByColumnAndRow(55, $row)->getValue();
					$speng_4 		= $worksheet->getCellByColumnAndRow(56, $row)->getValue();
					$speng_5 		= $worksheet->getCellByColumnAndRow(57, $row)->getValue();
					$speng_6 		= $worksheet->getCellByColumnAndRow(58, $row)->getValue();
					$speng_7 		= $worksheet->getCellByColumnAndRow(59, $row)->getValue();
					$speng_8 		= $worksheet->getCellByColumnAndRow(60, $row)->getValue();
					$speng_9 		= $worksheet->getCellByColumnAndRow(61, $row)->getValue();
					$speng_10 		= $worksheet->getCellByColumnAndRow(62, $row)->getValue();
					$sp_1 			= $worksheet->getCellByColumnAndRow(63, $row)->getValue();
					$sp_2 			= $worksheet->getCellByColumnAndRow(64, $row)->getValue();
					$sp_3 			= $worksheet->getCellByColumnAndRow(65, $row)->getValue();
					$temp_data[] = array(
								'id_hasil' 		=> $id_hasil,
								'id_peserta' 	=> $id_peserta,
								'kd_kegiatan' 	=> $kd_kegiatan,
								'nip' 			=> $nip,
								'kd_kategori' 	=> $kd_kategori,
								'da' 			=> $da,
								'lb' 			=> $lb,
								'sk' 			=> $sk,
								'ini' 			=> $ini,
								'dtk' 			=> $dtk,
								'kep' 			=> $kep,
								'db' 			=> $db,
								'tj' 			=> $tj,
								'ki' 			=> $ki,
								'kd' 			=> $kd,
								'se' 			=> $se,
								'nilai_pot' 	=> $nilai_pot,
								'percent_pot' 	=> $percent_pot,
								'int' 			=> $int,
								'ks' 			=> $ks,
								'kom' 			=> $kom,
								'oph' 			=> $oph,
								'pp' 			=> $pp,
								'pdo' 			=> $pdo,
								'mp' 			=> $mp,
								'pk' 			=> $pk,
								'pb' 			=> $pb,
								'nilai_kom' 	=> $nilai_kom,
								'percent_kom' 	=> $percent_kom,
								'total_percent' => $total_percent,
								'rekom' 		=> $rekom,
								'gp_1' 			=> $gp_1,
								'gp_2' 			=> $gp_2,
								'gp_3' 			=> $gp_3,
								'gp_4' 			=> $gp_4,
								'gp_5' 			=> $gp_5,
								'gp_6' 			=> $gp_6,
								'gp_7' 			=> $gp_7,
								'gp_8' 			=> $gp_8,
								'kek_1' 		=> $kek_1,
								'kek_2' 		=> $kek_2,
								'kek_3' 		=> $kek_3,
								'kek_4' 		=> $kek_4,
								'kek_5' 		=> $kek_5,
								'kek_6' 		=> $kek_6,
								'kek_7' 		=> $kek_7,
								'ap_1' 			=> $ap_1,
								'ap_2' 			=> $ap_2,
								'ap_3' 			=> $ap_3,
								'ap_4' 			=> $ap_4,
								'ap_5' 			=> $ap_5,
								'ap_6' 			=> $ap_6,
								'ap_7' 			=> $ap_7,
								'speng_1' 		=> $speng_1,
								'speng_2' 		=> $speng_2,
								'speng_3' 		=> $speng_3,
								'speng_4' 		=> $speng_4,
								'speng_5' 		=> $speng_5,
								'speng_6' 		=> $speng_6,
								'speng_7' 		=> $speng_7,
								'speng_8' 		=> $speng_8,
								'speng_9' 		=> $speng_9,
								'speng_10' 		=> $speng_10,
								'sp_1' 			=> $sp_1,
								'sp_2' 			=> $sp_2,
								'sp_3' 			=> $sp_3,
					); 	
				}
			}
			$insert = $this->M_importhasil->insert($temp_data);
			if($insert){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Import ke Database');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Terjadi Kesalahan');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada file yang masuk";
		}
	}
	
	function data_hasil(){
		$data = $this->M_importhasil->data_hasil();
		echo json_encode($data);
	}	
	
	
	

}