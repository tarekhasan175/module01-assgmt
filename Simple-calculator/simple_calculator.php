<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    <style>
        <?php include "styles.css" ?>
    </style>
</head>
<body>
    <div class="container">
        <h1>Basic Calculator</h1>

    <!-- for taken input form user -->

        <form method="POST" action="">
            <input type="number" name="num1" placeholder="Enter first number"><br>
            <input type="number" name="num2" placeholder="Enter second number"><br>
            <select name="operation">
                <option>Please select Operation</option>
                <option value="add">Addition</option>
                <option value="subtract">subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
            </select><br>
                <button type="submit">Calculate</button>
        </form>
        <div id="display">
        <!-- php code -->
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];
                    $operation = $_POST["operation"];

                    switch($operation){
                        case "add":
                            $result = $num1 + $num2;
                            echo "<p>Result : $result</p>";
                            break;
                        case "subtract":
                            $result = $num1 - $num2;
                            echo "<p>Result : $result</p>";
                            break;
                        case "multiply":
                            $result = $num1 * $num2;
                            echo "<p>Result : $result</p>";
                            break;
                        case "divide":
                            if($num2 != 0){
                                $result = $num1 / $num2;
                                echo "<p>Result : $result</p>";
                            }else{
                                echo "<p>Cannot divide by zero</p>";
                            }
                            break;
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>