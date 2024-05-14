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

$data = $this->db->get('data_peserta')->result();
$data = $this->db->get('registrasi')->result();
$data = $this->db->get('kegiatan')->result();
$data = $this->db->get('hasil_potensi')->result();
$data = $this->db->get('hasil_kompetensi')->result();
$data = $this->db->get('hasil_uraian')->result();
$no=0;
foreach ($cetak_indi as $d){
$no++;

// create some HTML content
$html = 
'
	<p style="font-size: 12px; text-align:center; font-weight:bold;">LAPORAN INDIVIDU <br> HASIL PENILAIAN POTENSI DAN KOMPETENSI</p>
	<table width="100%" border="1px" style="border-style: solid; margin-top: 15px;font-size: 9px; table-layout: fixed; word-wrap: break-word;">
		<tr>
			<th colspan="3" style="height:20px;font-size: 11px; font-weight:bold; background-color:#1059a2; color:#fff;">I. PROFIL</th>
		</tr>
		<tr>
			<td style="width:100px; height:20px;">Nama</td>
			<td style="width:20px; height:20px; text-align:center;">:</td>
			<td style="width:518px; height:20px; font-weight:bold;">'.$d->nama.'</td>
		</tr>
		<tr>
			<td style="width:100px; height:20px;">NIP</td>
			<td style="width:20px; height:20px; text-align:center;">:</td>
			<td style="width:518px; height:20px; font-weight:bold;">'.$d->nip.'</td>
		</tr>
		<tr>
			<td style="width:100px; height:20px;">Pangkat/Gol.</td>
			<td style="width:20px; height:20px; text-align:center;">:</td>
			<td style="width:518px; height:20px; font-weight:bold;">'.$d->gol.' - '.$d->jenjang.'</td>
		</tr>
		<tr>
			<td style="width:100px; height:20px;">Jabatan</td>
			<td style="width:20px; height:20px; text-align:center;">:</td>
			<td style="width:518px; height:20px; font-weight:bold;">'.$d->jabatan.'</td>
		</tr>
		<tr>
			<td style="width:100px; height:20px;">Unit Kerja</td>
			<td style="width:20px; height:20px; text-align:center;">:</td>
			<td style="width:518px; height:20px; font-weight:bold;">'.$d->unker.'</td>
		</tr>
		<tr>
			<td style="width:100px; height:20px;">Kegiatan</td>
			<td style="width:20px; height:20px; text-align:center;">:</td>
			<td style="width:518px; height:20px; font-weight:bold;">'.$d->nama_kegiatan.'</td>
		</tr>
		<tr>
			<td style="width:100px; height:20px;">Tgl. Uji Kompetensi</td>
			<td style="width:20px; height:20px; text-align:center;">:</td>
			<td style="width:518px; height:20px; font-weight:bold;">'.$d->tgl_keg.'</td>
		</tr>
	</table>
	<p style="font-size: 9px;">&nbsp;</p>
	
	<table width="100%" border="1px" style="border-style: solid; font-size: 9px; table-layout: fixed; word-wrap: break-word;">
		<tr>
			<th style="height:20px; font-size: 11px; font-weight:bold; background-color:#1059a2; color:#fff;">II. POTENSI</th>
		</tr>
		<tr>
			<th style="width:50px; height:20px; font-size: 10px; font-weight:bold; background-color:#9ec8f1; text-align:center;">No</th>
			<th style="width:200x; height:20px; font-size: 10px; font-weight:bold; background-color:#9ec8f1; text-align:center;">Aspek</th>
			<th style="width:70px; height:20px; font-size: 10px; font-weight:bold; background-color:#9ec8f1; text-align:center;">Standar</th>
			<th style="width:70px; height:20px; font-size: 10px; font-weight:bold; background-color:#9ec8f1; text-align:center;">Capaian</th>
			<th style="width:70px; height:20px; font-size: 10px; font-weight:bold; background-color:#9ec8f1; text-align:center;">GAP</th>
			<th style="width:178px; height:20px; font-size: 10px; font-weight:bold; background-color:#9ec8f1; text-align:center;">uraian</th>
		</tr>
		<tr>
			<td style="text-align:center; height:70px;">1</td>
			<td><b>Kemampuan Intelektual</b><hr>
			Merupakan  kemampuan berpikir  yang dimiliki    seseorang  untuk  memproses informasi secara analitis dan konspetual untuk menyelesaikan persoalan.
			</td>
			<td style="font-weight:bold; text-align:center;">2</td>
			<td style="font-weight:bold; text-align:center;">'.$d->aspek_pot1.'</td>
			<td style="font-weight:bold; text-align:center;"> ... </td>
			<td rowspan="8">'.$d->uraian_potensi.'</td>
		</tr>
		<tr>
			<td style="text-align:center; height:70px;">2</td>
			<td><b>Kemampuan Berpikir Kritis dan Strategis</b><hr>
			Merupakan kemampuan menganalisis hal yang esensial dan dampak yang ditimbulkan, serta  tantangan dan peluang di masa depan  untuk menyusun rencana tindak  lanjut.
			</td>
			<td style="font-weight:bold; text-align:center;">2</td>
			<td style="font-weight:bold; text-align:center;">'.$d->aspek_pot2.'</td>
			<td style="font-weight:bold; text-align:center;"> ... </td>
		</tr>
		<tr>
			<td style="text-align:center; height:70px;">3</td>
			<td><b>Kemampuan Penyelesaikan Permasalahan</b><hr>
			Merupakan kemampuan menganalisis permasalahan dari berbagai perspektif, melihat keterkaitan berbagai informasi,  mengembangkan alternatif solusi dan antisipasi risikonya, serta menetapkan solusi yang efektif.
			</td>
			<td style="font-weight:bold; text-align:center;">2</td>
			<td style="font-weight:bold; text-align:center;">'.$d->aspek_pot3.'</td>
			<td style="font-weight:bold; text-align:center;"> ... </td>
		</tr>
		<tr>
			<td style="text-align:center; height:70px;">4</td>
			<td><b>Hubungan Interpersonal</b><hr>
			Merupakan kemampuan untuk menjalin dan membangun hubungan dengan orang  lain melalui komunikasi,  keterbukaan, dan empati.
			</td>
			<td style="font-weight:bold; text-align:center;">2</td>
			<td style="font-weight:bold; text-align:center;">'.$d->aspek_pot4.'</td>
			<td style="font-weight:bold; text-align:center;"> ... </td>
		</tr>
		<tr>
			<td style="text-align:center; height:70px;">5</td>
			<td><b>Kecerdasan Emosional</b><hr>
			Merupakan kemampuan untuk mengelola emosi diri dan orang lain dalam situasi penuh tekanan  untuk menampilkan respons yang sesuai.
			</td>
			<td style="font-weight:bold; text-align:center;">2</td>
			<td style="font-weight:bold; text-align:center;">'.$d->aspek_pot5.'</td>
			<td style="font-weight:bold; text-align:center;"> ... </td>
		</tr>
		<tr>
			<td style="text-align:center; height:70px;">6</td>
			<td><b>Kemampuan Belajar Cepat dan Mengembangkan Diri</b><hr>
			Merupakan kemampuan untukmenyesuaikan pola pikir dan mengembangkan  diri  ketika menghadapi situasi atau hal yang baru.
			</td>
			<td style="font-weight:bold; text-align:center;">2</td>
			<td style="font-weight:bold; text-align:center;">'.$d->aspek_pot6.'</td>
			<td style="font-weight:bold; text-align:center;"> ... </td>
		</tr>
		<tr>
			<td style="text-align:center; height:70px;">7</td>
			<td><b>Motivasi dan Komitmen</b><hr>
			Merupakan dorongan dan semangat dalam diri seseorang untuk terusmelakukan kegiatan yang dapat mendukung pencapaian tujuan.
			</td>
			<td style="font-weight:bold; text-align:center;">2</td>
			<td style="font-weight:bold; text-align:center;">'.$d->aspek_pot7.'</td>
			<td style="font-weight:bold; text-align:center;"> ... </td>
		</tr>
		<tr>
			<td style="text-align:center; height:70px;">8</td>
			<td><b>Kesadaran Diri</b><hr>
			Merupakan dorongan untuk mengenalipikiran, perilaku dan emosi diri; memiliki keaktifan melakukan  introspeksi diri untuk berespons secara efektif.
			</td>
			<td style="font-weight:bold; text-align:center;">2</td>
			<td style="font-weight:bold; text-align:center;">'.$d->aspek_pot8.'</td>
			<td style="font-weight:bold; text-align:center;"> ... </td>
		</tr>
		<tr>
			<td colspan="2" style="font-weight:bold; text-align:right; height:25px;">TOTAL</td>
			<td style="font-weight:bold; text-align:center;">16</td>
			<td style="font-weight:bold; text-align:center;">'.$d->capaian_pot.'</td>
			<td colspan="2" style="font-weight:bold; text-align:center;">'.$d->rekom_pot.'</td>
		</tr>
	</table>
	<p style="font-size: 9px;">&nbsp;</p>
	
	<table width="100%"  border="1px" style="border-style: solid; font-size: 9px; table-layout: fixed; word-wrap: break-word;">
		<tr>
			<th colspan="7" style="height:20px; font-size: 11px; font-weight:bold; background-color:#1059a2; color:#fff;">III. KOMPETENSI</th>
		</tr>
		<tr>
			<th rowspan="2" style="width:50px; font-size: 10px; font-weight:bold; background-color:#9ec8f1; text-align:center;">No</th>
			<th rowspan="2" style="width:320px; font-size: 10px; font-weight:bold; background-color:#9ec8f1; text-align:center;">Aspek</th>
			<th colspan="5" style="width:268px; font-size: 10px; font-weight:bold; background-color:#9ec8f1; text-align:center;">Level</th>
		</tr>
		<tr>
			<th style="width:53px; font-size: 10px; font-weight:bold; background-color:#9ec8f1; text-align:center;">1</th>
			<th style="width:54px; font-size: 10px; font-weight:bold; background-color:#9ec8f1; text-align:center;">2</th>
			<th style="width:54px; font-size: 10px; font-weight:bold; background-color:#9ec8f1; text-align:center;">3</th>
			<th style="width:54px; font-size: 10px; font-weight:bold; background-color:#9ec8f1; text-align:center;">4</th>
			<th style="width:53px; font-size: 10px; font-weight:bold; background-color:#9ec8f1; text-align:center;">5</th>   
		</tr>
		<tr>
			<td colspan="7" style="background-color:#e2f0fe; height:20px;">Kompetensi Manajerial</td>
		</tr>
		<tr>
			<td rowspan="2" style="width:50px; height:75px; font-size: 10px; text-align:center;">1</td>
			<td style="width:320px; height:15px; font-size: 10px; font-weight:bold;">Integritas</td>
			<td rowspan="2" style="width:53px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as1kom1_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as1kom2_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as1kom3_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as1kom4_x.'</td>
			<td rowspan="2" style="width:53px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as1kom5_x.'</td>   
		</tr>
		<tr>
			<td style="width:320px; font-size: 8px; text-align:justify;">Konsisten berperilaku selaras dengan nilai, norma dan/atau etika organisasi, dan jujur dalam hubungan dengan manajemen, rekan kerja, bawahan langsung, dan pemangku kepentingan, menciptakan budaya etika tinggi, bertanggungjawab atas tindakan atau keputusan beserta risiko yang menyertainya.
			</td>
		</tr>
		<tr>
			<td rowspan="2" style="width:50px; height:75px; font-size: 10px; text-align:center;">2</td>
			<td style="width:320px; height:15px; font-size: 10px; font-weight:bold;">Kerja Sama</td>
			<td rowspan="2" style="width:53px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as2kom1_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as2kom2_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as2kom3_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as2kom4_x.'</td>
			<td rowspan="2" style="width:53px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as2kom5_x.'</td>   
		</tr>
		<tr>
			<td style="width:320px; font-size: 8px; text-align:justify;">Kemampuan menjalin, membina, mempertahankan hubungan kerja yang efektif, memiliki komitmen saling membantu dalam penyelesaian tugas, dan mengoptimalkan segala sumber daya untuk mencapai tujuan strategis organisasi.
			</td>
		</tr>
		<tr>
			<td rowspan="2" style="width:50px; height:75px; font-size: 10px; text-align:center;">3</td>
			<td style="width:320px; height:15px; font-size: 10px; font-weight:bold;">Komunikasi</td>
			<td rowspan="2" style="width:53px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as3kom1_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as3kom2_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as3kom3_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as3kom4_x.'</td>
			<td rowspan="2" style="width:53px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as3kom5_x.'</td>   
		</tr>
		<tr>
			<td style="width:320px; font-size: 8px; text-align:justify;">Kemampuan untuk menerangkan pandangan dan gagasan secara jelas, sistematis disertai argumentasi yang logis dengan cara-cara yang sesuai baik secara lisan maupun tertulis; memastikan pemahaman; mendengarkan secara aktif dan efektif; mempersuasi, meyakinkan dan membujuk orang lain dalam rangka mencapai tujuan organisasi.
			</td>
		</tr>
		<tr>
			<td rowspan="2" style="width:50px; height:75px; font-size: 10px; text-align:center;">4</td>
			<td style="width:320px; height:15px; font-size: 10px; font-weight:bold;">Orientasi pada Hasil</td>
			<td rowspan="2" style="width:53px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as4kom1_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as4kom2_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as4kom3_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as4kom4_x.'</td>
			<td rowspan="2" style="width:53px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as4kom5_x.'</td>   
		</tr>
		<tr>
			<td style="width:320px; font-size: 8px; text-align:justify;">Kemampuan mempertahankan komitmen pribadi yang tinggi untuk menyelesaikan tugas, dapat diandalkan, bertanggung jawab, mampu secara sistematis mengidentifikasi risiko dan peluang dengan memperhatikan keterhubungan antara perencanaan dan hasil, untuk keberhasilan organisasi.
			</td>
		</tr>
		<tr>
			<td rowspan="2" style="width:50px; height:75px; font-size: 10px; text-align:center;">5</td>
			<td style="width:320px; height:15px; font-size: 10px; font-weight:bold;">Pelayanan Publik</td>
			<td rowspan="2" style="width:53px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as5kom1_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as5kom2_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as5kom3_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as5kom4_x.'</td>
			<td rowspan="2" style="width:53px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as5kom5_x.'</td>   
		</tr>
		<tr>
			<td style="width:320px; font-size: 8px; text-align:justify;">Kemampuan dalam melaksanakan tugas-tugas pemerintahan, pembangunan dan kegiatan pemenuhan kebutuhan pelayanan publik secara profesional, transparan, mengikuti standar pelayanan yang objektif, netral, tidak memihak, tidak diskriminatif, serta tidak terpengaruh kepentingan pribadi/kelompok/golongan/partai politik.
			</td>
		</tr>
		<tr>
			<td rowspan="2" style="width:50px; height:100px; font-size: 10px; text-align:center;">6</td>
			<td style="width:320px; height:15px; font-size: 10px; font-weight:bold;">Pengembangan Diri dan Orang Lain</td>
			<td rowspan="2" style="width:53px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as6kom1_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as6kom2_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as6kom3_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as6kom4_x.'</td>
			<td rowspan="2" style="width:53px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as6kom5_x.'</td>   
		</tr>
		<tr>
			<td style="width:320px; font-size: 8px; text-align:justify;">Kemampuan untuk meningkatkan pengetahuan dan menyempurnakan keterampilan diri; menginspirasi orang lain untuk mengembangkan dan menyempurnakan pengetahuan dan keterampilan yang relevan dengan pekerjaan dan pengembangan karier jangka panjang, mendorong kemauan belajar sepanjang hidup, memberikan saran/bantuan, umpan balik, bimbingan untuk membantu orang lain untuk mengembangkan potensi dirinya.
			</td>
		</tr>
		<tr>
			<td rowspan="2" style="width:50px; height:75px; font-size: 10px; text-align:center;">7</td>
			<td style="width:320px; height:15px; font-size: 10px; font-weight:bold;">Mengelola Perubahan</td>
			<td rowspan="2" style="width:53px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as7kom1_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as7kom2_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as7kom3_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as7kom4_x.'</td>
			<td rowspan="2" style="width:53px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as7kom5_x.'</td>   
		</tr>
		<tr>
			<td style="width:320px; font-size: 8px; text-align:justify;">Kemampuan dalam menyesuaikan diri dengan situasi yang baru atau berubah dan tidak bergantung secara berlebihan pada metode dan proses lama, mengambil tindakan untuk mendukung dan melaksanakan insiatif perubahan, memimpin usaha perubahan, mengambil tanggung jawab pribadi untuk memastikan perubahan berhasil diimplementasikan secara efektif.
			</td>
		</tr>
		<tr>
			<td rowspan="2" style="width:50px; height:75px; font-size: 10px; text-align:center;">8</td>
			<td style="width:320px; height:15px; font-size: 10px; font-weight:bold;">Pengambilan Keputusan</td>
			<td rowspan="2" style="width:53px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as8kom1_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as8kom2_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as8kom3_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as8kom4_x.'</td>
			<td rowspan="2" style="width:53px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as8kom5_x.'</td>   
		</tr>
		<tr>
			<td style="width:320px; font-size: 8px; text-align:justify;">Kemampuan membuat keputusan yang baik secara tepat waktu dan dengan keyakinan diri setelah mempertimbangkan prinsip kehati-hatian, dirumuskan secara sistematis dan seksama berdasarkan berbagai informasi, alternatif pemecahan masalah dan konsekuensinya, serta bertanggung jawab atas keputusan yang diambil.
			</td>
		</tr>
		<tr>
			<td colspan="7" style="background-color:#e2f0fe; height:20px;">Kompetensi Sosial Kultural</td>
		</tr>
		<tr>
			<td rowspan="2" style="width:50px; height:100px; font-size: 10px; text-align:center;">9</td>
			<td style="width:320px; height:15px; font-size: 10px; font-weight:bold;">Perekat Bangsa</td>
			<td rowspan="2" style="width:53px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as9kom1_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as9kom2_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as9kom3_x.'</td>
			<td rowspan="2" style="width:54px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as9kom4_x.'</td>
			<td rowspan="2" style="width:53px; height:15px; font-size: 10px; font-weight:bold; text-align:center;">'.$d->as9kom5_x.'</td>   
		</tr>
		<tr>
			<td style="width:320px; font-size: 8px; text-align:justify;">Kemampuan dalam mempromosikan sikap toleransi, keterbukaan, peka terhadap perbedaan individu/kelompok masyarakat; mampu menjadi perpanjangan tangan pemerintah dalam mempersatukan masyarakat dan membangun hubungan sosial psikologis dengan masyarakat di tengah kemajemukan Indonesia sehingga menciptakan kelekatan yang kuat antara ASN dan para pemangku kepentingan serta di antara para pemangku kepentingan itu sendiri; menjaga, mengembangkan, dan mewujudkan rasa persatuan dan kesatuan dalam kehidupan bermasyarakat, berbangsa dan bernegara Indonesia.
			</td>
		</tr>
	</table>
	<p style="font-size: 9px;">Ket : X = Hasil Penilaian</p>
	
	<table width="100%"  border="1px" style="border-style: solid; font-size: 9px; table-layout: fixed; word-wrap: break-word;">
		<tr>
			<th style="font-size: 11px; font-weight:bold; background-color:#1059a2; color:#fff;">IV. KEKUATAN</th>
		</tr>
		<tr>
			<td style="text-align:justify; height:110px;">Berdasarkan hasil penilaian, ada beberapa poin yang menjadi Kekuatan pegawai, yaitu : <br>
				'.$d->kek_1.' <br>
				'.$d->kek_2.' <br>
				'.$d->kek_3.' <br>
				'.$d->kek_4.' <br>
				'.$d->kek_5.' <br>
				'.$d->kek_6.' 
			</td>
		</tr>
	</table>	
	<p style="font-size: 9px;">&nbsp;</p>
	
	<table width="100%"  border="1px" style="border-style: solid; font-size: 9px; table-layout: fixed; word-wrap: break-word;">
		<tr>
			<th style="font-size: 11px; font-weight:bold; background-color:#1059a2; color:#fff;">V. AREA PENGEMBANGAN</th>
		</tr>
		<tr>
			<td style="text-align:justify; height:130px;">Berdasarkan hasil penilaian, ada beberapa poin yang menjadi Kelemahan pegawai, yaitu :<br>
				'.$d->ap_1.' <br>
				'.$d->ap_2.' <br>
				'.$d->ap_3.' <br>
				'.$d->ap_4.' <br>
				'.$d->ap_5.' <br>
				'.$d->ap_6.' 
			
			</td>
		</tr>
	</table>
	<p style="font-size: 9px;">&nbsp;</p>
	
	<table width="100%"  border="1px" style="border-style: solid; font-size: 9px; table-layout: fixed; word-wrap: break-word;">
		<tr>
			<th style="font-size: 11px; font-weight:bold; background-color:#1059a2; color:#fff;">VI. SARAN PENGEMBANGAN</th>
		</tr>
		<tr>
			<td style="text-align:justify; height:100px;">Berdasarkan hasil penilaian, ada beberapa poin yang menjadi Kelemahan pegawai, yaitu : <br>
				'.$d->speng_1.' <br>
				'.$d->speng_2.' <br>
				'.$d->speng_3.' <br>
				'.$d->speng_4.' <br>
				'.$d->speng_5.' <br>
				'.$d->speng_6.' <br>
				'.$d->speng_7.' <br>
				'.$d->speng_8.' <br>
				'.$d->speng_9.' <br>
				'.$d->speng_10.'
			</td>
		</tr>
	</table>
	<p style="font-size: 9px;">&nbsp;</p>

	<table width="100%"  border="1px" style="border-style: solid; font-size: 9px; table-layout: fixed; word-wrap: break-word;">
		<tr>
			<th style="font-size: 11px; font-weight:bold; background-color:#1059a2; color:#fff;">VII. SARAN PENEMPATAN</th>
		</tr>
		<tr>
			<td style="text-align:justify; height:70px;">Berdasarkan hasil penilaian, ada beberapa poin yang menjadi Kelemahan pegawai, yaitu :<br>
				'.$d->sp_1.' <br>
				'.$d->sp_2.' <br>
				'.$d->sp_3.' 
			</td>
		</tr>
	</table>
	<p style="font-size: 9px;">&nbsp;</p>
	
	<table width="100%"  border="1px" style="border-style: solid; font-size: 9px; table-layout: fixed; word-wrap: break-word;">
		<tr>
			<th style="font-size: 11px; font-weight:bold; background-color:#1059a2; color:#fff;">VIII. KATEGORI PENILAIAN</th>
		</tr>
		<tr>
			<td style="text-align:justify; height:50px;">Berdasarkan profil dan uraian di atas, maka Saudara <b>'.$d->nama.'</b> berada pada kategori <b> ... </b> dengan nilai <b>'.$d->capaian_komp.'</b> setara dengan <b>........ %</b>  <i>Job Person Match</i> (JPM).
			</td>
		</tr>
	</table>
	<p style="font-size: 9px;">&nbsp;</p>
		
	<table width="100%" style="font-size: 10px; table-layout: fixed; word-wrap: break-word;">
		<tr>
			<td style="text-align:left; height:100px;">ASSESSOR, <br>
			<br>
			<br>
			<br>
			<b>'.$d->nama_personil.' </b> <br>
			NIP. '.$d->nip_personil.' 
			</td>
		</tr>
	</table>
		
	<table width="100%" style="font-size: 9px; table-layout: fixed; word-wrap: break-word;">
		<tr>
			<td style="text-align:right;">Dok. Assessment Center BKKBN <br>Copyright © '.$d->tahun.' All rights reserved - 	whaddupsapp&trade;</td>
		</tr>
	</table>
		
';

// output the HTML content
$pdf->writeHTML($html, true, 0, true, 0);
}

// reset pointer to the last page
$pdf->lastPage();
// ---------------------------------------------------------
$data = $this->db->get('data_peserta')->result();
$data = $this->db->get('registrasi')->result();
$data = $this->db->get('kegiatan')->result();
$data = $this->db->get('hasil_potensi')->result();
$data = $this->db->get('hasil_kompetensi')->result();
$data = $this->db->get('hasil_uraian')->result();
$no=0;
foreach ($cetak_indi as $d){
$no++;

ob_clean();
ob_flush();


//Close and output PDF document
$pdf->Output('lap_'.$d->nama_kegiatan.'.pdf', 'I');
}

ob_end_flush();
ob_end_clean();
//============================================================+
// END OF FILE
//============================================================+

?>