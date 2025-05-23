<html>
<head>
	<title></title>
</head>
<body>
	<table cellpadding="4" border="1">
		<tr>
			<td> no </td>
			<td> NIP </td>
			<td> Nama operator </td>
			<td> L/P </td>
			<td> Tgl lahir </td>
			<td> Tempat lahir </td>
			<td> Kontak Hp </td>
		</tr>
		<?php
		include 'koneksi.php';
		$qsiswa = $conn->query("SELECT *from operator");
		$no=1;
		while ($res=$qsiswa->fetch_assoc()) {
			?>
			<tr>
				<td><?php echo $no ; ?> </td>
				<td><?php echo $res['nip_operator'];?></td>
				<td><?php echo $res['nama_operator'];?></td>
				<td><?php echo $res['jk_operator'];?></td>
				<td><?php echo $res['tgl_lahir_operator'];?></td>
				<td><?php echo $res['tempat_lahir_operator'];?></td>
				<td><?php echo $res['nope_operator'];?></td>
			</tr>
			<?php
			$no++;
		}
		?>
	</table>
</body>
</html>
