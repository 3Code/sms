<?php

																																																																																																																																		 
include_once "../menuexcel/koneksi.php";
include_once "../menuexcel/fpdf.php";


// *** Init PDF
$pdf = new FPDF();
$pdf->SetTitle("SMS GATEWAY PT.PLN (Persero) Indarung");
$pdf->SetAutoPageBreak(true, 3);
$lbr = 210;

$pdf->AddPage();
HeaderLogo("SMS Gateway ", $pdf, 'P');
BuatIsinya( $pdf);

$pdf->Output();

// *** FUnctions ***
function BuatIsinya( $p) {
  $maxentryperpage = 45;
  
$pilihan=$_GET['pilihan'];

if ($pilihan=="SEMUA")
{
$tampil=mysql_query("Select * from tbl_outbox order by tgl DESC");	
}
else
{
  
 $tampil=mysql_query("Select * from tbl_outbox where pil='$pilihan' order by tgl DESC");
	
}

  $n = 0; $t = 3; $_prd = 'laksdjfalksdfh'; $ttl =0;
  
  BuatHeader( 4, $p);
  $jumlah=0;
  	$p->SetWidths(array(6, 25, 25, 20, 85, 20));
	$p->SetFont('Helvetica', '', 8);
  while ($r = mysql_fetch_array($tampil)) {
   $n++;
    $p->Row(array($n, $r['idpel'], $r['notel'],$r['pil'],$r['isipesan'],$r['tgl']));	
  }
    $p->Ln($t);
  } 

function BuatHeader($page, $p) {
  global $lbr;
  $t = 10;

 $p->SetFont('Helvetica', 'B', 8);
	$p->SetWidths(array(6, 25, 25, 20, 85, 20));
    $p->Row(array('No', 'ID Pelanggan', 'No Telp','Pilihan','Isi Pesan','Tanggal') );

/*
  // Header tabel
  $p->SetFont('Helvetica', 'B', 10);
  $p->Cell(7, $t, 'No', 1, 0 , 'C');
  $p->Cell(25, $t, 'ID Pelanggan', 1, 0 , 'C');
  $p->Cell(25, $t, 'No. Telp', 1, 0 , 'C');
  $p->Cell(20, $t, 'Pilihan', 1, 0 , 'C');
  $p->Cell(93, $t, 'Isi Pesan', 1, 0 , 'C');
  $p->Cell(20, $t, 'Tanggal', 1, 0 , 'C');
  */
  
}


function HeaderLogo($jdl, $p, $orientation='P')
{	$pjg = 100;
	$logo = (file_exists("logo.png"))? "logo.png" : "logo.png";
	$foto = (file_exists("poto.jpg"))? "poto.jpg" : "poto.jpg";
	$p->Image($logo, 10, 6, 14);
	$p->Image($foto, 165, 6, 16);
	$p->SetY(10);
    $p->SetFont("Helvetica", 'B', 10);
    $p->Cell($pjg, 5, 'LAPORAN PESAN KELUAR (OUTBOX) ', 11, 1, 'C');
    $p->SetFont("Helvetica", 'B', 10);
    $p->Cell($pjg, 7, "PT.PLN (Persero) RAYON INDARUNG", 5, 0, 'C');
    
	//Judul
	if($orientation == 'L')
	{
		$p->SetFont("Helvetica", 'B', 16);
		$p->Cell(90, 7, 'B', 0, 0);
		$p->Cell($pjg, 7, $jdl, 0, 1, 'C');
	}
	else
	{	$p->SetFont("Helvetica", 'B', 12);
		$p->Cell(80, 7, $jdl, 0, 1, 'R');
	}
	
    $p->SetFont("Helvetica", 'I', 6);
	$p->Cell($pjg, 3,
      'Jl. Raya BY.Pass', 0, 1, 'C');
    $p->Cell($pjg, 3,
      "Telp.  Fax.  ", 0, 1, 'C');
    $p->Ln(3);
	if($orientation == 'L') $length = 275;
	else $length = 190;
    $p->Cell($length, 0, '', 1, 1);
    $p->Ln(3);
}

?>
