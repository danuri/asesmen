<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportPeserta extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('excel','session'));
		$this->load->model('M_importpeserta');
		$this->load->model('M_kegiatan');
	}

	function index(){
		$data = array(
						'list_data'	=> $this->M_importpeserta->getData(),
						'kegiatan' 	=> $this->M_kegiatan->aktif_kegiatan(),
						'simsdm' 	=> $this->M_importpeserta->data_simsdm(),
					);
		//$data['simsdm'] 		= $this->M_importpeserta->data_simsdm();
		$this->load->view('import/import_peserta',$data); //external/v_external.php import_excel.php
			
	}

	function import_peserta(){
		if (isset($_FILES["fileExcel"]["name"])) {
			$path = $_FILES["fileExcel"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();	
				for($row=2; $row<=$highestRow; $row++)
				{
					$id_kegiatan 	= $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$kd_kegiatan 	= $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$nip 			= $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$nama 			= $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$pangkat 		= $worksheet->getCellByColumnAndRow(5, $row)->getValue();
					$jabatan 		= $worksheet->getCellByColumnAndRow(6, $row)->getValue();
					$unker 			= $worksheet->getCellByColumnAndRow(7, $row)->getValue();
					$jenjang		= $worksheet->getCellByColumnAndRow(8, $row)->getValue();
					$tahun		 	= $worksheet->getCellByColumnAndRow(9, $row)->getValue();
					$ket 	        = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
					$group 	        = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
					$aktif 	        = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
					
					$group_id		= $worksheet->getCellByColumnAndRow(11, $row)->getValue($this->input->post('group_id'));
					$username		= $worksheet->getCellByColumnAndRow(3, $row)->getValue($this->input->post('username'));
					$nama_user		= $worksheet->getCellByColumnAndRow(4, $row)->getValue($this->input->post('nama_user'));
					$status			= $worksheet->getCellByColumnAndRow(12, $row)->getValue($this->input->post('status'));
					
					$temp_data[] = array(
								'id_kegiatan' 	=> $id_kegiatan,
								'kd_kegiatan' 	=> $kd_kegiatan,
								'nip' 			=> $nip,
								'nama' 			=> $nama,
								'pangkat' 		=> $pangkat,
								'jabatan' 		=> $jabatan,
								'unker' 		=> $unker,
								'jenjang'		=> $jenjang,
								'tahun' 		=> $tahun,
								'ket' 	    	=> $ket,
					); 	
					
					$aktif_data[] = array(
								'group_id'			=> $group_id,
								'username'			=> $username,
								'nama_user'			=> $nama_user,
								'status'			=> $status,
					);
							
				}
			}
			$aktivasi = $this->M_importpeserta->aktivasi($aktif_data);
			$insert = $this->M_importpeserta->insert($temp_data);
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
		$data 				= $this->M_importpeserta->data_hasil();
		echo json_encode($data);
	}	
	
	function simpan_peserta(){
		$id_kegiatan	=$this->input->post('id_kegiatan');
		$kd_kegiatan	=$this->input->post('kd_kegiatan');
		//$group_id		=$this->input->post('nip');
		$nip			=$this->input->post('nip');
		$nama			=$this->input->post('nama');
		$pangkat		=$this->input->post('pangkat');
		$jabatan		=$this->input->post('jabatan');
		$unker			=$this->input->post('unker');
		$jenjang		=$this->input->post('jenjang');
		$tahun			=$this->input->post('tahun');
		$ket			=$this->input->post('ket');
		/*
		$group_id		=$this->input->post('group_id');
		$username		=$this->input->post('username');
		$nama_user		=$this->input->post('nama_user');
		$status			=$this->input->post('status');
		*/
		$data1 = array(
						'id_kegiatan'	=>$id_kegiatan,
						'kd_kegiatan'	=>$kd_kegiatan,
						'nip'			=>$nip,
						'nama'			=>$nama,
						'pangkat'		=>$pangkat,
						'jabatan'		=>$jabatan,
						'unker'			=>$unker,
						'jenjang'		=>$jenjang,
						'tahun'			=>$tahun,
						'ket'			=>$ket );
		
		/*
		$data2 = array(
						'group_id'			=> $group_id,
						'username'			=> $username,
						'nama_user'			=> $nama_user,
						'status'			=> $status );
						
		$this->M_importpeserta->input_user($data2,'users');
		*/
		$this->M_importpeserta->simpan_peserta($data1,'data_peserta');
	}
	
	function get_peserta(){
		$id_peserta =$this->input->get('id_peserta');
		$data	 	=$this->M_importpeserta->get_peserta_by_id($id_peserta);
		echo json_encode($data);
	}
	
	function update_peserta(){
		$id_peserta		=$this->input->post('id_peserta');
		$id_kegiatan	=$this->input->post('id_kegiatan');
		$kd_kegiatan	=$this->input->post('kd_kegiatan');
		$nip			=$this->input->post('nip');
		$nama			=$this->input->post('nama');
		$pangkat		=$this->input->post('pangkat');
		$jabatan		=$this->input->post('jabatan');
		$unker			=$this->input->post('unker');
		$jenjang		=$this->input->post('jenjang');
		$ket			=$this->input->post('ket');
		$tahun			=$this->input->post('tahun');
		$data			=$this->M_importpeserta->update_peserta($id_peserta,$id_kegiatan,$kd_kegiatan,$nip,$nama,$pangkat,$jabatan,$unker,$jenjang,$ket,$tahun);
		echo json_encode($data);
	}

	function hapus_peserta(){
		$id_peserta	=$this->input->post('id_peserta');
		$data		=$this->M_importpeserta->hapus_peserta($id_peserta);
		echo json_encode($data);
	}
	
	function simpan_apm2(){
		$id_peserta_apm_dua	=$this->input->post('id_peserta_apm_dua');
		$nip				=$this->input->post('nip');
		$jwb_apm_dua_1		=$this->input->post('jwb_apm_dua_1');
		$jwb_apm_dua_2		=$this->input->post('jwb_apm_dua_2');
		$jwb_apm_dua_3		=$this->input->post('jwb_apm_dua_3');
		$jwb_apm_dua_4		=$this->input->post('jwb_apm_dua_4');
		$jwb_apm_dua_5		=$this->input->post('jwb_apm_dua_5');
		$jwb_apm_dua_6		=$this->input->post('jwb_apm_dua_6');
		$jwb_apm_dua_7		=$this->input->post('jwb_apm_dua_7');
		$jwb_apm_dua_8		=$this->input->post('jwb_apm_dua_8');
		$jwb_apm_dua_9		=$this->input->post('jwb_apm_dua_9');
		$jwb_apm_dua_10		=$this->input->post('jwb_apm_dua_10');
		$jwb_apm_dua_11		=$this->input->post('jwb_apm_dua_11');
		$jwb_apm_dua_12		=$this->input->post('jwb_apm_dua_12');
		$jwb_apm_dua_13		=$this->input->post('jwb_apm_dua_13');
		$jwb_apm_dua_14		=$this->input->post('jwb_apm_dua_14');
		$jwb_apm_dua_15		=$this->input->post('jwb_apm_dua_15');
		$jwb_apm_dua_16		=$this->input->post('jwb_apm_dua_16');
		$jwb_apm_dua_17		=$this->input->post('jwb_apm_dua_17');
		$jwb_apm_dua_18		=$this->input->post('jwb_apm_dua_18');
		$jwb_apm_dua_19		=$this->input->post('jwb_apm_dua_19');
		$jwb_apm_dua_20		=$this->input->post('jwb_apm_dua_20');
		$jwb_apm_dua_21		=$this->input->post('jwb_apm_dua_21');
		$jwb_apm_dua_22		=$this->input->post('jwb_apm_dua_22');
		$jwb_apm_dua_23		=$this->input->post('jwb_apm_dua_23');
		$jwb_apm_dua_24		=$this->input->post('jwb_apm_dua_24');
		$jwb_apm_dua_25		=$this->input->post('jwb_apm_dua_25');
		$jwb_apm_dua_26		=$this->input->post('jwb_apm_dua_26');
		$jwb_apm_dua_27		=$this->input->post('jwb_apm_dua_27');
		$jwb_apm_dua_28		=$this->input->post('jwb_apm_dua_28');
		$jwb_apm_dua_29		=$this->input->post('jwb_apm_dua_29');
		$jwb_apm_dua_30		=$this->input->post('jwb_apm_dua_30');
		$jwb_apm_dua_31		=$this->input->post('jwb_apm_dua_31');
		$jwb_apm_dua_32		=$this->input->post('jwb_apm_dua_32');
		$jwb_apm_dua_33		=$this->input->post('jwb_apm_dua_33');
		$jwb_apm_dua_34		=$this->input->post('jwb_apm_dua_34');
		$jwb_apm_dua_35		=$this->input->post('jwb_apm_dua_35');
		$jwb_apm_dua_36		=$this->input->post('jwb_apm_dua_36');
		$ket		        =$this->input->post('ket');
		
		$data = array(
						'id_peserta_apm_dua'	=>$id_peserta_apm_dua,
						'nip'					=>$nip,
						'jwb_apm_dua_1'			=>$jwb_apm_dua_1,
						'jwb_apm_dua_2'			=>$jwb_apm_dua_2,
						'jwb_apm_dua_3'			=>$jwb_apm_dua_3,
						'jwb_apm_dua_4'			=>$jwb_apm_dua_4,
						'jwb_apm_dua_5'			=>$jwb_apm_dua_5,
						'jwb_apm_dua_6'			=>$jwb_apm_dua_6,
						'jwb_apm_dua_7'			=>$jwb_apm_dua_7,
						'jwb_apm_dua_8'			=>$jwb_apm_dua_8,
						'jwb_apm_dua_9'			=>$jwb_apm_dua_9,
						'jwb_apm_dua_10'		=>$jwb_apm_dua_10,
						'jwb_apm_dua_11'		=>$jwb_apm_dua_11,
						'jwb_apm_dua_12'		=>$jwb_apm_dua_12,
						'jwb_apm_dua_13'		=>$jwb_apm_dua_13,
						'jwb_apm_dua_14'		=>$jwb_apm_dua_14,
						'jwb_apm_dua_15'		=>$jwb_apm_dua_15,
						'jwb_apm_dua_16'		=>$jwb_apm_dua_16,
						'jwb_apm_dua_17'		=>$jwb_apm_dua_17,
						'jwb_apm_dua_18'		=>$jwb_apm_dua_18,
						'jwb_apm_dua_19'		=>$jwb_apm_dua_19,
						'jwb_apm_dua_20'		=>$jwb_apm_dua_20,
						'jwb_apm_dua_21'		=>$jwb_apm_dua_21,
						'jwb_apm_dua_22'		=>$jwb_apm_dua_22,
						'jwb_apm_dua_23'		=>$jwb_apm_dua_23,
						'jwb_apm_dua_24'		=>$jwb_apm_dua_24,
						'jwb_apm_dua_25'		=>$jwb_apm_dua_25,
						'jwb_apm_dua_26'		=>$jwb_apm_dua_26,
						'jwb_apm_dua_27'		=>$jwb_apm_dua_27,
						'jwb_apm_dua_28'		=>$jwb_apm_dua_28,
						'jwb_apm_dua_29'		=>$jwb_apm_dua_29,
						'jwb_apm_dua_30'		=>$jwb_apm_dua_30,
						'jwb_apm_dua_31'		=>$jwb_apm_dua_31,
						'jwb_apm_dua_32'		=>$jwb_apm_dua_32,
						'jwb_apm_dua_33'		=>$jwb_apm_dua_33,
						'jwb_apm_dua_34'		=>$jwb_apm_dua_34,
						'jwb_apm_dua_35'		=>$jwb_apm_dua_35,
						'jwb_apm_dua_36'		=>$jwb_apm_dua_36,
						'ket'		            =>$ket );
						
		$this->M_importpeserta->simpan_apm2($data,'hasil_apm_dua');
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function simpan_papi(){
							$id_peserta_papi=$this->input->post('id_peserta_papi');
							$nip			=$this->input->post('nip');
							$jwb_papi1		=$this->input->post('jwb_papi1');
							$jwb_papi2		=$this->input->post('jwb_papi2');
							$jwb_papi3		=$this->input->post('jwb_papi3');
							$jwb_papi4		=$this->input->post('jwb_papi4');
							$jwb_papi5		=$this->input->post('jwb_papi5');
							$jwb_papi6		=$this->input->post('jwb_papi6');
							$jwb_papi7		=$this->input->post('jwb_papi7');
							$jwb_papi8		=$this->input->post('jwb_papi8');
							$jwb_papi9		=$this->input->post('jwb_papi9');
							$jwb_papi10		=$this->input->post('jwb_papi10');
							$jwb_papi11		=$this->input->post('jwb_papi11');
							$jwb_papi12		=$this->input->post('jwb_papi12');
							$jwb_papi13		=$this->input->post('jwb_papi13');
							$jwb_papi14		=$this->input->post('jwb_papi14');
							$jwb_papi15		=$this->input->post('jwb_papi15');
							$jwb_papi16		=$this->input->post('jwb_papi16');
							$jwb_papi17		=$this->input->post('jwb_papi17');
							$jwb_papi18		=$this->input->post('jwb_papi18');
							$jwb_papi19		=$this->input->post('jwb_papi19');
							$jwb_papi20		=$this->input->post('jwb_papi20');
							$jwb_papi21		=$this->input->post('jwb_papi21');
							$jwb_papi22		=$this->input->post('jwb_papi22');
							$jwb_papi23		=$this->input->post('jwb_papi23');
							$jwb_papi24		=$this->input->post('jwb_papi24');
							$jwb_papi25		=$this->input->post('jwb_papi25');
							$jwb_papi26		=$this->input->post('jwb_papi26');
							$jwb_papi27		=$this->input->post('jwb_papi27');
							$jwb_papi28		=$this->input->post('jwb_papi28');
							$jwb_papi29		=$this->input->post('jwb_papi29');
							$jwb_papi30		=$this->input->post('jwb_papi30');
							$jwb_papi31		=$this->input->post('jwb_papi31');
							$jwb_papi32		=$this->input->post('jwb_papi32');
							$jwb_papi33		=$this->input->post('jwb_papi33');
							$jwb_papi34		=$this->input->post('jwb_papi34');
							$jwb_papi35		=$this->input->post('jwb_papi35');
							$jwb_papi36		=$this->input->post('jwb_papi36');
							$jwb_papi37		=$this->input->post('jwb_papi37');
							$jwb_papi38		=$this->input->post('jwb_papi38');
							$jwb_papi39		=$this->input->post('jwb_papi39');
							$jwb_papi40		=$this->input->post('jwb_papi40');
							$jwb_papi41		=$this->input->post('jwb_papi41');
							$jwb_papi42		=$this->input->post('jwb_papi42');
							$jwb_papi43		=$this->input->post('jwb_papi43');
							$jwb_papi44		=$this->input->post('jwb_papi44');
							$jwb_papi45		=$this->input->post('jwb_papi45');
							$jwb_papi46		=$this->input->post('jwb_papi46');
							$jwb_papi47		=$this->input->post('jwb_papi47');
							$jwb_papi48		=$this->input->post('jwb_papi48');
							$jwb_papi49		=$this->input->post('jwb_papi49');
							$jwb_papi50		=$this->input->post('jwb_papi50');
							$jwb_papi51		=$this->input->post('jwb_papi51');
							$jwb_papi52		=$this->input->post('jwb_papi52');
							$jwb_papi53		=$this->input->post('jwb_papi53');
							$jwb_papi54		=$this->input->post('jwb_papi54');
							$jwb_papi55		=$this->input->post('jwb_papi55');
							$jwb_papi56		=$this->input->post('jwb_papi56');
							$jwb_papi57		=$this->input->post('jwb_papi57');
							$jwb_papi58		=$this->input->post('jwb_papi58');
							$jwb_papi59		=$this->input->post('jwb_papi59');
							$jwb_papi60		=$this->input->post('jwb_papi60');
							$jwb_papi61		=$this->input->post('jwb_papi61');
							$jwb_papi62		=$this->input->post('jwb_papi62');
							$jwb_papi63		=$this->input->post('jwb_papi63');
							$jwb_papi64		=$this->input->post('jwb_papi64');
							$jwb_papi65		=$this->input->post('jwb_papi65');
							$jwb_papi66		=$this->input->post('jwb_papi66');
							$jwb_papi67		=$this->input->post('jwb_papi67');
							$jwb_papi68		=$this->input->post('jwb_papi68');
							$jwb_papi69		=$this->input->post('jwb_papi69');
							$jwb_papi70		=$this->input->post('jwb_papi70');
							$jwb_papi71		=$this->input->post('jwb_papi71');
							$jwb_papi72		=$this->input->post('jwb_papi72');
							$jwb_papi73		=$this->input->post('jwb_papi73');
							$jwb_papi74		=$this->input->post('jwb_papi74');
							$jwb_papi75		=$this->input->post('jwb_papi75');
							$jwb_papi76		=$this->input->post('jwb_papi76');
							$jwb_papi77		=$this->input->post('jwb_papi77');
							$jwb_papi78		=$this->input->post('jwb_papi78');
							$jwb_papi79		=$this->input->post('jwb_papi79');
							$jwb_papi80		=$this->input->post('jwb_papi80');
							$jwb_papi81		=$this->input->post('jwb_papi81');
							$jwb_papi82		=$this->input->post('jwb_papi82');
							$jwb_papi83		=$this->input->post('jwb_papi83');
							$jwb_papi84		=$this->input->post('jwb_papi84');
							$jwb_papi85		=$this->input->post('jwb_papi85');
							$jwb_papi86		=$this->input->post('jwb_papi86');
							$jwb_papi87		=$this->input->post('jwb_papi87');
							$jwb_papi88		=$this->input->post('jwb_papi88');
							$jwb_papi89		=$this->input->post('jwb_papi89');
							$jwb_papi90		=$this->input->post('jwb_papi90');
							$ket		    =$this->input->post('ket');
		
		$data = array(
					'id_peserta_papi'	=>$id_peserta_papi,
					'nip'				=>$nip,
					'jwb_papi1'			=>$jwb_papi1,
					'jwb_papi2'			=>$jwb_papi2,
					'jwb_papi3'			=>$jwb_papi3,
					'jwb_papi4'			=>$jwb_papi4,
					'jwb_papi5'			=>$jwb_papi5,
					'jwb_papi6'			=>$jwb_papi6,
					'jwb_papi7'			=>$jwb_papi7,
					'jwb_papi8'			=>$jwb_papi8,
					'jwb_papi9'			=>$jwb_papi9,
					'jwb_papi10'		=>$jwb_papi10,
					'jwb_papi11'		=>$jwb_papi11,
					'jwb_papi12'		=>$jwb_papi12,
					'jwb_papi13'		=>$jwb_papi13,
					'jwb_papi14'		=>$jwb_papi14,
					'jwb_papi15'		=>$jwb_papi15,
					'jwb_papi16'		=>$jwb_papi16,
					'jwb_papi17'		=>$jwb_papi17,
					'jwb_papi18'		=>$jwb_papi18,
					'jwb_papi19'		=>$jwb_papi19,
					'jwb_papi20'		=>$jwb_papi20,
					'jwb_papi21'		=>$jwb_papi21,
					'jwb_papi22'		=>$jwb_papi22,
					'jwb_papi23'		=>$jwb_papi23,
					'jwb_papi24'		=>$jwb_papi24,
					'jwb_papi25'		=>$jwb_papi25,
					'jwb_papi26'		=>$jwb_papi26,
					'jwb_papi27'		=>$jwb_papi27,
					'jwb_papi28'		=>$jwb_papi28,
					'jwb_papi29'		=>$jwb_papi29,
					'jwb_papi30'		=>$jwb_papi30,
					'jwb_papi31'		=>$jwb_papi31,
					'jwb_papi32'		=>$jwb_papi32,
					'jwb_papi33'		=>$jwb_papi33,
					'jwb_papi34'		=>$jwb_papi34,
					'jwb_papi35'		=>$jwb_papi35,
					'jwb_papi36'		=>$jwb_papi36,
					'jwb_papi37'		=>$jwb_papi37,
					'jwb_papi38'		=>$jwb_papi38,
					'jwb_papi39'		=>$jwb_papi39,
					'jwb_papi40'		=>$jwb_papi40,
					'jwb_papi41'		=>$jwb_papi41,
					'jwb_papi42'		=>$jwb_papi42,
					'jwb_papi43'		=>$jwb_papi43,
					'jwb_papi44'		=>$jwb_papi44,
					'jwb_papi45'		=>$jwb_papi45,
					'jwb_papi46'		=>$jwb_papi46,
					'jwb_papi47'		=>$jwb_papi47,
					'jwb_papi48'		=>$jwb_papi48,
					'jwb_papi49'		=>$jwb_papi49,
					'jwb_papi50'		=>$jwb_papi50,
					'jwb_papi51'		=>$jwb_papi51,
					'jwb_papi52'		=>$jwb_papi52,
					'jwb_papi53'		=>$jwb_papi53,
					'jwb_papi54'		=>$jwb_papi54,
					'jwb_papi55'		=>$jwb_papi55,
					'jwb_papi56'		=>$jwb_papi56,
					'jwb_papi57'		=>$jwb_papi57,
					'jwb_papi58'		=>$jwb_papi58,
					'jwb_papi59'		=>$jwb_papi59,
					'jwb_papi60'		=>$jwb_papi60,
					'jwb_papi61'		=>$jwb_papi61,
					'jwb_papi62'		=>$jwb_papi62,
					'jwb_papi63'		=>$jwb_papi63,
					'jwb_papi64'		=>$jwb_papi64,
					'jwb_papi65'		=>$jwb_papi65,
					'jwb_papi66'		=>$jwb_papi66,
					'jwb_papi67'		=>$jwb_papi67,
					'jwb_papi68'		=>$jwb_papi68,
					'jwb_papi69'		=>$jwb_papi69,
					'jwb_papi70'		=>$jwb_papi70,
					'jwb_papi71'		=>$jwb_papi71,
					'jwb_papi72'		=>$jwb_papi72,
					'jwb_papi73'		=>$jwb_papi73,
					'jwb_papi74'		=>$jwb_papi74,
					'jwb_papi75'		=>$jwb_papi75,
					'jwb_papi76'		=>$jwb_papi76,
					'jwb_papi77'		=>$jwb_papi77,
					'jwb_papi78'		=>$jwb_papi78,
					'jwb_papi79'		=>$jwb_papi79,
					'jwb_papi80'		=>$jwb_papi80,
					'jwb_papi81'		=>$jwb_papi81,
					'jwb_papi82'		=>$jwb_papi82,
					'jwb_papi83'		=>$jwb_papi83,
					'jwb_papi84'		=>$jwb_papi84,
					'jwb_papi85'		=>$jwb_papi85,
					'jwb_papi86'		=>$jwb_papi86,
					'jwb_papi87'		=>$jwb_papi87,
					'jwb_papi88'		=>$jwb_papi88,
					'jwb_papi89'		=>$jwb_papi89,
					'jwb_papi90'		=>$jwb_papi90,
					'ket'		        =>$ket );
						
		$this->M_importpeserta->simpan_papi($data,'hasil_papi');
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function insert_peserta($idd){
		$data 	= $this->M_importpeserta->insert_peserta_simsdm($idd);
		echo json_encode($data);
		redirect($_SERVER['HTTP_REFERER']);
	}	
	

}