<?php
//Odd or Even?
function odd_or_even(array $a): string
{
    $sum = array_sum($a);
    return ($sum % 2) == 0 ? 'even' : 'odd';
}