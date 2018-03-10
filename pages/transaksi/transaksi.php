<?php include('../admin/akses.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css"> 
  <link rel="stylesheet" href="../../lib/alfi.css" type="text/css"> 
</head>
<body>
  <?php include('../navbar.php'); ?>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header"> Barang Dipinjam </div>
            <div class="card-body">
            <div class="geret-s">
              <table id="c_table" class="table pi-draggable table-striped text-size-12" draggable="true">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Distributor</th>
                    <th>Tanggal</th>
                    <th>Kode</th>
                    <th>Nama Produk</th>
                    <th>Jumlah</th>
                    <th>Dilaporkan</th>
                    <th>Kembali</th>
                    <th>Belum Kembali</th>
                    <th>BV</th>
                    <th>Total BV</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <a hidden>
                <?php
                  $idt=$_POST['id']; 
                ?>
                </a>
                <?php
                  require_once'../../db/konek.php';
                  $badi = $db -> query('SELECT*FROM transaksi,barang_ms where barang_ms.kodeb=transaksi.kodet');
                  $no = 1;
                  foreach($badi as $key):
                  $c=$key['jumlaht']-$key['jum_kemt'];
                  $d=$key['laport']*$key['bvb'];
                  $id=$key['idt'];
                  $db -> query("UPDATE  
                                      transaksi
                                SET
                                      totalbvt='$d',
                                      totalt='$c'
                                WHERE
                                      idt='$id'
                              ");

                  if($key['totalt']>=0){
                    $tol=$key['totalt'];
                  }else{
                    $tol='Data Salah'; 
                  }
                ?>
                <tr>
                <td><?php echo "$no"; ?></td>              
                <?php  
                  if($idt==$id){
                    echo "<form action='../../includes/transaksi/ubah.php' method='POST'>
                          <td><input type='text' value='".$key['namat']."' name='nama'></td>
                          <td><input type='text' value='".$key['no_dist']."' name='nodis'></td>
                          <td><select name='tgl'>
                            <option value='".$key['tgl_t']."'>".$key['tgl_t']."
                            <option value='01'>01
                            <option value='02'>02
                            <option value='03'>03
                            <option value='04'>04
                            <option value='05'>05
                            <option value='06'>06
                            <option value='07'>07
                            <option value='08'>08
                            <option value='09'>09
                            <option value='10'>10
                            <option value='11'>11
                            <option value='12'>12
                            <option value='13'>13
                            <option value='14'>14
                            <option value='15'>15
                            <option value='16'>16
                            <option value='17'>17
                            <option value='18'>18
                            <option value='19'>19
                            <option value='20'>20
                            <option value='21'>21
                            <option value='22'>22
                            <option value='23'>23
                            <option value='24'>24
                            <option value='25'>25
                            <option value='26'>26
                            <option value='27'>27
                            <option value='28'>28
                            <option value='29'>29
                            <option value='30'>30
                            <option value='31'>31
                          </select>
                          <select name='bln'>
                            <option value='".$key['bln_t']."'>".$key['bln_t']."
                            <option value='Januari'>Januari
                            <option value='Februari'>Februari
                            <option value='Maret'>Maret
                            <option value='April'>April
                            <option value='Mei'>Mei
                            <option value='Juni'>Juni
                            <option value='Juli'>Juli
                            <option value='Agustus'>Agustus
                            <option value='September'>September
                            <option value='Oktober'>Oktober
                            <option value='November'>November
                            <option value='Desember'>Desember
                          </select>
                          <select name='thn'>
                            <option value='".$key['thn_t']."'>".$key['thn_t']."
                            <option value='2018'>2018
                            <option value='2019'>2019
                            <option value='2020'>2020
                            <option value='2021'>2021
                            <option value='2022'>2022
                            <option value='2023'>2023
                            <option value='2024'>2024
                            <option value='2025'>2025
                            <option value='2026'>2026
                            <option value='2027'>2027
                            <option value='2028'>2028
                            <option value='2029'>2029
                            <option value='2030'>2030
                          </select></td>
                          <td><input type='text' value='".$key['kodet']."' name='kod' required></td>
                          <td>".$key['namab']."</td>
                          <td><input type='number' value='".$key['jumlaht']."' name='jum' required></td>
                          <td><input type='number' value='".$key['laport']."' name='por' required></td>
                          <td><input type='number' value='".$key['jum_kemt']."' name='jum_kem' required></td>
                          <td>$tol</td> 
                          <td>".$key['bvb']."</td>
                          <td>".$key['totalbvt']."</td>
                          <td><input type='hidden' value='".$key['idt']."' name='id'>
                          <textarea name='ket'>".$key['kett']."</textarea>
                          <button type='submit'>Simpan</button></td>
                        </form>";
                  }else{
                    echo "<td>".$key['namat']."</td>
                      <td>".$key['no_dist']."</td>
                      <td>".$key['tgl_t']." ".$key['bln_t']." ".$key['thn_t']."</td>
                      <td>".$key['kodet']."</td>
                      <td>".$key['namab']."</td>
                      <td>".$key['jumlaht']."</td>
                      <td>".$key['laport']."</td>
                      <td>".$key['jum_kemt']."</td>
                      <td>$tol</td> 
                      <td>".$key['bvb']."</td>
                      <td>".$key['totalbvt']."</td>
                      <td>".$key['kett']."</td>";
                  }

                ?>
                    <td>
                      <form method="POST" action="#">
                      <input type="hidden" name="id" value="<?php echo $key['idt'];?>">
                      <button type="submit">Edit</button>
                      </form>
                      <a id="c_button-outline" href="tambah_produk.php?id=<?php echo $key['idt']; ?>" class="btn btn-outline-primary pi-draggable" draggable="true">Tambah Produk</a>
                      <a id="c_button-outline" href="../../includes/transaksi/hapus.php?id=<?php echo $key['idt']; ?>" class="btn btn-outline-primary pi-draggable" draggable="true">Hapus Data</a>
                    </td>
                  </tr>
                <?php
                  $no++;
                  endforeach;
                ?>
                  <a hidden><?php $tmbh=$key['idt']+20; ?></a>
                  <tr>
                    <td align="right" colspan="6">
                      <form method="POST" action="#" class="form-inline m-0">
                        <button class="btn btn-primary" type="Hasil">Hasil</button>
                    </td>
                    <td colspan="3">
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
                      </form>
                    </td>
                    <td colspan="2">Total BV</td>
                    <td><b>
                    <a hidden>
                    <?php
                      $bln=$_POST['bln'];
                      $thn=$_POST['thn'];
                    ?>
                    </a>
                    <?php
                      $bv=0;
                      foreach($badi as $key){
                        if($bln==$key['bln_t']&&$thn==$key['thn_t']){
                          $bv+=$key['totalbvt'];
                        }
                      }
                      echo "$bv";
                    ?>
                    </b></td>
                    <td colspan="2"></td>
                  </tr>
                  <tr>
                    <td colspan="6"></td>
                    <td colspan="3">
                    </td>
                    <td colspan="2">Penghasilan</td>
                    <td><b>
                    <?php
                      $hbv=$bv/1000;
                      $hsbv=$hbv*100000;
                      if($hsbv>0){
                        echo number_format($hsbv);
                      }else{
                        echo 0;
                      }
                    ?>
                    </b></td>
                    <td colspan="2"></td>
                  </tr>
                </tbody>
              <p>
                <a id="c_button" class="btn btn-primary pi-draggable" href="tambah.php?id=<?php echo "$tmbh"; ?>" draggable="true">Tambah Transaksi</a>
                <br>Perhatian! selalu <a href="transaksi.php"><i>refresh</i></a> data anda ketika melakukan perubahan.
              </p>
              </table>
              </div>
            </div>
          </div>
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
