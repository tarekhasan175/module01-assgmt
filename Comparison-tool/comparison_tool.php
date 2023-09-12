<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <style>
        <?php include "styles.css" ?>
    </style>
</head>
<body>
    <h1>Comparison Tool</h1>

<!-- for taken input form user -->

    <form method="POST" action="">
        <label>Enter Number 1:</label>
        <input type="number" name="number1" placeholder="Enter a number" required>
        <br>

        <label>Enter Number 2:</label>
        <input type="number" name="number2" placeholder="Enter a number" required>
        <br>

        <button type="submit">Compare</button>
    </form>

<!-- php code -->
    <div id="display">
    <?php
    // Define variables to store user input
    $number1 = "";
    $number2 = "";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        // Use the ternary operator to determine the larger number
        $largerNumber = ($number1 > $number2) ? $number1 : $number2;
        echo "<p>The larger number is: $largerNumber</p>";
    }
    ?>
    </div>
</body>
</html>
