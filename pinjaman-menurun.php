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
                            <a href="" class=""><b>Simulasi Suku Bunga Menurun / Efektif</b></a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="row">
                <form class="col s12" method="post" action="">
                    <div class="row">
                        <div class="input-field col s4">
                            <input name="txt_plafon" placeholder="ex. 5,000,000" id="plafon" type="text" class="validate" required>
                            <label for="txt_plafon">Plafon Pinjaman</label>
                        </div>
                        <div class="input-field col s4">
                            <input name="txt_jangka_waktu" placeholder="ex. 12" id="jangka_waktu" type="text" class="validate" required>
                            <label for="txt_jangka_waktu">Jangka Waktu (dalam bulan)</label>
                        </div>
                        <div class="input-field col s4">
                            <input name="txt_bunga" placeholder="ex. 1.6" id="bunga" type="text" class="validate" required>
                            <label for="txt_bunga">Suku Bunga per Tahun</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light" type="submit" name="btn_submit">
                                <i class="fa fa-paper-plane"> Hitung</i>
                            </button>
                            <a href="./pinjaman-tetap.php" class="btn waves-effect waves-light"><i class="fa fa-close"> Reset</i></a>
                        </div>
                    </div>
                </form>
            </div>

<?php
    if(isset($_POST['txt_plafon'])){
        $plafon = htmlspecialchars($_POST['txt_plafon']);
        $jangka_waktu = htmlspecialchars($_POST['txt_jangka_waktu']);
        $bunga_tahun = htmlspecialchars($_POST['txt_bunga']);

        if($plafon!=0 && $jangka_waktu!=0 && $bunga_tahun!=0){
            $angsuran = $plafon / $jangka_waktu;
        
?>
            <div class="row">
                <div class="col s12 m12" align="center">
                    <b>
                        SIMULASI ANGSURAN KREDIT<br>
                        BUNGA MENURUN /EFEKTIF<br>
                        Plafon Kredit : <?php echo number_format($plafon,2); ?> - Jangka Waktu : <?php echo $jangka_waktu; ?> Bulan<br/>
                        Suku Bunga : <?php echo $bunga_tahun; ?>% pa.
                    </b>
                </div>
            </div>

            <div class="row">
                <table class="centered">
                    <thead>
                        <tr>
                            <th width="12%">Angsuran ke</th>
                            <th width="22%">Angsuran Pokok</th>
                            <th width="22%">Angsuran Bunga</th>
                            <th width="22%">Total Angsuran</th>
                            <th width="22%">Sisa</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php $saldo = $plafon; ?>
                    <?php for($i=0; $i<=$jangka_waktu; $i++){ ?>
                    <?php
                        if($i>0){
                            $saldo = $saldo - $angsuran;
                            $bunga_angsuran = $saldo * $bunga_tahun / 100 / 12;
                        }
                    ?>
                        <tr>
                            <td align="center"><?php echo $i; ?></td>
                            <td align="right"><?php echo $i==0 ? "":number_format($angsuran,2) ?></td>
                            <td align="right"><?php echo $i==0 ? "":number_format($bunga_angsuran,2) ?></td>
                            <td align="right"><?php echo $i==0 ? "":number_format(($angsuran+$bunga_angsuran),2) ?></td>
                            <td align="right"><?php echo number_format($saldo,2) ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>

<?php
        }
    }
?>


        </div>
    </div>


<?php include("./template/footer.php"); ?>
  <!--  Scripts-->
  <script src="asset/checkinput.js"></script>
  <script src="asset/jquery-2.2.3.min.js"></script>
  <script src="asset/materialize/js/materialize.js"></script>

  </body>
</html>
