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
                                        dapatkan. Buat kamu yang masih bingung ingin membeli game apa saja, 
                                        berikut adalah daftar game PC dengan penawaran terbaik di Steam Summer Sale.

                                    <img width="500" height="500" src="../assets/img/photo/66.jpg"class="img-fluid" /><br>
                                    <img width="500" height="500" src="../assets/img/photo/ne.jpg"
                                        class="img-fluid" /><br>
                                        1.	Dragon Ball FighterZ , Rp147.000 (memiliki harga normal sebesar Rp590.000)
                                        2.	Secret of Mana, Rp242.000 (memiliki harga normal sebesar Rp485.000)
                                        3.	Shadow of the Tomb Raider, Rp272.000 (memiliki harga normal sebesar Rp680.000)
                                        4.	Tropico 6, Rp167.999 (memiliki harga normal sebesar Rp209.999)
                                        5.	Monster Hunter: World, Rp249.999 (memiliki harga normal sebesar Rp499.999)
                                        6.	Hitman 2, Rp275.600 (memiliki harga normal sebesar Rp689.000)
                                        7.	Dark Souls III, Rp146.750 (memiliki harga normal sebesar Rp587.000)
                                        8.	Just Cause 4, Rp272.000 (memiliki harga normal sebesar Rp680.000)
                                        9.	Tom Clancy's Rainbow Six Siege, Rp114.500 (memiliki harga normal sebesar Rp229.000)
                                        10.	Stardew Valley, Rp92.799 (memiliki harga normal sebesar Rp115.999)
                                        11.	Ark: Survival Evolved, Rp73.499 (memiliki harga normal sebesar Rp209.999)
                                        12.	Celeste, Rp81.599 (memiliki harga normal sebesar Rp135.999)
                                        13.	Total War: Three Kingdoms, Rp383.399 (memiliki harga normal sebesar Rp425.999)
                                        14.	Rage 2, Rp535.330 (memiliki harga normal sebesar Rp799.000)
                                        15.	Divinity: Original Sin 2, Rp201.599 (memiliki harga normal sebesar Rp335.999)
                                        16.	Resident Evil 2 Remake, Rp329.999 (memiliki harga normal sebesar Rp499.999)
                                        17.	Far Cry: New Dawn, Rp259.500 (memiliki harga normal sebesar Rp519.000)
                                        18.	Sekiro: Shadows Die Twice, Rp583.200 (memiliki harga normal sebesar Rp729.000)
                                        19.	Kingdom Come: Deliverance, Rp83.999 (memiliki harga normal sebesar Rp139.999)
                                        20.	Devil May Cry 5, Rp329.999 (memiliki harga normal sebesar Rp499.999)
                                        21.	Assassin's Creed Odyssey, Rp344.500 (memiliki harga normal sebesar Rp689.000)
                                        22.	Soulcalibur VI, Rp181.500 (memiliki harga normal sebesar Rp550.000)
                                        23.	Astroneer, Rp127.499 (memiliki harga normal sebesar Rp169.999)

                                        Nah itulah 24 daftar game PC dengan penawaran terbaik yang bisa kamu beli. 
                                        Buat kamu yang ingin mencari informasi menarik seputar game-game lainnya, 
                                        bisa langsung follow akun media sosial Dunia Games sekarang juga
                                    
                                    <h2>Siapkan Ruang Penyimpanan di PS4 Kalian Karena Cyberpunk 2077 Memakan Tempat yang Cukup Besar!</h2>
                                    <img width="500" height="500" src="../assets/img/photo/1.jpg"
                                        class="img-fluid" /><br>
                                        Coba tebak kira-kira berapa besar ruang penyimpanan minimum yang dibutuhkan 
                                        untuk memainkan Cyberpunk 2077?
                                        Setelah mengetahui tanggal rilis game garapan CD Projekt Red ini, yaitu 
                                        pada tanggal 16 April 2020, fan semakin tak sabar untuk bisa melompat 
                                        ke Night City dan nongkrong bareng si ganteng Keanu Reeves. Berdasarkan 
                                        informasi dari Playstation Store, kemungkinan besar Cyberpunk 2077 akan
                                        membutuhkan ruang penyimpanan yang tidak kecil. 
                                        
                                        Dilansir dari comicbook.com, ruang penyimpanan minimum yang dibutuhkan 
                                        untuk bisa memainkan game ini adalah 80GB. Walaupun total memory itu bukan 
                                        ukuran tertinggi seperti pada Red Dead Redemption 2 yang bisa mencapai 100GB, 
                                        itu adalah jumlah yang cukup besar. Dan ada kemungkinan juga kalau ukurannya 
                                        akan lebih dari itu.

                                        <img width="500" height="500" src="../assets/img/photo/22.jpg"
                                        class="img-fluid" /><br>

                                        Masih belum diketahui apakah pada versi PC dan Xbox One ukurannya akan sama 
                                        atau tidak, namun nampaknya tak akan berbeda jauh dari itu. Dengan game 
                                        sedetail itu, wajar saja jika ukurannya mencapai 80GB. Bagaimanapun, kita 
                                        harus menunggu sampai gamenya benar-benar rilis sampai mengetahui ukuran 
                                        yang sesungguhnya. Hapus game-game yang sekiranya sudah tak diperlukan 
                                        agar kalian bisa menikmati suasana kota di malam hari bersama Keanu Reeves!
                                        
                                        Sumber: comicbook.com

                                    <h2>Bandai Namco Umumkan Digimon Story: Cyber Sleuth Segera Hadir di PC Via Steam</h2>
                                    <img width="500" height="500" src="../assets/img/photo/33.jpg"
                                        class="img-fluid" /><br>
                                        Lebih dulu rilis dikonsol 4 tahun lalu, akhirnya Digimon Story: Cyber 
                                        Sleuth juga segera rilis di PC.
                                        Setelah 4 tahun lebih dulu muncul dikonsol, akhirnya Bandai Namco mengumumkan 
                                        Digimon Story: Cyber Sleuth juga akan segera hadir di PC dan Nintendo Switch 
                                        dalam versi Complete Edition.
                                        Digimon Story: Cyber Sleuth Complete Edition sendiri adalah kompilasi dari 
                                        dua game, yaitu Digimon Story: Cyber Sleuth dan Digimon Story: Cyber 
                                        Sleuth-Hacker's Memory. Cerita dari kedua game Digimon inipun saling berhubungan, 
                                        yaitu ketika dunia nyata dan dunia digital saling bersinggungan. 
                                        Digimon Story: Cyber Sleuth akan menjadi alur cerita utama, sedangkan Hacker's Memory menjadi pelengkapnya.

                                    <img width="500" height="500" src="../assets/img/photo/44.jpg"
                                        class="img-fluid" /><br>
                                        Dari segi gameplay, Digimon Story: Cyber Sleuth Complete Edition masih menerapkan 
                                        turn-based dan tidak akan memiliki perbedaan. Dalam game tersebut, kalian dapat 
                                        merasakan 300 jenis Digimon yang bisa digunakan pada kedua game tersebut.
                                        Rencananya, Digimon Story: Cyber Sleuth Complete Edition akan segera rilis untuk 
                                        PC dan Switch pada tanggal 18 Oktober 2019. Berikut ini adalah cuplikan trailer 
                                        yang bisa kalian saksikan.
                                        Ikuti terus DuniaGames.co.id untuk informasi menarik seputar game lainnya ya.

                                    <h2>Bocoran Sebut Red Dead Redemption 2 Juga Segera Meluncur untuk PC</h2>`
                                    <img width="500" height="500" src="../assets/img/photo/55.jpg"
                                        class="img-fluid" /><br>

                                        Tidak lagi eksklusif dikonsol, Red Dead Redemption 2 dikabarkan juga akan hadir untuk PC.
                                        Red Dead Redemption 2 merupakan game bertema kehidupan koboi buatan Rockstar Games. 
                                        Setelah lebih dulu meluncur dikonsol PlayStation 4 dan Xbox One, kini RDR2 digosipkan 
                                        juga akan segera menuju PC.
                                        Mengutip VG247.com, seorang bernama @JakoMako51 mengklaim telah menemukan petunjuk 
                                        tentang adanya Red Dead Redemption 2 di PC.
                                        Melalui akun Twitternya @JakoMako51, ia menjelaskan jika petunjuk tersebut berupa 
                                        'source code' di situs Rockstar Social Club. Petunjuk ini berisi referensi 
                                        'RDR2_PC_Accomplishments' yang menunjukkan jika Red Redemption 2 versi PC memang ada.
                                    
                                    <img width="500" height="500" src="../assets/img/photo/6.jpg"
                                        class="img-fluid" /><br>
                                        Ini bukan satu-satunya petunjuk mengenai keberadaan RDR2 2 versi PC. Program 
                                        di dalam aplikasi companion app buat Rockstar juga mencantumkan referensi RDR 2 
                                        versi PC. Belum lagi halaman Linkedin salah satu developer juga mencantumkan bukti 
                                        yang seakan menunjukkan keberadaan RDR2 versi PC, di mana ia menulis jika ia ikut 
                                        terlibat dalam pembuatan RDR2 untuk versi konsol dan juga PC. 
                                        Bagaimana menurut kalian nih gaes, apakah Rockstar Games akan mencari keuntungan 
                                        lebih dengan merilis Red Dead Redemption 2 di PC? Ikuti terus DuniaGames.co.id 
                                        untuk informasi menarik seputar game lainnya ya




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