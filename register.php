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
    <link rel="icon" type="image/png" href="assets/img/lg.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="assets/custom.css">
</head>
<style>
    .table {
        margin: 0 auto;
        margin-top: 5%;
        text-align: center;
        border: 1px solid rgb(201, 201, 201);
        width: 400px;
        height: 500px;
        padding-left: 2rem;
        padding-right: 2rem;
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    .inner-addon,
    .input-btn,
    select {
        padding-top: 0.2rem;
        padding-bottom: 0.2rem;
        margin: 0.2rem;
    }

    .form-text:hover {
        color: rgb(255, 23, 23);
        text-decoration: none;
    }

    button {
        width: 80px;
        background-color: rgb(255, 255, 255);
        color: rgb(255, 23, 23);
    }

    #s1 {
        margin-top: 3.1rem;
        margin-left: -16rem;
    }

    #s2 {
        margin-top: 1.2rem;
        margin-left: 16rem;
    }

    button:hover {
        color: rgb(139, 23, 23);
    }
</style>
</head>

<body onload="profile()">
    <?php 
include 'koneksi.php';
$email = "";
include 'sql.php';
?>
    <div class="table">
        <form method="post" action="tambah.php">
            <div style="height: 100%">
                <div id="slide1">
                    <tr>
                        <td>
                            <img src="assets/img/lg.png" class="logo logo-big my-3" />>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="inner-addon left-addon inner-addon-tall">
                                <i class="fa fa-user"></i>
                                <input type="text" name="uname" placeholder="ID Pengguna" class="input-text" required>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="inner-addon left-addon inner-addon-tall">
                                <i class="fa fa-id-badge"></i>
                                <input type="text" name="name" placeholder="Nama Lengkap" class="input-text" required>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="inner-addon left-addon inner-addon-tall">
                                <i class="fa fa-envelope"></i>
                                <input type="email" name="email" placeholder="E-mail" class="input-text" required>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="inner-addon left-addon inner-addon-tall">
                                <i class="fa fa-unlock"></i>
                                <input type="password" name="password" placeholder="Password" class="input-text"
                                    required>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="inner-addon left-addon inner-addon-tall">
                                <label class="rdb">Laki-laki
                                    <input type="radio" id="l" name="gender" value="l">
                                    <span class="rdb-check"></span>
                                </label>
                                <label class="rdb">Perempuan
                                    <input type="radio" id="p" name="gender" value="p">
                                    <span class="rdb-check"></span>
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="inner-addon left-addon inner-addon-tall">
                                <i class="fa fa-birthday-cake"></i>
                                <input type="date" name="birth" placeholder="Password" class="input-text">
                            </div>
                        </td>
                    </tr>
                </div>

                <div id="slide2">
                    <tr>
                        <td>
                            <h4 class="my-3">Masukkan spesifikasi komputer Anda</h4>
                        </td>
                    </tr>
                    <tr>
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
                                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
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
                                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
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
                                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
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
                                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
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
                                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
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
                                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
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
                                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
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
                                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Daftar" class="btn-sm input-btn" style="width: 200px;">
                        </td>
                    </tr>
                </div>
            </div>
        </form>
        <button id="s1">Kembali</button>
        <button id="s2">Lanjut</button>
    </div>

</body>
<script>
    function profile() {
        $('#slide2').hide();
        $('#s1').hide();

        $('#s1').on('click', function () {
            $('#slide1').show();
            $('#slide2').hide();
            $('#s1').hide();
            $('#s2').show();
        });

        $('#s2').on('click', function () {
            $('#slide2').show();
            $('#slide1').hide();
            $('#s2').hide();
            $('#s1').show();
        });
    }
</script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

</html>