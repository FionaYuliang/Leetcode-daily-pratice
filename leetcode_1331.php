<?php

function arrayRankTransform($arr){
    $pre_max = count($arr);
    $unique_arr = array_unique($arr);
    $max = count($unique_arr);

    sort($unique_arr);
    $flipped = array_flip($unique_arr);

    $result_array =[];

    for($j=0;$j<$pre_max;$j++){
        $element = $arr[$j];
        array_push($result_array,$flipped[$element]);
    }


    print_r($result_array);

}



$arr=[40,10,20,30];
arrayRankTransform($arr);