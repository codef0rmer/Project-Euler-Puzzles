<?php
/**
 * Project Euler - Problem 3
 * Program Execution Time : 
 *  Sum is 4613732
 *  real    0m0.029s
 *  user    0m0.020s
 *  sys     0m0.008s
 * 
 * @url http://projecteuler.net/index.php?section=problems&id=3
 * @date 14th July 2011 05:58 PM (IST)
 * @author codef0rmer <amit.2006.it@gmail.com>
 */
include 'global.php';

$max = 288;
$arr = range(1, $max);
$cntArr = count($arr);
for ($i = 0; $i < $cntArr; $i++) {
    if (is_int($arr[$i]/3) || is_int($arr[$i]/5)) {
        $arrResult[] = $arr[$i];
    }
}
