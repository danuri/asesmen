<?php
date_default_timezone_set('Asia/Jakarta');
$hh = array(); $hh['Sun']="Minggu"; $hh['Mon']="Senin"; $hh['Tue']="Selasa"; $hh['Wed']="Rabu"; $hh['Thu']="Kamis"; $hh['Fri']="Jum'at"; $hh['Sat']="Sabtu";

function recKanal($nav,$idk) {
    foreach ($nav as $key=>$val) {
		$cls = ($val->path_kanal==$idk)?" active":"";
		if(isset($val->anak)){
			echo '<li class="has-sub '.$cls.'"><a href="javascript:void(0)"  class="has-sub-toggle" data-toggle="has-sub">'.$val->nama_kanal.' <b class="caret"></b></a><ul class="sub-menu">';
			recKanal($val->anak,$idk);
			echo '</ul></li>';
		} else {
			echo '<li class="'.$cls.'"><a href="'.site_url().'kanal/'.$val->path_kanal.'">'.$val->nama_kanal.'</a></li>';
		} // end anak
    } // end foreach
} // end recKanal
?>

  					  
  <!-- ***** Header Area Start ***** -->

      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
					<div class="row">
					<div class="col-lg-4">
                      <!-- ***** Logo Start ***** -->
						<a href="<?=site_url('kanal/'.$pth);?>">
						<div style="float:left;padding:10px 10px 10px 0px;"><img src="<?=$logo_app;?>" style='width:80px; vertical-align:middle;'></div>
						<div style="float:left;display:table;padding-top:20px; width:64%;">
							<div><h3 style="margin:0px;padding:0px;"><?php echo $header->judul_header; ?></h3></div>
							<div><?php echo $header->sub_judul; ?></div>
						</div>
						</a>
                      <!-- ***** Logo End ***** -->
					</div>
					<div class="col-sm-8">
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="<?=($id_kanal==$default->id_kanal)?"active":"";?>"><a href="<?=site_url();?>" class="active"><?=$default->nama_kanal;?></a></li>
						  <?php recKanal($kanal,$pkanal); ?> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
					</div>
					</div>
                  </nav>
              </div>
          </div>
      </div>
  <!-- ***** Header Area End ***** -->
