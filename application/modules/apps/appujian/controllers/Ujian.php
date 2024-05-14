<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Ujian extends MX_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');	
		
		$this->auth->restrict();
		$sess = $this->session->userdata('logged_in');
		$this->load->model('M_ujian');
		$this->load->model('M_registrasi');
		$sess = $this->session->userdata('logged_in');
		$this->username = $sess['username'];
		$this->nama_user = $sess['nama_user'];
		
		}
	
///// UJIAN
	
	function index(){
		$data['user'] = $this->username;
		$data['name'] = $this->nama_user;
		$this->load->view('ujian/index',$data);
	}
	
///// END OF UJIAN

///// UJIAN APM

	function apm_satu(){
		$data['user'] = $this->username;						
		$data['apm_satu'] = $this->M_ujian->data_apm_satu();
		$data['regis'] 	  =  $this->M_ujian->get_id_reg($this->username);
		$this->load->view('ujian/ujian_apm_satu',$data);
	}
		
	Public function simpan_ujian_apm_satu(){	
		$id_peserta_apm_satu		=$this->input->post('id_peserta_apm_satu');
		$id_reg				=$this->input->post('id_reg');
		$nip				=$this->input->post('nip');
		$jwb_apm_satu_1		=$this->input->post('jwb_apm_satu_1');
		$jwb_apm_satu_2		=$this->input->post('jwb_apm_satu_2');
		$jwb_apm_satu_3		=$this->input->post('jwb_apm_satu_3');
		$jwb_apm_satu_4		=$this->input->post('jwb_apm_satu_4');
		$jwb_apm_satu_5		=$this->input->post('jwb_apm_satu_5');
		$jwb_apm_satu_6		=$this->input->post('jwb_apm_satu_6');
		$jwb_apm_satu_7		=$this->input->post('jwb_apm_satu_7');
		$jwb_apm_satu_8		=$this->input->post('jwb_apm_satu_8');
		$jwb_apm_satu_9		=$this->input->post('jwb_apm_satu_9');
		$jwb_apm_satu_10	=$this->input->post('jwb_apm_satu_10');
		$jwb_apm_satu_11	=$this->input->post('jwb_apm_satu_11');
		$jwb_apm_satu_12	=$this->input->post('jwb_apm_satu_12');
		$ket				=$this->input->post('ket');
		
		$data = array(
						'id_peserta_apm_satu'	=> $id_peserta_apm_satu,
						'id_reg'			=> $id_reg,
						'nip'				=> $nip,
						'jwb_apm_satu_1'	=> $jwb_apm_satu_1,
						'jwb_apm_satu_2'	=> $jwb_apm_satu_2,
						'jwb_apm_satu_3'	=> $jwb_apm_satu_3,
						'jwb_apm_satu_4'	=> $jwb_apm_satu_4,
						'jwb_apm_satu_5'	=> $jwb_apm_satu_5,
						'jwb_apm_satu_6'	=> $jwb_apm_satu_6,
						'jwb_apm_satu_7'	=> $jwb_apm_satu_7,
						'jwb_apm_satu_8'	=> $jwb_apm_satu_8,
						'jwb_apm_satu_9'	=> $jwb_apm_satu_9,
						'jwb_apm_satu_10'	=> $jwb_apm_satu_10,
						'jwb_apm_satu_11'	=> $jwb_apm_satu_11,
						'jwb_apm_satu_12'	=> $jwb_apm_satu_12,
						'ket'				=> $ket );
										
		$this->M_ujian->simpan_apm_satu($data,'hasil_apm_satu');
		redirect('module/appujian/ujian/apm_dua');
		
	}
	
	function apm_dua(){
		$data['user'] = $this->username;						
		$data['apm_dua'] = $this->M_ujian->data_apm_dua();
		$data['regis'] =  $this->M_ujian->get_id_reg($this->username);
		$this->load->view('ujian/ujian_apm_dua',$data);
	}
		
	Public function simpan_ujian_apm_dua(){
		$id_peserta_apm_dua		=$this->input->post('id_peserta_apm_dua');
		$id_reg				=$this->input->post('id_reg');
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
		$ket				=$this->input->post('ket');
		
		$data = array(
						'id_peserta_apm_dua'	=> $id_peserta_apm_dua,
						'id_reg'			=> $id_reg,
						'nip'				=> $nip,
						'jwb_apm_dua_1'		=> $jwb_apm_dua_1,
						'jwb_apm_dua_2'		=> $jwb_apm_dua_2,
						'jwb_apm_dua_3'		=> $jwb_apm_dua_3,
						'jwb_apm_dua_4'		=> $jwb_apm_dua_4,
						'jwb_apm_dua_5'		=> $jwb_apm_dua_5,
						'jwb_apm_dua_6'		=> $jwb_apm_dua_6,
						'jwb_apm_dua_7'		=> $jwb_apm_dua_7,
						'jwb_apm_dua_8'		=> $jwb_apm_dua_8,
						'jwb_apm_dua_9'		=> $jwb_apm_dua_9,
						'jwb_apm_dua_10'	=> $jwb_apm_dua_10,
						'jwb_apm_dua_11'	=> $jwb_apm_dua_11,
						'jwb_apm_dua_12'	=> $jwb_apm_dua_12,
						'jwb_apm_dua_13'	=> $jwb_apm_dua_13,
						'jwb_apm_dua_14'	=> $jwb_apm_dua_14,
						'jwb_apm_dua_15'	=> $jwb_apm_dua_15,
						'jwb_apm_dua_16'	=> $jwb_apm_dua_16,
						'jwb_apm_dua_17'	=> $jwb_apm_dua_17,
						'jwb_apm_dua_18'	=> $jwb_apm_dua_18,
						'jwb_apm_dua_19'	=> $jwb_apm_dua_19,
						'jwb_apm_dua_20'	=> $jwb_apm_dua_20,
						'jwb_apm_dua_21'	=> $jwb_apm_dua_21,
						'jwb_apm_dua_22'	=> $jwb_apm_dua_22,
						'jwb_apm_dua_23'	=> $jwb_apm_dua_23,
						'jwb_apm_dua_24'	=> $jwb_apm_dua_24,
						'jwb_apm_dua_25'	=> $jwb_apm_dua_25,
						'jwb_apm_dua_26'	=> $jwb_apm_dua_26,
						'jwb_apm_dua_27'	=> $jwb_apm_dua_27,
						'jwb_apm_dua_28'	=> $jwb_apm_dua_28,
						'jwb_apm_dua_29'	=> $jwb_apm_dua_29,
						'jwb_apm_dua_30'	=> $jwb_apm_dua_30,
						'jwb_apm_dua_31'	=> $jwb_apm_dua_31,
						'jwb_apm_dua_32'	=> $jwb_apm_dua_32,
						'jwb_apm_dua_33'	=> $jwb_apm_dua_33,
						'jwb_apm_dua_34'	=> $jwb_apm_dua_34,
						'jwb_apm_dua_35'	=> $jwb_apm_dua_35,
						'jwb_apm_dua_36'	=> $jwb_apm_dua_36,
						'ket'				=> $ket );
						
		$this->M_ujian->simpan_apm_dua($data,'hasil_apm_dua');
		//redirect('module/appujian/ujian/papi');
		redirect('module/appujian/ujian/ankas');
		//redirect('module/appujian/ujian/contoh_cfit_satu');
		
	}
	
