<html>
<head>
    <title>Input Data RS </title>
    <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body>
    <div class="input">
    <?php include('header.php')?>
    <div class="enter"></div>
    <?php include('menu.php')?>
    <div class="enter"></div>
        <h2> Input Data RS</h2>
    <form method="post" action="prosesInput.php">
        Kode:
        <br>
        <input type="text" name="kode">
        <br>
        Nama Rumah Sakit: 
        <br>
        <input type="text" name="namaRS">
        <br>
        Tipe : 
        <br>
        <input type="text" name="tipe">
        <br>
        Alamat : 
        <br>
        <input type="text" name="alamat">
        <br><br>
        <input type="submit" name="save" value="Simpan Data">
    </form> 
</div>
    <?php include('footer.php') ?>

</body>
</html>