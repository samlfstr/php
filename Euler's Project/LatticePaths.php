<!DOCTYPE>
<html lang="tr">
<head>
    <title>Document</title>
    <meta name="autor" content="Samuel Foster">
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

<?php

const BR = "<br>";

// How many such routes are there through a 20×20 grid?
// aynı sorunun matematiksel cevabı
// div(20!, half(20)!*half(20)!)

$gridSize = 20;
$multArray = array();

// Tüm kutucuklara 1 ekliyorum
for($i=0; $i < $gridSize; $i++){
    $multArray[$i][$gridSize] = 1;
    $multArray[$gridSize][$i] = 1;
}


for($i=$gridSize - 1; $i >= 0; $i--){
    // Bir altındakinden ve bir sağındakinden değerleri alıp kutucuğu öyle dolduruyor.
    for($j=$gridSize - 1; $j >= 0; $j--){
        $val = $multArray[$i+1][$j] + $multArray[$i][$j+1];
        $multArray[$i][$j] = $val;
    }
}

echo $multArray[0][0];


?>

</body>
</html>
