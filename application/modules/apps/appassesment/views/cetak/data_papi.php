<script src="https://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>



<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Hasil PAPI Kostick</h3>
    </div>
<!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
			<button>Export Excel</button>
				<?php foreach ($papi->result() as $key){ ?>	
                <table id="myTable" class="table2excel" border="1" cellspacing="0" cellpadding="10">
                    <tr>
						<td>NAMA</td>
						<td>ID</td>
						<td>JWB</td>
                    <tr>
						<td><?php echo $key->nama; ?></td>
						<td><?php echo $key->id1; ?></td>
						<td><?php echo $key->jwb1; ?></td>
					</tr>
					<tr>	
						<td><?php echo $key->nip; ?></td>
						<td><?php echo $key->id2; ?></td>
						<td><?php echo $key->jwb2; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id3; ?></td>
						<td><?php echo $key->jwb3; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id4; ?></td>
						<td><?php echo $key->jwb4; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id5; ?></td>
						<td><?php echo $key->jwb5; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id6; ?></td>
						<td><?php echo $key->jwb6; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id7; ?></td>
						<td><?php echo $key->jwb7; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id8; ?></td>
						<td><?php echo $key->jwb8; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id9; ?></td>
						<td><?php echo $key->jwb9; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id10; ?></td>
						<td><?php echo $key->jwb10; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id11; ?></td>
						<td><?php echo $key->jwb11; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id12; ?></td>
						<td><?php echo $key->jwb12; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id13; ?></td>
						<td><?php echo $key->jwb13; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id14; ?></td>
						<td><?php echo $key->jwb14; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id15; ?></td>
						<td><?php echo $key->jwb15; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id16; ?></td>
						<td><?php echo $key->jwb16; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id17; ?></td>
						<td><?php echo $key->jwb17; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id18; ?></td>
						<td><?php echo $key->jwb18; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id19; ?></td>
						<td><?php echo $key->jwb19; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id20; ?></td>
						<td><?php echo $key->jwb20; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id21; ?></td>
						<td><?php echo $key->jwb21; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id22; ?></td>
						<td><?php echo $key->jwb22; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id23; ?></td>
						<td><?php echo $key->jwb23; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id24; ?></td>
						<td><?php echo $key->jwb24; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id25; ?></td>
						<td><?php echo $key->jwb25; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id26; ?></td>
						<td><?php echo $key->jwb26; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id27; ?></td>
						<td><?php echo $key->jwb27; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id28; ?></td>
						<td><?php echo $key->jwb28; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id29; ?></td>
						<td><?php echo $key->jwb29; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id30; ?></td>
						<td><?php echo $key->jwb30; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id31; ?></td>
						<td><?php echo $key->jwb31; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id32; ?></td>
						<td><?php echo $key->jwb32; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id33; ?></td>
						<td><?php echo $key->jwb33; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id34; ?></td>
						<td><?php echo $key->jwb34; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id35; ?></td>
						<td><?php echo $key->jwb35; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id36; ?></td>
						<td><?php echo $key->jwb36; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id37; ?></td>
						<td><?php echo $key->jwb37; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id38; ?></td>
						<td><?php echo $key->jwb38; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id39; ?></td>
						<td><?php echo $key->jwb39; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id40; ?></td>
						<td><?php echo $key->jwb40; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id41; ?></td>
						<td><?php echo $key->jwb41; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id42; ?></td>
						<td><?php echo $key->jwb42; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id43; ?></td>
						<td><?php echo $key->jwb43; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id44; ?></td>
						<td><?php echo $key->jwb44; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id45; ?></td>
						<td><?php echo $key->jwb45; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id46; ?></td>
						<td><?php echo $key->jwb46; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id47; ?></td>
						<td><?php echo $key->jwb47; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id48; ?></td>
						<td><?php echo $key->jwb48; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id49; ?></td>
						<td><?php echo $key->jwb49; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id50; ?></td>
						<td><?php echo $key->jwb50; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id51; ?></td>
						<td><?php echo $key->jwb51; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id52; ?></td>
						<td><?php echo $key->jwb52; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id53; ?></td>
						<td><?php echo $key->jwb53; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id54; ?></td>
						<td><?php echo $key->jwb54; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id55; ?></td>
						<td><?php echo $key->jwb55; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id56; ?></td>
						<td><?php echo $key->jwb56; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id57; ?></td>
						<td><?php echo $key->jwb57; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id58; ?></td>
						<td><?php echo $key->jwb58; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id59; ?></td>
						<td><?php echo $key->jwb59; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id60; ?></td>
						<td><?php echo $key->jwb60; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id61; ?></td>
						<td><?php echo $key->jwb61; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id62; ?></td>
						<td><?php echo $key->jwb62; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id63; ?></td>
						<td><?php echo $key->jwb63; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id64; ?></td>
						<td><?php echo $key->jwb64; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id65; ?></td>
						<td><?php echo $key->jwb5; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id66; ?></td>
						<td><?php echo $key->jwb66; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id66; ?></td>
						<td><?php echo $key->jwb66; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id67; ?></td>
						<td><?php echo $key->jwb67; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id68; ?></td>
						<td><?php echo $key->jwb68; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id69; ?></td>
						<td><?php echo $key->jwb69; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id70; ?></td>
						<td><?php echo $key->jwb70; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id71; ?></td>
						<td><?php echo $key->jwb71; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id72; ?></td>
						<td><?php echo $key->jwb72; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id73; ?></td>
						<td><?php echo $key->jwb73; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id74; ?></td>
						<td><?php echo $key->jwb74; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id75; ?></td>
						<td><?php echo $key->jwb75; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id76; ?></td>
						<td><?php echo $key->jwb76; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id77; ?></td>
						<td><?php echo $key->jwb77; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id78; ?></td>
						<td><?php echo $key->jwb78; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id79; ?></td>
						<td><?php echo $key->jwb79; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id80; ?></td>
						<td><?php echo $key->jwb80; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id81; ?></td>
						<td><?php echo $key->jwb81; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id82; ?></td>
						<td><?php echo $key->jwb82; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id83; ?></td>
						<td><?php echo $key->jwb83; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id84; ?></td>
						<td><?php echo $key->jwb84; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id85; ?></td>
						<td><?php echo $key->jwb85; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id86; ?></td>
						<td><?php echo $key->jwb86; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id87; ?></td>
						<td><?php echo $key->jwb87; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id88; ?></td>
						<td><?php echo $key->jwb88; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id89; ?></td>
						<td><?php echo $key->jwb89; ?></td>
					</tr>	
					<tr>	
						<td></td>
						<td><?php echo $key->id90; ?></td>
						<td><?php echo $key->jwb90; ?></td>
					</tr>	
                </table>
				<?php } ?>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<script>
$("button").click(function(){
	$("#myTable").table2excel();
  });

$("#myTable").table2excel({
  exclude: ".noExl",
  name: "Table2Excel",
  filename: "table2excel",
  fileext: ".xls",
  exclude_img: true,
  exclude_links: true,
  exclude_inputs: true,
  preserveColors: false
});
</script>