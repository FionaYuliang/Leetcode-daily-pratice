<?php

function maxPower($s){
    $arr = str_split($s);
    $count_arr=[];
    $unique_arr = array_unique($arr);
    $unique_arr = array_merge($unique_arr);
    for($i=0;$i<count($unique_arr);$i++){
        $count = 0;
        $element = $unique_arr[$i];
        for($j=0;$j<count($arr);$j++){
            while($arr[$j] === $element && $arr[$j+1] === $arr[$j]){
                    $count++;
                    $j = $j + 1;
            }
        }
        array_push($count_arr,$count);
    }

    print(max($count_arr)+1);

}

$s="hooraaaaaaaaaaayyyyyy";
maxPower($s);

