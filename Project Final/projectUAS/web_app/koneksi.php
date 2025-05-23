<?php
$serverName = "localhost";
$username ="root";
$password="" ;
$dbName ="dbuas";
$conn=new mysqli($serverName , $username ,$password ,$dbName);
// cek koneksi dulu
if(!$conn){
	die("Tidak terhubung ke MySQL " . mysqli_connect_error());

}

?>