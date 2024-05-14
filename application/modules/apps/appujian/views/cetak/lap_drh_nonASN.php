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

$data = $this->db->get('registrasi_non_asn')->result();
$no=0;
foreach ($drhNon as $d){
$no++;

// create some HTML content
$html = 
'
	<p style="text-align:center; font-weight: bold;">DAFTAR RIWAYAT HIDUP <br/>
	PENILAIAN KOMPETENSI APARATUR SIPIL NEGARA</p></br>
	<p>I. IDENTITAS DIRI</p>
	
	<table style="border: 1px solid #000; height:20px;">
		<tr style="border: 1px solid #000; height:20px;">
			<td style="border: 1px solid #000; height:25px;">Nama Lengkap (dengan gelar)</td> 
			<td style="border: 1px solid #000; height:20px;">:<b> '.$d->nama.' </b></td>
		</tr>
		<tr style="border: 1px solid #000; height:20px;">
			<td style="border: 1px solid #000; height:20px;">NIP</td> 
			<td style="border: 1px solid #000; height:20px;">:<b> '.$d->nip.' </b></td>
		</tr>
		<tr style="border: 1px solid #000; height:20px;">
			<td style="border: 1px solid #000; height:20px;">Jabatan</td> 
			<td style="border: 1px solid #000; height:20px;">:<b> '.$d->jabatan.' </b></td>
		</tr>
		<tr style="border: 1px solid #000; height:20px;">
			<td style="border: 1px solid #000; height:20px;">Unit Kerja</td>
			<td style="border: 1px solid #000; height:20px;">:<b> '.$d->unker.' </b></td>
		</tr>
	</table>
	
	<p>II. RIWAYAT PENDIDIKAN</p>
	<table style="border: 1px solid #000; height:20px;">
		<thead>
			<tr style="border: 1px solid #000; height:20px;">
				<th style="border: 1px solid #000; height:20px; text-align:center; font-weight: bold;">Jenjang</th>
				<th style="border: 1px solid #000; height:20px; text-align:center; font-weight: bold;">Univ./Perguruan Tinggi</th>
				<th style="border: 1px solid #000; height:20px; text-align:center; font-weight: bold;">Jurusan</th>
				<th style="border: 1px solid #000; height:20px; text-align:center; font-weight: bold;">Tahun</th>
			</tr>
		</thead>
		<tbody>
			<tr style="border: 1px solid #000; height:20px;">
				<td style="border: 1px solid #000; height:20px;">'.$d->pendidikan.'</td>
				<td style="border: 1px solid #000; height:20px;"> '.$d->jurusan.'</td>
				<td style="border: 1px solid #000; height:20px;"> '.$d->univ.'</td>
				<td style="border: 1px solid #000; height:20px;"> '.$d->thn_lulus.'</td>
			</tr>
		</tbody>
	</table>
	
	<p>III. TESTIMONI PEKERJAAN </p>
	<table>
	<p>Di unit kerja saat ini, kebijakan manajemen apa yang menurut Saudara perlu perbaikan untuk menciptakan suasana kerja yang kondusif sehingga dapat meningkatkan kinerja saudara? </p>
		<tr style="border: 1px solid #000; height:130px;">
			<td style="border: 1px solid #000; height:130px;font-style: italic;"><p>'.$d->kebijakan.'</p></td>
		</tr>
	</table>
	
	<p>IV. KEKUATAN DAN KELEMAHAN</p>
	<table style="border: 1px solid #000; height:20px;">
		<tr style="border: 1px solid #000; height:25px;">
			<td style="border: 1px solid #000; height:25px;">1. Sikap / Prilaku / Tindakan apa yang menjadi <b>kekuatan/kelebihan</b> Saudara dalam bekerja ? </td> 
		</tr>
		<tr style="border: 1px solid #000; height:80px;">
			<td style="border: 1px solid #000; height:80px;font-style: italic;">'.$d->kekuatan_1.'</td> 
		</tr>
		<tr style="border: 1px solid #000; height:80px;">
			<td style="border: 1px solid #000; height:80px;font-style: italic;"><b>Mengapa..?</b><br/>'.$d->mengapa_kekuatan_1.'</td> 
		</tr>
		<tr style="border: 1px solid #000; height:25px;">
			<td style="border: 1px solid #000; height:25px;font-style: italic;">2. Sikap / Prilaku / Tindakan apa yang <b>masih perlu diperbaiki</b> dalam diri Saudara ? </td> 
		</tr>
		<tr style="border: 1px solid #000; height:80px;">
			<td style="border: 1px solid #000; height:80px;font-style: italic;">'.$d->kekuatan_2.'</td>
		</tr>
		<tr style="border: 1px solid #000; height:80px;">
			<td style="border: 1px solid #000; height:80px;font-style: italic;"><b>Mengapa..?</b> <br/>'.$d->mengapa_kekuatan_2.'</td> 
		</tr>
	</table>
		
';

// output the HTML content
$pdf->writeHTML($html, true, 0, true, 0);
}

// reset pointer to the last page
$pdf->lastPage();
// ---------------------------------------------------------
$data = $this->db->get('registrasi_non_asn')->result();
$no=0;
foreach ($drhNon as $d){
$no++;
//Close and output PDF document
$pdf->Output('cv_'.$d->nama.'.pdf', 'I');
}
//============================================================+
// END OF FILE
//============================================================+

?>