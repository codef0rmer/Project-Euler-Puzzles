<?php
/**
 * Project Euler - Problem 10
 * Program Execution Time : 
 * Sum of Primes :142913828922
 * real    2m19.128s
 * user    2m12.660s
 * sys     0m6.400s
 *
 * @url http://projecteuler.net/index.php?section=problems&id=10
 * @date 24rd Oct 2011 07:48 PM (IST)
 * @author codef0rmer <amit.2006.it@gmail.com>
 */
include 'global.php';

$maxLimit = 2000000;
$sumOfPrimes = 0;
$i = 2;
while ($i < $maxLimit) {
  if (isPrime($i) == true) {
    $sumOfPrimes+= $i;
  }
  $i++;
}
pr('Sum of Primes :'.$sumOfPrimes);
