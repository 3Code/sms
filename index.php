<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="col-md-4 col-md-offset-4 form-login">
    
    <?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
        </div>
    <?php endif;?>

        <div class="outter-form-login">
        <div class="logo-login">
            <em class="glyphicon glyphicon-user"></em>
        </div>
            <form action="log.php?op=in" class="inner-login" method="post">
              <div align="center">
                <p>&nbsp;</p>
                 <table width="420" border="0">
                  <tr>
                    <td width="94" rowspan="3"><div align="right"><img src="sms.png" width="60" height="82" /></div></td>
                    <td width="316"><strong>SMS App</strong></td>
                  </tr>
                  <tr>
                    <td><strong></strong></td>
                  </tr>
                  <tr>
                    <td><strong></strong></td>
                  </tr>
                </table>
                <p>&nbsp;</p>
              </div>
              <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="username">
              </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="pass" placeholder="pass">
                </div>
                
                <input type="submit" class="btn btn-block btn-custom-green" value="LOGIN" />
                
                <div class="text-center forget">
                    <p></p>
                </div>
          </form>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>