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
                            <h2>Review Metro Exodus: Arah Baru Mengagumkan!</h2>
                                <p class="lead"><img width="500" height="500" src="../assets/img/photo/2.jpg" class="img-fluid" /><br>
                                Anda yang sudah membaca preview kami sebelumnya sepertinya sudah punya gambaran cukup jelas apa yang ditawarkan dengan 
                                4A Games untuk seri yang sebenarnya didasarkan pada novel Metro 2035 ini. Ada begitu banyak perubahan signifikan 
                                disuntikkan dan tentu saja penyempurnaan di sisi presentasi yang terlihat begitu fenomenal, terutama jika Anda 
                                menggunakan teknologi kartu grafis NVIDIA RTX dan menyalakan fitur Ray-Tracing yang ada. Namun perubahan paling signifikan 
                                yang paling kami sambut baik adalah kesempatan untuk menjelajahi dunia dan lore Metro yang seharusnya yang kali ini, tidak 
                                lagi “terkunci” pada terowongan-terowongan gelap. Kesemuanya dibungkus dalam konsep gameplay semi open-world yang kini 
                                memberikan Anda begitu banyak lokasi menarik untuk dijelajahi.Lantas, apa yang sebenarnya ditawarkan oleh Metro Exodus? 
                                Mengapa kami menyebutnya sebagai sebuah game dengan arah baru yang mengagumkan? Review ini akan membahasnya lebih dalam 
                                untuk Anda.<br>
                                <img width="500" height="500" src="../assets/img/photo/MET.jpg" class="img-fluid"/>><br>
                                Anda kembali berperan sebagai Artyom – yang mengikuti “Good Ending” di Last Light yang canon, hidup dan punya ambisi 
                                yang baru.Metro Exodus tentu saja diposisikan sebagai seri sekuel dari apa yang terjadi di Metro: Last Light. Jika 
                                Anda termasuk gamer yang mendapatkan bad ending di seri sebelumnya, sebuah seri sekuel tentu saja terdengar mustahil
                                mengingat sosok Artyom – sang karakter utama tewas di ending tersebut. Namun ending yang dihitung sebagai canon adalah
                                good ending, dimana Artyom berhasil selamat dari konflik seri sebelumnya dan kini kembali di Exodus untuk melanjutkan
                                petualangannya.Seperti nama yang ia usung, Exodus berfokus tidak lagi pada terowongan kereta bawah tanah Moscow yang
                                menjadi basis dunia untuk 2033 dan Last Light. Setelah apa yang terjadi di seri sebelumnya, Artyom menjadi sangat
                                terobsesi untuk membuktikan pada penduduk Moscow yang tinggal di Metro bahwa mereka bukan satu-satunya yang selamat
                                dari kiamat kecil yang terjadi. Bahwa ada komunitas di luar sana yang masih hidup, tumbuh, dan berkembang. Mimpi
                                tersebut terus ia kejar dengan terus mengeksplorasi dunia luar dan berupaya mencari bukti yang memang mendukung
                                teorinya tersebut. Hingga pada akhirnya, sebuah bukti yang ia butuhkan akhirnya tiba.
 
                                <img width="500" height="500" src="../assets/img/photo/troex.jpg" class="img-fluid"/>><br>
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