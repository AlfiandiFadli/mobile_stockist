<?php
require_once'../../db/konek.php';
session_start();

if(isset($_POST['masuk'])){
	$user = mysql_real_escape_string(htmlentities($_POST['user']));
    $pass = mysql_real_escape_string(htmlentities(md5($_POST['pass'])));
 
	$sql = $db-> query("SELECT * FROM user WHERE user_n = '$user' AND pass = '$pass' ") or die(mysql_error());
    
    if($db -> affected_rows == 1){
        $row = $sql -> fetch_object();
        if($row->level == 1){
			$_SESSION['admin']=$user;
			echo '<script language="javascript">alert("Anda berhasil Masuk Admin!"); document.location="../../pages/admin/index.php";</script>';
        }
    }else{
        echo header('location:../../index.php?res=Data salah, periksa kembali');
    }
	
}
?>
