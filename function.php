<?php

$conn = mysqli_connect("localhost", "root", "", "responsi2");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function daftar($data){
    global $conn;

    $nama = $data["nama"];
    $username = $data["username"];
    $password = $data["password"];
    $email = $data["email"];
    $alamat = $data["alamat"];
    $notelp = $data["no"];

    $cekuname = mysqli_query($conn, "SELECT username FROM users WHERE username ='$username'");

    if (mysqli_fetch_assoc($cekuname)) {
		echo "
		<script>
			alert ('username sudah terdaftar');
		</script>
		";
		return false;
	}

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO users VALUES
                    ('', '$username', '$password', '$nama', '$email', '$alamat', '$notelp', 'pengguna')
                ");

	return mysqli_affected_rows($conn);
}

function tambah($data){
    global $conn;

    $foto = basename($_FILES["foto"]['name']);
    $nama = $data["nama"];
    $jenis = $data["jenis"];
    $tanggal = $data["tanggal"];
    $tangan = $data["tangan"];
    $ranking = $data["ranking"];

    $tempdir = "img/pemain/"; 
        if (!file_exists($tempdir))
        mkdir($tempdir,0755); 
        //gambar akan di simpan di folder gambar
        $target_path = $tempdir . $foto;

        //nama gambar
        $nama_gambar=$_FILES['foto']['name'];
        
			$file_tmp = $_FILES['foto']['tmp_name'];	
        move_uploaded_file($file_tmp, $tempdir.$nama_gambar);
        

    mysqli_query($conn, "INSERT INTO pemain VALUES
                    ('', '$nama_gambar','$nama','$jenis','$tanggal','$tangan','$ranking')
                ");

	return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;

    $id = $data["id"];
    $foto = basename($_FILES["foto"]['name']);
    $nama = $data["nama"];
    $jenis = $data["jenis"];
    $tanggal = $data["tanggal"];
    $tangan = $data["tangan"];
    $ranking = $data["ranking"];

    $tempdir = "img/pemain/"; 
        if (!file_exists($tempdir))
        mkdir($tempdir,0755); 
        //gambar akan di simpan di folder gambar
        $target_path = $tempdir . $foto;

        //nama gambar
        $nama_gambar=$_FILES['foto']['name'];
        
			$file_tmp = $_FILES['foto']['tmp_name'];	
        move_uploaded_file($file_tmp, $tempdir.$nama_gambar);
        

    mysqli_query($conn, "UPDATE pemain SET
                    foto = '$nama_gambar',
                    nama = '$nama',
                    jenis_kelamin = '$jenis',
                    tanggal_lahir = '$tanggal',
                    tangan = '$tangan',
                    ranking = '$ranking'
                    WHERE id = '$id'
                ");

	return mysqli_affected_rows($conn);

}

?>