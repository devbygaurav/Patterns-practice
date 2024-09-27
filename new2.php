<?php
function findIndex($array, $element) {
    foreach ($array as $index => $value) {
        if ($value === $element) {
            return $index;
        }
    }
    return -1; // Return -1 if the element is not found
}

// Example usage for indexed array
$indexedArray = array('apple', 'banana', 'cherry', 'date');
$index = findIndex($indexedArray, 'cherry');
echo " The index of 'cherry' is: " . $index;
echo "\n";// Output: The index of 'cherry' is: 2

// Example usage for associative array
$assocArray = array('a' => 'apple', 'b' => 'banana', 'c' => 'cherry', 'd' => 'date');
$index = findIndex($assocArray, 'cherry');
echo "The index of 'cherry' is: " . $index; // Output: The index of 'cherry' is: c

?>
