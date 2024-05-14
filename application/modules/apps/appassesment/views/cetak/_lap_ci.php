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
	<table class="table table-bordered" style="margin-bottom: 0px">
		<tr><td width="100px">Nama</td>
			<td>: <b> '.$d->nama.' </b></td>
		</tr>
		<tr><td>NIP</td>
			<td>: <b> '.$d->nip.' </b></td>
		</tr>
		<tr><td>Alat Tes</td>
			<td>: <b> Critical Incident </b></td>
		</tr>
		<br/><hr/>
	<p><h4>Tugas I</h4></p>	
	<p style="text-align:justify;">
		Ceritakan kejadian yang pernah anda alami didalam pekerjaan (boleh sewaktu bekerja ditempat /posisi lain sebelum yang sekarang) <b> selama dua tahun terakhir ini yang dampak atau hasilnya merupakan suatu sukses besar yang paling membanggakan bagi anda.</b> (topik bebas, boleh mengenai apa saja. Contohnya bisa mengenai perjuangan /keberhasilan mencapai target tinggi atau program penting yang telah dilaksanakan, problem sulit yang akhirnya bisa diatasi, dan sebagainya).
	</p>
		
	<p>( 1 ) Topik Kejadian : <b> '.$d->s1_topik.' </b></p>
	<p>( 2 ) Tgl, Bln dan Tahun (Seingatnya Anda) : <b> '.$d->s1_tmt.'</b>  sampai dengan <b> '.$d->s1_tst.' </b></p>
	<p>( 3 ) Tuturkan garis besar kejadiannya secara runtut dan bagaimana situasinya ? </p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->s1_3.'</p>
	<p>( 4 ) Mengapa kejadian ini menjadi pengalaman membanggakan bagi anda di dua tahun ini ?</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->s1_4.'</p>
	<p>( 5 ) Siapa saja yang terlibat ? apa peran anda dalam kejadian itu ?</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->s1_5.'</p>
	<p>( 6 ) Pikiran, perasaan keinginan apa saja yang ada pada anda waktu itu ?</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->s1_6.'</p>
	<p>( 7 ) Apa yang anda lakukan saat itu ? upaya apa yang menjadikan anda berhasil ?</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->s1_7.'</p>
	<p>( 8 ) Bagaimana akhir dari kejadian itu ? apa yang terjadi ?</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->s1_8.'</p>
	
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
		<tr><td width="100px">No. Tes</td>
			<td>: <b> '.$d->nama.' </b></td>
		</tr>
		<tr><td>Nama Peserta</td>
			<td>: <b> '.$d->nip.' </b></td>
		</tr>
		<tr><td>Alat Tes</td>
			<td>: <b> Critical Incident </b></td>
		</tr>
		<br/><hr/>
	<p><h4>Tugas II</h4></p>	
	<p style="text-align:justify;">
		Ceritakan kejadian yang pernah anda alami didalam pekerjaan (boleh sewaktu bekerja ditempat /posisi lain sebelum sekarang)<b> selama dua tahun terakhir ini yang merupakan suatu kegagalan yang paling mengecewakan bagi anda.</b> (topiknya bebas, boleh mengenai apa saja. Contohnya bisa mengenai perjuangan mencapai target yang gagal, program penting yang akhirnya tidak terlaksana, problem sulit yang akhirnya tidak terpecahkan, dan sebagainya).
	</p>
		
	<p>( 1 ) Topik Kejadian : <b> '.$d->s2_topik.' </b></p>
	<p>( 2 ) Tgl, Bln dan Tahun (Seingatnya Anda) : <b> '.$d->s2_tmt.'</b>  sampai dengan <b> '.$d->s2_tst.' </b></p>
	<p>( 3 ) Tuturkan garis besar kejadiannya secara runtut dan bagaimana situasinya ? </p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->s2_3.'</p>
	<p>( 4 ) Mengapa kejadian ini menjadi pengalaman mengecewakan bagi anda di dua tahun ini ?</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->s2_4.'</p>
	<p>( 5 ) Siapa saja yang terlibat ? apa peran anda dalam kejadian itu ?</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->s2_5.'</p>
	<p>( 6 ) Pikiran, perasaan keinginan apa saja yang ada pada anda waktu itu ?</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->s2_6.'</p>
	<p>( 7 ) Apa yang anda lakukan saat itu ? upaya apa yang menjadikan anda berhasil ?</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->s2_7.'</p>
	<p>( 8 ) Bagaimana akhir dari kejadian itu ? apa yang terjadi ?</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->s2_8.'</p>
	
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