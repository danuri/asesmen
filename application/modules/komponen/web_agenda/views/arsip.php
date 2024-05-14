	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default" style="margin-top:10px;">
				<div class="panel-heading"><?=$nama_kategori;?> lainnya</div>
				<div class="panel-body" style="padding-left:0pc;padding-right:0pc;">
                  <div id='lainnya_<?=$id_kategori;?>'></div>
				</div><!--//panel-body-->
                <div id='paging_agenda' class='panel-footer'></div>
			</div><!--//panel-->
		</div>
	</div>
<?=$sub_arsip;?>
<script type="text/javascript">
$(document).ready(function(){
	gridagenda(<?=$hal;?>);
});
function repaging_agenda(){
	$( "#paging_agenda .pagingframe div" ).addClass("btn btn-default");
	$( "#paging_agenda .pagingframe div" ).click(function() {
		var ini = $( this ).html();
		if(ini=="Prev" || ini=="Next"){	var inu=$(this).attr('data-hal');	} else {	var inu=$(this).html();	}
		if(!$(this).hasClass("active"))	{	gridagenda(inu);	}
	});
}
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
function gridagenda(hal){
$('#lainnya_<?=$id_kategori;?>').html("<img src='<?=base_url();?>assets/images/loading1.gif'>");
if(hal=="end"){var hali="end";} else {var hali=hal;}
			$.ajax({
				type:"POST",
				url:"<?=site_url();?>web_agenda/getagenda/",
				data:{"hal": hali, "batas": <?=$batas;?>, "rubrik": <?=$id_kategori;?>},
				success:function(data){
if((data.hslquery.length)>0){
			var table=""; var nomor=0;
			$.each( data.hslquery, function(index, item){
					if(item.id_konten == <?=$id_konten;?>){
						table = table+ "<div class='agendajudul active'>";
						table = table+ "<small>"+ item.hari_mulai+", "+ item.tgl_mulai+" s/d "+item.hari_selesai+", "+item.tgl_selesai+"</small><br>";
						table = table+item.judul;
						table = table+ "</div>";
					} else {
						table = table+ "<a href=\"<?=site_url();?>read/agenda/"+item.id_konten+"/"+item.kat_seo+"/"+item.seo+"\" class='ag'><div class='agendajudul'>";
						table = table+ "<small>"+ item.hari_mulai+", "+ item.tgl_mulai+" s/d "+item.hari_selesai+", "+item.tgl_selesai+"</small><br>";
						table = table+item.judul;
						table = table+ "</div></a>";
					}
				nomor++;
			}); //endeach
//			table = table+data.pager;
				$('#lainnya_<?=$id_kategori;?>').html(table);
				$('#paging_agenda').html(data.pager);
				repaging_agenda();
		} else {
			$('#lainnya_<?=$id_kategori;?>').html("");
		}
}, 
        dataType:"json"});
}
</script>
<style>
#paging_agenda.panel-footer{padding-top:2px;padding-bottom:2px;text-align:right;	}
#paging_agenda.panel-footer .btn{padding:2px 8px 2px 8px;}
#paging_agenda.panel-body .btn{padding:2px 8px 2px 8px;}

.ag:hover	{	text-decoration:none; color:#FF0000;	}
.agendajudul, .agendajudul:hover {	  padding: 5px 5px 5px 10px;font-size:14px;border-bottom:1px dotted #ccc;	}
.agendajudul.active {	  padding: 5px 5px 5px 10px;font-size:14px;border-bottom:1px dotted #ccc; color:#999;	}
.cc .agendajudul:hover small {	  color:#333;	}
</style>