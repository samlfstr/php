
function fileToarray($name, &$array){
    // current location is desktop
    $path ="C:\\Users\\Samuel Foster\\Desktop";
    $fname = $path."\\".$name;

    // if the doesn't exists
    if(!file_exists($fname)){
        echo "The file doesn't exists!";
    }
    // f the file exists
    else {
        // open the file read only
        $fileLine = fopen($fname,"r");

        // till the end, o.e.f (end of the file)
        while(!feof($fileLine)){
            $currentline = fgets($fileLine);
            if(!empty($fileLine)){
                $array[] = $currentline;
            }
        }
    }
}