///// END OF ANKAS
	
///// UJIAN PAPI
	
	function papi(){
		$data['user'] = $this->username;						
		$data['papi'] = $this->M_ujian->data_papi();
		$data['regis'] =  $this->M_ujian->get_id_reg($this->username);
		$this->load->view('ujian/ujian_papi',$data);
	}
	
	function simpan_ujian_papi(){
		$id_peserta_papi	=$this->input->post('id_peserta_papi');
		$id_reg				=$this->input->post('id_reg');
		$nip				=$this->input->post('nip');
		$jwb_papi1			=$this->input->post('jwb_papi1');
		$jwb_papi2			=$this->input->post('jwb_papi2');
		$jwb_papi3			=$this->input->post('jwb_papi3');
		$jwb_papi4			=$this->input->post('jwb_papi4');
		$jwb_papi5			=$this->input->post('jwb_papi5');
		$jwb_papi6			=$this->input->post('jwb_papi6');
		$jwb_papi7			=$this->input->post('jwb_papi7');
		$jwb_papi8			=$this->input->post('jwb_papi8');
		$jwb_papi9			=$this->input->post('jwb_papi9');
		$jwb_papi10			=$this->input->post('jwb_papi10');
		$jwb_papi11			=$this->input->post('jwb_papi11');
		$jwb_papi12			=$this->input->post('jwb_papi12');
		$jwb_papi13			=$this->input->post('jwb_papi13');
		$jwb_papi14			=$this->input->post('jwb_papi14');
		$jwb_papi15			=$this->input->post('jwb_papi15');
		$jwb_papi16			=$this->input->post('jwb_papi16');
		$jwb_papi17			=$this->input->post('jwb_papi17');
		$jwb_papi18			=$this->input->post('jwb_papi18');
		$jwb_papi19			=$this->input->post('jwb_papi19');
		$jwb_papi20			=$this->input->post('jwb_papi20');
		$jwb_papi21			=$this->input->post('jwb_papi21');
		$jwb_papi22			=$this->input->post('jwb_papi22');
		$jwb_papi23			=$this->input->post('jwb_papi23');
		$jwb_papi24			=$this->input->post('jwb_papi24');
		$jwb_papi25			=$this->input->post('jwb_papi25');
		$jwb_papi26			=$this->input->post('jwb_papi26');
		$jwb_papi27			=$this->input->post('jwb_papi27');
		$jwb_papi28			=$this->input->post('jwb_papi28');
		$jwb_papi29			=$this->input->post('jwb_papi29');
		$jwb_papi30			=$this->input->post('jwb_papi30');
		$jwb_papi31			=$this->input->post('jwb_papi31');
		$jwb_papi32			=$this->input->post('jwb_papi32');
		$jwb_papi33			=$this->input->post('jwb_papi33');
		$jwb_papi34			=$this->input->post('jwb_papi34');
		$jwb_papi35			=$this->input->post('jwb_papi35');
		$jwb_papi36			=$this->input->post('jwb_papi36');
		$jwb_papi37			=$this->input->post('jwb_papi37');
		$jwb_papi38			=$this->input->post('jwb_papi38');
		$jwb_papi39			=$this->input->post('jwb_papi39');
		$jwb_papi40			=$this->input->post('jwb_papi40');
		$jwb_papi41			=$this->input->post('jwb_papi41');
		$jwb_papi42			=$this->input->post('jwb_papi42');
		$jwb_papi43			=$this->input->post('jwb_papi43');
		$jwb_papi44			=$this->input->post('jwb_papi44');
		$jwb_papi45			=$this->input->post('jwb_papi45');
		$jwb_papi46			=$this->input->post('jwb_papi46');
		$jwb_papi47			=$this->input->post('jwb_papi47');
		$jwb_papi48			=$this->input->post('jwb_papi48');
		$jwb_papi49			=$this->input->post('jwb_papi49');
		$jwb_papi50			=$this->input->post('jwb_papi50');
		$jwb_papi51			=$this->input->post('jwb_papi51');
		$jwb_papi52			=$this->input->post('jwb_papi52');
		$jwb_papi53			=$this->input->post('jwb_papi53');
		$jwb_papi54			=$this->input->post('jwb_papi54');
		$jwb_papi55			=$this->input->post('jwb_papi55');
		$jwb_papi56			=$this->input->post('jwb_papi56');
		$jwb_papi57			=$this->input->post('jwb_papi57');
		$jwb_papi58			=$this->input->post('jwb_papi58');
		$jwb_papi59			=$this->input->post('jwb_papi59');
		$jwb_papi60			=$this->input->post('jwb_papi60');
		$jwb_papi61			=$this->input->post('jwb_papi61');
		$jwb_papi62			=$this->input->post('jwb_papi62');
		$jwb_papi63			=$this->input->post('jwb_papi63');
		$jwb_papi64			=$this->input->post('jwb_papi64');
		$jwb_papi65			=$this->input->post('jwb_papi65');
		$jwb_papi66			=$this->input->post('jwb_papi66');
		$jwb_papi67			=$this->input->post('jwb_papi67');
		$jwb_papi68			=$this->input->post('jwb_papi68');
		$jwb_papi69			=$this->input->post('jwb_papi69');
		$jwb_papi70			=$this->input->post('jwb_papi70');
		$jwb_papi71			=$this->input->post('jwb_papi71');
		$jwb_papi72			=$this->input->post('jwb_papi72');
		$jwb_papi73			=$this->input->post('jwb_papi73');
		$jwb_papi74			=$this->input->post('jwb_papi74');
		$jwb_papi75			=$this->input->post('jwb_papi75');
		$jwb_papi76			=$this->input->post('jwb_papi76');
		$jwb_papi77			=$this->input->post('jwb_papi77');
		$jwb_papi78			=$this->input->post('jwb_papi78');
		$jwb_papi79			=$this->input->post('jwb_papi79');
		$jwb_papi80			=$this->input->post('jwb_papi80');
		$jwb_papi81			=$this->input->post('jwb_papi81');
		$jwb_papi82			=$this->input->post('jwb_papi82');
		$jwb_papi83			=$this->input->post('jwb_papi83');
		$jwb_papi84			=$this->input->post('jwb_papi84');
		$jwb_papi85			=$this->input->post('jwb_papi85');
		$jwb_papi86			=$this->input->post('jwb_papi86');
		$jwb_papi87			=$this->input->post('jwb_papi87');
		$jwb_papi88			=$this->input->post('jwb_papi88');
		$jwb_papi89			=$this->input->post('jwb_papi89');
		$jwb_papi90			=$this->input->post('jwb_papi90');
		$ket				=$this->input->post('ket');
		
		$data 	= array (
						'id_peserta_papi'	=>$id_peserta_papi,
						'id_reg'			=> $id_reg,
						'nip'				=>$nip,
						'jwb_papi1'=>$jwb_papi1,
						'jwb_papi2'=>$jwb_papi2,
						'jwb_papi3'=>$jwb_papi3,
						'jwb_papi4'=>$jwb_papi4,
						'jwb_papi5'=>$jwb_papi5,
						'jwb_papi6'=>$jwb_papi6,
						'jwb_papi7'=>$jwb_papi7,
						'jwb_papi8'=>$jwb_papi8,
						'jwb_papi9'=>$jwb_papi9,
						'jwb_papi10'=>$jwb_papi10,
						'jwb_papi11'=>$jwb_papi11,
						'jwb_papi12'=>$jwb_papi12,
						'jwb_papi13'=>$jwb_papi13,
						'jwb_papi14'=>$jwb_papi14,
						'jwb_papi15'=>$jwb_papi15,
						'jwb_papi16'=>$jwb_papi16,
						'jwb_papi17'=>$jwb_papi17,
						'jwb_papi18'=>$jwb_papi18,
						'jwb_papi19'=>$jwb_papi19,
						'jwb_papi20'=>$jwb_papi20,
						'jwb_papi21'=>$jwb_papi21,
						'jwb_papi22'=>$jwb_papi22,
						'jwb_papi23'=>$jwb_papi23,
						'jwb_papi24'=>$jwb_papi24,
						'jwb_papi25'=>$jwb_papi25,
						'jwb_papi26'=>$jwb_papi26,
						'jwb_papi27'=>$jwb_papi27,
						'jwb_papi28'=>$jwb_papi28,
						'jwb_papi29'=>$jwb_papi29,
						'jwb_papi30'=>$jwb_papi30,
						'jwb_papi31'=>$jwb_papi31,
						'jwb_papi32'=>$jwb_papi32,
						'jwb_papi33'=>$jwb_papi33,
						'jwb_papi34'=>$jwb_papi34,
						'jwb_papi35'=>$jwb_papi35,
						'jwb_papi36'=>$jwb_papi36,
						'jwb_papi37'=>$jwb_papi37,
						'jwb_papi38'=>$jwb_papi38,
						'jwb_papi39'=>$jwb_papi39,
						'jwb_papi40'=>$jwb_papi40,
						'jwb_papi41'=>$jwb_papi41,
						'jwb_papi42'=>$jwb_papi42,
						'jwb_papi43'=>$jwb_papi43,
						'jwb_papi44'=>$jwb_papi44,
						'jwb_papi45'=>$jwb_papi45,
						'jwb_papi46'=>$jwb_papi46,
						'jwb_papi47'=>$jwb_papi47,
						'jwb_papi48'=>$jwb_papi48,
						'jwb_papi49'=>$jwb_papi49,
						'jwb_papi50'=>$jwb_papi50,
						'jwb_papi51'=>$jwb_papi51,
						'jwb_papi52'=>$jwb_papi52,
						'jwb_papi53'=>$jwb_papi53,
						'jwb_papi54'=>$jwb_papi54,
						'jwb_papi55'=>$jwb_papi55,
						'jwb_papi56'=>$jwb_papi56,
						'jwb_papi57'=>$jwb_papi57,
						'jwb_papi58'=>$jwb_papi58,
						'jwb_papi59'=>$jwb_papi59,
						'jwb_papi60'=>$jwb_papi60,
						'jwb_papi61'=>$jwb_papi61,
						'jwb_papi62'=>$jwb_papi62,
						'jwb_papi63'=>$jwb_papi63,
						'jwb_papi64'=>$jwb_papi64,
						'jwb_papi65'=>$jwb_papi65,
						'jwb_papi66'=>$jwb_papi66,
						'jwb_papi67'=>$jwb_papi67,
						'jwb_papi68'=>$jwb_papi68,
						'jwb_papi69'=>$jwb_papi69,
						'jwb_papi70'=>$jwb_papi70,
						'jwb_papi71'=>$jwb_papi71,
						'jwb_papi72'=>$jwb_papi72,
						'jwb_papi73'=>$jwb_papi73,
						'jwb_papi74'=>$jwb_papi74,
						'jwb_papi75'=>$jwb_papi75,
						'jwb_papi76'=>$jwb_papi76,
						'jwb_papi77'=>$jwb_papi77,
						'jwb_papi78'=>$jwb_papi78,
						'jwb_papi79'=>$jwb_papi79,
						'jwb_papi80'=>$jwb_papi80,
						'jwb_papi81'=>$jwb_papi81,
						'jwb_papi82'=>$jwb_papi82,
						'jwb_papi83'=>$jwb_papi83,
						'jwb_papi84'=>$jwb_papi84,
						'jwb_papi85'=>$jwb_papi85,
						'jwb_papi86'=>$jwb_papi86,
						'jwb_papi87'=>$jwb_papi87,
						'jwb_papi88'=>$jwb_papi88,
						'jwb_papi89'=>$jwb_papi89,
						'jwb_papi90'=>$jwb_papi90,
						'ket'		=> $ket );
						
		$this->M_ujian->simpan_papi($data,'hasil_papi');
		//redirect('module/appujian/ujian/sjt');
		//redirect('module/appujian/ujian/ankas');
		redirect('module/appujian/ujian/thanks');
	}
		
	
