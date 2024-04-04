<?php
// Array is a collection of data

// Index array
$allstudent = array("Dua", "kinza", "Farah", "Bisma", "Muntaha");
rsort($allstudent);






// Associative array
$colors = array(
    'name' => 'Ali',
    'age' => 18,
    'course' =>'DISM'
);
krsort($colors);
echo "<pre>";
print_r($colors);
echo "</pre>";

// Multidimensional array
$colors = array(
    'name' => 'Ali',
    'age' => 18,
    'course' => array('HTML','CSS','JS')
);

// echo "<pre>";
// print_r($allstudent);
// echo "</pre>";

// echo "<pre>";
// print_r($colors);
// echo "</pre>";
