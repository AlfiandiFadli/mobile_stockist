<?php
    require_once'../../db/konek.php';
    $nama = htmlentities(trim($_POST['nama']));
    $nodis = htmlentities(trim($_POST['nodis']));
    $tgl = htmlentities(trim($_POST['tgl']));
    $bln = htmlentities(trim($_POST['bln']));
    $thn = htmlentities(trim($_POST['thn']));
    $id = htmlentities(trim($_POST['id']));
    $kod = htmlentities(trim($_POST['kod']));
    $jum = htmlentities(trim($_POST['jum']));
    $ket = htmlentities(trim($_POST['ket']));

    $db -> query("INSERT INTO dipinjam(idd,namad,no_disd,tgl_d,bln_d,thn_d,kode,jumlahd,ketd)
                        VALUES('$id','$nama','$nodis','$tgl','$bln','$thn','$kod','$jum','$ket')"
                    );  
    $id++;
    if ($db -> affected_rows == 1) {
        echo header("location:../../pages/konstrap_dipinjam.php?id=$id&tgl=$tgl&bln=$bln&thn=$thn");
    }else{
        echo "maaf kode baris yang anda masukan tidak tersedia,<br> dan pastikan kode baris harus sesuai dengan nama produknya!";
    }
 ?>
