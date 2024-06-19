<?php
/* Create a PHP function (Laravel way) that generates a Fibonacci sequence of a specified length. 
Explain whether you would use recursion or iteration for this task, and provide your implementation.
*/
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function generateFibonacci($length)
    {
        // Validate input
        if ($length <= 0) {
            return response()->json([]);
        }
        
        // Initialize the Fibonacci sequence array
        $fibonacci = [0, 1];
        
        // Generate the Fibonacci sequence
        for ($i = 2; $i < $length; $i++) {
            // Calculate the next Fibonacci number
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
        
        return response()->json($fibonacci);
    }
}
