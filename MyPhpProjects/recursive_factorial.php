<?php
/* 
Write a PHP function that calculates the factorial of a given positive integer 
using a recursive function. Ensure that your code handles edge cases, such as when the input is 0.
*/
function factorial($n)
{
    if ($n == 0){
        return 1;
    }
    else{
        return $n * factorial($n - 1);
    }
}
print_r(factorial(4)."\n");
?>
