<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <title>Update Data</title>
</head>

<body>
    <div class="perbaharui">
    <?php
        include('header.php');
        include_once 'koneksi.php';

        $message = "";
        if (count($_POST) > 0) {
            $ID = $_POST['ID'];
            $kode = $_POST['kode'];
            $namaRS = $_POST['namaRS'];
            $tipe = $_POST['tipe'];
            $alamat = $_POST['alamat'];

            $query = "UPDATE tabel2 SET kode='$kode', namaRS='$namaRS', tipe='$tipe', alamat='$alamat' WHERE ID='$ID'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $message = "Data Berhasil Diperbarui...";
            } else {
                $message = "Tidak dapat memperbaharui data...";
            }
        }

        $ID = isset($_GET['ID']) ? $_GET['ID'] : '';
        $result = mysqli_query($conn, "SELECT * FROM tabel2 WHERE ID='$ID'");
        $row = mysqli_fetch_array($result);
        ?>
    <div class="enter"></div>
    <?php include('menu.php') ?>
    <div class="enter"></div>
    <form name="frmUser" method="post" action="">
        <div>
            <?php if (!empty($message)) {
                    echo $message;
                } ?>
        </div>
        <div style="padding-bottom:5px;">
            <a href="tampilData.php">Daftar RS</a>
        </div>

        ID : <br>
        <input type="hidden" name="ID" class="txtField" value="<?php echo isset($row['ID']) ? $row['ID'] : ''; ?>">
        <input type="text" name="ID" value="<?php echo isset($row['ID']) ? $row['ID'] : ''; ?>">

        <br><br>
        Kode : <br>
        <input type="text" name="kode" class="txtField"
            value="<?php echo isset($row['kode']) ? $row['kode'] : ''; ?>">

        <br><br>
        Nama Rumah Sakit : <br>
        <input type="text" name="namaRS" class="txtField"
            value="<?php echo isset($row['namaRS']) ? $row['namaRS'] : ''; ?>">

        <br><br>
        Tipe : <br>
        <input type="text" name="tipe" class="txtField"
            value="<?php echo isset($row['tipe']) ? $row['tipe'] : ''; ?>">

        <br><br>
        Alamat : <br>
        <input type="text" name="alamat" class="txtField"
            value="<?php echo isset($row['alamat']) ? $row['alamat'] : ''; ?>">

        <br><br>
        <input type="submit" name="submit" value="Update Data" class="button">
    </form>
</div>
    <?php include('footer.php') ?>
</body>

</html>