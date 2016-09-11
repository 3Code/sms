

<!DOCTYPE html>
<html>
<head>
<title>Tabel Pelanggan PT.PLN(Persero) Rayon Indarung</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<p>Daftar Nama Pelanggan PT.PLN(Persero) Rayon Indarung </p>

<form name="form1" method="post" action="">
<p>
    <label for="id"></label>
    <input type="submit" name="cetak" id="cetak" value="CETAK" class="btn btn-primary" formaction="/smsGateway/menuexcel/lap_pelanggan.php">
</p>
  <table width="319" border="0">
    <tr>
      <td>Cari ID PEL</td>
      <td>:</td>
      <td><label for="textfield2"></label>
      <input type="text" name="id" id="textfield2" class="input-sm" value="<?php echo $_POST['id']; ?>">
      <input type="submit" name="cari" id="cari" value="search" class="btn btn-primary"></td>
    </tr>
  </table>
  
</form>
<div class="table-responsive">
  <table class="table table-bordered table-striped table-hover">
<thead>
<tr>
<th>No</th>
<th>ID Pelanggan</th>
<th>Nama Pelanggan</th>
<th>Alamat</th>
<th>Tarif</th>
<th>Daya</th>
<th>No Telp.</th>
</tr>
</thead>
<tbody>
<?php 
mysql_connect("localhost","root","");
mysql_select_db("gatewaypln");


$no=0;
if ($_POST['cari'])
{
	if(!empty($_POST['id']))
	{
$a=mysql_query("Select * from tbl_pelanggan where idpel='$_POST[id]'");	
}
else
{
$a=mysql_query("Select * from tbl_pelanggan order by idpel");
}
}
else
{
$a=mysql_query("Select * from tbl_pelanggan order by idpel");
}
while($d=mysql_fetch_array($a)){
$no++;
?>
<tr>
<td><?php echo $no; ?></td>
<td><?php echo $d['idpel']; ?></td>
<td><?php echo $d['namapel']; ?></td>
<td><?php echo $d['alamat']; ?></td>
<td><?php echo $d['tarif']; ?></td>
<td><?php echo $d['daya']; ?></td>
<td><?php echo $d['notelp']; ?></td>
</tbody><?php } ?>
</table>
</div>
</body>
</html>