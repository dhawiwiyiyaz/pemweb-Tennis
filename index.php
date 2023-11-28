<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
    <style>
        body {
            background-color: #4d753f;
        }

        .add-player {
            ba<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}

require 'function.php';
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
    <style>
        body {
            background-color: #4d753f;
        }

        .add-player {
            background-color: #4d753f;
            display: flex;
            flex-direction: row;
            justify-content: center;
            width: 100%;

        }

        .add-player .overlap-group-wrapper {
            background-color: #4d753f;
            overflow: hidden;
            width: 845px;
            height: 563px;
        }

        .add-player .overlap-group {
            position: relative;
            width: 1092px;
            height: 563px;
        }

        .add-player .rectangle {
            width: 845px;
            height: 94px;
            top: 0;
            left: 0;
            position: absolute;
            background-color: #a7bb2e;
        }

        .add-player .text-wrapper {
            position: absolute;
            width: 201px;
            top: 20px;
            left: 0;
            font-family: "Oleo Script-Regular", Helvetica;
            font-weight: 400;
            color: #000000;
            font-size: 36px;
            text-align: center;
            letter-spacing: 0;
            line-height: normal;
        }

        .add-player .div {
            position: absolute;
            width: 335px;
            top: 38px;
            left: 757px;
            font-family: "Inter-Regular", Helvetica;
            font-weight: 400;
            color: #000000;
            font-size: 16px;
            letter-spacing: 0;
            line-height: normal;
        }

        .add-player .element-cfcc {
            position: absolute;
            width: 845px;
            height: 469px;
            top: 94px;
            left: 0;
            object-fit: cover;
        }

        .add-player .rectangle-2 {
            width: 797px;
            height: 413px;
            top: 120px;
            left: 25px;
            position: absolute;
            background-color: #a7bb2e;
        }

        .add-player .text-wrapper-2 {
            position: absolute;
            width: 335px;
            top: 38px;
            left: 682px;
            font-family: "Inter-Regular", Helvetica;
            font-weight: 400;
            color: #000000;
            font-size: 16px;
            letter-spacing: 0;
            line-height: normal;
        }



        #daftar-pemain {
            width: 100%;
            border-collapse: collapse;
            border: 2px solid black;
        }

        #daftar-pemain thead th {
            color: black;
            text-align: center;
            padding: 8px;
            border: 2px solid black;
        }

        #daftar-pemain tbody td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        #daftar-pemain tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #daftar-pemain tbody tr:hover {
            background-color: #ddd;
        }

        #daftar-pemain img {
            width: 50px;
            height: auto;

        }
    </style>
</head>

<body>
    <div class="add-player">
        <div class="overlap-group-wrapper">
            <div class="overlap-group">
                <div class="rectangle"></div>
                <div class="text-wrapper" style="font-family: var(--font-family-oleo_script);;">TenisTopia</div>
                <div class="div">Logout</div>
                <div class="text-wrapper-2"><a href="profile.php">Profil</a></div>
                <button class="tambah-data-btn">Tambah Data</button>
                <img class="element-cfcc" src="img/0fe72abc-cfcc-4e8a-ba01-e39bc3e2b77d-169-2.png" />
                <!-- Tombol Tambah Data untuk Admin -->
                <div class="rectangle-2">

                    <table id="daftar-pemain">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Tangan</th>
                                <th>Ranking</th>
                                <!--admin-->
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $player = mysqli_query($conn, "SELECT * from pemain");
                            while($hasil= mysqli_fetch_array($player)){ 
                            ?>

                            <tr>
                                <td hidden><?= $hasil["id"]?></td>
                                <td><img src="<?= "img/pemain/".$hasil["foto"]?>" alt=""></td>
                                <td><?= $hasil["nama"]?></td>
                                <td><?= $hasil["jenis_kelamin"]?></td>
                                <td><?= $hasil["tanggal_lahir"]?></td>
                                <td><?= $hasil["tangan"]?></td>
                                <td><?= $hasil["ranking"]?></td>
                                <td>
                                    <button><a href="edit_player.php?id=<?= $hasil["id"]?>">Edit</a></button>
                                </td>
                            </tr>
                            <?php } ?>

                        </tbody>
                    </table>

                </div>

            </div>


        </div>
    </div>
</body>

</html>ckground-color: #4d753f;
            display: flex;
            flex-direction: row;
            justify-content: center;
            width: 100%;

        }

        .add-player .overlap-group-wrapper {
            background-color: #4d753f;
            overflow: hidden;
            width: 845px;
            height: 563px;
        }

        .add-player .overlap-group {
            position: relative;
            width: 1092px;
            height: 563px;
        }

        .add-player .rectangle {
            width: 845px;
            height: 94px;
            top: 0;
            left: 0;
            position: absolute;
            background-color: #a7bb2e;
        }

        .add-player .text-wrapper {
            position: absolute;
            width: 201px;
            top: 20px;
            left: 0;
            font-family: "Oleo Script-Regular", Helvetica;
            font-weight: 400;
            color: #000000;
            font-size: 36px;
            text-align: center;
            letter-spacing: 0;
            line-height: normal;
        }

        .add-player .div {
            position: absolute;
            width: 335px;
            top: 38px;
            left: 757px;
            font-family: "Inter-Regular", Helvetica;
            font-weight: 400;
            color: #000000;
            font-size: 16px;
            letter-spacing: 0;
            line-height: normal;
        }

        .add-player .element-cfcc {
            position: absolute;
            width: 845px;
            height: 469px;
            top: 94px;
            left: 0;
            object-fit: cover;
        }

        .add-player .rectangle-2 {
            width: 797px;
            height: 413px;
            top: 120px;
            left: 25px;
            position: absolute;
            background-color: #a7bb2e;
        }

        .add-player .text-wrapper-2 {
            position: absolute;
            width: 335px;
            top: 38px;
            left: 682px;
            font-family: "Inter-Regular", Helvetica;
            font-weight: 400;
            color: #000000;
            font-size: 16px;
            letter-spacing: 0;
            line-height: normal;
        }



        #daftar-pemain {
            width: 100%;
            border-collapse: collapse;
            border: 2px solid black;
        }

        #daftar-pemain thead th {
            color: black;
            text-align: center;
            padding: 8px;
            border: 2px solid black;
        }

        #daftar-pemain tbody td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        #daftar-pemain tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #daftar-pemain tbody tr:hover {
            background-color: #ddd;
        }

        #daftar-pemain img {
            width: 50px;
            height: auto;

        }
    </style>
</head>

<body>
    <div class="add-player">
        <div class="overlap-group-wrapper">
            <div class="overlap-group">
                <div class="rectangle"></div>
                <div class="text-wrapper" style="font-family: var(--font-family-oleo_script);;">TenisTopia</div>
                <div class="div">Logout</div>
                <div class="text-wrapper-2"><a href="profile.html">Profil</a></div>
                <img class="element-cfcc" src="img/0fe72abc-cfcc-4e8a-ba01-e39bc3e2b77d-169-2.png" />
                <!-- Tombol Tambah Data untuk Admin -->
                <button class="tambah-data-btn">Tambah Data</button>
                <div class="rectangle-2">
                    <table id="daftar-pemain">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Tangan</th>
                                <th>Ranking</th>
                                <!--admin-->
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- insert ke sini pake PHP, aksi admin -->
                        </tbody>
                    </table>

                </div>

            </div>


        </div>
    </div>
</body>

</html>