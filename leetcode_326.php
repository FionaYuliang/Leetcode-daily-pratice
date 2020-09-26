<?php

function isPowerOfThree($n) {
    if($n == 1 || $n == 4){
        return true;
    }
    if($n <= 0 || $n == 2 || $n == 3){
        return false;
    }

    while($n > 4){
        $n = $n / 4;
    }
    if($n % 4 == 0){
        return true;
    }else{
        return false;
    }

}

echo isPowerOfThree(16);
echo "\n";