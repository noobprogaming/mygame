<?php
    $index = $_GET['index'];
    $data = file_get_contents('anggota.json');
    $data = json_decode($data);
    unset($data[$index]);
    $data = json_encode(array_values($data), JSON_PRETTY_PRINT);
    file_put_contents('anggota.json', $data);
    header('location: index.php');
?>