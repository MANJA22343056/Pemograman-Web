<?php
	include_once'database.php';
	$sql="DELETE FROM students WHERE ID='" . $_GET["ID"].
    "'";
	if(mysqli_query($conn,$sql)) {
		echo "Data Berhasil Dihapus";
	} else {
		echo "Gagal Menghapus Data : " . mysqli_error($conn);
	}

	mysqli_close($conn);
?>