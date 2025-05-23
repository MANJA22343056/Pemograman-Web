<?php 
include_once 'database.php';
$result = mysqli_query($conn, "SELECT * FROM students");
?>
<!Doctype html>
<html>

<head>
    <title>Menampilkan Data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        if (mysqli_num_rows($result) > 0) {
        ?>
    <table>

        <tr>
            <td>Nama Depan</td>
            <td>Nama Belakang</td>
            <td>Alamat Email</td>
            <td>Kota Asal</td>
        </tr>
        <?php
        $i=0;
        while($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row["FirstName"]; ?></td>
            <td><?php echo $row["LastName"]; ?></td>
            <td><?php echo $row["Email"]; ?></td>
            <td><?php echo $row["City"]; ?></td>
        </tr>
        <?php
            $i++;
        }
        ?>
    </table>
    <?php
        }
        else {
            echo "Data tidak ditemukan";
        }
        ?>
    <br>
    <a href="insert.php">Tambah Data Mahasiswa</a> | <a href="update.php">Edit Data Mahasiswa</a> | <a
        href="delete.php">Hapus Data Mahasiswa</a>
</body>

</html>