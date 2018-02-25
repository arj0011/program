<?php
/**
* To check whether number is prime or not 
*
*/

$n = 17;
$res = 0;
$f = 0;
for($i=2;$i<=$n-1;$i++){
	if($n%$i == 0){
		$f = 1;
		break;
	}
}
if($f == 1){
	echo $n.' is not Prime';
}else{
	echo $n.' is Prime';
}

?>