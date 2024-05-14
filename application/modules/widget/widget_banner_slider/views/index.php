<div class="row">
	<div class="col-lg-12" style="padding-top:<?=$margin_top;?>;padding-bottom:<?=$margin_bottom;?>;">
            <div id="myCarousel_<?=$idd;?>" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">

	<?php
		$i=0;
		foreach($daftar as $key=>$val){
		$cls = ($i==0)?'active':'';
	?>
                <div class="item <?=$cls;?>">
                    <div class="thumbnail">

					
					<?php if($val->link=="") { ?>
                      <img src="<?=base_url();?><?=$val->foto;?>">
					<?php } else { ?>
                      <a href="http://<?=$val->link;?>" target=_blank border=0><img src="<?=base_url();?><?=$val->foto;?>"></a>
					<?php } ?>
					
					
                    </div>        
                </div><!-- End Item -->
	<?php
		$i++;
		}
	?>
			</div>
		</div>
	</div><!--/.col-lg-12-->
</div><!--/.row-->
<script>
	$('#myCarousel_<?=$idd;?>').carousel({
		interval:   <?=$durasi;?>
	});
</script>
<style>
#myCarousel<?=$idd;?> .thumbnail {
	margin-bottom:0;
}
#myCarousel<?=$idd;?> .carousel-inner .item img {
	width:100%;
	height:100%;
}
</style>