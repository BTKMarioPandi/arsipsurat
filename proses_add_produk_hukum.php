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



$path="../../foto_produk_hukum/".$nama_file;

if ($tipe == "image/jpeg" || $tipe == "image/png") 
{
	if ($ukuran <= 500000000) 
	{
		if (move_uploaded_file($tmp_file, $path)) 
		{
			$sql = "INSERT INTO tb_produk_hukum
			(kd_klasifikasi,
			tgl_surat,
			no_surat,
			perihal,
			asal_surat,
			unit_tujuan_surat,
			jlh_lbr_berkas,
			tingkat_perkembangan,
			keterangan,
			no_boks,
			foto)
			VALUES(
			'$_POST[kd_klasifikasi]',
			'$_POST[tgl_surat]',
			'$_POST[no_surat]',
			'$_POST[perihal]',
			'$_POST[asal_surat]',
			'$_POST[unit_tujuan_surat]',
			'$_POST[jlh_lbr_berkas]',
			'$_POST[tingkat_perkembangan]',
			'$_POST[keterangan]',
			'$_POST[no_boks]',
			'$nama_file')";
			mysqli_query($koneksi,$sql);
			if ($sql) 
			{
				header('location:tampil_data_produk_hukum.php');
			}else{
				echo "Terjadi Kesalahan";
				echo "<br><a href='add_produk_hukum.php'Kembali Ke Form";
			}
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
?>
