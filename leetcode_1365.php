<?php



function smallerNumbersThanCurrent($nums) {

    $result = [];
    for($i=0;$i<count($nums);$i++){
        $count = 0;
        for($j=0;$j<count($nums);$j++){
            $anchor = $nums[$i];
            $cmp = $nums[$j];
            if($cmp < $anchor){
                $count = $count +1;
            }
        }
        array_push($result,$count);
    }
    print_r($result);

}

$nums = [8,1,2,2,3];
smallerNumbersThanCurrent($nums);