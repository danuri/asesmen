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

$data = $this->db->get('hasil_ankas')->result();
$no=0;
foreach ($ankas as $d){
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
			<td>: <b> Simulasi Analisa Kasus tessssss</b></td>
		</tr>
		<br/><hr/>
	<p><h4>SOAL SIMULASI ANALISA KASUS</h4><br>
	'.$d->wacana.'
	</p>	
			

	<p style="text-align:justify;">
		<P style="text-align: justify;">'.$d->tanya_ankas1.'</p>
			<P style="text-align: justify;font-weight: bold;">'.$d->jwb_ankas1.'</p>
		<P style="text-align: justify;">'.$d->tanya_ankas2.'</p>
			<P style="text-align: justify;font-weight: bold;">'.$d->jwb_ankas2.'</p>
		<P style="text-align: justify;">'.$d->tanya_ankas3.'</p>
			<P style="text-align: justify;font-weight: bold;">'.$d->jwb_ankas3.'</p>	
		<P style="text-align: justify;">'.$d->tanya_ankas4.'</p>
			<P style="text-align: justify;font-weight: bold;">'.$d->jwb_ankas4.'</p>	
	</p>
		
	</table>
			
';

// output the HTML content
$pdf->writeHTML($html, true, 0, true, 0);
}

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------
$data = $this->db->get('hasil_ankas')->result();
$no=0;
foreach ($ankas as $d){
$no++;
//Close and output PDF document
$pdf->Output('ANKAS_'.$d->nama.'.pdf', 'I');
}
//============================================================+
// END OF FILE
//============================================================+

?>