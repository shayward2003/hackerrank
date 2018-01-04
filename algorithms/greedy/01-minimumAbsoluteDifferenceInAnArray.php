<?PHP 
    //get test data
    $handle = fopen ("php://stdin", "r");
    /**
     * find the min absolute difference between any set of numbers in an array
     * @param  in $n   number of ints in $arr array
     * @param  array $arr array of ints
     * @return int      minimum absolute differece between any given numbers in an array
     */
    function minimumAbsoluteDifference($n, $arr) {
        // sort arry from lowest to highest
        sort($arr);
        // set up a diffs array and pair number pointers
        $diffs = []; 
        $i =0; 
        $j=1;

        // loop through the array comparing ajoining numbers and placing their diff into diffs array
        while($j< count($arr)){
            $diffs[] = $arr[$j]- $arr[$i];
            $i++;
            $j++;
        }
        
        // retun the lowest val in the diffs array
        return min($diffs);
    }

    //process testdata
    fscanf($handle, "%i",$n);
    $arr_temp = fgets($handle);
    $arr = explode(" ",$arr_temp);
    $arr = array_map('intval', $arr);
    // send data to the function
    $result = minimumAbsoluteDifference($n, $arr);
    // print results
    echo $result . "\n";
?>