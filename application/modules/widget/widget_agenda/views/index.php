<div class='row'>
<div class="col-lg-12">
<div class="panel panel-primary">
<div class="panel-heading"><i class="fa fa-calendar fa-fw"></i> <?=$nama_wrapper;?></div>
<div class="panel-body">
<?php

$brow = ceil(count($daftar)/2);	

for($i=0;$i<$brow;$i++){
?>


									<div class="row agendajudul">
											<?php if(isset($daftar[$i]->id_konten)){ ?>
												<div class="col-lg-6 frame"><div class="row" style="padding:5px;">
												<a href="<?=site_url()."read/agenda/".$daftar[$i]->id_konten."/".$daftar[$i]->kat_seo."/".$daftar[$i]->seo?>">
											<div class="col-lg-4" style="padding:0px;">
				                                <div class="thumbnail" style="margin-bottom:0px;">
												<img src="<?=site_url();?><?=$daftar[$i]->thumb;?>" />
												</div>
											</div>
											<div class="col-lg-8">
												<div class="kategori"><?=$daftar[$i]->nama_kategori;?></div>
												<small><?=$daftar[$i]->hari_mulai;?>, <?=$daftar[$i]->tanggal_mulai;?> s.d. <?=$daftar[$i]->hari_selesai;?>, <?=$daftar[$i]->tanggal_selesai;?></small>
												<div class="judul"><?=$daftar[$i]->judul;?></div>
											</div>
												</a>
												</div></div>
											<?php } ?>
											
											<?php if(isset($daftar[($i+$brow)]->id_konten)){ ?>
												<div class="col-lg-6 frame"><div class="row" style="padding:5px;">
												<a href="<?=site_url()."read/agenda/".@$daftar[($i+$brow)]->id_konten."/".@$daftar[($i+$brow)]->kat_seo."/".@$daftar[($i+$brow)]->seo?>">
											<div class="col-lg-4" style="padding:0px;">
				                                <div class="thumbnail" style="margin-bottom:0px;">
												<img src="<?=site_url();?><?=@$daftar[($i+$brow)]->thumb;?>" />
												</div>
											</div>
											<div class="col-lg-8">
												<div class="kategori"><?=$daftar[($i+$brow)]->nama_kategori;?></div>
												<small><?=@$daftar[($i+$brow)]->hari_mulai;?>, <?=@$daftar[($i+$brow)]->tanggal_mulai;?> s.d. <?=@$daftar[($i+$brow)]->hari_selesai;?>, <?=@$daftar[($i+$brow)]->tanggal_selesai;?></small>
												<div class="judul"><?=@$daftar[($i+$brow)]->judul;?></div>
											</div>
												</a>
												</div></div>
											<?php } ?>
									</div>




<?php
}
?>
</div>
</div>
</div>
</div>

<style>
.agendajudul {	  border-bottom:1px dotted #ccc;	}
.agendajudul .frame small,.artikeljudul .frame .judul {	color:#999; 	}
.agendajudul .kategori {font-size:11px; font-weight:800;	}
.agendajudul .frame:hover {	color:#00F; text-decoration:none;	}
.agendajudul .frame:hover small {	color:#000;	}
.agendajudul .frame:hover .judul {	color:#FF0000;	}
</style>
