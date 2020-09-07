<?php

$numbers = [1,2,3,4,5,6,7,8,9]; // array
$upper_limit = 9000;  // integer
$numbers_s = "12345689"; // string



for ($i=1; $i < $upper_limit; $i++) { 
  for ($j=1; $j < $i; $j++) {
    // multiplication
    $result = $i * $j;
    // concat. multiplier, (ant) and, the result
    $numbers_s = $i.$j.$result;

    // Compaire arrays
    $diff = array_diff($numbers, str_split($numbers_s));

    // If there is no difference
    if(empty($diff) and strlen($numbers_s) == 9){
      echo $numbers_s . "<br>";
      echo $i . "*" . $j . "*" . "=". $result . "<br>";
      $unique[] = $result;
    }

  }
  // Reset the counter
  $numbers_s = "";
}

// dont allow repetition
$unique = array_unique($unique);

// take the sum of the array
echo array_sum($unique);

// @Test
/* $diff =  array_diff($numbers,str_split($numbers_s));

if(empty($diff)){
  echo "There is no difference";
}
else{
  echo "Arrays are different";
}

var_dump($diff); */