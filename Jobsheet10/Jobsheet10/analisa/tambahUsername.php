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
    <div class="kolom1">
    <h3>1. Tambah Username</h3>
        <form action="" method="post">
            <table>
                <tr>
                    <td width="130">Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td><input type="text" name="nama_lengkap"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td><input type="text" name="status"></td>
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
            mysqli_query($conn, "insert into tbl_user set
            username = '$_POST[username]',
            nama_lengkap = '$_POST[nama_lengkap]',
            password = '$_POST[password]',
            status = '$_POST[status]'");

            echo "Data user baru telah tersimpan";
        }
        ?>
    </div>
    <div class="enter"></div>
    <?php include('footer.php') ?>
</body>

</html>