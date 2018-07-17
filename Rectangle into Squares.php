<?php
function nou($lng, $wdth)
{
    $leng = max($lng, $wdth);
    $widt = min($lng, $wdth);
    $lengn = $leng - $widt;
    static $arr;
    static $i = 0;
    if (empty($lng) || empty($wdth)) {
        return $arr[$i++];
    }
    $arr[$i][] = $widt;
    return nou($lengn, $widt);
}

function sqInRect($lng, $wdth)
{
    if ($lng == $wdth) {
        return null;
    }
    $array = nou($lng, $wdth);
    return $array;
}

