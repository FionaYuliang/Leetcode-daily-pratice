<?php


function restoreString($s, $indices) {
    $arr = str_split($s);
    $new_arr = array_combine($indices,$arr);
    ksort($new_arr);
    $new_str = implode(",",$new_arr);
    return str_replace(",","",$new_str);

}

$s="codeleet";
$indices=[4,5,6,7,0,2,1,3];

restoreString($s,$indices);