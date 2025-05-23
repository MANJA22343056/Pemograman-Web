<?php
include_once 'database.php';
if (isset($_POST['save'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $lecturer_code = $_POST['lecturer_code'];
    $email = $_POST['email'];
    $addres = $_POST['addres'];
    $city_name = $_POST['city_name'];
    $phone = $_POST['phone'];
    $sql = "INSERT INTO lecturer
    (FirstName, LastName, Lecturer_Code, Email,Addres, City, Phone)
    VALUES
    ('$first_name','$last_name', '$lecturer_code','$email','$addres', '$city_name', '$phone')";
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil disimpan !";
    } else {
        echo "Gagal: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
<br>
<p><a href="display_data.php">Lihat Data Pengajar</a></p>