<?php 
// deklarasi matriks
$matriks1 = array(
	array( 5 , 6 ) , array( 8, 10 )
);

$matriks2 = array(
	array( 5 , 8 ) , array( 7, 9 )
);

//inisialisasi hasil matriks dengan nol
$hasil = array(
	array( 0 , 0 ) , array( 0, 0 )
);

//cout penjumlahan matriks
for ($i = 0 ; $i < 2 ; $i++){
	for ($j = 0 ; $j < 2 ; $j++){
		$hasil[$i][$j] = $matriks1 [$i][$j] + $matriks1 [$i][$j] ;
	}
}

echo("matriks 1 : <br>") ;
echo $matriks1 [0][0] . " " .$matriks1[0][1] . "<br>";
echo $matriks1 [1][0] . " " .$matriks1[1][1] . "<br>";
echo "<br>";

echo("matriks 2 : <br>") ;
echo $matriks1 [0][0] . " " .$matriks2[0][1] . "<br>";
echo $matriks1 [1][0] . " " .$matriks2[1][1] . "<br>";
echo "<br>";

echo("hasil : <br>") ;
echo $hasil [0][0] . " " .$hasil[0][1] . "<br>";
echo $hasil [1][0] . " " .$hasil[1][1] . "<br>";
echo "<br>";

?>
