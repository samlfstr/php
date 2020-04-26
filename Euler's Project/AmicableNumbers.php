Let d(n) be defined as the sum of proper divisors of n (numbers less than n which divide evenly into n).
If d(a) = b and d(b) = a, where a ≠ b, then a and b are an amicable pair and each of a and b are called amicable numbers.

For example, the proper divisors of 220 are 1, 2, 4, 5, 10, 11, 20, 22, 44, 55 and 110; therefore d(220) = 284. The proper divisors of 284 are 1, 2, 4, 71 and 142; so d(284) = 220.

Evaluate the sum of all the amicable numbers under 10000.

<?php


const BR = "<BR>";

// amicable numbers
// find all divisors the divisors
// keep all sums in two different arrays
// compare all the sums excluding equal indexis
// take all the amicable numbers and add them together

$sum = 0;
$compare = 0;
$total = 0;

// D(I) = X and D(X) = I
for($i=1; $i < 10000; $i++)

    // Sum = D(I);
    $sum = sumFallDivisors($i) . BR;
    
    // take the intval of sum unless it gives an error
    $compare = intval($sum);
    
    // Check if D(Sum) = I and make sure that I is not same with sum of its divisors so D(I) or sum or compare
    if ((sumFallDivisors($compare) == $i) and !($compare == $i)){
       $total = $total + $i;
    }
}


// simple give sum of all divisors function
function sumFallDivisors($number){
    $j = 1;
    $sum = 0;
    while ($j < $number){
        if ($number % $j == 0){
            $sum += $j;
        }
        $j++;
    }
    return $sum;
}


// result
echo $total;




