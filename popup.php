<?php 
mysql_connect("localhost","root","");
mysql_select_db("gatewaypln");
$query=mysql_query("select * from tbl_pelanggan");
$hitung=mysql_query("select count(idpel) as jmldata from tbl_pelanggan");
$jmldata=mysql_fetch_array($hitung);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
	  
      
<script language="javascript">
    // http://cariprogram.blogspot.com
	// nuramijaya@gmail.com
	
	var kembali1 = '';
	var kembali2 = '';
	var i;
	function cekpegawai()
	{
		kembali1='';
		kembali2='';
		for (i=1;i<=<?php echo $jmldata['jmldata']; ?> ;i++) //jika ingin dinamis, jumlahnya diganti <?php // echo $jmldata; ?> 
		{
			if (document.getElementById('cek'+i).checked==true)
			{
				if (kembali1=='')
				{
					kembali1=document.getElementById('cek'+i).value;
					kembali2=document.getElementById('hidden'+i).value;
				}
				else
				{
					kembali1=kembali1+','+document.getElementById('cek'+i).value;
					kembali2=kembali2+','+document.getElementById('hidden'+i).value;
				}
			}
		}
	}
</script>
</head>

<body>
Klik Nama Pegawai Untuk Memilih 1 Pegawai, <br />
Untuk Memilih Banyak Pegawai pilih Checkbox Kemudian Klik OK.<br />
 <?php 
	  $no=0;
	  while($row= mysql_fetch_array($query)) {  $no++;?>
<input type="checkbox" name="cek<?php echo $no; ?>" id="cek<?php echo $no; ?>" value= "<?php echo $row['idpel'];?>" />
<a href="#" onclick="window.opener.document.getElementById('input1').value = '<?php echo $row['idpel'];?>'; window.opener.document.getElementById('input2').value = document.getElementById('hidden1').value; window.close(); /*window.opener.document.location='refresh.html'*/;"><?php echo $row['idpel'];?></a>
<input name="hidden<?php echo $no; ?>" type="hidden" id="hidden<?php echo $no; ?>" value="<?php echo $row['notelp']; ?>" />
<br /><?php } ?>
<input type="button" name="button3" id="button3" value="Ok" onclick="cekpegawai(); window.opener.document.getElementById('input1').value = kembali1; window.opener.document.getElementById('input2').value = kembali2; window.opener.document.getElementById('button2').style.visibility='visible'; window.close(); " />
</body>
</html>
