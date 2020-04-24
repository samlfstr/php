<?php

const BR = "<BR>";

// reverse the elements in array

$listf = array(1,2,3,4,5,6,7,8,9);

var_dump($listf);

function reverse(&$arrayList){
    // take its size minus one
    $size = count($arrayList) - 1;
    // copy the array list
    $copy = $arrayList;
    // from zero to end of the array
    for($i=0; $i <= $size; $i++) {
        //
        $arrayList[$i] = $copy[$size - $i];
    }
    return $arrayList;
}

reverse($listf);

var_dump($listf);

?>
