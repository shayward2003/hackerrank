<?php
	/**
	 * Function that returns the sum of two integers 
	 * @param  int $a first number
	 * @param  int $b second number
	 * @return int    sum of $a + $b
	 */
	function solveMeFirst($a,$b){
	  return $a+$b;
	  
	}
	//open file from hackerrank
	$handle = fopen ("php://stdin","r");
	// get contents
	$_a = fgets($handle);
	$_b = fgets($handle);

	// run sum function
	$sum = solveMeFirst((int)$_a,(int)$_b);

	//print sum
	print ($sum);

	//close file
	fclose($handle);
?>