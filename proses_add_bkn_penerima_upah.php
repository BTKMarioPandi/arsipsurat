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



$path="../../foto_bkn_penerima_upah/".$nama_file;

if ($tipe == "image/jpeg" || $tipe == "image/png") 
{
	if ($ukuran <= 500000000) 
	{
		if (move_uploaded_file($tmp_file, $path)) 
		{
			$sql = "INSERT INTO tb_bkn_penerima_upah
			(tgl_bulan,
			tahun,
			npw_no_mitra_nik,
			nama_wadah_mitra_individu,
			jlh_berkas,
			keterangan,
			no_boks,
			foto)
			VALUES(
			'$_POST[tgl_bulan]',
			'$_POST[tahun]',
			'$_POST[npw_no_mitra_nik]',
			'$_POST[nama_wadah_mitra_individu]',
			'$_POST[jlh_berkas]',
			'$_POST[keterangan]',
			'$_POST[no_boks]',
			'$nama_file')";
			mysqli_query($koneksi,$sql);
			if ($sql) 
			{
				header('location:tampil_data_bkn_penerima_upah.php');
			}else{
				echo "Terjadi Kesalahan";
				echo "<br><a href='add_bkn_penerima_upah.php'Kembali Ke Form";
			}
			}else{
				echo "Terjadi Kesalahan Upload";
				echo "<br><a href='add_bkn_penerima_upah.php'Kembali Ke Form";
			}
		}else{
				echo "Jangan Upload Gambar Lebih Dari 500MB";
				echo "<br><a href='add_bkn_penerima_upah.php'Kembali Ke Form";
			}
	}else{
				echo "Gambar Yang Di Upload Harus JPG/JPEG/PNG";
				echo "<br><a href='add_bkn_penerima_upah.php'Kembali Ke Form";
}
?>
