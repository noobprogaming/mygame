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

<body onload="profile()">
<?php 
session_start();
if($_SESSION['status']!="login"){
	header("location:../index.php?msg=warning");
}

if(isset($_GET['msg'])){
    if($_GET['msg'] == "success"){
        echo '<div class="container">';
        echo '<div class="alert-top alert alert-success" id="myalert" role="alert">';
        echo '  <button type="button" class="close" data-dismiss="alert" aria-label="close">&times;</button>';
        echo '  Selamat datang ';
        echo $_SESSION['name'];
        echo ' ! Silakan lengkapi profil Anda!';
        echo '</div>';
        echo '</div>';
    }
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
                    <li class="nav-item active">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item dropdown">
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
                        <a class="nav-link" href="profile.php"><i class="fa fa-user"></i> <?php echo $u_id; ?></a>
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
                PROFILE
            </p>
        </div>
        <div class="card shadow col-lg-11 mx-auto">
            <div class="row px-5 py-5">

                <div class="row col-lg-12" id="1">
                    <div class="col-lg-5">
                        <table>
                            <tr>
                                <td colspan="4" align="center">
                                    <img src="<?php echo $u_pp; ?>"
                                        style="border-radius: 50%; width: 150px; height: 150px">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="font-size: 20px; font-weight: bold; width: 100%;">
                                    <?php echo $u_name; ?>
                                </td>
                                <td>
                                    <div id="gender"></div>
                                </td>
                                <td align="right">
                                    <button id="btnEdit" class="btn btn-sm input-btn w100">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 1px;"><i class="fa fa-user"></i></td>
                                <td colspan="3"><?php echo $u_id; ?></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-envelope"></i></td>
                                <td colspan="3"><?php echo $u_email; ?></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-birthday-cake"></i></td>
                                <td colspan="2">
                                    <div id="age">-</div>
                                </td>
                                <td>y.o</td>
                            </tr>
                            <tr>
                                <td colspan="2">Bergabung Sejak</td>
                                <td colspan="2"><?php echo $u_joined; ?></td>
                            </tr>
                        </table>
                        <hr class="my-5">
                    </div>
                    <div class="col-lg-2">
                        <hr class="featurette-divider" style="transform: rotate(90deg);">
                    </div>
                    <div class="col-lg-5">

                        <table>
                            <tr>
                                <td>Processor</td>
                                <td><?php echo $u_cpu; ?></td>
                            </tr>
                            <tr>
                                <td>Graphic Card</td>
                                <td><?php echo $u_vga; ?></td>
                            </tr>
                            <tr>
                                <td>RAM</td>
                                <td><?php echo $u_ram; ?></td>
                            </tr>
                            <tr>
                                <td>SSD</td>
                                <td><?php echo $u_ssd; ?></td>
                            </tr>
                            <tr>
                                <td>Hard Disk</td>
                                <td><?php echo $u_hdd; ?></td>
                            </tr>
                            <tr>
                                <td>Power Supply</td>
                                <td><?php echo $u_psu; ?></td>
                            </tr>
                            <tr>
                                <td>Keyboard</td>
                                <td><?php echo $u_kb; ?></td>
                            </tr>
                            <tr>
                                <td>Mouse</td>
                                <td><?php echo $u_mouse; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="col-lg-12" id="2">
                    <div class="tab">
                        <button class="tablinks" id="s1">Profil</button>
                        <button class="tablinks" id="s2">Rig</button>
                    </div>
                    <form method="post" action="../update.php" enctype="multipart/form-data">
                        <div id="slide1">
                            <table>
                                <tr>
                                    <td style="width: 300px;">Foto Profil</td>
                                    <td>
                                        <img src="<?php echo $u_pp; ?>"
                                            style="border-radius: 50%; width: 150px; height: 150px;">
                                            <?php
                                            if($_SESSION['google'] != "true"){
                                                echo "<input type='file' name='pp' accept='image/*' class='input-file'>";
                                            }
                                            ?>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>ID</td>
                                    <td>
                                        <div class="inner-addon left-addon inner-addon-tall">
                                            <i class="fa fa-id-badge"></i>
                                            <input type="te" name="uname" placeholder="ID Pengguna" class="input-text"
                                                value="<?php echo $u_id; ?>" readonly="readonly"
                                                style="background-color: rgb(201, 201, 201)">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>
                                        <div class="inner-addon left-addon inner-addon-tall">
                                            <i class="fa fa-user"></i>
                                            <input type="text" name="name" placeholder="Nama Lengkap" class="input-text"
                                                value="<?php echo $u_name; ?>">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <div class="inner-addon left-addon inner-addon-tall">
                                            <i class="fa fa-envelope"></i>
                                            <?php
                                            if($_SESSION['google'] != "true"){
                                                echo "<input type='email' name='email' placeholder='E-mail' class='input-text'
                                                value='$u_email'>";
                                            }
                                            ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>
                                        <div class="inner-addon left-addon inner-addon-tall">
                                            <i class="fa fa-unlock"></i>
                                            <input type="password" name="password" placeholder="Password"
                                                class="input-text" value="<?php echo $u_password; ?>">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>
                                        <div style="float: left;">
                                            <label class="rdb">Laki-laki
                                                <input type="radio" id="l" name="gender" value="l"
                                                    <?php if ($u_gender == 'l') { echo ' checked="checked"'; } ?>>
                                                <span class="rdb-check"></span>
                                            </label>
                                            </div>
                                            <div style="display: inline-block">
                                            <label class="rdb">Perempuan
                                                <input type="radio" id="p" name="gender" value="p"
                                                    <?php if ($u_gender == 'p') { echo ' checked="checked"'; } ?>>
                                                <span class="rdb-check"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>
                                        <div class="inner-addon left-addon inner-addon-tall">
                                            <i class="fa fa-birthday-cake"></i>
                                            <input type="date" name="birth" placeholder="Password" class="input-text"
                                                value="<?php echo $u_birth; ?>">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" value="Update" class="btn btn-sm input-btn w100">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div id="slide2">
                            <table>
                                <tr>
                                    <td>Processor</td>
                                    <td>
                                        <select name="u_idcpu" class="input-text" style="width: 200px;">
                                            <option>-- CPU --</option>
                                            <?php
                                                    $result = $koneksi->query($sql_cpu);
                                                    while($row=$result->fetch_assoc()){
                                                        extract($row);
                                                        $id_cpu = $row ['id_cpu'];
                                                        $name_cpu = $row ['name_cpu'];
                                                        echo "
                                                        <option value='$id_cpu'>$name_cpu</option>";                                                    
                                                    };
                                                    echo "<option value='$u_idcpu' style='font-weight: bold' selected=selected>$u_cpu</option>";
                                                ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Graphic Card</td>
                                    <td>
                                        <select name="u_idvga" class="input-text" style="width: 200px;">
                                            <option>-- VGA --</option>
                                            <?php
                                                    $result = $koneksi->query($sql_vga);
                                                    while($row=$result->fetch_assoc()){
                                                        extract($row);
                                                        $id_vga = $row ['id_vga'];
                                                        $name_vga = $row ['name_vga'];
                                                        echo "
                                                        <option value='$id_vga'>$name_vga</option>";                                                    
                                                    }
                                                    echo "<option value='$u_idvga' style='font-weight: bold' selected=selected>$u_vga</option>";
                                                ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>RAM</td>
                                    <td>
                                        <select name="u_idram" class="input-text" style="width: 200px;">
                                        <option>-- RAM --</option>
                                            <?php
                                                    $result = $koneksi->query($sql_ram);
                                                    while($row=$result->fetch_assoc()){
                                                        extract($row);
                                                        $id_ram = $row ['id_ram'];
                                                        $name_ram = $row ['name_ram'];
                                                        echo "
                                                        <option value='$id_ram'>$name_ram</option>";                                                    
                                                    }
                                                    echo "<option value='$u_idram' style='font-weight: bold' selected=selected>$u_ram</option>";
                                                ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SSD</td>
                                    <td>
                                        <select name="u_idssd" class="input-text" style="width: 200px;">
                                            <option>-- SSD --</option>
                                            <?php
                                                    $result = $koneksi->query($sql_ssd);
                                                    while($row=$result->fetch_assoc()){
                                                        extract($row);
                                                        $id_ssd = $row ['id_ssd'];
                                                        $name_ssd = $row ['name_ssd'];
                                                        echo "
                                                        <option value='$id_ssd'>$name_ssd</option>";                                                    
                                                    }
                                                    echo "<option value='$u_idssd' style='font-weight: bold' selected=selected>$u_ssd</option>";
                                                ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hard Disk</td>
                                    <td>
                                        <select name="u_idhdd" class="input-text" style="width: 200px;">
                                            <option>-- HDD --</option>
                                            <?php
                                                    $result = $koneksi->query($sql_hdd);
                                                    while($row=$result->fetch_assoc()){
                                                        extract($row);
                                                        $id_hdd = $row ['id_hdd'];
                                                        $name_hdd = $row ['name_hdd'];
                                                        echo "
                                                        <option value='$id_hdd'>$name_hdd</option>";                                                    
                                                    }
                                                    echo "<option value='$u_idhdd' style='font-weight: bold' selected=selected>$u_hdd</option>";
                                                ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Power Supply</td>
                                    <td>
                                        <select name="u_idpsu" class="input-text" style="width: 200px;">
                                            <option>-- PSU --</option>
                                            <?php
                                                    $result = $koneksi->query($sql_psu);
                                                    while($row=$result->fetch_assoc()){
                                                        extract($row);
                                                        $id_psu = $row ['id_psu'];
                                                        $name_psu = $row ['name_psu'];
                                                        echo "
                                                        <option value='$id_psu'>$name_psu</option>";                                                    
                                                    }
                                                    echo "<option value='$u_idpsu' style='font-weight: bold' selected=selected>$u_psu</option>";
                                                ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Keyboard</td>
                                    <td>
                                        <select name="u_idkb" class="input-text" style="width: 200px;">
                                            <option>-- KB --</option>
                                            <?php
                                                    $result = $koneksi->query($sql_kb);
                                                    while($row=$result->fetch_assoc()){
                                                        extract($row);
                                                        $id_kb = $row ['id_kb'];
                                                        $name_kb = $row ['name_kb'];
                                                        echo "
                                                        <option value='$id_kb'>$name_kb</option>";                                                    
                                                    }
                                                    echo "<option value='$u_idkb' style='font-weight: bold' selected=selected>$u_kb</option>";
                                                ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Mouse</td>
                                    <td>
                                        <select name="u_idmouse" class="input-text" style="width: 200px;">
                                            <option>-- Mouse --</option>
                                            <?php
                                                    $result = $koneksi->query($sql_mouse);
                                                    while($row=$result->fetch_assoc()){
                                                        extract($row);
                                                        $id_mouse = $row ['id_mouse'];
                                                        $name_mouse = $row ['name_mouse'];
                                                        echo "
                                                        <option value='$id_mouse'>$name_mouse</option>";                                                    
                                                    }
                                                    echo "<option value='$u_idmouse' style='font-weight: bold' selected=selected>$u_mouse</option>";
                                                ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" value="Update" class="btn btn-sm input-btn w100">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
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
    function profile() {

        var u_gender = "<?php echo $u_gender; ?>";
        if (u_gender === 'l') {
            u_gender = "♂";
        } else if (u_gender === 'p') {
            u_gender = "♀";
        } else {
            u_gender = " ";
        }
        document.getElementById("gender").innerHTML = u_gender;

        var u_age = Math.floor("<?php echo $u_age; ?>");
        document.getElementById("age").innerHTML = u_age;

        $('#2').hide();
        $('#slide2').hide();

        $('#s1').on('click', function () {
            $('#slide2').hide();
            $('#slide1').show();
        });

        $('#s2').on('click', function () {
            $('#slide1').hide();
            $('#slide2').show();
        });

        $('#btnEdit').on('click', function () {
            $('#1').hide();
            $('#2').show();
        });
    }
</script>
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