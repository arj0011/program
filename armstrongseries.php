<?php
/**
* To check whether a number is armstrong or not 
*
*/

$n = 1000;
$res = 0;
for($i = 1;$i<$n;$i++){
	$nm = $i;
	for($j=$i;$j!=0;){
		echo '<pre>';
		$rem = $j % 10;
		$res = $res + $rem*$rem*$rem;
		$j = floor($j / 10);
	}
	if($nm == $res){
		echo $nm.' is Armstrong no';
	}
	$res = 0;
}

?>