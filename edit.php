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
								<h1 align="center">Edit Data Arsip</h1>
								<div class="container">
									<div id="content">
								<div class="row">
									<div class="col-xs-12">
									<?php 
									error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
									include "../config.php";
									$kode_klasifikasi = $_GET['kode_klasifikasi'];
									$show = mysqli_query($koneksi, "SELECT * FROM tb_produk_hukum WHERE kode_klasifikasi='$kode_klasifikasi'")or die(mysqli_error($koneksi));
									while($data = mysqli_fetch_assoc($show)){
									?>
										<form action="edit_proses.php" method="POST" enctype="multipart/form-data">
											<div class="form-group row">
												<div class="hidden">
													<input type="text" class="form-control" id="id_masuk" name="id_masuk" value="<?php echo "$kolom[id_pegawai]";?>" readonly>
												</div>
												<div class="col-xs-3">
													<label>Kode Klasifikasi</label>
													<input type="text" class="form-control" id="kode klasifi" value="<?php echo "$kolom[kode_klasifikasi]"; ?>" name="kode_kalsifikasi">
												</div>
												<div class="col-xs-3">
													<label>Tanggal Surat</label>
													<input type="text" class="form-control" id="tgl_surat" value="<?php echo "$kolom[tgl_surat]"; ?>" name="tgl_surat">
												</div>
												<div class="col-xs-3">
													<label>Nomor Surat</label>
													<input type="text" class="form-control" id="no_surat" value="<?php echo "$kolom[no_surat]"; ?>" name="no_surat">
												</div>
												<div class="col-xs-3">
													<label>Perihal</label>
													<input type="text" class="form-control" id="perihal" value="<?php echo "$kolom[perihal]"; ?>" name="perihal">
												</div>
												<div class="col-xs-3">
													<label>Asal Surat</label>
													<input type="text" class="form-control" id="asal_surat" value="<?php echo "$kolom[asal_surat]"; ?>" name="asal_surat">
												</div>
												<div class="col-xs-3">
													<label>Unit Tujuan Penerima</label>
													<input type="text" class="form-control" id="unit_tujuan_penerima" value="<?php echo "$kolom[unit_tujuan_penerima]"; ?>" name="unit_tujuan penerima">

												</div>
												<div class="col-xs-3">
													<label>Tgl Lahir</label>
													<input type="text" class="form-control" id="tgl_lahir" value="<?php echo "$kolom[tgl_lahir]"; ?>" name="tgl_lahir">

												</div>
												<div class="col-xs-3">
													<label>Jumlah Lembar Berkas</label>
													<input type="text" class="form-control" id=jlh_lembar_berkas value="<?php echo "$kolom[jlh_lembar_berkas]"; ?>" name="jlh_lembar_berkas">

												</div>
												<div class="col-xs-3">
													<label>Tingkat Perkembangan</label>
													<input type="text" class="form-control" id="tingkat_perkembangan" value="<?php echo "$kolom[tingkat_perkembangan]"; ?>" name="tingkat_perkembangan">

												</div>
												<div class="col-xs-3">
													<label>Keterangan</label>
													<input type="text" class="form-control" id="keterangan" value="<?php echo "$kolom[keterangan]"; ?>" name="keterangan">

												</div>
												<div class="col-xs-3">
													<label>Nomor Boks</label>
													<input type="text" class="form-control" id="no_boks" value="<?php echo "$kolom[no_boks]"; ?>" name="no_boks">

												</div>
													</div>
												</div>
											</div> 
											<input type="submit" class="btn btn-primary btn-lg" value="SIMPAN"></button>
											<button type="resset" class="btn btn-primary">RESET</button>
											<a href='view_stok.php' class='btn btn-primary'>KEMBALI</a> 
										</form>
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
		<?php } ?>
</html>