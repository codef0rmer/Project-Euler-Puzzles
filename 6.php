<?php
/**
 * Project Euler - Problem 6
 * Program Execution Time : 
 * Difference between the sum of the squares of the first one hundred natural numbers and the square of the sum is 25164150
 * real    0m0.032s
 * user    0m0.020s
 * sys     0m0.008s
 * 
 * @url http://projecteuler.net/index.php?section=problems&id=6
 * @date 23rd Nov 2011 07:09 PM (IST)
 * @author codef0rmer <amit.2006.it@gmail.com>
 */
include 'global.php';

$arr = range(1, 100);
$sumOfSquare = $sum = $squareOfSum = 0;
foreach ($arr as $value) {
    $sumOfSquare += $value * $value;
    $sum += $value;
}
$squareOfSum = $sum * $sum;
$difference = $squareOfSum - $sumOfSquare;
pr('Difference between the sum of the squares of the first one hundred natural numbers and the square of the sum is '.$difference);
