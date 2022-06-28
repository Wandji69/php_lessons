<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each lesson</title>
</head>

<body>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="message.php">Contact</a></li>
    </ul>
    <?php

    $_SESSION['username'] = "Collins";
    echo $_SESSION['username'];

    if (!isset($_SESSION['username'])) {
        echo "You are not Logged in";
    } else {
        echo "You are Logged in";
    }
    // $array = array("Collins", "John", "Teke");

    # Working with For each Loops to loop over array data
    // foreach ($array as $key => $value) {
    //     echo "My name is " . $value . "<br>";
    // }

    ?>
</body>

</html>