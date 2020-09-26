<?php

function countCharacters($words, $chars) {
    $chars_arr = str_split($chars);
    $chars_count_arr = array_count_values($chars_arr);

    $word_num = count($words);
    $result = 0;
    for($i=0;$i<$word_num;$i++){
        $word = $words[$i];
        $word_arr = str_split($word);
        $word_length = count($word_arr);
        $word_in_arr = 0;
       
        $in_arr_count = 0;
        for($j=0;$j<$word_length;$j++){
            if(in_array($word_arr[$j],$chars_arr)){
                $in_arr_count++;
            }
            if($in_arr_count === $word_length){
                $word_count_arr  = array_count_values($word_arr);
                foreach($word_count_arr as $key =>$value){
                    if($value <= $chars_count_arr[$key]){
                        $word_in_arr++;
                    }
                    if($word_in_arr === count($word_count_arr)){
                        $result = $result + count($word_arr);
                        print($word);
                    } 
                }
            }
        }

        
    }

    print($result);
}

$words = ["hello","world","leetcode"];
$chars = "welldonehoneyr";
countCharacters($words,$chars);