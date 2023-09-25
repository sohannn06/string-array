<?php

function generatePassword($length) {
    
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numberChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $allChars = $lowercaseChars . $uppercaseChars . $numberChars . $specialChars;

    $password = '';
    $totalChars = strlen($allChars);

    
    for ($i = 0; $i < $length; $i++) {
        
        $randomIndex = mt_rand(0, $totalChars - 1);

        
        $password .= $allChars[$randomIndex];
    }

    return $password;
}

$password = generatePassword(12);

echo $password;
?>
