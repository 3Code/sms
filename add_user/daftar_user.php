<!DOCTYPE html>
<html>
<head>
<title>Tabel Rekening PT.PLN(Persero) Rayon Indarung</title>
<link rel="stylesheet" type="text/css" href="../menuexcel/css/bootstrap.css">
<script type="text/javascript" src="../menuexcel/js/jquery.js"></script>
<script type="text/javascript" src="../menuexcel/js/bootstrap.js"></script>
</head>
<body>
<p>Daftar User / Admin SMS Gateway di PT.PLN(Persero) Rayon Indarung </p>
<form name="form2" method="post" action="">
  <p>
    <input type="submit" name="button" id="button" value="CETAK" class="btn btn-primary"
    formaction="add_user/lap_daftaruser.php?akses=<?php echo $_POST['akses'];?>" >
      
   
    <label for="akses"></label>
  </p>
  <p>PILIH HAK AKSES   :
    <select name="akses" id="akses" onchange="this.form.submit();">
      <?php 
	  		if ($_POST['akses']=="O"){
	  		$h1="selected";}
			else if ($_POST['akses']=="ADMIN"){
			$h2="selected"; }
			else if ($_POST['akses']=="USER"){
			$h3="selected"; }
			else if ($_POST['akses']=="SEMUA"){
			$h4="selected"; }
		
			?>
  <option value="0" <?php echo $h1 ; ?>>---</option>
  <option value="ADMIN" <?php echo $h2 ; ?>>ADMIN</option>
  <option value="USER" <?php echo $h3 ; ?>>USER</option>
  <option value="SEMUA" <?php echo $h4; ?>>SEMUA</option>
  </select>           
    
       
   </p>
    <p>
      
    </p>

<table width="122%" class="table table-bordered table-striped table-hover">
     
<thead>
<tr>
<td width="4%">No</th>
<td width="14%">USER NAME</th>
<td width="14%">NAMA</th>

<td width="17%">HAK AKSES
  </th>
<td width="8%">HAPUS</th>
<td width="7%">EDIT</th>	
<td width="36%"> </td>	
</tr>
</thead>
<tbody>
<?php 
mysql_connect("localhost","root","");
mysql_select_db("gatewaypln");
$akses=$_POST['akses'];
$total=0;
$no=0;
if ($akses=="SEMUA")
{
$a=mysql_query("Select * from tlogin order by akses asc");	
}
else
{
$a=mysql_query("Select * from tlogin where akses='$akses' order by username desc");
}
while($d=mysql_fetch_array($a)){
$no++;
?>


<tr>
<td><?php echo $no; ?></td>
<td><?php echo $d['username']; ?></td>
<td><?php echo $d['nama']; ?></td>

<td><?php echo $d['akses']; ?></td>
<td> <?php echo "<a href='add_user/h_user.php?username=$d[username]'
onclick=\"return confirm ('Yakin Akan Dihapus ??')\">Hapus</a>"; ?></td>
        
<td><?php echo "<a href='add_user/menuedit_user.php?username=$d[username]'>Edit</a> "; ?></td>
 <?php } ?> 

   
</tbody>

</table>
</div>
</form>
</body>
</html>