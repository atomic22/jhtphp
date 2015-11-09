<?php
$myArray = array(1, 5, 2, 8, 9, 5, 3, 7);

mySort($myArray);

	
function mySort($a){
	echo "Unsorted ";

	print_r($a);

	$aLength = count($a);
	
	for($j = 0; $j < count($a); $j ++) {
		for($i = 0; $i < count($a)-1; $i ++){
	        if($a[$i] > $a[$i+1]) {
	            $temp = $a[$i+1];
	            $a[$i+1]=$a[$i];
	            $a[$i]=$temp;
	        }       
	    }
	}

	echo "Sorted ";
	print_r($a);
	}
?>