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


$path="../../foto_arsip_voucher_jaminan/".$nama_file;

if ($tipe == "image/jpeg" || $tipe == "image/png") 
{
	if ($ukuran <= 500000000) 
	{
		if (move_uploaded_file($tmp_file, $path)) 
		{
			$sql = "INSERT INTO tb_arsip_voucher_jaminan
			(kd_klasifikasi,
			no_penetapan,
			kd_transaksi_voucher,
			no_kpj_nama_tenaga_kerja,
			nama_perusahaan,
			pph_21,
			jlh_bayar,
			no_rek_penerima,
			bank,
			atas_nama,
			jlh_lbr_berkas,
			tingkat_perkembangan,
			keterangan,
			no_boks,
			foto)
			VALUES('$_POST[kd_klasifikasi]',
			'$_POST[no_penetapan]',
			'$_POST[kd_transaksi_voucher]',
			'$_POST[no_kpj_nama_tenaga_kerja]',
			'$_POST[nama_perusahaan]',
			'$_POST[pph_21]',
			'$_POST[jlh_bayar]',
			'$_POST[no_rek_penerima]',
			'$_POST[bank]',
			'$_POST[atas_nama]',
			'$_POST[jlh_lbr_berkas]',
			'$_POST[tingkat_perkembangan]',
			'$_POST[keterangan]',
			'$_POST[no_boks]',
			'$nama_file')";
			mysqli_query($koneksi,$sql);
			if ($sql) 
			{
				header('location:index_arsip_voucher_jaminan.php');
			}else{
				echo "Terjadi Kesalahan";
				echo "<br><a href='add_arsip_voucher_jaminan.php'Kembali Ke Form";
			}
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
?>
