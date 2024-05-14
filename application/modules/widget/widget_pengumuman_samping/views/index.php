		<div class="panel panel-default" style="margin-top:<?=$margin_top;?>;">
						<div class="panel-heading"><i class="fa fa-calendar fa-fw"></i> <?=$nama_wii;?></div>
                        <div class="panel-body" style="padding-left:0pc;padding-right:0pc;">
<?php
foreach($daftar AS $key=>$val){
?>
<a href="<?=site_url()."read/artikel/".$val->id_konten."/".$val->kat_seo."/".$val->seo?>" class="pp">
<div class="pmmjudul">
<small><?=$val->hari;?>, <?=$val->tanggal;?></small><br/>
<?=$val->judul;?>
</div>
</a>
<?php
}
?>
						</div><!-- panel body -->
		</div><!-- panel -->
<style>
.pp:hover {	text-decoration:none; color:#FF0000;	}
.pmmjudul, .pmmjudul:hover {	  padding: 5px 5px 5px 10px;font-size:14px;border-bottom:1px dotted #ccc;	}
.pp .pmmjudul:hover small {	  color:#666;	}
</style>
