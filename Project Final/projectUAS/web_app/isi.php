<?php
include_once 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM tabel1");
?>
<html>
<head>
	<title>Content of RS Umum Swasta Sumatera Barat</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/isi.css">

<body>
	<?php include('header.php')?>
    <div class="enter"></div>
    <?php include('menu.php')?>
    <div class="enter"></div>
	<div id="isi">
		<br>
		<div class="info">
		<center>
			<h2> Selamat datang di Sistem Informasi Rumah Sakit Swasta Sumatera Barat!</h2>
		<?php
		while ($row = mysqli_fetch_array($result)) {
        ?>
		<tr>
			<td> <?php echo $row ['info1'];?></td><br><br>
			<td> <?php echo $row ['info2'];?></td>
		</tr>
		   <?php
        }
        ?>
    </center>

	</div>
</div>
			
	<?php 
    include('footer.php') ?>
</body>
</html>
