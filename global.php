<?php
function pr($arr)
{
    echo '<pre>'; 
    print_r($arr);
    echo '</pre>';
}	

function isPrime($number)
{
    $sqrt = (int) sqrt($number);
    for ($divident = 2; $divident <= $sqrt; $divident++) {
       if (($number % $divident) != 0) {
           continue;
       } else {
           return false;
       }
    }
    return true;
}
