<?php
function persegiPanjang ($persegi,$Panjang){
	$luas = $persegi * $Panjang ;
	return $luas ;
}
$a = 5;
$b = 3;
echo "Luas persegi panjang dengan panjang 5 dan lebar 3 = " ;
echo persegiPanjang($a,$b);
?>