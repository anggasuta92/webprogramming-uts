<?php
    $mn0 = "";
    $mn1 = "";
    $mn2 = "";
    $mn3 = "";
    if(isset($_GET['mn'])){
        switch($_GET['mn']){
            case 1:
                $mn1 = "active";
                break;
            case 2:
                $mn2 = "active";
                break;
            case 3:
                $mn3 = "active";
                break;
            default:
                $mn0 = "active"; 
                break;
        }
    }else{
        $mn0 = "active"; 
    }
?>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="./">Bank KRoot</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li class="<?php echo $mn0; ?>"><a href="./">Home</a></li>
        <li class="<?php echo $mn1; ?>"><a href="./tabungan.php?mn=1">Tabungan</a></li>
        <li class="<?php echo $mn2; ?>"><a href="./pinjaman.php?mn=2">Pinjaman</a></li>
        <li class="<?php echo $mn3; ?>"><a href="./tentang.php?mn=3">Tentang Kami</a></li>
    </ul>
    </div>
</nav>