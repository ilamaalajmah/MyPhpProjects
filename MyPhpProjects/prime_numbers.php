<?php 
//Create a PHP function that finds all prime numbers in a given range and displays them
function findPrimeNums($n) { 
    $isPrime = array_fill(2, $n, true); 
    for ($i = 2; $i * $i <= $n; $i++) { 
        if ($isPrime[$i]) { 
            for ($j = $i * $i; $j <= $n; $j += $i) { 
                $isPrime[$j] = false; 
            } 
        } 
    } 
    return array_keys(array_filter($isPrime)); 
} 
$start = 10; 
$end = 50; 
$primeNums = findPrimeNums($end); 
$primeNumsInRange = array_filter($primeNums,  
    function ($num) use ($start, $end) { 
        return $num >= $start && $num <= $end; 
    }); 
echo implode(', ', $primeNumsInRange); 
?>