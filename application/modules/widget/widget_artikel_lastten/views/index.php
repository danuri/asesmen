
        <div class="col-lg-12">
          <div class="row">
<?php
$brow = ceil($banyaknya/2);	
for($i=0;$i<$brow;$i++){
?>				  
            <div class="col-lg-6">
              <div class="meeting-item">
			  
			  <?php if(isset($daftar[$i]->id_konten)){ ?>
                <div class="thumb">
                  <div class="price">			  
                    <span><?=$daftar[$i]->nama_kategori;?></span>
                  </div>
                  <a href="<?=site_url()."read/artikel/".$daftar[$i]->id_konten."/".$daftar[$i]->kat_seo."/".$daftar[$i]->seo?>"><img src="<?=site_url();?><?=$daftar[$i]->thumb;?>"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6><?=$daftar[$i]->tanggal;?> <span><?=$daftar[$i]->hari;?></span></h6>
                  </div>
                  <a href="<?=site_url()."read/artikel/".$daftar[$i]->id_konten."/".$daftar[$i]->kat_seo."/".$daftar[$i]->seo?>"><p><?=$daftar[$i]->judul;?></p></a>
                </div>
				<?php } ?>
				<br/>
				
				<?php if(isset($daftar[($i+$brow)]->id_konten)){ ?>
                <div class="thumb">
                  <div class="price">			  
                    <span><?=$daftar[($i+$brow)]->nama_kategori;?></span>
                  </div>
                  <a href=<?=site_url()."read/artikel/".@$daftar[($i+$brow)]->id_konten."/".@$daftar[($i+$brow)]->kat_seo."/".@$daftar[($i+$brow)]->seo?>"><img src="<?=site_url();?><?=@$daftar[($i+$brow)]->thumb;?>"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6><?=@$daftar[($i+$brow)]->tanggal;?> <span><?=@$daftar[($i+$brow)]->hari;?></span></h6>
                  </div>
                  <a href="<?=site_url()."read/artikel/".@$daftar[($i+$brow)]->id_konten."/".@$daftar[($i+$brow)]->kat_seo."/".@$daftar[($i+$brow)]->seo?>"><p><?=@$daftar[($i+$brow)]->judul;?></p></a>
                </div>
				<?php } ?>
				<br/>
				
              </div>
			</div>
<?php
}
?>
          </div>
    </div>

