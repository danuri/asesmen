<div class="row">
	<div class="col-lg-6">
		<div class="panel panel-success">
			<div class="panel-heading">FORM TAMBAH KATEGORI</div>
			<div class="panel-body">
<form id="content-form" method="post" action="<?=site_url('cmskanal/kategori/tambahkategori_aksi');?>" enctype="multipart/form-data">
<div class="table-responsive">
<table class="table table-striped">
        <tr bgcolor="#99CCCC">
          <td>Kanal</td>
          <td colspan="3">
												  <select name="idd_kanal" id="idd_kanal"  class="form-control" style="width:400px;">
												  <option value="<?=$default_kanal->id_item;?>" <?=($default_kanal->id_item==$isi->id_kategori)?"selected":"";?>><?=$default_kanal->nama_item;?></option>
													<?=$kanal_options;?>
												  </select>
		  </td>
        </tr>
        <tr>
          <td>Komponen</td>
          <td colspan="3"><input type="text" class="form-control" style="width:400px;" value='<?=ucfirst($komponen);?>' disabled><input type='hidden' name='komponen' value='<?=$komponen;?>'></td>
        </tr>
        <tr>
          <td width="150">Nama Katagori</td>
          <td colspan="3"><input type="text" id="nama_kategori" name="nama_kategori" class="form-control ipt_text" style="width:400px;" value="Wajib diisi" onblur="if(this.value=='') this.value='Wajib diisi';" onfocus="if(this.value=='Wajib diisi') this.value='';"></td>
        </tr>
        <tr>
          <td>Keterangan</td>
          <td colspan="3"><input type="text" id="keterangan" name="keterangan" class="form-control ipt_text" style="width:400px;" value="Wajib diisi" onblur="if(this.value=='') this.value='Wajib diisi';" onfocus="if(this.value=='Wajib diisi') this.value='';"></td>
        </tr>
        <tr>
          <td>Paging Index</td>
          <td colspan="3"><?=$pg_index;?></td>
        </tr>
        <tr>
          <td>Paging Arsip</td>
          <td colspan="3"><?=$pg_arsip;?></td>
        </tr>
       <tr id="tombol">
			<td>&nbsp;</td>
			<td colspan="3">
				<input type=hidden name="idd" id="idd">
				<div onclick="simpan();" class='btn btn-primary btn-xl' id="btAct"><i class="fa fa-save fa-fw"></i> Simpan</div>
				<div class="btn btn-warning btn-xl" onclick="kembali();"><i class="fa fa-close fa-fw"></i> Batal...</div>
			</td>
        </tr>
</table>
</div>
</form>
			</div><!--/.panel-body-->
		</div>
	</div>
</div>
<script type="text/javascript">
function kembali(){
	$('#appe_post').hide();
	$('.content_post').show();
	var ss = $("#pagingA #inputpaging").val();
	gridpagingA(1);
}
function simpan(){
	var hasil=validasi_pengikut();
	if (hasil!=false) {
			var status= $('#notification-artikel');
			$.ajax({
			type:"POST",
			url:	$("#content-form").attr('action'),
			data:$("#content-form").serialize(),
			beforeSend:function(){	
				$('#btAct').replaceWith('<span id="btAct"><i class="fa fa-spinner fa-spin fa-2x"></i></span>');
			},
			success:function(data){
				location.reload();
			},
			dataType:"html"});
			return false;
	} //endif Hasil
}
////////////////////////////////////////////////////////////////////////////
function validasi_pengikut(opsi){
	var data="";
	var dati="";
			var nama = $.trim($("#nama_kategori").val());
			var kket = $.trim($("#keterangan").val());
			data=data+""+nama+"*"+kket+"**";
			if( nama =="Wajib diisi"){	dati=dati+"NAMA KATEGORI tidak boleh kosong\n";	}
			if( kket =="Wajib diisi"){	dati=dati+"KETERANGAN tidak boleh kosong\n";	}
	if( dati !=""){
		alert(dati);
		return false;
	} else {return data;}
}
</script>