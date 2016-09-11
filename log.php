<?php
session_start();
include('koneksi.php');


$userid = $_POST['username'];
$psw = md5($_POST['pass']);
$op = $_GET['op'];

if($op=="in"){
$cek = mysql_query("SELECT * FROM tlogin WHERE username='$userid' AND password='$psw'");
if(mysql_num_rows($cek)==1){//jika berhasil akan bernilai 1
$c = mysql_fetch_array($cek);
$_SESSION['userid'] = $c['username'];
$_SESSION['level'] = $c['sesi'];
if($c['akses']=="admin"){
header("location:index2.php");

}else if($c['akses']=="user"){
	header("location:userindex.php");
	
//header("location:inputmhs.php?$userid");
}
}else{
	?> <script language="javascript"> alert('PASSWORD ANDA SALAH'); 
	window.location="index.php"; </script> <?php }

}else if($op=="out"){
unset($_SESSION['userid']);
unset($_SESSION['sesi']);
header("location:index.php");
}

?>