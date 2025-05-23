<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

/* Create connection */
$conn = mysqli_connect($servername, $username, $password, $dbname);
/* Check connection */
if (!$conn) {
    die("Koneksi gagal: " .mysqli_connect_error());
}
/* sql query to create table */
$sql = "CREATE TABLE lecturer (
    ID int NOT NULL AUTO_INCREMENT,
    FirstName varchar(50),
    LastName varchar(50),
    Lecturer_Code varchar(6),
    Email varchar(50),
    Addres varchar(50),
    City varchar(50),
    Phone varchar(50),
    PRIMARY KEY (ID)
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel berhasil dibuat";
}
else {
    echo "Gagal membuat tabel:" .mysqli_error($conn);
}
mysqli_close($conn);
?>