<?php
$str = " Belajar PHP ternyata Menyenangkan";
echo strtolower($str) ; // Ubah huruf ke kecil semua
echo "<br>";
echo strtoupper($str) ; // Ubah huruf ke besar semua 
echo "<br>";
echo str_replace("Menyenangkan","Mudah lho", $str) ;
// Mengganti string
?>
