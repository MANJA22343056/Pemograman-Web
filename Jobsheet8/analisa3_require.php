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

?>