<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="icon" type="image/png" href="/assets/img/google.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="assets/custom.css">
    <style>
        table,
        td {
            margin: 0 auto;
            margin-top: 8%;
            padding: 5px;
            text-align: center;
        }
        .form-text:hover {
            color: rgb(255, 23, 23);
            text-decoration: none;
        }
    </style>
</head>

<body>
    <form method="post" action="cek_login.php">
        <table>
            <tr>
                <td>
                    <img src="https://image.flaticon.com/icons/svg/270/270014.svg"; width="150px">
                </td>
            </tr>
            <tr>
                <td>
                    <div class="inner-addon inner-addon-tall">
                        <i class="fa fa-user"></i>
                        <input type="text" name="username" placeholder="ID" id="uname" class="input-text">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="inner-addon inner-addon-tall">
                        <i class="fa fa-unlock"></i>
                        <input type="password" name="password" placeholder="Kata Sandi" id="pass" class="input-text">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Masuk" class="btn-sm input-btn" style="width: 200px;">
                </td>
            </tr>
            <tr>
                <td>
                    <a href="register.php" class="form-text">Belum punya akun?</a><br>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>