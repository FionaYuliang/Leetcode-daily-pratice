<?php

function canMakeArithmeticProgression($arr) {
    rsort($arr);
    $diff = $arr[0] - $arr[1];
    $count = 0;
    for($i=1;$i<count($arr)-1;$i++){
        if($arr[$i] - $arr[$i+1] === $diff){
            $count++;
        }
    }

    if($count === count($arr)-2){
        return true;
    }else{
        return false;
    }
}

$arr = [3,5,1];
canMakeArithmeticProgression($arr);