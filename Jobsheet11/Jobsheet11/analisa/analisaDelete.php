<?php include_once 'analisaDatabase.php';
$result =mysqli_query($conn,"SELECT * FROM lecturer");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete Data Pengajar</title>
</head>
<body>
<table>
	<tr>
	<td>No</td>
	<td>Nama Depan</td>
	<td>Nama Belakang</td>
	<td>Kode Pengajar</td>
	<td>Email</td>
	<td>Alamat</td>
	<td>Kota Asal</td>
	<td>Phone</td>
	<td>Aksi</td>
	</tr>
	<?php
	$i=0;
	while ($row = mysqli_fetch_array($result)){
		?>
		<tr class="<?php if (isset ($classname) ) echo $classname;?>">
	<td><?php echo $row ["ID"]; ?></td>
	<td><?php echo $row ["FirstName"]; ?></td>
	<td><?php echo $row ["LastName"]; ?></td>
	<td><?php echo $row ["Lecturer_Code"]; ?></td>
	<td><?php echo $row ["Email"]; ?></td>
	<td><?php echo $row ["Addres"]; ?></td>
	<td><?php echo $row ["City"]; ?></td>
	<td><?php echo $row ["Phone"]; ?></td>
	<td><a href = "delete-process.php?ID=<?php echo $row ["ID"]; ?>">Delete</a></td>
</tr>
<?php
$i++;
	}
	?>
</table>
<br>
<a href="insert.php">Tambah Data Pengajar</a>| <a href="update.php">Edit Data Pengajar</a>| <a href="delete.php">Hapus Data Pengajar</a>
</body>
</html>

