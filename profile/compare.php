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
tes perubahan
<body onload="compare()">
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
                        <a class="nav-link active" href="compare.php">Compare</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
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
                                    <td><?php echo $r_storage; ?>GB Storage</td>
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
                                <tr>
                                    <td><?php echo $r_storage; ?>GB Storage</td>
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
                            <div>CPU nilai: </div>
                            <div id="v-cpu">-</div>
                            <div>VGA nilai: </div>
                            <div id="v-vga">-</div>
                            <div>RAM nilai: </div>
                            <div id="v-ram">-</div>
                            <div>SSD nilai: </div>
                            <div id="v-ssd">-</div>
                            <div>HDD nilai: </div>
                            <div id="v-hdd">-</div>
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
    function compare() {
        var u_cpu = "<?php echo $u_idcpu; ?>";
        var r_cpu = "<?php echo $r_idcpu; ?>";
        u_cpu = (u_cpu / r_cpu * 100) * (96 / 100);
        document.getElementById("v-cpu").innerHTML = u_cpu;

        var u_vga = "<?php echo $u_idvga; ?>";
        var r_vga = "<?php echo $r_idvga; ?>";
        u_vga = u_vga / r_vga * 100 * (95 / 100);
        document.getElementById("v-vga").innerHTML = u_vga;

        var u_ram = "<?php echo $u_idram; ?>";
        var r_ram = "<?php echo $r_idram; ?>";
        u_ram = u_ram / r_ram * 100 * (97 / 100);
        document.getElementById("v-ram").innerHTML = u_ram;

        var u_ssd = "<?php echo $u_idssd; ?>";
        var r_storage = "<?php echo $r_storage; ?>";
        u_ssd = u_ssd / r_storage * 100 * (95 / 99);
        document.getElementById("v-ssd").innerHTML = u_ssd;

        var u_hdd = "<?php echo $u_idhdd; ?>";
        var r_storage = "<?php echo $r_storage; ?>";
        u_hdd = u_hdd / r_storage * 100 * (90 / 99);
        document.getElementById("v-hdd").innerHTML = u_hdd;
    }

    function old() {
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
        document.getElementById("v-cpu").innerHTML = u_cpu;

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
        document.getElementById("v-vga").innerHTML = u_vga;

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
        document.getElementById("v-ram").innerHTML = u_ram;

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