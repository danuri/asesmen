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

$data = $this->db->get('registrasi')->result();
$no=0;
foreach ($drh as $d){
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
			<td style="border: 1px solid #000; height:20px;">Pangkat/Gol.</td> 
			<td style="border: 1px solid #000; height:20px;">:<b> '.$d->gol.' </b></td>
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
				<td style="border: 1px solid #000; height:20px;">'.$d->jenped_awal.'</td>
				<td style="border: 1px solid #000; height:20px;"> '.$d->jur_awal.'</td>
				<td style="border: 1px solid #000; height:20px;"> '.$d->univ_awal.'</td>
				<td style="border: 1px solid #000; height:20px;"> '.$d->thn_awal.'</td>
			</tr>
			<tr style="border: 1px solid #000; height:20px;">
				<td style="border: 1px solid #000; height:20px;">'.$d->jenpend_akhir.'</td>
				<td style="border: 1px solid #000; height:20px;"> '.$d->jur_akhir.'</td>
				<td style="border: 1px solid #000; height:20px;"> '.$d->univ_akhir.'</td>
				<td style="border: 1px solid #000; height:20px;"> '.$d->thn_akhir.'</td>
			</tr>
		</tbody>
	</table>
	
	<p>III. RIWAYAT PEKERJAAN </p>
	<table style="border: 1px solid #000; height:20px;">
		<thead>
			<tr style="border: 1px solid #000; height:20px;">
				<th style="border: 1px solid #000; height:20px; text-align:center; font-weight: bold;">Nama Jabatan</th>
				<th style="border: 1px solid #000; height:20px; text-align:center; font-weight: bold;">Unit Kerja</th>
				<th style="border: 1px solid #000; height:20px; text-align:center; font-weight: bold;">Dari Tahun s.d Tahun</th>
			</tr>
		</thead>
		<tbody>
			<tr style="border: 1px solid #000; height:20px;">
				<td style="border: 1px solid #000; height:20px;">'.$d->jab_1.'</td>
				<td style="border: 1px solid #000; height:20px;"> '.$d->unker_1.'</td>
				<td style="border: 1px solid #000; height:20px;"> '.$d->thn_unker_1.'</td>
			</tr>
			<tr style="border: 1px solid #000; height:20px;">
				<td style="border: 1px solid #000; height:20px;">'.$d->jab_2.'</td>
				<td style="border: 1px solid #000; height:20px;"> '.$d->unker_2.'</td>
				<td style="border: 1px solid #000; height:20px;"> '.$d->thn_unker_2.'</td>
			</tr>
		</tbody>
	</table>
	
	<p>IV. TESTIMONI PEKERJAAN </p>
	<p>Di unit kerja mana, Saudara merasa Puas dan Tidak Puas? Ceritakan secara singkat ! </p>
	<table style="border: 1px solid #000; height:20px;">
		<thead>
			<tr style="border: 1px solid #000; height:20px;">
				<th style="border: 1px solid #000; height:20px; text-align:center; font-weight: bold;">Yang Memuaskan</th>
				<th style="border: 1px solid #000; height:20px; text-align:center; font-weight: bold;">Yang Tidak Memuaskan</th>
			</tr>
		</thead>
		<tbody>
			<tr style="border: 1px solid #000; height:20px;">
				<td style="border: 1px solid #000; height:20px;">Di unit Kerja mana? <br/> <p>'.$d->unker_puas.'</p> <br/> <hr/> Mengapa? <br/> <p>'.$d->alasan_puas.'</p></td>
				<td style="border: 1px solid #000; height:20px;">Di unit Kerja mana? <br/> <p>'.$d->unker_no_puas.'</p> <br/> <hr/> Mengapa? <br/> <p>'.$d->alasan_no_puas.'</p></td>
			</tr>
		</tbody>
	</table>
			<hr/>
			<table>
			<p>Di unit kerja saat ini, kebijakan manajemen apa yang menurut Saudara perlu perbaikan untuk menciptakan suasana kerja yang kondusif sehingga dapat meningkatkan kinerja saudara? </p>
				<tr style="border: 1px solid #000; height:130px;">
					<td style="border: 1px solid #000; height:130px;"><p>'.$d->kebijakan.'</p></td>
				</tr>
			</table>
	
	<p>V. KEKUATAN DAN KELEMAHAN</p>
	<table style="border: 1px solid #000; height:20px;">
		<tr style="border: 1px solid #000; height:25px;">
			<td style="border: 1px solid #000; height:25px;">1. Sikap / Prilaku / Tindakan apa yang menjadi <b>kekuatan/kelebihan</b> Saudara dalam bekerja ? </td> 
		</tr>
		<tr style="border: 1px solid #000; height:80px;">
			<td style="border: 1px solid #000; height:80px;"><b>'.$d->kekuatan_1.'</b></td> 
		</tr>
		<tr style="border: 1px solid #000; height:80px;">
			<td style="border: 1px solid #000; height:80px;">Mengapa..? <br/><b>'.$d->mengapa_kekuatan_1.'</b></td> 
		</tr>
		<tr style="border: 1px solid #000; height:25px;">
			<td style="border: 1px solid #000; height:25px;">2. Sikap / Prilaku / Tindakan apa yang <b>masih perlu diperbaiki</b> dalam diri Saudara ? </td> 
		</tr>
		<tr style="border: 1px solid #000; height:80px;">
			<td style="border: 1px solid #000; height:80px;"><b>'.$d->kekuatan_2.'</b></td>
		</tr>
		<tr style="border: 1px solid #000; height:80px;">
			<td style="border: 1px solid #000; height:80px;">Mengapa..? <br/><b>'.$d->mengapa_kekuatan_2.'</b></td> 
		</tr>
	</table>
		
';

// output the HTML content
$pdf->writeHTML($html, true, 0, true, 0);
}

// reset pointer to the last page
$pdf->lastPage();
// ---------------------------------------------------------
$data = $this->db->get('registrasi')->result();
$no=0;
foreach ($drh as $d){
$no++;
//Close and output PDF document
$pdf->Output('drh_'.$d->nama.'.pdf', 'I');
}
//============================================================+
// END OF FILE
//============================================================+

?>