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

function combination($R, $n)
{
    $com = 0;

    if ($R <= 0 and $n <= 0) return 0;
    if ($R == 0 and $n >= 0 or $n == $R) {
        return factorial($n);
    }
    if ($n == 0) return 1;
    if ($n > $R){
        // nC-R n!/(n-R)!*R!
        $Rfac = factorial($R);
        $nMinusR = factorial($n-$R);
        $Rfac*=$nMinusR;
        $com = factorial($n) / $Rfac;
    }
    return $com;
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

