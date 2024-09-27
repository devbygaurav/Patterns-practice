<?php

$n = 5;

for ($i = 1; $i <= ($n / 2 + 2); $i++) {
    echo str_repeat("&nbsp;&nbsp;", $n - $i + 1);
    echo str_repeat("^", 2 * $i - 1);
    echo "</br>";
}

for ($i = 1; $i <= ($n / 2); $i++) {
    echo str_repeat("&nbsp;&nbsp;", ($n / 2 - $i + 1));
    echo str_repeat("*", $i);
    echo str_repeat("&nbsp;&nbsp;", $n);
    echo str_repeat("*", $i);
    echo "</br>";
}


echo str_repeat("*", ($n / 2 + 1));
echo str_repeat("^", $n);
echo str_repeat("*", ($n / 2 + 1));
echo "</br>";
//exit;

for ($i = 1; $i <= ($n / 2); $i++) {
    echo str_repeat("&nbsp;&nbsp;", $i);
    echo str_repeat("*", ($n / 2 + 1 - $i));
    echo str_repeat("&nbsp;&nbsp;", $n);
    echo str_repeat("*", ($n / 2 + 1 - $i));
    echo "<br/>";
}
