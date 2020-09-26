<?php

function wordPattern($pattern, $str) {
    $array_keys = str_split($pattern,1);
    $array_values = explode(" ",$str);

    if(count($array_keys) != count($array_values) ){
        return false;
    }
    

    
}


wordPattern("abba","dog cat cat fish");
echo "\n";