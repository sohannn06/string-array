<?php

$studentGrades = array(
    'Student1' => array('Math' => 90, 'English' => 85, 'Science' => 92),
    'Student2' => array('Math' => 78, 'English' => 88, 'Science' => 76),
    'Student3' => array('Math' => 95, 'English' => 91, 'Science' => 89),
);

function calculateAverageGrades($gradesArray) {
    foreach ($gradesArray as $student => $grades) {
      
        $averageGrade = array_sum($grades) / count($grades);
        
       
        echo "Average grade for $student: $averageGrade\n";
    }
}

calculateAverageGrades($studentGrades);
?>
