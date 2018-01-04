<?php
	// get testdata
	$handle = fopen ("php://stdin", "r");
	/**
	 * build a table of amounts and # of combos coins can make change of a value
	 * @param  int $n goal change ammount
	 * @param  array $c array of coins values
	 * @return int    number of different combos
	 */
	function getWays($n, $c){
		// build an array of possible ammounts from 0 - $n
		$combos = array_fill(0, $n+1, 0);
		// set change amount of 0 to 1, because no value of change can go into 0 but it 
		// is still 1.
		$combos[0] = 1;

		// loop through the coins to begin to fill the combos
		foreach ($c as $coin){
			// loop through the array of ammounts
			foreach($combos as $amount=>$combos) {
				// if amount is greater than or equal to coin value, add the # solutions from
				// $combos[amount - coin]
				if($amount >= $coin) {
					$combos[$amount] += $combos[$amount - $coin];
				}
			}
		}
		// print the number of combos for the $n column in combos combos
		echo $combos[$n];
	}

	//process test data
	fscanf($handle, "%d %d", $n, $m);
	$c_temp = fgets($handle);
	$c = explode(" ",$c_temp);
	$c = array_map('intval', $c);
	// Print the number of ways of making change for 'n' units using coins having the values given by 'c'
	$ways = getWays($n, $c);



?>
