<?php
include "../config.php";
$queri = "DELETE FROM tb_arsip_voucher_umum WHERE kd_klasifikasi='$_GET[id]'";
mysqli_query($koneksi, $queri); 
mysqli_close($koneksi);
header('location:index_arsip_voucher_umum.php');
?>