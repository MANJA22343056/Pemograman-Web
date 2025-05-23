<?php
include_once 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM tabel4");
?>
<html>

<head>
    <title> Footer of RS Umum Swasta Sumatra Barat</title>
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    
</head>

<body>
    <div id="kaki">
        <center>
      <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row["nama"] . " - " . $row["nim"]; ?></td>
                <br><br>
                <td> <?php echo $row["prodi"]; ?> </td>
            </tr>
            <?php
        }
        ?>
        </center>
    </div>
</body>
</html>