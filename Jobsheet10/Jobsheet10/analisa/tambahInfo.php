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
    <div class="kolom2">
        <h2> 2. Tambah Info</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td width="130">Kode info</td>
                    <td><input type="text" name="kd_info" placeholder="ex : KD001"></td>
                </tr>
                <tr>
                    <td>NIP Operator</td>
                    <td><input type="text" name="nip_operator" placeholder=""></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td><input type="text" name="tgl_info" placeholder="dd-mm-yyyy"></td>
                </tr>
                <tr>
                    <td>Hari</td>
                    <td><input type="text" name="hari_info"></td>
                </tr>
                <tr>
                    <td>Jam</td>
                    <td><input type="text" name="jam_info"></td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td><input type="text" name="judul_info"></td>
                </tr>
                <tr>
                    <td>Isi</td>
                    <td><textarea name="isi_info" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td>foto</td>
                    <td><input type="file" name="pp_info"></td>
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
            mysqli_query($conn, "insert into info set
            kd_info = '$_POST[kd_info]',
            nip_operator = '$_POST[nip_operator]',
            tgl_info = '$_POST[tgl_info]',
            hari_info = '$_POST[hari_info]',
            jam_info = '$_POST[jam_info]',
            judul_info = '$_POST[judul_info]',
            isi_info = '$_POST[isi_info]',
            pp_info = '$_POST[pp_info]'");

            echo "Data info baru telah tersimpan";
        }
        ?>
    </div>
    <div class="enter"></div>
    <?php include('footer.php') ?>
</body>

</html>