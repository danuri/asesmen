	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default" style="margin-top:10px;">
				<div class="panel-heading">Arsip <?=$nama_kategori;?></div>
				<div class="panel-body" style="padding-left:0pc;padding-right:0pc;">
                  <div id='lainnya_<?=$id_kategori;?>'></div>
				</div>
				<!--//panel-body-->
				<div class='panel-footer' id='paging_artikel'></div>
			</div><!--//panel-->
		</div>
	</div>
<?=$sub_arsip;?>
<script type="text/javascript">
$(document).ready(function(){
	gridartikel(<?=$hal;?>);
});
function repaging_artikel(){
	$( "#paging_artikel .pagingframe div" ).addClass("btn btn-default");
	$( "#paging_artikel .pagingframe div" ).click(function() {
		var ini = $( this ).html();
		if(ini=="Prev" || ini=="Next"){	var inu=$(this).attr('data-hal');	} else {	var inu=$(this).html();	}
		if(!$(this).hasClass("active"))	{	gridartikel(inu);	}
	});
}
////////////////////////////////////////////////////////////////////////////
function gridartikel(hal){
$('#lainnya_<?=$id_kategori;?>').html("<p style='text-align:center'><i class='fa fa-spinner fa-2x'></i></p>");
if(hal=="end"){var hali="end";} else {var hali=hal;}
			$.ajax({
				type:"POST",
				url:"<?=site_url();?>web_artikel/getartikel/",
				data:{"hal": hali, "batas": <?=$batas;?>, "rubrik": <?=$id_kategori;?>},
				success:function(data){
if((data.hslquery.length)>0){
			var table=""; var nomor=0;
			$.each( data.hslquery, function(index, item){
					if(item.id_konten == <?=$id_konten;?>){
						table = table+ "<div class='artikeljudul active'>";
						table = table+ "<small>"+ item.hari+", "+ item.tanggal+"</small><br>";
						table = table+item.judul;
						table = table+ "</div>";
					} else {
						table = table+ "<a href=\"<?=site_url();?>read/artikel/"+item.id_konten+"/"+item.kat_seo+"/"+item.seo+"\" class='cc'><div class='artikeljudul'>";
						table = table+ "<small>"+ item.hari+", "+ item.tanggal+"</small><br>";
						table = table+item.judul;
						table = table+ "</div></a>";
					}
				nomor++;
			}); //endeach
			var hu=data.pager;
				$('#lainnya_<?=$id_kategori;?>').html(table);
				$('#paging_artikel').html(data.pager);
				repaging_artikel();
				rmsh();
		} else {
			$('#lainnya_<?=$id_kategori;?>').html("");
		}
}, 
        dataType:"json"});
}
////////////////////////////////////////////////////////////////////////////
</script>
<style>
#paging_artikel.panel-footer{padding-top:2px;padding-bottom:2px;text-align:right;	}
#paging_artikel.panel-footer .btn{padding:2px 8px 2px 8px;}
#paging_artikel.panel-body .btn{padding:2px 8px 2px 8px;}

.cc:hover	{	text-decoration:none; color:#FF0000;	}
.artikeljudul, .artikeljudul:hover {	  padding: 5px 5px 5px 10px;font-size:14px;border-bottom:1px dotted #ccc;	}
.artikeljudul.active {	  padding: 5px 5px 5px 10px;font-size:14px;border-bottom:1px dotted #ccc; color:#999;	}
.cc .artikeljudul:hover small {	  color:#333;	}
</style>