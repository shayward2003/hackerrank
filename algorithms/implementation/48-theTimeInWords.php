<?php
// get testdata
$handle = fopen ("php://stdin","r");
//process testdata
fscanf($handle,"%d",$h);
fscanf($handle,"%d",$m);

/**
 * change time to words
 * @param  int $h hours
 * @param  int $m minutes
 * @return str    string describing the time
 */
function timeToText($h,$m){
    // numbers to strings that will be needed, matched according to key
    $single = ['zero','one', 'two', 'three','four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'tweleve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eightteen', 'nineteen', 'twenty', 'twenty one', 'twenty two', 'twenty three', 'twenty four', 'twenty five', 'twenty six', 'twenty seven', 'twenty eight', 'twenty nine'];

    // handle the specialized options, 0 mins, half and quarter
    switch ($m){
        case 0:
            return $single[$h].' o\' clock';
        break;
        case 15:
            return 'quarter past '.$single[$h];
        break;
        case 30:
            return 'half past '.$single[$h];
        break;
        case 45:
            return 'quarter to '.$single[$h+1];
        break;
    }
      
    $plural = 's'; 
    if($m<30) {
        //set plural to "s", since most minute will be plural
        
        // if one minute remove the s
        if($min == 1){
            $plural = '';
        }
        // using the single array, translate numbers to text
        return $single[$m].' minute'.$plural.' past '.$single[$h];

    }else  {
        // we are greater then 30 mins so we will need to subtract all time from 60
        $m = 60-$m;
        // check for pluralness
        if($min == 1){
            $plural = '';
        }
        // using the single array, translate numbers to text
        return $single[$m].' minute'.$plural.' to '.$single[$h+1];   
    }
}

// echo time in text
echo timeToText($h, $m);

?>
