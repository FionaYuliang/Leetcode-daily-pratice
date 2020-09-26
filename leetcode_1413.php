<?php

 function minStartValue($nums) {
        $ArrSum = array_sum($nums);
        $negative = 0;
        for($i=0;$i<count($nums);$i++){
            if($nums[$i]<0){
                $negative++;
            }
        }
        if($negative === 0){
            return 1;
        }

       $distanceArr = [];
       $tmpSum = 0;
       for($i=0;$i<count($nums);$i++){
           $tmpSum = $tmpSum + $nums[$i];
           $diff = 1 - $tmpSum;
           array_push($distanceArr,$diff);
       }

       $startValue = max($distanceArr);

       print($startValue);
    }
    

    $nums = [2,3,5,-5,-1];
    minStartValue($nums);