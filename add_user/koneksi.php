<?php
//File KOneksi Ke DataBase

$usr="root";
$pwd="";
$nmdb="gatewaypln";

//KOneksi
mysql_connect("localhost",$usr,$pwd) or die('Koneki Gagal');

//aktifkan 
mysql_select_db($nmdb) or die ('Database Tidak Ditemukan!');

?>