<?php
/**
* To find min element in array 
* Element - 65
* Input Array - 12,52,65,45,2,53 
* Output Array - Element 65
*/
$a= array(12,52,65,45,2,53);
$min = $a[0];
foreach($a as $e){
	if($min > $e){
		$min = $e;
	}
}
echo 'Min element in array is '.$min;
?>