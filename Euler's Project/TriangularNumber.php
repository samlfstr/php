That solution took me 48 hour. I revised sigma notation and its properties. Tau/d function algorithm.
Found a new way to calculate number of divisors of a number more precisely using sqrt inside the loop.


<?php

const BR = "<br>";

// triangular numbers
// returns sum of the numbers to the n
function TriangularNumber($nth)
{
    $sum = 0;
    $output = 0;
    for ($i = 1; $i <= $nth; $i++) {
        $sum = $sum + $i;
        $output = $sum;
    }
    return $output;
}

// all divisor of a number


$val = 0;
$compteur = 0;
for ($t = 10000; $t < 1000000; $t++) {
    
    // to execute the function once at the beginning
    $val = TriangularNumber($t);
    
    // number of divisors
    for ($i = 1; $i < sqrt($val); $i++) {
        if ($val % $i == 0) {
        
            // if there is a square took one of the numbers
            if ($val / $i == $i) {
                //echo $i ," ";
                $compteur++;
            } 
            
            // otherwise take the number and its division
            else {
                //echo $i ," ",$val/$i," ";
                $compteur += 2;
            }
        }
        
        // if we reach 500 divisor stop script
        if ($compteur == 500){
            echo $val . " ";
            exit();
        }
    }
    // make the counter zero with every new number
    $compteur = 0;
}

?>
