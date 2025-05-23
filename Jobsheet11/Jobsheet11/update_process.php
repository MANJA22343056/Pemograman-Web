<?php
include_once 'database.php';
if (count($_POST) > 0) {
    mysqli_query($conn, "UPDATE students set ID='" .
    $_POST['ID'] . "', FirstName='" . $_POST['first_name'] . 
    "', LastName='" . $_POST['last_name'] ."', Email='" . 
    $_POST['email'] . "', City='" . $_POST['city_name'] . "'
    WHERE ID='" . $_POST['ID'] . "'");
    $message = "Data berhasil diperbaharui";
    } 
    $result = mysqli_query($conn, "SELECT * FROM Students WHERE ID='" . $_GET['ID'] ."'");
    $row = mysqli_fetch_array($result);
    ?>
<html>

<head>
    <title>Update Data Mahasiswa</title>
</head>

<body>
    <form name="frmUser" method="post" action="">
        <div>
            <?php if(isset($message)) { echo $message; } ?>
        </div>
        <div stlye="padding-bottom:5px;">
            <a href="display_data.php">Daftar Mahasiswa</a>
        </div>
        ID: <br>
        <input type="hidden" name="ID" class="txtField" value="<?php 
                echo $row['ID']; ?>">
        <input type="text" name="ID" class="txtField" value="<?php echo $row['ID']; ?>">
        <br><br>
        Nama Depan: <br>
        <input type="text" name="first_name" class="txtField" value="<?php echo $row['FirstName']; ?>">
        <br><br>
        Nama Belakang: <br>
        <input type="text" name="last_name" class="txtField" value="<?php echo $row['LastName']; ?>">
        <br><br>
        Alamat Email: <br>
        <input type="text" name="email" class="txtField" value="<?php echo $row['Email']; ?>">
        <br><br>
        Kota Asal: <br>
        <input type="text" name="city_name" class="txtField" value="<?php echo $row['City']; ?>">
        <br><br>
        <input type="submit" name="submit" value="Update Data" class="button">
    </form>
</body>

</html>