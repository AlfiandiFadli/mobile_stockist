<?php
    include('../admin/akses.php');
    require_once'../../db/konek.php';
    $id = $_GET['id'];
    $id++;
?><!DOCTYPE html>
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
        <div class="col-md-6 bg-success">
          <br>
          <h1>Tambah Produk</h1>
          <p>Pastikan data yang ditambah adalah benar</p>
          <form action="../../includes/transaksi/tambah_pro.php" method="POST">
          <div class="form-group"> <label for="InputName">Tgl/Bln/Thn</label>
          <select name="tgl">
            <option value="01">01
            <option value="02">02
            <option value="03">03
            <option value="04">04
            <option value="05">05
            <option value="06">06
            <option value="07">07
            <option value="08">08
            <option value="09">09
            <option value="10">10
            <option value="11">11
            <option value="12">12
            <option value="13">13
            <option value="14">14
            <option value="15">15
            <option value="16">16
            <option value="17">17
            <option value="18">18
            <option value="19">19
            <option value="20">20
            <option value="21">21
            <option value="22">22
            <option value="23">23
            <option value="24">24
            <option value="25">25
            <option value="26">26
            <option value="27">27
            <option value="28">28
            <option value="29">29
            <option value="30">30
            <option value="31">31
          </select>
          <select name="bln">
            <option value="Januari">Januari
            <option value="Februari">Februari
            <option value="Maret">Maret
            <option value="April">April
            <option value="Mei">Mei
            <option value="Juni">Juni
            <option value="Juli">Juli
            <option value="Agustus">Agustus
            <option value="September">September
            <option value="Oktober">Oktober
            <option value="November">November
            <option value="Desember">Desember
          </select>
          <select name="thn">
            <option value="2018">2018
            <option value="2019">2019
            <option value="2020">2020
            <option value="2021">2021
            <option value="2022">2022
            <option value="2023">2023
            <option value="2024">2024
            <option value="2025">2025
            <option value="2026">2026
            <option value="2027">2027
            <option value="2028">2028
            <option value="2029">2029
            <option value="2030">2030
          </select>
         <div class="form-group"> <label for="InputName">Kode Produk</label>
              <input type="text" class="form-control" name="kod" id="InputName" placeholder="Kode produk"> </div>
            <div class="form-group"> <label for="InputName">Jumlah</label>
              <input type="number" class="form-control" name="jum" id="InputName" placeholder="Jumlah produk yang dipinjam"> </div>
            <div class="form-group"> <label for="Textarea">Keterangan</label> <textarea class="form-control" name="ket" id="Textarea" rows="3" placeholder="Keterangan ini berisi lunas atau tidaknya suatu produk"></textarea> </div>
              <input type="hidden" class="form-control" name="id" id="InputName" value="<?php echo "$id"; ?>" placeholder="Jumlah produk yang dipinjam"> </div>
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
