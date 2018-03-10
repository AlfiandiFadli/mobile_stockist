<?php
    require_once'../../db/konek.php';
    $id = $_POST['id'];
    $na = htmlentities(trim($_POST['nama']));
    $no = htmlentities(trim($_POST['nodis']));
    $tgl = htmlentities(trim($_POST['tgl']));
    $bln = htmlentities(trim($_POST['bln']));
    $thn = htmlentities(trim($_POST['thn']));
    $ko = htmlentities(trim($_POST['kod']));
    $jum = htmlentities(trim($_POST['jum']));
    $jum_kem = htmlentities(trim($_POST['jum_kem']));
    $jum_pin = htmlentities(trim($_POST['jum_pin']));
    $ke = htmlentities(trim($_POST['ket']));
    
    $db -> query("UPDATE 
                        dipinjam
                  SET
                        namad='$na',
                        no_disd='$no',
                        tgl_d='$tgl',
                        bln_d='$bln',
                        thn_d='$thn',
                        kode='$ko',
                        jumlahd='$jum',
                        jum_kemd='$jum_kem',
                        pindahd='$jum_pin',
                        ketd='$ke'
                  WHERE
                        idd='$id'
                ");
      if ($db -> affected_rows) {
            header('location:../../pages/dipinjam/barang_dipinjam.php');
      }else{
            echo 'maaf tidak dapat diproses';
      }
?>