///// END OF ANKAS
	
///// UJIAN SJT
	
	function sjt(){
		$data['user'] = $this->username;						
		$data['sjt'] = $this->M_ujian->data_sjt();
		$this->load->view('ujian/ujian_sjt',$data);
	}
		
	Public function simpan_ujian_sjt(){
		$id_peserta_sjt		=$this->input->post('id_peserta_sjt');
		$nip				=$this->input->post('nip');
		$jwb_sjt1			=$this->input->post('jwb_sjt1');
		$jwb_sjt2			=$this->input->post('jwb_sjt2');
		$jwb_sjt3			=$this->input->post('jwb_sjt3');
		$jwb_sjt4			=$this->input->post('jwb_sjt4');
		$jwb_sjt5			=$this->input->post('jwb_sjt5');
		$jwb_sjt6			=$this->input->post('jwb_sjt6');
		$jwb_sjt7			=$this->input->post('jwb_sjt7');
		$jwb_sjt8			=$this->input->post('jwb_sjt8');
		$jwb_sjt9			=$this->input->post('jwb_sjt9');
		$jwb_sjt10			=$this->input->post('jwb_sjt10');
		$jwb_sjt11			=$this->input->post('jwb_sjt11');
		$jwb_sjt12			=$this->input->post('jwb_sjt12');
		$jwb_sjt13			=$this->input->post('jwb_sjt13');
		$jwb_sjt14			=$this->input->post('jwb_sjt14');
		$jwb_sjt15			=$this->input->post('jwb_sjt15');
		$jwb_sjt16			=$this->input->post('jwb_sjt16');
		$jwb_sjt17			=$this->input->post('jwb_sjt17');
		$jwb_sjt18			=$this->input->post('jwb_sjt18');
		$jwb_sjt19			=$this->input->post('jwb_sjt19');
		$jwb_sjt20			=$this->input->post('jwb_sjt20');
		$jwb_sjt21			=$this->input->post('jwb_sjt21');
		$jwb_sjt22			=$this->input->post('jwb_sjt22');
		$jwb_sjt23			=$this->input->post('jwb_sjt23');
		$jwb_sjt24			=$this->input->post('jwb_sjt24');
		$jwb_sjt25			=$this->input->post('jwb_sjt25');
		$jwb_sjt26			=$this->input->post('jwb_sjt26');
		$jwb_sjt27			=$this->input->post('jwb_sjt27');
		$jwb_sjt28			=$this->input->post('jwb_sjt28');
		$jwb_sjt29			=$this->input->post('jwb_sjt29');
		$jwb_sjt30			=$this->input->post('jwb_sjt30');
		$jwb_sjt31			=$this->input->post('jwb_sjt31');
		$jwb_sjt32			=$this->input->post('jwb_sjt32');
		$jwb_sjt33			=$this->input->post('jwb_sjt33');
		$jwb_sjt34			=$this->input->post('jwb_sjt34');
		$jwb_sjt35			=$this->input->post('jwb_sjt35');
		$jwb_sjt36			=$this->input->post('jwb_sjt36');
		$paket			    =$this->input->post('paket');
		$ket				=$this->input->post('ket');
		
		$data = array(
						'id_peserta_sjt'	=> $id_peserta_sjt,
						'nip'				=> $nip,
						'jwb_sjt1'			=> $jwb_sjt1,
						'jwb_sjt2'			=> $jwb_sjt2,
						'jwb_sjt3'			=> $jwb_sjt3,
						'jwb_sjt4'			=> $jwb_sjt4,
						'jwb_sjt5'			=> $jwb_sjt5,
						'jwb_sjt6'			=> $jwb_sjt6,
						'jwb_sjt7'			=> $jwb_sjt7,
						'jwb_sjt8'			=> $jwb_sjt8,
						'jwb_sjt9'			=> $jwb_sjt9,
						'jwb_sjt10'			=> $jwb_sjt10,
						'jwb_sjt11'			=> $jwb_sjt11,
						'jwb_sjt12'			=> $jwb_sjt12,
						'jwb_sjt13'			=> $jwb_sjt13,
						'jwb_sjt14'			=> $jwb_sjt14,
						'jwb_sjt15'			=> $jwb_sjt15,
						'jwb_sjt16'			=> $jwb_sjt16,
						'jwb_sjt17'			=> $jwb_sjt17,
						'jwb_sjt18'			=> $jwb_sjt18,
						'jwb_sjt19'			=> $jwb_sjt19,
						'jwb_sjt20'			=> $jwb_sjt20,
						'jwb_sjt21'			=> $jwb_sjt21,
						'jwb_sjt22'			=> $jwb_sjt22,
						'jwb_sjt23'			=> $jwb_sjt23,
						'jwb_sjt24'			=> $jwb_sjt24,
						'jwb_sjt25'			=> $jwb_sjt25,
						'jwb_sjt26'			=> $jwb_sjt26,
						'jwb_sjt27'			=> $jwb_sjt27,
						'jwb_sjt28'			=> $jwb_sjt28,
						'jwb_sjt29'			=> $jwb_sjt29,
						'jwb_sjt30'			=> $jwb_sjt30,
						'jwb_sjt31'			=> $jwb_sjt31,
						'jwb_sjt32'			=> $jwb_sjt32,
						'jwb_sjt33'			=> $jwb_sjt33,
						'jwb_sjt34'			=> $jwb_sjt34,
						'jwb_sjt35'			=> $jwb_sjt35,
						'jwb_sjt36'			=> $jwb_sjt36,
						'paket'			    => $paket,
						'ket'				=> $ket );
						
		$this->M_ujian->simpan_sjt($data,'hasil_sjt');
		redirect('module/appujian/ujian/thanks');
	}
		
