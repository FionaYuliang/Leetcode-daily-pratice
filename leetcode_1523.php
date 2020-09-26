<?php

function countOdds($low, $high) {
    $count = 0;
    for($i=$low;$i<=$high;$i++){
        if($i % 2 !== 0){
            $count++;
        }      
    }
    return $count;
}

$low = 798273637;
$high = 970699661;
echo countOdds($low,$high);