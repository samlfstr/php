<?php

const br = "<br>";
const nl = "\n";

/**
 * [Pairs of numbers]
 * @param $n
 * @param $d
 * @return array
 */
function pair($n, $d){
    return array ($n, $d);
}

/**
 * [Numerator]
 * @param $arr
 * @return mixed
 */
function numer($arr){
    return $arr[0];
}

/**
 * [Denominator]
 * @param $arr
 * @return mixed
 */
function denom($arr){
    return $arr[1];
}

/**
 * [Add Two Rational Numbers]
 * @param $one
 * @param $two
 * @return float[]|int[]
 */
function add_ratio($one, $two){
    return array (numer($one) * denom($two) + numer($two) * denom($one),
        denom($one)*denom($two));
}

/**
 * [Multiply Two Rational Numbers]
 * @param $one
 * @param $two
 * @return float[]|int[]
 */
function mul_ratio($one, $two){
    return array(numer($one) * numer($two), denom($one) * denom($two));
}

/**
 * [Divide Two Rational Numbers]
 * @param $one
 * @param $two
 * @return float[]|int[]
 */
function div_ratio($one, $two){
    return array(numer($one) * denom($two), denom($one) * numer($two));
}

/**
 * [Substruct Two Rational Numbers]
 * @param $one
 * @param $two
 * @return float[]|int[]
 */
function sub_ratio($one, $two){
    return array (numer($one) * denom($two) - numer($two) * denom($one),
        denom($one)*denom($two));
}

// Test
$one_half = pair(1,2);
$one_third = pair(1,3);

$sum = add_ratio($one_half,$one_third);
var_dump($sum);



