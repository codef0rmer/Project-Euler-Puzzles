<?php
/**
 * Project Euler - Problem 1
 * Program Execution Time : 
 *  Sum is 233168
 *  real    0m0.039s
 *  user    0m0.028s
 *  sys     0m0.008s
 * 
 * @url http://projecteuler.net/index.php?section=problems&id=1
 * @date 14th July 2011 05:34 PM (IST)
 * @author codef0rmer <amit.2006.it@gmail.com>
 */
include 'global.php';

$arr = range(1, 999);
$cntArr = count($arr);
for ($i = 0; $i < $cntArr; $i++) {
    if (is_int($arr[$i]/3) || is_int($arr[$i]/5)) {
        $arrResult[] = $arr[$i];
    }
}
pr('Sum is '.array_sum($arrResult));


