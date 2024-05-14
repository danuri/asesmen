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
// ---------------HALAMAN 1---------------------------

// set font
$pdf->SetFont('helvetica', 'B', 12);

// add a page
$pdf->AddPage();

$pdf->Ln(5);
$pdf->Write(0, 'JADWAL ASSESSI DAN ASSESSOR', '', 0, 'C', true, 0, false, false, 0);
$pdf->Write(0, 'PENILAIAN KOMPETENSI TAHUN 2023', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(7);
// create some HTML content

$pdf->SetFont('helvetica', '', 10);


$tbl = <<<EOD
<table border="1px">
    <tr>
        <th style="width:35px;height:25px;text-align:center;"><b>NO.</b></th>
        <th style="width:300px;height:25px;text-align:center;"><b>ASSESI</b></th>
        <th style="width:250px;height:25px;text-align:center;"><b>ASSESSOR</b></th>
    </tr>
</table>
EOD;
// output the HTML content
$pdf->writeHTML($tbl, false, false, false, false, '');

$data = $this->db->get('jadwal_peserta')->result();
$no=0;
foreach ($jadwal_assessor as $val){
$no++;
$tbl = <<<EOD
<table border="1px">
	<tr style="height:35px;">
		<td style="width:35px;height:35px;text-align:center;font-size:11px">$no</td>
		<td style="width:300px;height:35px;font-size:11px;">$val->nama <br/> <b>Tgl./Jam : $val->tgl_wwcr</b></td>
		<td style="width:250px;height:35px;font-size:11px;">$val->wwcr</td>
	</tr>
</table>
EOD;
// output the HTML content
$pdf->writeHTML($tbl, false, false, false, false, '');
}

// reset pointer to the last page
$pdf->lastPage();

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Print a table

//Close and output PDF document
$pdf->Output('jadwal_peserta.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
