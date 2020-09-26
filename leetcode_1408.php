<?php


function stringMatching($words) {
    $substrArr=[ ];
    for($i=0;$i<count($words);$i++){
        for($j=0;$j<count($words);$j++){
            $word1 = $words[$i];
            $word2 = $words[$j];
            $pos = strpos($word1,$word2);
            if(strcmp($word1,$word2) !== 0 && $pos !== false ){
                array_push($substrArr,$word2);
            }
        }
    }

    $substrArr = array_unique($substrArr);
    print_r($substrArr);
}




$words =  ["blue","green","bu"];
stringMatching($words);