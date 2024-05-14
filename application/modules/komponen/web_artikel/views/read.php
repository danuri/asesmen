<?php
$konten->isi_konten=str_replace("thumbs_","",$konten->isi_konten);		
$konten->isi_konten=str_replace('src="assets','src="'.base_url().'assets',$konten->isi_konten);		
?>
  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="meeting-single-item">
                <div class="thumb">
                  <?php echo $cGambar;?>
                  <div class="price">
                    <span><?=strtoupper(@$konten->nama_kategori);?></span>
                  </div>
                  <div class="date">
                    <h6><?php echo @$konten->tanggal;?> <span><?php echo @$konten->hari;?></span></h6>
                  </div>
                </div>
                <div class="down-content">
                  <a href="meeting-details.html"><h4><?=@$konten->judul;?></h4></a>
                  <p><?php echo @$konten->sub_judul;?></p>
                    <?=@$konten->isi_konten;?>
				  <br/>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="hours">
                        <p><?php echo $cLampiran;?></p>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="share">
                        <h5>Share :</h5>
                        <ul>
                          <li><a href="#">Facebook</a>,</li>
                          <li><a href="#">Twitter</a>,</li>
                          <li><a href="#">Instagram</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button-red">
                <a href="meetings.html">Kembali Halaman Utama</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>






















<style>
.syntaxhighlighter table .container:before {
    display: none !important;
}
</style>

	<script type="text/javascript" src="<?=base_url();?>assets/js/syntaxhighlighter/scripts/shCore.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/syntaxhighlighter/scripts/shBrushJScript.js"></script>
	<link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/js/syntaxhighlighter/styles/shCoreDefault.css"/>
	<script type="text/javascript">SyntaxHighlighter.all();</script>
<script type="text/javascript">
function rmsh(){
	$(".syntaxhighlighter .toolbar").remove();
}
</script>
