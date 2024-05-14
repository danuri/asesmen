<html>
<head>
<?php 
if (!empty($ankas)) {
$no = 1;
foreach ($ankas as $d) {
echo'
    <title>ANKAS_'.$d->nama_peserta.'</title>
	'; }
	} else {
	echo '<tr><td colspan="6">Belum ada data</td></tr>';
	}
?>
</head>
<body>

<table>
  <tr>
  <td><img src="<?php echo base_url(); ?>/assets/media/upload/bawaan/logo_ktng.gif" style="width:50; height:50;"><td>
  <td style="padding:0;"><p style="font-size:14; font-weight:bold;">PEMERINTAH KOTA TANGERANG <br/>UPT Penilaian Kompetensi - BKPSDM</p></td>
  </tr>
</table>
<br /><br />
<?php 
if (!empty($ankas)) {
$no = 1;
foreach ($ankas as $d) {
echo'


<div class="clearfix"></div>
<div class="alert alert-warning col-md-6">
	<table class="table table-bordered" style="margin-bottom: 0px">
		<tr><td style="width:130; font-size:12;">No. Tes</td> <td style="width:200; font-size:12;">: <b> '.$d->nama_peserta.' </b></td></tr>
		<tr><td style="width:130; font-size:12;">Nama Peserta</td> <td style="width:200; font-size:12;">: <b> '.$d->no_peserta.' </b></td></tr>
		<tr><td style="width:130; font-size:12;">Tgl. Tes</td> <td style="width:200; font-size:12;">: <b> '.$d->tgl_tes.' </b></td></tr>
		<tr><td style="width:130; font-size:12;">Alat Tes</td><td style="width:200; font-size:12;">: <b> Simulasi Analisa Kasus </b></td></tr>
	</table>
</div><hr/>
	  <div class="alert alert-warning">
		<h4 align="center">SOAL SIMULASI ANALISA KASUS</h4><hr />
				<P style="text-align:justify;"><b>Paragraf (1) </b> Pemerintah Temaran merupakan salah satu Instansi Pemerintah yang dekat dengan ibu kota negara Indahjaya.  Pemerintah Temaram memiliki visi “mewujudkan masyarakat yang cerdas dan sejahtera”. Untuk mewujudkan visi ini, Kepala Daerah Pemerintah Temaram mengharapkan setiap pegawai mampu memberikan pelayanan prima pada masyarakat, tanggap pada kebutuhan masyarakat, professional dalam menjalankan fungsinya, tanggap terhadap perubahan dan dapat menjawab tantangan seiring dengan berkembangnya Revolusi 4.0. Dalam suatu rapat evaluasi tahun 20X0, Kepala Daerah menyoroti beberapa hal mengenai pengaduan masyarakat dan kinerja yang buruk di beberapa unit kerja, termasuk Unit Kerja “X”.</P><br/>
				
				<P style="text-align:justify;"><b>Paragraf (2) </b> Unit kerja “X” merupakan salah satu unit kerja di Instansi Pemerintah Temaram yang memiliki tugas pokok pelayanan di bidang kesejahteraan masyarakat. Salah satu divisi dalam unit kerja “X” yaitu divisi Primajaya merupakan divisi yang langsung bersentuhan dengan pelayanan pada masyarakat. Divisi ini paling banyak mendapatkan sorotan dari Kepala Daerah. Hal yang disoroti adalah terkait dengan masih banyaknya pengaduan dari masyarakat mengenai lambatnya pegawai dalam menindaklanjuti keluhan masyarakat dan lambatnya ketersediaan data laporan kemasyarakatan jika kepala daerah membutuhkan dan kadang tidak akurat. Dengan adanya permasalahan ini, beliau mengharapkan agar divisi ini melakukan pembenahan pola kerja dan peningkatan kualitas SDM sehingga dapat mendukung terwujudnya visi dan misi Pemerintah Temaran.</P><br/>
				
				<P style="text-align:justify;"><b>Paragraf (3) </b> Tahun 20X1, sebenarnya pimpinan di divisi Primajaya sudah mengalokasikan anggaran untuk meningkatkan kapasitas SDM dengan mengadakan pelatihan “Pelayanan Prima” dan pelatihan Teknis “Penguasaan Ms.Office”. Selanjutnya, anggaran juga dialokasikan untuk meningkatkan sarana dan prasarana kantor. Dua pelatihan yang sudah direncanakan tersebut merupakan pelatihan yang sangat dibutuhkan oleh pegawai yang ada di divisi ini. Sumber Daya Manusia yang ada di divisi ini sebagian besar berusia 50 tahun ke atas. Mereka merupakan pegawai yang memiliki pengalaman cukup lama dan dapat diandalkan untuk menangani keluhan yang sudah biasa dihadapi sehari-hari. Disamping itu, mereka juga pegawai yang cukup loyal terhadap pimpinan, siap kapanpun dibutuhkan dan memiliki disiplin yang baik. Seiring dengan perkembangan teknologi, tentu saja dibutuhkan kemampuan baru yang berhubungan dengan kemampuan menggunakan perangkat komputer. Terlebih saat ini, Kepala Daerah menuntut agar setiap pelayanan yang berhubungan dengan masyarakat sudah menggunakan sistem online dan dapat menjawab kebutuhan masyarakat dengan cepat, tepat dan transparan. Namun, sepertinya membutuhkan waktu yang cukup lama untuk membiasakan para pegawai ini untuk beradaptasi dengan teknologi. Pelatihan Teknis “Penguasaan Ms.Office” sebenarnya merupakan salah satu cara yang dilakukan pimpinan divisi untuk menyelesaikan permasalahan ini. Karena kebutuhan pelayanan yang semakin banyak, maka 2 tahun sebelumnya dilakukan rekrutmen pegawai sehingga ada 2 pegawai baru yang berusia di bawah 35 tahun. Karakteristik yang cukup berbeda dengan pegawai sebelumnya, dimana pegawai baru ini merupakan pegawai yang cukup kritis dalam menanggapi sesuatu, berani mengungkapkan pendapat dan memiliki kemampuan dalam mengoperasikan komputer. Hanya saja, mereka kurang mampu menunjukkan sikap yang baik dalam melayani masyarakat dan bekerja sesuai “mood”. Oleh karena itu, muncullah kegiatan untuk mengikutsertakan mereka dalam pelatihan “Pelayanan Prima”. Hal lain yang menjadi perhatian dari pimpinan divisi adalah masalah komputer dan sarana pendukung lainnya dalam bekerja yang sudah usang dan banyak yang tidak berfungsi sebagaimana mestinya. Tentu saja masalah ini sangat penting untuk diatasi karena tanpa adanya sarana dan prasarana yang mendukung, penyelesaian tugas akan menjadi lama. Namun sangat disayangkan, karena situasi pandemik, anggaran yang ada di divisi ini harus dipangkas hampir 50 persen. Kondisi ini membuat banyak kegiatan yang sudah direncanakan terpaksa dibatalkan dan memaksa pimpinan untuk memilah-milah kembali kegiatan prioritas yang disesuaikan dengan anggaran yang tersedia.</P><br/>
				
				<P style="text-align:justify;"><b>Paragraf (4) </b> Berbicara mengenai kondisi SDM yang ada di divisi ini, hubungan yang terjalin antara pegawai lama dan pegawai baru bisa dikatakan tidak harmonis. Pegawai lama merasa bahwa pegawai baru memiliki jiwa pemberontak, tidak mau ikut aturan dan bekerja “semaunya”. Sedangkan pegawai baru beranggapan, pegawai lama terlalu arogan dan menganggap mereka senior dan merasa tahu segalanya dan sulit berubah sehingga pegawai baru ini malas berada di ruangan dan bekerja seperlunya. Padahal dengan kemampuan teknologi yang mereka miliki, mereka dapat diberdayakan untuk membuat perubahan metode kerja yang tentunya akan lebih mengefektifkan penyelesaian tugas serta dapat memantau ketersediaan data yang diperlukan sebagai bahan monitoring dan evaluasi bagi pimpinan.</P><br/>
				
				<P style="text-align:justify;"><b>Paragraf (5) </b> Kendala lain yang biasanya muncul dalam menyelesaikan tugas adalah koordinasi yang kurang berjalan lancar dengan unit kerja lain di Pemerintah Temaran. Masalah data adalah masalah yang krusial yang harus dipenuhi oleh setiap instansi. Namun masalahnya, masih banyak data yang tidak singkron antara satu unit kerja dengan unit kerja lainnya, padahal menangani urusan yang sama. Selain itu, permintaan data penunjang yang dibutuhkan oleh divisi Primajaya tergantung dari data kependudukan yang ada di unit kerja “W”. Namun seringkali, permohonan untuk menyajikan data penunjang yang akurat tidak mampu dipenuhi oleh unit kerja “W”.</P><br/>
				
				<P style="text-align:justify;"><b>Paragraf (6) </b> Saat ini, pimpinan di divisi Primajaya sedang merenung dan berpikir keras mengatasi permasalahan yang ada di divisinya. Dengan keterbatasan anggaran dan berbagai masalah yang menghambat kinerja di divisi ini, pimpinan harus segera menyusun langkah untuk mengatasi permasalahan tersebut.</P><br/>
	  </div>

<div class="">
<table class="table">
<tr>
	<td colspan="2">
	<tr><td colspan="3">(1). Susunlah tingkat permasalahan yang ada di divisi Primajaya dimulai dari permasalahan yang paling krusial untuk diselesaikan dan berikan penjelasannya !</td></tr>
	<tr><td colspan="3" style="font-style: italic; font-size:12;">'.$d->tb_1.'</td></tr>
	<tr><td colspan="3">(2). Susunlah Rencana kerja jangka pendek dan rencana kerja jangka panjang untuk mengefektifkan pelayanan dan kinerja di divisi Primajaya sehingga dapat mendukung visi dan misi Pemerintah Temaran !</td></tr>
	<tr><td colspan="3" style="font-style: italic; font-size:12;">'.$d->tb_2.'</td></tr>
	<tr><td colspan="3">(3). Dengan mempertimbangkan ketersediaan anggaran dan tuntutan dari Kepala Daerah, solusi apa yang diberikan untuk meningkatkan kualitas pegawai agar dapat menyesuaikan dengan tuntutan perubahan dalam waktu dekat !</td></tr>
	<tr><td colspan="3" style="font-style: italic; font-size:12;">'.$d->tb_3.'</td></tr>
	</td>
</tr>
</table>
</div>

		';
	$no++;
		}
	} else {
	echo '<tr><td colspan="6">Belum ada data</td></tr>';
	}
?>
</table>
</body>
</html>