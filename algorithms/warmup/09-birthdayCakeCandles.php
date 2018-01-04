<?php
	// get test data
	$handle = fopen ("php://stdin", "r");
	/**
	 * return number of occurances of max value in an array
	 * @param  in $n  number of ints in array
	 * @param  array $ar array of ints
	 * @return      return number of occurances of max value in $arr array 
	 */
	function birthdayCakeCandles($n, $ar) {
		// get max value
	   $max = max($ar);
	   // count occurances of all values
	   $results = array_count_values($ar);
	   // return the number of max occurances
	   return $results[$max];
	}
	// process data
	fscanf($handle, "%i",$n);
	$ar_temp = fgets($handle);
	$ar = explode(" ",$ar_temp);
	$ar = array_map('intval', $ar);
	// send test data to function
	$result = birthdayCakeCandles($n, $ar);
	// print results
	echo $result . "\n";

?>
