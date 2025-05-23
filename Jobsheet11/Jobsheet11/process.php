<?php 
include_once 'database.php';
if(isset($_POST['save'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $city_name = $_POST['city_name'];
    $sql = "INSERT INTO Students
    (FirstName, LastName, Email, City)
    VALUES
    ('$first_name','$last_name','$email','$city_name)";
        if (mysqli_query($conn, $sql)){
            echo "Data berhasil disimpan !";
        }else{
            echo "Gagal: " .$sql . "" . mysqli_error($conn);
        }
        mysqli_close($conn); 
}
?>
<br>
<p><a href="display_data.php">Lihat Data Mahasiswa</p>
</p>