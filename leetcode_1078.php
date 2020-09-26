<?php

function findOcurrences($text, $first, $second) {
    $array = explode(" ",$text);
    $result = [ ];
    for($i=0;$i<count($array)-2;$i++){
        if($array[$i] == $first && $array[$i+1] == $second){
            array_push($result,$array[$i+2]);
        }
    }

    return $result;
}


$text = "ypkk lnlqhmaohv lnlqhmaohv lnlqhmaohv ypkk ypkk ypkk ypkk ypkk ypkk lnlqhmaohv lnlqhmaohv lnlqhmaohv lnlqhmaohv ypkk ypkk ypkk lnlqhmaohv lnlqhmaohv ypkk";
$first = "lnlqhmaohv";
$second = "ypkk";

echo findOcurrences($text,$first,$second);
echo '\n';