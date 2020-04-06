2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.

What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?

Just a try.
<?php

const BR = "<br>";

Açıklama : 

i sayısının j ile bölümünden kalan sıfır değil ise döngüden çık.
eğer i nin j ye bölümünden kalan sıfır ve aynı zamanda bu döngü j 20 ye ulaşanakadar bozulmamışsa 
çıkan sonuç 1 den 20 ye kadar olan sayıların hepsine tam bölünebilen en küçük tam sayı
Oda : 232 792 560 buna eşit, cpu çok kasmamasının sebebi break; kodu

for($i = 100; $i<=300000000; $i++) {
    for ($j = 2; $j <= 20; $j++) {
        if ($i % $j == 0 and $j == 20) {
            echo $i . BR;
        }
        if ($i % $j != 0) {
            break;
        }

    }
}

Çözümü prime number hesaplamasında kullanılan algoritmayı uyarlayarak buldum.

const BR = "<br>";
$total = 1;
for($i = 2; $i<=20; $i++) {
    for ($j = 2; $j <= $i; $j++) {
        if ($j == $i) {
            $total = $total * $j;
        }
        if ($i % $j == 0) {
            break;
        }

    }
}

?>

