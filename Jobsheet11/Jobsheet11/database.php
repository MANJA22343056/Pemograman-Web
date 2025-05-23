<?php
$servername ="localhost";
$username="root";
$password="";
$dbname="admin";
/* create connection*/
$conn=mysqli_connect($servername,$username ,$password , $dbname);

if(!$conn){
	die("tidak bisa terhubung ke mysql:".mysql_error());
}
	else{
		echo "koneksi berhasil"  . mysqli_error($conn);;
	}

?>