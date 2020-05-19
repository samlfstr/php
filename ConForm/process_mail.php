<?php


foreach ($_POST as $key => $value) {

    // array or not then delete white spaces
    $value = is_array($value) ? $value : trim($value);

    // check if input areases are missing
    if (empty($value) and in_array($key, $required)){
        // what is missing
        $missing[] = $key;
        // create variables with input area names
        $$key = "";
    }elseif(in_array($key, $expected)){
        $$key = $value;
    }

}

?>
