<?php

function canBeEqual($target, $arr) {
    $diff = array_diff($target,$arr);
    if(count($diff) == 0 && count($target) === count($arr)){
        $arr_count1 = array_count_values($target);
        $arr_count2 = array_count_values($arr);
        print_r($arr_count1);
        print_r($arr_count2);
        $equal_time = 0;
        foreach($arr_count1 as $key=>$value){
            if($value === $arr_count2[$key]){
                $equal_time++;
            }
        }
        $clean_length = count(array_unique($target));
        if($equal_time === $clean_length){
            return true;
        }
            
    }
        return false;
    
}

$target = [1,2,2,3];
$arr = [1,1,2,3];
canBeEqual($target, $arr);