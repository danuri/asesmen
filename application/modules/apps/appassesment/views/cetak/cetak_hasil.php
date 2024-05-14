<html>
<head>
    <!-- <base href="https://demos.telerik.com/kendo-ui/pdf-export/page-layout">
    <style>html { font-size: 14px; font-family: Arial, Helvetica, sans-serif; } --></style>
    <title></title>
   <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.1.223/styles/kendo.common.min.css" />
<!--      <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.1.223/styles/kendo.black.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.1.223/styles/kendo.black.mobile.min.css" /> -->

    <script src="https://kendo.cdn.telerik.com/2017.1.223/js/jquery.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2017.1.223/js/jszip.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2017.1.223/js/kendo.all.min.js"></script>
</head>
<body>
<div id="example">
    <div class="box wide hidden-on-narrow">
        <div class="box-col">
            <h4>Select Page size</h4>
            <select id="paper" style="width: 100px;">
                <option value="size-a4" selected>A4</option>
                <option value="size-letter">Letter</option>
                <option value="size-executive">Executive</option>
            </select>
        </div>
        <div class="box-col">
            <h4>Get PDF</h4>
            <button class="export-pdf k-button" onclick="getPDF('.pdf-page')">Export</button>
        </div>
    </div>

    <div class="page-container hidden-on-narrow">
        <div class="pdf-page size-a4">
            <div class="pdf-header" style="border-bottom: 0px solid #e5e5e5;">
                <span class="company-logo">
				<div class="col-lg-8">
					<div style="float:left;padding:10px 10px 10px 0px;"><img src="<?=base_url('assets/media/upload/bawaan/logo_ktng.gif');?>" style='width:80px; vertical-align:middle;'></div>
					<div style="float:left;display:table;padding-top:20px; width:64%;">
						<div><p style="margin:0px;padding:0px;font-size:20px;color:#222">UPT PENILAIAN KOMPETENSI</p></div>
						<div><p style="font-size:14px;color:#222"> BKPSDM PEMERINTAH KOTA TANGERANG </p></div>
					</div>
				</div>  <!--col-lg-8--->
                </span>
                <span class="invoice-number">RAHASIA</span>
            </div>
			
            <div class="pdf-footer">
                <p>DOKUMEN UPT PENKOM BKPSDM<br />PEMERINTAH KOTA TANGERANG
                </p>
            </div>
			<?php foreach ($cetak_hasil->result() as $key){ ?>
            <div class="for">
                <h3><?php echo $key->nama; ?></h3>
                <p> NIP. <?php echo $key->nip; ?><br />
                    <?php echo $key->gol; ?> / <?php echo $key->jenjang; ?> <br />
					<?php echo $key->jabatan; ?>
                </p>
            </div>

            <div class="from">
                <h3>Tgl. Assessment</h3>
                <p style="padding-bottom: 20px; border-bottom: 1px solid #e5e5e5;"><?php echo $key->tgl_psikometri; ?> <br />
                    Tahun <?php echo $key->tahun; ?> <br />
                </p>
            </div>
			
            <div class="pdf-body">
				
                <div class="table-responsive">
					<table class="table table-bordered table-hover table-striped" style="font-size:11px;width:100%" border="2px solid">
						<thead>
							<tr>
								<th colspan="2" style="text-align:left;">I. Riwayat Pendidikan</th>
							</tr>
							<tr>
								<th>Pendidikan Awal CPNS</th>
								<th>Pendidikan Terkahir</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo $key->jur_awal; ?> - <?php echo $key->jenped_awal; ?> || <?php echo $key->thn_awal; ?> <br/><b><?php echo $key->univ_awal; ?></b> </td>
								<td><?php echo $key->jur_akhir; ?> - <?php echo $key->jenpend_akhir; ?> || <?php echo $key->thn_akhir; ?> <br/><b><?php echo $key->univ_akhir; ?></b></td>
							</tr>
						</tbody>
					</table>
				</div>
				<br/>
                <div class="table-responsive">
					<table class="table table-bordered table-hover table-striped" style="font-size:11px;width:100%" border="2px solid">
						<thead>
							<tr>
								<th colspan="2" style="text-align:left;">II. Riwayat Jabatan (2 Kali Sebelumnya)</th>
							</tr>
							<tr>
								<th>Jabatan Tahun <?php echo $key->thn_unker_1; ?> </th>
								<th>Jabatan Tahun <?php echo $key->thn_unker_2; ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo $key->jab_1; ?> <br/> <b><?php echo $key->unker_1; ?></b> </td>
								<td><?php echo $key->jab_2; ?> <br/> <b><?php echo $key->unker_2; ?></b></td>
							</tr>
						</tbody>
					</table>
				</div>
				<br/>
                <div class="table-responsive">
					<table class="table table-bordered table-hover table-striped" style="font-size:11px;width:100%" border="2px solid">
						<thead>
							<tr>
								<th style="text-align:left;">III. Hasil</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>...............................</b> </td>
							</tr>
						</tbody>
					</table>
				</div>
				
                <p class="signature">
                    Signature: ________________ <br /><br />
                    Date: 
					<?php date_default_timezone_set('Asia/Jakarta');?> 
					<?=date('d-m-Y');?>
					</p>
			</div>
					<?php } ?>
        </div>
    </div>
    
    <div class="responsive-message"></div>

    <style>
        /*
            Use the DejaVu Sans font for display and embedding in the PDF file.
            The standard PDF fonts have no support for Unicode characters.
        */
        .pdf-page {
            font-family: "DejaVu Sans", "Arial", sans-serif;
        }
    </style>

    <script>
        // Import DejaVu Sans font for embedding

        // NOTE: Only required if the Kendo UI stylesheets are loaded
        // from a different origin, e.g. cdn.kendostatic.com
        kendo.pdf.defineFont({
            "DejaVu Sans"             : "https://kendo.cdn.telerik.com/2016.2.607/styles/fonts/DejaVu/DejaVuSans.ttf",
            "DejaVu Sans|Bold"        : "https://kendo.cdn.telerik.com/2016.2.607/styles/fonts/DejaVu/DejaVuSans-Bold.ttf",
            "DejaVu Sans|Bold|Italic" : "https://kendo.cdn.telerik.com/2016.2.607/styles/fonts/DejaVu/DejaVuSans-Oblique.ttf",
            "DejaVu Sans|Italic"      : "https://kendo.cdn.telerik.com/2016.2.607/styles/fonts/DejaVu/DejaVuSans-Oblique.ttf"
        });
    </script>

    <!-- Load Pako ZLIB library to enable PDF compression -->
    <script src="../content/shared/js/pako.min.js"></script>

    <script>
      function getPDF(selector) {
        kendo.drawing.drawDOM($(selector)).then(function(group){
          kendo.drawing.pdf.saveAs(group, "Invoice.pdf");
        });
      }

    $(document).ready(function() {
        var data = [
          { productName: "QUESO CABRALES", unitPrice: 21, qty: 5 },
          { productName: "ALICE MUTTON", unitPrice: 39, qty: 7 },
          { productName: "GENEN SHOUYU", unitPrice: 15.50, qty: 3 },
          { productName: "CHARTREUSE VERTE", unitPrice: 18, qty: 1 },
          { productName: "MASCARPONE FABIOLI", unitPrice: 32, qty: 2 },
          { productName: "VALKOINEN SUKLAA", unitPrice: 16.25, qty: 3 }
        ];
        var schema = {
          model: {
            productName: { type: "string" },
            unitPrice: { type: "number", editable: false },
            qty: { type: "number" }
          },
          parse: function (data) {
                $.each(data, function(){
                    this.total = this.qty * this.unitPrice;
                });
                return data;
          }
        };
        var aggregate = [
          { field: "qty", aggregate: "sum" },
          { field: "total", aggregate: "sum" }
        ];
        var columns = [
          { field: "productName", title: "Product", footerTemplate: "Total"},
          { field: "unitPrice", title: "Price", width: 120},
          { field: "qty", title: "Pcs.", width: 120, aggregates: ["sum"], footerTemplate: "#=sum#" },
          { field: "total", title: "Total", width: 120, aggregates: ["sum"], footerTemplate: "#=sum#" }
        ];
        var grid = $("#grid").kendoGrid({
          editable: false,
          sortable: true,
          dataSource: {
            data: data,
            aggregate: aggregate,
            schema: schema,
          },
          columns: columns
        });

        $("#paper").kendoDropDownList({
          change: function() {
            $(".pdf-page")
              .removeClass("size-a4")
              .removeClass("size-letter")
              .removeClass("size-executive")
              .addClass(this.value());
          }
        });
    });
    </script>
	
    <style>
        .pdf-page {
            margin: 0 auto;
            box-sizing: border-box;
            box-shadow: 0 5px 10px 0 rgba(0,0,0,.3);
            background-color: #fff;
            color: #333;
            position: relative;
        }
        .pdf-header {
            position: absolute;
            top: .5in;
            height: .6in;
            left: .5in;
            right: .5in;
            border-bottom: 1px solid #e5e5e5;
        }
        .invoice-number {
            padding-top: .17in;
            float: right;
        }
        .pdf-footer {
            position: absolute;
            bottom: .5in;
            height: .6in;
            left: .5in;
            right: .5in;
            padding-top: 10px;
            border-top: 1px solid #e5e5e5;
            text-align: left;
            color: #787878;
            font-size: 9px;
        }
        .pdf-body {
            position: absolute;
            top: 2.7in;
            bottom: 1.2in;
            left: .5in;
            right: .5in;
			font-size: 10px;
        }

        .size-a4 { width: 8.3in; height: 11.7in; }
        .size-letter { width: 8.5in; height: 11in; }
        .size-executive { width: 7.25in; height: 10.5in; }

        .company-logo {
            font-size: 30px;
            font-weight: bold;
            color: #3aabf0;
        }
        .for {
            position: absolute;
            top: 1.5in;
            left: .5in;
            width: 2.5in;
			font-size: 11px;
        }
        .from {
            position: absolute;
            top: 1.5in;
            right: .5in;
            width: 2.5in;
			font-size: 11px;
        }
        .from p, .for p {
            color: #787878;
			
        }
        .signature {
            padding-top: .5in;
        }
    </style>

</div>


</body>
