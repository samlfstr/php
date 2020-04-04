<?php

const BR = "<br>";

function prime($nth){
    $compteur = 0;
    for($i = 2; $i<300000; $i++){
        for($j = 2; $j<=$i; $j++){
            // Eğer en son hiç bir sayıya bölünmeyip kensine tam bölündüyse
            // bu sayı asal sayıdır.
            // n inci asal sayıyı bulmak için compteur adlı bir değişken tanımladım
            // bu değişkenin yarattığı sorun sayaç zamanı geldiğinde durmamasıydı
            // bunu durdurmak için compteur değişkenin nth değişkeninden küçük
            // olması koşulunu getirdim bu sayede compteur istenilen sayıya ulaşıncaya
            // kadar işlem yapacak.
            // sonra karşıma sayıya ulaştıktan sonra bu değeri yani son asal sayıyı
            // nasıl çekerim sorunu çıktı bunuda yine compteur değişkenin nth - 1
            // e ulaşınca ancak değeri ekrana vermesini sağlayarak yaptım
            // son olarak sonuca ulaşıldığı halde işleme devam edilmesi sorunu vardı
            // bu sorunuda ilk for loop nun içine compteur istenilen değere ulaşınca
            // döngüyü kırması talimatını vererek yaptım.
            
            if($j == $i and $compteur < $nth){
                if($compteur == $nth - 1){
                    echo $i;
                }
                $compteur++;
            }
            if($i % $j == 0){
                break;
            }
        }
        if($compteur == $nth){
            break;
        }
    }
}

prime(10001);



?>
