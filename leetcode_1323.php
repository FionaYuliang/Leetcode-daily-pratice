<?php



function maximum69Number($num) {

    $array  = array_map('intval', str_split($num));
    for($i=0;$i<count($array);$i++){
        if($array[$i] === 6){
            array_splice($array,$i,1,9);
        break;
        }
    }

    $new_int = implode("",$array);

    print($new_int);
}


$num = 9669;
maximum69Number($num);