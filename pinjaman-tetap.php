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
                            <i class="fa fa-angle-double-right"></i>
                            <a href="" class=""><b>Simulasi Suku Bunga Tetap</b></a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="row">
                <form class="col s12" method="post" action="">
                    <div class="row">
                        <div class="input-field col s4">
                            <input placeholder="ex. 5,000,000" id="first_name" type="text" class="validate">
                            <label for="txt_plafon">Plafon Pinjaman</label>
                        </div>
                        <div class="input-field col s4">
                            <input placeholder="ex. 12" id="first_name" type="text" class="validate">
                            <label for="txt_jangka_waktu">Jangka Waktu (dalam bulan)</label>
                        </div>
                        <div class="input-field col s4">
                            <input placeholder="ex. 1.6" id="first_name" type="text" class="validate">
                            <label for="txt_bunga">Suku Bunga</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light" type="submit" name="action">
                                <i class="fa fa-paper-plane"> Hitung</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col s12 m12" align="center">
                    <b>
                        BUNGA TETAP<br>
                        Plafon : 1,000,000 - Jangka Waktu : 12 Bulan<br/>
                        Suku Bunga : 18% pa.
                    </b>
                </div>
            </div>

            <div class="row">
                <table>
                    <thead>
                        <tr>
                            <th width="12%">Bulan</th>
                            <th width="22%">Angsuran Pokok</th>
                            <th width="22%">Angsuran Bunga</th>
                            <th width="22%">Total Angsuran</th>
                            <th width="22%">Sisa</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php for($i=0; $i<=12; $i++){ ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td>1,000,000</td>
                            <td>1,000,000</td>
                            <td>1,000,000</td>
                            <td>1,000,000</td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<?php include("./template/footer.php"); ?>
  <!--  Scripts-->
  <script src="asset/jquery-2.2.3.min.js"></script>
  <script src="asset/materialize/js/materialize.js"></script>

  </body>
</html>
