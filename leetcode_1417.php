<?php


function reformat($s) {
    $arr = str_split($s);
    $char_arr = [];
    $int_arr = [];
    $new_char = [];
    $char_pattern = "/[^a-z]/";
    $char_pattern = "/[^0-9]/";
    for($i=0;$i<count($arr);$i++){
        if (preg_match($char_pattern, $arr[$i])){
            array_push($char_arr,$arr[$i]);
        }else{
            array_push($int_arr,$arr[$i]);
        }
    }
    if(count($char_arr) == 0 || count($int_arr) == 0){
        return "";
    }
    $char_length = count($char_arr);
    $int_length = count($int_arr);
    if($int_length > $char_length){
        $last = array_pop($int_arr);
        for($j=0;$j<$char_length;$j++){
            $a = $int_arr[$j];
            $b = $char_arr[$j];
            array_push($new_char,$a);
            array_push($new_char,$b);
        }
        array_push($new_char,$last);
    }else{
        if($int_length === $char_length){
            for($j=0;$j<$int_length;$j++){
            $b = $int_arr[$j];
            $a = $char_arr[$j];
            array_push($new_char,$a);
            array_push($new_char,$b);
        }
        }else{
            $last = array_pop($char_arr);
            for($j=0;$j<$int_length;$j++){
                $b = $int_arr[$j];
                $a = $char_arr[$j];
                array_push($new_char,$a);
                array_push($new_char,$b);
            }
            array_push($new_char,$last);
        }
    }

    $result = implode($new_char);
    print($result);
}

$s="j";
reformat($s);