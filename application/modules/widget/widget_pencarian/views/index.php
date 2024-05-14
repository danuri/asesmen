<div class="container">
	<div class="row" style="padding-top:10px;">
		<div class="col-lg-8">
			<div class="row"><div class="col-lg-12"><ol class="breadcrumb">Kata kunci: <?=strtoupper($kata_kunci);?></ol></div></div>
			<div class="row"><div class="col-lg-12">
		  	<div class="panel panel-primary">
			<div class="panel-heading">Hasil pencarian</div>
              <div class="panel-body" id="hasil" style="padding-left:0pc;padding-right:0pc;">

				</div>
			  <div class="panel-footer" id="pager">...</div>        	
			</div>
			</div></div>
        </div>
        <!--content-->
    </div>
	<!--//row-->
</div>
<!--//container-->
<form id="sb_act" method="post"></form>
<script type="text/javascript">
$(document).ready(function(){
	gridhasil('<?=$hal;?>');
});
function repaging(){
	$( "#pager .pagingframe div" ).addClass("btn btn-default");
	$( "#pager .pagingframe div" ).click(function() {
		var ini = $( this ).html();
		if(ini=="Prev" || ini=="Next"){	var inu=$(this).attr('data-hal');	} else {	var inu=$(this).html();	}
		if(!$(this).hasClass("active"))	{	gridhasil(inu);	}
	});
}
function gopaging(){
	$("#pager #inputpaging").change(function() {
		var ini = $( this ).val();
		gridhasil(ini);
	});
}
////////////////////////////////////////////////////////////////////////////
function gridhasil(hal){
if(hal=="end"){var hali="end";} else {var hali=hal;}
			$.ajax({
				type:"POST",
				url:"<?=site_url();?>widget_pencarian/gethasil/",
				data:{"hal": hali, "batas": <?=$batas;?>,"kkunci":"<?=$kata_kunci;?>"},
				success:function(data){
					if(data.hslquery=="xx_xx"){
						ppost();
					} else {
						if((data.hslquery.length)>0){
							var table="";
							$.each( data.hslquery, function(index, item){
									table = table+'<a href="<?=site_url();?>read/'+item.komponen+'/'+item.id_konten+'/'+item.kat_seo+'/'+item.seo+'" class="cc" target="_blank">'+ "<div class='artikeljudul'>";


												if(item.komponen=="statis"){
													table = table+"<b>"+  item.kompponen+ "</b><br />";
												} else {
													table = table+"<b>"+  item.kompponen+" - "+ item.nama_kategori+ "</b><br />";
												}
												if(item.tanggal!="00-00-0000"){
													table = table+"<small>"+  item.hari+", "+ item.tanggal+ "</small><br />";
												}
												table = table+item.judul;
												if(item.sub_judul!=""){
													table = table+"<div class='subjudul'>"+item.sub_judul+"</div>";
												}

									table = table+ "</div></a>";

							}); //endeach
								$('#hasil').html(table);
								$('#pager').html(data.pager);
								repaging();gopaging();
						} else {
								$('#hasil').html('Konten tidak ditemukan...!');
						}
					} //end !=xx_xx
				},//success 
        dataType:"json"});
}
////////////////////////////////////////////////////////////////////////////
function ppost(){
	$('#sb_act').attr('action','<?=site_url();?>');
	$('#sb_act').submit();
}
</script>
<style>
#pager.panel-footer{padding-top:2px;padding-bottom:2px;text-align:right;	}
#pager.panel-footer .btn{padding:2px 8px 2px 8px;}
#pager.panel-body .btn{padding:2px 8px 2px 8px;}

.cc:hover, .cc small:hover{	text-decoration:none; color:#FF0000;	}
.artikeljudul, .artikeljudul:hover {	  padding: 5px 5px 5px 10px;font-size:14px;border-bottom:1px dotted #ccc;	}
.artikeljudul .subjudul {	font-size:12px;color:#999;	}
.cc .artikeljudul:hover .subjudul {	color:#333;	}
.cc .artikeljudul:hover small {	  color:#009966;	}
</style>