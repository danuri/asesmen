/*
Navicat MySQL Data Transfer

Source Server         : MyLocalDB
Source Server Version : 50505
Source Host           : localhost:3308
Source Database       : assessment_bkkbn

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-01-21 02:11:33
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `chart`
-- ----------------------------
DROP TABLE IF EXISTS `chart`;
CREATE TABLE `chart` (
  `id_chart` int(11) NOT NULL AUTO_INCREMENT,
  `psrt_ktng` varchar(11) DEFAULT NULL,
  `psrt_ext` varchar(11) DEFAULT NULL,
  `tahun` varchar(11) DEFAULT NULL,
  `jml_psrt` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_chart`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of chart
-- ----------------------------

-- ----------------------------
-- Table structure for `cmf_setting`
-- ----------------------------
DROP TABLE IF EXISTS `cmf_setting`;
CREATE TABLE `cmf_setting` (
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `id_setting` int(11) NOT NULL,
  `nama_item` varchar(255) NOT NULL,
  `id_parent` int(11) NOT NULL,
  `urutan` int(11) NOT NULL,
  `meta_value` text NOT NULL,
  PRIMARY KEY (`id_item`),
  KEY `id_setting` (`id_setting`,`nama_item`,`id_parent`,`urutan`)
) ENGINE=InnoDB AUTO_INCREMENT=12000290 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cmf_setting
-- ----------------------------
INSERT INTO cmf_setting VALUES ('1', '1', 'nama_app', '0', '1', '{\"label\":\"Nama aplikasi\",\"nilai\":\"Assessment Center | BKKBN\",\"tipe\":\"text\"}');
INSERT INTO cmf_setting VALUES ('2', '1', 'slogan_app', '0', '2', '{\"label\":\"Slogan aplikasi\",\"nilai\":\"Badan Kependudukan dan Keluarga Berencana Nasional\",\"tipe\":\"text\"}');
INSERT INTO cmf_setting VALUES ('3', '1', 'logo_app', '620', '3', '{\"label\":\"Logo aplikasi\",\"nilai\":\"assets/media/upload/bawaan/logo_bkkbn.png\",\"tipe\":\"upload\"}');
INSERT INTO cmf_setting VALUES ('4', '1', 'favicon_app', '620', '4', '{\"label\":\"Favicon app\",\"nilai\":\"assets/media/upload/bawaan/logo_bkkbn.png\",\"tipe\":\"upload\"}');
INSERT INTO cmf_setting VALUES ('5', '1', 'no_images_default', '11', '5', '{\"label\":\"No Image Default\",\"nilai\":\"assets/media/upload/bawaan/no_images.gif\",\"tipe\":\"upload\"}');
INSERT INTO cmf_setting VALUES ('6', '1', 'no_slider_default', '13', '6', '{\"label\":\"No Slider Default\",\"nilai\":\"assets/media/upload/bawaan/no_slider.gif\",\"tipe\":\"upload\"}');
INSERT INTO cmf_setting VALUES ('7', '1', 'no_attachment_default', '12', '7', '{\"label\":\"No Attachment Default\",\"nilai\":\"assets/media/upload/bawaan/no_attachment.gif\",\"tipe\":\"upload\"}');
INSERT INTO cmf_setting VALUES ('8', '1', 'any_attachment_default', '14', '8', '{\"label\":\"Any Attachment Default\",\"nilai\":\"assets/media/upload/bawaan/any_attachment.gif\",\"tipe\":\"upload\"}');
INSERT INTO cmf_setting VALUES ('1001', '2', 'statis', '0', '1', '{\"label\":\"Halaman Statis\"}');
INSERT INTO cmf_setting VALUES ('1002', '2', 'artikel', '0', '2', '{\"label\":\"Artikel\",\"kategori\":\"ya\"}');
INSERT INTO cmf_setting VALUES ('1003', '2', 'galeri', '0', '3', '{\"label\":\"Galeri\",\"kategori\":\"ya\"}');
INSERT INTO cmf_setting VALUES ('1004', '2', 'direktori', '0', '4', '{\"label\":\"Direktori\",\"kategori\":\"ya\"}');
INSERT INTO cmf_setting VALUES ('1005', '2', 'polling', '0', '5', '{\"label\":\"Polling\",\"kategori\":\"ya\"}');
INSERT INTO cmf_setting VALUES ('1006', '2', 'agenda', '0', '6', '{\"label\":\"Agenda\",\"kategori\":\"ya\"}');
INSERT INTO cmf_setting VALUES ('1007', '2', 'banner', '0', '7', '{\"label\":\"Banner\"}');
INSERT INTO cmf_setting VALUES ('1008', '2', 'sekilasinfo', '0', '8', '{\"label\":\"Sekilas Info\"}');
INSERT INTO cmf_setting VALUES ('100001', '3', 'Klasik', '0', '1', '{\"theme_path\":\"klasik\",\"keterangan\":\"Theme Admin alternatif CMS ini\",\"status\":\"on\"}');
INSERT INTO cmf_setting VALUES ('100002', '3', 'SB Admin 2', '0', '2', '{\"theme_path\":\"admin\",\"keterangan\":\"Theme Admin Deafult CMS ini\",\"status\":\"on\"}');
INSERT INTO cmf_setting VALUES ('100003', '3', 'Admin LTE', '0', '3', '{\"theme_path\":\"adminlte\",\"keterangan\":\"Theme Admin alternatif CMS ini\",\"status\":\"on\"}');
INSERT INTO cmf_setting VALUES ('100004', '3', 'Cat Master', '0', '4', '{\"theme_path\":\"cat_master\",\"keterangan\":\"Oom Greg dapet dari aplikasi CAT gratisan..\",\"status\":\"on\"}');
INSERT INTO cmf_setting VALUES ('100005', '3', 'AceMaster', '0', '5', '{\"theme_path\":\"acemaster\",\"keterangan\":\"ACE Admin versi Original\",\"status\":\"on\"}');
INSERT INTO cmf_setting VALUES ('100006', '3', 'Ace Top Menu', '0', '6', '{\"theme_path\":\"acetopmenu\",\"keterangan\":\"AceAdmin Versi Menu di TopBar\",\"status\":\"on\"}');
INSERT INTO cmf_setting VALUES ('100007', '3', 'Metis Admin', '0', '7', '{\"theme_path\":\"metisadmin\",\"keterangan\":\"Metis Admin versi Dantech, sudah ada peringkasan\",\"status\":\"on\"}');
INSERT INTO cmf_setting VALUES ('100008', '3', 'Admin Gentelella', '0', '8', '{\"theme_path\":\"admingentelella\",\"keterangan\":\"Themes Admin Assesment\",\"status\":\"on\"}');
INSERT INTO cmf_setting VALUES ('200001', '4', 'Theme Default', '0', '1', '{\"theme_path\":\"web\",\"keterangan\":\"Theme Deafult CMS ini\",\"status\":\"on\",\"header_opsi\":{\"height\":\"75px\",\"margin_top\":\"0px\",\"margin_bottom\":\"0px\",\"padding_top\":\"10px\",\"padding_bottom\":\"0px\"}}');
INSERT INTO cmf_setting VALUES ('200002', '4', 'Theme Alternatif', '0', '2', '{\"theme_path\":\"web_alt\",\"keterangan\":\"Theme Alternatif CMS ini\",\"status\":\"on\"}');
INSERT INTO cmf_setting VALUES ('200003', '4', 'Theme reflux', '0', '3', '{\"theme_path\":\"themereflux\",\"keterangan\":\"Themes Web Costume Reflux\",\"status\":\"on\"}');
INSERT INTO cmf_setting VALUES ('400001', '5', 'infoslider', '0', '0', '{\"lokasi_widget\":\"sidebar\",\"keterangan\":\"Widget anu\"}');
INSERT INTO cmf_setting VALUES ('400002', '5', 'artikel_slider', '0', '0', '{\"lokasi_widget\":\"topbar\",\"keterangan\":\"Menampilkan artikel terpilih dalam bentuk slider, biasanya setiap kanal ada slider artikelnya di bagian atas\",\"custom\":\"ya\"}');
INSERT INTO cmf_setting VALUES ('400003', '5', 'artikel_lastten', '0', '0', '{\"lokasi_widget\":\"mainbar\",\"keterangan\":\"Menampilkan 10 artikel terbaru, dalam bentuk judul dan potongan paragraf pertama\"}');
INSERT INTO cmf_setting VALUES ('400004', '5', 'bukutamu', '0', '0', '{\"lokasi_widget\":\"mainbar\",\"keterangan\":\"Menampilkan komponen/rubrik bukutamu di kanal\"}');
INSERT INTO cmf_setting VALUES ('400005', '5', 'galeri', '0', '0', '{\"lokasi_widget\":\"mainbar\",\"keterangan\":\"Menampilkan komponen galeri di kanal\"}');
INSERT INTO cmf_setting VALUES ('400006', '5', 'banner_slider', '0', '0', '{\"lokasi_widget\":\"sidebar\",\"keterangan\":\"Menampilkan gambar di kanal\"}');
INSERT INTO cmf_setting VALUES ('400007', '5', 'pengumuman_samping', '0', '0', '{\"lokasi_widget\":\"sidebar\",\"keterangan\":\"Untuk menampilkan pengumuman di sidebar\"}');
INSERT INTO cmf_setting VALUES ('400008', '5', 'agenda', '0', '0', '{\"lokasi_widget\":\"mainbar\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('400009', '5', 'direktori', '0', '0', '{\"lokasi_widget\":\"sidebar\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('400010', '5', 'daftar', '0', '0', '{\"lokasi_widget\":\"sidebar\",\"keterangan\":\"Type Direktori Langsung\"}');
INSERT INTO cmf_setting VALUES ('400011', '5', 'banner_main', '0', '0', '{\"lokasi_widget\":\"mainbar\",\"keterangan\":\"Banner Slider untuk ditampilkan di Mainbar\"}');
INSERT INTO cmf_setting VALUES ('400012', '5', 'statis', '0', '0', '{\"lokasi_widget\":\"topbar\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('400013', '5', 'index_tutorial', '0', '0', '{\"lokasi_widget\":\"topbar\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('400014', '5', 'statis_main', '0', '0', '{\"lokasi_widget\":\"mainbar\",\"keterangan\":\"bg\"}');
INSERT INTO cmf_setting VALUES ('400015', '5', 'commented', '0', '0', '{\"lokasi_widget\":\"sidebar\",\"keterangan\":\"df\"}');
INSERT INTO cmf_setting VALUES ('400016', '5', 'hl_slider', '0', '0', '{\"lokasi_widget\":\"mainbar\",\"keterangan\":\"Widget anu\",\"custom\":\"ya\"}');
INSERT INTO cmf_setting VALUES ('400017', '5', 'calendar', '0', '0', '{\"lokasi_widget\":\"sidebar\",\"keterangan\":\"Kalender agenda dari Bang Opik\"}');
INSERT INTO cmf_setting VALUES ('400018', '5', 'last_artikel', '0', '0', '{\"lokasi_widget\":\"mainbar\"}');
INSERT INTO cmf_setting VALUES ('400019', '5', 'polling_samping', '0', '0', '{\"lokasi_widget\":\"sidebar\",\"keterangan\":\"Form Polling Berjalan\"}');
INSERT INTO cmf_setting VALUES ('900001', '6', 'Humas', '0', '5', 'Assessment');
INSERT INTO cmf_setting VALUES ('1000000', '7', 'Depan', '0', '0', '{\"path_kanal\":\"depan\",\"path_root\":\"depan\",\"status\":\"on\",\"keterangan\":\"Halaman Default\",\"tipe\":\"biasa\",\"theme\":\"themereflux\"}');
INSERT INTO cmf_setting VALUES ('1000002', '8', 'Informasi', '0', '1', '{\"path_kanal\":\"informasi\",\"path_root\":\"informasi\",\"status\":\"on\",\"keterangan\":\"Informasi Organisasi\",\"tipe\":\"biasa\",\"theme\":\"web_alt\"}');
INSERT INTO cmf_setting VALUES ('2000001', '9', 'Informasi Umum', '0', '1', '{\"id_kanal\":\"1000002\",\"komponen\":\"artikel\",\"keterangan\":\"Informasi Umum\",\"paging_index\":\"5\",\"paging_arsip\":\"5\",\"status\":\"publish\"}');
INSERT INTO cmf_setting VALUES ('2000002', '9', 'Informasi Perguruan', '0', '2', '{\"id_kanal\":\"1000002\",\"komponen\":\"artikel\",\"keterangan\":\"Informasi Perguruan\",\"paging_index\":\"5\",\"paging_arsip\":\"5\",\"status\":\"publish\"}');
INSERT INTO cmf_setting VALUES ('2000003', '9', 'Artikel / Editorial', '0', '3', '{\"id_kanal\":\"1000002\",\"komponen\":\"artikel\",\"keterangan\":\"Artikel / Editorial\",\"paging_index\":\"5\",\"paging_arsip\":\"5\",\"status\":\"publish\"}');
INSERT INTO cmf_setting VALUES ('3000001', '10', 'assets/media/upload/bawaan/logo_ktng.gif', '147', '0', '{\"id_kanal\":\"1000000\",\"judul_header\":\"UPT PENILAIAN KOMPETENSI\",\"sub_judul\":\"BKPSDM KOTA TANGERANG\",\"tinggi_header\":\"80px\",\"margin_top\":\"10px\",\"margin_bottom\":\"10px\",\"padding_top\":\"10px\",\"padding_bottom\":\"10px\"}');
INSERT INTO cmf_setting VALUES ('3000003', '10', 'assets/media/upload/bawaan/logo_ktng.gif', '147', '0', '{\"id_kanal\":\"1000002\",\"judul_header\":\"UPT Penilaian Kompetensi\",\"sub_judul\":\"BKPSDM Kota Tangerang\",\"tinggi_header\":\"80px\",\"margin_top\":\"10px\",\"margin_bottom\":\"10px\",\"padding_top\":\"10px\",\"padding_bottom\":\"10px\"}');
INSERT INTO cmf_setting VALUES ('10000001', '12', 'Dashboard', '0', '1', '{\"path_menu\":\"module/cmshome/dashboard/webadmin\",\"icon_menu\":\"dashboard\",\"keterangan\":\"999\"}');
INSERT INTO cmf_setting VALUES ('10000002', '12', 'Konten', '0', '37', '{\"path_menu\":\"-\",\"icon_menu\":\"puzzle-piece\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('10000003', '12', 'Komentar', '0', '38', '{\"path_menu\":\"module/cmskonten/comment\",\"icon_menu\":\"comments\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('10000004', '12', 'Kanal', '0', '44', '{\"path_menu\":\"module/cmskanal/kanal\",\"icon_menu\":\"cubes\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('10000005', '12', 'Administrasi', '0', '45', '{\"path_menu\":\"-\",\"icon_menu\":\"tasks\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('10000006', '12', 'Tools', '0', '46', '{\"path_menu\":\"-\",\"icon_menu\":\"wrench\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('10000007', '12', 'Ganti password', '0', '47', '{\"path_menu\":\"module/cmsadmin/user/ganti_password\",\"icon_menu\":\"lock\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('10000008', '12', 'Pengguna', '10000005', '1', '{\"path_menu\":\"module/cmsadmin/user\",\"icon_menu\":\"user\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('10000009', '12', 'Menu Pengguna', '10000005', '2', '{\"path_menu\":\"module/cmsadmin/menu/menu_grup\",\"icon_menu\":\"gear\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('10000010', '12', 'Menu', '10000005', '3', '{\"path_menu\":\"module/cmsadmin/menu\",\"icon_menu\":\"gears\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('10000011', '12', 'Grup pengguna', '10000005', '4', '{\"path_menu\":\"module/cmsadmin/user/grup\",\"icon_menu\":\"users\",\"keterangan\":\"--\"}');
INSERT INTO cmf_setting VALUES ('10000012', '12', 'Theme Web', '10000006', '1', '{\"path_menu\":\"module/cmsadmin/theme\",\"icon_menu\":\"object-group\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('10000013', '12', 'Theme Admin', '10000006', '2', '{\"path_menu\":\"module/cmsadmin/theme/admin\",\"icon_menu\":\"recycle\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('10000014', '12', 'Widget', '10000006', '3', '{\"path_menu\":\"module/cmsadmin/widget\",\"icon_menu\":\"clipboard\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('10000015', '12', 'Penulis berita', '10000005', '5', '{\"path_menu\":\"module/cmsadmin/penulis\",\"icon_menu\":\"pencil\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('10000016', '12', 'Asset Manager', '10000006', '4', '{\"path_menu\":\"module/cmskonten/fmanager\",\"icon_menu\":\"file\",\"keterangan\":\"Pengelola File Assets\"}');
INSERT INTO cmf_setting VALUES ('10000017', '12', 'Halaman statis', '10000002', '1', '{\"path_menu\":\"module/cmskonten/statis\",\"icon_menu\":\"check\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('10000018', '12', 'Artikel', '10000002', '2', '{\"path_menu\":\"module/cmskonten/artikel\",\"icon_menu\":\"check\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('10000019', '12', 'Galeri', '10000002', '3', '{\"path_menu\":\"module/cmskonten/galeri\",\"icon_menu\":\"check\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('10000020', '12', 'Direktori', '10000002', '4', '{\"path_menu\":\"module/cmskonten/direktori\",\"icon_menu\":\"check\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('10000021', '12', 'Polling', '10000002', '5', '{\"path_menu\":\"module/cmskonten/polling\",\"icon_menu\":\"check\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('10000022', '12', 'Agenda', '10000002', '6', '{\"path_menu\":\"module/cmskonten/agenda\",\"icon_menu\":\"check\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('10000023', '12', 'Banner', '10000002', '7', '{\"path_menu\":\"module/cmskonten/banner\",\"icon_menu\":\"check\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('10000024', '12', 'Sekilas Info', '10000002', '8', '{\"path_menu\":\"module/cmskonten/sekilasinfo\",\"icon_menu\":\"check\",\"keterangan\":\"-\"}');
INSERT INTO cmf_setting VALUES ('10000026', '12', 'Referensi', '0', '32', '{\"path_menu\":\"-\",\"icon_menu\":\"tasks\",\"keterangan\":\"Master Data Referensi\"}');
INSERT INTO cmf_setting VALUES ('10000028', '12', 'Master Alat Tes', '10000026', '1', '{\"path_menu\":\"-\",\"icon_menu\":\"book\",\"keterangan\":\"Materi Alat Tes Psikometri\"}');
INSERT INTO cmf_setting VALUES ('10000042', '12', 'Kegiatan', '10000026', '13', '{\"path_menu\":\"module/appassesment/kegiatan\",\"icon_menu\":\"tasks\",\"keterangan\":\"Master Kegiatan UPT Penkom\"}');
INSERT INTO cmf_setting VALUES ('10000043', '12', 'Alat Tes', '10000028', '1', '{\"path_menu\":\"module/appassesment/materi\",\"icon_menu\":\"book\",\"keterangan\":\"Master Materi Alat Tes\"}');
INSERT INTO cmf_setting VALUES ('10000044', '12', 'PAPI Kostick', '10000028', '2', '{\"path_menu\":\"module/appassesment/soal/papi\",\"icon_menu\":\"file-o\",\"keterangan\":\"Materi Alat Tes PAPI Kostick\"}');
INSERT INTO cmf_setting VALUES ('10000045', '12', 'Situational Judge', '10000028', '3', '{\"path_menu\":\"module/appassesment/soal/sjt\",\"icon_menu\":\"file-o\",\"keterangan\":\"Materi Alat Tes SJT\"}');
INSERT INTO cmf_setting VALUES ('10000046', '12', 'Analisa Kasus', '10000028', '4', '{\"path_menu\":\"module/appassesment/soal/ankas\",\"icon_menu\":\"file-o\",\"keterangan\":\"Materi Alat Tes Analisa Kasus\"}');
INSERT INTO cmf_setting VALUES ('10000047', '12', 'APM Set-1', '10000028', '5', '{\"path_menu\":\"module/appassesment/soal/apm_satu\",\"icon_menu\":\"file-o\",\"keterangan\":\"Materi Alat Tes APM Set-1\"}');
INSERT INTO cmf_setting VALUES ('10000048', '12', 'APM Set-2', '10000028', '6', '{\"path_menu\":\"module/appassesment/soal/apm_dua\",\"icon_menu\":\"file-o\",\"keterangan\":\"Materi Alat Tes APM Set-2\"}');
INSERT INTO cmf_setting VALUES ('10000058', '12', 'Psikometri', '0', '12', '{\"path_menu\":\"module/appujian/ujian\",\"icon_menu\":\"dashboard\",\"keterangan\":\"Halaman Depan Peserta\"}');
INSERT INTO cmf_setting VALUES ('10000066', '12', 'APM Set - 1', '0', '14', '{\"path_menu\":\"module/appujian/ujian/apm_satu\",\"icon_menu\":\"list\",\"keterangan\":\"Ujian Psikometri APM Set 1\"}');
INSERT INTO cmf_setting VALUES ('10000067', '12', 'PAPI Kostick', '0', '30', '{\"path_menu\":\"module/appujian/ujian/papi\",\"icon_menu\":\"list\",\"keterangan\":\"Ujian Psikometri PAPI\"}');
INSERT INTO cmf_setting VALUES ('10000068', '12', 'Analisa Kasus', '0', '28', '{\"path_menu\":\"module/appujian/ujian/ankas\",\"icon_menu\":\"list\",\"keterangan\":\"Ujian Psikometri Analisa Kasus\"}');
INSERT INTO cmf_setting VALUES ('10000071', '12', 'SJT', '0', '16', '{\"path_menu\":\"module/appujian/ujian/sjt\",\"icon_menu\":\"list\",\"keterangan\":\"Ujian Situational Judge Test\"}');
INSERT INTO cmf_setting VALUES ('10000072', '12', 'APM Set - 2', '0', '15', '{\"path_menu\":\"module/appujian/ujian/apm_dua\",\"icon_menu\":\"list\",\"keterangan\":\"Ujian Psikometri APM Set 2\"}');
INSERT INTO cmf_setting VALUES ('10000077', '12', 'Function UI', '10000026', '4', '{\"path_menu\":\"-\",\"icon_menu\":\"gear\",\"keterangan\":\"Tombol fungsi bersama\"}');
INSERT INTO cmf_setting VALUES ('10000078', '12', 'Surat Menyurat', '10000026', '10', '{\"path_menu\":\"-\",\"icon_menu\":\"envelope\",\"keterangan\":\"Surat Menyurat Kegiatan\"}');
INSERT INTO cmf_setting VALUES ('10000079', '12', 'Kelembagaan', '10000026', '11', '{\"path_menu\":\"-\",\"icon_menu\":\"sitemap\",\"keterangan\":\"Referensi Data Pegawai BKPSDM\"}');
INSERT INTO cmf_setting VALUES ('10000080', '12', 'Surat Keluar', '10000078', '1', '{\"path_menu\":\"module/appassesment/surat\",\"icon_menu\":\"sign-out\",\"keterangan\":\"Surat Keluar\"}');
INSERT INTO cmf_setting VALUES ('10000081', '12', 'Surat Masuk', '10000078', '2', '{\"path_menu\":\"-\",\"icon_menu\":\"sign-in\",\"keterangan\":\"Surat Masuk\"}');
INSERT INTO cmf_setting VALUES ('10000082', '12', 'Master Data', '10000026', '12', '{\"path_menu\":\"-\",\"icon_menu\":\"database\",\"keterangan\":\"Master Data\"}');
INSERT INTO cmf_setting VALUES ('10000083', '12', 'P I C', '10000079', '1', '{\"path_menu\":\"module/appassesment/lembaga\",\"icon_menu\":\"users\",\"keterangan\":\"Personil Assessment Center\"}');
INSERT INTO cmf_setting VALUES ('10000084', '12', 'Data SIMASN', '10000079', '2', '{\"path_menu\":\"module/appassesment/simasn\",\"icon_menu\":\"tv\",\"keterangan\":\"Database Kepegawaian SIMASN\"}');
INSERT INTO cmf_setting VALUES ('10000085', '12', 'Master Peserta', '10000082', '1', '{\"path_menu\":\"module/appassesment/master_data\",\"icon_menu\":\"database\",\"keterangan\":\"Master Data Peserta\"}');
INSERT INTO cmf_setting VALUES ('10000086', '12', 'Import Hasil', '10000077', '1', '{\"path_menu\":\"module/appassesment/ImportHasil\",\"icon_menu\":\"upload\",\"keterangan\":\"Import Hasil Ukom\"}');
INSERT INTO cmf_setting VALUES ('10000087', '12', 'Import Peserta', '10000077', '2', '{\"path_menu\":\"module/appassesment/ImportPeserta\",\"icon_menu\":\"upload\",\"keterangan\":\"Import Data peserta\"}');
INSERT INTO cmf_setting VALUES ('10000088', '12', 'Sync Button', '10000077', '3', '{\"path_menu\":\"module/appassesment/sync\",\"icon_menu\":\"random\",\"keterangan\":\"Fungsi query dan tombol\"}');
INSERT INTO cmf_setting VALUES ('10000089', '12', 'Pra - Assessment', '0', '33', '{\"path_menu\":\"-\",\"icon_menu\":\"calendar\",\"keterangan\":\"Persiapan Assessment\"}');
INSERT INTO cmf_setting VALUES ('10000090', '12', 'Pelaksanaan', '0', '34', '{\"path_menu\":\"-\",\"icon_menu\":\"play-circle\",\"keterangan\":\"Pelaksanaan Assessment\"}');
INSERT INTO cmf_setting VALUES ('10000091', '12', 'Penilaian v1.1', '0', '35', '{\"path_menu\":\"-\",\"icon_menu\":\"edit\",\"keterangan\":\"Penilaian Assessment\"}');
INSERT INTO cmf_setting VALUES ('10000092', '12', 'Pantau Registrasi', '10000089', '1', '{\"path_menu\":\"module/appassesment/pantau_reg\",\"icon_menu\":\"camera\",\"keterangan\":\"Pantau Registrasi Khusus Office\"}');
INSERT INTO cmf_setting VALUES ('10000093', '12', 'Pantau Ujian', '10000090', '1', '{\"path_menu\":\"module/appujian/pantau_ujian\",\"icon_menu\":\"camera\",\"keterangan\":\"Pemantauan Pelaksanaan Ujian\"}');
INSERT INTO cmf_setting VALUES ('10000094', '12', 'LGD & Wawancara', '10000090', '2', '{\"path_menu\":\"module/appassesment/jadwal_peserta\",\"icon_menu\":\"book\",\"keterangan\":\"Jadwal LGD dan Wawancara Peserta\"}');
INSERT INTO cmf_setting VALUES ('10000095', '12', 'Buat Jadwal LGD & WCR', '10000089', '2', '{\"path_menu\":\"module/appassesment/jadwal_peserta/create_jadwal\",\"icon_menu\":\"calendar-check-o\",\"keterangan\":\"Buat Jadwal LGD dan Wawancara\"}');
INSERT INTO cmf_setting VALUES ('10000096', '12', 'Uji Kompetensi', '10000091', '1', '{\"path_menu\":\"module/appassesment/peserta/peserta_kota\",\"icon_menu\":\"tags\",\"keterangan\":\"Daftar Penilaian Peserta Assesment\"}');
INSERT INTO cmf_setting VALUES ('10000097', '12', 'Kerjasama', '10000091', '2', '{\"path_menu\":\"module/appassesment/peserta/peserta_kerjasama\",\"icon_menu\":\"random\",\"keterangan\":\"Daftar Peserta Assesment Kerjasama\"}');
INSERT INTO cmf_setting VALUES ('10000098', '12', 'Penjamin Mutu', '0', '36', '{\"path_menu\":\"-\",\"icon_menu\":\"certificate\",\"keterangan\":\"Gambaran Potensi dan Jaminan Mutu\"}');
INSERT INTO cmf_setting VALUES ('10000099', '12', 'Lap. Hasil', '10000098', '1', '{\"path_menu\":\"module/appassesment/external/\",\"icon_menu\":\"link\",\"keterangan\":\"Laporan Hasil dan Jaminan Mutu\"}');
INSERT INTO cmf_setting VALUES ('10000100', '12', 'CFIT Series', '0', '24', '{\"path_menu\":\"module/appujian/ujian/contoh_cfit_satu\",\"icon_menu\":\"list\",\"keterangan\":\"Ujian Psikometri CFIT Subtes Satu\"}');
INSERT INTO cmf_setting VALUES ('10000101', '12', 'CFIT Classifi', '0', '25', '{\"path_menu\":\"module/appujian/ujian/contoh_cfit_dua\",\"icon_menu\":\"list\",\"keterangan\":\"Ujian Psikometri CFIT Subtes Dua\"}');
INSERT INTO cmf_setting VALUES ('10000102', '12', 'CFIT Matrices', '0', '26', '{\"path_menu\":\"module/appujian/ujian/contoh_cfit_tiga\",\"icon_menu\":\"list\",\"keterangan\":\"Ujian Psikometri CFIT Subtes Tiga\"}');
INSERT INTO cmf_setting VALUES ('10000103', '12', 'CFIT Topology', '0', '27', '{\"path_menu\":\"module/appujian/ujian/contoh_cfit_empat\",\"icon_menu\":\"list\",\"keterangan\":\"Ujian Psikometri CFIT Subtes Empat\"}');
INSERT INTO cmf_setting VALUES ('10000104', '12', 'CFIT', '10000028', '7', '{\"path_menu\":\"module/appassesment/soal/cfit\",\"icon_menu\":\"file-o\",\"keterangan\":\"Materi Alat Tes CFIT\"}');
INSERT INTO cmf_setting VALUES ('10000105', '12', 'Formula', '10000026', '14', '{\"path_menu\":\"module/appassesment/formula\",\"icon_menu\":\"calculator\",\"keterangan\":\"Formula Bobot Penilaian\"}');
INSERT INTO cmf_setting VALUES ('10000107', '12', 'Dashboard', '0', '2', '{\"path_menu\":\"module/appassesment/dashboard\",\"icon_menu\":\"dashboard\",\"keterangan\":\"Dashboard Penyelenggaraan Assessment\"}');
INSERT INTO cmf_setting VALUES ('10000109', '12', 'Hasil Penilaian', '10000107', '4', '{\"path_menu\":\"-\",\"icon_menu\":\"check\",\"keterangan\":\"Dashboard Hasil Penilaian Assessment\"}');
INSERT INTO cmf_setting VALUES ('10000110', '12', 'Internal', '10000109', '1', '{\"path_menu\":\"module/appassesment/dashboard/hasil_internal\",\"icon_menu\":\"sign-in\",\"keterangan\":\"Dashboard Hasil Penilaian Internal\"}');
INSERT INTO cmf_setting VALUES ('10000111', '12', 'Kerjasama', '10000109', '2', '{\"path_menu\":\"-\",\"icon_menu\":\"external-link\",\"keterangan\":\"Dashboard Hasil Penilaian Kerjasama\"}');
INSERT INTO cmf_setting VALUES ('10000112', '12', 'Penyelenggaraan', '10000107', '2', '{\"path_menu\":\"module/appassesment/dashboard\",\"icon_menu\":\"check\",\"keterangan\":\"Dashboard Penyelenggaraan Assessment\"}');
INSERT INTO cmf_setting VALUES ('10000113', '12', 'Kuisioner', '10000107', '3', '{\"path_menu\":\"module/appassesment/dashboard/kuisi\",\"icon_menu\":\"check\",\"keterangan\":\"Hasil Kuisioner Penilaian Kompetensi\"}');
INSERT INTO cmf_setting VALUES ('10000114', '12', 'Link Arsip', '10000026', '15', '{\"path_menu\":\"module/appassesment/arsip\",\"icon_menu\":\"link\",\"keterangan\":\"Link Dokumen Arsip\"}');
INSERT INTO cmf_setting VALUES ('10000115', '12', 'Analisa Kasus', '0', '29', '{\"path_menu\":\"module/appujian/ujian_jptp/ankas_jptp\",\"icon_menu\":\"list\",\"keterangan\":\"Soal Analisa Kasus JPTP\"}');
INSERT INTO cmf_setting VALUES ('10000116', '12', 'Psikometri', '0', '13', '{\"path_menu\":\"module/appujian/ujian_jptp\",\"icon_menu\":\"dashboard\",\"keterangan\":\"Halaman Depan Peserta JPTP\"}');
INSERT INTO cmf_setting VALUES ('11000001', '13', 'webadmin', '0', '0', '{\"section_name\":\"klasik\",\"back_office\":\"admin\",\"keterangan\":\"-\",\"judul_app\":\"AC - BKKBN\",\"sub_judul\":\"Badan Kependudukan dan Keluarga Berencana Nasional\",\"alertafter\":\"600000\",\"logoutafter\":\"600000\"}');
INSERT INTO cmf_setting VALUES ('11000002', '13', 'Assessor SDM', '0', '0', '{\"section_name\":\"adminlte\",\"back_office\":\"admin\",\"keterangan\":\"Admin Assessment\",\"judul_app\":\"AC - BKKBN\",\"sub_judul\":\"Badan Kependudukan dan Keluarga Berencana Nasional\",\"alertafter\":\"600000\",\"logoutafter\":\"600000\"}');
INSERT INTO cmf_setting VALUES ('11000003', '13', 'Peserta', '0', '0', '{\"section_name\":\"cat_master\",\"back_office\":\"admin\",\"keterangan\":\"Peserta Ujian\",\"judul_app\":\"AC - BKKBN\",\"sub_judul\":\"Badan Kependudukan dan Keluarga Berencana Nasional\",\"alertafter\":\"600000\",\"logoutafter\":\"600000\"}');
INSERT INTO cmf_setting VALUES ('11000004', '13', 'Office Assessment', '0', '0', '{\"section_name\":\"adminlte\",\"back_office\":\"admin\",\"keterangan\":\"Office Assessment\",\"judul_app\":\"AC - BKKBN\",\"sub_judul\":\"Badan Kependudukan dan Keluarga Berencana Nasional\",\"alertafter\":\"600000\",\"logoutafter\":\"600000\"}');
INSERT INTO cmf_setting VALUES ('11000005', '13', 'AdminTop', '0', '0', '{\"section_name\":\"adminlte\",\"back_office\":\"admin\",\"keterangan\":\"Admin dari segala Admin.. Adminn....\",\"judul_app\":\"AC - BKKBN\",\"sub_judul\":\"Badan Kependudukan dan Keluarga Berencana Nasional\",\"alertafter\":\"600000\",\"logoutafter\":\"600000\"}');
INSERT INTO cmf_setting VALUES ('12000001', '14', '', '0', '0', '{\"id_menu\":\"10000001\",\"group_id\":\"11000001\"}');
INSERT INTO cmf_setting VALUES ('12000002', '14', '', '0', '0', '{\"id_menu\":\"10000002\",\"group_id\":\"11000001\"}');
INSERT INTO cmf_setting VALUES ('12000003', '14', '', '0', '0', '{\"id_menu\":\"10000003\",\"group_id\":\"11000001\"}');
INSERT INTO cmf_setting VALUES ('12000004', '14', '', '0', '0', '{\"id_menu\":\"10000004\",\"group_id\":\"11000001\"}');
INSERT INTO cmf_setting VALUES ('12000005', '14', '', '0', '0', '{\"id_menu\":\"10000005\",\"group_id\":\"11000001\"}');
INSERT INTO cmf_setting VALUES ('12000006', '14', '', '0', '0', '{\"id_menu\":\"10000006\",\"group_id\":\"11000001\"}');
INSERT INTO cmf_setting VALUES ('12000007', '14', '', '0', '0', '{\"id_menu\":\"10000007\",\"group_id\":\"11000001\"}');
INSERT INTO cmf_setting VALUES ('12000008', '14', '', '0', '0', '{\"id_menu\":\"10000008\",\"group_id\":\"11000001\"}');
INSERT INTO cmf_setting VALUES ('12000009', '14', '', '0', '0', '{\"id_menu\":\"10000009\",\"group_id\":\"11000001\"}');
INSERT INTO cmf_setting VALUES ('12000010', '14', '', '0', '0', '{\"id_menu\":\"10000010\",\"group_id\":\"11000001\"}');
INSERT INTO cmf_setting VALUES ('12000011', '14', '', '0', '0', '{\"id_menu\":\"10000011\",\"group_id\":\"11000001\"}');
INSERT INTO cmf_setting VALUES ('12000012', '14', '', '0', '0', '{\"id_menu\":\"10000012\",\"group_id\":\"11000001\"}');
INSERT INTO cmf_setting VALUES ('12000013', '14', '', '0', '0', '{\"id_menu\":\"10000013\",\"group_id\":\"11000001\"}');
INSERT INTO cmf_setting VALUES ('12000014', '14', '', '0', '0', '{\"id_menu\":\"10000014\",\"group_id\":\"11000001\"}');
INSERT INTO cmf_setting VALUES ('12000015', '14', '', '0', '0', '{\"id_menu\":\"10000015\",\"group_id\":\"11000001\"}');
INSERT INTO cmf_setting VALUES ('12000016', '14', '', '0', '0', '{\"id_menu\":\"10000016\",\"group_id\":\"11000001\"}');
INSERT INTO cmf_setting VALUES ('12000017', '14', '', '0', '0', '{\"id_menu\":\"10000017\",\"group_id\":\"11000001\"}');
INSERT INTO cmf_setting VALUES ('12000018', '14', '', '0', '0', '{\"id_menu\":\"10000018\",\"group_id\":\"11000001\"}');
INSERT INTO cmf_setting VALUES ('12000019', '14', '', '0', '0', '{\"id_menu\":\"10000019\",\"group_id\":\"11000001\"}');
INSERT INTO cmf_setting VALUES ('12000020', '14', '', '0', '0', '{\"id_menu\":\"10000020\",\"group_id\":\"11000001\"}');
INSERT INTO cmf_setting VALUES ('12000021', '14', '', '0', '0', '{\"id_menu\":\"10000021\",\"group_id\":\"11000001\"}');
INSERT INTO cmf_setting VALUES ('12000022', '14', '', '0', '0', '{\"id_menu\":\"10000022\",\"group_id\":\"11000001\"}');
INSERT INTO cmf_setting VALUES ('12000023', '14', '', '0', '0', '{\"id_menu\":\"10000023\",\"group_id\":\"11000001\"}');
INSERT INTO cmf_setting VALUES ('12000024', '14', '', '0', '0', '{\"id_menu\":\"10000024\",\"group_id\":\"11000001\"}');
INSERT INTO cmf_setting VALUES ('12000048', '14', '', '0', '0', '{\"id_menu\":\"10000007\",\"group_id\":\"11000002\"}');
INSERT INTO cmf_setting VALUES ('12000075', '14', '', '0', '0', '{\"id_menu\":\"10000058\",\"group_id\":\"11000003\"}');
INSERT INTO cmf_setting VALUES ('12000091', '14', '', '0', '0', '{\"id_menu\":\"10000007\",\"group_id\":\"11000004\"}');
INSERT INTO cmf_setting VALUES ('12000118', '14', '', '0', '0', '{\"id_menu\":\"10000007\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000143', '14', '', '0', '0', '{\"id_menu\":\"10000067\",\"group_id\":\"11000003\"}');
INSERT INTO cmf_setting VALUES ('12000161', '14', '', '0', '0', '{\"id_menu\":\"10000026\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000162', '14', '', '0', '0', '{\"id_menu\":\"10000028\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000163', '14', '', '0', '0', '{\"id_menu\":\"10000043\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000164', '14', '', '0', '0', '{\"id_menu\":\"10000044\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000165', '14', '', '0', '0', '{\"id_menu\":\"10000045\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000166', '14', '', '0', '0', '{\"id_menu\":\"10000046\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000167', '14', '', '0', '0', '{\"id_menu\":\"10000047\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000168', '14', '', '0', '0', '{\"id_menu\":\"10000048\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000169', '14', '', '0', '0', '{\"id_menu\":\"10000077\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000170', '14', '', '0', '0', '{\"id_menu\":\"10000078\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000171', '14', '', '0', '0', '{\"id_menu\":\"10000080\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000172', '14', '', '0', '0', '{\"id_menu\":\"10000081\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000173', '14', '', '0', '0', '{\"id_menu\":\"10000079\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000174', '14', '', '0', '0', '{\"id_menu\":\"10000083\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000175', '14', '', '0', '0', '{\"id_menu\":\"10000084\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000176', '14', '', '0', '0', '{\"id_menu\":\"10000082\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000177', '14', '', '0', '0', '{\"id_menu\":\"10000085\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000178', '14', '', '0', '0', '{\"id_menu\":\"10000042\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000179', '14', '', '0', '0', '{\"id_menu\":\"10000086\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000180', '14', '', '0', '0', '{\"id_menu\":\"10000087\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000181', '14', '', '0', '0', '{\"id_menu\":\"10000088\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000182', '14', '', '0', '0', '{\"id_menu\":\"10000089\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000183', '14', '', '0', '0', '{\"id_menu\":\"10000090\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000184', '14', '', '0', '0', '{\"id_menu\":\"10000092\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000185', '14', '', '0', '0', '{\"id_menu\":\"10000093\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000186', '14', '', '0', '0', '{\"id_menu\":\"10000094\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000187', '14', '', '0', '0', '{\"id_menu\":\"10000091\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000189', '14', '', '0', '0', '{\"id_menu\":\"10000096\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000191', '14', '', '0', '0', '{\"id_menu\":\"10000005\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000192', '14', '', '0', '0', '{\"id_menu\":\"10000008\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000193', '14', '', '0', '0', '{\"id_menu\":\"10000006\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000194', '14', '', '0', '0', '{\"id_menu\":\"10000016\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000195', '14', '', '0', '0', '{\"id_menu\":\"10000098\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000196', '14', '', '0', '0', '{\"id_menu\":\"10000099\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000198', '14', '', '0', '0', '{\"id_menu\":\"10000104\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000202', '14', '', '0', '0', '{\"id_menu\":\"10000089\",\"group_id\":\"11000002\"}');
INSERT INTO cmf_setting VALUES ('12000203', '14', '', '0', '0', '{\"id_menu\":\"10000095\",\"group_id\":\"11000002\"}');
INSERT INTO cmf_setting VALUES ('12000204', '14', '', '0', '0', '{\"id_menu\":\"10000090\",\"group_id\":\"11000002\"}');
INSERT INTO cmf_setting VALUES ('12000205', '14', '', '0', '0', '{\"id_menu\":\"10000093\",\"group_id\":\"11000002\"}');
INSERT INTO cmf_setting VALUES ('12000206', '14', '', '0', '0', '{\"id_menu\":\"10000094\",\"group_id\":\"11000002\"}');
INSERT INTO cmf_setting VALUES ('12000207', '14', '', '0', '0', '{\"id_menu\":\"10000091\",\"group_id\":\"11000002\"}');
INSERT INTO cmf_setting VALUES ('12000208', '14', '', '0', '0', '{\"id_menu\":\"10000096\",\"group_id\":\"11000002\"}');
INSERT INTO cmf_setting VALUES ('12000209', '14', '', '0', '0', '{\"id_menu\":\"10000097\",\"group_id\":\"11000002\"}');
INSERT INTO cmf_setting VALUES ('12000210', '14', '', '0', '0', '{\"id_menu\":\"10000098\",\"group_id\":\"11000002\"}');
INSERT INTO cmf_setting VALUES ('12000211', '14', '', '0', '0', '{\"id_menu\":\"10000099\",\"group_id\":\"11000002\"}');
INSERT INTO cmf_setting VALUES ('12000212', '14', '', '0', '0', '{\"id_menu\":\"10000006\",\"group_id\":\"11000002\"}');
INSERT INTO cmf_setting VALUES ('12000213', '14', '', '0', '0', '{\"id_menu\":\"10000016\",\"group_id\":\"11000002\"}');
INSERT INTO cmf_setting VALUES ('12000214', '14', '', '0', '0', '{\"id_menu\":\"10000105\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000218', '14', '', '0', '0', '{\"id_menu\":\"10000089\",\"group_id\":\"11000004\"}');
INSERT INTO cmf_setting VALUES ('12000219', '14', '', '0', '0', '{\"id_menu\":\"10000092\",\"group_id\":\"11000004\"}');
INSERT INTO cmf_setting VALUES ('12000220', '14', '', '0', '0', '{\"id_menu\":\"10000107\",\"group_id\":\"11000002\"}');
INSERT INTO cmf_setting VALUES ('12000223', '14', '', '0', '0', '{\"id_menu\":\"10000107\",\"group_id\":\"11000004\"}');
INSERT INTO cmf_setting VALUES ('12000226', '14', '', '0', '0', '{\"id_menu\":\"10000107\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000227', '14', '', '0', '0', '{\"id_menu\":\"10000109\",\"group_id\":\"11000002\"}');
INSERT INTO cmf_setting VALUES ('12000228', '14', '', '0', '0', '{\"id_menu\":\"10000110\",\"group_id\":\"11000002\"}');
INSERT INTO cmf_setting VALUES ('12000229', '14', '', '0', '0', '{\"id_menu\":\"10000111\",\"group_id\":\"11000002\"}');
INSERT INTO cmf_setting VALUES ('12000230', '14', '', '0', '0', '{\"id_menu\":\"10000109\",\"group_id\":\"11000004\"}');
INSERT INTO cmf_setting VALUES ('12000231', '14', '', '0', '0', '{\"id_menu\":\"10000110\",\"group_id\":\"11000004\"}');
INSERT INTO cmf_setting VALUES ('12000232', '14', '', '0', '0', '{\"id_menu\":\"10000111\",\"group_id\":\"11000004\"}');
INSERT INTO cmf_setting VALUES ('12000233', '14', '', '0', '0', '{\"id_menu\":\"10000109\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000234', '14', '', '0', '0', '{\"id_menu\":\"10000110\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000235', '14', '', '0', '0', '{\"id_menu\":\"10000111\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000236', '14', '', '0', '0', '{\"id_menu\":\"10000112\",\"group_id\":\"11000002\"}');
INSERT INTO cmf_setting VALUES ('12000237', '14', '', '0', '0', '{\"id_menu\":\"10000112\",\"group_id\":\"11000004\"}');
INSERT INTO cmf_setting VALUES ('12000238', '14', '', '0', '0', '{\"id_menu\":\"10000112\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000243', '14', '', '0', '0', '{\"id_menu\":\"10000090\",\"group_id\":\"11000004\"}');
INSERT INTO cmf_setting VALUES ('12000244', '14', '', '0', '0', '{\"id_menu\":\"10000094\",\"group_id\":\"11000004\"}');
INSERT INTO cmf_setting VALUES ('12000257', '14', '', '0', '0', '{\"id_menu\":\"10000113\",\"group_id\":\"11000004\"}');
INSERT INTO cmf_setting VALUES ('12000258', '14', '', '0', '0', '{\"id_menu\":\"10000113\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000267', '14', '', '0', '0', '{\"id_menu\":\"10000066\",\"group_id\":\"11000003\"}');
INSERT INTO cmf_setting VALUES ('12000268', '14', '', '0', '0', '{\"id_menu\":\"10000072\",\"group_id\":\"11000003\"}');
INSERT INTO cmf_setting VALUES ('12000269', '14', '', '0', '0', '{\"id_menu\":\"10000114\",\"group_id\":\"11000005\"}');
INSERT INTO cmf_setting VALUES ('12000277', '14', '', '0', '0', '{\"id_menu\":\"10000068\",\"group_id\":\"11000003\"}');

-- ----------------------------
-- Table structure for `contoh_cfit`
-- ----------------------------
DROP TABLE IF EXISTS `contoh_cfit`;
CREATE TABLE `contoh_cfit` (
  `id_contoh_cfit` int(11) NOT NULL AUTO_INCREMENT,
  `id_materi` varchar(11) DEFAULT NULL,
  `id_sub_materi` varchar(11) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `jwb_contoh_cfit_1` varchar(5) DEFAULT NULL,
  `jwb_contoh_cfit_2` varchar(5) DEFAULT NULL,
  `jwb_contoh_cfit_3` varchar(5) DEFAULT NULL,
  `ket` varchar(1) DEFAULT 'Y',
  PRIMARY KEY (`id_contoh_cfit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of contoh_cfit
-- ----------------------------

-- ----------------------------
-- Table structure for `daftar_hadir`
-- ----------------------------
DROP TABLE IF EXISTS `daftar_hadir`;
CREATE TABLE `daftar_hadir` (
  `id_kehadiran` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `ip_address` varchar(100) DEFAULT '',
  `last_activity` datetime DEFAULT NULL,
  PRIMARY KEY (`id_kehadiran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of daftar_hadir
-- ----------------------------

-- ----------------------------
-- Table structure for `data_peserta`
-- ----------------------------
DROP TABLE IF EXISTS `data_peserta`;
CREATE TABLE `data_peserta` (
  `id_peserta` int(11) NOT NULL AUTO_INCREMENT,
  `id_kegiatan` int(11) NOT NULL,
  `kd_kegiatan` varchar(6) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pangkat` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `unker` varchar(255) DEFAULT '',
  `jenjang` varchar(255) DEFAULT '',
  `tahun` varchar(4) DEFAULT '',
  `ket` varchar(1) DEFAULT 'Y',
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_peserta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of data_peserta
-- ----------------------------

-- ----------------------------
-- Table structure for `data_surat_keluar`
-- ----------------------------
DROP TABLE IF EXISTS `data_surat_keluar`;
CREATE TABLE `data_surat_keluar` (
  `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT,
  `id_kegiatan` int(11) NOT NULL,
  `kd_kegiatan` varchar(6) NOT NULL,
  `nmr_srt_keluar` varchar(255) DEFAULT NULL,
  `tgl_srt_keluar` date DEFAULT NULL,
  `tujuan_srt_keluar` varchar(255) DEFAULT NULL,
  `redaksi_srt_keluar` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_surat_keluar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of data_surat_keluar
-- ----------------------------

-- ----------------------------
-- Table structure for `hasil_ankas`
-- ----------------------------
DROP TABLE IF EXISTS `hasil_ankas`;
CREATE TABLE `hasil_ankas` (
  `id_peserta_ankas` int(11) NOT NULL AUTO_INCREMENT,
  `id_materi_ankas` int(11) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `jwb_ankas1` longtext DEFAULT NULL,
  `jwb_ankas2` longtext DEFAULT NULL,
  `jwb_ankas3` longtext DEFAULT NULL,
  `jwb_ankas4` longtext NOT NULL,
  `ket` varchar(1) DEFAULT 'Y',
  PRIMARY KEY (`id_peserta_ankas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of hasil_ankas
-- ----------------------------

-- ----------------------------
-- Table structure for `hasil_apm_dua`
-- ----------------------------
DROP TABLE IF EXISTS `hasil_apm_dua`;
CREATE TABLE `hasil_apm_dua` (
  `id_peserta_apm_dua` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(18) DEFAULT NULL,
  `jwb_apm_dua_1` varchar(5) DEFAULT 'A',
  `jwb_apm_dua_2` varchar(5) DEFAULT 'B',
  `jwb_apm_dua_3` varchar(5) DEFAULT 'C',
  `jwb_apm_dua_4` varchar(5) DEFAULT 'D',
  `jwb_apm_dua_5` varchar(5) DEFAULT 'E',
  `jwb_apm_dua_6` varchar(5) DEFAULT 'F',
  `jwb_apm_dua_7` varchar(5) DEFAULT 'G',
  `jwb_apm_dua_8` varchar(5) DEFAULT 'H',
  `jwb_apm_dua_9` varchar(5) DEFAULT 'A',
  `jwb_apm_dua_10` varchar(5) DEFAULT 'B',
  `jwb_apm_dua_11` varchar(5) DEFAULT 'C',
  `jwb_apm_dua_12` varchar(5) DEFAULT 'D',
  `jwb_apm_dua_13` varchar(5) DEFAULT 'E',
  `jwb_apm_dua_14` varchar(5) DEFAULT 'F',
  `jwb_apm_dua_15` varchar(5) DEFAULT 'G',
  `jwb_apm_dua_16` varchar(5) DEFAULT 'H',
  `jwb_apm_dua_17` varchar(5) DEFAULT 'A',
  `jwb_apm_dua_18` varchar(5) DEFAULT 'B',
  `jwb_apm_dua_19` varchar(5) DEFAULT 'C',
  `jwb_apm_dua_20` varchar(5) DEFAULT 'D',
  `jwb_apm_dua_21` varchar(5) DEFAULT 'E',
  `jwb_apm_dua_22` varchar(5) DEFAULT 'F',
  `jwb_apm_dua_23` varchar(5) DEFAULT 'G',
  `jwb_apm_dua_24` varchar(5) DEFAULT 'H',
  `jwb_apm_dua_25` varchar(5) DEFAULT 'A',
  `jwb_apm_dua_26` varchar(5) DEFAULT 'B',
  `jwb_apm_dua_27` varchar(5) DEFAULT 'C',
  `jwb_apm_dua_28` varchar(5) DEFAULT 'D',
  `jwb_apm_dua_29` varchar(5) DEFAULT 'E',
  `jwb_apm_dua_30` varchar(5) DEFAULT 'F',
  `jwb_apm_dua_31` varchar(5) DEFAULT 'G',
  `jwb_apm_dua_32` varchar(5) DEFAULT 'H',
  `jwb_apm_dua_33` varchar(5) DEFAULT 'A',
  `jwb_apm_dua_34` varchar(5) DEFAULT 'B',
  `jwb_apm_dua_35` varchar(5) DEFAULT 'C',
  `jwb_apm_dua_36` varchar(5) DEFAULT 'F',
  `nilai` varchar(4) DEFAULT NULL,
  `ket` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_peserta_apm_dua`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of hasil_apm_dua
-- ----------------------------

-- ----------------------------
-- Table structure for `hasil_apm_satu`
-- ----------------------------
DROP TABLE IF EXISTS `hasil_apm_satu`;
CREATE TABLE `hasil_apm_satu` (
  `id_peserta_apm_satu` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(18) DEFAULT NULL,
  `jwb_apm_satu_1` varchar(10) DEFAULT '0',
  `jwb_apm_satu_2` varchar(10) DEFAULT '0',
  `jwb_apm_satu_3` varchar(10) DEFAULT '0',
  `jwb_apm_satu_4` varchar(10) DEFAULT '0',
  `jwb_apm_satu_5` varchar(10) DEFAULT '0',
  `jwb_apm_satu_6` varchar(10) DEFAULT '0',
  `jwb_apm_satu_7` varchar(10) DEFAULT '0',
  `jwb_apm_satu_8` varchar(10) DEFAULT '0',
  `jwb_apm_satu_9` varchar(10) DEFAULT '0',
  `jwb_apm_satu_10` varchar(10) DEFAULT '0',
  `jwb_apm_satu_11` varchar(10) DEFAULT '0',
  `jwb_apm_satu_12` varchar(10) DEFAULT '0',
  `nilai` varchar(4) DEFAULT NULL,
  `ket` varchar(1) DEFAULT 'Y',
  PRIMARY KEY (`id_peserta_apm_satu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of hasil_apm_satu
-- ----------------------------

-- ----------------------------
-- Table structure for `hasil_assessment`
-- ----------------------------
DROP TABLE IF EXISTS `hasil_assessment`;
CREATE TABLE `hasil_assessment` (
  `id_hasil_penkom` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(18) DEFAULT NULL,
  `rekom` varchar(255) DEFAULT NULL,
  `gp_1` longtext DEFAULT NULL,
  `gp_2` longtext DEFAULT NULL,
  `gp_3` longtext DEFAULT NULL,
  `gp_4` longtext DEFAULT NULL,
  `gp_5` longtext DEFAULT NULL,
  `gp_6` longtext DEFAULT NULL,
  `gp_7` longtext DEFAULT NULL,
  `gp_8` longtext DEFAULT NULL,
  `kek_1` longtext DEFAULT NULL,
  `kek_2` longtext DEFAULT NULL,
  `kek_3` longtext DEFAULT NULL,
  `kek_4` longtext DEFAULT NULL,
  `kek_5` longtext DEFAULT NULL,
  `kek_6` longtext DEFAULT NULL,
  `kek_7` longtext DEFAULT NULL,
  `ap_1` longtext DEFAULT NULL,
  `ap_2` longtext DEFAULT NULL,
  `ap_3` longtext DEFAULT NULL,
  `ap_4` longtext DEFAULT NULL,
  `ap_5` longtext DEFAULT NULL,
  `ap_6` longtext DEFAULT NULL,
  `ap_7` longtext DEFAULT NULL,
  `speng_1` longtext DEFAULT NULL,
  `speng_2` longtext DEFAULT NULL,
  `speng_3` longtext DEFAULT NULL,
  `speng_4` longtext DEFAULT NULL,
  `speng_5` longtext DEFAULT NULL,
  `speng_6` longtext DEFAULT NULL,
  `speng_7` longtext DEFAULT NULL,
  `speng_8` longtext DEFAULT NULL,
  `speng_9` longtext DEFAULT NULL,
  `speng_10` longtext DEFAULT NULL,
  `sp_1` longtext DEFAULT NULL,
  `sp_2` longtext DEFAULT NULL,
  `sp_3` longtext DEFAULT NULL,
  PRIMARY KEY (`id_hasil_penkom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of hasil_assessment
-- ----------------------------

-- ----------------------------
-- Table structure for `hasil_cfit`
-- ----------------------------
DROP TABLE IF EXISTS `hasil_cfit`;
CREATE TABLE `hasil_cfit` (
  `id_hasil_cfit` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(18) DEFAULT NULL,
  `nilai_cfit_1` varchar(5) DEFAULT NULL,
  `nilai_cfit_2` varchar(5) DEFAULT NULL,
  `nilai_cfit_3` varchar(5) DEFAULT NULL,
  `nilai_cfit_4` varchar(5) DEFAULT NULL,
  `total_nilai_cfit` varchar(5) DEFAULT NULL,
  `norma_iq` varchar(5) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `ket` varchar(1) DEFAULT 'Y',
  PRIMARY KEY (`id_hasil_cfit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of hasil_cfit
-- ----------------------------

-- ----------------------------
-- Table structure for `hasil_cfit_dua`
-- ----------------------------
DROP TABLE IF EXISTS `hasil_cfit_dua`;
CREATE TABLE `hasil_cfit_dua` (
  `id_cfit_dua` int(11) NOT NULL AUTO_INCREMENT,
  `id_materi` varchar(11) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `jwb_cfit_dua_1` varchar(5) DEFAULT NULL,
  `jwb_cfit_dua_2` varchar(5) DEFAULT NULL,
  `jwb_cfit_dua_3` varchar(5) DEFAULT NULL,
  `jwb_cfit_dua_4` varchar(5) DEFAULT NULL,
  `jwb_cfit_dua_5` varchar(5) DEFAULT NULL,
  `jwb_cfit_dua_6` varchar(5) DEFAULT NULL,
  `jwb_cfit_dua_7` varchar(5) DEFAULT NULL,
  `jwb_cfit_dua_8` varchar(5) DEFAULT NULL,
  `jwb_cfit_dua_9` varchar(5) DEFAULT NULL,
  `jwb_cfit_dua_10` varchar(5) DEFAULT NULL,
  `jwb_cfit_dua_11` varchar(5) DEFAULT NULL,
  `jwb_cfit_dua_12` varchar(5) DEFAULT NULL,
  `jwb_cfit_dua_13` varchar(5) DEFAULT NULL,
  `jwb_cfit_dua_14` varchar(5) DEFAULT NULL,
  `nilai_cfit_2` varchar(5) DEFAULT NULL,
  `ket` varchar(1) DEFAULT 'Y',
  PRIMARY KEY (`id_cfit_dua`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of hasil_cfit_dua
-- ----------------------------

-- ----------------------------
-- Table structure for `hasil_cfit_empat`
-- ----------------------------
DROP TABLE IF EXISTS `hasil_cfit_empat`;
CREATE TABLE `hasil_cfit_empat` (
  `id_cfit_empat` int(11) NOT NULL AUTO_INCREMENT,
  `id_materi` varchar(11) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `jwb_cfit_empat_1` varchar(5) DEFAULT NULL,
  `jwb_cfit_empat_2` varchar(5) DEFAULT NULL,
  `jwb_cfit_empat_3` varchar(5) DEFAULT NULL,
  `jwb_cfit_empat_4` varchar(5) DEFAULT NULL,
  `jwb_cfit_empat_5` varchar(5) DEFAULT NULL,
  `jwb_cfit_empat_6` varchar(5) DEFAULT NULL,
  `jwb_cfit_empat_7` varchar(5) DEFAULT NULL,
  `jwb_cfit_empat_8` varchar(5) DEFAULT NULL,
  `jwb_cfit_empat_9` varchar(5) DEFAULT NULL,
  `jwb_cfit_empat_10` varchar(5) DEFAULT NULL,
  `nilai_cfit_4` varchar(5) DEFAULT NULL,
  `ket` varchar(1) DEFAULT 'Y',
  PRIMARY KEY (`id_cfit_empat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of hasil_cfit_empat
-- ----------------------------

-- ----------------------------
-- Table structure for `hasil_cfit_satu`
-- ----------------------------
DROP TABLE IF EXISTS `hasil_cfit_satu`;
CREATE TABLE `hasil_cfit_satu` (
  `id_cfit_satu` int(11) NOT NULL AUTO_INCREMENT,
  `id_materi` varchar(11) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `jwb_cfit_satu_1` varchar(5) DEFAULT NULL,
  `jwb_cfit_satu_2` varchar(5) DEFAULT NULL,
  `jwb_cfit_satu_3` varchar(5) DEFAULT NULL,
  `jwb_cfit_satu_4` varchar(5) DEFAULT NULL,
  `jwb_cfit_satu_5` varchar(5) DEFAULT NULL,
  `jwb_cfit_satu_6` varchar(5) DEFAULT NULL,
  `jwb_cfit_satu_7` varchar(5) DEFAULT NULL,
  `jwb_cfit_satu_8` varchar(5) DEFAULT NULL,
  `jwb_cfit_satu_9` varchar(5) DEFAULT NULL,
  `jwb_cfit_satu_10` varchar(5) DEFAULT NULL,
  `jwb_cfit_satu_11` varchar(5) DEFAULT NULL,
  `jwb_cfit_satu_12` varchar(5) DEFAULT NULL,
  `jwb_cfit_satu_13` varchar(5) DEFAULT NULL,
  `nilai_cfit_1` varchar(5) DEFAULT NULL,
  `ket` varchar(1) DEFAULT 'Y',
  PRIMARY KEY (`id_cfit_satu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of hasil_cfit_satu
-- ----------------------------

-- ----------------------------
-- Table structure for `hasil_cfit_tiga`
-- ----------------------------
DROP TABLE IF EXISTS `hasil_cfit_tiga`;
CREATE TABLE `hasil_cfit_tiga` (
  `id_cfit_tiga` int(11) NOT NULL AUTO_INCREMENT,
  `id_materi` varchar(11) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `jwb_cfit_tiga_1` varchar(5) DEFAULT NULL,
  `jwb_cfit_tiga_2` varchar(5) DEFAULT NULL,
  `jwb_cfit_tiga_3` varchar(5) DEFAULT NULL,
  `jwb_cfit_tiga_4` varchar(5) DEFAULT NULL,
  `jwb_cfit_tiga_5` varchar(5) DEFAULT NULL,
  `jwb_cfit_tiga_6` varchar(5) DEFAULT NULL,
  `jwb_cfit_tiga_7` varchar(5) DEFAULT NULL,
  `jwb_cfit_tiga_8` varchar(5) DEFAULT NULL,
  `jwb_cfit_tiga_9` varchar(5) DEFAULT NULL,
  `jwb_cfit_tiga_10` varchar(5) DEFAULT NULL,
  `jwb_cfit_tiga_11` varchar(5) DEFAULT NULL,
  `jwb_cfit_tiga_12` varchar(5) DEFAULT NULL,
  `jwb_cfit_tiga_13` varchar(5) DEFAULT NULL,
  `nilai_cfit_3` varchar(5) DEFAULT NULL,
  `ket` varchar(1) DEFAULT 'Y',
  PRIMARY KEY (`id_cfit_tiga`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of hasil_cfit_tiga
-- ----------------------------

-- ----------------------------
-- Table structure for `hasil_ci_dua`
-- ----------------------------
DROP TABLE IF EXISTS `hasil_ci_dua`;
CREATE TABLE `hasil_ci_dua` (
  `id_ci` int(11) NOT NULL AUTO_INCREMENT,
  `id_materi_ci2` int(11) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `s2_topik` varchar(255) DEFAULT '',
  `s2_tmt` varchar(255) DEFAULT NULL,
  `s2_tst` varchar(255) DEFAULT NULL,
  `s2_3` longtext DEFAULT NULL,
  `s2_4` longtext DEFAULT NULL,
  `s2_5` longtext DEFAULT NULL,
  `s2_6` longtext DEFAULT NULL,
  `s2_7` longtext DEFAULT NULL,
  `s2_8` longtext DEFAULT NULL,
  `ket` varchar(1) DEFAULT 'Y',
  PRIMARY KEY (`id_ci`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of hasil_ci_dua
-- ----------------------------

-- ----------------------------
-- Table structure for `hasil_ci_satu`
-- ----------------------------
DROP TABLE IF EXISTS `hasil_ci_satu`;
CREATE TABLE `hasil_ci_satu` (
  `id_ci` int(11) NOT NULL AUTO_INCREMENT,
  `id_materi_ci1` int(11) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `s1_topik` varchar(255) DEFAULT NULL,
  `s1_tmt` varchar(255) DEFAULT NULL,
  `s1_tst` varchar(255) DEFAULT NULL,
  `s1_3` longtext DEFAULT NULL,
  `s1_4` longtext DEFAULT NULL,
  `s1_5` longtext DEFAULT NULL,
  `s1_6` longtext DEFAULT NULL,
  `s1_7` longtext DEFAULT NULL,
  `s1_8` longtext DEFAULT NULL,
  `ket` varchar(1) DEFAULT 'Y',
  PRIMARY KEY (`id_ci`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of hasil_ci_satu
-- ----------------------------

-- ----------------------------
-- Table structure for `hasil_kuisi`
-- ----------------------------
DROP TABLE IF EXISTS `hasil_kuisi`;
CREATE TABLE `hasil_kuisi` (
  `id_kuisi` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(255) DEFAULT NULL,
  `tgl_assessment` date DEFAULT NULL,
  `kuisi_1` varchar(150) DEFAULT NULL,
  `kuisi_1_a` varchar(150) DEFAULT NULL,
  `kuisi_1_lain` longtext DEFAULT NULL,
  `kuisi_2` varchar(150) DEFAULT NULL,
  `kuisi_2_a` varchar(150) DEFAULT NULL,
  `kuisi_2_lain` longtext DEFAULT NULL,
  `kuisi_3` varchar(150) DEFAULT NULL,
  `kuisi_3_a` varchar(150) DEFAULT NULL,
  `kuisi_3_lain` longtext DEFAULT NULL,
  `kuisi_4` varchar(150) DEFAULT NULL,
  `kuisi_4_a` varchar(150) DEFAULT NULL,
  `kuisi_4_lain` longtext DEFAULT NULL,
  `kuisi_5` varchar(150) DEFAULT NULL,
  `kuisi_6` varchar(150) DEFAULT NULL,
  `kuisi_6_a` varchar(150) DEFAULT NULL,
  `kuisi_6_lain` longtext DEFAULT NULL,
  `kuisi_7` varchar(150) DEFAULT NULL,
  `kuisi_7_a` varchar(150) DEFAULT NULL,
  `kuisi_7_lain` longtext DEFAULT NULL,
  `kuisi_8` varchar(150) DEFAULT NULL,
  `kuisi_8_a` varchar(150) DEFAULT NULL,
  `kuisi_8_lain` longtext DEFAULT NULL,
  `kuisi_9` varchar(150) DEFAULT NULL,
  `kuisi_9_a` varchar(150) DEFAULT NULL,
  `kuisi_9_lain` longtext DEFAULT NULL,
  `kuisi_10` varchar(150) DEFAULT NULL,
  `kuisi_10_a` varchar(150) DEFAULT NULL,
  `kuisi_10_lain` longtext DEFAULT NULL,
  `kuisi_11` varchar(150) DEFAULT NULL,
  `kuisi_11_a` varchar(150) DEFAULT NULL,
  `kuisi_11_lain` longtext DEFAULT NULL,
  `kuisi_12` varchar(150) DEFAULT NULL,
  `kuisi_12_a` varchar(150) DEFAULT NULL,
  `kuisi_12_lain` longtext DEFAULT NULL,
  `kuisi_13` varchar(150) DEFAULT NULL,
  `kuisi_13_a` varchar(150) DEFAULT NULL,
  `kuisi_13_lain` longtext DEFAULT NULL,
  `kuisi_14` varchar(150) DEFAULT NULL,
  `kuisi_14_a` varchar(150) DEFAULT NULL,
  `kuisi_14_lain` longtext DEFAULT NULL,
  `kuisi_15` varchar(150) DEFAULT NULL,
  `kuisi_15_a` varchar(150) DEFAULT NULL,
  `kuisi_15_lain` varchar(150) DEFAULT NULL,
  `kuisi_16` varchar(150) DEFAULT NULL,
  `kuisi_16_a` varchar(150) DEFAULT NULL,
  `kuisi_16_lain` longtext DEFAULT NULL,
  `kuisi_17` varchar(150) DEFAULT NULL,
  `kuisi_17_lain` longtext DEFAULT NULL,
  `kuisi_18` varchar(150) DEFAULT NULL,
  `kuisi_18_lain` longtext DEFAULT NULL,
  `kuisi_19` varchar(150) DEFAULT NULL,
  `kuisi_19_lain` longtext DEFAULT NULL,
  `kuisi_20` varchar(150) DEFAULT NULL,
  `kuisi_21` varchar(150) DEFAULT NULL,
  `ket` varchar(1) DEFAULT 'Y',
  `last_update` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_kuisi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of hasil_kuisi
-- ----------------------------

-- ----------------------------
-- Table structure for `hasil_lap`
-- ----------------------------
DROP TABLE IF EXISTS `hasil_lap`;
CREATE TABLE `hasil_lap` (
  `id_hasil` int(11) NOT NULL AUTO_INCREMENT,
  `id_peserta` int(11) DEFAULT NULL,
  `kd_kegiatan` varchar(6) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `kd_kategori` varchar(5) DEFAULT NULL,
  `da` varchar(1) DEFAULT NULL,
  `lb` varchar(1) DEFAULT NULL,
  `sk` varchar(1) DEFAULT NULL,
  `ini` varchar(1) DEFAULT NULL,
  `dtk` varchar(1) DEFAULT NULL,
  `kep` varchar(1) DEFAULT NULL,
  `db` varchar(1) DEFAULT NULL,
  `tj` varchar(1) DEFAULT NULL,
  `ki` varchar(1) DEFAULT NULL,
  `kd` varchar(1) DEFAULT NULL,
  `se` varchar(1) DEFAULT NULL,
  `nilai_pot` varchar(5) DEFAULT NULL,
  `percent_pot` varchar(5) DEFAULT NULL,
  `int` varchar(1) DEFAULT NULL,
  `ks` varchar(1) DEFAULT NULL,
  `kom` varchar(1) DEFAULT NULL,
  `oph` varchar(1) DEFAULT NULL,
  `pp` varchar(1) DEFAULT NULL,
  `pdo` varchar(1) DEFAULT NULL,
  `mp` varchar(1) DEFAULT NULL,
  `pk` varchar(1) DEFAULT NULL,
  `pb` varchar(1) DEFAULT NULL,
  `nilai_kom` varchar(5) DEFAULT NULL,
  `percent_kom` varchar(5) DEFAULT NULL,
  `total_percent` varchar(5) DEFAULT NULL,
  `rekom` varchar(50) DEFAULT NULL,
  `gp_1` longtext DEFAULT NULL,
  `gp_2` longtext DEFAULT NULL,
  `gp_3` longtext DEFAULT NULL,
  `gp_4` longtext DEFAULT NULL,
  `gp_5` longtext DEFAULT NULL,
  `gp_6` longtext DEFAULT NULL,
  `gp_7` longtext DEFAULT NULL,
  `gp_8` longtext DEFAULT NULL,
  `kek_1` longtext DEFAULT NULL,
  `kek_2` longtext DEFAULT NULL,
  `kek_3` longtext DEFAULT NULL,
  `kek_4` longtext DEFAULT NULL,
  `kek_5` longtext DEFAULT NULL,
  `kek_6` longtext DEFAULT NULL,
  `kek_7` longtext DEFAULT NULL,
  `ap_1` longtext DEFAULT NULL,
  `ap_2` longtext DEFAULT NULL,
  `ap_3` longtext DEFAULT NULL,
  `ap_4` longtext DEFAULT NULL,
  `ap_5` longtext DEFAULT NULL,
  `ap_6` longtext DEFAULT NULL,
  `ap_7` longtext DEFAULT NULL,
  `speng_1` longtext DEFAULT NULL,
  `speng_2` longtext DEFAULT NULL,
  `speng_3` longtext DEFAULT NULL,
  `speng_4` longtext DEFAULT NULL,
  `speng_5` longtext DEFAULT NULL,
  `speng_6` longtext DEFAULT NULL,
  `speng_7` longtext DEFAULT NULL,
  `speng_8` longtext DEFAULT NULL,
  `speng_9` longtext DEFAULT NULL,
  `speng_10` longtext DEFAULT NULL,
  `sp_1` longtext DEFAULT NULL,
  `sp_2` longtext DEFAULT NULL,
  `sp_3` longtext DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_hasil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of hasil_lap
-- ----------------------------

-- ----------------------------
-- Table structure for `hasil_papi`
-- ----------------------------
DROP TABLE IF EXISTS `hasil_papi`;
CREATE TABLE `hasil_papi` (
  `id_peserta_papi` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(18) DEFAULT NULL,
  `jwb_papi1` varchar(5) DEFAULT NULL,
  `jwb_papi2` varchar(5) DEFAULT NULL,
  `jwb_papi3` varchar(5) DEFAULT NULL,
  `jwb_papi4` varchar(5) DEFAULT NULL,
  `jwb_papi5` varchar(5) DEFAULT NULL,
  `jwb_papi6` varchar(5) DEFAULT NULL,
  `jwb_papi7` varchar(5) DEFAULT NULL,
  `jwb_papi8` varchar(5) DEFAULT NULL,
  `jwb_papi9` varchar(5) DEFAULT NULL,
  `jwb_papi10` varchar(5) DEFAULT NULL,
  `jwb_papi11` varchar(5) DEFAULT NULL,
  `jwb_papi12` varchar(5) DEFAULT NULL,
  `jwb_papi13` varchar(5) DEFAULT NULL,
  `jwb_papi14` varchar(5) DEFAULT NULL,
  `jwb_papi15` varchar(5) DEFAULT NULL,
  `jwb_papi16` varchar(5) DEFAULT NULL,
  `jwb_papi17` varchar(5) DEFAULT NULL,
  `jwb_papi18` varchar(5) DEFAULT NULL,
  `jwb_papi19` varchar(5) DEFAULT NULL,
  `jwb_papi20` varchar(5) DEFAULT NULL,
  `jwb_papi21` varchar(5) DEFAULT NULL,
  `jwb_papi22` varchar(5) DEFAULT NULL,
  `jwb_papi23` varchar(5) DEFAULT NULL,
  `jwb_papi24` varchar(5) DEFAULT NULL,
  `jwb_papi25` varchar(5) DEFAULT NULL,
  `jwb_papi26` varchar(5) DEFAULT NULL,
  `jwb_papi27` varchar(5) DEFAULT NULL,
  `jwb_papi28` varchar(5) DEFAULT NULL,
  `jwb_papi29` varchar(5) DEFAULT NULL,
  `jwb_papi30` varchar(5) DEFAULT NULL,
  `jwb_papi31` varchar(5) DEFAULT NULL,
  `jwb_papi32` varchar(5) DEFAULT NULL,
  `jwb_papi33` varchar(5) DEFAULT NULL,
  `jwb_papi34` varchar(5) DEFAULT NULL,
  `jwb_papi35` varchar(5) DEFAULT NULL,
  `jwb_papi36` varchar(5) DEFAULT NULL,
  `jwb_papi37` varchar(5) DEFAULT NULL,
  `jwb_papi38` varchar(5) DEFAULT NULL,
  `jwb_papi39` varchar(5) DEFAULT NULL,
  `jwb_papi40` varchar(5) DEFAULT NULL,
  `jwb_papi41` varchar(5) DEFAULT NULL,
  `jwb_papi42` varchar(5) DEFAULT NULL,
  `jwb_papi43` varchar(5) DEFAULT NULL,
  `jwb_papi44` varchar(5) DEFAULT NULL,
  `jwb_papi45` varchar(5) DEFAULT NULL,
  `jwb_papi46` varchar(5) DEFAULT NULL,
  `jwb_papi47` varchar(5) DEFAULT NULL,
  `jwb_papi48` varchar(5) DEFAULT NULL,
  `jwb_papi49` varchar(5) DEFAULT NULL,
  `jwb_papi50` varchar(5) DEFAULT NULL,
  `jwb_papi51` varchar(5) DEFAULT NULL,
  `jwb_papi52` varchar(5) DEFAULT NULL,
  `jwb_papi53` varchar(5) DEFAULT NULL,
  `jwb_papi54` varchar(5) DEFAULT NULL,
  `jwb_papi55` varchar(5) DEFAULT NULL,
  `jwb_papi56` varchar(5) DEFAULT NULL,
  `jwb_papi57` varchar(5) DEFAULT NULL,
  `jwb_papi58` varchar(5) DEFAULT NULL,
  `jwb_papi59` varchar(5) DEFAULT NULL,
  `jwb_papi60` varchar(5) DEFAULT NULL,
  `jwb_papi61` varchar(5) DEFAULT NULL,
  `jwb_papi62` varchar(5) DEFAULT NULL,
  `jwb_papi63` varchar(5) DEFAULT NULL,
  `jwb_papi64` varchar(5) DEFAULT NULL,
  `jwb_papi65` varchar(5) DEFAULT NULL,
  `jwb_papi66` varchar(5) DEFAULT NULL,
  `jwb_papi67` varchar(5) DEFAULT NULL,
  `jwb_papi68` varchar(5) DEFAULT NULL,
  `jwb_papi69` varchar(5) DEFAULT NULL,
  `jwb_papi70` varchar(5) DEFAULT NULL,
  `jwb_papi71` varchar(5) DEFAULT NULL,
  `jwb_papi72` varchar(5) DEFAULT NULL,
  `jwb_papi73` varchar(5) DEFAULT NULL,
  `jwb_papi74` varchar(5) DEFAULT NULL,
  `jwb_papi75` varchar(5) DEFAULT NULL,
  `jwb_papi76` varchar(5) DEFAULT NULL,
  `jwb_papi77` varchar(5) DEFAULT NULL,
  `jwb_papi78` varchar(5) DEFAULT NULL,
  `jwb_papi79` varchar(5) DEFAULT NULL,
  `jwb_papi80` varchar(5) DEFAULT NULL,
  `jwb_papi81` varchar(5) DEFAULT NULL,
  `jwb_papi82` varchar(5) DEFAULT NULL,
  `jwb_papi83` varchar(5) DEFAULT NULL,
  `jwb_papi84` varchar(5) DEFAULT NULL,
  `jwb_papi85` varchar(5) DEFAULT NULL,
  `jwb_papi86` varchar(5) DEFAULT NULL,
  `jwb_papi87` varchar(5) DEFAULT NULL,
  `jwb_papi88` varchar(5) DEFAULT NULL,
  `jwb_papi89` varchar(5) DEFAULT NULL,
  `jwb_papi90` varchar(5) DEFAULT NULL,
  `ket` varchar(1) DEFAULT 'Y',
  PRIMARY KEY (`id_peserta_papi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of hasil_papi
-- ----------------------------

-- ----------------------------
-- Table structure for `hasil_qkom_dua`
-- ----------------------------
DROP TABLE IF EXISTS `hasil_qkom_dua`;
CREATE TABLE `hasil_qkom_dua` (
  `id_qkom_dua` int(11) NOT NULL AUTO_INCREMENT,
  `id_materi_qkom` int(11) DEFAULT 6,
  `nip` varchar(19) DEFAULT NULL,
  `jwb9_a` longtext DEFAULT NULL,
  `jwb9_b` longtext DEFAULT NULL,
  `jwb9_c` longtext DEFAULT NULL,
  `jwb9_d` longtext DEFAULT NULL,
  `jwb10_a` longtext DEFAULT NULL,
  `jwb10_b` longtext DEFAULT NULL,
  `jwb10_c` longtext DEFAULT NULL,
  `jwb10_d` longtext DEFAULT NULL,
  `jwb11_a` longtext DEFAULT NULL,
  `jwb11_b` longtext DEFAULT NULL,
  `jwb11_c` longtext DEFAULT NULL,
  `jwb11_d` longtext DEFAULT NULL,
  `jwb12_a` longtext DEFAULT NULL,
  `jwb12_b` longtext DEFAULT NULL,
  `jwb12_c` longtext DEFAULT NULL,
  `jwb12_d` longtext DEFAULT NULL,
  `jwb13_a` longtext DEFAULT NULL,
  `jwb13_b` longtext DEFAULT NULL,
  `jwb13_c` longtext DEFAULT NULL,
  `jwb13_d` longtext DEFAULT NULL,
  `jwb14_a` longtext DEFAULT NULL,
  `jwb14_b` longtext DEFAULT NULL,
  `jwb14_c` longtext DEFAULT NULL,
  `jwb14_d` longtext DEFAULT NULL,
  `jwb15` longtext DEFAULT NULL,
  `jwb16` longtext DEFAULT NULL,
  `jwb17` longtext DEFAULT NULL,
  `ket` varchar(1) DEFAULT 'Y',
  PRIMARY KEY (`id_qkom_dua`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of hasil_qkom_dua
-- ----------------------------

-- ----------------------------
-- Table structure for `hasil_qkom_satu`
-- ----------------------------
DROP TABLE IF EXISTS `hasil_qkom_satu`;
CREATE TABLE `hasil_qkom_satu` (
  `id_qkom_satu` int(11) NOT NULL AUTO_INCREMENT,
  `id_materi_qkom` int(11) DEFAULT 6,
  `nip` varchar(19) DEFAULT NULL,
  `jwb1a_a` longtext DEFAULT NULL,
  `jwb1a_b` longtext DEFAULT NULL,
  `jwb1a_c` longtext DEFAULT NULL,
  `jwb1a_d` longtext DEFAULT NULL,
  `jwb1b_a` longtext DEFAULT NULL,
  `jwb1b_b` longtext DEFAULT NULL,
  `jwb1b_c` longtext DEFAULT NULL,
  `jwb1b_d` longtext DEFAULT NULL,
  `jwb2_a` longtext DEFAULT NULL,
  `jwb2_b` longtext DEFAULT NULL,
  `jwb2_c` longtext DEFAULT NULL,
  `jwb2_d` longtext DEFAULT NULL,
  `jwb3_a` longtext DEFAULT NULL,
  `jwb3_b` longtext DEFAULT NULL,
  `jwb3_c` longtext DEFAULT NULL,
  `jwb3_d` longtext DEFAULT NULL,
  `jwb4_a` longtext DEFAULT NULL,
  `jwb4_b` longtext DEFAULT NULL,
  `jwb4_c` longtext DEFAULT NULL,
  `jwb4_d` longtext DEFAULT NULL,
  `jwb5_a` longtext DEFAULT NULL,
  `jwb5_b` longtext DEFAULT NULL,
  `jwb5_c` longtext DEFAULT NULL,
  `jwb5_d` longtext DEFAULT NULL,
  `jwb6_a` longtext DEFAULT NULL,
  `jwb6_b` longtext DEFAULT NULL,
  `jwb6_c` longtext DEFAULT NULL,
  `jwb6_d` longtext DEFAULT NULL,
  `jwb7_a` longtext DEFAULT NULL,
  `jwb7_b` longtext DEFAULT NULL,
  `jwb7_c` longtext DEFAULT NULL,
  `jwb7_d` longtext DEFAULT NULL,
  `jwb8_a` longtext DEFAULT NULL,
  `jwb8_b` longtext DEFAULT NULL,
  `jwb8_c` longtext DEFAULT NULL,
  `jwb8_d` longtext DEFAULT NULL,
  `ket` varchar(1) DEFAULT 'Y',
  PRIMARY KEY (`id_qkom_satu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of hasil_qkom_satu
-- ----------------------------

-- ----------------------------
-- Table structure for `hasil_sjt`
-- ----------------------------
DROP TABLE IF EXISTS `hasil_sjt`;
CREATE TABLE `hasil_sjt` (
  `id_peserta_sjt` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(18) DEFAULT '',
  `jwb_sjt1` varchar(5) DEFAULT '',
  `jwb_sjt2` varchar(5) DEFAULT NULL,
  `jwb_sjt3` varchar(5) DEFAULT NULL,
  `jwb_sjt4` varchar(5) DEFAULT NULL,
  `jwb_sjt5` varchar(5) DEFAULT NULL,
  `jwb_sjt6` varchar(5) DEFAULT NULL,
  `jwb_sjt7` varchar(5) DEFAULT NULL,
  `jwb_sjt8` varchar(5) DEFAULT NULL,
  `jwb_sjt9` varchar(5) DEFAULT NULL,
  `jwb_sjt10` varchar(5) DEFAULT NULL,
  `jwb_sjt11` varchar(5) DEFAULT NULL,
  `jwb_sjt12` varchar(5) DEFAULT NULL,
  `jwb_sjt13` varchar(5) DEFAULT NULL,
  `jwb_sjt14` varchar(5) DEFAULT NULL,
  `jwb_sjt15` varchar(5) DEFAULT NULL,
  `jwb_sjt16` varchar(5) DEFAULT NULL,
  `jwb_sjt17` varchar(5) DEFAULT NULL,
  `jwb_sjt18` varchar(5) DEFAULT NULL,
  `jwb_sjt19` varchar(5) DEFAULT NULL,
  `jwb_sjt20` varchar(5) DEFAULT NULL,
  `jwb_sjt21` varchar(5) DEFAULT NULL,
  `jwb_sjt22` varchar(5) DEFAULT NULL,
  `jwb_sjt23` varchar(5) DEFAULT NULL,
  `jwb_sjt24` varchar(5) DEFAULT NULL,
  `jwb_sjt25` varchar(5) DEFAULT NULL,
  `jwb_sjt26` varchar(5) DEFAULT NULL,
  `jwb_sjt27` varchar(5) DEFAULT NULL,
  `jwb_sjt28` varchar(5) DEFAULT NULL,
  `jwb_sjt29` varchar(5) DEFAULT NULL,
  `jwb_sjt30` varchar(5) DEFAULT NULL,
  `jwb_sjt31` varchar(5) DEFAULT NULL,
  `jwb_sjt32` varchar(5) DEFAULT NULL,
  `jwb_sjt33` varchar(5) DEFAULT NULL,
  `jwb_sjt34` varchar(5) DEFAULT NULL,
  `jwb_sjt35` varchar(5) DEFAULT NULL,
  `jwb_sjt36` varchar(5) DEFAULT NULL,
  `paket` varchar(10) DEFAULT NULL,
  `ket` varchar(1) DEFAULT 'Y',
  PRIMARY KEY (`id_peserta_sjt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of hasil_sjt
-- ----------------------------

-- ----------------------------
-- Table structure for `jadwal_peserta`
-- ----------------------------
DROP TABLE IF EXISTS `jadwal_peserta`;
CREATE TABLE `jadwal_peserta` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `id_peserta` int(11) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tgl_psikometri` datetime DEFAULT NULL,
  `sesi` varchar(10) DEFAULT NULL,
  `tgl_lgd` datetime DEFAULT NULL,
  `kd_personil_lgd` varchar(5) DEFAULT NULL,
  `batch` varchar(50) DEFAULT NULL,
  `kelompok` varchar(50) DEFAULT NULL,
  `tgl_wwcr` datetime DEFAULT NULL,
  `kd_personil_wwcr` varchar(5) DEFAULT NULL,
  `ket` varchar(1) DEFAULT '',
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of jadwal_peserta
-- ----------------------------

-- ----------------------------
-- Table structure for `jdwl_tampung`
-- ----------------------------
DROP TABLE IF EXISTS `jdwl_tampung`;
CREATE TABLE `jdwl_tampung` (
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tgl_psikometri` varchar(255) DEFAULT NULL,
  `sesi` varchar(255) DEFAULT NULL,
  `tgl_lgd` varchar(255) DEFAULT NULL,
  `kd_personil_lgd` varchar(255) DEFAULT NULL,
  `batch` varchar(255) DEFAULT NULL,
  `kelompok` varchar(255) DEFAULT NULL,
  `tgl_wwcr` varchar(255) DEFAULT NULL,
  `kd_personil_wwcr` varchar(255) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of jdwl_tampung
-- ----------------------------

-- ----------------------------
-- Table structure for `kegiatan`
-- ----------------------------
DROP TABLE IF EXISTS `kegiatan`;
CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT,
  `kd_kegiatan` varchar(6) NOT NULL,
  `nama_kegiatan` text CHARACTER SET utf8mb4 NOT NULL,
  `jenis_kegiatan` enum('Internal','Kerjasama') NOT NULL,
  `instansi` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `tgl_keg` date NOT NULL,
  `ket` varchar(1) DEFAULT 'Y',
  `tahun` varchar(4) DEFAULT NULL,
  `link_doc` varchar(255) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_kegiatan`),
  UNIQUE KEY `kd_kegiatan` (`kd_kegiatan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kegiatan
-- ----------------------------

-- ----------------------------
-- Table structure for `komp_ankas`
-- ----------------------------
DROP TABLE IF EXISTS `komp_ankas`;
CREATE TABLE `komp_ankas` (
  `id_kom_ankas` int(11) NOT NULL AUTO_INCREMENT,
  `id_peserta` varchar(11) DEFAULT NULL,
  `kd_personil_wwcr` varchar(5) DEFAULT NULL,
  `nip` varchar(19) DEFAULT NULL,
  `nilai_ankas_kom` varchar(1) DEFAULT NULL,
  `bobot_ankas_kom` varchar(4) DEFAULT NULL,
  `ev_ankas_kom` longtext DEFAULT NULL,
  `nilai_ankas_oph` varchar(1) DEFAULT NULL,
  `bobot_ankas_oph` varchar(4) DEFAULT NULL,
  `ev_ankas_oph` longtext DEFAULT NULL,
  `nilai_ankas_pp` varchar(1) DEFAULT NULL,
  `bobot_ankas_pp` varchar(4) DEFAULT NULL,
  `ev_ankas_pp` longtext DEFAULT NULL,
  `nilai_ankas_mp` varchar(1) DEFAULT NULL,
  `bobot_ankas_mp` varchar(4) DEFAULT NULL,
  `ev_ankas_mp` longtext DEFAULT NULL,
  `nilai_ankas_pk` varchar(1) DEFAULT NULL,
  `bobot_ankas_pk` varchar(4) DEFAULT NULL,
  `ev_ankas_pk` longtext DEFAULT NULL,
  PRIMARY KEY (`id_kom_ankas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of komp_ankas
-- ----------------------------

-- ----------------------------
-- Table structure for `komp_bei`
-- ----------------------------
DROP TABLE IF EXISTS `komp_bei`;
CREATE TABLE `komp_bei` (
  `id_kom_bei` int(11) NOT NULL AUTO_INCREMENT,
  `id_peserta` varchar(11) DEFAULT NULL,
  `kd_personil_wwcr` varchar(5) DEFAULT NULL,
  `nip` varchar(19) DEFAULT NULL,
  `nilai_bei_int` varchar(1) DEFAULT NULL,
  `bobot_bei_int` varchar(4) DEFAULT NULL,
  `ev_bei_int` longtext DEFAULT NULL,
  `nilai_bei_kjs` varchar(1) DEFAULT NULL,
  `bobot_bei_kjs` varchar(4) DEFAULT NULL,
  `ev_bei_kjs` longtext DEFAULT NULL,
  `nilai_bei_kom` varchar(1) DEFAULT NULL,
  `bobot_bei_kom` varchar(4) DEFAULT NULL,
  `ev_bei_kom` longtext DEFAULT NULL,
  `nilai_bei_oph` varchar(1) DEFAULT NULL,
  `bobot_bei_oph` varchar(4) DEFAULT NULL,
  `ev_bei_oph` longtext DEFAULT NULL,
  `nilai_bei_pp` varchar(1) DEFAULT NULL,
  `bobot_bei_pp` varchar(4) DEFAULT NULL,
  `ev_bei_pp` longtext DEFAULT NULL,
  `nilai_bei_pdol` varchar(1) DEFAULT NULL,
  `bobot_bei_pdol` varchar(4) DEFAULT NULL,
  `ev_bei_pdol` longtext DEFAULT NULL,
  `nilai_bei_mp` varchar(1) DEFAULT NULL,
  `bobot_bei_mp` varchar(4) DEFAULT NULL,
  `ev_bei_mp` longtext DEFAULT NULL,
  `nilai_bei_pk` varchar(1) DEFAULT NULL,
  `bobot_bei_pk` varchar(4) DEFAULT NULL,
  `ev_bei_pk` longtext DEFAULT NULL,
  `nilai_bei_pb` varchar(1) DEFAULT NULL,
  `bobot_bei_pb` varchar(4) DEFAULT NULL,
  `ev_bei_pb` longtext DEFAULT NULL,
  PRIMARY KEY (`id_kom_bei`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of komp_bei
-- ----------------------------

-- ----------------------------
-- Table structure for `komp_bei_sekda`
-- ----------------------------
DROP TABLE IF EXISTS `komp_bei_sekda`;
CREATE TABLE `komp_bei_sekda` (
  `id_kom_bei_sekda` int(11) NOT NULL AUTO_INCREMENT,
  `id_peserta` varchar(11) DEFAULT NULL,
  `kd_personil_wwcr` varchar(5) DEFAULT NULL,
  `nip` varchar(19) DEFAULT NULL,
  `nilai_bei_sekda_int` varchar(1) DEFAULT NULL,
  `bobot_bei_sekda_int` varchar(4) DEFAULT NULL,
  `ev_bei_sekda_int` longtext DEFAULT NULL,
  `nilai_bei_sekda_kjs` varchar(1) DEFAULT NULL,
  `bobot_bei_sekda_kjs` varchar(4) DEFAULT NULL,
  `ev_bei_sekda_kjs` longtext DEFAULT NULL,
  `nilai_bei_sekda_kom` varchar(1) DEFAULT NULL,
  `bobot_bei_sekda_kom` varchar(4) DEFAULT NULL,
  `ev_bei_sekda_kom` longtext DEFAULT NULL,
  `nilai_bei_sekda_oph` varchar(1) DEFAULT NULL,
  `bobot_bei_sekda_oph` varchar(4) DEFAULT NULL,
  `ev_bei_sekda_oph` longtext DEFAULT NULL,
  `nilai_bei_sekda_pp` varchar(1) DEFAULT NULL,
  `bobot_bei_sekda_pp` varchar(4) DEFAULT NULL,
  `ev_bei_sekda_pp` longtext DEFAULT NULL,
  `nilai_bei_sekda_pdol` varchar(1) DEFAULT NULL,
  `bobot_bei_sekda_pdol` varchar(4) DEFAULT NULL,
  `ev_bei_sekda_pdol` longtext DEFAULT NULL,
  `nilai_bei_sekda_mp` varchar(1) DEFAULT NULL,
  `bobot_bei_sekda_mp` varchar(4) DEFAULT NULL,
  `ev_bei_sekda_mp` longtext DEFAULT NULL,
  `nilai_bei_sekda_pk` varchar(1) DEFAULT NULL,
  `bobot_bei_sekda_pk` varchar(4) DEFAULT NULL,
  `ev_bei_sekda_pk` longtext DEFAULT NULL,
  `nilai_bei_sekda_pb` varchar(1) DEFAULT NULL,
  `bobot_bei_sekda_pb` varchar(4) DEFAULT NULL,
  `ev_bei_sekda_pb` longtext DEFAULT NULL,
  PRIMARY KEY (`id_kom_bei_sekda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of komp_bei_sekda
-- ----------------------------

-- ----------------------------
-- Table structure for `komp_lgd`
-- ----------------------------
DROP TABLE IF EXISTS `komp_lgd`;
CREATE TABLE `komp_lgd` (
  `id_kom_lgd` int(11) NOT NULL AUTO_INCREMENT,
  `id_peserta` varchar(11) DEFAULT NULL,
  `kd_personil_wwcr` varchar(5) DEFAULT NULL,
  `nip` varchar(19) DEFAULT NULL,
  `nilai_lgd_kjs` varchar(1) DEFAULT NULL,
  `bobot_lgd_kjs` varchar(4) DEFAULT NULL,
  `ev_lgd_kjs` longtext DEFAULT NULL,
  `nilai_lgd_kom` varchar(1) DEFAULT NULL,
  `bobot_lgd_kom` varchar(4) DEFAULT NULL,
  `ev_lgd_kom` longtext DEFAULT NULL,
  `nilai_lgd_oph` varchar(1) DEFAULT NULL,
  `bobot_lgd_oph` varchar(4) DEFAULT NULL,
  `ev_lgd_oph` longtext DEFAULT NULL,
  `nilai_lgd_mp` varchar(1) DEFAULT NULL,
  `bobot_lgd_mp` varchar(4) DEFAULT NULL,
  `ev_lgd_mp` longtext DEFAULT NULL,
  `nilai_lgd_pk` varchar(1) DEFAULT NULL,
  `bobot_lgd_pk` varchar(4) DEFAULT NULL,
  `ev_lgd_pk` longtext DEFAULT NULL,
  PRIMARY KEY (`id_kom_lgd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of komp_lgd
-- ----------------------------

-- ----------------------------
-- Table structure for `komp_nilai`
-- ----------------------------
DROP TABLE IF EXISTS `komp_nilai`;
CREATE TABLE `komp_nilai` (
  `id_kompetensi` int(11) NOT NULL AUTO_INCREMENT,
  `kd_personil_wwcr` varchar(5) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `nilai_int_komp` varchar(5) DEFAULT NULL,
  `nilai_ks_komp` varchar(5) DEFAULT NULL,
  `nilai_kom_komp` varchar(5) DEFAULT NULL,
  `nilai_oph_komp` varchar(5) DEFAULT NULL,
  `nilai_pp_komp` varchar(5) DEFAULT NULL,
  `nilai_pdo_komp` varchar(5) DEFAULT NULL,
  `nilai_mp_komp` varchar(5) DEFAULT NULL,
  `nilai_pk_komp` varchar(5) DEFAULT NULL,
  `nilai_pb_komp` varchar(5) DEFAULT NULL,
  `nilai_komp` varchar(5) DEFAULT NULL,
  `percent_komp` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_kompetensi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of komp_nilai
-- ----------------------------

-- ----------------------------
-- Table structure for `komp_pw`
-- ----------------------------
DROP TABLE IF EXISTS `komp_pw`;
CREATE TABLE `komp_pw` (
  `id_kom_pw` int(11) NOT NULL AUTO_INCREMENT,
  `id_peserta` varchar(11) DEFAULT NULL,
  `kd_personil_wwcr` varchar(5) DEFAULT NULL,
  `nip` varchar(19) DEFAULT NULL,
  `nilai_pw_int` varchar(1) DEFAULT NULL,
  `bobot_pw_int` varchar(4) DEFAULT NULL,
  `ev_pw_int` longtext DEFAULT NULL,
  `nilai_pw_pdol` varchar(1) DEFAULT NULL,
  `bobot_pw_pdol` varchar(4) DEFAULT NULL,
  `ev_pw_pdol` longtext DEFAULT NULL,
  `nilai_pw_pb` varchar(1) DEFAULT NULL,
  `bobot_pw_pb` varchar(4) DEFAULT NULL,
  `ev_pw_pb` longtext DEFAULT NULL,
  PRIMARY KEY (`id_kom_pw`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of komp_pw
-- ----------------------------

-- ----------------------------
-- Table structure for `konten`
-- ----------------------------
DROP TABLE IF EXISTS `konten`;
CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `komponen` varchar(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `sub_judul` varchar(200) NOT NULL,
  `id_penulis` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `isi_konten` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` enum('on','off') NOT NULL,
  `urutan` int(11) NOT NULL,
  `baca` int(11) DEFAULT NULL,
  `last_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id_konten`),
  KEY `id_berita_kategori` (`id_kategori`),
  KEY `id_penulis` (`id_penulis`),
  KEY `user_id` (`user_id`,`urutan`),
  KEY `komponen` (`komponen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of konten
-- ----------------------------

-- ----------------------------
-- Table structure for `konten_appe`
-- ----------------------------
DROP TABLE IF EXISTS `konten_appe`;
CREATE TABLE `konten_appe` (
  `id_appe` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_konten` int(11) unsigned DEFAULT NULL,
  `tipe` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `judul_appe` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `keterangan_appe` text COLLATE latin1_general_ci DEFAULT NULL,
  `link` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `foto` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `urutan_appe` int(11) DEFAULT NULL,
  `foto_from` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_buat` date DEFAULT NULL,
  `nilai` int(14) DEFAULT NULL,
  `fotografer` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `last_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id_appe`),
  KEY `FK_galeri` (`id_konten`),
  KEY `komponen` (`tipe`),
  KEY `link` (`link`)
) ENGINE=InnoDB AUTO_INCREMENT=621 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of konten_appe
-- ----------------------------
INSERT INTO konten_appe VALUES ('6', '8', 'kategori_widget', 'mainbar', 'statis', '400014', null, '1', null, null, '1000000', null, null, null);
INSERT INTO konten_appe VALUES ('8', '0', 'fm', 'bawaan', 'Berisi file standar installasi Dantech', 'bawaan', null, null, null, null, null, null, null, null);
INSERT INTO konten_appe VALUES ('9', '8', 'fml', 'garuda.gif', 'gif', '', null, null, null, null, '1', null, null, null);
INSERT INTO konten_appe VALUES ('10', '8', 'fml', 'fav_logo.gif', 'gif', '', null, null, null, null, '1', null, null, null);
INSERT INTO konten_appe VALUES ('11', '8', 'fml', 'no_images.gif', 'gif', '', null, null, null, null, '2', null, null, null);
INSERT INTO konten_appe VALUES ('12', '8', 'fml', 'no_attachment.gif', 'gif', '', null, null, null, null, '2', null, null, null);
INSERT INTO konten_appe VALUES ('13', '8', 'fml', 'no_slider.gif', 'gif', '', null, null, null, null, '1', null, null, null);
INSERT INTO konten_appe VALUES ('14', '8', 'fml', 'any_attachment.gif', 'gif', '', null, null, null, null, '1', null, null, null);
INSERT INTO konten_appe VALUES ('16', '0', 'fm', 'Dokumentasi 2023', 'Dokumentasi Kegiatan Tahun 2023', 'dokumentasi2023', null, null, null, null, null, '1', '1', '2023-01-20 23:39:32');
INSERT INTO konten_appe VALUES ('26', '9', 'kategori_widget', 'mainbar', 'statis', '400014', null, '0', null, null, '1000002', null, null, null);
INSERT INTO konten_appe VALUES ('29', '2000003', 'kategori_widget', 'mainbar', 'artikel', '400003', null, '1', null, null, '1000006', null, null, null);
INSERT INTO konten_appe VALUES ('30', '11', 'kategori_widget', 'mainbar', 'statis', '400014', null, '0', null, null, '1000003', null, null, null);
INSERT INTO konten_appe VALUES ('31', '2000005', 'kategori_widget', 'mainbar', 'artikel', '400003', null, '0', null, null, '1000004', null, null, null);
INSERT INTO konten_appe VALUES ('32', '2000006', 'kategori_widget', 'mainbar', 'artikel', '400003', null, '1', null, null, '1000004', null, null, null);
INSERT INTO konten_appe VALUES ('44', '2000004', 'kategori_widget', 'sidebar', 'agenda', '400017', null, '0', null, null, '1000006', null, null, null);
INSERT INTO konten_appe VALUES ('48', '46', 'kategori_widget', 'sidebar', 'sekilasinfo', '400001', null, '1', null, null, '1000000', null, null, null);
INSERT INTO konten_appe VALUES ('103', '2000003', 'kategori_widget', 'mainbar', 'artikel', '400003', null, '0', null, null, '1000006', null, null, null);
INSERT INTO konten_appe VALUES ('104', '2000002', 'kategori_widget', 'mainbar', 'artikel', '400003', null, '0', null, null, '1000006', null, null, null);
INSERT INTO konten_appe VALUES ('105', '2000001', 'kategori_widget', 'mainbar', 'artikel', '400003', null, '0', null, null, '1000006', null, null, null);
INSERT INTO konten_appe VALUES ('237', '18', 'fml', 'angkatan1_2021_1.jpg', 'jpg', '', '', '1', '', '1970-01-01', null, '2', '2', '2021-04-01 16:16:43');
INSERT INTO konten_appe VALUES ('242', '18', 'fml', 'angkatan1_2021_2.jpg', 'jpg', '', '', '2', '', '1970-01-01', null, '2', '2', '2021-04-01 16:16:52');
INSERT INTO konten_appe VALUES ('247', '18', 'fml', 'angkatan1_2021_3.jpg', 'jpg', '', '', '3', '', '1970-01-01', null, '2', '2', '2021-04-01 16:16:57');
INSERT INTO konten_appe VALUES ('252', '18', 'fml', 'angkatan1_2021_4.jpg', 'jpg', '', '', '4', '', '1970-01-01', null, '2', '2', '2021-04-01 16:17:01');
INSERT INTO konten_appe VALUES ('257', '18', 'fml', 'angkatan1_2021_5.jpg', 'jpg', '', '', '5', '', '1970-01-01', null, '2', '2', '2021-04-01 16:17:05');
INSERT INTO konten_appe VALUES ('262', '18', 'fml', 'angkatan1_2021_6.jpg', 'jpg', '', '', '6', '', '1970-01-01', null, '2', '2', '2021-04-01 16:17:12');
INSERT INTO konten_appe VALUES ('267', '18', 'fml', 'angkatan1_2021_7.jpg', 'jpg', '', '', '7', '', '1970-01-01', null, '2', '2', '2021-04-01 16:17:16');
INSERT INTO konten_appe VALUES ('272', '18', 'fml', 'angkatan1_2021_8.jpg', 'jpg', '', '', '8', '', '1970-01-01', null, '2', '2', '2021-04-01 16:17:19');
INSERT INTO konten_appe VALUES ('277', '18', 'fml', 'angkatan1_2021_9.jpg', 'jpg', '', '', '9', '', '1970-01-01', null, '2', '2', '2021-04-01 16:17:22');
INSERT INTO konten_appe VALUES ('282', '18', 'fml', 'angkatan1_2021_10.jpg', 'jpg', '', '', '10', '', '1970-01-01', null, '2', '2', '2021-04-01 16:17:28');
INSERT INTO konten_appe VALUES ('287', '18', 'fml', 'angkatan1_2021_11.jpg', 'jpg', '', '', '11', '', '1970-01-01', null, '2', '2', '2021-04-01 16:17:35');
INSERT INTO konten_appe VALUES ('292', '18', 'fml', 'angkatan1_2021_12.jpg', 'jpg', '', '', '12', '', '1970-01-01', null, '2', '2', '2021-04-01 16:17:40');
INSERT INTO konten_appe VALUES ('297', '18', 'fml', 'angkatan1_2021_13.jpg', 'jpg', '', '', '13', '', '1970-01-01', null, '2', '2', '2021-04-01 16:17:45');
INSERT INTO konten_appe VALUES ('302', '18', 'fml', 'angkatan1_2021_14.jpg', 'jpg', '', '', '14', '', '1970-01-01', null, '2', '2', '2021-04-01 16:17:49');
INSERT INTO konten_appe VALUES ('307', '18', 'fml', 'angkatan1_2021_15.jpg', 'jpg', '', '', '15', '', '1970-01-01', null, '2', '2', '2021-04-01 16:17:53');
INSERT INTO konten_appe VALUES ('312', '18', 'fml', 'angkatan1_2021_16.jpg', 'jpg', '', '', '16', '', '1970-01-01', null, '2', '2', '2021-04-01 16:18:00');
INSERT INTO konten_appe VALUES ('317', '18', 'fml', 'angkatan1_2021_17.jpg', 'jpg', '', '', '17', '', '1970-01-01', null, '2', '2', '2021-04-01 16:18:04');
INSERT INTO konten_appe VALUES ('322', '18', 'fml', 'angkatan1_2021_18.jpg', 'jpg', '', '', '18', '', '1970-01-01', null, '2', '2', '2021-04-01 16:18:09');
INSERT INTO konten_appe VALUES ('327', '18', 'fml', 'angkatan1_2021_19.jpg', 'jpg', '', '', '19', '', '1970-01-01', null, '2', '2', '2021-04-01 16:18:14');
INSERT INTO konten_appe VALUES ('332', '18', 'fml', 'angkatan1_2021_20.jpg', 'jpg', '', '', '20', '', '1970-01-01', null, '2', '2', '2021-04-01 16:18:20');
INSERT INTO konten_appe VALUES ('337', '18', 'fml', 'angkatan1_2021_21.jpg', 'jpg', '', '', '21', '', '1970-01-01', null, '2', '2', '2021-04-01 16:18:24');
INSERT INTO konten_appe VALUES ('342', '18', 'fml', 'angkatan1_2021_22.jpg', 'jpg', '', '', '22', '', '1970-01-01', null, '2', '2', '2021-04-01 16:18:29');
INSERT INTO konten_appe VALUES ('347', '18', 'fml', 'angkatan1_2021_23.jpg', 'jpg', '', '', '23', '', '1970-01-01', null, '2', '2', '2021-04-01 16:18:33');
INSERT INTO konten_appe VALUES ('352', '18', 'fml', 'angkatan1_2021_24.jpg', 'jpg', '', '', '24', '', '1970-01-01', null, '2', '2', '2021-04-01 16:18:39');
INSERT INTO konten_appe VALUES ('357', '18', 'fml', 'angkatan1_2021_25.jpg', 'jpg', '', '', '25', '', '1970-01-01', null, '2', '2', '2021-04-01 16:18:44');
INSERT INTO konten_appe VALUES ('362', '18', 'fml', 'angkatan1_2021_26.jpg', 'jpg', '', '', '26', '', '1970-01-01', null, '2', '2', '2021-04-01 16:18:49');
INSERT INTO konten_appe VALUES ('367', '18', 'fml', 'angkatan1_2021_27.jpg', 'jpg', '', '', '27', '', '1970-01-01', null, '2', '2', '2021-04-01 16:18:56');
INSERT INTO konten_appe VALUES ('372', '18', 'fml', 'angkatan1_2021_28.jpg', 'jpg', '', '', '28', '', '1970-01-01', null, '2', '2', '2021-04-01 16:19:03');
INSERT INTO konten_appe VALUES ('377', '18', 'fml', 'angkatan1_2021_29.jpg', 'jpg', '', '', '29', '', '1970-01-01', null, '2', '2', '2021-04-01 16:19:12');
INSERT INTO konten_appe VALUES ('382', '18', 'fml', 'angkatan1_2021_30.jpg', 'jpg', '', '', '30', '', '1970-01-01', null, '2', '2', '2021-04-01 16:19:23');
INSERT INTO konten_appe VALUES ('387', '18', 'fml', 'angkatan1_2021_31.jpg', 'jpg', '', '', '32', '', '1970-01-01', null, '2', '2', '2021-04-01 16:19:28');
INSERT INTO konten_appe VALUES ('392', '18', 'fml', 'angkatan1_2021_32.jpg', 'jpg', '', '', '31', '', '1970-01-01', null, '2', '2', '2021-04-01 16:19:32');
INSERT INTO konten_appe VALUES ('397', '18', 'fml', 'angkatan1_2021_33.jpg', 'jpg', '', '', '33', '', '1970-01-01', null, '2', '2', '2021-04-01 16:19:36');
INSERT INTO konten_appe VALUES ('398', '0', 'fm', 'Master Soal', 'Upload Image Soal', 'mastersoal', null, null, null, null, null, '1', '1', '2022-05-12 23:53:07');
INSERT INTO konten_appe VALUES ('452', '8', 'fml', 'noimage.jpg', 'jpg', '', null, null, null, null, null, '14', '14', '2022-06-27 00:17:58');
INSERT INTO konten_appe VALUES ('618', '8', 'fml', 'bkkb.png', 'png', '', null, null, null, null, null, '1', '1', '2023-01-20 23:13:56');
INSERT INTO konten_appe VALUES ('620', '8', 'fml', 'logo_bkkbn.png', 'png', '', null, null, null, null, null, '1', '1', '2023-01-20 23:38:32');

-- ----------------------------
-- Table structure for `konten_komentar`
-- ----------------------------
DROP TABLE IF EXISTS `konten_komentar`;
CREATE TABLE `konten_komentar` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `id_konten` int(11) NOT NULL,
  `nama_komentator` varchar(200) NOT NULL,
  `email_komentator` varchar(100) NOT NULL,
  `tanggal_komentar` datetime NOT NULL,
  `isi_komentar` text NOT NULL,
  `status` enum('on','off') NOT NULL,
  `id_induk` int(11) NOT NULL,
  `urutan` int(11) NOT NULL,
  `ip_adress` varchar(100) NOT NULL,
  PRIMARY KEY (`id_komentar`),
  KEY `id_berita` (`id_konten`),
  KEY `status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of konten_komentar
-- ----------------------------

-- ----------------------------
-- Table structure for `lembaga`
-- ----------------------------
DROP TABLE IF EXISTS `lembaga`;
CREATE TABLE `lembaga` (
  `id_personil` int(11) NOT NULL AUTO_INCREMENT,
  `kd_personil` varchar(5) NOT NULL,
  `nama_personil` varchar(255) NOT NULL,
  `nip_personil` varchar(18) NOT NULL,
  `pangkat` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_personil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of lembaga
-- ----------------------------

-- ----------------------------
-- Table structure for `link_arsip`
-- ----------------------------
DROP TABLE IF EXISTS `link_arsip`;
CREATE TABLE `link_arsip` (
  `id_link_arsip` int(11) NOT NULL AUTO_INCREMENT,
  `id_konten` varchar(11) DEFAULT '',
  `judul_arsip` varchar(255) DEFAULT NULL,
  `path_folder` varchar(255) DEFAULT '',
  `tahun` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id_link_arsip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of link_arsip
-- ----------------------------

-- ----------------------------
-- Table structure for `materi`
-- ----------------------------
DROP TABLE IF EXISTS `materi`;
CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_materi` varchar(255) NOT NULL,
  `jml_soal` varchar(4) NOT NULL,
  `status_materi` enum('Berlaku','Tidak Berlaku') NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_materi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of materi
-- ----------------------------

-- ----------------------------
-- Table structure for `poten_nilai`
-- ----------------------------
DROP TABLE IF EXISTS `poten_nilai`;
CREATE TABLE `poten_nilai` (
  `id_potensi` int(11) NOT NULL AUTO_INCREMENT,
  `kd_personil_wwcr` varchar(5) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `nilai_da_pot` varchar(5) DEFAULT NULL,
  `nilai_lb_pot` varchar(5) DEFAULT NULL,
  `nilai_sk_pot` varchar(5) DEFAULT NULL,
  `nilai_ini_pot` varchar(5) DEFAULT NULL,
  `nilai_dtk_pot` varchar(5) DEFAULT NULL,
  `nilai_kep_pot` varchar(5) DEFAULT NULL,
  `nilai_db_pot` varchar(5) DEFAULT NULL,
  `nilai_tj_pot` varchar(5) DEFAULT NULL,
  `nilai_ki_pot` varchar(5) DEFAULT NULL,
  `nilai_kd_pot` varchar(5) DEFAULT NULL,
  `nilai_se_pot` varchar(5) DEFAULT NULL,
  `nilai_pot` varchar(5) DEFAULT NULL,
  `percent_pot` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_potensi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of poten_nilai
-- ----------------------------

-- ----------------------------
-- Table structure for `reff_kompetensi`
-- ----------------------------
DROP TABLE IF EXISTS `reff_kompetensi`;
CREATE TABLE `reff_kompetensi` (
  `id_reff_kompetensi` int(11) NOT NULL AUTO_INCREMENT,
  `kd_level` varchar(5) DEFAULT NULL,
  `nama_level` varchar(200) DEFAULT NULL,
  `kompetensi` varchar(50) DEFAULT NULL,
  `bobot_lgd` varchar(4) DEFAULT NULL,
  `bobot_ankas` varchar(4) DEFAULT NULL,
  `bobot_pw` varchar(4) DEFAULT NULL,
  `bobot_bei` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id_reff_kompetensi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of reff_kompetensi
-- ----------------------------

-- ----------------------------
-- Table structure for `registrasi`
-- ----------------------------
DROP TABLE IF EXISTS `registrasi`;
CREATE TABLE `registrasi` (
  `id_reg` int(11) NOT NULL AUTO_INCREMENT,
  `id_peserta` int(11) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(19) DEFAULT NULL,
  `gol` varchar(50) DEFAULT NULL,
  `jabatan` text DEFAULT NULL,
  `unker` text DEFAULT NULL,
  `jenped_awal` varchar(10) DEFAULT NULL,
  `jur_awal` text DEFAULT NULL,
  `univ_awal` text DEFAULT NULL,
  `thn_awal` varchar(10) DEFAULT NULL,
  `jenpend_akhir` varchar(10) DEFAULT NULL,
  `jur_akhir` text DEFAULT NULL,
  `univ_akhir` text DEFAULT NULL,
  `thn_akhir` varchar(10) DEFAULT NULL,
  `jab_1` text DEFAULT NULL,
  `unker_1` text DEFAULT NULL,
  `thn_unker_1` varchar(10) DEFAULT NULL,
  `jab_2` text DEFAULT NULL,
  `unker_2` text DEFAULT NULL,
  `thn_unker_2` varchar(10) DEFAULT NULL,
  `unker_puas` longtext DEFAULT NULL,
  `alasan_puas` longtext DEFAULT NULL,
  `unker_no_puas` longtext DEFAULT NULL,
  `alasan_no_puas` longtext DEFAULT NULL,
  `kebijakan` longtext DEFAULT NULL,
  `kekuatan_1` longtext DEFAULT NULL,
  `mengapa_kekuatan_1` longtext DEFAULT NULL,
  `kekuatan_2` longtext DEFAULT NULL,
  `mengapa_kekuatan_2` longtext DEFAULT NULL,
  `ket` varchar(1) DEFAULT 'Y',
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_reg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPRESSED KEY_BLOCK_SIZE=16;

-- ----------------------------
-- Records of registrasi
-- ----------------------------

-- ----------------------------
-- Table structure for `soal_ankas`
-- ----------------------------
DROP TABLE IF EXISTS `soal_ankas`;
CREATE TABLE `soal_ankas` (
  `id_ankas` int(11) NOT NULL AUTO_INCREMENT,
  `id_materi` int(11) NOT NULL,
  `wacana` longtext CHARACTER SET utf8mb4 NOT NULL,
  `tanya_ankas1` longtext CHARACTER SET utf8mb4 NOT NULL,
  `tanya_ankas2` longtext CHARACTER SET utf8mb4 NOT NULL,
  `tanya_ankas3` longtext CHARACTER SET utf8mb4 NOT NULL,
  `tanya_ankas4` longtext CHARACTER SET utf8mb4 NOT NULL,
  `ket` varchar(1) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_ankas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of soal_ankas
-- ----------------------------

-- ----------------------------
-- Table structure for `soal_apm_dua`
-- ----------------------------
DROP TABLE IF EXISTS `soal_apm_dua`;
CREATE TABLE `soal_apm_dua` (
  `id_apm_dua` int(11) NOT NULL AUTO_INCREMENT,
  `id_materi` int(11) DEFAULT NULL,
  `id_appe` int(11) DEFAULT NULL,
  `jwb_apm_dua` varchar(5) DEFAULT NULL,
  `nilai` varchar(6) DEFAULT NULL,
  `ket` enum('Y','N') DEFAULT 'Y',
  `last_update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_apm_dua`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of soal_apm_dua
-- ----------------------------

-- ----------------------------
-- Table structure for `soal_apm_satu`
-- ----------------------------
DROP TABLE IF EXISTS `soal_apm_satu`;
CREATE TABLE `soal_apm_satu` (
  `id_apm_satu` int(11) NOT NULL AUTO_INCREMENT,
  `id_materi` int(11) DEFAULT NULL,
  `id_appe` int(11) DEFAULT NULL,
  `jwb_apm_satu` varchar(5) DEFAULT NULL,
  `nilai` varchar(6) DEFAULT NULL,
  `ket` enum('Y','N') DEFAULT 'Y',
  `last_update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_apm_satu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of soal_apm_satu
-- ----------------------------

-- ----------------------------
-- Table structure for `soal_cfit_dua`
-- ----------------------------
DROP TABLE IF EXISTS `soal_cfit_dua`;
CREATE TABLE `soal_cfit_dua` (
  `id_soal_cfit_dua` int(11) NOT NULL AUTO_INCREMENT,
  `id_materi` int(11) DEFAULT NULL,
  `id_appe` int(11) DEFAULT NULL,
  `jwb_cfit_dua` varchar(5) DEFAULT NULL,
  `nilai` varchar(6) DEFAULT NULL,
  `ket` enum('Y','N') DEFAULT 'Y',
  `penjelasan` longtext CHARACTER SET utf8mb4 DEFAULT NULL,
  `last_update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_soal_cfit_dua`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of soal_cfit_dua
-- ----------------------------

-- ----------------------------
-- Table structure for `soal_cfit_empat`
-- ----------------------------
DROP TABLE IF EXISTS `soal_cfit_empat`;
CREATE TABLE `soal_cfit_empat` (
  `id_soal_cfit_empat` int(11) NOT NULL AUTO_INCREMENT,
  `id_materi` int(11) DEFAULT NULL,
  `id_appe` int(11) DEFAULT NULL,
  `jwb_cfit_empat` varchar(5) DEFAULT NULL,
  `nilai` varchar(6) DEFAULT NULL,
  `ket` enum('Y','N') DEFAULT 'Y',
  `penjelasan` longtext CHARACTER SET utf8mb4 DEFAULT NULL,
  `last_update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_soal_cfit_empat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of soal_cfit_empat
-- ----------------------------

-- ----------------------------
-- Table structure for `soal_cfit_satu`
-- ----------------------------
DROP TABLE IF EXISTS `soal_cfit_satu`;
CREATE TABLE `soal_cfit_satu` (
  `id_soal_cfit_satu` int(11) NOT NULL AUTO_INCREMENT,
  `id_materi` int(11) DEFAULT NULL,
  `id_appe` int(11) DEFAULT NULL,
  `jwb_cfit_satu` varchar(5) DEFAULT NULL,
  `nilai` varchar(6) DEFAULT NULL,
  `ket` enum('Y','N') DEFAULT 'Y',
  `penjelasan` longtext CHARACTER SET utf8mb4 DEFAULT NULL,
  `last_update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_soal_cfit_satu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of soal_cfit_satu
-- ----------------------------

-- ----------------------------
-- Table structure for `soal_cfit_tiga`
-- ----------------------------
DROP TABLE IF EXISTS `soal_cfit_tiga`;
CREATE TABLE `soal_cfit_tiga` (
  `id_soal_cfit_tiga` int(11) NOT NULL AUTO_INCREMENT,
  `id_materi` int(11) DEFAULT NULL,
  `id_appe` int(11) DEFAULT NULL,
  `jwb_cfit_tiga` varchar(5) DEFAULT NULL,
  `nilai` varchar(6) DEFAULT NULL,
  `ket` enum('Y','N') DEFAULT 'Y',
  `penjelasan` longtext CHARACTER SET utf8mb4 DEFAULT NULL,
  `last_update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_soal_cfit_tiga`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of soal_cfit_tiga
-- ----------------------------

-- ----------------------------
-- Table structure for `soal_papi`
-- ----------------------------
DROP TABLE IF EXISTS `soal_papi`;
CREATE TABLE `soal_papi` (
  `id_papi` int(11) NOT NULL AUTO_INCREMENT,
  `id_materi` int(11) NOT NULL,
  `soal_papi_a` text NOT NULL,
  `soal_papi_b` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_papi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of soal_papi
-- ----------------------------

-- ----------------------------
-- Table structure for `soal_sjt`
-- ----------------------------
DROP TABLE IF EXISTS `soal_sjt`;
CREATE TABLE `soal_sjt` (
  `id_sjt` int(11) NOT NULL AUTO_INCREMENT,
  `id_materi` int(11) NOT NULL,
  `soal_sjt` text NOT NULL,
  `opsi_a` text NOT NULL,
  `opsi_b` text NOT NULL,
  `opsi_c` text NOT NULL,
  `opsi_d` text NOT NULL,
  `opsi_e` text NOT NULL,
  `nilai_a` varchar(2) NOT NULL,
  `nilai_b` varchar(2) NOT NULL,
  `nilai_c` varchar(2) NOT NULL,
  `nilai_d` varchar(2) NOT NULL,
  `nilai_e` varchar(2) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_sjt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of soal_sjt
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(4) DEFAULT NULL,
  `username` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `passwd` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `nama_user` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11343 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO users VALUES ('1', '11000001', 'admin_cms', 'dd6432b04aa84e4930b415bb0167ab3fce270b2a', 'Admin Web Default', 'on');
INSERT INTO users VALUES ('14', '11000005', 'admin_apl', '4cfff6129a1354dfe83b9e746bad4ddfef6b68fd', 'Admin Aplikasi', 'on');

-- ----------------------------
-- Table structure for `user_online`
-- ----------------------------
DROP TABLE IF EXISTS `user_online`;
CREATE TABLE `user_online` (
  `user_id` int(7) NOT NULL,
  `last_activity` datetime NOT NULL,
  `ip_address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_online
-- ----------------------------
