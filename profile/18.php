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
    <style>

    </style>
</head>

<body onload="gender()">
    <?php 
session_start();
if($_SESSION['status']!="login"){
	header("location:../index.php?msg=warning");
}

include '../koneksi.php';
$email=$_SESSION['email'];
$id_game=$_GET['id'];
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
                                    <a href="news.php" style="text-decoration: none;">
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
                                    <table>
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
                                                <input type="submit" value="Logout" onclick="signOut();"
                                                    class="btn btn-sm input-btn w100">
                                                <button onclick="signOut();">Out
                                                </button>
                                                <button onclick="myFunction();">Out
                                                </button>
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
                        <div class="col-md-12">
                                <h2>Inilah Daftar Game PC dengan Penawaran Terbaik di Steam Summer Sale</h2>
                                <p class="lead"><img width="500" height="500" src="../assets/img/photo/n.jpg"
                                        class="img-fluid" /><br>
                                        Buat kamu yang ingin mencari daftar game baru dengan harga murah, 
                                        berikut adalah daftar game PC dengan penawaran terbaik di Steam Summer 
                                        Sale Event yang paling ditunggu para Gamer, yaitu Steam Summer Sale 
                                        memang sudah dimulai. Ratusan hingga ribuan game bisa kamu dapatkan 
                                        di event yang satu ini. Maulai dari game lawas hingga terbaru bisa kamu 
                                        dapatkan. Buat kamu yang masih bingung ingin membeli game apa saja, berikut adalah daftar game PC dengan penawaran terbaik di Steam Summer Sale.

                                    <img width="500" height="500" src="../assets/img/photo/66.jpg"class="img-fluid" /><br>
                                    <img width="500" height="500" src="../assets/img/photo/ne.jpg"
                                        class="img-fluid" /><br>
                                        1.	Dragon Ball FighterZ , Rp147.000 (memiliki harga normal sebesar Rp590.000)<br>
                                        2.	Secret of Mana, Rp242.000 (memiliki harga normal sebesar Rp485.000)<br>
                                        3.	Shadow of the Tomb Raider, Rp272.000 (memiliki harga normal sebesar Rp680.000)<br>
                                        4.	Tropico 6, Rp167.999 (memiliki harga normal sebesar Rp209.999)<br>
                                        5.	Monster Hunter: World, Rp249.999 (memiliki harga normal sebesar Rp499.999)<br>
                                        6.	Hitman 2, Rp275.600 (memiliki harga normal sebesar Rp689.000)<br>
                                        7.	Dark Souls III, Rp146.750 (memiliki harga normal sebesar Rp587.000)<br>
                                        8.	Just Cause 4, Rp272.000 (memiliki harga normal sebesar Rp680.000)<br>
                                        9.	Tom Clancy's Rainbow Six Siege, Rp114.500 (memiliki harga normal sebesar Rp229.000)<br>
                                        10.	Stardew Valley, Rp92.799 (memiliki harga normal sebesar Rp115.999)<br>
                                        11.	Ark: Survival Evolved, Rp73.499 (memiliki harga normal sebesar Rp209.999)<br>
                                        12.	Celeste, Rp81.599 (memiliki harga normal sebesar Rp135.999)<br>
                                        13.	Total War: Three Kingdoms, Rp383.399 (memiliki harga normal sebesar Rp425.999)<br>
                                        14.	Rage 2, Rp535.330 (memiliki harga normal sebesar Rp799.000)<br>
                                        15.	Divinity: Original Sin 2, Rp201.599 (memiliki harga normal sebesar Rp335.999)<br>
                                        16.	Resident Evil 2 Remake, Rp329.999 (memiliki harga normal sebesar Rp499.999)<br>
                                        17.	Far Cry: New Dawn, Rp259.500 (memiliki harga normal sebesar Rp519.000)<br>
                                        18.	Sekiro: Shadows Die Twice, Rp583.200 (memiliki harga normal sebesar Rp729.000)<br>
                                        19.	Kingdom Come: Deliverance, Rp83.999 (memiliki harga normal sebesar Rp139.999)<br>
                                        20.	Devil May Cry 5, Rp329.999 (memiliki harga normal sebesar Rp499.999)<br>
                                        21.	Assassin's Creed Odyssey, Rp344.500 (memiliki harga normal sebesar Rp689.000)<br>
                                        22.	Soulcalibur VI, Rp181.500 (memiliki harga normal sebesar Rp550.000)<br>
                                        23.	Astroneer, Rp127.499 (memiliki harga normal sebesar Rp169.999)<br>

                                        Nah itulah 24 daftar game PC dengan penawaran terbaik yang bisa kamu beli. 
                                        Buat kamu yang ingin mencari informasi menarik seputar game-game lainnya, 
                                        bisa langsung follow akun media sosial Dunia Games sekarang juga
                                    
                    




                                </p>
                            </div>
                        </div>
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
                            <div>CPU nilai: </div>
                            <div id="v-cpu">-</div>
                            <div>VGA nilai: </div>
                            <div id="v-vga">-</div>
                            <div>RAM nilai: </div>
                            <div id="v-ram">-</div>
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
    u_cpu = (u_cpu / r_cpu * 100) * (96 / 100);
    var u_cpu = u_cpu.toFixed(2);
    document.getElementById("v-cpu").innerHTML = u_cpu;

    var u_vga = "<?php echo $u_idvga; ?>";
    var r_vga = "<?php echo $r_idvga; ?>";
    u_vga = u_vga / r_vga * 100 * (95 / 100);
    var u_vga = u_vga.toFixed(2);
    document.getElementById("v-vga").innerHTML = u_vga;

    var u_ram = "<?php echo $u_idram; ?>";
    var r_ram = "<?php echo $r_idram; ?>";
    u_ram = u_ram / r_ram * 100 * (97 / 100);
    var u_ram = u_ram.toFixed(2);
    document.getElementById("v-ram").innerHTML = u_ram;
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