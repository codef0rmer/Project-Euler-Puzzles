<?php
/**
 * Project Euler - Problem 5
 * Program Execution Time : 
 * Largest pallindrome :906609
 * real    0m4.419s
 * user    0m2.980s
 * sys     0m1.376s
 * 
 * @url http://projecteuler.net/index.php?section=problems&id=5
 * @date 21st July 2011 05:59 PM (IST)
 * @author codef0rmer <amit.2006.it@gmail.com>
 */
include 'global.php';

$i = 1;
while ($i < 2521) {
   if (evenlyDivisible($i) == true) {
       pr($i."\n");
       //break;
   }
   $i++;
}

function evenlyDivisible($n)
{
    $blnEvenlyDivisible = false;
    $arrDivident = range(1, 10);
    $cntArrDivident = count($arrDivident);
    for ($i = 0; $i < $cntArrDivident; $i++) {
        $mod = fmod($n, $arrDivident[$i]);
        if ($mod == 0 || ($mod > 0 && fmod($mod, 2) == 0)) {
            $blnEvenlyDivisible = true;
        } else {
            $blnEvenlyDivisible = false;
            break;
        }
    }
    return $blnEvenlyDivisible;
}
