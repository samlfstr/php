<?php

// Couldn't Solve This One

$nom = array();
$denom = array();
$arr = array();
$arr2 = array();

for ($i = 1; $i < 100; $i++) {
    $nom[$i] = $i;
}
$denom = $nom;

for ($i = 10; $i < 100; $i++) {
    for ($j = 10; $j < 100; $j++) {
        if ($nom[$i] < $denom[$j]) {
           $arr[] = round($nom[$i] / $denom[$j],5);
        }
    }
}

/**
 * @param $num
 *
 * arr[0] = first digit
 *
 * arr[1] = second digit
 * @return array
 */
function takeDigit($num)
{
    //num = 345
    do {
        $tem = $num % 10; // output : 5
        $num =(int) $num / 10; // output : 34
        $arr[] = $tem;
    } while ($num != 0);
    $arr = array_filter($arr);
    $arr = array_reverse($arr);
    return $arr;
}

for ($i = 1; $i < 10; $i++) {
    $nom[$i] = $i;
}
$denom = $nom;

for ($i = 1; $i < 10; $i++) {
    for ($j = 1; $j < 10; $j++) {
        if ($nom[$i] < $denom[$j]) {
            $arr2[] = round($nom[$i] / $denom[$j],5);
        }
    }
}

$arr3 = array_intersect($arr,$arr2);
var_dump($arr3);