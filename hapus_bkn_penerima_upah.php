<?php
include "../config.php";
$queri = "DELETE FROM tb_bkn_penerima_upah WHERE npw_no_mitra_nik='$_GET[id]'";
mysqli_query($koneksi, $queri); 
mysqli_close($koneksi);
header('location:tampil_data_bkn_penerima_upah.php');
?>