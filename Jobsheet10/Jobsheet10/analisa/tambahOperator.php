<html>

<head>
    <link rel="stylesheet" href="../css/tambahData.css">
    <title>Tambah Data</title>
</head>

<body>
    <?php include('header.php') ?>
    <div class="enter"></div>
    <?php include('menuBar.php') ?>
    <div class="enter"></div>
    <div class="kolom3">
    <h3>3. Tambah Operator</h3>
        <form action="" method="post">
            <table>
                <tr>
                    <td width="130">NIP Operator</td>
                    <td><input type="text" name="nip_operator"></td>
                </tr>
                <tr>
                    <td>Nama Operator</td>
                    <td><input type="text" name="nama_operator"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="text" name="jk_operator"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="text" name="tgl_lahir_operator"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempat_lahir_operator"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat_operator"></td>
                </tr>
                <tr>
                    <td>NO HP</td>
                    <td><input type="text" name="nope_operator"></td>
                </tr>
                <tr>
                    <td>Foto Profil</td>
                    <td><input type="file" name="pp_operator"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan" name="proses"></td>
                </tr>
            </table>

        </form>
        <?php
        include 'koneksi.php';
        if (isset($_POST['proses'])) {
            mysqli_query($conn, "insert into operator set
            nip_operator = '$_POST[nip_operator]',
            nama_operator = '$_POST[nama_operator]',
            jk_operator = '$_POST[jk_operator]',
            tgl_lahir_operator = '$_POST[tgl_lahir_operator]',
            tempat_lahir_operator = '$_POST[tempat_lahir_operator]',
            alamat_operator = '$_POST[alamat_operator]',
            nope_operator = '$_POST[nope_operator]',
            pp_operator = '$_POST[pp_operator]'");

            echo "Data operator baru telah tersimpan";
        }
        ?>

    </div>
    <div class="enter"></div>
    <?php include('footer.php') ?>
</body>

</html>