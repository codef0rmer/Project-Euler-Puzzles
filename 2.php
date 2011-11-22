<?php
/**
 * Project Euler - Problem 2
 * Program Execution Time : 
 *  Sum is 4613732
 *  real    0m0.029s
 *  user    0m0.020s
 *  sys     0m0.008s
 * 
 * @url http://projecteuler.net/index.php?section=problems&id=2
 * @date 14th July 2011 05:58 PM (IST)
 * @author codef0rmer <amit.2006.it@gmail.com>
 */
include 'global.php';

$max = 4000000;
$fabonacci_first = 1;
$fabonacci_second = 2;
while ($fabonacci_first < $max) {
    if (fmod($fabonacci_first, 2) == 0) {
        $arrFabonacci[] = $fabonacci_first;
    }

    $fabonacci_third = $fabonacci_first + $fabonacci_second;
    
    $fabonacci_first = $fabonacci_second;
    $fabonacci_second = $fabonacci_third;
}
pr('Sum is '.array_sum($arrFabonacci));
