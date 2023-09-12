<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <style>
        <?php include "styles.css" ?>
    </style>
</head>
<body>
    <h1>Temperature Converter</h1>

    <form method="POST" action="">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" name="temperature" required>
        <br>

        <label for="conversion_type">Select Conversion:</label>
        <select name="conversion_type" required>
            <option>Please select a conversion</option>
            <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
        </select>
        <br>

        <button type="submit">Convert</button>
    </form>

    <div id="display">
    <?php
    // Define variables to store user input and converted temperature
    $temperature = "";
    $converted_temperature = "";

    // Define a function to convert Celsius to Fahrenheit
    function celsiusToFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }

    // Define a function to convert Fahrenheit to Celsius
    function fahrenheitToCelsius($fahrenheit) {
        return ($fahrenheit - 32) * 5/9;
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        $conversion_type = $_POST["conversion_type"];

        if ($conversion_type == "celsius_to_fahrenheit") {
            $converted_temperature = celsiusToFahrenheit($temperature);
            echo "<p>Converted Temperature: $converted_temperature</p>";
        } elseif ($conversion_type == "fahrenheit_to_celsius") {
            $converted_temperature = fahrenheitToCelsius($temperature);
            echo "<p>Converted Temperature: $converted_temperature</p>";
        }else{
            echo "<p>Please select a conversion.</p>";
        }
    }
    ?>

    </div>
</body>
</html>


