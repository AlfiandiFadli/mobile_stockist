<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css"> </head>

<body>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-secondary text-white">
              <h3 class="m-0">Silahkan Masuk</h3>
            </div>
            <div class="card-body">
            <div hidden>
            <?php 
            $res=$_GET['res'];
            ?>
            </div>
            <?php
            echo "$res";

            echo md5('123aaa');
            ?>
              <div class="card-body">
                <form action="includes/keluar_masuk/masuk.php" method="POST">
                  <div class="form-group"> <label>Nama Admin</label>
                    <input name="user" type="text" class="form-control" placeholder="Masukan nama" required> </div>
                  <div class="form-group"> <label>Kata Sandi</label>
                    <input name="pass" type="password" class="form-control" placeholder="Masukan kata sandi" required> </div>
                  <input name="masuk" value="Masuk" type="submit" class="btn btn-secondary"/>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>
