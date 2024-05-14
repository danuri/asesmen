<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />

    <title><?=$nama_app;?> | <?=$slogan_app;?></title>
	
	<link rel="shortcut icon" href="<?=base_url();?>assets/media/upload/bawaan/logo_ktng.gif" type="image/x-icon" />

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('assets/themes/themereflux/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?=base_url('assets/themes/themereflux/assets/css/fontawesome.css');?>" />
    <link rel="stylesheet" href="<?=base_url('assets/themes/themereflux/assets/css/templatemo-style.css');?>" />
    <link rel="stylesheet" href="<?=base_url('assets/themes/themereflux/assets/css/owl.css');?>" />
    <link rel="stylesheet" href="<?=base_url('assets/themes/themereflux/assets/css/lightbox.css');?>" />

<script type = "text/javascript" >
function preventBack(){window.history.forward();}
setTimeout("preventBack()", 0);
window.onunload=function(){null};
</script>	
	
<style type="text/css">
    .swal2-popup {
      font-size: 1.6rem !important;
     }
    body {
      padding-right: 0 !important;
    }
    #btnFloating {
      /*display: none;*/
      position: fixed;
      bottom: 10px;
      right: 10px;
      z-index: 99;
      border: none;
      outline: none;
      color: white;
      cursor: pointer;
      padding: 15px;
      border-radius: 50%;
    }
  </style>	

  </head>

  <body>
    <div id="page-wraper">
      <!-- Sidebar Menu -->
      <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
            <div class="image">
              <a href="#"><img src="<?=base_url('assets/media/upload/bawaan/logo_ktng.gif');?>" alt="" /></a>
            </div>
            <div class="author-content">
              <h4><?php echo $header->judul_header; ?></h4>
              <span><?php echo $header->sub_judul; ?></span>
            </div>
            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
                <li><a href="#section1">Assessment Center</a></li>
                <li><a href="#section2">Layanan Assessment</a></li>
                <li><a href="#section5">Tenaga Ahli</a></li>
                <li><a href="#section3">Kegiatan & Kerjasama</a></li>
                <li><a href="#section4">Hubungi Kami</a></li>
              </ul>
            </nav>
            <div class="social-network">
              <ul class="soial-icons">
                <li><a href="#" onclick="location.href='<?php echo base_url();?>web'"><i class="fa fa-laptop"></i></a></li>
                <li><a href="#" onclick="location.href='<?php echo base_url();?>login'"><i class="fa fa-android"></i></a></li>
                <li><a href="#"onclick="location.href='<?php echo base_url();?>registrasi'"><i class="fa fa-pencil-square"></i></a></li>
              </ul>
            </div>
            <div class="copyright-text">
              <p>All Rights Reserved <br/> 	whaddupsap&trade; - pRakom11 @ 2022</p>
            </div>
          </div>
        </div>
      </div>

      <section class="section about-me" data-section="section1">
        <div class="container">
          <div class="section-heading">
            <h2>Assessment Center</h2>
            <div class="line-dec"></div>
            <span>Assessment Center merupakan metode evaluasi standar yang berbasis kompetensi melalui proses sistematis untuk menilai keterampilan, pengetahuan dan kemampuan individu yang dianggap kritikal bagi keberhasilan kinerja.</span>
          </div>
          <div class="left-image-post">
            <div class="row">
              <div class="col-md-6">
                <div class="left-image">
                  <figure class="snip1321">
                    <img src="<?=base_url('assets/themes/themereflux/assets/images/sertf.png');?>" alt="sq-sample26" />
                    <figcaption>
                      <a href="<?=base_url('assets/themes/themereflux/assets/images/sertf.png');?>" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>Pengakuan Kelayakan</h4>
                      <span>Tahun 2021 UPT Penilaian Kompetensi BKPSDM Kota Tangerang mendapatkan pengakuan kelayakan penyelenggaraan Penilaian Kompetensi oleh Badan Kepegawaian Negara selaku Instansi pembina dengan nilai 98,8 dan berakreditasi “A”</span>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="col-md-6">
                <div class="right-text">
                  <p>Penilaian dengan metode Assessment Center menggunakan berbagai simulasi, instrumen tes prilaku, observasi dan wawancara untuk mendapatkan gambaran kompetensi pegawai. Hasil assessment dipergunakan sebagai salah satu pertimbangan dalam pengambilan keputusan, penyusunan program pengembangan pegawai dan pengembangan organisasi.</p>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="container">
							<div class="row center">
							    <!--
								<div class="col-lg-4">
									<div class="" style="margin-top:30px;"><button style="width:100%;box-shadow:rgb(0 0 0 / 19%) 0px 10px 20px, rgb(0 0 0 / 23%) 0px 6px 6px;" onclick="location.href='<?php echo base_url();?>registrasi'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; REGISTRASI</a></button></div>
								</div>
								<div class="col-lg-4">
									<div class="" style="margin-top:30px;"><button style="width:100%;box-shadow:rgb(0 0 0 / 19%) 0px 10px 20px, rgb(0 0 0 / 23%) 0px 6px 6px;" onclick="location.href='<?php echo base_url();?>login'"><i class="fa fa-laptop" aria-hidden="true"></i>&ensp;  PSIKOMETRI</a></button></div>
								</div>
								-->
								<div class="col-lg-12">
									<div class="" style="margin-top:30px;"><button style="width:100%;box-shadow:rgb(0 0 0 / 19%) 0px 10px 20px, rgb(0 0 0 / 23%) 0px 6px 6px;" onclick="location.href='<?php echo base_url();?>login'"><i class="fa fa-th-large" aria-hidden="true"></i>&ensp; ASSESSMENT</a></button></div>
								</div>
							</div>
						</div>
					</div>
				</div>
              </div>
            </div>
          </div>
          <div class="right-image-post">
            <div class="row">
              <div class="col-md-6">
                <div class="left-text">
                  <h4>Manfaat Assessment :</h4>
				  <table>
					<tr>
						<td width="30px">1.</td>
						<td width="500px">Memperoleh kriteria yang jelas untuk jabatan tertentu.</td>
					</tr>
					<tr>
						<td width="30px">2.</td>
						<td width="500px">Mengidentifikasi kader-kader pemimpin dengan tingkat akurasi dan objektifitas yang dapat diandalkan.</td>
					</tr>
					<tr>
						<td width="30px">3.</td>
						<td width="500px">Menghasilkan strategi dan saran pengembangan pegawai  yang spesifikasi dan terencana.</td>
					</tr>
					<tr>
						<td width="30px">4.</td>
						<td width="500px">Mengidentifikasi kebutuhan pengembangan manajerial pegawai.</td>
					</tr>
					<tr>
						<td width="30px">5.</td>
						<td width="500px">Menghasilkan penilaian kompetensi yang dapat menjadi salah satu pertimbangan atasan dalam pengambilan keputusan terkait rekrutmen, promosi, mutasi dan pengembangan karir pegawai.</td>
					</tr>
				 </table>	
				</div>
              </div>
              <div class="col-md-6">
                <div class="right-image">
                  <img src="<?=base_url('assets/themes/themereflux/assets/images/ass_1.jpg');?>" alt="" />
                </div>
              </div>
            </div>
          </div>
		  
          <div class="left-image-post">
            <div class="row">
              <div class="col-md-6">
                <div class="left-image">
                  <img src="<?=base_url('assets/themes/themereflux/assets/images/ass_3.jpg');?>" style="margin-top:40px;" alt="" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="right-text">
                  <h4>Nilai Budaya :</h4>
					<p><b>INTEGRITAS</b><br/>
						Keselarasan antara hati, pikiran, perkataan, perbuatan yang baik dan benar serta menjalankan prinsip netralitas.</p>
					<p><b>PROFESIONAL</b><br/>
						Tanggung jawab dalam bekerja, menjalankan etika profesional kompeten dibidangnya dan tepat waktu dengan hasil terbaik.</p>
					<p><b>INOVATIF</b><br/>
						Menyempurnakan yang sudah ada dan mengkreasikan hal baru yang lebih baik.</p>
					<p><b>PENGEMBANGAN</b><br/>
						Menggali potensi pegawai dan mengembangkan secara berkelanjutan.</p>
                </div>
              </div>
            </div>
          </div>
		  
        </div>
      </section>

      <section class="section my-services" data-section="section2">
        <div class="container">
          <div class="section-heading">
            <h2>Layanan Assessment</h2>
            <div class="line-dec"></div>
            <span>Assessment dengan menggunakan tes psikologi (psikometri) beberapa simulasi prilaku, dan wawancara kompetensi. Jasa layanan ini cocok digunakan untuk menjaring calon manajer atau pejabat setingkat Eselon II (Jabatan Tinggi Pratama), Eselon III (Jabatan Administrator) dan Eselon IV (Jabatan Pengawas).</span>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="service-item">
                <div class="first-service-icon service-icon"></div>
                <h4>Psikotes dan Personal Profiling</h4>
                <p>Assessment dengan menggunakan beragam tes psikologi (psikometri) untuk menggali potensi dasar dan kepribadian individu, membantu pegawai dalam mengenal potensi diri dan area pengembangan diri dan dapat digunakan untuk seleksi staf/pelaksana.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <div class="second-service-icon service-icon"></div>
                <h4>Rancangan Pengembangan</h4>
				<p>Layanan ini dilakukan sebagai tindak lanjut dari hasil penilaian kompetensi dan menghasilkan rancangan program pengembangan untuk individu maupun program pengembangan untuk organisasi guna mencapai tujuan Organisasi.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <div class="third-service-icon service-icon"></div>
                <h4>Quasi-Assessment</h4>
				<p>Assessment dengan menggunakan tes psikologi (psikometri), wawancara kompetensi dan/atau diskusi kelompok, untuk menjaring calon manager / pejabat setingkat Eselon 4 (empat) & 3 (tiga).</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <div class="fourth-service-icon service-icon"></div>
                <h4>Pengembangan Kompetensi</h4>
				<p>Layanan jasa Assessment yang berhubungan dengan materi pengenalan kompetensi dan aspek-aspek yang lainnya berhubungan dengan kompetensi individu personal.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <div class="five-service-icon service-icon"></div>	
                <h4>Simulasi & Penilaian</h4>
				<p>Melayani konsep pengembangan simulasi yang dibutuhkan untuk meningkatkan kualitas dalam melakukan penilaian kompetensi</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <div class="six-service-icon service-icon"></div>
                <h4>Konseling</h4>
				<p>Melayani konseling permasalahan pegawai. Layanan ini membantu para pegawai menyelesaikan permasalahan yang dapat mengganggu kinerja.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
	  
      <section class="section my-work" data-section="section5">
        <div class="container">
          <div class="section-heading">
            <h2>Tenaga Ahli</h2>
            <div class="line-dec"></div>
            <span>Assessor SDM Aparatur yang tersertifikasi, profesional & berpengalaman dengan latar belakang Psikolog.</span>
          </div>
          <div class="row">
            <div class="isotope-wrapper">
              <form class="isotope-toolbar">
                <label><input type="radio" data-type="*" checked="" name="isotope-filter" />
                  <span>all</span></label>
                <label><input type="radio" data-type="assesor" name="isotope-filter" />
                  <span>Fungsional</span></label>
                <label><input type="radio" data-type="struktural" name="isotope-filter" />
                  <span>Struktural</span></label>
              </form>
              <div class="isotope-box">
                <div class="isotope-item" data-type="assesor">
                  <figure class="snip1321">
                    <img src="<?=base_url('assets/themes/themereflux/assets/images/nana.jpg');?>" style="width:300px;height:300px;" alt="sq-sample26" />
                    <figcaption>
                      <a href="<?=base_url('assets/themes/themereflux/assets/images/nana.jpg');?>" style="width:300px;height:300px;" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>ELVINA</h4>
                      <span>Assessor SDM Aparatur</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="assesor">
                  <figure class="snip1321">
                    <img src="<?=base_url('assets/themes/themereflux/assets/images/nun.jpg');?>" style="width:300px;height:300px;" alt="sq-sample26" />
                    <figcaption>
                      <a href="<?=base_url('assets/themes/themereflux/assets/images/nun.jpg');?>" style="width:300px;height:300px;" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>NUNUN HERLINA</h4>
                      <span>Assessor SDM Aparatur</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="assesor">
                  <figure class="snip1321">
                    <img src="<?=base_url('assets/themes/themereflux/assets/images/wulan.jpg');?>" style="width:300px;height:300px;" alt="sq-sample26" />
                    <figcaption>
                      <a href="<?=base_url('assets/themes/themereflux/assets/images/wulan.jpg');?>" style="width:300px;height:300px;" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>YUSTINA RETNO WULANDARI</h4>
                      <span>Assessor SDM Aparatur</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="assesor">
                  <figure class="snip1321">
                    <img src="<?=base_url('assets/themes/themereflux/assets/images/sofi.jpg');?>" style="width:300px;height:300px;" alt="sq-sample26" />
                    <figcaption>
                      <a href="<?=base_url('assets/themes/themereflux/assets/images/sofi.jpg');?>" style="width:300px;height:300px;" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>SOFIA HIDAYATI AKBARIA</h4>
                      <span>Assessor SDM Aparatur</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="assesor">
                  <figure class="snip1321">
                    <img src="<?=base_url('assets/themes/themereflux/assets/images/gregs.jpg');?>" style="width:300px;height:300px;" alt="sq-sample26" />
                    <figcaption>
                      <a href="<?=base_url('assets/themes/themereflux/assets/images/gregs.jpg');?>" style="width:300px;height:300px;" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>AGUS SUKRIAWINATA</h4>
                      <span>Pranata Komputer</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="struktural">
                  <figure class="snip1321">
                    <img src="<?=base_url('assets/themes/themereflux/assets/images/hetty.jpg');?>" style="width:300px;height:300px;" alt="sq-sample26" />
                    <figcaption>
                      <a href="<?=base_url('assets/themes/themereflux/assets/images/hetty.jpg');?>" style="width:300px;height:300px;" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>HETTY PURWATY</h4>
                      <span>Kepala Sub Bagian Tata Usaha UPT</span>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
	  
      <section class="section my-work" data-section="section3">
        <div class="container">
          <div class="section-heading">
            <h2>Kegiatan & Kerjasama</h2>
            <div class="line-dec"></div>
            <span>Sejak didirikan pada tahun 2015 UPT Penilaian Kompetensi BKPSDM Kota Tangerang telah banyak melakukan kegiatan baik secara internal maupun eksternal dan dilibatkan dalam kegiatan Badan Kepegawaian Negara untuk melakukan Uji Kompetensi pada Kementerian/Lembaga/Pemerintah Daerah</span>
          </div>
          <div class="row">
            <div class="isotope-wrapper">
              <form class="isotope-toolbar">
                <label><input type="radio" data-type="*" checked="" name="isotope-filter" />
                  <span>all</span></label>
                <label><input type="radio" data-type="internal" name="isotope-filter" />
                  <span>Internal</span></label>
                <label><input type="radio" data-type="kerjasama" name="isotope-filter" />
                  <span>Kerjasama</span></label>
              </form>
              <div class="isotope-box">
                <div class="isotope-item" data-type="internal">
                  <figure class="snip1321">
                    <img src="<?=base_url('assets/themes/themereflux/assets/images/pengawas.jpg');?>" alt="sq-sample26" />
                    <figcaption>
                      <a href="<?=base_url('assets/themes/themereflux/assets/images/pengawas.jpg');?>" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>Pemetaan Kompetensi Jabatan Pengawas Kota Tangerang</h4>
                      <span>Pemetaan Kompetensi Jabatan Pengawas (Ess. IV) Linkup Pemerintah Kota Tangerang sebagai bahan pertimbangan pimpinan</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="internal">
                  <figure class="snip1321">
                    <img src="<?=base_url('assets/themes/themereflux/assets/images/pengawas2.jpg');?>" alt="sq-sample26" />
                    <figcaption>
                      <a href="<?=base_url('assets/themes/themereflux/assets/images/pengawas2.jpg');?>" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>Pemetaan Kompetensi Jabatan Pengawas Kota Tangerang</h4>
                      <span>Pemetaan Kompetensi Jabatan Pengawas (Ess. IV) Linkup Pemerintah Kota Tangerang sebagai bahan pertimbangan pimpinan</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="kerjasama">
                  <figure class="snip1321">
                    <img src="<?=base_url('assets/themes/themereflux/assets/images/tangkab.jpg');?>" alt="sq-sample26" />
                    <figcaption>
                      <a href="<?=base_url('assets/themes/themereflux/assets/images/tangkab.jpg');?>" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>Assessment Kab. Tangerang</h4>
                      <span>Assesment Kabupaten Tangerang sebanyak 129 peserta yang bertujuan untuk memetakan Pegawai ASN</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="kerjasama">
                  <figure class="snip1321">
                    <img src="<?=base_url('assets/themes/themereflux/assets/images/karawang.jpg');?>" alt="sq-sample26" />
                    <figcaption>
                      <a href="<?=base_url('assets/themes/themereflux/assets/images/karawang.jpg');?>" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>Assessment Kab. Karawang</h4>
                      <span>Assesment Kabupaten Karawang sebanyak 200 peserta Jabatan Pengawas dan 35 Peserta Tahap II (dua) Uji Kompetensi Jabatan Fungsional Guru</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="kerjasama">
                  <figure class="snip1321">
                    <img src="<?=base_url('assets/themes/themereflux/assets/images/baznas.jpg');?>" alt="sq-sample26" />
                    <figcaption>
                      <a href="<?=base_url('assets/themes/themereflux/assets/images/baznas.jpg');?>" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>Assesment Pimpinan BAZNAS</h4>
                      <span>Seleksi Calon Pimpinan BAZNAS Kota Tangerang yang ikuti oleh 23 Peserta bertempat di UPT Penilaian Kompetensi</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="kerjasama">
                  <figure class="snip1321">
                    <img src="<?=base_url('assets/themes/themereflux/assets/images/pdam.jpg');?>" alt="sq-sample26" />
                    <figcaption>
                      <a href="<?=base_url('assets/themes/themereflux/assets/images/pdam.jpg');?>" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>Assesment Direksi PDAM</h4>
                      <span>Seleksi Calon Direksi PDAM Kota Tangerang yang ikuti oleh 20 Peserta bertempat di UPT Penilaian Kompetensi</span>
                    </figcaption>
                  </figure>
                </div>
                
                <div class="isotope-item" data-type="kerjasama">
                  <figure class="snip1321">
                    <img src="<?=base_url('assets/themes/themereflux/assets/images/lambar1.jpg');?>" alt="sq-sample26" />
                    <figcaption>
                      <a href="<?=base_url('assets/themes/themereflux/assets/images/lambar1.jpg');?>" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>Seleksi JPTP Kab. Lampung Barat</h4>
                      <span>Seleksi Jabatan Pimpinan Tinggi Pratama Calon Sekretaris Daerah dan Calon Kepala Dinas di Lingkungan Pemerintah Kabupaten Lampung Barat </span>
                    </figcaption>
                  </figure>
                </div>
                
                <div class="isotope-item" data-type="kerjasama">
                  <figure class="snip1321">
                    <img src="<?=base_url('assets/themes/themereflux/assets/images/tulbang.jpg');?>" alt="sq-sample26" />
                    <figcaption>
                      <a href="<?=base_url('assets/themes/themereflux/assets/images/tulbang.jpg');?>" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>Seleksi JPTP Kab. Tulang Bawang</h4>
                      <span>Seleksi Jabatan Pimpinan Tinggi Pratama untuk mengisi 8 Jabatan Kepala Dinas di Lingkungan Pemerintah Kabupaten Tulang Bawang Provinsi Lampung</span>
                    </figcaption>
                  </figure>
                </div>
                
                <div class="isotope-item" data-type="kerjasama">
                  <figure class="snip1321">
                    <img src="<?=base_url('assets/themes/themereflux/assets/images/wrk_tangkab.jpg');?>" alt="sq-sample26" />
                    <figcaption>
                      <a href="<?=base_url('assets/themes/themereflux/assets/images/wrk_tangkab.jpg');?>" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>Workshop Assessment Kab. Tangerang</h4>
                      <span>Sharing dan Pembelajaran bagi calon Assessor Kab. Tangerang</span>
                    </figcaption>
                  </figure>
                </div>
  
                <div class="isotope-item" data-type="kerjasama">
                  <figure class="snip1321">
                    <img src="<?=base_url('assets/media/upload/dokumentasi2022/fotokegiatan/mesuji2.jpg');?>" alt="sq-sample26" style="width:100%" />
                    <figcaption>
                      <a href="<?=base_url('assets/media/upload/dokumentasi2022/fotokegiatan/mesuji2.jpg');?>" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>Seleksi JPT Pratama Kab. Mesuji</h4>
                      <span>Seleksi JPT Pratama untuk mengisi 6 Jabatan Kepala Dinas di Lingkungan Pemerintah Kabupaten Mesuji Provinsi Lampung</span>
                    </figcaption>
                  </figure>
                </div>
                
                <div class="isotope-item" data-type="kerjasama">
                  <figure class="snip1321">
                    <img src="<?=base_url('assets/themes/themereflux/assets/images/pasawaran.jpg');?>" alt="sq-sample26" style="width:100%" />
                    <figcaption>
                      <a href="<?=base_url('assets/themes/themereflux/assets/images/pasawaran.jpg');?>" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>Seleksi JPT Pratama Kab. Pasawaran</h4>
                      <span>Seleksi Jabatan Pimpinan Tinggi Pratama Calon Sekretaris Daerah dan Calon Kepala Dinas di Lingkungan Pemerintah Kabupaten Pasawaran</span>
                    </figcaption>
                  </figure>
                </div>
                
                <div class="isotope-item" data-type="kerjasama">
                  <figure class="snip1321">
                    <img src="<?=base_url('assets/themes/themereflux/assets/images/lampteng.jpg');?>" alt="sq-sample26" style="width:100%" />
                    <figcaption>
                      <a href="<?=base_url('assets/themes/themereflux/assets/images/lampteng.jpg');?>" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>Seleksi JPT Pratama Kab. Lampung Tengah</h4>
                      <span>Seleksi Jabatan Pimpinan Tinggi Pratama Calon Kepala Dinas di Lingkungan Pemerintah Kabupaten Lampung Tengah</span>
                    </figcaption>
                  </figure>
                </div>
                
                <div class="isotope-item" data-type="kerjasama">
                  <figure class="snip1321">
                    <img src="<?=base_url('assets/themes/themereflux/assets/images/cianjur.jpg');?>" alt="sq-sample26" style="width:100%" />
                    <figcaption>
                      <a href="<?=base_url('assets/themes/themereflux/assets/images/cianjur.jpg');?>" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>Assessment Kab. Cianjur</h4>
                      <span>Penilaian Potensi dan Kompetensi Jabatan Administrator dilingkungan Pemerintah Kabupaten Cianjur sebanyak 80 peserta</span>
                    </figcaption>
                  </figure>
                </div>
                
                <div class="isotope-item" data-type="kerjasama">
                  <figure class="snip1321">
                    <img src="<?=base_url('assets/themes/themereflux/assets/images/bekasi.jpg');?>" alt="sq-sample26" style="width:100%" />
                    <figcaption>
                      <a href="<?=base_url('assets/themes/themereflux/assets/images/bekasi.jpg');?>" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>Seleksi Terbuka JPTP Kab. Bekasi</h4>
                      <span>Seleksi Jabatan Pimpinan Tinggi Pratama Calon Kepala Dinas di Lingkungan Pemerintah Kabupaten Bekasi sebanyak 92 Peserta</span>
                    </figcaption>
                  </figure>
                </div>
                
                <div class="isotope-item" data-type="kerjasama">
                  <figure class="snip1321">
                    <img src="<?=base_url('assets/themes/themereflux/assets/images/lampura.jpg');?>" alt="sq-sample26" style="width:100%" />
                    <figcaption>
                      <a href="<?=base_url('assets/themes/themereflux/assets/images/lampura.jpg');?>" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>Seleksi JPT Pratama Kab. Lampung Utara</h4>
                      <span>Seleksi Jabatan Pimpinan Tinggi Pratama Calon Kepala Dinas di Lingkungan Pemerintah Kabupaten Lampung Utara</span>
                    </figcaption>
                  </figure>
                </div>
                
                
              </div>
            </div>
          </div>
        </div>
      </section>

    <section class="section contact-me" data-section="section4">
        <div class="container">
			<div class="section-heading">
				<h2>Hubungi Kami</h2>
            <div class="line-dec"></div>
				<span>UPT PENILAIAN KOMPETENSI <br/> Badan Kepegawaian dan Pengembangan SDM Kota Tangerang </span>
			</div>
        <div class="row">
			<div class="col-md-12">
				<div class="right-content">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<img src="<?=base_url('assets/themes/themereflux/assets/images/phone-wa.png');?>" alt="" style="width:200px;align:center;">
							</div>	
							<div class="col-md-8">
								<div class="container">
								<span>Gedung Cisadane Lt. IV JL. KS. Tubun No. 1 Kota Tangerang - Banten <br/>
									  bkpsdm@tangerangkota.go.id / uptbkpsdmtangerangkota@gmail.com <br/>
									  0878-8272-9419 / 0821-1462-1124</span>
									<div class="row">
										<div class="col-md-12">
											<video width="100%" height="300" controls poster ="<?=base_url('assets/themes/themereflux/assets/images/videocover.jpg');?>">
												<source width="100%" height="300" src="<?=base_url('assets/themes/themereflux/assets/images/upt_fix.mp4');?>" type="video/mp4">
											</video>						
										</div>	
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
        </div>
    </section>
    
