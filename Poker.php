<?php
//Determine if the poker hand is flush
function checkIfFlush($arr){
    $let = $arr[0][strlen($arr[0]) - 1];
    foreach ($arr as $card) {
        if ($card[strlen($card) - 1] !== $let) {
            return false;
        }
    }
    return true;
}