///// END OF SJT
	
///// UJIAN ANKAS
	
	function ankas(){
		$data['user'] = $this->username;						
		$data['ankas'] = $this->M_ujian->data_ankas();
		$data['regis'] =  $this->M_ujian->get_id_reg($this->username);
		$this->load->view('ujian/ujian_ankas',$data);
	}
		
	function simpan_ujian_ankas(){
		$id_peserta_ankas	=$this->input->post('id_peserta_ankas');
		$id_reg				=$this->input->post('id_reg');
		$id_materi_ankas	=$this->input->post('id_materi_ankas');
		$nip				=$this->input->post('nip');
		$jwb_ankas1			=$this->input->post('jwb_ankas1');
		$jwb_ankas2			=$this->input->post('jwb_ankas2');
		$jwb_ankas3			=$this->input->post('jwb_ankas3');
		$jwb_ankas4			=$this->input->post('jwb_ankas4');
		$ket				=$this->input->post('ket');
		
		$data = array(
						'id_peserta_ankas'	=> $id_peserta_ankas,
						'id_reg'			=> $id_reg,
						'id_materi_ankas'	=> $id_materi_ankas,
						'nip'				=> $nip,
						'jwb_ankas1'		=> $jwb_ankas1,
						'jwb_ankas2'		=> $jwb_ankas2,
						'jwb_ankas3'		=> $jwb_ankas3,
						'jwb_ankas4'		=> $jwb_ankas4,
						'ket'				=> $ket );
						
		$this->M_ujian->simpan_ankas($data,'hasil_ankas');
		//redirect('module/appujian/ujian/thanks');
		redirect('module/appujian/ujian/papi');
		

	}
		
