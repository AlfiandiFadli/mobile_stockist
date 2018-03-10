<?php
    require_once'../../db/konek.php';
    $nam = htmlentities(trim($_POST['nam']));
    $nodis = htmlentities(trim($_POST['nodis']));
    $id = htmlentities(trim($_POST['id']));
    $kod = htmlentities(trim($_POST['kod']));
    $jum = htmlentities(trim($_POST['jum']));
    $ket = htmlentities(trim($_POST['ket']));
    $tgl = htmlentities(trim($_POST['tgl']));
    $bln = htmlentities(trim($_POST['bln']));
    $thn = htmlentities(trim($_POST['thn']));

    $db -> query("INSERT INTO transaksi(idt,namat,no_dist,tgl_t,bln_t,thn_t,kodet,jumlaht,kett)
                        VALUES('$id','$nam','$nodis','$tgl','$bln','$thn','$kod','$jum','$ket')"
                    );
    $id++;
    if ($db -> affected_rows == 1) {
        header("location:../../pages/konstrap.php?id=$id&tgl=$tgl&bln=$bln&thn=$thn");
    }else{
        echo "Maaf terjadi kesalahan";
    }
 ?>
