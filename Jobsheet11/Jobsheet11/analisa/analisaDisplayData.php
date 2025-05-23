<?php
include_once 'analisaDatabase.php';
$result = mysqli_query($conn, "SELECT * FROM lecturer");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Menampilkan Data</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        if (mysqli_num_rows($result) > 0) {
            ?>
            <table>
                <tr>
                    <td>Nama Depan</td>
                    <td>Nama Belakang</td>
                    <td>Kode Pengajar</td>
                    <td>Email</td>
                    <td>Alamat</td>
                    <td>Kota Asal</td>
                    <td>Phone</td>
                </tr>
                <?php
                $i=0;
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["FirstName"]; ?></td>
                        <td><?php echo $row["LastName"]; ?></td>
                        <td><?php echo $row["Lecturer_Code"]; ?></td>
                        <td><?php echo $row["Email"]; ?></td>
                        <td><?php echo $row["Addres"]; ?></td>
                        <td><?php echo $row["City"]; ?></td>
                        <td><?php echo $row["Phone"]; ?></td>
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
        <a href="insert.php">Tambah Data Pengajar</a>
        <a href="update.php">Edit Data Pengajar</a>
        <a href="delete.php">Hapus Data Pengajar</a>
    </body>
</html>