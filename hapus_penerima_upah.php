<?php
include "../config.php";
$queri = "DELETE FROM tb_penerima_upah WHERE npp_perusahaan='$_GET[id]'";
mysqli_query($koneksi, $queri); 
mysqli_close($koneksi);
header('location:tampil_data_penerima_upah.php');
?>