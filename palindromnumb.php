<?php
/**
* To check whether number is palindrom or not 
*
*/

$n = 777;
$nm = $n;
$res = 0;
while($n != 0){
	$rem = $n % 10;
	$res = $res * 10 + $rem;
	$n = floor($n / 10);
}
if($nm == $res){
	echo $nm.' is Palindrom';
}else{
	echo $nm.' is not Palindrom';
}

?>