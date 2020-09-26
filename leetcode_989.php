<?php

function addToArrayForm($A, $K) {
    $stringA = implode($A);
    $stringK = (string)$K;
    $sum = $stringA + $stringK;
 

      if($sum === 0){
        return [0];
    }else{
        $result = str_split($sum);
        return $result;
    
    }
        
        
}

$A =  [1,2,6,3,0,7,1,7,1,9,7,5,6,6,4,4,0,0,6,3];
$K = 516;

addToArrayForm($A,$K);

echo "\n"; 