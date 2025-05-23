<html>
<head>
	<title></title>
</head>
<body>
	<table cellpadding="4" border="1">
		<tr>
			<td>no</td>
			<td>username</td>
			<td>password</td>
			<td>status</td>
		</tr>
		<?php
		include 'koneksi.php';
		$qsiswa = $conn->query("SELECT *from tbl_user");
		$no=1;
		while ($res=$qsiswa->fetch_assoc()) {
			?>
			<tr>
				<td><?php echo $no ; ?> </td>
				<td><?php echo $res['username'];?></td>
				<td><?php echo $res['password'];?></td>
				<td><?php echo $res['status'];?></td>
			</tr>
			<?php
			$no++;
		}
		?>
	</table>
</body>
</html>