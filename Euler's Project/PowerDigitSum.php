// The program was so easy that i didn't even need to write an approach i just made some researh and used a php library which is gmp.


<?php

const BR = "<br>";

$split = array();
$sumf = 0;

// find 2**1000 its equal to a number which has a length of length = 302
// string '10715086071862673209484250490600018105614048117055336074437503883703510511249361224931983788156958581275946729175531468251871452856923140435984577574698574803934567774824230985421074605062371141877954182153046474983581941267398767559165543946077062914571196477686542167660429831652624386837205668069376'
$powerf = gmp_pow(2,1000);

// save all numner into a list (split copies each element of the string into a list)
$split = str_split($powerf);

// add them togerher
foreach ( $split as $item) {
    $sumf = $item + $sumf;
}

// show the result
echo $sumf;


?>
