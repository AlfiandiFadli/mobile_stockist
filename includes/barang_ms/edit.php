<?php
    require_once'../../db/konek.php';
    $id = $_POST['id'];
    $nam = htmlentities(trim($_POST['nam']));
    $har = htmlentities(trim($_POST['har']));
    $kod = htmlentities(trim($_POST['kod']));
    $kod_pro = htmlentities(trim($_POST['kod_pro']));
    $jum = htmlentities(trim($_POST['jum']));
    $bv = htmlentities(trim($_POST['bv']));
    
    $db -> query("UPDATE 
                        barang_ms
                  SET
                        namab='$nam',
                        hargab='$har',
                        kodeb='$kod',
                        kode_pro='$kod_pro',
                        bvb='$bv',
                        jum_awb='$jum'
                  WHERE
                        kodeb='$id'
                ");
      if ($db -> affected_rows) {
            header('location:../../pages/barang_ms/barang_ms.php');
      }else{
            echo 'Terjadi kesalahan, data tidak dapat diubah';
      }
?>
