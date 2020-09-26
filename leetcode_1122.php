<?php
function relativeSortArray($arr1, $arr2) {
    $new_array=[];
    for($i=0;$i<count($arr2);$i++){
        $element = $arr2[$i];
        for($j=0;$j<count($arr1);$j++){
            if($arr1[$j] === $element){
                array_push($new_array,$element);
            }
        }

    }
    //以下三行代码写成一行最后结果会出错.
    $diff = array_diff($arr1,$new_array);
    $diff = array_merge($diff);
    sort($diff);
    for($x=0;$x<count($diff);$x++){
        array_push($new_array,$diff[$x]);
    }
    print_r($new_array);

}

$arr1= [28,6,22,8,44,17];
$arr2= [22,28,8,6];
echo relativeSortArray($arr1, $arr2);