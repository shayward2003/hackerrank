<?php
    // get testdata
    $handle = fopen ("php://stdin", "r");
    /**
     * get diagonal difference of a multi dimensional array of ints
     * @param  array $a array of ints
     * @return int    absolute value of the difference between diagnoal sums of the $a array
     */
    function diagonalDifference($a) {
        //get size of the box
        $box = range(0,count($a)-1);
        // build the first diag
        $diag1 = [];
        foreach($box as $key=>$d){
            $diag1[] = [$key,$key];
        }

        // build the second diag
        $diag2 = [];
        $x =0; 
        $y =count($a)-1;
         foreach($box as $key=>$d){
            $diag2[] = [$x,$y];
             $x++;
             $y--;
        }
        
        
        // set d to be diagnoal sums
        $d = [0,0];
        // loop through the first diag and calculate sum
        foreach($diag1 as $coords){
            $d[0] += $a[$coords[0]][$coords[1]];  
        }

        //loop through second diag and calculate sum
        foreach($diag2 as $coords){
            $d[1] += $a[$coords[0]][$coords[1]];  
        }
        
        // return the absolute value of the two diagnoal sums
        return abs($d[0]-$d[1]);
        
    }
    // process test data 
    fscanf($handle, "%i",$n);
    $a = array();
    for($a_i = 0; $a_i < $n; $a_i++) {
       $a_temp = fgets($handle);
       $a[] = explode(" ",$a_temp);
       $a[$a_i] = array_map('intval', $a[$a_i]);
    }
    // send data to function
    $result = diagonalDifference($a);

    //print results
    echo $result . "\n";

?>
