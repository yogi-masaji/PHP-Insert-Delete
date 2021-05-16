<?php
/**
 * gunakan mysqli_connect untuk membuat koneksi ke database
 */

$databaseHost = 'localhost';
$databaseName = 'kampus';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

?>