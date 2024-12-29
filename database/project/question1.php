Create a user-defined function in PHP, PHP function arguments, and various types for passing 
arguments in functions- call by value, call by reference.

<?php
// User-defined function example: A greeting function
function greetUser($name) {
    return "Hello, $name! Welcome to the PHP tutorial.";
}

// Example of calling the function
echo greetUser("Dependra") . "<br>";

// --- Function Arguments: Call by Value ---
function incrementValue($number) {
    $number++;
    return $number;
}

$value = 10;
echo "Before call by value: $value<br>";
$newValue = incrementValue($value);
echo "After call by value: $value (Original), $newValue (Returned)<br>";

// --- Function Arguments: Call by Reference ---
function incrementReference(&$number) {
    $number++;
}

$referenceValue = 10;
echo "<br>Before call by reference: $referenceValue<br>";
incrementReference($referenceValue);
echo "After call by reference: $referenceValue (Modified)<br>";

// --- Function with Default Arguments ---
function multiply($a, $b = 2) {
    return $a * $b;
}

echo "<br>Multiply 5 with default: " . multiply(5) . "<br>"; // Uses default value of $b = 2
echo "Multiply 5 and 3: " . multiply(5, 3) . "<br>"; // Override default value of $b

// --- Function with Variable-length Arguments ---
function addNumbers(...$numbers) {
    return array_sum($numbers);
}

echo "<br>Sum of 1, 2, 3: " . addNumbers(1, 2, 3) . "<br>";
echo "Sum of 4, 5, 6, 7, 8: " . addNumbers(4, 5, 6, 7, 8) . "<br>";

// --- Function with Mixed Data Types ---
function describeItem(string $name, float $price, bool $available) {
    $availability = $available ? "Available" : "Out of Stock";
    return "Item: $name, Price: $$price, Status: $availability";
}

echo "<br>" . describeItem("Laptop", 799.99, true) . "<br>";
echo describeItem("Tablet", 199.99, false) . "<br>";
?>
