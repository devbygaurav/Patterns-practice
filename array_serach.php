<?php

//using array serach find infdex
$array = ["php","hindi","nglish","math"];

print_r(array_search("math", $array));

echo "<br/>";
echo array_search("hindi", $array);

//using array_flip function find index

$find =array_flip($array);

if(isset($find["php"])){
    echo "<br/>".$find["php"];
}else{
    echo "[php not found";
}

//using custom function find index
function findindex($array,$elemet){
    foreach ($array as $key => $value){
        if($value === $elemet){
            return $key;
        } 
    }
    return -1;
}

$key_array = ["apple","bnanan","mango","orange"];

$key = findindex($key_array,"namkken");

echo "<br/> the key  of orange ".$key;


//using function find the value
function findvalue($array,$elelment){
    foreach($array as $index => $value){
        if ($value === $elelment){
            return $index;
        } 
    }

    return -1;
}

$find_array =array('rohit','mohit','vipin','aniket','rinku');
$array = findvalue($find_array,'mohit');

echo "<br/> the value of array in".$array;


///find index using foreach loop

$new_array =array('rohit','mohit','vipin','aniket','rinku');

$value = "mohit";
$index = null;

foreach($new_array as $key =>$valye_1){
    if ($valye_1 === $value){
        $index = $key;
        break;
    }
}
if ($index !==null){
    echo "the index of '$value' is '$index'";
}else {
    echo "not found";
}

//using array_keys() function

$new_array =array('rohit','mohit','vipin','aniket','rinku');

$value = "mohit";


$key = array_keys($new_array, $value);

if (!empty($key)){
    echo "The element '$elementToFind' is found at indices: " . implode(', ', $key);
}else{

}







?>