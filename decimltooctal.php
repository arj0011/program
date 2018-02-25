<?php
/**
* To convert decimal to octal 
*
*/

$n = 11;
$nm = $n;
$res = 0;
while($n != 0){
	$rem = $n % 8;
	$res = $res * 10 + $rem;
	$n = floor($n / 8);
}
//echo $n;
echo $nm.' Decimal to octal is '.$res;

?>