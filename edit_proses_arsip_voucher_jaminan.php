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
$no_penetapan  						= $_POST['no_penetapan'];
$kd_transaksi_voucher 				= $_POST['kd_transaksi_voucher'];
$no_kpj_nama_tenaga_kerja 			= $_POST['no_kpj_nama_tenaga_kerja'];
$nama_perusahaan 					= $_POST['nama_perusahaan'];
$pph_21 							= $_POST['pph_21'];
$jlh_bayar 							= $_POST['jlh_bayar'];
$no_rek_penerima					= $_POST['no_rek_penerima'];
$bank								= $_POST['bank'];
$atas_nama							= $_POST['atas_nama'];
$jlh_lbr_berkas						= $_POST['jlh_lbr_berkas'];
$tingkat_perkembangan				= $_POST['tingkat_perkembangan'];
$no_boks							= $_POST['no_boks'];

$path="../../foto_arsip_voucher_jaminan/".$nama_file;

if(!empty($nama_file))
{
	if ($tipe == "image/jpeg" || $tipe == "image/png") 
	{
		if ($ukuran <= 500000000) 
		{
			if (move_uploaded_file($tmp_file, $path)) 
			{
				$sql = "UPDATE tb_arsip_voucher_jaminan SET 
				no_penetapan						='$no_penetapan',
				kd_transaksi_voucher 				='$kd_transaksi_voucher',
				no_kpj_nama_tenaga_kerja 			='$no_kpj_nama_tenaga_kerja',
				nama_perusahaan 					='$nama_perusahaan',
				pph_21 								='$pph_21',
				jlh_bayar 							='$jlh_bayar',
				no_rek_penerima						='$no_rek_penerima',
				bank								='$bank',
				atas_nama							='$atas_nama',
				jlh_lbr_berkas						='$jlh_lbr_berkas',
				tingkat_perkembangan				='$tingkat_perkembangan',
				no_boks								='$no_boks',
				foto 								='$nama_file'

				WHERE kd_klasifikasi 		='$kd_klasifikasi'";
			}else{
					echo "Terjadi Kesalahan Upload";
					echo "<br><a href='add_arsip_voucher_jaminan.php'Kembali Ke Form";
			}
		}else{
				echo "Jangan Upload Gambar Lebih Dari 500MB";
				echo "<br><a href='add_arsip_voucher_jaminan.php'Kembali Ke Form";
		}
	}else{
				echo "Gambar Yang Di Upload Harus JPG/JPEG/PNG";
				echo "<br><a href='add_arsip_voucher_jaminan.php'Kembali Ke Form";
	}
}else{
	$sql = "UPDATE tb_arsip_voucher_jaminan SET 
	no_penetapan						='$no_penetapan',
	kd_transaksi_voucher 				='$kd_transaksi_voucher',
	no_kpj_nama_tenaga_kerja 			='$no_kpj_nama_tenaga_kerja',
	nama_perusahaan 					='$nama_perusahaan',
	pph_21 								='$pph_21',
	jlh_bayar 							='$jlh_bayar',
	no_rek_penerima						='$no_rek_penerima',
	bank								='$bank',
	atas_nama							='$atas_nama',
	jlh_lbr_berkas						='$jlh_lbr_berkas',
	tingkat_perkembangan				='$tingkat_perkembangan',
	no_boks								='$no_boks'

	WHERE kd_klasifikasi 		='$kd_klasifikasi'";
}
mysqli_query($koneksi,$sql);
mysqli_close($koneksi);
header('location:index_arsip_voucher_jaminan.php'); 	
?>