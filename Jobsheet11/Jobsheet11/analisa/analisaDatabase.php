<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Tidak bisa terhubung ke MySQL: " .mysqli_connect_error());
}
else{
     echo "Terhubung ke MySQL: " . mysqli_error($conn);
}
?>