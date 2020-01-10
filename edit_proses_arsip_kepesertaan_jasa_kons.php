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


$no_pendaftaran_proyek 				= $_POST['no_pendaftaran_proyek'];
$nama_proyek  						= $_POST['nama_proyek'];
$nama_kontraktor 					= $_POST['nama_kontraktor'];
$dari 								= $_POST['dari'];
$sampai 							= $_POST['sampai'];
$jlh_berkas 						= $_POST['jlh_berkas'];
$ket								= $_POST['ket'];
$no_boks_laci_filling				= $_POST['no_boks_laci_filling'];

$path="../../foto_arsip_kepesertaan_jasa_kons/".$nama_file;

if(!empty($nama_file))
{
	if ($tipe == "image/jpeg" || $tipe == "image/png") 
	{
		if ($ukuran <= 500000000) 
		{
			if (move_uploaded_file($tmp_file, $path)) 
			{
				$sql = "UPDATE tb_arsip_kepesertaan_jasa_kons SET 
			nama_proyek 					='$nama_proyek',
			nama_kontraktor 				='$nama_kontraktor',
			dari 							='$dari',
			sampai 							='$sampai',
			jlh_berkas 						='$jlh_berkas',
			ket 							='$ket',
			no_boks_laci_filling			='$no_boks_laci_filling',
			foto 							='$nama_file'
			WHERE no_pendaftaran_proyek 	='$no_pendaftaran_proyek'";
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
}else{
	$sql="UPDATE tb_arsip_kepesertaan_jasa_kons SET 
			nama_proyek 					='$nama_proyek',
			nama_kontraktor 				='$nama_kontraktor',
			dari 							='$dari',
			sampai 							='$sampai',
			jlh_berkas 						='$jlh_berkas',
			ket 							='$ket',
			no_boks_laci_filling			='$no_boks_laci_filling',
			foto 							='$nama_file'
			WHERE no_pendaftaran_proyek 	='$no_pendaftaran_proyek'";
}
mysqli_query($koneksi,$sql);
mysqli_close($koneksi);
header('location:index_arsip_kepesertaan_jasa_kons.php'); 	
?>