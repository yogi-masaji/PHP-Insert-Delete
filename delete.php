<?php
require 'function.php';

$id = $_GET['id'];

// menghapus data di database sesuai id
$result = mysqli_query($mysqli, "DELETE FROM mahasiswa WHERE id= '$id'");

// redirect ke index
header("Location:index.php");
?>