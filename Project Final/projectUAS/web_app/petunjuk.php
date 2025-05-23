<?php
include_once 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM tabel3");
?>
<html>
<head>
	<title>Petunjuk of RS Umum Swasta Sumatera Barat</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/index.css">

<body>
	<div class="petunjuk">
	<?php include('header.php')?>
    <div class="enter"></div>
    <?php include('menu.php')?>
    <div class="enter"></div>
		<h2> Petunjuk Sistem Informasi RS Umum Sumatera Barat</h2>
		<?php
		while ($row = mysqli_fetch_array($result)) {
        ?>
		<tr>
			<td> <?php echo $row ['infoo1'];?></td><br><br>
			<td> <?php echo $row ['infoo2'];?></td><br><br>
			<td> <?php echo $row ['infoo3'];?></td><br><br>
			<td> <?php echo $row ['infoo4'];?></td><br><br>
			<td> <?php echo $row ['infoo5'];?></td>
		</tr>
		   <?php
        }
        ?>
	</div>
	<?php include('footer.php') ?>
			
	
</body>
</html>
