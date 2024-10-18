<?php
// Function to validate marks range
function validateMarks($marks) {
    if ($marks >= 0 && $marks <= 100) {
        return true;
    } else {
        return false;
    }
}

// Function to calculate total marks, average, and grade
function calculateResult($sub1, $sub2, $sub3, $sub4, $sub5) {
    // Validate the marks
    if (!validateMarks($sub1) || !validateMarks($sub2) || !validateMarks($sub3) || !validateMarks($sub4) || !validateMarks($sub5)) {
        echo "Invalid marks entered! Marks should be between 0 and 100.";
        return;
    }

    // Check if student has failed in any subject
    if ($sub1 < 33 || $sub2 < 33 || $sub3 < 33 || $sub4 < 33 || $sub5 < 33) {
        echo "Student has failed.";
        return;
    }

    // Calculate total and average
    $total_marks = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
    $average_marks = $total_marks / 5;

    // Determine grade using switch-case
    $grade = '';
    switch (true) {
        case ($average_marks >= 80 && $average_marks <= 100):
            $grade = 'A+';
            break;
        case ($average_marks >= 70 && $average_marks <= 79):
            $grade = 'A';
            break;
        case ($average_marks >= 60 && $average_marks <= 69):
            $grade = 'A-';
            break;
        case ($average_marks >= 50 && $average_marks <= 59):
            $grade = 'B';
            break;
        case ($average_marks >= 40 && $average_marks <= 49):
            $grade = 'C';
            break;
        case ($average_marks >= 33 && $average_marks < 40):
            $grade = 'D';
            break;
        default:
            $grade = 'F';
            break;
    }

    // Output the result
    echo "Total Marks: $total_marks<br>";
    echo "Average Marks: $average_marks<br>";
    echo "Grade: $grade";
}

// Test with sample marks
$subject1 = 95;
$subject2 = 78;
$subject3 = 75;
$subject4 = 90;
$subject5 = 85;

calculateResult($subject1, $subject2, $subject3, $subject4, $subject5);