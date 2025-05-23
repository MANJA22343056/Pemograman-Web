<?php
include_once 'analisaDatabase';
$sql = "DELETE FROM lecturer WHERE ID='" . $_GET["ID"] ."'";
if (mysqli_query($conn, $sql)) {
	echo "Data berhasil dihapus";
} else {
	echo "Gagal menghapus data: " . mysqli_error($conn);
}
mysqli_close($conn);
?>