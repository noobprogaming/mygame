<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id"
        content="562498474090-rmhpeunoatnlg7lv8b9buije5n0n2r9t.apps.googleusercontent.com">

    <title>Punyakita</title>
    <link rel="icon" type="image/png" href="assets/img/lg.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="assets/custom.css">
</head>
<style>
    table {
        margin: 0 auto;
        margin-top: 8%;
        text-align: center;
        border: 1px solid rgb(201, 201, 201);
        width: 350px;
        height: 350px;
    }

    td {
        padding-left: 3rem;
        padding-right: 3rem;
    }

    .form-text:hover {
        color: rgb(255, 23, 23);
        text-decoration: none;
    }
</style>
</head>

<body>
    <form method="post" action="sign.php">
        <table>
            <tr>
                <td>
                    <img src="assets/img/lg.png" class="logo logo-big my-3" />>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="inner-addon inner-addon-tall">
                        <i class="fa fa-user"></i>
                        <input type="text" name="email" placeholder="Email" id="uname" class="input-text">
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
                <td align="center">
                    <div class="g-signin2" style="width: 35px; height: 30px" data-onsuccess="onSignIn" data-theme="dark"></div>
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
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
</html>