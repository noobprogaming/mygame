<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Punyakita</title>
    <link rel="icon" type="image/png" href="/assets/img/google.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="assets/custom.css">
    <style>
        table,
        td {
            margin: 0 auto;
            padding: 5px;
            text-align: center;
        }

        #message {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
        }

        #inner-message {
            margin: 0 auto;
        }

        .alert-top {
            z-index: 999;
            position: fixed;
            top: 10%;
            width: 82%;
            margin-left: 0 auto;
            margin-right: 0 auto;
        }
    </style>
</head>

<body>
    <?php 
if(isset($_GET['msg'])){
    if($_GET['msg'] == "failed"){
        echo '<div class="container">';
        echo '<div class="alert-top alert alert-danger alert-dismissible fade show">';
        echo '  <button type="button" class="close" data-dismiss="alert">&times;</button>';
        echo '  ID atau kata sandi, salah!';
        echo '</div>';
        echo '</div>';
    }else if($_GET['msg'] == "logout"){
        echo '<div class="container">';
        echo '<div class="alert-top alert alert-info alert-dismissible fade show">';
        echo '  <button type="button" class="close" data-dismiss="alert">&times;</button>';
        echo '  Anda telah keluar!';
        echo '</div>';
        echo '</div>';
    }else if($_GET['msg'] == "warning"){
        echo '<div class="container">';
        echo '<div class="alert-top alert alert-warning alert-dismissible fade show">';
        echo '  <button type="button" class="close" data-dismiss="alert">&times;</button>';
        echo '  Anda harus masuk terlebih dahulu!';
        echo '</div>';
        echo '</div>';
    }else if($_GET['msg'] == "success"){
        echo '<div class="container">';
        echo '<div class="alert-top alert alert-success alert-dismissible fade show" role="alert">';
        echo '  <button type="button" class="close" data-dismiss="alert" aria-label="close">&times;</button>';
        echo '  Silakan masuk menggunakan data yang sudah Anda buat!';
        echo '</div>';
        echo '</div>';
    }
}
?>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top px-5">
            <a class="navbar-brand text-shadow" href="#">Punyakita</a>
            <button class="btn-menu" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="login.php">Akun</a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-content black-soft box-shadow"
                            aria-labelledby="navbarDropdown">
                            <form action="cek_login.php" method="post">
                                <div class="px-3 py-1" style="width: 15rem">
                                    <table>
                                        <tr>
                                            <td>
                                                <div class="inner-addon inner-addon-tall">
                                                    <i class="fa fa-user"></i>
                                                    <input type="text" name="username" placeholder="ID" id="uname"
                                                        class="input-text">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="inner-addon inner-addon-tall">
                                                    <i class="fa fa-unlock"></i>
                                                    <input type="password" name="password" placeholder="Kata Sandi"
                                                        id="pass" class="input-text">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="btn-group">
                                                    <input type="submit" value="Masuk"
                                                        class="btn btn-sm input-btn w100">
                                                    <input value="Daftar" class="btn btn-sm input-btn w100"
                                                        onclick="window.location.href='register.php'">
                                                </div>
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

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner carousel-fit">
            <div class="carousel-item active">
                <a href="#">
                    <img class="img-fluid" src="assets/img/1.jpg" style="position: relative;">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies
                                vehicula ut id elit.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="#">
                    <img class="img-fluid" src="assets/img/2.jpg">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies
                                vehicula ut id elit.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="#">
                    <img class="img-fluid" src="assets/img/3.jpg">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies
                                vehicula ut id elit.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="fa fa-backward fg-red" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="fa fa-forward fg-red" aria-hidden="true"></span>
        </a>
    </div>

    <div class="container-fluid px-5 marketing">
        <div class="row">
            <div class="col-lg-3">
                <a href="#" style="text-decoration: none;">
                    <div class="card mb-3 shadow">
                        <img width="100%" height="140" src="assets/img/1.jpg" class="img-fluid" />
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#" style="text-decoration: none;">
                    <div class="card mb-3 shadow">
                        <img width="100%" height="140" src="assets/img/2.jpg" class="img-fluid" />
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-lg-3">
                <a href="#" style="text-decoration: none;">
                    <div class="card mb-3 shadow">
                        <img width="100%" height="140" src="assets/img/3.jpg" class="img-fluid" />
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#" style="text-decoration: none;">
                    <div class="card mb-3 shadow">
                        <img width="100%" height="140" src="assets/img/1.jpg" class="img-fluid" />
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your
                        mind.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                    tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                    focusable="false" role="img" aria-label="Placeholder: 500x500">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                        dy=".3em">500x500</text>
                </svg>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for
                        yourself.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                    tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                    focusable="false" role="img" aria-label="Placeholder: 500x500">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                        dy=".3em">500x500</text>
                </svg>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                    tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                    focusable="false" role="img" aria-label="Placeholder: 500x500">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                        dy=".3em">500x500</text>
                </svg>
            </div>
        </div>

        <hr class="featurette-divider">

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