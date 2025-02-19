<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Komentar Pengunjung</h3>
	</div><!-- /.col-lg-12 -->
</div><!-- /.row -->

<div class="row content_post">
	<div class="col-lg-12">
		<div class="panel panel-warning" id="panel_utama">
			<div class="panel-heading"><i class="fa fa-comments fa-fw"></i> Daftar Komentar</div>
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
	</div>
	<!-- /.col-lg-6 -->
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
	</div>
	<!-- /.col-lg-6 -->
</div>
<!-- /.row -->
			<div class="table-responsive">
<table class="table table-striped table-hover">
<thead>
<tr>
<th width="50">No.</th>
<th width="50">AKSI</th>
<th width="250">KONTEN</th>
<th>KOMENTAR / JAWABAN</th>
<th width="50">STATUS</th>
</tr>
</thead>
<tbody id=list>
</tbody>
</table>
			</div>
			<!-- table-responsive --->
	<div id="pagingA"></div>
			</div><!-- /.panel-body -->
		</div><!-- /.panel -->
	</div><!-- /.col-lg-12 -->
</div><!-- /.row -->


<form id="sb_act" method="post"></form>
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
	$("#pagingA #inputpaging").change(function() {
		var ini = $( this ).val();
		gridpagingA(ini);
	});
}

function gridpagingA(hal){
var cari = $('#caripagingA').val();
var batas = $('#item_lengthA').val();
	$.ajax({
		type:"POST",
		url:"<?=site_url();?>cmskonten/comment/getdata",
		data:{"hal": hal, "batas": batas,"cari":cari,"id_kat":"semua"},
		beforeSend:function(){	
			$('#list').html('<tr><td colspan=6><p class="text-center"><i class="fa fa-spinner fa-spin fa-5x"></i><p></td></tr>');
			$('#pagingA').html('');
		},
		success:function(data){
			if((data.hslquery.length)>0){
				var table="";
				var no=data.mulai;
				$.each( data.hslquery, function(index, item){
					table = table+ "<tr id='row_"+item.id_konten+"'>";
					table = table+ "<td style='padding:3px;'>"+no+"</td>";
	//tombol aksi-->
					table = table+ "<td valign=top style='padding:3px 0px 0px 0px;'>";
						table = table+ '<div class="dropdown"><button class="btn btn-default dropdown-toggle btn-xs" type="button" data-toggle="dropdown"><i class="fa fa-caret-down fa-fw"></i></button>';
						table = table+ '<ul class="dropdown-menu" role="menu">';
						table = table+ '<li role="presentation"><a role="menuitem" tabindex="-1" style="cursor:pointer;" onClick="ppost(\'comment/formedit\','+item.id_komentar+');"><i class="fa fa-edit fa-fw"></i> Isi/Edit Jawban</a></li>';
						table = table+ '<li role="presentation" class="divider">';
						if(item.status=='on'){
							table = table+ '<li role="presentation"><a role="menuitem" tabindex="-1" style="cursor:pointer;" onClick="ppost(\'comment/formtarik\','+item.id_komentar+');"><i class="fa fa-download fa-fw"></i> Turunkan Komentar</a></li>';
						} else {
							table = table+ '<li role="presentation"><a role="menuitem" tabindex="-1" style="cursor:pointer;" onClick="ppost(\'comment/formdorong\','+item.id_komentar+');"><i class="fa fa-upload fa-fw"></i> Naikkan Komentar</a></li>';
						}
						table = table+ "</ul>";
						table = table+ "</div>";
					table = table+ "</td>";
	//tombol aksi<--
					table = table+ '<td>'+item.konten+'</td>';
					table = table+ '<td style="padding:3px;">';
					table = table+ '<div class="row"><div class="col-lg-12" style="padding-right:50px;"><div class="well well-sm" style="background-color:#FFFFCC;margin:0px;padding-top:3px;padding-bottom:3px;">'+item.isi_komentar+'<br /><small>'+item.nama_komentator+' | '+item.email_komentator+' | '+item.tanggal_komentar+'</small></div></div></div>';
					if(item.jawaban!="..."){	table = table+ '<div class="row"><div class="col-lg-12" style="padding-left:50px;"><div class="well well-sm" style="background-color:#ccFFFF;margin:0px;padding-top:3px;padding-bottom:3px;">'+item.jawaban+'<br /><small>'+item.tanggal_jawaban+'</small></div></div></div>';	}
					table = table+ '</td>';
					table = table+ '<td>'+item.status+'</td>';
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
function ppost(aksi,id_komentar){
	var cari = $('#caripagingA').val();
	var batas = $('#item_lengthA').val();
	var id_kat = $('#id_kat').val();
	var hal=$("#pagingA #inputpaging").val();

	$('#sb_act').attr('action','<?=site_url();?>module/cmskonten/'+aksi);
	var tab = '<input type="hidden" name="cari" value="'+cari+'">';
	var tab = tab + '<input type="hidden" name="batas" value="'+batas+'">';	
	var tab = tab + '<input type="hidden" name="hal" value="'+hal+'">';	
//	var tab = tab + '<input type="hidden" name="id_kat" value="'+id_kat+'">';
	var tab = tab + '<input type="hidden" name="id_komentar" value="'+id_komentar+'">';
	$('#sb_act').html(tab).submit();
}
function pkomponen(){
	var komponen = $('#komponen').val();
	$('#sb_act').attr('action','<?=site_url();?>module/cmskonten/'+komponen+'');
	$('#sb_act').submit();
}
</script>
<style>
table th {	color:#fff; background-color:#ccc; line-height:35px; padding:0px;	}
.pagingframe {	float:right;	}
.pagingframe div {	padding-left:7px;padding-right:7px;	}
.thumbnail {	position:relative;	overflow:hidden; margin-bottom:0px;	}
.caption {    position:absolute;    top:0;    right:0;    background:rgba(66, 139, 202, 0.75);    width:100%;    height:100%;    padding:2%;    display: none;    text-align:center;    color:#fff !important;	z-index:2;	}
</style>
