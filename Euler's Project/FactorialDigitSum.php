// Not brut force but brut library !

<?php

const BR = "<BR>";

$sum = 0;
// calculate the factorial with "gmp"
$string = gmp_fact(100);

// with split take all string and save into split array
$split = array();
$split = str_split($string);

foreach ($split as $item) {
    $sum+= $item;
}

echo $sum;

?>
