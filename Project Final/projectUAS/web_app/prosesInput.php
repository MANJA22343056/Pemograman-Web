<?php 
include_once 'koneksi.php';
if(isset($_POST['save'])){
    $kode = $_POST['kode'];
    $namaRS = $_POST['namaRS'];
    $tipe = $_POST['tipe'];
    $alamat = $_POST['alamat'];
    $sql = "INSERT INTO tabel2(kode, namaRS, tipe,alamat)
    VALUES
    ('$kode','$namaRS','$tipe','$alamat')";
        if (mysqli_query($conn, $sql)){
            echo "Data berhasil disimpan !";
        }else{
            echo "Gagal: " .$sql . "" . mysqli_error($conn);
        }
        mysqli_close($conn); 
}
?>
<br>
<p><a href="tampilData.php">Lihat Data RS</p>
</p>