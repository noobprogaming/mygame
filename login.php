<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" type="image/png" href="assets/img/google.png" />
    <title>Login</title>
    <style>
        #table {
            border: 1px solid rgb(180, 180, 180); 
            padding: 30px 20px;
            border-radius: 5px;
        }
        table, td {
            margin: 0 auto;
            margin-top: 8%;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
<form method="post" action="cek_login.php">
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
                <input type="text" name="username" placeholder="ID Pengguna" id="uname" class="input-text">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="inner-addon left-addon inner-addon-tall">
                <i class="fa fa-unlock"></i> 
                <input type="password" name="password" placeholder="Password" id="pass" class="input-text">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <input type="submit" value="Login" class="input-button">
        </td>
    </tr>
</table>
</form>
</body>
</html>