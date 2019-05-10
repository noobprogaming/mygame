<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/slider.css">
    <link rel="icon" type="image/png" href="../assets/img/google.png" />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script type="text/javascript" src="../assets/style.js"></script>
    <title>FP</title>
    <style>
        #table {
            border: 1px solid rgb(180, 180, 180); 
            padding: 30px 20px;
            border-radius: 5px;
        }
        table, td {
            margin: 0 auto;
            margin-top: 3%;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body onload="time()">
<?php 
session_start();
if($_SESSION['status']!="login"){
	header("location:../index.php?pesan=belum_login");
}
?>
<?php
    include '../koneksi.php';
    $username=$_SESSION['username'];
    include '../sql.php';
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
        <li style="color: white;">
            <p id="greeting">null</p>
        </li>
        <li style="float: right; color: white;">
            <div class="dropdown">
                <i class="fa fa-user"></i> 
                <?php echo $u_name; ?>
                <div class="dropdown-content">
                    <form action="logout.php" method="post">
                        <button class="input-button">Logout</button>
                    </form>
                </div>
            </div>
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
    <div class="side1">
    <table>
        <tr>
            <td colspan="2">
                <img src="../assets/img/photo/<?php echo $u_id.'.jpg'; ?>" style="border-radius: 50%; width: 150px; height: 150px">
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
            <td><p id="gender"></p></td>
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
    </div>
    <div class="side2">
    <table>
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
    </table>

        <div style="text-align: center; margin: 50px; font-weight: bold;">
            <p>CPU punyamu </p><p id="baca1">null</p>
            <p>VGA punyamu </p><p id="baca2">null</p>
            <p>RAM punyamu </p><p id="baca3">null</p>   
        </div>
                
    </div>
    <div class="side3">
    <table>
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

    <!--
    <php
        $cari= $_POST[''];
    
        // jalanin kode di bawah
        $data = mysqli_query($koneksi, "SELECT id FROM user WHERE id='$cari'");
        // menghitung jumlah data yang ditemukan
        $cek = mysqli_num_rows($data);
        if($cek > 0){
            $result = $koneksi->query($data);
            while($row=$result->fetch_assoc()){
                extract($row);
                echo "
                <tr>
                    <td>ID</td>
                    <td><?php echo $row ['id']; ?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><?php echo $row ['name']; ?></td>
                </tr>
                ";
            }
        }
    ?>
    -->

</div>

<form method="post" action="../update.php" enctype="multipart/form-data">
<table class="table">
    <tr>
        <td>
            <img src="../assets/img/photo/<?php echo $u_id.'.jpg'; ?>" style="border-radius: 50%; width: 150px; height: 150px;">
        </td>
    </tr>
    <tr>
        <td>
            <div class="inner-addon left-addon inner-addon-tall">
                <i class="fa fa-id-badge"></i> 
                <input type="te" name="uname" placeholder="ID Pengguna" class="input-text" value="<?php echo $u_id; ?>" readonly="readonly">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="inner-addon left-addon inner-addon-tall">
                <i class="fa fa-user"></i> 
                <input type="text" name="name" placeholder="Nama Lengkap" class="input-text" value="<?php echo $u_name; ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="inner-addon left-addon inner-addon-tall">
                <i class="fa fa-envelope"></i> 
                <input type="email" name="email" placeholder="E-mail" class="input-text" value="<?php echo $u_email; ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="inner-addon left-addon inner-addon-tall">
                <i class="fa fa-unlock"></i> 
                <input type="password" name="password" placeholder="Password" class="input-text" value="<?php echo $u_password; ?>">
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
                <input type="radio" id="l" name="gender" value="l" class="input-text" style="width: 15px;" <?php if ($u_gender == 'l') { echo ' checked="checked"'; } ?>><label for="l" style="margin-right: 10px;">Laki-laki</label>
                <input type="radio" id="p" name="gender" value="p" class="input-text" style="width: 15px;" <?php if ($u_gender == 'p') { echo ' checked="checked"'; } ?>><label for="p">Perempuan</label>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="inner-addon left-addon inner-addon-tall">
                <i class="fa fa-birthday-cake"></i> 
                <input type="date" name="birth" placeholder="Password" class="input-text" value="<?php echo $u_birth; ?>"> 
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <select name="u_idcpu" class="input-text" style="width: 75px;">
                <option>-- CPU --</option>
                <option value="1" <?php if ($u_idcpu == 1) { echo ' selected="selected"'; } ?>>i3</option>
                <option value="2" <?php if ($u_idcpu == 2) { echo ' selected="selected"'; } ?>>i5</option>
                <option value="3" <?php if ($u_idcpu == 3) { echo ' selected="selected"'; } ?>>i7</option>
                <option value="4" <?php if ($u_idcpu == 4) { echo ' selected="selected"'; } ?>>i9</option>
            </select>
            <select name="u_idvga" class="input-text" style="width: 80px;">
                <option>-- VGA --</option>
                <option value="1" <?php if ($u_idvga == 1) { echo ' selected="selected"'; } ?>>GT210</option>
                <option value="2" <?php if ($u_idvga == 2) { echo ' selected="selected"'; } ?>>GT730</option>
                <option value="3" <?php if ($u_idvga == 3) { echo ' selected="selected"'; } ?>>GTX1050</option>
                <option value="4" <?php if ($u_idvga == 4) { echo ' selected="selected"'; } ?>>RTX2080</option>
            </select>
            <select name="u_idram" class="input-text" style="width: 75px;">
                <option>-- RAM --</option>
                <option value="1" <?php if ($u_idram == 1) { echo ' selected="selected"'; } ?>>2GB</option>
                <option value="2" <?php if ($u_idram == 2) { echo ' selected="selected"'; } ?>>4GB</option>
                <option value="3" <?php if ($u_idram == 3) { echo ' selected="selected"'; } ?>>8GB</option>
                <option value="4" <?php if ($u_idram == 4) { echo ' selected="selected"'; } ?>>16GB</option>
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


<footer>
    <div id="footer">
        <div class="inner-wrap clearfix">
            <div class="section about">
                <p>FOOTER</p>
            </div>
        </div>
    </div>
    <div id="bottom-footer">
        <div class = "inner-wrap clearfix">
            <p>© 2019 Copyright: alvinbintang</p>
        </div>
    </div>
</footer>
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
    if(u_gender === 'l'){
        u_gender = "Laki-laki";
    }else if(u_gender = 'p'){
        u_gender === "Perempuan";
    }else{
        u_gender = "-";
    }
    document.getElementById("gender").innerHTML = u_gender;

    var u_cpu = "<?php echo $u_idcpu; ?>";
    var m_cpu = "<?php echo $m_idcpu; ?>";
    var r_cpu = "<?php echo $r_idcpu; ?>";
    if(u_cpu >= r_cpu){
        u_cpu = "JOS MANTAP";
    }else if(u_cpu >= m_cpu && u_cpu <= r_cpu){
        u_cpu = "OKELAH";
    }else if(u_cpu <= m_cpu){
        u_cpu =  "LAG BOS";
    }
    document.getElementById("baca1").innerHTML = u_cpu;

    var u_vga = "<?php echo $u_idvga; ?>";
    var m_vga = "<?php echo $m_idvga; ?>";
    var r_vga = "<?php echo $r_idvga; ?>";
    if(u_vga >= r_vga){
        u_vga = "JOS MANTAP" ;
    }else if(u_vga >= m_vga && u_vga <= r_vga){
        u_vga = "OKELAH";
    }else if(u_vga <= m_vga){
        u_vga = "LAG BOS";
    }
    document.getElementById("baca2").innerHTML = u_vga;

    var u_ram = "<?php echo $u_idram; ?>";
    var m_ram = "<?php echo $m_idram; ?>";
    var r_ram = "<?php echo $r_idram; ?>";
    if(u_ram >= r_ram){
        u_ram = "JOS MANTAP";
    }else if(u_ram >= m_ram && u_ram <= r_ram){
        u_ram = "OKELAH";
    }else if(u_ram <= m_ram){
        u_ram = "LAG BOS";
    }
    document.getElementById("baca3").innerHTML = u_ram;
    
}

</script>
</body>
</html>