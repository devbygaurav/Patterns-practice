<?php
$n=5;
//  for ($i=1;$i<=$n;$i++){
//     for($j=$n;$j>=$i;$j--){
//         if($i%2==0){
//             echo "#";
//         }else{
//             echo "*";
//         }
//     }echo "<br/>";
//  }

for($i=1;$i<=($n/2+2);$i++){
    echo str_repeat("&nbsp;&nbsp;",2*$n+($n/2)-$i);
    echo str_repeat("*",2*$i-1);
    echo "</br>";
}


?>