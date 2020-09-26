<?php

function isUgly($num) {
    if($num == 1){ 
        return true;
    }
    if($num == 2 || $num == 3 || $num ==5 ){
        return false;
    }

    if ($num % 2 == 0){
        $n = 2;
        while($num > $n){
            if($num != 2 && $num != 3 && $num != 5){
                $num = $num / $n;
            }else{
               return true;
            }
        }
        return false;
    }
    
}

