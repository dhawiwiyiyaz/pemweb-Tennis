<?php

require 'function.php';

if (isset($_POST["masuk"])) {

    // menangkap data yang dikirim dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // menyeleksi data user dengan username dan password yang sesuai
    $login = mysqli_query($conn, " SELECT * FROM users WHERE username='$username'");
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($login);

    $data = mysqli_fetch_array($login);

    // cek apakah username dan password di temukan pada database
    if ($cek > 0) {
        session_start();
        if (password_verify($password, $data['password'])) {
            $_SESSION['id']    = $data['id'];
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $data['password'];

            if ($data['role'] == "admin") {
                $_SESSION['role'] = "admin";
            } else if ($data['role'] == "pengguna") {
                $_SESSION['role'] = "pengguna";
            }

            $_SESSION['login'] = true;
            $awal = "true";
            header("location: index.php");
        }
    }

    $error = true;
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <style>
        body {
            margin: 0;
            background: #4d753f;
        }

        input {
            border-radius: 15px;
        }

        .container {
            align-items: flex-start;
            background-color: var(--fern-green);
            display: flex;
            height: 563px;
            overflow: hidden;
            padding: 0 57px;
            width: 845px;
        }

        .container .overlap-group {
            height: 759px;
            margin-top: 37px;
            position: relative;
            width: 725px;
        }

        .container .rectangle-1 {
            background-color: #a6ba2d;
            height: 430px;
            left: 8px;
            position: absolute;
            top: 37px;
            width: 717px;
        }

        .container .rectangle-2 {
            height: 33px;
            left: 255px;
            position: absolute;
            top: 214px;
            width: 212px;
        }

        .container .rectangle-3 {
            cursor: pointer;
            background-color: #3d5b39;
            border-radius: 10px;
            height: 40px;
            left: 300px;
            position: absolute;
            top: 366px;
            width: 128px;
            color: var(--white);
            font-family: var(--font-family-krona_one);
            font-size: var(--font-size-s);
            font-weight: 400;
            letter-spacing: 0;
            line-height: normal;
            text-align: center;
            padding: 10px;
        }


        .container .rectangle-8 {
            background-color: var(--atlantis);
            cursor: pointer;
            height: 37px;
            left: 8px;
            position: absolute;
            top: 0;
            width: 100px;
        }

        .container .rectangle-9 {
            background-color: #bde059;
            cursor: pointer;
            height: 37px;
            left: 108px;
            position: absolute;
            top: 0;
            width: 96px;
        }

        .container .rectangle-10 {
            height: 33px;
            left: 255px;
            position: absolute;
            top: 291px;
            width: 212px;
        }

        .container .login {
            color: var(--black);
            font-family: var(--font-family-jockey_one);
            font-size: var(--font-size-l);
            font-weight: 400;
            left: 255px;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            text-align: center;
            top: 124px;
            width: 200px;
        }



        .container .username {
            color: #090909;
            font-family: var(--font-family-inter);
            font-size: var(--font-size-m);
            font-weight: 400;
            left: 214px;
            letter-spacing: 0;
            line-height: normal;
            mix-blend-mode: overlay;
            position: absolute;
            text-align: center;
            top: 184px;
            width: 184px;
        }

        .container .password {
            color: #080808;
            font-family: var(--font-family-inter);
            font-size: var(--font-size-m);
            font-weight: 400;
            left: 243px;
            letter-spacing: 0;
            line-height: normal;
            mix-blend-mode: overlay;
            position: absolute;
            text-align: center;
            top: 263px;
            width: 128px;
        }

        .container .login-1 {
            color: var(--white);
            font-family: var(--font-family-krona_one);
            left: 307px;
            top: 375px;
            width: 114px;
        }

        .container .login-2 {
            color: #129917;
            font-family: var(--font-family-open_sans);
            left: 0;
            top: 5px;
            width: 116px;
        }

        .container .login-3 {
            font-size: var(--font-size-m);
            font-weight: 400;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            text-align: center;
        }

        .container .pngimg-1 {
            height: 148px;
            left: 58px;
            top: 274px;
            width: 148px;
            position: absolute;
        }

        .container .title {
            color: var(--black);
            font-family: var(--font-family-oleo_script);
            font-size: var(--font-size-xl);
            font-weight: 400;
            left: 255px;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            text-align: center;
            top: 59px;
            width: 201px;
        }

        .container .pngimg-2 {
            height: 48px;
            left: 626px;
            top: 393px;
            width: 49px;
            position: absolute;
        }

        .container .pngimg-3 {
            height: 50px;
            left: 624px;
            top: 75px;
            width: 51px;
            position: absolute;
        }

        .container .pngimg-4 {
            height: 50px;
            left: 57px;
            top: 75px;
            width: 51px;
            position: absolute;
        }

        .container .sign-up {
            color: #129918;
            font-family: var(--font-family-open_sans);
            font-size: var(--font-size-m);
            font-weight: 400;
            left: 98px;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            text-align: center;
            top: 5px;
            width: 116px;
        }

        .container .belum-punya-akun {
            color: var(--black);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-xs);
            font-weight: 400;
            left: 75px;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            text-align: center;
            top: 427px;
            width: 535px;
        }

        .container .daftar {
            color: var(--black);
            cursor: pointer;
            font-family: var(--font-family-inter);
            font-size: var(--font-size-xs);
            font-weight: 400;
            left: 249px;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            text-align: center;
            text-decoration: underline;
            top: 427px;
            width: 345px;
        }
    </style>
</head>

<body>
    <input type="hidden" id="anPageName" name="page" value="container" />
    <div class="container-center-horizontal">
        <div class="container screen">
            <div class="overlap-group">
                <div class="rectangle-1" id="rectangle-1"></div>
                <a href="#">
                    <div class="rectangle-8"></div>
                </a>
                <div class="login-2 login-3">Login</div>
                <a href="register.php">
                    <div class="rectangle-9"></div>
                </a>

                <div class="sign-up">Sign Up</div>
                <h1 class="title">TenisTopia</h1>
                <div class="login">Login</div>

                <img class="pngimg-1 pngimg" src="img/pngimg-1.png" alt="pngimg 1" />
                <img class="pngimg-2 pngimg" src="img/pngimg-1.png" alt="pngimg 2" />
                <img class="pngimg-3 pngimg" src="img/pngimg-1.png" alt="pngimg 3" />
                <img class="pngimg-4 pngimg" src="img/pngimg-1.png" alt="pngimg 5" />

                <form action="register.php" method="post">
                    <label for="username" class="username">Username</label>
                    <input type="text" name="username" id="username" class="rectangle-2" />
                    <label for="password" name="password" id="password" class="password">Password</label>
                    <input type="password" name="password" id="password" class="rectangle-10" />

                    <input type="submit" class="rectangle-3" value="Login">
                </form>
                <div class="belum-punya-akun">Belum punya akun?</div>
                <a href="register.php">
                    <div class="daftar">Daftar</div>
                </a>
            </div>
        </div>
    </div>
</body>

</html>