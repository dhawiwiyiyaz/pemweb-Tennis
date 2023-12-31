<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}

require 'function.php';

if (isset($_POST["tambah"])) {
	// cek apakah data berhasil ditambahkan atau tidak
	if (tambah($_POST) > 0) {
		echo "
			<script>
				alert('Berhasil Ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Tidak Berhasil Ditambahkan!');
				document.location.href = 'add_player.php';
			</script>
		";
	}
}
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

            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }

            h2 {
                text-align: center;
            }

            table {
                margin: 30px auto;
                width: 80%;
                max-width: 500px;
                border-collapse: collapse;
            }


            .form-table {
                width: 100%;
                border-collapse: collapse;
            }

            .form-table td {
                padding: 10px;
                vertical-align: top;
            }

            .form-table label {
                display: block;
                margin-bottom: 5px;
            }

            .form-table input[type="text"],
            .form-table input[type="date"],
            .form-table input[type="number"],
            .form-table input[type="file"],
            .form-table select {
                width: 100%;
                padding: 5px;
                border: 1px solid #ddd;
                border-radius: 15px;
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
                    <div class="text-wrapper-2"><a href="profile.html">Profil</a></div>
                    <img class="element-cfcc" src="img/0fe72abc-cfcc-4e8a-ba01-e39bc3e2b77d-169-2.png" />
                    <div class="rectangle-2">
                        <h2>Tambah Data Pemain</h2>

                        <form action="" method="post" enctype="multipart/form-data">
                            <table class="form-table">
                                <tr>
                                    <td><label for="foto">Foto</label></td>
                                    <td><input type="file" id="foto" name="foto" required></td>
                                </tr>
                                <tr>
                                    <td><label for="nama">Nama</label></td>
                                    <td><input type="text" id="nama" name="nama" required></td>
                                </tr>
                                <tr>
                                    <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
                                    <td>
                                        <select id="jenis_kelamin" name="jenis" required>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="tanggal_lahir">Tanggal Lahir</label></td>
                                    <td><input type="date" id="tanggal_lahir" name="tanggal" required></td>
                                </tr>
                                <tr>
                                    <td><label for="tangan">Tangan</label></td>
                                    <td>
                                        <select id="tangan" name="tangan" required>
                                            <option value="Kanan">Kanan</option>
                                            <option value="Kiri">Kiri</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="ranking">Ranking</label></td>
                                    <td><input type="number" id="ranking" name="ranking" required min="1"></td>
                                </tr>

                                <tr>
                                    <td colspan="2">
                                        <button type="submit" name="tambah">Tambah Data</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
    </body>

</html>