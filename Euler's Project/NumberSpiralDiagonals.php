<?php
// include "functions.php";
const br = "<br>";

$sum = 1;
$list = array();


// built a spiral
for ($i = 3; $i <= 1001*1001; $i++) {
    $list[$i] = $i;
}


$compt = 1;
$var = 2;
for($i=3; $i <= 1001*1001; $i = $i + $var){
    if ($compt == 4){
        $var = $var + 2;
        $compt = 0;
    }
    $compt++;
    $sum += $list[$i];
}

echo $sum;

// 1 3 5 7 9 13 17 21 25 ...
//  2 2 2 2 4  4  4  4  6  6  6  6 ...
