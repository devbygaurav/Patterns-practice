<?php
// echo $_SERVER['REMOTE_ADDR'];

// //echo $_SERVER['REMOTE_HOST'];

// echo basename($_SERVER['PHP_SELF']);

// if (!empty($_SERVER['HTTPS'])) {
//     echo "https is enablesd";
// } else {
//     echo "https is disabled";
// }
// //header("location: https://www.w3resource.com/");
// echo date('h:i:s') . "\n";

// // Sleep for 5 seconds
// sleep(5);

// // Output the current time again after waking up
// echo date('h:i:s') . "\n";

$d = "A00";

for ($i = 0; $i < 5; $i++) {
    echo ++$d . "\n";
}

?>