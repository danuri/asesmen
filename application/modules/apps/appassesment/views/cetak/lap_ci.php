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

$data = $this->db->get('hasil_ci_satu')->result();
$no=0;
foreach ($ci as $d){
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
			<td>: <b> Critical Incident </b></td>
		</tr>
	</table>	
		<br/><hr/>
		
	<table style="width:100%; margin-top: 15px;font-size: 9px; table-layout: fixed; word-wrap: break-word;">
		<tr>
			<br>
			<td style="text-align: left; width:100%; border-collapse: collapse; font-size:1em;font-weight:bold;">Tugas I</td>	
		</tr>
		<tr>
			<td style="text-align: justify; width:100%; border-collapse: collapse; font-size:1em">
			Ceritakan kejadian yang pernah anda alami didalam pekerjaan (boleh sewaktu bekerja ditempat /posisi lain sebelum yang sekarang) <b> selama dua tahun terakhir ini yang dampak atau hasilnya merupakan suatu sukses besar yang paling membanggakan bagi anda.</b> (topik bebas, boleh mengenai apa saja. Contohnya bisa mengenai perjuangan /keberhasilan mencapai target tinggi atau program penting yang telah dilaksanakan, problem sulit yang akhirnya bisa diatasi, dan sebagainya).
			</td>
		</tr>
		<tr>
			<br>
			<td style="text-align: center; width:20px; border: 0,8px solid black; border-collapse: collapse;">1.</td>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Topik Kejadian</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:358px; border: 0,8px solid black; border-collapse: collapse;">'.$d->s1_topik.'</td>
		</tr>
		<tr>
			<td style="text-align: center; width:20px; border: 0,8px solid black; border-collapse: collapse;">2.</td>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Tgl, Bln dan Tahun (Seingatnya Anda)</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:358px; border: 0,8px solid black; border-collapse: collapse;"><b> '.$d->s1_tmt.'</b>  sampai dengan <b> '.$d->s1_tst.' </b></td>
		</tr>
		<tr>
			<td style="text-align: center; width:20px; border: 0,8px solid black; border-collapse: collapse;">3.</td>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Tuturkan garis besar kejadiannya secara runtut dan bagaimana situasinya ?</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:358px; border: 0,8px solid black; border-collapse: collapse;">'.$d->s1_3.'</td>
		</tr>
		<tr>
			<td style="text-align: center; width:20px; border: 0,8px solid black; border-collapse: collapse;">4</td>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Mengapa kejadian ini menjadi pengalaman membanggakan bagi anda di dua tahun ini ?</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:358px; border: 0,8px solid black; border-collapse: collapse;">'.$d->s1_4.'</td>
		</tr>
		<tr>
			<td style="text-align: center; width:20px; border: 0,8px solid black; border-collapse: collapse;">5</td>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Siapa saja yang terlibat ? apa peran anda dalam kejadian itu ?</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:358px; border: 0,8px solid black; border-collapse: collapse;">'.$d->s1_5.'</td>
		</tr>
		<tr>
			<td style="text-align: center; width:20px; border: 0,8px solid black; border-collapse: collapse;">6</td>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Pikiran, perasaan keinginan apa saja yang ada pada anda waktu itu ?</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:358px; border: 0,8px solid black; border-collapse: collapse;">'.$d->s1_6.'</td>
		</tr>
		<tr>
			<td style="text-align: center; width:20px; border: 0,8px solid black; border-collapse: collapse;">7</td>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Apa yang anda lakukan saat itu ? upaya apa yang menjadikan anda berhasil ?</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:358px; border: 0,8px solid black; border-collapse: collapse;">'.$d->s1_7.'</td>
		</tr>
		<tr>
			<td style="text-align: center; width:20px; border: 0,8px solid black; border-collapse: collapse;">8</td>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana akhir dari kejadian itu ? apa yang terjadi ?</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:358px; border: 0,8px solid black; border-collapse: collapse;">'.$d->s1_8.'</td>
		</tr>
	</table>
		
';

// output the HTML content
$pdf->writeHTML($html, true, 0, true, 0);
}

// reset pointer to the last page
$pdf->lastPage();
$pdf->AddPage();

