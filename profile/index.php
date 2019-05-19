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
                        <a class="nav-link" href="#">Home</a>
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
            <span class="fa fa-backward fg-red" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="fa fa-forward fg-red" aria-hidden="true"></span>
        </a>
    </div>

    <div class="container-fluid px-5 marketing">
        <div class="row">
            <div class="col-lg-3 bright">
                <a href="#" style="text-decoration: none;">
                    <div class="card mb-3 shadow">
                        <img width="100%" height="140" src="../assets/img/1.jpg" class="img-fluid" />
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
            <div class="col-lg-3 bright">
                <a href="#" style="text-decoration: none;">
                    <div class="card mb-3 shadow">
                        <img width="100%" height="140" src="../assets/img/2.jpg" class="img-fluid" />
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
            <div class="col-lg-3 bright">
                <a href="#" style="text-decoration: none;">
                    <div class="card mb-3 shadow">
                        <img width="100%" height="140" src="../assets/img/3.jpg" class="img-fluid" />
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
            <div class="col-lg-3 bright">
                <a href="#" style="text-decoration: none;">
                    <div class="card mb-3 shadow">
                        <img width="100%" height="140" src="../assets/img/1.jpg" class="img-fluid" />
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


        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-3 shadow">
                    <div class="card-body">
                        <p class="card-text">
                            <table>
                                <tr>
                                    <td colspan="2">
                                        <img src="../assets/img/photo/<?php echo $u_id.'.jpg'; ?>"
                                            style="border-radius: 50%; width: 150px; height: 150px">
                                    </td>
                                </tr>
                                <tr>
                                    <td>ID</td>
                                    <td><?php echo $u_id; ?></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td><?php echo $u_name; ?></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td><?php echo $u_password; ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>
                                        <a id="gender"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?php echo $u_email; ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td><?php echo $u_birth; ?></td>
                                </tr>
                                <tr>
                                    <td>Bergabung Sejak</td>
                                    <td><?php echo $u_joined; ?></td>
                                </tr>
                                <tr>
                                    <td>CPU</td>
                                    <td><?php echo $u_cpu; ?></td>
                                </tr>
                                <tr>
                                    <td>VGA</td>
                                    <td><?php echo $u_vga; ?></td>
                                </tr>
                                <tr>
                                    <td>RAM</td>
                                    <td><?php echo $u_ram; ?></td>
                                </tr>
                            </table>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-3 shadow">
                    <img width="100%" height="140" src="../assets/img/1.jpg" />
                    <div class="card-body">
                        <p class="card-text">
                            <table>
                                <tr>
                                    <td><?php echo $namegame; ?></td>
                                </tr>
                                <tr>
                                    <td> - - - </td>
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
                                    <td> - - - </td>
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
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-3 shadow">
                    <div class="card-body">
                        <p class="card-text">
                            <p id="greeting">null</p>
                            <p>CPU punyamu </p>
                            <p id="baca1">null</p>
                            <p>VGA punyamu </p>
                            <p id="baca2">null</p>
                            <p>RAM punyamu </p>
                            <p id="baca3">null</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-3 shadow">
                    <div class="card-body">
                        <p class="card-text">
                            <form method="post" action="../update.php" enctype="multipart/form-data">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <img src="../assets/img/photo/<?php echo $u_id.'.jpg'; ?>"
                                                style="border-radius: 50%; width: 150px; height: 150px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="inner-addon left-addon inner-addon-tall">
                                                <i class="fa fa-id-badge"></i>
                                                <input type="te" name="uname" placeholder="ID Pengguna"
                                                    class="input-text" value="<?php echo $u_id; ?>" readonly="readonly">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="inner-addon left-addon inner-addon-tall">
                                                <i class="fa fa-user"></i>
                                                <input type="text" name="name" placeholder="Nama Lengkap"
                                                    class="input-text" value="<?php echo $u_name; ?>">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="inner-addon left-addon inner-addon-tall">
                                                <i class="fa fa-envelope"></i>
                                                <input type="email" name="email" placeholder="E-mail" class="input-text"
                                                    value="<?php echo $u_email; ?>">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="inner-addon left-addon inner-addon-tall">
                                                <i class="fa fa-unlock"></i>
                                                <input type="password" name="password" placeholder="Password"
                                                    class="input-text" value="<?php echo $u_password; ?>">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="file" name="pp" accept="image/*" class="input-text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="inner-addon left-addon inner-addon-tall">
                                                <input type="radio" id="l" name="gender" value="l" class="input-text"
                                                    style="width: 15px;"
                                                    <?php if ($u_gender == 'l') { echo ' checked="checked"'; } ?>><label
                                                    for="l" style="margin-right: 10px;">Laki-laki</label>
                                                <input type="radio" id="p" name="gender" value="p" class="input-text"
                                                    style="width: 15px;"
                                                    <?php if ($u_gender == 'p') { echo ' checked="checked"'; } ?>><label
                                                    for="p">Perempuan</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="inner-addon left-addon inner-addon-tall">
                                                <i class="fa fa-birthday-cake"></i>
                                                <input type="date" name="birth" placeholder="Password"
                                                    class="input-text" value="<?php echo $u_birth; ?>">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select name="u_idcpu" class="input-text" style="width: 75px;">
                                                <option>-- CPU --</option>
                                                <option value="1"
                                                    <?php if ($u_idcpu == 1) { echo ' selected="selected"'; } ?>>i3
                                                </option>
                                                <option value="2"
                                                    <?php if ($u_idcpu == 2) { echo ' selected="selected"'; } ?>>i5
                                                </option>
                                                <option value="3"
                                                    <?php if ($u_idcpu == 3) { echo ' selected="selected"'; } ?>>i7
                                                </option>
                                                <option value="4"
                                                    <?php if ($u_idcpu == 4) { echo ' selected="selected"'; } ?>>i9
                                                </option>
                                            </select>
                                            <select name="u_idvga" class="input-text" style="width: 80px;">
                                                <option>-- VGA --</option>
                                                <option value="1"
                                                    <?php if ($u_idvga == 1) { echo ' selected="selected"'; } ?>>GT210
                                                </option>
                                                <option value="2"
                                                    <?php if ($u_idvga == 2) { echo ' selected="selected"'; } ?>>GT730
                                                </option>
                                                <option value="3"
                                                    <?php if ($u_idvga == 3) { echo ' selected="selected"'; } ?>>GTX1050
                                                </option>
                                                <option value="4"
                                                    <?php if ($u_idvga == 4) { echo ' selected="selected"'; } ?>>RTX2080
                                                </option>
                                            </select>
                                            <select name="u_idram" class="input-text" style="width: 75px;">
                                                <option>-- RAM --</option>
                                                <option value="1"
                                                    <?php if ($u_idram == 1) { echo ' selected="selected"'; } ?>>2GB
                                                </option>
                                                <option value="2"
                                                    <?php if ($u_idram == 2) { echo ' selected="selected"'; } ?>>4GB
                                                </option>
                                                <option value="3"
                                                    <?php if ($u_idram == 3) { echo ' selected="selected"'; } ?>>8GB
                                                </option>
                                                <option value="4"
                                                    <?php if ($u_idram == 4) { echo ' selected="selected"'; } ?>>16GB
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="submit" value="Update" class="input-button">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </p>
                    </div>
                </div>
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
<script>
    function time() {

        var time = new Date().getHours();
        if (time < 10) {
            x = "Good morning";
        } else if (time < 20) {
            x = "Good day";
        } else {
            x = "Good evening";
        }
        document.getElementById("greeting").innerHTML = x;

        var u_gender = "<?php echo $u_gender; ?>"
        if (u_gender === 'l') {
            u_gender = "Laki-laki";
        } else if (u_gender === 'p') {
            u_gender = "Perempuan";
        } else {
            u_gender = "-";
        }
        document.getElementById("gender").innerHTML = u_gender;

        var u_cpu = "<?php echo $u_idcpu; ?>";
        var m_cpu = "<?php echo $m_idcpu; ?>";
        var r_cpu = "<?php echo $r_idcpu; ?>";
        if (u_cpu >= r_cpu) {
            u_cpu = "JOS MANTAP";
        } else if (u_cpu >= m_cpu && u_cpu <= r_cpu) {
            u_cpu = "OKELAH";
        } else if (u_cpu <= m_cpu) {
            u_cpu = "LAG BOS";
        }
        document.getElementById("baca1").innerHTML = u_cpu;

        var u_vga = "<?php echo $u_idvga; ?>";
        var m_vga = "<?php echo $m_idvga; ?>";
        var r_vga = "<?php echo $r_idvga; ?>";
        if (u_vga >= r_vga) {
            u_vga = "JOS MANTAP";
        } else if (u_vga >= m_vga && u_vga <= r_vga) {
            u_vga = "OKELAH";
        } else if (u_vga <= m_vga) {
            u_vga = "LAG BOS";
        }
        document.getElementById("baca2").innerHTML = u_vga;

        var u_ram = "<?php echo $u_idram; ?>";
        var m_ram = "<?php echo $m_idram; ?>";
        var r_ram = "<?php echo $r_idram; ?>";
        if (u_ram >= r_ram) {
            u_ram = "JOS MANTAP";
        } else if (u_ram >= m_ram && u_ram <= r_ram) {
            u_ram = "OKELAH";
        } else if (u_ram <= m_ram) {
            u_ram = "LAG BOS";
        }
        document.getElementById("baca3").innerHTML = u_ram;

    }
</script>

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