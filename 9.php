<?php
/**
 * Project Euler - Problem 9
 * Program Execution Time : 
 * Pythagorean Triplet :31875000
 * real    0m12.075s
 * user    0m12.025s
 * sys     0m0.020s
 * 
 * @url http://projecteuler.net/index.php?section=problems&id=9
 * @date 24rd Oct 2011 06:23 PM (IST)
 * @author codef0rmer <amit.2006.it@gmail.com>
 */
include 'global.php';

$minLimit = 1000;
$c = 1;
$break = false;
while ($c <= $minLimit) {
  $b = 2;
  while ($b <= $minLimit && $b < $c) {
    $a = 3;
    while ($a <= $minLimit && $a < $b) {
      if (($a+$b+$c) == 1000 && sqrt(($a*$a) + ($b*$b)) == $c) {
        $break = true;
      } 

      if ($break == true) break;
      $a++;
    }
    if ($break == true) break;
    $b++;
  }
  if ($break == true) break;
  $c++;
}

if ($break == true) {
  pr('Pythagorean Triplet :'.$a*$b*$c);
} else {
  pr('You took the blue pill :( ');
}
