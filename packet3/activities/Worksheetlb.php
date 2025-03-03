<!DOCTYPE html>
<html>
<head>
    <title>Worksheet 01-B: Using Conditions and Loops</title>
</head>
<body>
<?php
// Define the side dimension of the square
$side = 10; // You can change this value to test (e.g., 0, 10, 21)

// Display the header
echo "<h1>Drawing Square</h1>";
echo "<h3>Size of square is $side</h3>";

// Check conditions and draw square if applicable
if ($side == 0) {
    echo "Size of square is from 1 to 20.";
} elseif ($side > 0 && $side <= 20) {
    // Outer loop for rows
    for ($row = 1; $row <= $side; $row++) {
        // Inner loop for columns
        for ($col = 1; $col <= $side; $col++) {
            // Print asterisk for a filled square
            echo "*";
            // Add non-breaking space between asterisks (except last column)
            if ($col < $side) echo "&nbsp;";
        }
        echo "<br>"; // New line after each row
    }
} else {
    echo "Square with side $side exceeds the side dimension.";
}
?>
</body>
</html>