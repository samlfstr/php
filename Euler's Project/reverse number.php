<?php
// how to revers a number
function reverse($number){
    $number = isset ($_POST['reverse']) ? $_POST['reverse'] : "";

    $reverse_number = 0;
    $temporary = 0;

    while($number != 0){
        // je prends la chiffre des unités à chaque fois
        $temporary = $number % 10;
        // c'est ici que nous rassemblions les chiffres
        // 10 her seferinde bir basamak artırıyor
        $reverse_number = $reverse_number * 10 + $temporary;
        // ici nous devons éffacer chaque chiffre des unité une par une
        $number = intval($number / 10);
    }
    echo $reverse_number;
}
reverse($_POST['reverse']);


?>
