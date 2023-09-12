<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Odd Checker</title>
    <style>
        <?php include "styles.css" ?>
    </style>
</head>
<body>
    <h1>Even Odd Checker</h1>

<!-- for taken user input -->
    <form method="POST" action="">
        <label>Enter a Number:</label>
        <input type="number" name="number" placeholder="Enter a number" required>
        <br>

        <button type="submit">Check</button>
    </form>

    <div id="display">
    <?php
    $number = "";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        // Check if the number is even or odd
        if ($number % 2 == 0) {
            $result = "The number $number is even.";
            echo "<p>$result</p>";
        } else {
            $result = "The number $number is odd.";
            echo "<p>$result</p>";
        }
    }
    ?>
    </div>

</body>
</html>
