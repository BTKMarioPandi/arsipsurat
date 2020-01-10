 <?php
  // memanggil file koneksi.php untuk membuat koneksi
include '../config.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['npp_perusahaan'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $npp_perusahaan = ($_GET["npp_perusahaan"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM tb_penerima_upah WHERE npp_perusahaan='$npp_perusahaan'";
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
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index_penerima_upah.php';</script>";
       }
  }    
  ?>
<html>
	<head>
		<title>Data Arsip Penerima Upah</title>
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
								<h1 align="center">EDIT DATA PENERIMA UPAH</h1>
								<div class="container">
									<div id="content">
								<div class="row">
									<div class="col-xs-12">
									<?php 
									
									include "../config.php";
									
									$npp_perusahaan = $_GET['edit'];
									$show = mysqli_query($koneksi, "SELECT * FROM tb_penerima_upah WHERE npp_perusahaan='$npp_perusahaan'")or die(mysqli_error($koneksi));
									while($data = mysqli_fetch_assoc($show)){
									?>
										<form action="edit_proses_penerima_upah.php" method="POST" enctype="multipart/form-data">
											<div class="form-group row">
												<div class="hidden">
													<input type="text" class="form-control" id="npp_perusahaan" name="npp_perusahaan" value="<?php echo "$data[npp_perusahaan]";?>" readonly>
												</div>
												<div class="col-xs-3">
													<label>Npp Perusahaan</label>
													<input type="text" class="form-control" name="npp_perusahaan" value="<?php echo "$data[npp_perusahaan]"; ?>"/>
												</div>
												<div class="col-xs-3">
													<label>Nama Perusahaan</label>
													<input type="text" class="form-control" name="nama_perusahaan" value="<?php echo "$data[nama_perusahaan]"; ?>"/>
												</div>
												<div class="col-xs-3">
													<label>Bulan</label>
													<input type="date" class="form-control" name="bulan" value="<?php echo "$data[bulan]"; ?>"/>
												</div>
												<div class="col-xs-3">
													<label>Tahun</label>
													<input type="date" class="form-control" name="tahun" value="<?php echo "$data[tahun]"; ?>"/>
												</div>
												<div class="col-xs-3">
													<label>Jumlah Berkas</label>
													<input type="text" class="form-control" name="jlh_berkas" value="<?php echo "$data[jlh_berkas]"; ?>"/>
												</div>
												<div class="col-xs-3">
													<label>Keterangan</label>
													<input type="text" class="form-control" name="keterangan" value="<?php echo "$data[keterangan]"; ?>"/>
												</div>
												<div class="col-xs-3">
													<label>Nomor Boks</label>
													<input type="text" class="form-control" name="no_boks" value="<?php echo "$data[no_boks]"; ?>"/>

												<div class="col-xs-9">
													<label>Foto</label>
													<img src="../../foto_penerima_upah/<?php echo $data['foto']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
													<input type="file" class="form-control" name="foto" id="foto" value="<?php echo "$data[foto]"; ?>"/>
												</div>
													</div>
												</div>
											</div> 
											<input type="submit" class="btn btn-primary btn-lg" value="SIMPAN"></button>
											<button type="resset" class="btn btn-primary">RESET</button>
											<a href='index_penerima_upah.php' class='btn btn-primary'>KEMBALI</a> 
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