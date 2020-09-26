<?php

function twoSum($nums,$target){
    for($i=0;$i<count($nums);$i++){
        for($j=$i+1;$j<count($nums);$j++){
            if($nums[$j] == $target-$nums[$i]){
                return [$i,$j];
            }
        }
    }
    return [0,0];
}

echo twoSum([3,2,4], 6);