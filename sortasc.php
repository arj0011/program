<?php
/**
* To sort an array 
* In Ascending order
* Input Array - 12,52,65,45,2,53 
* Output Array - 2,12,45,52,53,65
*/


$a= array(12,52,65,45,2,53);
for($i=0;$i<count($a);$i++){
	for($j=0;$j<count($a)-1;$j++){
		if($a[$j] > $a[$j+1]){
			$temp = $a[$j+1];
			$a[$j+1] = $a[$j];
			$a[$j] = $temp;
		}
	}
}
print_r($a);
?>