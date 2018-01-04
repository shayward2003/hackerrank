<?php
	// get testdata
	$handle = fopen ("php://stdin", "r");
	/**
	 * count number of positive,negative and zero numbers, then return the count of each divided by total of elements
	 * round to 5 digits w/ trailing zero
	 * @param  array $arr array of ints
	 * @return       array of fraction of ints [0] positive fraction, [1] negative fraction, and [2] zeros fractions
	 */
	function plusMinus($arr) {
		// results array, [0] will count positives, [1] will count negative, and [2] will count zeros
	    $vals= [0,0,0];
	    foreach ($arr as $a){
			// increment if greater than zero
			if ($a>0){
				$vals[0]++;
			}
			// inrement if less than zero 
			if ($a<0){
				$vals[1]++;
			}
			// increment if == to zero 
			if ($a==0){
				$vals[2]++;
			}
	    }

	    // format all the fractioned results
	    $vals[0] = number_format ($vals[0]/count($arr),6);
	    $vals[1] = number_format ($vals[1]/count($arr),6);
	    $vals[2] = number_format ($vals[2]/count($arr),6);

	    //return results
	    return $vals;
	}
	//process test data
	fscanf($handle, "%i",$n);
	$arr_temp = fgets($handle);
	$arr = explode(" ",$arr_temp);
	$arr = array_map('intval', $arr);
	// send data to function 
	$results = plusMinus($arr);
	//print results
	echo implode ("\n", $results);

?>
