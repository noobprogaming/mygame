<?php
    $index = $_GET['index'];
    $data = file_get_contents('anggota.json');
    $data_array = json_decode($data);
    $d = $data_array[$index];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<form method="POST">
<table>
    <tr>
        <th colspan="2">DATA PRIBADI</th>
    </tr>
    <tr>
        <td>
            <label for="a">Nomor</label>
        </td>
        <td>
            <input type="text" placeholder="Nomor" id="a" name="nomor" class="input-text" value="<?php echo $d->no; ?>">
        </td>
    </tr>
    <tr>
        <td>
            <label for="b">Nama</label>
        </td>
        <td>
            <input type="text" placeholder="Nama" id="b" name="nama" class="input-text" value="<?php echo $d->nama; ?>">
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <input type="submit" name="update" value="Update" class="input-button">
            <input type="reset" value="Batal" class="input-button">
        </td>
    </tr>
</table>
</form>

<?php
if(isset($_POST['update'])){
    $input = array(
        'no' => $_POST['nomor'],
        'nama' => $_POST['nama']
    );

    $data_array[$index] = $input; 
    $data = json_encode(array_values($data_array), JSON_PRETTY_PRINT);
    file_put_contents('anggota.json', $data);
    header("location: index.php");
}
?>

<table>
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Action</td>
    </tr>
    <?php
        $data = file_get_contents('anggota.json');
        $data = json_decode($data);
        $index = 0;
        foreach($data as $d){
            echo "
                <tr>
                    <td width='100'>".$d->no."</td>
                    <td width='100'>".$d->nama."</td>
                    <td width='100'>
                        <a href='update.php?index=".$index."'>Edit</a>
                        <a href='delete.php?index=".$index."'>Delete</a>
                    </td>
                </tr>
            ";
            $index++;
        }
    ?>
</table>

</body>
</html>