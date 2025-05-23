<?php
include_once 'analisaDatabase.php';
if (count($_POST) > 0) {
    mysqli_query($conn, "UPDATE lecturer set ID='" . $_POST['ID'] . "'
            ,FirstName='" . $_POST['first_name'] . "'
            ,LastName='" . $_POST['last_name'] . "'
            ,Lecturer_Code='" . $_POST['lecturer_code'] . "'
            ,Email='" . $_POST['email'] . "'
            ,Addres='" . $_POST['addres'] . "'
            ,City='" . $_POST['city_name'] . "'
            ,Phone='" . $_POST['phone'] . "'
            WHERE ID='" . $_POST['ID'] . "'");
    $message = "Data Berhasil Diperbaharui";
}

$result = mysqli_query($conn, "SELECT * FROM lecturer WHERE ID='" . $_GET['ID'] . "'");
$row = mysqli_fetch_array($result);
?>

<html>

<head>
    <title>Update Data Pengajar</title>
</head>

<body>
    <form name="frmUser" method="post" action="">
        <div>
            <?php if (isset($message)) {
                echo $message;
            } ?>
        </div>

        <div style="padding-bottom:5px;">
            <a href="display_data.php">Daftar Pengajar</a>
        </div>

        ID : <br>
        <input type="hidden" name="ID" class="txtField" value="<?php echo $row['ID']; ?>">
        <input type="text" name="ID" value="<?php echo $row['ID']; ?>">

        <br><br>
        Nama Depan : <br>
        <input type="text" name="first_name" class="txtField" value="<?php echo $row['FirstName']; ?>">

        <br><br>
        Nama Belakang : <br>
        <input type="text" name="last_name" class="txtField" value="<?php echo $row['LastName']; ?>">

        <br><br>
        Kode Pengajar : <br>
        <input type="text" name="lecturer_code" class="txtField" value="<?php echo $row['Lecturer_Code']; ?>">

        <br><br>
        Alamat Email : <br>
        <input type="text" name="email" class="txtField" value="<?php echo $row['Email']; ?>">

        <br><br>
        Alamat : <br>
        <input type="text" name="addres" class="txtField" value="<?php echo $row['Addres']; ?>">

        <br><br>
        Kota Asal : <br>
        <input type="text" name="city_name" class="txtField" value="<?php echo $row['City']; ?>">

        <br><br>
        Phone : <br>
        <input type="text" name="phone" class="txtField" value="<?php echo $row['Phone']; ?>">

        <br><br>
        <input type="submit" name="submit" value="Update Data" class="button">
    </form>
</body>

</html>
