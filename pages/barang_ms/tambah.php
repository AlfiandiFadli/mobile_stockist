<?php include('../admin/akses.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css"> </head>

<body>
 <?php include('../navbar.php'); ?>
  <div id="s_form2" class="py-5 pi-draggable text-white bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img class="d-block img-fluid my-3" src="https://maps.googleapis.com/maps/api/staticmap?key=AIzaSyDW8nO9JhT_pEjebobq9pgUF2cEp0EUb1I&amp;markers=Alexander+platz&amp;center=Berlin&amp;zoom=13&amp;size=640x500&amp;sensor=false"> </div>
        <div class="col-md-6 bg-secondary">
          <br>
          <h1>Tambah Produk</h1>
          <p>Pastikan data yang ditambah adalah benar</p>
          <form action="../../includes/barang_ms/tambah.php" method="POST">
            <div class="form-group"> <label for="InputName">Kode Baris</label>
              <input type="number" class="form-control" name="kod" placeholder="Berupa angka"> </div>
            <div class="form-group"> <label for="InputName">Kode</label>
              <input type="text" class="form-control" name="kod_pro" placeholder="Berupa angka"> </div>
            <div class="form-group"> <label for="InputName">Nama</label>
              <input type="text" class="form-control" name="nam" placeholder="Nama produk" required> </div>
            <div class="form-group"> <label for="InputName">BV Produk</label>
              <input type="number" class="form-control" name="bv" placeholder="Jumlah bv" required> </div>
            <div class="form-group"> <label for="InputName">Harga</label>
              <input type="number" class="form-control" name="har" placeholder="Harga satuan" required> </div>
            <div class="form-group"> <label for="InputName">Jumlah Awal</label>
            <div class="row">
                <div class="col-md-3">
                  <input type="number" class="form-control" name="jum" id="InputName" placeholder="Isi berupa angka" required>
                  <br>
                  <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
                <div class="col-md-6"></div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php include('../footers.php'); ?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>
