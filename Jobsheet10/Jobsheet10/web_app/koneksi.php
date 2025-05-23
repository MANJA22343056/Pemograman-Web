<?php
$serverName = "localhost";
$username ="root";
$password="" ;
$dbname ="db_berita";
$conn=new mysqli($serverName , $username ,$password ,$dbname);
// cek koneksi dulu
if(!$conn){
	die("koneksi gagal " . mysqli_connect_error());
}
echo"koneksi berhasil";
?>