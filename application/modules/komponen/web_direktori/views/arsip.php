	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default" style="margin-top:10px;">
				<div class="panel-heading"><?=$nama_kategori;?> lainnya</div>
				<div class="panel-body" style="padding-left:0pc;padding-right:0pc;">
                  <div id='lainnya_<?=$id_kategori;?>'></div>
				</div>
				<!--//panel-body-->
                   <div id='paging_direktori' class='panel-footer'></div>
			</div><!--//panel-->
		</div>
	</div>
<?=$sub_arsip;?>
<script type="text/javascript">
$(document).ready(function(){
	griddirektori(<?=$hal;?>);
});
function repaging_direktori(){
	$( "#paging_direktori .pagingframe div" ).addClass("btn btn-default");
	$( "#paging_direktori .pagingframe div" ).click(function() {
		var ini = $( this ).html();
		if(ini=="Prev" || ini=="Next"){	var inu=$(this).attr('data-hal');	} else {	var inu=$(this).html();	}
		if(!$(this).hasClass("active"))	{	griddirektori(inu);	}
	});
}
////////////////////////////////////////////////////////////////////////////
function griddirektori(hal){
$('#lainnya_<?=$id_kategori;?>').html("<img src='<?=site_url();?>assets/images/loading1.gif'>");
if(hal=="end"){var hali="end";} else {var hali=hal;}
			$.ajax({
				type:"POST",
				url:"<?=site_url();?>web_direktori/getdirektori/",
				data:{"hal": hali, "batas": <?=$batas;?>, "rubrik": <?=$id_kategori;?>},
				success:function(data){
if((data.hslquery.length)>0){
			var table=""; var nomor=data.mulai;
			$.each( data.hslquery, function(index, item){
					if(item.id_konten == <?=$id_konten;?>){
						table = table+ "<div class='artikeljudul active'>";
						table = table+nomor+". "+item.judul;
						table = table+ "</div>";
					} else {
						table = table+ "<a href=\"<?=site_url();?>read/direktori/"+item.id_konten+"/"+item.kat_seo+"/"+item.seo+"\" class='cc'><div class='artikeljudul'>";
						table = table+nomor+". "+item.judul;
						table = table+ "</div></a>";
					}
				nomor++;
			}); //endeach
//			table = table+"</ul>";
			var hu=data.pager;
				$('#lainnya_<?=$id_kategori;?>').html(table);
				$('#paging_direktori').html(data.pager);
				repaging_direktori();
		} else {
			$('#lainnya_<?=$id_kategori;?>').html("");
		}
}, 
        dataType:"json"});
}
////////////////////////////////////////////////////////////////////////////
</script>
<style>
#paging_direktori.panel-footer{padding-top:2px;padding-bottom:2px;text-align:right;	}
#paging_direktori.panel-footer .btn{padding:2px 8px 2px 8px;}
#paging_direktori.panel-body .btn{padding:2px 8px 2px 8px;}

.cc:hover, .cc small:hover{	text-decoration:none; color:#FF0000;	}
.artikeljudul, .artikeljudul:hover {	  padding: 5px 5px 5px 10px;font-size:14px;border-bottom:1px dotted #ccc;	}
.artikeljudul.active {	  padding: 5px 5px 5px 10px;font-size:14px;border-bottom:1px dotted #ccc; color:#999;	}
.cc .artikeljudul:hover small {	  color:#009966;	}
</style>