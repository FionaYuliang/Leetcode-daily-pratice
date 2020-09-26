<?php

function sortedSquares($A) {
    $squares = [ ];
    foreach($A as $key=>$value){
        $element = pow($value,2);
        array_push($squares,$element);
    }
    sort($squares);
    print_r($squares);

}

$A= [-4,-1,0,3,10];

sortedSquares($A);

echo "\n"; 