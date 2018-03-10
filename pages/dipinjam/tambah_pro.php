<?php
    include('../admin/akses.php');
    $id = $_GET['id'];
    $tgl = $_GET['tgl'];
    $bln = $_GET['bln'];
    $thn = $_GET['thn'];
  ?>
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
          <h1>Tambah Data</h1>
          <p>Isi data dengan benar</p>
          <form action="../../includes/dipinjam/tambah_pro.php" method="POST">
            <select hidden name="tgl">
              <option value="<?php echo "$tgl"?>">
            </select>
            <select hidden name="bln">
              <option value="<?php echo "$bln"?>">
            </select>
            <select hidden name="thn">
              <option value="<?php echo "$thn"?>">
            </select>
            <div class="form-group"> <label for="InputName">Kode Produk</label>
              <input type="text" class="form-control" name="kod" id="InputName" placeholder="Kode produk"> </div>
            <div class="form-group"> <label for="InputName">Jumlah</label>
              <input type="number" class="form-control" name="jum" id="InputName" placeholder="Jumlah produk yang dipinjam"> </div>
              <input type="hidden" class="form-control" name="id" value="<?php echo "$id"; ?>" id="InputName" placeholder="Jumlah produk yang dipinjam"> </div>
            <div class="form-group"> <label for="Textarea">Keterangan</label> <textarea class="form-control" name="ket" id="Textarea" rows="3" placeholder="Keterangan ini berisi lunas atau tidaknya suatu produk"></textarea> </div>
            <button type="submit" class="btn btn-secondary">Tambah</button>
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
