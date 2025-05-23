<?php
	include_once'database.php';
	$result = mysqli_query($conn, "SELECT * FROM Students");
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Delete Data Mahasiswa</title>
</head>

<body>
    <table>
        <tr>
            <td>No.</td>
            <td>Nama Depan</td>
            <td>Nama Belakang</td>
            <td>Alamat Email</td>
            <td>Kota Asal</td>
            <td>Aksi</td>
        </tr>
        <?php 
        $i=0;
			while($row=mysqli_fetch_array($result)) { 
            ?>
        <tr class="<?php if (isset($classname)) echo $classname;?>">
            <td><?php echo $row["ID"]; ?></td>
            <td><?php echo $row["FirstName"];?></td>
            <td><?php echo $row["LastName"];?></td>
            <td><?php echo $row["Email"];?></td>
            <td><?php echo $row["City"];?></td>
            <td><a href="delete-process.php?ID=<?php echo $row["ID"];?>">Delete</a></td>
        </tr>
        <?php 
        $i++;
			}
            ?>
    </table>
    <br>
    <a href="insert.php">Tambah Data Mahasiswa</a>|<a href="update.php">Edit Data Mahasiswa</a>|<a
        href="delete.php">Hapus Data Mahasiswa</a>
</body>

</html>