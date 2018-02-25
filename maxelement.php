<?php
/**
* To find max element in array 
* Element - 65
* Input Array - 12,52,65,45,2,53 
* Output Array - Element 65
*/
$a= array(12,52,65,45,2,53);
$max = $a[0];
foreach($a as $e){
	if($max < $e){
		$max = $e;
	}
}
echo 'Max element in array is '.$max;
?>