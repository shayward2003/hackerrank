<?php
	// get testdata
	$handle = fopen ("php://stdin", "r");
	/**
	 * convert 12 format time to military time
	 * @param  str $s 12-hour time format time
	 * @return str    military time
	 */
	function timeConversion($s) {
	    // convert str to time int
	    $time = strtotime($s);
	    // return formated time to military time
	    return date('H:i:s', $time);
	}
	// process data
	fscanf($handle, "%s",$s);
	//send data to function
	$result = timeConversion($s);
	//print results
	echo $result . "\n";

?>
