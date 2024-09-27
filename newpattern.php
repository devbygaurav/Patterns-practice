<?php

function pattern($n)
{

    // for ($i = $n; $i > 0; $i--) {

    // method 1.
    // for ($j = $i; $j > 0; $j--) {
    //     echo "*";
    // }
    // echo "</br>";
    //method 2.

    // echo str_repeat("*",$i);
    // echo "</br>";

    // }
    //metho 3
    for ($i = 1; $i <= $n; $i++) {

        for ($j = 1; $j <= $n - $i + 1; $j++) {
            echo "*";
        }

        echo "</br>";
    }
}

function numberpateern($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo "</br>";
    }
}

function pattern2($n)
{
    for ($i = 1; $i <= $n; $i++) {
        echo str_repeat("*", $i);
        echo "</br>";
    }
    for ($i = $n - 1; $i > 0; $i--) {
        echo str_repeat("*", $i);
        echo "</br>";
    }
}
//same as pattern 2
function pattern3($n)
{
    for ($i = 0; $i < 2 * $n; $i++) {
        $totalcols = $i > $n ? 2 * $n - $i : $i;

        for ($j = 0; $j < $totalcols; $j++) {
            echo "*";
        }

        echo "</br>";
    }
}

function pattern4($n)
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

function pattern5($n)
{
    for ($i = 0; $i < 2 * $n; $i++) {
        $totalcols = $i > $n ? 2 * $n - $i : $i;

        $spcaecc = $n - $totalcols;
        for ($j = $n; $j < $spcaecc; $j++) {
            echo "&nbsp";
        }

        for ($k = 0; $k < $totalcols; $k++) {
            echo "*";
        }

        echo "</br>";
    }
}
pattern5(5);
// function pattern6($n)
// {
//     for ($i = 0; $i < $n; $i++) {
//         for ($j = 0; $j < $i; $j++) {
//             echo "&nbsp;&nbsp";
//         }
//         echo "*</br>";
//     }

//     for($i=$n-1;$i>0;$i--){
//         for ($j = 0; $j < $i; $j++) {
//             echo "&nbsp;&nbsp";
//         }
//         echo "*</br>";
//     }
//     for ($i = 0; $i < $n; $i++) {
//         for ($j = 0; $j < $i; $j++) {
//             echo "&nbsp;&nbsp";
//         }
//         echo "*</br>";
//     }
//     for($i=$n-2;$i>0;$i--){
//         for ($j = 0; $j < $i; $j++) {
//             echo "&nbsp;&nbsp";
//         }
//         echo "*</br>";
//     }
// }

function pattern6($n)
{
    // Function to print the upper or lower part of the pattern
    function printHalfPattern($n, $reverse = false)
    {
        if ($reverse) {
            // Reverse loop for the lower part
            for ($i = $n; $i > 0; $i--) {
                for ($j = 0; $j < $i - 1; $j++) {
                    echo "&nbsp;&nbsp";
                }
                echo "*</br>";
            }
        } else {
            // Normal loop for the upper part
            for ($i = 0; $i < $n; $i++) {
                for ($j = 0; $j < $i; $j++) {
                    echo "&nbsp;&nbsp";
                }
                echo "*</br>";
            }
        }
    }

    // Print the first upper part
    printHalfPattern($n);

    // Print the first lower part
    printHalfPattern($n - 1, true);

    // Print the second upper part
    printHalfPattern($n);

    // Print the second lower part
    printHalfPattern($n - 1, true);
}

// pattern6("8");

echo "</br>";

function pattern999($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = $n; $j >= $i; $j--) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 1; $k <= $i; $k++) {
            echo "*";
        }
        echo "</br>";
    }
}

function pattern99($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 4; $k >= $i; $k--) {
            echo "*";
        }
        echo "<br/>";
    }
}

function patternnew($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = $n; $j >= $i; $j--) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 1; $k <= $i; $k++) {
            echo "*";
        }
        echo "</br>";
    }

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 4; $k >= $i; $k--) {
            echo "*";
        }
        echo "<br/>";
    }
}

function pattern90($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = $n; $j >= $i; $j--) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 1; $k <= $i; $k++) {
            echo "&nbsp;*";
        }
        echo "</br>";
    }
}
pattern999(4);
