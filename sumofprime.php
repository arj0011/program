<?php
/**
* To check whethergiven position no is prime or not.
*
*/

$n = 10;
$f = 0;
$sum = 0;
for($i=1;$i<=$n;$i++){
	for($j=2;$j<$i-1;$j++){
		if($i%$j == 0){
			$f = 1;
		}	
	}
	
	if($f == 0){
		echo $i.'<br />';
		$sum = $sum + $i;
	}
	$f = 0;
}
echo 'Sum of prime series is '.$sum;

?>