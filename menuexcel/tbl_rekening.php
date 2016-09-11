<!DOCTYPE html>
<html>
<head>
<title>Tabel Rekening PT.PLN(Persero) Rayon Indarung</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<p>Daftar Rekening PT.PLN(Persero) Rayon Indarung </p>
<form name="form2" method="post" action="">
  <input type="submit" name="button" id="button" value="CETAK" formaction="/smsGateway/menuexcel/lap_rekening.php"class="btn btn-primary">
</form>
<div class="table-responsive">
  <table width="283" height="127" class="table table-bordered table-striped table-hover">
<thead>
<tr>
<td width="5%"><strong>No</strong></td>
<td width="15%"><strong>ID Pelanggan</strong></td>
<td width="15%" ><strong>Nama</strong></td>
<td width="10%" align="center"><strong>Total Bulan</strong></td>
<td width="15%" align="center"><strong>Total Biaya </strong></td>
<td width="50%"> </td>	
</tr>
</thead>
<tbody>
<?php 
mysql_connect("localhost","root","");
mysql_select_db("gatewaypln");
$no=0;
$total=0;
$a=mysql_query("select tbl_rekening.*,tbl_pelanggan.namapel  from tbl_rekening,tbl_pelanggan where tbl_rekening.idpel=tbl_pelanggan.idpel order by idpel");
while($d=mysql_fetch_array($a)){
$no++;
$total=$total+$d['biaya'];
?>
<tr>
<td><?php echo $no; ?></td>
<td><?php echo $d['idpel']; ?></td>
<td ><?php echo $d['namapel']; ?></td>
<td align="right"><?php echo $d['lembar']; ?></td>
<td align="right"><?php echo number_format($d['biaya'],0); ?></td>
<td><div align="right"></div></td>
 <?php } ?> 
<tr>
  <th colspan="4">TOTAL TUNGGAKAN</th>
  <th><div align="right"><?php echo number_format($total,0); ?>
    </div></th>
    
</tbody>

</table>
</div>
</body>
</html>