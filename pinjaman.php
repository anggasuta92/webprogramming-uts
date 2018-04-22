<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <?php include("./template/title.php"); ?>

  <!-- CSS  -->
  <link href="./asset/materialize/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="./asset/fontawesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<body>

    <?php include("./template/navbar.php"); ?>


    <div class="container">
        <div class="section">
            <div class="row">
                <nav>
                    <div class="nav-wrapper">
                        <div class="col s12">
                            <a href="#!" class=""><i class="fa fa-book"></i> <b>Pinjaman</b></a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="col s12 m12">
                    <div class="card-panel teal">
                        <span class="white-text">
                            <b>Syarat dalam pengajuan kredit</b><br/>
                            Mengisi formulir aplikasi. Fotokopi identitas diri (KTP, SIM, atau paspor). Fotokopi akta nikah (bagi yang sudah menikah).
                            Fotokopi kartu keluarga (KK). Fotokopi buku tabungan beberapa bulan terakhir.
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m4">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text" style="height:280px;">
                            <span class="card-title"><i class="fa fa-chevron-circle-right"></i> Bunga Tetap</span>
                            <p align="justify">
                            Kami menyediakan layanan pinjaman dengan suku bunga tetap <b>0,8%</b> per bulan. Bunga tetap adalah cicilan bunga dan cicilan pokoknya setiap bulannya sama. Cicilan anda tidak akan berubah sampai jatuh tempo pinjaman.
                            </p>
                        </div>
                        <div class="card-action">
                            <a href="./pinjaman-tetap.php"><i class="fa fa-check-square-o"></i> Simulasi</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text" style="height:280px;">
                            <span class="card-title"><i class="fa fa-chevron-circle-right"></i> Bunga Menurun</span>
                            <p align="justify">
                                Kami menyediakan layanan pinjaman dengan suku bunga menurun <b>1,5%</b> per bulan. Bunga menurun adalah perhitungan suku bunga yang nominalnya semakin kecil tiap periodenya.
                            </p>
                        </div>
                        <div class="card-action">
                            <a href="./pinjaman-menurun.php"><i class="fa fa-check-square-o"></i> Simulasi</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text" style="height:280px;">
                            <span class="card-title"><i class="fa fa-chevron-circle-right"></i> Anuitas</span>
                            <p align="justify">
                            Kami menyediakan layanan pinjaman dengan suku bunga anuitas <b>1,2%</b> per bulan. Bunga anuitas adalah modifikasi dari perhitungan kredit bunga efektif. Modifikasi ini dilakukan untuk mempermudah nasabah dalam membayar per bulannya, karena angsuran tiap bulannya sama.
                            </p>
                        </div>
                        <div class="card-action">
                            <a href="#"><i class="fa fa-check-square-o"></i> Simulasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include("./template/footer.php"); ?>
  <!--  Scripts-->
  <script src="asset/jquery-2.2.3.min.js"></script>
  <script src="asset/materialize/js/materialize.js"></script>

  </body>
</html>
