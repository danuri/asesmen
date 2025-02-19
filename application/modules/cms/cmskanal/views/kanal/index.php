<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Kanal
		<div class="btn btn-warning btn-xs pull-right konten_kanal" style="margin-top:10px;" onclick="loadForm('formtambahkanal','0','0','0');"><i class="fa fa-plus fa-fw"></i> Tambah Kanal</div>
		</h3>
	</div><!-- /.col-lg-12 -->
</div><!-- /.row -->

<div class="row konten_kanal">
	<div class="col-lg-12">
	<div id="accordion" class="panel-group">
	<div class="panel panel-success">
		<div class="panel-heading">
			<h4 class="panel-title">
						<div class="row">
								<div class="col-lg-12">
												<div class="dropdown"><button class="btn btn-default dropdown-toggle btn-xs" type="button" id="ddMenuT" data-toggle="dropdown"><span class="fa fa-gears fa-fw"></span></button>
													<ul class="dropdown-menu" role="menu" aria-labelledby="ddMenuT">
						<li role="presentation"><a role="menuitem" tabindex="-1" style="cursor:pointer;" onClick="loadForm('formeditkanal','0','0','<?=$default->id_item;?>');"><i class="fa fa-pencil fa-fw"></i> Edit Kanal</a></li>
													</ul>
			1. <a class="collapsed" href="#collapseOne<?=$default->id_item;?>" data-parent="#accordion" data-toggle="collapse" onclick="isi(<?=$default->id_item;?>)" id="tbtg_<?=$default->id_item;?>"><?=$default->nama_item;?></a>
												</div>



								</div><!---/.col-lg-12 -->
						</div><!---/.row -->
			</h4>
		</div>
		<div id="collapseOne<?=$default->id_item;?>" class="panel-body panel-collapse collapse">
		</div>
	</div>
<?php
recKanal($ddr,0);
function recKanal($kanal,$no) {
    foreach ($kanal as $key=>$val) {
		$ni = ($no=="")?"":$no.".";
		$tb = ($no=="")?2:1;
		$pn = ($no=="")?"success":"warning";
		$idd = ($no=="")?0:1;
?>
		<div class="panel panel-<?=$pn;?>">
			<div class="panel-heading">

						<h4 class="panel-title">
									<div class="row">
											<div class="col-lg-12">
												<div class="dropdown"><button class="btn btn-default dropdown-toggle btn-xs" type="button" id="ddMenuT" data-toggle="dropdown"><span class="fa fa-gears fa-fw"></span></button>
													<ul class="dropdown-menu" role="menu" aria-labelledby="ddMenuT">
						<?php if($no=="") { ?>
						<li role="presentation"><a role="menuitem" tabindex="-1" style="cursor:pointer;" onclick="loadForm('formtambahkanal','<?=$val->path_kanal;?>','1','<?=$val->id_kanal;?>');"><i class="fa fa-plus fa-fw"></i> Tambah Sub Kanal</a></li>
						<?php } ?>
						<li role="presentation"><a role="menuitem" tabindex="-1" style="cursor:pointer;" onClick="loadForm('formeditkanal','0','<?=$idd;?>','<?=$val->id_kanal;?>');"><i class="fa fa-pencil fa-fw"></i> Edit Kanal</a></li>
						<?php if($val->cek=="kosong") { ?>
						<li role="presentation"><a role="menuitem" tabindex="-1" style="cursor:pointer;" onClick="loadForm('formhapuskanal','0','0','<?=$val->id_kanal;?>');"><i class="fa fa-trash fa-fw"></i> Hapus Kanal</a></li>
						<?php } ?>
						<?php if($key!=0) { ?>
						<li role="presentation"><a role="menuitem" tabindex="-1" style="cursor:pointer;" onClick="urut('<?=$val->id_kanal;?>','<?=$kanal[($key-1)]->id_kanal;?>','<?=($key+1);?>','<?=($key);?>');"><i class="fa fa-upload fa-fw"></i> Naik urutan</a></li>
						<?php } ?>
						<?php if($key!=count($kanal)-1) { ?>
						<li role="presentation"><a role="menuitem" tabindex="-1" style="cursor:pointer;" onClick="urut('<?=$val->id_kanal;?>','<?=$kanal[($key+1)]->id_kanal;?>','<?=($key+1);?>','<?=($key+2);?>');"><i class="fa fa-download fa-fw"></i> Turun urutan</a></li>
						<?php } ?>
													</ul>
						<?=$ni.($key+$tb);?>. <a class="collapsed" href="#collapseOne<?=$val->id_kanal;?>" data-parent="#accordion" data-toggle="collapse" onclick="isi('<?=$val->id_kanal;?>');" id="tbtg_<?=$val->id_kanal;?>"><?=$val->nama_kanal;?></a>
												</div>
											</div><!---/.col-lg-12 -->
									</div><!---/.row -->
						</h4>

			</div>
			<div id="collapseOne<?=$val->id_kanal;?>" class="panel-body panel-collapse collapse">
			....
			</div><!--/.panel-body-->
		</div><!--/.panel-->
<?php
		if(isset($val->anak)){
			$noo=$ni.($key+$tb);
	        recKanal($val->anak,$noo);
		} //
    } //
} //
?>
	</div><!-- /.panel-group -->
	</div><!-- /.col-lg-12 -->
