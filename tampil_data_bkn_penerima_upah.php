<?php
$namaserver		="localhost";
$user			="root";
$pass			="";
$namadb			="db_bpjs_baru";
$koneksi		=mysqli_connect($namaserver,$user,$pass,$namadb);
if(!isset($_SESSION))
{
    session_start();
}
if(empty($_SESSION['username']) AND empty($_SESSION['password']))
{
    include "404.html";
}
else
{
?>
<html>
	<head>
		<title>Data | Arsip</title>
	    <?php include "bs.php";?>  
	</head>
	<body>
		<div id="container">
			<?php include "header.php";?>
			<div id="content">
				<div id="container-fluid">
					<div class="row blog-page">
						<div class="col-md-12 blog-box">
							<div class="post-content">
								<h1 align="center">Data Arsip Bukan Penerima Upah</h1>
								<div class="container-fluid">
									<div id="content">
								<div class="row">
									<div class="col-xs-12">
										<table class="table table-striped table-bordered table-hover dataTables-example">
									<thead>
										<tr>
											<th><center><font size='1'>No</center></th>
											<th><center><font size='1'>Tgl Bulan<br></center></th>
											<th><center><font size='1'>Tahun<br></center></th>
											<th><center><font size='1'>NPW No <br>Mitra NIK</th>
                                            <th><center><font size='1'>Nama Wadah <br>Mitra Individu</center></th>
                                            <th><center><font size='1'>Jumlah <br>Berkas</center></th>
                                            <th><center><font size='1'>Keterangan</center></th>
                                            <th><center><font size='1'>Nomor Boks<br></center></th>
                                            <th><center><font size='1'>Foto</center></font></th>
											<th><center><font size='1'>Aksi</center></font></th>
                                          
										</tr>
									</thead>
									<tbody>
									<?php
										$queri="SELECT * FROM tb_bkn_penerima_upah";
										$hasil=mysqli_query($koneksi,$queri);
										$no=1;
										while($data=mysqli_fetch_assoc($hasil))
										{
										echo "
											<tr>
												<td><font size='2'>$no</font></td>
												<td><font size='2'>$data[tgl_bulan]</font></td>
												<td><font size='2'>$data[tahun]</font></td>
                                                <td><font size='2'>$data[npw_no_mitra_nik]</font></td>
                                                <td><font size='2'>$data[nama_wadah_mitra_individu]</font></td>
                                                <td><font size='2'>$data[jlh_berkas]</font></td>
                                                <td><font size='2'>$data[keterangan]</font></td>
                                                <td><font size='2'>$data[no_boks]</font></td>
												<td><font size='1'><img src='../../foto_bkn_penerima_upah/$data[foto]' width='100px' height='100px'></font></td>	

												<td><center><a 
                                                	href='hapus_bkn_penerima_upah.php?id=$data[npw_no_mitra_nik]' class='btn btn-danger btn-xs'><i class='fa fa-close'></i></a>
												<a href='edit_bkn_penerima_upah.php?edit=$data[npw_no_mitra_nik]' class='btn btn-warning btn-xs'><i class='fa fa-edit'></i></a></center></td>
											</tr>
										";
											$no=$no+1;
										}
										mysqli_close($koneksi);
									?>
									</tbody>
									
									<div class="col-xs-4">
												<a href="add_bkn_penerima_upah.php" class="btn btn-primary btn-md">TAMBAH DATA</a>
											</div>
											</table>
										</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2 sidebar right-sidebar">
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include "../footer.php";?>
	<script type="text/javascript" src="js/script.js"></script>
	<script>
		$(document).ready(function(){setTimeout(function(){$("#pesan").fadeIn('slow');}, 500);});
	    setTimeout(function(){$("#pesan").fadeOut('slow');}, 3000);
	</script>
	</body>
</html>
<?php };?>