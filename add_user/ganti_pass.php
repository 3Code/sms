<?php
include "koneksi.php";

$pass=md5($_POST['password']);


  // kode untuk update data
if (isset ($_POST['edit']))
{
	mysql_query ("UPDATE tlogin SET 
password='$pass'
WHERE username='$_POST[username]'") or die ('maaf salah kode update');
	echo "DATA SUKSES DI EDIT"; 
	?>
     <script language="javascript">
	alert ('data sukses diedit');
	window.location='';
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
  <table width="540" height="209" border="0">
    <tr>
      <td width="156" height="33">USER NAME</td>
      <td width="20">:</td>
      <td width="342"><input type="text" name="username" id="username" class="input-sm"  onchange="this.form.submit();" value="<?php echo $_POST['username']; ?>" /></td>
    </tr>
    <tr>
      <td height="46">NAMA</td>
      <td>:</td>
      <td><input type="text" name="lama2" id="lama2" class="input-sm"  disabled="disabled" value="<?php 
	  if ($_POST['username'])
	  {
		  $a=mysql_query("select * from tlogin where username='$_POST[username]'");
		  $b=mysql_fetch_array($a);
		  if(mysql_num_rows($a)>0)
		  {
			   echo $b['nama'];
		  }
		  else
		  {
			  echo "User Belum Terdaftar";
		  }
		  }
	 
	  else
	  {
		   echo "masukkan username";
	  }
	  

	  
	  ?>"/></td>
    </tr>
    <tr>
      <td height="46">PASSWORD LAMA</td>
      <td>:</td>
      <td><input type="text" name="lama" id="lama" class="input-sm"  disabled="disabled" 
      value="<?php 
	  if ($_POST['username'])
	  {
		  $a=mysql_query("select * from tlogin where username='$_POST[username]'");
		  $b=mysql_fetch_array($a);
		  if(mysql_num_rows($a)>0)
		  {
			   echo $b['password'];
		  }
		  else
		  {
			  echo "User Belum Terdaftar";
		  }
		  
	  }
	  else
	  {
		   echo "masukkan username";
	  }
	 
	  	  ?>"/></td>
    </tr>
    <tr>
      <td height="46">PASSWORD BARU</td>
      <td>:</td>
      <td><label for="password"></label>
      <input type="text" name="password" id="password" class="input-sm"/></td>
    </tr>
    <tr>
      <td height="26" colspan="3"><input type="submit" name="edit" id="edit" value="GANTI" class="btn btn-primary"/></td>
    </tr>
  </table>
</form>
</body>
</html>