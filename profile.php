<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}

require "function.php";

$id = $_SESSION['id'];
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

            .container {
                display: flex;
                align-items: center;
            }

            .kanan {
                flex: 0.01;
                margin-bottom: 30px;
            }

            .kiri {
                flex: 1;
            }




            h2 {
                text-align: center;
            }



            .profile-picture {
                width: 150px;
                height: 150px;
                margin: 50px;
                object-fit: cover;
                margin-bottom: 20px;
            }

            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }


            table {
                margin: 0px auto;
                width: 80%;
                max-width: 500px;
                border-collapse: collapse;

            }

            td {
                padding: 10px;

            }

            .kolom-1 {
                width: 40%;
            }

            .kolom-2 {
                width: 60%;
            }

            table label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
            }

            .profile-right {
                padding-left: 20px;
            }
        </style>
    </head>

    <body>
        <div class="add-player">
            <div class="overlap-group-wrapper">
                <div class="overlap-group">
                    <div class="rectangle"></div>
                    <div class="text-wrapper">TenisTopia</div>
                    <div class="div"><a href="logout-process.php">Logout</a></div>
                    <div class="text-wrapper-2"><a href="profile.php">Profil</a></div>

                    <img class="element-cfcc" src="img/0fe72abc-cfcc-4e8a-ba01-e39bc3e2b77d-169-2.png" />
                    <div class="rectangle-2">
                        <h2>Profil Saya</h2>
                        <div class="container">
                            <div class="kanan">
                                <img src="img/profil-1@2x.png" alt="Foto Profil" class="profile-picture">
                            </div>
                            <div class="kiri">
                                <table>
                                <?php 
                            $user = mysqli_query($conn, "SELECT * from users WHERE id='$id' ");
                            $hasil= mysqli_fetch_array($user)
                            ?>
                                    <tr>
                                        <td class="kolom-1"><label>Nama Lengkap</label></td>
                                        <td class="kolom-2"><?= $hasil["full_name"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="kolom-1"><label>Username</label></td>
                                        <td class="kolom-2"><?= $hasil["username"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="kolom-1"><label>Email</label></td>
                                        <td class="kolom-2"><?= $hasil["email"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="kolom-1"><label>Alamat</label></td>
                                        <td class="kolom-2"><?= $hasil["alamat"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="kolom-1"><label>No. Telepon</label></td>
                                        <td class="kolom-2"><?= $hasil["notelp"]; ?></td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>