</div><!-- /.row -->

<div class="row uppldok" style="display:none;">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading" id="head_dok">
			<div class="btn btn-default btn-xs"><i class="fa fa-image fa-fw"></i></div> FORM LOGO KANAL
			<div class="btn btn-warning btn-xs pull-right" onclick="kembali2();"><i class="fa fa-close fa-fw"></i></div>
			</div>
			<div class="panel-body" id="col_dok"></div>
		</div><!--panel-->
	</div><!-- /.col-lg-12 -->
</div><!-- /.row -->


<div id="idd_temp" style="display:none;"></div>
<div style="display:none;" id="form_kanal"></div>
<form id="sb_act" method="post"></form>
<script type="text/javascript">
function viewUppl(tipe,idd){
	$('#uploader').show();
			$.ajax({
				type:"POST",
				url:"<?=site_url();?>cmskanal/header/"+tipe+"_upload",
				data:{"id_konten":idd},
				beforeSend:function(){	
					$('.konten_kanal').hide();
					$('.uppldok').show();
					$('#col_dok').html('<p class="text-center"><i class="fa fa-spinner fa-spin fa-5x"></i><p>');
				},
				success:function(data){
					$('#col_dok').html(data);
					$('#idd_temp').html(idd);
				}, // end success
			dataType:"html"}); // end ajax
}
function kembali2(){
	$('.konten_kanal').show();
	$('.uppldok').hide();
}
function urutan(id_kanal,posisi,idini,idlawan){
	var jumlah = $("#jumlah_"+posisi+"_"+id_kanal).html()*1;
	var vdini = $("#asli_"+posisi+"_"+id_kanal+"_"+idini+"").html();
	var vlawan = $("#asli_"+posisi+"_"+id_kanal+"_"+idlawan+"").html();

	$("#asli_"+posisi+"_"+id_kanal+"_"+idini+"").html(vlawan);
	$("#asli_"+posisi+"_"+id_kanal+"_"+idlawan+"").html(vdini);

	var ini = "[";
	for(i=1;i<jumlah;i++){
		var jj = $("#asli_"+posisi+"_"+id_kanal+"_"+i+"").html();
		if(i==1){ini = ini + jj;}else{ini = ini +", "+jj;}
	}
	ini = ini+"]";
	
	$.ajax({	type:"POST",	url:"<?=site_url();?>cmskanal/widget/urutan_wrapper_aksi",	data:{"id_kanal": id_kanal,"ini": ini,"posisi":posisi },
				beforeSend:function(){	
                    $('#'+posisi+'_'+id_kanal).html("");
				},
				success:function(data){	
                    $('#'+posisi+'_'+id_kanal).html(data);
				}, 
				dataType:"html"	});
}
////////////////////////////////////////////////////////////////////////////
function urut(id_ini,id_lawan,urutan_ini,urutan_lawan){
	$.ajax({
		type:"POST",
		url:"<?=site_url();?>cmskanal/kanal/urutitem/",
		data:{"id_ini": id_ini, "urutan_ini": urutan_ini, "id_lawan": id_lawan, "urutan_lawan": urutan_lawan},
		success:function(data){	
			location.reload();
		}, 
	dataType:"html"});
}
function urutKategori(id_ini,id_lawan,urutan_ini,urutan_lawan,idk){
	$.ajax({
		type:"POST",
		url:"<?=site_url();?>cmskanal/kategori/naik_aksi/",
		data:{"id_ini": id_ini, "urutan_ini": urutan_ini, "id_lawan": id_lawan, "urutan_lawan": urutan_lawan},
		success:function(data){	
			loadC('kategori',idk,'kategori');
		}, 
	dataType:"html"});
}

