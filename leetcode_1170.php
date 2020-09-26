<?php

function minFrequency($array){
    $result_arr=[];
    for($i=0;$i<count($array);$i++){
        $element_arr= str_split($array[$i]);
        $min = min($element_arr);
        $element_count_arr = array_count_values($element_arr);
        $min_freq = $element_count_arr[$min];
        array_push($result_arr,$min_freq);
    }
    return $result_arr;
}

function numSmallerByFrequency($queries, $words){
    $min_freq01 = minFrequency($queries);
    $min_freq02 = minFrequency($words);
    $fre_cmp_arr = [];
    for($i=0;$i<count($min_freq01);$i++){
        $count = 0;
        for($j=0;$j<count($min_freq02);$j++){
            $feq01 = $min_freq01[$i];
            $feq02 = $min_freq02[$j];
            if($feq02 > $feq01){
                $count = $count + 1;
            }
        }
        array_push($fre_cmp_arr,$count);
    }
    print_r($fre_cmp_arr);
}


$queries = ["bbb","cc"];
$words = ["a","aa","aaa","aaaa"];
numSmallerByFrequency($queries,$words);
