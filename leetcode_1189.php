<?php

function maxNumberOfBalloons($text) {
    $ballon_arr = ["b","a","l","o","n"];
    $text_arr = str_split($text);
    $text_count_arr = array_count_values($text_arr);
    $num_arr =[];
    foreach($ballon_arr as $key=>$value){
        $is_exist = in_array($value,$text_arr);
        if($is_exist == false){
            return 0;
        }else{
            $char_num = $text_count_arr[$value];
            if($value == "l" || $value == "o"){
                if($char_num < 2){
                    return 0;
                }else{
                    $char_num = intval($char_num / 2);
                }
            }
            array_push($num_arr,$char_num);
        }
    }

    $min = min($num_arr);
    return $min;
   
}

$text = "ballon";
echo maxNumberOfBalloons($text);