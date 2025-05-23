<?php
include_once 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM tabel2");
?>
<html>
<head>
    <link rel="stylesheet" href="../css/index.css">
    <title>Daftar Rumah Sakit</title>
</head>

<body>
    <div class="tampil">
    <?php 
    include('header.php') ?>
    <div class="enter"></div>
    <?php include('menu.php') ?>
    <div class="enter"></div>
        <h2>Daftar RS Swasta Sumatera Barat</h2>
    <?php
        if (mysqli_num_rows($result) > 0) {
            ?>
            <table>
                <tr>
                    <td>Kode</td>
                    <td>Nama Rumah Sakit</td>
                    <td>Tipe</td>
                    <td>Alamat</td>
                </tr>
                <?php
                $i=0;
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
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
                    </tr>
                    <?php
                    $i++;
                }
                ?>
            </table>
            <?php
        }
        else {
            echo "Data tidak ditemukan...";
        }
        ?>
        <br>
        <a href="inputData.php"> Tambah Data RS </a> | <a href="updateData.php"> Edit Data RS </a> | <a href="hapusData.php"> Hapus Data RS </a>
    </div>
    <?php 
    include('footer.php') ?>
    
</body>

</html>