function isi(id_kanal){
if(id_kanal==0){var anak="ya";}else{var anak="tidak";}
			$.ajax({
				type:"POST",
				url:"<?=site_url();?>cmskanal/kanal/detil_kanal",
				data:{"id_kanal":id_kanal,"anak":anak},
				beforeSend:function(){	
					$('#collapseOne'+id_kanal).html('<p class="text-center"><i class="fa fa-spinner fa-spin fa-5x"></i><p>');
				},
				success:function(data){
					$('#tbtg_'+id_kanal).attr("onclick","");
					$('#collapseOne'+id_kanal).html(data);
				}, // end success
			dataType:"html"}); // end ajax
}
function loadForm(tujuan,pos,idd,idk){	
	$("#form_kanal").html('');
	$(".konten_kanal").hide();
			$.ajax({
				type:"POST",
				url:"<?=site_url();?>cmskanal/kanal/"+tujuan+"/",
				data:{"pos": pos,"idd": idd, "id_kanal":idk },
				success:function(data){
					$("#form_kanal").html(data);
					}, 
				dataType:"html"});
	$("#form_kanal").show();
	return false;
}
function loadForm2(tujuan,pos,idd,idk){	
	$("#form_kanal").html('');
	$(".konten_kanal").hide();
			$.ajax({
				type:"POST",
				url:"<?=site_url();?>cmskanal/widget/"+tujuan+"/",
				data:{"pos": pos,"idd": idd, "id_kanal":idk },
				success:function(data){
					$("#form_kanal").html(data);
					}, 
				dataType:"html"});
	$("#form_kanal").show();
	return false;
}
function loadForm3(tujuan,idd,idk){	
	$("#form_kanal").html('');
	$(".konten_kanal").hide();
			$.ajax({
				type:"POST",
				url:"<?=site_url();?>cmskanal/kategori/"+tujuan+"/",
				data:{"idd": idd, "id_kanal":idk },
				success:function(data){
					$("#form_kanal").html(data);
					}, 
				dataType:"html"});
	$("#form_kanal").show();
	return false;
}
function loadFormCW(ptk,posisi,urutan){	
	$("#form_kanal").html('');
	$(".konten_kanal").hide();
			$.ajax({
				type:"POST",
				url:"<?=site_url();?>cmskanal/widget/fitur_widget/",
				data:{"posisi": posisi,"urutan": urutan,"path_kanal":ptk },
				success:function(data){
					$("#form_kanal").html(data);
					}, 
				dataType:"html"});
	$("#form_kanal").show();
	return false;
}
function loadC(konten,idk,posisi){
	$.ajax({
		type:"POST",
		url:"<?=site_url();?>cmskanal/"+konten+"/index",
		data:{"id_kanal":idk,"posisi":posisi },
		beforeSend:function(){	
			$("#"+posisi+"_"+idk).html('<p class="text-center"><i class="fa fa-spinner fa-spin fa-5x"></i><p>');
		},
		success:function(data){
			$("#"+posisi+"_"+idk).html(data);
//			$('#triger_'+posisi+'_'+idk).attr("onclick","");
		}, 
	dataType:"html"});
}
function batal(){
	$("#form_kanal").hide();
	$(".konten_kanal").show();
	return false;
}
</script>
<style>
table th {	color:#fff; background-color:#ccc; line-height:35px; padding:0px;	}
.pagingframe {	float:right;	}
.pagingframe div {	padding-left:7px;padding-right:7px;	}
.thumbnail {	position:relative;	overflow:hidden; margin-bottom:0px;	}
.caption {    position:absolute;    top:0;    right:0;    background:rgba(66, 139, 202, 0.75);    width:100%;    height:100%;    padding:2%;    display: none;    text-align:center;    color:#fff !important;	z-index:2;	}
</style>
