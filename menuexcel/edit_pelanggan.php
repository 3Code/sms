<?php
mysql_connect("localhost","root","");
mysql_select_db("gatewaypln");

$id=$_GET['idpel'];
$cari=mysql_query("SELECT * from tbl_pelanggan WHERE  idpel='$id'");
$d=mysql_fetch_array ($cari);
$nama=$d['namapel'];
$alamat=$d['alamat'];
$tarif=$d['tarif'];
$daya=$d['daya'];
$lama=$d['notelp'];

  
  // kode untuk update data
if (isset ($_POST['edit']))
{
	mysql_query ("UPDATE tbl_pelanggan SET 
notelp='$_POST[baru]'
WHERE idpel='$id'") or die ('maaf salah kode update');
	echo "DATA SUKSES DI EDIT"; 
	?>
     <script language="javascript">
	alert ('data sukses diedit');
	window.location='../tabelPelanggan.php';
	</script>
    
    <?php
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>



</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>EDIT NO TELP. PELANGGAN</p>
  <table width="540" height="301" border="0">
    <tr>
      <td width="156">ID PELANGGAN</td>
      <td width="20">:</td>
      <td width="342"><input type="text" name="idpel" id="idpel" class="input-sm"  value ="<?php echo $d['idpel'];?>"/></td>
    </tr>
    <tr>
      <td>NAMA PELANGGAN</td>
      <td>:</td>
      <td><input type="text" name="nama" id="nama" class="input-sm" disabled="disabled" value="<?php echo $d['namapel'];?>"/></td>
    </tr>
    <tr>
      <td>ALAMAT</td>
      <td>:</td>
      <td><input type="text" name="alamat" id="alamat" class="input-sm" disabled="disabled" value="<?php echo $d['alamat'];?>"/></td>
    </tr>
    <tr>
      <td>TARIF</td>
      <td>:</td>
      <td><input type="text" name="tarif" id="tarif" class="input-sm" disabled="disabled" value="<?php echo $d['tarif'];?>"/></td>
    </tr>
    <tr>
      <td>DAYA</td>
      <td>:</td>
      <td><input type="text" name="daya" id="daya" class="input-sm" disabled="disabled" value="<?php echo $d['daya'];?>"/></td>
    </tr>
    <tr>
      <td>NO TEL
        
      P. LAMA</td>
      <td>:</td>
      <td><input type="text" name="lama" id="lama" class="input-sm" disabled="disabled" value="<?php echo $d['notelp'];?>"/></td>
    </tr>
    <tr>
      <td>NO TELP BARU</td>
      <td>:</td>
      <td><input type="text" name="baru" id="baru" class="input-sm"/></td>
    </tr>
    <tr>
      <td colspan="3"><input type="submit" name="back" id="back" value="BACK" class="btn btn-primary" formaction="../tabelPelanggan.php"/>
      <input type="submit" name="edit" id="edit" value="SIMPAN EDIT" class="btn btn-primary"/></td>
    </tr>
  </table>
  <p></p>
</form>
</body>
</html>