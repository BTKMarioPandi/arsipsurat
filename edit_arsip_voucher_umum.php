 <?php
  // memanggil file koneksi.php untuk membuat koneksi
include '../config.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['kd_klasifikasi'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $kd_klasifikasi = ($_GET["kd_klasifikasi"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM tb_arsip_voucher_umum WHERE kd_klasifikasi='$kd_klasifikasi'";
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
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index_arsip_voucher_umum.php';</script>";
       }
  }    
  ?>
<html>
	<head>
		<title>Data Arsip LPK(Vocher Umum)</title>
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
								<h1 align="center">Edit Data Asip LPK (Voucher Umum)</h1>
								<div class="container">
									<div id="content">
								<div class="row">
									<div class="col-xs-12">
									<?php 
									
									include "../config.php";
									
									$kd_klasifikasi = $_GET['edit'];
									$show = mysqli_query($koneksi, "SELECT * FROM tb_arsip_voucher_umum WHERE kd_klasifikasi='$kd_klasifikasi'")or die(mysqli_error($koneksi));
									while($data = mysqli_fetch_assoc($show)){
										
									?>
										<form action="edit_proses_arsip_voucher_umum.php" method="POST" enctype="multipart/form-data">
											<div class="form-group row">
												<div class="hidden">
													<input type="text" class="form-control" id="kd_klasifikasi" name="kd_klasifikasi" value="<?php echo "$data[kd_klasifikasi]";?>" readonly>
												</div>
												<div class="col-xs-3">
													<label>Kode Klasifikasi</label>
													<input type="text" class="form-control" name="kd_klasifikasi" value="<?php echo "$data[kd_klasifikasi]"; ?>"/>
												</div>
												<div class="col-xs-3">
													<label>Kode Transaksi Voucher</label>
													<input type="text" class="form-control" name="kd_transaksi_voucher" value="<?php echo "$data[kd_transaksi_voucher]"; ?>"/>

												</div>
												<div class="col-xs-3">
													<label>Program</label>
													<input type="text" class="form-control" name="program" value="<?php echo "$data[program]"; ?>"/>

												</div>
												<div class="col-xs-3">
													<label>Jumlah Rupiah</label>
													<input type="text" class="form-control" name="jlh_rupiah" value="<?php echo "$data[jlh_rupiah]"; ?>"/>

													</div>
												<div class="col-xs-3">
													<label>Keterangan Transaksi</label>
													<input type="text" class="form-control" name="ket_transaksi" value="<?php echo "$data[ket_transaksi]"; ?>"/>
												</div>
												<div class="col-xs-3">
													<label>Jumlah Lembar/Berkas</label>
													<input type="text" class="form-control" name="jlh_lembar_berkas" value="<?php echo "$data[jlh_lembar_berkas]"; ?>"/>
												</div>
												
												<div class="col-xs-3">
													<label>Tingkat Perkembangan</label>
													<input type="text" class="form-control" name="tingkat_perkembangan" value="<?php echo "$data[tingkat_perkembangan]"; ?>"/>

												</div>
												<div class="col-xs-3">
													<label>Keterangan</label>
													<input type="text" class="form-control" name="ket" value="<?php echo "$data[ket]"; ?>"/>
												</div>		
												<div class="col-xs-3">
													<label>Nomor Boks</label>
													<input type="text" class="form-control" name="no_boks" value="<?php echo "$data[no_boks]"; ?>"/>
												</div>
												<div class="col-xs-3">
													<label>Foto</label>
													<img src="../../foto_arsip_voucher_umum/<?php echo $data['foto']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
													<input type="file" class="form-control" name="foto" id="foto" value="<?php echo "$data[foto]"; ?>"/>
												</div>
													
												</div>
											</div> 
											<input type="submit" class="btn btn-primary btn-lg" value="SIMPAN"></button>
											<button type="resset" class="btn btn-primary">RESET</button>
											<a href='index_arsip_voucher_umum.php' class='btn btn-primary'>KEMBALI</a> 
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