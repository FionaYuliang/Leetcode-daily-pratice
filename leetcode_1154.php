<?php

function dayOfYear($date) {
    $date_arr = explode("-",$date);
    $year = $date_arr[0];
    $month = (int)$date_arr[1];
    $day = (int)($date_arr[2]);

    if($year % 400 == 0){
        $year_status = "leap year";
        $month2 = 29;
    }else{
        if($year % 4 == 0 && $year % 100 !== 0){
            $year_status = "leap year";
            $month2 = 29;
        }else{
            $year_status = "normal year";
            $month2 = 28;
        }
    }

    $day31 = [1,3,5,7,8,10,12];

    if($month == 1){
        $calendar = $day;
    }
    if($month == 2){
        $calendar = 31 + $day;
    }

    if($month == 3){
        $calendar = 31 + $month2 + $day;
    }
    if($month > 3){
        $calendar = 0;
        for($i=1;$i<$month;$i++){  
            if(in_array($i,$day31)){
                $calendar = $calendar  + 31;
            }else{
                if($i === 2){
                    $calendar = $calendar + $month2; 
                 
                }else{
                    $calendar = $calendar  + 30;
                }
                
            }
            
        }
        $calendar = $calendar + $day;
    }

    print($calendar);

}

$date = "1982-05-08";
dayOfYear($date);