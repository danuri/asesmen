<?php

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('aSwTecH');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 9);

// add a page
$pdf->AddPage();

$data = $this->db->get('hasil_qkom_satu')->result();
$data = $this->db->get('hasil_qkom_dua')->result();
$no=0;
foreach ($qkom as $d){
$no++;

// create some HTML content
$html = 
'
	<table class="table table-bordered" style="width:100%; margin-bottom: 0px; font-size: 10px;">
		<tr><td width="100px">Nama</td>
			<td>: <b> '.$d->nama.' </b></td>
		</tr>
		<tr><td>NIP</td>
			<td>: <b> '.$d->nip.' </b></td>
		</tr>
		<tr><td>Alat Tes</td>
			<td>: <b> Q - Kompetensi </b></td>
		</tr>
	</table>
	<br/><hr/>		

	<table style="width:100%; margin-top: 15px;font-size: 9px; table-layout: fixed; word-wrap: break-word;">
		<tr>
			<br>
			<td colspan="4" style="width: 100%; word-wrap: break-word;"><p style="text-align: justify;font-weight: bold;">( 1.a ) Ceritakan tindakan yang telah Saudara lakukan yang sesuai dengan aturan, nilai-nilai, dan etika yang berlaku!</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana kejadian/situasinya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;">'.$d->jwb1a_a.'</td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Kapan terjadi</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb1a_b.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Apa peran Saudara dan jelaskan</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb1a_c.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana hasilnya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb1a_d.'</p></td>
		</tr>
		<br/>
		
		<tr>
			<br/>
			<td colspan="4" style="width: 100%; word-wrap: break-word;"><p style="text-align: justify;font-weight: bold;">( 1.b ) Ceritakan tindakan yang Saudara lakukan yang kurang sesuai dengan aturan, nilai-nilai, dan etika yang berlaku!</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana kejadian/situasinya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;">'.$d->jwb1b_a.'</td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Kapan terjadi</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb1b_b.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Apa peran Saudara dan jelaskan</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb1b_c.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana hasilnya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb1b_d.'</p></td>
		</tr>
		<br/>
		
		<tr>
			<br/>
			<td colspan="4" style="width: 100%; word-wrap: break-word;"><p style="text-align: justify;font-weight: bold;">( 2 ) Usaha – usaha apa saja yang sudah Saudara lakukan untuk memasikan bahwa sikap dan tindakan orang lain di lingkungan kerja Saudara sudah sesuai dengan aturan, nilai, dan norma organisasi yang berlaku?</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana kejadian/situasinya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;">'.$d->jwb2_a.'</td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Kapan terjadi</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb2_b.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Apa peran Saudara dan jelaskan</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb2_c.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana hasilnya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb2_d.'</p></td>
		</tr>
		<br/>
		
		<tr>
			<br/>
			<td colspan="4" style="width: 100%; word-wrap: break-word;"><p style="text-align: justify;font-weight: bold;">( 3 ) Ceritakan pengalaman Saudara ketika harus bekerja sama dalam tim untuk menyelesaikan sebuah proyek/kegiatan penting!</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana kejadian/situasinya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;">'.$d->jwb3_a.'</td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Kapan terjadi</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb3_b.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Apa peran Saudara dan jelaskan</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb3_c.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana hasilnya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb3_d.'</p></td>
		</tr>
		<br/>
		
		<tr>
			<br/>
			<td colspan="4" style="width: 100%; word-wrap: break-word;"><p style="text-align: justify;font-weight: bold;">( 4 ) Ceritakan pengalaman Saudara ketika mengerjakan kegiatan/tim kepanitiaan/proyek penting yang melibatkan lintas bidang/bagian dalam organisasi Saudara?</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana kejadian/situasinya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;">'.$d->jwb4_a.'</td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Kapan terjadi</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb4_b.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Apa peran Saudara dan jelaskan</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb4_c.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana hasilnya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb4_d.'</p></td>
		</tr>
		<br/>
		
		<tr>
			<br/>
			<td colspan="4" style="width: 100%; word-wrap: break-word;"><p style="text-align: justify;font-weight: bold;">( 5 ) Ceritakan Pengalaman Saudara dalam menyampaikan pendapat/informasi/ide di tengah situasi dan kondisi yang kurang menyenangkan bagi Saudara!</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana kejadian/situasinya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;">'.$d->jwb5_a.'</td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Kapan terjadi</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb5_b.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Apa peran Saudara dan jelaskan</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb5_c.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana hasilnya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb5_d.'</p></td>
		</tr>
		<br/>
		
		<tr>
			<br/>
			<td colspan="4" style="width: 100%; word-wrap: break-word;"><p style="text-align: justify;font-weight: bold;">( 6 ) Ceritakan pengalaman Saudara dalam memberikan target kerja yang lebih menantang kepada orang lain di unit kerja Saudara?</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana kejadian/situasinya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;">'.$d->jwb6_a.'</td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Kapan terjadi</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb6_b.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Apa peran Saudara dan jelaskan</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb6_c.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana hasilnya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb6_d.'</p></td>
		</tr>
		<br/>
		
		<tr>
			<br/>
			<td colspan="4" style="width: 100%; word-wrap: break-word;"><p style="text-align: justify;font-weight: bold;">( 7 ) Ceritakan pengalaman Saudara dalam memberikan pelayanan terhadap pengguna/pelanggan (internal/eksternal)! Pelayanan seperti apa yang Saudara berikan ?</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana kejadian/situasinya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;">'.$d->jwb7_a.'</td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Kapan terjadi</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb7_b.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Apa peran Saudara dan jelaskan</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb7_c.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana hasilnya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb7_d.'</p></td>
		</tr>
		<br/>
		
		<tr>
			<br/>
			<td colspan="4" style="width: 100%; word-wrap: break-word;"><p style="text-align: justify;font-weight: bold;">( 8 ) Ceritakan pengalaman Saudara dalam menangani complain (keluhan)  dari pengguna/pelanggan (internal/eksternal)! Bagaimana situasinya? Apa tindakan yang Saudara lakukan? Bagaimana hasil akhirnya?</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana kejadian/situasinya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;">'.$d->jwb8_a.'</td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Kapan terjadi</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb8_b.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Apa peran Saudara dan jelaskan</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb8_c.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana hasilnya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb8_d.'</p></td>
		</tr>
		<br/>
		
		<tr>
			<br/>
			<td colspan="4" style="width: 100%; word-wrap: break-word;"><p style="text-align: justify;font-weight: bold;">( 9 ) Ceritakan tindakan yang telah Saudara lakukan untuk mengembangkan kompetensi/meningkatkan kemampuan orang lain di unit kerja Saudara?</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana kejadian/situasinya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;">'.$d->jwb9_a.'</td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Kapan terjadi</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb9_b.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Apa peran Saudara dan jelaskan</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb9_c.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana hasilnya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb9_d.'</p></td>
		</tr>
		<br/>
		
		<tr>
			<br/>
			<td colspan="4" style="width: 100%; word-wrap: break-word;"><p style="text-align: justify;font-weight: bold;">( 10 ) Ceritakan pengalaman Saudara dalam mengelola bawahan/orang lain di unit kerja Saudara ?</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana kejadian/situasinya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;">'.$d->jwb10_a.'</td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Kapan terjadi</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb10_b.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Apa peran Saudara dan jelaskan</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb10_c.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana hasilnya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb10_d.'</p></td>
		</tr>
		<br/>
		
		<tr>
			<br/>
			<td colspan="4" style="width: 100%; word-wrap: break-word;"><p style="text-align: justify;font-weight: bold;">( 11 ) Bagaimana Saudara menyikapi tuntutan perubahan dalam organisasi? Tindakan apa yang telah Saudara lakukan? Bagaimana hasilnya?</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana kejadian/situasinya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;">'.$d->jwb11_a.'</td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Kapan terjadi</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb11_b.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Apa peran Saudara dan jelaskan</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb11_c.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana hasilnya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb11_d.'</p></td>
		</tr>
		<br/>
		
		<tr>
			<br/>
			<td colspan="4" style="width: 100%; word-wrap: break-word;"><p style="text-align: justify;font-weight: bold;">( 12 ) Ceritakan pengalaman Saudara dalam menghadapi kesulitan-kesulitan yang diakibatkan oleh adanya perubahan yang terjadi di organisasi?</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana kejadian/situasinya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;">'.$d->jwb12_a.'</td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Kapan terjadi</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb12_b.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Apa peran Saudara dan jelaskan</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb12_c.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana hasilnya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb12_d.'</p></td>
		</tr>
		<br/>
		
		<tr>
			<br/>
			<td colspan="4" style="width: 100%; word-wrap: break-word;"><p style="text-align: justify;font-weight: bold;">( 13 ) Ceritakan pengalaman Saudara ketika berada dalam situasi yang mengharuskan Saudara mengambil sebuah keputusan! Situasinya seperti apa saat itu?</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana kejadian/situasinya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;">'.$d->jwb13_a.'</td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Kapan terjadi</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb13_b.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Apa peran Saudara dan jelaskan</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb13_c.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana hasilnya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb13_d.'</p></td>
		</tr>
		<br/>
		
		<tr>
			<br/>
			<td colspan="4" style="width: 100%; word-wrap: break-word;"><p style="text-align: justify;font-weight: bold;">( 14 ) Ceritakan pengalaman Saudara dalam rangka mengembangkan/membina/memupuk rasa persaudaraan antar individu yang berbeda latar belakang baik suku/budaya/adat istiadat dan toleransi antar umat beragama dan keyakinan baik di lingkungan kerja maupun di lingkungan masyarakat tempat tinggal Saudara?</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana kejadian/situasinya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;">'.$d->jwb14_a.'</td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Kapan terjadi</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb14_b.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Apa peran Saudara dan jelaskan</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb14_c.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana hasilnya</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px; border: 0,8px solid black; border-collapse: collapse;"><p style="text-align: justify;font-style: italic;">'.$d->jwb14_d.'</p></td>
		</tr>
		<br/>
		
		<tr>
			<br/>
			<td colspan="4" style="width: 100%; word-wrap: break-word;"><p style="text-align: justify;font-weight: bold; width:100%;">( 15 ) Ceritakan alasan Saudara mengikuti seleksi pimpinan tinggi pratama ini! Jabatan satuan kerja  apa yang Saudara pilih?</p></td>
		</tr>
		<tr>
			<td style="text-align: justify;font-style: italic; width:100%; border: 0,8px solid black; border-collapse: collapse;">'.$d->jwb15.'</td>
		</tr>
		<br/>
		
		<tr>
			<br/>
			<td colspan="4" style="width: 100%; word-wrap: break-word;"><p style="text-align: justify;font-weight: bold; width:100%;">( 16 ) Menurut Saudara apa saja kompetensi yang di butuhkan dalam jabatan yang Saudara pilih? Mengapa kompetensi itu dibutuhkan?</p></td>
		</tr>
		<tr>
			<td style="text-align: justify;font-style: italic; width:100%; border: 0,8px solid black; border-collapse: collapse;">'.$d->jwb16.'</td>
		</tr>
		<br/>
		
		<tr>
			<br/>
			<td colspan="4" style="width: 100%; word-wrap: break-word;"><p style="text-align: justify;font-weight: bold; width:100%;">( 17 ) Apa kompetensi yang Saudara miliki? Apakah kompetensi yang Saudara miliki sudah cukup sesuai dengan target jabatan Saudara?</p></td>
		</tr>
		<tr>
			<td style="text-align: justify;font-style: italic; width:100%; border: 0,8px solid black; border-collapse: collapse;">'.$d->jwb17.'</td>
		</tr>
		<br/>
		
	</table>
		
';

// output the HTML content
$pdf->writeHTML($html, true, 0, true, 0);
}

// reset pointer to the last page
$pdf->lastPage();
// ---------------------------------------------------------
$data = $this->db->get('hasil_qkom_satu')->result();
$data = $this->db->get('hasil_qkom_dua')->result();
$no=0;
foreach ($qkom as $d){
$no++;

//Close and output PDF document
$pdf->Output('q_kom_'.$d->nama.'.pdf', 'I');
}
//============================================================+
// END OF FILE
//============================================================+

?>