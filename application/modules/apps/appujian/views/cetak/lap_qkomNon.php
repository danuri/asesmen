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

$data = $this->db->get('hasil_qkom_nonasn')->result();
$no=0;
foreach ($qkom as $d){
$no++;

// create some HTML content
$html = 
'

	<table class="table table-bordered" style="margin-bottom: 0px; font-size: 10px;">
		<tr>
			<td width="100px">Nama</td>
			<td width="250px">: <b> '.$d->nama.' </b></td>
			<td width="100px">No.Reg</td>
			<td>: <b> '.$d->nip.' </b></td>

		</tr>
		<tr>
			<td width="100px">Jabatan</td>
			<td width="250px">: <b> '.$d->jabatan.' </b></td>
			<td width="100px">Unit Kerja</td>
			<td>: <b> '.$d->unker.' </b></td>
		</tr>
		<tr>
			<td width="100px">Pendidikan</td>
			<td width="250px">: <b> '.$d->pendidikan.' / '.$d->jurusan.' </b></td>
			<td width="100px">Sekolah/Univ.</td>
			<td>: <b> '.$d->univ.' - '.$d->thn_lulus.' </b></td>
		</tr>
	</table>
	<br/><hr/>

	<table class="table table-bordered" style="margin-bottom: 0px; font-size: 10px;">
		<tr>
			<br/>
			<td><b>Di unit kerja saat ini, kebijakan manajemen apa yang menurut Saudara perlu perbaikan untuk menciptakan suasana kerja yang kondusif sehingga dapat meningkatkan kinerja saudara?</b></td>
		</tr>
		<tr>
			<td>'.$d->kebijakan.'</td>
		</tr>
		<tr>
			<br/>
			<td><b>1. Sikap/Prilaku/Tindakan apa kekuatan/kelebihan Saudara ?</b></td>
		</tr>
		<tr>
			<td>'.$d->kekuatan_1.'</td>
		</tr>
		<tr>
			<td><b>Mengapa dan berikan alasan saudara !</b></td>
		</tr>
		<tr>
			<td>'.$d->mengapa_kekuatan_1.'</td>
		</tr>
		<tr>
			<br/>
			<td><b>2. Sikap/Prilaku/Tindakan apa yang perlu diperbaiki dalam diri Saudara ?</b></td>
		</tr>
		<tr>
			<td>'.$d->kekuatan_2.'</td>
		</tr>
		<tr>
			<td><b>Mengapa dan berikan alasan saudara !</b></td>
		</tr>
		<tr>
			<td>'.$d->mengapa_kekuatan_2.'</td>
		</tr>
	</table>
	<br/><hr/>

	<table class="table table-bordered" style="width:100%; margin-bottom: 0px; font-size: 10px;">
		<tr style="text-align: left; width:250px; font-weight:bold;">
			<br/>
			<td width="100px">Alat Tes</td>
			<td>: Q - Kompetensi </td>
		</tr>
		<tr>
			<br/>
			<td colspan="3"><p style="text-align: justify;font-weight: bold;">(1) Ceritakan pengalaman Anda ketika melihat/mengetahui rekan kerja atau orang lain melakukan hal sifatnya melanggar peraturan yang diterapkan di organisasi (OPD) !</p></td>
		</tr>
		<tr>
			<br/>
			<td style="text-align: left; width:250px;">Kejadianya apa dan kapan hal itu terjadi</td>
			<td style="text-align: center; width:10px;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px;">'.$d->jwb1_a.'</td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px;">Ceritakan dan apa peran saudara di situasi tersebut</td>
			<td style="text-align: center; width:10px;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px;"><p style="text-align: justify;font-style: italic;">'.$d->jwb1_b.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px;">Bagaimana hasilnya</td>
			<td style="text-align: center; width:10px;">:</td>
			<td><p style="text-align: justify;font-style: italic; width:375px;">'.$d->jwb1_c.'</p></td>
		</tr>
		<br/>
		<tr>
			<td colspan="3"><p style="text-align: justify;font-weight: bold;">(2) Ceritakan pengalaman Anda, pada saat berusaha memaksimalkan kerja sama dalam tim untuk mencapai target yang telah sudah dibebankan kepada tim !</p></td>
		</tr>
		<tr>
			<br/>
			<td style="text-align: left; width:250px;">Kejadianya apa dan kapan hal itu terjadi</td>
			<td style="text-align: center; width:10px;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px;">'.$d->jwb2_a.'</td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px;">Ceritakan dan apa peran saudara di situasi tersebut</td>
			<td style="text-align: center; width:10px;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px;"><p style="text-align: justify;font-style: italic;">'.$d->jwb2_b.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px;">Bagaimana hasilnya</td>
			<td style="text-align: center; width:10px;">:</td>
			<td><p style="text-align: justify;font-style: italic; width:375px;">'.$d->jwb2_c.'</p></td>
		</tr>
		<br/>
		<tr>
			<td colspan="3"><p style="text-align: justify;font-weight: bold;">(3) Ceritakan satu pengalaman menarik Anda dalam menanggapi/merespon saran/masukan dari orang lain !</p></td>
		</tr>
		<tr>
			<br/>
			<td style="text-align: left; width:250px;">Kejadianya apa dan kapan hal itu terjadi</td>
			<td style="text-align: center; width:10px;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px;">'.$d->jwb3_a.'</td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px;">Ceritakan dan apa peran saudara di situasi tersebut</td>
			<td style="text-align: center; width:10px;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px;"><p style="text-align: justify;font-style: italic;">'.$d->jwb3_b.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px;">Bagaimana hasilnya</td>
			<td style="text-align: center; width:10px;">:</td>
			<td><p style="text-align: justify;font-style: italic; width:375px;">'.$d->jwb3_c.'</p></td>
		</tr>
		<br/>
		<tr>
			<td colspan="3"><p style="text-align: justify;font-weight: bold;">(4) Ceritakan upaya Anda dalam meningkatkan hasil kerja yang lebih tinggi dari  kerja yang sudah ditetapkan !</p></td>
		</tr>
		<tr>
			<br/>
			<td style="text-align: left; width:250px;">Kejadianya apa dan kapan hal itu terjadi</td>
			<td style="text-align: center; width:10px;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px;">'.$d->jwb4_a.'</td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px;">Ceritakan dan apa peran saudara di situasi tersebut</td>
			<td style="text-align: center; width:10px;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px;"><p style="text-align: justify;font-style: italic;">'.$d->jwb4_b.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px;">Bagaimana hasilnya</td>
			<td style="text-align: center; width:10px;">:</td>
			<td><p style="text-align: justify;font-style: italic; width:375px;">'.$d->jwb4_c.'</p></td>
		</tr>
		<br/>
		<tr>
			<td colspan="3"><p style="text-align: justify;font-weight: bold;">(5)  Ceritakan pengalaman Anda ketika menghadapi pertanyaan/keluhan atas pelayanan publik di  lingkungan kerja Anda !</p></td>
		</tr>
		<tr>
			<br/>
			<td style="text-align: left; width:250px;">Kejadianya apa dan kapan hal itu terjadi</td>
			<td style="text-align: center; width:10px;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px;">'.$d->jwb5_a.'</td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px;">Ceritakan dan apa peran saudara di situasi tersebut</td>
			<td style="text-align: center; width:10px;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px;"><p style="text-align: justify;font-style: italic;">'.$d->jwb5_b.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px;">Bagaimana hasilnya</td>
			<td style="text-align: center; width:10px;">:</td>
			<td><p style="text-align: justify;font-style: italic; width:375px;">'.$d->jwb5_c.'</p></td>
		</tr>
		<br/>
		<tr>
			<td colspan="3"><p style="text-align: justify;font-weight: bold;">(6)  Ceritakan pengalaman menarik Anda ketika berupaya meningkatkan kemampuan orang lain untuk dapat melaksanakan pekerjaannya !</p></td>
		</tr>
		<tr>
			<br/>
			<td style="text-align: left; width:250px;">Kejadianya apa dan kapan hal itu terjadi</td>
			<td style="text-align: center; width:10px;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px;">'.$d->jwb6_a.'</td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px;">Ceritakan dan apa peran saudara di situasi tersebut</td>
			<td style="text-align: center; width:10px;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px;"><p style="text-align: justify;font-style: italic;">'.$d->jwb6_b.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px;">Bagaimana hasilnya</td>
			<td style="text-align: center; width:10px;">:</td>
			<td><p style="text-align: justify;font-style: italic; width:375px;">'.$d->jwb6_c.'</p></td>
		</tr>
		<br/>
		<tr>
			<td colspan="3"><p style="text-align: justify;font-weight: bold;">(7) Ceritakan pengalaman menarik Anda ketika beradaptasi dengan lingkungan kerja yang baru !</p></td>
		</tr>
		<tr>
			<br/>
			<td style="text-align: left; width:250px;">Kejadianya apa dan kapan hal itu terjadi</td>
			<td style="text-align: center; width:10px;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px;">'.$d->jwb7_a.'</td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px;">Ceritakan dan apa peran saudara di situasi tersebut</td>
			<td style="text-align: center; width:10px;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px;"><p style="text-align: justify;font-style: italic;">'.$d->jwb7_b.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px;">Bagaimana hasilnya</td>
			<td style="text-align: center; width:10px;">:</td>
			<td><p style="text-align: justify;font-style: italic; width:375px;">'.$d->jwb7_c.'</p></td>
		</tr>
		<br/>
		<tr>
			<td colspan="3"><p style="text-align: justify;font-weight: bold;">(8) Ceritakan pengalaman menarik Anda dalam mencari solusi terkait permasalahan yang dihadapi dalam penyelesaian tugas yang menjadi tanggung jawab Anda !</p></td>
		</tr>
		<tr>
			<br/>
			<td style="text-align: left; width:250px;">Kejadianya apa dan kapan hal itu terjadi</td>
			<td style="text-align: center; width:10px;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px;">'.$d->jwb8_a.'</td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px;">Ceritakan dan apa peran saudara di situasi tersebut</td>
			<td style="text-align: center; width:10px;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px;"><p style="text-align: justify;font-style: italic;">'.$d->jwb8_b.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px;">Bagaimana hasilnya</td>
			<td style="text-align: center; width:10px;">:</td>
			<td><p style="text-align: justify;font-style: italic; width:375px;">'.$d->jwb8_c.'</p></td>
		</tr>
		<br/>
		<tr>
			<td colspan="3"><p style="text-align: justify;font-weight: bold;">(9) Ceritakan pengalaman menarik Anda ketika mengembangkan sikap toleransi di lingkungan kerja !</p></td>
		</tr>
		<tr>
			<br/>
			<td style="text-align: left; width:250px;">Kejadianya apa dan kapan hal itu terjadi</td>
			<td style="text-align: center; width:10px;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px;">'.$d->jwb9_a.'</td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px;">Ceritakan dan apa peran saudara di situasi tersebut</td>
			<td style="text-align: center; width:10px;">:</td>
			<td style="text-align: justify;font-style: italic; width:375px;"><p style="text-align: justify;font-style: italic;">'.$d->jwb9_b.'</p></td>
		</tr>
		<tr>
			<td style="text-align: left; width:250px;">Bagaimana hasilnya</td>
			<td style="text-align: center; width:10px;">:</td>
			<td><p style="text-align: justify;font-style: italic; width:375px;">'.$d->jwb9_c.'</p></td>
		</tr>
	</table>
		
';

// output the HTML content
$pdf->writeHTML($html, true, 0, true, 0);
}

// reset pointer to the last page
$pdf->lastPage();
// ---------------------------------------------------------
$data = $this->db->get('hasil_qkom_nonasn')->result();
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