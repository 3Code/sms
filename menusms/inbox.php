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
    <p>Daftar Pesan yang masuk</p>
    <p>
      <input type="submit" name="button" id="button" value="CETAK" class="btn btn-primary" formaction="/smsGateway/menusms/lap_inbox.php">
    </p>
    
    <p>
      
    </p>
    <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>ID Pelanggan</th>
          <th>Pilihan</th>
          <th>Isi</th>
          <th>No Telpon</th>
          <th>Tanggal SMS</th>
        </tr>
      </thead>
      <tbody>
        <?php 
mysql_connect("localhost","root","");
mysql_select_db("gatewaypln");
$no=0;
$a=mysql_query("Select * from tbl_inbox order by tgl DESC");
while($d=mysql_fetch_array($a)){
$no++;
?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $d['idpel']; ?></td>
          <td><?php echo $d['pilihan']; ?></td>
          <td><?php echo $d['isi']; ?></td>
          <td><?php echo $d['notel']; ?></td>
          <td><?php echo $d['tgl']; ?></td>
      </tbody>
      <?php } ?>
    </table>
  </div>
</form>
<p>&nbsp;</p>
</body>
</html>