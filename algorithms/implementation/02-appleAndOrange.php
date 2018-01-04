<?php
    // get test data
    $handle = fopen ("php://stdin", "r");
    /**
     * Class used in array filter in order to pass in multiple variables,
     * sets tree value and house values, it will then determine fruit spot and return if the 
     * fruit fell on house or not
     */
    class FruitOnHouse{
        private $tree; 
        private $house; 
        
        /**
         * sets tree location and house lower and upper bounds
         * @param int $tree  tree location
         * @param array $house house upper and lower bounds
         */
        function __construct($tree, $house){
            $this->tree = $tree; 
            $this->house = $house;  
        }
        
        /**
         * Determines if the fruit fell on the house or not
         * @param  int $fruit +- int determineing how far from tree fruit fell
         * @return bool        if fell on house return true, false if not
         */
        function fruitFall ($fruit){
            // fruit spot determined on distance from tree
            $fruitSpot = $this->tree + $fruit; 
            // if fell on house then return true, false if otherwise
            return ($fruitSpot >= $this->house[0] && $fruitSpot <= $this->house[1]);
        }
        
    }
    /**
     * passing in the test data, house bounds , trees and diffrent fruit falls
     * uses array_filters to determine which fruit fell on the house
     * @param  int $s      lower bound of house
     * @param  int $t      upper bound of house
     * @param  int $a      apple tree
     * @param  int $b      orange tree
     * @param  array $apple  array of ints, of apples that fell 
     * @param  array $orange array of ints, of oranges that fell
     * @return array         count of fruits that fell
     */
    function appleAndOrange($s, $t, $a, $b, $apple, $orange) {
        // filter apples
        $applesOnHouse = array_filter($apple, array(new FruitOnHouse($a, [$s,$t]), 'fruitFall'));
        // filter oranges
        $orangesOnHouse = array_filter($orange, array(new FruitOnHouse($b, [$s,$t]), 'fruitFall'));
        // return count of fruit that fell on houses
        return [count($applesOnHouse), count($orangesOnHouse)];
        
     }
     // process test data
    fscanf($handle, "%i %i", $s, $t);
    fscanf($handle, "%i %i", $a, $b);
    fscanf($handle, "%i %i", $m, $n);
    $apple_temp = fgets($handle);
    $apple = explode(" ",$apple_temp);
    $apple = array_map('intval', $apple);
    $orange_temp = fgets($handle);
    $orange = explode(" ",$orange_temp);
    $orange = array_map('intval', $orange);
    // pass test datat to the function 
    $result = appleAndOrange($s, $t, $a, $b, $apple, $orange);
    // print results
    echo implode("\n", $result)."\n";

?>