///// END OF ANKAS

///// UJIAN CFIT

	function contoh_cfit_satu(){
		$data['user'] = $this->username;						
		$data['contoh_cfit_satu'] = $this->M_ujian->contoh_cfit_satu();
		$this->load->view('ujian/contoh_cfit_satu',$data);
	}
	
	function simpan_contoh_cfit_satu(){	
		$id_contoh_cfit		=$this->input->post('id_contoh_cfit');
		$id_materi			=$this->input->post('id_materi');
		$id_sub_materi		=$this->input->post('id_sub_materi');
		$nip				=$this->input->post('nip');
		$jwb_contoh_cfit_1	=$this->input->post('jwb_contoh_cfit_1');
		$jwb_contoh_cfit_2	=$this->input->post('jwb_contoh_cfit_2');
		$jwb_contoh_cfit_3	=$this->input->post('jwb_contoh_cfit_3');
		$ket				=$this->input->post('ket');
		
		$data = array(
						'id_contoh_cfit'	=> $id_contoh_cfit,
						'id_materi'			=> $id_materi,
						'id_sub_materi'		=> $id_sub_materi,
						'nip'				=> $nip,
						'jwb_contoh_cfit_1'	=> $jwb_contoh_cfit_1,
						'jwb_contoh_cfit_2'	=> $jwb_contoh_cfit_2,
						'jwb_contoh_cfit_3'	=> $jwb_contoh_cfit_3,
						'ket'				=> $ket );
										
		$this->M_ujian->simpan_contoh_cfit_satu($data,'contoh_cfit');
		redirect('module/appujian/ujian/hasil_cnth_cfit_satu');
		
	}
	
	function hasil_cnth_cfit_satu(){
		$user = $this->username;		
		$nip =$this->input->get($this->username);
		
		$data['hasil_contoh_cfit_satu'] = $this->M_ujian->hasil_contoh_cfit_satu($this->username);
		$this->load->view('ujian/hasil_cnth_cfit_satu',$data);
	}

	function cfit_satu(){
		$data['user'] = $this->username;						
		$data['cfit_satu'] = $this->M_ujian->cfit_satu();
		$this->load->view('ujian/cfit_satu',$data);
	}
		
	function simpan_cfit_satu(){	
		$id_cfit_satu		=$this->input->post('id_cfit_satu');
		$id_materi			=$this->input->post('id_materi');
		$nip				=$this->input->post('nip');
		$jwb_cfit_satu_1	=$this->input->post('jwb_cfit_satu_1');
		$jwb_cfit_satu_2	=$this->input->post('jwb_cfit_satu_2');
		$jwb_cfit_satu_3	=$this->input->post('jwb_cfit_satu_3');
		$jwb_cfit_satu_4	=$this->input->post('jwb_cfit_satu_4');
		$jwb_cfit_satu_5	=$this->input->post('jwb_cfit_satu_5');
		$jwb_cfit_satu_6	=$this->input->post('jwb_cfit_satu_6');
		$jwb_cfit_satu_7	=$this->input->post('jwb_cfit_satu_7');
		$jwb_cfit_satu_8	=$this->input->post('jwb_cfit_satu_8');
		$jwb_cfit_satu_9	=$this->input->post('jwb_cfit_satu_9');
		$jwb_cfit_satu_10	=$this->input->post('jwb_cfit_satu_10');
		$jwb_cfit_satu_11	=$this->input->post('jwb_cfit_satu_11');
		$jwb_cfit_satu_12	=$this->input->post('jwb_cfit_satu_12');
		$jwb_cfit_satu_13	=$this->input->post('jwb_cfit_satu_13');
		$ket				=$this->input->post('ket');
		
		$data = array(
						'id_cfit_satu'		=> $id_cfit_satu,
						'id_materi'			=> $id_materi,
						'nip'				=> $nip,
						'jwb_cfit_satu_1'	=> $jwb_cfit_satu_1,
						'jwb_cfit_satu_2'	=> $jwb_cfit_satu_2,
						'jwb_cfit_satu_3'	=> $jwb_cfit_satu_3,
						'jwb_cfit_satu_4'	=> $jwb_cfit_satu_4,
						'jwb_cfit_satu_5'	=> $jwb_cfit_satu_5,
						'jwb_cfit_satu_6'	=> $jwb_cfit_satu_6,
						'jwb_cfit_satu_7'	=> $jwb_cfit_satu_7,
						'jwb_cfit_satu_8'	=> $jwb_cfit_satu_8,
						'jwb_cfit_satu_9'	=> $jwb_cfit_satu_9,
						'jwb_cfit_satu_10'	=> $jwb_cfit_satu_10,
						'jwb_cfit_satu_11'	=> $jwb_cfit_satu_11,
						'jwb_cfit_satu_12'	=> $jwb_cfit_satu_12,
						'jwb_cfit_satu_13'	=> $jwb_cfit_satu_13,
						'ket'				=> $ket );
										
		$this->M_ujian->simpan_cfit_satu($data,'hasil_cfit_satu');
		redirect('module/appujian/ujian/contoh_cfit_dua');
		
	}
	
