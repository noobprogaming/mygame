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
$id_game=1;
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
                                                    <img src="<?php echo $u_pp; ?>"
                                                        alt="Tidak ada foto" class="img-profile">
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
                GAME
            </p>
        </div>
        <div class="card shadow col-lg-11 mx-auto">
                <div class="row">
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                                POPULAR
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/Game/popular/p1.jpg" />
                        <b>Apex Legend</b>
                    </div>
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                                TOP 5 FPS
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/Game/fps/f1.jpg" />
                        <b>CS : GO</b>
                    </div>
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                                TOP 5 RPG
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/Game/rpg/r1.jpg" />
                        <b>Dota 2</b>
                    </div>
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                                TOP 5 RACING
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/Game/racing/a1.jpg" />
                        <b>Forza Horizon 4</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/Game/popular/p2.jpg" />
                        <b>Fornite</b>
                    </div>
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/Game/fps/f2.jpg" />
                        <b>Fornite</b>
                    </div>
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/Game/rpg/r2.jpg" />
                        <b>GTA V</b>
                    </div>
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/Game/racing/a2.jpg" />
                        <b>Dirty Rally 2.0</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/Game/popular/p3.jpg" />
                        <b>PUBG</b>
                    </div>
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/Game/fps/f3.jpg" />
                        <b>PUBG</b>
                    </div>
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/Game/rpg/r3.jpg" />
                        <b>The Witcher 3</b>
                    </div>
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/Game/racing/a3.jpg" />
                        <b>F1 2019</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/Game/popular/p4.jpg" />
                        <b>GTA V</b>
                    </div>
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/Game/fps/f4.jpg" />
                        <b>Apex Legend</b>
                    </div>
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/Game/rpg/r4.jpg" />
                        <b>Assassin's Creed Odyssey</b>
                    </div>
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/Game/racing/a4.jpg" />
                        <b>The Crew</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/Game/popular/p5.jpg" />
                        <b>The Witcher 3</b>
                    </div>
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/Game/fps/f5.png" />
                        <b>Overwatch</b>
                    </div>
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/Game/rpg/r5.jpg" />
                        <b>Persona 5</b>
                    </div>
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/Game/racing/a5.jpg" />
                        <b>Project Cars 2</b>
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
<script src="../assets/logout.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
</html>