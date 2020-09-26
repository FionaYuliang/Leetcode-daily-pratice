<?php

class Solution {

function month2($year){
    $year_status = "leap year";
    $Feb_day = 29;
    $whole_year = 366;
    if($year % 400 == 0){
        $year_status = "leap year";
        $Feb_day = 29;
        $whole_year = 366;
    }else{
        if($year % 4 == 0 && $year % 100 !== 0){
            $year_status = "leap year";
            $Feb_day = 29;
            $whole_year = 366;
        }else{
            $year_status = "normal year";
            $Feb_day = 28;
            $whole_year = 365;
     }
    }  
    return [$Feb_day,$whole_year];
}

function dayOfYear($date) {
    $date_arr = explode("-",$date);
    $year = $date_arr[0];
    $month = (int)$date_arr[1];
    $day = (int)($date_arr[2]);
    
    $day31 = [1,3,5,7,8,10,12];

    $Feb_day = $this->month2($year)[0];

    if($month == 1){
        $calendar = $day;
    }
    if($month == 2){
        $calendar = 31 + $day;
    }

    if($month == 3){
        $calendar = 31 + $Feb_day + $day;
    }
    if($month > 3){
        $calendar = 0;
        for($i=1;$i<$month;$i++){  
            if(in_array($i,$day31)){
                $calendar = $calendar  + 31;
            }else{
                if($i === 2){
                    $calendar = $calendar + $Feb_day; 
                 
                }else{
                    $calendar = $calendar  + 30;
                }
                
            }
            
        }
        $calendar = $calendar + $day;
    }

    return $calendar;

}

function daysBetweenDates($date1, $date2) {
    $date_arr1 = explode("-",$date1);
    $year1 = $date_arr1[0];

    $date_arr2 = explode("-",$date2);
    $year2 = $date_arr2[0];

    $whole_year1 = $this->month2($year1)[1];
    $whole_year2 = $this->month2($year2)[1];

    $date1_calendar = $this->dayOfYear($date1);
    $date2_calendar = $this->dayOfYear($date2);

    $final_result = 0;

    if($year1 === $year2){

        $final_result = abs($date1_calendar - $date2_calendar);
    
    }else{
        $min_year = min($year1,$year2);
        if($min_year === $year1){
            //如果$date1比较小的话,就用date1这一年剩下的日子加$date的日子
             //但$date1和date2不一定是连续年,差几年都有可能.要算出中间每个年份的天数
            $date1_extra = $whole_year1 - $date1_calendar;
            $result = $date1_extra + $date2_calendar;  
            
             $gap = $year2- $year1;
              //相隔1年的话:
            if($gap  == 1){
                 $final_result = $result;
            }else{
                //相隔超过一年
                $gap_year_arr = [];
                for($y=1;$y<$gap;$y++)
                {
                    $gap_year = $year1 + $y;
                    $gap_year_day = $this->month2($gap_year)[1];
                    array_push($gap_year_arr,$gap_year_day);
                }
                $gap_year_whole = array_sum($gap_year_arr);
                $final_result = $result + $gap_year_whole;
            
            }
        }else{
            //如果$date2比较小的话,就是反过来
            $date2_extra = $whole_year2 - $date2_calendar;
            $result = $date2_extra + $date1_calendar;  
            $gap = $year1 - $year2;
              //相隔1年的话:
            if($gap  == 1){
                 $final_result = $result - 1;
            }else{
                //相隔超过一年
                $gap_year_arr = [];
                for($y=1;$y<$gap;$y++)
                {
                    $gap_year = $year2 + $y;
                    $gap_year_day = $this->month2($gap_year)[1];
                    array_push($gap_year_arr,$gap_year_day);
                }
                $gap_year_whole = array_sum($gap_year_arr);
                $final_result = $result + $gap_year_whole;
            
            }
        }
        
    }
    return $final_result;
}
}

$date1 = "2074-09-12";
$date2 = "1983-01-08";

$test =  new solution();
echo $test->daysBetweenDates($date1,$date2);
