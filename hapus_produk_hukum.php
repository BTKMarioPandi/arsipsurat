<?php
include "../config.php";
$queri = "DELETE FROM tb_produk_hukum WHERE kd_klasifikasi='$_GET[id]'";
mysqli_query($koneksi, $queri); 
mysqli_close($koneksi);
header('location:tampil_data_produk_hukum.php');
?>