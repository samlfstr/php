

// sıfırlar başlıyorum çünkü algoritma listenn birinci elemanıyla başlıyor her zaman
$arraylist = array(0,1,3,6,2,3,6,7);

// iterator başlangıç değeri 2 çünkü listenin sağındaki elemanı temsil ediyor
for($i = 2; $i < count(arraylist); i++){
    // algoritmayı elime aldığım kartları düzenlemeye benzetiyorum
    
    // yeni kart
    $key = $arraylist[$i];
    
    // şuanki kart
    $j = $i - 1;
    
    // karşılaştımayı soldaki kartla yapıyorum bu durumda soldaki kart veya kutucuk
    while($j > 0 and $arraylist[$j] > $key){
        // sağdaki eleman eşittir soldakine
        $arraylist[$j + 1] = arraylist[$j];
        
        // önceki karta ulaşmak için / soldaki elemana
        $j--;
        
        // ve yeni gelen kartı yeni yerine alıyorum
        $arraylist[$j + 1] = $key;
    }

}

// ekrana verme
foreach ($arraylist as $item){
    echo item . "<br>";
}

