<?php
    require_once'../../db/konek.php';
    $tgl = htmlentities(trim($_POST['tgl']));
    $bln = htmlentities(trim($_POST['bln']));
    $thn = htmlentities(trim($_POST['thn']));
    $kod = htmlentities(trim($_POST['kod']));
    $jum = htmlentities(trim($_POST['jum']));
    $id = htmlentities(trim($_POST['id']));
    $ket = htmlentities(trim($_POST['ket']));
    $db -> query("INSERT INTO transaksi(tgl_t,bln_t,thn_t,idt,kodet,jumlaht,kett)
                        VALUES('$tgl','$bln','$thn','$id','$kod','$jum','$ket')"
                    );
    $id++;
    if ($db -> affected_rows == 1) {
        header("location:../../pages/konstrap.php?id=$id&tgl=$tgl&bln=$bln&thn=$thn");
    }else{
        echo "Maaf terjadi kesalahan";
    }
 ?>
