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


$tgl_bulan 						= $_POST['tgl_bulan'];
$tahun 							= $_POST['tahun'];
$npw_no_mitra_nik				= $_POST['npw_no_mitra_nik'];
$nama_wadah_mitra_individu 		= $_POST['nama_wadah_mitra_individu'];
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

	$sql= "UPDATE tb_bkn_penerima_upah SET 

	tgl_bulan					='$tgl_bulan',
	tahun						='tahun',
	npw_no_mitra_nik			='$npw_no_mitra_nik', 
	nama_wadah_mitra_individu   ='$nama_wadah_mitra_individu',
	jlh_berkas					='$jlh_berkas',
	keterangan					='$keterangan',
	no_boks						='$no_boks',
	foto                    	='$nama_file',

	
	WHERE npw_no_mitra_nik='$npw_no_mitra_nik'";
			
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
}else{

$sql= "UPDATE tb_bkn_penerima_upah SET 
	tgl_bulan					='$tgl_bulan',
	tahun						='tahun',
	npw_no_mitra_nik			='$npw_no_mitra_nik', 
	nama_wadah_mitra_individu   ='$nama_wadah_mitra_individu',
	jlh_berkas					='$jlh_berkas',
	keterangan					='$keterangan',
	no_boks						='$no_boks',
	foto                    	='$nama_file',

	
	WHERE npw_no_mitra_nik='$npw_no_mitra_nik'";
}
mysqli_query($koneksi,$sql);
mysqli_close($koneksi);
header('location:tampil_data_bkn_penerima_upah.php');
?>