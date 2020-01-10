      <header>
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-7">
              <ul class="contact-details">
                <li><a href="#"><i class="fa fa-map-marker"></i> Jl. HR. Soebrantas No. 8A-B, Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau</a>
                </li>
                <li><a href="#"><i class="fa fa-phone"></i> (0761)61707</a>
                </li>
              </ul>
            </div>
            <div class="col-md-3">
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-default navbar-top" role="navigation" data-spy="affix" data-offset-top="50">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="../index.php">
              <img alt="" src="../gambar/bpjs.jpg" width="100px">
            </a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="../index.php">Home</a>
              </li>
              <li>
                <a href="tampil_data.php">Data View</a>
              </li>
              <li>
                <a href="index.php">Tambah</a>
              </li>
              <li>
                <a href=""><i class="fa fa-user"></i></a>
                <ul class="dropdown">
                  <li>
                    <a href="profil.php"><strong><?php echo $_SESSION['nama_pegawai'];?></strong></a>
                  </li>
                  <li>
                    <a href="ganti_password.php">Ganti password</a> 
                  </li>
                </ul> 
              </li>
              <li>
                <a href="log_out.php"><i class="fa fa-sign-out"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <ul class="wpb-mobile-menu">
          <li>
            <a class="active" href="index.php">Home</a>
          </li>
          <li>
            <li>
                <a href=""><img alt="img" class="img-circle" src="<?php echo $_SESSION['foto'];?>"></a>
                <ul class="dropdown">
                  <li><strong><?php echo $_SESSION['nama_pegawai'];?></strong></li>
                  <li>
                    <a href="ganti_password.php">Ganti password</a> 
                  </li>
                  <li>
                    <a href="log_out.php">Keluar</a>
                  </li> 
              </li>
          </li>
        </ul>
      </div>
    </header>