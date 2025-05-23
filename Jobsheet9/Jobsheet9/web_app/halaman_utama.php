<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/halaman_utama.css">
        <title></title>
    </head>
    <body>
        <?php include('header.php') ?>
        <div class="enter"></div>
        <?php include('menu_bar.php')?>
        <div class="enter"></div>
        <div class="kolom1">
        <?php
        echo"Dalam pemograman berorientasi objek,fungsi include sudah merupakan hal yang wajib ada. Fungsi include merupakan fungsi yang digunakan untuk menyertakan file lain ke dalam file yang sedang diproses."; 
        ?>
        </div>
        <div class="kolom2">
        <?php
        echo "Fungsi Include
        Fungsi Include digunakan di PHP ketika kita ingin menyertakan suatu file kedalam proses yang saat ini sedang berjalan. Dibutuhkan satu argumen yang akan menjadi string ke path file yang anda ingin sertakan. ";
        ?>
        </div>
        <div class="kolom3"></div>
        <div class="enter"></div>
        <?php
        include('footer.php') ?>
    </body>
</html>