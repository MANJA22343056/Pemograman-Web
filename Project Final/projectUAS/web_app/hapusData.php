<?php
include 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM tabel2");
?>

<html>

<head>
    <link rel="stylesheet" href="../css/index.css">
    <title>Hapus Data RS</title>
</head>

<body>
        <div class="hapus">
        <?php include('header.php') ?>
        <div class="enter"></div>
        <?php include('menu.php') ?>
        <div class="enter"></div>
        
            <h2> Hapus Data RS</h2>
            <table>
                <tr>
                    <td>No</td>
                    <td>Kode</td>
                    <td>Nama Rumah Sakit</td>
                    <td>Tipe</td>
                    <td>Alamat</td>
                    <td>Aksi</td>
                </tr>

                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
                    $classname = ($i % 2 == 0) ? 'even' : 'odd';
                    ?>
                    <tr class="<?php echo $classname; ?>">
                        <td>
                            <?php echo $row["ID"]; ?>
                        </td>
                        <td>
                            <?php echo $row["kode"]; ?>
                        </td>
                        <td>
                            <?php echo $row["namaRS"]; ?>
                        </td>
                        <td>
                            <?php echo $row["tipe"]; ?>
                        </td>
                        <td>
                            <?php echo $row["alamat"]; ?>
                        </td>
                        <td><a href="deleteProcess.php?ID=<?php echo $row["ID"];?>">Delete</a></td>
                    </tr>
                    <?php
                    $i++;
                }
                ?>
            </table>
        
            <br>
        
            <a href="inputData.php"> Tambah Data RS </a> | <a href="updateData.php"> Edit Data RS </a> | <a href="hapusData.php"> Hapus Data RS </a>
            </div>
        <?php include('footer.php') ?>
        <div class="enter"></div>
</body>

</html>
