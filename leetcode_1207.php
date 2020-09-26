<?php

function uniqueOccurrences($arr) {
    $count_array = array_count_values($arr);
    print_r($count_array);
    if(count($count_array) === count(array_unique($count_array))){
        return true;
    }else{
        return false;
    }

}



$arr = [1,2];
echo uniqueOccurrences($arr);