<?php


function findSpecialInteger($arr) {
    $length = count($arr);
    $count_array = array_count_values($arr);
    arsort($count_array);
    foreach($count_array as $key => $value){
        if($value / $length > 0.25){
            return $key;
        }
    }
}

$arr = [1,2,2,6,6,6,6,7,10];
echo findSpecialInteger($arr);