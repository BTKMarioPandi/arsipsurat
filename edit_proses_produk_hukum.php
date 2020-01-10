<?php
session_start();
$namaserver		="localhost";
$user			="root";
$pass			="";
$namadb			="db_bpjs_baru";
$koneksi		=mysqli_connect($namaserver,$user,$pass,$namadb);

$nama_file	= $_FILES['foto']['name'];
$ukuran		= $_FILES['foto']['size'];
$tipe		= $_FILES['foto']['type'];
$tmp_file	= $_FILES['foto']['tmp_name'];


$kd_klasifikasi 		= $_POST['kd_klasifikasi'];
$tgl_surat  			= $_POST['tgl_surat'];
$no_surat 				= $_POST['no_surat'];
$perihal 				= $_POST['perihal'];
$asal_surat 			= $_POST['asal_surat'];
$unit_tujuan_surat 		= $_POST['unit_tujuan_surat'];
$jlh_lbr_berkas 		= $_POST['jlh_lbr_berkas'];
$tingkat_perkembangan	= $_POST['tingkat_perkembangan'];
$keterangan				= $_POST['keterangan'];
$no_boks				= $_POST['no_boks'];

$path="../../foto_produk_hukum/".$nama_file;

if (!empty($nama_file)) 
{

if ($tipe == "image/jpeg" || $tipe == "image/png") 
{
	if ($ukuran <= 500000000) 
	{
		if (move_uploaded_file($tmp_file, $path)) 
		{

	$sql= "UPDATE tb_produk_hukum SET 

	tgl_surat				='$tgl_surat',
	no_surat				='$no_surat', 
	perihal                 ='$perihal',
	asal_surat				='$asal_surat',
	unit_tujuan_surat		='$unit_tujuan_surat',
	jlh_lbr_berkas			='$jlh_lbr_berkas',
	tingkat_perkembangan	='$tingkat_perkembangan',
	keterangan				='$keterangan',
	no_boks					='$no_boks',
	foto                    ='$nama_file'
	
	WHERE kd_klasifikasi='$kd_klasifikasi'";
			
			}else{
				echo "Terjadi Kesalahan Upload";
				echo "<br><a href='add_produk_hukum.php'Kembali Ke Form";
			}
		}else{
				echo "Jangan Upload Gambar Lebih Dari 500MB";
				echo "<br><a href='add_produk_hukum.php'Kembali Ke Form";
			}
	}else{
				echo "Gambar Yang Di Upload Harus JPG/JPEG/PNG";
				echo "<br><a href='add_produk_hukum.php'Kembali Ke Form";
	}
}else{

$sql= "UPDATE tb_produk_hukum SET 
	tgl_surat				='$tgl_surat',
	no_surat				='$no_surat', 
	perihal                 ='$perihal',
	asal_surat				='$asal_surat',
	unit_tujuan_surat		='$unit_tujuan_surat',
	jlh_lbr_berkas			='$jlh_lbr_berkas',
	tingkat_perkembangan	='$tingkat_perkembangan',
	keterangan				='$keterangan',
	no_boks					='$no_boks',
	foto                    ='$nama_file'
	
	WHERE kd_klasifikasi='$kd_klasifikasi'";
}
mysqli_query($koneksi,$sql);
mysqli_close($koneksi);
header('location:tampil_data_produk_hukum.php');
?>