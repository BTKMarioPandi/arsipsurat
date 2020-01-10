<?php
include "../config.php";
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
  <title>BPJS | Dasboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="Margo - Responsive HTML5 Template">
  <meta name="author" content="GrayGrids">
  <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/settings.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/slicknav.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/colors/red.css" media="screen" />
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/jquery.migrate.js"></script>
  <script type="text/javascript" src="js/modernizrr.js"></script>
  <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="js/jquery.appear.js"></script>
  <script type="text/javascript" src="js/count-to.js"></script>
  <script type="text/javascript" src="js/jquery.textillate.js"></script>
  <script type="text/javascript" src="js/jquery.lettering.js"></script>
  <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="js/smooth-scroll.js"></script>
  <script type="text/javascript" src="js/skrollr.js"></script>
  <script type="text/javascript" src="js/jquery.parallax.js"></script>
  <script type="text/javascript" src="js/mediaelement-and-player.js"></script>
  <script type="text/javascript" src="js/jquery.slicknav.js"></script>    
  <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
</head>
<body>
  <div id="container">
    <?php include "header.php"?>
    <div id="content">
      <div id="container">
        <div class="row">
          <div class="col-md-12" align="center">
            <h2>Selamat Datang<br></h2>
            <h2>--HORAS--<br></h2>
            <h1><b style="color: #0000CD "></b></h1>
          </div>
        </div>
      </div>
    </div>
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="formgroup-row"></div>
            <div class="col-md-4" align="center">
              <a href="tampil_data_produk_hukum
              .php" class="btn btn-success btn-lg">Arsip Dinas Dan Produk Hukum Kantor</a>
            </div>
            <div class="col-md-4" align="center">
              <a href="arsip/index.php.php" class="btn btn-success btn-lg">Arsip LPK (Voucher Jaminan) </a>
            </div>
            <div class="col-md-4" align="center">
              <a href="arsip/index.php" class="btn btn-success btn-lg">Arsip LPK(Voucher Umum)</a>
            </div>
            <div class="col-md-4" align="center">
              <a href="tampil_data_bukan_penerima_upah.php" class="btn btn-success btn-lg">Arsip Kepesertaan Bukan Penerima Upah</a>
            </div>
            <div class="col-md-4" align="center">
              <a href="tampil_data_penerima_upah.php" class="btn btn-success btn-lg">Arsip Kepesertaan Penerima Upah</a>
            </div>
            <div class="col-md-4" align="center">
              <a href="arsip/index.php" class="btn btn-success btn-lg">Arsip Kepesertaan Jasa Kontruksi</a>        
           </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "footer.php"?>
  <script type="text/javascript" src="js/script.js"></script>
  <script>
    $(document).ready(function(){setTimeout(function(){$("#pesan").fadeIn('slow');}, 500);});
    setTimeout(function(){$("#pesan").fadeOut('slow');}, 3000);
  </script>
</body>
</html>
<?php };?>