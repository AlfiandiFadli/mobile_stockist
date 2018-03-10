<?php include('../admin/akses.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css"> </head>
  <link rel="stylesheet" href="../../lib/alfi.css" type="text/css"> 
</head>

<body>
  <?php include('../navbar.php'); ?>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-secondary text-white"><b> Barang Mobile Stockist Selong </b></div>
            <div class="card-body">
              <p>
                <a id="c_button" class="btn pi-draggable btn-success" href="tambah.php" draggable="true">Tambah Nama Produk</a>
              </p>
              <p>
                <form method="POST" action="#">
                  <input type="hidden" value="1" name="n">
                  <button type="submint">Netralkan</button>
                </form>
              </p>
              <div class="geret-s">
               <table id="c_table" class="table pi-draggable table-striped" draggable="true">
                <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kode Baris</th>
                    <th>Kode</th>
                    <th>Harga</th>
                    <th>Bv</th>
                    <th>Jumlah</th>
                    <th>Tersedia</th>
                    <th>Total Awal</th>
                    <th>Total Akhir</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <a hidden>
                <?php  
                  $n=$_POST['n'];
                  $kode=$_POST['edit'];
                ?>
                </a
                <?php
                  require_once'../../db/konek.php';
                  $bha = $db -> query('SELECT*FROM barang_ms');
                  if($n==1){
                  foreach($bha as $cie){
                  $cis=$cie['kodeb'];
                  $cuy=0;
                  $db->query("UPDATE
                                barang_ms
                              SET
                                dipin='$cuy',
                                tran='$cuy'
                              WHERE
                                kodeb='$cis'
                              ");
                  }}

                  $aa=$db -> query('SELECT dipinjam.kode,SUM(dipinjam.total) as dipind 
                                    FROM dipinjam,barang_ms
                                    WHERE barang_ms.kodeb=dipinjam.kode
                                    GROUP BY kodeb'
                                    );
                  foreach($aa as $key){                
                  $di = $key['dipind'];
                  $dkod= $key['kode'];
                  $db -> query("UPDATE
                                  barang_ms
                                SET
                                  dipin='$di'
                                WHERE
                                  kodeb='$dkod'
                                ");
                  };
                  $bb=$db -> query('SELECT transaksi.kodet,SUM(transaksi.totalt) as trant 
                                    FROM transaksi,barang_ms
                                    WHERE barang_ms.kodeb=transaksi.kodet
                                    GROUP BY kodeb'
                  );
                  foreach($bb as $keys){
                  $tr = $keys['trant'];
                  $tkod= $keys['kodet'];
                  $db -> query("UPDATE
                                barang_ms
                              SET
                                tran='$tr'
                              WHERE
                                kodeb='$tkod'
                              ");
                  };
                  $badi = $db -> query('SELECT*FROM barang_ms');
                  $no_urut = 0;
                  foreach($badi as $data):
                  $no_urut++;
                  $dt=$data['dipin']+$data['tran'];
                  $hdt=$data['jum_awb']-$dt;
                  $a=$data['jum_awb']*$data['hargab'];
                  $b=$hdt*$data['hargab'];
                  $ak=$hdt;
                  $k=$data['kodeb'];
                  $db->query("UPDATE barang_ms SET jum_akb='$ak' WHERE kodeb='$k'");
                  
                ?>
                    <tr>
                    <td><?php echo "$no_urut"; ?></td>
                <?php 
                        $na=$data['namab'];
                        $ko=$data['kodeb'];
                        $ko_pro=$data['kode_pro'];
                        $hr=$data['hargab'];
                        $bv=$data['bvb'];
                        $jaw=$data['jum_awb'];
                        if($data['kodeb']==$kode){
                          echo "<form method='POST' action='../../includes/barang_ms/edit.php'>
                                <td><input name='nam' type='text' value='$na'></td>
                                <td><input name='kod' type='number' value='$ko'></td>
                                <td><input name='kod_pro' type='text' value='$ko_pro'></td>
                                <td><input name='har' type='number' value='$hr'></td>
                                <td><input name='bv' type='number' value='$bv'></td>
                                <td><input name='jum' type='number' value='$jaw'>
                                <td><input name='id' type='hidden' value='$ko'>
                                <button type='submit'>Simpan</button></td>
                                </form>";
                        }else{
                          echo "<td>$na</td> 
                                <td>$ko</td>
                                <td>$ko_pro</td>
                                <td>Rp. ".number_format($hr)."</td>
                                <td>$bv</td>
                                <td>$jaw</td>";
                        }
                    ?>
                    <td><?php echo $data['jum_akb']; ?></td>
                    <td><?php echo "Rp. ".number_format($a); ?></td>
                    <td><?php echo "Rp. ".number_format($b); ?></td>
                    <td><form method="POST" action="#">
                        <input type="hidden" name="edit" value="<?php echo $data['kodeb']; ?>">
                        <button type="submit">Edit</button>
                        </form>
                        <a id="c_button-outline" href="../../includes/barang_ms/hapus.php?id=<?php echo $data['kodeb']; ?>" class="btn btn-outline-primary pi-draggable btn-sm" draggable="true">Hapus baris</a>
                    </td>
                    </tr>
                  <a hidden> 
                  <?php
                    $y+=$a;
                    $z+=$b;
                  ?>
                  </a
                <?php  
                  endforeach;
                ?> 
                <tr>
                  <td align="center" colspan="7"><b>Total</b></td>
                  <td><b><?php echo "Rp. ".number_format($y);?></b></td>
                  <td><b><?php echo "Rp. ".number_format($z);?></b></td>
                  <td></td>
                </tr>
               </tbody>
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
