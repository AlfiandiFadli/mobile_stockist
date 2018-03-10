<?php
    require_once'../../db/konek.php';
    $id = $_GET['id'];
    $hps = $db -> query("DELETE FROM dipinjam where idd=$id");
    if ($hps) {
        header('location:../../pages/dipinjam/barang_dipinjam.php');
    }
?>   
