<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <style>
        body {
            margin: 0;
            background: #4d753f;
        }

        input,
        textarea {
            border-radius: 15px;
        }

        .container {
            align-items: flex-start;
            display: flex;
            width: 845px;
        }

        #overlay-container {
            align-items: center;
            background-color: #ffffff00;
            justify-content: center;
        }

        .container .main {
            align-items: flex-end;
            background-color: var(--fern-green);
            display: flex;
            height: 563px;
            overflow: hidden;
            padding: 34px 0;
            width: 845px;
        }

        .container .title {
            color: var(--black);
            font-family: var(--font-family-oleo_script);
            font-size: var(--font-size-xxxl);
            font-weight: 400;
            left: 350px;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            text-align: center;
            top: 45px;
            width: 201px;
        }


        .container .overlap-group {
            height: 488px;
            margin-left: -29px;
            position: relative;
            width: 815px;
        }

        .container .rectangle-1 {
            background-color: #a6ba2d;
            height: 439px;
            left: 98px;
            position: absolute;
            top: 37px;
            width: 717px;
        }

        .container .rectangle-2 {
            height: 30px;
            left: 252px;
            position: absolute;
            top: 155px;
            width: 199px;
        }

        .container .rectangle-3 {
            background-color: #3d5b39;
            border-radius: 10px;
            height: 40px;
            left: 392px;
            position: absolute;
            top: 420px;
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

        .container .rectangle-4 {
            height: 30px;
            left: 252px;
            position: absolute;
            top: 220px;
            width: 199px;
        }

        .container .rectangle-5 {
            height: 30px;
            left: 252px;
            position: absolute;
            top: 285px;
            width: 199px;
        }

        .container .rectangle-6 {
            height: 95px;
            left: 585px;
            position: absolute;
            top: 155px;
            width: 199px;
        }

        .container .rectangle-7 {
            height: 30px;
            left: 585px;
            position: absolute;
            top: 277px;
            width: 199px;
        }

        .container .rectangle-8 {
            background-color: var(--atlantis);
            cursor: pointer;
            height: 37px;
            left: 194px;
            position: absolute;
            top: 0;
            width: 100px;
            color: #129917;
            font-family: var(--font-family-open_sans);
            font-size: var(--font-size-m);
            font-weight: 400;

            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            text-align: center;
            padding: 5px;
        }

        .container .rectangle-9 {
            background-color: #bde059;
            cursor: pointer;
            height: 37px;
            left: 98px;
            position: absolute;
            top: 0;
            width: 96px;
            font-style: #129917;
            font-family: var(--font-family-open_sans);
            font-size: var(--font-size-m);
            font-weight: 400;
            letter-spacing: 0;
            line-height: normal;
            text-align: center;
            padding: 5px;
        }

        .container .rectangle-10 {
            height: 30px;
            left: 252px;
            position: absolute;
            top: 357px;
            width: 199px;
        }

        .container .buat-akun-baru {
            color: var(--black);
            font-family: var(--font-family-jockey_one);
            font-size: var(--font-size-xl);
            font-weight: 400;
            left: 351px;
            letter-spacing: 0;
            line-height: normal;
            position: absolute;
            text-align: center;
            top: 97px;
            width: 200px;
        }

        .container .nama-lengkap {
            left: 85px;
            letter-spacing: 0;
            line-height: normal;
            mix-blend-mode: overlay;
            position: absolute;
            text-align: center;
            top: 162px;
            width: 184px;
        }

        .container .username {
            color: var(--black);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-m);
            font-weight: 400;
            left: 98px;
            letter-spacing: 0;
            line-height: normal;
            mix-blend-mode: overlay;
            position: absolute;
            text-align: center;
            top: 220px;
            width: 128px;
        }

        .container .password {
            color: var(--black);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-m);
            font-weight: 400;
            left: 98px;
            letter-spacing: 0;
            line-height: normal;
            mix-blend-mode: overlay;
            position: absolute;
            text-align: center;
            top: 286px;
            width: 128px;
        }

        .container .email {
            color: var(--black);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-m);
            font-weight: 400;
            left: 0;
            letter-spacing: 0;
            line-height: normal;
            mix-blend-mode: overlay;
            position: absolute;
            text-align: center;
            top: 362px;
            width: 286px;
        }

        .container .alamat {
            left: 421px;
            letter-spacing: 0;
            line-height: normal;
            mix-blend-mode: overlay;
            position: absolute;
            text-align: center;
            top: 162px;
            width: 184px;
        }

        .container .no-telepon {
            left: 435px;
            letter-spacing: 0;
            line-height: normal;
            mix-blend-mode: overlay;
            position: absolute;
            text-align: center;
            top: 280px;
            width: 184px;
        }

        .container .pngimg-1 {
            height: 106px;
            left: 626px;
            top: 338px;
            width: 107px;
        }

        .container .pngimg-2 {
            height: 48px;
            left: 133px;
            top: 94px;
            width: 49px;
        }

        .container .pngimg-3 {
            height: 50px;
            left: 725px;
            top: 72px;
            width: 51px;
        }
    </style>
</head>

<body style="margin: 0">
    <input type="hidden" id="anPageName" name="page" value="container" />
    <div class="container-center-horizontal">
        <div class="container screen">
            <div class="main">
                <div class="overlap-group">
                    <div class="rectangle-1" id="rectangle-1"></div>
                    <a href="#rectangle-1">
                        <div class="rectangle-9">
                            <a href="macbook-1.html">Login</a>
                        </div>
                        <div class="rectangle-8">
                            <a href="macbook-3.html">Sign Up</a>
                        </div>

                        <img class="pngimg-1 pngimg" src="img/pngimg-1.png" alt="pngimg 1" />
                        <img class="pngimg-2 pngimg" src="img/pngimg-1.png" alt="pngimg 2" />
                        <img class="pngimg-3 pngimg" src="img/pngimg-1.png" alt="pngimg 3" />
                        <h1 class="title">TenisTopia</h1>
                        <div class="buat-akun-baru">Buat Akun Baru</div>

                        <form action="login.php" method="post">
                            <label for="nama-lengkap" class="nama-lengkap inter-normal-black-15px">Nama Lengkap</label>
                            <input type=" text" class="rectangle-2" name="nama-lengkap" id="nama-lengkap">
                            <label for="username" class="username">Username</label>
                            <input type="text" class="rectangle-4" name="username" id="username">
                            <label for="password" class="password">Password</label>
                            <input type="password" class="rectangle-5" name="password" id="password">
                            <label for="email" class="email">Email</label>
                            <input type="email" class="rectangle-10" name="email" id="email">
                            <label for="alamat" class="alamat inter-normal-black-15px">Alamat</label>
                            <textarea class="rectangle-6" name="alamat" id="alamat"></textarea>
                            <label for="no-telepon" class="no-telepon inter-normal-black-15px">No.Telepon</label>
                            <input type="number" class="rectangle-7" name="no-telepon" id="no-telepon">
                            <input type="submit" class="rectangle-3" value="Daftar">
                        </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>