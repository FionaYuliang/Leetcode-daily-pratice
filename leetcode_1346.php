<?php

function checkIfExist($arr) {
    $length = count($arr);
    for($i=0;$i<$length;$i++){
        for($j=$i+1;$j<$length;$j++){
            $a = $arr[$i];
            $b = $arr[$j];
            if($a * 2 === $b|| $a / 2 === $b){
                return true;
            }
            }
        }
    }

    return false;
}

$arr = [10,2,5,3];
echo checkIfExist($arr);