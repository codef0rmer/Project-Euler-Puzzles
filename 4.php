<?php
/**
 * Project Euler - Problem 4
 * Program Execution Time : 
 * Largest pallindrome :906609
 * real    0m4.419s
 * user    0m2.980s
 * sys     0m1.376s
 * 
 * @url http://projecteuler.net/index.php?section=problems&id=4
 * @date 21st July 2011 05:09 PM (IST)
 * @author codef0rmer <amit.2006.it@gmail.com>
 */
include 'global.php';

$arr = range(1000, 100);
$cntArr = count($arr);
$arrFoo = array();
for ($i = 0; $i < $cntArr; $i++) {
    for ($j = 0; $j < $cntArr; $j++) {
        $multiplication = $arr[$i] * $arr[$j];
        $reverseMultiplication = strrev($multiplication);
        if ($multiplication == $reverseMultiplication) {
            $arrFoo[] = $multiplication;
        }
    }
}
rsort($arrFoo);
pr('largest pallindrome is '.$arrFoo[0]);
