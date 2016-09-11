<?php
include("group_fungsi.php");
$tgl=date("Y-m-d");
konek();

$pilihan=$_POST['pilih'];
if($pilihan=='SEMUA'){
$sql = "Select * from tbl_pelanggan";	
$query = mysql_query($sql);
while($row = mysql_fetch_array($query)){
$idpel=$row['idpel'];
$namapel=$row['namapel'];
$lembar=$row['lembar'];
$biaya=$row['biaya'];
$notelp=$row['notelp'];
$pesan = $_POST['pesan'];
$kategori='GROUP SEMUA';
insert($idpel,$notelp,$kategori,$pesan,$tgl);
//kirim($notelp, $pesan);
}

}else{	
$penerima = $_POST['input2'];
$notelpp = explode(',',$penerima);
$idpenerima = $_POST['input1'];
$idd = explode(',',$idpenerima);
$hitung = count($notelpp);
$isi = $_POST['pesan'];

for($i=0;$i<$hitung;$i++){
$notelp=$notelpp[$i];
$idpel = $idd[$i];
$pesan = $isi;
$kategori='GROUP SORTING';

insert($idpel,$notelp,$kategori,$pesan,$tgl);
//kirim($notelp, $pesan);
}
}?>
<script language="javascript">alert("Pesan Sedang Dikirim");window.location='/smsGateway/menugroup.php';</script>
<?php exit;
?>
