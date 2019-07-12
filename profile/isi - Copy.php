<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
        table,
        td {
            margin: 0 auto;
            padding: 5px;
            text-align: center;
        }

        .navbar {
            background-color: rgb(19, 19, 19);
            box-shadow: 0 0 1rem rgb(19, 19, 19);
            position: relative;
        }

        .gg {
            color: rgb(255, 23, 23);
            font-size: 26px;
            font-weight: bold;
            font-style: italic;
        }

        .dd {
            color: white;
        }

        .dd:hover {
            color: rgb(255, 23, 23);
        }
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
            <img src="../assets/img/lg.png" style="height: 30px; width: 30px;">
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
            <p class="gg" style="font-size: 50px;">
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

            <div class="col-lg-12 mx-auto">
                <div class="row">
                    <div class="col-lg-8 my-3">
                        <div class="row">
                            <div class="col-lg-8">
                                <h2 class="featurette-heading">Review Deus Ex : Mabkind Divided Semakin Semakin sempurna</h2>
                                <p class="lead"><img width="500" height="500" src="../assets/img/photo/2.jpg" class="img-fluid" /><br>
                                Dengan begitu banyak usaha untuk melebur beragam genre di dalam satu ruang yang sama, memang sulit untuk membedakan mana yang 
                                sejatinya sebuah game RPG, mana game action, dan mana sebuah platfomer murni. Ada kecenderungan untuk mengambil elemen-elemen 
                                terbaik dari masing-masing genre tersebut dan kemudian melahirkan sesuatu yang lebih kompleks, namun tetap punya identitas kuat 
                                di dalamnya. Bagi para penggemar action RPG, Deus Ex dari Eidos Montreal dan Square Enix memang punya posisi tersendiri di hati. 
                                Sempat populer di masa lalu, franchise ini seolah berhasil menemukan kembali denyut jantungnya setelah rilis Human Revolution 
                                yang berhasil secara kualitas dan kuantitas penjualan. Dan kini sang seri sekuel – Deus Ex: Mankind Divided akhirnya tiba.
                                Anda yang sempat membaca artikel preview kami sebelumnya tentu sudah punya sedikit gambaran soal apa yang ditawarkan game 
                                yang satu ini. Dari core gameplay yang ada, ia masih menawarkan cita rasa yang sama dengan Human Revolution sebagai basis. 
                                Implementasi engine terbaru – Dawn Engine memang meninggalkan kesan kualitas visual yang lebih modern dengan peralihan platform 
                                generasi saat ini. Namun satu yang membuat kami jatuh hati adalah keberhasilan untuk memperbaiki beberapa masalah krusial di seri 
                                sebelumnya, terutama yang berhubungan dengan keputusan untuk terus memainkan game ini dengan pendekatan non-lethal. Apakah 
                                impresi pertama yang super positif tersebut berakhir hingga permainan selesai? Ini tentu saja, jadi pertanyaan utamanya.
                                Lantas, apa yang sebenarnya ditawarkan oleh Deus Ex: Mankind Divided ini? Mengapa kami menyebutnya sebagai game yang semakin 
                                sempurna? Review ini akan membahasnya lebih dalam untuk Anda!
                                <img width="500" height="500" src="../assets/img/photo/deus.jpg" class="img-fluid"/>><br>
                                Deus Ex: Mankind Divided sendiri diposisikan sebagai sebuah seri sekuel langsung dari Human Revolution, seri yang sempat 
                                dirilis tahun 2011 silam. Dua tahun setelah event di Human Revolution dimana manusia-manusia dengan Augmentasi sempat tak 
                                terkontrol karena aksi dari sebuah organisasi rahasia bernama Illuminati, manusia mulai mengembangkan rasa takut yang tak 
                                rasional untuk kelompok yang satu ini. Rasisme tumbuh dan menjadikan manusia dengan augmentasi seperti ini sebagai kelas 
                                sosial kedua yang pantas untuk dijauhi, dengan sebuah kota yang bahkan dibangun eksklusif untuk memuat mereka.
                                Namun alih-alih semakin membaik, teror tersebut justru semakin menguat setelah sebuah kelompok teroris berisikan manusia-
                                manusia dengan augmentasi mulai melancarkan serangan mereka. Tak jelas motif seperti apa yang diusung, tak jelas pula siapa
                                yang bergerak di belakangnya, namun aksi mereka membuat banyak mereka yang tak berdosa harus meregang nyawa. Adam Jensen 
                                kini bergabung dengan pasukan anti-teroris bernama Task Force 29 untuk memecahkan kasus yang satu ini. Operasi yang mereka
                                lakukan di Dubai mengkonfirmasikan bahwa memang, ada kelompok  manusia dengan augmentasi yang terlibat. 
                                <img width="500" height="500" src="../assets/img/photo/ds ex.jpg" class="img-fluid"/>><br>
                                Dari siapa dan 
                                atas kepentingan siapa? Itu jadi salah satu misteri yang harus dijawab Jensen.Terus ditekan karena manusia yang paranoid 
                                terhadap kemampuan mereka, beberapa manusia augmentasi yang berusaha melawan balik melakukan serangakaian aksi terorisme.
                                Adam Jensen dipanggil untuk menyelidiki siapa yang sebenarnya bertanggung jawab.Di sisi lain, ia bekerja sebagai seorang 
                                double agent. Fakta bahwa siapa sebenarnya Illuminati membuat Jensen terlibat dalam sebuah kelompok hacktivist bernama 
                                Juggernaut Collective yang juga bertanya-tanya soal hal yang sama. Kelompok ini dipimpin oleh seorang hacker tanpa wajah 
                                bernama Janus yang sepertinya selalu mendapatkan informasi yang dibutuhkan tanpa kesulitan apapun. Jensen pun kini terlibat
                                 dalam dua kepentingan yang bisa saja saling bertabrakan satu sama lain – usaha untuk menemukan siapa yang bertanggung 
                                 jawab di rangkaian aksi teror manusia dengan augmentasi yang terjadi dan tentu saja, membongkar siapa itu Illuminati.
                                Namun di sisi lain, Jensen berfungsi sebagai double agent untuk membongkar Illuminati – pihak yang bertanggung jawab 
                                atas event dua tahun yang lalu.Berita baiknya? Anda yang tidak pernah mencicipi Deus Ex: Human Revolution tak usah khawatir
                                 bahwa Anda tak akan mendapatkan esensi cerita yang tentu saja, dibutuhkan untuk menikmati seri sekuel ini. Anda bisa 
                                 memulai game ini dengan  menonton sebuah video re-cap berdurasi 11 menit yang disediakan oleh Eidos Montreal untuk 
                                 memberikan secara langsung plot seperti apa yang menjadi basis untuk Mankind Divided ini. Tak perlu lagi harus mencari
                                  internet hanya untuk mengerti, sebuah  fitur yang tentu saja pantas untuk disambut baik.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                                <h4>Artikel</h4>
                                <hr class="divider">
                                <p>Spesifikasi PC untuk Man of Medan</p>
                                <hr class="divider">
                                <p>Spesifikasi PC untuk Code Vein</p>
                                <hr class="divider">
                                <p>Kingdom Under Fire II Tetap Hidup, 
                                Versi PC Tuju Barat Tahun Ini</p>
                                <hr class="divider">
                                <p>Menjajal DEMO Pamali: Horror Indonesia Potensial!</p>
                                <hr class="divider">
                                <p>Microsoft akan Hadirkan Login Windows 10 Tanpa Password</p>
                                <hr class="divider">
                                <p>Review Cuphead: Kartun untuk Kaum Masokis!</p>
                                <hr class="divider">
                                <p>Review Frostpunk: Semua Demi Sebuah Kehangatan!</p>
                                <hr class="divider">
                                <p>Review Doki Doki Literature Club: Jangan Baca, Main Saja Dulu!L</p>
                                <hr class="divider">
                                <p>Review Outlast 2: Tidak Lebih Baik!</p>
                                <hr class="divider">
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </form>
    </div>

    <footer class="page-footer text-center black-soft">
        <div class="row" style="margin-right: 0!important;">
            <div class="col-md-4 p5rem" style="height: 300px;">
                <div class="row">
                    <img src="../assets/img/lg.png" style="height: 140px; width: 140px;">
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

</html>