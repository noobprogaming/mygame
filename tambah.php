<?php  
    include 'koneksi.php';
    $uname = $_POST['uname'];
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $gend = $_POST['gender'];
    $mail = $_POST['email'];
    $born = $_POST['birth'];
    $in_cpu = $_POST['u_idcpu'];
    $in_vga = $_POST['u_idvga'];
    $in_ram = $_POST['u_idram'];

    // jalanin kode di bawah
    $data = mysqli_query($koneksi, "SELECT id FROM user WHERE id='$uname'");
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
    if($cek == 0){
        $sql_signup = "INSERT INTO user VALUES ('$uname','$name','$pass','$gend','$mail','$born',now()); INSERT INTO rig(id) SELECT id FROM user WHERE id='$uname'; UPDATE rig SET id_cpu='$in_cpu', id_vga='$in_vga', id_ram='$in_ram' WHERE id='$uname';";
        mysqli_multi_query($koneksi,$sql_signup);
        
        header("location:index.php?pesan=success");
    }else{
        echo '<script';
        echo 'alert("Username tidak tersedia!")';
        echo '</script>';
    }
?>