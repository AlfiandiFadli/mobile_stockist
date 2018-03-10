<?php
    require_once'../../db/konek.php';
    $id = $_POST['id'];
    $na = htmlentities(trim($_POST['nama']));
    $nod = htmlentities(trim($_POST['nodis']));
    $tgl = htmlentities(trim($_POST['tgl']));
    $bln = htmlentities(trim($_POST['bln']));
    $thn = htmlentities(trim($_POST['thn']));
    $kod = htmlentities(trim($_POST['kod']));
    $jum = htmlentities(trim($_POST['jum']));
    $por = htmlentities(trim($_POST['por']));
    $jum_kem = htmlentities(trim($_POST['jum_kem']));
    $ket = htmlentities(trim($_POST['ket']));
    
    $db -> query("UPDATE 
                        transaksi
                  SET
                        namat='$na',
                        no_dist='$nod',
                        tgl_t='$tgl',
                        bln_t='$bln',
                        thn_t='$thn',
                        kodet='$kod',
                        laport='$por',
                        jumlaht='$jum',
                        jum_kemt='$jum_kem',
                        kett='$ket'
                  WHERE
                        idt='$id'
                ");
      if ($db -> affected_rows) {
            header('location:../../pages/transaksi/transaksi.php');
      }else{
            header('location:../../pages/transaksi/transaksi.php');
      }
?>
