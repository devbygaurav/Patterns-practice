<?php
function mhoit($n)
{
    // First part: lines with 1's and a * at the end
    for ($i = 1; $i <= $n + 1; $i++) {
        echo str_repeat("1", $n+1);  // Repeat '1' n+1 times
        echo "*";                     // Add '*' at the end
        echo "</br>";                 // New line
    }

    // Second part: single '1' and multiple '*' symbols
    echo "1";                          // A single '1'
    echo str_repeat("*", $n + 2);      // Repeat '*' n+2 times
    echo "</br>";                      // New line

    // Third part: lines with decreasing '1's and increasing '^'
    for ($i = 1; $i <= ceil($n / 2) + 1; $i++) {
        echo str_repeat("1", $n - $i);     // Decreasing '1' count
        echo str_repeat("^", 2 * $i - 1);  // Increasing '^' count
        echo "</br>";                      // New line
    }
}

mhoit(3);
