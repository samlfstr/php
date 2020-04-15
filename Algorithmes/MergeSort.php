Explination is in paper format..

<?php

const BR = "<br>";
// merge sort

$A= array(9,4,5,6,7,2,3,4);

$A = merge_sort($A);

for($i=0; $i < count($A); $i++){
    echo $A[$i] . " ";
}


function merge_sort($A){
    if(count($A) < 2) return $A;
    $mid = count($A)/2;
    $left = array_slice($A, 0, $mid);
    $right = array_slice($A, $mid);
    $left = merge_sort($left);
    $right = merge_sort($right);
    return merge($left,$right);


}
function merge($L, $R){
    $result = array();
    $i = 0;
    $j = 0;
    $nfL = count($L);
    $nfR = count($R);
    while($i < $nfL && $j < $nfR) {
        if($L[$i] <= $R[$j]){
            $result[] = $L[$i];
            $i++;
        }
        else{
            $result[] = $R[$j];
            $j++;
        }
    }
    while($i < $nfL){
        $result[] = $L[$i];
        $i++;
    }
    while($j < $nfR){
        $result[] = $R[$j];
        $j++;
    }
    return $result;
}


?>
