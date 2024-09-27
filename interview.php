<?php
function webkul($n)
{
    // for($i=0;$i<($n/2)+2;$i++){
    //     for($j=0;$j<$n-$i;$j++){
    //         echo "&nbsp;&nbsp;";
    //     }
    //     for($j=0;$j<2*$i+1;$j++){
    //         echo "@";
    //     }
    //     echo "</br>";
    // }

    // for($i=0;$i<$n;$i++){
    //     for($j=0;$j<($n/2)+1;$j++){
    //         if($j>$n/2-$i && $j>=$i-$n/2){
    //             echo "*";
    //         }else{
    //             echo "&nbsp;&nbsp;";
    //         }
    //     }
    //     for($j=0;$j<$n;$j++){
    //         if($i==$n/2){
    //             echo "&nbsp;&nbsp;";
    //         }else{
    //             echo "9";
    //         }
    //     }
    //     for($j=0;$j<($n/2)+1;$j++){
    //         if($j>$n/2-$i && $j>=$i-$n/2){
    //             echo "*";
    //         }
    //     }
    //     echo "</br>";
    // }
}


function webkul1($rows)
{
    for ($i = 1; $i < $rows / 2 + 1; $i++) {

        echo str_repeat("&nbsp;&nbsp;", ($n / 2 - $i + 1));
        // Print leading spaces
        for ($j = 1; $j <= $i; $j++) {
            // echo "&nbsp;&nbsp;";
        }

        // Print stars
        for ($k = $rows; $k >= (2 * $i - 1); $k--) {
            echo "^";
        }
        // Move to the next line after each row
        echo "<br/> ";
    }
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $rows; $j++) {
            if ($i == 0 || $j == 0 || $j == $rows - 1)
                echo "*";
            else
                echo "&nbsp;&nbsp;";
        }
        echo "</br>";
    }
}

function webkul2($n)
{
    for ($i = 1; $i < ($n / 2) + 1; $i++) {
        echo str_repeat("&nbsp;&nbsp;", $n - $i + 1);

        echo str_repeat("@", 2 * $i - 1);
        echo "</br>";
    }
    for ($i = 0; $i < $n / 2 + 1; $i++) {

        echo str_repeat("&nbsp;");
    }
    echo str_repeat("*", $n / 2 + 1);
    echo str_repeat("@", $n);
    echo str_repeat("*", $n / 2 + 1);
}




webkul1(5);
