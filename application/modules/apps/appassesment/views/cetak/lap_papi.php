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


$data = $this->db->get('hasil_papi')->result();
$data = $this->db->get('registrasi')->result();
$data = $this->db->get('data_peserta')->result();
$data = $this->db->get('kegiatan')->result();
$data = $this->db->get('reff_desk_papi')->result();
$no=0;
foreach ($papi as $d){
$no++;

// create some HTML content
$html = 
'
	<table width="100%" style="margin-top: 15px;font-size: 9px; table-layout: fixed; word-wrap: break-word;">
		<tr><td style="width:100px; height:20px; font-size: 10px; ">Nama</td>
			<td style="width:540px; height:20px; font-size: 10px; font-weight:bold;">: <b> '.$d->nama.' </b></td>
		</tr>
		<tr><td style="width:100px; height:20px; font-size: 10px;">NIP</td>
			<td style="width:540px; height:20px; font-size: 10px; font-weight:bold;">: <b> '.$d->nip.' </b></td>
		</tr>
		<tr><td style="width:100px; height:20px; font-size: 10px;">Kegiatan</td>
			<td style="width:540px; height:20px; font-size: 10px; font-weight:bold;">: <b> '.$d->nama_kegiatan.' </b> / '.$d->tgl_keg.'</td>
		</tr>
		<tr><td style="width:100px; height:20px; font-size: 10px;">Alat Tes</td>
			<td style="width:540px; height:20px; font-size: 10px; font-weight:bold;">: <b> PAPI KOSTICK </b></td>
		</tr>
	</table>
	<hr>
	<p style="font-size: 10px; font-weight:bold; text-align:center;">PSIKOGRAM</p>	
	
	<table width="100%" border="1px" style="border-style: solid; margin-top:  15px; vertical-align: middle; font-size: 9px; table-layout: fixed; word-wrap: break-word;">
		<tr>
			<th rowspan="3" colspan="2" style="width:200px; height:20px; vertical-align: middle; font-size: 9px; font-weight:bold; text-align:center; background-color:#124f8b; color:#fff;">FAKTOR PSIKOLOGIS</th>
			<th colspan="7" style="width:290px; height:20px; vertical-align: middle; font-size: 9px; text-align:center; font-weight:bold; text-align:center; background-color:#124f8b; color:#fff;">SKALA</th>
			<th rowspan="3" style="width:150px; height:20px; vertical-align: middle; font-size: 9px; text-align:center; font-weight:bold; text-align:center; background-color:#124f8b; color:#fff;">DESKRIPTIF</th>
		</tr>
		<tr>
			<th style="width:45px; height:20px; font-size: 8px; vertical-align: middle; text-align:center; font-weight:bold; text-align:center; background-color:#124f8b; color:#fff;">1</th>
			<th style="width:45px; height:20px; font-size: 8px; vertical-align: middle; text-align:center; font-weight:bold; text-align:center; background-color:#124f8b; color:#fff;">2</th>
			<th style="width:40px; height:20px; font-size: 8px; vertical-align: middle; text-align:center; font-weight:bold; text-align:center; background-color:#124f8b; color:#fff;">3</th>
			<th style="width:40px; height:20px; font-size: 8px; vertical-align: middle; text-align:center; font-weight:bold; text-align:center; background-color:#124f8b; color:#fff;">4</th>
			<th style="width:40px; height:20px; font-size: 8px; vertical-align: middle; text-align:center; font-weight:bold; text-align:center; background-color:#124f8b; color:#fff;">5</th>
			<th style="width:40px; height:20px; font-size: 8px; vertical-align: middle; text-align:center; font-weight:bold; text-align:center; background-color:#124f8b; color:#fff;">6</th>
			<th style="width:40px; height:20px; font-size: 8px; vertical-align: middle; text-align:center; font-weight:bold; text-align:center; background-color:#124f8b; color:#fff;">7</th>
		</tr>
		<tr>
			<th style="width:45px; height:20px; font-size: 8px; vertical-align: middle; text-align:center; font-weight:bold; text-align:center; background-color:#124f8b; color:#fff;">Perlu Perhatian</th>
			<th style="width:45px; height:20px; font-size: 8px; vertical-align: middle; text-align:center; font-weight:bold; text-align:center; background-color:#124f8b; color:#fff;">Sedikit Perhatian</th>
			<th style="width:40px; height:20px; font-size: 8px; vertical-align: middle; text-align:center; font-weight:bold; text-align:center; background-color:#124f8b; color:#fff;">Agak Cukup</th>
			<th style="width:40px; height:20px; font-size: 8px; vertical-align: middle; text-align:center; font-weight:bold; text-align:center; background-color:#124f8b; color:#fff;">Cukup</th>
			<th style="width:40px; height:20px; font-size: 8px; vertical-align: middle; text-align:center; font-weight:bold; text-align:center; background-color:#124f8b; color:#fff;">Sedikit Baik</th>
			<th style="width:40px; height:20px; font-size: 8px; vertical-align: middle; text-align:center; font-weight:bold; text-align:center; background-color:#124f8b; color:#fff;">Baik</th>
			<th style="width:40px; height:20px; font-size: 8px; vertical-align: middle; text-align:center; font-weight:bold; text-align:center; background-color:#124f8b; color:#fff;">Optimal</th>
		</tr>
		<tr>
			<td colspan="10" style="width:640px; height:20px; font-size: 8px; vertical-align: middle; text-align:left; background-color: #b9d3ed;  font-weight:bold;">I. SIKAP KERJA</td>
		</tr>
		<tr>
			<td rowspan="4" style="width:100px; height:33px; font-size: 8px; font-weight:bold; vertical-align: middle; text-align:left;">I.a Pengelolaan Diri</td>
			<td style="width:100px; height:33px; font-size: 8px;  vertical-align: middle; text-align:left;">1. Motivasi</td>
			<td style="width:45px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mb_kmptisi1.'</td>
			<td style="width:45px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mb_kmptisi2.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mb_kmptisi3.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mb_kmptisi4.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mb_kmptisi5.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mb_kmptisi6.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mb_kmptisi7.'</td>
			<td style="width:150px; height:33px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_mb.'</td>
		</tr>
		<tr>
			<td style="width:100px; height:33px; font-size: 8px; vertical-align: middle; text-align:left;">2. Komitmen Kerja</td>
			<td style="width:45px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_kk_ob1.'</td>
			<td style="width:45px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_kk_ob2.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_kk_ob3.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_kk_ob4.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_kk_ob5.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_kk_ob6.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_kk_ob7.'</td>
			<td style="width:150px; height:33px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_kk.'</td>
		</tr>
		<tr>
			<td style="width:100px; height:33px; font-size: 8px; vertical-align: middle; text-align:left;">3. Orientasi Bekerja</td>
			<td style="width:45px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_kk_ob1.'</td>
			<td style="width:45px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_kk_ob2.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_kk_ob3.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_kk_ob4.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_kk_ob5.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_kk_ob6.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_kk_ob7.'</td>
			<td style="width:150px; height:33px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_ob.'</td>
		</tr>
		<tr>
			<td style="width:100px; height:33px; font-size: 8px; vertical-align: middle; text-align:left;">4. Berkompetesi</td>
			<td style="width:45px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mb_kmptisi1.'</td>
			<td style="width:45px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mb_kmptisi2.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mb_kmptisi3.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mb_kmptisi4.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mb_kmptisi5.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mb_kmptisi6.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mb_kmptisi7.'</td>
			<td style="width:150px; height:33px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_kmptisi.'</td>
		</tr>
		
		<tr>
			<td rowspan="6" style="width:100px; height:33px; font-size: 8px; font-weight:bold; vertical-align: middle; text-align:left;">I.b Pengelolaan Tugas</td>
			<td style="width:100px; height:33px; font-size: 8px; vertical-align: middle; text-align:left;">5. Perencanaan Kerja</td>
			<td style="width:45px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_prcn_bk1.'</td>
			<td style="width:45px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_prcn_bk2.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_prcn_bk3.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_prcn_bk4.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_prcn_bk5.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_prcn_bk6.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_prcn_bk7.'</td>
			<td style="width:150px; height:33px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_prcn.'</td>
		</tr>
		<tr>
			<td style="width:100px; height:33px; font-size: 8px; vertical-align: middle; text-align:left;">6. Sistem Kerja</td>
			<td style="width:45px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_sk1.'</td>
			<td style="width:45px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_sk2.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_sk3.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_sk4.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_sk5.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_sk6.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_sk7.'</td>
			<td style="width:150px; height:33px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_sk.'</td>
		</tr>
		<tr>
			<td style="width:100px; height:33px; font-size: 8px; vertical-align: middle; text-align:left;">7. Pengelolaan Data</td>
			<td style="width:45px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pd1.'</td>
			<td style="width:45px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pd2.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pd3.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pd4.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pd5.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pd6.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pd7.'</td>
			<td style="width:150px; height:33px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_pd.'</td>
		</tr>
		<tr>
			<td style="width:100px; height:33px; font-size: 8px; vertical-align: middle; text-align:left;">8. Penyelesaian Tugas</td>
			<td style="width:45px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pt1.'</td>
			<td style="width:45px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pt2.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pt3.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pt4.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pt5.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pt6.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pt7.'</td>
			<td style="width:150px; height:33px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_pt.'</td>
		</tr>
		
		<tr>
			<td style="width:100px; height:33px; font-size: 8px; vertical-align: middle; text-align:left;">9. Keaktifan</td>
			<td style="width:45px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_aktif1.'</td>
			<td style="width:45px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_aktif2.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_aktif3.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_aktif4.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_aktif5.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_aktif6.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_aktif7.'</td>
			<td style="width:150px; height:33px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_aktif.'</td>
		</tr>
		<tr>
			<td style="width:100px; height:33px; font-size: 8px; vertical-align: middle; text-align:left;">10. Mengahadapi Urgensi</td>
			<td style="width:45px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mu_kmk1.'</td>
			<td style="width:45px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mu_kmk2.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mu_kmk3.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mu_kmk4.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mu_kmk5.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mu_kmk6.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mu_kmk7.'</td>
			<td style="width:150px; height:33px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_mu.'</td>
		</tr>
		<tr>
			<td rowspan="2" style="width:100px; height:33px; font-size: 8px; font-weight:bold; vertical-align: middle; text-align:left;">I.c Sebagai Bawahan</td>
			<td style="width:100px; height:33px; font-size: 8px; vertical-align: middle; text-align:left;">11. Loyalitas</td>
			<td style="width:45px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_loyal1.'</td>
			<td style="width:45px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_loyal2.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_loyal3.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_loyal4.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_loyal5.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_loyal6.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_loyal7.'</td>
			<td style="width:150px; height:33px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_loyal.'</td>
		</tr>
		<tr>
			<td style="width:100px; height:33px; font-size: 8px; vertical-align: middle; text-align:left;">12. Kemandirian</td>
			<td style="width:45px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mandiri1.'</td>
			<td style="width:45px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mandiri2.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mandiri3.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mandiri4.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mandiri5.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mandiri6.'</td>
			<td style="width:40px; height:33px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mandiri7.'</td>
			<td style="width:150px; height:33px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_mandiri.'</td>
		</tr>
		<tr>
			<td colspan="10" style="width:640px; height:20px; font-size: 8px; vertical-align: middle; text-align:left; background-color: #b9d3ed;  font-weight:bold;">II. KEPEMIMPINAN</td>
		</tr>
		<tr>
			<td colspan="2" style="width:200px; height:35px; font-size: 8px; vertical-align: middle; text-align:left;">13. Percaya Diri sebagai Pemimpin</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pede_fk1.'</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pede_fk2.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pede_fk3.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pede_fk4.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pede_fk5.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pede_fk6.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pede_fk7.'</td>
			<td style="width:150px; height:35px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_pede.'</td>
		</tr>
		<tr>
			<td colspan="2" style="width:200px; height:35px; font-size: 8px; vertical-align: middle; text-align:left;">14. Tanggungjawab sebagai Pemimpin</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_tj1.'</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_tj2.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_tj3.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_tj4.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_tj5.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_tj6.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_tj7.'</td>
			<td style="width:150px; height:35px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_tj.'</td>
		</tr>
		<tr>
			<td colspan="2" style="width:200px; height:35px; font-size: 8px; vertical-align: middle; text-align:left;">15. Pengontrolan</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pede_fk1.'</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pede_fk2.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pede_fk3.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pede_fk4.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pede_fk5.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pede_fk6.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pede_fk7.'</td>
			<td style="width:150px; height:35px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_fk.'</td>
		</tr>
		<tr>
			<td colspan="2" style="width:200px; height:35px; font-size: 8px; vertical-align: middle; text-align:left;">16. Pengambilan Resiko</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pr1.'</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pr2.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pr3.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pr4.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pr5.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pr6.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pr7.'</td>
			<td style="width:150px; height:35px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_pr.'</td>
		</tr>
		<tr>
			<td colspan="2" style="width:200px; height:35px; font-size: 8px; vertical-align: middle; text-align:left;">17. Kecepatan Membuat Keputusan</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mu_kmk1.'</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mu_kmk2.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mu_kmk3.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mu_kmk4.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mu_kmk5.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mu_kmk6.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_mu_kmk7.'</td>
			<td style="width:150px; height:35px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_kmk.'</td>
		</tr>
		<tr>
			<td colspan="2" style="width:200px; height:35px; font-size: 8px; vertical-align: middle; text-align:left;">18. Ide/Gagasan</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ide_mp_adap1.'</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ide_mp_adap2.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ide_mp_adap3.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ide_mp_adap4.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ide_mp_adap5.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ide_mp_adap6.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ide_mp_adap7.'</td>
			<td style="width:150px; height:35px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_ide.'</td>
		</tr>
		<tr>
			<td colspan="2" style="width:200px; height:35px; font-size: 8px; vertical-align: middle; text-align:left;">19. Berpikir Kritis</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_prcn_bk1.'</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_prcn_bk2.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_prcn_bk3.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_prcn_bk4.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_prcn_bk5.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_prcn_bk6.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_prcn_bk7.'</td>
			<td style="width:150px; height:35px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_bk.'</td>
		</tr>
		<tr>
			<td colspan="10" style="width:640px; height:20px; font-size: 8px; vertical-align: middle; text-align:left; background-color: #b9d3ed;  font-weight:bold;">III. HUBUNGAN SOSIAL</td>
		</tr>
		<tr>
			<td colspan="2" style="width:200px; height:35px; font-size: 8px; vertical-align: middle; text-align:left;">20. Keterbukaan Bergaul</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_kb1.'</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_kb2.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_kb3.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_kb4.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_kb5.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_kb6.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_kb7.'</td>
			<td style="width:150px; height:35px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_kb.'</td>
		</tr>
		<tr>
			<td colspan="2" style="width:200px; height:35px; font-size: 8px; vertical-align: middle; text-align:left;">21. Kerjasama</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ks_op1.'</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ks_op2.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ks_op3.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ks_op4.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ks_op5.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ks_op6.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ks_op7.'</td>
			<td style="width:150px; height:35px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_ks.'</td>
		</tr>
		<tr>
			<td colspan="2" style="width:200px; height:35px; font-size: 8px; vertical-align: middle; text-align:left;">22. Interaksi di Kelompok</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_intraksi_peka1.'</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_intraksi_peka2.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_intraksi_peka3.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_intraksi_peka4.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_intraksi_peka5.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_intraksi_peka6.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_intraksi_peka7.'</td>
			<td style="width:150px; height:35px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_intraksi.'</td>
		</tr>
		<tr>
			<td colspan="2" style="width:200px; height:35px; font-size: 8px; vertical-align: middle; text-align:left;">23. Kepekaan Sosial</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_intraksi_peka1.'</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_intraksi_peka2.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_intraksi_peka3.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_intraksi_peka4.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_intraksi_peka5.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_intraksi_peka6.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_intraksi_peka7.'</td>
			<td style="width:150px; height:35px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_peka.'</td>
		</tr>
		<tr>
			<td colspan="2" style="width:200px; height:35px; font-size: 8px; vertical-align: middle; text-align:left;">24. Orientasi Pergaulan</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ks_op1.'</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ks_op2.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ks_op3.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ks_op4.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ks_op5.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ks_op6.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ks_op7.'</td>
			<td style="width:150px; height:35px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_op.'</td>
		</tr>
		<tr>
			<td colspan="2" style="width:200px; height:35px; font-size: 8px; vertical-align: middle; text-align:left;">25. Pengakuan Diri</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pdl1.'</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pdl2.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pdl3.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pdl4.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pdl5.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pdl6.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pdl7.'</td>
			<td style="width:150px; height:35px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_pdl.'</td>
		</tr>
		<tr>
			<td colspan="10" style="width:640px; height:20px; font-size: 8px; vertical-align: middle; text-align:left; background-color: #b9d3ed;  font-weight:bold;">IV. TEMPERAMEN</td>
		</tr>
		<tr>
			<td colspan="2" style="width:200px; height:35px; font-size: 8px; vertical-align: middle; text-align:left;">26. Pengelolaan Emosi</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pe_daliemo1.'</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pe_daliemo2.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pe_daliemo3.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pe_daliemo4.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pe_daliemo5.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pe_daliemo6.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pe_daliemo7.'</td>
			<td style="width:150px; height:35px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_pe.'</td>
		</tr>
		<tr>
			<td colspan="2" style="width:200px; height:35px; font-size: 8px; vertical-align: middle; text-align:left;">27. Pengendalian Emosi</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pe_daliemo1.'</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pe_daliemo2.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pe_daliemo3.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pe_daliemo4.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pe_daliemo5.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pe_daliemo6.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_pe_daliemo7.'</td>
			<td style="width:150px; height:35px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_daliemo.'</td>
		</tr>
		<tr>
			<td colspan="2" style="width:200px; height:35px; font-size: 8px; vertical-align: middle; text-align:left;">28. Pengelolaan Konflik</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_konflik1.'</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_konflik2.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_konflik3.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_konflik4.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_konflik5.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_konflik6.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_konflik7.'</td>
			<td style="width:150px; height:35px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_konflik.'</td>
		</tr>
		<tr>
			<td colspan="2" style="width:200px; height:35px; font-size: 8px; vertical-align: middle; text-align:left;">29. Menerima Perubahan</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ide_mp_adap1.'</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ide_mp_adap2.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ide_mp_adap3.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ide_mp_adap4.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ide_mp_adap5.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ide_mp_adap6.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ide_mp_adap7.'</td>
			<td style="width:150px; height:35px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_mp.'</td>
		</tr>
		<tr>
			<td colspan="2" style="width:200px; height:35px; font-size: 8px; vertical-align: middle; text-align:left;">30. Beradaptasi</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ide_mp_adap1.'</td>
			<td style="width:45px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ide_mp_adap2.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ide_mp_adap3.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ide_mp_adap4.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ide_mp_adap5.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ide_mp_adap6.'</td>
			<td style="width:40px; height:35px; font-size: 10px; font-weight:bold; vertical-align: middle; text-align:center;">'.$d->skala_ide_mp_adap7.'</td>
			<td style="width:150px; height:35px; font-size: 7px; vertical-align: middle; text-align:left;">'.$d->desk_adap.'</td>
		</tr>
	</table>	
	<p style="font-size: 9px; font-weight:bold;">INTERPRETASI :</p>
	<table width="100%" border="1px" style="border-style: solid; margin-top:  15px; vertical-align: middle; font-size: 9px; table-layout: fixed; word-wrap: break-word;">
		<tr>
			<th colspan="2" style="width:640px; height:20px; vertical-align: middle; font-size: 10px; font-weight:bold; text-align:center; background-color:#124f8b; color:#fff;">URAIAN</th>
		</tr>
		<tr>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>1. Motivasi berprestasi</b> '.$d->interp_mb.'</td>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>2. Komitmen kerja</b> '.$d->interp_kk.'</td>
		</tr>
		<tr>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>3. Orientasi bekerja</b> '.$d->interp_ob.'</td>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>4. Berkompetisi</b> '.$d->interp_kmptisi.'</td>
		</tr>
		<tr>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>5. Perencanaan</b> '.$d->interp_prcn.'</td>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>6. Sistem kerja</b> '.$d->interp_sk.'</td>
		</tr>
		<tr>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>7. Pengelolaan data</b> '.$d->interp_pd.'</td>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>8. Penyelesaian tugas</b> '.$d->interp_pt.'</td>
		</tr>
		<tr>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>9. Keaktifan</b> '.$d->interp_aktif.'</td>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>10. Menghadapi urgensi</b> '.$d->interp_mu.'</td>
		</tr>
		<tr>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>11. Loyalitas terhadap atasan/otoritas</b> '.$d->interp_loyal.'</td>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>12. Kemandirian</b> '.$d->interp_mandiri.'</td>
		</tr>
		<tr>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>13. Percaya diri sebagai pemimpin</b> '.$d->interp_pede.'</td>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>14. Tanggungjawab sebagai pemimpin</b> '.$d->interp_tj.'</td>
		</tr>
		<tr>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>15. Fungsi kontrol</b> '.$d->interp_fk.'</td>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>16. Pengambilan resiko</b> '.$d->interp_pr.'</td>
		</tr>
		<tr>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>17. Kecepatan membuat keputusan</b> '.$d->interp_kmk.'</td>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>18. Ide/gagasan</b> '.$d->interp_ide.'</td>
		</tr>
		<tr>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>19. Berpikir Kritis</b> '.$d->interp_bk.'</td>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>20. Keterbukaan bergaul</b> '.$d->interp_kb.'</td>
		</tr>
		<tr>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>21. Kerjasama</b> '.$d->interp_ks.'</td>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>22. Interaksi di kelompok</b> '.$d->interp_intraksi.'</td>
		</tr>
		<tr>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>23. Kepekaan Sosial</b> '.$d->interp_peka.'</td>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>24. Orientasi Pergaulan</b> '.$d->interp_op.'</td>
		</tr>
		<tr>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>25. Pengakuan diri di lingkungan</b> '.$d->interp_pdl.'</td>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>26. Pengelolaan Emosi</b> '.$d->interp_pe.'</td>
		</tr>
		<tr>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>27. Pengendalian Emosi</b> '.$d->interp_daliemo.'</td>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>28. Pengelolaan Konflik</b> '.$d->interp_konflik.'</td>
		</tr>
		<tr>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>29. Menerima perubahan</b> '.$d->interp_mp.'</td>
			<td style="width:320px; height:70px; font-size: 9px; vertical-align: middle; text-align:left;"><b>30. Beradaptasi</b> '.$d->interp_adap.'</td>
		</tr>
	
	</table>	
		
';

// output the HTML content
$pdf->writeHTML($html, true, 0, true, 0);
}

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------
$data = $this->db->get('hasil_papi')->result();
$data = $this->db->get('registrasi')->result();
$data = $this->db->get('data_peserta')->result();
$data = $this->db->get('kegiatan')->result();
$data = $this->db->get('reff_desk_papi')->result();
$no=0;
foreach ($papi as $d){
$no++;
//Close and output PDF document
$pdf->Output('PAPI_'.$d->nama.'.pdf', 'I');
}
//============================================================+
// END OF FILE
//============================================================+

?>