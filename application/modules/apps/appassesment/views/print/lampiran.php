<?php

// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

	//Page header
	public function Header() {
		// Logo
		$image_file = K_PATH_IMAGES.'kop.png';
		$this->Image($image_file, 10, 10, 190, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
		// Set font
		$this->SetFont('helvetica', 'B', 20);
		// Title
		$this->Cell(0, 15, '', 0, false, 'C', 0, '', 0, false, 'M', 'M');
	}

	// Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
		// Set font
		$this->SetFont('helvetica', 'I', 8);
		// Page number
		$this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
	}
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('aSwTeCH');
$pdf->SetTitle('UPT Penkom');

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
$pdf->SetFont('times', 'B', 12);

// add a page
$pdf->AddPage();

$pdf->Ln(30);
$pdf->Write(0, 'LAMPIRAN SURAT PERINTAH TUGAS', '', 0, 'C', true, 0, false, false, 0);
$pdf->Write(0, 'Nomor : xxx/xxxx/xxxx', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(7);
// create some HTML content

$pdf->SetFont('times', '', 10);


$tbl = <<<EOD
<table border="1px">
    <tr>
        <th style="width:35px;height:25px;text-align:center;"><b>No.</b></th>
        <th style="width:250px;height:25px;text-align:center;"><b>Nama</b></th>
        <th style="width:150px;height:25px;text-align:center;"><b>Pangkat/ Gol.</b></th>
        <th style="width:220px;height:25px;text-align:center;"><b>Jabatan</b></th>
    </tr>
</table>
EOD;
// output the HTML content
$pdf->writeHTML($tbl, false, false, false, false, '');

$data = $this->db->get('data_peserta')->result();
$no=0;
foreach ($data as $val){
$no++;
$tbl = <<<EOD
<table border="1px">
	<tr style="height:80px;">
		<td style="width:35px;height:70px;text-align:center;">$no</td>
		<td style="width:250px;height:25px;">$val->nama<br/> NIP. $val->nip</td>
		<td style="width:150px;height:25px;text-align:center;">Penata Muda Tk. I, III/b</td>
		<td style="width:220px;height:25px;">$val->jabatan<br/>$val->unker</td>
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
$pdf->Output('lampiran.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
