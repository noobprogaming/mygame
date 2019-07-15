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
                                                <input type="submit" value="Logout" onclick="signOut();"
                                                    class="btn btn-sm input-btn w100">
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
                GTA V
            </p>
            <div class="col-lg-12 mx-auto my-5">
                <div class="row">
                    <div class="col-lg-8 px-0 py-0">
                        <img class="img-fluid" src="../assets/img/photo/gtadep2.jpg">
                    </div>
                    <div class="col-lg-4 px-0 py-0">
                        <img class="img-fluid" src="../assets/img/photo/gtadep1.jpg">
                        <img class="img-fluid" src="../assets/img/photo/gtadep3.jpg">
                    </div>
                </div>
            </div>

            <div class="container-fluid px-5 ">

                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-12">
                            <h2>Review GTA V (PC): Versi Paling Sempurna!</h2>
                                <p class="lead"><img width="500" height="500" src="../assets/img/photo/gta1.jpg" class="img-fluid" /><br>
                                Sebuah skenario yang tidak pernah kami pikirkan sebenarnya, bahwa kami, dengan tanpa rasa berkeberatan, 
                                rela menggelontorkan dana ekstra untuk membeli game yang sama tiga kali, di tiga platform yang berbeda. 
                                Menarik, karena di sisi lain, kerelaan kami juga menjadi semacam bukti bahwa Rockstar telah mengeksekusi 
                                sebuah strategi marketing yang luar biasa. Di Playstation 3, kami menyebutnya sebagai game open world 
                                terbaik karena impresi gameplay yang fantastis. Sebuah dunia yang terbuka dengan segudang aktivitas, 
                                dari perspektif tiga karakter dengan kepribadian yang unik, bersama dengan dukungan GTA Online – yang 
                                bisa disimpulkan, sebagai fitur impian para pecinta GTA selama ini. Namun siapa yang menyangka, GTA V 
                                versi Playstation 3 ternyata bukanlah yang terakhir.<br>Mata gamer mana yang tidak tergoda setelah Rockstar 
                                memastikan sebuah proses Remaster GTA V untuk konsol platform generasi terbaru – Playstation 4 dan Xbox 
                                One. Ia tidak menawarkan ekstra konten di sisi cerita yang menggoda, namun dukungan fitur unik, membuat 
                                versi ini kembali sulit ditolak. GTA V versi Playstation 4 yang kami cicipi menghadirkan Los Santos yang 
                                lebih indah, lewat kepadatan dan variasi beragam elemen pendukung – seperti NPC, tanaman, dan hewan di 
                                tekstur lebih tinggi. Tidak hanya itu saja, dukungan sudut pandang baru ala FPS memungkinkan gamer untuk 
                                mencicipi game yang sama, namun dengan pengalaman yang berbeda. Semua momen ikoniknya terasa lebih 
                                personal ketika dicicipi dari sudut pandang orang pertama.<br>Namun resolusi kami untuk menjadikan Playstation 
                                4 sebagai versi terakhir yang kami cicipi, apalagi didukung dengan betapa tidak masuk akalnya sebuah 
                                skenario dimana kami harus menggelontorkan uang untuk tiga game sama yang tidak punya konten ekstra 
                                apapun seolah hancur berantakan setelah versi PC ini akhirnya tiba di pasaran. Rockstar menyebutnya 
                                sebagai versi yang terbaik, sebuah versi bagaimana seharusnya GTA V dinikmati. Resolusi lebih tinggi, 
                                framerate lebih baik, hingga dukunga fitur eksklusif membuatnya kembali terlihat menggoda.Lantas, apa 
                                yang sebenarnya ditawarkan oleh GTA V Versi PC ini? Mengapa kami menyebutnya sebagai versi yang paling sempurna?<br>
                                <h2>Optimalisasi Mumpuni</h2>
                                <img width="500" height="500" src="../assets/img/photo/gta2.jpg" class="img-fluid"/><br>
                                <p class="lead">
                                “Mohon maaf, kami butuh waktu ekstra untuk memastikan kualitas sesuai dengan standar yang kami inginkan”, 
                                Anda sudah pasti pernah mendengar alasan klise yang boleh terbilang, selalu meluncur bersama dengan 
                                pengumuman penundaan rilis ini. Rockstar sempat melemparkan kalimat yang sama dua kali, setelah GTA V 
                                PC diundur dari akhir Januari, menuju ke Maret, yang tanggal rilisnya kemudian dipindahkan kembli ke 
                                14 April 2015 kemarin.Alasan seperti ini memang terdengar begitu “manis”, sebuah pembelaan yang bisa 
                                dimengerti apalagi melihat banyak game yang terburu-buru berakhir menjadi produk bencana yang sulit 
                                untuk dinikmati. Berita baik untuk Anda – semua gamer PC yang sudah lama menantikan game ini? Rockstar 
                                tidak mengumbar omong kosong.<br>Rockstar berhasil  menghadirkan optimalisasi yang luar biasa dan pantas 
                                untuk diacungi jempol di GTA V versi PC ini. Salah satu bukti yang paling kuat mengakar pada segudang 
                                opsi grafis yang disematkan untuk membantu gamer yang berangkat dari varian kemampuan rig untuk 
                                beradaptasi dengan mesin gaming mereka. Semua detail ditawarkan, bahkan hingga kesempatan untuk mengatur 
                                seberapa padat NPC yang akan Anda temui di Los Santos dan seberapa bervariasinya bentuk mereka. Anda 
                                yang punya PC dengan kemampuan di ambang batas, bisa mengurangi elemen-elemen yang menurut Anda pribadi, 
                                memang tidak akan berkontribusi signifikan pada pengalaman bermain yang Anda dapatkan. Jika ada satu 
                                kata yang bisa disimpulkan untuk mendefinisikan kerja keras Rockstar di GTA V PC, maka tidak ada kata 
                                lain yang lebih tepat selain kata: NIAT!</p><br><br>
                                <img width="500" height="500" src="../assets/img/photo/gta3.jpg" class="img-fluid"/><br>
                                Segudang opsi grafis yang bisa Anda tweak. Rockstar mendefinisikan ulang sebuah game “port” yang niat. <br><br>
                                <img width="500" height="500" src="../assets/img/photo/gta4.jpg" class="img-fluid"/><br>
                                Dukungan DX10 yang dipertahankan membuat banyak rig lawas tetap relevan dan bisa diandalkan untuk memainkan game ini.<br><br>
                                <img width="500" height="500" src="../assets/img/photo/det.jpg" class="img-fluid"/><br> 
                                <p class="lead">
                                Dan detail..<br><br>
                                Lantas, seberapa hebatnya optimalisasi ini? Kami sendiri memang masih belum bisa berbicara banyak saat ini, namun pengujian awal yang dilakukan oleh kru JagatReview membuktikan bahwa ia bisa berjalan dalam kualitas visual yang lebih baik dari versi Playstation 3, dengan sebuah PC yang dibangun dengan teknologi tujuh tahun yang lalu. Benar sekali, Anda tidak salah membaca kalimat kami sebelumnya. Komponen PC berumur tujuh tahun masih bisa menikmati game ini dengan pengalaman bermain yang cukup mumpuni. Dukungan DirectX10 adalah keputusan terbaik yang bisa dilakukan Rockstar, membuat game ini terasa begitu “terjangkau”, bahkan untuk gamer yang sudah angkat tangan bisa mampu menikmati game-game teranyar.</p>

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