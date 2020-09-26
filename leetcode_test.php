<?php


function buddyStrings($A, $B) {

    $array1 = str_split($A);
    $array2 = str_split($B);

    $array_01 = array_unique($array1);
    $array_02 = array_unique($array2);

    if(strcmp($A,$B) == 0 ){
        if(count($array_01) == 1 && count($array_02) == 1){
            return true;
        }else{
            return false;
        }
    }

    if(strlen($A) == 0  || strlen($B) == 0){
        return false;
    }

    $var1 = count($array_01);
    $var2 = count($array_02);
    if($var1 !== $var2 || (count($array_01) ==2 && count($array_02) ==2)){
        return false;
    }

    $result = array_diff($array1,$array2);
    if(count($array1) === 2 && count($array2) ===2){
        if(count($result) == 0){
            return true;
         }
    }
    if(count($result) === 2){
       
         return true;
     }
     return false;


}

$A = 'ab';
$B = 'ba';
echo buddyStrings($A,$B);

echo "\n"; 