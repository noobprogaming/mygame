<?php
if(!empty($_FILES['pp']))
{
  $path = "assets/img/photo/";
  $path = $path . basename( $_FILES['pp']['name']);

  if(move_uploaded_file($_FILES['pp']['tmp_name'], $path)) {
    echo "The file ".  basename( $_FILES['pp']['name']). 
    " has been uploaded";
    header("location:profile/index.php");
  } else{
      echo "There was an error uploading the file, please try again!";
  }
}
?>