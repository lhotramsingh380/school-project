<?php
// Function to calculate the factorial of a number
function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Main function
function mainFunction() {
    echo "Factorial of 5: " . factorial(5) . "\n";
}

mainFunction();
?>
