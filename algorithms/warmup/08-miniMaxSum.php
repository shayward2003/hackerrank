<?php
	// get testdata
	$handle = fopen ("php://stdin", "r");
	/**
	 * print the sum of the smallest 4 numbers and the sum of the largest 4 numbers of given array 
	 * @param  array $arr array of 5 ints
	 * @return       print Min Max
	 */
	function miniMaxSum($arr) {
	    // sort array lowest to highest
	    sort($arr);
	    // slice min array, bottom 4 ints
	    $min = array_slice($arr,0,4);
	    // slice max array top 4 ints
	    $max = array_slice($arr,1,4);

	    // echo their sums
	    echo array_sum ($min); 
	    echo ' ';
	    echo array_sum($max);
	}
	// process test data
	$arr_temp = fgets($handle);
	$arr = explode(" ",$arr_temp);
	$arr = array_map('intval', $arr);
	// run the function
	miniMaxSum($arr);

?>
