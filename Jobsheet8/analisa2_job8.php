<?php
function cariNilaiMax($a , $b , $c){
	$max = $a ;
	if($a > $max){
		$max = $b ;
	}
	if ($c > $max){
		$max =$c ;
	}
	return $max ;
}

$a = 90 ;
$b = 95 ;
$c = 100 ;

echo " Nilai maksimum dari tiga buah bilangan  yaitu $a , $b , $c adalah " . cariNilaiMax($a, $b, $c) ;
?>
