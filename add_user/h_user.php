<?php
include('koneksi.php');
$username=$_GET['username'];

		mysql_query("DELETE from tlogin where username='$username' ");
		echo "<script> window.location.href = '/smsGateway/menudaftaruser.php'</script>";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>