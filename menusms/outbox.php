<?php

?>
<!DOCTYPE html>
<html>
<head>
<title>Tabel Rekening PT.PLN(Persero) Rayon Indarung</title>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
</head>
<body>
<form name="form1" method="post" action="">
  <div class="table-responsive">
    <p>Daftar Pesan Yang Dikirimkan</p>
    <p>
      <input type="submit" name="button" id="button" value="CETAK" class="btn btn-primary" formaction="menusms/lap_outbox.php?pilihan=<?php echo $_POST['pilih'];?>">
    </p>
    <p>PILIHAN LAPORAN OUTBOX: 
      <label for="pilihan"></label>
      <select name="pilih" id="pilih">
              
        <?php 
	  		if ($_POST['pilih']=="O"){
	  		$h1="selected";}
			else if ($_POST['pilih']=="SEMUA"){
			$h2="selected"; }
			else if ($_POST['pilih']=="GROUP SEMUA"){
			$h3="selected"; }
			else if ($_POST['pilih']=="GROUP SORTING"){
			$h4="selected"; }
			else if ($_POST['pilih']=="MANUAL"){
			$h5="selected"; }
			else if ($_POST['pilih']=="BROADCAST"){
			$h6="selected"; }
			?>
            
          <option value="0" <?php echo $h1 ; ?>>---</option>
          <option value="SEMUA" <?php echo $h2 ; ?>>SEMUA</option>
          <option value="GROUP SEMUA" <?php echo $h3 ; ?>>GROUP SEMUA</option>
          <option value="GROUP SORTING" <?php echo $h4 ; ?>>GROUP SORTING</option>
          <option value="MANUAL" <?php echo $h5 ; ?>>MANUAL</option>
          <option value="BROADCAST" <?php echo $h6 ; ?>>BROADCAST</option>
      </select>
    </p>
    <table width="448" border="0">
      <tr>
        <td width="98" height="27">Dari Tanggal</td>
        <td width="11">:</td>
        <td width="203"><?php
//array yang digunakan pada ComboBox bulan
$blnsm=array(1=>"Januari","Februari","Maret","April","Mei",
"Juni","Juli","Agustus","September","Oktober",
"November","Desember");

//membuat tanggal 1-31 pada ComboBox
echo "<select name=tanggalsm1>
<option value=01 selected>01</option>";
for($tglsm=2; $tglsm<=31; $tglsm++){
$tgl_leng=strlen($tglsm);
if ($tgl_leng==1)
$i="0".$tglsm;
else
$i=$tglsm;

if ($_POST['tanggalsm1']==$tglsm)
	{ $ck="selected" ; }
	else {
	$ck="";	
	}
	
echo "<option value=$i $ck>$i</option>";}
echo "</select>";

//membuat bulan ComboBox
echo "<select name=bulansm1>
<option value=1 >Januari</option>";
for($bulan=2; $bulan<=12; $bulan++){
	if ($_POST['bulansm1']==$bulan)
	{ $ck="selected" ; }
	else {
	$ck="";	
	}
echo "<option value=$bulan $ck>$blnsm[$bulan]</option>";
}
echo "</select>";

//Membuat tahun 2015 pada ComboBox
echo "<select name=tahunsm1>
<option value=2016 >2016</option>";
for($thn=2015; $thn>=1991; $thn--){
	
	if ($_POST['tahunsm1']==$thn)
	{ $ck="selected" ; }
	else {
	$ck="";	
	}
	
echo "<option value=$thn $ck>$thn</option>";}
echo "</select>";
?></td>
        <td width="108" rowspan="2"><input type="submit" name="button2" id="button2" value="TAMPIL" class="btn btn-primary" onChange="this.form.submit();"></td>
      </tr>
      <tr>
        <td>Sampai</td>
        <td>:</td>
        <td><?php
//array yang digunakan pada ComboBox bulan
$blnsm=array(1=>"Januari","Februari","Maret","April","Mei",
"Juni","Juli","Agustus","September","Oktober",
"November","Desember");

//membuat tanggal 1-31 pada ComboBox
echo "<select name=tanggalsm2>
<option value=01 selected>01</option>";
for($tglsm=2; $tglsm<=31; $tglsm++){
$tgl_leng=strlen($tglsm);
if ($tgl_leng==1)
$i="0".$tglsm;
else
$i=$tglsm;
if ($_POST['tanggalsm2']==$tglsm)
	{ $ck="selected" ; }
	else {
	$ck="";	
	}
echo "<option value=$i $ck>$i</option>";}
echo "</select>";

//membuat bulan ComboBox
echo "<select name=bulansm2>
<option value=1 selected>Januari</option>";
for($bulan=2; $bulan<=12; $bulan++){
	if ($_POST['bulansm2']==$bulan)
	{ $ck="selected" ; }
	else {
	$ck="";	
	}
echo "<option value=$bulan $ck>$blnsm[$bulan]</option>";}
echo "</select>";

//Membuat tahun 2015 pada ComboBox
echo "<select name=tahunsm2>
<option value=2016 selected>2016</option>";
for($thn=2015; $thn>=1991; $thn--){
	if ($_POST['tahunsm2']==$thn)
	{ $ck="selected" ; }
	else {
	$ck="";	
	}
echo "<option value=$thn $ck>$thn</option>";}
echo "</select>";
?></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <table width="122%" class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th width="10%">No</th>
          <th width="23%">ID Pelanggan</th>
          <th width="21%">No Telepon</th>
          <th width="16%">Pilihan</th>
          <th width="30%">Isi Pesan Kirim</th>
          <th width="30%">Tanggal</th>
        </tr>
      </thead>
      <tbody>
        <?php 
mysql_connect("localhost","root","");
mysql_select_db("gatewaypln");
$pilih=$_POST['pilih'];
$tglawal=$_POST['tahunsm1'].'-'.$_POST['bulansm1'].'-'.$_POST['tanggalsm1'];
$tglakhir=$_POST['tahunsm2'].'-'.$_POST['bulansm2'].'-'.$_POST['tanggalsm2'];
$no=0;
echo $tglakhir;
if($pilih=="SEMUA"){
$a=mysql_query("Select * from tbl_outbox where tgl >='$tglawal' and tgl<='$tglakhir' order by tgl DESC");}
else{
$a=mysql_query("Select * from tbl_outbox where pil='$pilih' and tgl >='$tglawal' and tgl<='$tglakhir' order by tgl DESC");}
while($d=mysql_fetch_array($a)){
$no++;
?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $d['idpel']; ?></td>
          <td><?php echo $d['notel']; ?></td>
          <td><?php echo $d['pil']; ?></td>
          <td><?php echo $d['isipesan']; ?></td>
          <td><?php echo $d['tgl']; ?></td>
      </tbody>
      <?php } ?>
    </table>
  </div>
</form>
<p>&nbsp;</p>
</body>
</html>