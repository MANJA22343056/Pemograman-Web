<?php
	include_once'koneksi.php';
	$sql="DELETE FROM tabel2 WHERE ID='" . $_GET["ID"].
    "'";
	if(mysqli_query($conn,$sql)) {
		echo "Data Berhasil Dihapus...";
	} else {
		echo "Gagal Menghapus Data : " . mysqli_error($conn);
	}

	mysqli_close($conn);
?>
<br>
<p><a href="tampilData.php">Lihat Data RS</p>
</p>