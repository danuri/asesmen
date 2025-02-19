<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Konten
		<div class="btn btn-warning btn-xs pull-right content_post" style="margin-top:10px;" onclick="buka('direktori/formtambah','isi',0);"><i class="fa fa-plus fa-fw"></i> Tambah Konten</div>
		<div class="btn btn-warning btn-xs pull-right content_post" style="margin-top:10px;margin-right:5px;" onclick="buka2('direktori/formkategori','isi',0);"><i class="fa fa-plus fa-fw"></i> Tambah Kategori</div>
		</h3>
	</div><!-- /.col-lg-12 -->
</div><!-- /.row -->

<div class="row content_post" >
	<div class="col-lg-12">
		<div class="panel panel-warning" id="panel_utama">
			<div class="panel-heading" style="padding-top:2px;padding-bottom:5px;">
						<div class="row">
								<div class="col-lg-8" style="padding-top:8px;">
									<i class="fa fa-puzzle-piece fa-fw"></i> Direktori
								</div><!---/.col-lg-8 -->
												<div class="col-lg-4" style="padding-top:3px;">
														<select id="id_kat" name="id_kat" class="form-control" onchange="gridpagingA('end');">
															<?php
															foreach($kategori AS $key=>$val){
															?>
															<option value="<?=$val->id_kategori;?>" <?=($id_kat==$val->id_kategori)?"selected":"";?>><?=$val->kategori;?> (<u>kanal:</u> <?=$val->nama_kanal;?>)</option>
															<?php
															}
															?>
														</select>
												</div>
						</div><!---/.row -->
			</div>
			<div class="panel-body">

<div class="row">
	<div class="col-lg-6" style="margin-bottom:5px;">
<div style="float:left;">
<select class="form-control input-sm" id="item_lengthA" style="width:70px;" onchange="gridpagingA('end')">
<option value="10" <?=($batas==10)?"selected":"";?>>10</option>
<option value="25" <?=($batas==25)?"selected":"";?>>25</option>
<option value="50" <?=($batas==50)?"selected":"";?>>50</option>
<option value="100" <?=($batas==100)?"selected":"";?>>100</option>
</select>
</div>
<div style="float:left;padding-left:5px;margin-top:6px;">item per halaman</div>
	</div><!-- /.col-lg-6 -->
	<div class="col-lg-6" style="margin-bottom:5px;">
                            <div class="input-group" style="width:240px; float:right; padding:0px 2px 0px 2px;">
                                <input id="caripagingA" onchange="gridpagingA('end')" type="text" class="form-control" placeholder="Masukkan kata kunci..." value="<?=$cari;?>">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
<div style="float:right; margin:7px 0px 0px 0px;">Cari:</div>
	</div><!-- /.col-lg-6 -->
</div><!-- /.row -->

<div class="table-responsive">
<table class="table table-striped table-hover">
<thead>
<tr>
<th width=40>No.</th>
<th width=40>AKSI</th>
<th>JUDUL</th>
<th width=100>GAMBAR</th>
<th width=100>LAMPIRAN</th>
</tr>
</thead>
<tbody id=list>
</tbody>
</table>
</div><!-- table-responsive --->
<div id="pagingA"></div>
			</div><!-- /.panel-body -->
		</div><!-- /.panel -->
	</div><!-- /.col-lg-12 -->
</div><!-- /.row -->

<div id="appe_post" style="display:none;"></div>
<script type="text/javascript">
$(document).ready(function(){
	gridpagingA('<?=$hal;?>');
});

function repagingA(){
	$( "#pagingA .pagingframe div" ).addClass("btn btn-default");
	$( "#pagingA .pagingframe div" ).click(function() {
		var ini = $( this ).html();
		if(ini=="Prev" || ini=="Next"){	var inu=$(this).attr('data-hal');	} else {	var inu=$(this).html();	}
		if(!$(this).hasClass("active"))	{	gridpagingA(inu);	}
	});
}
function gopagingA(){
	$( "#pagingA #inputpaging" ).change(function() {
		var ini = $( this ).val();
		gridpagingA(ini);
	});
}

