<?php
    // get testdata
    $handle = fopen ("php://stdin", "r");
    /**
     * function for rounding grades
     * @param  array $grades array of grades
     * @return array         rounded grades
     */
    function solve($grades){
        // parse through the grades and round them accordingly
        return array_map("gradeRounder", $grades);
    }

    /**
     * process each grades and rounds accordingly, if grade< 38 no rounding, if
     * grade is less than 3 away from next multiple of 5 then it will round to 
     * the next multiple of 5 
     * @param  int $v grade
     * @return int    processed grade
     */
    function gradeRounder($v){
        // if less then 38, no rounding, return grade
        if($v < 38){
            return $v;
        } else {
            // check if grade+1 is a multiple of 5
            if(($v+1)%5 == 0){
                // it is so return the multiple of 5
                return $v+1;
            }
            // check if grade +2 is amultiple of 5
            if(($v+2)%5 == 0){
                // it is so return it as the next multiple of 5
                return $v+2;
            }
            
            // wasn't close enough to the next multiple of 5 so no rounding, just 
            // return the grade
            return $v;
        }
    }
    // process testdata
    fscanf($handle, "%d",$n);
    $grades = array();
    for($grades_i = 0; $grades_i < $n; $grades_i++){
       fscanf($handle,"%d",$grades[]);
    }
    // send test data to function
    $result = solve($grades);
    // echo results
    echo implode("\n", $result)."\n";
?>