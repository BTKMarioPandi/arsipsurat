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
		<title>Data Arsip LPK(Voucher Jaminan)</title>
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
								<h1 align="center">Data Arsip LPK (Voucher Jaminan)</h1>
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
										<form enctype="multipart/form-data" action="proses_add_arsip_voucher_jaminan.php" method="POST">
											<div class="form-group row">
												<div class="col-xs-3">
													<label>Kode Klasifikasi</label>
													<input type="text" class="form-control" name="kd_klasifikasi">
												</div>
												<div class="col-xs-3">
													<label>Nomor Penetapan</label>
													<input type="text" class="form-control" name="no_penetapan">
												</div>
												<div class="col-xs-3">
													<label>Kode Transaksi Voucher</label>
													<input type="text" class="form-control" name="kd_transaksi_voucher">
												</div>
												<div class="col-xs-3">
													<label>No KPJ Dan Nama Tenaga Kerja</label>
													<input type="text" class="form-control" name="no_kpj_nama_tenaga_kerja">
												</div>
												<div class="col-xs-3">
													<label>Nama Perusahaan</label>
													<input type="text" class="form-control" name="nama_perusahaan">
												</div>
												<div class="col-xs-3">
													<label>PPh. 21</label>
													<input type="text" class="form-control" name="pph_21">
												</div>
												<div class="col-xs-3">
													<label>Jumlah Bayar</label>
													<input type="text" class="form-control" name="jlh_bayar">
												</div>
												<div class="col-xs-3">
													<label>Nomor Rekening Penerima </label>
													<input type="text" class="form-control" name="no_rek_penerima">
												</div>
												<div class="col-xs-3">
													<label>Bank</label>
													<input type="text" class="form-control" name="bank">
												</div>
												<div class="col-xs-3">
													<label>Atas Nama</label>
													<input type="text" class="form-control" name="atas_nama">
												</div>
												<div class="col-xs-3">
													<label>Jumlah Lembar Berkas</label>
													<input type="text" class="form-control" name="jlh_lbr_berkas">
												</div>
												<div class="col-xs-3">
													<label>Tingkat Perkembangan</label>
													<input type="text" class="form-control" name="tingkat_perkembangan">
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
<?php };?>