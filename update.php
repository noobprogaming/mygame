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

    $sql_update = "UPDATE user SET name='$name', password='$pass', gender='$gend', email='$mail' WHERE id='$uname'; UPDATE rig SET id_cpu='$in_cpu', id_vga='$in_vga', id_ram='$in_ram' WHERE id='$uname';";
    mysqli_multi_query($koneksi,$sql_update);


    //upload photo
    if(!empty($_FILES['pp'])){
        $newfilename = $uname . ".jpg";

        if(move_uploaded_file($_FILES['pp']['tmp_name'], "assets/img/photo/" . $newfilename)) {
            echo "The file ".  basename( $_FILES['pp']['name']). 
            " has been uploaded";
            header("location:profile/index.php");
        }else{
            echo "There was an error uploading the file, please try again!";
        }
    }
    
    header("location:profile/index.php");

?>