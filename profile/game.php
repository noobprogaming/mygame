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

<body onload="compare()">
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
                                                    <img src="<?php echo $u_pp; ?>" alt="Tidak ada foto"
                                                        class="img-profile">
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
                    <li class="nav-item mini">
                        <form action="logout.php" method="post">
                            <div class="px-3 py-1" style="width: 15rem">
                                <?php
                                                if($_SESSION['google'] != "true"){
                                                    echo "<input type='submit' value='Logout' class='btn btn-sm input-btn w100'>";
                                                }else{
                                                    echo "<div onclick='keluar()' class='g-signin2'>Logout</div>";
                                                }
                                                ?>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="row">
        <div class="mx-5 my-5">
            <p class="gg" style="font-size: 30px;">
                GAME GENRE
            </p>
            <div class="col-lg-12 mx-auto my-5">
                <div class="row">
                    <div class="col-lg-8 px-0 py-0">
                        <img class="img-fluid" src="../assets/img/1.jpg">
                    </div>
                    <div class="col-lg-4 px-0 py-0">
                        <img class="img-fluid" src="../assets/img/2.jpg">
                        <img class="img-fluid" src="../assets/img/3.jpg">
                    </div>
                </div>
            </div>

            <div class="container-fluid px-5 ">

                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-7 order-md-2">
                                <h2>Review Deus Ex : Mabkind Divided Semakin Semakin sempurna</h2>
                                Dengan begitu banyak usaha untuk melebur beragam genre di dalam satu
                                    ruang yang sama,
                                    memang sulit untuk membedakan mana yang sejatinya sebuah game RPG, mana game action,
                                    dan mana sebuah platfomer murni.
                                </p>
                                <div class="artikel">Baca Selanjutnya</div>
                            </div>
                            <div class="col-md-5 order-md-1">
                                <img style="width: 100%"src="../assets/img/photo/deus.jpg" class="img-fluid" />
                            </div>
                        </div>

                        <hr class="my-5">

                        <div class="row">
                            <div class="col-md-7 order-md-2">
                            <h2>Review Metro Exodus: Arah Baru Mengagumkan!</h2>
                                Pembicaraan terkait nama Metro Exodus, terutama untuk versi PC, memang
                                    lebih banyak didominasi soal kebijakan publishing aneh yang diambil oleh Koch Media
                                    dan Deep Silver.
                                    Bahwa alih-alih memanfaatkan user masif Steam yang sudah menempuh angka ratusan
                                    juta,
                                    mereka lebih memilih untuk “mengunci” deal eksklusivitas dengan Epic Games Store
                                    yang memang menjanjikan bagi hasil yang lebih
                                    menguntungkan.</p>
                                <div class="artikel">Baca Selanjutnya</div>
                            </div>
                            <div class="col-md-5 order-md-1">
                            <img style="width: 100%"src="../assets/img/photo/MET.jpg" class="img-fluid" />
                            </div>
                        </div>

                        <hr class="my-5">

                        <div class="row">
                            <div class="col-md-7 order-md-2">
                            <h2>Review Anthem: Frostbite Engine di Game Open-World </h2>
                                Seperti game berbasis Frostbite yang lain, Anthem terlihat indah.
                                    Gamer mana yang belum pernah mendengar nama Frostbite Engine sebelumnya? Engine
                                    racikan DICE tersebut kini
                                    memang menjadi basis untuk hampir semua game yang diracik oleh EA, terlepas dari
                                    genre apapun yang mereka usung. </p>
                                <div class="artikel">Baca Selanjutnya</div>
                            </div>
                            <div class="col-md-5 order-md-1">
                            <img style="width: 100%"src="../assets/img/photo/8.jpg" class="img-fluid" />
                            </div>
                        </div>

                        <hr class="my-5">
                    </div>

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
                        <div class="col-lg-12">
                            <table>
                                <tr>
                                <hr>
                                    <td><?php echo $namegame; ?></td>
                                </tr>
                                <tr>
                                    <td><hr></td>
                                </tr>
                                <tr>
                                    <td>Minimum Specification:</td>
                                </tr>
                                <tr>
                                    <td><?php echo $m_ncpu; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $m_nvga; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $m_nram; ?></td>
                                </tr>
                                <tr>
                                    <td><hr></td>
                                </tr>
                                <tr>
                                    <td>Recomended Specification:</td>
                                </tr>
                                <tr>
                                    <td><?php echo $r_ncpu; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $r_nvga; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $r_nram; ?></td>
                                </tr>
                            </table>
                                                        <hr>
                            <table>
                                <tr>
                                    <td colspan="3">Spesifikasi PC Anda:</td>
                                </tr>
                                <tr>
                                    <td>CPU</td>
                                    <td style="float: right"><i class="fa fa-star"></i></td>
                                    <td style="width: 10px"><div id="v-cpu">-</div></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><?php echo $u_cpu; ?></td>
                                </tr>
                                <tr>
                                <td>VGA</td>
                                    <td style="float: right"><i class="fa fa-star"></i></td>
                                    <td style="width: 10px"><div id="v-vga">-</div></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><?php echo $u_vga; ?></td>
                                </tr>
                                <tr>
                                <td>RAM</td>
                                    <td style="float: right"><i class="fa fa-star"></i></td>
                                    <td style="width: 10px"><div id="v-ram">-</div></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><?php echo $u_ram; ?></td>
                                </tr>
                            </table>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
<script>
function compare() {
    var u_cpu = "<?php echo $u_idcpu; ?>";
    var r_cpu = "<?php echo $r_idcpu; ?>";
    u_cpu = (u_cpu / r_cpu * 100) * (96 / 100) * 0.81;
    var u_cpu = u_cpu.toFixed(2);
    document.getElementById("v-cpu").innerHTML = u_cpu;

    var u_vga = "<?php echo $u_idvga; ?>";
    var r_vga = "<?php echo $r_idvga; ?>";
    u_vga = u_vga / r_vga * 100 * (95 / 100) * 1.03;
    var u_vga = u_vga.toFixed(2);
    document.getElementById("v-vga").innerHTML = u_vga;

    var u_ram = "<?php echo $u_idram; ?>";
    var r_ram = "<?php echo $r_idram; ?>";
    u_ram = u_ram / r_ram * 100 * (97 / 100) * 0.89;
    var u_ram = u_ram.toFixed(2);
    document.getElementById("v-ram").innerHTML = u_ram;

    var u_ssd = "<?php echo $u_idssd; ?>";
    var r_storage = "<?php echo $r_storage; ?>";
    u_ssd = u_ssd / r_storage * 100 * (95 / 99) * 0.01 + 4.99;
    var u_ssd = u_ssd.toFixed(2);
    document.getElementById("v-ssd").innerHTML = u_ssd;

    var u_hdd = "<?php echo $u_idhdd; ?>";
    var r_storage = "<?php echo $r_storage; ?>";
    u_hdd = u_hdd / r_storage * 100 * (90 / 99) * 0.001 - 49.46;
    var u_hdd = u_hdd.toFixed(2);
    document.getElementById("v-hdd").innerHTML = u_hdd;
}
</script>
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