//=======================================================================================================================================	
	
	function contoh_cfit_dua(){
		$data['user'] = $this->username;						
		$data['contoh_cfit_dua'] = $this->M_ujian->contoh_cfit_dua();
		$this->load->view('ujian/contoh_cfit_dua',$data);
	}
	
	function simpan_contoh_cfit_dua(){	
		$id_contoh_cfit		=$this->input->post('id_contoh_cfit');
		$id_materi			=$this->input->post('id_materi');
		$id_sub_materi		=$this->input->post('id_sub_materi');
		$nip				=$this->input->post('nip');
		$jwb_contoh_cfit_1	=$this->input->post('jwb_contoh_cfit_1');
		$jwb_contoh_cfit_2	=$this->input->post('jwb_contoh_cfit_2');
		$jwb_contoh_cfit_3	=$this->input->post('jwb_contoh_cfit_3');
		$ket				=$this->input->post('ket');
		
		$data = array(
						'id_contoh_cfit'	=> $id_contoh_cfit,
						'id_materi'			=> $id_materi,
						'id_sub_materi'		=> $id_sub_materi,
						'nip'				=> $nip,
						'jwb_contoh_cfit_1'	=> $jwb_contoh_cfit_1,
						'jwb_contoh_cfit_2'	=> $jwb_contoh_cfit_2,
						'jwb_contoh_cfit_3'	=> $jwb_contoh_cfit_3,
						'ket'				=> $ket );
										
		$this->M_ujian->simpan_contoh_cfit_satu($data,'contoh_cfit');
		redirect('module/appujian/ujian/cfit_dua');
		
	}
	
	function cfit_dua(){
		$data['user'] = $this->username;						
		$data['cfit_dua'] = $this->M_ujian->cfit_dua();
		$this->load->view('ujian/cfit_dua',$data);
	}
		
	function simpan_cfit_dua(){	
		$id_cfit_dua		=$this->input->post('id_cfit_dua');
		$id_materi			=$this->input->post('id_materi');
		$nip				=$this->input->post('nip');
		$jwb_cfit_dua_1		=$this->input->post('jwb_cfit_dua_1');
		$jwb_cfit_dua_2		=$this->input->post('jwb_cfit_dua_2');
		$jwb_cfit_dua_3		=$this->input->post('jwb_cfit_dua_3');
		$jwb_cfit_dua_4		=$this->input->post('jwb_cfit_dua_4');
		$jwb_cfit_dua_5		=$this->input->post('jwb_cfit_dua_5');
		$jwb_cfit_dua_6		=$this->input->post('jwb_cfit_dua_6');
		$jwb_cfit_dua_7		=$this->input->post('jwb_cfit_dua_7');
		$jwb_cfit_dua_8		=$this->input->post('jwb_cfit_dua_8');
		$jwb_cfit_dua_9		=$this->input->post('jwb_cfit_dua_9');
		$jwb_cfit_dua_10	=$this->input->post('jwb_cfit_dua_10');
		$jwb_cfit_dua_11	=$this->input->post('jwb_cfit_dua_11');
		$jwb_cfit_dua_12	=$this->input->post('jwb_cfit_dua_12');
		$jwb_cfit_dua_13	=$this->input->post('jwb_cfit_dua_13');
		$jwb_cfit_dua_14	=$this->input->post('jwb_cfit_dua_14');
		$ket				=$this->input->post('ket');
		
		$data = array(
						'id_cfit_dua'		=> $id_cfit_dua,
						'id_materi'			=> $id_materi,
						'nip'				=> $nip,
						'jwb_cfit_dua_1'	=> $jwb_cfit_dua_1,
						'jwb_cfit_dua_2'	=> $jwb_cfit_dua_2,
						'jwb_cfit_dua_3'	=> $jwb_cfit_dua_3,
						'jwb_cfit_dua_4'	=> $jwb_cfit_dua_4,
						'jwb_cfit_dua_5'	=> $jwb_cfit_dua_5,
						'jwb_cfit_dua_6'	=> $jwb_cfit_dua_6,
						'jwb_cfit_dua_7'	=> $jwb_cfit_dua_7,
						'jwb_cfit_dua_8'	=> $jwb_cfit_dua_8,
						'jwb_cfit_dua_9'	=> $jwb_cfit_dua_9,
						'jwb_cfit_dua_10'	=> $jwb_cfit_dua_10,
						'jwb_cfit_dua_11'	=> $jwb_cfit_dua_11,
						'jwb_cfit_dua_12'	=> $jwb_cfit_dua_12,
						'jwb_cfit_dua_13'	=> $jwb_cfit_dua_13,
						'jwb_cfit_dua_14'	=> $jwb_cfit_dua_14,
						'ket'				=> $ket );
										
		$this->M_ujian->simpan_cfit_dua($data,'hasil_cfit_dua');
		redirect('module/appujian/ujian/contoh_cfit_tiga');
		
	}
	
