	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default" style="margin-top:10px;">
				<div class="panel-heading">Rubrik lainnya</div>
				<div class="panel-body" style="padding-left: 0px; padding-right: 0px;">
<?php
	foreach($kategori as $key=>$val){
		if($val->status==""){
?>
			<a href='<?=site_url();?>all/<?=$val->komponen?>/<?=$val->id_kategori?>/1/<?=$val->seo?>' class="bb"><div class="kategorijudul"><?=$val->nama_kategori?></div></a>
<?php
		} else {
?>
			<div class="kategorijudul active"><?=$val->nama_kategori;?></div>
<?php
		}
	}
?>
				</div><!--//panel-body-->
			</div><!--//panel-->
		</div>
	</div>
<?=$sub_kategori;?>
<style>
.bb:hover{	text-decoration:none; color:#FF0000;	}
.kategorijudul, .kategorijudul:hover {	  padding: 5px 5px 5px 10px;font-size:16px;border-bottom:1px dotted #ccc;	}
.kategorijudul.active {	  color:#999;	}
</style>