<?php
  include('../admin/akses.php');
  $id=$_GET['id'];
  $tgl=$_GET['tgl'];
  $bln=$_GET['bln'];
  $thn=$_GET['thn'];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css"> </head>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3SupportedContent">
        <a class="ml-3 btn navbar-btn btn-light" href="barang_ms/barang_ms.php">Barang MS</a>
        <a class="ml-3 btn navbar-btn btn-light" href="dipinjam/barang_dipinjam.php">Dipinjam</a>
      </div>
    </div>
  </nav>
  <div id="s_form2" class="py-5 pi-draggable text-white bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img class="d-block img-fluid my-3" src="https://maps.googleapis.com/maps/api/staticmap?key=AIzaSyDW8nO9JhT_pEjebobq9pgUF2cEp0EUb1I&amp;markers=Alexander+platz&amp;center=Berlin&amp;zoom=13&amp;size=640x500&amp;sensor=false"> </div>
        <div class="col-md-6 bg-light border text-center">
            <br>
            <a class="text-dark">
              <font color="red">Data berhasil disimpan</font> klik pilihan dibawah ini</a>
            <br>
            <br>
            <a id="c_button" class="btn pi-draggable btn-info" href="dipinjam/barang_dipinjam.php">Selesai </a>
            <a id="c_button" class="btn pi-draggable btn-warning" href="dipinjam/tambah_pro.php?id=<?php echo "$id";?>&tgl=<?php echo "$tgl";?>&bln=<?php echo "$bln";?>&thn=<?php echo "$thn";?>">Tambah Produk </a>
            <br>
            <br> </div>
      </div>
    </div>
  </div>
  <?php include('footers.php'); ?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>
