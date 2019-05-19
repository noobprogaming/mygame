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
                        <a class="nav-link active" href="profile.php">Profile</a>
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

    <hr class="divider">

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
                                            <input type="file" name="pp" accept="image/*">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="inner-addon left-addon inner-addon-tall">
                                                <label class="rdb">Laki-laki
                                                    <input type="radio" id="l" name="gender" value="l" <?php if ($u_gender == 'l') { echo ' checked="checked"'; } ?>>
                                                    <span class="rdb-check"></span>
                                                </label>
                                                <label class="rdb">Pepempuan
                                                    <input type="radio" id="p" name="gender" value="p" <?php if ($u_gender == 'p') { echo ' checked="checked"'; } ?>>
                                                    <span class="rdb-check"></span>
                                                </label>
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
                                            <input type="submit" value="Update" class="input-btn">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </p>
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