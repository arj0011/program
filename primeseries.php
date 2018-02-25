<?php
/**
* To check whether number is prime series 
*
*/

$n = 100;
$f = 0;
for($i=1;$i<=$n;$i++){
	for($j=2;$j<$i-1;$j++){
		if($i%$j == 0){
			$f = 1;
		}	
	}
	if($f == 0){
		echo $i.'<br/>';
	}
	$f = 0;
}

?>