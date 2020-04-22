    <?php
    
    // The solution took me approximatively 3 hours
    // I understood my error like last 30 minutes so
    // 2.5 hours i spend was for understanding the error
    // and the error was : not knowing how to handle upper value
    // and the reason why i was so slow is because i didn't know very well how
    // php tables were functionning.

    $list = array();
    $nth = 10;

    for($i=1; $i <=$nth; $i++){
        $list[$i][0] = 1; // 1 vertically
        for($j=1; $j < $i; $j++){
            // next = upper + upper left
            $list[$i][$j] = $list[$i-1][$j-1] + $list[$i-1][$j];
        }
        $list[$i][$i] = 1; // 1 horizontally
    }

    var_dump($list);


    ?>
