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
                DOTA 2
            </p>
            <div class="col-lg-12 mx-auto my-5">
                <div class="row">
                    <div class="col-lg-8 px-0 py-0">
                        <img class="img-fluid" src="../assets/img/photo/da1.png">
                    </div>
                    <div class="col-lg-4 px-0 py-0">
                        <img class="img-fluid" src="../assets/img/photo/da2.jpg">
                        <img class="img-fluid" src="../assets/img/photo/da3.jpg">
                    </div>
                </div>
            </div>

            <div class="container-fluid px-5 ">

                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                        <div class="col-md-12">
                                <h2>Review DOTA 2: Versi yang Lebih Sempurna!</h2>
                                <p class="lead"><img width="500" height="500" src="../assets/img/photo/dot1.jpg"
                                        class="img-fluid" /><br>
                                        Sebuah mod yang berhasil menarik hati jutaan gamer di seluruh dunia, Defense of The Ancients (DOTA) memang menjadi fenomena tersendiri. Mengubah mekanik awal yang ditawarkan oleh Warcraft III, IceFrog menyuntikkan sensasi RPG yang lebih kental dengan membawa pertempuran hero sebagai fokus utama. Tidak lagi harus dipusingkan dengan strategi membangun unit, gamer kini dibawa dalam mode PvP yang cepat, intens, dan pastinya – memacu adrenalin. Berfokus membangun karakter dengan perannya masing-masing dan memainkan peran terbaik dalam pertempuran tim, DOTA bahkan diakui sebagai salah satu game kompetitif yang seringkali dipertandingkan di kancah internasional. Tidak salah jika Valve tertarik untuk mengakuisisi nama yang satu ini.<BR>

                                        Perjalanan akuisisi Valve atas nama DOTA memang bukan perkara mudah. Sempat mengalami konflik dengan Blizzard sebagai pemilik Warcraft III, perseteruan ini untungnya berakhir damai. Valve berkesempatan untuk terus melanjutkan terus proyek ambisius ini, menawarkan berbagai modifikasi di sisi visual dan tentu saja mekanik gameplay yang lebih seimbang. Memasuki proses beta dan berhasil menjaring ratusan ribu gamer selama proses ini, Valve akhirnya siap untuk keluar dari fase yang satu ini. Setahun sejak rilis betanya, Valve akhirnya secara resmi merilis DOTA 2 secara bebas kepada publik. Sembari memastikan proses peralihan ini tidak akan mengganggu pengalaman mereka yang sudah masuk ke dalam masa beta, DOTA 2 akhirnya terbuka bagi setiap gamer lewat sistem F2P yang ia usung.<BR>

                                        Mengingat masa beta yang sudah berakhir dan eksistensinya sebagai sebuah game resmi yang terbuka secara komersil, ini menjadi momen yang tepat bagi JagatPlay untuk melemparkan beberapa impresi yang sempat kami tangkap, tentu saja – selama setahun terakhir ini. Apa saja yang berubah? Menjadi lebih baik atau lebih buruk? Atau ia masih belum mampu menundukkan popularitas DOTA pertama?<BR>
                                        <br>
                                    <h2>Beradaptasi dengan Sisi Visual yang Baru</h2>
                                    <img width="500" height="500" src="../assets/img/photo/dot2.jpg"
                                        class="img-fluid" /><br>
                                        Urusan hak dagang atas nama memang memaksa Valve untuk melakukan beberapa penyesuaian, mengingat versi pertama DOTA memang dibangun dari model karakter dari beberapa game ikonik Blizzard – dari Warcraft III hingga Starcraft. Untuk memastikan game MOBA teranyar mereka ini tidak terus melewati proses hukum, Valve akhirnya mengubah beberapa aspek yang signifikan, terutama di sisi kosmetik.<br>

                                        Salah satu yang paling signifikan adalah perubahan model karakter yang digunakan. Walaupun hadir dengan model karakter yang jauh berbeda dengan lebih halus, Anda tetap dapat menemukan beberapa ciri utama karakter yang tetap dipertahankan dari seri pertamanya. Konsep ini mempermudah para gamer DOTA pertama untuk menyesuaikan diri dengan cepat, terutama mereka yang belum familiar dengan desain baru hero yang ada.  Tidak hanya dari model  karakter, Valve juga menyuntikkan nama yang lebih “umum” untuk mencegah permasalahan lebih jauh.<br>

                                    <img width="500" height="500" src="../assets/img/photo/dot3.jpg"
                                        class="img-fluid" /><br>
                                        Perubahan visualisasi ini juga diterapkan untuk beragam desain item dan persenjataan yang ditawarkan di toko. Memang butuh waktu lebih lama bagi para gamer pendatang baru ataupun mereka yang sempat mencicipi DOTA pertama untuk menguasai aspek ini lebih dalam. Tidak hanya sekedar mempelajari desain item dan resep yang untungnya, sedikit terbantu dari penjelasan yang tetap disertakan ketika Anda melakukan hover di setiap item yang ada, Anda juga mulai harus menghafal kembali lokasi item yang kini ditempatkan dalam pengakategorian yang berbeda. Setiap hero juga akan hadir dengan rekomendasi item untuk memaksimalkan kemampuan terbaiknya, membantu para pendatang baru untuk lebih dapat menguasai game ini dengan lebih cepat.<br><br>
                                        Perubahan visualisasi berarti juga berpengaruh langsung pada animasi gerak setiap karakter yang ada. Tidak berpengaruh besar bagi para pemain DOTA yang baru, namun perubahan animasi ini akan memaksa para pemain veteran untuk menyesuaikan ritme gameplay kembali. Sementara mereka yang tumbuh besar bersama dengan game MOBA yang lain, DOTA 2 mungkin akan terasa lebih lambat. Mengapa animasi sangat signifikan? Karena animasi gerak dan serangan akan sangat menentukan seberapa baik Anda tampil dalam DOTA 2. Anda menjadikanya sebagai pondasi untuk melakukan creeping yang efektif dan tentu saja, melakukan kombinasi skill yang lebih mumpuni.


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