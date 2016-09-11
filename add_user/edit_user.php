<?php
mysql_connect("localhost","root","");
mysql_select_db("gatewaypln");

$username=$_GET['username'];
$cari=mysql_query("SELECT * from tlogin WHERE  username='$username'");
$d=mysql_fetch_array ($cari);
$password=$d['password'];
$sesi=$d['sesi'];

$pass=md5($_POST['new']);
$pass1=md5("12345");

 // kode untuk reset password
if (isset ($_POST['reset']))
{
	mysql_query ("UPDATE tlogin SET 
password='$pass1'
WHERE username='$username'") or die ('maaf salah kode update');
	echo "DATA SUKSES DI EDIT"; 
	?>
     <script language="javascript">
	alert ('data sukses diedit');
	window.location='../menudaftaruser.php';
	</script>
    
    <?php
}
?>

<?php 


  
  
  // kode untuk update data
if (isset ($_POST['edit']))
{
	mysql_query ("UPDATE tlogin SET 
nama='$_POST[nama]',password='$pass',akses='$_POST[akses]'
WHERE username='$username'") or die ('maaf salah kode update');
	echo "DATA SUKSES DI EDIT"; 
	?>
     <script language="javascript">
	alert ('data sukses diedit');
	window.location='../menudaftaruser.php';
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
<p>&nbsp;</p>
  <table width="540" height="189" border="0">
    <tr>
      <td width="156" height="33">USER NAME</td>
      <td width="20">:</td>
      <td width="342"><input type="text" name="username" id="username" class="input-sm"  value ="<?php echo $d['username'];?>" disabled="disabled"/></td>
    </tr>
    <tr>
      <td height="46">NAMA</td>
      <td>&nbsp;</td>
      <td><input type="text" name="nama" id="nama" class="input-sm"  value ="<?php echo $d['nama'];?>"/></td>
    </tr>
    <tr>
      <td height="46">HAK AKSES</td>
      <td>:</td>
      <td><input type="text" name="akses" id="akses" class="input-sm"  value="<?php echo $d['akses'];?>"/></td>
    </tr>
    <tr>
      <td height="26">PASSWORD BARU</td>
      <td height="26">:</td>
      <td height="26"><label for="new"></label>
      <input type="text" name="new" id="new" class="input-sm"/></td>
    </tr>
    <tr>
      <td height="26" colspan="3"><input type="submit" name="back" id="back" value="BACK" class="btn btn-primary" formaction="../menudaftaruser.php"/>
      <input type="submit" name="reset" id="reset" value="RESET PASSWORD" class="btn btn-primary"/>
      <input type="submit" name="edit" id="edit" value="SIMPAN EDIT" class="btn btn-primary"/></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
 
</body>
</html>