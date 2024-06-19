<?php
/* Create a PHP function (Laravel way) that generates a Fibonacci sequence of a specified length. 
Explain whether you would use recursion or iteration for this task, and provide your implementation.
*/
function fibonacci(int $length): array
{
    $sequence = [0, 1];

    if ($length <= 2) {
        return array_slice($sequence, 0, $length);
    }
    while (count($sequence) < $length) {
        $sequence[] = end($sequence) + prev($sequence);
    }

    return $sequence;
}
$fibonacciSequence = fibonacci(10);
print_r($fibonacciSequence);
?>
