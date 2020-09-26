<?php
 
function uncommonFromSentences($A, $B) {
    $array1 = explode(" ",$A);
    $array2 = explode(" ",$B);

    $result1 = array_diff($array1,$array2);
    $result2 = array_diff($array2,$array1);

    $result = array_merge($result1,$result2);

    $merge_count = array_count_values($result);

    print_r($merge_count);

    foreach($merge_count as $key=>$value){
        if($value > 1){
            //这个$value对应的$key是 $result里的$value,删除所有的$value
            $element = $key;
            $result = array_unique($result);
            unset($result[$ ])


            
        }
    }
    

    print_r($result);



}

$A = "apple apple";
$B = "banana";
echo uncommonFromSentences($A,$B);

echo "\n"; 