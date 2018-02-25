<?php
/**
* To check whether a number is armstrong or not 
*
*/

$n = 371;
$nm = $n;
$res = 0;
while($n != 0){
	$rem = $n % 10;
	$res = $res + $rem*$rem*$rem;
	$n = floor($n / 10);
}
if($nm == $res){
	echo $nm.' is Armstrong no';
}else{
	echo $nm.' is not Armstrong no';
}

?>