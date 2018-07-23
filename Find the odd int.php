<?php

function findIt(array $seq): int
{
    $result = 0;

    foreach ($seq as &$value) {
        $result = $result ^ $value;
    }
    return $result;
}

$arr = [20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5];
echo findIt($arr);