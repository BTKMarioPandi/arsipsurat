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


$path="../../foto_arsip_voucher_umum/".$nama_file;

if ($tipe == "image/jpeg" || $tipe == "image/png") 
{
	if ($ukuran <= 500000000) 
	{
		if (move_uploaded_file($tmp_file, $path)) 
		{
			$sql = "INSERT INTO tb_arsip_voucher_umum
			(kd_klasifikasi,
			kd_transaksi_voucher,
			program,
			jlh_rupiah,
			ket_transaksi, 
			jlh_lembar_berkas,
			tingkat_perkembangan,
			ket,
			no_boks,
			foto)
			VALUES('$_POST[kd_klasifikasi]',
			'$_POST[kd_transaksi_voucher]',
			'$_POST[program]',
			'$_POST[jlh_rupiah]',
			'$_POST[ket_transaksi]',
			'$_POST[jlh_lembar_berkas]',
			'$_POST[tingkat_perkembangan]',
			'$_POST[ket]',
			'$_POST[no_boks]',
			'$nama_file')";
			mysqli_query($koneksi,$sql);
			if ($sql) 
			{
				header('location:index_arsip_voucher_umum.php');
			}else{
				echo "Terjadi Kesalahan";
				echo "<br><a href='add_arsip_voucher_umum.php'Kembali Ke Form";
			}
			}else{
				echo "Terjadi Kesalahan Upload";
				echo "<br><a href='add_arsip_voucher_umum.php'Kembali Ke Form";
			}
		}else{
				echo "Jangan Upload Gambar Lebih Dari 500MB";
				echo "<br><a href='add_arsip_voucher_umum.php'Kembali Ke Form";
			}
	}else{
				echo "Gambar Yang Di Upload Harus JPG/JPEG/PNG";
				echo "<br><a href='add_arsip_voucher_umum.php'Kembali Ke Form";
}
?>
