<?php

/**
 * returns the sum of an array
 * @param  int    $n  number of elements in the array 
 * @param  array  $ar Array of int
 * @return int     sum of given array 
 */
function simpleArraySum($n, $ar) {
   return array_sum($ar);
}

//opens file from hackerrank
$handle = fopen ("php://stdin", "r");

// get first line as an int
fscanf($handle, "%i",$n);
// get second line, aka the array line
$ar_temp = fgets($handle);
// build the array
$ar = explode(" ",$ar_temp);
//ensure all elements are ints
$ar = array_map('intval', $ar);
// run array sum
$result = simpleArraySum($n, $ar);
// return results
echo $result . "\n";

?>