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
            <div class="card-header bg-secondary text-white"> Barang Dipinjam </div>
            <div class="card-body">
            <div class="geret-s">
              <table id="c_table" class="table pi-draggable table-striped" draggable="true">
                <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>No Distributor</th>
                    <th>Tanggal</th>
                    <th>Kode</th>
                    <th>Nama Produk</th>
                    <th>Dipinjam</th>
                    <th>Kembali</th>
                    <th>Pindah ke Transaksi</th>
                    <th>Total yang Dipinjam</th>
                    <th>Keterangan</th>
                    <td>Aksi</td>
                  </tr>
                </thead>
                <tbody>
                <a hidden>
                <?php
                  $id=$_POST['id'];
                ?>
                </a>
                <?php
                  require_once'../../db/konek.php';
                                
                  $badi = $db -> query('SELECT*FROM dipinjam,barang_ms where barang_ms.kodeb=dipinjam.kode');
                  $no=0;
                  $tmbh=0;
                  foreach($badi as $key):
                  $a=$key['jum_kemd']+$key['pindahd'];
                  $b=$key['jumlahd']-$a;
                  $i=$key['idd'];
                  $k=$key['kode'];
                ?>
                  <tr>
                    <td><?php echo $no+1;?></td>
                <?php
                  if($id==$i){
                    echo "<form action='../../includes/dipinjam/ubah.php' method='POST'>
                          <td><input type='text' value='".$key['namad']."' name='nama'></td>
                          <td><input type='text' value='".$key['no_disd']."' name='nodis'></td>
                          <td><select name='tgl'>
                            <option value='".$key['tgl_d']."'>".$key['tgl_d']."
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
                            <option value='".$key['bln_d']."'>".$key['bln_d']."
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
                            <option value='".$key['thn_d']."'>".$key['thn_d']."
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
                          <td><input type='text' value='".$key['kode']."' name='kod' required></td>
                          <td>".$key['namab']."</td>
                          <td><input type='number' value='".$key['jumlahd']."' name='jum' required></td>
                          <td><input type='number' value='".$key['jum_kemd']."' name='jum_kem' required></td>
                          <td><input type='number' value='".$key['pindahd']."' name='jum_pin' required>
                          <input type='hidden' value='".$key['idd']."' name='id'>
                          <button type='submit'>Simpan</button></td>
                        </form>";
                  }else{
                    echo "<td>".$key['namad']."</td>
                          <td>".$key['no_disd']."</td>
                          <td>".$key['tgl_d']." ".$key['bln_d']." ".$key['thn_d']."</td>
                          <td>".$key['kode']."</td>
                          <td>".$key['namab']."</td>
                          <td>".$key['jumlahd']."</td>
                          <td>".$key['jum_kemd']."</td>
                          <td>".$key['pindahd']."</td>";
                  }
                ?>
                    <td>
                    <?php
                    $db -> query("UPDATE  
                                        dipinjam
                                  SET
                                        total='$b'
                                  WHERE
                                        idd='$i'
                                 ");

                    if($key['total']>=0){
                      echo $key['total'];
                    }else{
                      echo 'Data Salah!';
                    }
                    
                    ?>
                    </td>
                    <td><?php echo $key['ketd']; ?></td>
                    <td>
                      <form method="POST" action="#">
                      <input name="id" type="hidden" value="<?php echo $key['idd']; ?>">
                      <button type="submit">Edit</button>
                      </form>
                      <a id="c_button-outline" href="tambah_produk.php?id=<?php echo $key['idd']; ?>" class="btn btn-outline-primary pi-draggable" draggable="true">Tambah Produk</a>
                      <a id="c_button-outline" href="../../includes/dipinjam/hapus.php?id=<?php echo $key['idd']; ?>" class="btn btn-outline-primary pi-draggable" draggable="true">Hapus Data</a>
                    </td>
                  </tr>
                <?php
                  $no++;
                  if($tmbh<$key['idd']){
                    $tmbh=$key['idd'];
                  }
                  endforeach;
                ?>
                <a hidden><?php $hak = $tmbh+20; ?></a>
               </tbody>
              <p>
                <a id="c_button" class="btn btn-primary pi-draggable" href="tambah_peminjam.php?id=<?php echo "$hak" ?>" draggable="true">Tambah Peminjam</a>
                <br>Perhatian! selalu <a href="barang_dipinjam.php"><i>refresh</i></a> data anda ketika melakukan perubahan.
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
