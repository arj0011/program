<?php
/**
* To check whethergiven position no is prime or not.
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
	if($i == 10){
		if($f == 0){
			echo $i.'position number is prime <br/>';
		}else{
			echo $i.'position number is not prime <br/>';
		}		
	}
	
	$f = 0;
}

?>