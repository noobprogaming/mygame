<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <title>Document</title>
</head>
<body onload="time()">
<h2 id="greeting"></h2>
<h2 id="proci"></h2>
<form method="POST" action="insert.php">
<table>
    <tr>
        <th colspan="2">Login</th>
    </tr>
    <tr>
        <td>
            <label for="a">Nama</label>
        </td>
        <td>
            <input type="text" placeholder="Nama" id="a" name="nama" class="input-text" required>
        </td>
    </tr>
    <tr>
        <td>
            <label for="b">Processor</label>
        </td>
        <td>
            <select id="b" name="cpu" class="input-text">
                <option value="AMD">AMD</option>
                <option value="Intel">Intel</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <label for="c">Graphic Card</label>
        </td>
        <td>
            <select id="c" name="vga" class="input-text">
                <option value="NVIDIA">NVIDIA</option>
                <option value="AMD RADEON">AMD RADEON</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <label for="d">RAM</label>
        </td>
        <td>
            <select id="d" name="ram" class="input-text">
                <option value="DDR4">DDR4</option>
                <option value="DDR3">DDR3</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <label for="e">Power Supply</label>
        </td>
        <td>
            <select id="e" name="psu" class="input-text">
                <option value="Gold">Gold</option>
                <option value="Platinum">Platinum</option>
                <option value="Bronze">Bronze</option>
            </select>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <input type="submit" name="save" value="Simpan" class="input-button">
            <input type="reset" value="Batal" class="input-button">
        </td>
    </tr>
</table>
</form>

<table>
    <tr>
        <th>Nama</th>
        <th>Processor</th>
        <th>Graphic Card</th>
        <th>RAM</th>
        <th>PSU</th>
        <th>Action</th>
    </tr>
    <?php
        $data = file_get_contents('anggota.json');
        $data = json_decode($data);
        $index = 0;
        foreach($data as $d){
            echo "
                <tr>
                    <td width='100'>".$d->nama."</td>
                    <td width='100' id='ancok'>".$d->cpu."</td>
                    <td width='100'>".$d->vga."</td>
                    <td width='100'>".$d->ram."</td>
                    <td width='100'>".$d->psu."</td>

                    
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


    var y = document.getElementById("ancok").innerHTML;    
    if(y === "AMD"){
        p = "Processormu pasti si merah";
    }else if(y === "Intel"){
        p = "Processormu pasti si biru";
    }
    document.getElementById("proci").innerHTML = p;
}
</script>
</body>
</html>