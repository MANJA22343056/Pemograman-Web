<html>

<head>
    <link rel="stylesheet" href="../css/halamanUtama.css">
    <title>Halaman Utama</title>
</head>

<body>
    <?php include('header.php') ?>
    <div class="enter"></div>
    <?php include('menuBar.php') ?>
    <div class="enter"></div>
        <div class="kolom1">
            <h3>Username Terdaftar</h3>
            <?php echo "Tampilkan USERNAME tbl_user di kolom ini"; ?>
            <?php
            include 'koneksi.php';
            $qsiswa = $conn->query("SELECT *from tbl_user");
            $no = 1;
            while ($res = $qsiswa->fetch_assoc()) {
                ?>
                <br>
                <tr>
                    <td>
                        <?php echo $res['username']; ?>
                    </td>
                </tr>
                <?php
                $no++;
            }
            ?>
            <br><br>
            <a href="tambahUsername.php"><button type="submit">Tambah Data</button></a>
        </div>
        <div class="kolom2">
            <h3>Berita Terbaru</h3>
            <?php echo "Tampilkan data tabel INFO di kolom ini"; ?>
            <?php
            include 'koneksi.php';
            $qsiswa = $conn->query("SELECT *from info");
            $no = 1;
            while ($res = $qsiswa->fetch_assoc()) {
                ?>
                <br>
                <tr>
                    <br>
                    <td>
                        <?php echo $res['judul_info']; ?>
                    </td>
                    <br>
                    <td>
                        <?php echo $res['hari_info']; ?>
                    </td>
                    <td>
                        <?php echo $res['tgl_info']; ?>
                    </td>
                    <br>
                    <td>
                        <?php echo $res['isi_info']; ?>
                    </td>
                </tr>
                <?php
                $no++;
            }
            ?>
            <br><br>
            <a href="tambahInfo.php"><button type="submit">Tambah Data</button></a>
        </div>
        <div class="kolom3">
            <h3>Daftar Operator</h3>
            <?php echo "Tampilkan Nama Operator pada tabel OPERATOR di kolom ini"; ?>
            <?php
            include 'koneksi.php';
            $qsiswa = $conn->query("SELECT *from operator");
            $no = 1;
            while ($res = $qsiswa->fetch_assoc()) {
                ?>
                <br>
                <tr>
                    <br>
                    <?php echo $res['nama_operator']; ?>
                </tr>
                <?php
                $no++;
            }
            ?>
            <br><br>
            <a href="tambahOperator.php"><button type="submit">Tambah Data</button></a>
    </div>
    <div class="enter"></div>
    <?php include('footer.php') ?>
</body>

</html>