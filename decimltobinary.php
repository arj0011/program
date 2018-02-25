<?php
/**
* To convert decimal to binary 
*
*/

$n = 2;
$nm = $n;
$res = 0;
while($n != 0){
	$rem = $n % 2;
	$res = $res * 10 + $rem;
	$n = floor($n / 2);
}
//echo $n;
echo $nm.' Decimal to binary is '.$res;

?>