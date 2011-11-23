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
while ($i) {
   if (evenlyDivisible($i) == true) {
     pr($i."\n");
     break;
   }
   $i++;
}

function evenlyDivisible($n)
{
    $blnEvenlyDivisible = false;
    $arrDivident = array(1,2,3,4,5,6,7,8,9,10,11,12,13); //,11,13,17,19);
    $cntArrDivident = sizeof($arrDivident);
    for ($i = 0; $i < $cntArrDivident; $i++) {
        if ($arrDivident[$i] != '') {
            $mod = fmod($n, $arrDivident[$i]); 
            if ($mod == 0) {
                $blnEvenlyDivisible = true;
                if ($arrDivident[$i] == 2) {
	           unset($arrDivident[3], $arrDivident[5], $arrDivident[7], $arrDivident[9], $arrDivident[11]);
	        } elseif ($arrDivident[$i] == 3) {
	           unset($arrDivident[8]);
	        }
            } else {
                $blnEvenlyDivisible = false;
                break;
            }
	}
    }
    return $blnEvenlyDivisible;
}
