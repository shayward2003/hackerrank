<?php

    // read testdata
    $handle = fopen ("php://stdin", "r");
    /**
     * Group of numbers we will be comparing
     * @param  int $a0 
     * @param  int $a1 
     * @param  int $a2 
     * @param  int $b0 
     * @param  int $b1 
     * @param  int $b2 
     * @return  array  results of points via the comparison
     */
    function solve($a0, $a1, $a2, $b0, $b1, $b2){
        // set the score at 0 0
        $results = [0,0];
        // do the three comparisons 
        $results = compare($a0, $b0, $results);
        $results = compare($a1, $b1, $results);
        $results = compare($a2, $b2, $results);
        
        return $results;
          
    }

    /**
     * compare to ints and update the results accordingly
     * @param  int $a       
     * @param  int $b       
     * @param  array $results current scores
     * @return array          return updated scores
     */
    function compare($a, $b, $results){
        // compare if a > b, A gets a point
        if ($a > $b){
           $results[0]++;
        } else if ($a<$b){
            // if a < b, B gets a point
            $results[1]++;
        } 
        //return updated pts
        return $results;
    }

    // processing the data
    fscanf($handle, "%d %d %d", $a0, $a1, $a2);
    fscanf($handle, "%d %d %d", $b0, $b1, $b2);
    //sending data to the solve function
    $result = solve($a0, $a1, $a2, $b0, $b1, $b2);
    //echoing results
    echo implode(" ", $result)."\n";

?>
