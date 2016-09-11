<html>
<head>
<title>Import Data Rekening dari File .XLS</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
</html>
<?php
//koneksi ke database, username,password  dan namadatabase menyesuaikan 
mysql_connect("localhost", "root", "");
mysql_select_db("gatewaypln");
 
//memanggil file excel_reader
require "excel_reader.php";
 
//jika tombol import ditekan
if(isset($_POST['submit'])){
 
    $target = basename($_FILES['filepegawaiall']['name']) ;
    move_uploaded_file($_FILES['filepegawaiall']['tmp_name'], $target);
    
    $data = new Spreadsheet_Excel_Reader($_FILES['filepegawaiall']['name'],false);
    
//    menghitung jumlah baris file xls
    $baris = $data->rowcount($sheet_index=0);
    
//    jika kosongkan data dicentang jalankan kode berikut
    $drop = isset( $_POST["drop"] ) ? $_POST["drop"] : 0 ;
    if($drop == 1){
//             kosongkan tabel pegawai
             $truncate ="TRUNCATE TABLE tbl_rekening";
             mysql_query($truncate);
    };
    
//    import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
    for ($i=1; $i<=$baris; $i++)
    {
//       membaca data (kolom ke-1 sd terakhir)
      $IDPEL        = $data->val($i, 1);
      $LEMBAR 	= $data->val($i, 2);
      $BIAYA		= $data->val($i, 3);
	  
 	  
//      setelah data dibaca, masukkan ke tabel pegawai sql
      $query = "INSERT into tbl_rekening (idpel,lembar,biaya) values('$IDPEL','$LEMBAR','$BIAYA')";
      $hasil = mysql_query($query);
    }
    
    if(!$hasil){
//          jika import gagal
          die(mysql_error());
      }else{
//          jika impor berhasil
          echo "<div class=alert alert-success>Data Sukses Diimport</div>";
    }
    
//    hapus file xls yang udah dibaca
    unlink($_FILES['filepegawaiall']['name']);
}
 
?>
<br/>
<form name="myForm" id="myForm" onSubmit="return validateForm()" action="../smsGateway/importRekening.php" method="post" enctype="multipart/form-data" class="form-inline">
<div class="form-group">
  <table width="200" border="0">
    <tr>
      <td><input type="file" id="filepegawaiall" name="filepegawaiall" class="btn-primary" /></td>
      <td>&nbsp;</td>
      <td><button type="submit" name="submit" value="Import" class="btn btn-primary">Import</button></td>
    </tr>
    <tr>
      <td colspan="3" align="right"><label><input type="checkbox" name="drop" value="1" /> <u>Kosongkan tabel sql terlebih dahulu.</u> </label></td>
      </tr>
  </table>
  <br/>
    
</div>    
</form>
 
<script type="text/javascript">
//    validasi form (hanya file .xls yang diijinkan)
    function validateForm()
    {
        function hasExtension(inputID, exts) {
            var fileName = document.getElementById(inputID).value;
            return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
        }
 
        if(!hasExtension('filepegawaiall', ['.xls'])){
            $('#myModal').modal('show');
            return false;
        }
    }
</script>

<!--membuat file Modal-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Import File</h4>
      </div>
      <div class="modal-body">
        File Belum anda Pilih
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- MODAL SUKSES -->

