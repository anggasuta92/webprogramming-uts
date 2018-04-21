<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <?php include("./template/title.php"); ?>

  <!-- CSS  -->
  <link href="./asset/materialize/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="./asset/fontawesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <style>
    #slideshow {
    margin: 0px auto;
    position: relative;
    width: 100%;
    height: 300px;
    padding: 0px;
    }

    #slideshow > div {
    position: absolute;
    top: 10px;
    left: 10px;
    right: 10px;
    bottom: 10px;
    }
  </style>
<body>

    <?php include("./template/navbar.php"); ?>


    <div class="container">
        <div class="section">
            <div class="row">
                <div id="slideshow">
                    <div>
                        <img class="" src="./images/header_bank.jpg" width="100%" height="300">
                    </div>
                    <div>
                        <img class="" src="./images/header_bank_2.jpg" width="100%" height="300">
                    </div>
                    <div>
                    <img class="" src="./images/header_bank_3.jpg" width="100%" height="300">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6">
                    <div class="icon-block">
                        <h2 class="center light-blue-text"><i class="material-icons"><i class="fa fa-suitcase"></i>Tabungan</i></h2>
                        <h5 class="center">Aman dan Menguntungkan</h5>
                        <p class="light">
                            Kami menerima tabungan anda, suku bunga tinggi dan keamanan investasi anda terjamin karena kami telah resmi terdaftar pada Otoritas Jasa Keuangan (OJK). Selain itu tabungan anda telah diasuransikan ketika menjadi nasabah kami.
                            <a href="./tabungan.php"><b>Selengkapnya...</b></a>
                        </p>
                    </div>
                </div>
                
                <div class="col s12 m6">
                    <div class="icon-block">
                        <h2 class="center light-blue-text"><i class="material-icons"><i class="fa fa-bank"></i>Pinjaman</i></h2>
                        <h5 class="center">Proses cepat dan angsuran ringan</h5>
                        <p class="light">
                            Anda membutuhkan dana? kami solusinya. Kami memberikan layanan pendanaan dengan suku bunga rendah dan bervariatif. Syarat mudah dan proses cepat merupakan layanan terbaik kami.
                            <a href="./pinjaman.php"><b>Selengkapnya...</b></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include("./template/footer.php"); ?>
  <!--  Scripts-->
  <script src="asset/jquery-2.2.3.min.js"></script>
  <script src="asset/materialize/js/materialize.js"></script>

  <script>
        $("#slideshow > div:gt(0)").hide();

        setInterval(function() {
        $('#slideshow > div:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#slideshow');
        }, 3000);
  </script>

  </body>
</html>
