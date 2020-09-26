<?php

function isPrefixOfWord($sentence, $searchWord) {
    $sentence_arr = explode(" ",$sentence);
    for($i=0;$i<count($sentence_arr);$i++){
        $pos = strpos($sentence_arr[$i],$searchWord);
        if($pos !== false){
            return $i+1;
        }
    }
    if($pos === false){
        return -1;
    }

}



$sentence = "i love eating burger";
$searchWord = "burg";
isPrefixOfWord($sentence,$searchWord);