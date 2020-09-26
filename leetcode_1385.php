<?php

function findTheDistanceValue($arr1, $arr2, $d) {
    $distance = 0;
    for($i=0;$i<count($arr1);$i++){
        $count = 0;
        for($j=0;$j<count($arr2);$j++){
            if(abs($arr1[$i]-$arr2[$j])>$d){
                $count = $count + 1;
            }
            if($count == count($arr2)){
                $distance = $distance + 1;
            }
        }
        
    }
    print($distance);
}

$arr1 = [1,4,2,3];
$arr2 = [-4,-3,6,10,20,30];
$d = 3;
findTheDistanceValue($arr1, $arr2, $d);