<?php
/* Implement a PHP function that converts a given decimal number into its binary representation using bitwise operators.
 Explain the bitwise operations used in your code:
 And The Explanation of Bitwise Operations Used
 1-The expression `($n & 1)` is used to extract the least significant bit of $n.
 2-The expression` $n = $n >> 1` shifts all bits of $n to the right by one position.
*/
function decimalToBinary($n) {
    $binary = ''; 
    while ($n > 0) {
        $binary = ($n & 1) . $binary;
        $n = $n >> 1;
    }
    if ($binary === '') {
        $binary = '0';
    }
    
    return $binary;
}
echo decimalToBinary(10); 
?>
