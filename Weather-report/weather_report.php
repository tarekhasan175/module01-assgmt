<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
</head>
<body>
    <h1>Weather Report</h1>
    <style>
        <?php include "styles.css" ?>
    </style>

<!-- for taken user input -->
<form method="POST" action="">
        <label>Temperature:</label>
        <input type="number" name="temperature" placeholder="Enter temperature" required>
        <br>

        <button type="submit">Check</button>
    </form>

<!-- php code -->
    <div id="display">
    <?php
    // Define a variable to store the temperature
    $temperature = "";

    // Determine the weather message based on the temperature range
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $temperature = $_POST["temperature"];

        if ($temperature <= 10) {
            $message = "It's freezing!";
            echo "<p>$message</p>";
        } elseif ($temperature <= 20) {
            $message = "It's cool.";
            echo "<p>$message</p>";
        } else {
            $message = "It's warm.";
            echo "<p>$message</p>";
        }
    }
    ?>    
    </div>
</body>
</html>
