<?php
    require_once'../../db/konek.php';
    $kod = htmlentities(trim($_POST['kod']));
    $kod_pro = htmlentities(trim($_POST['kod_pro']));
    $nam = htmlentities(trim($_POST['nam']));
    $bv = htmlentities(trim($_POST['bv']));
    $har = htmlentities(trim($_POST['har']));
    $jum = htmlentities(trim($_POST['jum']));
    
    $db -> query("INSERT INTO barang_ms(kodeb,kode_pro,bvb,namab,hargab,jum_awb)
                        VALUES('$kod','$kod_pro','$bv','$nam','$har','$jum')"
                    );
    if ($db -> affected_rows == 1) {
        header('location:../../pages/barang_ms/barang_ms.php');
    }
 ?>
