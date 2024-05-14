<?php
    $pdf = new \TCPDF();
    $pdf->AddPage('P', 'A4');
	//$pdf->AddPage('L', 'mm', 'A4');
	$pdf->Cell(25, 0, 'RAHASIA', 1, 1, 'C');
	$pdf->Ln(10);
    $pdf->SetFont('', 'B', 12);
    $pdf->Cell(190, 0, "HASIL ASSESSMENT", 0, 1, 'C');
    $pdf->SetAutoPageBreak(true, 0);
    
	// Add Header
    $pdf->Ln(10);
    $pdf->SetFont('', 'B', 10);
    $pdf->Cell(10, 8, "No", 1, 0, 'C');
    $pdf->Cell(60, 8, "Nama", 1, 0, 'C');
    $pdf->Cell(35, 8, "NIP", 1, 0, 'C');
    $pdf->Cell(50, 8, "Rekomendasi", 1, 1, 'C');
    $pdf->SetFont('', '', 9);
    $pegawai = $this->db->get('hasil_lap')->result();
    $no=0;
    foreach ($pegawai as $data){
        $no++;
        $pdf->Cell(10,8,$no,1,0, 'C');
        $pdf->Cell(60,8,$data->nama,1,0);
        $pdf->Cell(35,8,$data->nip,1,0);
        $pdf->Cell(50,8,$data->rekom,1,1);
    }
	
	// Add Footer
    $pdf->SetFont('', 'B', 10);
    $pdf->Cell(277, 10, "Laporan Pdf Menggunakan Tcpdf, Instalasi Tcpdf dengan Download Library", 0, 1, 'L');
    $pdf->Output('COBA.pdf');
?>