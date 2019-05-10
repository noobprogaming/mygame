<?php
if(isset($_POST['save'])){
    $data = file_get_contents('anggota.json');
    $data = json_decode($data);

    $input = array(
        'nama' => $_POST['nama'],
        'cpu' => $_POST['cpu'],
        'vga' => $_POST['vga'],     
        'ram' => $_POST['ram'],
        'psu' => $_POST['psu']
    );

    $data[] = $input;        
    $data = json_encode(array_values($data), JSON_PRETTY_PRINT);
    file_put_contents('anggota.json', $data);
}

header("location: index.php");
?>