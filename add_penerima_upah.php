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
		<title>Data Arsip</title>
	    <?php include "bs.php";?>  
	</head>
	<body>
		<div id="container">
			<?php include "header.php";?>
			<div id="content">
				<div id="container">
					<div class="row blog-page">
						<div class="col-md-12 blog-box">
							<div class="post-content">
								<h1 align="center">ARSIP PENERIMA UPAH</h1>
								<div class="container">
									<div style="height: 55px" align="center">
            							<?php 
              							if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '')
               							{
                							echo '<div id="pesan" class="alert alert-success" style="display:none;">'.$_SESSION['pesan'].'</div>';
                						}
              								$_SESSION['pesan'] = '';
            							?>
      								</div>
									<div id="content">
								<div class="row">
									<div class="col-xs-12">
										<form enctype="multipart/form-data" action="proses_add_penerima_upah.php" method="POST">
											<div class="form-group row">
												<div class="col-xs-3">
													<label>NPP perusahaan</label>
													<input type="text" class="form-control" name="npp_perusahaan">
												</div>
												<div class="col-xs-3">
													<label>Nama Perusahaan </label>
													<input type="text" class="form-control" name="nama_perusahaan">
												</div>
												<div class="col-xs-3">
													<label>Bulan</label>
													<input type="date" class="form-control" name="bulan">
												</div>
												<div class="col-xs-3">
													<label>Tahun</label>
													<input type="date" class="form-control" name="tahun">
												</div>
												<div class="col-xs-3">
													<label>Jumlah Berkas</label>
													<input type="text" class="form-control" name="jlh_berkas">
												</div>
												<div class="col-xs-3">
													<label>Keterangan</label>
													<input type="text" class="form-control" name="keterangan">
												</div>
												<div class="col-xs-3">
													<label>Nomor Boks</label>
													<input type="text" class="form-control" name="no_boks">
												</div>
												<div class="col-xs-3">
													<label>Foto</label>
													<input type="file" name="foto" class="form-control" id="foto" >
												
												</div>
												</div>
												</div>
											</div> 
											<div class="col-xs-3">
												<input type="submit" class="btn btn-danger btn-md" value="Simpan Data" >
											</div>
										</form>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 sidebar right-sidebar">
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
<?php };?>div>
		<?php include "../footer.php";?>
	<script type="text/javascript" src="js/script.js"></script>
	<script>
		$(document).ready(function(){setTimeout(function(){$("#pesan").fadeIn('slow');}, 500);});
	    setTimeout(function(){$("#pesan").fadeOut('slow');}, 3000);
	</script>
	</body>
</html>
<?php ;?>