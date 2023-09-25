<?php

$numbers = range(1, 10);
function removeEvenNumbers($numberArray) {
   
    $oddNumbers = array_filter($numberArray, function ($number) {
        return $number % 2 !== 0;
    });
    
    print_r($oddNumbers);
}

removeEvenNumbers($numbers);
?>
