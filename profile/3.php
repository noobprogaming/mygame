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
                </ul>
            </div>
        </nav>
    </header>

    <div class="row">
        <div class="mx-5 my-5">
            <p class="gg" style="font-size: 30px;">
                The Witcher 3
            </p>
            <div class="col-lg-12 mx-auto my-5">
                <div class="row">
                    <div class="col-lg-8 px-0 py-0">
                        <img class="img-fluid" src="../assets/img/photo/wit1.jpg">
                    </div>
                    <div class="col-lg-4 px-0 py-0">
                        <img class="img-fluid" src="../assets/img/photo/wit2.png">
                        <img class="img-fluid" src="../assets/img/photo/wit3.jpg">
                    </div>
                </div>
            </div>

            <div class="container-fluid px-5 ">

                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-12">
                            <h2>Review The Witcher 3: Pengalaman RPG Tanpa Banding!</h2>
                            <p class="lead"><img width="500" height="500" src="../assets/img/photo/cher1.jpg" class="img-fluid" />><br>
                                Sebuah perasaan lega yang mungkin tidak akan dipahami oleh mereka yang awam, inilah yang mungkin 
                                dirasakan oleh sebagian besar gamer dengan The Witcher 3: Wild Hunt saat ini. Bagaimana tidak? 
                                Menjadi salah satu game RPG yang paling diantisipasi sejak tahun 2014 silam, ia terus memperlihatkan 
                                daya tarik yang sulit untuk diabaikan begitu saja. Sebuah game open-world RPG dengan segudang quest, 
                                tingkat kesulitan tinggi, visual yang indah, dan beragam monster dengan desain keren untuk diburu. 
                                CD Projekt Red memang terlihat ambisius dan tidak setengah-setengah, ini memastikan bahwa ini merupakan 
                                proyek game terbaik yang pernah mereka ciptakan. Sebuah ambisi yang harus diakui, terbayarkan dengan 
                                sangat manis. <br>Anda yang sempat membaca preview kami sebelumnya tentu sudah mendapatkan sedikit gambaran 
                                soal daya tarik The Witcher 3: Wild Hunt sendiri. CD Projekt membangun sebuah dunia dengan atmosfer yang 
                                luar biasa, dipadukan dengan mekanisme gameplay yang kompleks, dan cerita solid yang dibangun sebagai 
                                pondasi. Kesan pertama yang ia munculkan akan membuat gamer pencinta genre ini jatuh hati sejak 
                                pandangan pertama. Bahkan cukup untuk menarik kelompok gamer yang menghindari RPG untuk setidaknya 
                                menjajal dan merasakan pengalaman seperti apa yang membuat hype game ini tidak lagi terbendung. Konten 
                                ratusan jam dengan voice acts dan plot yang dibangun serius menunggu untuk diselesaikan.<br>
                                Dari permukaan, The Witcher 3 adalah sebuah game RPG impian yang terlihat begitu sempurna. Lantas, 
                                bagaimana dengan keseluruhan pengalaman yang ia tawarkan? Mengapa kami menyebutnya sebagai sebuah 
                                game RPG tiada banding? Review ini akan membahasnya lebih dalam untuk Anda.<br></p>

                            <h2>Plot</h2>
                            <p class="lead">
                            <img width="500" height="500" src="../assets/img/photo/cher2.jpg" class="img-fluid"/><br>
                                The Witcher 3 kembali membawa Anda pada sosok Geralt yang kini harus berkutat dengan konflik pribadinya.<br><br>
                                Melanjutkan kisah dari The Witcher 2 dengan dunia yang mulai berubah sejak aksinya yang terakhir, 
                                Geralt of Rivia – sang Witcher yang kisah perjalanannya mengalun lewat alunan musik para Bard dari 
                                seluruh penjuru The Continent – akhirnya memutuskan untuk mulai menyelesaikan konflik personalnya 
                                sendiri. Kembalinya ingatan yang sempat hilang membuat Geralt mengingat sosok wanita yang tak bisa 
                                ia lupakan begitu saja – Yennefer. Namun di atas semuanya, ia secara konsisten mendapatkan mimpi buruk 
                                soal datangnya Wild Hunt. Rombongan pasukan misterius dengan armor berwarna hitam, yang kedatangannya 
                                cukup untuk membekukan dan membunuh nafas hidup apapun yang berada di dekat mereka.<br>
                            <img width="500" height="500" src="../assets/img/photo/cher3.jpg" class="img-fluid"/><br>
                                Mimpinya terus mengarah pada sosok Ciri yang sudah menghilang cukup lama. Geralt bisa merasakan bahwa "anak 
                                angkat"nya bersama dengan Yennefer ini tengah dirudung bahaya.<br><br>
                            <img width="500" height="500" src="../assets/img/photo/cher4.jpg" class="img-fluid"/><br> 
                                Sumber ancaman tersebut muncul dari pasukan dengan armor berwarna hitam - Wild Hunt yang terus memburu Ciri. Kedatangan 
                                mereka selalu hadir dengan aura es yang membekukan semua makhluk hidup di sekitar mereka.<br> <br>
                                Terlepas dari kisah cinta mereka, Geralt sebagai seorang Witcher dan Yennefer sebagai seorang Sorceress tidak pernah bisa 
                                memiliki anak. Kekuatan besar yang mereka miliki berujung pada konsekuensi yang menyedihkan – bahwa mereka tidak subur. Namun 
                                kerinduan mereka untuk “membangun” keluarga bisa terobati lewat sosok Ciri. Seperti yang bisa diprediksi, 
                                cerita ini tidak berakhir bahagia. Ciri menghilang untuk waktu yang begitu lama dan sulit untuk ditemukan 
                                kembali. Kompleksitas masa lalu membuat Geralt yakin bahwa Ciri adalah target utama yang berusaha diburu oleh 
                                Wild Hunt. Baginya, tidak ada yang lebih penting, selain menemukan “anak” yang begitu ia sayangi ini.<br>
                            <img width="500" height="500" src="../assets/img/photo/cher5.jpg" class="img-fluid"/><br>
                                Semuanya harus dilakukan Geralt di tengah kondisi politik sosial yang juga tidak stabil. Invasi Nilfgaard dari 
                                selatan yang kian sukses, sikap Novigrad yang kian rasis hanyalah sedikit perubahan yang terjadi. <br><br>
                            <img width="500" height="500" src="../assets/img/photo/cher6.jpg" class="img-fluid"/><br>
                                Akankah Geralt bertemu dengan Ciri? Konflik seperti apa yang harus ia lalui untuk mencapai anak yang ia sayangi ini?<br> <br>
                            <img width="500" height="500" src="../assets/img/photo/wit3.jpg" class="img-fluid"/><br>
                                Perjalanan Geralt ini membuatnya melintasi Northern Kingdom yang posisinya terus terdesak karena invasi pasukan 
                                dari Selatan – Nilfgaard. Di tengah ketidakpastian politik dan kehidupan sosial yang kacau, penuh dengan prasangka 
                                rasis dan ketakutan akan monster-monster yang terus berkeliaran dan mengancam, Geralt menempuh “misi suci” personalnya ini.
                                Mampukah ia bertemu dengan Ciri di perjalanan ini? Ancaman seperti apa saja yang harus ia hadapi selama proses 
                                tersebut? Siapa pula Wild Hunt dan mengapa mereka begitu tertarik dengan sosok Ciri? Semua jawaban dari pertanyaan 
                                ini bisa Anda dapatkan dengan memainkan The Witcher 3: Wild Hunt ini!
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