//=======================================================================================================================================	
	
	function contoh_cfit_tiga(){
		$data['user'] = $this->username;						
		$data['contoh_cfit_tiga'] = $this->M_ujian->contoh_cfit_tiga();
		$this->load->view('ujian/contoh_cfit_tiga',$data);
	}
		
	function simpan_contoh_cfit_tiga(){	
		$id_contoh_cfit		=$this->input->post('id_contoh_cfit');
		$id_materi			=$this->input->post('id_materi');
		$id_sub_materi		=$this->input->post('id_sub_materi');
		$nip				=$this->input->post('nip');
		$jwb_contoh_cfit_1	=$this->input->post('jwb_contoh_cfit_1');
		$jwb_contoh_cfit_2	=$this->input->post('jwb_contoh_cfit_2');
		$jwb_contoh_cfit_3	=$this->input->post('jwb_contoh_cfit_3');
		$ket				=$this->input->post('ket');
		
		$data = array(
						'id_contoh_cfit'	=> $id_contoh_cfit,
						'id_materi'			=> $id_materi,
						'id_sub_materi'		=> $id_sub_materi,
						'nip'				=> $nip,
						'jwb_contoh_cfit_1'	=> $jwb_contoh_cfit_1,
						'jwb_contoh_cfit_2'	=> $jwb_contoh_cfit_2,
						'jwb_contoh_cfit_3'	=> $jwb_contoh_cfit_3,
						'ket'				=> $ket );
										
		$this->M_ujian->simpan_contoh_cfit_satu($data,'contoh_cfit');
		redirect('module/appujian/ujian/hasil_cnth_cfit_tiga');
		
	}
	
	function hasil_cnth_cfit_tiga(){
		$user = $this->username;		
		$nip =$this->input->get($this->username);
		
		$data['hasil_contoh_cfit_tiga'] = $this->M_ujian->hasil_contoh_cfit_tiga($this->username);
		$this->load->view('ujian/hasil_cnth_cfit_tiga',$data);
	}

	function cfit_tiga(){
		$data['user'] = $this->username;						
		$data['cfit_tiga'] = $this->M_ujian->cfit_tiga();
		$this->load->view('ujian/cfit_tiga',$data);
	}
		
	function simpan_cfit_tiga(){	
		$id_cfit_tiga		=$this->input->post('id_cfit_tiga');
		$id_materi			=$this->input->post('id_materi');
		$nip				=$this->input->post('nip');
		$jwb_cfit_tiga_1	=$this->input->post('jwb_cfit_tiga_1');
		$jwb_cfit_tiga_2	=$this->input->post('jwb_cfit_tiga_2');
		$jwb_cfit_tiga_3	=$this->input->post('jwb_cfit_tiga_3');
		$jwb_cfit_tiga_4	=$this->input->post('jwb_cfit_tiga_4');
		$jwb_cfit_tiga_5	=$this->input->post('jwb_cfit_tiga_5');
		$jwb_cfit_tiga_6	=$this->input->post('jwb_cfit_tiga_6');
		$jwb_cfit_tiga_7	=$this->input->post('jwb_cfit_tiga_7');
		$jwb_cfit_tiga_8	=$this->input->post('jwb_cfit_tiga_8');
		$jwb_cfit_tiga_9	=$this->input->post('jwb_cfit_tiga_9');
		$jwb_cfit_tiga_10	=$this->input->post('jwb_cfit_tiga_10');
		$jwb_cfit_tiga_11	=$this->input->post('jwb_cfit_tiga_11');
		$jwb_cfit_tiga_12	=$this->input->post('jwb_cfit_tiga_12');
		$jwb_cfit_tiga_13	=$this->input->post('jwb_cfit_tiga_13');
		$ket				=$this->input->post('ket');
		
		$data = array(
						'id_cfit_tiga'		=> $id_cfit_tiga,
						'id_materi'			=> $id_materi,
						'nip'				=> $nip,
						'jwb_cfit_tiga_1'	=> $jwb_cfit_tiga_1,
						'jwb_cfit_tiga_2'	=> $jwb_cfit_tiga_2,
						'jwb_cfit_tiga_3'	=> $jwb_cfit_tiga_3,
						'jwb_cfit_tiga_4'	=> $jwb_cfit_tiga_4,
						'jwb_cfit_tiga_5'	=> $jwb_cfit_tiga_5,
						'jwb_cfit_tiga_6'	=> $jwb_cfit_tiga_6,
						'jwb_cfit_tiga_7'	=> $jwb_cfit_tiga_7,
						'jwb_cfit_tiga_8'	=> $jwb_cfit_tiga_8,
						'jwb_cfit_tiga_9'	=> $jwb_cfit_tiga_9,
						'jwb_cfit_tiga_10'	=> $jwb_cfit_tiga_10,
						'jwb_cfit_tiga_11'	=> $jwb_cfit_tiga_11,
						'jwb_cfit_tiga_12'	=> $jwb_cfit_tiga_12,
						'jwb_cfit_tiga_13'	=> $jwb_cfit_tiga_13,
						'ket'				=> $ket );
										
		$this->M_ujian->simpan_cfit_tiga($data,'hasil_cfit_tiga');
		redirect('module/appujian/ujian/contoh_cfit_empat');
		
	}
	
