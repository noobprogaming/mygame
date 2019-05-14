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
    </style>
</head>
<body onload="time()">
<?php 
session_start();
if($_SESSION['status']!="login"){
	header("location:../index.php?msg=warning");
}
?>
<?php
    include '../koneksi.php';
    $username=$_SESSION['username'];
    include '../sql.php';
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
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#"><i class="fa fa-user"> </i> <?php echo $u_id; ?></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-content black-soft box-shadow"
                    aria-labelledby="navbarDropdown">
                    <form action="logout.php" method="post">
                        <div class="px-3 py-1" style="width: 15rem">
                            <table>
                                <tr>
                                    <td>
                                        <img src="../assets/img/photo/<?php echo $u_id.'.jpg'; ?>" style="border-radius: 50%; width: 100px; height: 100px">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="fg-white"><?php echo $u_name; ?></p>
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
   
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="#">
                <img class="carousel-img img-fluid" src="../assets/img/1.jpg">
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
                <img class="carousel-img img-fluid" src="../assets/img/2.jpg">
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
                <img class="carousel-img img-fluid" src="../assets/img/3.jpg">
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
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container-fluid px-5 marketing">
    <div class="row">
        <div class="col-lg-3">
            <a href="#" style="text-decoration: none;">
                <div class="card mb-3 shadow">
                    <img width="100%" height="140" src="../assets/img/1.jpg" />
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
                    <img width="100%" height="140" src="../assets/img/2.jpg" />
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
                    <img width="100%" height="140" src="../assets/img/3.jpg" />
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
                    <img width="100%" height="140" src="../assets/img/1.jpg" />
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
    <div class="row">
        <div class="col-md-4 p5rem" style="height: 300px;">
            <div class="row">
                <h1 class="red">INI LOGO</h1>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>