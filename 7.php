<?php
/**
 * Project Euler - Problem 7
 * Program Execution Time : 
 * The 10001st Prime is : 104743
 * real    0m2.809s
 * user    0m2.396s
 * sys     0m0.392s
 * 
 * @url http://projecteuler.net/index.php?section=problems&id=7
 * @date 23rd Oct 2011 07:24 PM (IST)
 * @author codef0rmer <amit.2006.it@gmail.com>
 */
include 'global.php';

$cntPrimeNumber = 0;
$i = 2;
while ($i) {
    if (isPrime($i)) {
        $cntPrimeNumber++;
    }
    
    if ($cntPrimeNumber == 10001) {
        $lastPrimeNumber = $i;
        break;
    }
    $i++;
}
pr('The 10001st Prime is : '.$lastPrimeNumber);