$data = $this->db->get('hasil_ci_dua')->result();
$no=0;
foreach ($ci as $d){
$no++;

// create some HTML content
$html = 
'
	<table class="table table-bordered" style="margin-bottom: 0px">
	<table class="table table-bordered" style="width:100%; margin-bottom: 0px; font-size: 10px;">
		<tr><td width="100px">Nama</td>
			<td>: <b> '.$d->nama.' </b></td>
		</tr>
		<tr><td>NIP</td>
			<td>: <b> '.$d->nip.' </b></td>
		</tr>
		<tr><td>Alat Tes</td>
			<td>: <b> Critical Incident </b></td>
		</tr>
	</table>	
		<br/><hr/>
		
	<table style="width:100%; margin-top: 15px;font-size: 9px; table-layout: fixed; word-wrap: break-word;">
		<tr>
			<br>
			<td style="text-align: left; width:100%; border-collapse: collapse; font-size:1em;font-weight:bold;">Tugas II</td>	
		</tr>
		<tr>
			<td style="text-align: justify; width:100%; border-collapse: collapse; font-size:1em">
			Ceritakan kejadian yang pernah anda alami didalam pekerjaan (boleh sewaktu bekerja ditempat /posisi lain sebelum sekarang) <b>selama dua tahun terakhir ini yang merupakan suatu kegagalan yang paling mengecewakan bagi anda</b>. (topiknya bebas, boleh mengenai apa saja. Contohnya bisa mengenai perjuangan mencapai target yang gagal, program penting yang akhirnya tidak terlaksana, problem sulit yang akhirnya tidak terpecahkan, dan sebagainya).
			</td>
		</tr>
		<tr>
			<br>
			<td style="text-align: center; width:20px; border: 0,8px solid black; border-collapse: collapse;">1.</td>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Topik Kejadian</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:358px; border: 0,8px solid black; border-collapse: collapse;">'.$d->s2_topik.'</td>
		</tr>
		<tr>
			<td style="text-align: center; width:20px; border: 0,8px solid black; border-collapse: collapse;">2.</td>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Tgl, Bln dan Tahun (Seingatnya Anda)</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:358px; border: 0,8px solid black; border-collapse: collapse;"><b> '.$d->s2_tmt.'</b>  sampai dengan <b> '.$d->s1_tst.' </b></td>
		</tr>
		<tr>
			<td style="text-align: center; width:20px; border: 0,8px solid black; border-collapse: collapse;">3.</td>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Tuturkan garis besar kejadiannya secara runtut dan bagaimana situasinya ?</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:358px; border: 0,8px solid black; border-collapse: collapse;">'.$d->s2_3.'</td>
		</tr>
		<tr>
			<td style="text-align: center; width:20px; border: 0,8px solid black; border-collapse: collapse;">4</td>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Mengapa kejadian ini menjadi pengalaman membanggakan bagi anda di dua tahun ini ?</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:358px; border: 0,8px solid black; border-collapse: collapse;">'.$d->s2_4.'</td>
		</tr>
		<tr>
			<td style="text-align: center; width:20px; border: 0,8px solid black; border-collapse: collapse;">5</td>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Siapa saja yang terlibat ? apa peran anda dalam kejadian itu ?</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:358px; border: 0,8px solid black; border-collapse: collapse;">'.$d->s2_5.'</td>
		</tr>
		<tr>
			<td style="text-align: center; width:20px; border: 0,8px solid black; border-collapse: collapse;">6</td>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Pikiran, perasaan keinginan apa saja yang ada pada anda waktu itu ?</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:358px; border: 0,8px solid black; border-collapse: collapse;">'.$d->s2_6.'</td>
		</tr>
		<tr>
			<td style="text-align: center; width:20px; border: 0,8px solid black; border-collapse: collapse;">7</td>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Apa yang anda lakukan saat itu ? upaya apa yang menjadikan anda berhasil ?</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:358px; border: 0,8px solid black; border-collapse: collapse;">'.$d->s2_7.'</td>
		</tr>
		<tr>
			<td style="text-align: center; width:20px; border: 0,8px solid black; border-collapse: collapse;">8</td>
			<td style="text-align: left; width:250px; border: 0,8px solid black; border-collapse: collapse;">Bagaimana akhir dari kejadian itu ? apa yang terjadi ?</td>
			<td style="text-align: center; width:10px; border: 0,8px solid black; border-collapse: collapse;">:</td>
			<td style="text-align: justify;font-style: italic; width:358px; border: 0,8px solid black; border-collapse: collapse;">'.$d->s2_8.'</td>
		</tr>
	</table>
		
';

// output the HTML content
$pdf->writeHTML($html, true, 0, true, 0);
}


// ---------------------------------------------------------
$data = $this->db->get('registrasi')->result();
$no=0;
foreach ($ci as $d){
$no++;
//Close and output PDF document
$pdf->Output('CI_'.$d->nama.'.pdf', 'I');
}
//============================================================+
// END OF FILE
//============================================================+

?>