<?php

const BR = "<BR>";

// compute the average

$listf = array(3,3,4,2,6);

function average($arrayList){
    $sum = 0;
    $denominator = count($arrayList);
    foreach ($arrayList as $item) {
        $sum += $item;
    }
    return $sum / $denominator;
}


echo average($listf);






?>
