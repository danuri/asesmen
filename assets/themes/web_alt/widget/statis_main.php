      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="meeting-single-item">
                <div class="thumb">
                  <div class="price">
                    <!--<span>$14.00</span>-->
                  </div>
                  <div class="date">
                    <!--<h6>Nov <span>12</span></h6>-->
                  </div>
                  <!--<a href="meeting-details.html"><img src="assets/images/single-meeting.jpg" alt=""></a>-->
                </div>
                <div class="down-content">
                  <a href="meeting-details.html"><h4><?=strtoupper(@$daftar[0]->judul);?></h4></a>
                    <?=@$daftar[0]->isi_konten;?>
                    <div class="col-lg-12">
                      <div class="share">
                        <h5>Share:</h5>
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



















<style>
.syntaxhighlighter table .container:before {
    display: none !important;
}
</style>

	<script type="text/javascript" src="<?=base_url();?>assets/js/syntaxhighlighter/scripts/shCore.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/syntaxhighlighter/scripts/shBrushJScript.js"></script>
	<link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/js/syntaxhighlighter/styles/shCoreDefault.css"/>
	<script type="text/javascript">SyntaxHighlighter.all();</script>
<style>
.syntaxhighlighter div.toolbar span a.toolbar_item{
   display: none !important;
} 

.syntaxhighlighter .toolbar {
  background: none !important;
}
</style>
