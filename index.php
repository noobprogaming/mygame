<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/slider.css">
    <link rel="icon" type="image/png" href="/assets/img/google.png" />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script type="text/javascript" src="assets/style.js"></script>
    <title>FP</title>
</head>
<body>

<?php 
if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
        echo '<script>';
        echo 'alert("Login gagal! Username atau password salah!")';
        echo '</script>';
    }else if($_GET['pesan'] == "logout"){
        echo '<script>';
        echo 'alert("Anda telah logout")';
        echo '</script>';
    }else if($_GET['pesan'] == "warning"){
        echo '<script>';
        echo 'alert("Anda harus login terlebih dahulu!")';
        echo '</script>';
    }else if($_GET['pesan'] == "success"){
        echo '<script>';
        echo 'alert("Silakan login menggunakan data yang sudah Anda buat!")';
        echo '</script>';
    }
}
?>
<nav>
    <ul>
        <li>
            <a href="#">
                <span class="fa fa-bandcamp"></span>
            </a>
        </li>
        <li><a href="#">About </a></li>
        <li><a href="#">Services </a></li>
        <li><a href="#">Contact </a></li>
        <li style="float: right;">
            <a href="login.php">Login</a>
        </li>
        <li style="float: right;">
            <a href="register.php">Register</a>
        </li>
        <li>
        <a href="#">
            <span class="fa fa-bars"></span>
        </a>
        </li>
        <input type="search" />
    </ul>
</nav>


<div id="slider">
    <div class="slides">
        <div class="slider">
        <div class="legend"></div>
        <div class="content">
            <div class="content-txt">
            <h1>Lorem ipsum dolor</h1>
            <h2>Lorem ipsum dolor Lorem ipsum dolor.</h2>
            </div>
        </div>
            <div>
                <img src="img/a.jpg">
            </div>
        </div>

        <div class="slider">
        <div class="legend"></div>
        <div class="content">
            <div class="content-txt">
            <h1>Lorem ipsum dolor</h1>
            <h2>Lorem ipsum dolor Lorem ipsum dolor.</h2>
            </div>
        </div>
            <div>
                <img src="img/b.jpg">
            </div>
        </div>

        <div class="slider">
        <div class="legend"></div>
        <div class="content">
            <div class="content-txt">
            <h1>Lorem ipsum dolor</h1>
            <h2>Lorem ipsum dolor Lorem ipsum dolor.</h2>
            </div>
        </div>
            <div>
                <img src="img/c.jpg">
            </div>
        </div>

        <div class="slider">
        <div class="legend"></div>
        <div class="content">
            <div class="content-txt">
            <h1>Lorem ipsum dolor</h1>
            <h2>Lorem ipsum dolor Lorem ipsum dolor.</h2>
            </div>
        </div>
            <div>
                <img src="img/d.jpg">
            </div>
        </div>
    </div>
    <div class="switch">
        <ul>
        <li>
            <div class="on"></div>
        </li>
        <li></li>
        <li></li>
        <li></li>
        </ul>
    </div>
</div>      

<div class="container">

</div>

<footer>
    <div id="footer">
        <div class="inner-wrap clearfix">
            <div class="section about">
                <p id="greeting">null</p>
                <p id="baca1">null</p>
                <p id="baca2">null</p>
                <p id="baca3">null</p>
            </div>
        </div>
    </div>
    <div id="bottom-footer">
        <div class = "inner-wrap clearfix">
            <p>© 2019 Copyright: alvinbintang</p>
        </div>
    </div>
</footer>
</body>
</html>