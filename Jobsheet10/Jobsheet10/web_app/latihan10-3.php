<html>
<head>
	<title></title>
</head>
<body>
	<table cellpadding="4" border="1">
		<tr>
			<td> no </td>
			<td> NIP </td>
			<td> Tgl </td>
			<td> Hari </td>
			<td> Jam </td>
			<td> Judul berita </td>
			<td> Redaksi berita </td>
		</tr>
		<?php
		include 'koneksi.php';
		$qsiswa = $conn->query("SELECT *from info");
		$no=1;
		while ($res=$qsiswa->fetch_assoc()) {
			?>
			<tr>
				<td><?php echo $no ; ?> </td>
				<td><?php echo $res['nip_operator'];?></td>
				<td><?php echo $res['tgl_info'];?></td>
				<td><?php echo $res['hari_info'];?></td>
				<td><?php echo $res['jam_info'];?></td>
				<td><?php echo $res['judul_info'];?></td>
				<td><?php echo $res['isi_info'];?></td>
			</tr>
			<?php
			$no++;
		}
		?>
	</table>
</body>
</html>
