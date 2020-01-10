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


$kd_klasifikasi 					= $_POST['kd_klasifikasi'];
$kd_transaksi_voucher  				= $_POST['kd_transaksi_voucher'];
$program 							= $_POST['program'];
$jlh_rupiah 						= $_POST['jlh_rupiah'];
$ket_transaksi 						= $_POST['ket_transaksi'];
$jlh_lembar_berkas 					= $_POST['jlh_lembar_berkas'];
$tingkat_perkembangan 				= $_POST['tingkat_perkembangan'];
$ket								= $_POST['ket'];
$no_boks							= $_POST['no_boks'];
$foto								= $_FILES['foto'];


$path="../../foto_arsip_voucher_umum/".$nama_file;

if(!empty($nama_file))
{
	if ($tipe == "image/jpeg" || $tipe == "image/png") 
	{
		if ($ukuran <= 500000000) 
		{
			if (move_uploaded_file($tmp_file, $path)) 
			{
				$sql="UPDATE tb_arsip_voucher_umum SET 
				kd_transaksi_voucher 		='$kd_transaksi_voucher',
				program 					='$program',
				jlh_rupiah 					='$jlh_rupiah',
				ket_transaksi 				='$ket_transaksi',
				jlh_lembar_berkas			='$jlh_lembar_berkas',
				tingkat_perkembangan 		='$tingkat_perkembangan',
				ket 						='$ket',
				no_boks						='$no_boks',
				foto 						='$nama_file'

				WHERE kd_klasifikasi 		='$kd_klasifikasi'";
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
}else{
	$sql="UPDATE tb_arsip_voucher_umum SET 
				kd_transaksi_voucher 		='$kd_transaksi_voucher',
				program 					='$program',
				jlh_rupiah 					='$jlh_rupiah',
				ket_transaksi 				='$ket_transaksi',
				jlh_lembar_berkas			='$jlh_lembar_berkas',
				tingkat_perkembangan 		='$tingkat_perkembangan',
				ket 						='$ket',
				no_boks						='$no_boks',
				foto 						='$nama_file'

				WHERE kd_klasifikasi 		='$kd_klasifikasi'";
}
mysqli_query($koneksi,$sql);
mysqli_close($koneksi);
header('location:index_arsip_voucher_umum.php'); 	
?>