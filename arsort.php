<?php
// Step 1: Store names of students in an array
$students = array("John", "Alice", "Bob", "Charlie", "David");

// Step 2: Display the original array
echo "Original Array:";
print_r($students);

// Step 3: Sort the array using asort()
asort($students);

// Step 4: Display the sorted array
echo "Sorted Array:";
print_r($students);
?> 