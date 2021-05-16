<?php
require 'function.php';
require 'tambah.php';
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa");

// if (isset($_POST["submit"])) {
//     $npm = $_POST['npm'];
//     $nama = $_POST['nama'];
//     $email = $_POST['email'];

//     $result = mysqli_query($mysqli, "INSERT INTO mahasiswa(npm,nama,email) VALUES ('$npm','$nama','$email')");
    
//     header("Location:index.php");
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    }

    body{
        background-color: #e3e7e8;
        overflow-x: hidden;
    }
    .row{
        margin-left: 10px;
    }

    .card{
        box-shadow: 0px 2px 5px #868686;
    }
    </style>
</head>
<body>
<div style="padding-top: 50px">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
            <div class="card-body">
                <h2 class="font-weight-bold mb-3">Daftar Mahasiswa</h2>
                <table class="table table-bordered table-hovered">
                    <thead style="background-color: blue;color:white;">
                        <tr>
                        <th>No</th>
                        <th>NPM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    <?php foreach( $result as $row) : ?>
                        <tr>
                        <td><?= $i; ?></td>
                        <td><?= $row["npm"]; ?></td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["email"]; ?></td>
                        <td>
                        <!-- <a href="update.php?id=<?= $row["id"]; ?>" class="btn btn-success btn-block mt-2" style="color: white;">Edit</a> -->
                        <a href="delete.php?id=<?= $row["id"]; ?>" class="btn btn-danger btn-block mt-2">Hapus</a>
                        </td>

                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
        <div class="col-md-4" style="width: 400px;">
            <div class="card">
                <div class="card-body">
                    <h2 class="font-weight-bold mb-3">Tambah Data</h2>
                    <form action="" method="post">
                    <div class="form-group">
                    <label for="npm">NPM :</label>
                    <input type="text" name="npm" id="npm" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <br>
                    <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
        
    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>