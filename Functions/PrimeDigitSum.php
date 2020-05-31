

$primelist = array();
fileToarray('primes', $primelist);

function digits_r($prime)
{
    $sum = 0;
    // take list of digits of the prime
    $list = digits($prime);
    for ($i = 0; $i < count($list); $i++) {
        $sum += $list[$i];
    }
    if ($sum > 9){
        do{
            $list = digits($sum);
            $sum = 0;
            for($i=0; $i < count($list); $i++){
                $sum += $list[$i];
            }
        }while($sum > 9);
    }
    return $sum;
}

$primelist = array_map('intval',$primelist);

for($i=0; $i < count($primelist); $i++){
    echo digits_r($primelist[$i]) . br;
}

