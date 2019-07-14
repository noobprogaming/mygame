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
                            <input type="text" autocomplete="off" placeholder="Cari . . " />
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
                            <h2>Preview Far Cry New Dawn: Kiamat Artistik!</h2>
                                <p class="lead"><img width="500" height="500" src="../assets/img/photo/far.jpg" class="img-fluid" /><br>
                                Hampir sebagian besar gamer yang mengenal dengan baik franchise Far Cry sepertinya sudah mengetahui strategi rutin
                                yang selalu ditawarkan oleh Ubisoft untuknya. Bahwa di sela-sela seri utama yang dilepas secara berkala, mereka
                                selalu menghadirkan satu seri spin-off yang punya tema yang unik. Kita sempat bertemu dengan Blood Dragon yang
                                mengingatkan Anda pada film-film sci-fi di era tahun 80-an hingga Primal yang mengambil tema pra-sejarah. Untuk
                                tahun 2019 ini, Ubisoft mempersiapkan Far Cry New Dawn yang juga dilepas di awal tahun. Namun berbeda dengan
                                seri sebelumnya yang tidak punya keterkaitan cerita, New Dawn hadir sebagai sekuel langsung dari event yang
                                terjadi di Far Cry 5. Setelah menunggu cukup lama, kesempatan untuk menjajalnya secara langsung akhirnya tiba!<br>
                                <h2>Kesan Pertama</h2>
                                <img width="500" height="500" src="../assets/img/photo/cry.jpg" class="img-fluid"/>><br>
                                Far Cry New Dawn bukanlah game post-apocalyptic. Ia sepertinya lebih tepat disebut sebagai game post post-apocalyptic,
                                dimana dunia sudah berbenah dan membaik setelah apa yang terjadi di akhir Far Cry 5 yang lalu. Manusia kembali
                                berusaha membangun peradaban lewat komunitas-komunitas kecil yang kini mulai membangun sistem ekonomi lewat 
                                sistem barter.<br>
                                Kemampuan dan kebutuhan untuk berburu dan mengembangkan senjata untuk bertahan hidup melalui proses crafting
                                menjadi kunci, yang juga mengharuskan Anda mengumpulkan ragam resource dari peradaban sebelumnya. Kondisi
                                seperti ini membuat setting Hope County milik Far Cry New Dawn berujung begitu cerah dan penuh warna
                                dibandingkan game bertema serupa yang lain. Bunga warna-warni dan binatang-binatang dengan bulu cerah 
                                yang melalui proses mutasi akan “menyambut” setiap aksi eksplorasi yang Anda lewati. Yang menarik? 
                                Highwaymen yang notabene merupakan klan antagonis yang Anda lawan juga secara mengejutkan punya sisi
                                artistik mereka sendiri yang disajikan lewat seni mural penuh warna cerah yang bisa Anda temukan di
                                beragam sudut area. Ini membuat dunia Far Cry New Dawn tidak terasa mengancam sama sekali.
                                <img width="500" height="500" src="../assets/img/photo/new.jpg" class="img-fluid"/>><br>
                                Penelusuran menemukan sebuah kereta api aktif yang sempat memuat tawanan dari luar kota Moscow di dalamnya.
                                Dalam misi ekspedisinya bersama dengan sang istri – Anna, Artyom tiba-tiba menemukan sebuah kereta api yang 
                                berjalan aktif melintasi rel. Bersama dengannya adalah para tawanan yang mengaku bahwa mereka semua datang 
                                dari luar Moscow. Pertempuran besar melawan kelompok penawan ternyata membuka fakta bahwa satu-satunya alasan 
                                Moscow begitu “sunyi” dari interfensi sinyal luar bukan karena tidak adanya lagi kehidupan di luar sana, 
                                tetapi karena pelacak sinyal yang pada akhirnya berhasil dihancurkan oleh Artyom. Bersama dengannya, mereka 
                                juga berhasil mengamankan sang kereta api yang mereka beri nama “Aurora”.Pasukan Spartans yang sempat 
                                diperintahkan untuk mengamankan kembali Aurora dan menahan Artyom serta Anna kini menjadi salah satu kelompok 
                                baru yang matanya terbuka. Setelah memikirkan matang langkah mereka selanjutnya, kesemuanya setuju bahwa langkah
                                logis terbaik yang bisa mereka tempuh saat ini adalah dengan membawa Aurora ke wilayah yang lain, mencari 
                                mereka yang berhasil selamat. Apalagi sinyal radio yang mereka terima juga memberi sinyal bahwa  setidaknya ada
                                satu lokasi militer yang sepertinya selamat. Sebuah tempat bernama Moscow Defense Command sepertinya masih 
                                aktif dan meminta mereka yang berhasil selamat untuk berkumpul dan berkoordinasi di sana. Tidak perlu menunggu
                                lama hingga para kru berupaya bergerak ke sana, lengkap dengan semua tantangan yang ada. Misi utamanya tentu 
                                saja, mencari “rumah baru” untuk Artyom, Anna, dan para Spartans yang percaya pada mereka.

                                Misi untuk mencari sebuah rumah baru pun dimulai.


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
                    <li class="text-white">TEXT-JUDUL</li>
                    <li>
                        <a href="#">
                            ABC
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            DEF
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            GHI
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 p5rem text-white">
                <ul class="fo-ul">
                    <li class="text-white">TEXT-JUDUL</li>
                    <li>
                        <a href="#">
                            ABC
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            DEF
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            GHI
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