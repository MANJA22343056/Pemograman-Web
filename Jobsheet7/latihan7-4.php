<html>
<head>
	<title>Penyisipan variabel pada HTML</title>
</head>
<body>
	Silakan sebutkan warna kesukaan anda ...?<br>
	<?php
	//Berikut adalah inisiasi beberapa variabel
	$warna1 =" Merah";
	$warna2 =" Hijau";
	$warna3 =" Kuning";
	?>
	<b> Dibawah ini adalah warna kesukaanku :<br>
		<?php
		echo "$warna1, $warna2, dan $warna3</b>";
		?>
</body>
</html>