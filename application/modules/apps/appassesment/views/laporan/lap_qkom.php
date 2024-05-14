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

$data = $this->db->get('hasil_qkom')->result();
$no=0;
foreach ($qkom as $d){
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
		<tr><td>Tgl. Tes</td>
			<td>: <b> '.$d->last_update.' </b></td>
		</tr>
		<tr><td>Alat Tes</td>
			<td>: <b> Q - Kompetensi </b></td>
		</tr>
		<br/><hr/>		
	<p>( 1 ) Ceritakan apa kendala / hambatan yang dihadapi oleh organsiasi saudara dalam penyelenggaraan tugas dan fungsinya.</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->jwb1.'</p>
	<p>( 2 ) Menurut saudara, apa yang menjadi penyebab utama dari permasalahan tersebut diatas ?</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->jwb2.'</p>
	<p>( 3 ) Apa ide yang saudara tawarkan sebagai alternatif solusi bagi organisasi saudara ?</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->jwb3.'</p>
	<p>( 4 ) Apakah saudara pernah memberikan usulan/ide gagasan terkait dengan perbaikan unit kerja saudara? Ceritakan situasinya.</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->jwb4.'</p>
	<p>( 5 ) Bagaimana cara saudara meyakinkan pimpinan dan orang lain untuk menerima ide/ gagasan saudara ?</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->jwb5.'</p>
	<p>( 6 ) Ceritakan hambatan terbesar yang pernah saudara hadapi dalam pelaksanaan pekerjaan. Jelaskan bagaimana saudara mengatasinya.</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->jwb6.'</p>
	<p>( 7 ) Dalam rangka penyelesaian tugas pokok, dengan pihak mana saja saudara sering berkoordinasi (internal maupun eksternal instansi) ?</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->jwb7.'</p>
	<p>( 8 ) Apakah koordinasi yang saudara lakukan selama ini sudah cukup efektif untuk mencapai tujuan organisasi ? mengapa demikian ?</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->jwb8.'</p>
	<p>( 9 ) Jika belum, bagaimana mekanisme yang seharusnya terjadi, apa kendala yang dihadapi dalam berkoordinasi dan bagaimana meminimalisasinya? Jelaskan.</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->jwb9.'</p>
	<p>( 10 ) Menurut saudara, apakah koordinasi antar unit sudah cukup efektip? Jika belum,bagaimana seharusnya koordinasi itu dilakukan ?</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->jwb10.'</p>
	<p>( 11 ) Ceritakan situasi yang menuntut saudara mengambil keputusan yang terkait dengan kelancaran tugas dan berdampak besar bagi unit kerja saudara ?</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->jwb11.'</p>
	<p>( 12 ) Jelaskan bagaimana cara suadara mengambil keputusan tersebut.</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->jwb12.'</p>
	<p>( 13 ) Ceritakan bagaimana saudara mengelola pekerjaan / tugas yang menjadi tanggungjawab saudara.</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->jwb13.'</p>
	<p>( 14 ) Ceritakan supaya saudara meyakinkan pihak lain untuk mencapai kesepakatan kelompok atas perbedaan pendapat /situasi mengenai suatu hal ?</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->jwb14.'</p>
	<p>( 15 ) Bagaimana saudara mengelola bawahan atau menggerakkan anak buah untuk bekerja sesuai dengan target kerja yang telah ditetapkan ?</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->jwb15.'</p>
	<p>( 16 ) Bagaimana saudara mensinergikan perbedaan karakteristik dan pemikiran rekan kerja (anak buah dan pejabat selevel lainnya) untuk mendukung terwujudnya tujuan organisasi ?</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->jwb16.'</p>
	<p>( 17 ) Berdasarkan kemampuan saudara saat ini, saudara akan merasa optimal dan nyaman jika ditempatkan dimana dan mengerjakan pekerjaan jenis apa ?</p>
	<p style="text-indent: 25px;font-weight: bold;">'.$d->jwb17.'</p>
	
	</table>
		
';

// output the HTML content
$pdf->writeHTML($html, true, 0, true, 0);
}

// reset pointer to the last page
$pdf->lastPage();
// ---------------------------------------------------------
$data = $this->db->get('hasil_qkom')->result();
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