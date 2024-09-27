<?php
// for ($i = 3; $i <= 4; $i++) {
//     for ($j = 1; $j <= 7; $j++) {
//         echo "*";
//     }
//     echo "</br>";
// }

// $n = 10;
// for ($i = 1; $i <= $n; $i++) {
//     for ($j = 1; $j <= (2 * $n) - 1; $j++) {
//         if ($j >= $n - ($i - 1) && $j <= $n + ($i - 1)) {
//             echo "*";
//         } else {
//             echo "&nbsp;  ";
//         }
//     }
//     echo "</br>";
// }

//heart shape program pattern

// for ($i = 0; $i < 6; $i++) {
//     for ($j = 0; $j < 7; $j++) {
//         if (($i == 0 && $j%3!= 0) || ($i==1 && $j%3== 0) ||($i-$j==2) ||($i+$j==8)) {

//             echo "*";
//         }else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
//     echo "</br>";
// }


// $rows = 5; // Number of rows in the pattern

// for ($i = 1; $i <= $rows; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         // Determine if the sum of row and column index is odd or even
//         if (($i + $j) % 2 == 0) {
//             echo "1 ";
//         } else {
//             echo "0 ";
//         }
//     }
//     echo "<br>"; // Move to the next line after each row
// }

// Number of rows

// for ($i = 1; $i <= $n; $i++) {
//     //echo $i;
//     for ($j = 1; $j <= $i; $j++) {



//         if ($j % 2 == 0) {
//             echo "0 ";
//         } else {
//             echo "1 ";
//         }
//     }
//     echo "<br>"; // Move to the next line after each row
// }

function PaternBox($n)
{

    for ($i = 0; $i < $n; $i++) {
        echo str_repeat("*", $n);
        echo "</br>";
    }



}

function holobox($n)
{
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($i == 0 || $j == 0 || $j == ($n - 1) || $i == ($n - 1)) {
                echo "*";

            } else {
                echo "^";
            }

        }
        echo "</br>";
    }
}

function paternBox1($n)
{

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= (2 * $n) - 1; $j++) {
            if ($j >= $n - ($i - 1) && $j <= $n + ($i - 1)) {
                echo "*";
            } else {
                echo "&nbsp;";
            }
        }
        echo "</br>";
    }
}

function paterntriangle($n)
{

    for ($i = 1; $i <= $n; $i++) {


        echo str_repeat("*", $i);

        echo "</br>";
    }

}

function revresetrinagle($n)
{
    for ($i = $n; $i >= 0; $i--) {

        echo str_repeat("*", $i);

        echo "</br>";

    }
}
function paterntriangle2($n)
{
    for ($i = 1; $i <= $n; $i++) {

        // echo str_repeat("^",($n-$i));

        echo str_repeat("*", $i);
        echo "</br>";
    }
}
 
function paterntriangle3($n)
{
    for ($i = $n; $i >= 1; $i--) {

        echo str_repeat("^", ($n - $i));

        echo str_repeat("*", $i);
        echo "</br>";
    }
}

function diamondpattern($n)
{
    for ($i = 1; $i <= $n; $i++) {

        echo str_repeat("&nbsp;&nbsp;", ($n - $i));
        echo str_repeat("*", (2 * $i - 1));

        echo "</br>";
    }
}


function diamondpattern2($n)
{
    for ($i = $n; $i > 0; $i--) {
        echo str_repeat("&nbsp;&nbsp;", ($n - $i));
        echo str_repeat("*", (2 * $i - 1));
        echo "</br>";
    }
}
function diamondpattern3($n)
{
    for ($i = 1; $i <= $n; $i++) {

        echo str_repeat("&nbsp;&nbsp;", ($n - $i));
        echo str_repeat("*", (2 * $i - 1));

        echo "</br>";
    }
    for ($i = $n - 1; $i > 0; $i--) {
        echo str_repeat("&nbsp;&nbsp;", ($n - $i));
        echo str_repeat("*", (2 * $i - 1));
        echo "</br>";
    }
}
function butterfly($n)
{


    for ($i = 1; $i <= $n; $i++) {
        echo str_repeat("&nbsp;&nbsp;", ($n - $i));
        echo str_repeat("*", $i);
        echo "</br>";
    }
    for ($i = $n - 1; $i > 0; $i--) {

        echo str_repeat("&nbsp;&nbsp;", ($n - $i));

        echo str_repeat("*", $i);
        echo "</br>";
    }
}
function butterfly1($n)
{
    for ($i = 1; $i <= $n; $i++) {
        // echo str_repeat("&nbsp;&nbsp;", ($n - $i));
        echo str_repeat("*", $i);
        echo "</br>";
    }
    for ($i = $n - 1; $i > 0; $i--) {

        //echo str_repeat("&nbsp;&nbsp;", ($n - $i));

        echo str_repeat("*", $i);
        echo "</br>";
    }
}

function butterfly2($n){
    for ($i = 0; $i < $n; $i++) {

        for ($j=0; $j < 2*$n -1; $j++) { 
            if ($j <=  $i || $j >= 2*$n - 2 - $i) {
                echo "*";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "</br >";
    }
    for ($i = $n-1 ; $i > 0; $i--) {

        for ($j=0; $j < 2*$n -1; $j++) { 
            if ($j <=  $i -1 || $j >= 2*$n -1 - $i) {
                echo "*";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "</br >";
    }
}

diamondpattern3(4);
?>