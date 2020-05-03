<?php

include "functions.php";
const br = "<br>";


// combinatorics

function permute($R, $n)
{
    $per = 0;

    if ($R <= 0 and $n <= 0) return 0;
    if ($R == 0 and $n >= 0 or $n == $R) {
        return factorial($n);
    }
    if ($n == 0) return 1;
    if ($n > $R){
        // nP-R => n! / (n - R)!
        $per = factorial($n) / factorial($n - $R);
    }
    return $per;
}

function factorial($x)
{
    if ($x == 0) return 1;
    else if($x < 0) return 0;
    else {
        $var = $x - 1;
        // x! = x(x-1)(x-2)...(x-n)
        while ($var > 0) {
            $x *= $var;
            $var--;
        }
        return $x;
    }
}


echo permute(0,4).br; // 24
echo permute(5,0).br; // 1
echo permute(3,4).br; // 4
echo permute(3,3).br; // 6
echo permute(2,5); // 10






