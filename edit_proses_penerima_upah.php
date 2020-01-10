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


$npp_perusahaan 				= $_POST['npp_perusahaan'];
$nama_perusahaan				= $_POST['nama_perusahaan'];
$bulan							= $_POST['bulan'];
$tahun 							= $_POST['tahun'];
$jlh_berkas 					= $_POST['jlh_berkas'];
$keterangan 					= $_POST['keterangan'];
$no_boks						= $_POST['no_boks'];

$path="../../foto_penerima_upah/".$nama_file;

if (!empty($nama_file)) 
{

if ($tipe == "image/jpeg" || $tipe == "image/png") 
{
	if ($ukuran <= 500000000) 
	{
		if (move_uploaded_file($tmp_file, $path)) 
		{

	$sql= "UPDATE tb_penerima_upah SET 

	nama_perusahaan				='$nama_perusahaan',
	bulan						='$bulan', 
	tahun   					='$tahun',
	jlh_berkas					='$jlh_berkas',
	keterangan					='$keterangan',
	no_boks						='$no_boks',
	foto                    	='$nama_file'
	
	WHERE npp_perusahaan='$npp_perusahaan'";
			
			}else{
				echo "Terjadi Kesalahan Upload";
				echo "<br><a href='add_penerima_upah.php'Kembali Ke Form";
			}
		}else{
				echo "Jangan Upload Gambar Lebih Dari 500MB";
				echo "<br><a href='add_penerima_upah.php'Kembali Ke Form";
			}
	}else{
				echo "Gambar Yang Di Upload Harus JPG/JPEG/PNG";
				echo "<br><a href='add_penerima_upah.php'Kembali Ke Form";
	}
}else{

$sql= "UPDATE tb_penerima_upah SET 
	nama_perusahaan				='$nama_perusahaan',
	bulan						='$bulan', 
	tahun   					='$tahun',
	jlh_berkas					='$jlh_berkas',
	keterangan					='$keterangan',
	no_boks						='$no_boks',
	foto                    	='$nama_file'
	
	WHERE npp_perusahaan='$npp_perusahaan'";
}
mysqli_query($koneksi,$sql);
mysqli_close($koneksi);
header('location:tampil_data_penerima_upah.php');
?>