function gridpagingA(hal){
var cari = $('#caripagingA').val();
var batas = $('#item_lengthA').val();
var id_kat = $('#id_kat').val();
	$.ajax({
		type:"POST",
		url:"<?=site_url();?>cmskonten/artikel/getdata",
		data:{"hal": hal, "batas": batas,"cari":cari,"komponen":"direktori","id_kat":id_kat},
		beforeSend:function(){	
			$('#list').html('<tr><td colspan=6><p class="text-center"><i class="fa fa-spinner fa-spin fa-5x"></i><p></td></tr>');
			$('#paging').html('');
		},
		success:function(data){
			if((data.hslquery.length)>0){
				var table="";
				var no=data.mulai;
				$.each( data.hslquery, function(index, item){
					table = table+ "<tr>";
					table = table+ "<td style='padding:3px;'>"+no+"</td>";
	//tombol aksi-->
					table = table+ "<td valign=top style='padding:3px 0px 0px 0px;'>";
						table = table+ '<div class="dropdown"><button class="btn btn-default dropdown-toggle btn-xs" type="button" data-toggle="dropdown"><i class="fa fa-caret-down fa-fw"></i></button>';
						table = table+ '<ul class="dropdown-menu" role="menu">';
						table = table+ '<li role="presentation"><a role="menuitem" tabindex="-1" style="cursor:pointer;" onClick="buka(\'direktori/formedit\',\'isi\','+item.id_konten+');"><i class="fa fa-edit fa-fw"></i> Edit Data</a></li>';
						if(item.hapus=="ya"){
						table = table+ '<li role="presentation" class="divider">';
						table = table+ '<li role="presentation"><a role="menuitem" tabindex="-1" style="cursor:pointer;" onClick="buka(\'direktori/formhapus\',\'isi\','+item.id_konten+');"><i class="fa fa-trash fa-fw"></i> Hapus Data</a></li>';
						}
						table = table+ "</ul>";
						table = table+ "</div>";
					table = table+ "</td>";
	//tombol aksi<--
					table = table+ "<td style='padding:3px;'><h4 style=\"margin-top:0px;\">"+item.judul+"</h4></td>";
					table = table+ '<td style="padding:3px;"><div class="thumbnail" style="width:120px;"><div class="caption" style="text-align:center;"><p>';
					table = table+ '<a href="#" class="label label-info" onclick="buka(\'artikel/foto_formappe\',\'foto\','+item.id_konten+');return false;"><i class="fa fa-upload fa-fw"></i> Atur File</a></p></div>'+item.thumb+'</div></td>';
					table = table+ '<td style="padding:3px;"><div class="thumbnail" style="width:120px;"><div class="caption" style="text-align:center;"><p>';
					table = table+ '<a href="" class="label label-info" onclick="buka(\'artikel/lampiran_formappe\',\'lampiran\','+item.id_konten+');return false;"><i class="fa fa-upload fa-fw"></i> Atur File</a></p></div>'+item.lampiran+'</div></td>';
					table = table+ "</tr>";
					no++;
				}); //endeach
					$('#list').html(table);
					$('#pagingA').html(data.pager);
					cap_hover();
					repagingA();gopagingA();
			} else {
				$('#list').html("<tr class=gridrow><td colspan=8 align=center><b>Tidak ada data</b></td></tr>");
				$('#pagingA').html("<input type='hidden' id='inputpaging' value='1'>");
			} // end if
		}, // end success
	dataType:"json"}); // end ajax
}
function cap_hover(){
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
}
function buka(aksi,tipe,id_konten){
		var id_katt = $('select[name=id_kat]').val();
		if(id_katt){ 
			$.ajax({
				type:"POST",
				url:"<?=site_url();?>cmskonten/"+aksi,
				data:{"id_konten":id_konten,"id_kat":id_katt},
				beforeSend:function(){	
					$('.content_post').hide();
					$('#appe_post').html('<p class="text-center"><i class="fa fa-spinner fa-spin fa-5x"></i><p>').show();
				},
				success:function(data){
					$('#appe_post').html(data);
				}, // end success
			dataType:"html"}); // end ajax
		} else {alert("Kategori harus di-isi dulu!"); }
}
function pkomponen(){
	var komponen = $('#komponen').val();
	$('#sb_act').attr('action','<?=site_url();?>module/cmskonten/'+komponen+'');
	$('#sb_act').submit();
}
function buka2(aksi,tipe,id_konten){
	$.ajax({
		type:"POST",
		url:"<?=site_url();?>cmskonten/"+aksi,
		data:{"id_konten":id_konten,"tipe":tipe,"komponen":"direktori"},
		beforeSend:function(){	
			$('.content_post').hide();
			$('#appe_post').html('<p class="text-center"><i class="fa fa-spinner fa-spin fa-5x"></i><p>').show();
		},
		success:function(data){
			$('#appe_post').html(data);
		}, // end success
	dataType:"html"}); // end ajax
}
</script>
<style>
table th {	color:#fff; background-color:#ccc; line-height:35px; padding:0px;	}
.pagingframe {	float:right;	}
.pagingframe div {	padding-left:7px;padding-right:7px;	}
.thumbnail {	position:relative;	overflow:hidden; margin-bottom:0px;	}
.caption {    position:absolute;    top:0;    right:0;    background:rgba(66, 139, 202, 0.75);    width:100%;    height:100%;    padding:2%;    display: none;    text-align:center;    color:#fff !important;	z-index:2;	}
</style>
