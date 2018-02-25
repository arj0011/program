<?php
/**
* To print * triangle 
*	*
*	* *
*   * * *
*   * * * *
*   * * * * *
*	* * * * * *
*   * * * * *
*   * * * *
*   * * *
*   * *
*   *
*/ 

for($i=0;$i<5;$i++){
	for($j=0;$j<=$i;$j++){
		echo '*';
	}
	echo '<br />';
}
for($i=0;$i<6;$i++){
	for($j=6;$j>$i;$j--){
		echo '*';
	}
	echo '<br />';
}

?>