<?php
	//deklarasi variabel
	$nama = "Manja Fani Oktavia" ;
	$jenisKelamin = " Perempuan";
	$jabatan = " Data Analyst";
	$gajiPokok = 10000000 ;
	$bonus = 5000000 ;
	$tunjunganKesehatan = 5000000 ;

	// total gaji
	$totalgaji = $gajiPokok + $bonus + $tunjunganKesehatan ;

?>

<html>
<head>
	<title>Gaji Pegawai Tetap Non-PNS</title>
</head>
<body>
	<center>
		<table border="6" cellspacing="3" cellpadding="4">
			<tr>
				<td colspan="7" align="center" valign="middle">
					<b>Daftar Gaji Pegawai Tetap Non-PNS</b>
				</td>
			</tr>
			<tr>
				<td><b>Nama Pegawai </b></td>
                <td><b>Jenis Kelamin</b></td>
                <td><b>Jabatan</b></td>
                <td><b>Gaji Pokok</b></td>
                <td><b>Tunjungan Jabatan/Bonus</b></td>
                <td><b>Tunjungan Kesehatan</b></td>
                <td><b>Total Gaji</b></td>

			</tr>
			<tr>
				<td align="left">
                    <?php echo $nama; ?>
                </td>
                <td align="right">
                    <?php echo $jenisKelamin; ?>
                </td>
                <td align="right">
                    <?php echo $jabatan; ?>
                </td>
                <td align="right">
                    <?php echo $gajiPokok;?>

                <td align="right">
                    <?php echo $bonus; ?>
                </td>
                <td align="right">
                    <?php echo $tunjunganKesehatan; ?>
                </td>
                <td align="right">
                    <?php echo $totalgaji; ?>
                </td>
			</tr>
		</table>
	</center>
</body>
</html>
