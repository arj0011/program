<?php
/**
* To search an element in array 
* Element - 53
* Input Array - 12,52,65,45,2,53 
* Output Array - At 6 position
*/
$a= array(12,52,65,45,2,53);
$n = 53;
for($i=0;$i<count($a);$i++){
	if($n==$a[$i]){
		$pos = $i + 1;
		echo 'At '.$pos.' position';
		break;
	}
}

