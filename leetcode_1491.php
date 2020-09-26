<?php

function average($salary) {
    $people = count($salary);
    $max = max($salary);
    $min = min($salary);
    $remain = array_diff($salary,[$max,$min]);
    $result = array_sum($remain) / ($people - 2);

    return $result;
}

$salary = [4000,3000,1000,2000];
average($salary);