<?php
/*Implement a PHP function that checks if a given string is a palindrome 
 (reads the same forwards and backwards) while ignoring spaces, punctuation, and capitalization.
*/
function Palindrome($string){  
    if (strrev($string) == $string){  
        return 1;  
    }
    else{
        return 0;
    }
}  
 
// Driver Code
$original = "DAD"; 
if(Palindrome($original)){  
    echo "Palindrome";  
} 
else {  
echo "Not a Palindrome";  
}
?>  
