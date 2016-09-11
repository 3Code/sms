<?php
include("auto_fungsi.php");
$sender = trim($_GET['sender']);
$isi = trim($_GET['isi']);
//$sukses = "Terima Kasih '$sender'.Permintaan Anda Akan Diproses";
$error = "Keyword yang anda minta salah, untuk Cek Rekening Listrik ketik IDPEL <spasi> CEK";

$sms=explode(" ",$isi);
$smsidpel=$sms[0];
$isiidpel=$sms[1];
$tgl=date("Y-m-d");

konek();	
if($isiidpel=="CEK"){
	$ambil_idpel=mysql_query("select * from tbl_pelanggan where idpel='$smsidpel'");
	$nama=mysql_fetch_array($ambil_idpel);
	$namapel=$nama['namapel'];
	if(mysql_num_rows($ambil_idpel)>0){
	$a=mysql_query("select * from tbl_rekening where idpel='$smsidpel'");
	if(mysql_num_rows($a)>0){
		while ($data=mysql_fetch_array($a)){
		$tunggak=$data['biaya'];
		$lembar=$data['lembar'];
		}
		$pesanbalik="Yth. Pelanggan PT. PLN (Persero) Rayon Indarung dengan id:$smsidpel a/n $namapel., Tunggakan Anda $lembar bulan: Rp.$tunggak,-. Segera lakukan pembayaran rekening listrik anda, Terima Kasih";
		insert ($smsidpel,$isiidpel,$sender,$tgl);
		kirim($sender,$pesanbalik);
		}
		else
		{
			$pesanbalik="Yth. Pelanggan PT. PLN (Persero) Rayon Indarung dengan id pelanggan:$smsidpel a/n $namapel,Anda Tidak mempunyai tunggakan. Terima Kasih telah melakukan pembayaran Listrik anda.";
			insert ($smsidpel,$isiidpel,$sender,$tgl);
			kirim($sender,$pesanbalik);
		}
	}
	else
	{
		$pesanbalik="Maaf IDPEL yang anda kirim Tidak Terdaftar menjadi Pelanggan PT.PLN (Persero) Rayon Indarung.";
		insert ($smsidpel,$isiidpel,$sender,$tgl);
		kirim($sender,$pesanbalik);
		}
		}
else{
insert($smsidpel,$isiidpel,$sender,$tgl);
kirim($sender, $error); }
exit;
?>