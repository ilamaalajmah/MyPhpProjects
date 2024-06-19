<?php
/* 
Write a PHP function that finds the maximum and minimum values in the array. Explain the time complexity of your solution.
*/
function getMax($array) 
{
   $n = count($array); 
   $max = $array[0];
   for ($i = 1; $i < $n; $i++) 
       if ($max < $array[$i])
           $max = $array[$i];
    return $max;       
}
function getMin($array) 
{
   $n = count($array); 
   $min = $array[0];
   for ($i = 1; $i < $n; $i++) 
       if ($min > $array[$i])
           $min = $array[$i];
    return $min;       
}
$array = array(1, 2, 3, 4, 5);
echo(getMax($array));
echo("\n");
echo(getMin($array));
?>