	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default" style="margin-top:10px;">
				<div class="panel-heading">Arsip <?=$nama_kategori;?></div>
				<div class="panel-body" style="padding-left:0pc;padding-right:0pc;">
                  <div id='lainnya_<?=$id_kategori;?>'></div>
				</div>
				<!--//panel-body-->
				<div class='panel-footer' id='paging_polling'></div>
			</div><!--//panel-->
		</div>
	</div>
<?=$sub_arsip;?>
<script type="text/javascript">
$(document).ready(function(){
	gridpolling(<?=$hal;?>);
});
function repaging_polling(){
	$( "#paging_polling .pagingframe div" ).addClass("btn btn-default");
	$( "#paging_polling .pagingframe div" ).click(function() {
		var ini = $( this ).html();
		if(ini=="Prev" || ini=="Next"){	var inu=$(this).attr('data-hal');	} else {	var inu=$(this).html();	}
		if(!$(this).hasClass("active"))	{	gridpolling(inu);	}
	});
}
////////////////////////////////////////////////////////////////////////////
function gridpolling(hal){
$('#lainnya_<?=$id_kategori;?>').html("<img src='<?=site_url();?>assets/images/loading1.gif'>");
if(hal=="end"){var hali="end";} else {var hali=hal;}
			$.ajax({
				type:"POST",
				url:"<?=site_url();?>web_polling/getpolling/",
				data:{"hal": hali, "batas": <?=$batas;?>, "rubrik": <?=$id_kategori;?>},
				success:function(data){
if((data.hslquery.length)>0){
			var table=""; var nomor=0;
			$.each( data.hslquery, function(index, item){

/*
					if(nomor%2==0){ var bgc="even";}else{ var bgc="odd";}
					if(item.id_konten == <?=$id_konten;?>){
						table = table+ "<div class='widget-sidebox item "+bgc+"'>";
					} else {
						table = table+ "<a href=\"<?=site_url();?>read/polling/"+item.id_konten+"/"+item.kat_seo+"/"+item.seo+"\"><div class='widget-sidebox item ada "+bgc+"'>";
					}
//					table = table+ "<small>"+ item.hari+", "+ item.tanggal+"</small>";
//					table = table+ "<br />";
					table = table+item.judul;
					if(item.id_konten == <?=$id_konten;?>){
						table = table+ "</div>";
					} else {
						table = table+ "</div></a>";
					}
*/

					if(item.id_konten == <?=$id_konten;?>){
						table = table+ "<div class='polljudul active'>";
						table = table+item.judul;
						table = table+ "</div>";
					} else {
						table = table+ "<a href=\"<?=site_url();?>read/polling/"+item.id_konten+"/"+item.kat_seo+"/"+item.seo+"\" class='pl'><div class='polljudul'>";
						table = table+item.judul;
						table = table+ "</div></a>";
					}




				nomor++;
			}); //endeach
			var hu=data.pager;
				$('#lainnya_<?=$id_kategori;?>').html(table);
				$('#paging_polling').html(data.pager);
				repaging_polling();
		} else {
			$('#lainnya_<?=$id_kategori;?>').html("");
		}
}, 
        dataType:"json"});
}
////////////////////////////////////////////////////////////////////////////
</script>
<style>
#paging_polling.panel-footer{padding-top:2px;padding-bottom:2px;text-align:right;	}
#paging_polling.panel-footer .btn{padding:2px 8px 2px 8px;}
#paging_polling.panel-body .btn{padding:2px 8px 2px 8px;}

.pl:hover	{	text-decoration:none; color:#FF0000;	}
.polljudul, .polljudul:hover {	  padding: 5px 5px 5px 10px;font-size:14px;border-bottom:1px dotted #ccc;	}
.polljudul.active {	  padding: 5px 5px 5px 10px;font-size:14px;border-bottom:1px dotted #ccc; color:#999;	}
.pl .polljudul:hover small {	  color:#333;	}
</style>