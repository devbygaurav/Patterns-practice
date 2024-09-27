<?php
function mhoit($n)
{
    for ($i = 0; $i < $n + 2; $i++) {
        
        echo str_repeat("&nbsp;&nbsp;", $n/2);
        // echo "*";
        //  echo "</br>";
        if($i==$n+1){
           echo str_repeat("*",$n+2);
           echo "</br>";
        }else{
            echo str_repeat("&nbsp;&nbsp;",$n+1);
           
            echo "*";
            echo "</br>";
        }
    }

    // echo str_repeat("&nbsp;&nbsp;", $n - 3);
    // echo str_repeat("*", $n + 2);
    // echo "</br>";

    for ($i = 1; $i < $n / 2 + 1; $i++) {
        // echo str_repeat("&nbsp;&nbsp;", $n - $i-2);
        // echo str_repeat("^", 2 * $i - 1);
        // echo "</br>";
        echo str_repeat("&nbsp;&nbsp;",$n/2 +1-$i);
        echo str_repeat("@",2*$i-1);
        echo "</br>";
    }

}


mhoit(3);
