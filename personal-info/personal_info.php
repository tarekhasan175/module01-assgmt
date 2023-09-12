<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <style>
        <?php include "styles.css" ?>
    </style>
</head>
<body>
    <?php
    $name = "Tarek Hasan";
    $age = 21;
    $country = "Bangladesh";
    $introduction = "Hello, I am $name. I am $age years old and I live in $country.";

    // Display personal information
    echo "
    <div class='container'>
        <h1>Personal Information</h1>
        <div calss='info'>
            <h4>Name: $name</h4>
            <h4>Age: $age</h4>
            <h4>Country: $country</h4>
            <h4>Introduction: <P>$introduction</P></h4>
        </div>";
    ?>
    </div>
</body>
</html>
