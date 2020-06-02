<?php

const nl="\n";

// these funtions below can be simplified
function inc1($x){
     return $x + 1;
}
function inc2($x){
     return $x + 2;
}
function inc3($x){
     return $x + 3;
}

// higher order function
function incFactory($by){
     // anonymous function
     return function($num) use($by){
          return $num + $by;
     };
}

// multpFactory
function multpFactory($by){
     // anonymous function
     return function($num) use($by){
          return $num * $by;
     };
}



// increase by one $incOne() is anonymous function
$incOne = incFactory(1);
// output will be 6
echo $incOne(5);
// or
$incSeven = incFactory(7);
// 14
echo $incSeven(7);


// what if we needed to create a factory that producces other factories
// such as incFac or divFav or multpFac, etc.


// first we create add and times functions

function add(int $a, int $b){
     return $a + $b;
}
function times(int $a, int $b){
     return $a * $b;
}

// before we go further we need to understand how callable works

function fr($text){
     // check for the correspondant word
     // $text = correnspondent word
     echo $text;
}

// first callable name of the function, second par. name of its parameter both arbitrary names because they'll be subtituted
function translate(callable $fn,$par){
     $fn($par);
}

// translate from, the word ...
translate('fr','nice');



// now we can create our generic factory
function genericFactory(callable $fn, $by){
     // what number we want to increase -> $a
     // where inside the -> $fn function
     // def of the new funciton we assign
     return function($a) use($fn, $by){
          return $fn($a,$by);
     };
}

// the reason I'am using an anonymous function is that I want to use $inc_one as a function
$inc_one = genericFactory('add',1);
$mul_five = genericFactory('times', 5);

// six
echo $inc_one(5);
// square of the five
echo $mul_five(5);







