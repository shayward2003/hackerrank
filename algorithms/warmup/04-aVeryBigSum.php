<?php
	//read testdata
	$handle = fopen ("php://stdin", "r");
	/**
	 * return the summ of array
	 * @param  int $n  number of elements in array
	 * @param  array $ar array of numbers that need to be processed
	 * @return int     sum of array
	 */
	function aVeryBigSum($n, $ar) {
	    return array_sum($ar);
	}
	//processing testdata
	fscanf($handle, "%i",$n);
	$ar_temp = fgets($handle);
	$ar = explode(" ",$ar_temp);
	$ar = array_map('intval', $ar);
	// sending data to function
	$result = aVeryBigSum($n, $ar);
	//echoing results
	echo $result . "\n";

?>
