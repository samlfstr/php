<?php

const br = "<br>";
include "functions.php";

function pascal($row, $column){
    if ($column == 0){
        return 1;
    }
    elseif($row == 0){
        return $column;
    }
    else
    return ($row * pascal($row-1,$column-1)) / $column;
}
echo pascal(6,2);


/*for($i=0; $i <= 10; $i++){
    for($j=0; $j <= $i; $j++){
        echo pascal($i,$j);
    }
    echo "\n";
}*/


