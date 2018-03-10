<?php
    require_once'../../db/konek.php';
    $id = $_GET['id'];
    $hps = $db -> query("DELETE FROM transaksi where idt=$id");
    if ($hps) {
        header('location:../../pages/transaksi/transaksi.php');
    }
?>   
