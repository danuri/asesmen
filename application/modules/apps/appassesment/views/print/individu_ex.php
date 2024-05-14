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
$pdf->SetFont('times', '', 12);

// add a page
$pdf->AddPage();
$pdf->Ln(25);
$pdf->Write(1, 'RAHASIA', 0, 0, 'R', true, 0, false, false, 0);
$pdf->Ln(10);
// create some HTML content

$html = '<h4 style="text-align:center;">HASIL PENILAIAN POTENSI DAN KOMPETENSI PEGAWAI ASN <br/> DI LINGKUNGAN PEMERINTAH KOTA TANGERANG</h4>
<table>
    <tr>
        <td colspan="2" style="text-align:left;background-color:#60b2eb;width:638px;">I. IDENTITAS PRIBADI</td>
    </tr>
    <tr>
        <td width="150px" height="25px;">Nama</td>
        <td width="488px" height="25px;">: Gregs.</td>
    </tr>
    <tr>
        <td width="150px" height="25px;">NIP </td>
        <td width="488px" height="25px;">: 198508192011011001</td>
    </tr>
    <tr>
        <td width="150px" height="25px;">Jabatan </td>
        <td width="488px" height="25px;">: Pranata Komputer</td>
    </tr>
    <tr>
        <td width="150px" height="25px;">Unit Kerja </td>
        <td width="488px" height="25px;">: BKPSDM Kota Tangerang</td>
    </tr>
    <tr>
        <td colspan="2"></td>
    </tr>
	
	<!--PROFIL POTENSI-->
    <tr>
        <td colspan="2" style="text-align:left;background-color:#60b2eb;width:638px;">II. PROFIL POTENSI</td>
    </tr>
	<tr style="text-align:center;background-color:#d0d1d7;color:#000;font-weight:bold;">
		<th rowspan="2" style="width:50px;border:1px solid black;">No.</th>
		<th rowspan="2" style="width:300px;border:1px solid black;">Aspek Potensi</th>
		<th colspan="5" style="width:288px;border:1px solid black;">Skala Penilaian</th>
	</tr>
	<tr style="text-align:center;background-color:#d0d1d7;color:#000;font-weight: bold;">
		<th style="width:58px;border:1px solid black;">KS</th>
		<th style="width:57px;border:1px solid black;">K</th>
		<th style="width:58px;border:1px solid black;">C</th>
		<th style="width:57px;border:1px solid black;">B</th>
		<th style="width:58px;border:1px solid black;">BS</th>
	</tr>
    <tr>
        <td rowspan="3" style="text-align:center;vertical-align:middle;border:1px solid black;">1</td>
        <td colspan="6" style="border:1px solid black;height:25px;">Kapabilitas Berpikir</td>
    </tr>
    <tr>
        <td style="border:1px solid black;height:25px;">Daya Analisa</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
    </tr>
    <tr>
        <td style="border:1px solid black;height:25px;">Logika Berpikir</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
    </tr>
    <tr>
        <td rowspan="4" style="text-align:center;vertical-align:middle;border:1px solid black;">2</td>
        <td colspan="6" style="border:1px solid black;height:25px;">Sikap Kerja</td>
    </tr>
    <tr>
        <td style="border:1px solid black;height:25px;">Sistematika Kerja</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
    </tr>
    <tr>
        <td style="border:1px solid black;height:25px;">Daya Tahan Kerja</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
    </tr>
    <tr>
        <td style="border:1px solid black;height:25px;">Kepemimpinan</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
    </tr>
    <tr>
        <td rowspan="3" style="text-align:center;vertical-align:middle;border:1px solid black;">3</td>
        <td colspan="6" style="border:1px solid black;height:25px;">Motivasi</td>
    </tr>
    <tr>
        <td style="border:1px solid black;height:25px;">Dorongan Berprestasi</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
    </tr>
    <tr>
        <td style="border:1px solid black;height:25px;">Tanggung Jawab</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
    </tr>
    <tr>
        <td rowspan="4" style="text-align:center;vertical-align:middle;border:1px solid black;">4</td>
        <td colspan="6" style="border:1px solid black;height:25px;">Karakter</td>
    </tr>
    <tr>
        <td style="border:1px solid black;height:25px;">Keterampilan Interpersonal</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
    </tr>
    <tr>
        <td style="border:1px solid black;height:25px;">Kepercayaan Diri</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
    </tr>
    <tr>
        <td style="border:1px solid black;height:25px;">Stabilitas Emosi</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
    </tr>
    <tr>
        <td colspan="2" width="638px"></td>
    </tr>
    <tr>
        <td width="638px">Ket :</td>
    </tr>
    <tr>
        <td width="130px">KS = Kurang Sekali;</td>
        <td width="85px">K = Kurang;</td>
        <td width="85px">C = Cukup;</td>
        <td width="85px">B = Baik;</td>
        <td width="120px">BS = Baik Sekali;</td>
        <td width="133px">X = Hasil Penilaian.</td>
    </tr>
    <tr>
        <td colspan="2" width="638px"></td>
    </tr>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<!-- END OF PROFIL POTENSI-->
    <tr>
        <td colspan="2"></td>
    </tr>
	
	<!--PROFIL KOMPETENSI-->
    <tr>
        <td colspan="2" style="text-align:left;background-color:#60b2eb;width:638px;">III. PROFIL KOMPETENSI</td>
    </tr>
	<tr style="text-align:center;background-color:#d0d1d7;color:#000;font-weight:bold;">
		<th rowspan="2" style="width:50px;border:1px solid black;">No.</th>
		<th rowspan="2" style="width:300px;border:1px solid black;">Aspek Kompetensi</th>
		<th colspan="5" style="width:288px;border:1px solid black;">Level Kompetensi</th>
	</tr>
	<tr style="text-align:center;background-color:#d0d1d7;color:#000;font-weight: bold;">
		<th style="width:58px;border:1px solid black;">1</th>
		<th style="width:57px;border:1px solid black;">2</th>
		<th style="width:58px;border:1px solid black;">3</th>
		<th style="width:57px;border:1px solid black;">4</th>
		<th style="width:58px;border:1px solid black;">5</th>
	</tr>
    <tr>
        <td colspan="7" style="border:1px solid black;height:30px;">Kompetensi Manajerial</td>
    </tr>
    <tr>
        <td style="text-align:center;vertical-align:middle;border:1px solid black;height:30px;">1</td>
        <td style="border:1px solid black;">Integritas</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
    </tr>
    <tr>
        <td style="text-align:center;vertical-align:middle;border:1px solid black;height:30px;">2</td>
        <td style="border:1px solid black;">Kerja Sama</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
    </tr>
    <tr>
        <td style="text-align:center;vertical-align:middle;border:1px solid black;height:30px;">3</td>
        <td style="border:1px solid black;">Komunikasi</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
    </tr>
    <tr>
        <td style="text-align:center;vertical-align:middle;border:1px solid black;height:30px;">4</td>
        <td style="border:1px solid black;">Orientasi pada Hasil</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
    </tr>
    <tr>
        <td style="text-align:center;vertical-align:middle;border:1px solid black;height:30px;">5</td>
        <td style="border:1px solid black;">Pelayanan Publik</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
    </tr>
    <tr>
        <td style="text-align:center;vertical-align:middle;border:1px solid black;height:30px;">6</td>
        <td style="border:1px solid black;">Pengembangan Diri dan Orang Lain</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
    </tr>
    <tr>
        <td style="text-align:center;vertical-align:middle;border:1px solid black;height:30px;">7</td>
        <td style="border:1px solid black;">Mengelola Perubahan</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
    </tr>
    <tr>
        <td style="text-align:center;vertical-align:middle;border:1px solid black;height:30px;">8</td>
        <td style="border:1px solid black;">Pengambilan Keputusan</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
    </tr>
    <tr>
        <td colspan="7" style="border:1px solid black;height:30px;">Kompetensi Sosial Kultural</td>
    </tr>
    <tr>
		<td style="text-align:center;vertical-align:middle;border:1px solid black;height:30px;">9</td>
        <td style="border:1px solid black;">Perekat Bangsa</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
        <td style="text-align:center;border:1px solid black;">X</td>
    </tr>
   <tr>
        <td colspan="2" width="638px"></td>
    </tr>
    <tr>
        <td width="638px">Ket :</td>
    </tr>
    <tr>
        <td width="133px">X = Hasil Penilaian.</td>
        <td width="300px">&#8718; = Persyaratan kompetensi.</td>
    </tr>
    <tr>
        <td colspan="2" width="638px"></td>
    </tr>
	
	<!-- END OF PROFIL KOMPETENSI-->
    <tr>
        <td colspan="2"></td>
    </tr>
	
	<!-- GAMBARAN POTENSI-->
    <tr>
        <td colspan="2" style="text-align:left;background-color:#60b2eb;width:638px;">IV. GAMBARAN POTENSI</td>
    </tr>
    <tr>
        <td style="border:1px solid black;height:30px;width:638px;text-align: justify;text-justify: inter-word;">
		<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum	
		</p>
		</td>
    </tr>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	
	<!-- END OF GAMBARAN POTENSI-->
    <tr>
        <td colspan="2"></td>
    </tr>
	
	<!-- KEKUATAN DAN AREA-->
    <tr>
        <td colspan="2" style="text-align:left;background-color:#60b2eb;width:638px;">V. KEKUATAN DAN AREA PENGEMBANGAN KOMPETENSI</td>
    </tr>
    <tr>
        <td colspan="7" style="border:1px solid black;height:30px;width:638px;tab-size:2;"><b>1. Kekuatan</b></td>
    </tr>
    <tr>
        <td style="border:1px solid black;height:30px;width:638px;text-align: justify;text-justify: inter-word;">
		<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum	
		</p>
		</td>
    </tr>
    <tr>
        <td colspan="7" style="border:1px solid black;height:30px;width:638px;tab-size:2;"><b>2. Area Pengemmbangan</b></td>
    </tr>
    <tr>
        <td style="border:1px solid black;height:30px;width:638px;text-align: justify;text-justify: inter-word;">
		<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum	
		</p>
		</td>
    </tr>
	
	<!-- END OF KEKUATAN DAN AREA-->
    <tr>
        <td colspan="2"></td>
    </tr>
	
	<!-- KATEGORI PENILAIAN-->
    <tr>
        <td colspan="2" style="text-align:left;background-color:#60b2eb;width:638px;">VI. KATEGORI PENILAIAN</td>
    </tr>
    <tr>
        <td style="border:1px solid black;height:30px;width:638px;text-align: justify;text-justify: inter-word;">
		<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum	
		</p>
		</td>
    </tr>
	
	<!-- END OF KATEGORI PENILAIAN-->
    <tr>
        <td colspan="2"></td>
    </tr>
	
	<!-- SARAN PENGEMBANGAN-->
    <tr>
        <td colspan="2" style="text-align:left;background-color:#60b2eb;width:638px;">VII. SARAN PENGEMBANGAN</td>
    </tr>
    <tr>
        <td style="border:1px solid black;height:30px;width:638px;text-align: justify;text-justify: inter-word;">
		<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum	
		</p>
		</td>
    </tr>
	
	<!-- END OF SARAN PENGEMBANGAN-->
    <tr>
        <td colspan="2"></td>
    </tr>
	
	<!-- SARAN PENEMPATAN-->
    <tr>
        <td colspan="2" style="text-align:left;background-color:#60b2eb;width:638px;">VIII.	SARAN PENEMPATAN</td>
    </tr>
    <tr>
        <td style="border:1px solid black;height:30px;width:638px;text-align: justify;text-justify: inter-word;">
		<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum	
		</p>
		</td>
    </tr>
	
	<!-- END OF SARAN PENEMPATAN-->
</table>';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Print a table

//Close and output PDF document
$pdf->Output('lap_individu.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
