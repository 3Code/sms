<?php 
include ('koneksi.php');

$pass=md5("12345");

if (isset($_POST['simpan']))
	{
		$sql=mysql_query("Select * from tlogin WHERE username='$_POST[USERNAME]'");
		
		if(mysql_num_rows($sql)>0){
		echo "<script language='javascript'> window.alert('Data Sudah Ada'); </script>";}
		else { 
		$simpandb= "INSERT INTO tlogin(username,nama,password,akses) values('$_POST[USERNAME]','$_POST[NAMA]','$pass','$_POST[AKSES]')";
		mysql_query($simpandb) or die (mysql_error().$simpandb);
		echo 
		"<script language='javascript'> alert('Data Sukses Disimpan'); 
window.location=''; 
		</script>";
		}
	}
?>


<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>




<form name="form1" method="post" action="">
  <p align="center">&nbsp;</p>
  
    <div class="table-responsive">
  <table width="59%" height="148" class="table table-bordered table-striped table-hover">
      <tr>
        <td width="10%">USERNAME</td>
        <td width="1%">:</td>
        <td width="78%"><label for="USERNAME"></label>
          <input type="text" name="USERNAME" id="USERNAME" class="input-sm" /></td>
      </tr>
      <tr>
        <td>NAMA</td>
        <td>:</td>
        <td><input type="text" name="NAMA" id="NAMA" class="input-sm"/></td>
      </tr>
      <tr>
        <td>HAK AKSES</td>
        <td>:</td>
        <td><label for="AKSES" ></label>
          <label for="AKSES" ></label>
          <select name="AKSES" id="AKSES" class="input-sm">
            <option value="user">USER</option>
            <option value="admin">ADMIN</option>
          </select>
          <label for="radio"></label>
          <label for="Mahasiswa"></label></td>
      </tr>
      <tr>
        <td colspan="3"><div align="LEFT">
          <input type="submit" name="simpan" id="simpan" value="SIMPAN" class="btn btn-primary" />
        </div></td>
      </tr>
    </table>
    <p>&nbsp; </p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
 
</form>
