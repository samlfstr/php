<!DOCTYPE>
<html lang="tr">
<head>
    <title>Document</title>
    <meta name="autor" content="Samuel Foster">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

<?php
const BR = "<br>";

$summet = 390;
$test_c = 1;
$root = 1;
$iroot = 0;
$sum = 0;

for($a = 1; $a < $summet; $a++){
    for($b = 1; $b <= $a; $b++){

        $test_c = pow($a,2) + pow($b,2);
        $root = sqrt($test_c);
        if ($root == (int)$root){
            //echo $test_c. BR;
            $sum = $root + $a + $b;
            if ($sum == 1000){
                echo $root ." ". $a ." ". $b . BR;
                echo "Multiplicaion is : " . $root * $a * $b;
                break;
            }
        }

    }
}

// Öncelikle sqrt fonction nunu denedim ama değerler float döndüğü için
// tam sayı dahi olsa 10.0 şeklinde döndüğü için is_int f iyle kullanılamıyor
// sonra sqrt u alınmış değeri root değişkeninde saklayıp kendinin cast lanmış
// haliyle karşılaştırmak geldi aklıma ve sonuç, pitagorun özel üçgen formülündeki
// tüm c kare değerlerini veren bir loop.






?>



</body>
</html>
