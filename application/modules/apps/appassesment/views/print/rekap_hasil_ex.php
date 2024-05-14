<?php
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('aSwTeCH');
$pdf->SetTitle('UPT Penilaian Kompetensi');

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
$pdf->SetFont('helvetica', 'B', 10);

// add a page
$pdf->AddPage('L', 'mm', 'A4');

$pdf->Write(0, 'Rekap Hasil', '', 0, 'C', true, 0, false, false, 0);
$pdf->Write(0, 'Penilaian Potensi dan Kompetensi', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(7);

$pdf->SetFont('helvetica', '', 7);

// ---------------------------------------------------------

// create table
$data = $this->db->get('hasil_lap')->result();
$no=0;
foreach ($data as $val){
$no++;

$tbl = <<<EOD
<table border="1">
	<tr style="text-align:center;background-color:#d0d1d7;color:#000;font-weight: bold;">
		<th rowspan="2" width="25px">No.</th>
		<th rowspan="2" width="130px">Nama</th>
		<th rowspan="2" width="150px">Jabatan</th>
		<th width="301px">Potensi</th>	
		<th width="255px">Kompetensi</th>
		<th rowspan="2" width="35px">Total %</th>
		<th rowspan="2" width="60px">Rekomendasi</th>
	</tr>
	<tr style="text-align:center;background-color:#d0d1d7;color:#000;font-weight: bold;">
		<th width="23px">DA</th>
		<th width="23px">LB</th>
		<th width="23px">SK</th>
		<th width="23px">INI</th>
		<th width="23px">DTK</th>
		<th width="23px">KEP</th>
		<th width="23px">DB</th>
		<th width="23px">TJ</th>
		<th width="23px">KI</th>
		<th width="23px">KD</th>
		<th width="23px">SE</th>
		<th width="23px">Nilai</th>
		<th width="25px">%</th>
		<th width="23px">INT</th>
		<th width="23px">KS</th>
		<th width="23px">KOM</th>
		<th width="23px">OPH</th>
		<th width="23px">PP</th>
		<th width="23px">PDO</th>
		<th width="23px">MP</th>
		<th width="23px">PK</th>
		<th width="23px">PB</th>
		<th width="23px">Nilai</th>
		<th width="25px">%</th>
	</tr>
	<tr style="text-align:center;">
		<td>$no</td>
		<td style="text-align:left;">$val->nama <br/> NIP. $val->nip</td>
		<td style="text-align:left;">$val->jabatan</td>
		<td width="23px">$val->da</td>
		<td width="23px">$val->lb</td>
		<td width="23px">$val->sk</td>
		<td width="23px">$val->ini</td>
		<td width="23px">$val->dtk</td>
		<td width="23px">$val->kep</td>
		<td width="23px">$val->db</td>
		<td width="23px">$val->tj</td>
		<td width="23px">$val->ki</td>
		<td width="23px">$val->kd</td>
		<td width="23px">$val->se</td>
		<td width="23px">$val->nilai_pot</td>
		<td width="25px">$val->percent_pot</td>
		<td width="23px">$val->int</td>
		<td width="23px">$val->ks</td>
		<td width="23px">$val->kom</td>
		<td width="23px">$val->oph</td>
		<td width="23px">$val->pp</td>
		<td width="23px">$val->pdo</td>
		<td width="23px">$val->mp</td>
		<td width="23px">$val->pk</td>
		<td width="23px">$val->pb</td>
		<td width="23px">$val->nilai_kom</td>
		<td width="25px">$val->percent_kom</td>
		<td width="35px">$val->total_percent</td>
		<td width="60px">$val->rekom</td>
	</tr>
</table>
EOD;

$pdf->writeHTML($tbl, false, false, false, false, '');

}

// ---------------------------------------------------------

	// Add Footer
    $pdf->SetFont('', '', 8);
    //$pdf->Cell(277, 8, "Keterangan :", 0, 1, 'L');
	
$tbl = <<<EOD
<table>
 <tr>
	<th><b>Keterangan :</b></th>
 </tr>
 <tr>
	<th width="465px"><b>Potensi :</b></th>
	<th><b>Kompetensi :</b></th>
 </tr>
 <tr>
	  <td width="35px">DA</td>
	  <td width="120px">: Daya Analisa</td>
	  <td width="35px">LB</td>
	  <td width="120px">: Logika Berpikir</td>
	  <td width="35px">SK</td>
	  <td width="120px">: Sistematika Kerja</td>
	  <td width="35px">INT</td>
	  <td width="120px">: Integritas</td>
	  <td width="35px">KS</td>
	  <td width="120px">: Kerjasama</td>
	  <td width="35px">KOM</td>
	  <td width="120px">: Komunikasi</td>
 </tr>
 <tr>
	  <td width="35px">INI</td>
	  <td width="120px">: Inisiatif</td>
	  <td width="35px">DTK</td>
	  <td width="120px">: Daya Tahan Kerja</td>
	  <td width="35px">KEP</td>
	  <td width="120px">: Kepemimpinan</td>
	  <td width="35px">OPH</td>
	  <td width="120px">: Orientasi pada Hasil</td>
	  <td width="35px">PP</td>
	  <td width="120px">: Pelayanan Publik</td>
	  <td width="35px">PB</td>
	  <td width="120px">: Perekat Bangsa</td>
 </tr>
 <tr>
	  <td width="35px">DB</td>
	  <td width="120px">: Dorongan Berprestasi</td>
	  <td width="35px">TJ</td>
	  <td width="120px">: Tanggung Jawab</td>
	  <td width="35px">KD</td>
	  <td width="120px">: Kepercayaan Diri</td>
	  <td width="35px">MP</td>
	  <td width="120px">: Mengelola Perubahan</td>
	  <td width="35px">PK</td>
	  <td width="120px">: Pengambilan Keputusan</td>
 </tr>
 <tr>
	  <td width="35px">KI</td>
	  <td rowspan="2" width="275px">: Keterampilan Interpersonal</td>
	  <td width="35px">SE</td>
	  <td width="120px">: Stabilitas Emosi</td>
	  <td width="35px">PDO</td>
	  <td width="300px">: Pengembangan Diri dan Orang Lain</td>
 </tr>
</table>
EOD;

$pdf->writeHTML($tbl, false, false, false, false, '');	
	
	$pdf->Output('hasil_ukom.pdf');

	
	
	
	
    
?>