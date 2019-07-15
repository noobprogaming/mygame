<?php  
    include 'koneksi.php';
    $uname = $_POST['uname'];
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $gend = $_POST['gender'];
    $mail = $_POST['email'];
    $born = $_POST['birth'];
    $pp = "../assets/img/photo/$uname.jpg";
    $in_cpu = $_POST['u_idcpu'];
    $in_vga = $_POST['u_idvga'];
    $in_ram = $_POST['u_idram'];
    $in_ssd = $_POST['u_idssd'];
    $in_hdd = $_POST['u_idhdd'];
    $in_psu = $_POST['u_idpsu'];
    $in_kb = $_POST['u_idkb'];
    $in_mouse = $_POST['u_idmouse'];

    $data = mysqli_query($koneksi, "SELECT id FROM user WHERE id='$uname'");
    
    $cek = mysqli_num_rows($data);
    if($cek == 0){
        $sql_signup = "
        INSERT INTO user(id,name,password,gender,email,birth,joined,pp) VALUES ('$uname','$name','$pass','$gend','$mail','$born',now(),'$pp'); 
        INSERT INTO rig(id) SELECT id FROM user WHERE id='$uname'; 
        UPDATE rig SET 
        id_cpu='$in_cpu', 
        id_vga='$in_vga', 
        id_ram='$in_ram', 
        id_ssd='$in_ssd', 
        id_hdd='$in_hdd', 
        id_psu='$in_psu', 
        id_kb='$in_kb', 
        id_mouse='$in_mouse' 
        WHERE id='$uname';";
        mysqli_multi_query($koneksi,$sql_signup);
        

        session_start();
        
        $_SESSION['email'] = $mail;
        $_SESSION['name'] = $name;
        $_SESSION['status'] = "login";
        $_SESSION['google'] = "false";
        header("location:profile/profile.php?msg=success");
    }else{
        echo '<script';
        echo 'alert("Username tidak tersedia!")';
        echo '</script>';
    }
?>