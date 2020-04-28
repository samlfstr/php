---- Main file -----
<?php
include "functions.php";

const BR = "<BR>";

$names = array();
fileToarray("Names.txt", $names);
sort($names);
getLetterVals($names);


---- functions.php-----

<?php
// calls var dump end dies
function dd($val)
{
    die(var_dump($val));
}

function ageChecked($age)
{
    return $age > 21 ? true : false;
}


function fileToarray($name, &$array)
{
    // current location is desktop
    $path = "C:\\Users\\Samuel Foster\\Desktop";
    $fname = $path . "\\" . $name;

    // if the doesn't exists
    if (!file_exists($fname)) {
        echo "The file doesn't exists!";
    } // f the file exists
    else {
        // open the file read only
        $fileLine = fopen($fname, "r");

        // till the end, o.e.f (end of the file)
        while (!feof($fileLine)) {
            $currentline = fgets($fileLine);
            if (!empty($fileLine)) {
                $array[] = $currentline;
            }
        }
    }
}

function getLetterVals(&$wordList)
{
    $alphabet = "0ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $key = 0;
    $index = 0;
    $total = 0;
    foreach ($wordList as $word) {
        // take the letters
        $letters = str_split($word);
        foreach ($letters as $letter) {
            for ($i = 0; $i <=25; $i++) {
                if ($alphabet[$i + 1] == $letter) {
                    $key += $i + 1;
                }
            }
        }
        $index++;
        $total += $key * $index;
        $key = 0;
    }
    echo $total;
}

