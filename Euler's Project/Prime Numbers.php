// Pour une quelconque nombre

$testing_number = 0;

for($i = 2; $i <= $testing_number; $i){
    // Testing number kendisine kadar tüm sayılara bölünüyor
    // Eğer tam bölünüyorsa prime değil
    // Eğer sadece kensine bölünüyorsa prime
    if($testing_number % $i == 0){
        break;
    }
    if(i == testing_number){
        echo i;
    }
}

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
