<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
        <?php include "styles.css" ?>
    </style>
</head>
<body>
    <h1>Grade Calculator</h1>
<!-- for taken user input -->
    <form method="POST" action="">
        <label>Test Score 1:</label>
        <input type="number" name="score1" required>
        <br>

        <label for="score2">Test Score 2:</label>
        <input type="number" name="score2"required>
        <br>

        <label for="score3">Test Score 3:</label>
        <input type="number" name="score3" required>
        <br>

        <button type="submit">Calculate</button>
    </form>

<!-- php code-->

    <?php
    // Define variables to store test scores and the average
    $score1 = "";
    $score2 = "";
    $score3 = "";
    $average = "";
    $grade = "";

    // Function to calculate the average
    function calculateAverage($score1, $score2, $score3) {
        return ($score1 + $score2 + $score3) / 3;
    }

    // Function to determine the letter grade
    function determineGrade($average) {
        if ($average >= 90) {
            return "A";
        } elseif ($average >= 80) {
            return "B";
        } elseif ($average >= 70) {
            return "C";
        } elseif ($average >= 60) {
            return "D";
        } else {
            return "F";
        }
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score1 = $_POST["score1"];
        $score2 = $_POST["score2"];
        $score3 = $_POST["score3"];

        // Calculate the average
        $average = calculateAverage($score1, $score2, $score3);
        $average_2f = number_format($average, 2, '.', '');

        // Determine the letter grade
        $grade = determineGrade($average);
    }
    ?>

    <div id="display">
    <?php
    // Display the average and corresponding grade if available
    if (!empty($average) && !empty($grade)) {
        echo "<p>Average Score: $average_2f</p>";
        echo "<p>Grade: $grade</p>";
    }
    ?>

    </div>

</body>
</html>
