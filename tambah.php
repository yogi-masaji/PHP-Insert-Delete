<?php
// Koneksi
require 'function.php';
if (isset($_POST["submit"])) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $result = mysqli_query($mysqli, "INSERT INTO mahasiswa(npm,nama,email) VALUES ('$npm','$nama','$email')");
    
    header("Location:index.php");
}


?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
        <label for="npm">NPM :</label>
        <input type="text" name="npm" id="npm">
        <br>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email">
        <br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html> -->