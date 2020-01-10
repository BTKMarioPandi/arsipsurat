 <?php
  // memanggil file koneksi.php untuk membuat koneksi
include '../config.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['no_pendaftaran_proyek'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $no_pendaftaran_proyek = ($_GET["no_pendaftaran_proyek"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM tb_arsip_kepesertaan_jasa_kons WHERE no_pendaftaran_proyek='$no_pendaftaran_proyek'";
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
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index_arsip_kepesertaan_jasa_kons.php';</script>";
       }
  }    
  ?>
<html>
	<head>
		<title>Data Arsip Kepesertaan Jasa Konstruksi</title>
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
								<h1 align="center">Edit Data Arsip Kepesertaan Jasa Konstruksi</h1>
								<div class="container">
									<div id="content">
								<div class="row">
									<div class="col-xs-12">
									<?php 
									
									include "../config.php";
									
									$no_pendaftaran_proyek = $_GET['edit'];
									$show = mysqli_query($koneksi, "SELECT * FROM tb_arsip_kepesertaan_jasa_kons WHERE no_pendaftaran_proyek='$no_pendaftaran_proyek'")or die(mysqli_error($koneksi));
									while($data = mysqli_fetch_assoc($show)){
									?>
										<form action="edit_proses_arsip_kepesertaan_jasa_kons.php" method="POST" enctype="multipart/form-data">
											<div class="form-group row">
												<div class="hidden">
													<input type="text" class="form-control" id="no_pendaftaran_proyek" name="no_pendaftaran_proyek" value="<?php echo "$data[no_pendaftaran_proyek]";?>" readonly>
												</div>
												<div class="col-xs-3">
													<label>Nomor Pendaftaran Proyek</label>
													<input type="text" class="form-control" name="no_pendaftaran_proyek" value="<?php echo "$data[no_pendaftaran_proyek]"; ?>"/>
												</div>
												<div class="col-xs-3">
													<label>Nama Proyek</label>
													<input type="text" class="form-control" name="nama_proyek" value="<?php echo "$data[nama_proyek]"; ?>"/>

												</div>
												<div class="col-xs-3">
													<label>Nama Kontraktor</label>
													<input type="text" class="form-control" name="nama_kontraktor" value="<?php echo "$data[nama_kontraktor]"; ?>"/>

												</div>
												<div class="col-xs-3">
													<label>Dari</label>
													<input type="date" class="form-control" name="dari" value="<?php echo "$data[dari]"; ?>"/>

													</div>
												<div class="col-xs-3">
													<label>Sampai</label>
													<input type="date" class="form-control" name="sampai" value="<?php echo "$data[sampai]"; ?>"/>

												</div>
												<div class="col-xs-3">
													<label>Jumlah Berkas</label>
													<input type="text" class="form-control" name="jlh_berkas" value="<?php echo "$data[jlh_berkas]"; ?>"/>

												</div>
												
												<div class="col-xs-3">
													<label>Keterangan</label>
													<input type="text" class="form-control" name="ket" value="<?php echo "$data[ket]"; ?>"/>
												</div>

												<div class="col-xs-3">
													<label>Nomor Boks/Laci Filling</label>
													<input type="text" class="form-control" name="no_boks_laci_filling" value="<?php echo "$data[no_boks_laci_filling]"; ?>"/>
												</div>
												<div class="col-xs-3">
													<label>Foto</label>
													<img src="../../foto_arsip_kepesertaan_jasa_kons/<?php echo $data['foto']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
													<input type="file" class="form-control" name="foto" id="foto" value="<?php echo "$data[foto]"; ?>"/>
												</div>
													</div>
												</div>
											</div> 
											<input type="submit" class="btn btn-primary btn-lg" value="SIMPAN"></button>
											<button type="resset" class="btn btn-primary">RESET</button>
											<a href='index_arsip_kepesertaan_jasa_kons.php' class='btn btn-primary'>KEMBALI</a> 
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