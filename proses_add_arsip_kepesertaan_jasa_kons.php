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


$path="../../foto_arsip_kepesertaan_jasa_kons/".$nama_file;

if ($tipe == "image/jpeg" || $tipe == "image/png") 
{
	if ($ukuran <= 500000000) 
	{
		if (move_uploaded_file($tmp_file, $path)) 
		{
			$sql = "INSERT INTO tb_arsip_kepesertaan_jasa_kons
			(no_pendaftaran_proyek,
			nama_proyek,
			nama_kontraktor,
			dari,
			sampai,
			jlh_berkas,
			ket,
			no_boks_laci_filling,
			foto)
			VALUES('$_POST[no_pendaftaran_proyek]',
			'$_POST[nama_proyek]',
			'$_POST[nama_kontraktor]',
			'$_POST[dari]',
			'$_POST[sampai]',
			'$_POST[jlh_berkas]',
			'$_POST[ket]',
			'$_POST[no_boks_laci_filling]',
			'$nama_file')";
			mysqli_query($koneksi,$sql);
			if ($sql) 
			{
				header('location:index_arsip_kepesertaan_jasa_kons.php');
			}else{
				echo "Terjadi Kesalahan";
				echo "<br><a href='add_arsip_kepesertaan_jasa_kons.php'Kembali Ke Form";
			}
			}else{
				echo "Terjadi Kesalahan Upload";
				echo "<br><a href='add_arsip_kepesertaan_jasa_kons.php'Kembali Ke Form";
			}
		}else{
				echo "Jangan Upload Gambar Lebih Dari 500MB";
				echo "<br><a href='add_arsip_kepesertaan_jasa_kons.php'Kembali Ke Form";
			}
	}else{
				echo "Gambar Yang Di Upload Harus JPG/JPEG/PNG";
				echo "<br><a href='add_arsip_kepesertaan_jasa_kons.php'Kembali Ke Form";
}
?>
