<?php

$grades = array(85, 92, 78, 88, 95);

function sortGradesDescending($gradesArray) {
    
    arsort($gradesArray);
    
    print_r($gradesArray);
}

sortGradesDescending($grades);
?>