//=======================================================================================================================================	
		
	function contoh_cfit_empat(){
		$data['user'] = $this->username;						
		$data['contoh_cfit_empat'] = $this->M_ujian->contoh_cfit_empat();
		$this->load->view('ujian/contoh_cfit_empat',$data);
	}
		
	function simpan_contoh_cfit_empat(){	
		$id_contoh_cfit		=$this->input->post('id_contoh_cfit');
		$id_materi			=$this->input->post('id_materi');
		$id_sub_materi		=$this->input->post('id_sub_materi');
		$nip				=$this->input->post('nip');
		$jwb_contoh_cfit_1	=$this->input->post('jwb_contoh_cfit_1');
		$jwb_contoh_cfit_2	=$this->input->post('jwb_contoh_cfit_2');
		$jwb_contoh_cfit_3	=$this->input->post('jwb_contoh_cfit_3');
		$ket				=$this->input->post('ket');
		
		$data = array(
						'id_contoh_cfit'	=> $id_contoh_cfit,
						'id_materi'			=> $id_materi,
						'id_sub_materi'		=> $id_sub_materi,
						'nip'				=> $nip,
						'jwb_contoh_cfit_1'	=> $jwb_contoh_cfit_1,
						'jwb_contoh_cfit_2'	=> $jwb_contoh_cfit_2,
						'jwb_contoh_cfit_3'	=> $jwb_contoh_cfit_3,
						'ket'				=> $ket );
										
		$this->M_ujian->simpan_contoh_cfit_satu($data,'contoh_cfit');
		redirect('module/appujian/ujian/cfit_empat');
		
	}
	
	function cfit_empat(){
		$data['user'] = $this->username;						
		$data['cfit_empat'] = $this->M_ujian->cfit_empat();
		$this->load->view('ujian/cfit_empat',$data);
	}
		
	function simpan_cfit_empat(){	
		$id_cfit_empat		=$this->input->post('id_cfit_empat');
		$id_materi			=$this->input->post('id_materi');
		$nip				=$this->input->post('nip');
		$jwb_cfit_empat_1	=$this->input->post('jwb_cfit_empat_1');
		$jwb_cfit_empat_2	=$this->input->post('jwb_cfit_empat_2');
		$jwb_cfit_empat_3	=$this->input->post('jwb_cfit_empat_3');
		$jwb_cfit_empat_4	=$this->input->post('jwb_cfit_empat_4');
		$jwb_cfit_empat_5	=$this->input->post('jwb_cfit_empat_5');
		$jwb_cfit_empat_6	=$this->input->post('jwb_cfit_empat_6');
		$jwb_cfit_empat_7	=$this->input->post('jwb_cfit_empat_7');
		$jwb_cfit_empat_8	=$this->input->post('jwb_cfit_empat_8');
		$jwb_cfit_empat_9	=$this->input->post('jwb_cfit_empat_9');
		$jwb_cfit_empat_10	=$this->input->post('jwb_cfit_empat_10');
		$ket				=$this->input->post('ket');
		
		$data = array(
						'id_cfit_empat'		=> $id_cfit_empat,
						'id_materi'			=> $id_materi,
						'nip'				=> $nip,
						'jwb_cfit_empat_1'	=> $jwb_cfit_empat_1,
						'jwb_cfit_empat_2'	=> $jwb_cfit_empat_2,
						'jwb_cfit_empat_3'	=> $jwb_cfit_empat_3,
						'jwb_cfit_empat_4'	=> $jwb_cfit_empat_4,
						'jwb_cfit_empat_5'	=> $jwb_cfit_empat_5,
						'jwb_cfit_empat_6'	=> $jwb_cfit_empat_6,
						'jwb_cfit_empat_7'	=> $jwb_cfit_empat_7,
						'jwb_cfit_empat_8'	=> $jwb_cfit_empat_8,
						'jwb_cfit_empat_9'	=> $jwb_cfit_empat_9,
						'jwb_cfit_empat_10'	=> $jwb_cfit_empat_10,
						'ket'				=> $ket );
										
		$this->M_ujian->simpan_cfit_empat($data,'hasil_cfit_empat');
		//redirect('module/appujian/ujian/papi');
		redirect('module/appujian/ujian/ankas');
		
	}
	
///// END OF CFIT


//========================================================================================================

	function thanks(){
		$this->load->view('ujian/thanks');
	}

				
}
?>