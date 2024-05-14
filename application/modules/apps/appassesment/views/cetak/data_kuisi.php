<script src="https://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>



<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Hasil Kuisioner</h3>
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
				<?php foreach ($kuisi->result() as $key){ ?>	
                <table id="myTable" class="table2excel" border="1" cellspacing="0" cellpadding="10">
					<tr>	
						<td><?php echo $key->id_kuisi; ?></td>
						<td><?php echo $key->tgl_assessment; ?></td>
						<td><?php echo $key->jabatan; ?></td>
						<td><?php echo $key->kuisi_1; ?></td>
						<td><?php echo $key->kuisi_1_a; ?></td>
						<td><?php echo $key->kuisi_1_lain; ?></td>
						<td><?php echo $key->kuisi_2; ?></td>
						<td><?php echo $key->kuisi_2_a; ?></td>
						<td><?php echo $key->kuisi_2_lain; ?></td>
						<td><?php echo $key->kuisi_3; ?></td>
						<td><?php echo $key->kuisi_3_a; ?></td>
						<td><?php echo $key->kuisi_3_lain; ?></td>
						<td><?php echo $key->kuisi_4; ?></td>
						<td><?php echo $key->kuisi_4_a; ?></td>
						<td><?php echo $key->kuisi_4_lain; ?></td>
						<td><?php echo $key->kuisi_5; ?></td>
						<td><?php echo $key->kuisi_6; ?></td>
						<td><?php echo $key->kuisi_6_a; ?></td>
						<td><?php echo $key->kuisi_6_lain; ?></td>
						<td><?php echo $key->kuisi_7; ?></td>
						<td><?php echo $key->kuisi_7_a; ?></td>
						<td><?php echo $key->kuisi_7_lain; ?></td>
						<td><?php echo $key->kuisi_8; ?></td>
						<td><?php echo $key->kuisi_8_a; ?></td>
						<td><?php echo $key->kuisi_8_lain; ?></td>
						<td><?php echo $key->kuisi_9; ?></td>
						<td><?php echo $key->kuisi_9_a; ?></td>
						<td><?php echo $key->kuisi_9_lain; ?></td>
						<td><?php echo $key->kuisi_10; ?></td>
						<td><?php echo $key->kuisi_10_a; ?></td>
						<td><?php echo $key->kuisi_10_lain; ?></td>
						<td><?php echo $key->kuisi_11; ?></td>
						<td><?php echo $key->kuisi_11_a; ?></td>
						<td><?php echo $key->kuisi_11_lain; ?></td>
						<td><?php echo $key->kuisi_12; ?></td>
						<td><?php echo $key->kuisi_12_a; ?></td>
						<td><?php echo $key->kuisi_12_lain; ?></td>
						<td><?php echo $key->kuisi_13; ?></td>
						<td><?php echo $key->kuisi_13_a; ?></td>
						<td><?php echo $key->kuisi_13_lain; ?></td>
						<td><?php echo $key->kuisi_14; ?></td>
						<td><?php echo $key->kuisi_14_a; ?></td>
						<td><?php echo $key->kuisi_14_lain; ?></td>
						<td><?php echo $key->kuisi_15; ?></td>
						<td><?php echo $key->kuisi_15_a; ?></td>
						<td><?php echo $key->kuisi_15_lain; ?></td>
						<td><?php echo $key->kuisi_16; ?></td>
						<td><?php echo $key->kuisi_16_a; ?></td>
						<td><?php echo $key->kuisi_16_lain; ?></td>
						<td><?php echo $key->kuisi_17; ?></td>
						<td><?php echo $key->kuisi_17_lain; ?></td>
						<td><?php echo $key->kuisi_18; ?></td>
						<td><?php echo $key->kuisi_18_lain; ?></td>
						<td><?php echo $key->kuisi_19; ?></td>
						<td><?php echo $key->kuisi_19_lain; ?></td>
						<td><?php echo $key->kuisi_20; ?></td>
						<td><?php echo $key->kuisi_21; ?></td>
						<td><?php echo $key->ket; ?></td>
						<td><?php echo $key->last_update; ?></td>
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