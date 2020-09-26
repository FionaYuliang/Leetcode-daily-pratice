<?php

function minimumAbsDifference($arr) {
    sort($arr);
    $pair_arr=[];
    for($i=0;$i<count($arr)-1;$i++){
        $first_ele = $arr[$i];
        $second_ele = $arr[$i+1];
        array_push($pair_arr,[$first_ele,$second_ele]);
    }

    $abs_diff_arr=[];
    for($j=0;$j<count($pair_arr);$j++){
        $one_pair = $pair_arr[$j];
        $abs_diff = $one_pair[1] - $one_pair[0];
        array_push($abs_diff_arr,$abs_diff);
    }

    $min_diff = min($abs_diff_arr);
    $min_index_arr = [];
    foreach($abs_diff_arr as $key=>$value){
        if($value === $min_diff){
            array_push($min_index_arr,$key);
        }
    }

    $result_arr=[];
    for($x=0;$x<count($min_index_arr);$x++){
        $index = $min_index_arr[$x];
        $object_pair = $pair_arr[$index];
        array_push($result_arr,$object_pair);
    }

    print_r($result_arr);

}
$arr = [1,3,6,10,15];
minimumAbsDifference($arr);