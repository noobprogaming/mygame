<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Punyakita</title>
    <link rel="icon" type="image/png" href="../assets/img/google.png" />
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
$username=$_SESSION['username'];
include '../sql.php';
?>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top px-5">
            <a class="navbar-brand text-shadow" href="index.php">Punyakita</a>
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
                        <a class="nav-link" href="game.php">Game</a>
                        <div class="dropdown-menu dropdown-content black-soft box-shadow"
                            aria-labelledby="navbarDropdown">
                            <div class="px-3 py-1" style="color: white;">
                                <ul style="list-style: none;">
                                    <a href="genre.php" style="text-decoration: none;">
                                        <li class="dd">Genre</li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="catalog.php">Katalog</a>
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
                                                    <img src="../assets/img/photo/<?php echo $u_id.'.jpg'; ?>"
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
                                                <input type="submit" value="Logout" class="btn btn-sm input-btn w100">
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
        </div>
        <div class="card shadow col-lg-11 mx-auto">
                <div class="row">
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                                POPULAR
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/1.jpg" />
                    </div>
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                                TOP 5 FPS
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/1.jpg" />
                    </div>
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                                TOP 5 RPG
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/1.jpg" />
                    </div>
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                                TOP 5 RACING
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/1.jpg" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/1.jpg" />
                    </div>
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/1.jpg" />
                    </div>
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/1.jpg" />
                    </div>
                    <div class="col-lg-3 px-5 py-3">
                        <div class="card-body">
                            <p class="card-text gg">
                            </p>
                        </div>
                        <img width="100%" height="140" src="../assets/img/1.jpg" />
                    </div>
                </div>

            </div>
    </div>
    
    <footer class="page-footer text-center black-soft">
        <div class="row" style="margin-right: 0!important;">
            <div class="col-md-4 p5rem" style="height: 300px;">
                <div class="row">
                    <h1 class="red">LOGO</h1>
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