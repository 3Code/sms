<?php
include("manual_fungsi.php");

konek();

$notelp=$_POST['notelp'];
$idpel=$_POST['idpel'];
$pesan=$_POST['pesan'];
$tgl=date("Y-m-d");

if(isset($_POST['kirim']))
{
	insert ($idpel,$notelp,$pesan,$tgl);
	kirim($notelp,$pesan);
}


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
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <table width="478" border="0">
    <tr>
      <td width="161" height="38">ID PELANGGAN</td>
      <td width="18"><div align="center">:</div></td>
      <td width="285"><label for="idpel"></label>
      <input type="text" name="idpel" id="idpel"  class="input-sm"/></td>
    </tr>
    <tr>
      <td height="45">NO HP</td>
      <td><div align="center">:</div></td>
      <td><div align="left">
         <input type="text" name="notelp" id="notelp" class="input-sm"/>
      </div></td>
    </tr>
    <tr>
      <td height="106">ISI PESAN</td>
      <td><div align="center">:</div></td>
      <td><label for="pesan"></label>
      <textarea name="pesan" id="pesan" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td colspan="3"><div align="right">
                  
        <input type="submit" name="kirim" id="kirim" value="KIRIM" class="btn btn-primary"/>
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>