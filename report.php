<?php
require('../phpfpdf/fpdf.php');
$pdf = new FPDF('l','mm','A5');
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR SISWA',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,6,"NIS",1,0);
$pdf->Cell(50,6,"NAMA SISWA",1,0);
$pdf->Cell(30,6,"JENIS KELAMIN",1,0);
$pdf->Cell(30,6,"NO TELP",1,0); 
$pdf->Cell(50,6,"ALAMAT",1,1); 

$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$query = "SELECT * FROM idsiswa";
$siswa = $pdo->prepare($query);
$siswa->execute();
while ($row = $siswa->fetch()){
    $pdf->Cell(25,6,$row['nis'],1,0);
    $pdf->Cell(50,6,$row['nama'],1,0);
    $pdf->Cell(30,6,$row['jenis_kelamin'],1,0);
    $pdf->Cell(30,6,$row['telp'],1,0); 
    $pdf->Cell(50,6,$row['alamat'],1,1); 
}

$pdf->Output();
?>