<button onclick="wa('+6282114621124','Halo Helpdesk, saya butuh bantuan perihal...')" id="btnFloating" title="Butuh bantuan ? Klik untuk mengubungi Helpdesk" class="btn-danger btn-sm"><i class="fa fa-whatsapp fa-2x"></i></button>
	
</div>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url('assets/themes/themereflux/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?=base_url('assets/themes/themereflux/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <script src="<?=base_url('assets/themes/themereflux/assets/js/isotope.min.js');?>"></script>
    <script src="<?=base_url('assets/themes/themereflux/assets/js/owl-carousel.js');?>"></script>
    <script src="<?=base_url('assets/themes/themereflux/assets/js/lightbox.js');?>"></script>
    <script src="<?=base_url('assets/themes/themereflux/assets/js/custom.js');?>"></script>
    
	<script>
      //according to loftblog tut
      $(".main-menu li:first").addClass("active");

      var showSection = function showSection(section, isAnimate) {
        var direction = section.replace(/#/, ""),
          reqSection = $(".section").filter(
            '[data-section="' + direction + '"]'
          ),
          reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
          $("body, html").animate(
            {
              scrollTop: reqSectionPos
            },
            800
          );
        } else {
          $("body, html").scrollTop(reqSectionPos);
        }
      };

      var checkSection = function checkSection() {
        $(".section").each(function() {
          var $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
          if (topEdge < wScroll && bottomEdge > wScroll) {
            var currentId = $this.data("section"),
              reqLink = $("a").filter("[href*=\\#" + currentId + "]");
            reqLink
              .closest("li")
              .addClass("active")
              .siblings()
              .removeClass("active");
          }
        });
      };

      $(".main-menu").on("click", "a", function(e) {
        e.preventDefault();
        showSection($(this).attr("href"), true);
      });

      $(window).scroll(function() {
        checkSection();
      });
      
      function wa(nowa) {
    if (typeof window.orientation !== 'undefined') {
      window.open('https://api.whatsapp.com/send?phone=' + nowa + '&text=', '_blank');
    } else {
      window.open('https://web.whatsapp.com/send?phone=' + nowa + '&text=', '_blank');
    }
  }

	  
    </script>
  </body>
</html>
