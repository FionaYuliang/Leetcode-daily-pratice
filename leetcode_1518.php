<?php

function numWaterBottles($numBottles, $numExchange) {
    if($numBottles < $numExchange){
        return $numBottles;
    }

    if($numBottles == $numExchange){
        return $numBottles + 1;
    }

    $time = $numBottles % $numExchange;
    $count = 0;
    while($time != 0 ){
        $numBottles = $numBottles - $numExchange;
        $count++;
    }
        return $count + $numBottles;
}

numWaterBottles(15,4);