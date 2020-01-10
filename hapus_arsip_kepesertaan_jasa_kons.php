<?php
include "../config.php";
$queri = "DELETE FROM tb_arsip_kepesertaan_jasa_kons WHERE no_pendaftaran_proyek='$_GET[id]'";
mysqli_query($koneksi, $queri); 
mysqli_close($koneksi);
header('location:index_arsip_kepesertaan_jasa_kons.php');
?>