<?php
    require_once'../../db/konek.php';
    $id = $_GET['id'];
    $hps = $db -> query("DELETE FROM barang_ms where kodeb=$id");
    if ($hps) {
        header('location:../../pages/barang_ms/barang_ms.php');
    }else{
        echo "maaf anda harus menghapus index di table<br> dipinjam atau di table transaksi erlebih dahulu!";
    }
?>   
