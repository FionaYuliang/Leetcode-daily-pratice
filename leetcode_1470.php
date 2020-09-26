<?php

function shuffle($nums,$n){

    $chunk_arr = array_chunk($nums,$n);
    $x_arr = $chunk_arr[0];
    $y_arr = $chunk_arr[1];
    $shuffle_arr =[];
    for($i=0;$i<$n;$i++){
        array_push($shuffle_arr,$x_arr[$i]);
        array_push($shuffle_arr,$y_arr[$i]);
    }
    
    return $shuffle_arr;
}

$nums = [2,5,1,3,4,7];
$n = 3;
shuffle($nums,$n);