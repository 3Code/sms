<?php

function konek()
{
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "gatewaypln";
	$konek = mysql_connect($host,$user,$pass);

	if($konek) mysql_select_db($db);
}


function insert($idpel,$notelp,$pesan,$tgl)
{
	konek();
	$sql = "INSERT INTO tbl_outbox   
    SET id='',
	idpel='$idpel',
	notel='$notelp',
	pil='MANUAL', 
    isipesan='$pesan',
	 tgl='$tgl'";  
    $query = mysql_query($sql) ; 
	if($eksekusi) return true;
	return false;
}

function kirim ($phoneNoRecip, $msgText) {
	$host = "127.0.0.1";
	$port = "8800";
	$username = "root";
	$password = "";

	$fp = fsockopen($host, $port, $errno, $errstr);
	if (!$fp) {
		echo "errno: $errno \n";
		echo "errstr: $errstr\n";
		return $result;
	}

	fwrite($fp, "GET /?Phone=" . rawurlencode($phoneNoRecip) . "&Text=" . rawurlencode($msgText) . " HTTP/1.0\n");
	if ($username != "") {
		$auth = $username . ":" . $password;
		$auth = base64_encode($auth);
		fwrite($fp, "Authorization: Basic " . $auth . "\n");
	}
	fwrite($fp, "\n");

	$res = "";

	while(!feof($fp)) {
       $res .= fread($fp,1);
	}
	fclose($fp);
	return $res;
}
?>