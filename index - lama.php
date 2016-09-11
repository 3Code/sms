<?php include ('header.php');?>
<form action="log.php?op=in" method="post" a>
  <p align="center">	Silahkan Login Terlebih Dahulu !!!  </p>
  <p align="center"><img src="login2.png" width="123" height="112"></p>
  <div align="center">
    <table width="301" border="0">
      <tr>
        <td width="96">Kode Login</td>
        <td width="195"><label for="username"></label>
        <input type="text" name="username" id="username" /></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><label for="pass"></label>
        <input type="password" name="pass" id="pass" /></td>
      </tr>
      <tr>
        <td height="20">&nbsp;</td>
        <td><input type="submit" name="login" id="login" value="LOGIN"></td>
      </tr>
    </table>
  </div>
  <p>&nbsp;</p>
  <p align="center"><?php include('footer.php')?></p>
</form>
</body>
</html>