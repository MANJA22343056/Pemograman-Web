<?php
$servername ="localhost";
$username="root";
$password="";
$dbname="admin";
/* create connection*/
$conn=mysqli_connect($servername,$username ,$password , $dbname);
/*check connection*/
if(!$conn){
	die("connection failed:". mysqli_connect_error());
}
/*create database */
$sql="create database students(
ID int NOT NULL AUTO_INCREAMENT,
LastName varchar (50),
FirstName varchar(50),
Email varchar(50),
City varchar(50),
PRIMARY KEY(ID)
)";
if(mysql_query($conn,$sql)){
	echo "tabel berhasil dibuat";
}else{
	echo "gagal membuat tabel:". mysqli_error($conn);
}
mysql_close($conn);
?>