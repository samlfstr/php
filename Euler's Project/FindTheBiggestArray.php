<?php

// array find the biggest in a list of array

$listf = array(3,3,4,2,6,3,1,9,2,8,3,8,6,3,8,6,5,0,4,9,6,9,9,7,6,2,5,4,10,0,4,7,3,6,5, 4,2,5,7,9,3,5,3,3,9,0,9,2,2,3,2,4,2,9,2,18,7,6,4,6,8,6,5,9,5,10,8,0,9,0,12,19,9,7,2,3,3,5,5,8,7,5,3,0,9,4,5,7,9,14,3,2,8,9,4,5,4,7,5,5,3,16,5,8,2,6,9,4,19,9,6,6,0,4,7,9,6,9,8,3,6,7,9,7,6,2,6,7,7,9,8,5,7,6,5,5,4,6,9,9,2,5,7,5,117,4,3,9,2,6,8,9,6,8,9,6,6,4,7,10,0,5,8,4,0,4,7,5,9,8,9,7,4,5,5,9,6,8,9,7,4,8,8,7);

function biggestf($arrayList){
    $biggest = 0;
    foreach ( $arrayList as $item) {
        if($item > $biggest){
            $biggest = $item;
        }
    }
    return $biggest;
}


echo biggestf($listf);




?>
