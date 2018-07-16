<?php

function camel_case(string $s): string
{
    if (empty($s)) {
        return "";
    }
    $s = trim($s);
    $arr = explode(" ", $s);
    foreach ($arr as $word) {
        $word[0] = strtoupper($word[0]);
        $arrNew[] = $word;
    }
    $newStr = implode("", $arrNew);
    return $newStr;
}

echo camel_case("");