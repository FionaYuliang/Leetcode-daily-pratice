<?php

function largestPerimeter($A) {
    arsort($A);
    $sorted_array = $A;
    for($i=0;$i<count($sorted_array)-2;$i++){
        $a = $sorted_array[$i+2];
        $b = $sorted_array[$i+1];
        $c = $sorted_array[$i];
        if( $a + $b  > $c){
            $largetsPerimeter = $sorted_array[$i] + $sorted_array[$i+1] + $sorted_array[$i+2];
            return $largetsPerimeter;
        }
    }
    return 0;
}


$A=[1,2,1];
echo largestPerimeter($A);

echo "\n"; 


