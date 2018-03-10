<?php
session_start();
 
if(!isset($_SESSION['admin'])){
	echo '<script language="javascript">alert("Anda harus masuk dulu, isi nama dan kata sandi!"); document.location="../../index.php";</script>';
}
?>
