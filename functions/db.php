<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'database_blog';
 
$koneksi = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error());
?>