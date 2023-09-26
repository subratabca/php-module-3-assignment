<?php
$studentGrades = array(
    array('Math' => 85, 'English' => 92, 'Science' => 78),
    array('Math' => 90, 'English' => 88, 'Science' => 95),
    array('Math' => 78, 'English' => 86, 'Science' => 92)
);
function calculateAndPrintAverages($grades) {
    foreach ($grades as $student => $subjects) {
        $total = array_sum($subjects);
        $average = $total / count($subjects);
        echo "Student " . ($student + 1) . " Average Grade: " . $average . "\n";
    }
}

calculateAndPrintAverages($studentGrades);
?>
