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
		<title>Data | Arsip LPK(Voucher Jaminan)</title>
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
								<h1 align="center">DATA ARSIP LPK (VOUCHER JAMINAN)</h1>
								<div class="container-fluid">
									<div id="content">
								<div class="row">
									<div class="col-xs-12">
										<table class="table table-striped table-bordered table-hover dataTables-example">
									<thead>
										<tr>
											<th><center><font size='1'>NO</font></center></th>
											<th><center><font size='1'>KODE<br>KLASIFIKASI</font></center></th>
											<th><center><font size='1'>NOMOR PENETAPAN</font></center></th>
                                            <th><center><font size='1'>KODE TRANSAKSI VOUCHER</font></center></th>
                                            <th><center><font size='1'>NO KPJ DAN NAMA TENAGA KERJA</font></center></th>
                                            <th><center><font size='1'>NAMA PERUSAHAAN</center></font></th>
                                            <th><center><font size='1'>Pph.21</center></font></th>
                                            <th><center><font size='1'>JUMLAH BAYAR</center></font></th>
                                            <th><center><font size='1'>NOMOR REKENING<br>PENERIMA</center></font></th>
                                            <th><center><font size='1'>BANK</center></font></th>
                                            <th><center><font size='1'>ATAS NAMA</center></font></th>
                                            <th><center><font size='1'>JUMLAH<br>LEMBAR/BERKAS</center></font></th>
                                            <th><center><font size='1'>TINGKAT<br>PERKEMBANGAN</center></font></th>
                                            <th><center><font size='1'>KETERANGAN</center></font></th>
                                            <th><center><font size='1'>NOMOR<br>BOKS</center></font></th>
											<th><center><font size='1'>Foto</center></font></th>
											<th><center><font size='1'>Aksi</center></font></th>
										</tr>
									</thead>
									<tbody>
									<?php
										$queri="SELECT * FROM tb_arsip_voucher_jaminan";
										$hasil=mysqli_query($koneksi,$queri);
										$no=1;
										while($data=mysqli_fetch_assoc($hasil))
										{
										echo "
											<tr>
												<td><font size='1'>$no</font></td>
												<td><font size='1'>$data[kd_klasifikasi]</font></td>
												<td><font size='1'>$data[no_penetapan]</font></td>
												<td><font size='1'>$data[kd_transaksi_voucher]</font></td>
                                                <td><font size='1'>$data[no_kpj_nama_tenaga_kerja]</font></td>
                                                <td><font size='1'>$data[nama_perusahaan]</font></td>
                                                <td><font size='1'>$data[pph_21]</font></td>
                                                <td><font size='1'>$data[jlh_bayar]</font></td>                          
                                                <td><font size='1'>$data[no_rek_penerima]</font></td>
                                                <td><font size='1'>$data[bank]</font></td>
                                                <td><font size='1'>$data[atas_nama]</font></td>
                                                <td><font size='1'>$data[jlh_lbr_berkas]</font></td>
                                                <td><font size='1'>$data[tingkat_perkembangan]</font></td>
                                                <td><font size='1'>$data[keterangan]</font></td>
							                    <td><font size='1'>$data[no_boks]</font></td>
												<td><font size='1'><img src='../../foto_arsip_voucher_jaminan/$data[foto]' width='100px' height='100px'></font></td>
										
												<td><center><a href='hapus_arsip_voucher_jaminan.php?id=$data[kd_klasifikasi]' class='btn btn-danger btn-xs'><i class='fa fa-close'></i></a>
												<a href='edit_arsip_voucher_jaminan.php?edit=$data[kd_klasifikasi]' class='btn btn-warning btn-xs'><i class='fa fa-edit'></i></a></center></td>	
											</tr>
										";
											$no=$no+1;
										}
										mysqli_close($koneksi);
									?>
									</tbody>
									<div class="col-xs-4">
												<a href="add_arsip_voucher_jaminan.php" class="btn btn-primary btn-md"> Tambah Data</a>
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