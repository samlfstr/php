<?php

// Not more efficient for big numbers just another approach

const BR = "<BR>";

$sum = 0;

function isPrime($N){
    if ($N == 2 or $N == 3) return true;
    // till the sqrt of the number to reduce the number of operations
    for ($i = 2; $i <= sqrt($N); $i++) {
        $j = 2;
        // check every number till $i
        while ($j <= $i) {
            if ($N % $j == 0) return false;
            $j++;
        }
    }
    return true;
}

// three hundred thousand-th
for($i=2; $i < 300000; $i++){
    if (isPrime($i)){
        $sum  = $sum + $i;
    }
}

echo $i;
?>
