<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" type="image/png" href="assets/img/google.png" />
    <title>Register</title>
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
<body>
<form method="post" action="tambah.php">
<table id="table">
    <tr>
        <td>
            <img src="https://image.flaticon.com/icons/svg/270/270014.svg"; width="150px">
        </td>
    </tr>
    <tr>
        <td>
            <div class="inner-addon left-addon inner-addon-tall">
                <i class="fa fa-id-badge"></i> 
                <input type="text" name="uname" placeholder="ID Pengguna" class="input-text">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="inner-addon left-addon inner-addon-tall">
                <i class="fa fa-user"></i> 
                <input type="text" name="name" placeholder="Nama Lengkap" class="input-text">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="inner-addon left-addon inner-addon-tall">
                <i class="fa fa-envelope"></i> 
                <input type="email" name="email" placeholder="E-mail" class="input-text">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="inner-addon left-addon inner-addon-tall">
                <i class="fa fa-unlock"></i> 
                <input type="password" name="password" placeholder="Password" class="input-text">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="inner-addon left-addon inner-addon-tall">
                <input type="radio" id="l" name="gender" value="l" class="input-text" style="width: 15px;"><label for="l" style="margin-right: 10px;">Laki-laki</label>
                <input type="radio" id="p" name="gender" value="p" class="input-text" style="width: 15px;"><label for="p">Perempuan</label>
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
    <tr>
        <td>
            <select name="u_idcpu" class="input-text" style="width: 75px;">
                <option>CPU</option>
                <option value="1">i3</option>
                <option value="2">i5</option>
                <option value="3">i7</option>
                <option value="4">i9</option>
            </select>
            <select name="u_idvga" class="input-text" style="width: 80px;">
                <option>VGA</option>
                <option value="1">GT210</option>
                <option value="2">GT730</option>
                <option value="3">GTX1050</option>
                <option value="4">RTX2080</option>
            </select>
            <select name="u_idram" class="input-text" style="width: 75px;">
                <option>RAM</option>
                <option value="1">2GB</option>
                <option value="2">4GB</option>
                <option value="3">8GB</option>
                <option value="4">16GB</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <input type="submit" value="Daftar" class="input-button">
        </td>
    </tr>
</table>
</form>
</body>
</html>