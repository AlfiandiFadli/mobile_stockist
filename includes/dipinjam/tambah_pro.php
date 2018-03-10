<?php
    require_once'../../db/konek.php';
    $tgl = htmlentities(trim($_POST['tgl']));
    $bln = htmlentities(trim($_POST['bln']));
    $thn = htmlentities(trim($_POST['thn']));
    $kod = htmlentities(trim($_POST['kod']));
    $id = htmlentities(trim($_POST['id']));
    $jum = htmlentities(trim($_POST['jum']));
    $ket = htmlentities(trim($_POST['ket']));
    $db -> query("INSERT INTO dipinjam(idd,tgl_d,bln_d,thn_d,kode,jumlahd,ketd)
                        VALUES('$id','$tgl','$bln','$thn','$kod','$jum','$ket')"
                    );
    $id++;
    if ($db -> affected_rows == 1) {
        header("location:../../pages/konstrap_dipinjam.php?id=$id&tgl=$tgl&bln=$bln&thn=$thn");
    }else{
        echo "<br>Maaf jenis produk tidak tersedia, cek kembali kode produk anda!!";
    }
 ?>
