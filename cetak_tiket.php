<?php
include('dara/koneksi.php');
require('Login_v5/pdf/fpdf.php');
 $id_pembayaran=$_GET['id_pembayaran'];
   $sql= mysqli_query($con,"SELECT * FROM pembayaran WHERE id_pembayaran='$id_pembayaran'");
   $tampil= mysqli_fetch_array($sql);
   $id_pembayaran = $tampil['id_pembayaran'];
 $nama_objek = $tampil['nama_objek'];
$alamat_objek = $tampil ['alamat_objek'];
$nama_pemesan = $tampil ['nama_pemesan'];
$jumlah_pemesanan = $tampil ['jumlah_pemesanan'];
$harga = $tampil ['harga'];
$total = $tampil ['total'];

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image('images/gowis.jpg',1,1,2,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'GoWisata',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Pesan Tiket Dengan Mudah',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Jl.Ainun Jakarta Barat ',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'email : gowisata@gmail.com',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Tiket GoWisata",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,0.7,"Objek Tujuan: $nama_objek",0,0,'L');
$pdf->ln(1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,0.7,"Alamat Objek: $alamat_objek",0,0,'L');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,0.7,"Pemesan: $nama_pemesan",0,0,'L');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,0.7,"Jumlah Pemesan: $jumlah_pemesanan",0,0,'L');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,0.7,"Harga Tiket Kunjungan : Rp.$harga",0,0,'L');
$pdf->ln(1);


$pdf->SetFont('Arial','B',20);
$pdf->Cell(22,0.7,"Total Keseluruhan : Rp.$total",0,0,'R');
$pdf->ln(1);


$pdf->SetFont('Arial','',10);
$pdf->Cell(0,0.70,"--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------",0,0,'');
$pdf->ln(1);



$pdf->Output("laporan_penjualan.pdf","I");
?>

