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
		<title>Data | ARSIP PRODUK HUKUM</title>
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
								<h1 align="center">DATA PRODUK HUKUM</h1>
								<div class="container-fluid">
									<div id="content">
								<div class="row">
									<div class="col-xs-12">
										<table class="table table-striped table-bordered table-hover dataTables-example">
									<thead>
										<tr>
											<th><center><font size='1'>No</font></center></th>
											<th><center><font size='1'>kd klasifikasi<br></font></center></th>
											<th><center><font size='1'>Tgl Surat<br></font></center></th>
                                            <th><center><font size='1'>No Surat</font></center></th>
                                            <th><center><font size='1'>Perihal</font></center></th>
                                            <th><center><font size='1'>Asal<br>Surat</font></center></th>
                                            <th><center><font size='1'>unit</center>tujuan Surat</font></th>
                                            <th><center><font size='1'>Jumlah Lembar<br>Berkas</center></font></th>
                                            <th><center><font size='1'>Tingkat</center>Perkembangan</font></th>
                                            <th><center><font size='1'>Keterangan</center></font></th>
                                            <th><center><font size='1'>NO Boks<br></center></font></th>                       <th><center><font size='1'>Foto</center></font></th>
											<th><center><font size='1'>Aksi</center></font></th>
										</tr>
									</thead>
									<tbody>
									<?php
										$queri="SELECT * FROM tb_produk_hukum";
										$hasil=mysqli_query($koneksi,$queri);
										$no=1;
										while($data=mysqli_fetch_assoc($hasil))
										{
										echo "
											<tr>
												<td><font size='1'>$no</font></td>
												<td><font size='1'>$data[kd_klasifikasi]</font></td>
												<td><font size='1'>$data[tgl_surat]</font></td>
                                                <td><font size='1'>$data[no_surat]</font></td>
                                                <td><font size='1'>$data[perihal]</font></td>
                                                <td><font size='1'>$data[asal_surat]</font></td>
                                                <td><font size='1'>$data[unit_tujuan_penerima]</font></td>                          
                                                <td><font size='1'>$data[jlh_lbr_berkas]</font></td>
                                                <td><font size='1'>$data[tingkat_perkembangan]</font></td>
                                                <td><font size='1'>$data[keterangan]</font></td>
                                                <td><font size='1'>$data[no_boks]</font></td>
												<td><font size='1'><img src='../../foto_produk_hukum/$data[foto]' width='100px' height='100px'></font></td>
										
												<td><center><a href='hapus_produk_hukum.php?id=$data[kd_klasifikasi]' class='btn btn-danger btn-xs'><i class='fa fa-close'></i></a>
												<a href='edit_arsip_produk_hukum.php?edit=$data[kd_klasifikasi]' class='btn btn-warning btn-xs'><i class='fa fa-edit'></i></a></center></td>	
											</tr>
										";
											$no=$no+1;
										}
										mysqli_close($koneksi);
									?>
									</tbody>
									<div class="col-xs-4">
												<a href="add.produk_hukum.php" class="btn btn-primary btn-md"> Tambah Data</a>
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