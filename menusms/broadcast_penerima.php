<?php
include("broadcast_fungsi.php");
$tgl=date("Y-m-d");
konek();

$penerima = $_POST['input2'];
$notelpp = explode(',',$penerima);
$idpenerima = $_POST['input1'];
$idd = explode(',',$idpenerima);
$hitung = count($notelpp);

$pesan = " Yth. Pelanggan PT.PLN (Persero) Rayon Indarung. dgn No $idpel a.n $namapel.Untuk menghindari terjadinya pemutusan dan penambahan biaya keterlambatan , segera lakukan pembayaran rekening listrik saudara/i di POS atau PPOB terdekat,jumlah tagihan anda $lembar bulan : .dengan tagihan Rp.$biaya,-. Silahkan Melakukan Pembayaran";

for($i=0;$i<$hitung;$i++){
$notelp=$notelpp[$i];
$idpel = $idd[$i];




insert($idpel,$notelp,$pesan,$tgl);
//kirim($notelp, $pesan);
}?>
<script language="javascript">alert("Pesan Sedang Dikirim");window.location='/smsGateway/menubroadcast.php';</script>
<?php exit;
?>
