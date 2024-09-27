<?php
$array = array(11, 12, 13, 14, 11,15,16);

$postion = 4;

$value = 15;

array_splice($array, $postion, 0,$value);

print_r($array);

echo"<br/>";

print_r(array_count_values($array));

for


?>