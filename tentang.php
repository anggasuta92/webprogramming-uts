<?php
    session_start();

    $komens = array(
        "Peter"=>"Selamat dan sukses untuk Bank KU!", 
        "Ben"=>"Kredit saya cepat cair. Terima kasih Bank KU!", 
        "Joe"=>"Saya akhirnya bisa nyicil rumah berkat pinjaman dari Bank KU!. Sukses!!!"
    );
    
    if(!isset($_SESSION['kom'])){
        $_SESSION['kom'] = $komens;
    }

    if(isset($_POST['txt_nama'])){
        $nama = $_POST["txt_nama"];
        $komentar = $_POST["txt_komen"];
        //$komens[$nama] = $komentar;
        $_SESSION['kom'][$nama] = $komentar;
    }
?>

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
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                        <img src="images/cs.jpg">
                        <span class="card-title" style="color:black;">Tentang Kami</span>
                        <a href="mailto:cs@example.com" class="btn-floating halfway-fab waves-effect waves-light red"><i class="fa fa-mail-reply-all"></i></a>
                        </div>
                        <div class="card-content">
                            Bank KU! Bank KU! merupakan salah satu Bank Perkreditan Rakyat milik swasta yang berdiri dari tahun 1980 yang didirikan oleh beberapa orang yang sudah sangat berpengalaman dalam bidang perbankan. Dengan mengedepankan mutu dan kualitas layanan kepada seluruh nasabah.<br/>
                            Alamat : Jalan santai dipagi hari.<br/>
                            Telepon : 0361 111888<br/>
                            Email : <a href="mailto:cs@example.com">cs@example.com</a>
                        <p>

                        </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m8">
                    <form method="post" action="">
                        <ul class="collection with-header">
                            <li class="collection-header"><h4>Silahkan tinggalkan pesan</h4></li>
                            <li class="collection-item">
                            <?php
                                if(isset($_SESSION['kom'])) $komens =$_SESSION['kom'];
                                foreach($komens as $pengirim => $pesan){
                            ?>
                                <div class="row">
                                    <div clas="col s12 m4"><b><?php echo $pengirim; ?></b></div>
                                    <div clas="col s12 m8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--><?php echo $pesan; ?></div>
                                </div>
                            <?php
                                }
                            ?>
                            </li>

                            <li class="collection-item">
                                <div class="row">
                                    <div class="input-field col s8">
                                        <input name="txt_nama" placeholder="Nama anda" id="nama" type="text" class="validate" required>
                                        <label for="txt_nama">Nama :</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea name="txt_komen" placeholder="Komentar anda" id="komen" class="materialize-textarea" cols="50" rows="4" required></textarea>
                                        <label for="komen">Komentar : </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s4">
                                        <button class="btn waves-effect waves-light" type="submit" name="btn_submit">
                                            <i class="fa fa-paper-plane"> Posting</i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </form>
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
