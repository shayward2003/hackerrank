<?php
	// get testdata
	$handle = fopen ("php://stdin", "r");
	/**
	 * build a hash stair case $n tall 
	 * @param  int $n height of stiarcase
	 * @return     printed staircase 
	 */
	function staircase($n) {
	    	// loop through each step in order to build it
	       foreach (range(1,$n) as $row){
	           // number of spaces will be n - row
	           $spaces = $n-$row;
	           // fill an array with those spaces
	           $spaces = array_fill(0,$spaces, ' ');
	           // number of # to be the staircase is == to row
	           $steps = array_fill (0,$row, '#');
	           // merge the two together
	           $together = array_merge($spaces, $steps);
	           // print out the step
	           echo implode('', $together)."\n";
	       }
	}
	// process testdata
	fscanf($handle, "%i",$n);
	// run staircase function 
	staircase($n);

?>
