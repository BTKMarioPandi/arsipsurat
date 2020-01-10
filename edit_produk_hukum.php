 <?php
  // memanggil file koneksi.php untuk membuat koneksi
include '../config.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['kd_klasifikasi'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $kd_klasifikasi = ($_GET["kd_klasifikasi"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM tb_produk_hukum WHERE kd_klasifikasi='$kd_klasifikasi'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index_produk_hukum.php';</script>";
       }
  }    
  ?>
<html>
	<head>
		<title>Data Arsip Produk Hukum</title>
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
								<h1 align="center">EDIT DATA PRODUK HUKUM</h1>
								<div class="container">
									<div id="content">
								<div class="row">
									<div class="col-xs-12">
									<?php 
									
									include "../config.php";
									
									$kd_klasifikasi = $_GET['edit'];
									$show = mysqli_query($koneksi, "SELECT * FROM tb_produk_hukum WHERE kd_klasifikasi='$kd_klasifikasi'")or die(mysqli_error($koneksi));
									while($data = mysqli_fetch_assoc($show)){
									?>
										<form action="edit_proses_produk_hukum.php" method="POST" enctype="multipart/form-data">
											<div class="form-group row">
												<div class="hidden">
													<input type="text" class="form-control" id="kd_klasifikasi" name="kd_klasifikasi" value="<?php echo "$data[kd_klasifikasi]";?>" readonly>
												</div>
												<div class="col-xs-3">
													<label>Kode Klasifikasi</label>
													<input type="text" class="form-control" name="kd_klasifikasi" value="<?php echo "$data[kd_klasifikasi]"; ?>"/>
												</div>
												<div class="col-xs-3">
													<label>Tanggal Surat</label>
													<input type="date" class="form-control" name="tgl_surat" value="<?php echo "$data[tgl_surat]"; ?>"/>
												</div>
												<div class="col-xs-3">
													<label>Nomor Surat</label>
													<input type="text" class="form-control" name="no_surat" value="<?php echo "$data[no_surat]"; ?>"/>
												</div>
												<div class="col-xs-3">
													<label>Perihal</label>
													<input type="text" class="form-control" name="perihal" value="<?php echo "$data[perihal]"; ?>"/>
												</div>
												<div class="col-xs-3">
													<label>Asal Surat</label>
													<input type="text" class="form-control" name="asal_surat" value="<?php echo "$data[asal_surat]"; ?>"/>
												</div>
												<div class="col-xs-3">
													<label>Unit Tujuan Surat</label>
													<input type="text" class="form-control" name="unit_tujuan_surat" value="<?php echo "$data[unit_tujuan_surat]"; ?>"/>

												</div>
												<div class="col-xs-3">
													<label>Jumlah Lembar Berkas</label>
													<input type="text" class="form-control" name="jlh_lbr_berkas" value="<?php echo "$data[jlh_lbr_berkas]"; ?>"/>

												</div>
												<div class="col-xs-3">
													<label>Tingkat Perkembangan</label>
													<input type="text" class="form-control" name="tingkat_perkembangan" value="<?php echo "$data[tingkat_perkembangan]"; ?>"/>

													</div>
												<div class="col-xs-3">
													<label>Keterangan</label>
													<input type="text" class="form-control" name="keterangan" value="<?php echo "$data[keterangan]"; ?>"/>

												</div>
												<div class="col-xs-3">
													<label>No Boks</label>
													<input type="text" class="form-control" name="no_boks" value="<?php echo "$data[no_boks]"; ?>"/>
												<div class="col-xs-9">
													<label>Foto</label>
													<img src="../../foto_produk_hukum/<?php echo $data['foto']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
													<input type="file" class="form-control" name="foto" id="foto" value="<?php echo "$data[foto]"; ?>"/>
												</div>
													</div>
												</div>
											</div> 
											<input type="submit" class="btn btn-primary btn-lg" value="SIMPAN"></button>
											<button type="resset" class="btn btn-primary">RESET</button>
											<a href='index _produk_hukum.php' class='btn btn-primary'>KEMBALI</a> 
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