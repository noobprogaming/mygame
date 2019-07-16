<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id"
        content="562498474090-rmhpeunoatnlg7lv8b9buije5n0n2r9t.apps.googleusercontent.com">

    <title>Punyakita</title>
    <link rel="icon" type="image/png" href="../assets/img/lg.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="../assets/custom.css">
</head>

<body onload="time()">
    <?php 
session_start();
if($_SESSION['status']!="login"){
	header("location:../index.php?msg=warning");
}

include '../koneksi.php';
$email=$_SESSION['email'];
$id_game=1;
include '../sql.php';
?>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top px-5">
            <img src="../assets/img/lg.png" class="logo logo-small">
            <a class="navbar-brand text-shadow mx-3" href="index.php">Punyakita</a>
            <button class="btn-menu" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="compare.php">Compare</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link">PC</a>
                        <div class="dropdown-menu dropdown-content black-soft box-shadow"
                            aria-labelledby="navbarDropdown">
                            <div class="px-3 py-1" style="color: rgb(255, 255, 255);">
                                <ul style="list-style: none; width: 170px;">
                                    <a style="text-decoration: none;">
                                        <li class="dd my-3">News</li>
                                    </a>
                                    <a href="genre.php" style="text-decoration: none;">
                                        <li class="dd my-3">Game</li>
                                    </a>
                                    <a href="peripheral.php" style="text-decoration: none;">
                                        <li class="dd my-3">Periferal</li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="search-box">
                            <input type="text" autocomplete="off" placeholder="Cari Game . . " />
                            <div class="result"></div>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="profile.php"><i class="fa fa-user"> </i> <?php echo $u_id; ?></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-content black-soft box-shadow"
                            aria-labelledby="navbarDropdown">
                            <form action="logout.php" method="post">
                                <div class="px-3 py-1" style="width: 15rem">
                                    <table align="center">
                                        <tr>
                                            <td>
                                                <a href="profile.php">
                                                    <img src="<?php echo $u_pp; ?>"
                                                        alt="Tidak ada foto" class="img-profile">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.php" style="text-decoration: none;">
                                                    <p class="fg-white"><?php echo $u_name; ?></p>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php
                                                if($_SESSION['google'] != "true"){
                                                    echo "<input type='submit' value='Logout' class='btn btn-sm input-btn w100'>";
                                                }else{
                                                    echo "<div onclick='keluar()' class='g-signin2'>Logout</div>";
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    </table>  
                                </div>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="#">
                    <img class="img-fluid" src="../assets/img/peripheral/1.jpg" style="position: relative;">
                    <div class="container ">
                        <div class="carousel-caption text-left">
                            <h1>LOGITECH G433 7.1 SURROUND GAMING HEADSET</h1>
                            <p>Gamer membutuhkan kinerja audio yang mendalam dan untuk alasan yang baik karena setiap 
                            judul baru membawa desain suara yang lebih besar. G433 mengemas kinerja audio yang luar biasa ke dalam 
                            desain yang sangat ringan, tahan lama, dan nyaman.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="#">
                    <img class="img-fluid" src="../assets/img/peripheral/2.jpg">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>RAZER BLACKWIDOW CHROMA V2</h1>
                            <p>BlackWidow Chroma V2 adalah keyboard gaming mekanis terbaik di dunia dan semuanya pantas untuk judulnya. 
                            Keyboard andalannya memiliki tiga variasi sakelar mekanis, tombol makro, dan kenyamanan terbaik untuk permainan selama berjam-jam.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="#">
                    <img class="img-fluid" src="../assets/img/peripheral/3.jpg">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>GEFORCE RTX 2080 Ti</h1>
                            <p>Kartu grafis andalan terbaru NVIDIA adalah revolusi dalam realisme dan kinerja game. Arsitektur NVIDIA Turing ™ GPU yang kuat, 
                            teknologi terobosan, dan memori GDDR6 ultra-cepat generasi terbaru, menjadikannya GPU gaming terbaik di dunia.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="fa fa-backward fg-red" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="fa fa-forward fg-red" aria-hidden="true"></span>
        </a>
    </div>

    <div class="container-fluid px-5 ">
        <div class="row">
            <div class="col-lg-3 bright">
                <a href="#" style="text-decoration: none;">
                    <div>
                        <img width="100%" height="140" src="../assets/img/peripheral/case.jpg" class="img-fluid" />
                        <div class="card-body">
                            <h3 class="text-center">CASE</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 bright">
                <a href="#" style="text-decoration: none;">
                    <div>
                        <img width="100%" height="140" src="../assets/img/peripheral/mouse.jpg" class="img-fluid" />
                        <div class="card-body">
                            <h3 class="text-center">MOUSE</h3>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-lg-3 bright">
                <a href="#" style="text-decoration: none;">
                    <div>
                        <img width="100%" height="140" src="../assets/img/peripheral/monitor.jpg" class="img-fluid" />
                        <div class="card-body">
                            <h3 class="text-center">MONITOR</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 bright">
                <a href="#" style="text-decoration: none;">
                    <div>
                        <img width="72%" height="140" src="../assets/img/peripheral/headset.jpg" class="img-fluid" />
                        <div class="card-body">
                            <h3 class="text-center">HEADSET</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <hr class="my-5">

        <div class="row">
                                <div class="col-md-3">
                                <h4>Artikel</h4>
                                <hr>
                                <p class="artikel">Spesifikasi PC untuk Man of Medan</p>
                                <hr>
                                <p class="artikel">Spesifikasi PC untuk Code Vein</p>
                                <hr>
                                <p class="artikel">Kingdom Under Fire II Tetap Hidup, 
                                Versi PC Tuju Barat Tahun Ini</p>
                                <hr>
                                <p class="artikel">Menjajal DEMO Pamali: Horror Indonesia Potensial!</p>
                                <hr>
                                <p class="artikel">Microsoft akan Hadirkan Login Windows 10 Tanpa Password</p>
                                <hr>
                                <p class="artikel">Review Cuphead: Kartun untuk Kaum Masokis!</p>
                                <hr>
                                <p class="artikel">Review Frostpunk: Semua Demi Sebuah Kehangatan!</p>
                                <hr>
                                <p class="artikel">Review Doki Doki Literature Club: Jangan Baca, Main Saja Dulu!L</p>
                                <hr>
                                <p class="artikel">Review Outlast 2: Tidak Lebih Baik!</p>
                                <hr>
                        </div>
            <div class="col-md-6">
                <div>
                    <img width="500" height="500" src="../assets/img/1.jpg" class="img-fluid" />
                    <h2>First heading. <span class="text-muted">It’ll blow your
                            mind.</span></h2>
                    <p class="lead">Review Doki Doki Literature Club: Jangan Baca, Main Saja Dulu!</p>
                </div>
            </div>
            <div class="col-md-3">
            <img width="100" height="100" src="../assets/img/1.jpg" class="img-fluid" />
                <p>Review Doki: Doki Literature Club</p>
                <hr>
                <img width="100" height="100" src="../assets/img/2.jpg" class="img-fluid" />
                <p>Menjajal DEMO Pamali: Horror Indonesia Potensial!</p>
                <hr>
                <img width="100" height="100" src="../assets/img/3.jpg" class="img-fluid" />
                <p>Review Outlast 2: Tidak Lebih Baik!</p>
                <hr>
                <img width="100" height="100" src="../assets/img/fin.jpg" class="img-fluid" />
                <p>Review Frostpunk: Semua Demi Sebuah Kehangatan!</p>
                <hr>
                <img width="100" height="100" src="../assets/img/fina.jpg" class="img-fluid" />
                <p>Review Cuphead: Kartun untuk Kaum Masokis!</p>
                <hr>
            </div>
        </div>

        <hr class="my-5">

        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-7">
                        <h2>First heading. <span class="text-muted">It’ll blow
                                your
                                mind.</span></h2>
                        <p class="lead">Pembicaraan terkait nama Metro Exodus, terutama untuk versi PC, memang lebih banyak
                        didominasi soal
                        kebijakan publishing</p>
                    </div>
                    <div class="col-md-5">
                        <img width="500" height="500" src="../assets/img/1.jpg" class="img-fluid" />
                    </div>
                </div>

                <hr class="my-5">

                <div class="row">
                    <div class="col-md-7 order-md-2">
                        <h2>Berita tentang<span class="text-muted">Metro Exodus</span></h2>
                        <p class="lead">Pembicaraan terkait nama Metro Exodus, terutama untuk versi PC, memang lebih banyak
                        didominasi soal
                        kebijakan publishing</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img width="500" height="500" src="../assets/img/1.jpg" class="img-fluid" />
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="row">
                    <a href="#" style="text-decoration: none;">
                        <div class="card mb-3 shadow">
                            <div class="card-body">
                                <p class="card-text">Review Frostpunk: Semua Demi Sebuah Kehangatan!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="row">
                    <a href="#" style="text-decoration: none;">
                        <div class="card mb-3 shadow">
                            <div class="card-body">
                                <p class="card-text">Review Frostpunk: Semua Demi Sebuah Kehangatan!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="row">
                    <a href="#" style="text-decoration: none;">
                        <div class="card mb-3 shadow">
                            <div class="card-body">
                                <p class="card-text">Review Frostpunk: Semua Demi Sebuah Kehangatan!</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>



        </div>

        <hr class="my-5">

    </div>


    <footer class="page-footer text-center black-soft">
        <div class="row" style="margin-right: 0!important;">
            <div class="col-md-4 p5rem" style="height: 300px;">
                <div class="row">
                    <img src="../assets/img/lg.png" class="logo logo-big">
                </div>
                <div class="row my-3">
                    <div class="sosmed mx-1 my-1">
                        <i class="fa fa-facebook fa-lg"></i>
                    </div>
                    <div class="sosmed mx-1 my-1">
                        <i class="fa fa-twitter fa-lg"></i>
                    </div>
                    <div class="sosmed mx-1 my-1">
                        <i class="fa fa-instagram fa-lg"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p5rem text-white">
                <ul class="fo-ul">
                    <li class="text-white">Artikel</li>
                    <li>
                        <a href>
                            NEWS
                        </a>
                    </li>
                    <li>
                        <a href>
                            GAME
                        </a>
                    </li>
                    <li>
                        <a href>
                            PERIPHERAL
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 p5rem text-white">
                <ul class="fo-ul">
                    <li class="text-white">Artikel</li>
                    <li>
                        <a href>
                            NEWS
                        </a>
                    </li>
                    <li>
                        <a href>
                            GAME
                        </a>
                    </li>
                    <li>
                        <a href>
                            PERIPHERAL
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="red" style="height: 1px;">
        </div>
        <div class="pb-4 black text-white" style="height: 50px; padding-top: 10px;">
            <p> © 2019 Tech </p>
        </div>
    </footer>

</body>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="../assets/custom.js"></script>
<script src="../assets/search.js"></script>
<script src="../assets/logout.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
</html>