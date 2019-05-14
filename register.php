<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="icon" type="image/png" href="/assets/img/google.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="assets/custom.css">
    <style>
        table,
        td {
            margin: 0 auto;
            margin-top: 5%;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>

<body>

    <form method="post" action="tambah.php">
        <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <table id="table">
                        <tr>
                            <td>
                                <img src="https://image.flaticon.com/icons/svg/270/270014.svg" ; width="150px">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="inner-addon left-addon inner-addon-tall">
                                    <i class="fa fa-user"></i>
                                    <input type="text" name="uname" placeholder="ID Pengguna" class="input-text">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="inner-addon left-addon inner-addon-tall">
                                    <i class="fa fa-id-badge"></i>
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
                                    <input type="radio" id="l" name="gender" value="l" class="input-text"
                                        style="width: 15px;"><label for="l"
                                        style="margin-right: 10px;">Laki-laki</label>
                                    <input type="radio" id="p" name="gender" value="p" class="input-text"
                                        style="width: 15px;"><label for="p">Perempuan</label>
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
                    </table>
                </div>
                <div class="carousel-item">
                    <table id="table">
                        <tr>
                            <td>
                                <img src="https://image.flaticon.com/icons/svg/270/270014.svg" ; width="150px">
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
                                <input type="submit" value="Daftar" class="btn-sm input-btn" style="width: 200px;">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>            
            <button class="input-btn" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
            <button class="input-btn" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </form>

</body>
<script>
    jQuery(window).load(function () {
        /* Stop carousel */
        $('.carousel').carousel('pause');
    });
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

</html>