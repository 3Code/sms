<?php
session_start();

include_once "koneksi.php";
include_once "fpdf.php";


// *** Init PDF
$pdf = new FPDF();
$pdf->SetTitle("SMS GATEWAY PT.PLN (Persero) Indarung");
$pdf->SetAutoPageBreak(true, 5);
$lbr = 190;

$pdf->AddPage();
HeaderLogo("SMS Gateway ", $pdf, 'P');
BuatIsinya( $pdf);

$pdf->Output();

// *** FUnctions ***
function BuatIsinya( $p) {
  $maxentryperpage = 45;
  

  
 $tampil=mysql_query("Select * from tbl_pelanggan order by idpel");
	

  
  
  $n = 0; $t = 5; $_prd = 'laksdjfalksdfh'; $ttl =0;
  
  BuatHeader( 10, $p);
  $jumlah=0;
  while ($r = mysql_fetch_array($tampil)) {
   $n++;


    $p->SetFont('Helvetica', '', 8);
    $p->Cell(7, $t, $n,  1, 0); 
    $p->Cell(30, $t, $r['idpel'],1,  0,'BR');
    $p->Cell(35, $t, $r['namapel'],1, 0, 'L');
	$p->Cell(65, $t, $r['alamat'],1, 0, 'L');
	$p->Cell(10, $t, $r['tarif'],1, 0, 'L');
	$p->Cell(15, $t, $r['daya'],1, 0, 'R');
	$p->Cell(25, $t, $r['notelp'],1, 0, 'L');
	
    $p->Ln($t);
  }
  } 

function BuatHeader($page, $p) {
  global $lbr;
  $t = 10;

  // Header tabel
  $p->SetFont('Helvetica', 'B', 10);
  $p->Cell(7, $t, 'No', 1, 0 , 'C');
  $p->Cell(30, $t, 'ID Pelanggan', 1, 0 , 'C');
  $p->Cell(35, $t, 'Nama Pelanggan', 1, 0 , 'C');
  $p->Cell(65, $t, 'Alamat', 1, 0 , 'C');
  $p->Cell(10, $t, 'Tarif', 1, 0 , 'C');
  $p->Cell(15, $t, 'Daya', 1, 0 , 'C');
  $p->Cell(25, $t, 'No HP', 1, 0 , 'C');
  
    $p->Ln($t);
}


function HeaderLogo($jdl, $p, $orientation='P')
{	$pjg = 100;
	$logo = (file_exists("logo.png"))? "logo.png" : "logo.png";
	$foto = (file_exists("poto.jpg"))? "poto.jpg" : "poto.jpg";
	$p->Image($logo, 10, 6, 14);
	$p->Image($foto, 165, 6, 16);
	$p->SetY(10);
    $p->SetFont("Helvetica", 'B', 10);
    $p->Cell($pjg, 5, 'LAPORAN DATA PELANGGAN ', 11, 1, 'C');
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
