<?php
mysql_connect("localhost","root","");
mysql_select_db("gatewaypln");
?>
<script language="javascript">  </script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Menu Tipe</title>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>

</head>

<body>
<form name="form1" method="post" action="">
  <p>
    <label for="batasawal"></label>
  Pilihan Group :
  <label for="select"></label>
  <select name="pilih" id="pilih" onChange="this.form.submit();" >
              
        <?php 
	  		if ($_POST['pilih']=="0"){
	  		$h1="selected";}
			else if ($_POST['pilih']=="SEMUA"){
			$h2="selected"; }
			else if ($_POST['pilih']=="SORTING"){
			$h3="selected"; }
			?>
            
          <option value="0" <?php echo $h1 ; ?>>---</option>
          <option value="SEMUA" <?php echo $h2 ; ?>>SEMUA</option>
          <option value="SORTING" <?php echo $h3 ; ?>>SORTING</option>
      </select>
      <?php if($_POST['pilih']=='SORTING') {?>
  </p>
  <p>Sorting dari Tagihan Sebesar :
  <input type="text" name="batasawal" id="batasawal" value="<?php echo $_POST['batasawal'];
	if(empty($_POST['batasawal']))
	$batas1='0';
	else
	$batas1=$_POST['batasawal'];?>">
    ke 
    <label for="batasakhir"></label>
    <input type="text" name="batasakhir" id="batasakhir" value="<?php echo $_POST['batasakhir'];
  if(empty($_POST['batasakhir']))
	$batas2='0';
	else
	$batas2=$_POST['batasakhir'];?>" onChange="this.form.submit();">
  </p>
  <p>&nbsp;</p>
  <p>
    <?php 
$query=mysql_query("select tbl_rekening.*, tbl_pelanggan.notelp from tbl_rekening left outer join tbl_pelanggan on tbl_pelanggan.idpel=tbl_rekening.idpel where biaya >= $batas1 and biaya <= $batas2");
$hitung=mysql_query("select count(idpel) as jmldata from tbl_rekening where biaya >= $batas1 and biaya <= $batas2");
$jmldata=mysql_fetch_array($hitung); 
$angka = $jmldata['jmldata']; 
$no=0;
?>
  </p>
  <table width="384" border="1">
    <tr>
      <td><div align="center">Id Pelanggan</div></td>
      <td><div align="center">No Telpon</div></td>
    </tr>
    <tr>
      <td><div align="center">
        <textarea name="input1" cols="24" id="input1"><?php	
	if(empty($_POST['input1'])){
		echo  'Data Belum Ada';
	}
		else{
		while($row=mysql_fetch_array($query)){
		$no++;
		echo $row['idpel'];
		if($no<$angka)
		echo ",";
		else
		echo "";
		}}
	?>
      </textarea>
      </div></td>
      <td><div align="center">
        <textarea name="input2" cols="24" id="input2"><?php	
	$query2=mysql_query("select tbl_rekening.*, tbl_pelanggan.notelp from tbl_rekening left outer join tbl_pelanggan on tbl_pelanggan.idpel=tbl_rekening.idpel where biaya >= $batas1 and biaya <= $batas2");
	$hitung1=mysql_query("select count(idpel) as jmldata from tbl_rekening where biaya >= $batas1 and biaya <= $batas2");
$jmldata1=mysql_fetch_array($hitung1); 
$angka1 = $jmldata1['jmldata']; 
$no1=0;
	if(empty($_POST['input2'])){
		echo  'Data Belum Ada';
	}
		else{
		while($row1=mysql_fetch_array($query2)){
		$no1++;
		echo $row1['notelp'];
		if($no1<$angka1)
		echo ",";
		else
		echo "";
		}}?>
      </textarea>
      </div></td>
    </tr>
  </table>
  <p><?php } ?>
  </p>
  <p>&nbsp;</p>
  <table width="447" border="0">
    <tr>
      <td height="116">ISI PESAN</td>
      <td>:</td>
      <td><label for="pesan"></label>
      <textarea name="pesan" id="pesan" cols="45" rows="5" class="input-sm"></textarea></td>
    </tr>
    <tr>
      <td height="58" colspan="3"><div align="center">
        <input type="submit" name="kirim" id="kirim" value="KIRIM" class="btn btn-primary" formaction="menusms/group_penerima.php" >
      </div></td>
    </tr>
  </table>
  <p>&nbsp; </p>
</form>
