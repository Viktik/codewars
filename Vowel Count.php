<?php

function getCount($str)
{
    $vowelsCount = 0;

    $arr = ["a", "e", "i", "o", "u"];
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $arr)) {
            $vowelsCount++;
        }
    }

    return $vowelsCount;
}

echo getCount("a bra cada br a");