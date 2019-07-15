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
                PAMALI : INDONESIAN FOLKLORE HORROR
            </p>
            <div class="col-lg-12 mx-auto my-5">
                <div class="row">
                    <div class="col-lg-8 px-0 py-0">
                    <img class="img-fluid" src="../assets/img/photo/pamraw3.jpg">
                    </div>
                    <div class="col-lg-4 px-0 py-0">
                        <img class="img-fluid" src="../assets/img/photo/pamraw2.jpg">
                        <img class="img-fluid" src="../assets/img/photo/pamraw1.jpg">
                    </div>
                </div>
            </div>

            <div class="container-fluid px-5 ">

                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                        <div class="col-md-12">
                                <h2>Review PAMALI: Kreativitas dalam Ketakutan!</h2>
                                <p class="lead"><img width="500" height="500" src="../assets/img/photo/pam1.jpg"
                                        class="img-fluid" /><br>
                                        Hype terkait PAMALI memang sempat kuat ketika versi demo perdana yang keluar memperlihatkan konten
                                        potensial yang menjanjikan. Sang studio developer – StoryTale Studios punya visi dan misi yang
                                        jelas soal apa yang hendak mereka racik dan tema seperti apa yang hendak didorong. Namun kami
                                        sendiri termasuk gamer yang cukup pesimis dengan demo tersebut, terutama karena struktur cerita
                                        tidak jelas yang mengitari konsep “Pamali” – yang memang begitu kuat cita rasa kultural
                                        Indonesia-nya. Di sisi lain, ia juga hadir dengan tingkat cahaya yang begitu rendah hingga
                                        sulit menikmati atmosfer yang ada. Setelah menantikannya cukup lama, versi finalnya akhirnya
                                        tersedia. Sebagai game episodik yang rencananya akan menghadirkan 4 skenario berbeda dengan
                                        fokus pada makhluk halus yang juga berbeda-beda, proses review ini didasarkan pada skenario
                                        yang tersedia saat ia ditulis – yakni Skenario 1 – “The White Lady” yang difokuskan pada
                                        sosok Kuntilanak itu sendiri. Ia tentu saja tidak merepresentasikan kualitas 3 skenario
                                        sisa yang tentu saja, belum kami jajal sama sekali.Lantas, apa yang sebenarnya ditawarkan
                                        oleh PAMALI ini? Mengapa kami menyebutnya sebagai game yang menawarkan kreativitas dalam
                                        ketakutan? Review ini akan membahasnya lebih dalam untuk Anda.<br>
                                        <h2>Plot</h2>
                                    <img width="500" height="500" src="../assets/img/photo/pam2.jpg"
                                        class="img-fluid" /><br>
                                        Mengejutkan dan kreatif adalah dua kata yang akan kami pilih untuk menjelaskan plot yang
                                        ditawarkan oleh StoryTale Studios di skenario “The White Lady” PAMALI. Di versi demo, 
                                        ada sinyal bahwa Anda sekedar berperan sebagai anak muda yang kebetulan mendapatkan warisan
                                        rumah dari saudara perempuannya yang baru saja meninggal. Namun kedangkalan cerita tersebut 
                                        ternyata berujung menjadi sesuatu yang lebih di versi finalnya. PAMALI hadir dengan kisah 
                                        yang secara cerdas, rasional untuk menyatukan empat episode cerita yang ia persiapkan.Anda 
                                        ternyata berperan sebagai seorang developer game horror yang tengah sibuk meracik game 
                                        terbarunya. Di tengah kesibukan Anda merampungkannya, ada perintah dari atasan untuk melakukan 
                                        proses research soal cerita-cerita supranatural dari beragam pelosok untuk memastikan bahwa 
                                        game yang Anda racik merepresentasikan hal yang seharusnya. Salah satu dari cerita tersebut 
                                        melibatkan “White Lady” itu sendiri dan berujung menjadi kisah yang harus Anda selami dan 
                                        cermati. Pola cerita kreatif yang kini membuat format episodiknya menjadi sesuatu yang bisa 
                                        dicerna secara rasional. Sementara untuk skenario “The White Lady” itu sendiri, Anda berperan 
                                        sebagai seorang anak muda yang berusaha menjual rumah milik orang tuanya. Kotor dan cukup lama 
                                        ditinggalkan, Anda juga diharuskan untuk mengumpulkan berkas-berkas penting di dalamnya sekaligus 
                                        membantu membersihkannya agar terlihat menarik di mata para peminat. Namun seperti yang bisa 
                                        diprediksi, rumah ini bukanlah rumah sembarangan. Ada aura yang ketidaktenangan yang kental 
                                        di sini, dimana suara dan penampakan terjadi di beragam sudut. Lampu yang menyala sendiri, nomor 
                                        rumah yang menolak untuk ditegakkan, hingga beragam benda paranormal tersimpan di ragam sudut. 
                                        Aksi hendak menjual rumah ini berujung menjadi soal mempertahankan kewarasan.
                                    <br>
                                    <h2>META</h2>
                                    <img width="500" height="500" src="../assets/img/photo/pam3.jpg" class="img-fluid"/><br>
                                    Salah satu desain yang membuat kami jatuh hati dengan PAMALI adalah bagaimana ia berujung 
                                    meracik sebuah cerita yang tidak hanya cerdas saja untuk membuat presentasi empat skenario 
                                    tersebut sebagai sesuatu yang rasional, tetapi juga membangunnya sebagai sesuatu yang meta 
                                    di dalamnya. Berperan sebagai developer yang berusaha meracik sebuah game horror adalah keputusan 
                                    yang fantastis di mata kami. Perasaan meta yang Anda dapatkan membuat Anda merasa seolah tengah 
                                    berperan sebagai salah satu anggota tim developer StoryTale Studios itu sendiri, dan kami 
                                    menyukainya. Hal ini diperkuat dengan beragam email balasan yang masuk ke dalam komputer 
                                    Anda salah satu objek interaktif yang bisa Anda buka dalam permainan, semakin mendorong sensasi 
                                    tersebut. Email-email yang kebanyakan bercerita soal demo game horror terbaru sang developer 
                                    in-game tersebut juga terasa mewakili beragam komentar yang mungkin masuk ketika demo PAMALI 
                                    pertama kali beredar. Mengambil kacamata seorang developer sebagai fokus juga memungkinkan 
                                    developer menyuntikkan ragam pesan “PSA” dan “Tutorial” yang diarahkan pada Anda, tapi didesain 
                                    seolah-olah sebagai pesan untuk sang developer, karakter utama yang Anda gunakan. Cerdas!
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