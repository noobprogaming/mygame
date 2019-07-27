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

<body onload="compare()">
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
                ANTHEM
            </p>
            <div class="col-lg-12 mx-auto my-5">
                <div class="row">
                    <div class="col-lg-8 px-0 py-0">
                        <img class="img-fluid" src="../assets/img/photo/7.jpg">
                    </div>
                    <div class="col-lg-4 px-0 py-0">
                        <img class="img-fluid" src="../assets/img/photo/8.jpg">
                        <img class="img-fluid" src="../assets/img/photo/5.jpg">
                    </div>
                </div>
            </div>

            <div class="container-fluid px-5 ">

                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-12" style ="text-align: justify; text-justify: inter-word;">
                                <h2>Review Anthem: Seperti Istana Pasir!</h2>
                                <img style="width: 100%"src="../assets/img/photo/anth1.jpg"
                                        class="img-fluid" /><br>
                                        Seperti tidak ada alasan untuk tidak menantikan rilisnya, ini mungkin kalimat yang tepat untuk menjelaskan Anthem – game action RPG melebur loot shooter yang lahir dari tangan dingin Bioware dan EA. Ia sempat menyabet penghargaan sebagai game action yang paling diantipasi di beberapa event gaming raksasa selama tahun 2018. Ia juga ditangani oleh Bioware Edmonton – developer dari seri trilogi Mass Effect dan bukannya Bioware Montreal yang kini sudah pecah dan melebur setelah kasus Mass Effect Andromeda. Ia juga dibangun dengan Frostbite Engine, salah satu engine paling memesona secara visual dan optimal terutama di PC. Dengan semua kombinasi yang ia suntikkan, mustahil rasanya untuk tidak menunggu kehadiran Anthem dan apa yang hendak ia tawarkan.<br><br>
                                        Terlepas dari fakta bahwa dengan Frostbite Engine ia berhasil terlihat memesona dari segi visual dengan kekuatan cerita khas Bioware yang tetap menarik, game ini terasa seperti sebuah “proyek pembelajaran” bagi Bioware untuk meracik sebuah game loot shooter yang memesona. Berita buruknya? Alih-alih belajar dari Blizzard dengan Diablo 3 dan Bungie dengan Destiny, ia justru menyimpan masalah yang sempat terjadi dengan kemunculan perdana game-game tersebut. Lebih buruknya lagi? Beragam masalah teknis seperti bug dan loading time juga mengacaukan sensasi bermain yang seharusnya, menyenangkan.<br><br>
                                        Lantas, apa yang sebenarnya ditawarkan oleh Anthem? Mengapa kami menyebutnya seperti sebuah game yang mirip dengan istana pasir? Review ini akan membahasnya lebih dalam untuk Anda.<br><br>
                                        <h2>Plot</h2>
                                    <img style="width: 100%"src="../assets/img/photo/anth2.jpg"
                                        class="img-fluid" /><br>
                                        Anthem mengambil setting di sebuah dunia misterius dimana sebuah ras bernama Shapers sempat menempatinya. Ras super misterius ini punya satu teknologi mumpuni yang disebut sebagai Anthem of Creation yang kekuatannya begitu besar hingga sulit Anda bayangkan. Lewatnya, Shapers membentuk dunia yang mereka inginkan, menciptakan tumbuhan, binatang, menentukan cuaca, hingga meracik portal. Namun sayangnya, Shapers menghilang sebelum mereka “menyelesaikan” dunia Anthem itu sembari dan meninggalkan teknologi mumpuni mereka yang seiring waktu, tumbuh menjadi artifak.
                                        Seperti yang bisa diprediksi, teknologi super kuat ini menjadi fokus cerita. Salah satu artifak bernama “Cenotaph” yang diyakini akan menjadi pintu untuk mengendalikan Anthem of Creation akhirnya mendorong sebuah faksi manusia militan bernama “Dominion” menyerang kota para Javelins – Freemark. Hampir berhasil menguasainya namun berujung katastropik karena cara penanganan yang salah, Cenotaph tersebut meledak dan menghancurkan Freemark itu sendiri. Tidak hanya itu saja, kejadian ini juga melahirkan sebuah mata badai bernama “Heart of Rage” yang tidak tertembus. Momen itu banyak pilot Javelins yang berujung tewas.
                                    <img style="width: 100%"src="../assets/img/photo/anth3.jpg"
                                        class="img-fluid" /><br>
                                        Diserang oleh faksi manusia militan “Dominion” yang berambisi untuk menguasai teknologi bernama Cenotaph, sebuah event katastropik lahir.
                                    <img style="width: 100%"src="../assets/img/photo/anth4.jpg"
                                        class="img-fluid" /><br>
                                        Faksi ini dipimpin oleh seorang pilot Javelin sekaligus Cypher bernama – The Monitor.
                                        Faksi ini dipimpin oleh seorang pilot Javelin sekaligus Cypher bernama – The Monitor.
                                        Berusaha menembus “Heart of Rage” dan mematikan Cenotaph di dalamnya kini menjadi fokus para Javelins yang berhasil bertahan hidup setelah apa yang terjadi di Freemark. Seperti yang bisa diprediksi, Anda merupakan salah satu pilot Javelin tersebut dengan Owen yang berperan sebagai pendamping misi Anda, seorang Cypher yang menerjemahkan data-data lewat kedekatan mereka dengan Anthem of Creation itu sendiri. Namun seperti yang bisa diprediksi, perjalanan tersebut tidaklah mudah. Dominion tetap memperlihatkan ketertarikan pada Cenotaph, sembari bertahan di bawah kepimpinan baru The Monitor, seorang pilot Javelin sekaligus seorang Cypher. Pertempuran pun tidak terhindarkan.<br>
                                    <img style="width: 100%"src="../assets/img/photo/anth5.jpg"
                                        class="img-fluid" /><br>
                                        Menembus badai Heart of Rage dan mematikan Cenotaph adalah misi utama Anda!
                                    <img style="width: 100%"src="../assets/img/photo/anth6.jpg"
                                        class="img-fluid" /><br>
                                        Tantangan seperti apa yang harus Anda hadapi?
                                        Lantas, mampukah karakter Anda menembus Heart of Rage dan mematikan Cenotaph tersebut? Tantangan seperti apa yang harus ia hadapi? Apa yang menunggunya di balik mata badai yang tak tertembus tersebut? Semua jawaban dari pertanyaan tersebut bisa Anda dapatkan dengan memainkan Anthem itu sendiri.

                                    <img style="width: 100%"src="../assets/img/photo/anth7.jpg"
                                        class="img-fluid" /><br>
                                    
                                        Seperti game berbasis Frostbite yang lain, Anthem terlihat indah.
                                        Gamer mana yang belum pernah mendengar nama Frostbite Engine sebelumnya? Engine racikan DICE tersebut kini memang menjadi basis untuk hampir semua game yang diracik oleh EA, terlepas dari genre apapun yang mereka usung. Kita berbicara dari Battlefield V hingga FIFA 19. Namun untuk pertama kalinya Frostbite Engine dijadikan sebagai basis untuk membangun game open-world, sebuah game dengan wilayah luar biasa luas yang harus diakui, memang tidak pernah difokuskan oleh EA sebelumnya. Dan kini, Bioware Edmonton lah yang punya tanggung jawab untuk membuktikan bahwa fleksibiltas Frostbite memang tidak perlu lagi diragukan.


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
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="../assets/custom.js"></script>
<script src="../assets/search.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
</html>